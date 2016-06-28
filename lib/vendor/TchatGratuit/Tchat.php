<?php
/**
 * Created on : 31 mai 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */

namespace TchatGratuit;

Class Tchat {
    
    const TABLE_SCENARIO = 'tchat_groups';
    const TABLE_MESSAGES = 'tchat_messages';
    const TABLE_PSYCHICS = 'tchat_scenario';
    const TABLE_STATS    = 'tchat_stats';
    
    const ENABLE  = 1;
    const DISABLE = 0;
    const DRAFT   = 2;
    
    const ACCESS_DAY_DELAY = 14;

    public $bdd;
    public $decorator;
    public $testmode;
    public $include_form_dri;
    
    public $user;
    public $tracking;
    public $psychic;

    protected $scenario;
    protected $reserve_scenario;
    protected $intro;
    protected $content;
    protected $conclusion;
    protected $messages = array();
    protected $stats;

    
    public function __construct($bdd, $user, $tracking, $testmode = false, $include_form_dri = true)
    {
        $this->bdd       = $bdd;
        $this->bdd->query("SET NAMES 'utf8'");
        $this->testmode  = $testmode;
        $this->include_form_dri = $include_form_dri;
        
        $this->user      = $user;
        $this->tracking  = $tracking;
        
        $this->decorator = new Decorator(['user' => $this->user, 'tracking' => $this->tracking]);
    }
    
    public function process()
    {
        $this->selectPsychic();
        if($this->canStart()){
            $this->buildScenario();
            $this->buildMessages();
            $this->addCookie();
            $this->saveStats();
        }
    }
    
    public function canStart()
    {
        if (!isset($_COOKIE['tchat']) || $_COOKIE['tchat'] != 1  || $this->testmode) {
            return true;
        } else { 
            return false;
        }
    }
    
    private function selectPsychic()
    {
        $req = 'SELECT * FROM '.self::TABLE_PSYCHICS.' WHERE status='.self::ENABLE.' AND `support` = "'.$this->tracking['theme'].'"';
        
        if(!empty($this->tracking['psychic'])){
            $req .= ' AND seer_name = "'.$this->tracking['psychic'].'"';
        } else {
            $req .= ' ORDER BY RAND()';
        }
        $req .= ' LIMIT 0, 1';
        
        $this->psychic = $this->bdd->get_row($req);
        $this->decorator->addData('psychic', $this->psychic);
    }
    
    private function buildScenario()
    {
        $this->findScenarios();
        
        $this->intro = new Intro($this->bdd, $this->decorator, $this->scenario, $this->reserve_scenario);
        $this->content = new Content($this->bdd, $this->decorator, $this->scenario, $this->reserve_scenario);
        $this->conclusion = new Conclusion($this->bdd, $this->decorator, $this->scenario, $this->reserve_scenario, $this->include_form_dri);
    }
    
    private function findScenarios()
    {
        $req = 'SELECT * FROM '.self::TABLE_SCENARIO.' WHERE support ="'.$this->tracking['theme'].'" AND `trigger` LIKE "%%%s"';
        $trigger = $this->getTrigger();
        
        $req1 = sprintf($req, $trigger);
        $this->scenario = $this->bdd->get_row($req1);
        
        $req2 = $this->bdd->prepare($req, 'ALL');
        $this->reserve_scenario = $this->bdd->get_row($req2);
    }
    
    private function getTrigger()
    {
        $trigger = substr($this->tracking['question'], strpos($this->tracking['question'], 'question_'));
        
        return $trigger;
    }
    
    private function buildMessages()
    {
        $this->messages['intro'] = $this->intro->getMessages();
        $this->messages['content'] = $this->content->getMessages();
        $this->messages['conclusion'] = $this->conclusion->getMessages();
    }

    public function getFlattenMessages()
    {
        $conversation = array();
        foreach($this->messages as $part){
            foreach($part as $msg){
                $conversation[] = $msg['text'];
            }
        }
        
        return $conversation;
    }
    
    protected function addCookie()
    {
        if(!isset($_COOKIE['tchat']) || $_COOKIE['tchat'] != 1) {
            $delay = self::ACCESS_DAY_DELAY * 24 * 3600;
            setcookie('tchat', 1, time()+$delay);
        }
    }
    
    protected function saveStats()
    {
        $this->bdd->insert(
            self::TABLE_STATS,
            array (
                'date'          => date('Y-m-d H:i:s', time()),
                'id_scenario'   => $this->psychic->id,
                'id_intro'      => $this->intro->getId(),
                'id_content'    => $this->content->getId(),
                'id_conclusion' => $this->conclusion->getId(),
                'id_user'       => $this->user['ID']
            )
        );
    }
    
    public function getPsychicName()
    {
        return ucfirst($this->psychic->seer_name);
    }
    
    public function getPsychicGender()
    {
        return $this->psychic->seer_sexe;
    }
    
    public function getPsychicPrice()
    {
        return $this->psychic->price;
    }
    
    public function getPsychicPhotoName()
    {
        $name = strtolower($this->psychic->seer_name);
        $name = str_replace('&eacute;', 'e', $name);
        
        return $name;
    }
    
    public function getCodePromo()
    {
        return $this->user['code'];
    }
}