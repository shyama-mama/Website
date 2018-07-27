<?php
	$title = "SOMI - Hackathon";
	$css_file = "hackstyle.css";
	$home = "index.php";
	$about = "index.php#About";
	$events = "index.php#Events";
	$contact = "index.php#Contact";
	$team = "index.php#Team";
	
	$content = <<<EOD
	<div class="page">
	<h2>Health Hackathon 2018</h2>
	<button class="collapsible">About the Event</button>
	<div class="content">
	<p>Welcome to the Society Of Medical Innovation’s 2018 Health Hackathon, run in conjunction with MedTech's Got Talent and The Actuator (Australia's National MedTech Catalyst) at Michael Crouch Innovation Centre at UNSW!<br /><br />SOMI’s Health Hackathon is a 3 day event where you will be given the chance to form a team and develop your own innovative medical idea!<br /><br />Over the course of this weekend you will be given the chance to construct and develop your idea with a proposed business model, and pitch your fresh new innovation to a panel of professional industry judges on Sunday evening!<br /><br />Don’t miss this extraordinary opportunity to network with industry professionals, explore a range of new career opportunities, and meet an array of students, innovators, and experts in a new and exciting environment!<br /><br />
	<b>Prizes:</b><br />
- $1000 Cash Prize<br />
- $5000 Incubator program at Fledge Innovations Lab<br /><br />

<b>Registration Fees:</b><br /> 
<b>Non-Arc Members</b> - $20<br />
<b>Arc Members</b> - $15<br />
<b>Registration Opening Date</b> - 7th June 2018<br />
<b>Registration Closing Date</b> - 10th August 2018<br /><br />
	Places are limited so make sure to apply ASAP!</p>
	</div>
	<button class="collapsible">When & Where</button>
	<div class="content">
	<p><b>When:</b><br />Friday 24th August 2018 5:30 pm – Sunday 26th August 2018 8:00 pm<br /><br /><b>Where:</b>
	<br />Michael Crouch Innocation Centre (MCIC),<br />
Gate 2 Ave, University of New South Wales,<br />Kensington NSW 2033</p>
	<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.956398711826!2d151.2262994148269!3d-33.91652172896782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b18b70047599%3A0xf93ae0ba331593b8!2sMichael+Crouch+Innovation+Centre!5e0!3m2!1sen!2sau!4v1531486224186" width="450" height="450" frameborder="0" style="border:1px solid black" allowfullscreen></iframe>
	</div>
	</div>
	<button class="collapsible">Schedule</button>
	<div class="content">
<p><b>Day 1 - Friday Evening (5:30 pm – 7:00 pm):</b><br />
Optional to those who already have a team. Hackathon introduction, team sign ups and formation, scene setting, and discussions! If you don't have a team yet you can look for team members <a href="https://crowdforge.io/hackathons/health-hackathon" target="_blank">here</a><br /><br />

<b>Day 2 – Saturday (10:00 am – 7:00 pm):</b><br />
Keynote speakers from industry professionals, networking sessions, brainstorming and defining problem to solve, idea initiation stage, design development, mentor sessions, and prototyping!<br /><br />

<b>Day 3 – Sunday (10:00 am – 8:00 pm):</b><br />
Working on ideas, finalising prototypes, pitching workshops, final presentations, judging, and winners announced! Non-participants can come watch the pitches too so get your family and friends a ticket as well!</p>
	</div>
	<button class="collapsible">Registration</button>
	<div class="content">
	<div class="links"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeLAahV38W7WNpTU6vL6z1fXjB1lRnW8qpUQU6MWRHH5mBSeQ/viewform" name="register" target="_blank">Register</a><a href="https://www.eventbrite.com.au/e/society-of-medical-innovation-health-hackathon-tickets-46835292621" name="tickets" target="_blank">Buy Tickets</a></div>
	</div>
	<button class="collapsible">FAQs</button>
	<div class="content">
<p><b>Q: I registered! Does this guarantee me a spot in the hackathon?</b><br />
A: No. Registrations will end on the closing date. Due to limited space, we will send those who have registered a confirmation email. From this, those that reply earliest will be invited to compete on the day! 

<br /><br /><b>Q: Do I need to be part of a team? What if I don’t have one?</b><br />
A: No, for those who are not already part of a group there will be an opportunity to form a group with others at the beginning of the hackathon!

<br /><br /><b>Q: Do I need to bring an idea to work on?</b><br />
A: No, all you’ll need is you and your team! The opportunity to brainstorm and innovate will be provided over the course of the weekend!

<br /><br /><b>Q: Will food be provided?</b><br />
A: Absolutely! It wouldn’t be a healthy hackathon without a range of delicious foods and drinks to keep you fresh and alert through the weekend!</p>
	</div>
	<button class="collapsible">Event Supported By</button>
	<div class="content">
	<div class="links1"><a href="http://medtechactuator.com/" target="_blank"><img src="Sponsors/Actuator.png" height="100px"></a><a href="http://medtechchallenge.com/" target="_blank"><img src="Images/MGT.png" height="100px"></a><a href="https://www.idegroup.com.au/" target="_blank"><img src="Sponsors/IDE.png" height="100px"></a><a href="https://www.arc.unsw.edu.au/" target="_blank"><img src="Sponsors/Arc.png" height="100px"><a href="https://crowdforge.io/" target="_blank"><img src="Images/crowd.png" height="100px"></a></div>
	</div>
	</div>
	<script>
	var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
	</script>
EOD;
	
	include 'Template.php';
?>