<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_capricorne.xml');
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
        <title>Horoscope de la semaine Capricorne : Amour, travail et santé | MyAstro</title>
	<meta name="description" content="Signe Capricorne : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />

        <?php include('include/header_inc.php');?>
    
        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">L’horoscope de la semaine Capricorne, une aide au quotidien</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Lorsque débute la semaine, grande est votre impatience de savoir ce qu’elle vous réserve. Amis Capricornes, comment aborder les jours qui vont suivre tant sur le plan professionnel que personnel ? Pour le savoir, n’hésitez pas à consulter gratuitement l’horoscope de la semaine Capricorne et aussi le horoscope hebdomadaire Capricorne.</p>
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
                                    <h4>Votre horoscope de la semaine gratuit : Capricorne</h4>
                                </div>
                                <img src="images_voyance/signes/capricorne.png" class="signe" alt="Signe Astrologique Capricorne" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Votre horoscope de la semaine Capricorne, c’est bon pour votre moral !</h2>
                                    <p>Amour travail, bonheur, santé, faites le point sur ce que vous réserve votre semaine astrologique et démarrez-la du mieux possible. Votre horoscope de la semaine agit comme un véritable remède anti-morosité et vous rend optimiste. Des prédictions positives et pourquoi pas des compliments vous aideront à partir du bon pied. Si votre horoscope ne vous le dit pas, qui le fera ? Des paroles rassurantes vous permettront de mieux affronter le lundi et comme un coach personnel vous aideront à exploiter les qualités qui sommeillent en vous et qui sont jusqu’à présent sous-estimées. Votre horoscope hebdomadaire Capricorne vous encourage, vous motive et vous donne la force nécessaire pour gérer cette nouvelle semaine.</p>
                                    <h2>Au travail, sachez prendre les bonnes décisions</h2>
                                    <p>Votre nature ambitieuse et persévérante vous oblige à faire preuve de ténacité pour atteindre les buts que vous vous êtes fixés. Vous croyez aux signes ? Votre horoscope de la semaine Capricorne peut vous guider dans vos choix, vous éclairer dans vos décisions d’ordre professionnel. Travailleur(se) acharné(e) vous êtes et le labeur ne vous effraie pas. Pour mettre toutes les chances de votre côté, le baromètre des astres vous aide et vous conseillera peut-être d’attendre pour conclure certaines affaires.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Côté cœur, faites confiance à votre horoscope</h2>
                                    <p>Peu démonstratif et réservé, le Capricorne est sujet aux déceptions sentimentales. Votre horoscope de la semaine est là pour vous aider. Vous venez de faire une rencontre, ne savez comment sauter le pas vers une relation, vous avez une décision à prendre ? Comment faire, est-ce le bon moment d’agir, de vous dévoiler… Autant d’interrogations auxquelles vous ne savez répondre. Avant d’agir, de vous dévoiler, consultez votre horoscope de la semaine. Est-ce que les astres sont en phase avec Cupidon pour les 7 jours à venir ? Ne prenez pas le risque de tout gâcher, consultez plutôt votre astro hebdo gratuite.</p>
                                    <h2>Capricornes, avec quels signes allez-vous le mieux vous entendre cette semaine ?</h2>
                                    <p>Votre horoscope de la semaine vous conseillera au vu de la position des astres et vous donnera ses prédictions à 7 jours dans le domaine des relations sociales. A qui pouvez-vous faire confiance, comment réagir face à telle ou telle situation, comment obtenir satisfaction dans vos démarches… L’horoscope de la semaine Capricorne vous sera d’une aide précieuse !</p>     
                                </div>
                            </div>
                        </div>
                        <!-- Right sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_horoscope_semaine.php');?>