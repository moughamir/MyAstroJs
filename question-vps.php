<?php
    // Page question-vps
    // destinée à être incluse via iframe sur voirpoursavoir.fr
    require_once(realpath('include/tools.php'));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Étude personnalisée - Partenariat Voir pour Savoir | Myastro</title>
    
        <meta name="robots" content="noindex,nofollow">
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
	
        <link rel="stylesheet" type="text/css" href="css/bootstrap.334.min.css" />
        <link href="css/structure-form-1.css" rel="stylesheet" />
        <link href="css/tarot-vps-1.css" rel="stylesheet" />
	
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="no-background">
        <div class="container-fluid">
            <section>
                <div class="row limited-container">
                    <article class="col-sm-6 fond-jaune" id="text" style="padding-bottom: 0">
                        <h2>Recevez votre étude personnalisée</h2>
                        <table><tr>
                            <td style="vertical-align: bottom">
                                <img src="images_landing/question-vps/voyant.png" alt="Viktor, voyant professionnel" />
                            </td>
                            <td style="padding-bottom: 20px">
                                <p>
                                    Amour, travail, argent, famille, amis : nous vivons quotidiennement des situations nous amenant à nous poser des questions, à douter, à s’inquiéter, à s’interroger sur quoi demain sera fait. Traverser des périodes difficiles est une chose normale, ainsi va la vie. Mais ce qui compte, c’est de trouver les réponses pour transformer ces moments délicats en un nouveau départ vers un horizon plus dégagé. Réalisée par un professionnel, votre étude personnalisée vous offre l’opportunité de mieux comprendre vos blocages actuels, de trouver ces solutions pour dépasser vos difficultés et de marcher d’un pas plus serein vers l’avenir.
                                </p>
                            </td>
                        </tr></table>
                    </article>
                    <article class="col-sm-offset-1 col-sm-5 fond-jaune" id="form-container">
                        <div class="alert alert-danger" style="display: none"><p></p></div>
                        <form class="form-horizontal">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="question-vps" />
                            <input type="hidden" name="method" value="voyance-landing" />
                            <input type="hidden" name="dri" value="dri-vps-tarot" />
                            <input type="hidden" name="support" value="voyance"/>
                            <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>"/>
                            <input type="hidden" name="affiliation" value="affilvps" />
                            <!-- ########## autres champs pré-remplis ########## -->
                            <input type="hidden" name="cguv" value="1" />
                            <!-- ############################################### -->
                            <div class="form-group">
                                <label for="prenom" class="col-sm-4 control-label">Prénom</label>
                                <div class="col-sm-8">
                                    <input name="prenom" id="prenom" type="text" class="" required />
                                </div>
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
	                    <div class="form-group date">
                                <label class="text-left col-sm-12">Date de naissance</label>
                                <div class="col-sm-12">
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
	                    </div>
                            <div class="form-group">
                                <label for="theme_id" class="col-sm-12">Thème de la question</label>
                                <div class="col-sm-12">
                                    <select name="theme_id" id="theme_id" required>
                                        <option value="" diabled selected="selected">Thème de la question</option>
                                        <optgroup label="Amour">
                                            <option value="question_1">Quand vais-je rencontrer l’amour ?</option>
                                            <option value="question_2">Quels sont ses sentiments pour moi ?</option>
                                            <option value="question_24">Mes sentiments sont confus, que dois-je faire ?</option>
                                            <option value="question_11">Ai-je encore un avenir avec lui/elle ?</option>
                                        </optgroup>
                                        <optgroup label="Argent">                          
                                            <option value="question_73">Vais-je gagner de l’argent ?</option>
                                        </optgroup>
                                        <optgroup label="Travail">
                                            <option value="question_4">Quel sera mon avenir professionnel ?</option>
                                            <option value="question_3">Quand vais-je trouver du travail ?</option>
                                        </optgroup>
                                    </select>
                                </div>
	                    </div>
                            <div class="form-group sonprenom" style="display: none">
                                <label for="son_prenom" class="col-sm-4 control-label">Son prénom</label>
                                <div class="col-sm-8">
                                    <input type="text" id="son_prenom" name="conjoint" />
                                </div>
                            </div>
	                    <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">E-mail</label>
                                <div class="col-sm-8">
                                    <input name="email" id="email" type="email" class="" required />
                                </div>
	                    </div>
	                    <div class="form-group">
                                <label for="tel" class="col-sm-4 control-label">Téléphone</label>
                                <div class="col-sm-8">
                                    <input name="tel" id="tel" type="text" class="" required />
                                </div>
	                    </div>
                            <div class="form-group">
                                <label for="pays" class="col-sm-4 control-label">Pays</label>
                                <div class="col-sm-8">
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
                            </div>
                            <button type="submit" id="submit-form" style="margin-top: 10px; margin-bottom: -40px" name="valider">Découvrir</button>
	                </form>
                    </article>
		</div>
            </section>
	</div><!-- End container-fluid -->
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.334.min.js"></script>
        <script src="js/formValidator.js"></script>
        
        <!-- #### TRACKINGS #### -->
        <?php include('include/remarketing/vps.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
        
    </body>
</html>