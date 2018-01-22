/*global $*/
/**
 * Grande Voyance
 * version: 2017.12.12.11
 *
 * */
var scrollBtn = $(".scroll"),
  scrollDownBtn = $(".scroll.scroll-down"),
  scrollUpBtn = $(".scroll.scroll-up"),
  scrollTo = $('nav a'),
  target = 1,
  zodiac,
  contentObj,
  getZodiac = function (callback) {
    var xObj = new XMLHttpRequest();
    xObj.overrideMimeType("application/json");
    xObj.open('GET', 'js/gv18.json', true);
    xObj.onreadystatechange = function () {
      if (xObj.readyState == 4 && xObj.status == "200") {
        callback(xObj.responseText);
      }
    };
    xObj.send(null);
  },
  gotoNext = function (target) {
    $('html, body').animate({
      scrollTop: $('.section').eq(target).offset().top
    }, 800);
    return false;
  },
  gotoNextSection = function ($this) {
    $('html, body').animate({
      scrollTop: $this.parents('section').next('section').offset().top
    }, 800);
    return false;
  },
  gotoPrevSection = function ($this) {
    $('html, body').animate({
      scrollTop: $this.parents('section').prev('section').offset().top
    }, 800);
    return false;
  },
  gotoSection = function (data) {
    $('html, body').animate({
      scrollTop: $('.section.' + data).offset().top
    }, 800);
    return false;
  },
  getUrlParams = function (url) {
    var queryString = url ? url.split('?')[1] : window.location.search.slice(1),
      obj = {};
    if (queryString) {
      queryString = queryString.split('#')[0];
      // split our query string into its component parts
      var arr = queryString.split('&');
      for (var i = 0; i < arr.length; i++) {
        var a = arr[i].split('=');
        // in case params look like: list[]=thing1&list[]=thing2
        var paramNum = undefined;
        var paramName = a[0].replace(/\[\d*\]/, function (v) {
          paramNum = v.slice(1, -1);
          return '';
        });
        // set parameter value (use 'true' if empty)
        var paramValue = typeof(a[1]) === 'undefined' ? true : a[1];
        // (optional) keep case consistent
        paramName = paramName.toLowerCase();
        paramValue = paramValue.toLowerCase();
        // if parameter name already exists
        if (obj[paramName]) {
          // convert value to array (if still string)
          if (typeof obj[paramName] === 'string') {
            obj[paramName] = [obj[paramName]];
          }
          // if no array index number specified...
          if (typeof paramNum === 'undefined') {
            // put the value on the end of the array
            obj[paramName].push(paramValue);
          }
          // if array index number specified...
          else {
            // put the value at that index number
            obj[paramName][paramNum] = paramValue;
          }
        }
        // if param name doesn't exist yet, set it
        else {
          obj[paramName] = paramValue;
        }
      }
    }
    return obj;
  },
  targetContent = getUrlParams().p,
  version = getUrlParams().v;

function findObj(k, v) {
  for (var i = 0; i < zodiac.length; i++) {
    if (zodiac[i][k] == v) {
      return i;
    }
  }
  return null;
}

function writeContent(target) {
  contentObj = zodiac[findObj("_id", target)];
  var months = contentObj.reading.months;
  var dates = contentObj.reading.dates;
  $('#title').html(contentObj.name); // write the name of target sign.
  $('#intro').children('.article-paragraph').html(contentObj.reading.intro); // write proper introduction.
  $('#intro').children('.article-aside').toggleClass('astro-' + target); // change aside background.
  // Amouuuuuuur <3
  $('#couple').html(contentObj.reading.love.couple);
  $('#single').html(contentObj.reading.love.single);
  // social
  $('#family').html(contentObj.reading.social.family);
  $('#friendship').html(contentObj.reading.social.freindship);
  // pro
  $('#work').html(contentObj.reading.pro);
  // Mois Par Mois
  for (var m = 0, len = months.length; m < len; m++) {
    (function () {
      var targetM = '#' + (m + 1);
      $(targetM).children('h3').html(months[m].name);
      $(targetM).children('p').html(months[m].text);
    })();
  }
  // number
  $('.number').html(contentObj.reading.number.luckyNumber);
  $('#sifre').children('.article-paragraph').html(contentObj.reading.number.text);
  // dates
  for (var d = 0; d < dates.length; d++) {
    (function () {
      $('#dates .article-date').eq(d).html(dates[d].when);
      $('#dates .article-paragraph').eq(d).html(dates[d].what);
    })();
  }
  // autres
  $('#conseils').children('p').html(contentObj.reading.addon.ourAdv);
  $('#objectifs').children('p').html(contentObj.reading.addon.yourObj);
  setTimeout(function () {
    $('.loading').fadeOut(1300, "linear");
  }, 700);
}

function __init__() {
  getZodiac(function (response) {
    // Parse JSON string into object
    zodiac = JSON.parse(response);
    if (targetContent === undefined) {
      console.info('Cannot access to the page directly you have to use \"p=###\" as param.\n\"###\": is the first 3 letters of zodiac sign name.\ni.e : for cancer use \"?p=can\". https://myastro-omnizya.c9users.io/gv18?p=cap');
    }
    else {
      writeContent(targetContent);
    }
  });
}

//$('#title').text(zodiac[targetContent]);
var carousel = $('.mo-container'),
  dragStart, dragEnd, slideWidth = 306,
  threshold;

function shiftSlide(direction) {
  if (carousel.hasClass('transition')) return;
  dragEnd = dragStart;
  //drag&drop
  $('document').off('mouseup');
  carousel.off('mousemove').addClass('transition').css('transform', 'translateX(' + (direction * slideWidth) + 'px');
  setTimeout(function () {
    if (direction === 1) {
      $('.mo-block:first').before($('.mo-block:last'));
    }
    else if (direction === -1) {
      $('.mo-block:last').after($('.mo-block:first'));
    }
    carousel.removeClass('transition');
    carousel.css('transform', 'translateX(0px)');
  }, 700);
}

$('#next').click(function () {
  shiftSlide(-1);
});
$('#prev').click(function () {
  shiftSlide(1);
});
//
$('.dri-cta').click(function () {
  window.location.href = 'gv18-dri?p=' + targetContent;
});
// scrollBtn.on("click", function () {
//   if (!$(this).hasClass('.scroll-down')) {
//     gotoNext(target);
//     target++;
//   }
// });
scrollDownBtn.on("click", function () {
  gotoNextSection($(this));
});
scrollUpBtn.on("click", function () {
  gotoPrevSection($(this));
});
scrollTo.on('click', function (e) {
  e.preventDefault();
  gotoSection($(this).data('section'));
})
__init__();

function round100(n) {
  return Math.round(n * 100) / 100;
}

function roundPair(p) {
  var res1 = round100(p[0]);
  var res2 = round100(p[1]);
  var roundPair = res1 + "," + res2;
  return roundPair;
}

function getCirclePoints(points, radius, center) {
  var circlePositions = [];
  var slice = 2 * Math.PI / points;
  for (var i = 0; i < points; i++) {
    var angle = slice * i + slice / 2;
    var newX = (center.X + radius * Math.cos(angle));
    var newY = (center.Y + radius * Math.sin(angle));
    circlePositions.push({
      cx: round100(newX),
      cy: round100(newY)
    });
  }
  return circlePositions;
}

function build_zodiac(data, labels) {
  var w = 512,
    h = w,
    r = Math.min(w, h) / 2.15,
    g_transform = "translate(" + (w / 2) + "," + (h / 2) + ")",
    donut = d3.layout.pie().sort(null),
    arc = d3.svg.arc().innerRadius(r - w / 4).outerRadius(r - 12);
  var radii = {
    //"sun": round100( r / 6 ),
    "circumference": round100(r / 1.05),
    "sign"         : round100(r / 10)
    //"mooncircumference": r / 16,
    //"moon": r / 96
  };
  var circlePositions = getCirclePoints(12, radii.circumference, {
    X: 0,
    Y: 0
  });
  var svg = d3.select("#zodiac-container").append("svg:svg").attr("xmlns", "http://www.w3.org/2000/svg")
  //.attr("xmlns:xlink","http://www.w3.org/1999/xlink")
  .attr("viewBox", "0 0 " + w + " " + h).attr("id", "zodiac").attr("class", function (c = data.colorized) {
    var pieclass = (c) ? "colorized" : "monochrome";
    return pieclass
  });
  var defs = svg.append("defs");
  defs.selectAll("symbol").data(data.zodiac).enter().append("symbol").attr("viewBox", "0 0 32 32").attr("id", function (d, i) {
    return data.zodiac[i].unicode;
  }).attr("class", function (d, i) {
    return "symbol " + data.zodiac[i].name + " " + data.zodiac[i].element + " " + data.zodiac[i].mode;
  }).attr("data-ldate", function (d, i) {
    return data.zodiac[i].ldate
  }).attr("data-ndate", function (d, i) {
    return data.zodiac[i].ndate
  }).append("path").attr("d", function (d, i) {
    return data.zodiac[i].path;
  }).each(function (d) {
    this._current = d
  });
  var pie_group = svg.append("svg:g").attr("class", "pie").attr("transform", g_transform);
  var arcs_group = svg.append("svg:g").attr("class", "arcs").attr("transform", g_transform);
  var labels_group = svg.append("svg:g").attr("class", "labels").attr("transform", g_transform);
  var containers_group = svg.append("svg:g").attr("class", "containers").attr("transform", g_transform);
  var symbols_group = svg.append("svg:g").attr("class", "signs").attr("transform", g_transform);
  var pie_label = pie_group.append("svg:text").attr("dy", ".25em").attr("class", "pie-label").attr("text-anchor", "middle").text("My Astro");
  var pie_circumference = pie_group.append("circle").attr("class", "circumference").attr("r", radii.circumference).style("fill", "none");
  var arcs = arcs_group.selectAll("path").data(donut(data.pct)).enter().append("svg:path").attr("class", function (d, i) {
    return "arc " + data.zodiac[i].name;
  }).attr("fill", "#784e69").attr("stroke", "rgba(255, 255, 255, 0.2)").attr("d", arc).each(function (d) {
    this._current = d;
  });
  var labels = labels_group.selectAll("text").data(donut(data.pct)).enter().append("svg:text").attr("class", function (d, i) {
    return "label " + data.zodiac[i].name;
  }).attr("transform", function (d) {
    return "translate(" + roundPair(arc.centroid(d)) + ")";
  }).attr("text-anchor", "middle").text(function (d, i) {
    return data.zodiac[i].name;
  });
  var containers = containers_group.selectAll(".container").data(circlePositions).enter().append("circle").attr("class", function (d, i) {
    return "container " + data.zodiac[i].name;
  }).attr("fill", "#784e69").attr("stroke", "rgba(255, 255, 255, 0.2)").attr("r", radii.sign).attr("cx", function (d) {
    return d.cx
  }).attr("cy", function (d) {
    return d.cy
  }).attr("transform", "rotate(-90, 0, 0)");
  var symbols = symbols_group.selectAll(".symbol").data(circlePositions).enter().append("g").attr("class", function (d, i) {
    return "sign " + data.zodiac[i].name;
  }).attr("transform", "rotate(-90, 0, 0)").append("use").attr("xlink:href", function (d, i) {
    return "#" + data.zodiac[i].unicode;
  }).attr("width", "32px").attr("height", "32px").attr("fill", "#fff").attr("transform", function (d) {
    return "translate(" + parseInt(d.cx + 16) + " " + parseInt(d.cy - 16) + ") rotate(90, 0, 0)";
  });
  document.getElementById("zodiac").setAttribute("xmlns:xlink", "http://www.w3.org/1999/xlink");
};
d3.json("js/zodiac.json", function (zodiac_data) {
  var data = {
    label    : 'Zodiac',
    colorized: true,
    pct      : [1 / 12, 1 / 12, 1 / 12, 1 / 12, 1 / 12, 1 / 12, 1 / 12, 1 / 12, 1 / 12, 1 / 12, 1 / 12, 1 / 12],
    zodiac   : zodiac_data
  };
  build_zodiac(data);
});
