<?php
/* 
    -----------------------------------------------------
    --   tarot-direct-tchat = DRI TCHAT POST LANDING   --
    -----------------------------------------------------

    Created on : 07 juin 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/

// Paramètres design
$root = './';
include('include/visual_modules/tarot-direct/design-load.php');
// Paramètre formulaire
$include_form_dri = false;
include('tchat-gratuit/init.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Tarot Direct - Interprétation en live !</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="<?= $pict_path ?>favicon.png" />
        
        <link rel="stylesheet" type="text/css" href="<?= $css ?>" />
        
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
                <div class="ContentBand-Column"><div class="SiteHeader-Logo"></div></div>
                <div class="ContentBand-Column SiteHeader-Slogan2">
                    Votre tirage <strong>en direct</strong><br>
                    en 2 minutes chrono !
                </div>
            </div>
        </header>
        <section class="ContentBand TwoCols Principal">
<!-- ------------------------- BANDEAU PROMOTIONEL ------------------------- -->
            <header class="ContentBand-ColumnHeader Title">- Je suis également disponible par <strong>téléphone !</strong> -</header>
            <div class="PageWrapper">
                <div class="ContentBand-Table">
                    <div class="ContentBand-Column DRI-Promo withPop">
                        <div class="Pop Pop-Voyant <?= $tchat->getPsychicName();?>">
                            <span class="Pop-Voyant-Photo"></span>
                        </div>
                        <div class="DRI-Promo-DescText">
                            Envie de réponses plus complètes et détaillées tout de suite ? Appelez <?= $tchat->getPsychicName();?> et obtenez tout ce que vous souhaitez savoir ! Votre voyante est disponible immédiatement pour une consultation privée par téléphone. Profitez en plus de votre code promo personnel. Il vous suffit de le communiquer à <?= $tchat->getPsychicName();?> pour profiter des 10 minutes de consultation à 1€ seulement ! Avec la possibilité de prolonger votre échange aussi longtemps que vous le souhaitez. De quoi apporter des réponses à toutes vos questions et de savoir de quoi demain sera fait.
                        </div>
                        <div class="DRI-Promo-Slogan">
                            <span class="DRI-Promo-Slogan-TelIcon"></span>
                            Appelez le <a href="tel:0482537159" class="DRI-Promo-Slogan-Tel">04.82.53.71.59</a> et demandez <?= $tchat->getPsychicName();?><br />
                            Votre code promo : <span class="DRI-Promo-Slogan-CodePromo"><?= $tchat->getCodePromo();?></span>
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
                    </div>
                </div>
            </section>
        </section>
<!-- --------------------------- TIRAGE DU TAROT --------------------------- -->
        <section class="ContentBand Tarot Arrowed">
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
        
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
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
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />