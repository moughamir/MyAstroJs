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
                        <li class="dropdown <?= $path == 'index' ? 'active' : '';?>" role="menuitem">
                            <a class="dropdown-toggle" id="ancHomePages" role="button" data-hover="dropdown" data-delay="200" data-target="#" href="http://<?= ROOT_URL ?>/"><i class="icon-home"></i></a>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <?= in_array($path, $tabvoyance) ? 'active'  : '';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="a6" role="button" data-hover="dropdown" data-delay="200" data-target="http://<?= ROOT_URL ?>/" href="http://<?= ROOT_URL ?>/voyance-gratuite" >Voyance gratuite<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <?= $path == 'voyance-par-sms' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/voyance-par-sms" >Voyance par SMS</a></li>
                                <li <?= $path == 'voyance-sans-cb' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/voyance-sans-cb" >Voyance sans CB</a></li>	
                                <li <?= $path == 'voyance-tarot' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/voyance-tarot" >Voyance Tarot</a></li>
                                <li <?= $path == 'voyance-discount' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/voyance-discount" >Voyance discount</a></li>
                                <li <?= $path == 'voyance-en-ligne-web' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/voyance-en-ligne-web" >Voyance en ligne</a></li>
                                <li <?= $path == 'voyance-par-chat' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/voyance-par-chat" >Voyance par chat</a></li>
                            </ul>

                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <?= in_array($path, $tabhoroscope) ? 'active'  : '';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="A1" role="button" data-hover="dropdown" data-delay="200" data-target="#" href="http://<?= ROOT_URL ?>/horoscope-gratuit">Horoscope Gratuit<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <?= $path == 'horoscope-2016' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/horoscope-2016">Horoscope 2016</a></li>
                                <li <?= $path == 'horoscope-du-jour' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/horoscope-du-jour">Horoscope du jour</a></li>
                                <li <?= $path == 'horoscope-de-la-semaine' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/horoscope-de-la-semaine">Horoscope de la semaine</a></li>
                                <li <?= $path == 'horoscope-du-mois' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/horoscope-du-mois">Horoscope du mois</a></li>
                                <li <?= $path == 'horoscope-de-l-amour' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/horoscope-de-l-amour">Horoscope de l'amour</a></li>
                                
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <?= in_array($path, $tabastrologie) ? 'active'  : '';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="ancPostFormats" role="button" data-hover="dropdown" data-delay="200" data-target="#" href="http://<?= ROOT_URL ?>/astrologie-gratuite" >Astrologie Gratuite<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <?= $path == 'compatibilite-amoureuse-feminine' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-feminine" >Compatibilite amoureuse féminine</a></li>
                                <li <?= $path == 'compatibilite-amoureuse-masculine' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-masculine" >Compatibilite amoureuse masculine</a></li>
                                <li <?= $path == 'portrait-astrologique-feminin' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/portrait-astrologique-feminin" >Portrait astrologique féminin</a></li>
                                <li <?= $path == 'portrait-astrologique-masculin' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/portrait-astrologique-masculin" >Portrait astrologique masculin</a></li>
                                <li <?= $path == 'votre-personnalite-astrologique' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/votre-personnalite-astrologique" >Votre personnalité astrologique</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <?= in_array($path, $tabtarot) ? 'active' : '';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="a5" role="button" data-hover="dropdown" data-delay="200" data-target="tarot-gratuit" href="http://<?= ROOT_URL ?>/tarot-gratuit" >Tarot Gratuit<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <?= $path == 'tarot-de-l-amour' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/tarot-de-l-amour" >Tarot de l'amour</a></li>
                                <li <?= ($path == 'tarot-quotidien' || $path == 'afficher_tarot_quotidien ') ? 'class="dropdown active"'  : '';?>><a href="http://<?= ROOT_URL ?>/tarot-quotidien" >Tarot quotidien</a></li>
                                <li <?= $path == 'tarot-hebdomadaire' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/tarot-hebdomadaire" >Tarot hebdomadaire</a></li>
                                <li <?= $path == 'tarot-mensuel' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/tarot-mensuel" >Tarot mensuel</a></li>
                                <li <?= $path == 'tarot-de-couple' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/tarot-de-couple" >Tarot de couple</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <?= in_array($path, $tabnumerologie) ? 'active'  : '';?>" role="menuitem" >
                            <a class="dropdown-toggle" id="a4" role="button" data-hover="dropdown" data-delay="200" data-target="numerologie-gratuite" href="http://<?= ROOT_URL ?>/numerologie-gratuite" >Numérologie Gratuite<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li <?= $path == 'numeroscope-2016' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/numeroscope-2016" >Numéroscope 2016</a></li>
                                <li <?= $path == 'compatibilite-amoureuse-pour-les-femmes' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes" >Compatibilité amoureuse (pour les femmes)</a></li>
                                <li <?= $path == 'compatibilite-amoureuse-pour-les-hommes' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-hommes" >Compatibilité amoureuse (pour les hommes)</a></li>
                                <li <?= $path == 'personnalite-numerologique' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/personnalite-numerologique" >Personnalité numérologique</a></li>
                                <li <?= $path == 'etapes-de-la-vie' ? 'class="dropdown active"' : '';?>><a href="http://<?= ROOT_URL ?>/etapes-de-la-vie" >Etapes de la vie</a></li>
							</ul>
						</li>
						<li class="divider-vertical"></li>
						<li class="dropdown <?= $path == 'voyance-par-telephone' ? 'active' : '';?>" role="menuitem" >
							<a class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="voyance-par-telephone" href="http://<?= ROOT_URL ?>/voyance-par-telephone" >Voyance par téléphone</a>
						</li>
						<li class="divider-vertical"></li>
                        <li class="dropdown <?= $path == 'forfaits' ? 'active' : '';?>" role="menuitem" >
                            <a class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="forfaits" href="http://<?= ROOT_URL ?>/forfaits" >Forfaits</a>
                        </li>
                        <li class="divider-vertical"></li>
                        <!--<li class="dropdown <?= $path == 'blog' ? 'active' : '';?>" role="menuitem" >
                            <a style="margin-left:16px;" class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="blog" href="#" >Blog </a>
                        </li>-->
					<!--	<li class="dropdown <? /*if ($pathf == 'forum/index.php' ? 'active';*/?>" role="menuitem" >
							<a class="dropdown-toggle" role="button" data-hover="dropdown" data-delay="200" data-target="forum/index" href="http://<?= ROOT_URL ?>/forum/index" >Forum</a>
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
