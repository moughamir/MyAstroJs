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
        
        <title>My Astro - Que va vous révéler l’Oracle de l’amour ?</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/rentree16.css" />
        
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
                <span class="SiteLogo"></span>
                <h1 class="PageLogo">Titre du questionnaire</h1>
                <?php include('include/bloc-socials.php'); ?>
            </header>
            
            <section id="intro">
               <article>
                    <header class="intro-Header"><h2>Texte d'introduction</h2></header>  
                    <div class="intro-Content">
                        <p>Texte descriptif</p>
                        <a href="#" id="btn-start" class="btn-start">Lancer le TEST</a>
                    </div> 
               </article>
            </section>
            
            <section id="questionnaire">
                <form>

                    <h3 id="numQuestion">Question X</h3>

                    <div class="bxslider">  



                        <!-- ------------------------- QUESTION 1 ------------------------- -->
                        <section id="q1" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name1" id="name1" value="value1" checked><label for="name1">value 1</label></li>
                                <li><input type="radio" name="name1" value="value2"><label for="name2">value 2</label></li>
                                <li><input type="radio" name="name1" value="value3"><label for="name3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ----------------------- FIN QUESTION 1 ----------------------- -->

                        <!-- ------------------------- QUESTION 2  ------------------------ -->
                        <section id="q2" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name1" id="name1" value="value1" checked><label for="name1">value 1</label></li>
                                <li><input type="radio" name="name1" value="value2"><label for="name2">value 2</label></li>
                                <li><input type="radio" name="name1" value="value3"><label for="name3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ----------------------- FIN QUESTION 2 ----------------------- -->






                        <!-- ------------------------- QUESTION 3 ------------------------- -->
                        <section id="q3" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name1" id="name1" value="value1" checked><label for="name1">value 1</label></li>
                                <li><input type="radio" name="name1" value="value2"><label for="name2">value 2</label></li>
                                <li><input type="radio" name="name1" value="value3"><label for="name3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ----------------------- FIN QUESTION 3 ----------------------- -->

                        <!-- ------------------------- QUESTION 4 ------------------------- -->
                        <section id="q4" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name1" id="name1" value="value1" checked><label for="name1">value 1</label></li>
                                <li><input type="radio" name="name1" value="value2"><label for="name2">value 2</label></li>
                                <li><input type="radio" name="name1" value="value3"><label for="name3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ----------------------- FIN QUESTION 4 ----------------------- -->







                        <!-- ------------------------- QUESTION 5 ------------------------- -->
                        <section id="q5" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name1" id="name1" value="value1" checked><label for="name1">value 1</label></li>
                                <li><input type="radio" name="name1" value="value2"><label for="name2">value 2</label></li>
                                <li><input type="radio" name="name1" value="value3"><label for="name3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ------------------------- QUESTION 5 ------------------------- -->

                        <!-- ------------------------- QUESTION 6 ------------------------- -->
                        <section id="q6" class="question">
                            <header class="question-Header">
                                <h2>Ici le texte pour la question ?</h2>
                            </header>
                            <ul class="question-Content">
                                <li><input type="radio" name="name1" id="name1" value="value1" checked><label for="name1">value 1</label></li>
                                <li><input type="radio" name="name1" value="value2"><label for="name2">value 2</label></li>
                                <li><input type="radio" name="name1" value="value3"><label for="name3">value 3</label></li>
                            </ul>
                            <div class="question-Img"></div>
                        </section>
                        <!-- ------------------------- QUESTION 6 ------------------------- -->



                    </div>
                    <!-- fin de bxslider -->     

                </form>
            </section>    

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
<link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">