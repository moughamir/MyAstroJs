<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_gemeaux.xml');
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
        <title>Horoscope de la semaine Gémeaux : pour une semaine réussie | Myastro</title>
	<meta name="description" content="Signe Gémeaux : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />
            
        <?php include('include/header_inc.php');?>

        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope de la semaine Gémeaux</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Signe Gémeaux : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro.</p>
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
                                    <h4>Votre horoscope de la semaine gratuit : Gémeaux</h4>
                                </div>
                                <img src="images_voyance/signes/gemeaux.png" class="signe" alt="Signe astrologique Gémeaux" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <p>L’astrologie offre un petit coup de pouce à ne pas négliger, qui nous accompagne pour prendre des décisions, pour anticiper sur la semaine à venir, ou encore pour nous éclairer sur ce doute qui nous poursuit. Grâce à l’horoscope de la semaine pour les Gémeaux, vous savez à quoi vous attendre pour les prochains jours, et vous disposez de tous les outils pour vous préparer au mieux à toutes les éventualités !</p>
                                    <h2>Le meilleur horoscope de la semaine Gémeaux</h2>
                                    <p>Evidemment, l’horoscope ne nous dira pas en détail ce qu’il se passera la semaine prochaine. Mais il nous en donne la couleur, l’atmosphère, ainsi que les grandes lignes. Vous avez un rendez-vous déterminant pour votre carrière, la semaine prochaine ? Vousvous demandez si vous allez enfin rencontrer l’amour, et dans quelles circonstances ? Vous aimeriez savoir quelle sera l’issue de ce conflit amical ou de cette tension familiale qui vous agace ? Avec votre horoscope de la semaine Gémeaux, vous avez des pistes de réponses !</p><br/>
                                    <p>Il y a de multiples manières d’avoir recours à son horoscope de la semaine Gémeaux. Certaines personnes ne le consultent qu’occasionnellement, dans une période très angoissée, ou à un moment qui semble alors très déterminant. D’autres ont pris l’habitude de le lire chaque semaine à heure fixe, comme un mot d’encouragement pour entamer cette semaine qui commence. Il existe également des amateurs d’astrologie qui lisent leur horoscope de temps à autre comme un porte bonheur.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Tout savoir avec l’horoscope de la semaine Gémeaux</h2>
                                    <p>Nos astrologues sont talentueux et plein d’expériences. Ils sont curieux et humbles, et adorent continuer à perfectionner leur art. Ainsi, ils livrent chaque semaine un horoscope pour les Gémeaux d’une extrême justesse, et doté de nombreux conseils pratiques. Grâce à ces professionnels avisés de l’astrologie, notre horoscope de la semaine Gémeaux est toujours précis, et les prédictions annoncées, qu’elles se situent dans le domaine du coeur, dans le champ professionnel ou relationnel, se vérifient tout au long de la semaine, pour le plus grand plaisir des Gémeaux !</p><br/>
                                    <p>Nous avons tous des coups de blues, des incertitudes ou des petites angoisses : ces contretemps font partie de la vie au même titre que les grandes périodes de bonheur. Mais y faire face seul n’est pas facile, et trouver des réponses sans un coup de pouce est presque impossible. Grâce à l’astrologie, vous dissipez vos doutes en tendant vers une piste de réponse, ou en alimentant votre réflexion. Avec l’horoscope de la semaine pour les Gémeaux, vous abordez les prochains jours tranquillement, en toute sérénité !</p>     
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