
$jqJPlayerAudio = jQuery.noConflict();
$jqJPlayerAudio(document).ready(function () {

    $jqJPlayerAudio("#jquery_jplayer_1").jPlayer({
        ready: function (event) {
            $jqJPlayerAudio(this).jPlayer("setMedia", {
                mp3: "http://www.alafasy.me/audio/quran/1434/Al-Zokhrof.mp3"
                //,
                //oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
            });
        },
        swfPath: "jPlayer-220",
        supplied: "mp3, oga"
    });
});
$ = jQuery.noConflict(); //restore the $ symbol