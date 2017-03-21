<?php
    $annee = date('Y');    
        
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_belier.xml');
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
        <title>Horoscope <?= $annee;?> bélier : Amour, santé et travail | Myastro</title>
	<meta name="description" content="Signe Bélier : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope <?= $annee;?> Bélier</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Lʼhoroscope est une pratique divinatoire basée sur lʼastrologie. Il sʼagit dʼun ensemble de prédictions issues de lʼétude de la position des planètes dans le système solaire. A travers lʼhoroscope, il est possible de prédire des événements individuels ou collectifs sur une durée précise. Si vous êtes né(e) entre le 20 mars et le 20 avril, prenez connaissance de lʼhoroscope <?= $annee;?> bélier gratuit afin dʼavoir une idée précise sur les grandes tendances de lʼannée.</p>
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
                            <aside class="widget w-pictures">
                                <div class="widget-title">
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Bélier</h4>
                                </div>
                                <img src="images_voyance/signes/belier.png" class="signe" alt="Signe Bélier" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Les tendances sentimentales et professionnelles de mon horoscope <?= $annee;?> bélier</h2>
                                    <p>Les célibataires du signe bélier profiteront de lʼannée <?= $annee;?> pour faire de belles rencontres. Il faudra faire preuve de patience car plusieurs personnes se succéderont avant que le bon partenaire se dévoile. Pour les personnes en couple, la période hivernale sera très romantique. Lʼhoroscope <?= $annee;?> belier femme prédit que le chant des oiseaux du printemps donnera une grande inspiration qui fera naître lʼenvie de sʼengager. Si vous êtes de sexe masculin, l’horoscope <?= $annee;?> bélier homme révèle que vous aurez envie de projets à long terme ou dʼun voyage avec votre bien-aimé afin de sortir de votre zone de confort. Pour mieux surmonter cette étape, il faudra écouter votre cœur plutôt que votre raison.</p><br/>
                                    <p>Professionnellement, le bélier passera un cap important au cours de lʼannée <?= $annee;?>. Une situation très inattendue se réalisera et vous en tirerez beaucoup de satisfaction. Au début de lʼannée, la pression professionnelle sera intense. Mais celle ci se dissipera avec le temps. Peu à peu, vous parviendrez à mieux gérer votre temps et à prendre les bonnes décisions. Toutefois, lʼhoroscope <?= $annee;?> bélier homme invite à rester sur ses gardes car la réussite fera des envieux. Il faudra donc faire attention à son entourage et éliminez les rivaux. Lʼhoroscope <?= $annee;?> bélier révèle que vos efforts professionnels seront récompensés.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Les tendances financières et votre état de santé</h2>
                                    <p>Côté argent, lʼannée <?= $annee;?> ne vous réserve pas de mauvaises nouvelles. Elle débutera de la plus belle des manières avec dʼénormes retombées financières. Vos affaires prospéreront et feront naître de grands projets. Pensez à rationaliser vos dépenses et faites des économies pour vos vacances, car vous aurez besoin dʼun changement de décor. Toutefois, les difficultés ne manqueront pas ; notamment au deuxième trimestre. Vous serez confronté à certains imprévus financiers. Gardez le moral et servez-vous de vos économies pour résoudre ces problèmes.</p><br/>
                                    <p>Sur le plan de la santé, lʼhoroscope <?= $annee;?> bélier femme révèle que les natifs de ce signe jouiront dʼune santé de diable. Les sportifs seront en pleine forme et auront le vent en poupe. Cependant, il faudra se ménager et éviter les excès. Les personnes prédisposées aux douleurs rhumatismales et arthritiques doivent se montrer vigilantes. Au cours de lʼannée <?= $annee;?>, adoptez une bonne hygiène de vie, évitez les efforts violents et optez pour une alimentation énergétique.</p>
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

        <?php include('include/footer_inc_horoscope_annee.php');?>