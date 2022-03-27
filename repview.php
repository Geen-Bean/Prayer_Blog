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
				
					<?php foreach($query as $q){?>
						<div>
							<h2><?php echo $q['date'];?>: <?php echo $q['whopattern'];?></h2>
						</div>
						<div class="back">
							<div class="beep">
								<h3> Who Influences my Struggle?</h3>
									<p><strong> Identify Existing Patterns:</strong></p>
									<p><?php echo $q['whopattern'];?></p>
									<p><strong> How will I turn from Sin:</strong></p>
									<p><?php echo $q['whosin'];?></p>
									<p><strong> How will I turn to Christ:</strong></p>
									<p><?php echo $q['whochrist'];?></p>
								</br>
								<h3> What are my Triggers or Ways I Access my Struggles?</h3>
									<p><strong> Identify Existing Patterns:</strong></p>
									<p><?php echo $q['whatpattern'];?></p>
									<p><strong> How will I turn from Sin:</strong></p>
									<p><?php echo $q['whatsin'];?></p>
									<p><strong> How will I turn to Christ:</strong></p>
									<p><?php echo $q['whatchrist'];?></p>
								</br>
								<h3> When am I Vulnerable?</h3>
									<p><strong> Identify Existing Patterns:</strong></p>
									<p><?php echo $q['whenpattern'];?></p>
									<p><strong> How will I turn from Sin:</strong></p>
									<p><?php echo $q['whensin'];?></p>
									<p><strong> How will I turn to Christ:</strong></p>
									<p><?php echo $q['whenchrist'];?></p>
								</br>
								<h3> Where do I Frequently Struggle?</h3>
									<p><strong> Identify Existing Patterns:</strong></p>
									<p><?php echo $q['wherepattern'];?></p>
									<p><strong> How will I turn from Sin:</strong></p>
									<p><?php echo $q['wheresin'];?></p>
									<p><strong> How will I turn to Christ:</strong></p>
									<p><?php echo $q['wherechrist'];?></p>
								</br>
								<h3> Why do I Struggle? Are there feelings, desires, or needs, I am trying to fill or escape?</h3>
									<p><strong> Identify Existing Patterns:</strong></p>
									<p><?php echo $q['whypattern'];?></p>
									<p><strong> How will I turn from Sin:</strong></p>
									<p><?php echo $q['whysin'];?></p>
									<p><strong> How will I turn to Christ:</strong></p>
									<p><?php echo $q['whychrist'];?></p>
								</br>
								<h3> How am I Tempted by my Struggle? Are there Routine Steps or Patterns when I am Tempted to Sin?</h3>
									<p><strong> Identify Existing Patterns:</strong></p>
									<p><?php echo $q['howpattern'];?></p>
									<p><strong> How will I turn from Sin:</strong></p>
									<p><?php echo $q['howsin'];?></p>
									<p><strong> How will I turn to Christ:</strong></p>
									<p><?php echo $q['howchrist'];?></p>
								</br>
							</div>	
						</div>
						</br>
						<div class="edit">
							<button  class="btnbtnbtn" onclick="window.location.href='repedit.php?id=<?php echo $q['id'];?>';">Edit</button>
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