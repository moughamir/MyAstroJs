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
              <div class="promotion-special">Offre spécial</div>
              <h2 class="DRI-PromoTitle">Formulaire<span class="small">pour accéder aux:</span></h2>
              <div class="promotion-fivemin"><p hidden>5 minutes de tchat gratuit</p></div>
            </header>
            <div class="FormContainer overlay" id="form-overlay"></div>
            <article class="FormContainer">
              <form method="post">
                <div class="FormContainer-Fields">
                  <div class="FormField">
                    <input type="text" class="FormField-Input" name="prenom" placeholder="Mon prénom" value="<?= $prenom ?>" />
                  </div>
                  <div class="FormField"><input type="text" id="name" name="prenom" placeholder="Mon Prénom" class="FormField-Input" value="<?= $prenom;?>" required />
                  </div>
                    <!-- SUBMIT -->
                    <button class="Button" type="submit" name="demande_rappel">5 Min de Tchat GRATUITES</button>
                    </div>
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