<?php
$prefix = 'gv-hm';
include( 'include/gv18-tab.php' );
$signe = $_GET['p'];
$assets = 'images_landing/grande-voyance/18';
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>La Grande Voyance 2018 - MyAstro</title>
        <link rel="icon" type="image/png" href="<?= $assets; ?>/favicon.png"/>
        <link rel="stylesheet" href="css/gv/bootstrap.min.css">
        <link rel="stylesheet" href="css/grande-voyance-dri.css" type="text/css"/>
        <link rel="stylesheet" href="css/grande-voyance.css" type="text/css"/>

    </head>

    <body class="no-js" id="gvApp">

    <!-- Modal -->
    <div id="acces-gv" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h3 class="modal-title acces-form-header">Remplissez le formulaire pour accéder à la grande voyance</h3>
                </div>
                <div class="modal-body">
                        <section class="acces-form">

                            <div class="FormContainer overlay" id="form-overlay"></div>
                            <article class="FormContainer">
                                <form method="post" id="form-container" class="ajax">
                                    <input type="hidden" name="source" value="gv-hm" />
                                    <input type="hidden" name="method" value="general-suscribe" />
                                    <input type="hidden" name="support" value="voyance" />
                                    <input type="hidden" name="acces_form_popup" value="acces_form_popup" />
                                    <input type="hidden" name="site" value="myastro.fr" />
                                    <input type="hidden" name="affiliation" value="" />
                                    <input type="hidden" name="pays" value="FR" />
                                    <input type="hidden" name="question_code" value="question_1" />
                                    <input type="hidden" name="optional_birthdate" value="1" />

                                    <!-- ########## autres champs pré-remplis ########## -->
                                    <input type="hidden" name="convertir" value="1" />
                                    <input type="hidden" name="cguv" value="1" />
                                    <input type="hidden" name="partenaires" value="1" />
                                        <div class="FormContainer-Fields">
                                            <div class="FormField">
                                                <input type="text" class="FormField-Input" name="prenom" placeholder="Prénom" required />
                                            </div>
                                            <div class="FormField">
                                                <input type="email" id="email" name="email" placeholder="Email" class="FormField-Input"  required/>
                                            </div>
                                            <div class="FormField">
                                                <input type="tel" id="tel" name="tel" placeholder="Téléphone" class="FormField-Input"  required/>
                                            </div>

                                            <!-- SUBMIT -->
                                            <button class="Button" type="submit" name="submit">j'accède à ma voyance 2018</button>
                                        </div>
                                </form>
                        </section>
                        <div class="psychic"></div>
                    </article>

                </div>

            </div>

        </div>
    </div>

    <div class="loading">
            <div id="zodiac-container" class="zodiac"></div>
        </div>
        <nav>
            <ul>
                <li><a href="#" data-section="section-intro">Introduction</a></li>
                <li><a href="#" data-section="section-love">Vie sentimentale</a></li>
                <li><a href="#" data-section="section-social">Vie sociale</a></li>
                <li><a href="#" data-section="section-pro">Vie active</a></li>
                <li><a href="#" data-section="section-cal">2018 mois par mois</a></li>
                <li><a href="#" data-section="section-numero">Chiffre porte bonheur</a></li>
                <li><a href="#" data-section="section-dates">Les dates clés</a></li>
                <li><a href="#" data-section="section-addon">Nos conseils</a></li>
            </ul>
        </nav>
        <section class="section section-intro">
            <header class="page-header">
                <div class="title-container">
                    <h1 class="title">La grande voyance 2018</h1>
                    <h2 class="headline">nouvelle année, nouveau départ, nouvelle vie</h2>
                </div>
            </header>
            <main class="article-wrapper">
                <div class="article-container">
                    <div class="article">
                        <article class="page-article" id="intro">
                            <aside class="article-aside">
                                <h3 id="title">{{zodiacName}}</h3>
                            </aside>
                            <h3 class="article-headline">Intro</h3>
                            <p class="article-paragraph">{{intro}}</p>
                        </article>
                        <div class="article-more-container">
                            <a href="/<?=$redirectUrl?>?<?=join('&', $parms)?>" class="dri-cta">
                                <div class="article-more">En savoir plus</div>
                            </a>
                        </div>
                    </div>
                </div>
            </main>
            <div class="scroll-container">
                <div class="scroll scroll-down"></div>
            </div>
        </section>
        <section class="section section-love">
            <header class="page-header"></header>
            <main class="article-wrapper">
                <div class="article-container">
                    <div class="article" id="love">
                        <article class="page-article love-c">
                            <aside class="article-aside">
                                <h3 id="title"><span class="huge">A</span>mour</h3>
                            </aside>
                            <h3 class="article-headline">En Couple</h3>
                            <p class="article-paragraph" id="couple">{{coupleParagraph}}</p>
                        </article>
                        <article class="page-article love-s">
                            <h3 class="article-headline">Célib</h3>
                            <p class="article-paragraph" id="single">{{singleParagraph}}</p>
                            <div class="article-more"><a href="/<?=$redirectUrl?>?<?=join('&', $parms)?>" class="dri-cta">En savoir plus</a></div>
                        </article>
                    </div>
                </div>
            </main>
            <div class="scroll-container">
                <div class="scroll scroll-down"></div>
                <div class="scroll scroll-up"></div>
            </div>
        </section>
        <section class="section section-social">
            <header class="page-header"></header>
            <main class="article-wrapper">
                <div class="article-container">
                    <div class="article-two" id="social">
                        <h3 id="title"><span class="huge">V</span>ie sociale</h3>
                        <div class="social-container">
                            <article class="page-article">
                                <h3 class="article-headline">Famille</h3>
                                <p class="article-paragraph" id="family">{{socialFam}}</p>
                            </article>
                            <article class="page-article">
                                <h3 class="article-headline">Amitié</h3>
                                <p class="article-paragraph" id="friendship">{{socialFri}}</p>
                                <div class="article-more"><a href="/<?=$redirectUrl?>?<?=join('&', $parms)?>" class="dri-cta">En savoir plus</a></div>
                            </article>
                        </div>
                    </div>
                </div>
            </main>
            <div class="scroll-container">
                <div class="scroll scroll-down"></div>
                <div class="scroll scroll-up"></div>
            </div>
        </section>
        <section class="section section-pro">
            <header class="page-header"></header>
            <main class="article-wrapper">
                <div class="article-container">
                    <div class="article pro">
                        <aside class="pro-aside">
                            <h3 id="title"><span class="huge">V</span>ie active</h3>
                        </aside>
                        <article class="page-article">
                            <h3 class="article-headline">Travail</h3>
                            <p class="article-paragraph" id="work">{{workParagraph}}</p>
                            <div class="article-more"><a href="/<?=$redirectUrl?>?<?=join('&', $parms)?>" class="dri-cta">Je veux en savoir plus</a></div>
                        </article>
                    </div>
                </div>
            </main>
            <div class="scroll-container">
                <div class="scroll scroll-down"></div>
                <div class="scroll scroll-up"></div>
            </div>
        </section>
        <section class="section section-cal">
            <header class="page-header">
                <div class="article-header"><span class="huge">2018</span> mois par mois</div>
            </header>
            <main class="article-wrapper cal">
                <div class="article-container"><a href="#moCarousel" class="mo-control left" id="prev"><span class="nav nav-prev"></span></a>
                    <div class="mo-wrapper">
                        <ul class="mo-container">
                            <li class="mo-block">
                                <div class="mo-article" id="1">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="2">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="3">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="4">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="5">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="6">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="7">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="8">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="9">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="10">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="11">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                            <li class="mo-block">
                                <div class="mo-article" id="12">
                                    <h3>{{month}}</h3>
                                    <p>{{monthParagraph}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="#moCarousel" class="mo-control right" id="next"><span class="nav nav-next"></span></a></div>
            </main>
            <div class="scroll-container">
                <div class="scroll scroll-down"></div>
                <div class="scroll scroll-up"></div>
            </div>
        </section>
        <section class="section section-numero">
            <header class="page-header"></header>
            <main class="article-wrapper">
                <div class="article-container">
                    <div class="article number-art">
                        <h3 id="title"><span class="huge">V</span>otre chiffre chance</h3>
                        <article class="page-article" id="sifre">
                            <aside class="article-aside"><span class="number">{{luckyNumber}}</span></aside>
                            <p class="article-paragraph">luckyNumberText</p>
                            <div class="article-more"><a href="/<?=$redirectUrl?>?<?=join('&', $parms)?>" class="dri-cta">Pour en savoir plus</a></div>
                        </article>
                    </div>
                </div>
            </main>
            <div class="scroll-container">
                <div class="scroll scroll-down"></div>
                <div class="scroll scroll-up"></div>
            </div>
        </section>
        <section class="section section-dates">
            <header class="page-header"></header>
            <main class="article-wrapper">
                <div class="article-container">
                    <div class="article" id="dates">
                        <div class="section-dates-wrapper">
                            <h3><span class="huge">V</span>os dates clés</h3>
                            <article class="page-article">
                                <h4 class="article-date">{{when}}</h4>
                                <p class="article-paragraph">{{what}}</p>
                            </article>
                        </div>
                        <div class="section-dates-wrapper">
                            <article class="page-article">
                                <h4 class="article-date">{{when}}</h4>
                                <p class="article-paragraph">{{what}}</p>
                            </article>
                        </div>
                        <div class="section-dates-wrapper">
                            <article class="page-article">
                                <h4 class="article-date">{{when}}</h4>
                                <p class="article-paragraph">{{what}}</p>
                            </article>
                        </div>
                    </div>
                </div>
            </main>
            <div class="scroll-container">
                <div class="scroll scroll-down"></div>
                <div class="scroll scroll-up"></div>
            </div>
        </section>
        <section class="section section-addon">
            <header class="page-header"></header>
            <main class="article-wrapper">
                <div class="article-container addon">
                    <header class="article-header headline headline-adv">Nos conseils</header>
                    <article class="section-addon-content" id="conseils">
                        <p>{{advices}}</p>
                        <div class="article-more"><a href="/<?=$redirectUrl?>?<?=join('&', $parms)?>" class="dri-cta">Conseils personnalisés</a></div>
                    </article>
                </div>
                <div class="article-container addon">
                    <header class="article-header headline headline-obj">Vos objectifs</header>
                    <article class="section-addon-content" id="objectifs">
                        <p>{{objectives}}</p>
                        <div class="article-more"><a href="/<?=$redirectUrl?>?<?=join('&', $parms)?>" class="dri-cta">Comment atteindre mes objesctifs ?</a></div>
                    </article>
                </div>
            </main>
            <div class="scroll-container">
                <div class="scroll scroll-up"></div>
            </div>
        </section>
        <script type="text/javascript" src="//cdn.jsdelivr.net/gh/jquery/jquery@3.2.1/dist/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>
        <script src="js/formValidator.js"></script>
        <script type="text/javascript" src="js/grande-voyance.js"></script>
        <link href="//fonts.googleapis.com/css?family=Lobster|Open+Sans|Oswald" rel="stylesheet"/>
        <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.0/js.cookie.js"></script>


    <script type="text/javascript" >

        if (!Cookies.get('accesFormShown')) {

            $("#acces-gv").modal({
                backdrop: 'static',
                keyboard: false
            });
        }

      </script>
    </body>

</html>
