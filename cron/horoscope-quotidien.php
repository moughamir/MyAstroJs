<?php
ini_set('max_execution_time', 0);
include('lib.php');

for ($i=0,$n=count($A_SIGNE);$i<$n;$i++)
{
  $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_'.$A_SIGNE[$i].'.xml');

$s_contenu = '<tr>
            <td height="25" valign="top" width="650">
			<table border="0" cellpadding="0" cellspacing="0" width="650">

                <tbody>
                  <tr>
<td height="25" width="18"></td>

 <td style="font-family: Arial,Helvetica,sans-serif; font-size: 18px; color: rgb(171, 171, 171); text-align: justify; padding-top: 6px; font-weight: bold;" align="left" height="25" valign="top" width="180"><p>AMOUR ...</p></td>
<td height="25" width="28"></td>

 <td style="font-family: Arial,Helvetica,sans-serif; font-size: 18px; color: rgb(76, 152, 220); text-align: justify; padding-top: 6px; font-weight: bold;" align="left" height="25" valign="top" width="182"><p>ARGENT ...</p></td>
 
<td height="25" width="22"></td>

 <td style="font-family: Arial,Helvetica,sans-serif; font-size: 18px; color: rgb(217, 77, 182); text-align: justify; padding-top: 6px; font-weight: bold;" align="left" height="25" valign="top" width="201"><p>TRAVAIL ...</p></td>
<td height="25" width="19"></td>

                  </tr>
                </tbody>
              </table>
            </td></tr>
          <tr>
            <td height="80" valign="top" width="650"><table border="0" cellpadding="0" cellspacing="0" width="650"><tbody><tr>
<td height="80" width="18"></td>';
  foreach ($xml1['desc'] as $s_cle=>$s_value)
  {
  
    
	if ($s_cle==='amour')
	{
			$s_contenu.='<td style="font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(0, 0, 0); text-align: justify; padding-top: 2px;" align="left" height="80" valign="top" width="180"><p>'.substr($s_value, 0, 160).'...</p></td><td height="80" width="28"></td>';
        $lien_amour = $A_SIGNE[$i];
	}
	elseif ($s_cle==='argent')
	{
			$s_contenu.='<td style="font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(0, 0, 0); text-align: justify; padding-top: 2px;" align="left" height="80" valign="top" width="182"><p>'.substr($s_value, 0, 160).'...</p></td><td height="80" width="22"></td>';
        $lien_argent = $A_SIGNE[$i];
	}
	elseif ($s_cle==='travail')
	{
		$s_contenu.='<td style="font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(0, 0, 0); text-align: justify; padding-top: 2px;" align="left" height="80" valign="top" width="201"><p>'.substr($s_value, 0, 160).'...</p></td><td height="80" width="19"></td>';
        $lien_travail = $A_SIGNE[$i];
	}
	
	
	
	
  }
  $s_contenu.= '</tr></tbody></table>';
  
  $s_contenu.= '</td></tr><tr><td height="31" valign="top" width="650"><table border="0" cellpadding="0" cellspacing="0" width="650"><tbody><tr>                   
                    <td align="left" valign="top" width="650"><a href="http://'.ROOT_URL.'/horoscope-du-jour-'.$lien_amour.'"><img src="http://'.ROOT_URL.'/images/mail/horoscope_jour/News-horoscope_13.jpg" alt="" style="display: block;" border="0" height="31" width="216"></a></td> 
                    <td align="left" valign="top" width="650"><a href="http://'.ROOT_URL.'/horoscope-du-jour-'.$lien_argent.'"><img src="http://'.ROOT_URL.'/images/mail/horoscope_jour/News-horoscope_14.jpg" alt="" style="display: block;" border="0" height="31" width="217"></a></td> 
                                        <td align="left" valign="top" width="650"><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-du-jour-'.$lien_travail.'"><img src="http://'.ROOT_URL.'/images/mail/horoscope_jour/News-horoscope_15.jpg" alt="" style="display: block;" border="0" height="31" width="217"></a></td> 
                    </tr>
                </tbody>
              </table>';
  
  //echo'<pre>ok ';var_dump($s_contenu);echo'</pre>';exit;
  $s_dossier=S_PATH_CACHE.'/horoscope-quotidien/'.date('Ymd').'/';
  if (!is_dir($s_dossier))
    mkdir($s_dossier,0777,true);
  file_put_contents($s_dossier.$A_SIGNE[$i], $s_contenu);
}
