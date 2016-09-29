<?php
    $source = 'horoscope-du-jour';
    $cs_url = 'horoscope-du-jour';
    $ipg_title = 'HOROSCOPE DU JOUR';
    $ipg_pubs = ['compatibilite-amoureuse-pour-les-femmes-horoscope-jour', 'compatibilite-amoureuse-pour-les-hommes-horoscope-jour'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head>
        <title>Horoscope du jour : Comment appréhender votre journée ? - Myastro</title>
        <meta name="description" content="Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
        
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Votre horoscope du jour, pour tout savoir sur votre avenir immédiat</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Découvrez votre horoscope du jour gratuit et complet et ce que les astres vous réservent en consultant votre horoscope du jour en ligne ! Grâce à des prédictions claires et précises, vous savez en quelques instants tout ce qui va se dérouler dans votre futur immédiat et conditionner votre avenir. Vie sentimentale, relations professionnelles, personnalité générale de votre signe : vous bénéficiez d'une voyance de qualité pour gérer au mieux dans la journée les moments de chance et ceux plus délicats.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
                    
                    <!--  ************************ ici ****************************  -->
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php'); ?>
                        
                        <!-- main content -->
                        <div class="span6 main-content">
                            <!-- choix signe astro -->
                            <?php include('include/content-choix-signe.php'); ?>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Consultez votre horoscope du jour pour mieux connaître les forces actuelles de votre signe</h2>
                                    <p>Le net avantage de l’horoscope du jour réside dans sa réactivité par rapport aux événements qui vont se dérouler les prochaines heures. Vous avez par conséquent la garantie de ne pas faire de faux-pas et de toujours choisir la solution la plus pertinente, tout en respectant votre personnalité : personne ne s’attend à ce qu’un scorpion réagisse comme un cancer ou une balance ! Capitalisez sur les forces de votre signe et limitez l’impact de ses faiblesses.</p><br/>
                                    <p>Il est bien normal de vouloir savoir ce que la vie vous réserve, même à court terme. L’horoscope du jour répond parfaitement à cette attente, en mettant notamment l’accent sur l’amour et le travail. Quelle est la probabilité d’une nouvelle rencontre durable ? Comment améliorer votre relation de couple actuelle ? Comment renforcer votre position professionnelle ? Autant de questions complexes que les prédictions quotidiennes permettent d’éclaircir grâce à leur formulation sans la moindre ambiguïté.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Un horoscope du jour aux très nombreuses thématiques</h2>
                                    <p>Grâce à votre horoscope du jour gratuit, vous êtes informé(e) de manière rapide et efficace sur de nombreuses thématiques de votre signe astral, au-delà du triptyque amour-argent-travail. Vous pouvez ainsi prendre des décisions importantes sur votre santé en temps réel : grâce à des conseils avisés, vous vous sentez bien immédiatement. Utilisez également votre horoscope du jour en ligne pour créer les conditions d’une vie sociale harmonieuse avec vos amis et votre famille.</p><br/>
                                    <p>Très complet, votre horoscope pour aujourd’hui identifie même votre nombre de chance actuel, un atout bien pratique pour les jeux d’argent. Ces chiffres puissants vous permettent d’augmenter sans le moindre effort vos possibilités de gain dans les tirages faisant intervenir le hasard : il vous suffit de les reprendre dans vos combinaisons. Cette donnée peut également vous aider à fixer la date et l’heure d’un rendez-vous important, personnel ou professionnel. Profitez aussi de la citation et du clin d’œil du jour dédiés à votre signe pour améliorer votre vie et vos relations avec les autres au quotidien.</p>
                                </div>
                            </div><br/>
                            
                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid.php'); ?>
                            </section>
                        </div>
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include('include/footer_inc_horoscope_jour.php'); ?>
        
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>
