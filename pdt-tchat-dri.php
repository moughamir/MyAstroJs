<?php
/**
 * Pouvoir Des Trois DRI
 * 
 * Created on : Apr 5th, 2017
 * Author     : Mohamed Moughamir <hello@omnizya.com>
 */
include("include/process-dri.php");
$assets = 'images_landing/pouvoir-des-trois';
$pageName = "pdt-tchat-dri";
$site   = getenv('MYASTRO_ROOT_URL');
//$email  = isset($_SESSION['email'])? $_SESSION['email']: '';
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow" />
    <meta property="fb:app_id" content="1276526482364681" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pouvoir des Trois" />
    <meta property="og:url" content="http://<?= $site ?>/pouvoir-des-trois" />
    <meta property="og:image" content="http://<?= $site . '/' . $assets ?>/cover.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="675" />
    <meta property="og:description" content="Prenez en main votre Avenir, Grâce au Pouvoir des trois et de ces support divinatoires ancestraux: le pendule, la boule de cristal, et le tarot." />
    <meta property="og:locale" content="fr_FR" />
    <title>Pouvoir Des Trois DRI | MyAstro</title>
    <link rel="icon" type="image/png" href="<?= $assets ?>/favicon.png" />
    <link rel="stylesheet" href="css/pouvoir-des-trois.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans" rel="stylesheet">
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
        <h1>Amour, Travail, Argent</h1>
    </div>
    <main class="ContentBand">
        <div class="preload"> </div>
        <div class="PageWrapper fullview">
            <article class="FormContainer DRI-Form">
                <div class="Fields-Table">
                    <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                    <div class="">
                        <p class="DRI-Sent"> Merci, votre demande de rappel a bien été prise en compte.<br/>
                        <strong>Un voyant vous recontactera dans quelques instants</strong>.
                        </p>
                    </div>
                    <?php } else { ?>
                    <h2 class="DRI-Form-Title"> Vous avez déjà bénéficié de l’offre :<br><strong>&#8220; 3 minutes de tchat gratuit &#8221;</strong></h2>
                    <p> Vous pourrez de nouveau profiter de cette offre dans 7 jours.<br>En attendant, vous pouvez consulter un voyant immédiatement par téléphone.</p>
                    <h3 class="DRI-Form-Subtitle">Faites-vous rappeler gratuitement en remplissant le formulaire :</h3>
                    <p><strong>Nos voyants répondent à vos questions</strong></p>
                    
                    <form class="DRI-FormContainer" method="post">
                        <div class="FormContainer-Fields">
                            <div class="Fields-Table-Row"> <label for="name" class="FormField-Label">Mon prénom</label>
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
                            <div class="Fields-Table-Row"> <label for="pays" class="FormField-Label">Mon pays</label>
                                <div class="FormField"> <select name="pays" id="pays" class="FormField-Input" required>
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
                        <h1 class="DRI-Slogan">Vos 10 premières minutes <span class="cap">gratuites</span> </h1>
                        <!-- SUBMIT -->
                            <button class="FormContainer-Submit btn-rose" type="submit" name="demande_rappel">Rappel Gratuit</button>
                    </form>
                    <?php } ?>
                </div>
            </article>
        </div>
    </main>
    <footer>
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
        <!-- #### REMARKETINGS #### -->
        <?php
            include('include/remarketing/adwords.php');
            include('include/remarketing/analytics.php');
            include('include/remarketing/facebook.php');
        ?>

        <!-- #### CONVERSION #### -->
        <?php
            include('include/conversion/adwords.php');
            include('include/conversion/facebook.php');
        ?>
    </footer>
</body>

</html>

