<?php
/* 
    -----------------------------------------------------------
    --   DRI POST-MAIL = pleine-lune-avril-16 = AFFIL BASE   --
    -----------------------------------------------------------

    Created on : 21 avril 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
include('include/process-dri-postmailing.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>MyAstro - Ce que vous révèle la Pleine Lune</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/pleine-lune-16.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column">
                    <div class="TextContent">
                        <header class="ContentBand-ColumnHeader">
                            <span class="SiteLogo"></span>
                            <h1 class="DescText-Title"></h1>
                            <p class="DescText-Title-Legend">
                                MARIE,<br />
                                Consultante en astrologie Lunaire<br />
                                répondra à vos questions
                            </p>
                        </header>
                        <article class="DescText">
                            <div class="DescText-Content">
                                <p>La pleine lune est un événement incontournable de l’astrologie. Influençant nos émotions, nos sentiments et nos réactions, la pleine lune est une période idéale pour les relations amoureuses et les nouveaux départs. Belle et lumineuse, la pleine lune est un moment propice aux prises de décisions, aux passages à l’action et aux lancements de nouveaux projets. Amour, travail, argent, pendant quelques jours, la pleine lune influence directement les domaines de notre vie quotidienne, donnant à chacun d’entre nous, l’opportunité d’y voir plus clair et de s’engager sur un chemin plus sûr et serein.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="ContentBand-Column Form">
                    <article class="FormContainer DRI">
                        <div class="DRI-Intro">
                            <h1 class="DRI-Intro-Title">Faites-vous rappeler immédiatement</h1>
                            <h2 class="DRI-Intro-Text">Nos voyants répondent à vos questions</h2>
                        </div>
                        <h1 class="DRI-Slogan">Vos 10 premières minutes gratuites !</h1>
                        <div class="DRI-Form FormContainer-Fields">
                            <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                                <p class="DRI-Sent">
                                    Merci, votre demande a bien été prise en compte.<br/>
                                    <strong>Un voyant vous recontactera dans quelques instants</strong>.
                                </p>
                            <?php } else { ?>
                            <form method="post">
                                <div class="FormField">
                                    <input type="text" id="name" name="prenom" placeholder="Mon Prénom" class="FormField-Input" value="<?= $prenom ?>" required />
                                </div>
                                <div class="FormField">
                                    <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel ?>"required />
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
                                <button class="FormContainer-Submit" type="submit" name="demande_rappel" >Rappel Gratuit</button>
                            </form>
                            <?php } ?>
                        </div>
                    </article>
                    <div class="How">
                        <h2 class="How-Header">Comment ça marche ?</h2>
                        <ul class="How-Wizard">
                            <li class="How-WizardItem">
                                <span class="How-WizardItem-Img form"></span>
                                <span class="How-WizardItem-Txt">Je remplis le <br/>formulaire</span>
                            </li>
                            <li class="How-WizardItem">
                                <span class="How-WizardItem-Img phone"></span>
                                <span class="How-WizardItem-Txt">Je suis rappelé(e) <br/>immédiatement</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />