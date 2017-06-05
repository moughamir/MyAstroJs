<?php
    $source = 'tarot-mensuel';
    $support = 'tarot';
    $question = 'AMOUR-CONJOINT';
    $fw_title = 'Tirage tarot du mois';
    
    $ipg_title = 'Tarot Mensuel';
    $ipg_pubs = [ 'astrologie-gratuite-tarot', 'compatibilite-amoureuse-feminine-tarot',
                  'horoscope-du-jour-tarot', 'horoscope-annee-tarot-mensuel' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tarot du mois gratuit : Votre tarot mensuel sur Myastro.fr</title>
        <meta name="description" content="Le Tarot est une technique de longue date qui permet d’interpréter des cartes tirées pour votre vie et pour répondre à vos questionnements." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
        <link rel="stylesheet" type="text/css" href="css/formulaire-top.css" />
            
        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Tarot du mois : Que vous réservent les 30 prochains jours ?</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Tirer les cartes du tarot pour connaître l’avenir est une pratique ancienne : on en trouve des traces écrites depuis plus de quatre siècles. Une question vous taraude ? Vous traversez une épreuve compliquée ? Vous avez un rendez-vous important, et vous aimeriez mieux le préparer avec tous les outils possibles ? Alors n’hésitez plus, et obtenez votre tarot du mois gratuit ici !</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>

                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php');?>	

                        <!-- main content -->
                        <div class="span6 main-content">
                            <section class="cat-widget h-cat-1">
                                <div class="cat-widget-title">
                                    <h3>CONSULTER VOTRE TAROT MENSUEL GRATUIT</h3>
                                </div>
                                <form name="tarot" action="afficher_tarot_mensuel.php" method="post" onsubmit="return check_prenom()">
                                    <br><label for="date">Votre prénom&nbsp;</label>
                                    <input style="width:97%;" type="text" name="prenom" size=20 maxlength=40 />
                                    <br><label for="date">Votre signe &nbsp;</label>
                                    <select name="signe">
                                        <option value="1">Bélier </option>
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
                                        <input type="submit" value="Commencer mon tirage" name="Valider" class="button" />
                                    </div>
                                </form>
                            </section>
                            <!-- texte -->
                            <div class="text-justify">
                                <h2>Le tarot du mois, les cartes révélatrices</h2>
                                <p>Les soixante dix huit lames du tarot sont porteuses de symboles forts, respectés et admirés à travers les époques et les continents. Grâce à un tirage savant, le tarot révèle des pistes de prédictions, et les réponses des cartes permettent d’envisager l’avenir tout en comprenant le présent. Vous avez une question précise à poser aux cartes ? Ou vous aimeriez avoir une vue globale sur ce qui vous attend ? N’hésitez pas à venir consulter ici votre tarot mensuel.</p><br/>
                                <p>Nos tarologues sont extrêmement qualifiés, et savent interpréter les associations de lames. Avec le tarot du mois, notre équipe vous offre une fenêtre sur votre avenir : vous disposez ainsi de tous les outils nécessaires pour prendre une décision ou vous préparer à un grand changement ! Avec le tarot du mois, aucun sujet n’est tabou : quel tournant va prendre votre carrière ? Etes-vous réellement faite pour ce métier ? Allez-vous rencontrer le grand amour ? Quels sont les jours propices pour régler un conflit ? Allez-vous perdre quelqu’un dans les semaines à venir ? Le conflit qui vous mine va t-il se résoudre ? Ce contrat en perspective est-il à votre avantage ? Est-ce le bon moment de conclure un marché ? Le tarot du mois répond à vos doutes et à vos angoisses.</p>
                            </div>
                            <div class="text-justify">
                                <h2>Plus de sérénité avec le tarot mensuel</h2>
                                <p>Le tarot mensuel divinatoire vous accompagne tout au long du mois, afin d’aborder l’avenir de manière plus sereine, et de comprendre le présent avec une nouvel angle d’approche. Notre tarot du mois gratuit garantit des prédictions justes et précises. Mais en plus, faire appel à votre tarot du mois vous permet de percevoir avec un nouvel oeil ce que le présent déroule pour vous. Parfois, il est impossible de prendre le recul nécessaire à une appréhension calme d’un présent mouvementée. Rien n’est plus difficile que de savoir déterminer ce qui est positif dans un présent compliqué. A cette fin, les cartes peuvent vous aider.</p><br/>
                                <p>Nous vous offrons chaque mois le meilleur de la tarologie. Grâce à notre service de tarot, vous avez toutes les clés en main pour continuer à avancer avec une belle énergie, pleine d’espoir et de sérénité. Pourquoi vous en priver ? Il vous suffit de venir sur notre site et de consulter votre tarot mensuel !</p>
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
    
<script language="javascript">
    function check_prenom(){
        if (document.tarot.prenom.value == ''){
            alert("Veuillez entrer votre prénom.");
            document.tarot.prenom.focus();
            return false;
        }
    }
    document.tarot.prenom.focus();
</script>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>