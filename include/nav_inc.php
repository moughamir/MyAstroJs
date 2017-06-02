<?php 
/* ------------ Menu principal du site ------------ */
$path_parts = pathinfo($_SERVER['REQUEST_URI']);
$path = $path_parts['filename'];
$pathf = $path_parts['dirname'];

$annee = date('Y');

$menu = array(
    'tab-voyance' => [
        'url' => 'voyance-gratuite',
        'txt' => 'Voyance gratuite',
        'items' => [
            [ 'url' => 'voyance-par-sms',      'txt' => 'Voyance par SMS' ],
            [ 'url' => 'voyance-sans-cb',      'txt' => 'Voyance sans CB' ],
            [ 'url' => 'voyance-tarot',        'txt' => 'Voyance Tarot' ],
            [ 'url' => 'voyance-discount',     'txt' => 'Voyance Discount' ],
            [ 'url' => 'voyance-en-ligne-web', 'txt' => 'Voyance en ligne' ],
            [ 'url' => 'voyance-par-chat',     'txt' => 'Voyance par Chat' ],
        ]
    ],
    'tab-horoscope' => [
        'url' => 'horoscope-gratuit',
        'txt' => 'Horoscope Gratuit',
        'items' => [
            [ 'url' => 'horoscope-'.$annee,       'txt' => 'Horoscope '.$annee ],
            [ 'url' => 'horoscope-du-jour',       'txt' => 'Horoscope du jour' ],
            [ 'url' => 'horoscope-de-la-semaine', 'txt' => 'Horoscope de la semaine' ],
            [ 'url' => 'horoscope-du-mois',       'txt' => 'Horoscope du mois' ],
            [ 'url' => 'horoscope-de-l-amour',    'txt' => 'Horoscope de lʼamour' ],
        ]
    ],
    'tab-astrologie' => [
        'url' => 'astrologie-gratuite',
        'txt' => 'Astrologie Gratuite',
        'items' => [
            [ 'url' => 'compatibilite-amoureuse-feminine',  'txt' => 'Compatibilité amoureuse féminine' ],
            [ 'url' => 'compatibilite-amoureuse-masculine', 'txt' => 'Compatibilité amoureuse masculine' ],
            [ 'url' => 'portrait-astrologique-feminin',     'txt' => 'Portrait Astrologique féminin' ],
            [ 'url' => 'portrait-astrologique-masculin',    'txt' => 'Portrait Astrologique masculin' ],
            [ 'url' => 'votre-personnalite-astrologique',   'txt' => 'Votre Personnalité Astrologique' ],
        ]
    ],
    'tab-tarot' => [
        'url' => 'tarot-gratuit',
        'txt' => 'Tarot Gratuit',
        'items' => [
            [ 'url' => 'tarot-de-l-amour',   'txt' => 'Tarot de lʼamour' ],
            [ 'url' => 'tarot-quotidien',    'txt' => 'Tarot quotidien' ],
            [ 'url' => 'tarot-hebdomadaire', 'txt' => 'Tarot hebdomadaire' ],
            [ 'url' => 'tarot-mensuel',      'txt' => 'Tarot mensuel' ],
            [ 'url' => 'tarot-de-couple',    'txt' => 'Tarot de couple' ],
        ]
    ],
    'tab-numerologie' => [
        'url' => 'numerologie-gratuite',
        'txt' => 'Numérologie Gratuite',
        'items' => [
            [ 'url' => 'numeroscope-'.$annee,                     'txt' => 'Numéroscope '.$annee ],
            [ 'url' => 'compatibilite-amoureuse-pour-les-femmes', 'txt' => 'Compatibilité amoureuse pour les femmes' ],
            [ 'url' => 'compatibilite-amoureuse-pour-les-hommes', 'txt' => 'Compatibilité amoureuse pour les hommes' ],
            [ 'url' => 'personnalite-numerologique',              'txt' => 'Personnalité numérologique' ],
            [ 'url' => 'etapes-de-la-vie',                        'txt' => 'Étapes de la vie' ],
        ]
    ],
    'voyance-par-tchat' => [
        'url' => 'myastro-tchat-n',
        'txt' => 'Voyance par tchat'
    ],
//    'voyance-par-telephone' => [
//        'url' => 'voyance-par-telephone',
//        'txt' => 'Voyance par téléphone'
//    ],
//    'forfaits' => [
//        'url' => 'forfaits',
//        'txt' => 'Forfaits'
//    ],
);
?>
<nav class="container-fluid navbar-main enable-fixed">
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
<?php
    $c = 0;
    foreach($menu as $menuItem){
        $c++;
        $tab_urls = [ $menuItem['url'] ];
        if(isset($menuItem['items'])){
            foreach($menuItem['items'] as $sousMenuItem){
                $tab_urls[] = $sousMenuItem['url'];
            }
        }
?>
                        <li class="divider-vertical"></li>
                        <li class="dropdown <?= in_array($path, $tab_urls) ? 'active' : '';?>" role="menuitem">
                            <a class="dropdown-toggle" id="a<?= $c;?>" role="button" data-hover="dropdown" data-delay="200"
                               href="http://<?= ROOT_URL.'/'.$menuItem['url'] ;?>">
                                <?= $menuItem['txt'];?>
                                <?php if(isset($menuItem['items'])){?><i class="caret"></i><?php }?>
                            </a>
<?php
        if(isset($menuItem['items'])){
?>
                            <ul class="dropdown-menu">
<?php
            foreach($menuItem['items'] as $sousMenuItem){
?>
                                <li <?= $path == $sousMenuItem['url'] ? 'class="dropdown active"' : '';?>>
                                    <a href="http://<?= ROOT_URL.'/'.$sousMenuItem['url'];?>">
                                        <?= $sousMenuItem['txt'];?>
                                    </a>
                                </li>
<?php
            }
?>
                            </ul>
<?php
        }
?>
                        </li>
<?php
    }
?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>