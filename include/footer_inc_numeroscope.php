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
                        <table width="100%" border="0" cellpadding="2"><tr>
                            <td>
                                <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/numeroscope-<?= $annee;?>" class="btn-theme">Numéroscope <?= $annee;?></a>
                                <?php for($i=1;$i<=9;$i++){ ?>
                                <a href="http://<?= ROOT_URL.'/numeroscope-'.$annee.'-'.$i;?>" class="btn-theme">Numéroscope <?= $annee;?> chiffre <?= $i;?></a>
                                <?php } ?>
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
                                <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/a-propos-de-myastro" rel="nofollow">À propos de Myastro</a></li>
                                <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/politique-de-confidentialite" rel="nofollow">Politique de confidentialité</a></li>
                                <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/mentions-legales" rel="nofollow">Mentions légales</a></li>
                            </ul>
                        </nav>
                        <div class="span6">
                            <p class="pull-right"><?php include('include/footer_copyright.php'); ?></p>
                        </div>
                    </div>
                </div>
            </footer>
        </section>

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
                animation          : 'center',
                autoplay           : true,
                slideshow_interval : 200,
                titlesFactor       : 0
            });
        });
        </script>	

        <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
        <!-- Download Google Chrome Frame in order to run theme on internet explorer versions -->

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php'); ?>
    </body>
</html>