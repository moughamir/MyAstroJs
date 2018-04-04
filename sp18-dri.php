<?php
include("include/process-dri.php");
$assets = 'images_landing/saint-patrick-2018';
$site   = getenv('MYASTRO_ROOT_URL');
$email  = isset($_SESSION['email'])? $_SESSION['email']: '';
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no">
    <title>Saint Patrick &#x1F340; - MyAstro</title>
    <meta name="robots" content="noindex,nofollow" />
    <link rel="icon" type="image/png" href="<?= $assets ?>/favicon-sp18.png" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lobster|Open+Sans" rel="stylesheet">
    <link href="css/sp18-dri.css" rel="stylesheet" />
    <link href="css/saint-patrick-18.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="dri">
    <header class="site--header" role="banner">
        <div class="container">
            <h1 class="site-name">Saint Patrick : Jour de chance</h1>
        </div>
    </header>
    <section class="ContentBand">
        <div class="PageWrapper grid-2-tiny-1-small-1-medium-1 flex-mobile PageWrapper-flex">
            <div class="colG">
                <div class="TextContent">
                    <header class="main-voyant">
                        <h2 class="ContentBand-title">Faites-vous rappeler gratuitement<br/>par un voyant professionnel.</h2>
                    </header>
                    <article class="DescText">
                        <div class="DescText-Content">
                            <p><b>Une question</b> sur votre avenir ou sur celui dʼun être cher ?<br/>Lʼun de nos voyants reconnus vous recontacte dans les plus brefs délais et vous éclaire sur vos doutes.</p>
                            <p>Votre couple va-t-il durer ? Votre travail va-t-il évoluer ?<br/>Aurez-vous des enfants ? Nʼhésitez pas à discuter de ce qui vous intéresse lors de votre séance de voyance par téléphone.</p>
                        </div>
                    </article>
                </div>

                <div class="faq">
                    <h3>Comment ça marche ?</h3>
                    <ul>
                        <li class="ico-formulaire">Je remplis le <br/>formulaire</li>
                        <li class="ico-standardiste">Je suis rappelé(e) <br/>immédiatement</li>
                    </ul>
                </div>
            </div>
            <div class="colD Form">
                <article class="FormContainer DRI">
                    <div class="DRI-list-voyants">
                        <h2>Nos voyants sont à votre écoute !</h2>
                        <ul class="grid-4-tiny-2-small-2-medium-4">
                            <li>
                                <div class="voyant-marc"></div>
                                <span>Marc</span>
                            </li>
                            <li>
                                <div class="voyant-anissa"></div>
                                <span>Anissa</span>
                            </li>
                            <li>
                                <div class="voyant-jean"></div>
                                <span>Jean</span>
                            </li>
                            <li>
                                <div class="voyant-marianne"></div>
                                <span>Marianne</span>
                            </li>
                        </ul>
                    </div>
                    <h2 class="DRI-Slogan">Vos 10 premières minutes <span>gratuites</span></h2>
                    <div class="DRI-Form FormContainer-Fields">
                        <?php if($directCall && ($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT')){ ?>
                        <p class="DRI-Sent">
                            APPEL EN COURS ....<br/> Merci, votre demande de rappel a bien été prise en compte.<br/>
                            <strong>Un voyant vous recontactera dans quelques instants.</strong>
                        </p>
                        <?php } else if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                        <p class="DRI-Sent">
                            Merci, votre demande a bien été prise en compte.<br/>
                            <strong>Un voyant vous recontactera dans quelques instants</strong>.
                        </p>
                        <?php } else { ?>
                        <form method="post">
                            <input type="hidden" value="1" name="directCall">
                            <div class="FormField">
                                <input type="text" id="name" name="prenom" placeholder="Mon Prénom" class="FormField-Input" value="<?= $prenom;?>" required />
                            </div>
                            <div class="FormField">
                                <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel;?>" required />
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
                            <button class="FormContainer-Submit btn-rose flash" type="submit" name="demande_rappel">Rappel Gratuit</button>
                        </form>
                        <?php } ?>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer>
        <div class="reassure">
            <ul>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="<?= $assets ?>/icons/star.svg" alt="star">
                        <p>Voyants sérieux reconnus
                            <br/>pour leur savoir-faire</p>
                    </div>
                </li>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="<?= $assets ?>/icons/luck.svg" alt="luck">
                        <p>Consultations 100%
                            <br/>discrètes &amp; anonymes</p>
                    </div>
                </li>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="<?= $assets ?>/icons/chat.svg" alt="chat">
                        <p>Interprétation
                            <br/>immédiate</p>
                    </div>
                </li>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="<?= $assets ?>/icons/trophy.svg" alt="leader">
                        <p>My Astro leader
                            <br/>depuis 2007</p>
                    </div>
                </li>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="<?= $assets ?>/icons/secure.svg" alt="secure">
                        <p>Paiement
                            <br/>sécurisé par CB</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container">
            <p class="attribute">Copyright &copy; 2018 | My Astro</p>
        </div>
    </footer>

    <!-- #### REMARKETINGS #### -->
    <?php include('include/remarketing/adwords.php');
          include('include/remarketing/analytics.php');
          include('include/remarketing/facebook.php');?>
</body>

</html>
