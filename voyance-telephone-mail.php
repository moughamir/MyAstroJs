<?php
    include('include/process-dri.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Voyance par chat gratuit : Essayez la voyance gratuite par tchat</title>
        <meta name="description" content="My Astro : Voyance gratuite par chat - Obtenez des réponses immédiates à toutes vos questions. Voyance gratuite par chat." />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width" />

        <link rel="stylesheet" href="sstyle_landing.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media="all" />
    </head>

    <body class="voyance-telephone-1">
        <div class="top-nav">
            <div class="nav-content"><div class="links">
                <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> |
                <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> |
                <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a>
            </div></div>
        </div>

        <div class="main">
            <div class="left-part">
                <div class="logo">
                    <img src="images_landing/logo-myastro.png" alt="" width="220" height="89" />
                </div>
                <div class="content">
                    <h1>Voyance par <strong>téléphone</strong></h1>
                    <div class="txt-content">
                    <p>Une question sur votre avenir ou sur celui d’un être cher ? L’un de nos voyants reconnus vous recontacte dans les plus brefs délais et vous éclaire sur vos doutes.</p>
                    <p>Votre couple va-t-il durer ? Votre travail va-t-il évoluer ? Aurez-vous des enfants ? N’hésitez pas à discuter de ce qui vous intéresse lors de votre séance de voyance par téléphone.</p>
                    </div>
                </div>
                <div class="comment-ca-marche">
                    <h2>Comment ça marche ?</h2>
                    <div class="faq">
                        <div class="cols-3 first">
                            Je remplis le <br/>formulaire
                        </div>
                        <div class="cols-3 last">
                            Je suis rappelé(e) <br/>immédiatement
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <div class="voyant-membre">
                    <h2>Faites-vous rappeler <strong>gratuitement</strong></h2>
                    <span class="slogan">Nos voyant(e)s répondent à vos questions</span>
                    <div class="cols4"><img src="images_landing/voyants/jean.jpg" alt="" width="110" height="110" />Jean</div>
                    <div class="cols4"><img src="images_landing/voyants/lena.jpg" alt="" width="110" height="110" />Léna</div>
                    <div class="cols4"><img src="images_landing/voyants/robert.jpg" alt="" width="110" height="110" />Robert</div>
                    <div class="cols4"><img src="images_landing/voyants/beatrice.jpg" alt="" width="110" height="110" />Béatrice</div>
                    <div class="clear"></div>
                </div>
                <aside class="widget">
                    <div class="widget-title" style="text-align:center;">
                        Vos <strong>10</strong> premières minutes <strong>gratuites !</strong>
                    </div>
                     <div class="widget-content clearfix">
                        <div class="visible-part form-part form-part-one">
                            <?php if($directCall && ($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT')){ ?>
                                <p class="DRI-Sent">
                                    APPEL EN COURS ....<br/>
                                    Merci, votre demande de rappel a bien été prise en compte.<br/>
                                    <strong>Un voyant vous recontactera dans quelques instants.</strong>
                                </p>
                            <?php } else if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                            <p class="message_envoye">
                                Merci, votre demande a bien été prise en compte.<br/>
                                <strong>Un voyant vous recontactera dans quelques instants.</strong>
                            </p>
                            <?php } else { ?>
                            <div class="alert alert-danger" style="display: none"></div>
                            <form action="" method="post">
                                <input type="hidden" value="1" name="directCall">
                                <input type="text" name="antisp" value="" style="display:none" />
                                <input type="hidden" name="source" value="<?php echo $source; ?>" />
                                <input type="hidden" name="gclid" value="<?php echo $gclid; ?>" />
                                <div class="form-w-one li-form">
                                    <input type="text" id="name" name="prenom" placeholder="Mon prénom" value="<?= $prenom ?>" required />
                                </div>
                                <div class="form-w-one li-form">
                                    <input id="tel" name="tel" type="tel" placeholder="Mon numéro de téléphone" pattern="(\+?\d[- .]*){10,18}" value="<?= $tel ?>" required />
                                </div>

                                <div class="form-w-one li-form selectpays">
                                    <label for="pays">Votre pays </label>
                                    <select name="pays" id="pays" required>
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
                                <div>
                                    <input type="submit" name="demande_rappel" value="Rappel gratuit" />
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </aside>
                <div class="clear"></div>
            </div>
            <div class="bloc-middle-bg"></div>
        </div>
        <div class="clear"></div>

        <div class="subfooter">
            <ul>
                <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
                <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
                <li class="third">10 minutes<br /><strong>offertes</strong></li>
                <li class="fourth">My Astro leader <br/><strong>depuis 2007</strong></li>
                <li class="fifth">Paiement <br/><strong>sécurisé</strong></li>
                <div class="clear"></div>
            </ul>
            <div class="clear"></div>
        </div>

        <div class="footer">
            <?php include('include/footer_copyright.php'); ?>
        </div>

        <!-- REMARKETING -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php'); ?>
    </body>
</html>