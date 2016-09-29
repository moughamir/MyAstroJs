<?php
    $source = isset($source) ? $source : 'horoscope-gratuit';
    $method = isset($method) ? $method : 'general-suscribe';
    $support = isset($support) ? $support : 'voyance';
    
    $questions_default = array(
        'Amour' => array(
            [ 'code' => 'question_1', 'subject' => 'sentimental', 'text' => 'Vous en avez marre d’être seul(e)' ],
            [ 'code' => 'question_2', 'subject' => 'sentimental', 'text' => 'Est-ce qu’il/elle m’aime ?', 'conjoint' => true ],
            [ 'code' => 'question_24', 'subject' => 'sentimental', 'text' => 'Vous en aimez un(e) autre', 'conjoint' => true],
            [ 'code' => 'question_11', 'subject' => 'sentimental', 'text' => 'Il/Elle vous a quitté', 'conjoint' => true],
        ),
        'Argent' => array(
            [ 'code' => 'question_73', 'subject' => 'financier', 'text' => 'Vous attendez un investissement' ],
        ),
        'Travail' => array(
            [ 'code' => 'question_4', 'subject' => 'professionnel', 'text' => 'Vous attendez un changement professionnel' ],
            [ 'code' => 'question_3', 'subject' => 'professionnel', 'text' => 'Vous cherchez un emploi' ],
        )
    );
    
    $questions = isset($questions) ? $questions : $questions_default;
    
    $form_submit_text = isset($form_submit_text) ? $form_submit_text : 'Poser votre question';
?>
<div class="alert alert-danger" style="display: none"></div>
<form class="ajax">
    <input type="hidden" name="source" value="<?= $source ?>" />
    <input type="hidden" name="method" value="<?= $method ?>" />
    <input type="hidden" name="support" value="<?= $support ?>" />
    <input type="hidden" name="site" value="myastro.fr" />
    <input type="hidden" name="affiliation" value="naturel" />
    <div class="vt2">
        <label class="label-left">Ma question :</label>
        <select class="cnt-right cnt-qt" name="question_code" id="theme_id" required>
            <option value="" selected="selected">Choisissez un domaine</option>
            <?php foreach($questions as $optgroup => $options){ ?>
            <optgroup label="<?= $optgroup ?>">
                <?php foreach($options as $question){ ?>
                <option value="<?= str_replace('"', "'", json_encode($question)) ?>"><?= $question['text'] ?></option>
                <?php } ?>
            </optgroup>
            <?php } ?>
        </select>
    </div>
    <div class="vt2">
        <label class="label-left">Je suis :</label>
        <select class="cnt-right" name="sexe" required>
            <option value="femme">Une femme</option>
            <option value="homme">Un homme</option>
        </select>
    </div>
    <div class="vt2 inp-txt">
        <input type="text" placeholder="Mon Prénom" id="name" name="prenom" required />
    </div>
    <div class="vt2 dn-part">
        <label>Ma date de naissance :<br></label>
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
    <div class="sonprenom" style="display: none;">
        <div class="vt2 inp-txt">
            <input type="text" placeholder="Son Prénom" name="conjoint" id="son_prenom" />
        </div>
        <div class="vt2 dn-part">
            <label>Sa date de naissance :<br></label>
            <select class="daten jour" name="jour_c" required>
                <option selected value="">Jour</option>
                <?php for($i=1;$i<=31;$i++){ ?>
                <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                <?php } ?>
            </select>
            <select class="daten mois" name="mois_c" required>
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
            <select name="annee_c" class="daten annee" required>
                <option selected value="">Année</option>
                <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="vt2 inp-txt">
        <input type="email" name="email" placeholder="Mon email" required />
        <span class="infob-email-w">Une étude personnalisée vous sera envoyée à cette adresse</span>
    </div>
    <div class="vt2 inp-txt">
        <input  name="tel" type="tel" placeholder="Mon numéro de téléphone" required />
        <span class="infob-tel-w">Vous serez rappelé par le voyant à ce numéro</span>
    </div>
    <div class="vt2">
        <label class="label-left" >Mon pays :</label>
        <select class="cnt-right" name="pays" id="pays" required>
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
    <div class="vt2 inp-txt">
        <textarea class="" rows="6" name="question_content" id="question" placeholder="Posez votre question en donnant le maximum d&#39;informations. Pour plus de confidentialité, ne citez aucun nom de personne." data-msg-required="Merci de préciser votre problème"></textarea>
    </div>
    <div class="cguv">
        <label class="checkbox">
            <input type="checkbox" name="cguv" required checked />Jʼaccepte les conditions générales
        </label>
        <label class="checkbox">
            <input type="checkbox" name="partenaires" checked />Recevoir les offres des partenaires
        </label>
    </div>
    <div class="vt2">
        <button class="btn_button btn-full-two" type="submit" name="valider"><?= $form_submit_text ?></button>
    </div>
</form>