<?php
/* 
    -------------------------------------------
    --   RENTRÉE 2016   --
    -------------------------------------------

    Created on : 26 juillet 2016
    Author     : Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>My Astro - C'est la rentrée ! venez tester votre moral</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/rentree16.min.css" />
        
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
                <h1 class="PageLogo"><span>C'est la rentrée</span><span>venez tester votre moral</span></h1>
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
                            <a href="#" class="intro-Content-Img2 startQuizz"><p>... c'est l'heure de la rentrée&nbsp;!</p></a>
                        </div>
                        <p>Restez serein et retrouvez vos repères.</p>
                        <a href="#" id="btn-start" class="btn-start  startQuizz">Lancer le TEST</a>
                    </div> 
               </article>
            </section>
            
            <section id="questionnaire" class="questionnaire">
                <form>
                    <!-- ########## TODO ########## -->
                

                    <!-- ########## identification formulaire ########## -->
                    <input type="hidden" name="source" value="rentree16" />
                    <input type="hidden" name="method" value="affil-maxi" />
                    <input type="hidden" name="site" value="myastro.fr" />
                    <input type="hidden" name="affiliation" value="affilbase" />
                    <input type="hidden" name="dri" value="rentree16-tel" />
                    <!-- ########## autres champs pré-remplis ######### -->
                    <input type="hidden" name="cguv" value="1" />
                    <input type="hidden" name="partenaires" value="1" />
                    <!-- ############################################### -->

                    <h3 id="numQuestion">Question X</h3>

                    <div class="bxslider">  



                        <!-- ------------------------- QUESTION 1 ------------------------- -->
                        <section class="q1" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name1" id="idName1-1" value="1"><label for="idName1-1">value 1</label></li>
                                <li><input type="radio" name="name1" id="idName1-2" value="2"><label for="idName1-2">value 2</label></li>
                                <li><input type="radio" name="name1" id="idName1-3" value="3"><label for="idName1-3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ----------------------- FIN QUESTION 1 ----------------------- -->

                        <!-- ------------------------- QUESTION 2  ------------------------ -->
                        <section class="q2" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name2" id="idName2-1" value="1"><label for="idName2-1">value 1</label></li>
                                <li><input type="radio" name="name2" id="idName2-2" value="2"><label for="idName2-2">value 2</label></li>
                                <li><input type="radio" name="name2" id="idName2-3" value="3"><label for="idName2-3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ----------------------- FIN QUESTION 2 ----------------------- -->






                        <!-- ------------------------- QUESTION 3 ------------------------- -->
                        <section class="q3" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name3" id="idName3-1" value="1"><label for="idName3-1">value 1</label></li>
                                <li><input type="radio" name="name3" id="idName3-2" value="2"><label for="idName3-2">value 2</label></li>
                                <li><input type="radio" name="name3" id="idName3-3" value="3"><label for="idName3-3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ----------------------- FIN QUESTION 3 ----------------------- -->

                        <!-- ------------------------- QUESTION 4 ------------------------- -->
                        <section class="q4" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name4" id="idName4-1" value="1"><label for="idName4-1">value 1</label></li>
                                <li><input type="radio" name="name4" id="idName4-2" value="2"><label for="idName4-2">value 2</label></li>
                                <li><input type="radio" name="name4" id="idName4-3" value="3"><label for="idName4-3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ----------------------- FIN QUESTION 4 ----------------------- -->







                        <!-- ------------------------- QUESTION 5 ------------------------- -->
                        <section class="q5" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name5" id="idName5-1" value="1"><label for="idName5-1">value 1</label></li>
                                <li><input type="radio" name="name5" id="idName5-2" value="2"><label for="idName5-2">value 2</label></li>
                                <li><input type="radio" name="name5" id="idName5-3" value="3"><label for="idName5-3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ------------------------- QUESTION 5 ------------------------- -->

                        <!-- ------------------------- QUESTION 6 ------------------------- -->
                        <section class="q6" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name6" id="idName6-1" value="1"><label for="idName6-1">value 1</label></li>
                                <li><input type="radio" name="name6" id="idName6-2" value="2"><label for="idName6-2">value 2</label></li>
                                <li><input type="radio" name="name6" id="idName6-3" value="3"><label for="idName6-3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ------------------------- QUESTION 6 ------------------------- -->

                        

 
                    </div>
                    <!-- fin de bxslider -->     

                </form>
            </section> 
            <!-- FIN DU QUESTIONNAIRE -->  
            
            <!-- FORMULAIRE CLIENT -->
            <section class="formulaire">
                <article class="FormContainer">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <p class="alert alert-danger" style="display: none"></p>
                    <p id="resulQuiz">Guigui</p>
                    <h2 class="FormContainer-Header">Remplissez vite le formulaire <br class="hidebloc"/> pour recevoir votre étude personnalisée !</h2>
                    <div class="FormContainer-Fields">
                        <form id="form-container">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="rentree16" />
                            <input type="hidden" name="method" value="affil-maxi" />
                            <input type="hidden" name="site" value="myastro.fr" />
                            <input type="hidden" name="affiliation" value="affilbase" />
                            <input type="hidden" name="dri" value="rentree16-tel" />
                            <!-- ########## autres champs pré-remplis ######### -->
                            <input type="hidden" name="cguv" value="1" />
                            <input type="hidden" name="partenaires" value="1" />
                            <!-- ############################################### -->
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
                            
                            <div class="FormField-TableInputContainer  fixed-2-col relationship-status">
                                <div class="FormField-TableInputContainer-Cell">
                                    <div>
                                        <input type="radio" name="theme_id" id="sit-celib" value="R16_question_2" class="FormField-Input" />
                                        <label for="sit-celib" class="FormField-Label">célibataire</label>
                                    </div>
                                </div>
                                <div class="FormField-TableInputContainer-Cell">
                                    <div>
                                        <input type="radio" name="theme_id" id="sit-couple" value="R16_question_24" class="FormField-Input" required />
                                        <label for="sit-couple" class="FormField-Label">En couple</label>
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                            
                            <div class="FormField sonprenom">
                                <label for="email" class="FormField-Label">Son prénom</label>
                                <input type="text" placeholder="Son prénom" id="son_prenom" class="FormField-Input" name="conjoint">
                            </div>
                            
                            <div class="FormField">
                                <label for="email" class="FormField-Label">E-mail</label>
                                <input id="email" type="email" name="email" class="FormField-Input" required />
                                <span class="FormField-Info" style="margin-top: -10rem;">Une étude personnalisée vous sera envoyée à cette adresse</span>
                            </div>
                            <button class="FormContainer-Submit btn-send" type="submit" name="valider">Je veux savoir</button>
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
        <script src="js/rentree16.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">