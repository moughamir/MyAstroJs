<?php
    $source = 'horoscope-du-mois';
    $cs_url = 'horoscope-du-mois';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope du mois : Soulevez les doutes, vivez tranquillement | Myastro</title>
        <meta name="description" content="L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
    
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Que vous réserve l'avenir ? Découvrez votre horoscope du mois</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Quels changements se profilent pour vous dans un avenir proche ? Vous attendez une réponse à une demande importante ? Vous souhaitez rencontrer l'âme soeur et vous vous demandez si cette période vous est favorable ? Votre horoscope vous révèle les événements importants de votre vie pour les prochaines semaines. Grâce aux dons des voyants, décryptez rapidement les éléments-clés du mois prochain.</p>
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
                            <!-- Texte -->
                            <div>
                                <div class="text-justify"> 
                                    <h2>Amour, santé, famille, décodez votre horoscope du mois gratuit</h2>
                                    <p>On se pose tous des questions par rapport à l'avenir. On aimerait savoir, par exemple, si une belle rencontre est prévue dans un avenir proche ou si le changement de travail envisagé est une décision judicieuse. Il existe aujourd'hui un moyen simple et efficace pour obtenir des réponses à ces questions. La voyance astrologique, ou l'étude des astres, vous dévoile l'avenir en quelques minutes à travers l'horoscope du mois. Sélectionnez simplement votre signe et découvrez en quelques clics votre thème astral pour connaître les grandes lignes de votre avenir proche.</p><br/>
                                    <p>Votre signe astral dépend du jour, du mois et de l'heure de votre naissance. A ce signe, il faut associer également votre ascendant qui a une influence importante sur votre vie. Vos traits de caractère, votre personnalité, vos goûts et vos aspirations forment une combinaison unique qui vous distingue des autres personnes. La voyance astrologique tient compte de toutes ces informations pour établir votre horoscope du mois. Vous bénéficiez ainsi d'une analyse fine et détaillée pour prendre les meilleures décisions en rapport avec votre avenir proche.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Les prévisions pour votre signe avec votre horoscope du mois</h2>
                                    <p>S'il y a bien un domaine important auquel l'horoscope ne manque jamais de répondre, c'est le domaine du coeur. Vous connaissez quelques problèmes de couple et vous aimeriez savoir s'ils vont s'arranger dans un avenir proche ? Vous êtes en recherche de l'âme soeur ? Vous venez de faire une rencontre et souhaitez savoir si c'est la bonne personne ? Les voyants attachent une importance toute particulière au domaine amoureux. Grâce à votre horoscope du mois gratuit, découvrez vite si votre coeur sera comblé ce mois-ci.</p><br/>
                                    <p>Un autre domaine particulièrement sensible est le domaine financier. L'argent est une énergie qui permet de vivre mieux, de se faire plaisir, mais aussi de partager et de combler ses proches. C'est pourquoi nous somme tous et toutes à l'affût de notre avenir financier. Allez-vous toucher une grosse somme ce mois-ci ? Est-ce le bon moment pour demander une augmentation à votre patron ? Découvrez sans plus attendre votre horoscope du mois gratuit pour le savoir, une bonne surprise vous attend peut-être dans les tout prochains jours.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php'); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_horoscope_mois.php'); ?>
    
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>

