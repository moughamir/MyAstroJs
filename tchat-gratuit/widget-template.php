<?php
/** 
 * Template fenêtre de tchat gratuit à inclure
 * 
 * Created on : 1 juin 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */
?>
<div class="Tchat">
    <div class="Tchat-Overlay" id="tchat-overlay">
        <div id="tchat-alert-connexion" class="alert alert-info">
            <i class="fa fa-spinner fa-pulse"></i> Connexion au serveur en cours...
        </div>
        <div id="tchat-alert-connexion-ok" class="alert alert-success" style="display: none">
            <i class="fa fa-check"></i> Connexion au serveur r&eacute;ussie !
        </div>
        <div id="tchat-alert-recherche-voyant" class="alert alert-info"style="display: none">
            <i class="fa fa-spinner fa-pulse"></i> Recherche de voyant disponible...
        </div>
        <div id="tchat-alert-attente-voyant" class="alert alert-info"style="display: none">
            <i class="fa fa-spinner fa-pulse"></i> <?= $tchat->getPsychicName();?> sera bientôt disponible...
        </div>
        <div id="tchat-alert-voyant-ok" class="alert alert-success"style="display: none">
            <i class="fa fa-check"></i> Voyant disponible !
        </div>
        <div id="tchat-alert-cookie" class="alert alert-danger"style="display: none">
            <b><i class="fa fa-warning"></i> Vous avez déjà effectué une demande par tchat récemment,</b><br>
            vous ne pouvez donc pas en refaire une avant quelques jours.<br>
            Merci de votre compréhension.
        </div>
    </div>
    <div class="Tchat-Window">
        <div class="Tchat-Window-Output <?= $tchat->canStart() ?'start' :'' ?>" id="tchat-window">
            <div id="tchat-output">
                <div id="tchat-msg-template" style="display: none">
                    <div class="Tchat-Message">
                        <span class="Tchat-Message-Person <?= $tchat->getPsychicGender() ?>"><?= $tchat->getPsychicName() ?> dit :</span>
                        <span class="Tchat-Message-Text">__MSGTXT__</span>
                    </div>
                </div>
            </div>
            <div id="tchat-deco" style="display: none">
                <div class="Tchat-Disconnection">
                    <?= $tchat->getPsychicName();?> est maintenant hors ligne.
                </div>
            </div>
        </div>
        <div class="Tchat-Window-Input">
            <div class="Tchat-Waiting">
                <span style="display: none" id="tchat-waiting">
                    <i class="fa fa-spinner fa-pulse"></i> <?= $tchat->getPsychicName() ?> est en train d'écrire ...
                </span>
            </div>
            <div class="Tchat-Form">
                <div class="FormField withAside">
                    <input type="text" class="FormField-Input" readonly value="Vous êtes en mode gratuit, vous ne pouvez pas répondre." />
                    <span class="aside btn">
                        <button class="FormField-Button" type="button"><i class="fa fa-check"></i> Envoyer</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>