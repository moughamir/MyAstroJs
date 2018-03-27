<?php
include("include/process-dri.php");
$assets = 'images_landing/love-tchat';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Voyance par tchat - Faites vous rappeler</title>
    <link rel="icon" type="image/png" href="<?= $assets ?>/favicon.png" />
    <link rel="stylesheet" href="css/tchat.css" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Open+Sans:400,600" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3,respond@1.4.2"></script>
    <![endif]-->
</head>
<body class="main">
<div class="overlay" id="form-overlay"></div>
<header class="SiteHeader">
    <div class="PageWrapper">
        <div class="SiteLogo"></div>
    </div>
</header>
<div class="title">
    <a href="#" class="logo-form">
        <img src="https://www.voyance-par-tchat.com/wp-content/themes/tchat/images/logo-voyance.png" alt="logo voyance par tchat" width="329" height="84">
    </a>
</div>
<main class="ContentBand">
    <div class="PageWrapper fullview">
        <article class="FormContainer DRI-Form">
            <div class="Fields-Table">
                <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                    <p class="DRI-Sent leading">
                        Merci, votre demande de rappel a bien été prise en compte.<br/>
                        Un voyant vous recontactera dans quelques instants.
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
                <div class="isolated">
                    <h2 class="DRI-Form-Title leading">
                        Vous avez déjà bénéficié de l’offre :<br>
                        <strong>« <span class="underline">5 minutes de tchat gratuit</span> »</strong>
                    </h2>

                </div>
                <div class="isolated">
                    <h3 class="DRI-Form-Subtitle leading">Faites-vous rappeler gratuitement en remplissant le formulaire :</h3>
                    <p><strong>Nos voyants répondent à vos questions</strong></p>
                    <form class="DRI-FormContainer" method="post">
                        <div class="FormContainer-Fields">
                            <div class="Fields-Table-Row">
                                <label for="name" class="previewLabel">Mon prénom</label>
                                <div class="FormField">
                                    <input type="text" id="name" name="prenom" placeholder="Mon Prénom" class="form-control" value="<?= $prenom;?>" required />
                             </div>
                            </div>
                            <div class="Fields-Table-Row">
                                <label for="tel" class="previewLabel">Mon numéro de téléphone</label>
                                <div class="FormField">
                                    <input type="text" id="tel" name="tel" placeholder="Mon N° de téléphone" class="form-control" value="<?= $tel;?>" required />
                                </div>
                            </div>
                            <div class="Fields-Table-Row">
                                <label for="pays" class="previewLabel">Mon pays</label>
                                <div class="FormField"> <select name="pays" id="pays" class="form-control" required>
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
                        <div></div>
                         <br/>
                        <!-- SUBMIT -->
                        <div class="buttonContainer">
                            <button class="FormContainer-Submit icon-phone" type="submit" name="demande_rappel">Rappel Gratuit</button>

                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </article>
    </div>
</main>
<footer>
    <p class="SiteCopyright"><?php include('include/footer_copyright.php');?></p>
</footer>
<script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
<!-- #### REMARKETINGS #### -->
<?php include('include/remarketing/adwords.php');
include('include/remarketing/analytics.php');
include('include/remarketing/facebook.php');?>
<!-- #### CONVERSION #### -->
<?php include('include/conversion/adwords.php');
include('include/conversion/facebook.php');?>
</body>
</html>