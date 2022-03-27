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
				
					<?php foreach($query as $q){?>
						<div>
							<h2><?php echo $q['date'];?>: <?php echo $q['inventories'];?></h2>
						</div>
						<div class="back">
							<div class="beep">
								<p><strong> Who/What is Involved?</strong></p>
								<p><?php echo $q['who'];?></p>
								<p><strong> What was the Cause?</strong></p>
								<p><?php echo $q['cause'];?></p>
								<p><strong> What was My Response?</strong></p>
								<p><?php echo $q['response'];?></p>
								<p><strong> What was the Nature of My Response?</strong></p>
								<p><?php echo $q['nature'];?></p>
								<p><strong> What Did I Value?</strong></p>
								<p><?php echo $q['val'];?></p>
							</div>
						</div>	
						</br>
						<div class="edit">
							<button  class="btnbtnbtn" onclick="window.location.href='inedit.php?id=<?php echo $q['id'];?>';">Edit</button>
							<form method="POST">
								<input type="text" hidden name="id" value="<?php echo $q["id"];?>">
								<button class="btnbtnbtnbtn" name="delete">Delete</button>
							</form>
						</div>
					<?php }?>
				</br>
			</div>
			<div id="footer">
				<div class="footer">
					<p>&copy; Gina Rae Reynolds 2021</p>
				</div>
			</div>
		</div>
		</body>
</html>