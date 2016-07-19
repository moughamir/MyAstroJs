<?php 
$path_parts = pathinfo($_SERVER['REQUEST_URI']);
$path = $path_parts['filename'];
//echo $path;
$pathf = $path_parts['dirname'];
$tabvoyance=["voyance-gratuite","voyance-tarot-gratuit","voyance-numerologique-gratuite","voyance-par-sms","voyance-sans-cb"];
$tabhoroscope=["horoscope-gratuit","horoscope-2013","horoscope-du-jour","horoscope-de-la-semaine","horoscope-du-mois","horoscope-de-l-amour"];
$tabastrologie=["astrologie-gratuite","compatibilite-amoureuse-feminine","compatibilite-amoureuse-masculine","portrait-astrologique-feminin","portrait-astrologique-masculin","votre-personnalite-astrologique"];
$tabtarot=["tarot-gratuit","tarot-de-l-amour","tarot-quotidien","tarot-hebdomadaire","tarot-mensuel","tarot-de-couple","afficher_tarot_quotidien","afficher_tarot_hebdomadaire","afficher_tarot_mensuel","afficher_tarot_couple"];
$tabnumerologie=["numerologie-gratuite","numeroscope-2013","compatibilite-amoureuse-pour-les-femmes","compatibilite-amoureuse-pour-les-hommes","personnalite-numerologique","etapes-de-la-vie"];


?>
<nav class="container-fluid navbar-main enable-fixed">
        <h2 class="hidden">Site bar de Navigation</h2>


        <div class="navbar">
            <div class="navbar-inner">
                <div class="clearfix">

                    <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target="#divNav2">
                        <span class="icon-reorder"></span>
                    </button>

                    <div id="divNav2" class="nav-collapse collapse clearfix">

                        <ul class="nav">

                            <li class="dropdown <? if ($path == 'index') echo 'active';?>" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="ancHomePages" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="#" href="http://www.myastro.fr/"><i class="icon-home"></i></a>
                            </li>

                            <li class="divider-vertical"></li>

                            <li class="dropdown <? if (in_array($path, $tabvoyance)) echo 'active';?>" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a6" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="http://www.myastro.fr/" href="http://www.myastro.fr/" >Voyance<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li<? if ($path == 'voyance-gratuite') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/voyance-gratuite" >Voyance gratuite</a></li>
									<li<? if ($path == 'voyance-tarot-gratuit') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/voyance-tarot">Tirage tarot gratuit</a></li>
									<li<? if ($path == 'voyance-numerologique-gratuite') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/voyance-numerologique-gratuite" >Analyse numérologique gratuite</a></li>
                                    <li<? if ($path == 'voyance-par-sms') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/voyance-par-sms" >Voyance par SMS</a></li>
                                    <li<? if ($path == 'voyance-sans-cb') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/voyance-sans-cb" >Voyance sans CB</a></li>
                                </ul>

                            </li>

                            <li class="divider-vertical"></li>

                            <li class="dropdown <? if (in_array($path, $tabhoroscope)) echo 'active';?>" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="A1" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="#" href="http://www.myastro.fr/horoscope-gratuit">Horoscope Gratuit<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li<? if ($path == 'horoscope-2013') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/horoscope-2013">Horoscope 2013</a></li>
                                    <li<? if ($path == 'horoscope-du-jour') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/horoscope-du-jour">Horoscope du jour</a></li>
                                    <li<? if ($path == 'horoscope-de-la-semaine') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/horoscope-de-la-semaine">Horoscope de la semaine</a></li>
                                    <li<? if ($path == 'horoscope-du-mois') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/horoscope-du-mois">Horoscope du mois</a></li>
                                    <li<? if ($path == 'horoscope-de-l-amour') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/horoscope-de-l-amour">Horoscope de l'amour</a></li>
                                    
                                </ul>
                            </li>

                            <li class="divider-vertical"></li>

                            <li class="dropdown <? if (in_array($path, $tabastrologie)) echo 'active';?>" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="ancPostFormats" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="#" href="http://www.myastro.fr/astrologie-gratuite" >Astrologie Gratuite<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li<? if ($path == 'compatibilite-amoureuse-feminine') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-feminine" >Compatibilite amoureuse féminine</a></li>
                                    <li<? if ($path == 'compatibilite-amoureuse-masculine') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-masculine" >Compatibilite amoureuse masculine</a></li>
                                    <li<? if ($path == 'portrait-astrologique-feminin') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/portrait-astrologique-feminin" >Portrait astrologique féminin</a></li>
                                    <li<? if ($path == 'portrait-astrologique-masculin') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/portrait-astrologique-masculin" >Portrait astrologique masculin</a></li>
                                    <li<? if ($path == 'votre-personnalite-astrologique') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/votre-personnalite-astrologique" >Votre personnalité astrologique</a></li>
                                    
                                </ul>

                            </li>

                            <li class="divider-vertical"></li>

                            <li class="dropdown <? if (in_array($path, $tabtarot)) echo 'active';?>" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a5" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="tarot-gratuit" href="http://www.myastro.fr/tarot-gratuit" >Tarot Gratuit<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li<? if ($path == 'tarot-de-l-amour') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/tarot-de-l-amour" >Tarot de l'amour</a></li>
                                    <li<? if (($path == 'tarot-quotidien') || ($path == 'afficher_tarot_quotidien '))echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/tarot-quotidien" >Tarot quotidien</a></li>
                                    <li<? if ($path == 'tarot-hebdomadaire') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/tarot-hebdomadaire" >Tarot hebdomadaire</a></li>
                                    <li<? if ($path == 'tarot-mensuel') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/tarot-mensuel" >Tarot mensuel</a></li>
                                    <li<? if ($path == 'tarot-de-couple') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/tarot-de-couple" >Tarot de couple</a></li>
                                    
                                </ul>
                            </li>

                            <li class="divider-vertical"></li>

                            <li class="dropdown <? if (in_array($path, $tabnumerologie)) echo 'active';?>" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a4" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="numerologie-gratuite" href="http://www.myastro.fr/numerologie-gratuite" >Numérologie Gratuite<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li<? if ($path == 'numeroscope-2013') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/numeroscope-2013" >Numéroscope 2013</a></li>
                                    <li<? if ($path == 'compatibilite-amoureuse-pour-les-femmes') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes" >Compatibilité amoureuse (pour les femmes)</a></li>
                                    <li<? if ($path == 'compatibilite-amoureuse-pour-les-hommes') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-hommes" >Compatibilité amoureuse (pour les hommes)</a></li>
                                    <li<? if ($path == 'personnalite-numerologique') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/personnalite-numerologique" >Personnalité numérologique</a></li>
                                    <li<? if ($path == 'etapes-de-la-vie') echo ' class="dropdown active"';?>><a href="http://<?= ROOT_URL ?>/etapes-de-la-vie" >Etapes de la vie</a></li>

								</ul>
							</li>
							
							<li class="divider-vertical"></li>
							
							<li class="dropdown <? if ($path == 'voyance-par-telephone') echo 'active';?>" role="menu" aria-labelledby="dLabel">
								<a class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="voyance-par-telephone" href="http://www.myastro.fr/voyance-par-telephone" >Voyance par téléphone</a>
							</li>
							
							<li class="divider-vertical"></li>
							
							<li class="dropdown <? if ($pathf == 'forum/index.php') echo 'active';?>" role="menu" aria-labelledby="dLabel">
								<a class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="forum/index" href="http://www.myastro.fr/forum/index" >Forum</a>
							</li>

                        </ul>

                        <ul class="nav pull-right">
                            <li class="divider-vertical"></li>
                            <li>
                                <a href="#" rel="tooltip" data-toggle="tooltip"
                                    data-placement="top" data-original-title="Haut de page" ><i class="icon-random"></i></a>
                            </li>
                        </ul>
                    </div>
                 </div>
            </div>
        </div>
</nav>
