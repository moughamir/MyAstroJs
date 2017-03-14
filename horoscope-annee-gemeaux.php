<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_gemeaux.xml');
    $ac_result = array();
    foreach( $xml1['desc'] as $s_cle => $s_value ){
        if ($s_cle === 'mes_conseils_pour_l\'année'){
            $s_titre = 'Mes conseils pour lʼannée';
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
        } else {
            $s_titre = ucfirst($s_cle);
        }
        $ac_result[$s_titre] = $s_value;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope <?= $annee;?> Gémeaux : Est-ce une bonne année pour vous ? | Myastro</title>
	<meta name="description" content="Signe Gémeaux : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Mon horoscope <?= $annee;?> Gémeaux</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Cette journée commence, et vous ne savez pas très bien comment lʼaborder… Une question vous taraude, un doute vous hante, ou vous êtes tout simplement curieux : heureusement, notre service dʼastrologie peut éclairer lʼhoroscope <?= $annee;?> gémeaux, pour tout savoir sur ce que votre avenir vous réserve. Allez-vous rencontrer le grand amour ? Quel tournant va prendre votre carrière ? Pour tout savoir, direction lʼhoroscope <?= $annee;?> gémeaux gratuit !</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>pan class="clearfix"></span>
                    
                    <!--  ************************ ici ****************************  -->
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-secondaire.php');?>
                        
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                                <div class="widget-title">
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Gémeaux</h4>
                                </div>
                                <img src="images_voyance/signes/gemeaux.png" class="signe" alt="Signe Gémeaux" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Quel horoscope en <?= $annee;?> pour les gémeaux ?</h2>
                                    <p>Troisième signe du zodiaque, le Gémeaux est sous la tutelle de la planète Mercure, et fait partie de cette zone que les astrologues nomment la duplicité de lʼair : voici exactement la caractéristique qui confère à tous les gémeaux une grande faculté dʼadaptation, et une infaillible souplesse. Dotés dʼun bon sens de la communication, dʼune nature souriante et attentive aux autres, les gémeaux sont un élément stabilisateur, et savent insuffler autour dʼeux une bonne humeur généreuse, au travail comme à la maison.</p><br/>
                                    <p>Adieu 2014, et bonjour <?= $annee;?> ! A la fin dʼune année, la tradition veut que lʼon émette des souhaits pour lʼannée qui commence : les fameuses résolutions. Seulement, toutes les décisions ne nous appartiennent pas, et les lecteurs assidus des astres le savent. Ainsi, notre équipe réunit les astrologues dʼaujourdʼhui les plus perspicaces, pour vous offrir au quotidien un horoscope <?= $annee;?> gémeaux pour femme ou un horoscope <?= $annee;?> gémeaux pour homme de grande qualité. Alors nʼhésitez plus à venir nous consulter !</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Disposer de toutes les clés grâce à mon horoscope <?= $annee;?> gémeaux</h2>
                                    <p>A la veille dʼun rendez-vous important comme une consultation à lʼhôpital ou un entretien dʼembauche, il peut sʼavérer utile de consulter son horoscope, pour savoir à quoi sʼattendre, et anticiper au mieux toutes les situations. Et pourquoi pas consulter votre horoscope <?= $annee;?> gémeaux gratuit sur une base quotidienne ? Après tout, chaque journée apporte son lot de surprises, face auxquelles il est toujours mieux dʼêtre bien préparé : cʼest la condition première pour savoir comment réagir, et prendre des décisions avisées quant à votre avenir.</p><br/>
                                    <p>Car il nʼest jamais simple de répondre aux grandes questions de la vie. Quand vais-je trouver lʼamour ? Comment vais-je vivre dans quelques semaines ou quelques mois ? Vais-je faire des rencontres intéressantes ? Vais-je réussir à atteindre mon but professionnel ? En vous donnant des pistes de réponses concernant toutes vos problématiques, lʼhoroscope <?= $annee;?> gémeaux pour homme ou lʼhoroscope <?= $annee;?> gémeaux pour femme vous ouvrent une fenêtre sur votre avenir. Pourquoi ne pas en profiter ? Petit coup de pouce ou grand soulagement, lʼhoroscope <?= $annee;?> gémeaux vous accompagne au quotidien. Humeur, amour, argent, travail, rencontres : nous vous livrons un concentré de justesse pour anticiper lʼavenir en toute sérénité !</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_horoscope_annee.php');?>