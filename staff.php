<!DOCTYPE html>
<html lang="en">

<?php
error_reporting(E_ALL);
//ini_set('error_reporting', 1);

include 'pdoConnect.php';

//Connect to the database
$db = new OLDpdoConnect();
$db->OLDdbConnect();


?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title> Walbottle Campus - Staff</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
    <div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-singleWall" style="font-size:25px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon-singleWall" style="font-size:25px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
		 <!-- the below links are on the left hand side of the nav bar--> 
          <ul class="nav navbar-nav">
            <li><a href="index.html" class="smoothScroll">Home</a></li>
			<li> <a href="http://www.walbottlecampus.newcastle.sch.uk/vle/login.php" class="smoothScroll"> VLE</a></li>
			<li> <a href="#services" class="smoothScroll">Homework</a></li>
		  </ul>
		 <!-- the below links are on the right hand side of the nav bar--> 
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="parents.php" class="dropdown-toggle" data-toggle="dropdown">Parents<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="parents.php">Parents Home</a></li>
					<li><a href="parents.php#Structure">School Day Structure</a></li>
					<li><a href="parents.php#Calendar">School Calendar</a></li>
					<li><a href="parents.php#Apply">Apply</a></li>										
					<li><a href="parents.php#FSM">Free School Meals</a></li>
					<li><a href="parents.php#Policies">Policies</a></li>
					<li><a href="parents.php#Contact">Contact Details</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="staff.php" class="dropdown-toggle" data-toggle="dropdown">Staff<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#Staff">Staff Home</a></li>
					<li><a href="#Vacancies">Vacancies</a></li>
					<li><a href="#Vision">Vision</a></li>
					<li><a href="#CPD">CPD</a></li>
					<li><a href="#Policies">Policies</a></li>
					<li><a href="#Contact">Contact Details</a></li>
				</ul>
			</li>
			<li> <a href="#" class="smoothScroll">W.Press</a></li>
			<li class="dropdown">
				<a href="staff.php" class="dropdown-toggle" data-toggle="dropdown">Other Sites<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a target="_blank" href="https://www.walbottlecampus.newcastle.sch.uk/governors/index.php/login/secureLogin">Governors</a></li>
					<li><a target="_blank" href="http://www.walbottlecampus.newcastle.sch.uk/community/index.php/welcome">Community Hire</a></li>
					<li><a target="_blank" href="http://www.walbottlecampus.newcastle.sch.uk/post16/">Post 16</a></li>
					<li><a target="_blank" href="http://www.walbottlecampus.newcastle.sch.uk/revision/">Revision</a></li>
					<li><a target="_blank" href="http://www.walbottlecampus.newcastle.sch.uk/website/homework.php">Homework</a></li>
				</ul>
			</li>
			<li> <a href="index.html" class="smoothScroll"> Oi</a></li>
		  </ul>		  
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
	
		<div class="container">
				<div class="row white clearTopNav">	
				<ul class="nav nav-pills">
					<li><a href="#Vacancies">Vacancies</a></li>
					<li><a href="#Vision">Vision</a></li>
					<li><a href="#CPD">CPD</a></li>
					<li><a href="#Policies">Policies</a></li>
					<li><a href="#Contact">Contact Details</a></li>
				</ul>
				</div>
	</div>

	
	
			<!-- ==== SECTION DIVIDER1 -->
		<section class="section-divider textdivider dividerStaff3">
			<div class="container" id="Staff" name="Staff">
				<h1>STAFF SECTION</h1>
				<hr>
				<p>For current and prospective staff</p>
				<p>See what Walbottle has to offer</p>
				<br>
			</div><!-- container -->
		</section><!-- section -->
		
		<!-- ==== VACANCIES ==== -->
		<div class="container vacancies" id="Vacancies" name="Vacancies">
			<div class="row white">
			<br>
				<h1 class="centered">VACANCIES</h1>
				<hr>
				
				<div class="col-lg-8">
					<?php
                //Get current Opportunities from database
                   $query = $db->fetchQuery("SELECT * FROM opportunities WHERE CURDATE() <= closing_date ORDER BY closing_date DESC");
                   
				   $returned_rows = count($query);
                    if ($returned_rows == 0) {
						echo "<div class=\"posts\">";
                        echo "<p>There are no current vacancies. Please check back here regularly for new opportunities.</p>\n\n";
                    	echo "</div>";
					}else{
						foreach ($query as $opportunities)
						{
							$timestamp = strtotime($opportunities['closing_date']);
							$closing_date = date('D j M Y', $timestamp);
							$links = explode(" ", $opportunities['files']);
					?>
                            <div class="posts">
                            <h2><?php echo $opportunities['job_title']; ?></h2>
                            <h4><?php echo "Pay Scale: $opportunities[grade]"; ?></h4>
                            <h4><?php echo "Closing Date: 9.00am, $closing_date"; ?></h4>

                            <p><?php echo $opportunities['job_desc']; ?></p>
							<?php $jobDownloads = explode(' ', $opportunities['files']); ?>
							<?php $countDownloads = count($jobDownloads); ?>
							<h3>Downloads</h3>
                            <ul class="information">
							<?php for($x=0;$x<$countDownloads;$x++)
									{
										$linkText=str_replace('_', ' ',$jobDownloads[$x]); 
										$linkText=explode('.', $linkText);
										echo "<li><a target=\"_blank\" href=\"opportunities/$jobDownloads[$x]\">$linkText[0]</a></li>";
									}
                            ?>
							
							</ul>
							<h3>Applying</h3>
							<p>Please e-mail <a href="mailto:recruitment@walbottlecampus.newcastle.sch.uk">recruitment@walbottlecampus.newcastle.sch.uk</a> with your application form.</p>
                            <hr>
                     </div>
                    
                  <?php
                }
						}

			?>      
				</div><!-- col-lg-6 -->
				
								
				<div class="col-lg-4">
            					
            <h2>How to Apply</h2>
            	<p>For all vacancies you will need to submit: </p> 

                <ul class="information">
                	<li>A Covering Letter of Application</li>
                    <li>A General Application Form</li>
                    <li>A Safe Recruitment Form</li>
                </ul>
                <p>All of which can be found in the Downloads section below.</p> 
                <p>Completed Application Forms, Safe Recruitment forms and a covering Letter of Application should be submitted by 9.00am on the closing date, by post or emailed to: <a href="mailto:recruitment@walbottlecampus.newcastle.sch.uk" target="_blank">recruitment@walbottlecampus.newcastle.sch.uk</a></p>
                <p>We are committed to safeguarding and promoting the welfare of children and young people and to equality of opportunity. An enhanced CRB check is required for all successful applicants.</p>
				
				
                <p><strong>For further information please contact:<br />
					Mrs R Russell on <a href="tel:01912678221">0191 267 8221</a></strong></p> 
					
			<h2>General Information</h2>
				<ul class="information">
					<li><a target="_blank" href="opportunities/GeneralInformation.doc">General Information<span class="newlink"> - Word</span></a></li>
					<li><a target="_blank" href="opportunities/GeneralInformation2013.pdf">General Information<span class="newlink"> - PDF</span></a></li>
					<li><a target="_blank" href="opportunities/Lettertocandidate.pdf">Letter to Candidate<span class="newlink"> - PDF</span></a></li>
				 </ul>
				
             <h2>Downloads</h2>
             	<ul class="information">
                    <li><a target="_blank" href="opportunities/GenericApplicationForm.pdf">General Application Form<span class="newlink"> - PDF</span></a></li>
                    <li><a target="_blank" href="opportunities/GenericApplicationForm.doc">General Application Form<span class="newlink"> - Word</span></a></li>
                    <li><a target="_blank" href="opportunities/SafeRecruitmentForm.pdf">Safe Recruitment Form<span class="newlink"> - PDF</span></a></li>
                    <li><a target="_blank" href="opportunities/SafeRecruitmentForm.doc">Safe Recruitment Form<span class="newlink"> - Word</span></a></li>
                    <li><a target="_blank" href="http://get.adobe.com/uk/reader/">Free download of Adobe Reader for PDFs</a></li>
                </ul>
				</div><!-- col-lg-4 -->
				
				</div><!-- row -->
		</div><!-- container -->
				
		
		<!-- ==== SECTION DIVIDER2 -->
		<section class="section-divider textdivider dividerStaff2">
			<div class="container" id="Vision" name="Vision">
				<h1>OUR VISION</h1>
				<p>We want Walbottle to be an outstanding place to learn and teach.</p>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
		
		<!-- ==== SECTION DIVIDER2 -->
		<section class="section-divider textdivider dividerStaff1">
			<div class="container" id="CPD" name="CPD">
				<h1>CPD</h1>
				<p>We have CPD sessions for everyone.</p>
				<p>See what we have been focusing on recently.</p>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
		<!-- ==== ABOUT ==== -->
		<div class="container" id="Calendar" name="Calendar">
			<div class="row white">
			<br>
				<h1 class="centered">SCHOOL CALENDAR 2013-2014</h1>
				<p class="centered">Feel free to merge our Google calendar with your own to keep track of upcoming events.
				Find information on training days, holidays, school trips and parents evenings.</p>
				<hr>
				<br>
				
				<div class="col-lg-12">
					<iframe src="https://www.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=brfg2v73ebni1i9edcnvr2tajk%40group.calendar.google.com&amp;color=%235229A3&amp;ctz=Europe%2FLondon" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div><!-- col-lg-12 -->
					
					
				</div><!-- row -->
		</div><!-- container -->
				
		
		
		<!-- ==== SECTION DIVIDER6 ==== -->
		<section class="section-divider textdivider divider6">
			<div class="container">
				<h1>CREATING THE BEST TEACHING AND LEARNING ENVIRONMENT</h1>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="container policies" id="Policies" name="Policies">
				<div class="row">
					<h1 class="centered">POLICIES</h1>
				<hr>
				<br>
				<br><iframe src="https://drive.google.com/embeddedfolderview?id=0B1xL6FR2XfcXSmxiZkNTaGVMNmc#list" width="100%"  height="300" frameborder="0"></iframe>
		
				</div><!-- row -->
			</div>
			<br>
			<br>
		</div><!-- greywrap -->
		
		

			<div class="container policies" id="Contact" name="Contact">
				<div class="row">
					<h1 class="centered">FULL CONTACT DETAILS</h1>
				<hr>
				<br>
				<br>
					<div class="col-lg-8">
						       		<iframe width="610" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?source=s_q&amp;f=q&amp;hl=en&amp;geocode=&amp;q=Walbottle+Campus+Technology+College,+Newcastle+Upon+Tyne&amp;aq=0&amp;oq=Walbottle+Campus&amp;sll=53.800651,-4.064941&amp;sspn=18.881334,39.331055&amp;ie=UTF8&amp;hq=Walbottle+Campus+Technology+College,&amp;hnear=Newcastle+Upon+Tyne,+Tyne+and+Wear,+United+Kingdom&amp;ll=54.994949,-1.742706&amp;spn=0.189069,0.418854&amp;t=m&amp;output=embed"></iframe>
					</div>
					
					<div class="col-lg-4">
						 <h2>Contact</h2>
						 <p>
							<span class="icon icon-phone"></span> Telephone: 0191 267 8221<br/>
							<span class="icon icon-phone"></span> Fax: 0191 267 8221<br/>
							<span class="icon icon-envelop"></span> Email: <a href="enquiries@walbottlecampus.newcastle.sch.uk">enquiries@walbottlecampus.newcastle.sch.uk</a> <br/>
							<span class="glyphicon glyphicon-map-marker"></span> Walbottle Campus<br />Hexham Road<br />Walbottle<br />Newcastle Upon Tyne<br />NE15 9TP <br/>
						</p>
							<h2>Directions</h2>
						
							<p>The X82 Bus will take you from Haymarket in Newcastle City Centre to just outside the school.</p>
							<p>The school is situated only 1 mile from the A1/A69 junction, follow the A69 toward Hexham and take the first turn-off to Walbottle then follow Hexham Road until you see the school on your right.</p>
						
				
					<h2>More Bus Information</h2>
					<p>Find more bus timetable information <a href="http://www.walbottlecampus.newcastle.sch.uk/webdocs/Bus_Timetable.pdf" target="_blank">here</a></p>
				</div>
					
				</div><!-- row -->
			</div>
			<br>
			<br>

		
		
		<div id="footerwrap" class="footer">
			<div class="row">
				
				<div class="col-lg-4">
					<h4>CONTACT DETAILS</h4>
					<ul>
						<li  class="footerList"><span class="greySpan">Telephone:</span> 0191 267 8221</li>
						<li  class="footerList"><span class="greySpan">Fax:</span> 0191 229 3300</li>
						<li  class="footerList"><span class="greySpan">Email:</span> enquiries@walbottlecampus.newcastle.sch.uk</li>
						<li  class="footerList"><span class="greySpan">Head Teacher:</span> Mr W P Sampson</li>
					</ul>
				</div>
				
				<div class="col-lg-4">
					<h4>INFORMATION</h4>
					<ul>
						<li><a href="parents.php#Policies">Policies</a></li>
						<li><a href="webdocs/Freedom_of_Information.pdf">Freedom of Information Policy</a></li>
						<li><a href="http://www.walbottlecampus.newcastle.sch.uk/post16/ks5booklet.pdf">Post 16 Prospectus</a></li>
						<li><a href="webdocs/ks4prospectus.pdf">Key Stage 4 Prospectus</a></li>
					</ul>
				</div>
				
				<div class="col-lg-4">
					<h4>EXTERNAL SITES</h4>
					<ul>
						<li><a href="https://www.scopay.com/walbottlecampus?redirect=true">Tucasi - Online Payments</a></li>
						<li><a href="https://www.walbottlecampus.newcastle.sch.uk/governors/index.php/login/secureLogin">Governors Website</a></li>
						<li><a href="http://www.walbottlecampus.newcastle.sch.uk/post16/">Post 16 Website</a></li>
						<li><a href="http://www.walbottlecampus.newcastle.sch.uk/revision/">Revision Site</a></li>
					</ul>	
				</div>
				
			<h5>Walbottle Campus</h5>
			</div>
		</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
  </body>
</html>
