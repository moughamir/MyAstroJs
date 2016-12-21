<?php
    $source = 'horoscope-de-l-amour';
    $cs_url = 'horoscope-de-l-amour';
    $ipg_pubs = ['compatibilite-amoureuse-pour-les-femmes-amour', 'compatibilite-amoureuse-pour-les-hommes-amour'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope de l’amour gratuit en ligne | Myastro.fr</title>
    <meta name="description" content="Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond." />
    
    <script src="js/jquery-1.11.js"></script>
    <link rel="stylesheet" href="css/infobulle.css" />
        
    <?php include('include/header_inc.php'); ?>
    
    <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
    <style>
        .widget .form-part {
          background-color:#eb2692;
        }
        .widget #form-w .btn_button {
          background-color: #1871b9;
        }
    </style>
    
    <div class="container-fluid" itemscope >
        <!-- Main Content -->
        <div class="row-fluid">
            <div class="article-content">
                <header>
                    <h1 itemprop="headline">Faites confiance à lʼhoroscope de lʼamour</h1>
                    <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>
                        <div class="share-icons">
                <p itemprop="headline">Envie d’en savoir plus sur votre avenir sentimental ? Bonne nouvelle, vous trouverez ici de nombreuses manières de répondre à toutes vos questions pour prendre les bonnes décisions au bon moment au sein de votre couple, ou pour vous préparer à mettre fin à votre vie de célibataire endurci !</p>
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
                                <h2>L'horoscope de l'amour, pour savoir s'il est le partenaire de votre vie </h2>
                                <p>S'engager ou ne pas s'engager ? Voici une question qui a préoccupé et préoccupera des milliers d'hommes et de femmes. Aujourd'hui, l'horoscope de l'amour en ligne peut vous aider à faire les bons choix : pourquoi s'en priver ? Parce qu'il est souvent difficile de faire soi-même des choix importants, surtout dans le domaine sentimental, nous vous apportons des outils pour vous permettre d'y voir plus clair et de prendre la bonne décision.</p><br/>
                                <p>Les astres ont beaucoup à vous apprendre sur votre partenaire. En consultant l'horoscope de l'amour, vous découvrirez son vrai profil. Si les thèmes astraux ne suffisent pas à définir une personne, ils sont tout de même déterminants dans l'élaboration de la personnalité de quelqu'un. Et s'il existe quelque chose à laquelle on ne peut échapper, c'est bien sa propre naissance ! Alors découvrez vite qui se cache derrière celui ou celle que vous aimez.</p>
                            </div>
                            <div class="text-justify">
                                <h2>Testez votre compatibilité avec l'autre avec l'horoscope de l'amour en ligne</h2>
                                <p>Nos spécialistes de l'amour et des astres sont là pour vous aiguiller et vous permettre de ne jamais avoir de regret : vous hésitez à quitter votre compagnon ? Demandez de l'aide à l'un de nos voyants, il saura vous guider avec ses réponses personnalisées, adaptées à votre cas unique. Vous avez des doutes sur lui ? Vous obtiendrez des indices afin de savoir s'il vous trompe ou non. Célibataire depuis trop longtemps, vous vous demandez comment agir sur le destin afin de rencontrer enfin la bonne personne ? L'horoscope de l'amour gratuit vous apporte cette aide. </p><br/>
                                <p>Inutile de vous déplacer chez un voyant grâce à nos services : en quelques instants, vous trouvez toutes les réponses pour vous permettre d'avancer dans votre vie et de vous épanouir. Comparez votre personnalité astrale et celle de votre partenaire afin de comprendre quels sont les aspects qui vous rassemblent, et sur quels autres vous vous séparez : cela vous permettra de mieux appréhender votre relation et de mieux gérer les conflits. Parce qu'on gère mieux une situation en en connaissant tous les tenants et aboutissants, consultez l'horoscope de l'amour pour ne plus jamais être pris à dépourvu et savoir comment réagir dans la vie de tous les jours.</p>
                            </div><br />
                        </div>

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
        
    <?php include('include/footer_inc_horoscope_amour.php'); ?>
        
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>

