<?php
/*
    --------------------------------------
    --   tarot-direct-dri = POST-MAIL   --
    --------------------------------------

    Created on : 18 juillet 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
                 Guillaume Deschamps <guillaumed.kgcom@gmail.com>
*/
include('include/process-dri.php');
// Paramètres design
include('include/visual_modules/tarot-direct/design-load.php');
// Paramètre formulaire
$draw = isset($_SESSION['cards'])? $_SESSION['cards'] : false;
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
<!-- ------------------------------ FORMULAIRE ----------------------------- -->
        <section class="ContentBand Form Principal FormDRI" id="scn-form">
            <header class="ContentBand-ColumnHeader Title">- Pour poursuivre remplissez le <strong>formulaire</strong> ci-dessous -</header>
            <div class="PageWrapper ContentBand-Table">
                <div class="ContentBand-Column">
                    <article class="FormContainer DRI-Form">
                        <div class="Pop Pop-Voyant getFormValue  <?= $voyant ?>" data-ref-form="voyant" data-method="class"><span class="Pop-Voyant-Photo"></span></div>
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <div class="Fields-Table">
                            <?php if($directCall && ($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT')){ ?>
                                <p class="DRI-Sent">
                                    APPEL EN COURS ....<br/>
                                    Merci, votre demande de rappel a bien été prise en compte.<br/>
                                    <strong>Un voyant vous recontactera dans quelques instants.</strong>
                                </p>
                            <?php } else  if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                            <div class="DRI-Form FormContainer-Fields">
                                <p class="DRI-Sent">
                                    Merci, votre demande a bien été prise en compte.<br/>
                                    <strong>Un voyant vous recontactera dans quelques instants</strong>.
                                </p>
                            </div>
                            <?php } else { ?>
                            <h2 class="DRI-Form-Title">Faites-vous rappeler immédiatement, n’attendez pas !</h2>
                            <form method="post" class="DRI-FormContainer">
                                <input type="hidden" value="1" name="directCall">
<!--                                <input type="hidden" name="directCall" value="1" />-->
                                <div class="DRI-Form FormContainer-Fields">
                                    <p>Nos voyants répondent à vos questions</p>
                                    <div class="Fields-Table-Row">
                                        <label for="name" class="FormField-Label">Mon prénom</label>
                                        <div class="FormField">
                                            <input type="text" id="name" name="prenom" placeholder="Mon Prénom" class="FormField-Input" value="<?= $prenom ?>" required />
                                        </div>
                                    </div>
                                    <div class="Fields-Table-Row">
                                        <label for="tel" class="FormField-Label">Mon numéro de téléphone</label>
                                        <div class="FormField">
                                            <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel ?>" required />
                                        </div>
                                    </div>
                                    <div class="Fields-Table-Row">
                                        <label for="pays" class="FormField-Label">Mon pays</label>
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
                                </div>
                                <h1 class="DRI-Slogan">Vos 10 premières minutes <span style="text-transform:uppercase">gratuites</span> !</h1>
                                <!-- SUBMIT -->
                                <input type="text" name="antisp" value="" style="display: none" />
                                <button class="FormContainer-Submit btn-rose" type="submit" name="demande_rappel" >Rappel Gratuit</button>
                            </form>
                            <?php } ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>
<!-- --------------------------- TIRAGE DU TAROT --------------------------- -->
        <section class="ContentBand Tarot Arrowed">
        <?php if($draw){ ?>
            <div class="PageWrapper ContentBand-Table">
                <div class="ContentBand-Column">
                    <article class="WidgetTarot">
                        <div class="WidgetTarot-ResultMsg">Votre tirage transmis à <?= $voyant;?></div>
                        <div class="WidgetTarot-Result">
                            <?php for($i=0;$i<5;$i++){ ?>
                            <div class="WidgetTarot-Card place" data-number="<?= $i ?>" style="background-image: url('<?= $cards_dir.$draw[$i];?>')"></div>
                            <?php } ?>
                        </div>
                    </article>
                </div>
            </div>
        <?php } ?>
        </section>

        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>

    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />