<?php

	include "grouplogic.php"
	
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
					<button class="btn10" onclick="window.location.href='sermon.php';"><h5><strong>Previous</strong></h5></button>
					<h2>Study Group</h2>
					<button class="btn10" onclick="window.location.href='race.php';"><h5><strong>Next</strong></h5></button>
				</div>
				</br>
				<div class="back">
					<form method="POST" id="group">
						<p> Date/Study Name: &nbsp;&nbsp;
							<input type="text" name="title" size="58" maxlength="150" required="required" />
						</p>
						<p>Bible References:</p>
							<textarea name="ref" size="75" cols="75" rows="10" required="required" ></textarea>
						<p>Additional Content/Context:</p>
							<textarea name="context" size="75" cols="75" rows="20" required="required" ></textarea>
						<p>Notes:</p>
							<textarea name="note" size="75" cols="75" rows="35" required="required" ></textarea>
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