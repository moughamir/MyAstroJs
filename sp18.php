<?php
include("include/process-dri.php");
$assets = 'images_landing/saint-patrick-2018';
$site   = getenv('MYASTRO_ROOT_URL');
$email  = isset($_SESSION['email'])? $_SESSION['email']: '';
?>
  <!DOCTYPE html>
  <html ng-app="myAstro" prefix="og: http://ogp.me/ns#" lang="fr">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no">
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="304Fix" content="safari-fix">

    <title>Saint Patrick &#x1F340; - MyAstro</title>

    <meta property="og:title" content="Mini jeu de la Saint Patrick" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://<?= $site ?>/saint-patrick-2018" />
    <meta property="og:image" content="http://<?= $site ?>/<?= $assets ?>/cover.png" />
    <meta property="og:description" content="Allez-vous avoir de la chance en 2018 ? Jouez et recevez votre étude personnalisée !" />
    <meta property="og:locale" content="fr_FR" />

    <link rel="icon" type="image/png" href="<?= $assets ?>/favicon-sp18.png" />

    <link href="css/saint-patrick-18.css" rel="stylesheet" />

    <!--[if lt IE 9]>
            <script src="//cdn.jsdelivr.me/g/html5shiv@3.7.3,respond@1.4.2"></script>
    <![endif]-->
  </head>

  <body>
    <header class="site--header" role="banner">
      <div class="container">
        <img src="<?= $assets ?>/My-ASTRO.svg" alt="My Astro" class="logo">
        <h1 class="site-name">Saint Patrick : Jour de chance</h1>
      </div>
    </header>
    <main role="main">
      <section class="main-section">
      <article class="leJeu">
        <header class="article--header">
          <h1 class="article--headline">Jour de chance, faites le jeu :</h1>
          <h2 class="article--subtitle">Allez-vous avoir de la chance et trouver le chaudron magique !</h2>
        </header>
        <div class="cntr" ng-controller="GameController">
            <div id="game">
              <div class="hat">
              </div>
              <div class="hat">
              </div>
              <div class="hat">
              </div>
              <div class="ball">
                <img src="<?= $assets ?>/ball.svg"/>
              </div>
              <div id="game-result"></div>
            </div>
            <button id="btn-play">Jouer</button>
        </div>
      </article>
      </section>
      <section class="two">
        <article class="center-ner">
          <h3 class="gifty">en cadeau 10 minutes de voyance achetées = 10 minutes de voyance offertes</h3>
        </article>
        <article class="study">
          <h1 class="article--title">Amour, travail, argent : la chance sera-t-elle avec vous en 2018 ?</h1>
          <p class="article--content">
            Symbole de la chance, le jour de la <strong>Saint Patrick</strong> est l’occasion idéale pour se pencher sur les opportunités et les coups de pouce que <srong>l’année 2018 vous réserve</strong>.<br/>
            Vie sentimentale, vie professionnelle, santé financière : vous n’avez qu’à choisir le domaine
            sur lequel vous souhaitez mettre la lumière pour recevoir votre étude personnalisée.<br/>
            Réalisée par un <strong>astrologue professionnel</strong>, cette étude vous permettra d’en apprendre plus sur votre situation actuelle, de comprendre l’origine de vos blocages
            et de découvrir toutes les opportunités qui se présenteront à vous tout au long de l’année 2018.<br/>
            L’idéal pour ne plus redouter le futur, toujours posséder un coup d’avance sur la destinée et n’avoir plus qu’une chose à faire : <strong>profiter et croquer la vie à pleines dents !</strong>
          </p>
        </article>
      </section>
    </main>

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

    <!-- MODAL -->
    <div class="modal-popup">
      <h3 class="modal-headline">Votre demande a bien été prise en compte</h3>
      <p class="modal-text">Vous allez rapidement être contacté par un de nos experts-voyants.</p>
      <div class="btn-close">Fermer</div>
    </div>
    <div ng-controller="ModalController" class="container">
      <modal visible="showModal">
        <div class="row"><img class="modal-gif" src="<?= $assets ?>/popup.gif" alt="modal gif"></div>
        <div class="row">
          <?php if(!empty($err) || $state == 'MAIL_ERROR'){ ?>
          <p class="alert alert-danger">
            <b><i class="fa fa-warning"></i> Une erreur est survenue.</b><br/>
            <?php foreach($err as $msg){
                    echo $msg.'<br>';
                  } ?>
          </p>
          <?php } ?>
          <form class="astro-form" accept-charset="utf-8" role="form" method="post" action="">
            <input type="hidden" value="1" name="directCall">
            <div class="container-90">
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
              <header class="form--header">
                <h1 class="form--title">vite !!! Notre équipe<br>vous rappelle gratuitement :</h1>
                <hr>
                <h2 class="form--subtitle">Allez-vous avoir de la chance en 2018 ?</h2>
              </header>
              <article class="form-content">
                <!-- Genre -->
                <div class="Genre">
                  <label class="gender-l" for="gendert-f">
                        <img src="<?= $assets ?>/icons/female.svg" alt="femme"> <span>Femme</span>
                        <input type="radio" name="sexe" id="gendert-f" value="F" required />
                      </label>
                  <label class="gender-l" for="gendert-h">
                        <img src="<?= $assets ?>/icons/male.svg" alt="homme"> <span>Homme</span>
                        <input type="radio" name="sexe" id="gendert-h" value="M" />
                      </label>
                </div>
                <!-- Prénom -->
                <input name="prenom" id="prenom" type="text" class="" placeholder="Mon prénom" value="<?= $prenom ?>" required />
                <!-- Tel -->
                <input type="tel" name="tel" id="tel" placeholder="Mon N° de téléphone" required />
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
              <!-- ### BOUTON SUBMIT -->
              <input type="text" name="antisp" value="" style="display: none" />
              <button class="form--btn" type="submit" name="demande_rappel">Découvrir</button>
              <?php } ?>
            </div>
          </form>
        </div>
      </modal>
    </div>
    <!-- #### SCRIPTS #### -->
    <script src="//cdn.jsdelivr.net/g/jquery@2.2.4,angularjs@1.5.5(angular.min.js+angular-animate.min.js),bootstrap@3.3.7" charset="utf-8"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js"></script>
    <script src="js/saint-patrick-2018.js" charset="utf-8"></script>

    <!-- #### TRACKINGS #### -->
    <?php include('include/remarketing/adwords.php');
          include('include/remarketing/analytics.php');
          include('include/remarketing/facebook.php');?>
  </body>

  </html>
