<?php
    $signs = array(
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
    $signs_url = isset($signs_url) ? $signs_url : 'horoscope';
?>
<ul class="posts-in-images clearfix">
    <?php foreach($signs as $code => $nom){ ?>
    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="<?= $nom ?>" title="<?= $nom ?>">
        <a href="http://<?= ROOT_URL.'/'.$url.'-'.$code ?>">
            <img src="images_voyance/signes/<?= $code ?>.png" alt="<?= $nom ?>" class="thumb-effect" />
        </a>
    </li>
    <?php } ?>
</ul>