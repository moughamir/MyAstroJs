<?php
/* 
    ------------------------------------------------------------
    --      DRI POST-MAIL = voyance-amour-16 = AFFIL BASE     --
    ------------------------------------------------------------
    Created on : 13 juin 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
                 Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
include('include/process-dri-postmailing.php');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
    <title>MyAstro - Voyance Amour 2016</title>
    
    <meta name="robots" content="noindex,nofollow" />
    
    <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />

    <link rel="stylesheet" type="text/css" href="css/voyance-amour-16.css">
       
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
          
</head>

<body>
        <header class="SiteHeader">
            <div class="PageWrapper small-header">
                <span class="SiteLogo"></span>
                <h1 class="DescText-Title title-page medium-hidden large-hidden">
                    <span>voyance</span>&nbsp;<span>Amour</span>
                </h1>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper grid-2-tiny-1-small-1 flex-container-grid">
                <div class="ContentBand-Column">
                    <div class="TextContent">
                        <header class="ContentBand-ColumnHeaderp tiny-hidden small-hidden">
                             <h1 class="DescText-Title title-page margin-title ">
                                <span>voyance</span>&nbsp;<span>Amour</span>
                            </h1>
                            
                        </header>
                        <article class="DescText bloc-visage">
                            <div class="DescText-Content bloc-blanc">
                               <p class="txtright">Marie, voyante professionnelle</p>
                                <p>Parce qu’il est fait d’autant de moments intenses nous coupant le souffle, que de périodes difficiles où l’on a l’impression que rien ne va, l’amour nous prend aux tripes et au cœur. C’est parce que l’amour occupe une place si importante dans la vie de chacun, qu’il est à l’origine de bien d’interrogations, de doutes, de remises en questions, de choix à faire.</p>
                                <p>C’est pour cela que je vous propose mon aide. Au-delà de son aspect divinatoire qui vous apportera toutes les réponses que vous souhaitez, la voyance vous permet d’y voir plus clair sur votre situation sentimentale, de faire le point sur vous-même, sur la personne qui occupe votre esprit, et vous donne toutes les armes en main pour faire les bons choix et prendre les meilleures décisions. </p>
                                <p>Parce que nous méritons tous de connaitre le bonheur amoureux.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="ContentBand-Column Form blocs-rappel">
                    <article class="FormContainer noBg noPadding ombrePortee DRI">
                        <div class="DRI-Intro bloc-rappel-1">
                            <h1 class="DRI-Intro-Title">Faites-vous rappeler immédiatement</h1>
                            <h2 class="DRI-Intro-Text" >Nos voyants répondent à vos questions</h2>
                        </div>
                        <h1 class="DRI-Slogan bloc-rappel-2">Vos 10 premières minutes gratuites !</h1>
                        <div class="DRI-Form FormContainer-Fields  bloc-rappel-3">
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
                    <ul class="faq">
                        <li class="ico-formulaire">Je remplis le <br/>formulaire</li>
                        <li class="ico-standardiste">Je suis rappelé(e) <br/>immédiatement</li>
                    </ul>
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
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
<link href='https://fonts.googleapis.com/css?family=Parisienne|Ubuntu+Condensed|Open+Sans:300,700,400,400italic,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css" />
</html>
