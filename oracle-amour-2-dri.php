<?php
/* 
    ---------------------------------------------------
    --   oracle-amour-2-dri POST-MAIL = AFFIL BASE   --
    ---------------------------------------------------

    Created on : 07 juillet 2016
    Author     : Guillaume Deschamps <guillaumed.kgcom@gmail.com>
*/
include('include/process-dri-postmailing.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>My Astro - Oracle Amour 2</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/oracle-amour-2-v2.min.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script src="js/modernizr.custom.79639.js"></script>
    </head>
    <body>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <span class="SiteLogo"></span>
                <h1 class="PageLogo"><span>Oracle de l'amour</span></h1>
            </div>
        </header>
        
        <section class="PageWrapper600">
            <div class="TextContent">
                <p class="DescText-Title-Legend">Lucas<br/>Expert voyant-tarologue</p>
                <div class="DescText-Content">
                    <p class="result-Tarot-text"><span><?= ucfirst($prenom) ?></span> : les cartes de l’Oracle de l’amour sont d’une profondeur et d’une puissance telles, que seule une étude et une interprétation détaillées permettent d’en capter les messages. </p>
                    <p>Ces messages qui s’offrent à nous comme une aide précieuse, pour construire la vie sentimentale à laquelle vous pensez actuellement.</p>
                    <p>Laissez-moi vous traduire les messages que les cartes de l’Oracle ont à vous transmettre.</p>
                </div>
            </div>
            
            <section class="FormContainer DRI ">
                <h1 class="DRI-Slogan">Vos 10 premières minutes <span style="text-transform:uppercase">gratuites</span> !</h1>
                <div class="DRI-Form FormContainer-Fields">
                    <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                        <p class="DRI-Sent">
                            Merci, votre demande a bien été prise en compte.<br/>
                            <strong>Un voyant vous recontactera dans quelques instants</strong>.
                        </p>
                    <?php } else { ?>
                    <form method="post">
                        <div class="FormField">
                            <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" value="<?= $tel ?>" class="FormField-Input" required />
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
            </section>
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
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arya' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700,300" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">