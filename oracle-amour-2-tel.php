
<?php 
session_start(); 
$prenom = $_SESSION['firstname']; 
?>

    <p id="form2-result-Tarot"><span><?= $prenom ?></span> : of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

    <article id="form2-form" class="FormContainer DRI ">
        <h1 class="DRI-Slogan">Vos 10 premières minutes <span style="text-transform:uppercase">gratuites</span> !</h1>
        <div class="DRI-Form FormContainer-Fields  bloc-rappel-3">
            <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                <p class="DRI-Sent">
                    Merci, votre demande a bien été prise en compte.<br/>
                    <strong>Un voyant vous recontactera dans quelques instants</strong>.
                </p>
            <?php } else { ?>
            <form method="post">
                <input type="hidden" name="method" value="telnum-save" />
                <input type="hidden" name="dri" value="http://myastro/oracle-amour-2-dri" />

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
