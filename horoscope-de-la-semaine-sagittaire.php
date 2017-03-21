<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_sagittaire.xml');
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
        <title>L’horoscope hebdomadaire du Sagittaire : Des prédictions pour vous aider</title>
	<meta name="description" content="Signe Sagittaire : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />

        <?php include('include/header_inc.php');?>
    
        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope de la semaine Sagittaire : Anticipez l’avenir</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Fougueux et passionné, le Sagittaire aime sa liberté et apprécie peu le doute. Pour l’aider à avancer de la manière qu’il entend, des petits conseils peuvent parfois s’avérer utiles. Pour cela, l’horoscope de la semaine Sagittaire est tout à fait approprié. </p>
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
                                    <h4>Votre horoscope de la semaine gratuit : Sagittaire</h4>
                                </div>
                                <img src="images_voyance/signes/sagittaire.png" class="signe" alt="Signe astrologique Sagittaire"/>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Pour y voir plus clair, lisez votre horoscope hebdomadaire</h2>
                                    <p>Nés entre le 22 novembre et le 22 décembre, les Sagittaires sont des êtres au cœur chaud. Impatients, directs et toujours enclins à la nouveauté, ils aiment le changement et détestent la routine. Mais quelquefois cet aspect du caractère du Sagittaire peut être redoutable. C’est la raison pour laquelle, pour ne pas se tromper, ce signe de la fin de l’automne a besoin d’être aiguillé pour ne pas faire erreur dans ses choix. Semaines après semaines, cet éternel optimiste pourra trouver conseils dans un horoscope gratuit dédié à son signe.</p><br/>
                                    <p>Au moment de la naissance, les diverses planètes sont positionnées dans le ciel. C’est cette configuration qui fait de vous ce que vous êtes. Soleil, Lune, et planètes permettent également de dessiner un climat astral pour une période donnée. Des professionnels de l’astrologie effectuent régulièrement des calculs et les interprètent afin que chacun puisse connaître son avenir. Transits positifs ou négatifs, oppositions, permettent d’obtenir des réponses aux diverses problèmes qui peuvent apparaître et ainsi vous guident vers un futur réussi. Vous trouverez ces prédictions dans l’horoscope de la semaine Sagittaire.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Votre horoscope de la semaine Sagittaire : simple et gratuit</h2>
                                    <p>L’astrologie est la méthode de prédiction la plus populaire et la plus appréciée. De véritables professionnels de l’étude des planètes travaillent à nos cotés pour vous fournir un horoscope de la semaine pour le Sagittaire de qualité et précis. Suivant le domaine qui vous intéresse - amour, travail, santé, argent ou famille - vous trouverez la réponse à vos questions de manière régulière. À cela s’ajoute une citation qui amène une réflexion en lien direct avec votre personnalité ou avec les évènements que vous rencontrerez durant la semaine à venir.</p><br/>
                                    <p>Pour faire face à toutes les situations, l’horoscope de la semaine Sagittaire vous apporte conseils et aide. Rencontrerez-vous l’amour ? Obtiendrez-vous l’avancement tant attendu dans votre travail ou serez-vous moins fatigué la semaine prochaine ? Tant de questions qui enfin auront une réponse pour vous permettre d’avancer. Et si vous désirez de plus amples informations, n’hésitez pas à consulter les autres rubriques : astrologie personnalisée, compatibilité amoureuse ou encore tirage de tarot. Grâce à l’horoscope de la semaine Sagittaire, vous pourrez profiter de l’avenir sans stress.</p>     
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