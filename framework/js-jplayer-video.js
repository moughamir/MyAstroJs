
$jqJPlayerVideo = jQuery.noConflict();
$jqJPlayerVideo(document).ready(function () {

    $("#jquery_jplayer_1").jPlayer({
        ready: function () {
            $(this).jPlayer("setMedia", {
                m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
                //ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
                //webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
                poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
            });
        },
        swfPath: "jPlayer-220",
        supplied: "webmv, ogv, m4v",
        size: {
            width: "100%",
            height: "360px",
            cssClass: "jp-video-360p"
        }
    });


    $("#jplayer_inspector").jPlayerInspector({ jPlayer: $("#jquery_jplayer_1") });

});
$ = jQuery.noConflict(); //restore the $ symbol