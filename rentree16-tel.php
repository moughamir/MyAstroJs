<?php
/* 
    ---------------------------------
    --   RENTRÉE 2016 = AFFIL-BASE --
    ---------------------------------

    Created on : 28 juillet 2016
    Author     : Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
include('include/process-dri-postmailing.php');
$result = $_SESSION['question'];
switch ($result) {
    case 'R16_POSITIF':
        $textResult= 'Il n’y a pas de doute : cette rentrée doit être votre rentrée ! Vous avez toutes les cartes en main pour réussir et relever de grands défis. Et c’est tant mieux ! Parce que cette rentrée s’annonce mouvementée et les mois qui vont suivre vont être du même niveau. Préparez-vous à une fin d’année 2016 pleine de surprises. Un seul conseil : préparez-vous bien et vous n’aurez aucun souci à vous faire…';
        break;
    case 'R16_NEUTRE':
        $textResult= 'Pour cette rentrée, c’est plutôt mi-figue, mi-raisin. La motivation est présente mais votre esprit est encore un peu en vacances. Il va falloir rapidement vous faire une raison parce que cette rentrée et tous ses rebondissements ne vont pas vous attendre. Surtout que les prochains mois vont être riches en opportunités, notamment en amour et au travail. A vous de voir si vous voulez vraiment les laisser filer…';
        break;
    case 'R16_NEGATIF':
        $textResult= 'Cette rentrée ne se présente pas sous les meilleurs auspices ! Votre moral n’est pas vraiment au top et vous avez plutôt tendance à regarder vers le passé que vers ces prochains mois qui vous tendent les bras. Une manière de penser qu’il va falloir rapidement modifier : Septembre a fait son apparition et de nombreux défis vous attendent pour cette fin d’année 2016. Votre réaction ne doit pas tarder, le temps pourrait passer bien plus vite que vous ne le pensez…';
        break;
    default :
        $textResult = '';
        break;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>My Astro - C’est la rentrée ! Venez tester votre moral</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/rentree16.min.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="PageWrapper">
            <header class="SiteHeader">
                <div class="SiteLogo"><span>MyAstro</span></div>
                <h1 class="PageLogo bgHeader"><span>C’est la rentrée</span><span>Venez tester votre moral</span></h1>
                <?php include('include/bloc-socials.php'); ?>
            </header>
            
            <section class="ContentBand">
                <article class="FormContainer">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <div class="FormContainer-Fields">
                        <p class="Result-Name"><?= ucfirst($prenom) ?></p>
                        <p class="Result-Text"><?= $textResult ?></p>
                        <p class="FormContainer-Slogan"><span class="ico-form"></span>Vous allez recevoir votre interprétation complète par email dès demain.</p>
                        <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                            <p class="DRI-Sent">
                                Merci, votre demande de rappel a bien été prise en compte.<br/>
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
                        <p class="FormContainer-Slogan2">Envie d’en savoir plus immédiatement ?</p>
                        <p class="FormField-Info">Inscrivez votre numéro de téléphone ci-dessous<br class="small-hidden"/> et nous vous rappelons tout de suite !</p>
                        <form method="post">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="save_tel" value="1" />
                            <input type="hidden" name="tel_needed" value="1" />
                            <!-- ############################################### -->
                            <div class="FormField">
                                <label for="tel" class="FormField-Label">Téléphone</label>
                                <div>
                                    <input type="tel" name="tel" id="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel ?>" required />
                                    <span class="picto-tel-bulle tiny-hidden small-hidden"></span>
                                </div>
                            </div>
                            <div class="FormField">
                                <label for="pays" class="FormField-Label">Votre pays </label>
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

                            <p class="FormContainer-Slogan">Un voyant vous appelera dès demain, pour vous donner votre réponse en direct.</p>

                            <!-- SUBMIT -->
                            <input type="text" name="antisp" value="" style="display: none" /><br />
                            <button class="FormContainer-Submit btn-send" type="submit" name="demande_rappel">Envoyer</button>
                        </form>
                        <?php } ?>
                    </div>
                </article>  
            </section>
            
            <footer><p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p></footer>
            
        </div><!-- fin de .PageWrapper -->
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />