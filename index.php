<?php
    include('include/tools.php');
    include('lib.php');
    
    $source = 'form-widget';
    $question = 'AMOUR-CONJOINT';
    
    $ipg_pubs = [ 'voyance-par-chat', 'voyance-gratuite-mail', 
                  'horoscope-gratuit', 'astrologie-gratuite',
                  'tarot-gratuit', 'numerologie-gratuite' ];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head>
	<title>Votre voyance personnalisée et fiable | Myastro</title>
	<meta name="description" content="Myastro vous permet de consulter un horoscope fiable de manière gratuite. Anticipez votre journée, votre mois ou votre année grâce à ce service." />
        
	<script src="js/jquery-1.11.js"></script>
	<script src="js/formValidator.js"></script>
	<style>
            .infob-tel-w,.infob-email-w {
		position:absolute;
		width:192px;
		color:#fff;
		background:#fff; 
		padding:15px;
		border-radius:3px;
		box-shadow:0 0 2px rgba(0,0,0,.5);
		transform:scale(0) rotate(-12deg);
		transition:all .25s;
		opacity:0;
            }

            .infob-email-w {
		margin-top:-81px;
		margin-left:-216px;
            }
            .infob-tel-w {
		margin-top:-101px;
		margin-left:-216px;
            }
	</style>
	<?php include('include/header_inc.php'); ?>
        
	<link rel="stylesheet" type="text/css" href="css/formulaire-top.css" />
	<script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "myastro",
                "url": "http://<?= ROOT_URL ?>/",
                "logo": "http://<?= ROOT_URL ?>/images/logo-V3.png",
                "sameAs": [
                    "https://twitter.com/MYASTRO1",
                    "https://www.facebook.com/pages/Myastro/437290166297323",
                    "https://plus.google.com/+MyastroFr"
                ]
            }
        </script>
        
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <!-- main content -->
                <div class="span6 main-content">
                    <!-- Breaking News -->
                    
                    <!-- Slider -->
                    <div id="carousel-homepage" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="http://<?= ROOT_URL ?>/voyance-gratuite">
                                    <img src="images/bannieres/homepage/voyance.jpg" alt="Voyance gratuite" width="604" height="400" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://<?= ROOT_URL ?>/voyance-tarot">
                                    <img src="images/bannieres/homepage/tarot-gratuit.jpg" alt="Voyance tarot"  width="604" height="400" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://<?= ROOT_URL ?>/voyance-par-chat">
                                    <img src="images/bannieres/homepage/voyance-tchat.jpg" alt="Voyance tchat"  width="604" height="400" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://<?= ROOT_URL ?>/voyance-par-telephone#ouvert">
                                    <img src="images/bannieres/homepage/voyance-telephone.jpg" alt="Voyance par telephone"  width="604" height="400"/>
                                </a>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-homepage" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-homepage" data-slide-to="1"></li>
                            <li data-target="#carousel-homepage" data-slide-to="2"></li>
                            <li data-target="#carousel-homepage" data-slide-to="3"></li>
                        </ol>
                    </div>
                    
                    <!-- Zone de texte -->
                    <div class="widget widget-home">
                        <div class="widget-title">
                            <h2 class="h4">Votre voyance en ligne, par mail ou par tchat</h2>
                        </div>
                        <div class="text-justify text-front-end">
                            <p><span style="color:#000000; ">MyAstro vous permet de suivre une séance de voyance aussi bien en chattant directement avec l'un de nos experts qu'en recevant un mail complet répondant à vos questions et vous en dévoilant plus sur votre avenir. Quoi qu'il en soit, notre site de voyance confidentielle se veut le plus accessible possible pour permettre à chacun de trouver les réponses à ses questions.</span></p>
                        </div>
                    </div>
                    
                    <!-- Slider Tarot -->
                    <section class="widget cat-widget h-cat-1">
                        <div class="widget-title">
                            <h4>Tarot gratuit</h4>
                        </div>
                        <div class="cat-widget-content">
                            <!-- last post -->
                            <div class="row-fluid cat-horiz">
                                <article class="last-post clearfix">
                                    <div id="carousel-tarot" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="http://<?= ROOT_URL ?>/voyance-tarot">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_HEBDOMADAIRE.png" alt="Image tirage hebdomadaire" width="604" height="400" />
                                                </a>
                                                <div class="carousel-caption">
                                                    <p>Vous vous posez des questions sur votre avenir proche? Alors gr&acirc;ce &agrave; MYASTRO proc&eacute;dez sans attendre au <a href="http://<?= ROOT_URL ?>/voyance-tarot">tirage de tarot gratuit.</a></p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <a href="http://<?= ROOT_URL ?>/tarot-de-l-amour">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_AMOUR.png" alt="Image tarot de l'amour" width="604" height="400" />
                                                </a>
                                                <div class="carousel-caption">
                                                    <p>Une question sur votre vie sentimentale? Des interrogations sur la fiabilit&eacute; de votre partenaire? Essayez le <a href="http://<?= ROOT_URL ?>/tarot-de-l-amour">tarot de l'amour gratuit.</a></p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <a href="http://<?= ROOT_URL ?>/tarot-quotidien">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_QUOTIDIEN.png" alt="Image tarot quotidien" width="604" height="400" />
                                                </a>
                                                <div class="carousel-caption">
                                                    <p>Que ce soit en amour ou en argent notre Tarot vous oriente sur les choix que vous devrez prendre. Testez notre <a href="http://<?= ROOT_URL ?>/tarot-quotidien">tarot du quotidien gratuit.</a></p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <a href="http://<?= ROOT_URL ?>/tarot-mensuel">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_MENSUEL.png" alt="Image d'un tirage de tarot"  width="604" height="400" />
                                                </a>
                                                <div class="carousel-caption">
                                                    <p>Gr&acirc;ce &agrave; notre tarot votre vie sentimentale s'&ecute;claircit en quelques clics. Faites le test sans attendre et essayez le <a href="http://<?= ROOT_URL ?>/tarot-mensuel">tarot mensuel gratuit.</a></p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <a href="http://<?= ROOT_URL ?>/tarot-de-couple">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_COUPLE.png" alt="Image tarot de couple"  width="604" height="400" />
                                                </a>
                                                <div class="carousel-caption">
                                                    <p>Vous voulez savoir de quoi serait fait votre futur amoureux? Faites le test en compagnie de votre partenaire avec le <a href="http://<?= ROOT_URL ?>/tarot-de-couple">Tarot de couple gratuit.</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="indicators-handler">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-tarot" data-slide-to="0" class="active">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_HEBDOMADAIRE.png" alt="Image d'un tirage de tarot" width="604" height="400" />
                                                </li>
                                                <li data-target="#carousel-tarot" data-slide-to="1">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_AMOUR.png" alt="Image tarot de l'amour"  width="604" height="400" />
                                                </li>
                                                <li data-target="#carousel-tarot" data-slide-to="2">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_QUOTIDIEN.png" alt="Image tarot quotidien"  width="604" height="400" />
                                                </li>
                                                <li data-target="#carousel-tarot" data-slide-to="3">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_MENSUEL.png" alt="Image tarot mensuel"  width="604" height="400" />
                                                </li>
                                                <li data-target="#carousel-tarot" data-slide-to="4">
                                                    <img src="http://<?= ROOT_URL ?>/images/bannieres/tarot/TAROT_COUPLE.png" alt="Image tarot de couple"  width="604" height="400" />
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!--zone de texte -->
                            <div class="widget">
                                <div class="widget-title">
                                    <h2 class="h4">Amour, travail, famille, argent : votre voyance avec MyAstro</h2>
                                </div>
                                <div class="text-justify text-front-end">
                                    <p><span style="color:#000000;">Avec MyAstro, profitez simplement d'une voyance en direct sur le sujet qui vous intéresse le plus. Que vous préfériez connaître votre avenir amoureux ou savoir si la fortune vous sourira, la voyance vous apportera des réponses claires. Au quotidien, vous pourrez ainsi lire sur notre site votre horoscope, ou par exemple tirer les cartes du tarot chaque semaine.</span></p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="widget cat-widget h-cat-1">
                        <div class="row-fluid cat-horiz">
                            <?php include('include/content-internal-pub-grid.php'); ?>
                        </div>
                    </section>
    		</div>
                
                <!-- Right sidebar -->
                <?php include('include/bloc-droit-principale.php'); ?>
                
                <!-- Left sidebar -->
                <section class="span300">
                    <!-- form widget-->
                    <aside class="widget w-adv">
                        <div class="widget-title">
                            <h4>Question gratuite</h4>
                        </div>
                        <div id="form-w" class="widget-content clearfix">
                            <div class="description visible-part form-part">
                                <div class="alert alert-danger" style="display:none;"></div>
                                <?php include('include/forms/question_cachee.php');?>
                            </div>
                        </div>
                    </aside>
                    <!-- Banner voyance gratuite -->
                    <aside class="widget w-adv">
                        <div class="widget-title">
                            <h4>Voyance gratuite</h4>
                        </div>
                        <div class="widget-content clearfix">
                            <?php getSquareAd();?>
                            <div class="description visible-part">
                                <div class="info text-justify">
                                    <p><span style="color:#000000;"><br>Adieu l’hiver, place au printemps ! L’hiver nous fait ses adieux, emportant avec lui ses longues nuits et ses journées froides. Place désormais au printemps : le retour des beaux jours et du soleil. Un changement climatique qui impacte inévitablement notre humeur et notre manière de voir la vie. Terminés tous les tracas hivernaux, direction les projets printaniers. Et c’est parce que nous avons à cœur de vous apporter notre aide dans la réalisation de tous ces nouveaux projets qui se présentent à vous, que Myastro met à votre disposition son équipe complète de professionnels de la divination, afin de vous donner toutes les cartes en main pour faire de ce printemps 2016, une période inoubliable.</span></p>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Banner voyance gratuite -->
                    <aside class="widget w-adv">
                        <div class="widget-title">
                            <h4>Voyance par téléphone</h4>
                        </div>
                        <div class="widget-content clearfix">
                            <a href="http://<?= ROOT_URL ?>/voyance-par-telephone">
                                <?php getVoyantScryscraper();?>
                            </a>
                        </div>
                    </aside>
                    <!-- Posts Of The Day -->
                    <aside>
                        <div class="widget">
                            <div class="text-justify">
                                <p><span style="color:#000000;">La voyance a longtemps été perçue comme une pratique onéreuse, réservée à une certaine élite capable de s’offrir des consultations avec des voyants professionnels. Mais là n’est pas la tradition des Arts divinatoires qui ont, depuis la nuit des temps, toujours été à disposition de tous. Et c’est parce que la voyance doit redevenir une pratique accessible à tous que Myastro propose un service de <a href="http://<?= ROOT_URL ?>/voyance-discount">voyance discount</a>, mettant en avant une voyance traditionnelle et professionnelle sans en faire subir les conséquences à votre porte-monnaie. Parce que discount ne signifie pas qualité au rabais, Myastro s’engage à fournir des prestations divinatoires professionnelles en mettant à votre disposition une équipe d’experts en divination diplômés et aguerris aux pratiques divinatoires modernes.<span></p>
                            </div>
                        </div>
                    </aside>
                </section>
            </div>
        </div>
        
    <?php include('include/footer_inc_index.php'); ?>

<script src="js/infoBulle.js"></script>