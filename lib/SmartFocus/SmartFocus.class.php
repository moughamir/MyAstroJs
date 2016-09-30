<?php
class SmartFocus
{
    protected $login    = 'kg_api';
    protected $password = '#1oc7q2MoK8v95mKfI6TmEATZj3mz3MM1';
    protected $apiKey   = 'CdX7CrpN6m6OgUk3e-0ZmrSxVyULYt62ygjsATuVqXDhxg';
    protected $wsdl     = 'https://emvapi.emv3.com/apimember/services/MemberService?wsdl';
    protected $token;
    protected $jobId;
    protected $bdd;
    public $service;
    public $compteur;
    
    const STATUS_OK     = 'Job_Done_Or_Does_Not_Exist';
    const STATUS_ERROR  = 'Error';
    const TABLE_TASKS   = 'emv_tasks';
    const TABLE_USERS   = 'ag_users';
    const TABLE_ERRORS  = 'emv_errors';

    public function __construct($bdd, Compteur $compteur){
        $this->bdd = $bdd;
        $this->compteur = $compteur->get();
        $this->service = new SoapClient($this->wsdl, array(
            // Stuff for development. 
            'trace' => 1, 
            'exceptions' => true, 
            'cache_wsdl' => WSDL_CACHE_NONE
        ));
        
        try {
            $token = $this->service->openApiConnection(array('login'=>$this->login, 'pwd'=>$this->password, 'key' => $this->apiKey));
            $this->token = $token->return;
        } catch(SoapFault $e){
            $this->error($e);
            return false;
        }
    }
    
    public function descMemberTable(){
        try {
            return $this->service->descMemberTable(array('token'=>$this->token))->return->fields;
        } catch (SoapFault $e){
            $this->error($e);
            return false;
        }
    }

    public function getMemberByEmail($email){
        if (!$email){
            return;
        }
        try {
            return $this->service->getMemberByEmail(array('token'=>$this->token,'email' => $email))->return->attributes->entry;
        } catch (SoapFault $e){
            $this->error($e);
            return false;
        }
    }

    public function getMemberById($idMember){
	try {
            return $this->service->getMemberById(array('token'=>$this->token,'id' => $idMember))->return->attributes->entry;
        } catch (SoapFault $e){
            $this->error($e);
            return false;
        }
    }

    public function insert($email, $infos){
        $entry = array();
        foreach($infos as $key => $value){
            $entry[] = array('key' => $key, 'value' => $value);
        }
        try {
            $this->jobId = $this->service->insertMemberByObj(array('token'=>$this->token, 'member'=>array('email' => $email,'dynContent'=>$entry)))->return;
            $this->addTask($email);
            return $this->jobId;
        } catch (SoapFault $e){
            $this->error($e);
            return false;
        }
    }

    public function updateMember($email, $phone){ 
        try {
            $this->jobId = $this->service
                                ->updateMember(array('token'=>$this->token,'email'=>$email,'field'=>'EMVCELLPHONE','value'=>$phone))
                                ->return;
            $this->addTask($email);
            
            return $this->jobId;
        } catch (SoapFault $e) {
            $this->error($e);
            return false; 
        }
    }

    public function getStatus($job){	
        try {
            $response = $this->service->getMemberJobStatus(array('token'=>$this->token, 'synchroId'=>$job))->return->status;
            return $response;
        } catch(Exception $e){
            $response = self::STATUS_ERROR;
            return $response;
        }	
    }

    public function is_ok($job){
        return ( $this->getStatus($job) == self::STATUS_OK) ? true : false;
    }

    private function error($e, $email = ''){
        $this->bdd->insert(self::TABLE_ERRORS,
            array(
                'email' => $email,
                'date'  => date('Y-m-d H:i:s'),
                'text' => $e
            )
        );
        return;
    }

    public function addTask($email){
        return $this->bdd->insert(self::TABLE_TASKS,
            array(
                'jobId' => $this->jobId,
                'email' => $email,
                'date'  => date('Y-m-d H:i:s')
            )
        );
    }

    public function processTask(){
        $query =  'SELECT * FROM '.self::TABLE_TASKS;
        $results = $this->bdd->get_results($query);
        foreach ($results as $res){   
            if ($this->is_ok($res->jobId)){
                $this->deleteTask($res->jobId);
            } else {
                if ($this->getStatus($res->jobId) == self::STATUS_ERROR){
                    $this->renewInsert($res->email);
                    $this->deleteTask($res->jobId);
                }
            }
        }
        die('OK');
    }

    public function deleteTask($jobId){
        return $this->bdd->query('DELETE FROM '.self::TABLE_TASKS.' WHERE jobId ="'.$jobId.'"');
    }

    public function renewInsert($email){
        $user = $this->bdd->get_row('SELECT * FROM '.self::TABLE_USERS.' WHERE  email = "'.$email.'"');

        if ($user && !empty($user)){
            $d = substr($user->dateNaissance,-2,2);
            $m = substr($user->dateNaissance,5,2);
            $y = substr($user->dateNaissance,0,4);
            $birthDate = $m.'/'.$d.'/'.$y;
            $infos = array(
                'DATEJOIN'        => substr($user->history,0,10),
                'DATEMODIF'       => date('m/d/Y'),
                'SOURCE'          => $user->source,
                'CLIENTURN'       => $user->questionContent,
                'DATEOFBIRTH'     => $user->dateNaissance,
                'SEED3'           => $user->signeAstrologique,
                'FIRSTNAME'       => $user->prenom,
                'EMVCELLPHONE'    => intval($user->tel),
                'NUMEROTELEPHONE' => $user->tel,
                'TITLE'           => $user->sexe,
                'CODE'            => base_convert($user->internal_id, 10, 32),
                'FIRSTNAME2'      => ( isset($user->conjoint) ) ? $user->conjoint : '',
                'GROUPE_FLAG_5'   => $this->compteur['flag5'],
                'GROUPE_FLAG_7'   => $this->compteur['flag7'],
                'GROUPE_FLAG_15'  => $this->compteur['flag15'],
                'GROUPE_FLAG_30'  => $this->compteur['flag30']
            );

            $entry = array();
            foreach($infos as $key => $value){
                $entry[] = array('key' => $key, 'value' => $value);
            }

            try {
                $this->jobId = $this->service->insertMemberByObj(array('token'=>$this->token, 'member'=>array('email' => $email,'dynContent'=>$entry)))->return;
                $this->addTask($email);
                return true;
            } catch (SoapFault $e){
                $this->error($e);
            }
        } else {
            // Pas de user. On ne fait rien, on a supprimé la tâche. L'inscription s'est mal passé.
        }
    }

}