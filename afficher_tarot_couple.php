<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Tarot de couple : êtes-vous avec la bonne personne? | Myastro</title>
	<meta name="description" content="Avec Myastro, questionnez les cartes de Tarot pour savoir si votre couple est compatible et si votre relation est vouée au succès." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Tarot de couple</h1>
                    </header>
                    <span class="clearfix"></span>
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-secondaire.php');?>
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <!-- Slider -->
                            <section class="pic-slider">
                                <h2 class="hidden">Slider images</h2>
 <!---------------- Début Iframe tirage tarot ---->
<?php

global $echo;
$echo=$header;
	$prenom_partenaire=$_POST['prenom_partenaire'];
	$prenom=$_POST['prenom'];
	$signe=$_POST['signe'];
	//print_r($_POST);
	// die($_POST);
	$signes=array('1'=>'Bélier','2'=>'Taureau', '3'=>'Gémeaux', '4'=>'Cancer', '5'=>'Lion', '6'=>'Vierge', '7'=>'Balance', '8'=>'Scorpion', '9'=>'Sagittaire', '10'=>'Capricorne', '11'=>'Verseau', '12'=>'Poissons');
	// session_start();
	// session_destroy();
	 
	$page='tarot_couple.php';
	$tit='Couple';
	$mode_page='couple';

	$months = array ('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
	if($mode_page=='quotidien')
	{
		$texte_preduree='du ';
		$date=GetDateFR();
		$h='tarologie-gratuite-quotidien';
		$page='tarot.php';
		$tit='Quotidien';
	}
	if($mode_page=='hebdomadaire')
	{
		$texte_preduree='de la semaine du ';
		$date=GetSemaineFR();
		$page='hebdo_tarot.php';
		$tit='Hebdomadaire';
		$h='tarologie-gratuite-hebdomadaire';
	}
	if($mode_page=='mensuel')
	{
		$texte_preduree='du mois ';
		$date=GetMoisFR().' '.date('Y');
		if(strpos('aeiouyAEIOUY',$date[0]))
			$texte_preduree.='d\'';
		else
			$texte_preduree.='de ';
		$h='tarologie-gratuite-mensuel';
		$page='tarot_mensuel.php';
		$tit='Mensuel';
	}
	if($mode_page=='couple')
	{
		$texte_preduree='du ';
		//$date=date();
		$h='tarologie-gratuite-couple';
		$page='tarot_couple.php';
		$tit='Couple';
	}
	
	
	// $page='tarot_couple.php';

	
	// print_r($_SESSION);

	if(isset($_POST['step']))
		$prestep=$_POST['step'];
	if(!isset($prestep))
		$prestep=0;
	if(!isset($_SESSION['id']))
	{
		$_SESSION['id']=Request('Nico',$prestep,$prenom_partenaire);
	}

	switch($prestep)
	{
		case 1:
		
			$_SESSION['card'][1]=Request($prenom,1,$prenom_partenaire);
			$_SESSION['cardx1']=mt_rand(1,22);
			break;
		case 2:
			$_SESSION['card'][2]=Request($prenom,2,$prenom_partenaire);
			$_SESSION['cardx2']=mt_rand(1,22);
			break;
		case 3:
			$_SESSION['card'][3]=Request($prenom,3,$prenom_partenaire);
			break;
		case 4:
			$_SESSION['card'][4]=Request($prenom,4,$prenom_partenaire);
			break;
		case 5:
			$_SESSION['card'][5]=Request($prenom,5,$prenom_partenaire);
			if($tit<>'Couple')
			if(!isset($_SESSION['reponse']))
			{
				$_SESSION['reponse'][1]=RequestReponse(1);
				$_SESSION['reponse'][2]=RequestReponse(2);
				$_SESSION['reponse'][3]=RequestReponse(3);
				$_SESSION['reponse'][4]=RequestReponse(4);
				$_SESSION['reponse'][5]=RequestReponse(5);
				$_SESSION['reponse'][6]=RequestReponse(6);
				foreach($_SESSION['reponse'] as $k=>$v)
				{
					if(trim($v)=='')
						unset($_SESSION['reponse'][$k]);
				}
				// print_r($_SESSION);
			}
			break;
		case 6:
			$_SESSION['card'][6]=Request($prenom,6,$prenom_partenaire);
			if(!isset($_SESSION['reponse']))
			{
				$var1=RequestReponse(1);
				$var1=str_replace('<br />','',$var1);
				$var1=explode('<li>',$var1);
				unset($var1[0]);
				$i=1;
				foreach($var1 as $val)
				{
					$var[$i]=$val;
					$i++;
				}
				$var2=RequestReponse(2);
				$var2=str_replace('<br />','',$var2);
				$var2=explode('<li>',$var2);
				unset($var2[0]);
				foreach($var2 as $val)
				{
					$var[$i]=$val;
					$i++;
				}
				// print_r($var);
				$_SESSION['reponse_size']=count($var);
				$_SESSION['reponse']=$var;
	/*			$_SESSION['reponse'][1]=
				$_SESSION['reponse'][2]=//*/
			}
			break;
	}
///////////////////////////////
	 /*echo '$_POST';
	 echo '<br />';
	 if(isset($_POST))
		 print_r($_POST);
	 echo '<br />';
	 echo '<br />';
	 echo '$_SESSION';
	 echo '<br />';
	 print_r($_SESSION);
	 echo '<br />';
	 echo '<br />';*/
	 
	 
 ////////////////////////////////
	// $form='<form method="post">
	// <input type="hidden" name="step" value="'.($prestep+1).'"/>
	// <input type="submit"/>
	// </form>';
	//die($prestep);
	// die($form);
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
	$pre_msg='Tirez une';
	$post_msg='carte en cliquant sur le jeu de cartes ci dessous';
	$card1=0;
	$card2=0;
	$card3=0;
	$card4=0;
	$card5=0;
	$card6=0;

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

	if(isset($_SESSION['card'][6]))
		$card6=$_SESSION['card'][6];

	if($tit=='Couple')
	{
		$carte1_img = "images_tarot/dos_01.jpg";
		$carte2_img = "images_tarot/dos_02.jpg";
		$carte3_img = "images_tarot/dos_03.jpg";
		$carte4_img = "images_tarot/dos_01.jpg";
		$carte5_img = "images_tarot/dos_02.jpg";
		$carte6_img = "images_tarot/dos_03.jpg";
	}
	else
	{
		$carte1_img = "images_tarot/dos_01.jpg";
		$carte2_img = "images_tarot/dos_02.jpg";
		$carte3_img = "images_tarot/dos_03.jpg";
		$carte4_img = "images_tarot/dos_04.jpg";
		$carte5_img = "images_tarot/dos_05.jpg";
	}

	if(!isset($prestep))
	{
		$msg=$pre_msg.' 1ère '.$post_msg;
		$step=1;
	}
	else
	{
		$step=$prestep+1;
		$msg='';
		
		$msg_right='';
		switch($prestep)
		{
			case '0':
				$msg=$pre_msg.' 1ère '.$post_msg;
				$step=1;
				break;
			case '1':
				$msg=$pre_msg.' 2ème '.$post_msg;
				$card1=$_SESSION['cardx1'];
				//echo "session carde1 =======>".$_SESSION['card'][1];
				$carte1_img= $arcanes_table[$card1];
				//echo "carte1 image:".$carte1_img."<br />";
				break;
			case '2':
				$card1=$_SESSION['cardx1'];
				$card2=$_SESSION['cardx2'];
				$carte1_img= $arcanes_table[$card1];
				$carte2_img= $arcanes_table[$card2];
				//echo "session carde2 =======>".$_SESSION['card'][2];
				//echo "carte2 image:".$carte2_img."<br />";
				$msg=$pre_msg.' 3ème '.$post_msg;
				break;
			case '3':
				$card1=$_SESSION['cardx1'];
				$card2=$_SESSION['cardx2'];
				$carte1_img= $arcanes_table[$card1];
				$carte2_img= $arcanes_table[$card2];
				$carte3_img= $arcanes_table[$card3];
				//echo "session carde3 =======>".$_SESSION['card'][3];
				//echo "carte3:".$card3."<br />";
				$msg=$pre_msg.' 4ème '.$post_msg;
				break;
			case '4':
			$card1=$_SESSION['cardx1'];
				$card2=$_SESSION['cardx2'];
				if($tit=='Couple')
					$msg=$pre_msg.' 5ème '.$post_msg;
				else
					$msg_right='Cliquez sur la carte centrale';
				$carte1_img= $arcanes_table[$card1];
				$carte2_img= $arcanes_table[$card2];
				$carte3_img= $arcanes_table[$card3];
				$carte4_img= $arcanes_table[$card4];
				break;
			case '5':
			$card1=$_SESSION['cardx1'];
				$card2=$_SESSION['cardx2'];
				if($tit=='Couple')
					$msg=$pre_msg.' 6ème '.$post_msg;
				$carte1_img= $arcanes_table[$card1];
				$carte2_img= $arcanes_table[$card2];
				$carte3_img= $arcanes_table[$card3];
				$carte4_img= $arcanes_table[$card4];
				$carte5_img= $arcanes_table[$card5];
				break;
			case '6':
			$card1=$_SESSION['cardx1'];
				$card2=$_SESSION['cardx2'];
				$carte1_img= $arcanes_table[$card1];
				$carte2_img= $arcanes_table[$card2];
				$carte3_img= $arcanes_table[$card3];
				$carte4_img= $arcanes_table[$card4];
				$carte5_img= $arcanes_table[$card5];
				if($tit=='Couple')
				$carte6_img= $arcanes_table[$card6];
				break;
			default:
				// if($tit<>'Couple')
				$card1=$_SESSION['cardx1'];
				$card2=$_SESSION['cardx2'];	
				$carte1_img= $arcanes_table[$card1];
				$carte2_img= $arcanes_table[$card2];
				$carte3_img= $arcanes_table[$card3];
				$carte4_img= $arcanes_table[$card4];
				$carte5_img= $arcanes_table[$card5];
				if($tit=='Couple')
					$carte6_img= $arcanes_table[$card6];
				break;
		}
	}
	$carte1_alt = $arcanes_table_name[$card1];
	//echo "carte 1:==================>".$carte1_alt;
	$carte2_alt = $arcanes_table_name[$card2];
	//echo "carte 2:==================>".$carte2_alt;
	$carte3_alt = $arcanes_table_name[$card3];
	//echo "carte 3:==================>".$carte3_alt;
	
	$carte4_alt = $arcanes_table_name[$card4];
	//echo "carte 4:==================>".$carte4_alt;
	
	$carte5_alt = $arcanes_table_name[$card5];
	//echo "carte 5:==================>".$carte5_alt;
	if($tit=='Couple')
		$carte6_alt = $arcanes_table_name[$card6];

	$echo.='<form name="myform" method="post" action="afficher_tarot_couple.php">
		<input type="hidden" name="step" value="'.$step.'"/>
		<input type="hidden" name="prenom" value="'.$prenom.'"/>
		<input type="hidden" name="prenom_partenaire" value="'.$prenom_partenaire.'"/>
		<input type="hidden" name="date" value="'.$date.'"/>
		<input type="hidden" name="signe" value="'.$signe.'"/>
		<input type="hidden" name="card1" value="'.$card1.'"/>
		<input type="hidden" name="card2" value="'.$card2.'"/>
		<input type="hidden" name="card3" value="'.$card3.'"/>
		<input type="hidden" name="card4" value="'.$card4.'"/>
		<input type="hidden" name="card5" value="'.$card5.'"/>
		<input type="hidden" name="card6" value="'.$card6.'"/></form>';
function EchoCarte($num)
{
	$carte_img='carte'.$num.'_img';
	$carte_alt='carte'.$num.'_alt';
	global $$carte_img;
	global $$carte_alt;
	return '<img height="100px" src="'.$$carte_img.'" alt="'.$$carte_alt.'" title="'.$$carte_alt.'" >';
}
$date= date( "w/d/n/Y", time() + 0 * 24 * 60 * 60 );
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");
list($nom_jour, $jour, $mois, $annee) = explode('/', $date);
$date = ucfirst($nom_jour_fr[$nom_jour]) .' '.$jour.' '.ucfirst($mois_fr[$mois]).' '.$annee;
if ($step<7){


	 $echo.= '<div class="wrapper">
				   <section class="cat-widget h-cat-1"><div class="cat-widget-title">
                        
<h3>Tarot de couple  du '.$date.'<br>'.$prenom.' et '.$prenom_partenaire.'<br>'.$msg.'</h3>
                       
              </div>
	 
	<div style="text-align:center;">
		<a href="#" onclick="window.document.myform.submit(); return false">
			<img src="images_tarot/carte.jpg" alt="" title="" height="100px"/>
		</a>
	</div><br>'; 
	if($tit=='Couple')
	{
		
		if ($step<4){
		$echo.='<div style="text-align:center;"><h4 style="color:green;">Vous : '.$prenom.'</h4></div><br>
		';$echo.='<table align="center"><tr>
		<td align="center"></td>
			<td>'.EchoCarte(1).'</td>
			<td>'.EchoCarte(2).'</td>
			<td>'.EchoCarte(3).'</td>';
		if($paquet)
			$echo.='<td rowspan="2" width="100%" align="center">'.EchoPaquet().'</td>';
		
		$echo.='
		</tr>';
		}else{
		$echo.='<div style="text-align:center;"><h4 style="color:red;">Votre Partenaire: '.$prenom_partenaire.'</h4></div><br>
		';
		$echo.='
		<table align="center"><tr>
		
			<td>'.EchoCarte(4).'</td>
			<td>'.EchoCarte(5).'</td>
			<td>'.EchoCarte(6).'</td>
		</tr>';}
		$echo.='
		</table>';
	}
	else
	{
		$echo.='
		<table align="center">
		<tr><td></td><td>'.EchoCarte(3).'</td><td></td>';
		if($paquet)
			$echo.='<td rowspan="3" width="100%" align="center">'.EchoPaquet().'</td>';
		elseif($step==5)
			$echo.='<td rowspan="3" width="100%"><p style="padding-top: 0px; text-align: center; color: rgb(153, 0, 153); font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px;">
				Cliquez sur la carte centrale</p></td>';
		$echo.'</tr>';
		$echo.='<tr><td>'.EchoCarte(1).'</td>';
		if($step==5)
		{
			$echo.='<td>'.'<a href="afficher_tarot_couple.php" onclick="window.document.myform.submit();">'.EchoCarte(5).'</a>'.'</td>';
		}
		else
			$echo.='<td>'.EchoCarte(5).'</td>';

		$echo.='<td>'.EchoCarte(2).'</td></tr>';
		$echo.='<tr><td></td><td>'.EchoCarte(4).'</td><td></td></tr></table>';
	}
	echo $echo;
	}
else{
$echo=$header;
	$echo.='<div class="wrapper">
				   <section class="cat-widget h-cat-1"><div class="cat-widget-title">
                        
<h3>Tarot de couple  du '.$date.'<br>'.$prenom.' et '.$prenom_partenaire.'<br>'.$msg.'</h3>
                        
              </div><br /><br /><table width="100%" border="0" cellpadding="2">
  <tr>
    <td colspan="3" align="center" style="color:#ffffff;background-color:#e93cec;"><h4>Vous : '.$prenom.'</h4></td>
    <td colspan="3" align="center" style="color:#ffffff;background-color:#246BAC"><h4>Votre Partenaire: '.$prenom_partenaire.'</h4></td>
  </tr>
  <tr>
    <td>'.EchoCarte(1).'</td>
    <td>'.EchoCarte(2).'</td>
    <td>'.EchoCarte(3).'</td>
    <td>'.EchoCarte(4).'</td>
    <td>'.EchoCarte(5).'</td>
    <td>'.EchoCarte(6).'</td>
  </tr>
</table>';
	$text1=str_replace('Amour=>','',$_SESSION['reponse'][1]);
	$text2=str_replace('Argent=>','',$_SESSION['reponse'][2]);
	$text3=str_replace('Argent=>','',$_SESSION['reponse'][3]);
	$text4=str_replace('Argent=>','',$_SESSION['reponse'][4]);
	$echo.='<br>
<div class="row-fluid">
                                        <div class="modern-accordion-container">

                                            <div class="accordion" id="accordion1">

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1" href="#collapse1">1

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
                                                        <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1" href="#collapse2">2
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse2" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            '.utf8_encode($text2).'
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1" href="#collapse3">3
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse3" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            '.utf8_encode($text3).'
                                                        </div>
                                                    </div>
                                                </div>

												<div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse4">4
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse4" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            '.utf8_encode($text4).'
                                                        </div>
                                                    </div>
                                                </div>
												
												
												
												
                                            </div>

                                        </div>
                                    </div>';
echo $echo;
	}
	
	


function EchoTitle($tit,$texte_preduree,$date,$prenom,$prenom_partenaire='')
{
	$echo='
<h1 style="font-size:25px;" class="ellepolice">
	<span class="rose">Tarot '.$tit.'</span> '.$texte_preduree.$date.' pour '.$prenom.'
';
	if($tit=='Couple')
		$echo.=' et votre conjoint(e) '.$prenom_partenaire;
	$echo.= '</h1>';
	$echo.=EchoSubtitle($prenom_partenaire<>'vierge');
	return $echo.'';
}

function EchoSubtitle($iscouple=false)
{
	global $step;
	$echo='';
	// echo $step.($iscouple? 'true' : 'false');
	if(($step<5)||(($step<7)&&$iscouple))
		$echo='<br /><br /><h1 style="margin-bottom:50px; font-size:20px;" class="ellepolice">Tirez une '.$step.'è'.(($step==1)?'r':'m').'e carte en cliquant sur le jeu de cartes ci dessous</h1>';
	else
		$echo='<br /><br /><h1 style="visibility: hidden;  margin-bottom:50px; font-size:20px;" class="ellepolice"> </h1>';
	return $echo;
}


function RequestQuot($prenom='Nico',$card_n=true)
{
	global $page;
	$doo = array(
	'prenom' => "$prenom",
	'signe' => "12" ,
	'submit' => "" );
	if(($card_n===true) || ($card_n==0))
	{
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
		// echo'http://www.asiaflash.com/tarot/'.$url;
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
			$result=explode(' ></td>',$result);
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
				$card[3]=$res[0];
			break;
			case 2:
				$card[4]=$res[4];
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
			case 6:
				$card[6]=$res[6];
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


function Request($prenom='Nico',$card_n=true,$prenom_partenaire='')
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
		
		return RequestCouple($prenom,$prenom_partenaire,$card_n);
	}
}

function RequestCouple($prenom,$prenom_partenaire,$card_n)
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
		$doo = array(
		'prenom_partner' => "$prenom_partenaire",
		'ID'=>$id,
		'sequence'=>5,
		'submit' => "" );
		$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
		//print_r($result);
		$result=http_fetch_url('http://www.asiaflash.com/tarot/'.$page,$doo);
		$url= $page.'?ID='.$id.'&nn=555&sequence=6';
		$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
	}
	elseif($card_n==5)
	{
		$url= $page.'?ID='.$id.'&nn=555&sequence=7';
		$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
	}
	elseif($card_n==6)
	{
		$url= $page.'?ID='.$id.'&nn=555&sequence=8';
		$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
	}
	else
		$result=http_fetch_url_get('http://www.asiaflash.com/tarot/'.$url);
	$result=explode('<a href="tarot_couple.php?ID=',$result);
	unset($result[0]);
	$result=$result[1];
	$result=explode("<td></td>
</tr>
</table>",$result);// class="titre">
	$result=$result[0];
	$i=0;
	$result=explode('<td><img src="arcanes/',$result);
	if($card_n==3)
	{
		$index=array(1=>1,2=>2,3=>2,4=>1,5=>2,6=>3);
	}
	elseif($card_n==2)
	{
		unset($result[0]);
		$index=array(1=>1,2=>2,3=>0,4=>3,5=>2);
		// print_r($result);
		// die('<br /><br /><br />'.$url);
	}
	elseif($card_n==4)
	{
		$index=array(1=>1,2=>2,3=>3,4=>1,5=>2,6=>3);
	}
	//$result=explode(' ></td>',$result[0]);
	else
		$index=array(1=>1,2=>3,3=>0,4=>4,5=>2);
	if($card_n==3)
	{
		// print_r($result);
		// die();
	}
	if($card_n%3==0)
	$result=explode('alt="',$result[3]);
	else
	$result=explode('alt="',$result[($card_n%3)]);
	
	$result=explode('- ',$result[1]);
	$result=$result[0];
	//die($result);
	$result=(int)$result;
	return $result;
}

function RequestReponseCouple($seq)
{
	global $page;
	if(!isset($id))
		$id=$_SESSION['id'];
	if($seq==1)
		$url='http://www.asiaflash.com/tarot/'.$page.'?ID='.$id.'&sequence=9&nn=555#0';
	else
		$url='http://www.asiaflash.com/tarot/'.$page.'?ID='.$id.'&sequence=9&nn=555&step=1#0';
	$result=http_fetch_url_get($url);
	$result=explode('<font class="textenormal">',$result);
	$result=explode('</font>',$result[1]);
	$result=$result[0];
	// print_r($result);
	// die();
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
	$result2=explode('.gif" alt=',$result);
	if(isset($result2[1]))
	{
		$result2=explode('"',$result2[1]);
		// print_r($result2);
		$result1=explode('<font class="textenormal">',$result);
		$result1=explode('</font>',$result1[1]);
		if((trim($result2[1])<>'') && (trim($result2[0])==''))
			$result=$result2[1].'=>'.$result1[0];
		elseif(trim($result2[0])=='')
			$result=$seq.'=>'.$result1[0];
		else
			$result=$result2[0].'=>'.$result1[0];
		return $result;
	}
	else
		return '';
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
		// die('<br /><br /><br />'.$url);
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
	//$result=explode(' ></td>',$result[0]);
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
	// if($card_n>3)
	// {
		// print_r($result);
		// die('<br /><br /><br />'.$url);
	// }
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
	//$result=explode(' ></td>',$result[0]);
	else
	$index=array(1=>1,2=>3,3=>0,4=>4,5=>2);
	$result=explode('alt="',$result[$index[$card_n]]);
	$result=explode('- ',$result[1]);
	$result=$result[0];
	//die($result);
	$result=(int)$result;
	return $result;
}


?>

 </section>    
            </div>
                </section>

               

                <!-- Horizontal Categories -->
                <section class="cat-widget h-cat-1">
                    <div class="cat-widget-title">
                       
<h3>Tarot de couple</h3>
                        
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
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Le couple a sa propre alchimie, son énergie composante des deux individus. Vous pouvez faire votre astrologie gratuite avec MyAstro pour réaliser la composante idoine des deux individualités qui s'aiment souffrent et partagent leur bonheur.</h6>
                                                                        
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
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">La femme fonctionne généralement sur son côté "yin" l'homme quant à lui utilise le côté "yang". Que le couple soit hétéro ou homo, il est important de réaliser sa compatibilité amoureuse féminine "yin-yang" MyAstro vous y aidera car ce schéma se vérifie même en cas d'homosexualité.</h6>
                                                                        
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
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Le couple dans son fonctionnement créée sa propre trace énergétique. Il est important pour son équilibre de pouvoir consulter son horoscope du jour. MyAstro vous permet d'y accéder gratuitement et si vous souhaitez approfondir, son équipe d'astrologue le complète.</h6>
                                                                        
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
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Une vue de loin est stratégique dans une action. L'armée le sait et ses satellites et avions s'en occupent. Un balisage annuel est parfois nécessaire pour sortir le nez du guidon. demandez votre horoscope 2013.</h6>
                                                                        
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
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Cela peut sembler antinomique au premier abord mais un couple a sa propre astrologie personnalité. MyAstro le sait. Il guidera votre couple afin que celui-ci puisse lui révéler son astrologie personnalité de couple. Jouissez ensemble d'indices sur le destin de votre chemin de couple. </h6>
                                                                        
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
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Votre profil astrologique féminin est guidé de très haut, le rôle que vous jouez dans votre couple est tracé dans ces grandes lignes lorsque vous avez décidé de venir sur la planète terre. MyAstro se propose de vous le faire découvrir afin de connaitre les arcanes du futur.</h6>
                                                                        
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
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">La compatibilité amoureuse avec votre partenaire peut vous servir à contourner les embûches mises sur votre route. Votre rôle doit être joué en toute connaissance de cause. Essayez de connaitre sa compatibilité c'est exercer une action positive sur le couple.</h6>
                                                                        
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
<br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">La compatibilité amoureuse pour les hommes est un élément essentiel de son comportement afin que celui-ci soit en adéquation avec ce que nous réservent les astres. MyAstro le sait bien et vous conseille afin d'avoir l'attitude juste.</h6>
                                                                        
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
                    <!-- Right sidebar -->
                    <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
                </div>
            </div>
        </div>
            
        <?php include('include/footer_inc_tarot.php');?>