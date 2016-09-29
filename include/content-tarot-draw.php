<div class="paquet">
    <div class="relative">
<?php
    for($i = 1; $i <= 12; $i++){
        switch($i){ // On met des attributs data pour la position de départ des elements
            case 1 :
            case 12 :
                $datapos = '-11px'; break;
            case 2 :
            case 11 :
                $datapos = '3px'; break;
            case 3 :
            case 10 :
                $datapos = '13px'; break;
            case 4 :
            case 9 :
                $datapos = '20px'; break;
            case 5 :
            case 8 :
                $datapos = '24px'; break;
            case 6 :
            case 7 :
                $datapos = '26px'; break;
        }
?>
        <img src="tarot/cartes/dos.png" class="tarot-dos tarot-<?= $i ?>" data-pos="<?= $datapos ?>" />
<?php } ?>
    </div>
</div>
<div class="widget-title second-title">
    <h2 class="h4">Votre tirage</h2>
</div>
<div class="donne">
    <div class="donneHandler">
        <?php for($i=1; $i<=5; $i++){ ?>
        <div class="pickHolder"></div>
        <?php } ?>
    </div>
    <div class="clearfix"></div>
</div>