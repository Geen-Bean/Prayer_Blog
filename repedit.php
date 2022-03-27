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
				<div class="hede">
					<h2>Repentance Plans</h2>
				</div>
				</br>
				<div class="back">
					<?php foreach($query as $q){?>
						<form method="POST" id="repent">
							<input type="text" hidden name="id" value="<?php echo $q["id"];?>"/>
							</br>
							<label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Entry: 
								<input type="date" name="date" value="<?php echo $q["date"];?>"/>
							</label> 
							</br>
							<label><h3> Who Influences my Struggle?</h3>
							</label>
								<p> Identify Existing Patterns:</p>
								<textarea name="whopattern" size="75" cols="75" rows="5" required="required"><?php echo $q["whopattern"];?></textarea>
								<p> How will I turn from Sin:</p>
								<textarea name="whosin" size="75" cols="75" rows="5" required="required"><?php echo $q["whosin"];?></textarea>
								<p> How will I turn to Christ:</p>
								<textarea name="whochrist" size="75" cols="75" rows="5" required="required"><?php echo $q["whochrist"];?></textarea>
							</br></br></br>
							<label><h3> What are my Triggers or Ways I Access </br>my Struggles?</h3>
							</label>
								<p> Identify Existing Patterns:</p>
								<textarea name="whatpattern" size="75" cols="75" rows="5" required="required"><?php echo $q["whatpattern"];?></textarea>
								<p> How will I turn from Sin:</p>
								<textarea name="whatsin" size="75" cols="75" rows="5" required="required"><?php echo $q["whatsin"];?></textarea>
								<p> How will I turn to Christ:</p>
								<textarea name="whatchrist" size="75" cols="75" rows="5" required="required"><?php echo $q["whatchrist"];?></textarea>
							</br></br></br>
							<label><h3> When am I Vulnerable?</h3>
							</label>
								<p> Identify Existing Patterns:</p>
								<textarea name="whenpattern" size="75" cols="75" rows="5" required="required"><?php echo $q["whenpattern"];?></textarea>
								<p> How will I turn from Sin:</p>
								<textarea name="whensin" size="75" cols="75" rows="5" required="required"><?php echo $q["whensin"];?></textarea>
								<p> How will I turn to Christ:</p>
								<textarea name="whenchrist" size="75" cols="75" rows="5" required="required"><?php echo $q["whenchrist"];?></textarea>
							</br></br></br>
							<label><h3> Where do I Frequently Struggle?</h3>
							</label>
								<p> Identify Existing Patterns:</p>
								<textarea name="wherepattern" size="75" cols="75" rows="5" required="required"><?php echo $q["wherepattern"];?></textarea>
								<p> How will I turn from Sin:</p>
								<textarea name="wheresin" size="75" cols="75" rows="5" required="required"><?php echo $q["wheresin"];?></textarea>
								<p> How will I turn to Christ:</p>
								<textarea name="wherechrist" size="75" cols="75" rows="5" required="required"><?php echo $q["wherechrist"];?></textarea>
							</br></br></br>
							<label><h3> Why do I Struggle? Are there feelings, </br>desires, or needs, I am trying to fill </br>or escape?</h3>
							</label>
								<p> Identify Existing Patterns:</p>
								<textarea name="whypattern" size="75" cols="75" rows="5" required="required"><?php echo $q["whypattern"];?></textarea>
								<p> How will I turn from Sin:</p>
								<textarea name="whysin" size="75" cols="75" rows="5" required="required"><?php echo $q["whysin"];?></textarea>
								<p> How will I turn to Christ:</p>
								<textarea name="whychrist" size="75" cols="75" rows="5" required="required"><?php echo $q["whychrist"];?></textarea>
							</br></br></br>
							<label><h3> How am I Tempted by my Struggle? Are </br>there Routine Steps or Patterns when I </br>am Tempted to Sin?</h3>
							</label>
								<p> Identify Existing Patterns:</p>
								<textarea name="howpattern" size="75" cols="75" rows="5" required="required"><?php echo $q["howpattern"];?></textarea>
								<p> How will I turn from Sin:</p>
								<textarea name="howsin" size="75" cols="75" rows="5" required="required"><?php echo $q["howsin"];?></textarea>
								<p> How will I turn to Christ:</p>
								<textarea name="howchrist" size="75" cols="75" rows="5" required="required"><?php echo $q["howchrist"];?></textarea>
							</br></br></br>
							<button class="btnbtn" name="update" >Update</button>
							</br></br>
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