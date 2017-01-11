<?php
    $annee = isset($annee) ? $annee : date('Y');
    $ipg_title = isset($ipg_title) ? $ipg_title : 'Voyance gratuite';

    /* $ipg_pub_bdd */
    include('data/content-internal-pub-grid.php');
    
    $ipg_pubs = isset($ipg_pubs) ? $ipg_pubs : array();
    
    if(!empty($ipg_pubs)){
?>
    <div class="cat-widget-title">
        <h3><?= $ipg_title ?></h3>
    </div>
    <div class="cat-widget-content">
        <div class="row-fluid cat-horiz" style="margin-bottom: 0">
            <div class="row-fluid modern-items-list">
                <div id="h_cat_slider1" class="flexslider">
                    <ul class="slides"><li>
                        <ul class="items left clearfix">
<?php
        $c = 0;
        foreach($ipg_pubs as $key => $code){
            if(is_array($code)){
                $encart_perso = $code;
                $code_pub = $key;
            } else {
                $encart_perso = [];
                $code_pub = $code;
            }
            $temp_code = explode('#', $code_pub);
            $code_pub = $temp_code[0];
            $desc_variation = isset($temp_code[1]) ? $temp_code[1] : 0;
            $encart_bdd = $ipg_pub_bdd[$code];
            
            $titre = isset($encart_perso['titre']) ? $encart_perso['titre'] : $encart_bdd['titre'];
            $img = isset($encart_perso['img']) ? $encart_perso['img'] : $encart_bdd['img'];
            $url = isset($encart_perso['url']) ? $encart_perso['url'] : $encart_bdd['url'];
            $desc = isset($encart_perso['desc']) ? $encart_perso['desc'] : isset($encart_bdd['desc'][$desc_variation]) ? $encart_bdd['desc'][$desc_variation] : '';
?>
                            <?php if($c % 2 == 0){ ?>
                            <li class="row-fluid">
                            <?php } ?>
                                <div class="span6">
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="images_voyance/banniere/<?= $img;?>" class="post-img" />
                                            <div class="description visible-part">
                                                <h5 class="title"><?= $titre;?></h5>
                                                <?php if(!empty($desc)){ ?>
                                                <h6 class="info"><?= $desc;?></h6>
                                                <?php } ?>
                                            </div>
                                            <a href="http://<?= ROOT_URL.'/'.$url;?>" class="more" title=""></a>
                                        </div>
                                    </article>
                                </div>
                            <?php if($key % 2 == 1){ ?>
                            </li>
                            <?php } ?>
<?php
            $c++;
        } // --- fin foreach
?>
                        </ul>
                    </li></ul>
                </div>
            </div>
        </div>
    </div>
<?php
    } // --- fin si
?>