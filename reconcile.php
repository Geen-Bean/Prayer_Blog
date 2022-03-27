<?php

	include "cilelogic.php"
	
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
				<div class="hed">
					<button class="btn10" onclick="window.location.href='amends.php';"><h5><strong>Previous</strong></h5></button>
					<h2>Reconciliation Plans</h2>
					<button class="btn10" onclick="window.location.href='inventory.php';"><h5><strong>Next</strong></h5></button>
				</div>
				</br>
				<div class="back">
					<form method="POST" id="rec">
						</br>
						<label> Date to Initiate: 
							<input type="date" name="initiate" />
						</label> 
						<label> 
						&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Entry: 
							<input type="date" name="date" />
						</label> 
						</br></br>
						<p> With Whom am I Seeking Biblical Reconciliation?</p>
							<input type="text" name="who" size="84" maxlength="150" required="required" />
						</br></br></br>
						<p> Does this Person Claim to be a Christian? If No, have I Shared Christ with this Person?
							</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="share" value="Yes" /> Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="share" value="Not Christian, but I have tried to share" /> No, then Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="share" value="Not Christian, and I haven't tried to share yet" /> No, then No
						</p>
						</br>
						<p> Have I Forgiven this Person for All of His or Her Sins Against Me? If No, Explain What </br>
						is Holding You Back from Forgivenss. Ask God to Help You Forgive as You have Been </br>Forgiven.</p>
							<textarea name="forgive" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> Have I Already Made Amends for My Sins Against this Person? If No, then What Sins </br>Do I First 
						Need to Confess, Repent, and Make Amends for? When Will I Seek </br>Forgiveness and Make Amends?</p>
							<textarea name="mypart" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> Is there Potential for My Reconciliation Attempt to Cause Greater Harm than Good? </br>If Yes, Explain Why.</p>
							<textarea name="potential" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> Can the Other Person's Sin be Overlooked as a Minor Offense? Explain.</p>
							<textarea name="offense" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> Is there Anyone Else in this Person's Life with Whom I can Widen the Circle If He </br>or She is Unwilling to Deal 
						with Sin Biblically? Friends? Christians who have a </br>Responsibility to Help this Person?</p>
							<textarea name="community" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br></br>
						<label><h3> Addressing Sins</h3>
						</label>
							<p> List Sin Harming this Person's Relationships with God, you, and others.</p>
							<textarea name="sin1" size="75" cols="75" rows="5" required="required"></textarea>
							<p> List Specific Bible Passages that Address the Sin or Behavior.</p>
							<textarea name="sin2" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br></br>
						<label><h3> Addressing Potential Responses</h3>
						</label>
							<p> List Potential Responses this Person may have When Confronted About Sin. </p>
							<textarea name="response1" size="75" cols="75" rows="5" required="required"></textarea>
							<p> How Will You Lovingly Reply to these Responses If They Do Occur?</p>
							<textarea name="response2" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br></br>
						<p> What Steps Will You Take to Love this Person If He or She Responds Well to </br>Biblical Reconciliation?</p>
							<textarea name="well" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> Are there Steps for You to Take to Love this Person If He or She Will Not Deal with </br>Sin or Change Sinful
						 Behavior? How Will Your Relationship Change?</p>
							<textarea name="notwell" size="75" cols="75" rows="5" required="required"></textarea>
						</br>
						<p> At What Point Will You Know that You have Done All You Can to Love and Help this </br>Person Reconcile with 
						God? Will You Commit to Continue to Pray for this Person?</p>
							<textarea name="commit" size="75" cols="75" rows="5" required="required"></textarea>
						</br></br>
						<button class="btnbtn" name="newpost" value="">Add Post</button>
						</br>
					</form>
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