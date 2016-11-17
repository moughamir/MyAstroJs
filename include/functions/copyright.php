<?php
/**
 * Created by PhpStorm
 * User: Mohamed Moughamir <moughami@gmail.com>
 * @param string $year
 * @return false|int|string
 */
function copyright($year = ''){
    if (intval($year) == 'auto'){
        $year = date('Y');
    } if (intval($year) == date('Y')){
        return intval($year);
    } if (intval($year) < date('Y')){
        return intval($year).' - '.date('Y');
    }if (intval($year) > date('Y')){
        return date('Y');
    }
}