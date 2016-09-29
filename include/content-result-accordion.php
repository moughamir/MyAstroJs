<?php
    $ac_result = isset($ac_result) ? $ac_result : [];
?>
<div class="widget-content clearfix thumbnails">
    <div class="modern-accordion-container">
        <div class="accordion" id="accordion1">
<?php 
    $i = 1;
    foreach ($ac_result as $titre => $texte){ 
?>
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?= $i ?>">
                        <?= $titre ?>
                        <i class="icon-angle-down pull-right"></i>
                    </a>
                </div>
                <div id="collapse<?= $i ?>" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <p><?= $texte ?></p>
                    </div>
                </div>
            </div>
<?php 
        $i++;
    }
?>
        </div>
    </div>
</div>