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
          <table class="table-top">
            <div id="game">
              <div class="cup">
                <svg>
                  <use href="#hat" />
                </svg>
              </div>
              <div class="cup">
                <svg>
                  <use href="#hat" />
                </svg>
              </div>
              <div class="cup">
                <svg>
                  <use href="#hat" />
                </svg>
              </div>
              <div class="ball"></div>
              <div id="game-result"></div>
            </div>
            <button id="btn-play">Play</button>
          </table>
        </div>
      </article>
      </section>
      <section class="two">
        <article class="center-ner">
          <h3>en cadeau 10 minutes de voyance achetées = 10 minutes de voyance offertes</h3>
        </article>
        <article class="study">
          <h1 class="article--title">Amour, travail, argent : la chance sera-t-elle avec vous en 2018 ?</h1>
          <p class="article--content">
            Symbole de la chance, le jour de la Saint Patrick est l’occasion idéale pour se pencher sur les opportunités et les coups de pouce que l’année 2018 vous réserve. Vie sentimentale, vie professionnelle, santé financière : vous n’avez qu’à choisir le domaine
            sur lequel vous souhaitez mettre la lumière pour recevoir votre étude personnalisée. Réalisée par un astrologue professionnel, cette étude vous permettra d’en apprendre plus sur votre situation actuelle, de comprendre l’origine de vos blocages
            et de découvrir toutes les opportunités qui se présenteront à vous tout au long de l’année 2018. L’idéal pour ne plus redouter le futur, toujours posséder un coup d’avance sur la destinée et n’avoir plus qu’une chose à faire : profiter et
            croquer la vie à pleines dents !
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
    <!-- HAT -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 153.071 130.394" style="display: none;">
      <defs>
        <g id="hat">
          <path fill="#3b8000" d="M41.953 77.289c-5.868-3.613-11.169-8.253-17.551-10.855-6.382-2.602-14.509-2.658-19.359 2.238-2.767 2.794-4.041 6.771-4.436 10.683-1.055 10.454 3.67 20.943 10.982 28.489 7.311 7.546 16.975 12.435 26.927 15.805 26.364 8.929 56.017 7.741 81.582-3.27 7.566-3.259 14.859-7.403 20.768-13.146 5.907-5.743 10.368-13.204 11.517-21.362.809-5.75-.439-12.368-5.186-15.712-5.968-4.205-14.112-1.436-20.976 1.054a183.388 183.388 0 0 1-44.239 10.051c-13.076 1.306-28.389 3.192-40.029-3.975z"/>
          <path fill="#336e00" d="M35.959 87.618c4.453 13.47 17.021 23.376 30.834 26.614 13.813 3.237 28.569.401 41.335-5.788 7.845-3.803 15.717-9.788 17.155-18.387.451-2.702-3.254-5.344-5.843-6.241-2.588-.896-5.404-.764-8.141-.621-25.02 1.311-50.319 3.114-75.34 4.423z"/>
          <path fill="#408a00" d="M29.277 14.844s8.789 51.13 6.647 75.113c0 0 30.834 33.404 80.084 2.141 0 0-1.519-41.116 8.877-71.735l-95.608-5.519z"/>
          <path fill="#403125" d="M116.096 76.912c-40.547 23.453-69.18 7.452-79.922-.843.159 5.141.106 9.892-.25 13.887 0 0 30.834 33.404 80.084 2.141 0 .001-.22-6.033.088-15.185z"/>
          <path d="M72.008 17.311c-.765 1.535-1.098 3.269-.736 4.782a76.948 76.948 0 0 0 12 7.328c12.77 6.279 19.947 20.115 17.255 34.088-2.993 15.541-10.407 30.36-21.178 41.782 10.606-.783 22.915-4.468 36.659-13.193 0 0-1.519-41.116 8.877-71.735l-52.877-3.052z" opacity=".1"/>
          <path fill="#336e00" d="M147.196 70.159c-3.657-2.577-8.132-2.53-12.628-1.538 1.806 1.18 3.386 2.703 4.538 4.509 4.046 6.339 3.502 14.844.131 21.567-3.37 6.723-9.179 11.91-15.342 16.22-14.918 10.432-32.497 16.456-50.624 18.637 16.025.231 32.104-2.833 46.826-9.174 7.566-3.259 14.859-7.403 20.768-13.146 5.907-5.743 10.368-13.204 11.517-21.362.809-5.75-.44-12.369-5.186-15.713z"/>
          <path d="M35.924 89.957s2.435 2.638 7.029 5.737c-1.961-3.908-3.143-8.307-3.742-12.644-1.139-8.241-.574-16.639-1.604-24.894-.635-5.091-1.875-10.108-2.183-15.23-.307-5.121.415-10.517 3.345-14.728 2.931-4.211 8.465-6.873 13.353-5.316-.208-2.323-.89-4.658-1.94-6.832l-20.906-1.207c.001.001 8.79 51.131 6.648 75.114z" opacity=".1"/>
          <path fill="#4ea800" d="M40.228 4.01C34.952 5.7 28.993 9.311 29.277 14.844c.151 2.951 2.206 5.543 4.724 7.09 2.518 1.547 5.462 2.22 8.358 2.808 22.938 4.657 46.609 5.472 69.877 2.934 5.18-.566 11.451-2.242 12.649-7.313 1.171-4.958-3.518-9.282-7.993-11.718-11.304-6.15-24.682-7.316-37.316-7.591C66.64.772 52.682.02 40.228 4.01z"/>
          <path fill="#489c00" d="M45.092 5.45c-4.582 1.467-9.756 4.603-9.51 9.408.131 2.563 1.917 4.813 4.102 6.157 2.186 1.344 4.743 1.928 7.258 2.438C66.86 27.496 87.415 28.204 107.619 26c4.497-.491 9.943-1.946 10.983-6.35 1.018-4.306-3.054-8.06-6.94-10.175-9.815-5.341-21.432-6.353-32.403-6.592-11.233-.245-23.353-.897-34.167 2.567z"/>
          <path fill="#439100" d="M111.662 9.475c-7.224-3.93-15.422-5.513-23.622-6.172 2.657 1.338 5.104 3.041 6.803 5.447 2.466 3.491 2.815 8.795-.256 11.767-1.872 1.811-4.566 2.429-7.122 2.928-6.703 1.308-13.469 2.274-20.263 2.96 13.434 1.228 27.002 1.057 40.417-.406 4.497-.491 9.943-1.946 10.983-6.35 1.018-4.304-3.053-8.058-6.94-10.174z"/>
          <path fill="#489c00" d="M4.923 94.631C2.837 87.014 3.51 78.333 8.186 71.969c2.553-3.474 6.434-6.006 10.593-7.054-5.027-.722-10.235.223-13.736 3.757-2.767 2.794-4.041 6.771-4.436 10.683-.993 9.842 3.139 19.713 9.727 27.132-2.331-3.707-4.256-7.639-5.411-11.856z"/>
          <path fill="#ffbe28" d="M81.478 108.242H67.672a5.312 5.312 0 0 1-5.306-5.306V91.332a5.313 5.313 0 0 1 5.306-5.307h13.806a5.313 5.313 0 0 1 5.306 5.307v11.603a5.313 5.313 0 0 1-5.306 5.307zM67.672 88.595a2.74 2.74 0 0 0-2.736 2.738v11.603a2.74 2.74 0 0 0 2.736 2.736h13.806a2.74 2.74 0 0 0 2.737-2.736V91.332a2.741 2.741 0 0 0-2.737-2.738H67.672z"/>
          <path fill="#ffbe28" d="M74.574 98.417a1.284 1.284 0 0 1-.038-2.57l14.133-.431a1.28 1.28 0 0 1 1.322 1.246 1.286 1.286 0 0 1-1.245 1.324l-14.132.43-.04.001z"/>
          <circle cx="56.909" cy="95.416" r="1.5" fill="#33271d"/>
          <circle cx="47.273" cy="90.764" r="1.5" fill="#33271d"/>
          <path fill="#469600" d="M50.862 61.717c.073 5.486 1.885 11.298 6.263 14.604 3.418 2.581 7.927 3.288 12.206 3.087 4.636-.217 9.425-1.519 12.776-4.731 2.918-2.797 4.475-6.839 4.669-10.875.194-4.037-.894-8.064-2.655-11.701-1.49-3.076-3.543-5.995-6.45-7.792-3.422-2.116-7.289-2.236-11.181-2.016-2.531.143-5.543-.163-7.961.733-6.238 2.309-7.742 13.077-7.667 18.691z"/>
        </g>
      </defs>
    </svg>
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
