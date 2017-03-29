<?php
    $source = 'tarot-oui-non';
    $support = 'tarot';
    $question = 'AMOUR-CONJOINT';

    $fw_title = '2 - Posez votre Question';
    
    $ipg_title = 'Tarots Gratuits';
    $ipg_pubs = [ 'tarot-gratuit', 'tarot-de-marseille',
                  'tarot-de-l-amour', 'tarot-de-couple'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tarot Oui Non gratuit en ligne sur Myastro.fr</title>
	<meta name="description" content="My Astro : Vos Tarots Gratuits - Obtenez des réponses immédiates à toutes vos questions. Tarots Divinatoires Gratuits." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <link rel="stylesheet" type="text/css" href="css/voyance-tarot-nat.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-gratuit.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-responsive-nat.css" />
        <link rel="stylesheet" href="css/infobulle.css" />
        <noscript>
            <link rel="stylesheet" type="text/css" href="css/noscript.css" />
        </noscript>
	    
        <link rel="shortcut icon" href="favicon.ico" /> 

        <!--[if IE 7]>
            <link id="lnkFontAwesomeIE7" href="framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
        <![endif]-->

        <!--[if lt IE 9]>
            <script src="framework/fix-ie/html5.js"></script>
        <![endif]-->
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
        
        <style>
            .widget .form-part { background-color: #eb2692;}
            .widget #form-w .btn_button { background-color: #1871b9;}
        </style>
    
        <div  class="voyance-tarot">
            <div class="container-fluid ninesixty" itemscope >
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Tarot oui ou non gratuit : Dissipez tous les doutes du futur en quelques clics</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Vous n’êtes certainement pas la seule personne à vous poser d’innombrables questions sur votre existence et sur différents domaines qui vous tiennent à cœur. Le tarot oui ou non constitue une solution pertinente pour vous aider à y voir plus clair dans vos futures décisions.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
                    
                    <!-- Main Content -->
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-principale-2.php'); ?>
                        
                        <div class="span6 main-content">
                            <div class="cat-widget-title cat-title-tarot widget-t-title">
                                <h4>1 - Tirez vos cartes</h4>
                            </div>
                            <div class="widget-t w-sponsors">
				<div class="tarot-content">
                                    <div class="tarot-left" style="width:100%;">
                                        <?php include('include/content-tarot-draw.php');?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div><br/>
                            <!-- texte -->
                            <div class="text-justify">
                                <h2>Tarot oui ou non : La meilleure façon d’anticiper votre avenir</h2>
                                <p>Bien souvent, la réponse à tous vos problèmes et vos questionnements tient en seulement un mot : oui ou non. En essayant le tarot oui ou non, vous aurez l’occasion en seulement quelques secondes d’obtenir de précieuses pistes de raisonnement pour vos sujets de prédilection.  Un simple oui ou un simple non peut vous ouvrir de nouveaux pans de réflexions qui vous aideront à avancer dans la vie.</p><br/>
                                <p>L’avenir réserve de nombreuses surprises qu’il est bon quelque fois d’entrevoir avant l’heure. En fonction du tarot non ou oui qui vous sera annoncé, vous aurez l’opportunité d’orienter vos choix et vos actions en conséquence. Chacun est maître de sa destinée et grâce au pouvoir du tarot oui ou non, vous allez pouvoir avoir une longueur d’avance sur les prochains grands évènements de votre existence.</p>
                            </div>
                            <div class="text-justify">
                                <h2>Trouvez les réponses à vos questions grâce au tarot</h2>
                                <p>En vous appuyant sur l’expérience et la parfaite maîtrise des arts divinatoires de nos médiums, le tarot va pouvoir en quelques tirages vous révéler des éléments cruciaux de votre futur. Qu’il s’agisse du domaine affectif, du domaine professionnel ou de l’état de santé de vos proches ou de vous-même, plus aucune zone d’ombre ne subsistera après vous être essayé à un tirage de tarot gratuit. Quelques instants seulement suffiront pour dévoiler des pans entiers de vos jours prochains. Le tarot est un art divinatoire des plus fascinants dont vous pouvez utiliser dès à présent tous les bienfaits. Pour aborder l’avenir avec sérénité et confiance, de simples oui ou non peuvent suffire pour transformer radicalement les choses et les rendre meilleurs.</p><br/>
                                <p>Vous voulez savoir si votre avenir s’annonce radieux ? Vous brûlez de savoir si la personne avec laquelle vous vivez est celle avec qui vous finirez vos jours ? Vous souhaitez savoir sur la nouvelle année vous permettra d’obtenir cette fameuse promotion dont vous rêvez depuis tant de mois ? Les questions que vous vous posez peuvent désormais obtenir une réponse claire et précise et ne souffrant d’aucune contestation. D’un oui ou d’un non, le tarot vous apportera toute la lumière sur les thèmes qui gravitent autour de votre vie. Une fois ces réponses obtenues, vous aurez alors toute l’initiative pour orienter vos prochains jours, mois et années selon vos souhaits en ayant toujours une longueur d’avance sur votre destin.</p>
                            </div><br/>
                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid.php');?>
                            </section>
                        </div>

                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-principale-2.php'); ?>
                    </div>
                </div>
            </div>
            
            <?php include('include/footer.php'); ?>

        <script src="js/jquery-1.11.js"></script>
        <script src="framework/bootstrap/js/bootstrap.min.js"></script>
        <script src="framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
        
        <script>
            positionModifier = 35;
        </script>
        <script src="js/tarot-gratuit.js"></script>
        <script src="js/formValidator.js"></script>
        <script src="js/infoBulle.js"></script>

        <!-- New Remarketing tags -->
        <script type="text/javascript">
            /* <![CDATA[ */
                var google_conversion_id = 1024378253;
                var google_conversion_label = "ipnICMWfg2EQjYu76AM";
                var google_custom_params = window.google_tag_params;
                var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
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