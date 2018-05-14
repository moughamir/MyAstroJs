<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Éliane</title>
    <link rel="stylesheet" href="css/eliane.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3,respond@1.4.2"></script>
    <![endif]-->
  </head>

  <body>
    <div class="App">
      <header class="App-header">
        <div class="container-960">
          <h1 class="App-title">La voyance d'<span>Éliane</span></h1>
          <div class="bloc-spe">
            Médium Tarologue
          </div>
        </div>
      </header>
      <section class="col-2 col-left">
        <aside class="bloc-psy">
          <img src="images_landing/eliane/psych.png" alt="Éliane Retois Tarologue" />
          <div class="bloc-psy--info">
            <p>Éliane Retois,<br/> Tarologue</p>
          </div>
        </aside>
      </section>
      <section class="col-2 col-right">
        <article class='bloc-form hidden' id="intro">
          <p>Bonjour,<br/>Je suis Éliane voyante intuitive, mais le mot médium doit davantage vous parler. Cartomancienne, j’ai régulièrement recours au tarot de Marseille pour m’apporter un supportphysique et approfondir mes visions et mes ressentis.<br/>            Voilà maintenant plus de trente années que me sont apparus mes dons de médiumnité pour la première fois.<br/> Une aventure qui m’a fait redécouvrir l’Humain, une notion que je place au centre de toutes mes consultations.<br/> Parce que sans
            vous mes visions n’ont plus aucune signification, vous êtes la clé de toute ma passion.</p>
          <p>Pour commencer</p>
          <h3>Choissiez votre domaine :</h3>
          <div>
            <ul>
              <li class="item-select">
                <button class="btn-select" data-ref='love'>
                  <i class='ico flaticon-heart'></i>
                  <span class='item-name'>L'amour</span>
                </button>
              </li>
              <li class="item-select">
                <button class="btn-select" data-ref='work'>
                  <i class='ico flaticon-case' ></i>
                  <span class='item-name'>Le travail</span>
                </button>
              </li>
              <li class="item-select">
                <button class="btn-select" data-ref='money'>
                  <i class='ico flaticon-bag' ></i>
                  <span class='item-name'>L'argent</span>
                </button>
              </li>
            </ul>
          </div>
        </article>
        <article class='bloc-form' id="theme">
          <header class="bloc-form--header">
            <div class="ico-container">
              <i class="ico flaticon-heart"></i>
              <span class='item-name'>L'amour</span>
            </div>
          </header>
          <div class="form-container hidden">
            <div class="form-input--group">
              <label for="theme">Thème de votre question</label>
              <select name="theme" class="input" id="input-theme">
                  <option value="love">amour</option>
                  <option value="work">travail</option>
                  <option value="money">argent</option>
                </select>
            </div>
            <div class="form-input--group">
              <label for="conjoint">Prénom de l'être aimé</label>
              <input type="text" class="input" name="conjoint" placeholder="Prénom de l'être aimé" />
            </div>
            <div class="form-input--text">
              <label for="demande">Précisez-moi votre demande :</label>
              <textarea class="input-textarea" class="input" name="message" placeholder="Précisez-moi votre demande..."></textarea>
            </div>
            <div class="form-input--btn">
              <button class="btn-send">Envoyer</button>
            </div>
          </div>
          <div class="form-container">
            <div class="form-headline">
              <p>Remplissez vite le formulaire afin que <br/> je puisse vous envoyer votre interprétation :</p>
            </div>
            <div class="form">
              <form class="ajax">
                <input type="hidden" name="site" value="MyAstro" />
                <input type="hidden" name="source" value="<?= $source;?>" />
                <input type="hidden" name="method" value="<?= $method;?>" />
                <input type="hidden" name="support" value="<?= $support;?>" />
                <input type="hidden" name="affiliation" value="<?= $affiliation;?>" />
                <input type="hidden" name="dri" value="<?= $dri;?>" />
                <input type="hidden" name="redirect_method" value="reload_form" />
                <input type="hidden" name="convertir" value="1" />
                <input type="hidden" name="tel_needed" value="0" />
                <input type="hidden" name="cguv" value="1" />
                <input type="hidden" name="partenaires" value="1" />
                <input type="hidden" name="gclid" value="<?= $gclid;?>" />
                <input type="hidden" name="pays" value="FR" />
                <input type="hidden" name="question_code" value="<?= $question;?>" />

                <div class="FormField radio">
                  <div class="FormField-TableInputContainer fixed-2-col gender">
                    <div class="FormField-TableInputContainer-Cell">
                      <label for="sexe-f" class="FormField-Label ">
                        <span class="ico-woman"></span>
                        une femme</label>
                      <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" /> </div>
                    <div class="FormField-TableInputContainer-Cell">
                      <label for="sexe-h" class="FormField-Label">
                        <span class="ico-man"></span>
                        un homme</label>
                      <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" /> </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="form-input--group">
              <label for="theme">Thème de votre question</label>
              <select name="theme" class="input" id="input-theme">
                  <option value="love">amour</option>
                  <option value="work">travail</option>
                  <option value="money">argent</option>
                </select>
            </div>
            <div class="form-input--group">
              <label for="conjoint">Prénom de l'être aimé</label>
              <input type="text" class="input" name="conjoint" placeholder="Prénom de l'être aimé" />
            </div>
            <div class="form-input--text">
              <label for="demande">Précisez-moi votre demande :</label>
              <textarea class="input-textarea" class="input" name="message" placeholder="Précisez-moi votre demande..."></textarea>
            </div>
            <div class="form-input--btn">
              <button class="btn-send">Envoyer</button>
            </div>
          </div>
        </article>
        <article class='bloc-form hidden' id="dri"></article>
      </section>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/g/lodash@4.17.4"></script>
    <script type="text/javascript" src="js/formValidator.js"></script>
    <script type="text/javascript" src="js/eliane.js"></script>
  </body>

</html>
