$(function(){
  var video_playing = false;
  var $video_player_container = $('#video_player_container');
  var width = $video_player_container.width();
  var height = $video_player_container.height();
  jwplayer('video_player').setup({
    file:'/videos/amour.mp4',
    image:'/videos/amour.jpg',
    width: width,
    height: width*0.5625,
    stretching:"exactfit",
    autostart: false,
    startparam: "start",
    analytics: {
      cookies: false,
      enabled:false
    },
    events:{
      onReady:function()
      {
        jwplayer('video_player').pause(true);
      }
    }
  });
  $(document).on(
    'click',
    function()
    {
      if(!video_playing)
      {
        video_playing = true;
        jwplayer('video_player').pause(false);
      }
    }
  );
  $(window).on(
    'focusin',
    function()
    {
      if(!video_playing)
      {
        video_playing = true;
        jwplayer('video_player').pause(false);
      }
    }
  );
  $(window).on(
    'focusout',
    function()
    {
      if(video_playing)
      {
        video_playing = false;
        jwplayer('video_player').pause(true);
      }
    }
  );

  
});