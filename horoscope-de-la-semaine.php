<?php
    $source = 'horoscope-de-la-semaine';
    $cs_url = 'horoscope-de-la-semaine';
    $ipg_title = 'HOROSCOPE DE LA SEMAINE';
    $ipg_pubs = ['votre-personnalite-astrologique-horoscope', 'portrait-astrologique-feminin-horoscope'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope de la semaine : Pour une semaine réussie - Myastro</title>
        <meta name="description" content="Les semaines s'enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l'horoscope de la semaine de Myastro." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />

        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
    
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">L’horoscope de la semaine, pour tout savoir de son avenir proche</h1>
                        <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Le quotidien n’est pas toujours limpide et trop souvent,on se pose de multiples questions. Pour éviter d’accumuler les difficultés et les hésitations, il est conseillé de faire appel à des personnes compétentes qui pourront vous indiquer le chemin à suivre. Votre horoscope de la semaine gratuit vous assistera et vous permettra d’y voir plus clair pour résoudre tous vos tracas dans tous les domaines : argent, travail, amour.</p>
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
                                    <h2>Pour trouver le bon chemin, consultez votre horoscope de la semaine</h2>
                                    <p>Vous éprouvez des difficultés ? Pourquoi ne pas demander de l’aide auprès de professionnels de la voyance. Les astrologues vous indiquent grâce à l’étude de votre signe astral le chemin à suivre. A chaque instant, les astres occupent une position spécifique dans le ciel. Ce sont ces positions que va étudier l’astrologue. Votre horoscope hebdomadaire est basé sur votre signe de naissance. Grâce à  un horoscope de la semaine, vous pourrez régulièrement apprendre ce que l’avenir vous réserve et choisir avec discernement parmi les différentes options qui se présentent à vous.</p><br/>
                                    <p>Ces prévisions sont calculées pour chaque signe de manière sérieuse. Transits positifs ou négatifs sont mis en avant par l’astrologue qui établit des prévisions claires et une tendance astrale pour chacun des douze signes. Vous obtiendrez alors des conseils sûrs et personnalisés tout simplement. Et comme la voyance est là pour aider les personnes en difficulté et non pour les ruiner, l’horoscope hebdomadaire est gratuit.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Un horoscope de la semaine et plusieurs rubriques</h2>
                                    <p>Il n’y a pas qu’un seul domaine pour lequel on a besoin de conseils. Pour cette raison, votre horoscope hebdomadaire est composé de plusieurs rubriques : amour, travail, forme et famille. Pour savoir si l’homme que vous venez de rencontrer est le bon ou si vous allez avoir une augmentation, il vous suffit de lire la rubrique correspondante. Si vous avez besoin de plus amples renseignements, vous avez la possibilité de consulter votre compatibilité amoureuse ou une tirage de tarots.</p><br/>
                                    <p>Pour connaître l’avenir et être aidé au quotidien, la consultation de votre horoscope de la semaine est incontournable. Vous saurez quand agir pour réussir, qui fréquenter ou quand entamer des actions pour améliorer votre quotidien. Véritable outil prévisionnel, l’horoscope à 7 jours sera votre conseiller et deviendra rapidement indispensable. Trouverez-vous l’amour ? Le travail que vous désirez depuis si longtemps ? Ces questions et bien d’autres vont enfin trouver des réponses. Pour connaître l’avenir, il vous suffit de lire votre horoscope semaine et votre futur n’aura plus de secret pour vous.</p>
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
            
        <?php include('include/footer_inc_horoscope_semaine.php'); ?>
    
  <script src="js/formValidator.js"></script>
  <script src="js/infoBulle.js"></script>

