<?php 
    session_start();
    $questions = array(
        'astro-arabe-arc' => ['code'=>'astro-arabe-arc','subject'=>'signe','text'=>"Votre signe astrologique arabe est l’arc"],
        'astro-arabe-chaine' => ['code'=>'astro-arabe-chaine','subject'=>'signe','text'=>"Votre signe astrologique arabe est la chaine"],
        'astro-arabe-couteau' => ['code'=>'astro-arabe-couteau','subject'=>'signe','text'=>"Votre signe astrologique arabe est le couteau"],
        'astro-arabe-coutelas' => ['code'=>'astro-arabe-coutelas','subject'=>'signe','text'=>"Votre signe astrologique arabe est le coutelas"],
        'astro-arabe-epee' => ['code'=>'astro-arabe-epee','subject'=>'signe','text'=>"Votre signe astrologique arabe est l’épée"],
        'astro-arabe-fronde' => ['code'=>'astro-arabe-fronde','subject'=>'signe','text'=>"Votre signe astrologique arabe est la fronde"],
        'astro-arabe-hache' => ['code'=>'astro-arabe-hache','subject'=>'signe','text'=>"Votre signe astrologique arabe est la hache"],
        'astro-arabe-lance' => ['code'=>'astro-arabe-lance','subject'=>'signe','text'=>"Votre signe astrologique arabe est la lance"],
        'astro-arabe-masse' => ['code'=>'astro-arabe-masse','subject'=>'signe','text'=>"Votre signe astrologique arabe est la masse de fer"],
        'astro-arabe-massue' => ['code'=>'astro-arabe-massue','subject'=>'signe','text'=>"Votre signe astrologique arabe est la massue paysanne"],
        'astro-arabe-poignard' => ['code'=>'astro-arabe-poignard','subject'=>'signe','text'=>"Votre signe astrologique arabe est le poignard"],
        'astro-arabe-poignardarabe' => ['code'=>'astro-arabe-poignardarabe','subject'=>'signe','text'=>"Votre signe astrologique arabe est le poignard arabe"],
    );
    $question = $questions['astro-arabe-'.$_SESSION['signe']['code']];
?>
                        <script>
                            $('.Wheel-Core').addClass('Signe-<?= ucfirst($_SESSION['signe']['code']) ;?>');
                        </script>
                        <header class="Wheel-Core-Title Form-Title">
                            <span>
                            <?= ucfirst($_SESSION['prenom']);?> vous êtes <span class="Signe-Name"><?= ucfirst(str_replace(' ', ' ', $_SESSION['signe']['nom']));?></span>
                            </span>
                        </header>
                        <div class="DescText-Content">
                            Recevez par mail l’interprétation gratuite de votre signe par nos spécialistes de l’astrologie arabe sous 24h.
                        </div>
                        <div class="FormContainer-Fields">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="astro-arabe-16" />
                            <input type="hidden" name="method" value="general-suscribe" />
                            <input type="hidden" name="site" value="myastro.fr" />
                            <input type="hidden" name="affiliation" value="affil_base" />
                            <input type="hidden" name="dri" value="astro-arabe-16-dri" />
                            <!-- ########## autres champs pré-remplis ########## -->
                            <input type="hidden" name="prenom" value="<?= $_SESSION['prenom'];?>" />
                            <input type="hidden" name="jour" value="<?= $_SESSION['jour'];?>" />
                            <input type="hidden" name="mois" value="<?= $_SESSION['mois'];?>" />
                            <input type="hidden" name="annee" value="<?= $_SESSION['annee'];?>" />
                            <input type="hidden" name="question_code" value="<?= str_replace('"', "'", json_encode($question)) ?>" />
                            <input type="hidden" name="cguv" value="1" />
                            <input type="hidden" name="partenaires" value="1" />  
                            <!-- ############################################### -->
                             <div class="Fields-Table">
                                <div class="Fields-Table-Row Free NoBorder">
                                    <label class="FormField-Label">Je suis</label>
                                    <div class="FormField radio">
                                        <div class="FormField-TableInputContainer fixed-2-col gender">
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span> Femme</label>
                                                <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span> Homme</label>
                                                <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Fields-Table">
                                <div class="Fields-Table-Row Free">
                                    <label for="email" class="FormField-Label">Mon adresse email</label>
                                    <div class="FormField">
                                        <input id="email" type="email" name="email" class="FormField-Input" required />
                                    </div>
                                </div>
                            </div>
                            <div class="Fields-Table">
                                <div class="Fields-Table-Row Free">
                                    <label for="tel" class="FormField-Label">Mon numéro de téléphone</label>
                                    <div class="FormField">
                                        <input type="tel" name="tel" id="tel" class="FormField-Input" required />
                                    </div>
                                </div>
                            </div>
                            <div class="Fields-Table">
                                <div class="Fields-Table-Row Free NoBorder">
                                    <label for="tel" class="FormField-Label">Mon pays</label>
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
                                </div>
                            </div>
                            <button class="FormContainer-Submit" type="submit" name="valider">Découvrir</button>
                        </div>
