<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<script src="http://www.myastro.fr/framework/jquery-1.10.0.min.js"></script>
	<script src="http://www.myastro.fr/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.myastro.fr/framework/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript"> $('.carousel').carousel({interval:false}) </script>
	<style type="text/css">
		#carousel-homepage{
			width:605px;
		}
		.carousel-inner{
			width: 475px;
			margin-right: 1px;
			float:left;
		}
		/* Indicators list style */
		.indicators-handler .carousel-indicators{
			position: relative;
			width: auto;
			top:0;
		}
		.indicators-handler{
			float:left;
			margin-left: 15px;
		}
		/* Indicators list style */
		.indicators-handler .carousel-indicators li {
		    border: medium none;
		    border-radius: 0;
		    display: block;
		    clear: both;
		    height:62px;
		    width: auto;
		    cursor:pointer;
		}

		.indicators-handler .carousel-indicators li.active {
			background: none;
		}

		.indicators-handler .carousel-indicators li p{
			width:100%;
		}

		/* Indicators images style */
		#carousel-homepage .carousel-indicators img {
		    border: 2px solid #FFFFFF;
		    float: left;
		    width: 85px;
		}
		/* Indicators active image style */
		.carousel-indicators .active img {
		    opacity: 0.5;
		}
	</style>
</head>

                <div id="carousel-homepage" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <div class="carousel-inner">
                    <div class="item active">
                    	<a href="<?= PROTOCOL.'://'.ROOT_URL ?>/voyance-tarot">
                        	<img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/Promotion-de-lete.jpg" alt="Promotion de l'été" />
                        </a>
                        <div class="carousel-caption">
					    	<p>Vous vous posez des questions sur votre avenir proche? Alors gr&acirc;ce &agrave; MYASTRO proc&eacute;dez sans attendre au <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/voyance-tarot">tirage de tarot gratuit.</a></p>
					  	</div>
                    </div>
                    <div class="item">
                        <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-gratuit">
                            <img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/horoscope-gratuit.jpg" alt="horoscope-gratuit" />
                        </a>
                        <div class="carousel-caption">
					    	<p>Une question sur votre vie sentimentale? Des interrogations sur la fiabilit&eacute; de votre partenaire? Essayez le <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-de-l-amour">tarot de l'amour gratuit.</a></p>
					  	</div>
                    </div>
                    <div class="item">
                        <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/voyance-gratuite">
                            <img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/voyance-gratuite.jpg" alt="voyance-gratuite">
                        </a>
                        <div class="carousel-caption">
					    	<p>Que ce soit en amour ou en argent notre Tarot vous oriente sur les choix que vous devrez prendre. Testez notre <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-quotidien">tarot du quotidien gratuit.</a></p>
					  	</div>
                    </div>
                    <div class="item">
                        <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tirage-tarot-gratuit">
                            <img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/tarot.jpg" alt="tarot" />
                        </a>
                        <div class="carousel-caption">
					    	<p>Gr&acirc;ce &agrave; notre tarot votre vie sentimentale s'&ecute;claircit en quelques clics. Faites le test sans attendre et essayez le <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-mensuel">tarot mensuel gratuit.</a></p>
					  	</div>
                    </div>
                    <div class="item">
                        <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/voyance-telephone">
                            <img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/voyance-telephone.jpg" alt="voyance-telephone" />
                        </a>
                        <div class="carousel-caption">
					    	<p>Vous voulez savoir de quoi serait fait votre futur amoureux? Faites le test en compagnie de votre partenaire avec le <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-de-couple">Tarot de couple gratuit.</a></p>
					  	</div>
                    </div>
                  </div>
                  <div class="indicators-handler">
                  <ol class="carousel-indicators">
	                <li data-target="#carousel-homepage" data-slide-to="0" class="active">
	                	<img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/Promotion-de-lete.jpg" alt="Promotion de l'été" />
	                </li>
	                <li data-target="#carousel-homepage" data-slide-to="1">
	                	<img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/horoscope-gratuit.jpg" alt="horoscope-gratuit" />
	                </li>
	                <li data-target="#carousel-homepage" data-slide-to="2">
	                	<img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/voyance-gratuite.jpg" alt="voyance-gratuite" />
	                </li>
	                <li data-target="#carousel-homepage" data-slide-to="3">
	                	<img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/tarot.jpg" alt="tarot" />
	                </li>
	                <li data-target="#carousel-homepage" data-slide-to="4">
	                	<img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage/voyance-telephone.jpg" alt="voyance-telephone" />
	                </li>
	              </ol>
	            </div>
                </div>

