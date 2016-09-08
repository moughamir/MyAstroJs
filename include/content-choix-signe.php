<?php
    $cs_signes = array(
        'taureau' => 'Taureau',
        'capricorne' => 'Capricorne',
        'gemeaux' => 'Gémeaux',
        'verseau' => 'Verseau',
        'belier' => 'Bélier',
        'poissons' => 'Poissons',
        'scorpion' => 'Scorpion',
        'balance' => 'Balance',
        'sagittaire' => 'Sagittaire',
        'lion' => 'Lion',
        'cancer' => 'Cancer',
        'vierge' => 'Vierge'
    );
    $cs_url = isset($url) ? $url : 'horoscope';
?>
<ul class="posts-in-images clearfix">
    <?php foreach($cs_signes as $code => $nom){ ?>
    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="<?= $nom ?>" title="<?= $nom ?>">
        <a href="http://<?= ROOT_URL.'/'.$cs_url.'-'.$code ?>">
            <div class="thumb-effect">
                <div class="mask"></div>
                <img src="images_voyance/signes/<?= $nom ?>.png" />
            </div>
        </a>
    </li>
    <?php } ?>
</ul>

