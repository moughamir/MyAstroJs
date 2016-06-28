<?php
include("include/tracking-mail.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Tirage de tarot - Demande de rappel</title>   
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
	
        <link rel="stylesheet" type="text/css" href="css/bootstrap.334.min.css" />
        <link rel="stylesheet" type="text/css" href="css/structure-dri-tarot-vps.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/tarot-vps-1.css" />
    </head>
    <body>
	<div class="container-fluid">
            <header>
                <div class="row limited-container">
                    <div id="logo" class="col-md-2 col-sm-2 col-xs-2">
                        <img src="images_landing/dri-vps-tarot/logo2.png" alt="logo voir pour savoir" />
                    </div>
                    <div id="title" class="col-md-10 col-sm-10 col-xs-10">
                        <h1>Vous souhaitez une interprétation immédiate avec un voyant ?</h1>
                    </div>
                </div>
            </header>
            <section class="limited-container">
                <div class="row">
                    <h1 class="col-md-12 content-title">
                        Vos 10 premières minutes à seulement 1€ !
                    </h1>
		</div>
		<div class="row">
                    <article class="col-md-offset-1 col-xs-offset-0 col-md-6 col-sm-6 col-xs-6" id="form-container">
                        <div class="voyant-image">
                            <img src="images_landing/dri-vps-tarot/voyant.png" alt="Marc, voyant professionnel" />
                        </div>
                        <form action="" method="post">
                            <div class="fond-jaune" id="form">
<?php
    include("include/send-mail.php");
    if(!isset($_POST['demande_rappel']) && !isset($_SESSION['demanderappel']) && !empty($id_astro)){
?>
                                <div class="form-group">
                                    <label for="prenom">Prénom</label>
                                    <input name="prenom" id="prenom" type="text" value="<?php echo $prenom; ?>" required />
                                </div>
                                <div class="form-group">
                                    <label for="tel">Téléphone</label>
                                    <input name="tel" id="tel" type="text" pattern="(\+?\d[- .]*){10,18}" value="<?php echo $tel; ?>" required />
                                </div>
<?php } ?>
                            </div>
                            <input type="hidden" name="demande_rappel" value="rappel" />
                            <button type="submit" class="submit-form">SE FAIRE RAPPELER IMMÉDIATEMENT</button>
                        </form>
                    </article>
                    <article class="col-md-5 col-sm-5 col-xs-5 fond-jaune" id="text">
                        <h3>TIRAGE DU TAROT</h3>
                        <p>
                            Lorsque l’on parle de tarot, on pense tout de suite au célèbre tarot de Marseille, jeu de cartes divinatoires apparu en Europe au cours du 18ème siècle, et considéré aujourd’hui comme la référence en matière de cartomancie. Les cartes du tarot tirent leurs significations dans des cultures, des philosophies et des religions aussi diverses qu’anciennes, garantissant à ses messages une profondeur et une véracité déconcertantes. On dit des cartes du tarot qu’elles sont bavardes et qu’elles ont toujours des choses à dire. Et ce, quelque soit le sujet abordé, quelque soit la personne qui les consulte. Nous vous proposons de réaliser votre tirage du tarot pour découvrir tout ce que les cartes ont à révéler sur vous et sur tous les domaines de votre vie.
                        </p>
                    </article>
                </div>
		<div class="row" id="icones">
                    <div class="col-md-12">
                        <img src="images_landing/dri-vps-tarot/1.png">
                        <img src="images_landing/dri-vps-tarot/2.png">
                        <img src="images_landing/dri-vps-tarot/3.png">
                        <img src="images_landing/dri-vps-tarot/4.png">
                    </div>
		</div>
            </section>
	</div>
    
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.334.min.js"></script>
    </body>
</html>