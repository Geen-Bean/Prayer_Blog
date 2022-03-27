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
				
					<?php foreach($query as $q){?>
						<div>
							<h2><?php echo $q['title'];?></h2>
						</div>
						<div class="back">
							<div class="beep">
								<p><strong> Bible References:</strong></p>
								<p><?php echo $q['ref'];?></p>
								<p><strong> Additional Content/Context:</strong></p>
								<p><?php echo $q['context'];?></p>
								<p><strong> Notes:</strong></p>
								<p><?php echo $q['note'];?></p>
							</div>
						</div>	
						</br>
						<div class="edit">
							<button  class="btnbtnbtn" onclick="window.location.href='groupedit.php?id=<?php echo $q['id'];?>';">Edit</button>
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
					<p>&copy; Gina Rae Reynolds 2022</p>
				</div>
			</div>
		</div>
	</body>
</html>