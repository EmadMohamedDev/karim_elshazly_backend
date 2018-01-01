
$(document).ready(function() {
  
  setTimeout(function(){
    $('body').addClass('loaded');
    $('h1').css('color','#222222');
  }, 3000);

    // Rnn one Audio only 
    $("audio").on("play", function () {
        $("audio").not(this).each(function (index, audio) {
            audio.pause();
        });
    });

    // Rnn one Video only 
    $("video").on("play", function () {
        $("video").not(this).each(function (index, video) {
            video.pause();
        });
    }); 
    
    // close button
    $('.close_btn').click(function(){
        $(this).parent().parent().css('visibility','hidden');
    });
    
});

/*================================================================
 * Debounced resize Plugin 
 * =============================================================== */
(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');

$(function(){
 

    // hide loading spinner
    $('.spinner').hide();



    //show terms and conditions
    $('.check-terms').hide();
    var count = 0;
    $('.show-terms').click(function(){
        count++;
        if(count%2 !== 0){
            $('.check-terms').slideDown(200);
        }else{
            $('.check-terms').slideUp(200);
        }
    });

    var error = $('p.error');
    if(error.length !== 0){
      $('.check-terms').slideDown(200);
      count =1;
    }


/*=====================================================================================
                 splash screen with cookie script
 *====================================================================================*/


/*function setCookie (cookieName, cookieValue, nDays) {
        var today  = new Date(),
            expire = new Date();

        if (nDays === null || nDays === 0) { 
            nDays = 1;
        }

        expire.setTime(today.getTime() + 3600000 * 24 * nDays);

        document.cookie = cookieName + "=" + escape(cookieValue) + ";expires=" + expire.toGMTString();
    };

function getCookie (cookieName) {
        var theCookie = " " + document.cookie,
            ind = theCookie.indexOf(" " + cookieName + "=");

        if (ind === -1) { ind = theCookie.indexOf(";" + cookieName + "="); }
        if (ind === -1 || cookieName === "") { return ""; }

        var ind1 = theCookie.indexOf(";", ind + 1);

        if (ind1 === -1) { ind1 = theCookie.length; }

        return unescape(theCookie.substring(ind + cookieName.length + 2, ind1));
    };
var numLoads = parseInt(getCookie('pageLoads'), 10);

if (isNaN(numLoads) || numLoads <= 0) { setCookie('pageLoads', 1); }
else { setCookie('pageLoads', numLoads + 1); }

var mycookie = getCookie('pageLoads');

if(mycookie === 1){
$('#splash-screen').css({"display":"block"});
    
}else {
 $('#splash-screen').hide();
console.log('hide');

}*/


/*=====================================================================================
                 Burger Menu Script add to the ui library
 *====================================================================================*/

    var overlay     = $('<div class="overlay"></div>');
    //when the user clicks on the menu icon check the existence menu-open class
    $('.burger-menu-btn').click(function(){

        if( $('.site-wrapper').hasClass('menu-open')){
            $('.site-wrapper').removeClass('menu-open');
            $('.menu-wrapper').css({"display":"none"});
            if($('.overlay')){
                $('.overlay').remove();
            }
        }else{

            // if the class doesnt exist add it and set the body overflow-x to hidden
            // by adding hide-overflow class
            $('body').addClass('hide-overflow');
            $('.site-wrapper').addClass('menu-open');
            $('.menu-wrapper').css({"display":"block"});
            //append the overlay so when the user clicks on it
            //the menu disappears
            $('.site-wrapper').append(overlay);
            $('.site-wrapper').addClass('stop-scrolling');
            $('.overlay').click(function(){
                if( $('.site-wrapper').hasClass('menu-open')){
                    $('.site-wrapper').removeClass('menu-open');
                    $('.menu-wrapper').css({"display":"none"});
                    $('.site-wrapper').removeClass('stop-scrolling');
                    if($('.overlay')){
                        $('.overlay').remove();
                    }
                }
            });
        }
    });

/*=====================================================================================
                                Toggle Categories
 *====================================================================================*/



/*=====================================================================================
                             Search Box Script
 *====================================================================================*/
// setContainerHeight();
// // get all the media elements on the page
// // the items i want to filter must contain
// // a search-hook class

// var all_media = $('#all-media').html();
// var noResultsMsg = $('<li class="not-found">No results to show.</li>');
// $('#all-media').append(noResultsMsg);
// noResultsMsg.hide();
// //Get the text typed in the search box
// $('#search_box').on('keyup',function(e){

//     //Code for overloading the :contains selector to be case insensitive:
//     //Without the overload on the :contains selector jquery would normaly only underline the second line

//     // New selector
//         jQuery.expr[':'].Contains = function(a, i, m) {
//             return jQuery(a).text().toUpperCase()
//                     .indexOf(m[3].toUpperCase()) >= 0;
//         };

//     // Overwrites old selecor
//         jQuery.expr[':'].contains = function(a, i, m) {
//             return jQuery(a).text().toUpperCase()
//                     .indexOf(m[3].toUpperCase()) >= 0;
//         };

//     var searchText = $(this).val();

//     if(searchText != null & searchText.length > 0){
//         // find the elements which contains the search text
//         var results = $('.search-hook:contains('+searchText+')');
//         var notContain = $('.search-hook:not(:contains('+searchText+'))');
// setWidth();
// setHeight();
//         if(results.length > 0){
//             //$('#all-media').html(results);
// setWidth();
// setHeight();
//             results.show();
//             notContain.hide();
//             noResultsMsg.hide();
//         }else{
// setWidth();
// setHeight();
//             results.hide();
//             notContain.hide();
//             noResultsMsg.show();
//         }
//     }else{
//         //when the user deletes the search text
//         // show all media elements again
//         $('#all-media').html(all_media);
//         $('#all-media').append(noResultsMsg);
//         noResultsMsg.hide();

// setWidth();
// setHeight();
//     }// end if
// });// end on keyup


/*=====================================================================================
                             css calc Mimicing 
 *====================================================================================*/

$(window).smartresize(function(){
 setWidth();
 setHeight();
 setContainerHeight();
});

function setWidth(){
  //get width of elements
  var menuWidth = $('.menu-toolbar').width();
  var serviceLogo = $('.service-logo');
  var logoText = $('.logo-text');
  
  serviceLogo.css({
  	"width" : (menuWidth - 50) + 'px'
  });
  
  var serviceLogoWidth = serviceLogo.width();
  logoText.css({
  	"width" : (serviceLogoWidth - 50) + 'px'
  });
}
function setHeight(){
	var thumbnail = $('a.thumbnail');
	var mediaGalleryliHeight = $('.media-gallery li').innerHeight();
	thumbnail.css({
		"height":mediaGalleryliHeight+'px',
		"position":"absolute",
		"top":"0",
		"left":"0"
	});
}

function setContainerHeight(){
var dheight = $(window).height();
var mainContainer = $('.main-container');
mainContainer.css({"min-height":(dheight - 150) + "px"});
}
setWidth();
setHeight();

/*=====================================================================================
                             Place play icons in video thumbs
 *====================================================================================*/
var playIcon = $('<span class="fa fa-play fa-lg blue"></span>');
$('.video .thumbnail').append(playIcon);





/*=====================================================================================
                             change English Number to Arabic
 *====================================================================================*/
var html = $('html');
if(html.attr('lang') === "ar"){
$('.arabic-number').persiaNumber('ar');
}

 
function iOSversion() {
  if (/iP(hone|od|ad)/.test(navigator.platform)) {
    // supports iOS 2.0 and later: <http://bit.ly/TJjs1V>
    var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
    return [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
  }
}

ver = iOSversion();

if (ver[0] < 8) {
  $('.play-btn span').addClass('ios');
  $('#splash-screen').hide();
}





});// end ready




