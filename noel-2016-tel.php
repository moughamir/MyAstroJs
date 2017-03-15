<?php
/* 
    --------------------------------------
    --    noel-2016-tel = AFFIL BASE    --
    --------------------------------------

    Created on : 13 décembre 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
    include('include/process-dri.php');
    $reassurance_items = [ 'voyant-serieux', 'discretion', 'interpretation', 'leader', 'paiement-secure' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Tarot de Noël par MyAstro</title>
        
        <link rel="shortcut icon" type="image/x-icon" href="images_landing/noel-2016/favicon.png">
        <link rel="stylesheet" href="css/noel-2016.css">
    </head>
    <body>
<!-- -------------------------- MODALE FORMULAIRE -------------------------- --
        <div class="FormContainer overlay" id="form-overlay"></div>
        <article class="modal hidden">
            <div class="modal-container">
                <h2 class="modal-title">Votre demande a bien été prise en compte</h2>
                <p class="modal-message">Vous allez rapidement être contacté par un de nos experts-voyants.</p>
                <button class="btn modal-btn">Fermer</button>
            </div>
        </article>
<!-- End Of Modal-->
        <section class="PageWrapper">
            <header class="PageHeader">
                <div class="PageLogo">
                    <?php include('include/myastro-logo-svg.php');?>
                </div>
                <div class="PageTitle"><span class="PageTitle-Img"></span></div>
            </header>
            <article class="Container">
<!-- ----------------------------- FORMULAIRE ------------------------------ -->
                <section class="DRI">
                    <p class="DRI-Info">
                        Vos cartes ont été transmises à notre équipe.<br/>
                        Vous recevrez votre interprétation sous 24h dans votre boite mail.
                    </p>
                    <h2 class="DRI-PromoTitle">les <em>10 premières</em> minutes <strong>gratuites</strong></h2>
                    <header class="DRI-Title">
                        <h3 class="DRI-Title-Intro">Vous ne pouvez pas attendre :</h3>
                        <h2 class="DRI-Title-CTA">Demandez un rappel immédiat</h2>
                    </header>
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <article class="FormContainer">
                        <form method="post">
                            <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                            <p class="DRI-Sent">
                                Merci, votre demande a bien été prise en compte.<br/>
                                <strong>Un voyant vous recontactera dans quelques instants.</strong>
                            </p>                        
                            <?php } else { ?>
                                <?php if(!empty($err) || $state == 'MAIL_ERROR'){ ?>
                            <p class="alert alert-danger">
                                <b><i class="fa fa-warning"></i> Une erreur est survenue.</b><br>
                                    <?php foreach($err as $msg){
                                        echo $msg.'<br>';
                                    } ?>
                            </p>
                                <?php } ?>
                            <div class="FormContainer-Fields">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="save_tel" value="1" />
                                <input type="hidden" name="tel_needed" value="1" />
                                <input type="hidden" name="prenom" value="<?= $prenom ?>" />
                                <!-- ############################################### -->
                                <div class="FormField">
                                    <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel ?>" required />
                                </div>
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
                                <!-- SUBMIT -->
                                <input type="text" name="antisp" value="" style="display: none" />
                                <button class="Button" type="submit" name="demande_rappel">Rappel immédiat</button>
                            <?php } ?>
                        </form>
                    </article>
                </section>
            </article>
            <?php include('include/footer_reassurance.php'); ?>
            <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        </section>
    </body>
</html>
<link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans|Oswald|Satisfy" rel="stylesheet" />