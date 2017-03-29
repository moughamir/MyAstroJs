<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_vierge.xml');
    $ac_result = array();
    foreach( $xml1['desc'] as $s_cle => $s_value ){
        if ($s_cle === 'citation_de_la_semaine'){
            $s_titre = 'Citation de la semaine';
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
        } else {
            $s_titre = ucfirst($s_cle);
        }
        $ac_result[$s_titre] = $s_value;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Vierge : Pour connaître votre horoscope de la semaine, pensez à notre plateforme</title>
	<meta name="description" content="Signe Vierge : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Tout savoir sur l’horoscope de la semaine Vierge</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Signe Vierge : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
<!-- ------------------------------- CONTENU ------------------------------- -->
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-secondaire.php');?>
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                            <div class="widget-title">
                                <h4>Votre horoscope de la semaine gratuit : Vierge</h4>
                            </div>
                            <img src="images_voyance/signes/vierge.png" class="signe" alt="Signe Astrologique Vierge" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <p>Venez découvrir plus en détails votre personnalité et ce que l’avenir vous réserve sur notre plateforme. Profitez d’un service d’informations totalement gratuit et parfaitement complet, relayé par une équipe de voyants bénévoles dont l’objectif est de vous apporter des solutions par rapport à tous vos questionnements.</p>
                                    <h2>Apprenez à vous connaître avec l’horoscope de la semaine Vierge</h2>
                                    <p>Que vous ayez des questions au sujet de votre travail, de vos amours, ou encore de votre santé, n’hésitez pas à venir consulter gratuitement un voyant ou un médium bénévole. Accédez à l’horoscope de la semaine Vierge, et venez puiser des réponses à vos interrogations sur notre plateforme. Besoin d’un changement professionnel ? Désir de tourner la page au niveau amoureux ? Nécessité d’éclaircir un souci d’origine familiale ou amicale ? Envie de savoir si votre santé continuera d’être au beau fixe ? Utilisez les compétences de nos voyants bénévoles pour progresser dans votre quotidien !</p><br/>
                                    <p>L’avantage d’une consultation pour connaitre votre horoscope de la semaine Vierge vous permet de faire vos choix en toute connaissance de cause. Si vous êtes soumis à un certain stress, à une certaine angoisse, voire à une certaine appréhension, évoquez vos sujets de réflexion avec des voyants et des médiums bénévoles est désormais une possibilité simple et accessible. A votre écoute et sensibilisés à la psychologie, nos voyants s’appuient d’ailleurs sur leur savoir-faire et leur réelle expérience. Notez que ces prévisions peuvent également être réalisées au quotidien ou chaque mois. Un horoscope pour le signe de la Vierge peut être enfin thématisé, axé par exemple sur l’Amour.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Horoscope hebdomadaire pour les Vierges : Comment cela fonctionne ?</h2>
                                    <p>Le fonctionnement de notre plateforme de consultations gratuites est très simple. Chaque semaine, une équipe de voyants actualise l’horoscope de la semaine Vierge, et vous indique plus personnellement l’itinéraire à suivre. Si une prévision astrale ne révèle pas forcément le déroulé de la semaine dans les moindres détails, elle permet cependant d’appréhender les grandes lignes conductrices. L’horoscope pour les femmes Vierge comme pour les hommes Vierge permet de révéler les priorités et mieux savoir déceler les attitudes des personnes qui vous entourent. Récoltez de précieuses informations sur votre vie professionnelle et privée, afin de pouvoir mieux affronter les obstacles qui se dressent devant vous.</p><br/>
                                    <p>Vous avez une semaine particulièrement chargée dans le cadre de votre travail entre rendez-vous importants et réunions cruciales ? Vous avez flashé sur une personne dans les transports en commun et vous vous demandez si une réciprocité est envisageable ? Un de vos parents se rend à l’hôpital pour passer des examens et vous souhaitez en savoir un peu plus sur l’avenir ? N’hésitez plus et venez consulter votre horoscope de la semaine Vierge en bénéficiant du savoir-faire de notre équipe de voyants bénévoles.</p>     
                                </div>
                            </div>
                        </div>
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_horoscope_semaine.php');?>