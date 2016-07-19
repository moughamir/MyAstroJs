<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Voyance tarot : quels sont vos meilleurs atouts ? | Myastro</title>
    <meta name="description" content="My Astro : Vos Tarots Gratuits - Obtenez des réponses immédiates à toutes vos questions. Tarots Divinatoires Gratuits." />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <?= $tracker->getCanonical() ?>
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
    <script>(function() {
      var _fbq = window._fbq || (window._fbq = []);
      if (!_fbq.loaded) {
        var fbds = document.createElement('script');
        fbds.async = true;
        fbds.src = '//connect.facebook.net/en_US/fbds.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(fbds, s);
        _fbq.loaded = true;
      }
      _fbq.push(['addPixelId', '313112278889346']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=313112278889346&amp;ev=PixelInitialized" /></noscript>
    <!-- END SCRIPT TRACKING FB-->
<?php include('include/header_inc.php'); ?>
<div  class="voyance-tarot">
<div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li><span class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li>Tarot gratuit</span></li>
                                    </ul>
                                </div>
                                <div class="cat-widget-title" style="width:100%; margin-left:-19px;">
                                    
                                        <h1 itemprop="headline">Voyance tarot gratuit : découvrez les prédictions des cartes</h1>
                                    
                                </div>
                               
                                <div class="row-fluid social-share-footer" style="padding:0px; margin-left:-19px;">
                                    <span class="share-icon icon-caret-right"></span>

                                    <div class="share-icons" >
                                        <p class="txt-top" itemprop="headline">La voyance est un art divinatoire pluriel : pour vous informer sur votre avenir, de nombreuses méthodes peuvent être employées selon les préférences et croyances de chacun. La voyance par tarot en est une très prisée, où les cartes exploitent le hasard pour vous apporter de réelles indications sur votre futur plus ou moins proche.</p>
                                    </div>

                                </div>
                             

                            </header><br>
                            <span class="clearfix"></span>

                          <!--  ************************ contenu ****************************  -->

            <div class="row-fluid">
                <div class="share-icons widget-title" style="margin-bottom:10px; text-align:center;width:97%; margin-left:-37px;width:100%;">
                    <h4>Tirez d'abord vos cartes pour ensuite avoir votre réponse</h4>
                </div><br>
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
                                <h5 style="font-size:20px;">Votre tirage :</h5><br>
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
                        <div class="tarot-right tarot-middle">
                            <img id="img-first" src="images/img-tirage-tarot.png">
                            <form action="" method="post" class="hidden">
                                <input type="hidden" name="source" value="myastro-tarot" />
                                <input type="hidden" name="method" value="voyance-tarot-gratuit" />
                                <input type="hidden" name="support" value="tarot" />
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
                                                <label for="mme">Mme
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
                                                <label for="mail">Votre email pour recevoir votre réponse</label>
                                                <input name="mail" type="email" placeholder="Votre email pour recevoir votre réponse" id="mail" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pays">Votre pays</label>
                                                <select name="pays" required id="pays" class="form-control">
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
                                            <div class="form-group">
                                                <label for="phone">Votre téléphone *</label>
                                                <input type="text" name="phone" id="phone" placeholder="Votre téléphone" class="form-control" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="question">Dans quel domaine</label>
                                                <select name="question" id="question" class="form-control">
                                                    <option value="">Choisissez un domaine</option>
                                                    <optgroup label="Amour">
                                                        <option value="question_1">Vous en avez marre d’être seul(e)</option>
                                                        <option value="question_2">Est-ce qu'il/elle m'aime ?</option>
                                                        <!--<option value="question_23">Il/Elle vous trompe</option>-->
                                                        <option value="question_24">Vous en aimez un(e) autre</option>
                                                        <!--<option value="question_22">Il/Elle est marié(e)</option>-->
                                                        <!--<option value="question_12">Il/elle vous ignore</option>-->
                                                        <option value="question_11">Il/Elle vous a quitté</option>
                                                        <!--<option value="question_10">Il/Elle ne sait pas que vous l'aimez</option>-->
                                                    </optgroup>
                                                    <optgroup label="Argent">
                                                        <!--<option value="question_701">Vous attendez une décision de justice</option>
                                                        <option value="question_71">Vous attendez un contrat</option>
                                                        <option value="question_72">Vous attendez un héritage</option>-->
                                                        <option value="question_73">Vous attendez un investissement</option>
                                                        <!--<option value="question_74">Vous attendez une bourse</option>-->
                                                    </optgroup>
                                                    <optgroup label="Travail">
                                                        <option value="question_4">Vous attendez un changement professionel</option>
                                                        <!--<option value="question_4">Vous attendez d'être muté</option>-->
                                                        <option value="question_3">Vous cherchez un emploi</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </td>
                                        <td style="padding:0px 23px">
                                            <div class="form-group">
                                                <label for="conjoint">Prénom de votre conjoint</label>
                                                <input type="text" name="conjoint" id="conjoint" placeholder="Prénom de votre conjoint" class="form-control"/>
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
                                                    <input type="checkbox" name="partenaires" checked="checked"> Je souhaite recevoir les offres des partenaires.<br><br>
                                                    <span class="prec">* Un sms de confirmation vous sera envoyé lorsque votre réponse sera prête</span>
                                            </div><br>
                                                <input type="submit" value="Obtenir ma voyance gratuite" class="btn btn-info" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="clearfix"></div><br>
                        <div style="text-align:justify; width:93%;">
               <h2> Quand les cartes lisent votre avenir dans la voyance par tarot</h2>

<p>Avec 78 cartes et 22 atouts, le jeu de tarot est un art de la divination vieux de plusieurs centaines d'années. Cette forme de cartomancie, que l'on date aux environs de 1500, fonctionne sur le tirage aléatoire de plusieurs lames (comme sont appelées les cartes) : face dévoilées, ces dernières invitent alors leur interprétation. La destinée est donc une valeur centrale de la voyance par tarot, où chaque carte tirée est forte en signification.</p><br>
<p>Au cours d'une séance de voyance tarot, vous pourrez ainsi découvrir l'Impératrice, synonyme de créativité et de confiance en soi, la Lune, symbole de rêve et de mystère ou même le Diable, héraut de l'excès et des passions exacerbées. Utile pour tous, pour les couples comme les célibataires, les plus jeunes comme les plus âgés, la voyance par tarot vous permettra ainsi d'obtenir des réponses sur vos amours ou votre carrière professionnelle, afin de ne laisser aucune de vos interrogations en suspens.</p>

<h2>Votre voyance par tarot gratuit avec MyAstro</h2>

<p>Aujourd'hui, connaître votre avenir par la cartomancie n'oblige plus à se rendre chez un voyant. MyAstro vous permet en effet d'effecteur de la voyance par tarot en ligne en toute simplicité, directement depuis chez vous. Vous pourrez donc découvrir nos différents services de voyance par tarot gratuit, comme le tarot mensuel ou le tarot de couple, à solliciter autant de fois que vous le souhaitez, jusqu'à obtenir les réponses à l'ensemble de vos questions.</p><br>
<p>Spécialiste dans la voyance web, travaillant avec des experts reconnus dans le milieu de la divination, MyAstro vous propose donc une solution de voyance par tarot gratuit efficace et accessible, pour des recommandations fiables. Pour aujourd'hui ou pour demain, vous pourrez ainsi profiter de nos conseils de vie et vous préparer en toute sérénité à ce que votre destin vous réserve.</p>
            </div><br><br>
            <div class="text-center">
                <a href="http://beta.myastro.fr/conditions-generale">Conditions générales</a>
            </div>
                    </div>

                </aside>   

            </div>
            <div class="clearfix"></div>
            
        </div>

            </div>

        </div>
                       
    </div>

 </div>
</div>

<?php include('include/footer_inc_tarot.php'); ?>

    <!--<script src="js/jquery-1.11.js"></script>-->
    <script type="text/javascript" src="./voyance-gratuite-6_files/jquery.maskedinput.min.js"></script>
    <script src="js/tarot.js"></script>
    <script src="js/formValidator.js"></script>
    <script src="framework/bootstrap/js/bootstrap.min.js"></script>
    <script src="framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="framework/bootstrap/js/bootstrap-tooltip.js"></script>