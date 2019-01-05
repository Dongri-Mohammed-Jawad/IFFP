<!DOCTYPE html>
<html lang="zxx" class="no-js page-loader-overflow-hidden">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>IFFP | Become a Volunteer</title>
	<?php include("Head.php"); ?>
</head>


<body itemscope itemtype="http://schema.org/WebPage">
  <!-------------------------------------- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background:#0fa76c; color:white;">
          <h2 class="modal-title">Become a Volunteer</h2>
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form method="post" action="BecameVolunteer.php" >
				<h5 style="color:#779E8F;">First Name <span style="color:red;">*</span></h5>
				<input type="text" name="FirstName" style="border:1px solid #eee;width:100%;padding:6px;box-shadow:0px -2px 2px #eee;" required />
				<br><br>
				<h5 style="color:#779E8F;">Last Name <span style="color:red;">*</span></h5>
				<input type="text" name="LastName" style="border:1px solid #eee;width:100%;padding:6px;box-shadow:0px -2px 2px #eee;" required />
				<br><br>
				<h5 style="color:#779E8F;">Gender <span style="color:red;"></span></h5>
				<select name="Gender" style="border:1px solid #eee;width:100%;padding:6px;">
					<option>Male</option>
					<option>Female</option>
				</select>
				<br><br>
				<h5 style="color:#779E8F;">Age <span style="color:red;"></span></h5>
				<select name="Age" style="border:1px solid #eee;width:100%;padding:6px;">
					<option>Under 20</option>
					<option>From 20 - 30</option>
					<option>From 31 - 40</option>
					<option>Over 40</option>
				</select>
				<br><br>
				<h5 style="color:#779E8F;">Email <span style="color:red;">*</span></h5>
				<input type="email" name="Email" style="border:1px solid #eee;width:100%;padding:6px;box-shadow:0px -2px 2px #eee;" required />
				<br><br>
				<h5 style="color:#779E8F;">Address <span style="color:red;">*</span></h5>
				<input type="text" name="Address" style="border:1px solid #eee;width:100%;padding:6px;box-shadow:0px -2px 2px #eee;" required />
				<br><br>
				<h5 style="color:#779E8F;">Availability <span style="color:red;"></span></h5>
				<select name="Availability" style="border:1px solid #eee;width:100%;padding:6px;">
					<option>Full Availability</option>
					<option>Partial Availability</option>
				</select><br><br>
				<h5 style="color:#779E8F;">Experience and Skills <span style="color:red;"></span></h5>
				<textarea name="ExperienceSkills" style="border:1px solid #eee;width:100%;height:150px;padding:6px;box-shadow:0px -2px 2px #eee;" ></textarea>
				<br><br>
				<h5 style="color:#779E8F;">Additional Information <span style="color:red;"></span></h5>
				<textarea name="AdditionalInformation" style="border:1px solid #eee;width:100%;height:150px;padding:6px;box-shadow:0px -2px 2px #eee;" ></textarea>
				<br><br>
				<center>
					<button type="submit" class="btn btn-success" name="VolunteerSubmit">Submit</button>
				</center>
			</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-------------------------------- End of Modal -->

<?php include("WheelLoader.php"); ?>
<?php include("Header.php"); ?>
    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url(images/ProjectImages/slide-12.jpg);">
        <div class="fly-header-content">
            <div class="page-subtitle"></div>
            <h1 id="projectTitle1" class="page-title" itemprop="title">Become a Volunteer</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Current Projects -->
    <section class="section padding-bottom-70">

        <div class="container">
            <div class="fly-projects alternate-layout">
                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed">

                        <div class="project-content" style="width:100%;">
                            <h3 class="project-title" itemprop="name">
                                <a href="project-details.html">Become a Volunteer</a>
                            </h3>

                            

                            <div class="project-description" itemprop="description">
                                <p style="text-indent:40px;">
                                    <span>The International Foundation For Progress (IFFP) is a non-profit organization that invests in the intellectual and spiritual promise of each student in underprivileged communities. We believe an educated citizen will be better equipped to add their voice to the chorus of necessary change needed throughout the world. We believe education is a fundamental human right.<br><br>
							 <p style="text-indent:40px;">Most countries have mandated to provide basic elementary education to their children by the 2015, but Pakistan is in deep crisis and is facing enormous difficulties to fulfill that mandate. In 2004 the literacy rate was less than 50% and is not showing any progress. International Foundation For Progress has taken a small step to help alleviate this situation.</p><br><br>
							 <b style="color:black;font-size:20px;">Our current initiatives include:</b><br></span>
							 <br>
								<p><li> Tahira Educational Grammar School</li></p><br>
								<p><li> ZakaUllah Pirzada Medical Clinic</li></p><br>
								<p><li> Pakistan Disaster and Flood Relief Efforts</li></p><br>
								<p><li> Safe and Clean Water Projects</li></p><br>
								
								<p><b>Future projects:</b> Women’s Vocational Center</p>
							 <!--IFFP is non-profit, tax exempt 501 © 3, IRS EIN #264514690.<br><br>
							 Every donation goes towards uplifting the under privileged and ensuring the future of our global community.<br><br>
							 1. All donations are tax-deductible<br><br>
							 2. Zakat money can be donated to this cause<br><br>
							 3. You can donate online, by phone or mail.<br><br>
							 <b style="color:#1ED161;font-size:20px;">Please contact Dr. Safdar H. Chadda for more information</b><br><br>
							 1. (516) 747-6305<br><br>
							 2. 64 Marcus Ave, New Hyde Park, NY 11040<br><br>-->
							 
							 <!--<b style="color:#1ED161;font-size:20px;">IFFP’s board of directors includes a number of members from the community who are committed to the values of development in Pakistan, and across the world:</b><br>
							 <ol style="margin-left:30px;margin-top:10px;font-size:17px;">
								<li style="list-style-type:square;">Mr. Abdullah Ahmad</li>
								<li style="list-style-type:square;">Dr. Nader Chadda</li>
								<li style="list-style-type:square;">Dr. Safdar H. Chadda</li>
								<li style="list-style-type:square;">Dr. Sophia Chadda</li>
								<li style="list-style-type:square;">Dr. Farida Chaudhuri</li>
								<li style="list-style-type:square;">Dr. Mohammad Ali Chaudry</li>
								<li style="list-style-type:square;">Mr. Ali Madad</li>
								<li style="list-style-type:square;">Dr. Samina Mian</li>
								<li style="list-style-type:square;">Mr. Aurangzeb Pirzada</li>
							 </ol>-->
                                </p><br><br>
						  <center><a href="#" class="btn btn-large btn-yellow js-wave" data-toggle="modal" data-target="#myModal">Become a Volunteer</a></center>
                            </div>

                        </div>
                    </div>

                </article>
                <!--/ Project -->

            </div>
        </div>
    </section>
    <!--/ Current Projects -->
    
    

<?php include("Footer.php") ?>
<?php include("Bottom_JS.php") ?>
</body>
</html>