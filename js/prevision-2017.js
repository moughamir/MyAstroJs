/**
 * Prevision-2017.js
 */
 var dev = true;
 if (dev){
   console.info("Hey Fam :)");
 } else {
   console.info("Dev mode disabled.");
 }
 /*global $*/

var zodiac = {
        "aries": "2017 n’a pas prévu que des choses positives pour vous, en prenant soin de placer plusieurs problèmes de taille sur votre route. Vos relations avec les personnes de votre entourage occuperont le devant de la scène durant toute l’année, et ce dans tous les domaines de votre quotidien. Chacun de ces petits problèmes devront vous pousser à prendre le recul nécessaire, pour trouver le meilleur équilibre avec tous ceux qui pourront se trouver à vos côtés. Vous devrez faire la part des choses en essayant de",
        "taurus": "Trouver un équilibre entre votre vie sociale et votre vie privée sera votre défi de 2017. Ces deux domaines seront très prenants, avec des opportunités et des challenges plus que motivants. Mais il faudra faire la part des choses. Prudence et rigueur seront vos maitres mots, surtout face à un problème de taille que vous allez avoir à régler. Un problème qu’il faudra prendre avec des pincettes sous peine de voir tous les efforts que vous avez fournis ces dernières années partir en fumée. Une seule solution : respectez votre",
        "gemini": "Le climat astral sera globalement facile pour vous en 2017. Plus questions des soucis de ces dernières années, 2017 vous laisse les coudées franches pour réussir tout ce que vous souhaitez. Un seul petit bémol : une seule petite erreur de votre part va néanmoins avoir de grosses conséquences. Pour être réparée, cette erreur devra être prise au sérieux, sans quoi elle pourra bien venir tenir cette belle année 2017 qui vous est promise. Mais vous ne vous tourmentez pas pour autant, il vous suffit de",
        "cancer": "Cette année 2017 sera à aborder avec délicatesse. Elle sera pleine de bons aspects pour vous en mettant l’accent sur des secteurs clés de votre quotidien. Votre générosité sera à l’origine d’une belle opportunité dans le courant de l’année. Une opportunité qui vous vaudra une chance en or que vous ne devez pas rater. Mais prudence car cette chance ne tombera pas du ciel sans vos efforts. Vous ne devrez plus attendre et faire en sorte que",
        "leo": "Votre année 2017 sera marquée par les améliorations, et ce dans tous les domaines, notamment amoureux et professionnels. Les progrès seront lents et certaines influences ne vous aideront pas à avancer aussi vite que vous le souhaiteriez. C’est en suivant le cheminement des choses que vous trouverez le bout du chemin. La patience devra donc être de mise, car vous n’arriverez à rien si vous cherchez à tout basculer d’un coup. Misez plutôt sur",
        "virgo": "2017 mettra l’accent sur tout ce qui touche à votre famille et votre carrière professionnelle. En donnant votre maximum dans ces domaines, vous trouverez une belle réussite à coup sûr. De nombreuses difficultés du passé vont s’atténuer, voir disparaitre pour votre plus grand bonheur. Même si toute cette réussite et ce bonheur sont à atténuer par quelques petits tracas qui ponctueront la fin de votre année, les bons aspects seront plus nombreux que les mauvais en 2017 pour vous. Vous devrez donc",
        "libra": "L’équilibre sera fondamental pour réussir votre année 2017. Vous devrez trouver la balance parfaite entre tous les domaines de votre quotidien. L’avenir s’annonce sous les meilleurs auspices en amour, mais le secteur professionnel et financier viendra ternir cette belle impression. Tout tournera autour de votre capacité à trouver le juste milieu entre vos actions et leurs conséquences. Vous devrez conjuguer vos désirs et vos besoins personnels avec les personnes qui vous entourent. Car attention, faute de quoi, vous ne serez",
        "scorpio": "Pleins feux sur votre vie amoureuse et vos projets personnels pour 2017. C’est en vous concentrant sur ces deux secteurs que vous trouverez toute la confiance, l’amour et le bonheur dont vous avez besoin. Ce qui fera même passer tous les petits problèmes de la vie courante au second degré. 2017 vous sera donc favorable à condition que vous preniez votre destin en main. Vous avez toutes les cartes en main, il ne vous reste plus qu’à dégainer le jeu qui fera mouche. Une seule chose à retenir : préparez",
        "sagittarius": "Un seul mot d’ordre pour 2017 : la patience. Vous devrez garder cette notion en tête tout au long de votre année, et surtout veilliez à ne jamais perdre votre calme ou vous énerver. C’est en adoptant une attitude déterminée et confiante que vous obtiendrez ce que vous souhaitez. Manœuvrez donc tous vos projets avec prudence et patience, sans quoi tout risque de se retourner contre vous, et faire de 2017 une année noire. Pour aller plus loin et mettre toutes les chances de votre côté, misez sur",
        "capricorn": "2017 sera synonyme d’évolution pour vous, et votre année sera marquée par les bonnes nouvelles et autres aspects positifs. Vous devez à tout prix profiter de ces chances et de ces influences qui toucheront notamment votre vie amoureuse. Vous aurez donc des décisions importantes à prendre en 2017. Vos choix devront être les bons car ces décisions auront de grosses conséquences, qui réorienteront votre vie. Vous pourrez faire les bons choix seulement si vous prenez en compte",
        "aquarius": "2017 s’annonce comme une année positive pour vous. Une positivité et une énergie que vous devrez utiliser à bon escient, et qui donnera un coup de boost à tous les secteurs de votre quotidien en lien avec le travail, les voyages et les relations avec votre entourage. Surveillez vos humeurs qui pourront vous jouer des tours et vous écarter de cette route toute tracée. Une année positive qu’il faudra néanmoins aller chercher. N’attendez pas pour agir en 2017, sinon beaucoup de choses vous passeront sous le nez comme",
        "pisces": "2017 sera une année fertile pour vous. Fertile car elle vous tendra des opportunités à saisir. Vous devrez donc être en pleine forme et vous préparer pour transformer ces opportunités en chances concrètes. Evitez certaines affaires qui pourront vous porter préjudice et vous conduire dans des situations plus que périlleuses. Attention également à votre entourage, à votre confiance et aux confidences que vous pourrez faire. Certaines personnes mal intentionnées se feront un malin plaisir à "
    },
    sign = $('.sign');
    
//
$(function() {
  sign.click(function(){
    var s = $(this).find('a').attr('data-sign'); // Get sign of the Zodiac name
    $('html').addClass('js');
    if (dev) {
      console.log(zodiac[s]); // Display current sign prevision
    }
  });
});