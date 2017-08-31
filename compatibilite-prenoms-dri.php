<?php
/**
 * compatibilite-prenoms-dri
 * -------------------------
 * Created on : 7 février 2017 By Laurène Dourdin <2aurene@gmail.com>
 * Updated on : 28 août 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
include('include/process-dri.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Compatibilité des Prénoms</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        <link rel="stylesheet" href="css/saint-valentin-2017.css" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <span class="SiteLogo">
                    <?php include('include/myastro-logo-svg.php');?>
                </span>
                <span class="PageLogo"><h1>Testez la compatibilité de vos prénoms.</h1></span>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column Form" id="form-container">
                    <article class="gal-container">
                        <img src="images_landing/saint-valentin-2017/left.jpg" alt="" class="promo-img" />
                        <img src="images_landing/saint-valentin-2017/right.jpg" alt="" class="promo-img" />
                    </article>
                    <!--div id="photo" class="polaroid anim-photo1"></div-->
                    <article class="FormContainer" id="vm-anchor">
                        <h2 class="FormContainer-Header">Vos prénoms sont-ils compatibles ?</h2>
                        <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                        <p class="DRI-Sent">
                            Merci, votre demande a bien été prise en compte.<br/>
                            <strong>Un voyant vous recontactera dans quelques instants</strong>.
                        </p>
                        <?php } else { ?>
                        <p class="result-text">La compatibilité des prénoms vous décrit en détail les possibilités amoureuses avec la personne qui occupe vos pensées. Évaluez les chances de réussite de cette relation et apportez des réponses claires à toutes vos interrogations.<br/> Découvrez en un CLIC l’affinité AMOUREUSE de vos deux prénoms.</p>
                        <p class="more">Pour en savoir plus :</p>
                        <div class="FormContainer-Fields">
                            <p class="alert alert-danger" style="display: none"></p>
                            <form method="post">
                                <section class="step-1">
                                    <div class="FormField">
                                        <label for="mon-prenom" class="FormField-Label">Mon prénom</label>
                                        <input class="name FormField-Input" type="text" name="prenom" placeholder="Mon prénom" value="<?= $prenom;?>" />
                                    </div>
                                    <div class="FormField">
                                        <label for="mon-prenom" class="FormField-Label">Son prénom</label>
                                        <input class="name FormField-Input" type="text" name="conjoint" placeholder="Son prénom" required />
                                    </div>
                                    <a class="FormContainer-Submit btn-submit" />Voir le Résultat</a>
                                </section>
                                <section class="result hidden">
                                    <div class="FormField">
                                        <label for="tel" class="FormField-Label">Mon numéro de téléphone</label>
                                        <input id="tel " type="tel" class="FormField-Input" name="tel" required value="<?= $tel;?>" />
                                    </div>
                                    <div class="Fields-Table-Row">
                                        <label for="pays" class="FormField-Label">Votre pays</label>
                                        <div class="FormField">
                                            <select name="pays" id="pays" class="FormField-Input" required>
                                                <option value="" selected>Votre Pays</option>
                                                <option value="BE">Belgique</option>
                                                <option value="CA">Canada</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="CH">Suisse</option>
                                                <option value="FR" selected>France Métropolitaine</option>
                                                <optgroup label="DOM-TOM">
                                                    <option value="MQ">Martinique</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GF">Guyane</option>
                                                    <option value="RE">La Réunion</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="PM">St Pierre et Miquelon</option>
                                                    <option value="BL">St Barthélémy</option>
                                                    <option value="SM">St Martin</option>
                                                    <option value="WF">Wallis et Futunua</option>
                                                    <option value="PF">Polynésie Française</option>
                                                    <option value="NC">Nouvelle Calédonie</option>
                                                </optgroup>
                                                <option value="ZZ">Autre</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" name="antisp" value="" style="display: none" />
                                    <button class="FormContainer-Submit" type="submit" name="demande_rappel">Rappel Gratuit</button>
                                </section>
                            </form>
                            <?php } ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <?php include('include/footer_reassurance.php');?>

        <p class="SiteCopyright">
            <?php include('include/footer_copyright.php');?>
        </p>

        <!-- #### SCRIPTS #### -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/nameCompa.js"></script>
        <script>
            $(document).ready(function(){
                if($(window).height() < 700){
                    $('html,body').animate({scrollTop: $('#vm-anchor').offset().top}, 1000);
                }
            });
        </script>
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>
<link href="//fonts.googleapis.com/css?family=Dancing+Script|Open+Sans" rel="stylesheet" type="text/css" />