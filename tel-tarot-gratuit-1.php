<?php session_start(); ?>
                                        <h3>Recevez votre étude personnelle par téléphone</h3>
                                        <!-- ########## identification formulaire ########## -->
                                        <input type="hidden" name="method" value="telnum-save" />
                                        <input type="hidden" name="dri" value="tchat" />
                                        <!-- ############################################### -->
                                        <div class="li-form">
                                            <textarea name="question" id="message" rows="8" cols="40" placeholder="Écrivez ici votre question avec le plus de détails possible. Pour plus de confidentialité, ne citez aucun nom."></textarea>
                                        </div>
                                        <div class="li-form">
                                            <label for="tel">Téléphone</label>
                                            <input type="tel" name="tel" id="tel" placeholder="Mon N° de téléphone" required />
                                            <span class="infob-tel-w" style="color:#000;">Vous serez rappelé par le voyant à ce numéro</span>
                                        </div>
                                        <div class="li-form selectpays">
                                            <label for="pays">Votre pays </label>
                                            <select class="cnt-right" name="pays" id="pays" required="">
                                                <option value="" selected="selected">Votre Pays</option>
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
                                        <h3>Un voyant vous appelera dès demain,<br />pour vous donner votre réponse en direct.</h3>
                                        <input class="btn_button btn-full-one" type="submit" name="valider" value="Accédez au tchat gratuit" />
                                        
                                        <?php include_once('include/conversion/adwords.php');?>
