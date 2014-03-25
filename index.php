<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8"></meta>
	<title>Reyansh's 1st B'Day</title>
	
	<link rel="stylesheet" href="main2.css" type="text/css" />
	<script type="text/javascript" src="jquery11.min.js"></script>	
	<script type="text/javascript" src="bday.js"></script>
	
</head>
<body>
	<div id="page-image">
	<div id="page-container">
		<audio id="audiotag1" src="TheTuneWeavers-HappyHappyBirthdayBaby.mp3" autoplay="autoplay"></audio>	
		<div id="header-container">
			<div id="header-title" class="brown cursive"><div>Birthday Invitation</div></div>
			<nav>
				<ul>
					<li tabs="content-1">Home</li>
					<li tabs="content-2">Pictures</li>
					<li tabs="content-3">Audio</li>
					<li tabs="content-4">RSVP</li>
					<li tabs="content-5">Guest Book</li>
				</ul>
			</nav>
		</div>
		<content>
			<div id="content-1" class="mainTabs">
				<div id="content-main">
					<div class="col"></div>
					<div class="col">
						<div id="content-text">
							<h4 class="cursive">It's my Birthday!</h4>
							<p>Please join me to celebrate </br>with cupcakes and fun. </br> because I am turning one! </br> Party at my house -</p>
							</br>
							<p>1012 Beverly Hills Apts</br> on Mar 30th at 4pm. </br> I hope you can come - </br> if not, please tell my mommy </br> Rupinder at 981.045.6909</br></p>						
							<h4 class="cursive">Reyansh Sharma</h4>
						</div>
					</div>
				</div>
				<div id="content-details">
					<p id="details-text" class="white cursive center">No gifts please! <br>If you really want to send me a gift, you can instead send donations to this noble cause.</br>
					<a href="http://www.trustkesari.in">http://www.trustkesari.in</a>&nbsp;&nbsp;&nbsp;(<a href="KesariDeviTrustBrochure.pdf">Brochure</a>)<br>
					If you want mommy can collect money and send it to the trust</p>
				</div>
			</div>
			<div id="content-2" class="mainTabs">
				<input type="button" value="Button1"></input>
			</div>
			<div id="content-3" class="mainTabs">
				<input type="button" value="Button1"></input>
				<input type="button" value="Button2"></input>			
			</div>
			<div id="content-4" class="mainTabs">
				<input type="button" value="Button1"></input>			
			</div>
			<div id="content-5" class="mainTabs">
				<div class="content-wrapper">
					<div id="guestbook-linkDiv">
						<h4 class="cursive">Please click this link to sign the guestbook</h4>
						<div id="guestbook-comments">
							<ul>
								<?php
									$localhost="127.0.0.1";
									$user="ramil";
									$pass="ramil";
									$db="birthdays";
									$con=mysqli_connect($localhost,$user,$pass,$db);
									// Check connection
									if (mysqli_connect_errno()) {
  										echo "Failed to connect to MySQL: " . mysqli_connect_error();
  									}

									$result = mysqli_query($con,"SELECT name,comments FROM guest_book");

									while($row = mysqli_fetch_array($result)) {

										echo "<li>" . $row['name'] . ": ". $row['comments'] . "</li>";
									}
									mysqli_close($con);
								?>
							</ul>
						</div>
					</div>
					<div id="guestbook-formDiv">
						<form id="guestBookForm" action="insert_guest_book.php" method="post">
							<h3>Please leave us a message</h3>
							<div><span id="label-span">Name</span><input type="text" name="name" id="name-input" data-validation="length" data-validation-length="2-148" data-validation-error-msg="The name has to be at least 2 characters long"></input></div>
							<div><div id="label-textarea">Your message</div><input type="textarea" name="comments" id="comment-input" data-validation="length" data-validation-length="max1800" data-validation-error-msg="The comment has to be at most 1800 characters long"></input></div>
							<span id="preview-button">Preview Entry</span><input type="submit" id="submit-comment-input"></input>
						</form>
						<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
						<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
						<script>
						$.validate({
						  form : '#guestBookForm'

						});
						</script>
					</div>
				</div>
			</div>			
		</content>
		<aside>Aside</aside>
	</div>
	</div>
</body>
</html>
