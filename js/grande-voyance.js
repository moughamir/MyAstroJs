/*global $*/
/**
 * Grande Voyance
 * version: 2017.12.12.11
 * 
 * */
var scrollBtn = $(".scroll"),
  target = 1,
  zodiac,
  contentObj,
  getZodiac = function(callback) {
    var xObj = new XMLHttpRequest();
    xObj.overrideMimeType("application/json");
    xObj.open('GET', 'js/gv18.json', true);
    xObj.onreadystatechange = function() {
      if (xObj.readyState == 4 && xObj.status == "200") {
        callback(xObj.responseText);
      }
    };
    xObj.send(null);
  },
  gotoNext = function(target) {
    $('html, body').animate({
      scrollTop: $('section').eq(target).offset().top
    }, 800);
    return false;
  },
  getUrlParams = function(url) {
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
        var paramName = a[0].replace(/\[\d*\]/, function(v) {
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
  $('#title').html(contentObj.name); // write the name of target sign.
  $('#intro').children('.article-paragraph').html(contentObj.reading.intro); // write proper introduction.
   $('.article-aside').toggleClass('astro-'+target); // change aside background.
   
}

function __init__() {
  getZodiac(function(response) {
    // Parse JSON string into object
    zodiac = JSON.parse(response);
    writeContent(targetContent);
    console.log(zodiac);
  });
}
console.info(targetContent);
//$('#title').text(zodiac[targetContent]);
//
scrollBtn.on("click", function() {
  console.log('Oh scroll!' + target);
  gotoNext(target);
  target++;
});
__init__();
