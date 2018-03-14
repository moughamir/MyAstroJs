<?php
include('include/process-dri.php');
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Prévision, 2018, zodiaques, horoscope, astrologie" />
  <link rel="shortcut icon" href="images_landing/printemps-18/favicon.ico">
  <title>Printemps des Amours - DRI | MyAstro</title>
  <link href="//fonts.googleapis.com/css?family=Tangerine|Lobster|Open+Sans|Oswald:300,400" rel="stylesheet">
  <link rel="stylesheet" href="css/printemps-18.css">
  <link rel="shortcut icon" href="images_landing/printemps-18/favicon.ico">
  <!--[if lt IE 9]>
  <script src="//cdn.jsdelivr.me/g/html5shiv@3.7.3,respond@1.4.2"></script>
  <![endif]-->
</head>

<body class="dri-c">
<header class="site-header grid-3-small-1">
        <div class="one-third"></div>
        <div class="one-third">
          <a href="/" class="logo">
            <img src="images_landing/printemps-18/logo.svg" alt="MyAstro" class="site-logo">
          </a>
        </div>
        <div class="one-third"></div>
        <h1 class="hidden">Printemps des Amours 2018</h1>
      </header>
    <section class="site site-v2">


      <main class="site-content v2">
        <section class="view flex-container-v">
          <article class="dri ">
            <!-- Post Form Modal-->
            <div class="FormContainer overlay" id="form-overlay"></div>
            <article class="modal hidden">
                <div class="modal-container scaleUp">
                    <h2 class="modal-title">Votre demande a bien été prise en compte</h2>
                    <p class="modal-message">Vous allez rapidement être contacté par un de nos experts-voyants.</p>
                    <button class="btn modal-btn">Fermer</button>
                </div>
            </article>
            <article class="FormContainer center">
              <h1 class="form-title sign-name">Merci, vous allez recevoir la suite de vos prévisions AMOUREUSES par EMAIL</h1>
              <p class="message">Si vous ne souhaitez pas attendre d’avantage, notre équipe est à votre disposition et peut vous rappeller <span class="highlight">gratuitement</span>, il vous suffit d’inscrire votre numéro de téléphone dans le formulaire ci-dessous :</p>
              <div class="img-center">
                <img src="images_landing/printemps-18/10-free.png" alt="Les 10 premières minutes gratuites" class="10-free">
              </div><br>
                <?php if($directCall && ($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT')){ ?>
                    <p class="DRI-Sent">
                        APPEL EN COURS ....<br/>
                        Merci, votre demande de rappel a bien été prise en compte.<br/>
                        <strong>Un voyant vous recontactera dans quelques instants.</strong>
                    </p>
                <?php } else if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                    <p class="message">
                        Merci, votre demande a bien été prise en compte.<br/>
                        <strong class="highlight">Un voyant vous recontactera dans quelques instants</strong>.
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
                    <form action="" method="post" class="Primary-Form">
                        <input type="hidden" value="1" name="directCall">
                        <div class="FormContainer-Fields Fields-Table">
                            <div class="Fields-Table-Row">
                                <div class="FormField input-email">
                                    <input id="tel" type="tel" name="tel" class="FormField-Input" value="<?= $tel;?>" placeholder="Mon numéro de téléphone" required />
                                </div>
                            </div>
                            <div class="Fields-Table-Row">
                                <label for="pays" class="FormField-Label">Mon pays</label>
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
                        <input type="hidden" name="prenom" value="<?= $prenom;?>" />
                        <input type="text" name="antisp" value="" style="display: none" />
                        <button class="btn cta-call FormContainer-Submit" type="submit" name="demande_rappel">Rappel gratuit</button>
                    </form>
                <?php } ?>
                </article>
          </article>
        </section>
      </main>
    </section>
    <div class="PageWrapper">
      <footer class="SiteFooter">
        <div class="FooterWrapper">
          <ul class="ReassuranceList">
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img star"></span>
              <span class="ReassuranceList-Item-Txt">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></span>
            </li>
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img lock"></span>
              <span class="ReassuranceList-Item-Txt">Consultations 100% <br/><strong>discrètes & anonymes</strong></span>
            </li>
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img chat"></span>
              <span class="ReassuranceList-Item-Txt">Interprétation<br/><strong>immédiate</strong></span>
            </li>
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img trophy"></span>
              <span class="ReassuranceList-Item-Txt">My Astro leader <br/><strong>depuis 2007</strong></span>
            </li>
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img card"></span>
              <span class="ReassuranceList-Item-Txt">Paiement <br/><strong>sécurisé par CB</strong></span>
            </li>
          </ul>
        </div>
      </footer>
      <p class="SiteCopyright">
        <?php include('include/footer_copyright.php'); ?>
      </p>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- #### REMARKETINGS #### -->
  <?php include('include/remarketing/adwords.php');
        include('include/remarketing/analytics.php');
        include('include/remarketing/facebook.php');?>

</body>
</html>