<?php
    $cn_url = isset($cn_url) ? $cn_url : 'numeroscope';
?>
<aside class="widget w-adv">
    <div class="widget-title">
        <h4>Ma date de naissance</h4>
    </div>
    <form method="POST" action="numero.php?cat=<?= $cn_url ?>" >
        <div class="widget-content clearfix">
            <select style="width: 20%;" name="date_naissance_j" >
                <option selected="selected" value="Jour">Jour</option>
                <?php for($i=1;$i<=31;$i++){ ?>
                <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select>
        <select style="width: 20%;" name="date_naissance_m">
            <option selected="selected" value="Mois">Mois</option>
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Août</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>
        <select style="width: 30%;" name="date_naissance_a">
            <option selected="selected" value="Année">Année</option>
            <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select>
        <div style="margin-top: 0px; text-align:center;">
            <input type="submit" value="Ma numérologie" name="valider" class="button"/>
        </div>
    </form>
</aside>
<aside class="widget w-pictures">
    <div class="widget-title">
        <h4>Quel est votre chiffre préféré ?</h4>
    </div>
    <div class="widget-content clearfix thumbnails">
        <ul class="posts-in-images clearfix">
            <?php for($i=1;$i<=9;$i++){ ?>
            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="<?= $i;?>" title="<?= $i;?>">
                <a href="http://<?= ROOT_URL.'/'.$cn_url.'-'.$i;?>">
                    <div class="thumb-effect">
                        <div class="mask"></div>
                        <img src="images_voyance/chiffres/<?= $i;?>.jpg" />
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</aside>