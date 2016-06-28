<?php 
$path_parts = pathinfo($_SERVER['REQUEST_URI']);
$path = $path_parts['filename'];
//echo $path;
$pathf = $path_parts['dirname'];
$tabvoyance=["voyance-gratuite","voyance-tarot-gratuit","voyance-numerologique-gratuite","voyance-par-sms","voyance-sans-cb"];
$tabhoroscope=["horoscope-gratuit","horoscope-2016","horoscope-du-jour","horoscope-de-la-semaine","horoscope-du-mois","horoscope-de-l-amour"];
$tabastrologie=["astrologie-gratuite","compatibilite-amoureuse-feminine","compatibilite-amoureuse-masculine","portrait-astrologique-feminin","portrait-astrologique-masculin","votre-personnalite-astrologique"];
$tabtarot=["tarot-gratuit","tarot-de-l-amour","tarot-quotidien","tarot-hebdomadaire","tarot-mensuel","tarot-de-couple","afficher_tarot_quotidien","afficher_tarot_hebdomadaire","afficher_tarot_mensuel","afficher_tarot_couple"];
$tabnumerologie=["numerologie-gratuite","numeroscope-2016","compatibilite-amoureuse-pour-les-femmes","compatibilite-amoureuse-pour-les-hommes","personnalite-numerologique","etapes-de-la-vie"];


?>
<nav class="container-fluid navbar-main enable-fixed">
    <?php /*<h2 class="hidden">Site bar de Navigation</h2> */ ?>
    <div class="navbar">
        <div class="navbar-inner">
            <div class="clearfix">
                <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target="#divNav2">
                    <span class="icon-reorder"></span>
                </button>
                <div id="divNav2" class="nav-collapse collapse clearfix">
                    <ul class="nav" role="menu">
                        <li class="dropdown <? if ($path == 'index') echo 'active';?>" role="menuitem">
                            <a class="dropdown-toggle" id="ancHomePages" role="button" data-hover="dropdown" data-delay="200" data-target="#" href="http://www.myastro.fr/"><i class="icon-home"></i></a>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <? if (in_array($path, $tabvoyance)) echo 'active';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="a6" role="button" data-hover="dropdown" data-delay="200" data-target="http://www.myastro.fr/" href="http://www.myastro.fr/voyance-gratuite" >Voyance gratuite<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <? if ($path == 'voyance-par-sms') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/voyance-par-sms" >Voyance par SMS</a></li>
                                <li <? if ($path == 'voyance-sans-cb') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/voyance-sans-cb" >Voyance sans CB</a></li>
								
								
                                <li <? if ($path == 'voyance-tarot') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/voyance-tarot" >Voyance Tarot</a></li>
                                <li <? if ($path == 'voyance-discount') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/voyance-discount" >Voyance discount</a></li>
                                <li <? if ($path == 'voyance-en-ligne-web') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/voyance-en-ligne-web" >Voyance en ligne</a></li>
                                <li <? if ($path == 'voyance-par-chat') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/voyance-par-chat" >Voyance par chat</a></li>
                            </ul>

                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <? if (in_array($path, $tabhoroscope)) echo 'active';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="A1" role="button" data-hover="dropdown" data-delay="200" data-target="#" href="http://www.myastro.fr/horoscope-gratuit">Horoscope Gratuit<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <? if ($path == 'horoscope-2016') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/horoscope-2016">Horoscope 2016</a></li>
                                <li <? if ($path == 'horoscope-du-jour') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/horoscope-du-jour">Horoscope du jour</a></li>
                                <li <? if ($path == 'horoscope-de-la-semaine') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/horoscope-de-la-semaine">Horoscope de la semaine</a></li>
                                <li <? if ($path == 'horoscope-du-mois') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/horoscope-du-mois">Horoscope du mois</a></li>
                                <li <? if ($path == 'horoscope-de-l-amour') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/horoscope-de-l-amour">Horoscope de l'amour</a></li>
                                
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <? if (in_array($path, $tabastrologie)) echo 'active';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="ancPostFormats" role="button" data-hover="dropdown" data-delay="200" data-target="#" href="http://www.myastro.fr/astrologie-gratuite" >Astrologie Gratuite<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <? if ($path == 'compatibilite-amoureuse-feminine') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/compatibilite-amoureuse-feminine" >Compatibilite amoureuse féminine</a></li>
                                <li <? if ($path == 'compatibilite-amoureuse-masculine') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/compatibilite-amoureuse-masculine" >Compatibilite amoureuse masculine</a></li>
                                <li <? if ($path == 'portrait-astrologique-feminin') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/portrait-astrologique-feminin" >Portrait astrologique féminin</a></li>
                                <li <? if ($path == 'portrait-astrologique-masculin') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/portrait-astrologique-masculin" >Portrait astrologique masculin</a></li>
                                <li <? if ($path == 'votre-personnalite-astrologique') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/votre-personnalite-astrologique" >Votre personnalité astrologique</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <? if (in_array($path, $tabtarot)) echo 'active';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="a5" role="button" data-hover="dropdown" data-delay="200" data-target="tarot-gratuit" href="http://www.myastro.fr/tarot-gratuit" >Tarot Gratuit<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <? if ($path == 'tarot-de-l-amour') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/tarot-de-l-amour" >Tarot de l'amour</a></li>
                                <li <? if (($path == 'tarot-quotidien') || ($path == 'afficher_tarot_quotidien '))echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/tarot-quotidien" >Tarot quotidien</a></li>
                                <li <? if ($path == 'tarot-hebdomadaire') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/tarot-hebdomadaire" >Tarot hebdomadaire</a></li>
                                <li <? if ($path == 'tarot-mensuel') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/tarot-mensuel" >Tarot mensuel</a></li>
                                <li <? if ($path == 'tarot-de-couple') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/tarot-de-couple" >Tarot de couple</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <? if (in_array($path, $tabnumerologie)) echo 'active';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="a4" role="button" data-hover="dropdown" data-delay="200" data-target="numerologie-gratuite" href="http://www.myastro.fr/numerologie-gratuite" >Numérologie Gratuite<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <? if ($path == 'numeroscope-2016') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/numeroscope-2016" >Numéroscope 2016</a></li>
                                <li <? if ($path == 'compatibilite-amoureuse-pour-les-femmes') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/compatibilite-amoureuse-pour-les-femmes" >Compatibilité amoureuse (pour les femmes)</a></li>
                                <li <? if ($path == 'compatibilite-amoureuse-pour-les-hommes') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/compatibilite-amoureuse-pour-les-hommes" >Compatibilité amoureuse (pour les hommes)</a></li>
                                <li <? if ($path == 'personnalite-numerologique') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/personnalite-numerologique" >Personnalité numérologique</a></li>
                                <li <? if ($path == 'etapes-de-la-vie') echo ' class="dropdown active"';?>><a href="http://www.myastro.fr/etapes-de-la-vie" >Etapes de la vie</a></li>
							</ul>
						</li>
						<li class="divider-vertical"></li>
						<li class="dropdown <? if ($path == 'voyance-par-telephone') echo 'active';?>" role="menuitem" >
							<a class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="voyance-par-telephone" href="http://www.myastro.fr/voyance-par-telephone" >Voyance par téléphone</a>
						</li>
						<li class="divider-vertical"></li>
                        <li class="dropdown <? if ($path == 'forfaits') echo 'active';?>" role="menuitem" >
                            <a class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="forfaits" href="http://www.myastro.fr/forfaits" >Forfaits</a>
                        </li>
                        <li class="divider-vertical"></li>
                        <!--<li class="dropdown <? if ($path == 'blog') echo 'active';?>" role="menuitem" >
                            <a style="margin-left:16px;" class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="blog" href="#" >Blog </a>
                        </li>-->
					<!--	<li class="dropdown <? /*if ($pathf == 'forum/index.php') echo 'active';*/?>" role="menuitem" >
							<a class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="forum/index" href="http://www.myastro.fr/forum/index" >Forum</a>
						</li>  -->
                    </ul>
                    <!--<ul class="nav pull-right">
                        <li class="divider-vertical"></li>
                        <li>
                            <a href="#" rel="noreferrer" data-toggle="tooltip" data-placement="top" data-original-title="Haut de page" ><i class="icon-random"></i></a>
                        </li>
                    </ul>-->
                </div>
            </div>
        </div>
    </div>
</nav>
