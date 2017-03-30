<?php
/* 
    -------------------------------------------
    --  vendredi-13-05-16 = AFFIL BASE   --
    -------------------------------------------

    Created on : 10 mai 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="robots" content="noindex,nofollow" />

        <title>Vendredi 13 Spécial Chance | Myastro</title>
        
        <meta property="og:title" content="Vendredi 13 : que vous réserve la chance ?" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.myastro.fr/vendredi-13-05-16" />
        <meta property="og:image" content="http://www.myastro.fr/images_landing/vendredi-13-05-16/fb-ban.jpg" />
        <meta property="og:description" content="Jouez et recevez gratuitement votre étude astrologique" />
        <meta property="og:locale" content="fr_FR" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/tictactoe.css">
        <link href="css/vendredi-13-05-16.css" rel="stylesheet" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="site--header" role="banner">
            <div class="container">
                <img src="images_landing/vendredi-13-05-16/myastro-logo.png" class="logo" alt="My Astro logo" />
                <img src="images_landing/vendredi-13-05-16/page-title.png" class="title" alt="My Astro logo" />
            </div>
        </header>
        <main role="main">
            <section class="main-section">
                <article id="tictactoe">
                    <header class="article--header">
                        <h1 class="article--headline">Jour de chance, faites le jeu :</h1>
                    </header>
                    <div class="tictactoe-wrapper">
                        <div class="tictactoe-dialogs">
                            <div class="cover"></div>
                            <div class="pick">
                                <h2 class="msg article--subtitle">Choisissez les <u>croix</u> ou les <u>ronds</u> pour jouer</h2>
                                <button class="tictactoe-btn x"></button>
                                <button class="tictactoe-btn o"></button>
                            </div> <!-- end-pick -->
                            <div class="end modal-content">
                                <div class="modal-body">
                                    <div class="col-lg-6">
                                        <img class="" src="images_landing/vendredi-13-05-16/popup.jpg" alt="modal gif">
                                    </div>
                                    <div class="col-lg-6">
                                        <form class="astro-form" accept-charset="utf-8" role="form">
                                                <div class="container-90">
                                                    <header class="form--header">
                                                        <h1 class="form--title">
                                                            <img src="images_landing/vendredi-13-05-16/vendredi13.png" alt="Vednredi 13" />
                                                        </h1>
                                                        <h2 class="form--subtitle">Recevez vite votre étude personnalisée !</h2>
                                                    </header>
                                                    <article class="form-content">
                                                        <!-- ########## identification formulaire ########## -->
                                                        <input type="hidden" name="source" value="vendredi-13-05-16" />
                                                        <input type="hidden" name="method" value="general-suscribe" />
                                                        <input type="hidden" name="dri" value="vendredi-13-05-16-tel" />
                                                        <input type="hidden" name="support" value="voyance" />
                                                        <input type="hidden" name="affiliation" value="affilbase" />
                                                        <input type="hidden" name="partenaires" value="1" />
                                                        <!-- ########## autres champs pré-remplis ########## -->
                                                        <input type="hidden" name="cguv" value="1" />
                                                        <!-- ############################################### -->
                                                        <!-- Genre -->
                                                        <div class="Genre">
                                                            <label class="gender-l" for="gender-f">
                                                                <img src="images_landing/vendredi-13-05-16/femme.png" alt="♀"> <span>Femme</span>
                                                                <input type="radio" name="sexe" id="gender-f" value="F" required />
                                                            </label>
                                                            <label class="gender-l" for="gender-h">
                                                                <img src="images_landing/vendredi-13-05-16/homme.png" alt="♂"> <span>Homme</span>
                                                                <input type="radio" name="sexe" id="gender-h" value="M" />
                                                            </label>
                                                        </div>
                                                        <!-- Date de naissance -->
                                                        <div class="Date">
                                                            <label for="ddn">Née le</label>
                                                            <div class="ddn">
                                                                <select name="jour" id="jour">
                                                                    <option value="na" disabled selected>Jour</option>
                                                                    <?php for($i=1;$i<=31;$i++){ ?>
                                                                    <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <select name="mois" id="mois">
                                                                    <option value="na" disabled selected>Mois</option>
                                                                    <option value="01">Janvier</option>
                                                                    <option value="02">Février</option>
                                                                    <option value="03">Mars</option>
                                                                    <option value="04">Avril</option>
                                                                    <option value="05">Mai</option>
                                                                    <option value="06">Juin</option>
                                                                    <option value="07">Juillet</option>
                                                                    <option value="08">Août</option>
                                                                    <option value="09">Septembre</option>
                                                                    <option value="10">Octobre</option>
                                                                    <option value="11">Novembre</option>
                                                                    <option value="12">Décembre</option>
                                                                </select>
                                                                <select name="annee" id="year">
                                                                    <option value="na" disabled selected>Année</option>
                                                                    <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- Prénom -->
                                                        <input name="prenom" id="prenom" type="text" class="" placeholder="Mon prénom" required />
                                                        <!-- Question -->
                                                        <select name="theme_id" class="theme_id" required>
                                                            <option value="" selected disabled>Thème de ma question</option>
                                                            <option value="v13m16_question_1">Vais-je avoir de la chance en amour ?</option>
                                                            <option value="v13m16_question_2">La chance va-t-elle sourire à mon couple ?</option>                       
                                                            <option value="v13m16_question_73">La chance sera-t-elle avec moi au niveau financier ?</option>
                                                            <option value="v13m16_question_4">Que me réserve la chance au travail ?</option>
                                                        </select>
                                                        <!-- Conjoint -->
                                                        <div class="sonprenom" style="display: none;">
                                                            <input type="text" id="son_prenom" name="conjoint" placeholder="Son prénom" />
                                                        </div>
                                                        <!-- Email -->
                                                        <input name="email" id="email" type="email" class="" placeholder="Mon adresse email" value="<?= $_GET['email'] ?>" required />
                                                        <!-- Pays -->
                                                        <div class="pays">
                                                            <label for="pays">Votre pays</label>
                                                            <select name="pays" id="pays" required>
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
                                                    </article>
                                                </div>
                                                <!-- ### BOUTON SUBMIT -->
                                                <button class="form--btn" type="submit" id="submit-form" name="valider">Découvrir</button>
                                            </form>
                                    </div>
                                </div>
                            </div> <!-- end-end -->
                        </div> <!-- end-dialogs -->
                        <div class="tictactoe-container">
                            <div class="tictactoe-game">
                                <div class="row top">
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div> <!-- end-row -->
                                <div class="row middle">
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div> <!-- end-row -->
                                <div class="row bottom">
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div> <!-- end-row -->
                            </div> <!-- end-game -->
                        </div> <!-- end-container -->
                    </div><!-- end-wrapper -->
                </article>
                <article>
                    <header class="article--header">
                        <h1 class="article--headline small">Remplissez vite le formulaire pour<br/>recevoir votre étude personnalisée !</h1>
                    </header>
                    <form class="astro-form" accept-charset="utf-8" role="form">
                        <div class="container-90">
                            <header class="form--header">
                                <h1 class="form--title">
                                    <img src="images_landing/vendredi-13-05-16/vendredi13.png" alt="Vednredi 13" />
                                </h1>
                                <h2 class="form--subtitle">Recevez vite votre étude personnalisée !</h2>
                            </header>
                            <article class="form-content">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="vendredi-13-05-16" />
                                <input type="hidden" name="method" value="general-suscribe" />
                                <input type="hidden" name="dri" value="vendredi-13-05-16-tel" />
                                <input type="hidden" name="support" value="voyance" />
                                <input type="hidden" name="affiliation" value="affilbase" />
                                <!-- ########## autres champs pré-remplis ########## -->
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <!-- ############################################### -->
                                <!-- Genre -->
                                <div class="Genre">
                                    <label class="gender-l" for="gender-f">
                                        <img src="images_landing/vendredi-13-05-16/femme.png" alt="♀"> <span>Femme</span>
                                        <input type="radio" name="sexe" id="gender-f" value="F" required />
                                    </label>
                                    <label class="gender-l" for="gender-h">
                                        <img src="images_landing/vendredi-13-05-16/homme.png" alt="♂"> <span>Homme</span>
                                        <input type="radio" name="sexe" id="gender-h" value="M" />
                                    </label>
                                </div>
                                <!-- Date de naissance -->
                                <div class="Date">
                                    <label for="ddn">Née le</label>
                                    <div class="ddn">
                                        <select name="jour" id="jour">
                                            <option value="na" disabled selected>Jour</option>
                                            <?php for($i=1;$i<=31;$i++){ ?>
                                            <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="mois" id="mois">
                                            <option value="na" disabled selected>Mois</option>
                                            <option value="01">Janvier</option>
                                            <option value="02">Février</option>
                                            <option value="03">Mars</option>
                                            <option value="04">Avril</option>
                                            <option value="05">Mai</option>
                                            <option value="06">Juin</option>
                                            <option value="07">Juillet</option>
                                            <option value="08">Août</option>
                                            <option value="09">Septembre</option>
                                            <option value="10">Octobre</option>
                                            <option value="11">Novembre</option>
                                            <option value="12">Décembre</option>
                                        </select>
                                        <select name="annee" id="year">
                                            <option value="na" disabled selected>Année</option>
                                            <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Prénom -->
                                <input name="prenom" id="prenom" type="text" class="" placeholder="Mon prénom" required />
                                <!-- Question -->
                                <select name="theme_id" class="theme_id" required>
                                    <option value="" selected disabled>Thème de ma question</option>
                                    <option value="v13m16_question_1">Vais-je avoir de la chance en amour ?</option>
                                    <option value="v13m16_question_2">La chance va-t-elle sourire à mon couple ?</option>                       
                                    <option value="v13m16_question_73">La chance sera-t-elle avec moi au niveau financier ?</option>
                                    <option value="v13m16_question_4">Que me réserve la chance au travail ?</option>
                                </select>
                                <!-- Conjoint -->
                                <div class="sonprenom" style="display: none;">
                                    <input type="text" id="son_prenom" name="conjoint" placeholder="Son prénom" />
                                </div>
                                <!-- Email -->
                                <input name="email" id="email" type="email" class="" placeholder="Mon adresse email" value="<?= $_GET['email'] ?>" required />
                                <!-- Pays -->
                                <div class="pays">
                                    <label for="pays">Votre pays</label>
                                    <select name="pays" id="pays" required>
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
                            </article>
                        </div>
                        <!-- ### BOUTON SUBMIT -->
                        <button class="form--btn" type="submit" id="submit-form" name="valider">Découvrir</button>
                    </form>
                </article>
            </section>
            <section class="two">
                <article class="center-ner">
                    <h3>En cadeau votre étude personnalisée gratuite !</h3>
                </article>
                <article class="study">
                    <h1 class="article--title">La chance va-t-elle vous sourire ?</h1>
                    <p class="article--content">
                        Le vendredi 13 est connu pour attirer la chance. Qu’en sera-t-il pour vous ? Parfois si capricieuse, parfois si joueuse, nous aimerions tous pouvoir toucher du doigt la chance pour profiter de ce petit coup de pouce qui donnerait une nouvelle dimension à nos vies. Ce vendredi 13 est le jour idéal pour faire le maximum afin de la charmer, l’attirer et profiter de ses si bonnes offrandes. Mais qu’en sera-t-il pour vous ? Que vous réserve la chance ? A-t-elle décidé de vous sourire et vous prendre sous son aile ? Il ne faut pas passer à côté de ses questions, sous peine de voir la chance vous approcher pour finalement s’envoler, en croyant que vous ne vouliez pas d’elle. Recevez votre étude astrale personnalisée et découvrez quels sont les plans de la chance pour vous. Et préparez-vous au mieux afin d’être prêt le moment venu, pour saisir cette chance qui vous tend les bras et ne plus la laisser partir.
                    </p>
                </article>
            </section>
        </main>
        <footer>
            <div class="reassure">
                <ul>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/vendredi-13-05-16/star.png" alt="star">
                            <p>Voyants sérieux reconnus
                                <br/>pour leur savoir-faire</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/vendredi-13-05-16/lock.png" alt="luck">
                            <p>Consultations 100%
                                <br/>discrètes &amp; anonymes</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/vendredi-13-05-16/tchat.png" alt="chat">
                            <p>Interprétation
                                <br/>immédiate</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/vendredi-13-05-16/trophy.png" alt="leader">
                            <p>My Astro leader
                                <br/>depuis 2007</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/vendredi-13-05-16/secure.png" alt="secure">
                            <p>Paiement
                                <br/>sécurisé par CB</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <p class="attribute">Copyright &copy; 2016 | My Astro</p>
            </div>
        </footer>
<?php /*       
        <div ng-controller="ModalController" class="container">
            <modal visible="showModal">
                <div class="row"><img class="modal-gif" src="images_landing/vendredi-13-05-16/popup.gif" alt="modal gif"></div>
                <div class="row">
                    <form class="astro-form" accept-charset="utf-8" role="form">
                        <div class="container-90">
                            <header class="form--header">
                                <h1 class="form--title">vite !!! recevez<br>votre étude personnalisée</h1>
                                <hr>
                                <h2 class="form--subtitle">Allez-vous avoir de la chance en 2016 ?</h2>
                            </header>
                            <article class="form-content">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="vendredi-13-05-16" />
                                <input type="hidden" name="method" value="affil-mini" />
                                <input type="hidden" name="dri" value="tel-saint-patrick-2016" />
                                <input type="hidden" name="support" value="voyance" />
                                <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>" />
                                <input type="hidden" name="affiliation" value="affilbase" />
                                <!-- ########## autres champs pré-remplis ########## -->
                                <input type="hidden" name="cguv" value="1" />
                                <!-- ############################################### -->
                                <!-- Genre -->
                                <div class="Genre">
                                    <label class="gender-l" for="gender-f">
                                        <img src="images_landing/vendredi-13-05-16/icons/female.svg" alt="♀"> <span>Femme</span>
                                        <input type="radio" name="sexe" id="gender-f" value="F" required />
                                    </label>
                                    <label class="gender-l" for="gender-h">
                                        <img src="images_landing/vendredi-13-05-16/icons/male.svg" alt="♂"> <span>Homme</span>
                                        <input type="radio" name="sexe" id="gender-h" value="M" />
                                    </label>
                                </div>
                                <!-- Date de naissance -->
                                <div class="Date">
                                    <label for="ddn">Née le</label>
                                    <div class="ddn">
                                        <select name="jour" id="jour">
                                            <option value="na" disabled selected>Jour</option>
                                            <?php for($i=1;$i<=31;$i++){ ?>
                                            <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="mois" id="mois">
                                            <option value="na" disabled selected>Mois</option>
                                            <option value="01">Janvier</option>
                                            <option value="02">Février</option>
                                            <option value="03">Mars</option>
                                            <option value="04">Avril</option>
                                            <option value="05">Mai</option>
                                            <option value="06">Juin</option>
                                            <option value="07">Juillet</option>
                                            <option value="08">Août</option>
                                            <option value="09">Septembre</option>
                                            <option value="10">Octobre</option>
                                            <option value="11">Novembre</option>
                                            <option value="12">Décembre</option>
                                        </select>
                                        <select name="annee" id="year">
                                            <option value="na" disabled selected>Année</option>
                                            <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Prénom -->
                                <input name="prenom" id="prenom" type="text" class="" placeholder="Mon prénom" required />
                                <!-- Question -->
                                <select name="theme_id" id="question" required class="">
                                    <option value="" disabled selected>Thème de ma question</option>
                                    <option value="question_sp_amour">Chance et amour en 2016 ?</option>
                                    <option value="question_sp_travail">Chance et travail en 2016 ?</option>
                                    <option value="question_sp_argent">Chance et argent en 2016 ?</option>
	                        </select>
                                <!-- Email -->
                                <input name="email" id="email" type="email" class="" placeholder="Mon adresse email" value="<?= $_GET['email'] ?>" required />
                                <!-- Pays -->
                                <div class="pays">
                                    <label for="pays">Votre pays</label>
                                    <select name="pays" id="pays" required>
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
                            </article>
                        </div>
                        <!-- ### BOUTON SUBMIT -->
                        <button class="form--btn" type="submit" id="submit-form" name="valider">Découvrir</button>
                    </form>
                </div>
            </modal>
        </div>
 * 
 */ ?>

        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.334.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/tictactoe.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/formValidator.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                // DOM
                var $game = $('.tictactoe-game'),
                    $scores = $('.tictactoe-scores'),
                    $dialogs = $('.tictactoe-dialogs');

                var game = new TicTacToe({
                    game: $game,
                    scores: $scores,
                    dialogs: $dialogs
                });
            });
        </script>
        
        <!-- #### TRACKINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>