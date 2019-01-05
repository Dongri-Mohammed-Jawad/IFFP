<?php
header("Cache-Control: private");
header("Content-type: audio/mpeg3");
header("Content-Transfer-Encoding: binary");
$fileName = 'IFFPReport.ppsx';
header("Content-Disposition: attachment; filename=".$fileName);
//So the browser can display the download progress correctly


readfile($fileName);
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js page-loader-overflow-hidden">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>IFFP | International Foundation For Progress</title>
	<?php include("Head.php"); ?>
</head>

<body itemscope itemtype="http://schema.org/WebPage">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1824051140979993&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php include("WheelLoader.php"); ?>
<?php include("Header.php"); ?>

    <!-- Fly Slider -->
    <div class="fly-slider invisible" data-rotation-interval="10000" data-rotation-duration="1000">
        <div class="cube">
            <section class="slide" style="background-image: url(images/ProjectImages/slide-school.jpeg);">
                <div class="slide-content">
                    <h1 class="page-title">International Foundation For Progress</h1>

                    <div class="page-subtitle">Helping People Progress</div>

                    <div class="volunteer-cta">
                        <a href="Volunteer.php" class="btn btn-large btn-icon js-wave"><i class="material-icons">arrow_forward</i>BECOME A VOLUNTEER TODAY</a><br>
				    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7PCNM9P4CV2TN">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                       
                    </div>
                </div>
            </section>

            <section class="slide" style="background-image: url(images/ProjectImages/slide-2.jpg);">
                <div class="slide-content">
                    <h2 class="page-title">International Foundation For Progress</h2>

                    <div class="page-subtitle">Helping People Progress</div>

                    <div class="volunteer-cta">
                        <a href="Volunteer.php" class="btn btn-large btn-icon js-wave"><i class="material-icons">arrow_forward</i>BECOME A VOLUNTEER TODAY</a><br>
				    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7PCNM9P4CV2TN">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                        
                    </div>
                </div>
            </section>

            <section class="slide" style="background-image: url(images/ProjectImages/slide-3.jpg);">
                <div class="slide-content">
                    <h2 class="page-title">International Foundation For Progress</h2>

                    <div class="page-subtitle">Helping People Progress</div>

                    <div class="volunteer-cta">
                        <a href="Volunteer.php" class="btn btn-large btn-icon js-wave"><i class="material-icons">arrow_forward</i>BECOME A VOLUNTEER TODAY</a><br>
				    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7PCNM9P4CV2TN">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                       
                    </div>
                </div>
            </section>

            <section class="slide" style="background-image: url(images/ProjectImages/slide-4.jpg);">
                <div class="slide-content">
                    <h2 class="page-title">International Foundation For Progress</h2>

                    <div class="page-subtitle">Helping People Progress</div>

                    <div class="volunteer-cta">
                        <a href="Volunteer.php" class="btn btn-large btn-icon js-wave"><i class="material-icons">arrow_forward</i>BECOME A VOLUNTEER TODAY</a><br>
				    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7PCNM9P4CV2TN">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                        
                    </div>
                </div>
            </section>
        </div>

        <a class="slider-control prev js-wave" href="#"><i class="material-icons">keyboard_arrow_left</i></a>
        <a class="slider-control next js-wave" href="#"><i class="material-icons">keyboard_arrow_right</i></a>
    </div>
    <!--/ Fly Slider -->

    <!-- Services -->
    <section class="flex-container fly-services">
        <div class="fly-service">
            <div class="service-content">
                <i class="material-icons">language</i>
                <h3 class="title">Help in Spreading the awesomeness</h3>
                <div class="description"></div>
            </div>

            <div class="service-buttons">
               <center>
			<a href="https://www.facebook.com/IFFPinc"><img src="images/icons/facebook.png" style="float:left;margin-left:20px;margin-right:20px;" /></a> 
			<a href="https://twitter.com/iffp"><img src="images/icons/twitter.png" style="float:left;margin-left:20px;margin-right:20px;" /></a> 
			<a href="https://www.youtube.com/user/IFFPinc"><img src="images/icons/youtube.png" style="float:left;margin-left:20px;margin-right:20px;" /></a> 
			<a href="https://www.flickr.com/photos/iffp"><img src="images/icons/flickr.png" style="float:left;margin-left:20px;margin-right:20px;" /></a> 
			</center>
            </div>
        </div>

        <div class="fly-service">
            <div class="service-content">
                <i class="material-icons">face</i>
                <h3 class="title">Help the cause and earn your reward from ALLAH</h3>
                <div class="description"></div>
            </div>

            <div class="service-buttons">
                <a href="https://www.paypal.com/mep/dashboard" class="btn btn-medium js-wave">Donate</a>
            </div>
        </div>

        <div class="fly-service">
            <div class="service-content">
                <i class="material-icons">favorite_border</i>
                <h3 class="title">Spread the joy and feel the love</h3>
                <div class="description"></div>
            </div>

            <div class="service-buttons">
                <a href="School.php" class="btn btn-medium js-wave">Our School</a>
            </div>
        </div>

        <div class="fly-service">
            <div class="service-content">
                <i class="material-icons">supervisor_account</i>
                <h3 class="title">Join hands to make a difference together</h3>
                <div class="description"></div>
            </div>

            <div class="service-buttons">
                <a href="Clinic.php" class="btn btn-medium js-wave">READ MORE</a>
            </div>
        </div>
    </section>
    <!--/ Services -->

    <!-- Current Projects -->
    <section class="section padding-bottom-70">
        <div class="section-heading">
            <div class="container">
                <div class="section-subtitle">what do we do</div>
                <h2 class="section-title">Current Projects</h2>
            </div>
        </div>

        <div class="container">
            <div class="fly-projects alternate-layout">
                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed flip-front">
                        <a class="project-media js-wave" href="#" itemprop="url">
                            <img src="images/ProjectImages/project-7.jpg" alt="" itemprop="image" />
                            <span class="progress">
                                <span class="progress-label">0%</span>
                                <span class="progress-bar"></span>
                            </span>
                        </a>

                        <div class="project-content">
                            <h3 class="project-title" itemprop="name">
                                <a href="School.php">Tahira International school</a>
                            </h3>

                            <div class="project-location">
                                <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Lahore, Pakistan</a>
                            </div>

                            <div class="project-description" itemprop="description">
                                <p>
                                    The Tahira Elementary Grammar School (TEGS) seeks to make basic education attainable for those individual who are underprivileged in Pakistan. We invest in the intellectual and spiritual promise of each student in underprivileged communities.<br><br>
							Our school demonstrates the transformational effect a school can have on students by combining exceptional academics with a meaningful moral and spiritual education. We aim to provide a superior interdisciplinary education, designed to enable students to attain skills necessary to become self-sufficient, creative and independent individuals, as well as responsible, ethical and socially conscious citizens.
                                </p>
                            </div>

                            <div class="project-footer">
                                <ul class="project-stats">
                                    <li>
                                        <div class="label">raised</div>
                                        <div class="value" data-raised="12731"><sup>$</sup>100,000</div>
                                    </li>
                                    <li>
                                        <div class="label">goal</div>
                                        <div class="value" data-goal="22500" itemprop="target"><sup>$</sup>600,000</div>
                                    </li>
                                </ul>

                                <div class="project-buttons">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7PCNM9P4CV2TN">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="boxed flip-back">
                        <div class="card-map" data-placeholder="waiting for map">
                            <div class="google-map"
                                 data-map-zoom="14"
                                 data-map-type="roadmap"
                                 data-map-style="onehope"
                                 data-map-address="Lahore, Pakistan"
                                 data-map-marker="images/marker.png"
                                 data-map-marker-size="[31,46]"
                                 data-map-marker-anchor="[16,46]">
                                <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                            </div>
                        </div>

                        <ul class="card-social">
                            <li><a href="https://www.facebook.com/IFFPinc" class="fa fa-facebook js-wave"></a></li>
                            <li><a href="https://twitter.com/iffp" class="fa fa-twitter js-wave"></a></li>
                            <li><a href="https://www.youtube.com/user/IFFPinc" class="fa fa-youtube js-wave"></a></li>
                            <li><a href="https://www.flickr.com/photos/iffp" class="fa fa-flickr js-wave"></a></li>
                        </ul>
                    </div>
                </article>
                <!--/ Project -->

                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed flip-front">
                        <a class="project-media js-wave" href="#" itemprop="url">
                            <img src="images/ProjectImages/project-8.jpg" alt="" itemprop="image" />
                            <span class="progress">
                                <span class="progress-label">0%</span>
                                <span class="progress-bar"></span>
                            </span>
                        </a>

                        <div class="project-content">
                            <h3 class="project-title text-left" itemprop="name">
                                <a href="Clinic.php" class="text-left">ZakaUllah Pirzada Medical Clinic</a>
                            </h3>

                            <div class="project-location text-left">
                                <a href="#" class="flip-button text-left" itemprop="location"><i class="material-icons">location_on</i>Lahore, Pakistan</a>
                            </div>

                            <div class="project-description" itemprop="description">
                                <p class="text-left">
                                    The ZakaUllah Pirzada Medical Clinic was started to deliver necessary medical services to the sick and afflicted people of the area, and services the school students and their family along with poor and underprivileged of the locality. The area is without proper sewage system and rampant with garbage dumps. The poor sanitation and unsafe water supply is cause of many normally preventable diseases. The ZakaUllah Pirzada Medical Clinic is servicing the greater community and provide the necessary medicines.

                                </p>
                            </div>

                            <div class="project-footer">
                                <ul class="project-stats">
                                    <li>
                                        <div class="label">raised</div>
                                        <div class="value" data-raised="26456"><sup>$</sup>100,000</div>
                                    </li>
                                    <li>
                                        <div class="label">goal</div>
                                        <div class="value" data-goal="25000" itemprop="target"><sup>$</sup>600,000</div>
                                    </li>
                                </ul>

                                <div class="project-buttons">
                                   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7PCNM9P4CV2TN">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="boxed flip-back">
                        <div class="card-map" data-placeholder="waiting for map">
                            <div class="google-map"
                                 data-map-zoom="14"
                                 data-map-type="roadmap"
                                 data-map-style="onehope"
                                 data-map-address="Lahore, Pakistan"
                                 data-map-marker="images/marker.png"
                                 data-map-marker-size="[31,46]"
                                 data-map-marker-anchor="[16,46]">
                                <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                            </div>
                        </div>

                        <ul class="card-social">
                            <li><a href="https://www.facebook.com/IFFPinc" class="fa fa-facebook js-wave"></a></li>
                            <li><a href="https://twitter.com/iffp" class="fa fa-twitter js-wave"></a></li>
                            <li><a href="https://www.youtube.com/user/IFFPinc" class="fa fa-youtube js-wave"></a></li>
                            <li><a href="https://www.flickr.com/photos/iffp" class="fa fa-flickr js-wave"></a></li>
                        </ul>
                    </div>
                </article>
                <!--/ Project -->

                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed flip-front">
                        <a class="project-media js-wave" href="#" itemprop="url">
                            <img src="images/ProjectImages/project-9.jpg" alt="" itemprop="image" />
                            <span class="progress">
                                <span class="progress-label">0%</span>
                                <span class="progress-bar"></span>
                            </span>
                        </a>

                        <div class="project-content">
                            <h3 class="project-title" itemprop="name">
                                <a href="Volunteer.php">Pakistan Disaster Relief Efforts</a>
                            </h3>

                            

                            <div class="project-description" itemprop="description">
                                <p>
                                    International foundation for progress assists in disaster relief where needed. We provide monetary and other assistance as need arises. We have assisted in previous disaster relief efforts in Pakistan.

                                </p>
                            </div>

                            <div class="project-footer">
                                <ul class="project-stats">
                                    <li>
                                        <div class="label">raised</div>
                                        <div class="value" data-raised="8345"><sup>$</sup>100,000</div>
                                    </li>
                                    <li>
                                        <div class="label">goal</div>
                                        <div class="value" data-goal="24500" itemprop="target"><sup>$</sup>600,000</div>
                                    </li>
                                </ul>

                                <div class="project-buttons">
                                   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7PCNM9P4CV2TN">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="boxed flip-back">
                        <div class="card-map" data-placeholder="waiting for map">
                            <div class="google-map"
                                 data-map-zoom="14"
                                 data-map-type="roadmap"
                                 data-map-style="onehope"
                                 data-map-address="64 Marcus Ave, New Hyde Park, NY 11040"
                                 data-map-marker="images/marker.png"
                                 data-map-marker-size="[31,46]"
                                 data-map-marker-anchor="[16,46]">
                                <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                            </div>
                        </div>

                        <ul class="card-social">
                            <li><a href="https://www.facebook.com/IFFPinc" class="fa fa-facebook js-wave"></a></li>
                            <li><a href="https://twitter.com/iffp" class="fa fa-twitter js-wave"></a></li>
                            <li><a href="https://www.youtube.com/user/IFFPinc" class="fa fa-youtube js-wave"></a></li>
                            <li><a href="https://www.flickr.com/photos/iffp" class="fa fa-flickr js-wave"></a></li>
                        </ul>
                    </div>
                </article>
                <!--/ Project -->
            </div>
        </div>
    </section>
    <!--/ Current Projects -->

    <!-- Call To Action -->
    <section class="section section-cta parallax" style="background-image: url(images/ProjectImages/bg.jpg);">
        <div class="container">
            <h2 class="section-title">We help people in need</h2>
            <div class="section-subtitle">Become a volunteer and help others</div>
            <a href="DownloadReport.php" class="btn btn-medium btn-yellow js-wave" style="margin-top:120px;">Download Report</a>
        </div>
    </section>
    <!--/ Call To Action -->
<?php include("OurTeam.php"); ?>
    <!-- Events -->
<!--    <section class="section padding-bottom-50">
        <div class="section-heading">
            <div class="container">
                <div class="section-subtitle">UPCOMING EVENTS</div>
                <h2 class="section-title">Events at OneHope</h2>
            </div>
        </div>

        <div class="container">
            <div class="fly-events flex-container">
                <div class="column">-->
                    <!-- Event -->
<!--                    <article class="fly-card fly-event fly-flip-effect" itemscope itemtype="http://schema.org/Event">
                        <div class="boxed flip-front">
                            <a class="event-media js-wave" href="event-details.html" itemprop="url">
                                <img src="images/temp/event-1.jpg" alt="" itemprop="image" />
                            </a>

                            <div class="event-content">
                                <h3 class="event-title" itemprop="name">
                                    <a href="event-details.html">Here goes the Event Title</a>
                                </h3>

                                <div class="event-location">
                                    <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
                                    <time class="event-date" datetime="2016-12-12T20:11:00" itemprop="startDate">
                                        <i class="material-icons">query_builder</i>12 Dec 2016, 11:00 AM
                                    </time>
                                </div>

                                <div class="event-description" itemprop="description">
                                    <p>
                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                        sit amet. Lorem ipsum dolor sit ame. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                        takimata sanctus est Lorem ipsum dolor sit amet.
                                    </p>
                                </div>

                                <div class="event-footer">
                                    <div class="event-buttons">
                                        <a href="event-details.html" class="btn btn-transparent btn-icon-left js-wave" itemprop="url">
                                            <i class="material-icons">arrow_forward</i>Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="boxed flip-back">
                            <div class="card-map" data-placeholder="waiting for map">
                                <div class="google-map"
                                     data-map-zoom="14"
                                     data-map-type="roadmap"
                                     data-map-style="onehope"
                                     data-map-address="1998 Hulman Blvd, Speedway, IN, 46222"
                                     data-map-marker="images/marker.png"
                                     data-map-marker-size="[31,46]"
                                     data-map-marker-anchor="[16,46]">
                                    <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
   <!--                             </div>
                            </div>

                            <ul class="card-social">
                                <li><a href="#" class="fa fa-facebook js-wave"></a></li>
                                <li><a href="#" class="fa fa-twitter js-wave"></a></li>
                                <li><a href="#" class="fa fa-instagram js-wave"></a></li>
                                <li><a href="#" class="fa fa-google js-wave"></a></li>
                            </ul>
                        </div>
                    </article>
                    <!--/ Event -->
              <!--  </div>-->

     <!--           <div class="column">
                    <!-- Event -->
             <!--       <article class="fly-card fly-event fly-flip-effect" itemscope itemtype="http://schema.org/Event">
                        <div class="boxed flip-front">
                            <a class="event-media js-wave" href="event-details.html" itemprop="url">
                                <img src="images/temp/event-2.jpg" alt="" itemprop="image" />
                            </a>

                            <div class="event-content">
                                <h3 class="event-title" itemprop="name">
                                    <a href="event-details.html">Here goes the Event Title</a>
                                </h3>

                                <div class="event-location">
                                    <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
                                    <time class="event-date" datetime="2016-12-12T20:14:00" itemprop="startDate">
                                        <i class="material-icons">query_builder</i>12 Dec 2016, 2:00 PM
                                    </time>
                                </div>

                                <div class="event-description" itemprop="description">
                                    <p>
                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                        sit amet. Lorem ipsum dolor sit ame. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                        takimata sanctus est Lorem ipsum dolor sit amet.
                                    </p>
                                </div>

                                <div class="event-footer">
                                    <div class="event-buttons">
                                        <a href="event-details.html" class="btn btn-transparent btn-icon-left js-wave" itemprop="url">
                                            <i class="material-icons">arrow_forward</i>Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="boxed flip-back">
                            <div class="card-map" data-placeholder="waiting for map">
                                <div class="google-map"
                                     data-map-zoom="14"
                                     data-map-type="roadmap"
                                     data-map-style="onehope"
                                     data-map-address="Oklahoma City, OK 73105"
                                     data-map-marker="images/marker.png"
                                     data-map-marker-size="[31,46]"
                                     data-map-marker-anchor="[16,46]">
                                    <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                               <!-- </div>
                            </div>

                            <ul class="card-social">
                                <li><a href="#" class="fa fa-facebook js-wave"></a></li>
                                <li><a href="#" class="fa fa-twitter js-wave"></a></li>
                                <li><a href="#" class="fa fa-instagram js-wave"></a></li>
                                <li><a href="#" class="fa fa-google js-wave"></a></li>
                            </ul>
                        </div>
                    </article>
                    <!--/ Event -->
            <!--    </div>-->
            </div>
        </div>
    </section>
    <!--/ Events -->

    <!-- Testimonials -->
    <section class="section gray section-testimonials" style="background-image: url(images/map.png);">
        <div class="section-heading">
            <div class="container">
                <div class="section-subtitle">CLIENT TESTIMONAILS</div>
                <h2 class="section-title">What do others say about us</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="fly-card">
                        <div class="boxed">
                            <!-- Testimonials Slider -->
                            <div class="testimonials-slider">
                                <article class="testimonial">
                                    <blockquote class="testimonial-quote">
                                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit dunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim quer adipiscing elit, sed diam
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </blockquote>

                                    <div class="testimonial-author">
                                        <div class="avatar"><img src="images/temp/avatar-1.jpg" alt=""/></div>
                                        <div class="name">Melissa Doe</div>
                                        <div class="job">Charity Woman</div>
                                    </div>
                                </article>

                                <article class="testimonial">
                                    <blockquote class="testimonial-quote">
                                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit dunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                        vel illum dolore eu feugiat nulla facilisis.
                                    </blockquote>

                                    <div class="testimonial-author">
                                        <div class="avatar"><img src="images/temp/avatar-2.jpg" alt=""/></div>
                                        <div class="name">Jack Bourne</div>
                                        <div class="job">Manager</div>
                                    </div>
                                </article>
                            </div>
                            <!--/ Testimonials Slider -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Testimonials -->

    <!-- Statistics -->
    <section class="section section-stats parallax" style="background-image: url(images/ProjectImages/slide-6.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <div class="stats-item">
                        <div class="counter js-counter" data-duration="2" data-step=".1">1000</div>
                        <div class="description">STUDENTS HELPED</div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4">
                    <div class="stats-item">
                        <div class="counter js-counter" data-duration="2" data-step=".1">110428</div>
                        <div class="description">PATIENT SERVED</div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4">
                    <div class="stats-item">
                        <div class="counter js-counter" data-duration="2" data-step=".1">200000</div>
                        <div class="description">PEOPLE SERVED</div>
                    </div>
                </div>

                <!--<div class="col-xs-6 col-sm-3">
                    <div class="stats-item">
                        <div class="counter js-counter" data-duration="2" data-step=".1">2311</div>
                        <div class="description">HOMES SERVED</div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!--/ Statistics -->

    <!-- Recent Posts -->
    <section class="section padding-bottom-50">
        <div class="section-heading">
            <div class="container">
                <div class="section-subtitle">RECENT BLOGPOSTS</div>
                <h2 class="section-title">Latest from our Blog</h2>
            </div>
        </div>

        <div class="container">
            <div class="fly-articles columns3 flex-container">
                <div class="column">
                    <!-- Post -->
                    <article class="fly-card fly-article boxed" itemscope itemtype="http://schema.org/Article">
                        <div class="boxed">
                            <a class="post-media js-wave" href="Blog.php" itemprop="url">
                                <img src="images/ProjectImages/post-1.jpg" alt="" itemprop="image" />
                            </a>

                            <div class="post-content">
                                <h3 class="post-title" itemprop="name">
                                    <a href="Blog.php">Another Successful Free Clinic by IFFP</a>
                                </h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-12-12T20:04:09" itemprop="dateCreated">24 Apr 2018</time>
                                    
                                    
                                    <!--<span class="post-author" itemprop="author">by <a href="#">John Doe</a></span>-->
                                </div>

                                <div class="post-description" itemprop="articleBody">
                                    <p>
                                        Enjoy pictures from IFFP Free Clinic on April 22, 2018. Free Medical camp organized by the International foundation for Progress’ facilities In Lahore.
                                    </p>
                                </div>
<br>
                                <div class="post-footer">
                                    <div class="post-buttons">
                                        <a href="Blog.php" class="btn btn-transparent js-wave" itemprop="url">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--/ Post -->
                </div>

               <!-- <div class="column">
                    <!-- Post -->
                  <!--  <article class="fly-card fly-article boxed" itemscope itemtype="http://schema.org/Article">
                        <div class="boxed">
                            <a class="post-media js-wave" href="Blog.php" itemprop="url">
                                <img src="images/ProjectImages/post-2.jpg" alt="" itemprop="image" />
                            </a>

                            <div class="post-content">
                                <h3 class="post-title" itemprop="name">
                                    <a href="Blog.php">Rotary Club Event at IFFP</a>
                                </h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-12-12T20:04:09" itemprop="dateCreated">2 Oct 2016</time>
                                    
                                   
                                    <!--<span class="post-author" itemprop="author">by <a href="#">John Doe</a></span>-->
                         <!--       </div>

                                <div class="post-description" itemprop="articleBody">
                                    <p>
                                        After decades living and working abroad, Saeed Malik (left) returned to his native Pakistan and wanted to do something to help rectify what he saw as a poor education system. He founded the Bright Star Mobile Library, which now serves about 2,500 children.
                                    </p>
                                </div>

                                <div class="post-footer">
                                    <div class="post-buttons">
                                        <a href="Blog.php" class="btn btn-transparent js-wave" itemprop="url">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--/ Post -->
               <!-- </div>-->

                <div class="column">
                    <!-- Post -->
                    <article class="fly-card fly-article boxed" itemscope itemtype="http://schema.org/Article">
                        <div class="boxed">
                            <a class="post-media js-wave" href="Blog.php" itemprop="url">
                                <img src="images/ProjectImages/post-3.jpg" alt="" itemprop="image" />
                            </a>

                            <div class="post-content">
                                <h3 class="post-title" itemprop="name">
                                    <a href="Blog.php">Far from home, but closer to school in Pakistan</a>
                                </h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-12-12T20:04:09" itemprop="dateCreated">22 Apr 2013</time>
                                    
                                    
                                    <!--<span class="post-author" itemprop="author">by <a href="#">John Doe</a></span>-->
                                </div>

                                <div class="post-description" itemprop="articleBody">
                                    <p>
                                        Far from home, but closer to school in Pakistan<br><br>
								Far from home, but closer to school in Pakistan Source: irinnews.org
                                    </p>
                                </div>

                                <div class="post-footer">
                                    <div class="post-buttons">
                                        <a href="Blog.php" class="btn btn-transparent js-wave" itemprop="url">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--/ Post -->
                </div>
			 
                <div class="column">
                    <!-- Post -->
                    <article class="fly-card fly-article boxed" itemscope itemtype="http://schema.org/Article">
                        <div class="boxed">
                            <a class="post-media js-wave" href="Blog.php" itemprop="url">
                                <img src="images/ProjectImages/post-4.jpg" alt="" itemprop="image" />
                            </a>

                            <div class="post-content">
                                <h3 class="post-title" itemprop="name">
                                    <a href="Blog.php">Quiet Progress for Education in Pakistan</a>
                                </h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-12-12T20:04:09" itemprop="dateCreated">23 Mar 2013</time>
                                   
                                    
                                    <!--<span class="post-author" itemprop="author">by <a href="#">John Doe</a></span>-->
                                </div>

                                <div class="post-description" itemprop="articleBody">
                                    <p>
                                        Quiet Progress for Education in Pakistan<br><br>
								Quiet Progress for Education in Pakistan Source: brookings.edu
                                    </p>
                                </div>
<br><br><br>
                                <div class="post-footer">
                                    <div class="post-buttons">
                                        <a href="Blog.php" class="btn btn-transparent js-wave" itemprop="url">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--/ Post -->
                </div>
                <div class="column">
                    <!-- Post -->
                    <article class="fly-card fly-article boxed" itemscope itemtype="http://schema.org/Article">
                        <div class="boxed">
                            <a class="post-media js-wave" href="Blog.php" itemprop="url">
                                <img src="images/ProjectImages/blog-post-5.jpg" alt="" itemprop="image" />
                            </a>

                            <div class="post-content">
                                <h3 class="post-title" itemprop="name">
                                    <a href="Blog.php">School Trip</a>
                                </h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-12-12T20:04:09" itemprop="dateCreated">01 Dec 2010</time>
                                    
                                    
                                    <!--<span class="post-author" itemprop="author">by <a href="#">John Doe</a></span>-->
                                </div>

                                <div class="post-description" itemprop="articleBody">
                                    <p>
                                        We take children to different places for entertainment and study tour once every year. Children learn and enjoy a lot.
                                    </p>
                                </div>
<br><br><br><br><br>
                                <div class="post-footer">
                                    <div class="post-buttons">
                                        <a href="Blog.php" class="btn btn-transparent js-wave" itemprop="url">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--/ Post -->
                </div>
                <div class="column">
                    <!-- Post -->
                    <article class="fly-card fly-article boxed" itemscope itemtype="http://schema.org/Article">
                        <div class="boxed">
                            <a class="post-media js-wave" href="Post1.php" itemprop="url">
                                <img src="images/ProjectImages/visit.jpg" alt="" itemprop="image" />
                            </a>

                            <div class="post-content">
                                <h3 class="post-title" itemprop="name">
                                    <a href="Blog.php">American Consulate Staff Visited School.</a>
                                </h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-12-12T20:04:09" itemprop="dateCreated">24 Apr 2018</time>
                                    
                                    
                                    <!--<span class="post-author" itemprop="author">by <a href="#">John Doe</a></span>-->
                                </div>

                                <div class="post-description" itemprop="articleBody">
                                    <p>
                                        American Consulate Staff visited our school and clinic Dec,2010. They visited all classes, they talked to students, staff and principal about school. They appreciated the efforts made by school administration, staff and especially IFFP.
                                    </p>
                                </div>
<br>
                                <div class="post-footer">
                                    <div class="post-buttons">
                                        <a href="Blog.php" class="btn btn-transparent js-wave" itemprop="url">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--/ Post -->
                </div>
            </div>
        </div>
    </section>
    <!--/ Recent Posts -->

    <!-- Contact Us -->
    <section class="section gray">
        <div class="section-heading">
            <div class="container">
                <div class="section-subtitle">CONTACT US</div>
                <h2 class="section-title">Get in touch with us</h2>
            </div>
        </div>

        <div class="container">
            <!-- Contact Form -->
            <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group required">
                            <label for="your-name">NAME</label>
                            <br/>
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" placeholder="Name"/>
                                    </span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group required">
                            <label for="your-email">Email address</label>
                            <br/>
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" placeholder="Email Address"/>
                                    </span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group required">
                            <label for="your-subject">subject</label>
                            <br/>
                                    <span class="wpcf7-form-control-wrap your-subject">
                                        <input type="text" name="your-subject" value="" class="wpcf7-form-control wpcf7-text" id="your-subject" placeholder="Subject" />
                                    </span>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group required">
                            <label for="your-message">message</label>
                            <br/>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="your-message" class="wpcf7-form-control wpcf7-textarea" id="your-message" placeholder="Type in your message"></textarea>
                                    </span>
                        </div>

                        <div class="text-right">
                            <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" />
                        </div>
                    </div>
                </div>
            </form>
            <!--/ Contact Form -->
        </div>
    </section>
    <!--/ Contact Us -->

<?php include("Footer.php"); ?>
<?php include("Bottom_JS.php"); ?>
</body>
</html>