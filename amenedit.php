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
				<div class="hede">
					<h2>Amends Plans</h2>
				</div>
				</br>
				<div class="back">
					<?php foreach($query as $q){?>
						<form method="POST" id="amen">
							<input type="text" hidden name="id" value="<?php echo $q["id"];?>"/>
							<label> Date to Initiate: 
								<input type="date" name="initiate" value="<?php echo $q["initiate"];?>"/>
							</label> 
							<label> 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Entry: 
								<input type="date" name="date" value="<?php echo $q["date"];?>"/>
							</label> 
							</br>
							<p> Who/What is Involved?</p>
								<input type="text" name="who" size="84" maxlength="150" required="required" value="<?php echo $q["who"];?>"/>
							</br>
							<p> For What Should I Make Amends?</p>
								<textarea name="what" size="75" cols="75" rows="5" required="required"><?php echo $q["what"];?></textarea>
							</br>
							<p> What Restitution Could I Offer or Should I Prepare for?</p>
								<textarea name="restitution" size="75" cols="75" rows="5" required="required"><?php echo $q["restitution"];?></textarea>
							</br>
							<p> Any Questions and/or Concerns?</p>
								<textarea name="concern" size="75" cols="75" rows="5" required="required"><?php echo $q["concern"];?></textarea>
							</br></br>
							<button class="btnbtn" name="update" >Update</button>
							</br>
						</form>
					<?php }?>
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