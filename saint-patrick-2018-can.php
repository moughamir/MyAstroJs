<?php
include("include/process-dri.php");
$assets = 'images_landing/saint-patrick-2018';
$site   = getenv('MYASTRO_ROOT_URL');
$url = 'saint-patrick-2018-can';
$method = 'general-suscribe';
$source = "base_externe";
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
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lobster|Open+Sans" rel="stylesheet">
    <link href="css/saint-patrick-18.css" rel="stylesheet" />

    <!--[if lt IE 9]>
            <script src="//cdn.jsdelivr.me/g/html5shiv@3.7.3,respond@1.4.2"></script>
    <![endif]-->
  </head>

  <body>
    <div class="loading">
      <div class="loading-hat"></div>
    </div>
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
              <div class="hat" id="A">
              </div>
              <div class="hat" id="B">
              </div>
              <div class="hat" id="C">
              </div>
              <div class="ball">
                <img src="<?= $assets ?>/chaudron.png" />
              </div>
              <div id="game-result"></div>
            </div>
            <div class="startbtn">
              <button id="btn-play" type="button" class="btn btn-default btn-lg" ng-click="start()">Jouer</button>
            </div>
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
            Symbole de la chance, le jour de la <strong>Saint Patrick</strong> est l’occasion idéale pour se pencher sur les opportunités et les coups de pouce que
            <strong>l’année 2018 vous réserve</strong>.<br/> Vie sentimentale, vie professionnelle, santé financière : vous n’avez qu’à choisir le domaine sur lequel vous souhaitez en savoir d'avantage pour l’année 2018<br/> Plus rapide, plus directe, plus discrète, la voyance par tchat vous permet de discuter et d’échanger en direct avec le voyant de votre choix.<br/> Les avantages du tchat sont nombreux, et n’ont qu’un seul objectif : vous proposer une consultation qui vous donnera entière satisfaction.<br/> L’essayer c’est l’adopter ! Découvrez notre tchat en bénéficiant dès maintenant de <strong>10 minutes de consultation gratuites</strong> !
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

    <!-- Startup MODAL -->
    <div id="modal" class="modal modal-start">
      <div class="modal-overlay"></div>
      <div class="modal-wrapper modal-transition">
        <div class="modal-body">
          <div class="modal-content">
            <div class="row">
              <img class="modal-gif" src="<?= $assets ?>/popup.gif" alt="modal gif"/>
            </div>
            <div class="row">
              <form class="astro-form ajax" accept-charset="utf-8" role="form"  ng-submit="submit()" ng-controller="FormController" method="post" id="form-container">
                <input type="hidden" name="source" value="<?= $url;?>" />
                <input type="hidden" name="method" value="general-suscribe" />
                <input type="hidden" name="support" value="voyance" />
                <input type="hidden" name="acces_form_sp" value="acces_form_sp" />
                <input type="hidden" name="site" value="myastro.fr" />
                <input type="hidden" name="affiliation" value="<?= $source;?>" />
                <input type="hidden" name="pays" value="FR" />
                <input type="hidden" name="question_code" value="sp18" />
                <input type="hidden" name="optional_birthdate" value="1" />
                <input type="hidden" name="convertir" value="1" />
                <input type="hidden" name="cguv" value="1" />
                <input type="hidden" name="partenaires" value="1" />
                <div class="container-90">
                  <header class="form--header">
                    <h2 class="form--subtitle">Allez-vous avoir de la chance en 2018 ?</h2>
                  </header>
                  <article class="form-content">
                    <!-- Genre -->
                    <div class="Genre">
                      <label class="gender-l" for="gendert-f">
                        <img src="<?= $assets ?>/icons/female.svg" alt="femme"> <span>Femme</span>
                        <input type="radio" name="sexe" id="gendert-f" ng-model="sexe" value="F" required />
                      </label>
                      <label class="gender-l" for="gendert-h">
                        <img src="<?= $assets ?>/icons/male.svg" alt="homme"> <span>Homme</span>
                        <input type="radio" name="sexe" ng-model="sexe" id="gendert-h" value="M" />
                      </label>
                    </div>
                    <!-- Prénom -->
                    <input name="prenom" id="prenom" type="text" ng-model="name" class="" placeholder="Mon prénom" value="<?= $prenom ?>" required />
                    <!-- Tel -->
                    <input type="email" name="email" id="email" ng-model="email" placeholder="Mon email" required />
                    <input class="form--btn" name="play" type="submit" id="submit" value="Jouer" />
                  </article>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Winner -->
    <div id="popup" class="modal modal-winner">
      <div class="modal-overlay"></div>
      <div class="modal-wrapper modal-transition">
        <div class="modal-header">
          <h2 class="modal-heading">Vous avez <span class="upper">Gagné !</span></h2>
        </div>

        <div class="modal-body">
          <div class="modal-content">
            <h4 class="modal-headline">10 Minutes achetées <span>=</span> 10 Minutes OFFERTES !!!</h4>
            <p class="modal-text">entrez le code promo: <strong class="highlight">PATRICK18</strong><br/> au moment du paiement.</p>
            <button class="modal-redirect btn-cta">J'en profite</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Try Again-->
    <div id="retry" class="modal modal-retry">
      <div class="modal-overlay"></div>
      <div class="modal-wrapper modal-transition">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <div class="modal-content">
            <h4 class="modal-headline">Pas de chance</h4>
            <p class="modal-text"></p>
            <button class="modal-retry btn-cta">Réessayer</button>
          </div>
        </div>
      </div>
    </div>

    <!-- #### SCRIPTS #### -->
    <script src="//cdn.jsdelivr.net/g/jquery@2.2.4,angularjs@1.5.5(angular.min.js+angular-animate.min.js),bootstrap@3.3.7" charset="utf-8"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js"></script>
    <script src="js/formValidator.js"></script>
    <script src="js/saint-patrick-2018.js" charset="utf-8"></script>


    <!-- #### TRACKINGS #### -->
    <?php include('include/remarketing/adwords.php');
          include('include/remarketing/analytics.php');
          include('include/remarketing/facebook.php');?>
  </body>

  </html>
