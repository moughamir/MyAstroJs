<?php

require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));

?>

<!DOCTYPE html>

<html lang="fr">
  <object type="{0C55C096-0F1D-4F28-AAA2-85EF591126E7}" cotype="cs" id="cosymantecbfw" style="width: 0px; height: 0px; display: block;"></object>
  <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="">

    <title>Votre Voyance Amoureuse gratuite par email </title>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,noarchive">
    <meta name="description" content="">
    <?= $tracker->getCanonical() ?>
    <link rel="stylesheet" href="./voyance-gratuite-6_files/bootstrap.min.css">
    <link rel="stylesheet" href="./voyance-gratuite-6_files/style.css">
    <link href="./voyance-gratuite-6_files/css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./voyance-gratuite-6_files/default.css" media="all">
    <link rel="shortcut icon" href="favicon.ico"> 
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery-1.11.js"></script>
    <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/formValidator.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        $('input[name="theme_id"]').on('change',function(){
            $('input[name="theme_exact"]').val($(this).attr('id'));
            $('input[name="secteur"]').val($(this).data('secteur'));
        });
      });
    </script>

    
    <!-- SCRIPT TRACKING FB-->
    <script>(function(){
      window._fbds = window._fbds || {};
      _fbds.pixelId = 497972160313027;
      var fbds = document.createElement('script');
      fbds.async = true;
      fbds.src = '//connect.facebook.net/en_US/fbds.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(fbds, s);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(["track", "PixelInitialized", {}]);
    </script>
    <noscript><img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=497972160313027&amp;ev=NoScript" /></noscript>
     <!-- END SCRIPT TRACKING FB-->
</head>
<body style="" cz-shortcut-listen="true">
<div id="wrapper" class="container" style="max-width:650px;">
    <div id="two-columns">
    <div class="content row">
      <div id="column1" class="col-md-offset-1 col-md-10">
        
           <h2>Questions gratuite par email</h2>
       
        <p>Un voyant bénévole va vous aider gratuitement, soyez poli et expliquez clairement la situation.</p>
        <div class="alert alert-danger">
          <p></p>
        </div>
          
   <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="full_form" >  
    <input type="hidden" name="source" value="voyance-gratuite-6" />
    <input type="hidden" name="method" value="voyance-gratuite-6" />
    <input name="sexe" value="homme" id="theme_48" type="radio" <?= (isset($sexe) && $sexe == 'homme') ? 'checked' : '' ?>> Monsieur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="sexe" value="femme" id="theme_48" type="radio" <?= (isset($sexe) && $sexe == 'femme') ? 'checked' : '' ?>> Madame - Mademoiselle<br><br>
       
  
  <fieldset>
    <div class="row">
            <div class="col-md-6">
        <div class="form-group">
    
    
          <input class="form-control" value="<?= (isset($prenom)) ? $prenom : '' ?>" type="text" id="name" name="prenom" placeholder="Votre prénom" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre prénom">
        </div>
      </div>
                  <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" value="<?= (isset($email)) ? $email : '' ?>" id="email" type="email" name="email" placeholder="Votre adresse email" required="" data-rule-required="true" data-rule-email="true" data-msg-required="Merci de renseigner votre email" data-msg-email="Merci de renseigner une adresse email valide">
        </div>
      </div>
          </div>
    <br>
    <div class="row">
            <div class="col-md-6">
        <div class="form-group">
          <input name="date_naissance" value="<?= (isset($date_naissance)) ? $date_naissance : '' ?>" type="text" placeholder="Votre Date de Naissance" id="birthday" class="form-control control-date" required="frenchDate" data-rule-required="true" data-msg-required="Merci de renseigner votre date de naissance" >
        </div>
      </div>
                  <div class="col-md-6">
        <div class="form-group">
            <input name="tel" type="tel" value="<?= (isset($tel)) ? $tel : '' ?>" placeholder="N° de Téléphone" class="form-control" required="" data-rule-digits="true" data-rule-required="true" data-msg-required="Merci de renseigner votre N° de Téléphone" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
        <select name="pays" id="pays" class="form-control" required>
          <option value="">Votre Pays</option>
          <option value="BE">Belgique</option>
          <option value="CA">Canada</option>
          <option value="LU">Luxembourg</option>
          <option value="CH">Suisse</option>
          <option value="FR">France Métropolitaine</option>
          <optgroup label="DOM-COM">
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
    <br>
    <p>Quel est le sujet de vos tourments ?</p>
    <input type="hidden" name="theme_exact" value="<?= (isset($theme_exact)) ? $theme_exact : '' ?>"/>
    <input type="hidden" name="secteur" value="<?= (isset($secteur)) ? $secteur : '' ?>"/>
        <ul class="nav nav-tabs">
      <li <?= ( (isset($secteur) && $secteur == 'amour') || !isset($secteur) || $secteur == false ) ? 'class="active"' : '' ?>><a href="#love" data-toggle="tab">Amour</a></li>
      <li <?= (isset($secteur) && $secteur == 'argent' )  ? 'class="active"' : '' ?>><a href="#money" data-toggle="tab">Argent</a></li>
      <li <?= (isset($secteur) && $secteur == 'travail' ) ? 'class="active"' : '' ?>><a href="#work" data-toggle="tab">Travail</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane <?= ( (isset($secteur) && $secteur == 'amour') || !isset($secteur) || $secteur == false ) ? 'active' : '' ?>" id="love">
        <div class="row">
          <div class="col-md-6">
            <div class="radio">
              <label for="theme_49">
                <input name="theme_id" value="question_1" id="theme_49" data-secteur='amour' <?= (isset($theme_exact) && $theme_exact == 'theme_49') ? 'checked="checked"' : '' ?> type="radio">
                Vous en avez marre d’être seule
              </label>
            </div>
            <div class="radio">
              <label for="theme_34">
                <input name="theme_id" value="question_2" id="theme_34" data-secteur='amour' <?= (isset($theme_exact) && $theme_exact == 'theme_34') ? 'checked="checked"' : '' ?> type="radio">
                Est-ce qu'il m'aime
              </label>
            </div>
            <div class="radio">
              <label for="theme_46">
                <input name="theme_id" value="question_2" id="theme_46" data-secteur='amour'<?= (isset($theme_exact) && $theme_exact == 'theme_46') ? 'checked="checked"': '' ?>  type="radio">
                Il vous trompe
              </label>
            </div>
            <div class="radio">
              <label for="theme_36">
                <input name="theme_id" value="question_2" id="theme_36" data-secteur='amour' <?= (isset($theme_exact) && $theme_exact == 'theme_36') ? 'checked="checked"' : '' ?>  type="radio">
                Vous en aimez un autre
              </label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="radio">
              <label for="theme_48">
                <input name="theme_id" value="question_22" id="theme_48" data-secteur='amour' <?= (isset($theme_exact) && $theme_exact == 'theme_48') ? 'checked="checked"' : '' ?>  type="radio">
                Il est marié
              </label>
            </div>
            <div class="radio">
              <label for="theme_32">
                <input name="theme_id" value="question_12" id="theme_32" data-secteur='amour' <?= (isset($theme_exact) && $theme_exact == 'theme_32') ? 'checked="checked"' : '' ?>  type="radio">
                Il vous ignore
              </label>
            </div>
            <div class="radio">
              <label for="theme_47">
                <input name="theme_id" value="question_11" id="theme_47" data-secteur='amour' <?= (isset($theme_exact) && $theme_exact == 'theme_47') ? 'checked="checked"' : '' ?>  type="radio">
                Il vous a quitté
              </label>
            </div>
            <div class="radio">
              <label for="theme_37">
                <input name="theme_id" value="question_10" id="theme_37" data-secteur='amour' <?= (isset($theme_exact) && $theme_exact == 'theme_37') ? 'checked="checked"' : '' ?>  type="radio">
                Il ne sait pas que vous l'aimez
              </label>
            </div>
          </div>
        </div>
        <div class="row">
                    <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="lover_name" name="conjoint" value="<?= (isset($conjoint_prenom) && !empty($conjoint_prenom)) ? $conjoint_prenom : '' ?>" class="form-control" placeholder="Prénom de l&#39;être aimé" >
            </div>
          </div>
                              <div class="col-md-6">
            <div class="form-group">
              <input name="conjoint_date_naissance" type="text" value="<?= (isset($conjoint_date_naissance) && !empty($conjoint_date_naissance)) ? $conjoint_date_naissance : '' ?>" placeholder="Sa date de Naissance" class="form-control control-date" >
            </div>
          </div>
                  </div>
      </div>
      <div class="tab-pane <?= (isset($secteur) && $secteur == 'argent' )   ? 'active' : '' ?>" id="money">
        <div class="row">
          <div class="col-md-6">
            <div class="radio">
              <label for="theme_53">
                <input name="theme_id" value="question_74" id="theme_53" data-secteur='argent' <?= (isset($theme_exact) && $theme_exact == 'theme_53') ? 'checked="checked"' : '' ?>  type="radio">
                Vous attendez une bourse
              </label>
            </div>
            <div class="radio">
              <label for="theme_52">
                <input name="theme_id" value="question_71" id="theme_52" data-secteur='argent' <?= (isset($theme_exact) && $theme_exact == 'theme_52') ? 'checked="checked"' : '' ?> type="radio">
                Vous attendez un contrat
              </label>
            </div>
            <div class="radio">
              <label for="theme_50">
                <input name="theme_id" value="question_72" id="theme_50" data-secteur='argent' <?= (isset($theme_exact) && $theme_exact == 'theme_50') ? 'checked="checked"' : '' ?> type="radio">
                Vous attendez un héritage
              </label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="radio">
              <label for="theme_54">
                <input name="theme_id" value="question_73" id="theme_54" data-secteur='argent' <?= (isset($theme_exact) && $theme_exact == 'theme_54') ? 'checked="checked"' : '' ?> type="radio">
                Vous attendez un investissement
              </label>
            </div>
            <div class="radio">
              <label for="theme_51">
                <input name="theme_id" value="question_701" id="theme_51" data-secteur='argent' <?= (isset($theme_exact) && $theme_exact == 'theme_51') ? 'checked="checked"' : '' ?>  type="radio">
                Vous attendez une décision de justice
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane <?= (isset($secteur) && $secteur == 'travail' )   ? 'active' : '' ?>" id="work">
        <div class="radio">
          <label for="theme_56">
            <input name="theme_id" value="question_4" id="theme_56" data-secteur='travail' <?= (isset($theme_exact) && $theme_exact == 'theme_56') ? 'checked="checked"' : '' ?>  type="radio">
            Vous attendez une augmentation
          </label>
        </div>
        <div class="radio">
          <label for="theme_57">
            <input name="theme_id" value="question_4" id="theme_57" data-secteur='travail' <?= (isset($theme_exact) && $theme_exact == 'theme_57') ? 'checked="checked"' : '' ?>  type="radio">
            Vous attendez d'être muté
          </label>
        </div>
        <div class="radio">
          <label for="theme_55">
            <input name="theme_id" value="question_3" id="theme_55" data-secteur='travail' <?= (isset($theme_exact) && $theme_exact == 'theme_55') ? 'checked="checked"' : '' ?>  type="radio">
            Vous cherchez un emploi
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <textarea class="form-control" rows="6" id="question" placeholder="Posez votre question en donnant le maximum d&#39;informations. Pour plus de confidentialité, ne citez aucun nom de personne." name="question"  data-msg-required="Merci de préciser votre problème"><?= (isset($_POST['question']) && !empty($_POST['question']) ) ? trim($_POST['question']) : '' ?></textarea>
    </div>
    <p>Vous vivez cette situation comme :</p>
    <div class="row">
      <div class="col-md-6">
        <div class="radio">
          <label>
            <input type="radio" name="mind" value="fatalité" <?= (isset($mind) && $mind == 'fatalité') ? 'checked' : '' ?>>
            Une Fatalité
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="mind" value="rejet" <?= (isset($mind) && $mind == 'rejet') ? 'checked' : '' ?>>
            Une Rejet
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="mind" value="abandon" <?= (isset($mind) && $mind == 'abandon') ? 'checked' : '' ?>>
            Un Abandon
          </label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="radio">
          <label>
            <input type="radio" name="mind" value="injustice" <?= (isset($mind) && $mind == 'injustice') ? 'checked' : '' ?>>
            Une Injustice
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="mind" value="trahison" <?= (isset($mind) && $mind == 'trahison') ? 'checked' : '' ?>>
            Une Trahison
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="mind" value="humiliation" <?= (isset($mind) && $mind == 'humiliation') ? 'checked' : '' ?>>
            Une Humiliation
          </label>
        </div>
      </div>
    </div>
    <input type="submit" name="valider" class="btn btn-primary btn-lg btn-block btn-chelou" value="Accédez à votre voyance GRATUITE maintenant">  
  </fieldset>
  <div id="ctn_accord">
    <p>
          <input type="checkbox" name="horoscope" checked="checked"> Je souhaite recevoir mon horoscope quotidien par mail gratuitement.<br>
      </p>
      <p>
          <input type="checkbox" name="partenaires" checked="checked"> Je souhaite recevoir les offres des partenaires.<br>
      </p>                            
  </div>
</form>
</div>
</div>
</div>
</div>  
  <script type="text/javascript" src="./voyance-gratuite-6_files/script.js"></script>
  <script type="text/javascript" src="./voyance-gratuite-6_files/jquery.maskedinput.min.js"></script>
   <!-- New Remarketing tags -->
  <script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 1024378253;
  var google_conversion_label = "ipnICMWfg2EQjYu76AM";
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
  /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1024378253/?value=1.00&amp;currency_code=EUR&amp;label=ipnICMWfg2EQjYu76AM&amp;guid=ON&amp;script=0"/>
    </div>
  </noscript>

  <!-- Analytics tags -->
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16975536-3']);
  _gaq.push(['_trackPageview']);

  (function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
  })();

  </script> 
</body>
</html>