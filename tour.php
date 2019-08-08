<?
include("db.php");
if (isset($_POST[full]) and isset($_POST[mob]) and isset($_POST[email]) and isset($_GET[id]) and $_GET[act] == 'sent') {
    $name   = $_POST[full];
    $mobile = $_POST[mob];
    $email  = $_POST[email];
    $qty    = $_POST[qty];
    if (empty($name) or empty($mobile) or empty($email)) {
        echo 'empty';
    } else {
        $id   = trim(strip_tags(mysql_real_escape_string($_GET[id])));
        $date = date("Y-m-d H:i:s");
        $InsertOrder = mysql_query("INSERT INTO orders(`qty`,`tour_id`,`user`,`mobile`,`email`,`date`) VALUES('$qty','$id','$name','$mobile','$email','$date')") or die(mysql_error());
        if ($InsertOrder == true) {
            
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?
if (isset($_GET['id'])) {
    $id         = trim(strip_tags(mysql_real_escape_string($_GET[id])));
    $GetItem    = mysql_query("SELECT * FROM tours WHERE id='" . $id . "'");
    $GetItemRow = mysql_fetch_array($GetItem);
    echo $GetItemRow[name_geo];
}
if (!isset($_GET['id'])) {
    echo 'Item not found';
}

?></title>
    <link rel="stylesheet" type="text/css" href="css/lang-changer.css">
   
<link rel="stylesheet" type="text/css" href="css/tour-css.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
     <link rel="stylesheet" type="text/css" href="css/pricelist.css" />
    <link rel="icon" type="image/png" href="img/logo.png" sizes="32x32">
    <link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css' />
    <!--[if lt IE 9]>
                <link rel="stylesheet" type="text/css" href="css/styleIE.css" />
        <![endif]-->
        <script src="https://code.jquery.com/jquery-2.0.0.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.11333.js"></script>

    
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script> <!-- საძიებო სისტემის წყარო -->
        <script>                                                                              <!-- საძიებო სისტემის ჯავასკრიპტი -->
            $(document).ready(function() {
                $('.nav-tabs > li > a').click(function(event){
                    event.preventDefault();//stop browser to take action for clicked anchor
                    
                    //get displaying tab content jQuery selector
                    var active_tab_selector = $('.nav-tabs > li.active > a').attr('href');                    
                    
                    //find actived navigation and remove 'active' css
                    var actived_nav = $('.nav-tabs > li.active');
                    actived_nav.removeClass('active');
                    
                    //add 'active' css into clicked navigation
                    $(this).parents('li').addClass('active');
                    
                    //hide displaying tab content
                    $(active_tab_selector).removeClass('active');
                    $(active_tab_selector).addClass('hide');
                    
                    //show target tab content
                    var target_tab_selector = $(this).attr('href');
                    $(target_tab_selector).removeClass('hide');
                    $(target_tab_selector).addClass('active');
                });
            });
        </script>
</head>

<body>
        
        <?php
include "includes/header.php";
?>
 
       <div class="spacer">
            <!-- სიცარიელე რომ კონტენტი იყოს მენიუს ქვემოთ -->
        </div>
 
    <?
include("db.php");
if (isset($_POST[full]) and isset($_POST[mob]) and isset($_POST[email]) and isset($_GET[id]) and $_GET[act] == 'sent') {
    $name   = $_POST[full];
    $mobile = $_POST[mob];
    $email  = $_POST[email];
    $qty    = $_POST[qty];
    if (empty($name) or empty($mobile) or empty($email)) {
        echo '<div id = "ok-div">
<img src="img/logo.png" alt="Smiley face" height="200" width="200">
<p style="color:red;">თქვენ გამოტოვეთ საჭირო ველები! </p>

</div>';
    } else {
        $id   = trim(strip_tags(mysql_real_escape_string($_GET[id])));
        $date = date("Y-m-d H:i:s");
        $InsertOrder = mysql_query("INSERT INTO orders(`qty`,`tour_id`,`user`,`mobile`,`email`,`date`) VALUES('$qty','$id','$name','$mobile','$email','$date')") or die(mysql_error());
        if ($InsertOrder == true) {
            
        }
    }
}
?>
   <div id="bookform" class="modal1">
        <div class="login-box">
        <div class="modal-content">
         <span class="close2">&times;</span>
    <div class="lb-header">
    
    
     </div>
      <h2 class = "geo-font" > </h2>
    <form action="tour.php?id=<?
echo $_GET[id];
?>&act=sent" method="POST">
     <div class="u-form-group">
        <input class = "geo-font" type="text" name="full" placeholder="სახელი გვარი"/>
      </div>
      <div class="u-form-group">
        <input class = "geo-font" name="mob" type="text" placeholder="ტელეფონის ნომერი"/>
      </div>
      <div class="u-form-group">
        <input class = "geo-font" name="email" type="email" placeholder="ელექტრონული ფოსტა"/>
      </div>
    
    <div class="tourist-number geo-font">

</div>

<!--
  <label>
        <textarea class = "additional-box" name="note" cols="1" rows="1" placeholder="დამატებითი მოთხოვნები..."></textarea>
    </label> -->

    <input type="submit" class=" geo-font bookbtn" value="შეკვეთა">
 </form>
 
 </div>
 </div>
 </div>
 
    <div class = "tour-title geo-font">
    
    <h2>    <?
if (isset($_GET['id'])) {
    $id         = trim(strip_tags(mysql_real_escape_string($_GET[id])));
    $GetItem    = mysql_query("SELECT * FROM tours WHERE id='" . $id . "'");
    $GetItemRow = mysql_fetch_array($GetItem);
    if (!$GetItemRow) { // add this check.
        die('Invalid query: ' . mysql_error());
    }
    echo $GetItemRow[name_geo];
}
if (!isset($_GET['id'])) {
    echo 'Item not found';
}

?></h2>
    
    </div>
    <div id = "tour-content">
    <div class="container">
     
            <section class="main">
            
                <div class="ia-container">
                             
               <?
$id         = trim(strip_tags(mysql_real_escape_string($_GET[id])));
$GetNews    = mysql_query("SELECT * FROM news WHERE id='$id'");
$GetNewsRow = mysql_fetch_array($GetNews);

echo '<div class = "tour-title geo-font">
    
    <h2>' . $GetNewsRow[name_geo] . '</h2>
    
    </div>
    <div id = "tour-content">
       
            <div id = "news-image">
            
             <img src="' . $GetNewsRow[img] . '" alt="image">
            </div>
        
        <div id = "tour-desc">
        <p>' . $GetNewsRow[l_description_geo] . '</p>

    </div>
<!-- The Modal -->    
    </div>';
?>
           </section>
              <a href="#" id="bookbutton" class="button geo-font">მომსახურების შეკვეთა</a>
        </div>
        <div id = "tour-desc">
      <?
if (isset($_GET['id'])) {
    $id         = trim(strip_tags(mysql_real_escape_string($_GET[id])));
    $GetItem    = mysql_query("SELECT * FROM tours WHERE id='" . $id . "'");
    $GetItemRow = mysql_fetch_array($GetItem);
    echo $GetItemRow[l_description_geo];
}
if (!isset($_GET['id'])) {
    echo 'Item not found';
}

echo '
	<div class="fb-comments" data-href="http://geosky.ge/item.php?id=' . $_GET[id] . '" data-numposts="5"></div>
	<div class="fb-like" data-href="http://geosky.ge/item.php?id=' . $_GET[id] . '" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
';
?>
  
    </div>
<!-- The Modal -->  
    </div>
	    
<?php
include "includes/footer.php";
?>
       
        <div id='toTop' class = "move-in-out animated css" ></div>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
	$(function() {

	var $sidescroll = (function() {

	// the row elements
	var $rows = $('#ss-container > div.ss-row'),
	// we will cache the inviewport rows and the outside viewport rows
	$rowsViewport, $rowsOutViewport,
	// navigation menu links
	$links = $('#ss-links > a'),
	// the window element
	$win = $(window),
	// we will store the window sizes here
	winSize = {},
	// used in the scroll setTimeout function
	anim = false,
	// page scroll speed
	scollPageSpeed = 2000,
	// page scroll easing
	scollPageEasing = 'easeInOutExpo',
	// perspective?
	hasPerspective = false,

	perspective = hasPerspective && Modernizr.csstransforms3d,
	// initialize function
	init = function() {

	// get window sizes
	getWinSize();
	// initialize events
	initEvents();
	// define the inviewport selector
	defineViewport();
	// gets the elements that match the previous selector
	setViewportRows();
	// if perspective add css
	if (perspective) {
	$rows.css({
	    '-webkit-perspective': 600,
	    '-webkit-perspective-origin': '50% 0%'
	});
	}
	// show the pointers for the inviewport rows
	$rowsViewport.find('a.ss-circle').addClass('ss-circle-deco');
	// set positions for each row
	placeRows();

	},
	// defines a selector that gathers the row elems that are initially visible.
	// the element is visible if its top is less than the window's height.
	// these elements will not be affected when scrolling the page.
	defineViewport = function() {

	$.extend($.expr[':'], {

	inviewport: function(el) {
	    if ($(el).offset().top < winSize.height) {
		return true;
	    }
	    return false;
	}

	});

	},
	// checks which rows are initially visible 
	setViewportRows = function() {

	$rowsViewport = $rows.filter(':inviewport');
	$rowsOutViewport = $rows.not($rowsViewport)

	},
	// get window sizes
	getWinSize = function() {

	winSize.width = $win.width();
	winSize.height = $win.height();

	},
	// initialize some events
	initEvents = function() {

	// navigation menu links.
	// scroll to the respective section.
	$links.on('click.Scrolling', function(event) {

	// scroll to the element that has id = menu's href
	$('html, body').stop().animate({
	    scrollTop: $($(this).attr('href')).offset().top
	}, scollPageSpeed, scollPageEasing);

	return false;

	});

	$(window).on({
	// on window resize we need to redefine which rows are initially visible (this ones we will not animate).
	'resize.Scrolling': function(event) {

	    // get the window sizes again
	    getWinSize();
	    // redefine which rows are initially visible (:inviewport)
	    setViewportRows();
	    // remove pointers for every row
	    $rows.find('a.ss-circle').removeClass('ss-circle-deco');
	    // show inviewport rows and respective pointers
	    $rowsViewport.each(function() {

		$(this).find('div.ss-left')
		    .css({
			left: '0%'
		    })
		    .end()
		    .find('div.ss-right')
		    .css({
			right: '0%'
		    })
		    .end()
		    .find('a.ss-circle')
		    .addClass('ss-circle-deco');

	    });

	},
	// when scrolling the page change the position of each row    
	'scroll.Scrolling': function(event) {

	    // set a timeout to avoid that the 
	    // placeRows function gets called on every scroll trigger
	    if (anim) return false;
	    anim = true;
	    setTimeout(function() {

		placeRows();
		anim = false;

	    }, 10);

	}
	});

	},
	// sets the position of the rows (left and right row elements).
	// Both of these elements will start with -50% for the left/right (not visible)
	// and this value should be 0% (final position) when the element is on the
	// center of the window.
	placeRows = function() {

	// how much we scrolled so far
	var winscroll = $win.scrollTop(),
	// the y value for the center of the screen
	winCenter = winSize.height / 1.6 + winscroll;

	// for every row that is not inviewport
	$rowsOutViewport.each(function(i) {

	var $row = $(this),
	    // the left side element
	    $rowL = $row.find('div.ss-left'),
	    // the right side element
	    $rowR = $row.find('div.ss-right'),
	    // top value
	    rowT = $row.offset().top;

	// hide the row if it is under the viewport
	if (rowT > winSize.height + winscroll) {

	    if (perspective) {

		$rowL.css({
		    '-webkit-transform': 'translate3d(-75%, 0, 0) rotateY(-90deg) translate3d(-75%, 0, 0)',
		    'opacity': 0
		});
		$rowR.css({
		    '-webkit-transform': 'translate3d(75%, 0, 0) rotateY(90deg) translate3d(75%, 0, 0)',
		    'opacity': 0
		});

	    } else {

		$rowL.css({
		    left: '-50%'
		});
		$rowR.css({
		    right: '-50%'
		});

	    }

	}
	// if not, the row should become visible (0% of left/right) as it gets closer to the center of the screen.
	else {

	    // row's height
	    var rowH = $row.height(),
		// the value on each scrolling step will be proporcional to the distance from the center of the screen to its height
		factor = (((rowT + rowH / 2) - winCenter) / (winSize.height / 2 + rowH / 2)),
		// value for the left / right of each side of the row.
		// 0% is the limit
		val = Math.max(factor * 50, 0);

	    if (val <= 0) {

		// when 0% is reached show the pointer for that row
		if (!$row.data('pointer')) {

		    $row.data('pointer', true);
		    $row.find('.ss-circle').addClass('ss-circle-deco');

		}

	    } else {

		// the pointer should not be shown
		if ($row.data('pointer')) {

		    $row.data('pointer', false);
		    $row.find('.ss-circle').removeClass('ss-circle-deco');

		}

	    }

	    // set calculated values
	    if (perspective) {

		var t = Math.max(factor * 75, 0),
		    r = Math.max(factor * 90, 0),
		    o = Math.min(Math.abs(factor - 1), 1);

		$rowL.css({
		    '-webkit-transform': 'translate3d(-' + t + '%, 0, 0) rotateY(-' + r + 'deg) translate3d(-' + t + '%, 0, 0)',
		    'opacity': o
		});
		$rowR.css({
		    '-webkit-transform': 'translate3d(' + t + '%, 0, 0) rotateY(' + r + 'deg) translate3d(' + t + '%, 0, 0)',
		    'opacity': o
		});

	    } else {

		$rowL.css({
		    left: -val + '%'
		});
		$rowR.css({
		    right: -val + '%'
		});

	    }

	}

	});

	};

	return {
	init: init
	};

	})();

	$sidescroll.init();

	});
        </script>
	    
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
	$(document).on('scroll', function() {
	    if ($(this).scrollTop() > 1) {
		$('header').addClass('sticky');
	    } else {
		$('header').removeClass('sticky');
	    }

	});
</script>
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="js/jquery.easeScroll.js"></script>
<script>
$("html").easeScroll();
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<div class='move-in-out animated css'></div> 
<script src="js/tilt.jquery.js"></script> <!-- Load Tilt.js library -->
<script type="text/javascript">
$('.js-tilt').tilt({
    scale: 1.2
})
</script>
<script>$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

$("#toTop").click(function () {
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
   $("html, body").animate({scrollTop: 0}, 1000);
});</script>

<script>
$(document).ready(function() {

  // Show dropdown
  $('.selected').click(function() {
    $('.custom-sel').addClass('show-sel');
    $('.custom-sel a').removeClass('hidden');
  });

  // Hide dropdown when not focused
  $('.custom-sel').focusout(function() {
    $('.custom-sel').removeClass('show-sel');
    $('.custom-sel a:not(:first)').addClass('hidden');
  }).blur(function() {
    $('.custom-sel').removeClass('show-sel');
    $('.custom-sel a:not(:first)').addClass('hidden');
  });

});


</script>
    <!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">

            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    });    
                }
            }

            $(function() {

                var dd = new DropDown( $('#dd') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-5').removeClass('active');
                });

            });

        </script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var book = document.getElementById('bookform');

// Get the button that opens the modal
var button = document.getElementById("bookbutton");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
button.onclick = function() {
    book.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    book.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == book) {
        book.style.display = "none";
    }
}
</script>


<script>
$(".email-signup").hide();
$("#signup-box-link").click(function(){
  $(".email-login").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
});
$("#login-box-link").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-signup").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");
});
</script>
<script>
/* Modernizr 2.5.3 (Custom Build) | MIT & BSD
 * Build: http://www.modernizr.com/download/#-cssanimations-csstransforms-csstransforms3d-csstransitions-shiv-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes
 */
;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a)if(j[a[d]]!==c)return b=="pfx"?a[d]:!0;return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.substr(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.5.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k=b.createElement("div"),l=b.body,m=l?l:b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),k.appendChild(j);return f=["&#173;","<style>",a,"</style>"].join(""),k.id=h,(l?k:m).innerHTML+=f,m.appendChild(k),l||(m.style.background="",g.appendChild(m)),i=c(k,a),l?k.parentNode.removeChild(k):m.parentNode.removeChild(m),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e});var G=function(a,c){var d=a.join(""),f=c.length;w(d,function(a,c){var d=b.styleSheets[b.styleSheets.length-1],g=d?d.cssRules&&d.cssRules[0]?d.cssRules[0].cssText:d.cssText||"":"",h=a.childNodes,i={};while(f--)i[h[f].id]=h[f];e.csstransforms3d=(i.csstransforms3d&&i.csstransforms3d.offsetLeft)===9&&i.csstransforms3d.offsetHeight===3},f,c)}([,["@media (",m.join("transform-3d),("),h,")","{#csstransforms3d{left:9px;position:absolute;height:3px;}}"].join("")],[,"csstransforms3d"]);q.cssanimations=function(){return F("animationName")},q.csstransforms=function(){return!!F("transform")},q.csstransforms3d=function(){var a=!!F("perspective");return a&&"webkitPerspective"in g.style&&(a=e.csstransforms3d),a},q.csstransitions=function(){return F("transition")};for(var H in q)y(q,H)&&(v=H.toLowerCase(),e[v]=q[H](),t.push((e[v]?"":"no-")+v));return z(""),i=k=null,function(a,b){function g(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function h(){var a=k.elements;return typeof a=="string"?a.split(" "):a}function i(a){var b={},c=a.createElement,e=a.createDocumentFragment,f=e();a.createElement=function(a){var e=(b[a]||(b[a]=c(a))).cloneNode();return k.shivMethods&&e.canHaveChildren&&!d.test(a)?f.appendChild(e):e},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+h().join().replace(/\w+/g,function(a){return b[a]=c(a),f.createElement(a),'c("'+a+'")'})+");return n}")(k,f)}function j(a){var b;return a.documentShived?a:(k.shivCSS&&!e&&(b=!!g(a,"article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}audio{display:none}canvas,video{display:inline-block;*display:inline;*zoom:1}[hidden]{display:none}audio[controls]{display:inline-block;*display:inline;*zoom:1}mark{background:#FF0;color:#000}")),f||(b=!i(a)),b&&(a.documentShived=b),a)}var c=a.html5||{},d=/^<|^(?:button|form|map|select|textarea)$/i,e,f;(function(){var a=b.createElement("a");a.innerHTML="<xyz></xyz>",e="hidden"in a,f=a.childNodes.length==1||function(){try{b.createElement("a")}catch(a){return!0}var c=b.createDocumentFragment();return typeof c.cloneNode=="undefined"||typeof c.createDocumentFragment=="undefined"||typeof c.createElement=="undefined"}()})();var k={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:j};a.html5=k,j(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document);
</script>


</body>

</html>
