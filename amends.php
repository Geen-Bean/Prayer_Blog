<?php

	include "amenlogic.php"
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>A Christian Blog</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Jim+Nightshade&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Nunito+Sans:wght@200&family=WindSong:wght@500&display=swap" rel="stylesheet">
		<link rel="icon" href="favicon.png" type="image/png">
	</head>
	<body>
		<div id="main">
			<div id="header">
				<h1>A Christian Blog</h1>
				<div id="nav">
					<ul class="menu">
						<li><a href="index.html">Home</a></li>
						<li><a href="regen.php">Regen</a></li>
						<li><a href="study.php">Study</a></li>
						<li><a href="prayer.php">Prayer</a></li>
					</ul>
				</div>
			</div>
			<div class="content2">
				<div class="hed">
					<button class="btn10" onclick="window.location.href='repent.php';"><h5><strong>Previous</strong></h5></button>
					<h2>Amends Plans</h2>
					<button class="btn10" onclick="window.location.href='reconcile.php';"><h5><strong>Next</strong></h5></button>
				</div>
				</br>
				<div class="back">
					<form method="POST" id="amen">
						<label> Date to Initiate: 
							<input type="date" name="initiate" />
						</label> 
						<label> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Entry: 
							<input type="date" name="date" />
						</label> 
						</br>
						<p> Who/What is Involved?</p>
							<input type="text" name="who" size="84" maxlength="150" required="required" />
						</br>
						<p> For What Should I Make Amends?</p>
							<textarea name="what" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> What Restitution Could I Offer or Should I Prepare for?</p>
							<textarea name="restitution" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> Any Questions and/or Concerns?</p>
							<textarea name="concern" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br>
						<button class="btnbtn" name="newpost" value="">Add Post</button>
						</br>
					</form>
				</div>
			</div>
			<div id="footer">
				<div class="footer">
					<p>&copy; Gina Rae Reynolds 2022</p>
				</div>
			</div>
		</div>
	</body>
</html>