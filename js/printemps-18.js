var zodiac = {
    "aries": "Trouver un équilibre amoureux sera votre défi de ce printemps. Vos amours seront très prenants, avec des opportunités et des challenges plus que motivants. Mais il faudra faire la part des choses. Prudence et rigueur seront vos mètres mots, surtout face à un problème de taille que vous allez avoir à régler. Un problème qu’il faudra prendre avec des pincettes sous peine de voir tous les efforts que vous avez fournis ces dernières années partir en fumée. Une seule solution : respectez votre",
    "taurus": "Le climat astral amoureux sera globalement facile pour vous ce printemps. Plus questions des soucis de ces dernières années, ce printemps des amours  vous laisse les coudées franches pour réussir tout ce que vous souhaitez. Un seul petit bémol : une seule petite erreur de votre part va néanmoins avoir de grosses conséquences sur vos amours. Pour être réparée, cette erreur devra être prise au sérieux, sans quoi elle pourra bien venir tenir ce beau printemps qui vous est promis. Mais vous ne vous tourmentez pas pour autant, il vous suffit de",
    "gemini": "Ce printemps des amours sera à aborder avec délicatesse. Il  sera plein de bons aspects pour vous en mettant l’accent sur des secteurs clés de votre quotidien amoureux. Votre générosité sera à l’origine d’une belle opportunité dans le courant de Mai. Une opportunité qui vous vaudra une chance en or que vous ne devez pas rater. Mais prudence car cette chance ne tombera pas du ciel sans vos efforts. Vous ne devrez plus attendre et faire en sorte que",
    "cancer": "otre printemps amoureux 2018 sera marqué par les améliorations, et ce dans tous les domaines, notamment amoureux et professionnels. Les progrès seront lents et certaines influences ne vous aideront pas à avancer aussi vite que vous le souhaiteriez. C’est en suivant le cheminement des choses que vous trouverez le bout du chemin. La patience devra donc être de mise, car vous n’arriverez à rien si vous cherchez à tout basculer d’un coup. Misez plutôt sur",
    "leo": "Ce printemps mettra l’accent sur tout ce qui touche à vos amours. En donnant votre maximum dans ce domaine, vous trouverez une belle réussite à coup sûr. De nombreuses difficultés du passé vont s’atténuer, voir disparaître pour votre plus grand bonheur. Même si toute cette réussite et ce bonheur sont à atténuer par quelques petits tracas, les bons aspects seront plus nombreux que les mauvais pour vous. Vous devrez donc",
    "virgo": "L’équilibre amoureux sera fondamental pour réussir ce printemps. Vous devrez trouver la balance parfaite entre tous les domaines de votre quotidien. L’avenir s’annonce sous les meilleurs auspices en amour. Tout tournera autour de votre capacité à trouver le juste milieu entre vos actions et leurs conséquences. Vous devrez conjuguer vos désirs et vos besoins personnels avec les personnes qui vous entourent. Car attention, faute de quoi, vous ne serez",
    "libra": "Pleins feux sur votre vie amoureuse pour ce printemps. C’est en vous concentrant sur ces secteur que vous trouverez toute la confiance, l’amour et le bonheur dont vous avez besoin. Ce qui fera même passer tous les petits problèmes de la vie courante au second degré. Ce printemps des amours vous sera donc favorable à condition que vous preniez votre destin en main. Vous avez toutes les cartes en main, il ne vous reste plus qu’à dégainer le jeu qui fera mouche. Une seule chose à retenir : préparez",
    "scorpio": "Un seul mot d’ordre pour ce printemps : l’amour. Vous devrez garder cette notion en tête tout au long de votre année, et surtout veilliez à ne jamais perdre votre calme ou vous énerver. C’est en adoptant une attitude déterminée et confiante que vous obtiendrez ce que vous souhaitez. Manœuvrez donc tous vos projets avec prudence et patience, sans quoi tout risque de se retourner contre vous. Pour aller plus loin et mettre toutes les chances de votre côté, misez sur",
    "sagittarius": "Ce printemps des amours  sera synonyme d’évolution pour vous, et sera marqué par les bonnes nouvelles et autres aspects positifs. Vous devez à tout prix profiter de ces chances et de ces influences qui toucheront notamment votre vie amoureuse. Vous aurez donc des décisions importantes à prendre. Vos choix devront être les bons car ces décisions auront de grosses conséquences, qui réorienteront votre vie. Vous pourrez faire les bons choix seulement si vous prenez en compte",
    "capricorn": "Ce printemps des amours  s’annonce très  positif pour vous. Une énergie que vous devrez utiliser à bon escient, et qui donnera un coup de boost à vos amours dans votre quotidien. Surveillez vos humeurs qui pourront vous jouer des tours et vous écarter de cette route toute tracée. Un printemps positif qu’il faudra néanmoins aller chercher. N’attendez pas pour agir, sinon beaucoup de choses vous passeront sous le nez comme",
    "aquarius": "Ce printemps des amours  sera fertile pour vous. Fertile car il vous tendra des opportunités amoureuses à saisir. Vous devrez donc être en pleine forme et vous préparer pour transformer ces opportunités en chances concrètes. Évitez certaines affaires qui pourront vous porter préjudice et vous conduire dans des situations plus que périlleuses. Attention également à votre entourage, à votre confiance et aux confidences que vous pourrez faire. Certaines personnes mal intentionnées se feront un malin plaisir à",
    "pisces": "Le printemps des amours  n’a pas prévu que des choses positives en amour  pour vous, en prenant soin de placer plusieurs problèmes de taille sur votre route. Vos relations amoureuses occuperont le devant de la scène durant ce printemps et cet été. Chacun de ces petits problèmes devront vous pousser à prendre le recul nécessaire, pour trouver le meilleur équilibre avec tous ceux qui pourront se trouver à vos côtés. Vous devrez faire la part des choses en essayant de"
  },
  sign = $('.sign'),
  back = $('.control-button--back'),
  zodiacFr = {
    "aries": "Bélier",
    "taurus": "Taureau",
    "gemini": "Gémeaux",
    "cancer": "Cancer",
    "leo": "Lion",
    "virgo": "Vierge",
    "libra": "Balance",
    "scorpio": "Scorpion",
    "sagittarius": "Sagittaire",
    "capricorn": "Capricorne",
    "aquarius": "Verseau",
    "pisces": "Poisson"
  },
  zodiacColor = {
    "capricorn": "#214f66",
    "taurus": "#a88d78",
    "gemini": "#214f66",
    "cancer": "#bcbaba",
    "leo": "#f5b2b6",
    "virgo": "#d88093",
    "libra": "#a88d78",
    "scorpio": "#214f66",
    "sagittarius": "#bcbaba",
    "aries": "#d88093",
    "aquarius": "#bcbaba",
    "pisces": "#f5b2b6"
  };
//
$(function() {
  sign.click(function(e) {
    var s = $(this).find('a').attr('data-sign');
    var signSingle = $('.sign-single'),
      name = $(this).find('.sign-name').text(),
      date = $(this).find('.sign-period').text();

    signSingle.attr('data-sign', s);
    $('.sign-single[data-sign=' + s + ']').find('.prevision').text(zodiac[s] + "... (lire la suite)");
    signSingle.find('.sign-name').text(name);
    signSingle.find('.sign-period').text(date);
    d3.select(".zodiac-large").append("svg").attr("width", 500).attr("height", 500).style("opacity", 0.6).append("use").attr("xlink:href", "#" + s).style("fill", "#ffffff");
    d3.select(".svg-container").append("svg").attr("width", 53).attr("height", 53).style("opacity", 0.6).append("use").attr("xlink:href", "#" + s).style("fill", "#ffffff");


    $('input[name="sign"]').val(zodiacFr[s]);

    showExpander({
      x: e.pageX,
      y: e.pageY
    }, function() {
      console.log('Expand it');

    }, zodiacColor[s]);
  });
  back.click(function() {
    hideExpander();
    $('.zodiac-large').empty();
    $('input[name="sign"]').val('');
    $('.svg-container').empty();
  });
  var expander = $('.deco-expander');

  function showExpander(position, callback, zBackground) {
    var expenderStyle = {
        opacity: 1,
        left: position.x,
        top: position.y,
        backgroundColor: zBackground,
        scale: 0,
      },
      expanderAnimation = {
        scale: 1.5,
        backgroundColor: zBackground // trying to put the clicked sign color
      };
    console.log(zBackground);
    expander.css(expenderStyle);
    expander.animate(expanderAnimation, 500, function() {});
    expander.addClass('scale');
    setTimeout(function() {
      $('html').addClass('js');
    }, 500);
    callback();
  }

  function hideExpander() {
    $('html').removeClass('js');
    var expanderStyle = {
        left: window.innerWidth / 2,
        top: window.innerHeight / 2
      },
      expanderAnimation = {
        opacity: 0
      };
    expander.css(expanderStyle);
    expander.animate(expanderAnimation, 500);
    expander.removeClass('scale');
  }
  $('.modal-btn').click(function() {
    $('.modal').fadeOut("slow");
  });
  setTimeout(function() {
    $('.view--loading').addClass('hidden');
    $('.site-header').removeClass('hidden');
    $('.view--current').removeClass('hidden');
    $('.SiteFooter').removeClass('hidden');
    $('.SiteCopyright').removeClass('hidden');
  }, 2500);

});
