<?php
/* 
    -----------------------------------------------------
    --   tarot-direct-amour-tchat = DRI TCHAT POST LANDING   --
    -----------------------------------------------------

    Created on : 07 juin 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/

$root = './';
$cards_dir = 'tarot/cartes/original-grand/';
$include_form_dri = false;
include('tchat-gratuit/init.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Tarot Direct Amour - Interprétation en live !</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="images_landing/tarot-direct-amour/favicon.png" />
        
        <link rel="stylesheet" type="text/css" href="css/tarot-direct-amour.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="ContentBand ThreeCols SiteHeader">
            <div class="PageWrapper ContentBand-Table">
                <div class="ContentBand-Column SiteHeader-Slogan1">
                    Tirage de tarot gratuit<br>
                    avec interprétation en live !
                </div>
                <a href="/tarot-direct-amour"><div class="ContentBand-Column"><div class="SiteHeader-Logo"></div></div></a>
                <div class="ContentBand-Column SiteHeader-Slogan2">
                    Votre tirage <strong>en direct</strong><br>
                    en 2 minutes chrono !
                </div>
            </div>
        </header>
        <section class="ContentBand TwoCols Principal">
<!-- ------------------------- BANDEAU PROMOTIONEL ------------------------- -->
            <header class="ContentBand-ColumnHeader Title">- Je suis également disponible par <strong><a href="tel:+33492187947">téléphone!</a></strong>-</header>
            <div class="PageWrapper">
                <div class="ContentBand-Table">
                    <div class="ContentBand-Column DRI-Promo withPop">
                        <div class="Pop Pop-Voyant <?= $tchat->getPsychicName();?>">
                            <span class="Pop-Voyant-Photo"></span>
                        </div>
                        <div class="DRI-Promo-DescText">
                            A tout moment, vous pouvez contacter <?= $tchat->getPsychicName();?> par téléphone. Si vous souhaitez obtenir des réponses plus complètes et plus détaillées, vous pouvez appeler et bénéficier d’une consultation privée et exclusive immédiatement ! Grâce à votre code promo, bénéficiez des 10 premières minutes de consultation à seulement 1€ sans aucun engagement ! Les minutes supplémentaires éventuelles sont à 4€ si et seulement si vous le souhaitez !
                        </div>
                        <div class="DRI-Promo-Slogan">
                            <span class="DRI-Promo-Slogan-TelIcon"></span>
                            Appelez au <a href="tel:+33492187947" class="DRI-Promo-Slogan-Tel">04.92.18.79.47</a> et demandez <?= $tchat->getPsychicName();?><br />
                            Votre code promo : <span class="DRI-Promo-Slogan-CodePromo"><?= $tchat->getCodePromo();?></span>
                        </div>
                    </div>
                </div>
            </div>
<!-- ---------------------------- TCHAT GRATUIT ---------------------------- -->
            <section class="ContentBand Tchat-Gratuit">
                <div class="PageWrapper ContentBand-Table">
                    <div class="ContentBand-Column">
                        <header class="Tchat-Gratuit-Title">Interprétation de votre tirage par <?= $tchat->getPsychicName();?></header>
                        <article>
                            <?php include('tchat-gratuit/widget-template.php');?>
                        </article>
                        <footer class="Tchat-Gratuit-Footer"><span class="">Pour répondre :</span><a href="#" class="FormField-Button">Lancer le TCHAT privé</a></footer>
                    </div>
                </div>
            </section>
        </section>
<!-- --------------------------- TIRAGE DU TAROT --------------------------- -->
        <div id="scn-tarot">
            <section class="ContentBand Tarot">
                <div class="PageWrapper ContentBand-Table">
                    <div class="ContentBand-Column">
                        <article class="WidgetTarot">
                            <div class="WidgetTarot-ResultMsg">Votre tirage transmis à <?= $tchat->getPsychicName();?></div>
                            <div class="WidgetTarot-Result">
                                <?php for($i=0;$i<5;$i++){ ?>
                                <div class="WidgetTarot-Card place" data-number="<?= $i ?>" style="background-image: url('<?= $cards_dir.$draw[$i];?>')"></div>
                                <?php } ?>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
        
        <div class="SiteCopyright"><?php include('include/footer_copyright-v2.php'); ?></div>s
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            /* Configuration du tchat */
            var msgs = <?= json_encode($tchat->getFlattenMessages()); ?>;
            var seerName = <?= json_encode($tchat->getPsychicName()); ?>;
            var tchat_voyant = <?= json_encode($tchat->getPsychicName()); ?>;
        </script>
        <script src="tchat-gratuit/script.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
        
        <!-- #### CONVERSION #### -->
        <?php include('include/conversion/adwords.php');
              include('include/conversion/facebook.php');
              include('include/conversion/reflexcash.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />