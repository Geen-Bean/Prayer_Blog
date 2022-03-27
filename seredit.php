<?php

	include "serlogic.php"
	
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
					<h2>Sermons</h2>
				</div>
				</br>
				<div class="back">
					<?php foreach($query as $q){?>
						 <form method="POST" id="sermon">
							<input type="text" hidden name="id" value="<?php echo $q["id"];?>"/>
							<p> Date/Sermon Name: &nbsp;&nbsp;
							<input type="text" name="sertitle" size="58" maxlength="150" required="required" <?php echo $q["sertitle"];?>/>
							</p>
							<p>Link to Sermon:</p>
								<textarea name="serlink" size="75" cols="75" rows="3" required="required" ><?php echo $q["serlink"];?></textarea>
							<p>Bible References:</p>
								<textarea name="serref" size="75" cols="75" rows="20" required="required" ><?php echo $q["serref"];?></textarea>
							<p>Notes:</p>
								<textarea name="sermon" size="75" cols="75" rows="35" required="required" ><?php echo $q["sermon"];?></textarea>
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