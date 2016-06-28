<?php
require_once(realpath('include/tools.php'));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Tarifs Forfait or - Myastro</title>
    <meta name="description" http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="css/forfait-abo.css" type="text/css" rel="stylesheet">
    
    <?php include('include/header_inc.php'); ?>

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

function prixForfait(){

    document.forms["paiement"].action = "https://www.klikandpay.com/paiement/check.pl#ouvert";
    /* les élements des 2 tableaux doivent correspondre forfait => prix */
    /*var prix = [160.00,300.00,410.00,500.00];*/
    var prix = 300.00;
    var detail = "Forfait 50 min OR";

    /*var tarif = prix[offre];*/
    tarif = formatNumber(prix);
    document.getElementById("montant").value = tarif;
    document.getElementById("detail").value = detail;
    document.getElementById("extra").value = "";
}

function offreAbo(abo){

    document.forms["paiement"].action = "https://www.klikandpay.com/paiement/checkabon.pl#ouvert";
    /* les élements des 2 tableaux doivent correspondre forfait => prix */
    var codes = ["52675F0BE4B0A86","6C8623700944A9C","BC6BEB2798E0ABF"];
    var detail = ["Abonnement offre1 OR","Abonnement offre2 OR","Abonnement offre3 OR"];

    var codeAbo = codes[abo];
    document.getElementById("abonnement").value = codeAbo;
    document.getElementById("detail").value = detail[abo];
}

function methodePay(mth){

    document.forms["paiement"].action = "https://www.klikandpay.com/paiement/checkxfois.pl#ouvert";
    /* les élements des 2 tableaux doivent correspondre forfait => prix */
    var prix = [600.00,825.00,1100.00];
    var detail = ["Forfait 100 min OR","Forfait 150 min OR","Forfait 200 min OR"];
    var nbFois = ["2FOIS","3FOIS","3FOIS"];

    var tarif = prix[mth];
    tarif = formatNumber(tarif);
    document.getElementById("montant").value = tarif;
    document.getElementById("detail").value = detail[mth];
    document.getElementById("extra").value = nbFois[mth];
}

</script>

<div class="container-fluid" itemscope >

    <!-- Main Content -->
    <div class="row-fluid">

        <div class="article-content">


                          <!--  ************************ contenu ****************************  -->
            <div class="row-fluid">    
                            
                <!-- Right sidebar -->
                <?php include('include/bloc-droit-principale.php'); ?>

                <!-- main content -->
                <div class="span6 main-content" style="background: #EEEEEE; padding:5px;border-radius: 10px;border:5px solid #3266aa">
                  <aside class="row-fluid">
                    <div class="bloc-forfait-abonnement">
                        <div class="need-help">
                                <img src="images/abonnement/banniere_forfait.png"/>
                         </div>
                        <div class="bloc-forfait">
                            
                            <div class="title-forfait widget-title">
                                <h3>les forfaits</h3>    
                            </div><br>
                            <div class ="text-forfait">
                                <h4>prépayez et économisez !</h4>
                                <p>Profitez de tarifs dégressifs grâce au forfait <span class="frt-name">or</span> avec votre voyant ! <br> Fixez vous du temps selon votre budget !
                                    <br> <span class="forfait-cgu">Crédit de minutes valable pour une durée d'un an, utilisable en plusieurs fois comme bon vous semble.<span></p>
                            </div>
                            <div class="forfait-name">
                                <img src="images/abonnement/or/or.png">
                            </div>
                            <div class=" forfait-secure">
                                <img src="images/abonnement/paiement-securise.png"/>
                            </div>
                            
                            <div class="tarifs-min">
                                <ul>
                                    <li><span class="txt-nb-min">&nbsp;&nbsp;50 min</span> <span class="pts-pts">...........</span> 300<sup>€</sup>&nbsp;&nbsp;&nbsp;
                                        <span class="prix-ini">325<sup>€</sup></span>
                                    </li>
                                    <li ><span class="txt-nb-min">100 min</span> <span class="pts-pts">...........</span> 600<sup>€</sup>&nbsp;&nbsp;&nbsp;
                                        <span class="prix-ini">650<sup>€</sup></span>
                                    </li>
                                    <li><span class="txt-nb-min">150 min</span> <span class="pts-pts">........... </span>825<sup>€</sup>&nbsp;&nbsp;&nbsp;
                                        <span class="prix-ini">975<sup>€</sup></span>
                                    </li>
                                    <li><span class="txt-nb-min">200 min</span> <span class="pts-pts">.........</span> 1100<sup>€</sup>&nbsp;&nbsp;&nbsp;
                                        <span class="prix-ini">1300<sup>€</sup></span>
                                    </li>
                                </ul>   
                            </div> 
                            <div class="tarifs-min btn-acheter">
                                <ul>
                                    <li><a href="#ouvert" ><img src="images/abonnement/acheter.png" onclick="prixForfait()"></a></li>
                                    <li><a href="#ouvert"><img src="images/abonnement/acheter.png" onclick="methodePay(0)"></a> <span class="txt-pay">2x <span class="pay-nb-x">sans frais</span></span></li>
                                    <li><a href="#ouvert"><img src="images/abonnement/acheter.png" onclick="methodePay(1)"></a> <span class="txt-pay">3x <span class="pay-nb-x">sans frais</span></span></li>
                                    <li><a href="#ouvert"><img src="images/abonnement/acheter.png" onclick="methodePay(2)"></a> <span class="txt-pay">3x <span class="pay-nb-x">sans frais</span></span></li>           
                                    </li>
                                </ul>   
                            </div> 

                        </div>
                        <div class="bloc-abonnement">
                            <div class="title-abonnement widget-title">
                                <h3>les abonnements</h3>
                            </div><br>
                            <div class ="text-abonnement">
                                <h4>parlez sans compter ! <br> choisissez un abonnement mensuel :</h4>
                                <p> <span class="abo-cgu">Abonnement avec un engagement sur 12 mois en profitant de tarifs exceptionnels:<br>
                                    Abonnement mensuel d'une durée d'un an avec un voyant de la gamme <span class="frt-name">or</span> de votre choix.</span></p>
                            </div>
                            <div class ="offres offre1"><img src="images/abonnement/or/or-offre1.png"><a href="#ouvert" onclick="offreAbo(0)"><img class="btn-cmd" src="images/abonnement/commander.png"></a>
                            </div>
                            <div class ="offres offre2"><a href="#ouvert" onclick="offreAbo(1)"><img class="btn-cmd" src="images/abonnement/commander.png"></a><img src="images/abonnement/or/or-offre2.png">
                            </div>
                            <div class ="offres offre3"><img src="images/abonnement/or/or-offre3.png"><a href="#ouvert" onclick="offreAbo(2)"><img class="btn-cmd" src="images/abonnement/commander.png"></a>
                            </div>
                        </div>
                    <div>
                            
                                   <!-- <div style="text-align:left;"><br><a href="#ouvert"><img id="tarifs-forfaits" style="margin-left:20px;width: 200px;" src="images/forfaits.gif" ></a><br></div>-->
                                    <!--<div style="text-align:left;"><br><a href="#ouvert"><img id="tarifs-forfaits" src="images/forfaits.gif" ></a><br></div>-->
                                        

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

                                                            <form name="paiement" action="test-infos-client.php#ouvert" method="POST" accept-charset="UTF8" target="_blank">
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
                                                                        <input type="hidden" id="abonnement" name="ABONNEMENT" value="" /><br>
                                                                        <input type="hidden" id="extra" name="EXTRA" value="" /><br>
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
                    </aside>
                </div>

                    <!-- Right sidebar -->
                <?php include('include/bloc-gauche-principale.php'); ?>
            </div>

        </div>
                  
        </div>
   </div>
</div>
    
    
   

    <?php include('include/footer_inc_forfait.php'); ?>
