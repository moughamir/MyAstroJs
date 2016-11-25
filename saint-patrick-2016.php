<?php
    // Page saint-patrick-2016
    require_once(realpath('include/tools.php'));
    $page = 'saint-patrick-2016';
?>
<!DOCTYPE html>
<html ng-app="myAstro" prefix="og: http://ogp.me/ns#" lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="MobileOptimized" content="320" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="robots" content="noindex,nofollow" />

        <title>Saint Patrick &#x1F340; - MyAstro</title>
        
        <meta property="og:title" content="Mini jeu de la Saint Patrick" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://<?= ROOT_URL ?>/saint-patrick-2016" />
        <meta property="og:image" content="http://<?= ROOT_URL ?>/images_landing/<?= $page ?>/SaintPatrick-og.jpg" />
        <meta property="og:description" content="Allez-vous avoir de la chance en 2016 ? Jouez et recevez votre étude personnalisée !" />
        <meta property="og:locale" content="fr_FR" />
    
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        
        <link href="css/<?= $page ?>.css" rel="stylesheet" />
        
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
                <img src="images_landing/<?= $page ?>/My-ASTRO.svg" class="logo" alt="My Astro logo" />
                <h1 class="site-name">Saint Patrick</h1>
            </div>
        </header>
        <main role="main">
            <section class="main-section">
                <article class="leJeu">
                    <header class="article--header">
                        <h1 class="article--headline">Jour de chance, faites le jeu :</h1>
                        <h2 class="article--subtitle">Cliquez sur les cartes, et trouvez la paire...</h2>
                    </header>
                    <div class="cntr" ng-controller="JeuController">
                        <div class="timer" ng-class="{critical:isCritical}" ng-show="inGame == true">
                            {{timeLimit | date: 'm:ss'}}
                        </div>
                        <table class="table-top">
                            <tr ng-repeat="row in deck.rows">
                                <td ng-repeat="card in row.cards">
                                    <div class="card_container {{!card.isFaceUp ? '' : 'flip'}}" ng-click="isGuarding || check(card)">
                                        <div class="card shadow">
                                            <div class="front face"></div>
                                            <div class="back face text-center pagination-center">
                                                <img class="face--image" ng-src="images_landing/<?= $page ?>/card/{{card.item}}.svg" alt="{{card.item}}">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="startbtn" ng-show="inGame == false">
                            <button type="button" class="btn btn-default btn-lg" ng-disabled="inGame == true" ng-click="start()">Démarrer</button>
                        </div>
                    </div>
                </article>
                <article>
                    <header class="article--header">
                        <h1 class="article--headline small">Remplissez vite le formulaire pour<br/>recevoir votre étude personnalisée !</h1>
                    </header>
                    <form class="astro-form" accept-charset="utf-8" role="form">
                        <div class="container-90">
                            <header class="form--header">
                                <h1 class="form--title">vite !!! recevez<br>votre étude personnalisée</h1>
                                <hr />
                                <h2 class="form--subtitle">Allez-vous avoir de la chance en 2016 ?</h2>
                            </header>
                            <article class="form-content">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="<?= $page ?>" />
                                <input type="hidden" name="method" value="general-suscribe" />
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
                                        <img src="images_landing/<?= $page ?>/icons/female.svg" alt="♀"> <span>Femme</span>
                                        <input type="radio" name="sexe" id="gender-f" value="F" required />
                                    </label>
                                    <label class="gender-l" for="gender-h">
                                        <img src="images_landing/<?= $page ?>/icons/male.svg" alt="♂"> <span>Homme</span>
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
                                <input name="email" id="email" type="email" class="" placeholder="Mon adresse email" value="<?php isset($_GET['email']) ?>" required />
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
                    <h3>en cadeau votre étude personnalisée</h3>
                </article>
                <article class="study">
                    <h1 class="article--title">Amour, travail, argent : la chance sera-t-elle avec vous en 2016 ?</h1>
                    <p class="article--content">
                        Symbole de la chance, le jour de la Saint Patrick est l’occasion idéale pour se pencher sur les opportunités et les coups de pouce que l’année 2016 vous réserve. Vie sentimentale, vie professionnelle, santé financière : vous n’avez qu’à choisir le domaine sur lequel vous souhaitez mettre la lumière pour recevoir votre étude personnalisée. Réalisée par un astrologue professionnel, cette étude vous permettra d’en apprendre plus sur votre situation actuelle, de comprendre l’origine de vos blocages et de découvrir toutes les opportunités qui se présenteront à vous tout au long de l’année 2016. L’idéal pour ne plus redouter le futur, toujours posséder un coup d’avance sur la destinée et n’avoir plus qu’une chose à faire : profiter et croquer la vie à pleines dents !
                    </p>
                </article>
            </section>
        </main>
        <footer>
            <div class="reassure">
                <ul>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/<?= $page ?>/icons/star.svg" alt="star">
                            <p>Voyants sérieux reconnus
                                <br/>pour leur savoir-faire</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/<?= $page ?>/icons/luck.svg" alt="luck">
                            <p>Consultations 100%
                                <br/>discrètes &amp; anonymes</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/<?= $page ?>/icons/chat.svg" alt="chat">
                            <p>Interprétation
                                <br/>immédiate</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/<?= $page ?>/icons/trophy.svg" alt="leader">
                            <p>My Astro leader
                                <br/>depuis 2007</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/<?= $page ?>/icons/secure.svg" alt="secure">
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
        
        <div ng-controller="ModalController" class="container">
            <modal visible="showModal">
                <div class="row"><img class="modal-gif" src="images_landing/<?= $page ?>/popup.gif" alt="modal gif"></div>
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
                                <input type="hidden" name="source" value="<?= $page ?>" />
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
                                        <img src="images_landing/<?= $page ?>/icons/female.svg" alt="♀"> <span>Femme</span>
                                        <input type="radio" name="sexe" id="gender-f" value="F" required />
                                    </label>
                                    <label class="gender-l" for="gender-h">
                                        <img src="images_landing/<?= $page ?>/icons/male.svg" alt="♂"> <span>Homme</span>
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
                                <input name="email" id="email" type="email" class="" placeholder="Mon adresse email" value="<?php isset($_GET['email']) ?>" required />
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

        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.334.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/<?= $page ?>.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/formValidator.js"></script>
        
        <!-- #### TRACKINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>