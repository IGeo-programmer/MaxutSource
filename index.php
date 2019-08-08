<?

include("db.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Max Outsource</title>
    <link rel="stylesheet" type="text/css" href="css/lang-changer.css">
  <meta name="google-site-verification" content="CO6C_zPogUIjzzst9hOOVIDm7OnYnHaLa0buu2xit7g" />
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

		
	<? include "includes/header.php"; ?>
	<?
	$GetSlider = mysql_query("SELECT * FROM system") or die(mysql_error());
	$GetSliderRow = mysql_fetch_array($GetSlider);
	echo '<div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
    <div class="slide slide-0 active">
      <div class="slide__bg" style="background-image: url('.$GetSliderRow[header_image1].')"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">'.$GetSliderRow[header_text1_geo].'</h2>
          <p class="slide__text-desc">'.$GetSliderRow[header_text1_geof].'</p>
       
        </div>
      </div>
    </div>
    <div class="slide slide-1 ">
      <div class="slide__bg" style="background-image: url('.$GetSliderRow[header_image2].')"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">'.$GetSliderRow[header_text2_geo].'</h2>
          <p class="slide__text-desc">'.$GetSliderRow[header_text2_geof].'</p>
   
        </div>
      </div>
    </div>
    <div class="slide slide-2">
      <div class="slide__bg" style="background-image: url('.$GetSliderRow[header_image3].')"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">'.$GetSliderRow[header_text3_geo].'</h2>
          <p class="slide__text-desc">'.$GetSliderRow[header_text3_geof].'</p>
      
        </div>
      </div>
    </div>
    <div class="slide slide-3">
      <div class="slide__bg" style="background-image: url('.$GetSliderRow[header_image4].')"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">'.$GetSliderRow[header_text4_geo].'</h2>
          <p class="slide__text-desc">'.$GetSliderRow[header_text4_geof].'</p>
        </div>
      </div>
    </div>

  </div>
</div>';
?>
    
	<div id="myModal" class="modal">
		<div class="login-box">
		<div class="modal-content">
		 <span class="close">&times;</span>
    <div class="lb-header">

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
		<textarea name="note" cols="1" rows="1" placeholder="მომსახურების დეტალური აღწერა..."></textarea>
	</label>
	  

      <div class="u-form-group">
        <button class = "geo-font">მომსახურების შეკვეთა</button>
      </div>
    </form>
    <form class="email-signup ">
     
    </form>
  </div>
 </div>
 </div>
	
	<!--  <div id = "search-form" class = "geo-font">
	<div  class = "search-form-header ">
	<h2 class = "search-title">იპოვეთ თქვენთვის სასურველი ტური</h2>
	<div>
			<ul class="nav nav-tabs">
				<li class="active ">
					<a class = "hotel-search" href="#tab1"><h3>სასტუმროები</h3></a>
				</li>
				<li>
					<a class = "tour-search" href="#tab2"><h3>ტურები</h3></a>
				</li>
			
			</ul>	
		</div>
		
		</div>
		
		<div  class = "section-style" >
		<section id="tab1" class="tab-content active">
			<div>
				Hotel search
				
				
				
				
			</div>
		</section>
		<section id="tab2" class="tab-content hide">
			<div>
				Tour search
			</div>
		</section>
		<section id="tab3" class="tab-content hide">
			<div>
				Content in tab 3
			</div>
		</section>
	
	</div>
	</div>  -->  <!-- საძეიებო სისტემა -->
    
			<div class = "hotel-content">
			<div class = "hotel-section-title">
		<h2 class = "geo-font">სიახლეები</h2>
		</div>
		<div class = "hotel-body geo-font">
		
		
		
		<?
								$GetNews = mysql_query("SELECT * FROM news ORDER BY id DESC LIMIT 4");
								$GetNewsRow = mysql_fetch_array($GetNews);
								do
								{
									
                               echo ' 
							   <div class="view view-tenth ">
	 <div id = "news-logo">
	 <img  src="img/logo.png"  alt="Smiley face" height="48" width="48">
	 </div>';
	 echo'
	 <h1>';$len = strlen(strip_tags($GetNewsRow[name_geo]));
											if($len <= 40)
											{
												echo strip_tags($GetNewsRow[name_geo]);
											}
											if($len > 41)
											{
												$short_text = mb_substr(strip_tags($GetNewsRow[name_geo]),0,40,'UTF-8');
												$short_text = $short_text . '...';
												echo $short_text;
											}
											
											
											echo'</h1>';echo '
                    <img src="'.$GetNewsRow[img].'" />
                    <div class="mask ">';
					echo'
                        <h2>';$len = strlen(strip_tags($GetNewsRow[name_geo]));
											if($len <= 40)
											{
												echo strip_tags($GetNewsRow[name_geo]);
											}
											if($len > 41)
											{
												$short_text = mb_substr(strip_tags($GetNewsRow[name_geo]),0,40,'UTF-8');
												$short_text = $short_text . '...';
												echo $short_text;
											}
											echo'</h2>';echo'
                         <p>';
											$len = strlen(strip_tags($GetNewsRow[l_description_geo]));
											if($len <= 100)
											{
												echo strip_tags($GetNewsRow[l_description_geo]);
											}
											if($len > 101)
											{
												$short_text = mb_substr(strip_tags($GetNewsRow[l_description_geo]),0,100,'UTF-8');
												$short_text = $short_text . '...';
												echo $short_text;
											}
											echo'</p>
                         <a href="news_item.php?id='.$GetNewsRow[id].'" class="info">ვრცლად</a>
                    </div>
                </div> ';
															
                                                  
											
										
								}
								while($GetNewsRow = mysql_fetch_array($GetNews));
								?>
		
		
		
		
		
		
		


</div>
		</div>
		
	
	
	<div class = "tour-title geo-font">
	
	<h2>პოპულარული მომსახურებები</h2>
	
	</div>
	
	
        <div class="container ">

            <div class='space'>
            </DIV>
			
      
			
			  <div id="ss-container" class="ss-container ">
				<?
				$GetTour = mysql_query("SELECT * FROM tours ORDER BY id DESC LIMIT 6");
								

				$GetTourRow = mysql_fetch_array($GetTour);
				$Counter = 0;
				do
				{
					$Counter = $Counter + 1;
					if($Counter%2 == 1)
					{
						echo '<div class="ss-row ss-large ">
							<div class="ss-left ">
								<a href="tour.php?id='.$GetTourRow[id].'" class="ss-circle ss-circle-3 move-in-out animated css" style="background: url(';
							
							echo $GetTourRow[main_pic];
								
								echo '); width:330px; height:330px;"></a>
							</div>
							<div class="ss-right ">
								<h3 class = "geo-font">

									<a href="tour.php?id='.$GetTourRow[id].'">'.$GetTourRow[name_geo].'</a>
									<span> <p>';
											$len = strlen(strip_tags($GetTourRow[l_description_geo]));
											if($len <= 240)
											{
												echo strip_tags($GetTourRow[l_description_geo]);
											}
											if($len > 241)
											{
												$short_text = mb_substr(strip_tags($GetTourRow[l_description_geo]),0,240,'UTF-8');
												$short_text = $short_text . '...';
												echo $short_text;
											}
											echo'</p></span>
								</h3>

							</div>
						</div>';
					}
					if($Counter%2 == 0)
					{
						echo '<div class="ss-row ss-large">
                    <div class="ss-left">
                        <h3 class = "geo-font">

                            <a href="tour.php?id='.$GetTourRow[id].'">'.$GetTourRow[name_geo].'</a>
							<span> <p>';
											$len = strlen(strip_tags($GetTourRow[l_description_geo]));
											if($len <= 240)
											{
												echo strip_tags($GetTourRow[l_description_geo]);
											}
											if($len > 241)
											{
												$short_text = mb_substr(strip_tags($GetTourRow[l_description_geo]),0,240,'UTF-8');
												$short_text = $short_text . '...';
												echo $short_text;
											}
											echo'</p></span>
                        </h3>
                    </div>
                    <div class="ss-right ss-large">
                        <a href="tour.php?id='.$GetTourRow[id].'" class="ss-circle ss-circle-4 move-in-out animated css" style="background: url('.$GetTourRow[main_pic].');"></a>
                    </div>
                </div>';
					}
				}
				while($GetTourRow = mysql_fetch_array($GetTour));
				?>
               
                

               
               
              

            </div>
			
        </div>
		
	
	
	
		
		
		 <div id="hotels-title" class="geo-font">
            <p>პოპულარული მომსახურების პაკეტები</p>
            </div>
        <div id="hotel-content" class="geo-font">
        
            
<?
								$GetItem = mysql_query("SELECT * FROM hotels ORDER BY id DESC LIMIT 6");
								$GetItemRow = mysql_fetch_array($GetItem);
								do
								{
                               echo '


 <div id="hotel"  class="hover06 column">
         <div>
    <figure><a href="hotel_item.php?id='.$GetItemRow[id].'">
                                                <div class="imggg"><img src="'.$GetItemRow[main_pic].'" alt=""></div>
                                            </a></figure>
   
  </div>
           
            <h2><a href="hotel_item.php?id='.$GetItemRow[id].'">';$len = strlen(strip_tags($GetItemRow[name_geo]));
											if($len <= 30)
											{
												echo strip_tags($GetItemRow[name_geo]);
											}
											if($len > 31)
											{
												$short_text = mb_substr(strip_tags($GetItemRow[name_geo]),0,30,'UTF-8');
												$short_text = $short_text . '...';
												echo $short_text;
											}
											
											
											echo'</h1>'; echo' </a></h2>
            <div id="hotel-det">
                
         
             <div id = "hotel-price"><p>'.$GetItemRow[price_1_USD].' GEL</p></div>
                <a href="hotel_item.php?id='.$GetItemRow[id].'" id="myBtn" class="bttn more geo-font">ვრცლად</a>
            </div>
            
            </div>
						';		












								}
								while($GetItemRow = mysql_fetch_array($GetItem));
								?>


    
        
        
          
            
            
        
        
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


<script>
$(document).ready(function() {
  
  var $slider = $(".slider"),
      $slideBGs = $(".slide__bg"),
      diff = 0,
      curSlide = 0,
      numOfSlides = $(".slide").length-1,
      animating = false,
      animTime = 500,
      autoSlideTimeout,
      autoSlideDelay = 12000,
      $pagination = $(".slider-pagi");
  
  function createBullets() {
    for (var i = 0; i < numOfSlides+1; i++) {
      var $li = $("<li class='slider-pagi__elem'></li>");
      $li.addClass("slider-pagi__elem-"+i).data("page", i);
      if (!i) $li.addClass("active");
      $pagination.append($li);
    }
  };
  
  createBullets();
  
  function manageControls() {
    $(".slider-control").removeClass("inactive");
    if (!curSlide) $(".slider-control.left").addClass("inactive");
    if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
  };
  
  function autoSlide() {
    autoSlideTimeout = setTimeout(function() {
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 0;
      changeSlides();
    }, autoSlideDelay);
  };
  
  autoSlide();
  
  function changeSlides(instant) {
    if (!instant) {
      animating = true;
      manageControls();
      $slider.addClass("animating");
      $slider.css("top");
      $(".slide").removeClass("active");
      $(".slide-"+curSlide).addClass("active");
      setTimeout(function() {
        $slider.removeClass("animating");
        animating = false;
      }, animTime);
    }
    window.clearTimeout(autoSlideTimeout);
    $(".slider-pagi__elem").removeClass("active");
    $(".slider-pagi__elem-"+curSlide).addClass("active");
    $slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
    $slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
    diff = 0;
    autoSlide();
  }

  function navigateLeft() {
    if (animating) return;
    if (curSlide > 0) curSlide--;
    changeSlides();
  }

  function navigateRight() {
    if (animating) return;
    if (curSlide < numOfSlides) curSlide++;
    changeSlides();
  }

  $(document).on("mousedown touchstart", ".slider", function(e) {
    if (animating) return;
    window.clearTimeout(autoSlideTimeout);
    var startX = e.pageX || e.originalEvent.touches[0].pageX,
        winW = $(window).width();
    diff = 0;
    
    $(document).on("mousemove touchmove", function(e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (startX - x) / winW * 70;
      if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
      $slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
      $slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
    });
  });
  
  $(document).on("mouseup touchend", function(e) {
    $(document).off("mousemove touchmove");
    if (animating) return;
    if (!diff) {
      changeSlides(true);
      return;
    }
    if (diff > -8 && diff < 8) {
      changeSlides();
      return;
    }
    if (diff <= -8) {
      navigateLeft();
    }
    if (diff >= 8) {
      navigateRight();
    }
  });
  
  $(document).on("click", ".slider-control", function() {
    if ($(this).hasClass("left")) {
      navigateLeft();
    } else {
      navigateRight();
    }
  });
  
  $(document).on("click", ".slider-pagi__elem", function() {
    curSlide = $(this).data("page");
    changeSlides();
  });
  
});

</script>

<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/114350/script.js');
</script>
</body>

</html>