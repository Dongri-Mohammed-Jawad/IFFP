<!DOCTYPE html>
<html lang="zxx" class="no-js page-loader-overflow-hidden">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>IFFP | Contact Us</title>
	<?php include("Head.php") ?>
</head>

<body itemscope itemtype="http://schema.org/WebPage">

<?php include("WheelLoader.php"); ?>
<?php include("Header.php"); ?>
    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url(images/ProjectImages/slide-26.jpeg);">
        <div class="fly-header-content">
            <div class="page-subtitle"></div>
            <h1 class="page-title">Contact us</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Page -->
    <div class="page-wrapper padding-top-120"><!-- TODO: additional classes are: .page-sidebar, .page-sidebar-left, .page-narrow -->
        <div class="container">
            <div class="row">
                <!-- Content -->
                <main itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement" class="content">
                    <!-- Map -->
                    <div class="google-map"
                         data-map-zoom="15"
                         data-map-address="64 Marcus Ave, New Hyde Park, NY 11040"
                         data-map-type="roadmap"
                         data-map-style="hency"
                         data-map-marker="images/marker.png"
                         data-map-marker-size="[50,64]"
                         data-map-marker-anchor="[26,64]">
                        <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                    </div>
                    <!--/ Map -->

                    <!-- Contact Form -->
                    <form action="ContactForm.php" method="post" class="wpcf7-form" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group required">
                                    <label for="your-name">NAME</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="Name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" placeholder="enter your name"/>
                                    </span>
                                </div>

                                <div class="form-group required">
                                    <label for="your-email">Email address</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="Email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" placeholder="enter your email"/>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="your-phone">PHONE</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-phone">
                                        <input type="text" name="Phone" value="" class="wpcf7-form-control wpcf7-text" id="your-phone" placeholder="enter your phone number" />
                                    </span>
                                </div>

                                <div class="form-group required">
                                    <label for="your-subject">subject</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-subject">
                                        <input type="text" name="Subject" value="" class="wpcf7-form-control wpcf7-text" id="your-subject" placeholder="subject" />
                                    </span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group required">
                                    <label for="your-message">message</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="Message" class="wpcf7-form-control wpcf7-textarea" id="your-message" placeholder="type in your message"></textarea>
                                    </span>
                                </div>

                                <div class="text-right">
                                    <input type="submit" name="ContactSubmit" value="Send Message" class="wpcf7-form-control wpcf7-submit btn" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ Contact Form -->
                </main>
                <!--/ Content -->
            </div>
        </div>
    </div>
    <!--/ Page -->

<?php include("Footer.php"); ?>
<?php include("Bottom_JS.php"); ?>
</body>
</html>