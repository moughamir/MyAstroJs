<?php
    if(isset($forfait) && !empty($forfait)){
        $n = $forfait['name'];
        $liste_forfaits = array_merge([$forfait['base']], $forfait['xfois']);
        $abo_codes = $abo_names = $f_prix = $f_names = array();
        foreach($forfait['abos'] as $id => $abo){
            $abo_codes[$id] = $abo['code'];
            $abo_names[$id] = $abo['name'];
        }
        foreach($forfait['xfois'] as $id => $f){
            $f_prix[$id]  = sprintf("%.2f", $f['prix']);
            $f_names[$id] = 'Forfait '.$f['tps'].' min '.strtoupper($n);
        }
?>
<div class="bloc-forfait-abonnement">
    <div class="need-help">
        <img src="images/abonnement/banniere_forfait.png" alt="Besoin d'aide ? Appelez le 04 82 53 71 59" />
    </div>
    <div class="bloc-forfait">
        <div class="title-forfait widget-title">
            <h3>Les forfaits</h3>
        </div><br>
        <div class ="text-forfait">
            <h4>Prépayez et économisez !</h4>
            <p>
                Profitez de tarifs dégressifs grâce au forfait <span class="frt-name"><?= $n;?></span> avec votre voyant !<br>
                Fixez vous du temps selon votre budget !<br>
                <span class="forfait-cgu">Crédit de minutes valable pour une durée dʼun an, utilisable en plusieurs fois comme bon vous semble.<span>
            </p>
        </div>
        <div class="forfait-name">
            <img src="images/abonnement/<?= $n.'/'.$n;?>.png" />
        </div>
        <div class=" forfait-secure">
            <img src="images/abonnement/paiement-securise.png" />
        </div>
        <div class="tarifs-min">
            <ul>
            <?php foreach($liste_forfaits as $f){?>
                <li>
                    <span class="txt-nb-min"><?= $f['tps'] < 100 ? '&nbsp;&nbsp;' : '';?><?= $f['tps'];?> min</span>
                    <span class="pts-pts">.........<?= $f['prix'] < 1000 ? '..' : '';?></span>
                    <?= $f['prix'];?><sup>€</sup>&nbsp;&nbsp;&nbsp;
                    <span class="prix-ini"><?= $f['base'];?><sup>€</sup></span>
                </li>
            <?php } ?>
            </ul>
        </div> 
        <div class="tarifs-min btn-acheter">
            <ul>
                <li><a href="#ouvert" ><img src="images/abonnement/acheter.png" onclick="prixForfait()"></a></li>
                <li><a href="#ouvert"><img src="images/abonnement/acheter.png" onclick="methodePay(0)"></a> <span class="txt-pay">2x <span class="pay-nb-x">sans frais</span></span></li>
                <li><a href="#ouvert"><img src="images/abonnement/acheter.png" onclick="methodePay(1)"></a> <span class="txt-pay">3x <span class="pay-nb-x">sans frais</span></span></li>
                <li><a href="#ouvert"><img src="images/abonnement/acheter.png" onclick="methodePay(2)"></a> <span class="txt-pay">3x <span class="pay-nb-x">sans frais</span></span></li>
            </ul>
        </div>
    </div><!-- fin bloc-forfait -->
    <div class="bloc-abonnement">
        <div class="title-abonnement widget-title">
            <h3>Les abonnements</h3>
        </div><br>
        <div class ="text-abonnement">
            <h4>Parlez sans compter !<br> Choisissez un abonnement mensuel :</h4>
            <p><span class="abo-cgu">
                Abonnement mensuel dʼune durée dʼun an avec un voyant de la gamme <span class="frt-name"><?= $n;?></span> de votre choix.<br>
                Abonnement avec un engagement sur 12 mois en profitant de tarifs exceptionnels :<br>
            </span></p>
        </div>
        <div class ="offres offre1">
            <img src="images/abonnement/<?= $n.'/'.$n;?>-offre1.png" /><!--
         --><a href="#ouvert" onclick="offreAbo(0)"><img class="btn-cmd" src="images/abonnement/commander.png" /></a>
        </div>
        <div class ="offres offre2">
            <a href="#ouvert" onclick="offreAbo(1)"><img class="btn-cmd" src="images/abonnement/commander.png" /></a><!--
         --><img src="images/abonnement/<?= $n.'/'.$n;?>-offre2.png" />
        </div>
        <div class ="offres offre3">
            <img src="images/abonnement/<?= $n.'/'.$n;?>-offre3.png" /><!--
         --><a href="#ouvert" onclick="offreAbo(2)"><img class="btn-cmd" src="images/abonnement/commander.png" /></a>
        </div>
    </div><!-- fin bloc-abbonnement -->
    <!-- modale formulaire -->
    <table width="100%" border="0" cellpadding="2"><tr>
        <td><div><div id="ouvert" class="modalDialog"><div>
            <a href="#fermer" title="Fermer" class="fermer">X</a>
            <div class="widget-content clearfix">
                <div class="profil_cadre_block profil_cadre_block_rapide">
                    <div class="profil_cadre_centre">
                        <form name="paiement" action="test-infos-client.php#ouvert" method="POST" accept-charset="UTF8" target="_blank">
                            <div id="form-msg"><strong><br>Veuillez renseigner les champs ci-dessous pour accèder à lʼétape suivante :</strong></div><br>
                            <div>
                                <div class="form-group form-payment">
                                    <input class="form-control" value="" type="text" id="name" name="NOM" placeholder="Votre nom" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre nom" />
                                </div>
                                <div class="form-group form-payment">
                                    <input class="form-control" value="" type="text" id="name" name="PRENOM" placeholder="Votre prénom" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre prénom" />
                                </div>
                                <div class="form-group form-payment">
                                    <input class="form-control" value="" type="text" id="" name="ADRESSE" placeholder="Votre adresse" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre adresse" /><br>
                                </div>
                                <div class="form-group form-payment">
                                    <input class="form-control" value="" type="text" id="cp" name="CODEPOSTAL" placeholder="Votre code postal" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre code postal">
                                </div>
                                <div class="form-group form-payment">
                                    <input class="form-control" value="" type="text" id="ville" name="VILLE" placeholder="Votre ville" required="" data-rule-required="true" data-msg-required="Merci de renseigner votre ville">
                                </div>
                                <div class="form-group form-payment">
                                    <select name="PAYS" id="pays" class="form-control" required>
                                        <option value="">Votre Pays</option>
                                        <option value="BE">Belgique</option>
                                        <option value="CA">Canada</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="CH">Suisse</option>
                                        <option value="FR" selected>France Métropolitaine</option>
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
                                <input type="hidden" name="ID" value="1374842866" />
                                <input type="hidden" id="abonnement" name="ABONNEMENT" value="" />
                                <input type="hidden" id="extra" name="EXTRA" value="" />
                                <input type="hidden" id="montant" name="MONTANT" value="" />
                                <input type="hidden" id="detail" name="DETAIL" value="" />
                            </div>
                            <div>
                                <button type="submit" name="B1" value="Envoyer" class="btn-theme btn-payment btn-rose">Accèder au paiement</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div></div></div></td>
    </tr></table>
    <!-- fin modale formulaire -->
    
<script type="text/javascript">
    function formatNumber(nbr) {
        var result = NaN;
        if (typeof(nbr) == 'number'){
            var str = new String(nbr);
            var parts = str.split('.');
            result = parts[0] + '.' + (parts.length == 1 ? '00' : (parts[1] + '0').substring(0, 2));
        }
        return result;
    }

    function prixForfait(){
        document.forms["paiement"].action = "https://www.klikandpay.com/paiement/check.pl#ouvert";
        /* Correspondance nom du forfait => prix par l'id des éléments dans les deux tableaux */
        var prix = <?= sprintf("%.2f", $forfait['base']['prix']);?>;
        var detail = "Forfait <?= $forfait['base']['tps'].'min '.strtoupper($n);?>";

        tarif = formatNumber(prix);
        document.getElementById("montant").value = tarif;
        document.getElementById("detail").value = detail;
        document.getElementById("extra").value = "";
    }

    function offreAbo(abo){
        document.forms["paiement"].action = "https://www.klikandpay.com/paiement/checkabon.pl#ouvert";
        /* Correspondance nom de l'abonnement => code par l'id des éléments dans les deux tableaux */
        var codes = <?= json_encode($abo_codes);?>;
        var detail = <?= json_encode($abo_names);?>;

        var codeAbo = codes[abo];
        document.getElementById("abonnement").value = codeAbo;
        document.getElementById("detail").value = detail[abo];
    }

    function methodePay(mth){
        document.forms["paiement"].action = "https://www.klikandpay.com/paiement/checkxfois.pl#ouvert";
        /* Correspondance par l'id des éléments dans les tableaux*/
        var prix = <?= str_replace('"', '', json_encode($f_prix));?>;
        var detail = <?= json_encode($f_names);?>;
        var nbFois = ["2FOIS", "3FOIS", "3FOIS"];

        var tarif = prix[mth];
        tarif = formatNumber(tarif);
        document.getElementById("montant").value = tarif;
        document.getElementById("detail").value = detail[mth];
        document.getElementById("extra").value = nbFois[mth];
    }
</script>
<?php 
    } // fin si $forfait défini