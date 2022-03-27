<?php

	include "genlogic.php"
	
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
				<?php if(isset($_REQUEST['info'])){?>
					<?php if($_REQUEST['info'] == "added"){?>
						<div class="alerts" role="alert">
							Post has been added successfully
						</div>
					<?php }else if($_REQUEST['info'] == "updated"){ ?>
						<div class="alerts" role="alert">
							Post has been updated successfully
						</div>
					<?php }else if($_REQUEST['info'] == "deleted"){ ?>
						<div class="alerts" role="alert">
							Post has been deleted successfully
						</div>
					<?php }?>
				<?php }?>
				<div class="hed">
					<button class="btn10" onclick="window.location.href='racecreate.php';"><h5><strong>Previous</strong></h5></button>
					<h2>Gender Commentary</h2>
					<button class="btn10" onclick="window.location.href='reccreate.php';"><h5><strong>Next</strong></h5></button>
				</div>
				</br>
				<button class="btncreate" onclick="window.location.href='gender.php';">Add Post</button>
				</br></br>
				<div class="back">
					 <div class="row">
					<?php foreach($query as $q){ ?>
						<div class="col">
							<p class="card-title" onclick="window.location.href='genview.php?id=<?php echo $q['id']?>';"><?php echo $q['title'];?></a></p>
						</div>
					<?php }?>
					</div>
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