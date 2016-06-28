
$jqFancybox = jQuery.noConflict();

$jqFancybox(function () {
    /*
    fancybox init on each cloud-zoom element
     */
    $jqFancybox(".cat-readhere #gallery_1 .cloud-zoom").fancybox({
        'transitionIn': 'elastic',
        'transitionOut': 'none',
        'speedIn': 600,
        'speedOut': 200,
        'overlayShow': true,
        'overlayColor': '#000',
        'cyclic': false,
        'easingIn': 'easeInOutExpo'
    });

    /*
    because the cloud zoom plugin draws a mousetrap
    div on top of the image, the fancybox click needs
    to be changed. What we do here is to trigger the click
    the fancybox expects, when we click the mousetrap div.
    We know the mousetrap div is inserted after
    the <a> we want to click:
     */
    $jqFancybox(".cat-readhere #gallery_1 .mousetrap").live('click', function () {
        $jqFancybox(this).prev().trigger('click');
    });

    /*
    the content element;
    each list item / group with several images
     */
    var $content = $jqFancybox('.cat-readhere #gallery_1'),
    $thumb_list = $content.find('.thumb > ul');
    /*
    we need to set the width of each ul (sum of the children width);
    we are also defining the click events on the right and left arrows
    of each item.
     */
    $thumb_list.each(function () {
        var $this_list = $jqFancybox(this),
        total_w = 0,
        loaded = 0,
        //preload all the images first
        $images = $this_list.find('img'),
        total_images = $images.length;
        $images.each(function () {
            var $img = $jqFancybox(this);
            $jqFancybox('<img/>').load(function () {
                ++loaded;
                if (loaded == total_images) {
                    $this_list.data('current', 0).children().each(function () {
                        total_w += $jqFancybox(this).width();
                    });
                    $this_list.css('width', total_w + 'px');

                    //next / prev events

                    $this_list.parent()
                    .siblings('.next')
                    .bind('click', function (e) {
                        var current = $this_list.data('current');
                        if (current == $this_list.children().length - 1) return false;
                        var next = ++current,
                        ml = -next * $this_list.children(':first').width();

                        $this_list.data('current', next)
                        .stop()
                        .animate({
                            'marginLeft': ml + 'px'
                        }, 400);
                        e.preventDefault();
                    })
                    .end()
                    .siblings('.prev')
                    .bind('click', function (e) {
                        var current = $this_list.data('current');
                        if (current == 0) return false;
                        var prev = --current,
                        ml = -prev * $this_list.children(':first').width();

                        $this_list.data('current', prev)
                        .stop()
                        .animate({
                            'marginLeft': ml + 'px'
                        }, 400);
                        e.preventDefault();
                    });
                }
            }).attr('src', $img.attr('src'));
        });
    });
});

$ = jQuery.noConflict();