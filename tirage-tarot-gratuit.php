<?php
    $source = 'tirage-tarot-gratuit';
    $support = 'tarot';

    $fw_title = '2 - Posez votre Question';
    
    $ipg_title = 'Tarots Gratuits';
    $ipg_pubs = [ 'tarot-gratuit', 'tarot-oui-ou-non',
                  'tarot-de-l-amour', 'tarot-de-couple'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tirage de tarot gratuit en ligne sur Myastro.fr </title>
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
        
        <style>
            .widget .form-part { background-color: #eb2692;}
            .widget #form-w .btn_button { background-color: #1871b9;}
        </style>
    
        <div  class="voyance-tarot">
            <div class="container-fluid ninesixty" itemscope >
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Reprenez votre vie en main avec le tirage de tarot gratuit en ligne</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">« Pourquoi faire du tirage de tarot gratuit en ligne ? ». Si comme beaucoup de personnes, vous vous posez encore cette question, sachez que la réponse est toute simple : « parce que le tirage de tarot gratuit peut vous aider à améliorer votre vie ! ». Utilisé depuis plusieurs siècles, le tarot divinatoire peut en effet être un instrument efficace au service de la construction de votre avenir.</p>
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
                                <h2 class="h4">1 - Tirez vos cartes</h2>
                            </div>
                            <div class="widget-t w-sponsors">
                                <div class="tarot-content">
                                    <div class="tarot-left" style="width:100%;">
                                        <?php include('include/content-tarot-draw.php');?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div><br/>
                            <!-- texte -->
                            <div class="text-justify">
                                <h2>Pour comprendre et mieux organiser votre vie</h2>
                                <p>Dans de nombreuses situations, dont certaines sont imminentes, vous avez besoin de comprendre pourquoi afin de mieux faire front. Une séance de tirage de tarot gratuit et immediat vous permet justement d’y voir plus clair. Que ce soit en amour, sur la plan professionnel ou au niveau familial, vous aurez des réponses précises ou des indications claires sur certaines des décisions qu’il vous faut prendre ou sur les évènements qui surviennent.</p><br/>
                                <p>Parfois, vous savez que vous avez besoin de parfaire certains aspects de votre existence, mais vous ne savez pas par où commencer à vous améliorer. Dans ces cas, le tarot divinatoire peut aider à mettre en évidence les choses sur lesquelles vous devriez vous concentrer tout de suite afin d’obtenir des résultats pour un meilleur lendemain.</p>
                            </div>
                            <div class="text-justify">
                                <h2>Prenez votre destinée en main</h2>
                                <p>L’anxiété, le souci et la crainte sont souvent les symptômes d’une vie menée au gré du vent, en avançant dans l’inconnu. En vous fournissant des indications claires sur certains aspects de votre avenir, le tirage de tarot gratuit  vous permettra donc de l’aborder avec plus de sérénité. En effet, une fois que vous avez identifié les différentes orientations possibles de votre vie, il vous est plus facile de déterminer le chemin qui peut être le vôtre. En effet, si le tirage de tarot gratuit ne peut pas prévoir l’avenir ou vous dire à coup sûr ce qui va arriver, il vous met face aux possibilités qui s’offrent à vous et vous oriente vers le choix le plus adéquat pour vous.</p><br/>
                                <p>Nombre de personnes ont recours aux séances de tarot comme un outil de prise de décisions au quotidien. Le tirage de tarot gratuit permet en effet d’optimiser votre intuition et vous aide ainsi à prendre les décisions les plus adéquates dans votre vie de tous les jours. N’oubliez jamais le pouvoir du libre arbitre! Si vous voyez quelque chose que vous n’aimez pas dans une lecture tarot gratuit, vous avez le pouvoir de le changer. Rester maître de son destin plutôt que de le subir, c’est là l’un des objectifs principaux du tarot divinatoire.</p>
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