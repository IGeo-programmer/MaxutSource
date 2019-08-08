<?

include("db.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>სიახლეები</title>
    <link rel="stylesheet" type="text/css" href="css/lang-changer.css">
  
        <link rel="stylesheet" type="text/css" href="css/hover/style_common.css" />
        <link rel="stylesheet" type="text/css" href="css/hover/style10.css" />

    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="icon" type="image/png" href="img/logo.png" sizes="32x32">
    <link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css' />
    <!--[if lt IE 9]>
				<link rel="stylesheet" type="text/css" href="css/styleIE.css" />
		<![endif]-->
		<script src="https://code.jquery.com/jquery-2.0.0.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.11333.js"></script>

	
	
		<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/news-css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/news-css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/news-css/bootstrap.css">

	<link rel="stylesheet" href="css/news-css/style.css">


	<!-- Modernizr JS -->
	<script src="js/news-js/modernizr-2.6.2.min.js"></script>
	
	
	
	
	
	
	
	
	
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

		
<?php include "includes/header.php"; ?>		
    

   <div class = "spacer"></div>
   


	<div id="myModal" class="modal">
		<div class="login-box">
		<div class="modal-content">
		 <span class="close">&times;</span>
    <div class="lb-header">
      <h4>შეუკვეთეთ ტური</h4>
    </div>
  
    <form class="email-login">
      <div class="u-form-group">
        <input class = "geo-font" type="text" placeholder="სახელი გვარი"/>
      </div>
      <div class="u-form-group">
        <input class = "geo-font" type="text" placeholder="ტელეფონის ნომერი"/>
      </div>
      <div class="u-form-group">
        <input class = "geo-font" type="email" placeholder="ელექტრონული ფოსტა"/>
      </div>
	  
	   <label>
		<textarea name="note" cols="1" rows="1" placeholder="ტურის დეტალური აღწერა..."></textarea>
	</label>
	  

      <div class="u-form-group">
        <button class = "geo-font">ტურის შეკვეთა</button>
      </div>
    </form>
    <form class="email-signup ">
     
    </form>
  </div>
 </div>
 </div>
	<div class = "tour-title geo-font">
	
	<h2>სიახლეები</h2>
	
	</div>

			<div class="container-fluid">
		<div class="row fh5co-post-entry">
		<?
			$GetNews = mysql_query("SELECT * FROM news ORDER BY id DESC");
			$GetNewsRow = mysql_fetch_array($GetNews);
			do
			{
			echo '<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
					<a href="news_item.php?id='.$GetNewsRow[id].'"><img src="'.$GetNewsRow[img].'" alt="Image" class="img-responsive"></a>
				</figure>
				<h4 class="fh5co-article-title"><a href="news_item.php?id='.$GetNewsRow[id].'">'.$GetNewsRow[name_geo].'</a></h4>
				
			</article>';
			}
			while($GetNewsRow = mysql_fetch_array($GetNews));
			?>
		</div>
	</div>

			
	
		
			
		
		<? include "includes/footer.php"; ?>
		
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


	
	<!-- jQuery -->
	<script src="js/news-js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/news-js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/news-js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/news-js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/news-js/main.js"></script>


</body>

</html>