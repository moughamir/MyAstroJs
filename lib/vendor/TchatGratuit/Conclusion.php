<?php
/**
 * Created on : 1 juin 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */

namespace TchatGratuit;

class Conclusion extends ScenarioPart
{
    private $include_form_dri = true;
    
    function __construct($bdd, Decorator $decorator, $scenario, $reserve_scenario, $include_form_dri = true)
    {
        $this->include_form_dri = $include_form_dri;
        parent::__construct($bdd, $decorator, $scenario, $reserve_scenario, parent::TABLE_CONCLUSION);
    }
    
    function messagesRequest()
    {
        $req = parent::messagesRequest();
        
        if(!$this->include_form_dri){
            $req .= ' AND form_dri=0';
        }
        
        return $req;
    }
}