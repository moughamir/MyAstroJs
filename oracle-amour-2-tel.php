<?php
/* 
    -------------------------------------------
    --    oracle-amour-2-tel = AFFIL BASE    --
    -------------------------------------------

    Created on : 15 juillet 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
    include('include/process-dri.php');
    $draw = $_SESSION['cards'];
    $cards_dir = 'tarot/cartes/cartes-oracle-amour/';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>My Astro - Que va vous révéler l’Oracle de l’amour ?</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/oracle-amour-2-v2.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- pour la retro-compatibilité de l'effet "poker"  -->
        <script src="js/modernizr.custom.79639.js"></script>
    </head>
    <body>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <span class="SiteLogo"></span>
                <h1 class="PageLogo"><span>Oracle de l'amour</span></h1>
            </div>
        </header>
        
        <!-- -------------------------------------- TIRAGE DU TAROT -------------------------------------- -->
        <section class="WidgetTarot" id="cards-container">
            <div class="WidgetTarot-Result">
                <?php for($i=0;$i<5;$i++){ ?>
                <div class="WidgetTarot-Card place" data-number="<?= $i ?>" style="background-image: url('<?= $cards_dir.$draw[$i];?>')"></div>
                <?php } ?>
            </div>
        </section>
            
        <!-- -------------------------------------- FORMULAIRE -------------------------------------- -->
        <section class="ContentBand Form Principal PageWrapper600">
            <p class="p-result"><span><?= ucfirst($prenom) ?></span>, les cartes de l’Amour et de l’Exaltation sont très positives et présagent d’une évolution dans votre vie sentimentale, favorable à l’amour et à l’épanouissement. Mais attention <?= $prenom ?> ! Votre comportement actuel empêche cette évolution positive : les autres cartes révèlent votre blocage affectif ! Une remise en question est nécessaire. Car, en continuant ainsi, vous risquez de rater toutes les opportunités s’offrant à vous. Mais tout n’est pas figé <?= $prenom ?>, il est encore temps d’agir…</p>
            <article class="FormContainer DRI">
                <h1 class="DRI-Slogan">Vos 10 premières minutes <span style="text-transform:uppercase">gratuites</span> !</h1>
                <div class="DRI-Form FormContainer-Fields  bloc-rappel-3">
                    <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                        <p class="DRI-Sent">
                            Merci, votre demande a bien été prise en compte.<br/>
                            <strong>Un voyant vous recontactera dans quelques instants</strong>.
                        </p>                        
                    <?php } else { ?>
                        <?php if(!empty($err) || $state == 'MAIL_ERROR'){ ?>
                    <p class="alert alert-danger">
                        <b><i class="fa fa-warning"></i> Une erreur est survenue.</b><br>
                            <?php foreach($err as $msg){
                                echo $msg.'<br>';
                            } ?>
                    </p>
                        <?php } ?>
                    <form method="post">
                        <!-- ########## identification formulaire ########## -->
                        <input type="hidden" name="save_tel" value="1" />
                        <input type="hidden" name="tel_needed" value="1" />
                        <!-- ############################################### -->
                        <div class="FormField">
                            <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel ?>" required />
                        </div>
                        <div class="FormField">
                            <select name="pays" id="pays" class="FormField-Input" required>
                                <option value="" selected>Votre Pays</option>
                                <option value="BE">Belgique</option>
                                <option value="CA">Canada</option>
                                <option value="LU">Luxembourg</option>
                                <option value="CH">Suisse</option>
                                <option value="FR" selected>France Métropolitaine</option>
                                <optgroup label="DOM-TOM">
                                    <option value="MQ">Martinique</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GF">Guyane</option>
                                    <option value="RE">La Réunion</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="PM">St Pierre et Miquelon</option>
                                    <option value="BL">St Barthélémy</option>
                                    <option value="SM">St Martin</option>
                                    <option value="WF">Wallis et Futunua</option>
                                    <option value="PF">Polynésie Française</option>
                                    <option value="NC">Nouvelle Calédonie</option>
                                </optgroup>
                                <option value="ZZ">Autre</option>
                            </select>
                        </div>

                        <!-- SUBMIT -->
                        <input type="text" name="antisp" value="" style="display: none" />
                        <button class="FormContainer-Submit btn-rose" type="submit" name="demande_rappel" >Rappel Gratuit</button>
                    </form>
                    <?php } ?>
                </div>
            </article>
        </section>
                
        <footer class="SiteFooter">
            <div class="PageWrapper">
                <ul class="ReassuranceList">
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img star"></span>
                        <span class="ReassuranceList-Item-Txt">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img lock"></span>
                        <span class="ReassuranceList-Item-Txt">Consultations 100% <br/><strong>discrètes & anonymes</strong></span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img gift"></span>
                        <span class="ReassuranceList-Item-Txt">Étude personnalisée <br/><strong>par mail sous 24h</strong></span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img trophy"></span>
                        <span class="ReassuranceList-Item-Txt">My Astro leader <br/><strong>depuis 2007</strong></span>
                    </li>
                </ul>
            </div>
        </footer>
        
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arya' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700,300" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
