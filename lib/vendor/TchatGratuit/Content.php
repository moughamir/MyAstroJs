<?php
/**
 * Created on : 1 juin 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */

namespace TchatGratuit;

class Content extends ScenarioPart
{
    function __construct($bdd, Decorator $decorator, $scenario, $reserve_scenario)
    {
        parent::__construct($bdd, $decorator, $scenario, $reserve_scenario, parent::TABLE_CONTENT);
    }
}