<?php
    $source = isset($source) ? $source : 'horoscope-gratuit';
    $method = isset($method) ? $method : 'general-suscribe';
    $support = isset($support) ? $support : 'voyance';
    
    $question_default = [ 'code' => 'question_25', 'subject' => 'sentimental', 'text' => 'Testez votre couple', 'conjoint' => true ];
    
    $question = isset($question) ? $question : $question_default;
    $form_submit_text = isset($form_submit_text) ? $form_submit_text : 'Poser votre question';
?>
<form class="ajax">
    <input type="hidden" name="source" value="<?= $source ?>" />
    <input type="hidden" name="method" value="<?= $method ?>" />
    <input type="hidden" name="support" value="<?= $support ?>" />
    <input type="hidden" name="question_code" value="<?= str_replace('"', "'", json_encode($question)) ?>" />
    <div class="form-w-one">
        <input type="text" placeholder="Mon Prénom" id="name" name="prenom" required />
        <input type="text" placeholder="Son Prénom" name="conjoint" id="lover_name" />
    </div>
    <div class="form-w-two">
        <div>
            <label class="label-left">Je suis :</label>
            <select class="cnt-right" name="sexe" required>
                <option value="F">Une femme</option>
                <option value="M">Un homme</option>
            </select>
        </div>
        <div>
            <label>Ma date de naissance :<br></label>
            <select class="daten jour" name="jour" required>
                <option selected value="">Jour</option>
                <?php for($i=1;$i<=31;$i++){ ?>
                <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                <?php } ?>
            </select>
            <select class="daten mois" name="mois" required>
                <option selected value="">Mois</option>
                <option value="01">Janv.</option>
                <option value="02">Fev.</option>
                <option value="03">Mars</option>
                <option value="04">Avr.</option>
                <option value="05">Mai</option>
                <option value="06">Juin</option>
                <option value="07">Juil.</option>
                <option value="08">Aout</option>
                <option value="09">Sept.</option>
                <option value="10">Oct.</option>
                <option value="11">Nov.</option>
                <option value="12">Dec.</option>
            </select>
            <select name="annee" class="daten annee" required>
                <option selected value="">Année</option>
                <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="clearfix"></div>
        <div>
            <label class="label-left" >Pays :</label>
            <select class="cnt-right" name="pays" id="pays" required>
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
        <div>
            <input id="email" type="email" name="email" placeholder="Mon email" required>
            <span class="infob-email-w">Une étude personnalisée vous sera envoyée à cette adresse</span>
            <input id="tel" name="tel" type="tel" placeholder="Mon numéro de téléphone" required>
            <span class="infob-tel-w">Vous serez rappelé par le voyant à ce numéro</span>
        </div>
    </div>
    <div class="cguv">
        <label class="checkbox">
            <input type="checkbox" name="cguv" required checked />Jʼaccepte les conditions générales
        </label>
        <label class="checkbox">
            <input type="checkbox" name="partenaires" checked />Recevoir les offres des partenaires
        </label>
    </div> 
    <div>
        <input class="btn_button btn-full-one" type="submit" name="valider" value="<?= $form_submit_text ?>" />
    </div>
</form>


