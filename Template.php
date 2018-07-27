<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<title><?php echo $title?></title>
		<link rel="shortcut icon" type="image/x-icon" href="Images/Medical.ico"/>
		<link rel="stylesheet" href="<?php echo $css_file?>">
	</head>
	<body>
		<div class="navBar" id="myNavi">
			<div class="bigMenu">
				<a href="<?php echo $home?>">Home</a>
				<a href="<?php echo $about?>">About</a>
				<a href="<?php echo $team?>">Team</a>
				<a href="<?php echo $events?>">Events</a>
				<a href="<?php echo $contact?>">Contact</a>
			</div>
			
			<div class="dropdown">
				<button class="dropbtn"><img src="Images/menu.png" style="width:30px;height:30px;filter:invert(100%);"></button>
				<div class="dropdown-content">
					<a href="<?php echo $home?>">Home</a>
					<a href="<?php echo $about?>">About</a>
					<a href="<?php echo $team?>">Team</a>
					<a href="<?php echo $events?>">Events</a>
					<a href="<?php echo $contact?>">Contact</a>
				</div>
			</div>			
			<span class="social">
				<a href="index.php">
				<img src="Images/Medical.png" alt="Logo" style="width:25px;height:25px;border:0;">
				</a>
				
				<a href="https://www.facebook.com/societyofmedicalinnovation/" target="_blank">
				<img src="Images/facebook.png" alt="Facebook" style="width:25px;height:25px;border:0;">
				</a>
			
				<a href="https://www.linkedin.com/company/society-of-medical-innovation/?originalSubdomain=au" target="_blank">
				<img src="Images/linkedin.png" alt="Linkedin" style="width:25px;height:25px;border:0;">
				</a>
			</span>	
		</div>
		
		<?php echo $content?>
	</body>
	<footer>
		All Rights Reserved by SOMI
	</footer>
</html>