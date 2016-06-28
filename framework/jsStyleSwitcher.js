
// Style Switcher
$jqInitColors = jQuery.noConflict();
$jqInitColors(document).ready(function () {

    var background_rgb, back_white, background_rgba, border_rgb, border_rgba;
    var r, g, b;

    r = 60; g = 53; b = 161;

    back_white = { backgroundColor: "rgb(" + 255 + ',' + 255 + ',' + 255 + ")" };

    background_rgb = { backgroundColor: "rgb(" + r + ',' + g + ',' + b + ")" };
    border_rgb = { borderColor: "rgb(" + r + ',' + g + ',' + b + ")" };
    border_rgba = { borderColor: "rgba(" + r + ',' + g + ',' + b + ',' + "0.27)" };
    background_rgba = { background: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)", backgroundColor: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)" };

    $jqInitColors('#divH_Cat .color-picker > .select-color-image, .h-cat-1 .flexslider .flex-direction-nav > li').css(background_rgb);

    $jqInitColors('.h-cat-1 .modern-items-list .fold-item .description').css(background_rgba);
    $jqInitColors('.h-cat-1 .last-post .img-container .img-meta .post-date').css(background_rgba);
    $jqInitColors('.h-cat-1 .flex-control-nav').css(border_rgba);


    // Review Category
    r = 255; g = 99; b = 15;
    background_rgb = { backgroundColor: "rgb(" + r + ',' + g + ',' + b + ")" };
    border_rgb = { borderColor: "rgb(" + r + ',' + g + ',' + b + ")" };
    border_rgba = { borderColor: "rgba(" + r + ',' + g + ',' + b + ',' + "0.27)" };
    background_rgba = { background: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)", backgroundColor: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)" };

    $jqInitColors('#divRev_Cat .color-picker > .select-color-image, .review-cat-1 .flexslider .flex-direction-nav > li').css(background_rgb);
    $jqInitColors('.review-cat-1 .cat-review .review .img-container .img-meta .post-result .percent').css(background_rgba);
    $jqInitColors('.review-cat-1 .flex-control-nav').css(border_rgba);
    $jqInitColors('.review-cat-1 .cat-review .review > .content::-webkit-scrollbar-thumb').css(background_rgba);

    // Vertical 1 Category
    r = 31; g = 184; b = 0;
    background_rgb = { backgroundColor: "rgb(" + r + ',' + g + ',' + b + ")" };
    border_rgb = { borderColor: "rgb(" + r + ',' + g + ',' + b + ")" };
    border_rgba = { borderColor: "rgba(" + r + ',' + g + ',' + b + ',' + "0.27)" };
    background_rgba = { background: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)", backgroundColor: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)" };

    $jqInitColors('#divV_Cat .color-picker > .select-color-image, .v-cat-1 .flexslider .flex-direction-nav > li').css(background_rgb);

    $jqInitColors('.v-cat-1 .modern-items-list .fold-item .description').css(background_rgba);
    $jqInitColors('.v-cat-1 .last-post .img-container .img-meta .post-date').css(background_rgba);
    $jqInitColors('.v-cat-1 .flex-control-nav').css(border_rgba);


    // Vertical 2 Category
    r = 227; g = 25; b = 92;
    background_rgb = { backgroundColor: "rgb(" + r + ',' + g + ',' + b + ")" };
    border_rgb = { borderColor: "rgb(" + r + ',' + g + ',' + b + ")" };
    border_rgba = { borderColor: "rgba(" + r + ',' + g + ',' + b + ',' + "0.27)" };
    background_rgba = { background: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)", backgroundColor: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)" };

    $jqInitColors('#divV_Cat_2 .color-picker > .select-color-image, .v-cat-2 .flexslider .flex-direction-nav > li').css(background_rgb);

    // Category Colors
    $jqInitColors('.v-cat-2 .modern-items-list .fold-item .description').css(background_rgba);
    $jqInitColors('.v-cat-2 .last-post .img-container .img-meta .post-date').css(background_rgba);
    $jqInitColors('.v-cat-2 .flex-control-nav').css(border_rgba);

    // Horiz Divided Category
    r = 22; g = 72; b = 148;
    background_rgb = { backgroundColor: "rgb(" + r + ',' + g + ',' + b + ")" };
    background_rgba = { background: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)", backgroundColor: "rgba(" + r + ',' + g + ',' + b + ',' + "0.73)" };

    $jqInitColors('#divHD_Cat .color-picker > .select-color-image').css(background_rgb);
    $jqInitColors('.hd-cat-1 .last-post .img-container .img-meta .post-date').css(background_rgba);

});
$ = jQuery.noConflict(); //restore the $ symbol


$jqStyleSwitcher = jQuery.noConflict();
$jqStyleSwitcher(document).ready(function () {
    $opened = false;

    // Category Colors
    var background_rgb, backgroundColor_rgba, background_rgba, border_rgb, border_rgba;

    $jqStyleSwitcher("#divStyleSwitcher").css('left', '-321');


    $jqStyleSwitcher("#btnToggleStyleSwitcher").click(function () {
        if ($opened) {
            $jqStyleSwitcher(this).parent().animate({ left: '-321px' }, 500);
            $opened = false;
        } else {
            $jqStyleSwitcher(this).parent().animate({ left: '0' }, 500);
            $opened = true;
        }
    });

    // Theme Color
    $jqStyleSwitcher('#divColorRed > a').ColorPicker({
        color: '',
        onShow: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {

            //$jqStyleSwitcher('#cssThemeColor[rel=stylesheet]').attr('href', '../site/skin-and-color/color/skin-red-d02222.css');
            background_rgb = { background: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")", backgroundColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };
            backgroundColor_rgba = { backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };

            var background_rgba_06 = { background: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.06)", backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.06)" };
            var background_rgba_87 = { background: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.87)", backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.87)" };

            background_rgba = { background: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)", backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };

            border_rgb = { borderColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };
            var border_rgba_27 = { borderColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.27)" };
            var border_bottom_rgb = { borderBottomColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };

            var font_rgb = { Color: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };

            $jqStyleSwitcher('#divColorRed .select-color-image').css('background-color', '#' + hex, '!important');

            // Background Colors
            $jqStyleSwitcher('.navbar-main .navbar .nav li.dropdown.open > .dropdown-toggle, .navbar-main .navbar .nav li.dropdown.active > .dropdown-toggle, .navbar-main .navbar .nav li.dropdown.open.active > .dropdown-toggle, .navbar-main .navbar .nav > .active > a, .navbar-main .navbar .nav li.dropdown.active > .dropdown-toggle, .navbar-main .navbar .nav li.dropdown.open.active > .dropdown-toggle, .btn-theme, .breaking-news-widget > .row-fluid > .title, .widget .widget-content ul.tabs-header > li.btn-theme.active > a, .article-content .social-share-footer .figure, .carousel-nav .carousel-indicators .active, .article-content .blog .paging-footer .pagination ul > .active a, .widget-title > h3:after, .cat-widget-title h3:after, .widget-title > h4:after, .f-widget-title > h4:after, .cat-widget .cat-widget-title h3:after').css(background_rgb);

            //$jqStyleSwitcher('.widget .widget-content .widget-weather').css(background_rgba_06);
            $jqStyleSwitcher('.modern-items-list .fold-item .description, .cat-review .review .img-container .img-meta .post-result .percent').css(background_rgba_87);

            // Border Colors
            //$jqStyleSwitcher('.flex-control-nav, .widget .widget-content .widget-weather').css(border_rgba_27);
            $jqStyleSwitcher('.breaking-news-widget').css(border_rgb);
            $jqStyleSwitcher('.top-menu-2 .navbar-inner .brand:after, .top-menu-2 .about-company .title > h3:after').css(border_bottom_rgb);

            // Font Colors
            $jqStyleSwitcher('.input-append .add-on, .input-prepend .add-on, .article-content .social-share-footer .share-icon,').css(font_rgb);
        }
    });

    $jqStyleSwitcher('#divColorBlue a').click(function () {
        $jqStyleSwitcher('#cssThemeColor[rel=stylesheet]').attr('href', '../site/skin-and-color/color/skin-B-29B6D1.css');
    });
    $jqStyleSwitcher('#divColorOrange a').click(function () {
        $jqStyleSwitcher('#cssThemeColor[rel=stylesheet]').attr('href', '../site/skin-and-color/color/skin-Ora-FF1F00.css');
    });
    $jqStyleSwitcher('#divColorGreen a').click(function () {
        $jqStyleSwitcher('#cssThemeColor[rel=stylesheet]').attr('href', '../site/skin-and-color/color/skin-G-4AB403.css');
    });
    $jqStyleSwitcher('#divColorBlue2 a').click(function () {
        $jqStyleSwitcher('#cssThemeColor[rel=stylesheet]').attr('href', '../site/skin-and-color/color/skin-B2-0E72F1.css');
    });
    $jqStyleSwitcher('#divColorMoov a').click(function () {
        $jqStyleSwitcher('#cssThemeColor[rel=stylesheet]').attr('href', '../site/skin-and-color/color/skin-Moov-8E5AEC.css');
    });
    $jqStyleSwitcher('#divColorFucia a').click(function () {
        $jqStyleSwitcher('#cssThemeColor[rel=stylesheet]').attr('href', '../site/skin-and-color/color/skin-Fucia-F730FF.css');
    });
    $jqStyleSwitcher('#divColorFucia2 a').click(function () {
        $jqStyleSwitcher('#cssThemeColor[rel=stylesheet]').attr('href', '../site/skin-and-color/color/skin-Fucia2-FF0F5B.css');
    });

    // HTML Background Color
    $jqStyleSwitcher('#divBackgroundColor .color-picker > a').ColorPicker({
        color: '',
        onShow: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            $jqStyleSwitcher('#divBackgroundColor .select-color-image').css('background-color', '#' + hex, '!important');
            $jqStyleSwitcher('html').css('background-color', '#' + hex, '!important');
        }
    });

    // Sticky Menu
    $jqStyleSwitcher('#divStickyNav > a').click(function () {
        var navMain = $jqStyleSwitcher('.navbar-main');
        var isSticky = $jqStyleSwitcher('.navbar-main.enable-fixed');

        if (isSticky.length > 0) {
            navMain.removeClass('enable-fixed');
            navMain.removeClass('navbar-fixed-top');
            $jqStyleSwitcher('#divStickyNav > a').text('Sticky Navigation (Disabled)');
        }

        else {
            $jqStyleSwitcher('#divStickyNav > a').text('Sticky Navigation (Enabled)');
            navMain.addClass('enable-fixed');

            var hedaerHeight = $jqStyleSwitcher('.navbar-main').offset().top;
            var main = $jqStyleSwitcher('.enable-fixed');

            $jqStyleSwitcher(window).scroll(function () {
                HeaderScroll();
            });
            $jqStyleSwitcher(window).load(function () {
                HeaderScroll();
            });

            function HeaderScroll() {
                var scrollY = $jqStyleSwitcher(window).scrollTop();
                if (main.length > 0) {
                    if (scrollY > hedaerHeight + 75) {
                        main.stop().addClass('navbar-fixed-top');
                    } else if (scrollY < hedaerHeight + 75) {
                        main.removeClass('navbar-fixed-top');
                    }
                }
            }
        }
    });

    // Full/Boxed Styles
    $jqStyleSwitcher('#divFluidStyle').click(function () {
        $jqStyleSwitcher('body').css('max-width', 'none');
    });

    $jqStyleSwitcher('#divFixedStyle').click(function () {
        $jqStyleSwitcher('body').css('max-width', '1280' + 'px');
    });

    // Patterns
    $jqStyleSwitcher('#divP-1 a').click(function () {
        $jqStyleSwitcher('html').css('background-image', 'url' + '(http://labs.serpentsoft.com/adams-magazine/images/bg/bg2.png)');
    });

    $jqStyleSwitcher('#divP-2 a').click(function () {
        $jqStyleSwitcher('html').css('background-image', 'url' + '(http://labs.serpentsoft.com/adams-magazine/images/bg/bg21.png)');
    });

    $jqStyleSwitcher('#divP-3 a').click(function () {
        $jqStyleSwitcher('html').css('background-image', 'url' + '(http://labs.serpentsoft.com/adams-magazine/images/bg/bg3.png)');
    });

    $jqStyleSwitcher('#divP-4 a').click(function () {
        $jqStyleSwitcher('html').css('background-image', 'url' + '(http://labs.serpentsoft.com/adams-magazine/images/bg/bg5.png)');
    });

    $jqStyleSwitcher('#divP-5 a').click(function () {
        $jqStyleSwitcher('html').css('background-image', 'url' + '(http://labs.serpentsoft.com/adams-magazine/images/bg/bg26.png)');
    });

    $jqStyleSwitcher('#divP-6 a').click(function () {
        $jqStyleSwitcher('html').css('background-image', 'url' + '(http://labs.serpentsoft.com/adams-magazine/images/bg/bg35.png)');
    });

    $jqStyleSwitcher('#divP-7 a').click(function () {
        $jqStyleSwitcher('html').css('background-image', 'url' + '(http://labs.serpentsoft.com/adams-magazine/images/bg/bg37.png)');
    });

    $jqStyleSwitcher('#divP-8 a').click(function () {
        $jqStyleSwitcher('html').css('background-image', 'url' + '(http://labs.serpentsoft.com/adams-magazine/images/bg/bg38.png)');
    });


    // Horizontal Category
    $jqStyleSwitcher('#divH_Cat a').ColorPicker({
        color: '',
        onShow: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {

            background_rgb = {
                backgroundColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")"
            };

            backgroundColor_rgba = {
                backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)"
            };

            background_rgba = {
                background: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)",
                backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)"
            };

            border_rgb = {
                borderColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")"
            };

            border_rgba = {
                borderColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.27)"
            };


            $jqStyleSwitcher('#divH_Cat .select-color-image, .h-cat-1 .flexslider .flex-direction-nav > li').css('background-color', '#' + hex, '!important');
            $jqStyleSwitcher('.h-cat-1 .modern-items-list .fold-item .description').css(background_rgba);
            $jqStyleSwitcher('.h-cat-1 .cat-horiz .last-post .img-container .img-meta .post-date').css(background_rgba);
            $jqStyleSwitcher('.h-cat-1 .flex-control-nav').css(border_rgba);

        }
    });

    // Reviews Category
    $jqStyleSwitcher('#divRev_Cat a').ColorPicker({
        color: '',
        onShow: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {

            background_rgb = { backgroundColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };
            backgroundColor_rgba = { backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };
            background_rgba = { background: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)", backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };
            border_rgb = { borderColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };
            border_rgba = { borderColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.27)" };

            $jqStyleSwitcher('#divRev_Cat .select-color-image, .review-cat-1 .flexslider .flex-direction-nav > li').css('background-color', '#' + hex, '!important');
            $jqStyleSwitcher('.review-cat-1 .cat-review .review .img-container .img-meta .post-result .percent').css(backgroundColor_rgba);
            $jqStyleSwitcher('.review-cat-1 .flex-control-nav').css(border_rgba);

        }
    });

    $jqStyleSwitcher('#divV_Cat a').ColorPicker({
        color: '',
        onShow: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            background_rgb = { backgroundColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };
            backgroundColor_rgba = { backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };
            background_rgba = { background: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)", backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };
            border_rgb = { borderColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };
            border_rgba = { borderColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.27)" };

            // Style Switcher Color
            $jqStyleSwitcher('#divV_Cat .select-color-image, .v-cat-1 .flexslider .flex-direction-nav > li').css('background-color', '#' + hex, '!important');

            // Category Colors
            $jqStyleSwitcher('.v-cat-1 .modern-items-list .fold-item .description').css(background_rgba);
            $jqStyleSwitcher('.v-cat-1 .last-post .img-container .img-meta .post-date').css(background_rgba);
            $jqStyleSwitcher('.v-cat-1 .flex-control-nav').css(border_rgba);
        }
    });

    $jqStyleSwitcher('#divV_Cat_2 a').ColorPicker({
        color: '',
        onShow: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            background_rgb = { backgroundColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };
            backgroundColor_rgba = { backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };
            background_rgba = { background: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)", backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };
            border_rgb = { borderColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };
            border_rgba = { borderColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.27)" };

            // Style Switcher Color
            $jqStyleSwitcher('#divV_Cat_2 .select-color-image, .v-cat-2 .flexslider .flex-direction-nav > li').css('background-color', '#' + hex, '!important');

            // Category Colors
            $jqStyleSwitcher('.v-cat-2 .modern-items-list .fold-item .description').css(background_rgba);
            $jqStyleSwitcher('.v-cat-2 .last-post .img-container .img-meta .post-date').css(background_rgba);
            $jqStyleSwitcher('.v-cat-2 .flex-control-nav').css(border_rgba);
        }
    });

    $jqStyleSwitcher('#divHD_Cat a').ColorPicker({
        color: '',
        onShow: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $jqStyleSwitcher(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            background_rgb = { backgroundColor: "rgb(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ")" };
            backgroundColor_rgba = { backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };
            background_rgba = { background: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)", backgroundColor: "rgba(" + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + "0.73)" };

            $jqStyleSwitcher('#divHD_Cat .select-color-image').css('background-color', '#' + hex, '!important');
            $jqStyleSwitcher('.hd-cat-1 .last-post .img-container .img-meta .post-date').css(background_rgba);
        }
    });
});
$ = jQuery.noConflict(); //restore the $ symbol
