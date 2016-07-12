<?php
echo '<!-- '.$_SESSION['affiliation'].' | '.$_SESSION['source'].' | '.(isset($_SESSION['conversion'])? $_SESSION['conversion'] : 0).' -->';
$affiliation = $_SESSION['affiliation'];
$formulaire = $_SESSION['source'];
$email = $_SESSION['email'];
$urls_conversion = array(
    'tarot-affil-1' => 'http://affdjz.go2cloud.org/aff_l?offer_id=199', // Offer Conversion: My Astro tarot [FR] - CPL
    'voyance-affil-1' => 'http://affdjz.go2cloud.org/aff_l?offer_id=203', // Offer Conversion: My Astro voyance immédiat [FR] - CPL
    'tarot-affil-2' => 'http://affdjz.go2cloud.org/aff_l?offer_id=205', // Offer Conversion: My Astro tarot immediat [FR] - CPL
    'voyance-affil-2' => 'http://affdjz.go2cloud.org/aff_l?offer_id=201', // Offer Conversion: My Astro voyance [FR] - CPL
    'tarot-gratuit-sw-16' => 'http://affdjz.go2cloud.org/aff_l?offer_id=205',
    'tarot-affil-3' => 'http://www.regieastro.com/track/dpl?data=bddd47f83c2fbf94b55d22f3e099926bd080b2eb-50f15c3dae5&email=A_PARAMETRER',
    'voyance-affil-3' => 'http://www.regieastro.com/track/dpl?data=86d3e4ddb95d0623e5ecd5e21cbadbc53f86e882-08042e4557f&email=A_PARAMETRER',
    'tarot-affil-4' => 'http://www.regieastro.com/track/dpl?data=eaefa5be62c74d198a3834ba92d645993f2f3067-5da78db20d8&email=A_PARAMETRER',
    'voyance-affil-4' => 'http://www.regieastro.com/track/dpl?data=380abc94dcd21032a1be8cfcc2e8547d79886d94-c5d35047c2f&email=A_PARAMETRER'
);
if(isset($_SESSION['conversion']) && $_SESSION['conversion'] == 2){
    if(isset($urls_conversion[$formulaire])){
        $url = $urls_conversion[$formulaire];
        echo '<img src="'.$url.'" width="1" height="1" />';
        unset($_SESSION['conversion']);
    }
}