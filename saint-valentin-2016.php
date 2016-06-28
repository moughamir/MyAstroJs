<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST));
?>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta NAME="robots" CONTENT="noindex,nofollow">
    <meta name="author" content="">

    <title>MY ASTRO - Saint Valentin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.334.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/saint-valentin-2016.css" rel="stylesheet" />
    
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jssor.slider.mini.js"></script>
    <?php include('include/header_inc_landing.php'); ?>
    <script src="js/formValidator.js"></script>
    <script src="js/myscript.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<script>
/*  Images suivant la souris
 *  Source :  http://www.editeurjavascript.com
 *  Adaptation : http://www.outils-web.com
 */
    var Xpos = 50;
    var Ypos = 50;
    var vara="DIV ID";
    var varb="/DIV";
    var styl='style="position:absolute;left:0px;top:0px;width:32px;height:32px;visibility:hidden;"'
    chaine='<'+vara+'="obj1" '+styl+'>'
    chaine='<'+vara+'="obj1" '+styl+'>'
    /*placez le nom de l'image ici sur ts les obj*/
    +'<img src="images_landing/saint-valentin-2016/flo.png" border=0>'
    +'<'+varb+'>'
    +'<'+vara+'="obj2" '+styl+'>'
    +'<img src="images_landing/saint-valentin-2016/flo.png" border=0>'
    +'<'+varb+'>'
    +'<'+vara+'="obj3" '+styl+'>'
    +'<img src="images_landing/saint-valentin-2016/flo.png" border=0>'
    +'<'+varb+'>'
    +'<'+vara+'="obj4" '+styl+'>'
    +'<img src="images_landing/saint-valentin-2016/flo.png" border=0>'
    +'<'+varb+'>'
    +'<'+vara+'="obj5" '+styl+'>'
    +'<img src="images_landing/saint-valentin-2016/flo.png" border=0>'
    +'<'+varb+'>'
    +'<'+vara+'="obj6" '+styl+'>'
    +'<img src="images_landing/saint-valentin-2016/flo.png" border=0>'
    +'<'+varb+'>'
    +'<'+vara+'="obj7" '+styl+'>'
    +'<img src="images_landing/saint-valentin-2016/flo.png" border=0>'
    +'<'+varb+'>'

    document.write(chaine);
    var div1 = document.getElementById("obj1").style;
    var div2 = document.getElementById("obj2").style;
    var div3 = document.getElementById("obj3").style;
    var div4 = document.getElementById("obj4").style;
    var div5 = document.getElementById("obj5").style;
    var div6 = document.getElementById("obj6").style;
    var div7 = document.getElementById("obj7").style;

    var objet;var coordx;var coordy;
    objet = new Array(div1,div2,div3,div4,div5,div6,div7);
    coordx = new Array(0,0,0,0,0,0,0);coordy = new Array(0,0,0,0,0,0,0);
    function placeObj(i,px,py) {
     objet[i].left=px;
     objet[i].top=py;}
    function voirObj(i) {
     objet[i].visibility="visible";}
    function cacheObj(i) {
     objet[i].visibility="hidden";}
    function cacheObj(i) {
     objet[i].visibility="hidden";}

    if (document.getElementById)
       {if(navigator.appName.substring(0,3) == "Net")
          document.captureEvents(Event.MOUSEMOVE);
       document.onmousemove = Pos_Souris;}

    function Pos_Souris(e)
       {Xpos = (navigator.appName.substring(0,3) == "Net") ? e.pageX : event.x+document.body.scrollLeft;
       Ypos = (navigator.appName.substring(0,3) == "Net") ? e.pageY : event.y+document.body.scrollTop;}

    function vole() {
     x0=coordx[0];y0=coordy[1];ex=Xpos+50;ey=Ypos+50
     reelx=x0+0.6;reely=y0+0.6;
     rx=reelx;ry=reely;
     rx+=(ex-rx)*0.6;ry+=(ey-ry)*0.6;
     reelx=rx;reely=ry;
     x0=Math.round(reelx);y0=Math.round(reely);

     for (var i = 9; i > 0; i--) {
      coordx[i]=coordx[i-1];
      coordy[i]=coordy[i-1]; }

     coordx[0]=x0;coordy[0]=y0;
     for (var i = 0; i < 7; i++) { voirObj(i);placeObj(i,coordx[i]+i-2,coordy[i]-i);}
     /* vitesse de défilement*/
     setTimeout("vole()",150)}
    if(document.getElementById)
        window.onload = vole;
</script>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="#">
                    <img src="images_landing/saint-valentin-2016/logo.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div> -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- Page Content -->
    <div class="container">
        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8 slider-container">
                <!-- SLIDER BEGIN -->
                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1695px; height: 854px; overflow: hidden; visibility: hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1695px; height: 854px; overflow: hidden;">
                        <!-- A SLIDE BEGIN -->
                            <div data-p="225.00" style="display: none;">
                                <div data-u="image">
                                    <img style="height: 854px;" src="images_landing/saint-valentin-2016/slide1.jpg" />
                                </div>
                            </div>
                        <!-- A SLIDE END -->
                        <!-- A SLIDE BEGIN -->
                            <div data-p="225.00" style="display: none;">
                                <div data-u="image">
                                    <img style="height: 854px;" src="images_landing/saint-valentin-2016/slide2.jpg" />
                                </div>
                            </div>
                        <!-- A SLIDE END -->
                        <!-- A SLIDE BEGIN -->
                            <div data-p="225.00" style="display: none;">
                                <div data-u="image">
                                    <img style="height: 854px;" src="images_landing/saint-valentin-2016/slide3.jpg" />
                                </div>
                            </div>
                        <!-- A SLIDE END -->
                        </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
                        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
                    </div>
                <!-- SLIDER END -->
                <p class="slide-note">Photos non contractuelles</p>
                <p class="download">télécharger la pochette cadeau à imprimer <a target="_blank" href="box.jpg"><img src="images_landing/saint-valentin-2016/download-here.png"></a></p>
                <p class="fill-note">Remplissez vite le formulaire pour gagner votre cadeau de Saint Valentin</p>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-3 col-md-offset-1 form-container">
                <h1 class="offer-form">VITE !!! <span>GAGNEZ<br>VOTRE CADEAU DE SAINT VALENTIN</span></h1>
                <hr>
                <p class="form-text">Que vous réserve votre avenir sentimental ?</p>
                <form class="form-get-gift" id="">
                    <input type="hidden" name="source" value="saint-valentin-2016" />
                    <input type="hidden" name="method" value="affil-mini" />
                    <input type="hidden" name="support" value="voyance"/>
                    <input type="hidden" name="theme_id" value="question_2" />
                    <input type="hidden" name="affiliation" value="affilbase" />
                    <input type="hidden" name="dri" value="http://www.myastro.fr/dri-4" />
                    <div class="form-element gender-select">
                        <label for="sexe-F" class="radio-inline">
                            <img src="images_landing/saint-valentin-2016/woman.png" />Femme<!--
                          --><input type="radio" name="sexe" id="sexe-F" value="F" required />
                        </label>
                        <label for="sexe-M" class="radio-inline">
                            <img src="images_landing/saint-valentin-2016/man.png" />Homme<!--
                          --><input type="radio" name="sexe" id="sexe-M" value="M" />
                        </label>
                    </div>
                    <div class="form-element">
                        <input type="text" placeholder="Mon prénom" name="prenom" required />
                    </div>
                    <div class="form-element">
                        <input type="text" placeholder="Son prénom" name="conjoint" required />
                    </div>
                    <div class="form-element">
                        <input type="email" placeholder="Mon adresse email" name="email" required />
                    </div>
                    <div class="form-element" style="margin-bottom: 20px;">
                        <select name="pays" id="pays" required >
                            <option value="" selected="selected">Votre Pays</option>
                            <option value="Belgique +32">Belgique</option>
                            <option value="Canada +1">Canada</option>
                            <option value="Luxembourg +352">Luxembourg</option>
                            <option value="Suisse +41">Suisse</option>
                            <option value="France Métropolitaine +33" selected>France Métropolitaine</option>
                            <optgroup label="DOM-TOM">
                                <option value="Martinique +596">Martinique</option>
                                <option value="Guadeloupe +590">Guadeloupe</option>
                                <option value="Guyane +594">Guyane</option>
                                <option value="La Réunion +262">La Réunion</option>
                                <option value="Mayotte +262">Mayotte</option>
                                <option value="St Pierre et Miquelon +508">St Pierre et Miquelon</option>
                                <option value="St Barthélémy +590">St Barthélémy</option>
                                <option value="St Martin +590">St Martin</option>
                                <option value="Wallis et Futunua +681">Wallis et Futunua</option>
                                <option value="Polynésie Française +689">Polynésie Française</option>
                                <option value="Nouvelle Calédonie +687">Nouvelle Calédonie</option>
                            </optgroup>
                        </select>
                    </div>
                    <input type="hidden" name="cguv" value="1" />
                    <input type="submit" value="Découvrir" class="submit-form" />
                </form>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    Votre cadeau de <span>Saint Valentin</span> gratuit
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4 text-block">
                <h2>Profitez de ce jour si spécial pour vous concentrer sur votre couple !</h2>
                <p>Quoi de mieux que la fête des amoureux pour prendre le temps d’en savoir un peu plus sur son couple ? Connaitre les périodes propices aux projets et aux engagements… Découvrir les astuces pour améliorer l’harmonie du couple… Obtenir des petits trucs pour pimenter la vie à deux… Aujourd’hui, c’est la journée idéale pour vous concentrer sur vous et votre moitié !</p>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 text-block">
                <h2>Célibataire ? Et si la Saint Valentin était le top départ de votre renouveau amoureux !</h2>
                <p>Pas toujours facile d’être célibataire le jour où tous les couples roucoulent… Mais profitez de cette fête des amoureux pour faire un pas décisif vers le grand Amour ! Quand suis-je susceptible de rencontrer l’amour ? Sur quels points de ma personnalité amoureuse dois-je travailler ? Qui peut bien être cette moitié que je recherche tant ? Nous vous épaulons pour que cette Saint Valentin soit la dernière que vous passez seul(e) !</p>
			</div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 text-block">
                <h2>En cadeau, des pierres précieuses qui raviront les amoureux et les célibataires</h2>
                <p>Grâce à leurs vibrations énergétiques, les pierres nous insufflent des énergies particulières, influant notre forme et notre mental. La Sodalite et l’Howlite turquoise sont connues pour apaiser les colères et améliorer la stabilité et le calme. Favorisant la compréhension de l’autre et la communication tout en renforçant les liens dans un couple, leurs vertus et bienfaits ne pourront que vous ravir.</p>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row footer-elements">
            <div class="col-md-3">
                <img src="images_landing/saint-valentin-2016/star.png">
                <h3>Voyants sérieux reconnus<br>pour leur savoir-faire</h3>
            </div>
            <div class="col-md-3">
                <img src="images_landing/saint-valentin-2016/lock.png">
                <h3>Consultations 100%<br>discrètes &amp; anonymes</h3>
            </div>
            <div class="col-md-2">
                <img src="images_landing/saint-valentin-2016/msg.png">
                <h3>Interprétation<br>immédiate</h3>
            </div>
            <div class="col-md-2">
                <img src="images_landing/saint-valentin-2016/champ.png">
                <h3>My Astro leader<br>depuis 2007</h3>
            </div>
            <div class="col-md-2">
                <img src="images_landing/saint-valentin-2016/secured.png">
                <h3>Paiement<br>sécurisé par CB</h3>
            </div>
        </div>
        <!-- Content Row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p style="color:#fff; text-align: center;">Copyright &copy; 2016 | My Astro</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    
    <script src="js/required.js"></script>
    
    <script>
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:5500.0,d:3000.0,o:-1.0,r:240.0,e:{r:2.0}}],
              [{b:-1.0,d:1.0,o:-1.0,c:{x:51.0,t:-51.0}},{b:0.0,d:1000.0,o:1.0,c:{x:-51.0,t:51.0},e:{o:7.0,c:{x:7.0,t:7.0}}}],
              [{b:-1.0,d:1.0,o:-1.0,sX:9.0,sY:9.0},{b:1000.0,d:1000.0,o:1.0,sX:-9.0,sY:-9.0,e:{sX:2.0,sY:2.0}}],
              [{b:-1.0,d:1.0,o:-1.0,r:-180.0,sX:9.0,sY:9.0},{b:2000.0,d:1000.0,o:1.0,r:180.0,sX:-9.0,sY:-9.0,e:{r:2.0,sX:2.0,sY:2.0}}],
              [{b:-1.0,d:1.0,o:-1.0},{b:3000.0,d:2000.0,y:180.0,o:1.0,e:{y:16.0}}],
              [{b:-1.0,d:1.0,o:-1.0,r:-150.0},{b:7500.0,d:1600.0,o:1.0,r:150.0,e:{r:3.0}}],
              [{b:10000.0,d:2000.0,x:-379.0,e:{x:7.0}}],
              [{b:10000.0,d:2000.0,x:-379.0,e:{x:7.0}}],
              [{b:-1.0,d:1.0,o:-1.0,r:288.0,sX:9.0,sY:9.0},{b:9100.0,d:900.0,x:-1400.0,y:-660.0,o:1.0,r:-288.0,sX:-9.0,sY:-9.0,e:{r:6.0}},{b:10000.0,d:1600.0,x:-200.0,o:-1.0,e:{x:16.0}}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <!-- New Remarketing tags -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1024378253;
        var google_conversion_label = "ipnICMWfg2EQjYu76AM";
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1024378253/?value=1.00&amp;currency_code=EUR&amp;label=ipnICMWfg2EQjYu76AM&amp;guid=ON&amp;script=0" />
        </div>
    </noscript>
    <!-- Fin Remarketing Tag -->
    
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
    <!-- Fin Analytics tags -->
</body>

</html>
