<?php

	include "replogic.php"
	
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
					<button class="btn10" onclick="window.location.href='inventory.php';"><h5><strong>Previous</strong></h5></button>
					<h2>Repentance Plans</h2>
					<button class="btn10" onclick="window.location.href='amends.php';"><h5><strong>Next</strong></h5></button>
				</div>
				</br>
				<div class="back">
					<form method="POST" id="repent">
						</br>
						<label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Entry: 
							<input type="date" name="date" />
						</label> 
						</br>
						<label><h3> Who Influences my Struggle?</h3>
						</label>
							<p> Identify Existing Patterns:</p>
							<textarea name="whopattern" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn from Sin:</p>
							<textarea name="whosin" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn to Christ:</p>
							<textarea name="whochrist" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br></br>
						<label><h3> What are my Triggers or Ways I Access </br>my Struggles?</h3>
						</label>
							<p> Identify Existing Patterns:</p>
							<textarea name="whatpattern" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn from Sin:</p>
							<textarea name="whatsin" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn to Christ:</p>
							<textarea name="whatchrist" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br></br>
						<label><h3> When am I Vulnerable?</h3>
						</label>
							<p> Identify Existing Patterns:</p>
							<textarea name="whenpattern" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn from Sin:</p>
							<textarea name="whensin" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn to Christ:</p>
							<textarea name="whenchrist" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br></br>
						<label><h3> Where do I Frequently Struggle?</h3>
						</label>
							<p> Identify Existing Patterns:</p>
							<textarea name="wherepattern" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn from Sin:</p>
							<textarea name="wheresin" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn to Christ:</p>
							<textarea name="wherechrist" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br></br>
						<label><h3> Why do I Struggle? Are there feelings, </br>desires, or needs, I am trying to fill </br>or escape?</h3>
						</label>
							<p> Identify Existing Patterns:</p>
							<textarea name="whypattern" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn from Sin:</p>
							<textarea name="whysin" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn to Christ:</p>
							<textarea name="whychrist" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br></br>
						<label><h3> How am I Tempted by my Struggle? Are </br>there Routine Steps or Patterns when I </br>am Tempted to Sin?</h3>
						</label>
							<p> Identify Existing Patterns:</p>
							<textarea name="howpattern" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn from Sin:</p>
							<textarea name="howsin" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How will I turn to Christ:</p>
							<textarea name="howchrist" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br></br>
						<button class="btnbtn" name="newpost" value="">Add Post</button>
						</br></br>
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