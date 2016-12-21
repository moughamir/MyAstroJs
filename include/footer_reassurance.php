<?php
    $items_base = array(
        'voyant-serieux' => [
            'icon' => 'star',
            'text' => 'Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong>'
        ],
        'discretion' => [
            'icon' => 'lock',
            'text' => 'Consultations 100% <br/><strong>discrètes & anonymes</strong>'
        ],
        'mail-24h' => [
            'icon' => 'gift',
            'text' => 'Étude personnalisée <br/><strong>par mail sous 24h</strong>'
        ],
        'leader' => [
            'icon' => 'trophy',
            'text' => 'My Astro leader <br/><strong>depuis 2007</strong>'
        ],
        'interpretation' => [
            'icon' => 'tchat',
            'text' => 'Interprétation <br/><strong>immédiate</strong>'
        ],
        'paiement-secure' => [
            'icon' => 'secure',
            'text' => 'Paiement <br/><strong>sécurisé</strong> par CB'
        ]
    );
    $item_list = isset($reassurance_items) ? $reassurance_items : [ 'voyant-serieux', 'discretion', 'mail-24h', 'leader' ];
?>
<footer class="SiteFooter">
    <div class="PageWrapper">
        <ul class="ReassuranceList">
            <?php 
                foreach ($item_list as $item_ref){
                    $item = $items_base[$item_ref]; 
            ?>
            <li class="ReassuranceList-Item">
                <span class="ReassuranceList-Item-Img <?= $item['icon'];?>"></span>
                <span class="ReassuranceList-Item-Txt"><?= $item['text'];?></span>
            </li>
            <?php } ?>
        </ul>
    </div>
</footer>