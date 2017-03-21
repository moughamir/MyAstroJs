<?php
    $annee = date('Y');
    $cn_url = 'numeroscope-'.$annee;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Numéroscope <?= $annee;?> : Une fenêtre sur lʼavenir | Myastro</title>
	<meta name="description" content="Votre numéroscope pour <?= $annee;?> vous permettra de mieux cerner lʼannée et les comportements que vous devrez adopter au cours de celle-ci. Demandez le votre à Myastro." />
            
        <?php include('include/header_inc.php');?>
    
        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Numéroscope <?= $annee;?> : Que vous réserve le futur ?</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Votre numéroscope pour <?= $annee;?> vous permettra de mieux cerner lʼannée et les comportements que vous devrez adopter au cours de celle-ci. Demandez le votre à Myastro.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
<!-- ------------------------------- CONTENU ------------------------------- -->
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-secondaire.php');?>
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <!-- Choix numéro -->
                            <?php include('include/content-choix-numero.php');?>
                            <!-- Texte -->
                            <hr/>
                            <div>
                                <div class="text-justify">
                                    <p>Que vous réserve cette année <?= $annee;?> qui sʼannonce ? Quel tournant va prendre votre carrière ? Comment se porteront vos amours ? Etes-vous réellement faits lʼun pour lʼautre ? Allez-vous enfin rencontrer bientôt le grand amour de votre vie ? Pourrez-vous compter sur vos amis en cas de coup dur ? La réussite vous tend-elle les bras immédiatement ? Quʼen sera t-il de votre santé, ainsi que de celle de vos proches ? Pour tout savoir sur les grands traits de votre année <?= $annee;?>, faîtes confiance aux chiffres ! Et consultez régulièrement votre numéroscope <?= $annee;?>, pour anticiper lʼavenir tout en confiance et en beauté !</p>
                                    <h2>Un avenir radieux avec le numéroscope <?= $annee;?></h2>
                                    <p>Depuis la nuit des temps, les sages reconnaissent le pouvoir des chiffres : leur signification, leur prédiction. Avec la numérologie, les chiffres vous révèlent votre avenir, à partir de différents calculs liés à votre date de naissance, votre prénom, et bien dʼautres données encore. Ensuite, grâce à notre équipe constituée de numérologues confirmés qui mettent leur talent à votre service, nous vous proposons régulièrement votre numéroscope. Amour, travail, famille, santé : votre avenir nʼaura plus de secret pour vous !</p><br/>
                                    <p>Le numéroscope vous accompagne tout au long de lʼannée, et répond à vos doutes, vos interrogations ou encore vos incertitudes. Doutes futiles comme questions existentielles, détails périphériques ou éléments centraux : nous vous offrons des pistes de réflexion, des éventualités à prendre en compte, et nous vous proposons un avant-goût de ce que demain vous réserve. Ainsi, vous êtes en mesure de vous préparer au mieux aux multiples possibilités que recèle lʼavenir. De cette manière, vous êtes éclairé, et disposez des prédictions de numérologie : vous avez tous les outils en main pour prendre des décisions mieux avisées, pour vous orienter en toute lucidité. Grâce à la numérologie, vous continuez à avancer avec une belle énergie, pleine de sérénité et de curiosité.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Le meilleur numéroscope est à seulement un clic</h2>
                                    <p>Il nʼest pas aisé de trouver un numéroscope quotidien, hebdomadaire ou mensuel, et de très grande qualité. Notre service de numérologie est absolument irréprochable, et pour vous en convaincre, il vous suffit de lʼessayer ! Nos pratiquants professionnels de numérologie sont parmi les meilleurs de leur domaine, et savent mettre des mots exacts sur leurs ressentis, vous livrant ainsi des prédictions précises et justes.</p><br/>
                                    <p>La numérologie vous ouvre une fenêtre sur lʼavenir, et met des mots et des impressions sur les défis qui vous attendront demain. En lecture quotidienne ou pour une consultation occasionnelle, afin de préparer un rendez-vous déterminant, ou tout simplement pour se donner un coup de pouce, pour le plaisir ou pour le confort, votre profil numérologique vous accompagne comme vous le souhaitez !</p>     
                                </div>
                            </div>
                        </div>
                        <!-- Right sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
                </div>
            </div>
        </div>
            
        <?php include('include/footer_inc_numeroscope.php');?>