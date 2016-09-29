<aside class="widget w-social-counter">
    <div class="widget-title">
        <h4>Réseaux sociaux</h4>
    </div>
    <div class="widget-content clearfix">
        <div class="social-counter-metro">
            <ul class="clearfix">
                <li class="fb-wrp">
                    <div class="btn-count">
                        <div class="social-counter-metro mask">
                            <span>Like</span>
                            <a target="_blank" href="https://www.facebook.com/pages/Myastro/437290166297323" class="more"></a>
                        </div>
                        <div class="facebook">
                            <i class="facebook-sicon-48-white"></i>
                            <span>
<?php
//http://graph.facebook.com/437290166297323
$page = @file_get_contents($script);
if($page){
    $page = explode(",", $page);
    $page = str_replace('"total_count":', '', $page[4]);
    echo $page;
}
?>7078
                            </span>
                            <span class="fans">Fans</span>
                        </div>
                    </div>
                </li>
                <li class="tr-wrp">
                    <div class="btn-count">
                        <div class="social-counter-metro mask">
                            <span>Twitter</span>
                            <a target="_blank" href="https://twitter.com/MYASTRO1" class="more"></a>
                        </div>
                        <div class="twitter">
                            <i class="twitter-sicon-48-white"></i>
                            <span>
<?php /*
$script = "http://api.sharedcount.com/?url=http://www.myastro.fr";
$page = file_get_contents($script);
$page = explode(",",$page);
$page = str_replace('"Twitter":','',$page[11]);

echo $page;

$url='http://query.yahooapis.com/v1/public/yql?q=SELECT%20*%20from%20html%20where%20url=%22http://twitter.com/MYASTRO1%22%20AND%20xpath=%22//a[@class=\'js-nav\']/strong%22&format=json';
$src = file_get_contents($url);
$decoded = json_decode($src);

echo ($decoded->query->results->strong[2]);	*/
?>434
                            </span>
                            <span class="fans">Abonnés</span>
                        </div>
                    </div>
                </li>
                <li class="gp-wrp">
                    <div class="btn-count">
                        <div class="social-counter-metro mask">
                            <span>Partages</span>
                            <a target="_blank"  href="https://plus.google.com/113553129882139226237/posts" class="more"></a>
                        </div>
                        <div class="googleplus">
                            <i class="googleplus-sicon-48-white"></i>
                            <span>
<?php
$script = "http://api.sharedcount.com/?url=http://www.myastro.fr";
$page = @file_get_contents($script);
if($page){
    $page = explode(",", $page);
    $page = str_replace('"GooglePlusOne":', '', $page[9]);
    echo $page;
}
?>354
                            </span>
                            <span class="fans">Partages</span>
                        </div>
                    </div>
                </li>
                <li class="rs-wrp">
                    <div class="btn-count">
                        <div class="social-counter-metro mask">
                            <span>Souscrire</span>
                            <a href="#" class="more"></a>
                        </div>
                        <div class="rss">
                            <i class="rss-sicon-48-white"></i>
                            <span>Souscrire</span>
                            <span class="fans">Au RSS</span>
                        </div>
                    </div>
                </li>
                <!--<li class="drb-wrp">
                    <div class="btn-count">
                        <div class="social-counter-metro mask">
                            <span>Follow</span>
                            <a href="#" class="more"></a>
                        </div>

                        <div class="dribbble">
                            <i class="dribbble-sicon-48-white"></i>
                            <span>29,000,000</span>
                            <span class="fans">Followers</span>
                        </div>
                    </div>
                </li>-->
            </ul>
        </div>
    </div>
</aside>

