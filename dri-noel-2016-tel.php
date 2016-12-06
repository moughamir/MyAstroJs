<?php

$cards_dir = 'tarot/cartes/original-grand/';
$ext = '.png';

// Form Vars
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tirage et interprétation de tarot gratuit spécial Noël 2016 sur MyAstro.fr">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans|Oswald|Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="css/dri-noel-2016.css">
    <link rel="shortcut icon" type="image/x-icon" href="images_landing/dri-noel-2016/favicon.png">
    <title>Tarot Noel 2016 - DRI par téléphone| MyAstro</title>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<!-- Post Form Modal-->
<div class="FormContainer overlay" id="form-overlay"></div>
<article class="modal hidden">
    <div class="modal-container">
        <h2 class="modal-title">Votre demande a bien été prise en compte</h2>
        <p class="modal-message">Vous allez rapidement être contacté par un de nos experts-voyants.</p>
        <button class="btn modal-btn">Fermer</button>
    </div>
</article>
<!-- End Of Modal-->
<section class="container" role="main">
    <header class="Site-Header" role="banner">
        <div class="site-logo"><img src="images_landing/dri-noel-2016/logo.png" alt="MyAstro"></div>
        <div class="page-banner"><img src="images_landing/dri-noel-2016/xmass.png" alt="Joyeux Noël"></div>
    </header>
    <article class="Site-MainContent">
        <div class="da-container">
            <section class="signUp">
                <p class="info">Vos cartes ont été transmises à notre équipe.<br/>
                    Vous recevrez votre interprétation sous 24h dans votre boite mail.
                </p>
                <h2 class="section3-title">les <span class="bold">10 premières</span> minutes <span class="bold Cap">gratuites</span></h2>
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                    <div class="subtitle">
                        <h3 class="section-subtitle">Vous ne pouvez pas attendre :</h3>
                        <p class="cta-title">Demandez un rappel immédiat</p>
                    </div>

                </header>

                <article class="FormContainer">
                    <form action="inc/process.php" method="post" class="Primary-Form ajax" id="form-container">

                        <div class="FormContainer-Fields Fields-Table">

                            <p class="alert alert-danger" style="display: none"></p>
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="tarot-dri-noel-2016"/>
                            <input type="hidden" name="method" value="general-suscribe"/>
                            <input type="hidden" name="support" value="tarot"/>
                            <input type="hidden" name="site" value="myastro.fr"/>
                            <input type="hidden" name="affiliation" value="adwords"/>
                            <input type="hidden" name="dri" value="dri-noel-2016-merci"/>
                            <!-- ########## autres champs pré-remplis ########## -->
                            <input type="hidden" name="tel_needed" value="1"/>
                            <input type="hidden" name="gclid"
                                   value="<?php isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>"/>
                            <input type="hidden" name="cguv" value="1"/>
                            <input type="hidden" name="partenaires" value="1"/>
                            <!-- ############################################### -->
                            <div class="hidden cardsPicked"></div>
                            <div class="Fields-Table-Row">
                                <div class="FormField input-name">
                                    <input type="text" id="name" name="prenom" class="FormField-Input"
                                           value="<?php $prenom ?>" placeholder="Mon prénom" required/>
                                </div>
                            </div>
                            <div class="Fields-Table-Row">
                                <div class="FormField input-email">
                                    <input id="tel" type="tel" name="tel" class="FormField-Input"
                                           value="<?php $tel ?>" placeholder="Mon numéro de téléphone" required/>
                                </div>
                            </div>
                            <div class="Fields-Table-Row">
                                <label for="pays" class="FormField-Label">Votre pays</label>
                                <div class="FormField">
                                    <select name="pays" id="pays" class="FormField-Input input-country" required>
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
                        <button class="btn cta-call FormContainer-Submit" type="submit" name="valider">Rappel immédiat</button>
                    </form>
                </article>
            </section>
        </div>
    </article>
    <footer class="Site-Footer">
        <div class="subfooter">
            <ul class="footer-menu">
                <li class="first"><img src="images_landing/dri-noel-2016/star.png" alt=""><strong>Voyants sérieux
                        reconnus<br/> pour leur savoir faire</strong></li>
                <li class="second"><img src="images_landing/dri-noel-2016/luck.png" alt=""><strong>Consultations 100%
                        <br/>discrètes & anonymes</strong></li>
                <li class="third"><img src="images_landing/dri-noel-2016/chat.png" alt=""><strong>Interprétation<br/>immédiate</strong>
                </li>
                <li class="fourth"><img src="images_landing/dri-noel-2016/award.png" alt=""><strong>My Astro leader
                        <br/>depuis 2007</strong></li>
                <li class="fifth"><img src="images_landing/dri-noel-2016/card.png" alt=""><strong>Paiement <br/>sécurisé
                        par CB</strong></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="footer">
            <?php include('include/footer_copyright.php'); ?>
        </div>
    </footer>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ajaxify/6.5.6/ajaxify.min.js"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<script src="js/dri-noel-2016.js"></script>
<!--<script src="js/formValidator.js"></script>-->
<!--
TODO: For Google analytics, add : ga('send', 'pageview');
-->
</body>
</html>