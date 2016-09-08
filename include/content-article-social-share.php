<?php
    $url = '';
    
    if(isset($_SERVER['HTTPS']) && filter_var($_SERVER['HTTPS'], FILTER_VALIDATE_BOOLEAN)){
        $url .= 'https';
    } else {
        $url .= 'http';
    }
    $url .= '://';

    if(isset($_SERVER['HTTP_HOST'])){
        $url .= $_SERVER['HTTP_HOST'];
    } elseif(isset($_SERVER['SERVER_NAME'])){
        $url .= $_SERVER['SERVER_NAME'];
    } else {
        trigger_error ('Could not get URL from $_SERVER vars');
    }

    if($_SERVER['SERVER_PORT'] != '80'){
        $url .= ':'.$_SERVER["SERVER_PORT"];
    }

    if(isset($_SERVER['REQUEST_URI'])){
        $url .= $_SERVER['REQUEST_URI'];
    } elseif(isset($_SERVER['PHP_SELF'])){
        $url .= $_SERVER['PHP_SELF'];
    } elseif(isset($_SERVER['REDIRECT_URL'])){
        $url .= $_SERVER['REDIRECT_URL'];
    } else {
        trigger_error ('Could not get URL from $_SERVER vars');
    }
?>
<div class="row-fluid social-share-footer">
    <div class="share-icons">
        <div style="text-align:center;top:-3px;margin-left:20%;">
            <!-- Facebook -->
            <iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=1&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
            <!-- Twitter -->
            <a href="https://twitter.com/share" class="twitter-share-button" data-lang="fr">Tweeter</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <!-- Google+ -->
            <div class="g-plusone"></div>
            <script type="text/javascript">
                window.___gcfg = {lang: 'fr'};
                (function() {
                  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                  po.src = 'https://apis.google.com/js/plusone.js';
                  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
            </script>
        </div> 
    </div>
    <!--div><br><?= utf8_encode($asia_bottom)?></div-->
</div>