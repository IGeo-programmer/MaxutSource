<? 
include ("db.php");
if(isset($_POST[first]) and isset($_POST[last]) and isset($_POST[email]) and isset($_POST[comments]))
{
	$first = $_POST[first];
	$last = $_POST[last];
	$email = $_POST[email];
	$message = $_POST[comments];
	if(empty($first) or empty($last) or empty($email) or empty($message))
	{
		echo 'empty';
	}
	else
	{
		$id = trim(strip_tags(mysql_real_escape_string($_GET[id])));
		$date = date("Y-m-d H:i:s");
		$InsertOrder = mysql_query("INSERT INTO contact(`first`,`last`,`email`,`message`,`date`) VALUES('$first','$last','$email','$message','$date')") or die(mysql_error());
		if($InsertOrder == true)
		{
			
		}
	}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>კონტაქტი</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
   

    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/lang-changer.css" />
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


		
		
       
 <?php include "includes/header.php"; ?>	

		<div class = "spacer">
		</div>
  <div id="content">
  <? 
include ("db.php");
if(isset($_POST[first]) and isset($_POST[last]) and isset($_POST[email]) and isset($_GET[comments]))
{
	$first = $_POST[first];
	$last = $_POST[last];
	$email = $_POST[email];
	$message = $_POST[comments];
	if(empty($first) or empty($last) or empty($email) or empty($message))
	{
		echo '<div id = "ok-div">
<img src="img/logo.png" alt="Smiley face" height="200" width="200">
<p style="color:red;">თქვენ გამოტოვეთ საჭირო ველები! </p>

</div>';
	}
	else
	{
		$id = trim(strip_tags(mysql_real_escape_string($_GET[id])));
		$date = date("Y-m-d H:i:s");
		//$InsertOrder = mysql_query("INSERT INTO contact(`first`,`last`,`email`,`message`,`date`) VALUES('$first','$last','$email','$message','$date')") or die(mysql_error());
		if($InsertOrder == true)
		{
			echo '<div id = "ok-div">
<img src="img/logo.png" alt="Smiley face" height="200" width="200">
<p>თქვენი წერილი წარმატებით გაიგზავნა! </p>

</div>';
		}
	}
}
?>
      <div class="contact-container block">
  <div class="row header">
    <h2>დაგვიკავშირდით </h1>
  
  </div>
  <div class="row body">
    <form action="contact.php" method="POST">
      <ul>
        
        <li>
          <p class="left">
            <label for="first_name">სახელი<span class="req">*</span></label>
            <input type="text" name="first" placeholder="..." />
          </p>
          <p >
            <label for="last_name">გვარი<span class="req">*</span></label>
            <input type="text" name="last" placeholder="..." />      
          </p>
        </li>
        
        <li>
          <p>
            <label for="email">ელ.ფოსტა<span class="req">*</span></label>
            <input type="email" name="email" placeholder="..." />
          </p>
        </li>        
        <li><div class="divider"></div></li>
        <li>
          <label for="comments">თქვენი შეტყობინება<span class="req">*</span></label>
          <textarea cols="46" rows="3" name="comments"></textarea>
        </li>
        
        <li>
          <input class="btn btn-submit" type="submit" value="გაგზავნა" />
        
        </li>
        
      </ul>
    </form>  
  </div>
  	
  
</div>

<div class = "block geo-font">
 <h1>MaxOutSource</h1>
 <p>საქართველო - თბილისი</p>
  <p>ნავთლუღის ქუჩა N31</p>
</div>
		<div class = "block">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmaxoutsource%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		
		</div>
		
	 </div>
	 
	 <div id = "google-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442.80683106440773!2d44.79186057965443!3d41.702445415253166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cdc9b4d087b%3A0x64cf8d8df77a4573!2zMzIg4YOQ4YOa4YOU4YOl4YOh4YOQ4YOc4YOT4YOg4YOUIOGDkuGDoOGDmOGDkeGDneGDlOGDk-GDneGDleGDmOGDoSDhg6Xhg6Phg6nhg5AsIOGDl-GDkeGDmOGDmuGDmOGDoeGDmA!5e0!3m2!1ska!2sge!4v1496671104898" width="1920" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

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
</body>

</html>