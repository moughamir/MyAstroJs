<?php
    $cs_url = isset($cs_url) ? $cs_url : 'horoscope';
    $signs_url = $cs_url;
    
    function getSignCode($nom){
        $nom = strtolower($nom); // en minuscules
        $nom = preg_replace('#[éèê]#u', 'e', $nom); // accents du e
        return $nom;
    }
?>
<aside class="widget w-pictures">
    <div class="widget-title">
        <h4>CHOISISSEZ VOTRE SIGNE ASTROLOGIQUE</h4>
    </div>
    <div class="widget-content clearfix thumbnails">
        <?php include('visual_modules/signs_list.php');?>
    </div>
</aside>
<aside class="widget w-adv">
    <div class="widget-title">
        <h4>JE NE CONNAIS PAS MON SIGNE</h4>
    </div>
    <form method="POST" action="signe.php?cat=<?= $cs_url ?>" >
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
        <div style="margin-top:0px;text-align:center;">
            <input type="submit" value="Mon signe" name="valider" class="button"/>
        </div>
    </form>
</aside>