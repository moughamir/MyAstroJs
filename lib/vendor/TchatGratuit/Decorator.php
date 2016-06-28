<?php
/**
 * Created on : 1 juin 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */

namespace TchatGratuit;

class Decorator
{
    protected $data = array();
    
    
    public function __construct($data = array())
    {
        foreach($data as $key => $value){
            $this->addData($key, $value);
        }
    }
    
    public function addData($key, $data)
    {
        $this->data[$key] = $data;
    }
    
    public function decorate($msg)
    {
        $msg = $this->replaceUserData($msg);
        $msg = $this->replacePsychicData($msg);
        $msg = $this->replaceFormData($msg);
        $msg = $this->replaceGender($msg);
        
        return $msg;
    }
    
    protected function replaceUserData($msg)
    {
        $msg = str_replace('[NAME]', ucfirst($this->data['user']['firstname']), $msg);
        $msg = str_replace('[DATE]', $this->data['user']['birthdate'], $msg);
        $msg = str_replace('[NAME2]', ucfirst($this->data['user']['spouse_firstname']), $msg);
        $msg = str_replace('[CODE]', '<b class="codeastro">'.$this->data['user']['code'].'</b> (Faites attention aux majuscules et minuscules !)', $msg);
        
        return $msg;
    }
    
    protected function replacePsychicData($msg)
    {
        $msg = str_replace('[SEER]', ucfirst($this->data['psychic']->seer_name), $msg);
        $msg = str_replace('[SPECIALITY]', $this->data['psychic']->speciality, $msg);
        $msg = str_replace('[TEL]', $this->data['psychic']->tel, $msg);
        $msg = str_replace('[TARIF]', $this->data['psychic']->price.' &euro;', $msg);
        
        return $msg;
    }
    
    protected function replaceFormData($msg)
    {
        // cartes
        for($i=0; $i<5; $i++){
            $msg = str_replace('[TAROT'.($i+1).']', $this->data['tracking']['cards'][$i], $msg);
        }
        
        // formulaire de rappel
        $form_rappel = '
            <form action="" id="rappel">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="phone" value="'.$this->data['user']['phone'].'" pattern="(\+?\d[- .]*){10,18}" required />
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Rappel Gratuit !</button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <input type="hidden" name="data" value="'.htmlentities(serialize($this->data)).'" />
            </form>';
        $msg = str_replace('[RAPPEL]', $form_rappel, $msg);
        
        return $msg;
    }
    
    protected function replaceGender($msg)
    {
        $regex_s = "#\[s\[([\w'?’?\s?]+)\|([\w'?’?\s?]+)\]s\]#u"; // déclinaisons dans balises [s] voyant
        $regex_u = "#\[u\[([\w'?’?\s?]+)\|([\w'?’?\s?]+)\]u\]#u"; // déclinaisons dans balises [u] client
        $regex_c = "#\[c\[([\w'?’?\s?]+)\|([\w'?’?\s?]+)\]c\]#u"; // déclinaisons dans balises [c] conjoint
        
        if($this->data['psychic']->seer_sexe == 'M'){
            $msg = preg_replace($regex_s, '$1', $msg);
        } else {
            $msg = preg_replace($regex_s, '$2', $msg);
        }
        if($this->data['user']['gender'] == 'M'){
            $msg = preg_replace($regex_u, '$1', $msg);
            $msg = preg_replace($regex_c, '$2', $msg);
        } else {
            $msg = preg_replace($regex_u, '$2', $msg);
            $msg = preg_replace($regex_c, '$1', $msg);
        }
        
        return $msg;
    }
}
