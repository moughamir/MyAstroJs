<?php
require_once(realpath('include/tools.php'));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>Tarot gratuit amour: apprenez-en plus sur votre futur avec Myastro</title>
<meta name="description" content="Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro." />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/voyance.css" />
  <link rel="shortcut icon" href="favicon.ico" /> 
  <noscript>
    <link rel="stylesheet" type="text/css" href="css/noscript.css" />
  </noscript>

  <!--[if IE 7]>
  <link id="lnkFontAwesomeIE7" href="framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
  <![endif]-->

  <!--[if lt IE 9]>
    <script src="framework/fix-ie/html5.js"></script>
  <![endif]-->

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
<body style="background:url('/images_tarot/bg-tarot.jpg')" class="voyance-tarot">

   <div class="container-fluid ninesixty" itemscope >
        <!-- Main Content -->
        <div class="row-fluid">
            <div class="article-content">
                <header>
                    <div class="cat-widget-title">
                        <h1 itemprop="headline">Tarot gratuit</h1>
                    </div>
                    <div class="row-fluid social-share-footer">
                        <div class="share-icons">
                            <p>Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro.</p>
                            <p class="indic">Tirez d'abord vos cartes pour ensuite avoir votre réponse</p>
                        </div>
                    </div>
                </header>
                <span class="clearfix"></span>
                <aside class="widget w-sponsors">
                    <div class="tarot-content">
                        <div class="tarot-left">
                            <div class="paquet">
                                <div class="relative">
                                    <?php
                                        for($i=1;$i<=12;$i++){
                                            switch($i){
                                                // On met des attributs data pour la position de départ des elements
                                                case 1  :
                                                case 12 :
                                                    $datapos = '0px';
                                                break;
                                                case 2  :
                                                    $datapos = '2px';
                                                break;
                                                case 3  :
                                                case 11 :
                                                    $datapos = '4px';
                                                break;
                                                case 4  :
                                                case 10 :
                                                    $datapos = '6px';
                                                break;
                                                case 5  :
                                                case 9 :
                                                    $datapos = '8px';
                                                break;
                                                case 6  :
                                                case 8 :
                                                    $datapos = '10px';
                                                break;
                                                case 7  :
                                                    $datapos = '12px';
                                                break;
                                            }
                                            echo '<img src="tarot/cartes/dos.png" class="tarot-dos tarot-'.$i.'" data-pos="'.$datapos.'"/>';
                                        }
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="donne">
                                <h5>Votre tirage :</h5>
                                <div class="donneHandler">
                                    <?php
                                        for($i=1;$i<=5;$i++){
                                            echo '<div class="pickHolder"></div>';
                                        }                                
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="tarot-right">
                            <form action="" method="post" class="hidden">
                                <input type="hidden" name="source" value="myastro-tarot" />
                                <input type="hidden" name="method" value="voyance-tarot-gratuit" />
                                <table>
                                    <tr>
                                        <td colspan="2">
                                            <div class="alert alert-danger hidden">
                                                <p></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group civilite">
                                                <label for="mr">Mr
                                                    <input type="radio" name="sexe" value="homme" class="form-controle" id="mr" >
                                                </label>
                                                <label for="mme">Mme - Melle
                                                <input type="radio" name="sexe" value="femme" class="form-control" id="mme" >
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <label for="prenom">Votre prénom</label>
                                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre Prénom..." required>
                                            </div>
                                            <div class="form-group">
                                                <label for="birthdate">Votre date de naissance</label>
                                                <input name="date_naissance" value="<?= (isset($date_naissance)) ? $date_naissance : '' ?>" type="text" placeholder="Votre Date de Naissance" id="birthday" class="form-control control-date" required="frenchDate" data-rule-required="true" data-msg-required="Merci de renseigner votre date de naissance" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="mail">Votre email</label>
                                                <input name="mail" type="email" placeholder="Votre mail" id="mail" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pays">Votre pays</label>
                                                <select name="pays" required id="pays" class="form-control">
                                                    <option value="none">Votre Pays</option>
                                                    <option value="BE" <?= (isset($pays) && $pays == "BE") ? 'selected':'' ?>>Belgique</option>
                                                    <option value="CA" <?= (isset($pays) && $pays == "CA") ? 'selected':'' ?>>Canada</option>
                                                    <option value="FR" <?= (isset($pays) && $pays == "FR") ? 'selected':'' ?>>France ( et DOM-TOM )</option>
                                                    <option value="LU" <?= (isset($pays) && $pays == "LU") ? 'selected':'' ?>>Luxembourg</option>
                                                    <option value="CH" <?= (isset($pays) && $pays == "CH") ? 'selected':'' ?>>Suisse</option>
                                                    <option value="ZZ" <?= (isset($pays) && $pays == "ZZ") ? 'selected':'' ?>>Autre</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Votre téléphone</label>
                                                <input type="text" name="phone" id="phone" class="form-control" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="question">Dans quel domaine</label>
                                                <select name="question" id="question" class="form-control">
                                                    <option value="">Choisissez un domaine</option>
                                                    <optgroup label="Amour">
                                                        <option value="question_1">Vous en avez marre d’être seul(e)</option>
                                                        <option value="question_2">Est-ce qu'il/elle m'aime ?</option>
                                                        <option value="question_23">Il/Elle vous trompe</option>
                                                        <option value="question_24">Vous en aimez un(e) autre</option>
                                                        <option value="question_22">Il/Elle est marié(e)</option>
                                                        <option value="question_12">Il/elle vous ignore</option>
                                                        <option value="question_11">Il/Elle vous a quitté</option>
                                                        <option value="question_10">Il/Elle ne sait pas que vous l'aimez</option>
                                                    </optgroup>
                                                    <optgroup label="Argent">
                                                        <option value="question_701">Vous attendez une décision de justice</option>
                                                        <option value="question_71">Vous attendez un contrat</option>
                                                        <option value="question_72">Vous attendez un héritage</option>
                                                        <option value="question_73">Vous attendez un investissement</option>
                                                        <option value="question_74">Vous attendez une bourse</option>
                                                    </optgroup>
                                                    <optgroup label="Travail">
                                                        <option value="question_4">Vous attendez une augmentation</option>
                                                        <option value="question_4">Vous attendez d'être muté</option>
                                                        <option value="question_3">Vous chezchez un emploi</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="conjoint">Prénom de votre conjoint</label>
                                                <input type="text" name="conjoint" id="conjoint" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="conjointBirthDate">Date de naissance de votre conjoint</label>
                                                <input name="conjointBirthDate" type="text" placeholder="Date de naissance de votre conjoint" id="conjointBirthDate" class="form-control control-date"  >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="horopart">
                                                    <input type="checkbox" name="horoscope" checked="checked"> Je souhaite recevoir mon horoscope quotidien par mail gratuitement. <br>
                                                    <input type="checkbox" name="partenaires" checked="checked"> Je souhaite recevoir les offres des partenaires.
                                            </div>
                                                <input type="submit" value="Obtenir ma voyance gratuite" class="btn btn-info" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </aside>           
            </div>
        </div>

    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->

    <script src="js/jquery-1.11.js"></script>
    <script type="text/javascript" src="./voyance-gratuite-6_files/jquery.maskedinput.min.js"></script>
    <script src="js/tarot.js"></script>
    <script src="js/formValidator.js"></script>
    <script src="framework/bootstrap/js/bootstrap.min.js"></script>
    <script src="framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="framework/bootstrap/js/bootstrap-tooltip.js"></script>
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