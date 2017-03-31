<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_verseau.xml');
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
        <title>Horoscope de la semaine Verseau : Un guide essentiel | MyAstro</title>
	<meta name="description" content="Signe Verseau : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Votre horoscope de la semaine Verseau : Avancez sereinement</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Cette nouvelle semaine, vous ne la sentez pas trop. Vous avez des rendez-vous déterminants, sans compter ce conflit avec votre patron qui vous mine. Ce qu’il vous faudrait, ce sont des réponses quant aux multiples questions que vous vous posez. Consultez aussi votre horoscope Verseau semaine prochaine.</p>
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
                                <h4>Votre horoscope de la semaine gratuit : Verseau</h4>
                            </div>
                            <img src="images_voyance/signes/verseau.png" class="signe" alt="Signe Astrologique Verseau" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Se préparer au mieux avec l’horoscope de la semaine Verseau</h2>
                                    <p>Avant dernier des signes du zodiaques, le Verseau est régit par la planète Uranus. La personnalité du Verseau est caractérisée par le rêve et l’espoir, et son élément est l’air. Nécessairement, le Verseau a tendance à flotter, et peine à trouver son ancrage au sol. Quoi de mieux, si vous êtes Verseau, que d’avoir un parfum de ce que la semaine prochaine vous réserve ? Amour, santé, argent, carrière et famille : avec votre horoscope de la semaine Verseau, vous anticipez les jours prochains, et vous êtes préparés à toutes les éventualités !</p><br/>
                                    <p>Votre horoscope hebdomadaire Verseau vous proposera un avant-goût des grandes lignes de votre semaine à venir. Allez-vous affronter un défi important ? Rencontrerez-vous le grand amour ? Serez-vous porté par la chance, ou au contraire, vaut-il mieux attendre la semaine d’après pour faire preuve d’audace ? Nos astrologues talentueux prodiguent l’horoscope Verseau et vous apportent des réponses et des éclairages. N’hésitez plus à vous fier aux étoiles et aux planètes pour prendre des décisions réfléchies et avisées !</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Le meilleur horoscope de la semaine Verseau</h2>
                                    <p>Grâce à votre horoscope, vous avez la possibilité de décaler votre regard, et d’appréhender différemment une situation, un sentiment ou un état. En effet, nous sommes tous, et régulièrement, confrontés à des questions importantes ou angoissantes, à des choix intimidants et durables, ou encore à des doutes intimes ou généraux. Comment faire pour avancer de manière apaisée ? L’astrologie est une réponse pleine de sagesse, pour ne plus être seul face à des problématiques compliquées. Grâce à votre horoscope de la semaine Verseau, vous obtenez une vision différemment formulée de votre situation, et vous avez ainsi la possibilité de rafraîchir votre regard, ou de prendre du recul.</p><br/>
                                    <p>Avec l’horoscope, il n’y a pas de règle ! On le lit distraitement, pour se changer les idées; on le feuillette chaque semaine pour avoir un aperçu de ce qu’on s’apprête à vivre; on le lit religieusement et on s’y voue complètement; on le consulte à la veille d’un rendez-vous majeur pour se porter chance; on le lit pour se remonter le moral en cas de coup dur. Quoiqu’il en soit, l’horoscope Verseau de la semaine vous accompagne et vous prédit votre avenir avec justesse et précisions !</p>     
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