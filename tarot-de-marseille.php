<?php
    $source = 'tarot-marseille';
    $support = 'tarot';
    $fw_title = "2 - Posez votre question";

    $ipg_title = 'Tarots Gratuits';
    $ipg_pubs = [ 'tarot-gratuit', 'tarot-oui-ou-non',
                  'tarot-de-l-amour', 'tarot-persan' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tarot de Marseille gratuit en ligne sur Myastro.fr</title>
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
                        <h1 itemprop="headline">Tirage de tarot de Marseille gratuit </h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Si vous souhaitez en savoir plus sur votre avenir, le tarot de Marseille est un excellent outil, ludique et instructif à la fois. Un tirage de tarot de Marseille gratuit est rapide, facile à réaliser et peut vous aider à y voir plus clair dans votre vie en vous apportant de précieux éléments de réponse à vos questions du moment. Découvrez la puissance des arcanes et les différents tirages du tarot de Marseille.</p>
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
                                <h2>Comment se passe un tirage de tarot de Marseille ?</h2>
                                <p>L’interprétation des arcanes majeurs et mineurs du tarot de Marseille est un art pratiqué depuis des siècles qui continue aujourd’hui encore à jouer un rôle d’éclaireur sur les sujets importants de votre existence. Le symbolisme et la finesse de ses cartes permet de couvrir une compréhension très vaste des enjeux de la vie de tous les jours : des thèmes généraux comme l’amour, l’argent ou le travail aussi bien que l’issue d’une situation précise comme une grossesse ou un procès.</p><br/>
                                <p>Chaque carte, avec sa signification, vous renseigne sur les grandes lignes de votre question. Ensuite, l’association des arcanes va permettre d’affiner l’interprétation du message afin de prendre les bonnes décisions. Le tarot ne choisit pas votre avenir à votre place, il éclaire les choses et vous donne les clés de l’action la plus bénéfique pour vous. Il existe différents types de tirages. Un tirage à une carte ou trois cartes répondra en effet mieux à une question précise qu’un tirage en fer à cheval à sept cartes, plus général. Le tirage le plus populaire est le tirage en croix, à quatre cartes car il permet de faire la synthèse tout en étant précis.</p>
                            </div>
                            <div class="text-justify">
                                <h2>Des infos sur votre carrière ou des clarifications sur votre situation amoureuse</h2>
                                <p>Le tarot de Marseille gratuit est un jeu très précis lorsqu’il est bien interprété. Grâce aux arcanes majeures et aux arcanes mineures qui viennent compléter le message selon le tirage, vous pourrez cibler un domaine précis de votre existence : comprendre  ce qu’il va advenir d’une relation amoureuse, ou savoir si vous avez des chances de rencontrer l’âme sœur. De la même façon, le tarot peut vous aider à démêler votre avenir côté professionnel et vous annoncer l’arrivée d’une promotion ou même d’un nouveau travail.</p><br/>
                                <p>Tout en étant un jeu divinatoire, le tarot de Marseille et son interprétation sont avant destinés à vous faire prendre conscience de la situation dans laquelle vous vous trouvez. Il vous révélera votre état d’esprit, les éléments qui pourraient éventuellement vous empêcher d’avancer mais aussi vos opportunités et les dénouements possibles. Faites appel aux lumières d’un tarot de Marseille gratuit maintenant pour connaître votre avenir et prendre les décisions qui s’imposent !</p>
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
        
        <script src="js/tarot-gratuit.js"></script>
        <script>
            positionModifier = 35;
        </script>
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