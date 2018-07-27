<?php
	$title = "SOMI - Home";
	$css_file = "style.css";
	$home = "#Home";
	$about = "#About";
	$events = "#Events";
	$contact = "#Contact";
	$team = "#Team";
	
	$content = <<<EOD
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("a").on('click', function(event) {
					if (this.hash !== "") {
						event.preventDefault();
						var hash = this.hash;
						$('html, body').animate({
							scrollTop: $(hash).offset().top
						}, 800);
					}
			});
		});
	</script>
EOD;
	$content .= <<<EOD
	<div class="slideshow-container" id="Home">;
EOD;
		
	$dir = "slideshow/*.jpg";
	$images = glob($dir);
				
	foreach ( $images as $image ):
		$content .= "<div class=\"mySlides\"><img src=\"". $image . "\"></div>";
	endforeach;
				

	$content .= '		
			<div class = "homecard">
				<div class="title">
					Society of Medical Innovation
				</div>
				<div class="motto">
					In pursuit of discovery 
				</div>
				<div class="lilaboot">
					SOMI is a direct response to the false belief that students should wait until they graduate to begin making a difference. At SOMI we want to empower students to achieve greatness, specifically through medical innovation.
				</div>
				<a href="#About" name="findmore" >
					Find out more
				</a>
				
			</div>
		</div>';
		
	$content .=	"<script src='slideshow.js'></script>";
	
	$content .= <<<EOD
	<div class = "sponsors">
	<h2>Sponsors</h2>
	<p>SOMI would like to recognize and thank all of our Sponsors!</p> 
	<div class="imgcontainer">
EOD;

	$dir = "Sponsors/*.png";
	$sponimgs = glob($dir);
	
	$dir = "Sponsors/*.txt";
	$sponurl = glob($dir);
	
	for($x = 0; $x < sizeof($sponimgs); $x++){
		$url = file_get_contents($sponurl[$x]);
		$content .= "<a href=\"". $url ."\" target=\"_blank\"><img src=\"". $sponimgs[$x] . "\" height=\"100px\"></a>";
	}
	
	$content .= <<<EOD
	</div>
	</div>
EOD;
	

	$content .= <<<EOD
		<div class="about" id="About">
		<table id="whoour">
		<tr>
			<td><h2>Who we are</h2><p>We are a team of multi-disciplined students that strive for innovation and aim for greatness.</p></td>
			<td><img src="About/image4.jpg" alt="tags" width="90%"></td>
		</tr>
		<tr>
			<td><h2>Our promise</h2><p>We are setting the bar high for ourselves for the upcoming year, with many unique and exciting events and opportunities in the works. We have faith that not only will we reach this bar, but that students who take the leap of faith and join us will also reach greater heights than they ever imagined.</p></td>
			<td><img src="About/image3.jpg" alt="tags" width="90%"></td>
		</tr>
		</table>

			<div class="what">
			<h2>What we do</h2>
	<p>We empower students to make an impact through medical innovation by providing opportunities to learn, grow and team up to build important inventions.<br /><br /></p>
	<div class="hackathon">
				<img src="Images/Hackathon.png" alt="Hack" style="width:150px;height:150px;filter: invert(100%);">
				<h4>Hackathons</h4> 
				<p>Hackathons are opportunities for students and entrepreneurs to come together and build high impact solutions to real problems in healthcare. </p>
			</div>
			<div class="networking">
				<img src="Images/Networking.png" alt="Network" style="width:150px;height:150px;filter: invert(100%);">
				<h4>Networking Events</h4>
				<p>Newtworking events are opportunities to network with like-minded people to join you on your innovative efforts and take them to the next level.</p>
			</div>
			<div class="workshop">
				<img src="Images/Workshops.png" alt="Work" style="width:150px;height:150px;filter: invert(100%);">
				<h4>Workshops</h4>
				<p>SOMI also organises many skill-building and educational workshops to foster the most crucial skills needed for effective medical innovation.</p>
			</div>
	</div>
		</div>
EOD;

	$content .= <<<EOD
	<div class="team" id="Team">
		<h2>Meet Our Executives</h2>
EOD;

	$dir = "Team/*.jpg";
	$teamimgs = glob($dir);
	
	$dir = "Team/*.txt";
	$teambio = glob($dir);
	
	$pos = array("President", "Vice President", "Treasurer");
	$divs = array("pres", "vpres", "tres");
	
	for($x = 0; $x < sizeof($teamimgs); $x++){
		$url = file_get_contents($teambio[$x]);
		$slashes = explode("/", $teambio[$x]);
		$dot = explode(".", $slashes[1]);
		$nametag = preg_replace('/[0-9]+/', '', $dot[0]);
		$content .= "<div class=\"". $divs[$x] ."\"><img src=\"". $teamimgs[$x] ."\" style=\"width:250px; border-radius: 50%;\"><h4>". $nametag ."</h4><h5>". $pos[$x] ."</h5><p>". $url ."</p></div>";
	}
	
	$content .= "</div>";
	
	$content .= <<<EOD
	<div class="events" id="Events">
	<h2>Upcoming Event</h2>
	<div class="wrappa">
	<div class="liam">
	<h3>Do you have a great idea that you believe would succeed as a start-up?</h3>	
	<h3>Do you have a very particular set of skills? Skills you have acquired over a very long career? Skills that make you an absolute delight for people trying to start-up? If you said yes to any of that then we will find you and ask if you have a moment to talk about our new event.</h3>
	</div>
	<div class="idea">
	<img src="Event/idea1.jpg" alt="Idea" width="80%">
	</div>
	</div>
	<div class="wrappa2">
	<div class="banner">
	<img src="Event/Hackathon.jpg" alt="Banner" width="50%">
	</div>
	<div class = "intro">
	<p>SOMI is excited to announce our 2018 Health Hackathon, run in conjunction with the Michael Crouch Innovation Centre at UNSW, the Actuator and Medtech’s got talent. Follow one of the links below to get started on your journey to innovation!<br \></p>
	<div class="one"><a href="Hackathon.php" name="findmoreevents">Find out more</a></div><div class="two"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeLAahV38W7WNpTU6vL6z1fXjB1lRnW8qpUQU6MWRHH5mBSeQ/viewform" name="register" target="_blank">Register Here</a></div><div class="three"><a href="https://www.eventbrite.com.au/e/society-of-medical-innovation-health-hackathon-tickets-46835292621" name="tickets" target="_blank">Buy Tickets</a></div>
	</div>
	</div>
	</div>
EOD;

	$content .= <<<EOD
	<div class="intern">
	<h2>Our New Project</h2>
	<div class="seccon">
	<div class="secret">
	<img src="Project/Project.png" alt="Shh" width="30%">
	</div>
	<div class="secmsg">
	<p>SOMI is very excited to inform that while most students are posting pictures of European sandy beaches in bikinis and perfect round big chiseled mountains, the team at SOMI have been slaving away in the Australian winter for you. We have been working with one of our sponsors closely to bring you an opportunity and experience like no other. Unfortunately we can't talk about it right now and its top secret. But get hyped and watch this space or our Facebook page or just send us an email through the contact sheet below (make sure you compliment The IT Guy who made us this awesome website for an extra quick response).</p>
	</div>
	</div>
	<div class="deets">
	Details Coming Soon...
	</div>
	</div>
EOD;

	$content .= <<<EOD
	<div class="contact" id="Contact">
	<h2>Talk To Us</h2>
EOD;
	include 'form_check.php';
	$testingval = "https://societyofmedicalinnovation.org/#Contact";
	$content .= "
	<div class=\"form_div\" id=\"Contact\">
		<form id=\"contact\" action=\"". htmlspecialchars($_SERVER['PHP_SELF']). "\" method=\"post\">
					<input type=\"hidden\" name=\"destination\" value=\"". /*$_SERVER["REQUEST_URI"]*/$testingval."\"/>
					<input type=\"text\" name=\"name\" placeholder=\"Enter your name\" value=\"". $name ."\"><br>
					<div class = \"error\">
					<p>".$name_error."</p>
					</div>
					<input type=\"email\" name=\"email\" placeholder=\"E-mail\" value=\"". $email ."\"><br>
					<div class = \"error\">
					<p>".$email_error."</p>
					</div>
					<textarea name=\"message\" rows=\"5\" cols=\"30\" placeholder=\"Your message\" value=\"". $message ."\"></textarea><br><br>
					<div class=\"success\">
					<p>".$success."</p>
					</div>
					<input type=\"submit\" value=\"Send\">
				</form>
			</div>
			</div>";

	include 'Template.php'
?>