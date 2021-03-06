<?php

	include "inlogic.php"
	
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
					<button class="btn10" onclick="window.location.href='reconcile.php';"><h5><strong>Previous</strong></h5></button>
					<h2>Inventory</h2>
					<button class="btn10" onclick="window.location.href='repent.php';"><h5><strong>Next</strong></h5></button>
				</div>
				</br>
				<div class="back">
					<form method="POST" id="invent">
						<label> Inventories: 
							<select name="inventories">
								<option value="Resentments">Resentments</option>
								<option value="Fears">Fears</option>
								<option value="Harms to Me">Harms to Me</option>
								<option value="Harms by Me">Harms by Me</option>
								<option value="Sexual">Sexual</option>
								<option value="Recovery Issues">Recovery Issues</option>
							</select>
						</label>
						<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Entry: 
							<input type="date" name="date" />
						</label> 
						</br>
						<p> Who/What is Involved?</p>
							<input type="text" name="who" size="84" maxlength="150" required="required" />
						</br>
						<p> What was the Cause?</p>
							<textarea name="cause" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> What was My Response?</p>
							<textarea name="response" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> What was the Nature of My Response?</p>
							<textarea name="nature" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> What Did I Value?</p>
							<textarea name="val" size="75" cols="75" rows="5" required="required"></textarea>
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