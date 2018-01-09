<?php
    include('include/process-dri.php');
    $targetContent = $_GET['p'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>La Grande Voyance 2018 - MyAstro</title>
    <link rel="stylesheet" href="css/grande-voyance-dri.css" type="text/css" />
    </head>
    <body class="dri">
      <section class="PageWrapper">
        <header class="PageHeader">
          <div class="PageTitle">
            <h1 class="title">La grande voyance 2018</h1>
            <h2 class="headline">nouvelle année, nouveau départ, nouvelle vie</h2>
          </div>
        </header>
        <article class="Container">
          <section class="DRI">
            <header class="DRI-Title">
              <div class="promotion-special">Offre spéciale</div>
              <h2 class="DRI-PromoTitle">Formulaire<span class="small">pour accéder aux:</span></h2>
              <div class="promotion-tenmin"><p hidden>1€ les 10 premières minutes</p></div>
            </header>
            <div class="FormContainer overlay" id="form-overlay"></div>
            <article class="FormContainer">
              <form method="post">
                <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                <p class="DRI-Sent">Merci, votre demande a bien été prise en compte.<br/>
                <strong>Un voyant vous recontactera dans quelques instants.</strong></p>
                <?php } else { ?>
                <?php if(!empty($err) || $state == 'MAIL_ERROR'){ ?>
                <p class="alert alert-danger">
                  <b><i class="fa fa-warning"></i> Une erreur est survenue.</b><br>
                  <?php foreach($err as $msg){
                    echo $msg.'<br>';
                    } ?> </p>
                <?php } ?>
                <div class="FormContainer-Fields">
                  <div class="FormField">
                                    <input type="text" class="FormField-Input" name="prenom" placeholder="Mon prénom" value="<?= $prenom ?>" />
                                </div>
                    <div class="FormField">
                        <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel ?>" required />
                    </div>
                        <div class="FormField">
                            <div class="FormField-TableInputContainer">
                              <div class="FormField-TableInputContainer-Cell">
                                <select name="pays" id="pays" class="FormField-Input" required>
                              <option value="" selected>Votre Pays</option>
                              <option value="BE">Belgique</option>
                              <option value="CA">Canada</option>
                              <option value="LU">Luxembourg</option>
                              <option value="CH">Suisse</option>
                              <option value="FR">France Métropolitaine</option>
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
                          
                    <!-- SUBMIT -->
                    <button class="Button" type="submit" name="demande_rappel">1€ les 10 premières minutes</button>
                    </div>
                 <?php } ?>
              </form>
            </article>
          </section>
          <div class="psychic"></div>
        </article>
      </section>
      
    <link href="//fonts.googleapis.com/css?family=Lobster|Open+Sans|Oswald" rel="stylesheet" />
    
        <script src="js/formValidator.js"></script>
    </body>
</html>