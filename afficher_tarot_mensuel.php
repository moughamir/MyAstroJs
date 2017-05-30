<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Tarot mensuel : tous les mois, des tirages de cartes</title>
	<meta name="description" content="Le Tarot est une technique de longue date qui permet d'interpréter des cartes tirées pour votre vie et pour répondre à vos questionnements." />
<?php include('include/header_inc.php'); ?>


    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                           <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li><h4 class="h4"><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li><li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-gratuit">Tarot gratuit</a></li><i class="icon-caret-right icon-fixed-width"></i>
                                        <li>Tarot mensuel</h4></li>
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Tarot mensuel</h1>
                        
                    </div>

    </br>                         

                            </header>

                            <span class="clearfix"></span>

 <div class="row-fluid">
       <!-- Right sidebar -->
							<?php include('include/bloc-droit-secondaire.php'); ?>	
				
            <!-- main content -->
            <div class="span6 main-content">

               

                <!-- Slider -->
                <section class="pic-slider">
                    <h2 class="hidden">Slider images</h2>

                  
				   <!---------------- Début Iframe tirage tarot ---->
<?php

//require('header.php');
$signes=array('1'=>'Bélier','2'=>'Taureau', '3'=>'Gémeaux', '4'=>'Cancer', '5'=>'Lion', '6'=>'Vierge', '7'=>'Balance', '8'=>'Scorpion', '9'=>'Sagittaire', '10'=>'Capricorne', '11'=>'Verseau', '12'=>'Poissons');



//session_destroy();
//die();

//$page='tarot.php';
//$page='hebdo_tarot.php';
$page='tarot_mensuel.php';
// $page='tarot_couple.php';
$prenom_autre='Nicole';

$echo=$header.'<div class="wrapper">
				   <section class="cat-widget h-cat-1"> <div class="cat-widget-title">
                        <a href="#">
                            <h3 style="color:red;">Cliquez sur la carte centrale pour découvrir la carte-synthèse</h3>
                        </a>
                    </div>
				   <!---------------- Début Iframe tirage tarot ---->';

function Request($prenom='Nico',$card_n=true)
{
	global $page;
	if($card_n==0)
		return RequestQuot($prenom,$card_n);
	elseif($page=='tarot.php')
	{
		return RequestQuot($prenom,$card_n);
	}
	elseif($page=='hebdo_tarot.php')
	{
		return RequestHebdo($prenom,$card_n);
	}
	elseif($page=='tarot_mensuel.php')
	{
		return RequestMens($prenom,$card_n);
	}
	elseif($page=='tarot_couple.php')
	{
		return RequestCouple($prenom,$card_n);
	}
}

function RequestCouple($prenom,$card_n)
{
	global $page;
	if(!isset($id))
		$id=$_SESSION['id'];
	
	$nn=0;
	if($card_n==5)
		$nn=999;
	$url= $page.'?ID='.$id.'&nn='.$nn.'&sequence='.$card_n.'';
	
	if($card_n==4)
	{
		global $prenom_autre;
		$doo = array(
		'prenom' => "$prenom_autre",
		'nn'=>'555',
		'ID'=>'1637045146',
		'sequence'=>5,
		'submit' => "" );
		$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
		$result=http_fetch_url('http://www.asiaflash.com/tarot/'.$page,$doo);
		print_r($result);
		die();
	}
	else
		$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
	$result=explode('<a href="tarot_couple.php?ID=',$result);
	// if($card_n==1)
	// {
		// print_r($result);
		// die();
	// }
	unset($result[0]);
	$result=$result[1];
	$result=explode("<td></td>
</tr>
</table>",$result);
	$result=$result[0];
	$i=0;
	$result=explode('<td><img src="arcanes/',$result);
	if($card_n==3)
	{
		$index=array(1=>1,2=>2,3=>3,4=>3,5=>2);
	}
	elseif($card_n==2)
	{
		unset($result[0]);
		$index=array(1=>1,2=>2,3=>0,4=>3,5=>2);
		// print_r($result);
		// die('<br/><br/><br/>'.$url);
	}
	elseif($card_n==4)
	{
		$index=array(1=>1,2=>3,3=>0,4=>3,5=>2);
	}
	//$result=explode(' border="0"></td>',$result[0]);
	else
		$index=array(1=>1,2=>3,3=>0,4=>4,5=>2);
	if($card_n==3)
	{
		// print_r($result);
		// die();
	}
	$result=explode('alt="',$result[$card_n]);
	$result=explode('- ',$result[1]);
	$result=$result[0];
	//die($result);
	$result=(int)$result;
	return $result;
}
function RequestReponseCouple()
{
	global $page;
	if(!isset($id))
		$id=$_SESSION['id'];
	$url='http://www.asiaflash.com/tarot/'.$page.'?ID='.$id.'&step='.$seq.'&nn=999#0';
	$result=http_fetch_url_get($url);
	$result2=explode('.gif" alt="',$result);
	$result2=explode('"',$result2[1]);
	$result1=explode('<font class="textenormal">',$result);
	$result1=explode('</font>',$result1[1]);
	$result=$result2[0].'=>'.$result1[0];
	return $result;
}

function RequestReponse($seq)
{
	global $page;
	if($page=='tarot.php')
	{
		return RequestReponseQuot($seq);
	}
	elseif($page=='hebdo_tarot.php')
	{
		return RequestReponseHebdo($seq);
	}
	elseif($page=='tarot_mensuel.php')
	{
		return RequestReponseHebdo($seq);
	}
	elseif($page=='tarot_couple.php')
	{
		return RequestReponseCouple($seq);
	}
}

function RequestReponseHebdo($seq)
{
	global $page;
	if(!isset($id))
		$id=$_SESSION['id'];
	$url='http://www.asiaflash.com/tarot/'.$page.'?ID='.$id.'&step='.$seq.'&nn=999#0';
	$result=http_fetch_url_get($url);
	$result2=explode('.gif" alt="',$result);
	$result2=explode('"',$result2[1]);
	$result1=explode('<font class="textenormal">',$result);
	$result1=explode('</font>',$result1[1]);
	$result=$result2[0].'=>'.$result1[0];
	return $result;
}


function RequestMens($prenom,$card_n)
{
	global $page;
	if(!isset($id))
		$id=$_SESSION['id'];
	
	$nn=0;
	if($card_n==5)
		$nn=999;
	$url= $page.'?ID='.$id.'&nn='.$nn.'&sequence='.$card_n.'';
	$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
	
	$result=explode("
<table align=\"center\">
<tr>
<td></td>
<td><img src=\"",$result);
	// if($card_n>3)
	// {
		// print_r($result);
		// die('<br/><br/><br/>'.$url);
	// }
	unset($result[0]);
	$result=$result[1];
	$result=explode("<td></td>
</tr>
</table>",$result);
	$result=$result[0];
	$i=0;
	$result=explode('<td><img src="arcanes/',$result);
	
	if($card_n==4)
	{
		$index=array(1=>1,2=>3,3=>0,4=>3,5=>2);
	}
	//$result=explode(' border="0"></td>',$result[0]);
	else
	$index=array(1=>1,2=>3,3=>0,4=>4,5=>2);
	$result=explode('alt="',$result[$index[$card_n]]);
	$result=explode('- ',$result[1]);
	$result=$result[0];
	//die($result);
	$result=(int)$result;
	return $result;
}
function RequestHebdo($prenom,$card_n)
{
	global $page;
	if(!isset($id))
		$id=$_SESSION['id'];
	
	$nn=0;
	if($card_n==5)
		$nn=999;
	$url= $page.'?ID='.$id.'&nn='.$nn.'&sequence='.$card_n.'';
	$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
	
	$result=explode("
<table align=\"center\">
<tr>
<td></td>
<td><img src=\"",$result);
	 /*if($card_n>3)
	 {
		 print_r($result);
		 die('<br/><br/><br/>'.$url);
	 }*/
	unset($result[0]);
	$result=$result[1];
	$result=explode("<td></td>
</tr>
</table>",$result);
	$result=$result[0];
	$i=0;
	if($card_n>4)
		$result=explode('<td><img src="/tarot/arcanes/',$result);
	else
		$result=explode('<td><img src="arcanes/',$result);
	
	if($card_n==4)
	{
		$index=array(1=>1,2=>3,3=>0,4=>3,5=>2);
	}
	//$result=explode(' border="0"></td>',$result[0]);
	else
	$index=array(1=>1,2=>3,3=>0,4=>4,5=>2);
	$result=explode('alt="',$result[$index[$card_n]]);
	$result=explode('- ',$result[1]);
	$result=$result[0];
	//die($result);
	$result=(int)$result;
	return $result;
}
session_start();

if(isset($_POST['step']))
	$prestep=$_POST['step'];
if(!isset($prestep))
	$prestep=0;
if(isset($_REQUEST['reset']))
{
	session_unset();
	$prestep=0;
}
if(!isset($_SESSION['id']))
{
	$_SESSION['id']=Request('Nico',$prestep);
}
switch($prestep)
{
	case 1:
		$_SESSION['card'][1]=Request('Nico',1);
		break;
	case 2:
		$_SESSION['card'][2]=Request('Nico',2);
		break;
	case 3:
		$_SESSION['card'][3]=Request('Nico',3);
		break;
	case 4:
		$_SESSION['card'][4]=Request('Nico',4);
		break;
	case 5:
		$_SESSION['card'][5]=Request('Nico',5);
		if(!isset($_SESSION['reponse']))
		{
			$_SESSION['reponse'][1]=RequestReponse(1);
			$_SESSION['reponse'][2]=RequestReponse(2);
			$_SESSION['reponse'][3]=RequestReponse(3);
			$_SESSION['reponse'][4]=RequestReponse(4);
			$_SESSION['reponse'][5]=RequestReponse(5);
			$_SESSION['reponse'][6]=RequestReponse(6);
		}
		break;
}
////////////////////////////////

/*
echo $url;
echo '<br/>';
echo '$_POST';
echo '<br/>';
if(isset($_POST))
	print_r($_POST);
echo '<br/>';
echo '<br/>';
echo '$_SESSION';
echo '<br/>';
print_r($_SESSION);
echo '<br/>';
echo '<br/>'; 
*/

//////////////////////////////////
// $form='<form method="post">
// <input type="hidden" name="step" value="'.($prestep+1).'"/>
// <input type="submit"/>
// </form>';
//die($prestep);
// die($form);
function RequestQuot($prenom='Nico',$card_n=true)
{
	global $page;
	$doo = array(
	'prenom' => "$prenom",
	'signe' => "12" ,
	'submit' => "" );
	if(($card_n===true) || ($card_n==0))
	{
		global $page;//tarot.php
		$result=http_fetch_url('http://www.asiaflash.com/tarot/'.$page,$doo);

		$exp1=explode('<a href="'.$page.'?ID=',$result);
		$exp2=explode('&',$exp1[1]);
		$id=$exp2[0];
		return $id;
	}
	$seq=1;
	$max_step=5;
	$min_step=1;
	if(is_int($card_n))
		$max_step=$card_n;
	if(is_int($card_n))
		$min_step=$card_n;
	for($seq=$min_step; $seq<$max_step+1; $seq++)
	{
		if(!isset($id))
			$id=$_SESSION['id'];
		$nn=0;
		if($seq==5)
			$nn=999;
		$url= $page.'?ID='.$id.'&nn='.$nn.'&sequence='.$seq.'#0';
		$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
		// print_r($result);
		// die();
		//print_r($result);
		//die();
		//echo'http://www.asiaflash.com/tarot/'.$url;
		// die();
		$result=explode("<table align=\"center\">
<tr>
<td></td>
<td><img src=\"arcanes/",$result);
		unset($result[0]);
		$result=$result[1];
		$result=explode('<td></td>
	</tr>
	</table>',$result);
		$result=$result[0];
		$i=0;
		if($seq<4)
		{
			$result=explode(' border="0"></td>',$result);
		}
		else
		{
			$result=explode('<td><img src="arcanes/',$result);
		}
		
		foreach($result as $k=>$v)
		{
			$exp=explode('<td><img src="arcanes/',$v);
			if(($seq==4) && ($i==3))
			{
				//echo $k.' =>  '.$i.'- - - -';
				$exp=explode('alt="',$v);
				$exp=explode('- ',$exp[1]);
				$exp=$exp[0];
				//die($exp);
				$res[4]=(int)$exp;
				break;
			}
			elseif(($seq==5) && ($i==2))
			{
				$exp=explode('alt="',$v);
				$exp=explode('- ',$exp[1]);
				$exp=$exp[0];
				//die($exp);
				$res[5]=(int)$exp;
				break;
			}
			else
			{
				if($i>0)
				{
					if(isset($exp[1]))
					{
						$exp=explode('alt="',$exp[1]);
						$exp=explode('- ',$exp[1]);
						$exp=$exp[0];
						$exp=explode('"',$exp);
						$res[$i]=(int)$exp[0];
					}
				}
				else
				{
					$exp=$exp[0];
					if($seq==3)
					{
						$exp=explode('alt="',$exp);
						$exp=explode('- ',$exp[1]);
						$exp=$exp[0];
						$res[$i]=(int)$exp;
					}
					else
					{
						$exp=explode('"',$exp);
						$res[$i]=(int)$exp[0];
					}
				}
			}
			$i++;
		}
		//unset($res[5]);
		switch($seq)
		{
			case 1:
				$card[1]=$res[1];
			break;
			case 2:
				$card[2]=$res[3];
			break;
			case 3:
				$card[3]=$res[0];
			break;
			case 4:
				$card[4]=$res[4];
			break;
			case 5:
				$card[5]=$res[5];
			break;
		}
	}
	if($card_n===true)
		return $card;
	else
	{
		return($card[$card_n]);
	}
}


function RequestReponseQuot($seq)
{
	global $page;
	if(!isset($id))
		$id=$_SESSION['id'];
	$url='http://www.asiaflash.com/tarot/'.$page.'?ID='.$id.'&step='.$seq.'&nn=999#0';
	$result=http_fetch_url_get($url);
	$result1=explode('<font class="textenormal">',$result);
	$result1=explode('</font>',$result1[1]);
	$result2=explode('<center><FONT class=',$result);
	$result2=explode('</font>',$result2[1]);
	$result2=explode('>',$result2[0]);
	$result=$result2[1].'=>'.$result1[0];
	return $result;
}


function http_fetch_url($url,$dat, $timeout = 10, $userpwd = '')
{
	$data_url = http_build_query ($dat);
    $ch = curl_init($url);
	
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dat));
	
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
function http_fetch_url_get($url)
{
    $ch = curl_init($url);
	
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

function http_post($url, $data)
{
	$data_url = http_build_query ($data);
    $data_len = strlen ($data_url);

    return array ('content'=>file_get_contents ($url, false, stream_context_create(array ('http'=>array ('method'=>'POST'
            , 'header'=>"Content-type: application/x-www-form-urlencoded\r\nConnection: close\r\nContent-Length: $data_len\r\n"
            , 'content'=>$data_url
            ))))
        , 'headers'=>$http_response_header
        );
}

function rec_print_r($donnees)
{
	$echo=' Array(';
	$i=0;
	foreach($donnees as $k=>$v)
	{
		if(is_array($v))
			$val=rec_print_r($v);
		else
			$val='"'.$v.'"';
		$arr[$i]='['.$k.']=>'.$val;
		$i++;
	}
	$echo.= implode(', ',$arr);
	$echo.= ')';
	return $echo;
}

$arcanes_table = array(
	
0  => "images_tarot/"
	,1  => "images_tarot/batelr.jpg"
	,2  => "images_tarot/papesse.jpg"
	,3  => "images_tarot/imperatrice.jpg"
	,4  => "images_tarot/empereur.jpg"
	,5  => "images_tarot/pape.jpg"
	,6  => "images_tarot/amoureux.jpg"
	,7  => "images_tarot/chariot.jpg"
	,8  => "images_tarot/justice.jpg"
	,9  => "images_tarot/hermite.jpg"
	,10 => "images_tarot/fortune.jpg"
	,11 => "images_tarot/force.jpg"
	,12 => "images_tarot/pendu.jpg"
	,13 => "images_tarot/treize.jpg"
	,14 => "images_tarot/temperanc.jpg"
	,15 => "images_tarot/diable.jpg"
	,16 => "images_tarot/maisondie.jpg"
	,17 => "images_tarot/etoile.jpg"
	,18 => "images_tarot/lune.jpg"
	,19 => "images_tarot/soleil.jpg"
	,20 => "images_tarot/jugement.jpg"
	,21 => "images_tarot/monde.jpg"
	,22 => "images_tarot/fou.jpg"
);
$arcanes_table_name = array(
	0  => ""
	,1  => "1- Le Bateleur"
	,2  => "2- La Papesse"
	,3  => "3- L'Impératrice"
	,4  => "4- L'Empereur"
	,5  => "5- Le Pape"
	,6  => "6- L'Amoureux"
	,7  => "7- Le Chariot"
	,8  => "8- La Justice"
	,9  => "9- L'Hermite"
	,10 => "10- La Roue de Fortune"
	,11 => "11- La Force"
	,12 => "12- Le Pendu"
	,13 => "13- L'Arcane Sans Nom"
	,14 => "14- La Tempérance"
	,15 => "15- Le Diable"
	,16 => "16- La Maison Dieu"
	,17 => "17- L'Etoile"
	,18 => "18- La Lune"
	,19 => "19- Le Soleil"
	,20 => "20- Le Jugement"
	,21 => "21- Le Monde"
	,22 => "22- Le Fou"
);
$date= date( "w/d/n/Y", time() + 0 * 24 * 60 * 60 );
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");
list($nom_jour, $jour, $mois, $annee) = explode('/', $date);
$date = ucfirst($nom_jour_fr[$nom_jour]) .' '.$jour.' '.ucfirst($mois_fr[$mois]).' '.$annee;


$signe=$_POST['signe'];
$pre_msg='Tirez une';
$post_msg='carte en cliquant sur le jeu de cartes ci dessous';

$card1=0;
$card2=0;
$card3=0;
$card4=0;
$card5=0;

if(isset($_SESSION['card'][1]))
	$card1=$_SESSION['card'][1];

if(isset($_SESSION['card'][2]))
	$card2=$_SESSION['card'][2];

if(isset($_SESSION['card'][3]))
	$card3=$_SESSION['card'][3];

if(isset($_SESSION['card'][4]))
	$card4=$_SESSION['card'][4];

if(isset($_SESSION['card'][5]))
	$card5=$_SESSION['card'][5];

$carte1_img = "images_tarot/dos_01.jpg";
$carte2_img = "images_tarot/dos_02.jpg";
$carte3_img = "images_tarot/dos_03.jpg";
$carte4_img = "images_tarot/dos_04.jpg";
$carte5_img = "images_tarot/dos_05.jpg";
if(!isset($prestep))
{
	$msg=$pre_msg.' 1ère '.$post_msg;
	$step=1;
	$_SESSION['prenom']=$_POST['prenom'];
}
else
{
	$step=$prestep+1;
	$msg='';
	
	switch($prestep)
	{
		case '0':
			$msg=$pre_msg.' 1&#232;re '.$post_msg;
			$step=1;
			$_SESSION['prenom']=$_POST['prenom'];
			break;
		case '1':
			$msg=$pre_msg.' 2&#232;me '.$post_msg;
			$carte1_img= $arcanes_table[$card1];
			break;
		case '2':
			$carte1_img= $arcanes_table[$card1];
			$carte2_img= $arcanes_table[$card2];
			$msg=$pre_msg.' 3&#232;me '.$post_msg;
			break;
		case '3':
			$carte1_img= $arcanes_table[$card1];
			$carte2_img= $arcanes_table[$card2];
			$carte3_img= $arcanes_table[$card3];
			$msg=$pre_msg.' 4&#232;me '.$post_msg;
			break;
		case '4':
			$carte1_img= $arcanes_table[$card1];
			$carte2_img= $arcanes_table[$card2];
			$carte3_img= $arcanes_table[$card3];
			$carte4_img= $arcanes_table[$card4];
			break;
		case '5':
			$carte1_img= $arcanes_table[$card1];
			$carte2_img= $arcanes_table[$card2];
			$carte3_img= $arcanes_table[$card3];
			$carte4_img= $arcanes_table[$card4];
			$carte5_img= $arcanes_table[$card5];
			break;
		default:
			$carte1_img= $arcanes_table[$card1];
			$carte2_img= $arcanes_table[$card2];
			$carte3_img= $arcanes_table[$card3];
			$carte4_img= $arcanes_table[$card4];
			$carte5_img= $arcanes_table[$card5];
			break;
	}
}
$carte1_alt = $arcanes_table_name[$card1];
$carte2_alt = $arcanes_table_name[$card2];
$carte3_alt = $arcanes_table_name[$card3];
$carte4_alt = $arcanes_table_name[$card4];
$carte5_alt = $arcanes_table_name[$card5];
$prenom=$_SESSION['prenom'];


if((int)$step<5)
	$echo=$header.'<div class="wrapper">
				   <section class="cat-widget h-cat-1"> <div class="cat-widget-title">
                        
<h3>Tarot mensuel pour '.$prenom.'<br>'.$msg .'</h3>
                        
                    </div>
				   <!---------------- Début Iframe tirage tarot ---->
	
	
	
	<table align="center">
	<tr>
	<td><a href="afficher_tarot_mensuel.php#" onclick="window.document.myform.submit();">
						<img src="images_tarot/carte.jpg" alt="" height="80%" title="" />
					</a></td>
	</tr>
</table>';
$echo.= '<br/>'.'<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" >
  
        	
			<tbody>
  <tr>

    <td rowspan="4">
		<form name="myform" method="post" action="afficher_tarot_mensuel.php">
		<input type="hidden" name="step" value="'.$step.'"/>
		<input type="hidden" name="prenom" value="'.$_SESSION['prenom'].'"/>
		<input type="hidden" name="date" value="'.$date.'"/>
		<input type="hidden" name="signe" value="'.$signe.'"/>
		<input type="hidden" name="card1" value="'.$card1.'"/>
		<input type="hidden" name="card2" value="'.$card2.'"/>
		<input type="hidden" name="card3" value="'.$card3.'"/>
		<input type="hidden" name="card4" value="'.$card4.'"/>
		<input type="hidden" name="card5" value="'.$card5.'"/>
			<div>
			
				<table align="center">
					<tr>
						<td></td>
						<td><img src="'.$carte3_img.'" alt="'.$carte3_alt.'" title="'.$carte3_alt.'" border="0"></td>

						<td></td>
					</tr>
					<tr>
						<td><img src="'.$carte1_img.'" alt="'.$carte1_alt.'" title="'.$carte1_alt.'" border="0"></td>';
	if($step==5)
	{
		$echo.='<td><a href="afficher_tarot_mensuel.php#" onclick="window.document.myform.submit();"><img src="'.$carte5_img.'" alt="'.$carte5_alt.'" title="'.$carte5_alt.'" border="0"></a></td>';
	}
	else
		$echo.='<td><img src="'.$carte5_img.'" alt="'.$carte5_alt.'" title="'.$carte5_alt.'" border="0"></td>';

	$echo.='
						<td><img src="'.$carte2_img.'" alt="'.$carte2_alt.'" title="'.$carte2_alt.'" border="0"></td>
						<td></td>
					</tr>
					<tr>

						<td></td>
						<td><img src="'.$carte4_img.'" alt="'.$carte4_alt.'" title="'.$carte4_alt.'" border="0"></td>
						<td></td>
					</tr>
				</table>                
				<div id="flash_carte"><br />';
		// die();

$echo.='
				</div>
            </div>';
if((int)$prestep>4)
{
	//echo $page.'<br/>'.$step;
	if(!((($page=='tarot.php')&&((int)$step<12))||((int)$step<11)))
	{
		$echo.='<div> 
			                	
						<a href="afficher_tarot_mensuel.php#" onclick="window.document.myform.step.value=\'5\'; window.document.myform.submit();">
                        	<span style="color:#990099; font-weight:bold;" class="souligne"> >> Relire votre tirage</span>
                        </a>
                        <br />
                        <br />

                        <a href="tarologie-gratuite">
                        	<span style="color:#990099; font-weight:bold;" class="souligne"> >> Tirage pour un ami ?</span><br>
                        </a>
		</div>';
	}
	else
	{
		$r=utf8_encode($_SESSION['reponse'][$prestep-4]);
		$r=explode('=>',$r);
		$echo.='<div id="texte_carte"> 
				<p style="text-align:justify; color:#666666; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;width:100%;">
					<span style="color:#99CC00; font-weight:bold;">'.$r[0].'</span><br/>'.$r[1].'
			</p>
		</div>';
	}
}

$text1=str_replace('Amour=>','',$_SESSION['reponse'][1]);
$text2=str_replace('Argent=>','',$_SESSION['reponse'][2]);
$text3=substr($_SESSION['reponse'][3],10,750);
$text4=str_replace('Travail=>','',$_SESSION['reponse'][4]);
$text5=str_replace('Clin d\'oeil=>','',$_SESSION['reponse'][5]);
$echo.='
		</form>
	</td>
   
  </tr>

  

  

 </tbody> 

</table>




  
';

if(((int)$step>5)&&(((($page=='tarot.php')&&((int)$step<12))||((int)$step<11))))
$echo=$header.'<div class="wrapper">
				   <section class="cat-widget h-cat-1"> <div class="cat-widget-title">
                       
<h3>Tarot mensuel pour '.$prenom.'<br>'.$msg .'</h3>
                        
                    </div>
				   <!---------------- Début Iframe tirage tarot ---->
<div class="widget-title">
                        
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/'.strtolower( $signes[$signe]).'.png">'.$signes[$signe].'
                        </div>
</div> 

<table align="center"  style="margin-left:20px; margin-top:20px; width:100%">
	<tbody><tr>
		<td> 1&#232;re carte</td>
		<td> 2&#233;me carte</td>
		<td> 3&#232;me carte</td>
		<td> 4&#232;me carte</td>
		<td> 5&#232;me carte</td>
	</tr>
  <tr>
	<td><img src="'.$carte1_img.'" alt="'.$carte1_alt.'" title="'.$carte1_alt.'" border="0"></td>
	<td><img src="'.$carte2_img.'" alt="'.$carte2_alt.'" title="'.$carte2_alt.'" border="0"></td>
	<td><img src="'.$carte3_img.'" alt="'.$carte3_alt.'" title="'.$carte3_alt.'" border="0"></td>
	<td><img src="'.$carte4_img.'" alt="'.$carte4_alt.'" title="'.$carte4_alt.'" border="0"></td>
	<td><img src="'.$carte5_img.'" alt="'.$carte5_alt.'" title="'.$carte5_alt.'" border="0"></td>
  </tr>
</tbody></table>
<br>
<div class="row-fluid">
                                        <div class="modern-accordion-container">

                                            <div class="accordion" id="accordion1">

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1">AMOUR

                                                        <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse1" class="accordion-body collapse" style="height: 0px;">
                                                        <div class="accordion-inner">
                                                            '.utf8_encode($text1).'
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">ARGENT

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse2" class="accordion-body in collapse" style="height: auto;">
                                                        <div class="accordion-inner">
                                                            '.utf8_encode($text2).'
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse4">VITALITE
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse4" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            '.utf8_encode($text3).'
                                                        </div>
                                                    </div>
                                                </div>

												<div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse5">TRAVAIL
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse5" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            '.utf8_encode($text4).'
                                                        </div>
                                                    </div>
                                                </div>
												
												<div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse" data-parent="#accordion6" href="#collapse6">CLIN D\'OEIL
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse6" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            '.utf8_encode($text5).'
                                                        </div>
                                                    </div>
                                                </div>
												
												
                                            </div>

                                        </div>
                                    </div>
';


echo $echo;


?> <!---------------- fin Iframe tirage tarot ---->
           </section>    
            </div>
                </section>

               

                <!-- Horizontal Categories -->
                <section class="cat-widget h-cat-1">
                    <div class="cat-widget-title">
                        
<h3>Tarot mensuel</h3>
                       
                    </div>

                    <div class="cat-widget-content">
                        

                         <div class="row-fluid cat-horiz">
                            <div class="cat-horiz-divider"></div>

                            <div class="related-posts clearfix">
                                <div class="row-fluid modern-items-list">
                                    <div id="h_cat_slider1" class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <ul class="items left clearfix">
                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/astrologie-gratuite.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Astrologie gratuite</h5>
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">L'astrologie gratuite est source de connaissance de soi-même. Vous pourrez grâce à MyAstro faire des tirages de tarots mensuels afin de vérifier la justesse de votre comportement de la semaine.</h6>
                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/astrologie-gratuite" class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/compatibilite-amoureuse-feminine.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Compatibilité amoureuse féminine</h5>
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Il est important pour vous de cheminer avec un être compatible. La compatibilité amoureuse féminine vous est offerte par MyAstro, procédez dès maintenant à votre demande et trouvez l'âme soeur.</h6>
                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/compatibilite-amoureuse-feminine" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>

                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/horoscope-de-la-semaine.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Découvrez votre horoscope du jour</h5>
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">L'horoscope du jour vous évite les faux pas, c'est un guide qui signale les tendances et les embûches potentielles. Exigez votre horoscope du jour MyAstro vous y engage.</h6>
                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-du-jour" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/horoscope-2014.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Votre horoscope 2014</h5>

 <br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Vous pourrez avoir les grandes tendances annuelles et les énergies qui meuvent votre propre vie. Demander votre horoscope 2013 avec MyAstro qui a déjà eu de grands résultats est chose facile et jusqu'à un certain point gratis. Profitez-en! </h6>                                                                       
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-2015" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>
<li class="row-fluid">
                                                        
 <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/votre-personnalite-astrologique.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Découvrez votre astrologie personnalité</h5>
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">L'astrologie personnalité est à la portée de tout un chacun aujourd'hui. C'est ce que nous demande nos guides célestes, celui qui se connait connait le monde et les …dieux. MyAstro se met en  quatre pour vous répondre.</h6>
                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/votre-personnalite-astrologique" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/portrait-astrologique-feminin.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Votre profil astrologique féminin</h5>
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">L'air, l'eau, la terre le feu sont des éléments qui régissent notre quotidien de terrien. Il en existe un autre qui est l'éther, peu de gens le connaissent. Exécutez votre profil astrologique féminin, MyAstro vous guidera.</h6>
                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/portrait-astrologique-feminin" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                        
                                                    </li>
<li class="row-fluid">
                                                         <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-femmes.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">La compatibilité amoureuse avec votre partenaire</h5>
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">La compatibilité amoureuse avec votre partenaire régit votre quotidien. Évitez de mal vous entourer, ou apprenez à jongler avec votre partenaire, si vous ne pouvez le changer, apprenez à comprendre comment il (elle) agit. L'âme agit… la magie</h6>
                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes" class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-hommes.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Compatibilité amoureuse pour les hommes</h5>
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">La compatibilité amoureuse pour les hommes est souvent moins mise en valeur que celles des femmes. MyAstro en donnant des conseils appropriés et ad hoc vous aide à trouver comment réaliser cette union, cette compatibilité.</h6>
                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/compatibilite-amoureuse-pour-les-hommes" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>

													 
													  </ul>
                                            </li>

                                            </ul>
                                    </div>

								
								</div>
                            </div>

                        </div>
               </section>

               
                


               
            </div>


			
                            							<!-- Left sidebar -->
							<?php include('include/bloc-gauche-secondaire.php'); ?>
</div>

        

    </div>
                      
                        </div>

        </div>
    
	
   

    <?php include('include/footer_inc_tarot.php'); ?>
