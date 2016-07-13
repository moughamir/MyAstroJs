
<?php 
session_start(); 
$prenom = $_SESSION['firstname']; 
?>

    <p id="form2-result-Tarot"><span><?= $prenom ?></span> : les cartes de l’Amour et de l’Exaltation sont très positives et présagent d’une évolution dans votre vie sentimentale, favorable à l’amour et à l’épanouissement. Mais attention <?= $prenom ?> ! Votre comportement actuel empêche cette évolution positive : les autres cartes révèlent votre blocage affectif !  Une remise en question est nécessaire. Car, en continuant ainsi, vous risquez de rater toutes les opportunités s’offrant à vous. Mais tout n’est pas figé <?= $prenom ?>, il est encore temps d’agir…</p>

    <article id="form2-form" class="FormContainer DRI ">
        <h1 class="DRI-Slogan">Vos 10 premières minutes <span style="text-transform:uppercase">gratuites</span> !</h1>
        <div class="FormContainer overlay" id="form-overlay"></div>
        <div class="DRI-Form FormContainer-Fields  bloc-rappel-3">
            <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                <p class="DRI-Sent">
                    Merci, votre demande a bien été prise en compte.<br/>
                    <strong>Un voyant vous recontactera dans quelques instants</strong>.
                </p>
            <?php } else { ?>
            <p class="alert alert-danger" style="display: none"></p>
            <form method="post">
                <input type="hidden" name="method" value="telnum-save" />
                <!-- ############################################### -->
                <div class="FormField">
                    <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" required />
                </div>
                <div class="FormField">
                    <select name="pays" id="pays" class="FormField-Input" required>
                        <option value="" selected>Votre Pays</option>
                        <option value="BE">Belgique</option>
                        <option value="CA">Canada</option>
                        <option value="LU">Luxembourg</option>
                        <option value="CH">Suisse</option>
                        <option value="FR" selected>France Métropolitaine</option>
                        <optgroup label="DOM-TOM">
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
                        <option value="ZZ">Autre</option>
                    </select>
                </div>

                <!-- SUBMIT -->
                <input type="text" name="antisp" value="" style="display: none" />
                <button class="FormContainer-Submit btn-rose" type="submit" name="demande_rappel" >Rappel Gratuit</button>
            </form>
            <?php } ?>
        </div>
    </article>
