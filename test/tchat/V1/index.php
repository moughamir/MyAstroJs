<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once(realpath('../../../include/tools.php'));

$tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>Tarot gratuit amour: apprenez-en plus sur votre futur avec Myastro</title>
<meta name="description" content="Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro." />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?= $tracker->getCanonical() ?>
  <link rel="stylesheet" type="text/css" href="../../../css/voyance.css" />
  <link rel="shortcut icon" href="favicon.ico" /> 
  <noscript>
    <link rel="stylesheet" type="text/css" href="../../../css/noscript.css" />
  </noscript>

  <!--[if IE 7]>
  <link id="lnkFontAwesomeIE7" href="framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
  <![endif]-->

  <!--[if lt IE 9]>
    <script src="framework/fix-ie/html5.js"></script>
  <![endif]-->
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
                                            echo '<img src="../../../tarot/cartes/dos.png" class="tarot-dos tarot-'.$i.'" data-pos="'.$datapos.'"/>';
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
                                <input type="hidden" name="method" value="voyance-tarot-gratuit-v2" />
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
                                                        <option value="PF">Plynésie Française</option>
                                                        <option value="NC">Nouvelle Calédonie</option>
                                                    </optgroup>
                                                    <option value="ZZ">Autre</option>
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

    <script src="../../../js/jquery-1.11.js"></script>
    <script type="text/javascript" src="../../../voyance-gratuite-6_files/jquery.maskedinput.min.js"></script>
    <script src="../../../js/tarot.js"></script>
    <script src="../../../js/formValidator.js"></script>
    <script src="../../../framework/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="../../../framework/bootstrap/js/bootstrap-tooltip.js"></script>
 
</body>
</html>