<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Boutique ésotérique | MyAstro</title>
    <meta name="description" content="" />
    <?= $tracker->getCanonical() ?>
    
<link href="css/tel.css" type="text/css" rel="stylesheet">
   
<?php include('include/header_inc.php'); ?>
<link href="css/forfait-abo.css" type="text/css" rel="stylesheet">
<link href="css/boutique.css" type="text/css" rel="stylesheet">  

<script type="text/javascript">

function formatNumber(nbr) {
      var result = NaN;
      if (typeof(nbr) == 'number') {
        var str = new String(nbr);
        var parts = str.split('.');
        result = parts[0] + '.' + (parts.length == 1 ? '00' : (parts[1] + '0').substring(0,2));
      }
      return result;
}

function prixProduit(prix,detail){

    tarif = formatNumber(prix);
    document.getElementById("montant").value = tarif;
    document.getElementById("detail").value = detail;
}

</script>
                                
                                
                            
<div class="container-fluid" itemscope >

    <!-- Main Content -->
    <div class="row-fluid">

        <div class="article-content">
            <header>
                <div itemscope >
                    <ul class="breadcrumb" itemprop="breadcrumb">
                        <li><h4 class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                        <li>Boutique ésotérique</h4></li>
                    </ul>
                </div>
                <div class="cat-widget-title">
                                    
                    <h1 itemprop="headline">................................................</h1>
                                    
                </div>   
            </header><br>
            <span class="clearfix"></span>

            <!--  ************************ contenu ****************************  -->
            <div class="row-fluid">    

                <?php 
                    /* inclure les tableaux des produits ici*/
                    include('boutique-content.php');
                ?>

                <div class="span6 main-content bloc-prod-unit" style="width:685px">

                   <section class="row-fluid prod-unit" >
                    <h2 class="boutique-title">Produits ésotériques à l'unité</h2>
                     <table  border="0" cellpadding="2" class="table-categorie">
                        <h2 class="cat-title">Les Bougies</h2>
                        <?php 
                            $i = 1;
                            $j = 1;
                            foreach($bougies as $name => $data){

                                if($i == 0 ){
                                    echo '<tr>';
                                }
                                echo '<td>';
                               
                                ?>
                                <div class="produit">
 
                                    <div class="bloc-prod">
                                        <div class="img-prod">
                                           <img src="images/boutique/bougies/<?= $data['img'] ?>"/>
                                        </div>

                                        <div class="btn-com">
                                           <a href="#ouvert" ><img src="images/boutique/commander.png" onclick="prixProduit(<?= $data['prix']?>,'<?= $data['nom'] ?>')"></a>
                                        </div>
                                        <div class="btn-desc">
                                            <img class = "bougies-desc-img-<?= $j ?>" src="images/boutique/croix.png"/>

                                        </div>
                                       
                                    </div>


                                    <div class="bloc-txt">
                                            <span class="nom-prod"><?= $data['nom'] ?> </span><br>
                                            <span class="sep"> -- </span><br>
                                            <span class="prix"><?= $data['prix'] ?>&euro;</span>
                                    </div>
                                    
                                        
                                </div>
                                
                                <?php
                                echo '</td>';

                                if($i == 5 ){
                                    echo '</tr><tr>';
                                    $i = 0;
                                }
                                ?>
                                <div class="bougies-desc-<?= $j ?>" style = "display:none; border:1px solid #dfdfdf;padding:5px; box-shadow:0px 7px 7px #dfdfdf ">
                                                <p ><?= $data['nom'] ?> </p>
                                </div>
                                    
                                        <script>
                                          $(function() {

                                                    $(".bougies-desc-img-<?= $j ?>").click(function(){
                                                      $(".bougies-desc-<?= $j ?>").toggle(100);
                                                    });

                                            });

                                            </script>
                                <?php
                                $i++;
                                $j++;
                            }
                        ?>
                        </table>

                        <table  border="0" cellpadding="2" class="table-categorie">
                        <h2 class="cat-title">Les neuvaines</h2>
                        <?php 
                            $i = 1;
                            $j = 1;
                            foreach($neuvaines as $name => $data){

                                if($i == 0 ){
                                    echo '<tr>';
                                }
                                echo '<td>';
                               
                                ?>
                                <div class="produit">
 
                                    <div class="bloc-prod">
                                        <div class="img-prod">
                                           <img src="images/boutique/neuvaines/<?= $data['img'] ?>"/>
                                        </div>

                                        <div class="btn-com">
                                           <a href="#ouvert" ><img src="images/boutique/commander.png" onclick="prixProduit(<?= $data['prix']?>,'<?= $data['nom'] ?>')"></a>
                                        </div>
                                        <div class="btn-desc">
                                            <img class = "neuvaines-desc-img-<?= $j ?>" src="images/boutique/croix.png"/>
                                        </div>

                                    </div>


                                    <div class="bloc-txt">
                                            <span class="nom-prod"><?= $data['nom'] ?> </span><br>
                                            <span class="sep"> -- </span><br>
                                            <span class="prix"><?= $data['prix'] ?>&euro;</span>
                                    </div>

                                </div>
                                <?php
                                echo '</td>';

                                if($i == 5 ){
                                    echo '</tr><tr>';
                                    $i = 0;
                                }
                                
                                ?>
                                <div class="neuvaines-desc-<?= $j ?>" style = "display:none; border:1px solid #dfdfdf;padding:5px; box-shadow:0px 7px 7px #dfdfdf ">
                                                <p ><?= $data['nom'] ?> </p>
                                </div>
                                    
                                        <script>
                                          $(function() {

                                                    $(".neuvaines-desc-img-<?= $j ?>").click(function(){
                                                      $(".neuvaines-desc-<?= $j ?>").toggle(100);
                                                    });

                                            });

                                            </script>
                                <?php
                                $i++;
                                $j++;
                            }
                        ?>
                        </table>
                        <table border="0" cellpadding="2" class="table-categorie">
                        <h2 class="cat-title">Les pierres</h2>
                        <?php 
                            $i = 1;
                            $j = 1;
                            foreach($pierres as $name => $data){

                                if($i == 0 ){
                                    echo '<tr>';
                                }
                                echo '<td>';
                               
                                ?>
                                <div class="produit">
 
                                    <div class="bloc-prod">
                                        <div class="img-prod">
                                           <img src="images/boutique/pierres/<?= $data['img'] ?>"/>
                                        </div>

                                        <div class="btn-com">
                                           <a href="#ouvert" ><img src="images/boutique/commander.png" onclick="prixProduit(<?= $data['prix']?>,'<?= $data['nom'] ?>')"></a>
                                        </div>
                                        <div class="btn-desc">
                                            <img class = "pierres-desc-img-<?= $j ?>" src="images/boutique/croix.png"/>
                                        </div>

                                    </div>


                                    <div class="bloc-txt">
                                            <span class="nom-prod"><?= $data['nom'] ?> </span><br>
                                            <span class="sep"> -- </span><br>
                                            <span class="prix"><?= $data['prix'] ?>&euro;</span>
                                    </div>

                                </div>
                                <?php
                                echo '</td>';

                                if($i == 5 ){
                                    echo '</tr><tr>';
                                    $i = 0;
                                }
                               ?>
                                <div class="pierres-desc-<?= $j ?>" style = "display:none; border:1px solid #dfdfdf;padding:5px; box-shadow:0px 7px 7px #dfdfdf ">
                                                <p ><?= $data['nom'] ?> </p>
                                </div>
                                    
                                        <script>
                                          $(function() {

                                                    $(".pierres-desc-img-<?= $j ?>").click(function(){
                                                      $(".pierres-desc-<?= $j ?>").toggle(100);
                                                    });

                                            });

                                            </script>
                                <?php
                                $i++;
                                $j++;
                            }
                        ?>
                        </table>
                        <table  border="0" cellpadding="2" class="table-categorie">
                        <h2 class="cat-title">Les encens</h2>
                        <?php 
                            $i = 1;
                            $j = 1;
                            foreach($encens as $name => $data){

                                if($i == 0 ){
                                    echo '<tr>';
                                }
                                echo '<td>';
                               
                                ?>
                                <div class="produit">
 
                                    <div class="bloc-prod">
                                        <div class="img-prod">
                                           <img src="images/boutique/encens/<?= $data['img'] ?>"/>
                                        </div>

                                        <div class="btn-com">
                                           <a href="#ouvert" ><img src="images/boutique/commander.png" onclick="prixProduit(<?= $data['prix']?>,'<?= $data['nom'] ?>')"></a>
                                        </div>
                                        <div class="btn-desc">
                                            <img class = "encens-desc-img-<?= $j ?>" src="images/boutique/croix.png"/>
                                        </div>

                                    </div>


                                    <div class="bloc-txt">
                                            <span class="nom-prod"><?= $data['nom'] ?> </span><br>
                                            <span class="sep"> -- </span><br>
                                            <span class="prix"><?= $data['prix'] ?>&euro;</span>
                                    </div>

                                </div>
                                <?php
                                echo '</td>';

                                if($i == 5 ){
                                    echo '</tr><tr>';
                                    $i = 0;
                                }
                                
                               ?>
                                <div class="encens-desc-<?= $j ?>" style = "display:none; border:1px solid #dfdfdf;padding:5px; box-shadow:0px 7px 7px #dfdfdf ">
                                                <p ><?= $data['nom'] ?> </p>
                                </div>
                                    
                                        <script>
                                          $(function() {

                                                    $(".encens-desc-img-<?= $j ?>").click(function(){
                                                      $(".encens-desc-<?= $j ?>").toggle(100);
                                                    });

                                            });

                                            </script>
                                <?php
                                $i++;
                                $j++;
                            }
                        ?>
                        </table>
                        <table  border="0" cellpadding="2" class="table-categorie">
                        <h2 class="cat-title">Les bijoux</h2>
                        <?php 
                            $i = 1;
                            $j = 1;
                            foreach($bijoux as $name => $data){

                                if($i == 0 ){
                                    echo '<tr>';
                                }
                                echo '<td>';
                               
                                ?>
                                <div class="produit">
 
                                    <div class="bloc-prod">
                                        <div class="img-prod">
                                           <img src="images/boutique/bijoux/<?= $data['img'] ?>"/>
                                        </div>

                                        <div class="btn-com">
                                           <a href="#ouvert" ><img src="images/boutique/commander.png" onclick="prixProduit(<?= $data['prix']?>,'<?= $data['nom'] ?>')"></a>
                                        </div>
                                        <div class="btn-desc">
                                            <img class = "bijoux-desc-img-<?= $j ?>" src="images/boutique/croix.png"/>
                                        </div>

                                    </div>
                                    <div class="bloc-txt">
                                            <span class="nom-prod"><?= $data['nom'] ?> </span><br>
                                            <span class="sep"> -- </span><br>
                                            <span class="prix"><?= $data['prix'] ?>&euro;</span>
                                    </div>

                                </div>
                                <?php
                                echo '</td>';

                                if($i == 5 ){
                                    echo '</tr><tr>';
                                    $i = 0;
                                }
                               ?>
                                <div class="bijoux-desc-<?= $j ?>" style = "display:none; border:1px solid #dfdfdf;padding:5px; box-shadow:0px 7px 7px #dfdfdf ">
                                                <p ><?= $data['nom'] ?> </p>
                                </div>
                                    
                                        <script>
                                          $(function() {

                                                    $(".bijoux-desc-img-<?= $j ?>").click(function(){
                                                      $(".bijoux-desc-<?= $j ?>").toggle(100);
                                                    });

                                            });

                                            </script>
                                <?php
                                $i++;
                                $j++;
                            }
                        ?>
                        </table>
                    </section>
                    
                </div>

                <section class="span300 prod-pack"  style="margin-left:140px">
                    <h2 class="boutique-title">Les packs</h2>
                     <table width="100%" border="0" cellpadding="2" class="table-pack">
                        <h2 class="cat-title"></h2>
                        <?php 
                            $i = 1;
                            foreach($packs as $name => $data){

                                if($i == 0 ){
                                    echo '<tr>';
                                }
                                echo '<td>';
                               
                                ?>
                                <div class="pack">
 
                                    <div class="bloc-pack">

                                        <div class="pack-name">
                                            <h3><?= $data['nom'] ?></h3>
                                        </div>
                                        <div class="img-pack">
                                           <img src="images/boutique/packs/<?= $data['img'] ?>"/>
                                        </div>

                                        <div class="btn-pack">
                                           <a href="#ouvert" ><img src="images/boutique/commander-pack.png" onclick="prixProduit(<?= $data['prix']?>,'<?= $data['nom'] ?>')"></a>
                                        </div>
                                    </div>
                                    <div class="pack-price">
                                            <span><?= $data['prix'] ?>&euro;</span>
                                    </div>

                                </div>
                                <?php
                                echo '</td>';

                                if($i == 1 ){
                                    echo '</tr><tr>';
                                    $i = 0;
                                }
                                
                                $i++;
                            }
                        ?>
                        </table>
                    </section>

                    <!-- formulaire à renseigner pour accèder au paiement-->
                    <table width="100%" border="0" cellpadding="2">
                            <tr>   
                                <td> 
                                                                        
                                    <div>

                                        <div id="ouvert" class="modalDialog">
                                            <div>
                                                <a href="#fermer" title="Fermer" class="fermer">X</a>
                                                <div class="widget-content clearfix">
                                                    <div class="profil_cadre_block profil_cadre_block_rapide">

                                                        <div class="profil_cadre_centre" style="background-color: #fcf8e3;
                                                            border: 1px solid #fbeed5;
                                                            -webkit-border-radius: 4px;
                                                            -moz-border-radius: 4px;
                                                            border-radius: 4px;margin-left:0px;
                                                            background-color: #D5D3D0; ">

                                                            <form name="paiement" action="https://www.klikandpay.com/paiement/check.pl#ouvert" method="POST" accept-charset="UTF8" target="_blank">
                                                                <div id="form-msg"><strong><br>Veuillez renseigner les champs ci-dessous pour accèder à l'étape suivante :</strong>
                                                                </div><br>

                                                                    <div>


                                                                        <div class="form-group form-payment">
                                                                            <input class="form-control" value="" type="text" id="name" name="NOM" placeholder="Votre nom" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre nom">
                                                                        </div>
                                                                        <div class="form-group form-payment">
                                                                            <input class="form-control" value="" type="text" id="name" name="PRENOM" placeholder="Votre prénom" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre prénom">
                                                                        </div>
                                                                        <div class="form-group form-payment">
                                                                            <input class="form-control" value="" type="text" id="" name="ADRESSE" placeholder="Votre adresse" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre adresse"><br>
                                                                        </div>
                                                                        <div class="form-group form-payment">
                                                                            <input class="form-control" value="" type="text" id="cp" name="CODEPOSTAL" placeholder="Votre code postal" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre code postal">
                                                                        </div>
                                                                        <div class="form-group form-payment">
                                                                            <input class="form-control" value="" type="text" id="ville" name="VILLE" placeholder="Votre ville" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre ville">
                                                                        </div>
                                                                        <div class="form-group form-payment">
                                                                            <select name="PAYS" id="pays" class="form-control" required >
                                                                                <option value="">Votre Pays</option>
                                                                                <option value="BE">Belgique</option>
                                                                                <option value="CA">Canada</option>
                                                                                <option value="LU">Luxembourg</option>
                                                                                <option value="CH">Suisse</option>
                                                                                <option value="FR">France Métropolitaine</option>
                                                                                <optgroup label="DOM-COM">
                                                                                    <option value="MQ">Martinique</option>
                                                                                    <option value="GP">Guadeloupe</option>
                                                                                    <option value="GF">Guyane</option>
                                                                                    <option value="RE">La Réunion</option>
                                                                                    <option value="YT">Mayotte</option>
                                                                                    <option value="PM">St Pierre et Miquelon</option>
                                                                                    <option value="BL">St Barthélémy</option>
                                                                                    <option value="SM">St Martin</option>
                                                                                    <option value="WF">Wallis et Futunua</option>
                                                                                    <option value="PF">Polynésie Française</option>
                                                                                    <option value="NC">Nouvelle Calédonie</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group form-payment">
                                                                            <input name="TEL" type="tel" value="" placeholder="N° de Téléphone" class="form-control" required="" data-rule-digits="true" data-rule-required="true" data-msg-required="Merci de renseigner votre N° de Téléphone" ><br>
                                                                        </div>
                                                                        <div class="form-group form-payment">
                                                                            <input class="form-control" value="" id="email" type="email" name="EMAIL" placeholder="Votre adresse email" required="" data-rule-required="true" data-rule-email="true" data-msg-required="Merci de renseigner votre email" data-msg-email="Merci de renseigner une adresse email valide"><br>
                                                                        </div>
                                                                        <input type="hidden" name="ID" value="1374842866" /><br>
                                                                        <input type="hidden" id="montant" name="MONTANT" value=""/>
                                                                        <input type="hidden" id="detail" name="DETAIL" value=""/>


                                                                    </div>
                                   
                                                                     <div >           
                                                                        <button type="submit" name="B1" value="Envoyer" class="btn-theme btn-payment">Accèder au paiement</button>
                                                                    </div>
                                                                    <div><br>
                                                                    </div>
                                                          </form>        

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>              
                            <style>
                            .modalDialog {
                             display:none;
                                position: fixed;
                                font-family: Arial, Helvetica, sans-serif;
                                top: 0;
                                right: 0;
                                bottom: 0;
                                left: 0;
                                background: rgba(0,0,0,0.8);
                                z-index: 99999;
                                opacity:0;
                                -webkit-transition: opacity 400ms ease-in;
                                -moz-transition: opacity 400ms ease-in;
                                transition: opacity 400ms ease-in;
                                pointer-events: none;
                                
                            }
                                .modalDialog:target {
                                display:block;
                                opacity:1;
                                pointer-events: auto;
                            }

                            .modalDialog > div {
                                width: 400px;
                                position: relative;
                                margin: 10% auto;
                                padding: 10px 10px 10px 10px;
                                border-radius: 10px;
                                background: #fff;
                                background: -moz-linear-gradient(#fff, #999);
                                background: -webkit-linear-gradient(#fff, #999);
                                background: -o-linear-gradient(#fff, #999);
                            }
                            .fermer {
                                background: #606061;
                                color: #FFFFFF;
                                line-height: 25px;
                                position: absolute;
                                right: -12px;
                                text-align: center;
                                top: -10px;
                                width: 24px;
                                text-decoration: none;
                                font-weight: bold;
                                -webkit-border-radius: 12px;
                                -moz-border-radius: 12px;
                                border-radius: 12px;
                                -moz-box-shadow: 1px 1px 3px #000;
                                -webkit-box-shadow: 1px 1px 3px #000;
                                box-shadow: 1px 1px 3px #000;
                            }

                            .fermer:hover { background: #00d9ff; }
                            </style>    
                                                
                                    </div>
                                </td>
                            </tr>
                        </table>       

            </div>

        </div>

    </div>
 
</div><br>

    <?php include('include/footer_inc_voyance-tel.php'); ?>
