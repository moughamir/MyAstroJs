<?php session_start(); 
$prenom = $_SESSION['firstname']; 
?>
                                        <p class="FormContainer-Slogan">Un nouveau cycle lunaire pour un nouveau départ dans votre vie</p>
                                        <p class="FormContainer-name"><?= $prenom ?></p>
                                        <p>Ce changement de cycle lunaire est synonyme de nouveautés pour vous. Pendant quelques jours, la période va être favorable et positive dans tous les domaines de votre quotidien. Avec ce nouveau cycle lunaire qui débute, c’est une opportunité qui se présente à vous de définitivement refermer la porte sur un passé que vous souhaitez oublier pour en ouvrir une nouvelle menant vers l’avenir que vous désirez. <br/><br/><?= $prenom ?>, la lune et ses influences positives sont avec vous, vous avez toutes les cartes en main pour agir. Alors passez à l’action ! Mais attention <?= $prenom ?>, agir ne veut pas dire se précipiter et faire mal les choses. Sous peine de commettre des erreurs irrémédiables… Les choix que vous allez faire ces prochains jours seront cruciaux…</p>
                                        
                                        <p class="FormContainer-Slogan-bloc">Pour en savoir plus  notre équipe de voyants est à votre écoute et vous rappelle gratutement !</p>
                                        
                                        
                                        <span class="ten-min-free"></span>
                                        
                                        <article id="form2-form" class="FormContainer DRI ">
                                            <div class="FormContainer overlay" id="form-overlay"></div>
                                            <h1 class="DRI-Slogan"><span>Vos 10 premières minutes gratuites !</span></h1>
                                            <div class="DRI-Form FormContainer-Fields">
                                                <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                                                    <p class="DRI-Sent">
                                                        Merci, votre demande a bien été prise en compte.<br/>
                                                        <strong>Un voyant vous recontactera dans quelques instants</strong>.
                                                    </p>
                                                <?php } else { ?>
                                                <form method="post">
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
                                                    <button class="FormContainer-Submit btn-rose" type="submit" name="demande_rappel" >me faire rappeler gratuitement</button>
                                                </form>
                                                <?php } ?>
                                            </div>
                                        </article>
