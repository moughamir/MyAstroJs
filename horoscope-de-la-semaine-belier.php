<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_belier.xml');
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
        <title>Horoscope de la semaine Bélier : pour une semaine réussie | Myastro</title>
	<meta name="description" content="Signe Bélier : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />
            
        <?php include('include/header_inc.php');?>
    
        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope de la semaine Bélier</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Signe Bélier : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro.</p>
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
                                    <h4>Votre horoscope de la semaine gratuit : Bélier</h4>
                                </div>
                                <img src="images_voyance/signes/belier.png" class="signe" alt="Signe Astrologique Bélier" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <p>Vous voulez en savoir un peu plus sur ce qui vous attend, n’attendez pas que les événements coulent sur vous et jetez-vous sur l’horoscope de la semaine Bélier. Beaucoup de choses peuvent se jouer en une semaine, gardez donc l’esprit et les yeux ouverts.</p>
                                    <h2>Foncez sur l’horoscope de la semaine Bélier !</h2>
                                    <p>Votre tempérament fonceur vous intime d’en savoir plus et de rester aux aguets de tout ce qui peut vous arriver, alors n’attendez pas pour découvrir tout ce qui vous concerne que ce soit dans le domaine de l’amour, de vos finance, de votre santé, ou encore professionnellement. Décortiquées par des voyants experts en la matière, vos prévisions donneront un sens à ce que vous envisagez pour votre avenir et sauront vous guider dans vos choix.</p><br/>
                                    <p>Vous savez ce que vous voulez mais un petit signe d’encouragement dans la voie que vous avez choisie ne serait pas superflu ? Vous êtes un peu perdu suite à des déboires amoureux, un souci de santé ou un stress professionnel ? Quelle que soit votre situation votre horoscope de la semaine Bélier répondra à toutes vos interrogations. Alors, pas d’hésitation à avoir, il serait de bon augure de ne pas fermer les yeux sur votre horoscope. Savoir ce que nous réserve notre avenir est un véritable atout, une chance, un homme averti en vaut deux et se préparer au pire comme au meilleur permet d’appréhender l’adversité au mieux.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Amour, santé et travail, le triptyque de votre avenir</h2>
                                    <p>Des voyants ont scruté les astres et ont traduit leur langage pour mieux cerner votre futur proche et vous guider à travers celui-ci. Profitez donc de leurs lumières, soyez audacieux et faites en sorte que les prédictions tournent à votre avantage. En amour tout est possible ! Evidemment, rien de plus instable que l’amour, c’est pourquoi un indice même léger pourra nous encourager et nous mettre sur le bon chemin à emprunter. Ne négligeons donc pas la piste qui vous ouvrira peut être la porte du paradis. L’horoscope de la semaine Bélier saura vous guider et traverser les embûches.</p><br/>
                                    <p>L’argent ça va vient, mais quand ça vient ça va ! et pour que ça vienne, il ne faut pas rater l’opportunité qui ne se présentera peut-être pas sous la forme qu’on attendait. Accepter le job ou pas, le quitter, le garder, demander un prêt, financer un ami. Tout savoir sur la pérennité de sa situation financière est essentiel. L’horoscope de la semaine Bélier sera tout aussi déterminante en ce qui concerne votre santé et celle des vôtres, savoir ce qu’il faut faire pour qu’une situation perdure ou ne se dégrade pas. Mettez toutes les chances de votre côté pour être heureux !</p>     
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