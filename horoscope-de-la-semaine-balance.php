<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('https://www.asiaflash.com/horoscope/rss_hebdotay_complet_balance.xml');
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
        <title>Horoscope de la semaine Balance | MyAstro</title>
	<meta name="description" content="Signe Balance :Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />
            
        <?php include('include/header_inc.php');?>
    
        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope de la semaine Balance : pour entrevoir son avenir avec sérénité</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Envisager le futur est souvent source d’inquiétudes et de questionnement de toutes sortes. Pour déminer les pièges de l’avenir et trouver une aide inespérée pour faire les bons choix, connaitre son horoscope de la semaine Balance est une décision des plus judicieuses.</p>
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
                                    <h4>Votre horoscope de la semaine gratuit : Balance</h4>
                                </div>
                                <img src="images_voyance/signes/balance.png" class="signe" alt="Signe Astrologique Bélier" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                <h2>Horoscope du signe de la Balance : une multitude de services pour ne plus craindre l’avenir</h2>
                                <p>Pour planifier sa semaine de la meilleure façon possible, mieux vaut s’appuyer sur les dons des médiums du site. Chacun dispose d’une réelle capacité à prédire la semaine qui s’annonce. Sans avoir à utiliser la moindre carte bancaire, il est ainsi possible d’obtenir de précieux éléments sur ce qui fera les moments forts et les moments difficiles de la semaine suivante. Lire son horoscope est recommandé lorsque l’on souhaite éviter les désagréments et orienter son existence conformément à ses souhaits.</p><br/>
                                <p>En seulement quelques clics, il est ainsi possible de découvrir les grandes lignes de la semaine à venir. Tous les thèmes qui sont essentiels à la vie y sont abordés avec un luxe de détails et de précision. Pour celles et ceux qui craignent de ne pas prendre les bonnes décisions dans leur quotidien, l’horoscope de la semaine Balance leur fournira un soutien de tout premier ordre. Bien souvent, le bonheur et l’épanouissement tant personnel que professionnel tient à la prise de bonnes décisions, ces dernières pouvant être favorisées par la lecture de son horoscope.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Découvrir son horoscope de la semaine Balance : tous les domaines de la vie abordés</h2>
                                    <p>Que l’on souhaite savoir si la semaine à venir réserve son lot de bonnes nouvelles, que l’on veuille être rassuré sur son avenir amoureux ou sur ses perspectives professionnelles, l’horoscope de la semaine dévoilera plus d’une information capitale pour la suite des évènements. Amour, travail, santé et tous les thèmes qui rendent la vie si attrayante sont abordés avec un luxe de détails.</p><br/>
                                    <p>Outre le fait d’avoir un accès privilégié à son horoscope de la semaine Balance, il est également possible de bénéficier d’une séance de tarot chaque jour, chaque semaine ou chaque mois pour avoir toutes les réponses à ses questions. Il est même possible de s’offrir une séance de tarot de couple pour améliorer sa vie à deux et trouver de nouvelles perspectives d’épanouissement. Que cela soit par sms, par téléphone ou en ligne, l’horoscope des personnes nées sous le signe de la Balance dispose ici d’une méthode unique pour envisager leur futur sous les meilleurs auspices.</p>
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