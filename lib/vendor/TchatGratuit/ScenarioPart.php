<?php
/**
 * Created on : 1 juin 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */

namespace TchatGratuit;

abstract class ScenarioPart
{
    const TABLE_INTRO = 'tchat_intro';
    const TABLE_CONTENT = 'tchat_content';
    const TABLE_CONCLUSION = 'tchat_conclusion';
    const TABLE_MESSAGES = 'tchat_messages';
    const TABLE_SCENARIO = 'tchat_groups';
    const TABLE_PSYCHICS = 'tchat_scenario';
    
    protected $bdd;
    protected $decorator;
    protected $scenario;
    protected $reserve_scenario;

    protected $part_table;
    protected $part;
    protected $messages = array();
    
    
    public function __construct($bdd, Decorator $decorator, $scenario, $reserve_scenario, $part_table)
    {
        $this->bdd = $bdd;
        $this->decorator = $decorator;
        $this->scenario = $scenario;
        $this->reserve_scenario = $reserve_scenario;
        $this->part_table = $part_table;
        
        $this->build();
    }
    
    public function build()
    {
        $this->getRandomPart();
        $this->buildMessages();
    }
    
    protected function getRandomPart()
    {
        $req = 'SELECT * FROM '.$this->part_table.' WHERE id_group=%s ORDER BY RAND() LIMIT 1';
        
        $req1 = $this->bdd->prepare($req, $this->scenario->id);
        $part = $this->bdd->get_row($req1);
        
        if($part == null){
            $req2 = $this->bdd->prepare($req, $this->reserve_scenario->id);
            $part = $this->bdd->get_row($req2);
        }
        
        $this->part = $part;
    }
    
    protected function buildMessages()
    {
        $req = $this->messagesRequest();
        $this->messages = $this->bdd->get_results($req, 'ARRAY_A');
        
        $this->messagesDecorate();
    }
    
    protected function messagesRequest()
    {
        return 'SELECT * FROM '.self::TABLE_MESSAGES.' WHERE id_content='.$this->part->id.' AND type="'.$this->getMessageType().'"';
    }
    
    protected function getMessageType()
    {
        $association = array(
            self::TABLE_INTRO      => 'intro',
            self::TABLE_CONTENT    => 'content',
            self::TABLE_CONCLUSION => 'conclusion'
        );
        
        return $association[$this->part_table];
    }
    
    protected function messagesDecorate()
    {
        for($i=0; $i<count($this->messages); $i++){
            $this->messages[$i]['base_text'] = $this->messages[$i]['text'];
            $this->messages[$i]['text'] = $this->decorator->decorate($this->messages[$i]['text']);
        }
    }
    
    public function getMessages()
    {
        return $this->messages;
    }
    
    public function getId()
    {
        return $this->part->id;
    }
}
