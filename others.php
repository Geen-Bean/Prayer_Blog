<?php

	include "otherslogic.php"
	
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
					<button class="btn10" onclick="window.location.href='gratitude.php';"><h5><strong>Previous</strong></h5></button>
					<h2>For Others</h2>
					<button class="btn10" onclick="window.location.href='myself.php';"><h5><strong>Next</strong></h5></button>
				</div>
				</br>
				<div class="back">
					<form method="POST" id="others">
						<p> Date/Topic: &nbsp;&nbsp;
							<input type="text" name="otherstitle" size="70" maxlength="150" required="required" />
						</p>
						<p>Prayer:</p>
							<textarea name="oth" size="75" cols="75" rows="35" required="required" ></textarea>
						</br></br>
						<button class="btnbtn" name="othpost" value="">Add Post</button>
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