<?php
    $source = 'horoscope-de-l-amour-balance';
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss3('http://www.asiaflash.com/horoscope/rss_mensuel_amoureux_balance.xml');
    $ac_result = array();
    foreach($xml1['desc'] as $s_cle => $s_value){
        switch($s_cle){
            case 0 :
                $s_titre = 'Première Quinzaine';
                break;
            case 1 :
                $s_titre = 'Seconde Quinzaine';
                break;
            case 2 :
                $s_titre = 'Inspiration';
                $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
                break;
        }
        $ac_result[$s_titre] = $s_value;
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head>
        <title>Horoscope de l’amour balance : une aide précieuse</title>
        <meta name="description" content="Signe Balance : Vous vous posez des questions sur votre partenaire ? Vous entretenez une relation platonique sans savoir quoi faire ? L’horoscope de l’amour vous répond." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
        <?php include('include/header_inc.php'); ?>
        <style>
            .widget .form-part { background-color: #E51E85;}
            .widget #form-w .btn_button { background-color: #196BB3;}
        </style>
        
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Avancer sereinement grâce à un horoscope de l’amour balance</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Signe Balance : Vous vous posez des questions sur votre partenaire ? Vous entretenez une relation platonique sans savoir quoi faire ? L’horoscope de l’amour vous répond.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>

                    <!--  ************************ ici ****************************  -->
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php'); ?>

                        <!-- main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                                <div class="widget-title">
                                    <h4>VOTRE HOROSCOPE DE L’AMOUR CE MOIS : Balance</h4>
                                    <img src="images_voyance/signes/balance.png" class="signe" title="symbole Balance" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <p>Gouvernée par Vénus, la planète de l’amour, la Balance accorde une grande place aux sentiments. Longues discussions, dîners romantiques... vous recherchez la perfection. Et ce n’est pas toujours simple ! Pour vous aider à avancer en amour, vous avez la possibilité de consulter l’horoscope de l’amour de la Balance. </p>
                                    <h2>Les atouts des balances dans le domaine amoureux</h2>
                                    <p>Nées au tout début de l’automne, les Balances possèdent charme et tempérament. Ce signe d’air aime l’harmonie et les ambiances douces, les relations amicales et amoureuses. Parfois indécise, la Balance aime écouter les autres. Toujours à la recherche de l’équilibre, la Balance déteste les conflits et joue de ses charmes pour conserver le calme nécessaire à son bien-être. Amoureuse inconditionnelle, elle est fidèle. Pas d’anticonformisme pour elle, les choses doivent être faites dans l’ordre et mener à une relation parfaite ou l’amour doit être total et partagé. </p><br/>
                                    <p>Les natifs de la Balance sont nés entre le 22 septembre et le 22 octobre. Les planètes au moment de leurs naissances mais aussi les positions de celles-ci ont influencé leurs caractères. Au jour le jour, ces positionnements évoluent et pour traduire ces mouvements, des professionnels de l’astrologie vous proposent un horoscope de qualité pour vous guider dans le domaine de l’amour. Un horoscope de l’amour Balance vous aidera à comprendre vos relations mais également à savoir quoi faire en cas de difficultés.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Un horoscope de l’amour Balance pour réussir sa vie amoureuse</h2>
                                    <p>Si vous avez décidé de vivre sans doute et de ne plus vous poser ces questions, qui minent votre quotidien, il existe plusieurs méthodes de divination dont la plus appréciée est sans conteste l’astrologie. Les astrologues vont étudier les mouvements des planètes principales Mars, Mercure, Vénus, Neptune ou encore Saturne mais également du Soleil et de la Lune.  Pour savoir quelles décisions prendre face à un problème - Est-il le compagnon idéal ? Me convient-il ? Notre relation est-elle sérieuse ?  - mais aussi pour pouvoir anticiper les difficultés, consulter son horoscope est une aide précieuse.</p><br/>
                                    <p>Vous ne savez que penser de votre partenaire ? Vous avez envie que les choses deviennent plus sérieuses ? Vous pourrez trouver des réponses avec l’horoscope de l’amour Balance. Avec des conseils précis, votre avenir amoureux va s’éclairer. Et si vous voulez plus d’informations, vous avez la possibilité de consulter vos compatibilités amoureuses, les profils astrologiques de vos relations ou encore obtenir des réponses avec un tirage du tarot.  Votre vie amoureuse sera plus simple grâce à l’astrologie.</p>     
                                </div>
                            </div><br/>
                        </div><!-- fin main content -->

                        <!-- Right sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php'); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_horoscope_amour.php'); ?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>