<?php
/* 
    -------------------------------------------
    --     voyance-amour-16 = AFFIL BASE     --
    -------------------------------------------

    Created on : 13 juin 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
                 Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
$questions = array(
    ['code'=>'vam16_question_1', 'subject'=>'sentimental', 'text'=>'Mon célibat va-t-il prendre fin ?'],
    ['code'=>'vam16_question_2', 'subject'=>'sentimental', 'text'=>'Je ne sais plus où j’en suis sentimentalement, que faire ?', 'conjoint' => true ],
    ['code'=>'vam16_question_3', 'subject'=>'sentimental', 'text'=>'Ses sentiments pour moi sont-ils sincères ?', 'conjoint' => true ],
    ['code'=>'vam16_question_4', 'subject'=>'sentimental', 'text'=>'Mon couple va-t-il durer ?', 'conjoint' => true ],
    ['code'=>'vam16_question_5', 'subject'=>'sentimental', 'text'=>'Dois-je croire à notre histoire ?', 'conjoint' => true ],
);
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
    <title>MyAstro - Voyance Amour 2016</title>
    
    <meta name="robots" content="noindex,nofollow" />
    
    <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />

    <link rel="stylesheet" type="text/css" href="css/voyance-amour-16.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
        <header class="SiteHeader">
            <div class="PageWrapper small-header">
                <span class="SiteLogo"></span>
                <h1 class="DescText-Title title-page large-hidden">
                    <span>voyance</span>&nbsp;<span>Amour</span>
                </h1>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper grid-2-tiny-1-small-1 flex-container-grid">
                <div class="ContentBand-Column ">
                    <div class="TextContent ">
                        <header class="ContentBand-ColumnHeader small-hidden medium-hidden">
                            <h1 class="DescText-Title title-page">
                                <span>voyance</span>&nbsp;<span>Amour</span>
                            </h1>
                            
                        </header>
                        <article class="DescText bloc-blanc">
                            <div class="DescText-Content">
                                <p>Vous souhaitez savoir quand est-ce que vous allez trouver l’amour ? Vous vous interrogez sur votre avenir ou votre partenaire ? Vous éprouvez des sentiments pour une personne mais tout n’est pas si facile ? </p>
                <p>L’amour est un domaine qui nous tient tellement à cœur qu’il est normal de se poser des questions, de douter et d’avoir besoin de conseils. Autant de points qu’il ne faut pas laisser sans réponse, sous peine de voir votre vie sentimentale courir à sa perte. </p>
                <p>Nous mettons à votre disposition une équipe complète de professionnels de la divination experts du domaine amoureux et des sujets sentimentaux. Mettant toutes leurs connaissances et leurs pratiques à votre service, leurs conseils, leurs informations et leurs révélations vous permettront d’y voir plus clair et d’avoir toutes les cartes pour prendre votre vie sentimentale en main et faire de vos rêves des réalités.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="ContentBand-Column Form">
                    <div class="FormContainer-Pop tiny-hidden small-hidden ">
                        <div><span>voyants </span><br><span><strong>sérieux&nbsp;&amp;<br>reconnus</strong></span></div>
                    </div>
                    <article class="FormContainer bloc-vert ombrePortee">
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <h2 class="FormContainer-Header">Remplissez vite le formulaire <br class="hidebloc"/> pour recevoir votre étude personnalisée !</h2>
                        <div class="FormContainer-Fields">
                            <p class="alert alert-danger" style="display: none"></p>
                            <form id="form-container">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="voyance-amour-16" />
                                <input type="hidden" name="method" value="affil-maxi" />
                                <input type="hidden" name="support" value="voyance" />
                                <input type="hidden" name="affiliation" value="affilbase" />
                                <input type="hidden" name="dri" value="voyance-amour-16-tel" />
                                <input type="hidden" name="redirect_method" value="reload_form" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <!-- ############################################### -->
                                <div class="FormField">
                                    <label for="name" class="FormField-Label Label-rose">Prénom</label>
                                    <input type="text" id="name" name="prenom" class="FormField-Input" required />
                                </div>
                                <div class="FormField radio">
                                    <div class="FormField-TableInputContainer fixed-2-col gender">
                                        <div class="FormField-TableInputContainer-Cell">
                                            <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span> Femme</label>
                                            <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                                        </div>
                                        <div class="FormField-TableInputContainer-Cell">
                                            <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span> Homme</label>
                                            <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="FormField">
                                    <label class="FormField-Label Label-rose">Date de naissance</label>
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
                                    <label class="FormField-Label Label-rose" for="question_code">Votre question</label>
                                    <select class="FormField-Input" name="question_code" id="theme_id" required>
                                        <option value="" selected disabled>Thème de la question</option>
                                        <?php foreach($questions as $question){ ?>
                                        <option value="<?= str_replace('"', "'", json_encode($question)) ?>" <?= isset($question['conjoint']) && $question['conjoint'] ? 'data-need-spouse="1"' : ''?>><?= $question['text'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="FormField sonprenom" >
                                        <label class="FormField-Label" for="son_prenom">Son prénom</label>
                                        <input type="text" id="son_prenom" name="conjoint" class="FormField-Input" />
                                    </div>
                                </div>
                                
                                <div class="FormField">
                                    <label for="email" class="FormField-Label Label-rose">E-mail</label>
                                    <input id="email" type="email" name="email" class="FormField-Input" required />
                                </div>
                                
                                <button class="FormContainer-Submit" type="submit" name="valider">Je veux savoir</button>
                                
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <footer class="SiteFooter">
            <div class="PageWrapper">
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
                        <span class="ReassuranceList-Item-Img gift"></span>
                        <span class="ReassuranceList-Item-Txt">Étude personnalisée <br/><strong>par mail sous 24h</strong></span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img trophy"></span>
                        <span class="ReassuranceList-Item-Txt">My Astro leader <br/><strong>depuis 2007</strong></span>
                    </li>
                </ul>
            </div>
        </footer>
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Parisienne|Ubuntu+Condensed|Open+Sans:300,700,400,400italic,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
