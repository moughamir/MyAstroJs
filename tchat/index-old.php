<?php
setcookie("tchat","tchat", time()+86400,'/');
include('../include/Lib_handler.php');
$tchat = new Tchat\Tchat(new Bdd\Bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
$tchat->setSupport($_SESSION['support']);
$tchat->trigger = $_SESSION['trigger'];
$user = 	array(
				'ID'             => $_SESSION['user_id'],
				'name'           => $_SESSION['firstname'],
				'email'          => $_SESSION['email'],
				'phone'          => $_SESSION['phone'],
				'sexe'           => ( $_SESSION['sexe'] == 'homme' ) ? 'M' : 'F',
				'code'           => base_convert($_SESSION['user_id'], 10,32),
				'firstnameJoint' => $_SESSION['firstnameJoint'],
				'pays'           => $_SESSION['pays'],
				'birthdate'      => $_SESSION['birthdate'],
				'birthdatejoint' => $_SESSION['birthdateJoint'],
			    );
$infos = 	array(
				'user' => $user,
				'cartes' => $_SESSION['cards']
			);

$data = $infos;
// Envoi mail de remerciement quand on accède au chat. 

if($tchat->canStart()){
	$conversation = $tchat->flattenConversation($tchat->getConversation($infos));
	$id_stats = $tchat->stats->addStats($tchat->scenario[0]->id,$tchat->intro,$tchat->content,$tchat->conclusion,$user['ID']);
}

$page_title = 'Tarot gratuit amour: apprenez-en plus sur votre futur avec Myastro';
include('../include/header.php');

?>
<style>
	.output .name{ color:#<?= ($tchat->scenario[0]->seer_sexe == 'M') ? '2277f7': 'c9209f' ; ?>;}
	.advert .txt-rpl{ color:#<?= ($tchat->scenario[0]->seer_sexe == 'M') ? 'c9209f': '2277f7' ; ?>;}
	.advert .txt-code-perso{ color:#<?= ($tchat->scenario[0]->seer_sexe == 'M') ? '2277f7': 'c9209f' ; ?>;}
	.advert .code-perso{ color:#<?= ($tchat->scenario[0]->seer_sexe == 'M') ? 'c9209f': '2277f7' ; ?>;}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	var msgs = <?= json_encode($conversation)?>;
	var seerName = <?= json_encode(ucfirst($tchat->scenario[0]->seer_name)) ?>
</script>

<?php
    /** -------------- envoi mail confirmation d'inscription --------------- **
    $mail = $_SESSION['email'];
    if($mail){
        $content  = file_get_contents("../mail/merci-voyance.html");
        $name     = utf8_decode($user['name']);
        $to       =  $mail;
        $subject  = 'Confirmation de votre demande d\'étude';
        $message  = str_replace(array('IDASTRO','NOMCLE'), array($user['code'],$name),$content);
        $headers  = "From: \"My Astro\"<contact@myastro.fr>\n";
        $headers .= "Reply-To: contact@myastro.fr\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        mail($to, $subject, $message, $headers);
    }
    /** -------------------------------------------------------------------- **/
?>
<script type="text/javascript" src="script.js"></script>

	<div class="container-fluid">
		<div class="row">
			<div class="advert">
				<img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/preloader.gif" class="advert-offline" width="340">
				<form action="" id="rappel" class="hidden advert-online form-rappel">
						<div class="col-lg-6" style="margin-left:8px;">
							<div class="input-group">
							    	<span class="txt-rpl">Faites-vous rappeler immédiatement pour<span><br/>
							    	<!--<span class="txt-code-perso">Code personnel : <span class="code-perso"><?php //echo strtoupper($data['user']['code']); ?></span></span><br/>-->
							    	<span class="txt-rpl">profiter de 10 minutes de consultation à <span class="txt-code-perso">1€</span></span><br/>
							    <input style="width:65%; margin-top:5px; border-radius:3px;font-size:13px;font-weight:bold;" type="text" class="form-control" name="phone" value="<?php echo $data['user']['phone']; ?>" pattern="(\+?\d[- .]*){10,18}" required />
							    <span class="input-group-btn">
							    <button style="width:40px; height:35px;margin-top:-5px;" class="btn btn-primary" type="submit" onclick="rappelTchat()">OK</button>
							    </span>
							</div>
						  </div>
					<?php
						echo '<input type="hidden" name="data" value="'.htmlentities(serialize($data)).'" />
							 <input type="hidden" name="voyant" value="'.ucfirst( $tchat->scenario[0]->seer_name ).'" />
							 <input type="hidden" name="objet" id="objet" value="" />'
					?>
				</form>
				<img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/tchat/<?= $tchat->getImageName() ?>.png" class="hidden advert-online">
			</div>
			<div class="overlay">
				<div class="alert alert-info"><img src="loader-overlay.gif" class="loader" /> Connexion au serveur en cours ...</div>
			</div>
			<div class="screen">
				<div class="output">
						<?php
							if(!$tchat->canStart()){
								?>
									<div class="jumbotron">
									  <h1>Demande effectuée</h1>
									  <p>Vous avez déjà effectué une demande par tchat récemment, vous ne pouvez donc pas en refaire une avant quelques jours. Merci de votre compréhension.</p>
									</div>
								<?php
							}
						?>
				</div>
				<div class="input">
					<span class="waiting invisible"><img src="loader.gif" /><?= ucfirst( $tchat->scenario[0]->seer_name ) ?> est en train d'écrire ... </span>
					<div class="input-group">
					    <input type="text pull-left" class="form-control" readonly placeholder="Vous êtes en mode gratuit, vous ne pouvez pas répondre.">
					    <span class="input-group-btn">
					    	<button class="btn btn-default disabled" type="button"> Envoyer <i class="glyphicon glyphicon-chevron-right"></i></button>
					    </span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<p class="text-center">
				Ce Tchat est gratuit et vous fait bénéficier d'une première voyance gratuite sur votre situation.<br />
Vous avez la possibilité de contacter directement par téléphone le voyant qui vous a répondu afin de le consulter en privé au 04 82 53 71 59.<br />
Vous recevrez également sous 24h la réponse à votre question de voyance gratuite par email. <br />
Veuillez vérifier dans vos courriers indésirables et nous ajouter à vos contacts pour la bonne réception de cet email.
			</p>
		</div>
		<div class="modal fade bs-example-modal-lg error-handler" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content" id="error_msg">
		      
		    </div>
		  </div>
		</div>
	</div>
	
<!-- Google Code for MY ASTRO QUESTION INSCRIPTION Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1024378253;
var google_conversion_language = "fr";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "arTgCM2fhAMQjYu76AM";
var google_conversion_value = 1.00;
var google_conversion_currency = "EUR";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1024378253/?value=1.00&amp;currency_code=EUR&amp;label=arTgCM2fhAMQjYu76AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Facebook Conversion Code for Leads -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6017569293945', {'value':'0.01','currency':'EUR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6017569293945&amp;cd[value]=0.01&amp;cd[currency]=EUR&amp;noscript=1" /></noscript>

<!-- Analytics tags -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-16975536-3']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>  
<?php
	include('../include/footer.php');
?>