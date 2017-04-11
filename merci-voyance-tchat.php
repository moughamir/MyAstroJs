<?php
/**
 * merci-voyance-tchat == DRI
 * ---------------------------------
 * Created on : 23 novembre 2016 By Laurène Dourdin <2aurene@gmail.com>
 * Updated on : 10 avril 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
session_start();
$img_path = 'images_landing/merci-voyance-tchat/';
$email = isset($_SESSION['email'])? $_SESSION['email'] : '';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Voyance par tchat gratuit : Essayez 5 minutes de tchat gratuites</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        <link rel="stylesheet" type="text/css" href="css/merci-voyance-tchat.css" />
    </head>
    <body>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <nav class="SiteHeader-Nav">
                    <a href="http://<?= ROOT_URL;?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <!--
                 --><a href="http://<?= ROOT_URL;?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <!--
                 --><a href="http://<?= ROOT_URL;?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a>
                </nav>
            </div>
        </header>
        <section class="ContentBand WithDecoration">
            <div class="PageWrapper ContentBand-FlexContainer">
                <div class="ContentBand-FlexItem TextContent">
                    <div class="TextContent-Window">
                        <header class="ContentBand-ColumnHeader">
                            <span class="SiteLogo"></span>
                        </header>
                        <article class="DescText">
                            <h3 class="DescText-Title">Votre demande a bien été prise en compte</h3>
                            <p>Vous recevrez un appel dès demain en provenance du numéro 04.81.68.20.14</p>
                        </article>
                    </div>
                    <img src="<?= $img_path;?>voyante.png" alt="" class="WithDecoration-Img" />
                </div>
                <div class="ContentBand-FlexItem PromoContent">
                    <article class="PromoContent-Window">
                        <h2 class="PromoContent-Slogan">Toutes vos réponses en un simple CLIC</h2>
                        <h1 class="PromoContent-Title">5 minutes de tchat gratuites</h1>
                        <a href="https://voyance-en-direct.tv/myastro/offre-gratuite?email=<?= $email;?>" class="FormField-Button">Je lance le TCHAT</a>
                        <ul class="PromoContent-PsychicList" id="psychic_list">
                            <li class="PsychicList-Item">
                                <img src="<?= $img_path;?>ulysse.jpg" alt="Ulysse" class="PsychicList-Item-Img" />
                                Ulysse
                            </li>
                            <li class="PsychicList-Item">
                                <img src="<?= $img_path;?>gaelle.jpg" alt="Gaëlle" class="PsychicList-Item-Img" />
                                Gaëlle
                            </li>
                            <li class="PsychicList-Item PsychicList-Line2">
                                <img src="<?= $img_path;?>sylvain.jpg" alt="Sylvain" class="PsychicList-Item-Img" />
                                Sylvain
                            </li>
                            <li class="PsychicList-Item PsychicList-Line2">
                                <img src="<?= $img_path;?>helene.jpg" alt="Hélène" class="PsychicList-Item-Img" />
                                Hélène
                            </li>
                        </ul>
                        <ul class="PromoContent-PsychicList PsychicList-Line2">
                            <li class="PsychicList-Item">
                                <img src="<?= $img_path;?>daniel.jpg" alt="Charly" class="PsychicList-Item-Img" />
                                Daniel
                            </li>
                            <li class="PsychicList-Item">
                                <img src="<?= $img_path;?>sonia.jpg" alt="Charly" class="PsychicList-Item-Img" />
                                Sonia
                            </li>
                        </ul>
                    </article>
                    <h1 class="PromoContent-Ribbon">5 minutes de tchat gratuites</h1>
                </div>
            </div>
        </section>
        <section class="ContentBand">
            <div class="PageWrapper ContentBand-FlexContainer">
                <div class="ContentBand-FlexItem How">
                    <h2 class="How-Header">Comment ça marche ?</h2>
                    <ul class="How-Wizard">
                        <li class="How-WizardItem">
                            <span class="How-WizardItem-Img user-choice"></span>
                            <span class="How-WizardItem-Txt">Je choisis<br/>mon voyant</span>
                        </li>
                        <li class="How-WizardItem">
                            <span class="How-WizardItem-Img tchat"></span>
                            <span class="How-WizardItem-Txt">Je lance<br/>le TCHAT</span>
                        </li>
                    </ul>
                </div>
                <div class="ContentBand-FlexItem">
                    <article class="FormContainer">
                        <h4 class="FormContainer-Title">Amour, Travail, Argent…</h4>
                        <p class="FormContainer-Slogan">Pour profiter immédiatement des 5 minutes de tchat gratuites, cliquez sur le bouton ci-dessous :</p>
                        <a href="https://voyance-en-direct.tv/tarot-en-direct/offre-gratuite?email=<?= $email;?>" class="FormField-Button">Je lance le TCHAT</a>
                    </article>
                </div>
            </div>
        </section>
        <footer class="SiteFooter">
            <div class="PageWrapper">
                <ul class="ReassuranceList">
                    <li class="ReassuranceList-Item">
                        <div class="ReassuranceList-Item-Flex">
                            <span class="ReassuranceList-Item-Img star"></span>
                            <span class="ReassuranceList-Item-Txt">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></span>
                        </div>
                    </li>
                    <li class="ReassuranceList-Item">
                        <div class="ReassuranceList-Item-Flex">
                            <span class="ReassuranceList-Item-Img lock"></span>
                            <span class="ReassuranceList-Item-Txt">Consultations 100% <br/><strong>discrètes & anonymes</strong></span>
                        </div>
                    </li>
                    <li class="ReassuranceList-Item">
                        <div class="ReassuranceList-Item-Flex">
                            <span class="ReassuranceList-Item-Img gift"></span>
                            <span class="ReassuranceList-Item-Txt">5 minutes de <br/><strong>TCHAT GRATUITES</strong></span>
                        </div>
                    </li>
                    <li class="ReassuranceList-Item">
                        <div class="ReassuranceList-Item-Flex">
                            <span class="ReassuranceList-Item-Img trophy"></span>
                            <span class="ReassuranceList-Item-Txt">My Astro leader <br/><strong>depuis 2007</strong></span>
                        </div>
                    </li>
                    <li class="ReassuranceList-Item">
                        <div class="ReassuranceList-Item-Flex">
                            <span class="ReassuranceList-Item-Img secure"></span>
                            <span class="ReassuranceList-Item-Txt">Paiement <br/><strong>sécurisé</strong></span>
                        </div>
                    </li>
                </ul>
            </div>
        </footer>
        <p class="SiteCopyright"><?php include('include/footer_copyright.php');?></p>
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
        <!-- #### CONVERSION #### -->
        <?php include('include/conversion/adwords.php');
              include('include/conversion/facebook.php');?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,600,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />