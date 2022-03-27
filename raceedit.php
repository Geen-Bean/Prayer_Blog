<?php

	include "racelogic.php"
	
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
					<h2>Race Commentary</h2>
				</div>
				</br>
				<div class="back">
					<?php foreach($query as $q){?>
						 <form method="POST" id="race">
							<input type="text" hidden name="id" value="<?php echo $q["id"];?>"/>
							<p> Date/Topic: &nbsp;&nbsp;
								<input type="text" name="title" size="58" maxlength="150" required="required" value="<?php echo $q["title"];?>" />
							</p>
							<p>Bible References:</p>
								<textarea name="ref" size="75" cols="75" rows="3" required="required" ><?php echo $q["ref"];?></textarea>
							<p>Additional Context:</p>
								<textarea name="context" size="75" cols="75" rows="20" required="required" ><?php echo $q["context"];?></textarea>
							<p>Application:</p>
								<textarea name="context" size="75" cols="75" rows="20" required="required" ><?php echo $q["appl"];?></textarea>
							<p>Notes:</p>
								<textarea name="note" size="75" cols="75" rows="20" required="required" ><?php echo $q["note"];?></textarea>
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