<?php
	require_once('inc/tools.php');
	require_once('inc/header.php');
	$tracker   = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
	if(isset($_POST['addTracker'])){
		$id_tracker = $tracker->addTracker($_POST['tracker'],$_POST['campain'],$_POST['tracking_group']);
		if($id_tracker){
			echo "<div class='alert alert-success'>Le tracker a bien été ajouté</div>";
		}
		else{
			echo "<div class='alert alert-danger'>Une erreur est survenue lors de l'ajout</div>";
		}
	}
?>
<div class="wrapper container-fluid">
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
			<td>Aucune</td>
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
			<td>NOMBRE (7)</td>
			<td>Aucune</td>
		</tr>
		<tr>
			<td>SEGMENT</td>
			<td>TEXTE (64)</td>
			<td>Aucune</td>
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
			<td>EMVADMIN3</td>
			<td>TEXTE (255)</td>
			<td>Aucune a ma connaissance</td>
		</tr>
		<tr>
			<td>EMVADMIN4</td>
			<td>TEXTE (255)</td>
			<td>Aucune a ma connaissance</td>
		</tr>
		<tr>
			<td>EMVADMIN5</td>
			<td>TEXTE (255)</td>
			<td>Aucune a ma connaissance</td>
		</tr>
		<tr>
			<td>FIRSTNAME2</td>
			<td>TEXTE (255)</td>
			<td>Aucune ( a probablement contenue le prénom du conjoint )</td>
		</tr>
		<tr>
			<td>SEED2</td>
			<td>TEXTE (255)</td>
			<td>Aucune ( a probablement contenu le signe astro du conjoint )</td>
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
</div>