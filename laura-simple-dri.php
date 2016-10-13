<?php
/* 
    --------------------------------------------------------
    --      DRI POST-MAIL = LAURA-SIMPLE = AFFIL BASE     --
    --------------------------------------------------------
    Created on : 20 juillet 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
                 Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
include('include/process-dri.php');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
    <title>MyAstro - Laura 2016</title>
    
    <meta name="robots" content="noindex,nofollow" />
    
    <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />

    <link rel="stylesheet" type="text/css" href="css/laura-simple.min.css">
       
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
          
</head>

<body>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <span class="SiteLogo"><h1>My ASTRO</h1></span>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper grid-2-tiny-1-small-1-medium-1 flex-mobile">
                <div class="colG">
                    <div class="TextContent">
                        <header class="main-voyant"><h2 class="ContentBand-title">Faites-vous rappeler gratuitement<br/>par un voyant professionnel.</h2></header>
                        <article class="DescText">
                            <div class="DescText-Content">
                                <p><b>Une question</b> sur votre avenir ou sur celui d'un être cher&nbsp;?<br/>L'un de nos voyants reconnus vous recontacte dans les plus brefs délais et vous éclaire sur vos doutes.</p>
                                <p>Votre couple va-t-il durer&nbsp;? Votre travail va-t-il évoluer&nbsp;?<br/>Aurez-vous des enfants&nbsp;? N'hésitez pas à discuter de ce qui vous intéresse lors de votre séance de voyance par téléphone.</p>
                            </div>
                        </article>
                    </div>
                    
                    <div class="faq">
                        <h3>Comment ça marche&nbsp;?</h3>
                        <ul>
                            <li class="ico-formulaire">Je remplis le <br/>formulaire</li>
                            <li class="ico-standardiste">Je suis rappelé(e) <br/>immédiatement</li>
                        </ul>
                    </div>
                </div>
                <div class="colD Form">
                    <article class="FormContainer DRI">
                        <div class="DRI-list-voyants">
                            <h2>Nos voyants sont à votre écoute&nbsp;!</h2>
                            <ul class="grid-4-tiny-2-small-2-medium-4">
                                <li>
                                    <div class="voyant-marc" ></div>
                                    <span>Marc</span>
                                </li>
                                <li>
                                    <div class="voyant-anissa"></div>
                                    <span>Anissa</span>
                                </li>
                                <li>
                                    <div class="voyant-jean"></div>
                                    <span>Jean</span>
                                </li>
                                <li>
                                    <div class="voyant-marianne"></div>
                                    <span>Marianne</span>
                                </li>
                            </ul>
                        </div>
                        <h2 class="DRI-Slogan">Vos 10 premières minutes <span>gratuites</span></h2>
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
                    
                </div>
            </div>
        </section>
        <?php include('include/footer_reassurance.php'); ?>
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
<link href='https://fonts.googleapis.com/css?family=Courgette|Ubuntu+Condensed|Open+Sans:300,700,400,400italic,800' rel='stylesheet' type='text/css'>    
<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css" />
</html>
