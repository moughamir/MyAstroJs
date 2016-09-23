<?php
    $source = "voyance-tarot";
    $support = "tarot";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
	<meta charset="UTF-8" />
	<title>Tarot gratuit amour : Apprenez-en plus sur votre futur avec Myastro</title>
	<meta name="description" content="Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro." />
        
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
	<link rel="shortcut icon" href="favicon.ico" /> 
        
	<link rel="stylesheet" type="text/css" href="css/voyance-tarot-nat.css" />
	<link rel="stylesheet" type="text/css" href="css/tarot-responsive-nat.css" />
	<noscript>
            <link rel="stylesheet" type="text/css" href="css/noscript.css" />
	</noscript>
	<style>
            .infob-tel-w, .infob-email-w {
		opacity: 0;
		position: absolute; 
		width: 228px; padding: 15px; 
		background: #246BAD; 
		border-radius: 3px; box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
		font-size: 13px; color: #fff; 
		transform: scale(0) rotate(-12deg);
		transition: all 0.25s;
            }
            .infob-email-w {
		margin-top: -74px; 
		margin-left: -284px;
            }
            .infob-tel-w {
		margin-top: -94px; 
		margin-left: -284px;
            }
        </style>
        
        <!--[if IE 7]>
            <link id="lnkFontAwesomeIE7" href="framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="framework/fix-ie/html5.js"></script>
        <![endif]-->
        
        <?php include('include/header_inc.php'); ?>

        <div  class="voyance-tarot">
            <div class="container-fluid ninesixty" itemscope >
                <div class="article-content">
                    <!-- Main Content -->
                    <div class="row-fluid">
                        <header>
                            <h1 itemprop="headline" style="margin-bottom: 30px">Voyance tarot gratuit : Découvrez les prédictions des cartes</h1>
                        </header>
                        <span class="clearfix"></span>
                        
                        <div class="widget-t w-sponsors">
                            <div class="tarot-content">
                                <div class="tarot-left">
                                    <div class="widget-title first-title">
                                        <h2 class="h4">Tirez vos cartes</h2>
                                    </div>
                                    <div class="paquet">
                                        <div class="relative">
<?php
    for($i = 1; $i <= 12; $i++){
        switch($i){ // On met des attributs data pour la position de départ des elements
            case 1 :
            case 12 :
                $datapos = '-11px'; break;
            case 2 :
            case 11 :
                $datapos = '3px'; break;
            case 3 :
            case 10 :
                $datapos = '13px'; break;
            case 4 :
            case 9 :
                $datapos = '20px'; break;
            case 5 :
            case 8 :
                $datapos = '24px'; break;
            case 6 :
            case 7 :
                $datapos = '26px'; break;
        }
?>
                                            <img src="tarot/cartes/dos.png" class="tarot-dos tarot-<?= $i ?>" data-pos="<?= $datapos ?>" />
<?php } ?>
                                        </div>
                                    </div>
                                    <div class="widget-title second-title">
                                        <h2 class="h4">Votre tirage</h2>
                                    </div>
                                    <div class="donne">
                                        <div class="donneHandler">
                                            <?php for($i=1; $i<=5; $i++){ ?>
                                            <div class="pickHolder"></div>
                                            <?php } ?>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                
                                <!-- debut form -->
                                <div class="form-group tarot-right">
                                    <div class="widget-title vy-title">
                                        <h2 class="h4">Posez votre question de tarot gratuit</h2>
                                    </div>
                                    <div class="widget-t w-adv">
                                        <div id="form-w-t" class="widget-content clearfix">
                                            <div class="visible-part form-part">
                                                <?php include('include/forms/question_complete.php'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fin form -->
                                <div class="clearfix"></div>
                                <!-- Texte -->
                                <div  class="text-justify">
                                    <h2>Voyance tarot : Cartographie de mon avenir</h2>
                                    <p>La voyance fait appel à différentes techniques et méthodes dans l’objectif de répondre aux attentes et aux questions de tout un chacun. Il n’existe pas de manière plus efficace qu’une autre dans le monde de la divination.  Le tarot reste cependant un des outils de voyance le plus prisé et ce, depuis de nombreux millénaires.</p>
                                    <h2>Voyance tarot : Un art rigoureux aux réponses fiables et précises</h2>
                                    <p>Dans le milieu de la cartomancie, on s’accorde souvent à dire que le tarot est un jeu bavard, apte à révéler de multiple informations pour qui choisi de le consulter. Composé de 78 lames ou arcanes, le tarot de Marseille est LA référence en matière de cartomancie. Ses origines mystérieuses font remonter sa création à l’époque de l’Egypte antique mais aujourd’hui encore, sa genèse reste un mystère. Sa forme actuelle date du 16e siècle environ mais hormis différentes adaptations graphiques, le principe du tarot et sa composition n’ont jamais changé.</p><br/>
                                    <p>Les 78 cartes qui composent le tarot sont divisées en deux catégories : les arcanes mineurs et les arcanes majeurs. On compte 22 arcanes majeurs et 56 arcanes mineurs. Les lames majeures sont celles qui sont le plus fréquemment utilisées. Les 56 mineures quant à elles apportent principalement des précisions supplémentaires sur le tirage en cours.</p>
                                    <h2>Le tarot adapté à toutes les demandes</h2>
                                    <p>Il n’y a rien que ne puisse pas faire le tarot. Doté d’une symbolique puissante et d’une perspicacité sans pareil, le tarot n’exclut personne. Quelque soit la question, quelque soit le domaine évoqué, la réponse sera dans le tarot. My Astro vous propose d’appréhender la <strong>voyance tarot</strong> en fonction de vos attentes. Directement par téléphone avec un des cartomanciens de l’équipe ou directement en ligne dans la rubrique tarot gratuit par exemple.</p><br/>
                                    <p>Chaque tirage réalisé sur le site My Astro est étudié par un tarologue qui n’hésitera pas à mettre ses dons à disposition pour plus d’approfondissement. Vous devez toujours avoir le choix d’accéder au type de voyance qui vous correspond et ce, qu’importent les motifs de votre demande.</p>
                                    <h2>Le tarot : Un outil fiable au service du voyant</h2>
                                    <p>La <strong>voyance tarot</strong> à su faire ses preuves tout au long de son Histoire. Toujours fidèle aux attentes qu’on a de lui, c’est ce sentiment de proximité que My Astro souhaite  mettre en avant. Site référent en matière de voyance sur le web, My Astro, tout comme le tarot, s’adapte et s’organise autour de vos attentes.</p><br/>
                                    <p>Le tarot peut s’utiliser en complément d’un autre support de prédiction ou bien en complément d’un don de médiumnité par exemple. Tout comme l’avenir est un tableau composé de multiples variables, la voyance est un art divinatoire pluriel selon les préférences, les attentes et les croyances de chacun.</p>
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
            </div>
        </diV>

        <?php include('include/footer_inc_voyance.php'); ?>

<script src="js/tarot-gratuit.js"></script> 
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script> 