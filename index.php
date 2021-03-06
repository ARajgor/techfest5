<!DOCTYPE html>
<html lang="en">

<head>

  
    <meta charset="utf-8">
    <title>Tech-Pulse || 2022-23</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/plugin.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/twentytwenty.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="css/colors/magenta.css" type="text/css" id="colors">
    <link rel="stylesheet" href="css/color.css" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">

    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/navigation.css" type="text/css">
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
	
	<!-- custom font -->
	<link rel="stylesheet" href="css/font-style.css" type="text/css">

    

</head>

<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     $name = str_replace("<","&lt;","$name");
     $name= str_replace(">", "&gt;", "$name");

     $email = str_replace("<","&lt;","$email");
     $email= str_replace(">", "&gt;", "$email");

     $subject = str_replace("<","&lt;","$subject");
     $subject= str_replace(">", "&gt;", "$subject");

     $message = str_replace("<","&lt;","$message");
     $message= str_replace(">", "&gt;", "$message");

     require "database_connection.php";

     $sql = "INSERT INTO `contact_us` (`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
     $result = mysqli_query($connect, $sql);

 }
?>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
 <?php
    require "page_navbar.php";
 ?>
        <!-- header close -->


        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            <section id="section-hero" class="fullwidthbanner-container" aria-label="section-slider" data-bgcolor="#222222" >
                <div id="slider-revolution">
                    <ul>
                        <li data-transition="random-premium" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
							<img alt="" class="rev-slidebg" data-bgparallax="0" src="images-event/slider/main-lobby.jpeg">

                        </li>
						
						<li data-transition="random-premium" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
							<img alt="" class="rev-slidebg" data-bgparallax="0" src="images-event/slider/ppsu-gate.jpg">
                        </li>

                        <li data-transition="random-premium" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
							<img alt="" class="rev-slidebg" data-bgparallax="0" src="images-event/slider/clgimg1.jpeg">
                        </li>

                        <li data-transition="random-premium" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
							<img alt="" class="rev-slidebg" data-bgparallax="0" src="images-event/slider/ppsu-lobby.jpeg">
                        </li>

                    </ul>
					
					<div style="" class="tp-static-layers">
                            <div
                                class="text-center tp-caption size-28 font-weight-bold text-white tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['185']"
                                data-lineheight="['90','90','90','90']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            >
                                <!-- <span class="id-color-2" style="color: #ec167f;">14-15,April 2022</span> -->
                            </div>
							
                            <div
                                class="text-center tp-caption size-84 font-weight-bold text-white tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['center','center','center','center']"
                                data-lineheight="['90','90','90','90']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            >
                                Tech-Pulse<br>
								2022-23
                            </div>
							
							
							<div
                                class="text-center tp-caption size-20 text-white tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['430']"
                                data-lineheight="['90','90','90','90']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            >
                                7500+ Visitors &nbsp;&nbsp;&nbsp;&nbsp; 1000+ Participants &nbsp;&nbsp;&nbsp;&nbsp; Surat,Gujarat
                            </div>

                            
                            <div
                                class="tp-caption tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['506']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button"
                                data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                data-responsive_offset="on"
                                data-responsive="off"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(255, 255, 255, 0.15);bw:2px 2px 2px 2px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[20,20,20,20]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[20,20,20,20]"
                            >
                        
                            </div>
							
							<div
                                class="tp-caption tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['506']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button"
                                data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                data-responsive_offset="on"
                                data-responsive="off"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(255, 255, 255, 0.15);bw:2px 2px 2px 2px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[20,20,20,20]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[20,20,20,20]"
                            >
                            </div>


                        </div>
                </div>
            </section>
            <!-- revolution slider close -->
			
			<section id="section-countdown" aria-label="section" class="gradient-to-right pt40 pb40">
				<div class="container">
					<div class="row" >
						<div class="col-md-10 offset-md-1">
							<div class="spacer-single"></div>
							<div id="defaultCountdown"></div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- section begin -->
			<section id="section-about" data-bgimage="url(images-event/bg/2.png) fixed no-repeat">
				<div class="wm wm-border dark wow fadeInDown">TechPluse</div>
                    <div class="container">
                        <div class="row align-items-center">
                            
                            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0s">
                                <h2 style="color:#ec167f">Welcome to the Biggest<br>Tech-Fest, Tech-Pulse 2022-23</h2>
                                <p>
                                    As the annual tech fest of PPSU, Tech-pulse has provided a podium for engineering innovations.<br>

It is an arena for your notions to speak out loud and to nurture the skills striving to reach the pinnacle of your mind.<br>

It aims in exposing the budding graduates to recent and upcoming trends in various domains, challenge the young brains to solve technical problems, and interact with their peers, inspired by achievers.<br>

Tech-Pulse is the annual science and technology fest of Gujrat hosted by P. P. Savani University (PPSU). This festival accordingly consists of various engineering, science, and technology competitions, demonstrations and workshops.
Tech-Pulse is Gujarat's biggest technical event with over 1000+ participants and 7500+ viewers.<br>


It will be a 2-day voyage towards your cerebral awakening and technical excellence.<br>

Tech-Pulse is run by students, is an enthralling kaleidoscope of internally invigorating events. <br>
It has something in store for all and brings together renowned experts of various spheres of academic and the corporate industry.<br>

So call your friends, mark your calendars, and gear up for Tech-Pulse 2022-23.
                                </p>
								
								<div class="spacer10"></div>
								
								
                            </div>
							
							<div class="col-lg-6 mb-sm-30 text-center wow fadeInRight">
                                <div class="de-images">
									<img class="di-small-2" src="images-event/misc/3.jpg" alt="" />
									<img class="img-fluid wow fadeInRight" data-wow-delay=".25s" src="images-event/misc/1.jpg" alt="" />
								</div>
                            </div>

                        </div>
                    </div>
                </section>
				
				
			
			
			<!-- section begin -->
            <section id="section-speakers" class="text-light" data-bgimage="url(images-event/bg/1.jpg) fixed top center" data-stellar-background-ratio=".2">
				<div class="wm wm-border dark wow fadeInDown">WS</div>
                <div class="container">
                    <div class="row">
						<div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Special Workshops</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
						
						<div class="clearfix"></div>
                      
                       <div class="col-lg col-md">
							<!-- team member -->
							<div class="de-team-list">
								<div class="team-pic">
									<img src="images-event/team/Savji-Dholakiya.webp" class="img-responsive" alt="" />
								</div>
								<div class="team-desc">
									<h3>Savaji Dholakia</h3>
									<p class="lead">Business-Man</p>
									<div class="small-border"></div>
									<p>Savji Dhanji Dholakia is an Indian businessman. He is the founder and chairman of Hari Krishna Exports. He was awarded the Padma Shri in 2022.</p>

									<div class="social">
										<a href="https://www.facebook.com/dholakiasavji"><i class="fa fa-facebook fa-lg"></i></a>
										<a href="https://twitter.com/savjidholakia"><i class="fa fa-twitter fa-lg"></i></a>
										<a href="https://www.instagram.com/savjidholakia/"><i class="fa fa-instagram fa-lg"></i></a>
									</div>
								</div>
							</div>
							<!-- team close -->
						</div>
						
						

                        <div class="col-lg-3 col-md-3">
							<!-- team member -->
							<div class="de-team-list">
								<div class="team-pic">
									<img src="images-event/team/Savji-Dholakiya.webp" class="img-responsive" alt="" />
								</div>
								<div class="team-desc">
									<h3>Savaji Dholakia</h3>
									<p class="lead">Business-Man</p>
									<div class="small-border"></div>
									<p>Savji Dhanji Dholakia is an Indian businessman. He is the founder and chairman of Hari Krishna Exports. He was awarded the Padma Shri in 2022.</p>

									<div class="social">
										<a href="https://www.facebook.com/dholakiasavji"><i class="fa fa-facebook fa-lg"></i></a>
										<a href="https://twitter.com/savjidholakia"><i class="fa fa-twitter fa-lg"></i></a>
										<a href="https://www.instagram.com/savjidholakia/"><i class="fa fa-instagram fa-lg"></i></a>
									</div>
								</div>
							</div>
							<!-- team close -->
						</div>

                        <div class="col-lg-3 col-md-3">
							<!-- team member -->
							<div class="de-team-list">
								<div class="team-pic">
									<img src="images-event/team/Savji-Dholakiya.webp" class="img-responsive" alt="" />
								</div>
								<div class="team-desc">
									<h3>Savaji Dholakia</h3>
									<p class="lead">Business-Man</p>
									<div class="small-border"></div>
									<p>Savji Dhanji Dholakia is an Indian businessman. He is the founder and chairman of Hari Krishna Exports. He was awarded the Padma Shri in 2022.</p>

									<div class="social">
										<a href="https://www.facebook.com/dholakiasavji"><i class="fa fa-facebook fa-lg"></i></a>
										<a href="https://twitter.com/savjidholakia"><i class="fa fa-twitter fa-lg"></i></a>
										<a href="https://www.instagram.com/savjidholakia/"><i class="fa fa-instagram fa-lg"></i></a>
									</div>
								</div>
							</div>
							<!-- team close -->
						</div>
						
						<div class="col-lg-3 col-md-3">
							<!-- team member -->
							<div class="de-team-list">
								<div class="team-pic">
									<img src="images-event/team/Sanjay-Raval.jpg" class="img-responsive" alt="" />
								</div>
								<div class="team-desc">
									<h3>Sanjay Raval</h3>
									<p class="lead">Motivational Speaker</p>
									<div class="small-border"></div>
									<p>Sanjay Menaben Raval is one of the well-known Gujarati speaker on Fearless Life and Personality Development.</p>

									<div class="social">
										<a href="https://www.facebook.com/search/top?q=sanjay%20raval"><i class="fa fa-facebook fa-lg"></i></a>
										<a href="https://twitter.com/mesanjayraval"><i class="fa fa-twitter fa-lg"></i></a>
										<a href="https://www.instagram.com/sanjaymsraval/"><i class="fa fa-instagram fa-lg"></i></a>
									</div>
								</div>
							</div>
							<!-- team close -->
						</div>

                        <div class="col-lg-3 col-md-6">
                            <!-- team member -->
                            <div class="de-team-list">
                                <div class="team-pic">
                                    <!-- <img src="" class="img-responsive" alt=""  /> -->
                                </div>
                                <div class="team-desc">
                                    <!-- <h3>John Smith</h3>
                                    <p class="lead">Expert Designer</p>
                                    <div class="small-border"></div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            <!-- team close -->
                        </div>
						
						

						<div class="clearfix"></div>

                    </div>
                </div>
            </section>
            <!-- section close -->
			
			
			<!-- section begin -->
            <section id="section-schedule" aria-label="section-services-tab" data-bgimage="url(images-event/bg/2.png) fixed center no-repeat">
                <div class="wm wm-border dark wow fadeInDown ">schedule</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Event Schedule</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12">
                            <div class="de_tab tab_style_4 text-center">
                                <ul class="de_nav de_nav_dark">
                                    <li class="active" data-link="#section-services-tab">
                                        <h3>Day <span>01</span></h3>
                                        <h4>April 14, 2022</h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>02</span></h3>
                                        <h4>April 15, 2022</h4>
                                    </li>
                                    
                                </ul>

                                <div class="de_tab_content text-left">

                                    <div id="tab1" class="tab_single_content dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">10:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Smith</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Introduction Creative Design</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Michael Dennis</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Getting Started With Creative Design</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Sarah Michelle</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Prepare Your Design Concept</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Katty Wilson</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Creative Design Implementation Basic</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab2" class="tab_single_content dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Rose Shipp</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Creative Design Implementation Basic 2</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Isaac Nicholas</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>How to Design Happiness</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Arnold</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Good Storytelling For Great Design</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Smith</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Unintuitive Lessons on Being a Designer</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
			
			<!-- section begin -->
            <section id="section-sponsors" data-bgimage="url(images-event/bg/3.png) fixed center no-repeat">
                <div class="wm wm-border dark wow fadeInDown ">sponsors</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Official Sponsors</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12 text-center">
                            <h3>Gold Sponsors</h3>
                            <div class="spacer-single"></div>
                            <img src="images-event/logo/1.png" alt="" class="grey-hover">
                            <img src="images-event/logo/2b.png" alt="" class="grey-hover">
                            <img src="images-event/logo/3b.png" alt="" class="grey-hover">
							<img src="images-event/logo/4b.png" alt="" class="grey-hover">
                            <div class="spacer-double"></div>

                            <h3>Silver Sponsors</h3>
                            <div class="spacer-single"></div>
                            <img src="images-event/logo/5.png" alt="" class="grey-hover">
                            <img src="images-event/logo/6.png" alt="" class="grey-hover">
                            <img src="images-event/logo/7.png" alt="" class="grey-hover">
                            <img src="images-event/logo/8b.png" alt="" class="grey-hover">
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-schedule" aria-label="section-services-tab" data-bgimage="url(images-event/bg/2.png) fixed center no-repeat">
                <div class="wm wm-border dark wow fadeInDown ">SOE</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>School Of Engineering</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12">
                            <div class="de_tab tab_style_4 text-center">
                                <ul class="de_nav de_nav_dark">
                                    <li class="active" data-link="#section-services-tab">
                                        <h3>Organise by</h3>
                                        <h3>School Of Engineering</h3>
                                    </li>
                                    
                                    
                                </ul>

                                <div class="de_tab_content text-left">

                                    <div id="tab1" class="tab_single_content dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time"></div>
                                                        <div class="sc-pic">
                                                            <img src="img/ceo-profile.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Dr.Parag Sanghani</h4>
                                                            <span>Provost & Executive Dean</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <p>Dr. Parag Sanghani is presently the Executive Dean with P.P Savani University. He is an Endeavour Fellow from QUT, Australia and has global exposure of education system in Europe, Australia and UK and has worked with leading Universities in UAE as Head of Academics.<br></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time"></div>
                                                        <div class="sc-pic">
                                                            <img src="img/NirajDShah.jpg" class="img-circle" alt="" style="height:95px ;width: 90px;">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Dr. Niraj D Shah</h4>
                                                            <span>Dean of SOE</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <p>Dr. Niraj D Shah is the Principal of the School of Engineering in P. P. Savani University. He has pursued his Ph.D. in Civil-Structural Engineering from SVNIT, Surat. Dr. Shah has an experience of 22 years including academic, administrative, industrial and research experience. He has several publications, authored books, guided Doctoral and P.G students and has been honored with numerous prestigious awards.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time"></div>
                                                        <div class="sc-pic">
                                                            <img src="img/JasleenKaur.jpg" class="img-circle" alt="" style="height:95px ;width: 90px;">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Dr. Jasleen Kaur</h4>
                                                            <span>HOD & Associate Professor</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <p>Dr. Jasleen Kaur is the Head of Department of the School of Engineering in P. P. Savani University. She has been associated with many prestigious journals as a reviewer as well as editorial member.<br><br></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-portfolio" class="no-top no-bottom" aria-label="section">                
                <div id="gallery" class="gallery zoom-gallery full-gallery de-gallery pf_full_width wow fadeInUp" data-wow-delay=".3s">

                    <!-- gallery item -->
                    <div class="item residential">
                        <div class="picframe">
                            <a href="images-event/portfolio/1.jpg" title="Event Photo">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Image</span>
                                    </span>
                                </span>
                                <img src="images-event/portfolio/1.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item hospitaly">
                        <div class="picframe">
                            <a href="images-event/portfolio/2.jpg" title="Event Photo">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Image</span>
                                    </span>
                                </span>
                                <img src="images-event/portfolio/2.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item hospitaly">
                        <div class="picframe">
                            <a href="images-event/portfolio/3.jpg" title="Event Photo">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Image</span>
                                    </span>
                                </span>
                                <img src="images-event/portfolio/3.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item residential">
                        <div class="picframe">
                            <a href="images-event/portfolio/4.jpg" title="Event Photo">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Image</span>
                                    </span>
                                </span>
                                <img src="images-event/portfolio/4.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->
                </div>             
            </section>
            <!-- section close -->
			
			
			
			<section id="section-fun-facts" class="text-light" data-bgimage="url(images-event/bg/3.jpg) fixed top">
                    <div class="container" style="margin-top: 25px;">
						<div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="de_count" >
                                    <i class='icon_id-2 id-color-2'></i>
                                    <h3>&nbsp;7500+</h3>
                                    <span class="text-white">Visitors</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6">
                                <div class="de_count">
                                    <i class="icon_group id-color-2"></i>
                                    <h3>&nbsp;1000+</h3>
                                    <span class="text-white">Participants</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6">
                                <div class="de_count">
                                    <i class="icon_easel id-color-2"></i>
                                    <h3>&nbsp;30+</h3>
                                    <span class="text-white">Events</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6">
                                <div class="de_count">
                                    <i class="icon_globe id-color-2"></i>
                                    <h3> &nbsp;8+</h3>
                                    <span class="text-white">Seminars</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-sponsors ftco-section" data-bgimage="url(images-event/bg/3.png) fixed center no-repeat">
                <div class="wm wm-border dark wow fadeInDown ">Contact</div>
                <div class="container row justify-content-center">
                <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section" style="color: whitesmoke;">Contact </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4 py-5">
									<h3 class="mb-4">Write us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form action="index.php" method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" maxlength="30" require>
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" maxlength="30" require>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" maxlength="50" require>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message" maxlength="500" require></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-md-5 p-4 py-5 img">
									<h3>Contact information</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> NH 8, GETCO, Near Biltech,Village: Dhamdod, Kosamba,Dist.: Surat - 394125,Gujarat.</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@ppsu.ac.in</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Website</span> <a href="#">yoursite.com</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
                </div>
            </section>
                

            <!-- footer begin -->
      <?php
      require "page_footer.php";
      ?>
        <!-- footer close -->
        </div>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jpreLoader.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/video.resize.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
	<script src="js/enquire.min.js"></script>	
    <script src="js/designesia.js"></script>	
	<script src="js/jquery.event.move.js"></script>
	<script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/countdown-custom.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>	

    <!-- RS5.0 Core JS Files -->
    <script src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

    <!-- RS5.0 Extensions Files -->
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            // revolution slider
            jQuery("#slider-revolution").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 5000,
                navigation: {
                    arrows: {
                        enable: true
                    },
                    bullets: {
                        enable: false,
                        style: 'hermes'
                    },

                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 700,
                disableProgressBar: "on"
            });
        });
    </script>
	
	<script>
    $(window).on("load", function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
    });
    </script>


</body>

</html>