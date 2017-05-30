<?php
    // Page tarot-gratuit-fb
    require_once(realpath('include/tools.php'));
    $button = "Découvrir mon \ninterprétation";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
	<title>Tarot gratuit : amour et destin à chaque tirage gratuit | Myastro</title>
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/voyance-tarot-nat.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-gratuit.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-responsive-nat.css" />
        <link rel="stylesheet" href="css/infobulle.css" />
        <link rel="stylesheet" href="sstyle_landing.css" />
        <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media="all" />
        
        <?php include('include/header_inc_landing.php'); ?>
    </head>
    
    <body class="voyance-tarot-gratuit-1">
        <div class="subbody">
            <div class="top-nav">
                <div class="nav-content"><div class="links">
                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | 
                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | 
                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
                </div></div>
            </div>
            <div class="main">
                <div class="left-part">
                    <div class="logo">
                        <img src="images_landing/tarot-sable/logo-myastro.png" alt="MyAstro" />
                    </div>
                    <div class="content">
                        <h1>Tarot gratuit</h1>
                        <div class="txt-content">
                            <p>Et si les cartes vous en disaient plus sur votre avenir ? Avec la voyance par tarot gratuit de MyAsto, tirez 5 lames et recevez par mail votre interprétation sous 24 heures.</p>
                            <p>Que signifient le Chariot ou le Monde ? Votre tirage de tarot gratuit est-il porteur de bonnes ou de mauvaises nouvelles ?</p>
                            <p>Les voyants spécialistes du tarot de MyAstro se tiennent à votre disposition pour interpréter au plus juste ce que les lames auront révélé.</p>
                            <p>Amour, argent, famille, notre tarot gratuit vous permet de répondre à vos interrogations en interrogeant le destin, qui se laissera découvrir dans les lames...</p>
                        </div>
                    </div>
                </div>
                
                <div class="right-top-part">
                    <div  class="voyance-tarot"><!-- Main Content -->
                        <div class="row-fluid">
		            <div class="span6 main-content">
                                <div class="widget-t w-sponsors">
                                    <div class="tarot-content">
                                        <div class="tarot-left" style="width:100%;">
                                            <div class="paquet">
                                                <div class="title">Tirez <strong>5</strong> lames</div>
                                                <div class="relative">
<?php
    for ($i = 1; $i <= 21; $i++){
        switch ($i){ // On met des attributs data pour la position de départ des elements
            case 1 :
            case 12 :
                $datapos = '0px';
                break;
            case 2 :
                $datapos = '2px';
                break;
            case 3 :
            case 11 :
                $datapos = '4px';
                break;
            case 4 :
            case 10 :
                $datapos = '6px';
                break;
            case 5 :
            case 9 :
                $datapos = '8px';
                break;
            case 6 :
            case 8 :
                $datapos = '10px';
                break;
            case 7 :
                $datapos = '12px';
                break;
        }
        echo '<img src="images_landing/carte.png" class="tarot-dos tarot-' . $i . '" data-pos="' . $datapos . '"/>';
    }
?>
                                                </div>
                                            </div>
                                            <div class="donne">
                                                <div class="donneHandler">
						<?php for ($i = 1; $i <= 5; $i++){ ?>
                                                    <div class="pickHolder"></div>
                                                <?php } ?>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div><br/> 
		    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="main bottom-part" id="secondpart">
                <div class="left-bottom-part">
                    <div class="comment-ca-marche">
                        <h2>Comment ça marche ? </h2>
                        <ul>
                            <li class="li1"><strong>1</strong> <span>Je tire mes cinq lames de tarot</span></li>
                            <li class="li2"><strong>2</strong> <span>Je remplis le formulaire</span></li>
                            <li class="li3"><strong>3</strong> <span>Jʼaccède au tchat immédiatement</span></li>
                            <li class="li4"><strong>3</strong> <span>Je reçois mon interprétation par mail</span></li>
                        </ul>
                        <img src="images_landing/voyance-tarot-gratuit.jpg" width="577" height="111" alt="Voyance tarot gratuit" />
                    </div>
                </div>
                <div class="right-part">
                    <div>
                        <div class="widget" id="form-overlay"></div>
                        <aside class="widget w-adv">
                            <div class="widget-title" style="text-align:center;">
                                <span class="h4">Mes informations</span>
                            </div>
                            <div id="form-w" class="widget-content clearfix">
                                <div class="visible-part form-part form-part-one">
                                    <div class="alert alert-danger" style="display: none;"></div>
                                    <form>
                                        <!-- ########## identification formulaire ########## -->
                                        <input type="hidden" name="source" value="myastro-tarot-a2" />
                                        <input type="hidden" name="method" value="general-suscribe" />
                                        <input type="hidden" name="support" value="tarot"/>
                                        <input type="hidden" name="affiliation" value="adwords" />
                                        <input type="hidden" name="dri" value="tel-tarot-gratuit-1" />
                                        <input type="hidden" name="redirect_method" value="reload_form" />
                                        <!-- ########## autres champs pré-remplis ######### -->
                                        <input type="hidden" name="gclid" value="<?= $_GET['gclid'] ?>" />
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
                                            <label for="theme_id">Thème de la question</label>
                                            <select class="cnt" name="theme_id" id="theme_id" required>
                                                <option value="" selected="selected">Thème de la question</option>
                                                <optgroup label="Amour">
                                                    <option value="question_1">Vous en avez marre d’être seul(e)</option>
                                                    <option value="question_2">Est-ce qu'il/elle m'aime ?</option>
                                                    <option value="question_24">Vous en aimez un(e) autre</option>
                                                    <option value="question_11">Il/Elle vous a quitté</option>
                                                </optgroup>
                                                <optgroup label="Argent">                          
                                                    <option value="question_73">Vous attendez un investissement</option>
                                                </optgroup>
                                                <optgroup label="Travail">
                                                    <option value="question_4">Vous attendez un changement professionel</option>
                                                    <option value="question_3">Vous cherchez un emploi</option>
                                                </optgroup>
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
            <script src="js/voyance-tarot-gratuit.js"></script>
            <script src="framework/bootstrap/js/bootstrap.min.js"></script>
            <script src="framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
            <script src="js/formValidator.js"></script>
            <script src="js/infoBulle.js"></script>

            <!-- #### TRACKINGS #### -->
            <?php include('include/remarketing/adwords.php');
                  include('include/remarketing/analytics.php');
                  include('include/remarketing/facebook.php'); ?>
        </div>
    </body>
</html>


