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
				<div class="hede">
					<h2>Inventory</h2>
				</div>
				</br>
				<div class="back">
					<?php foreach($query as $q){?>
						 <form method="POST" id="invent">
							<input type="text" hidden name="id" value="<?php echo $q["id"];?>"/>
							<label> Inventories: 
								<select name="inventories" value="<?php echo $q["inventories"];?>">
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
								<input type="date" name="date" value="<?php echo $q["date"];?>"/>
							</label> 
							</br>
							<p> Who/What is Involved?</p>
								<input type="text" name="who" size="84" maxlength="150" required="required" value="<?php echo $q["who"];?>"/>
							</br>
							<p> What was the Cause?</p>
								<textarea name="cause" size="75" cols="75" rows="5" required="required" ><?php echo $q["cause"];?></textarea>
							</br>
							<p> What was My Response?</p>
								<textarea name="response" size="75" cols="75" rows="5" required="required" ><?php echo $q["response"];?></textarea>
							</br>
							<p> What was the Nature of My Response?</p>
								<textarea name="nature" size="75" cols="75" rows="5" required="required" ><?php echo $q["nature"];?></textarea>
							</br>
							<p> What Did I Value?</p>
								<textarea name="val" size="75" cols="75" rows="5" required="required" ><?php echo $q["val"];?></textarea>
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