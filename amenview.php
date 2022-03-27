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
				
					<?php foreach($query as $q){?>
						<div>
							<h2><?php echo $q['date'];?>: <?php echo $q['who'];?></h2>
						</div>
						<div class="back">
							<div class="beep">
								<p><strong> Date to Inititiate: </strong><?php echo $q['initiate'];?></p>
								<p><strong> Who/What is Involved?</strong></p>
								<p><?php echo $q['who'];?></p>
								<p><strong> For What Should I Make Amends?</strong></p>
								<p><?php echo $q['what'];?></p>
								<p><strong> What Restitution Could I Offer or Should I Prepare for?</strong></p>
								<p><?php echo $q['restitution'];?></p>
								<p><strong> Any Questions and/or Concerns?</strong></p>
								<p><?php echo $q['concern'];?></p>
							</div>	
						</div>
						</br>
						<div class="edit">
							<button  class="btnbtnbtn" onclick="window.location.href='amenedit.php?id=<?php echo $q['id'];?>';">Edit</button>
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