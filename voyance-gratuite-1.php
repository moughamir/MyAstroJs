<?php
    // *** voyance-gratuite-1 ***
    require_once(realpath('include/tools.php'));
    $button = 'Je valide';
    $questions = array(
        'Amour' => array(
            [ 'code' => 'question_1', 'subject' => 'sentimental', 'text' => 'Vous en avez marre d’être seul(e)' ],
            [ 'code' => 'question_2', 'subject' => 'sentimental', 'text' => 'Est-ce qu’il/elle m’aime ?', 'conjoint' => true ],
            [ 'code' => 'question_24', 'subject' => 'sentimental', 'text' => 'Vous en aimez un(e) autre', 'conjoint' => true],
            [ 'code' => 'question_11', 'subject' => 'sentimental', 'text' => 'Il/Elle vous a quitté', 'conjoint' => true],
        ),
        'Argent' => array(
            [ 'code' => 'question_73', 'subject' => 'financier', 'text' => 'Vous attendez un investissement' ],
        ),
        'Travail' => array(
            [ 'code' => 'question_4', 'subject' => 'professionnel', 'text' => 'Vous attendez un changement professionnel' ],
            [ 'code' => 'question_3', 'subject' => 'professionnel', 'text' => 'Vous cherchez un emploi' ],
        )
    );
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Voyance chat gratuit : Essayez la voyance gratuite par tchat</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" href="./voyance-gratuite-6_files/bootstrap.min.css" />
        <link rel="stylesheet" href="css/infobulle.css" />
        <link rel="stylesheet" href="sstyle_landing.css" />
        <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />   
        <?php include('include/header_inc_landing.php'); ?>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body class="voyance-gratuite-1">
        <div class="top-nav">
            <div class="nav-content">
                <a href="http://<?= ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | 
                <a href="http://<?= ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> |
                <a href="http://<?= ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
            </div>
        </div>
        <div class="main">
            <div class="left-part">
                <div class="logo">
                    <img src="images_landing/tarot-sable/logo-myastro.png" alt="MyAstro" />
                </div>
                <div class="content">
                    <h1>Voyance gratuite</h1>
                    <div class="txt-content">
                        <p>Vous avez besoin de réponses sur votre avenir, qu'il soit proche ou lointain ? Avec MyAstro, tchattez en direct et gratuitement avec des voyants sérieux, disponibles et à votre écoute.</p>
                        <p>Amour, travail, argent ou famille, quelles que soient vos interrogations, n'hésitez pas à en faire par à nos médiums au cours d'une séance de voyance gratuite par tchat.</p>
                    </div>
                </div>

                <div class="comment-ca-marche">
                    <h2>Comment ça marche ? </h2>
                    <div class="cols-3 first">
                        Je remplis le <br/>formulaire
                    </div>
                    <div class="cols-3 middle">
                        Jʼaccède au tchat <br/>immédiatement
                    </div>
                     <div class="cols-3 last">
                        Je reçois une <br/>réponse par mail
                    </div>
                </div>
            </div>
            <div class="right-part">
                <div class="pop">
                    voyants <br/><strong>sérieux</strong> & <br/><strong>reconnus</strong>
                </div>
                <div class="widget" id="form-overlay"></div>
                <aside class="widget w-adv">
                    <div class="widget-title" style="text-align:center;">
                        <span class="h4">Mes informations</span>
                    </div>
                    <div id="form-w" class="widget-content clearfix">
                        <div class="visible-part form-part form-part-one">
                            <div class="alert alert-danger" style="display: none"></div>
                            <form id="">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="voyance-gratuite-a1" />
                                <input type="hidden" name="method" value="general-suscribe" />
                                <input type="hidden" name="support" value="voyance" />
                                <input type="hidden" name="site" value="myastro.fr" />
                                <input type="hidden" name="affiliation" value="adwords" />
                                <input type="hidden" name="dri" value="tel-voyance-gratuite-1" />
                                <input type="hidden" name="redirect_method" value="reload_form" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>" />
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <!-- ############################################### -->
                                <div class="form-w-one li-form">
                                    <label for="name">Prénom</label>
                                    <input type="text" id="name" name="prenom" required />
                                </div>
                                <div class="form-w-two li-form gender-select">
                                    <label for="sexe-f">
                                        <img src="images_landing/ico-femme.png" alt="♀" /> Femme
                                        <input type="radio" name="sexe" value="femme" id="sexe-f" />
                                    </label>
                                    <label for="sexe-h">
                                        <img src="images_landing/ico-homme.png" alt="♂" /> Homme
                                        <input type="radio" name="sexe" value="homme" id="sexe-h" />
                                    </label>
                                </div>
                                <div class="form-w-three li-form">
                                    <div>
                                        <label>
                                            Date de naissance
                                            <br/>
                                        </label>
                                        <select  class="daten jour" name="jour" required>
                                            <option selected="selected" value="">Jour</option>
                                            <?php for($i=1;$i<=31;$i++){ ?>
                                            <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                            <?php } ?>
                                        </select>
                                        <select  class="daten mois" name="mois" required>
                                            <option value="" selected="selected">Mois</option>
                                            <option value="01">Janv.</option>
                                            <option value="02">Fev.</option>
                                            <option value="03">Mars</option>
                                            <option value="04">Avr.</option>
                                            <option value="05">Mai</option>
                                            <option value="06">Juin</option>
                                            <option value="07">Juil.</option>
                                            <option value="08">Aout</option>
                                            <option value="09">Sept.</option>
                                            <option value="10">Oct.</option>
                                            <option value="11">Nov.</option>
                                            <option value="12">Dec.</option>
                                        </select>
                                        <select name="annee"  class="daten annee" required>
                                            <option selected="selected" value="">Année</option>
                                            <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-mess li-form">
                                    <label for="question_code">Thème de la question</label>
                                    <select class="cnt" name="question_code" id="theme_id" required>
                                        <option value="" selected disabled>Thème de la question</option>
                                        <?php foreach($questions as $optgroup => $options){ ?>
                                        <optgroup label="<?= $optgroup ?>">
                                            <?php foreach($options as $question){ ?>
                                            <option value="<?= str_replace('"', "'", json_encode($question)) ?>" <?= isset($question['conjoint']) && $question['conjoint'] ? 'data-need-spouse="1"' : ''?>><?= $question['text'] ?></option>
                                            <?php } ?>
                                        </optgroup>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-w-one li-form sonprenom">
                                    <label for="son_prenom">Son prénom</label>
                                    <input type="text" id="son_prenom" name="conjoint" />
                                </div>
                                <div class="form-w-one li-form">
                                    <label for="emai">E-mail</label>
                                    <input id="email" type="email" name="email" required />
                                    <span class="infob-email-w" style="color:#000;">Une étude personnalisée vous sera envoyée à cette adresse</span>
                                </div>
                                <div>
                                    <input class="btn_button btn-full-one" type="submit" name="valider" value="<?= $button ?>" />
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        
        <div class="subfooter">
            <ul>
                <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
                <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
                <li class="third">Étude personnalisée <br/><strong>par mail sous 24h</strong></li>
                <li class="fourth">My Astro leader <br/><strong>depuis 2007</strong></li>
                <div class="clear"></div>
            </ul>
            <div class="clear"></div>
        </div>

        <div class="footer">
            <?php include('include/footer_copyright.php'); ?>
        </div>
        
        <!-- #### SCRIPTS #### -->
        <script src="js/jquery-1.11.js"></script>
        <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script>
        <script src="js/formValidator.js"></script>
        <script src="js/infoBulle.js"></script>
        
        <!-- #### TRACKINGS #### -->
        <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script><!-- script pour conversion adwords en ajax -->
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              // facebook dans include/header_inc_landing.php ?>
    
    </body>
</html>


