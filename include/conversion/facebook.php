<!-- fichier conversion facebook -->
<?php if (isset($_SESSION['conversion']) && $_SESSION['conversion'] == 1 and $_SESSION['affiliation'] == 'facebook_adds'){ ?>
<!-- Conversion tag Facebook -->
<script>
    (function() {
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
<noscript>
    <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6017569293945&amp;cd[value]=0.01&amp;cd[currency]=EUR&amp;noscript=1" />
</noscript>
<?php
    unset($_SESSION['conversion']);
}

