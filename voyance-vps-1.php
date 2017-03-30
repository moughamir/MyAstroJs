<?php
    require_once(realpath('include/tools.php'));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tirage de tarot - Partenariat Voir pour Savoir | Myastro</title>
    
        <meta name="robots" content="noindex,nofollow">
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
	
        <link rel="stylesheet" type="text/css" href="css/bootstrap.334.min.css">
        <link href="css/structure-form-1.css" rel="stylesheet">
        <link href="css/tarot-vps-1.css" rel="stylesheet">
	
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid">
            <header>
                <div class="row limited-container">
                    <div id="logo" class="col-md-6 col-sm-6 col-xs-6">
                        <img src="images_landing/tarot-vps-1/logo.png" alt="logo voir pour savoir" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h1>TIREZ 5 CARTES</h1>
                    </div>
                </div>
            </header>
            <section>
                <div class="row limited-container">
                    <article class="col-md-8 col-sm-8" id="tirage">
                        <div id="cards-container">
                            <?php for($i=1;$i<=22;$i++){ ?>
                            <div class="card notFlipped" data-card="<?= $i ?>"><img src="images_landing/tarot-vps-1/cardback.png"></div>
                            <?php } ?>
                        </div>
                        <div id="cards-result">
                            <?php for($i=1;$i<=5;$i++){ ?>
                            <div class="flipped-card" data-number="<?= $i ?>"></div>
                            <?php } ?>
                        </div>
                    </article>
                    <article id="form-container" class="col-md-4 col-sm-4 fond-jaune">
                        <h2>MES INFORMATIONS</h2>
                        <div class="alert alert-danger" style="display: none"><p></p></div>
                        <form>
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="tarot-vps-1" />
                            <input type="hidden" name="method" value="tarot-landing" />
                            <input type="hidden" name="dri" value="dri-vps-tarot" />
                            <input type="hidden" name="support" value="tarot"/>
                            <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>"/>
                            <input type="hidden" name="affiliation" value="affilvps" />
                            <!-- ########## autres champs pré-remplis ########## -->
                            <input type="hidden" name="cguv" value="1" />
                            <!-- ############################################### -->
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
	                        <input name="prenom" id="prenom" type="text" class="" required>
                            </div>
                            <div class="form-group gender-select">
                                <label class="" for="gender-f">
                                    <img src="images_landing/tarot-vps-1/woman.png" alt="♀"> Femme
                                    <input type="radio" name="sexe" id="gender-f" value="F" required>
                                </label>
	                        <label class="" for="gender-h">
                                    <img src="images_landing/tarot-vps-1/man.png" alt="♂"> Homme
                                    <input type="radio" name="sexe" id="gender-h" value="M">
                                </label>
	                    </div>
                            <label>Date de naissance</label>
	                    <div class="form-group date">
                                <select name="jour">
                                    <option value="" disabled selected>Jour</option>
                                    <?php for($i=1;$i<=31;$i++){ ?>
                                    <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                    <?php } ?>
                                </select>
                                <select name="mois">
                                    <option value="" disabled selected>Mois</option>
                                    <option value="01">Janvier</option>
                                    <option value="02">Février</option>
                                    <option value="03">Mars</option>
                                    <option value="04">Avril</option>
                                    <option value="05">Mai</option>
                                    <option value="06">Juin</option>
                                    <option value="07">Juillet</option>
                                    <option value="08">Août</option>
                                    <option value="09">Septembre</option>
                                    <option value="10">Octobre</option>
                                    <option value="11">Novembre</option>
                                    <option value="12">Décembre</option>
                                </select>
                                <select name="annee">
                                    <option value="" disabled selected>Année</option>
                                    <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php } ?>
                                </select>
	                    </div>
                            <div class="form-group">
                                <label for="question">Thème de la question</label>
                                <select name="theme_id" id="question" class="">
                                    <option value="" disabled selected></option>
                                    <optgroup label="Amour">
                                        <option value="1">Quand vais-je rencontrer l’amour ?</option>
                                        <option value="2">Quels sont ses sentiments pour moi ?</option>
                                        <option value="3">Mes sentiments sont confus, que dois-je faire ?</option>
                                        <option value="4">Ai-je encore un avenir avec lui/elle ?</option>
                                    </optgroup>
                                    <optgroup label="Argent">
                                        <option value="5">Vais-je gagner de l’argent ?</option>
                                    </optgroup>
                                    <optgroup label="Travail">
                                        <option value="6">Quel sera mon avenir professionnel ?</option>
                                        <option value="7">Quand vais-je trouver du travail ?</option>
                                    </optgroup>
	                        </select>
	                    </div>
	                    <div class="form-group">
                                <label for="email">E-mail</label>
	                        <input name="email" id="email" type="email" class="" required />
	                    </div>
	                    <div class="form-group">
	                        <label for="tel">Téléphone</label>
	                        <input name="tel" id="tel" type="text" class="" required />
	                    </div>
                            <div class="form-group">
                                <label for="pays">Pays</label>
                                <select name="pays" id="pays" required>
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
                            <button type="submit" id="submit-form" name="valider">Découvrir mon interprétation</button>
	                </form>
                    </article>
		</div>
            </section>
	</div><!-- End container-fluid -->
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.334.min.js"></script>
        <script src="js/tirage-cartes.js"></script>
        <script src="js/formValidator.js"></script>
        
        <!-- #### TRACKINGS #### -->
        <?php include('include/remarketing/vps.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
        
    </body>
</html>