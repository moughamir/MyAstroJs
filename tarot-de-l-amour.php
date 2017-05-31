<?php
    $source = 'tarot-amour';
    $support = 'tarot';
    $question = 'AMOUR-CONJOINT';
    $fw_title = "Compatibilité amoureuse";
    $form_submit_text = "Faire le test";

    $ipg_title = 'Tarot de l’amour';
    $ipg_pubs = [
        'astrologie-gratuite-tarot', 'compatibilite-amoureuse-feminine-tarot',
        'horoscope-du-jour', 'horoscope-annee-tarot'
    ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tarot de l’amour gratuit : Votre avenir avec Myastro.fr</title>
        <meta name="description" content="Le Tarot est une pratique très ancienne qui permet de tirer des cartes et de les interpréter pour apporter des réponses à vos questionnements. Le tarot de l’amour aborde la question sentimentale." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
        <link rel="stylesheet" type="text/css" href="css/formulaire-top.css" />
        <style>
            .widget .form-part { background-color: #eb2692;}
            .widget #form-w .btn_button{ background-color: #1871b9;}
        </style>

        <?php include('include/header_inc.php'); ?>

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Tarot de l’amour et tarot amour : Quel est votre avenir sentimental </h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Vous êtes curieux de savoir ce que la vie vous réserve sur le plan sentimental ? Vous désirez savoir si votre relation va évoluer positivement ou négativement ? Vous désirez avoir la réponse à une question d’ordre affectif ? Référez-vous désormais au tarot de l’amour et tous vos soucis amoureux seront résolus. Grâce à la puissance des cartes, vos problèmes seront résolus et vos questions trouveront des réponses justes.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>

                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php'); ?>	

                        <!-- main content -->
                        <div class="span6 main-content">
                            <!-- Slider -->
                            <section class="pic-slider">
                                <h2 class="hidden">Slider images</h2>
                                <div class="wrapper">
                                    <section class="cat-widget h-cat-1">
                                        <!---------------- Début Iframe tirage tarot ---->
                                        <script language="javascript">
                                            function check_prenom() {
                                                if (document.tarot.prenom.value == ''){
                                                    alert("Veuillez entrer votre prénom.");
                                                    document.tarot.prenom.focus();
                                                    return false;
                                                }
                                            }
                                        </script>
                                        <form name="tarot" action="tarotdelamour/tarot_amour.php" method="post" onsubmit="return check_prenom()">
                                            <br>
                                            <label for="prenom">Votre prénom</label>
                                            <input style="width:97%;" type="text" id="prenom" name="prenom" size=20 maxlength=40 /><br>
                                            <label for="date">Votre signe</label>
                                            <select name="signe">
                                                <option value="1">Bélier</option>
                                                <option value="2">Taureau</option>
                                                <option value="3">Gémeaux</option>
                                                <option value="4">Cancer</option>
                                                <option value="5">Lion</option>
                                                <option value="6">Vierge</option>
                                                <option value="7">Balance</option>
                                                <option value="8">Scorpion</option>
                                                <option value="9">Sagittaire</option>
                                                <option value="10">Capricorne</option>
                                                <option value="11">Verseau</option>
                                                <option value="12">Poissons</option>
                                            </select>
                                            <div style="margin-top:10px;text-align:center;height:60px;">
                                                <input type="submit" value="Commencer mon Tarot" name="Valider" class="button" />
                                            </div>
                                        </form>
                                        <script language="javascript">
                                            document.tarot.prenom.focus();
                                        </script>
                                    </section>    
                                </div>
                            </section>

                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Le tarot de l’amour va changer votre vie affective</h2>
                                    <p>Inspiré du tarot de Marseille, le tarot de l’amour est le support divinatoire qui élucide les mystères de la vie sentimentale. Il permet d’étudier le passé, d’analyser le présent et de prédire le futur. Grâce à ce jeu divinatoire, le célibataire trouve son âme-sœur tandis que la personne en couple découvre les astuces qui permettent de vivre heureux en amour. Bien qu’il existe diverses manières de tirer le tarot de l’amour, nos pro-cartomanciens ont opté pour le tirage à cinq cartes. Quelles sont les particularités de ce tirage ?</p><br/>
                                    <p>Le tirage à cinq cartes est une consultation complète qui permet d’obtenir des prédictions à court, moyen et long terme. Il est plus précis que le tirage à trois cartes et se réalise en ligne. Après tirage, chaque carte est interprétée suivant les principes de la cartomancie. Ainsi, le premier arcane renseigne sur l’état affectif du consultant tandis que les deuxième, troisième et quatrième cartes révèlent respectivement les évolutions à court, moyen et long terme. Pour finir, le cinquième arcane dévoile la réponse à la question posée.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Le tirage du tarot de l’amour gratuit</h2>
                                    <p>Le tirage du tarot de l’amour gratuit est une consultation qui se réalise intégralement en ligne. Depuis votre domicile, vous n’aurez qu’à vous isoler dans une pièce calme pour réaliser ce tirage. Toutefois, il est important d’être dans le bon état d’esprit. Vous devez penser à une question précise et rester concentré pendant toute la durée du tirage. Restez calme, détendu et serein afin de faciliter le travail des esprits du monde invisible. Grâce au tirage en ligne, vous obtiendrez immédiatement des réponses ainsi que de précieuses prédictions amoureuses.</p><br/>
                                    <p>Toute consultation du tarot amour gratuit doit conduire à une prise de conscience. Prenez le temps d’analyser les prédictions afin de prendre les bonnes décisions. Ne vous laissez plus guider par votre instinct. Suivez plutôt les conseils et recommandations issues du tarot de l’amour. Si vous avez du mal à cerner les prédictions, profitez des services comme la voyance par téléphone pour débattre de vos résultats. En faisant bon usage du tarot d’amour, une nouvelle phase de votre vie va démarrer. </p>
                                </div>
                            </div><br/>

                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid.php');?>
                            </section>
                        </div>
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-tarot.php');?>
                    </div>
                </div>
            </div>
        </div>

    <?php include('include/footer_inc_tarot.php'); ?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>