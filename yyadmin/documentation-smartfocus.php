<?php // yyadmin/documentation-smartfocus.php

/* ##### INITIALISATION ##### */
    require_once('inc/init.php');

/* ###### VUE ###### */

    include('inc/header.php');
?>
<h2> Informations relatives à Smartfocus </h2>
    <blockquote> La (Les) campagnes principale(s) sont programmées sur l'application Smartfocus. Les headers sont définis sur l'application mais les contenus sont générés par Myastro en appelant <code>/mail_/engine.php</code> et en fournissant les paramètres en GET.  </blockquote>
    <h3>Liste des champs :</h3>
    <table class="table table-bordered">
            <tr>
                    <th>Nom Smartfocus</th>
                    <th>Type</th>
                    <th>Utilisation</th>
            </tr>
            <tr>
                    <td>FIRSTNAME</td>
                    <td>TEXTE (64)</td>
                    <td>Prénom</td>
            </tr>
            <tr>
                    <td>LASTNAME</td>
                    <td>TEXTE (64)</td>
                    <td>Aucune</td>
            </tr>
            <tr>
                    <td>EMAIL_ORIGINE</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune</td>
            </tr>
            <tr>
                    <td>EMAIL</td>
                    <td>TEXTE (255)</td>
                    <td>Email</td>
            </tr>
            <tr>
                    <td>EMVCELLPHONE</td>
                    <td> NOMBRE (38) </td>
                    <td>Numéro de téléphone du membre</td>
            </tr>
            <tr>
                    <td>EMAIL_FORMAT</td>
                    <td>NOMBRE (1)</td>
                    <td>Aucune</td>
            </tr>
            <tr>
                    <td>TITLE</td>
                    <td>TEXTE (24)</td>
                    <td>Genre de la personne ( homme / femme )</td>
            </tr>
            <tr>
                    <td>DATEOFBIRTH</td>
                    <td>DATE</td>
                    <td>Date de naissance</td>
            </tr>
            <tr>
                    <td>SEED</td>
                    <td>NOMBRE (1)</td>
                    <td>Aucune</td>
            </tr>
            <tr>
                    <td>CLIENTURN</td>
                    <td>TEXTE (24)</td>
                    <td>Question posé ( Trigger )</td>
            </tr>
            <tr>
                    <td>SOURCE</td>
                    <td>TEXTE (24)</td>
                    <td>Provenance du contact au format site-formulaire </td>
            </tr>
            <tr>
                    <td>CODE</td>
                    <td>TEXTE (255)</td>
                    <td>Id Astro</td>
            </tr>
            <tr>
                    <td>SEGMENT</td>
                    <td>TEXTE (64)</td>
                    <td>Est mis à 'oui' si le membre a consulté</td>
            </tr>
            <tr>
                    <td>EMVADMIN1</td>
                    <td>TEXTE (255)</td>
                    <td>A été utilisé. Vide actuellement.</td>
            </tr>
            <tr>
                    <td>EMVADMIN2</td>
                    <td>TEXTE (255)</td>
                    <td>Option Opt-out des formulaires : Recevoir horoscope quotidien ( true / false )</td>
            </tr>
            <tr>
                    <td>EMVADMIN3</td>
                    <td>TEXTE (255)</td>
                    <td>Option Opt-out des formulaires : Recevoir offre des partenaires ( true / false )</td>
            </tr>
            <tr>
                    <td>EMVADMIN4</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune a ma connaissance</td>
            </tr>
            <tr>
                    <td>EMVADMIN5</td>
                    <td>DATE</td>
                    <td>Aucune a ma connaissance</td>
            </tr>
            <tr>
                    <td>FIRSTNAME2</td>
                    <td>TEXTE (255)</td>
                    <td>Prénom du conjoint </td>
            </tr>
            <tr>
                    <td>SEED2</td>
                    <td>TEXTE (255)</td>
                    <td>Signe astro du conjoint </td>
            </tr>
            <tr>
                    <td>EMVADMIN6</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune.</td>
            </tr>
            <tr>
                    <td>DESABO_HORO</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés des horoscopes *</td>
            </tr>
            <tr>
                    <td>DESABO_QUESTION</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés de la campagne principale *</td>
            </tr>
            <tr>
                    <td>DESABO_ANNIV</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés de la campagne anniversaire *</td>
            </tr>
            <tr>
                    <td>DESABO_JRELANCE</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés d'une campagne (?) *</td>
            </tr>
            <tr>
                    <td>DESABO_CONSULT</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés d'une campagne (?) *</td>
            </tr>
            <tr>
                    <td>SEED3</td>
                    <td>TEXTE (24)</td>
                    <td>Signe astrologique.</td>
            </tr>
            <tr>
                    <td>NUMEROTELEPHONE</td>
                    <td>TEXTE (24)</td>
                    <td>Aucune.</td>
            </tr>
            <tr>
                    <td>MYASTRO</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune.</td>
            </tr>
            <tr>
                    <td>CORAIL</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune. ( A dû contenir un abonnement à une campagne su site Corail ).</td>
            </tr>
            <tr>
                    <td>AXELLE</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune. ( A dû contenir un abonnement à une campagne su site Axelle voyance ).</td>
            </tr>
            <tr>
                    <td>DESABO_SMS</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés d'une campagne sms *</td>
            </tr>
            <tr>
                    <td>DESABO_QMAIL</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés d'une campagne (?) *</td>
            </tr>
            <tr>
                    <td>DESABO_ASK</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés d'une campagne (?) *</td>
            </tr>
            <tr>
                    <td>DESABO_AUDIO</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés d'une campagne (?) *</td>
            </tr>
            <tr>
                    <td>DESABO_ONE</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés d'une campagne (?) *</td>
            </tr>
            <tr>
                    <td>DESABO_RENC</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés d'une campagne (?) *</td>
            </tr>
            <tr>
                    <td>DESABO_FACEBOOK</td>
                    <td>NOMBRE (1)</td>
                    <td>A contenu une valeur pour filtrer les désabonnés d'une campagne (?) *</td>
            </tr>
            <tr>
                    <td>MYASTRO2</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune.</td>
            </tr>
            <tr>
                    <td>MYASTROMOB</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune.</td>
            </tr>
            <tr>
                    <td>DATEMODIF</td>
                    <td>DATE</td>
                    <td>Date du lead.</td>
            </tr>
            <tr>
                    <td>MYASTRO3</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune.</td>
            </tr>
            <tr>
                    <td>MYASTRO4</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune.</td>
            </tr>
            <tr>
                    <td>MYASTRO5</td>
                    <td>TEXTE (255)</td>
                    <td>Aucune.</td>
            </tr>
            <tr>
                    <td>FLAG</td>
                    <td>TEXTE (10)</td>
                    <td>Aucune.</td>
            </tr>
            <tr>
                    <td>GROUPE_FLAG_30</td>
                    <td>TEXTE (255)</td>
                    <td>Découpage de la BDD. **</td>
            </tr>
            <tr>
                    <td>GROUPE_FLAG_15</td>
                    <td>TEXTE (255)</td>
                    <td>Découpage de la BDD. **</td>
            </tr>
            <tr>
                    <td>GROUPE_FLAG_7</td>
                    <td>TEXTE (255)</td>
                    <td>Découpage de la BDD. **</td>
            </tr>
            <tr>
                    <td>GROUPE_FLAG_5</td>
                    <td>TEXTE (255)</td>
                    <td>Découpage de la BDD. **</td>
            </tr>
    </table>
    <p> * : D'une manière générale, il vaut mieux désabonner un utilisateur <b>de toutes nos campagnes</b> à sa demande. Premièrement parce que c'est plus en accord avec les <a href="http://www.cnil.fr/vos-droits/la-cnil-a-vos-cotes/" target="_blank" >directives de la CNIL</a>. Deuxièment : à quoi dépenser de l'argent pour un prospect refroidi ?</p>
    <p> ** : Ces 4 groupes de flags sont utilisés pour créer des 30ème, 15ème, 7ème et 5ème de Base de Donnée afin de suivre une stratégie mailing précise. <i>( ie : 1 mail/jour pour les 30ème )</i></p>

    <h3>La classe Smartfocus.class.php :</h3>
    <p>Il s'agit de la classe relative à l'utilisation de l'API <i>member</i> de smartfocus. Elle sert à insérer les membres dans la BDD de smartFocus pour qu'ils soient traités par les campagnes par la suite.
            Il existe une spécificité cependant. L'appel à l'API se fait via SOAP, avec la méthode inSertMemberObject. L'api répond avec un JobID, elle ne traite donc pas directement l'insertion. On stock donc le jobID dans une table emv_tasks. Ensuite un cron vient, toutes les 3h, parcourir l'ensemble de la table et demande à l'API si l'insertion s'est bien passée ( methode getStatus ), si oui, on supprime l'entrée, sinon on retente une insertion.</p>

    <h3>Point d'entrée de SmartFocus :</h3>
    <p>En fait avant que je mette en place l'API, l'application utilisait le système de formulaire. Une redirection vers un serveur de smartfocus avec des params en GET qui nous redirige à son tour une fois l'inscription terminée.</p>
    <p>Ca n'avait pas d'intérêt, on perdait l'utilisateur et donc son potentiel tracking. On utilise depuis l'API member.</p>
    <p>Ceppendant, il nous est impossible d'envoyer un mail avant J+1 avec ce système. Pour celà, il nous faudrait l'API de messages transactionnel. Mais n'ayant pas le temps de l'implémenter, je vais réutiliser l'ancien système de formulaire pour envoyer un message de confirmation d'inscription.</p>

    <h3> Mail / engine.php </h3>
    <p>Il s'agit ici d'un fichier à refaire probablement à l'avenir.</p>
    <h4>Pourquoi ?</h4>
    <p>Tout simplement parce que lors de sa création, il ne devait fournir que les réponse d'une seule campagne. Mais il devrait pouvoir gérer plus que ça.</p>
    <p>L'avantage, serait de n'avoir qu'un seul <i>fournisseur de contenu</i> pour smartfocus, avec des tables bien gérées, toutes administrables pour pouvoir créer des accès rédacteur dans le backoffice est gérer en live les contenus envoyé à smartfocus (comme on le fait actuellement avec les réponses "question" mais à plus grande échelle). </p>

<?php
    include('inc/footer.php');
?>