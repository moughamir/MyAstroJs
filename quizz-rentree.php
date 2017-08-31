<?php
/**
 * quizz-rentree == AFFILBASE
 * --------------------------
 * Created on : 29 août 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
require_once('inc/config.php');

$form = 'quizz-rentree';
include('include/init-affilbase.php');
$regurl = 'quizz-rentree';
$method = 'general-suscribe';
$support = 'voyance';
$site = 'myastro.fr';
$dri = 'quizz-rentree-result?chat=1';
$dri2 = 'quizz-rentree-result';

$quizz = array(
    [
        'txt' => 'S’il fallait utiliser un mot pour décrire vos vacances :',
        'rep' => [
            [ 'value'=> 2, 'txt' => 'Enfin… Parce qu’il vous tardait de reprendre'],
            [ 'value'=> 1, 'txt' => 'Quoi… Parce que vous ne les avez pas vues passer'],
            [ 'value'=> 0, 'txt' => 'Oh noooon… Parce qu’il ne faut pas vous parler de rentrée']
        ]
    ],
    [
        'txt' => 'Depuis votre retour de vacances, vous êtes plutôt :',
        'rep' => [
            [ 'value'=> 2, 'txt' => 'A fond la forme !'],
            [ 'value'=> 1, 'txt' => 'Peau caramel, bronzage au top'],
            [ 'value'=> 0, 'txt' => 'Petite fatigue']
        ]
    ],
    [
        'txt' => 'Votre état d’esprit à l’approche de cette rentrée :',
        'rep' => [
            [ 'value'=> 2, 'txt' => 'Envie de tout déchirer !'],
            [ 'value'=> 1, 'txt' => 'Quoi ? C’est déjà fini les vacances ?'],
            [ 'value'=> 0, 'txt' => 'Direction toute sur les prochaines vacances']
        ]
    ],
    [
        'txt' => 'Vos priorités pour la rentrée :',
        'rep' => [
            [ 'value'=> 2, 'txt' => 'Argent, argent, argent !'],
            [ 'value'=> 1, 'txt' => 'Le bonheur ! Quoi de mieux que d’être heureux ?'],
            [ 'value'=> 0, 'txt' => 'La santé bien sûr, il n’y a que ça qui compte vraiment']
        ]
    ],
    [
        'txt' => 'Vos bonnes résolutions pour la rentrée :',
        'rep' => [
            [ 'value'=> 2, 'txt' => 'Je m’impose en renversant tout sur mon passage !'],
            [ 'value'=> 1, 'txt' => 'Être plus cool et plus zen'],
            [ 'value'=> 0, 'txt' => 'Me calmer, il y a déjà bien trop de stress']
        ]
    ],
    [
        'txt' => 'Et sur le plan sentimental :',
        'rep' => [
            [ 'value'=> 2, 'txt' => 'C’est le grand Amour, donc pourvu que ça dure !'],
            [ 'value'=> 1, 'txt' => 'Hum… Arf… Comment dire…'],
            [ 'value'=> 0, 'txt' => 'Je cherche encore et toujours']
        ]
    ],
);

$questions = array(
    1 => [ 'code' => 'QR_NEGATIF', 'subject' => 'evenement', 'text' => 'Quizz Rentrée - Moral négatif' ],
    2 => [ 'code' => 'QR_NEUTRE', 'subject' => 'evenement', 'text' => 'Quizz Rentrée - Moral neutre' ],
    3 => [ 'code' => 'QR_POSITIF', 'subject' => 'evenement', 'text' => 'Quizz Rentrée - Moral positif' ]
);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>My Astro - C’est la rentrée ! Venez tester votre moral</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/rentree16.min.css" />
        
        <!-- Meta Facebook -->
        <meta property="og:title" content="Faites le test pour savoir ce que Septembre vous réserve" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= PROTOCOL.'://'.ROOT_URL ?>/quizz-rentree" />
        <meta property="og:image" content="<?= PROTOCOL.'://'.ROOT_URL ?>/images_landing/rentree16/fb-ban.jpg" />
        <meta property="og:description" content=" Adieu Août, Septembre fait son apparition avec son lot de nouveautés, de défis et d’opportunités" />
        <meta property="og:locale" content="fr_FR" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div class="PageWrapper">
           
            <header class="SiteHeader">
                <div class="SiteLogo"><span>MyAstro</span></div>
                <h1 class="PageLogo"><span>C’est la rentrée</span><span>Venez tester votre moral</span></h1>
                <?php include('include/bloc-socials.php'); ?>
            </header>
            
            <section id="intro" class="intro">
               <article>
                    <div class="intro-Content">
                        <p>Finis le farniente et la dolce vita, place au travail, à la routine, aux heures passées dans les transports...<br class="tiny-hidden" />
                        La reprise du travail après les congés d’été est parfois difficile.<br class="tiny-hidden" />
                        Et s’accompagne souvent d’un petit coup de blues.</p>
                        <div class="intro-Content-Img">
                            <a href="#" class="intro-Content-Img1 startQuizz"><p>Fini les vacances...</p></a>
                            <a href="#" class="intro-Content-Img2 startQuizz"><p>... c'est l’heure de la rentrée&nbsp;!</p></a>
                        </div>
                        <p>Restez serein et retrouvez vos repères.</p>
                        <a href="#" id="btn-start" class="btn-start  startQuizz">Lancer le TEST</a>
                    </div> 
               </article>
            </section>
            
            <section id="questionnaire" class="questionnaire">
                <form method="post" id="q-form">
                    <!-- ########## TODO ########## -->

                    <h3 id="numQuestion">Question X</h3>

                    <div class="bxslider">  
                        <?php 
                            foreach($quizz as $id_q => $question){
                                $id_q++;
                        ?>
                        <!-- ------------------------- QUESTION <?= $id_q ?> ------------------------- -->
                        <section class="q<?= $id_q ?>" class="question">
                            <header class="question-Header">
                                <h2><?= $question['txt'] ?></h2>
                            </header>
                            <ul class="question-Content">
                                <?php 
                                    shuffle($question['rep']);
                                    foreach ($question['rep'] as $id_r => $rep){
                                ?>
                                <li><input type="radio" name="q<?= $id_q ?>" id="q<?= $id_q ?>_r<?= $id_r ?>" value="<?= $rep['value'] ?>"><label for="q<?= $id_q ?>_r<?= $id_r ?>"><?= $rep['txt'] ?></label></li>
                                <?php } ?>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ----------------------- FIN QUESTION <?= $id_q ?> ----------------------- -->
                        <?php } ?>
                    </div><!-- fin de bxslider -->
                </form>
            </section> 
            <!-- FIN DU QUESTIONNAIRE -->  
            
            <!-- FORMULAIRE CLIENT -->
            <section class="formulaire">
                <article class="FormContainer">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <p class="alert alert-danger" style="display: none"></p>
                    
                    <h2 class="FormContainer-Header">Remplissez vite le formulaire <br class="hidebloc"/> pour recevoir votre étude personnalisée !</h2>
                    <div class="FormContainer-Fields">
                        <form id="form-container" class="ajax">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="<?= $url;?>" />
                            <input type="hidden" name="regurl" value="<?= $regurl;?>" />
                            <input type="hidden" name="method" value="<?= $method;?>" />
                            <input type="hidden" name="support" value="<?= $support;?>" />
                            <input type="hidden" name="site" value="<?= $site;?>" />
                            <input type="hidden" name="affiliation" value="<?= $source;?>" />
                            <input type="hidden" name="gclid" value="<?= $gclid;?>" />
                            <input type="hidden" name="dri" value="<?= $dri;?>" />
                            <input type="hidden" name="dri2" value="<?= $dri2;?>" />
                            <!-- ########## autres champs pré-remplis ######### -->
                            <input type="hidden" name="cguv" value="1" />
                            <input type="hidden" name="partenaires" value="1" />
                            <input type="hidden" name="voyant" value="Aline" />
                            <!-- ############################################### -->
                            <div class="FormField radio">
                                <div class="FormField-TableInputContainer fixed-2-col gender">
                                    <div class="FormField-TableInputContainer-Cell">
                                        <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span> Femme</label>
                                        <input type="radio" name="sexe" value="F" id="sexe-f" class="FormField-Input" required />
                                    </div>
                                    <div class="FormField-TableInputContainer-Cell">
                                        <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span> Homme</label>
                                        <input type="radio" name="sexe" value="M" id="sexe-h" class="FormField-Input" />
                                    </div>
                                </div>
                            </div>
                            <div class="FormField">
                                <label for="name" class="FormField-Label">Prénom</label>
                                <input type="text" id="name" name="prenom" class="FormField-Input" required />
                            </div>
                            <div class="FormField">
                                <label class="FormField-Label">Date de naissance</label>
                                <div class="FormField-TableInputContainer">
                                    <div class="FormField-TableInputContainer-Cell">
                                        <select  class="FormField-Input" name="jour" required>
                                            <option selected="selected" value="">Jour</option>
                                            <?php for($i=1;$i<=31;$i++){ ?>
                                            <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="FormField-TableInputContainer-Cell">
                                        <select class="FormField-Input" name="mois" required>
                                            <option value="" selected="selected">Mois</option>
                                            <option value="01">Janv.</option>
                                            <option value="02">Fèv.</option>
                                            <option value="03">Mars</option>
                                            <option value="04">Avr.</option>
                                            <option value="05">Mai</option>
                                            <option value="06">Juin</option>
                                            <option value="07">Juil.</option>
                                            <option value="08">Août</option>
                                            <option value="09">Sept.</option>
                                            <option value="10">Oct.</option>
                                            <option value="11">Nov.</option>
                                            <option value="12">Déc.</option>
                                        </select>
                                    </div>
                                    <div class="FormField-TableInputContainer-Cell">
                                        <select class="FormField-Input" name="annee" required>
                                            <option selected="selected" value="">Année</option>
                                            <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="FormField">
                                <label for="email" class="FormField-Label">E-mail</label>
                                <input id="email" type="email" name="email" class="FormField-Input" required />
                                <span class="FormField-Info">Une étude personnalisée vous sera envoyée à cette adresse</span>
                            </div>
                            <button class="FormContainer-Submit btn-send" type="submit" name="valider">Voir le résultat</button>
                        </form>
                    </div>
                </article>    
            </section> 
            <!-- FIN FORMULAIRE CLIENT --> 

            <footer><p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p></footer>
        </div>    
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        
        <!-- #### QUESTIONNAIRE #### -->
        <script>/* configuration du quizz */
            var quizz_rep_max_value = 3;
            var quizz_nb_r = 3;
            var quizz_nb_q = 6;
            var quizz_result = <?= json_encode($questions);?>;
        </script>
        <script src="js/rentree16.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />