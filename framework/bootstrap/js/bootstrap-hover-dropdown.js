/*
 * Project: Twitter Bootstrap Hover Dropdown
 * Author: Cameron Spear
 * Contributors: Mattia Larentis
 *
 * Dependencies?: Twitter Bootstrap's Dropdown plugin
 *
 * A simple plugin to enable twitter bootstrap dropdowns to active on hover and provide a nice user experience.
 *
 * No license, do what you want. I'd love credit or a shoutout, though.
 *
 * http://cameronspear.com/blog/twitter-bootstrap-dropdown-on-hover-plugin/
 */
;(function($, window, undefined) {
    // outside the scope of the jQuery plugin to
    // keep track of all dropdowns
    var $allDropdowns = $();

    // if instantlyCloseOthers is true, then it will instantly
    // shut other nav items when a new one is hovered over
    $.fn.dropdownHover = function(options) {

        // the element we really care about
        // is the dropdown-toggle's parent
        $allDropdowns = $allDropdowns.add(this.parent());

        return this.each(function() {
            var $this = $(this).parent(),
                defaults = {
                    delay: 500,
                    instantlyCloseOthers: true
                },
                data = {
                    delay: $(this).data('delay'),
                    instantlyCloseOthers: $(this).data('close-others')
                },
                settings = $.extend(true, {}, defaults, options, data),
                timeout;

            //// Return Menu Height to its original state
            //$this.children('.dropdown-menu').css({ height: 'auto' });
            //// Get original height
            //var ulDropMenuHeight = $this.children('.dropdown-menu').height();
            //// Return Height to Zero state
            //$this.children('.dropdown-menu').css({ height: "0", overflow: "hidden" });

            $this.hover(function () {

                //// Fix issues in responsive mode
                //// Return Menu Height to its original state
                //$this.children('.dropdown-menu').css({ height: 'auto' });
                //// Get original height
                //var ulDropMenuHeight = $this.children('.dropdown-menu').height();
                //// Return Height to Zero state
                //$this.children('.dropdown-menu').css({ height: "0", overflow: "hidden" });

                if (settings.instantlyCloseOthers === true) {
                    $allDropdowns.removeClass('open');
                    $allDropdowns.children('.dropdown-menu').slideUp(50);
                    //$allDropdowns.children('.dropdown-menu').css({ display: "none", overflow: "hidden" });
                    //$allDropdowns.children('.dropdown-menu').stop().animate({ height: '0' }, { queue: false, duration: 50, easing: 'jswing' });
                }

                window.clearTimeout(timeout);
                
                $('> .dropdown-menu', this).slideDown(200);
                $(this).addClass('open');

                //$(this).children('.dropdown-menu').css({ display: "block", overflow: "hidden" });
                //$(this).children('.dropdown-menu').stop().animate({ height: ulDropMenuHeight + "px" }, { queue: false, duration: 50, easing: 'jswing' });

            }, function() {
                timeout = window.setTimeout(function() {
                    $this.removeClass('open');

                    $this.children('.dropdown-menu').slideUp(50);

                    //$this.children('.dropdown-menu').css({ display: "none", overflow: "hidden" });
                    //$this.children('.dropdown-menu').stop().animate({ height: '0' }, { queue: false, duration: 50, easing: 'jswing' });

                }, settings.delay);
            });

            $this.children('.dropdown-menu').find('.dropdown-submenu').hover(function () {
                $(this).parent().css({ overflow: "visible" });

            });
        });
    };

    // apply dropdownHover to all elements with the data-hover="dropdown" attribute
    $(document).ready(function() {
        $('[data-hover="dropdown"]').dropdownHover();
    });
})(jQuery, this);