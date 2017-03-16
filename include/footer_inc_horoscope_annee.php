<?php
    $annee = isset($annee) ? $annee : date('Y');
?>
        <section class="modern-footer">
            <div class="container-fluid">
                <?php include('include/footer_reseaux_sociaux.php');?>
                <div class="tags-cloud">
                    <div class="f-widget-title">
                        <h4 style="font-family: 'Open Sans', OpenSansSemibold, Arial, Sans-Serif;
                        font-weight: 600;text-align:center;color: #fff;font-size: 17px !important;
                        line-height: 27px;text-align:center;">Les Tags</h4>
                    </div>
                    <div class="f-widget-content" style="text-align:left;">
                        <br>
                        <script type="text/javascript">var _videodesk= _videodesk || {}; _videodesk['firstname'] = '' ; _videodesk['lastname'] = '' ; _videodesk['company'] = '' ; _videodesk['email'] = '' ; _videodesk['phone'] = '' ; _videodesk['customer_lang'] = '' ; _videodesk['customer_id'] = '' ; _videodesk['customer_url'] = '' ; _videodesk['cart_id'] = '' ; _videodesk['cart_url'] = '' ; _videodesk['uid'] = '1f26f319feb40da4ee2861bc06672754' ; _videodesk['lang'] = 'fr' ; (function() { var videodesk = document.createElement('script'); videodesk.type = 'text/javascript'; videodesk.async = true; videodesk.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'module-videodesk.com/js/videodesk.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(videodesk, s); })(); </script>
                        <table width="100%" border="0" cellpadding="2"><tr>
                            <td>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-belier" class="btn-theme">Horoscope <?= $annee;?> bélier</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-taureau" class="btn-theme">Horoscope <?= $annee;?> taureau</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-gemeaux" class="btn-theme">Horoscope <?= $annee;?> gémeaux</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-cancer" class="btn-theme">Horoscope <?= $annee;?> cancer</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-lion" class="btn-theme">Horoscope <?= $annee;?> lion</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-vierge" class="btn-theme">Horoscope <?= $annee;?> vierge</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-balance" class="btn-theme">Horoscope <?= $annee;?> balance</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-scorpion" class="btn-theme">Horoscope <?= $annee;?> scorpion</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-sagittaire" class="btn-theme">Horoscope <?= $annee;?> sagittaire</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-capricorne" class="btn-theme">Horoscope <?= $annee;?> capricorne</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-verseau" class="btn-theme">Horoscope <?= $annee;?> verseau</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>-poissons" class="btn-theme">Horoscope <?= $annee;?> poissons</a>
                                <a href="http://<?= ROOT_URL.'/horoscope-'.$annee;?>" class="btn-theme">Horoscope <?= $annee;?></a>
                            </td>
                        </tr></table>
                    </div>
                </div>
            </div>

            <!-- Copy Right Reserved Section & Social Icons -->
            <div class="footer-border-serpentsoft"></div>

            <footer class="f-copyright">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <nav class="span6 ">
                            <ul class="copyright-links">
                                <li><a href="http://<?= ROOT_URL;?>/a-propos-de-myastro" rel="nofollow">À propos de Myastro</a></li>
                                <li><a href="http://<?= ROOT_URL;?>/politique-de-confidentialite" rel="nofollow">Politique de confidentialité</a></li>
                                <li><a href="http://<?= ROOT_URL;?>/mentions-legales" rel="nofollow">Mentions légales</a></li>
                            </ul>
                        </nav>
                        <div class="span6">
                            <p class="pull-right"><?php include('include/footer_copyright.php'); ?></p>
                        </div>
                    </div>
                </div>
            </footer>
        </section>

        <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->

        <script src="framework/jquery-1.10.0.min.js"></script>
        <script src="framework/jquery-migrate-1.2.1.min.js"></script>

        <script type="text/javascript" src="framework/jquery.easing.1.3.js"></script>

        <script src="framework/bootstrap/js/bootstrap.min.js"></script>
        <script src="framework/bootstrap/js/bootstrap-hover-dropdown.js"></script>
        <script src="framework/bootstrap/js/bootstrap-tooltip.js"></script>

        <script type="text/javascript" src="framework/sliders/flex/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="framework/sliders/flex/js/shCore.js"></script>
        <script type="text/javascript" src="framework/sliders/flex/js/shBrushXml.js"></script>
        <script type="text/javascript" src="framework/sliders/flex/js/shBrushJScript.js"></script>

        <script type="text/javascript" src="framework/style-switcher/js/colorpicker.js"></script>
        <script src="framework/bootstrap/js/holder.js"></script>

        <script type="text/javascript" src="framework/ticker/breaking-news-ticker/jquery.ticker.js"></script>
        <!-- Online  -->
        <script type="text/javascript" src="framework/ticker/twitter/jquery.tweet.js"></script>

        <!-- Call Functions from One Place -->
        <script type="text/javascript" src="framework/jsCalling.js"></script>

        <script type="text/javascript" src="framework/jsSlider.js"></script>

        <!-- script slider -->
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
        $(function() {
            $('#ei-slider').eislideshow({
               animation			: 'center',
               autoplay			: true,
               slideshow_interval	: 200,
               titlesFactor		: 0
           });
        });
        </script>	

        <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
        <!-- Download Google Chrome Frame in order to run theme on internet explorer versions -->

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php'); ?>

        <script type="text/javascript">
            $(function(){
                $('aside.w-pictures .thumbnails center a').attr('rel','nofollow');
            });
        </script>
    </body>
</html>