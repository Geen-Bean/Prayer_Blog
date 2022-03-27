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
				
					<?php foreach($query as $q){?>
						<div>
							<h2><?php echo $q['date'];?>: <?php echo $q['who'];?></h2>
						</div>
						<div class="back">
							<div class="beep">
								<p><strong> Date to Inititiate: </strong><?php echo $q['initiate'];?></p>
								<p><strong> <p> With Whom am I Seeking Biblical Reconciliation?</p></strong></p>
								<p><?php echo $q['who'];?></p>
								<p><strong> Does this Person Claim to be a Christian? If No, have I Shared Christ with 
								this Person?</strong></p>
								<p><?php echo $q['share'];?></p>
								<p><strong> Have I Forgiven this Person for All of His or Her Sins Against Me? If No, 
								Explain What is Holding You Back from Forgivenss. Ask God to Help You Forgive as 
								You have Been Forgiven.</strong></p>
								<p><?php echo $q['forgive'];?></p>
								<p><strong> Have I Already Made Amends for My Sins Against this Person? If No, then What 
								Sins Do I First Need to Confess, Repent, and Make Amends for? When Will I Seek 
								Forgiveness and Make Amends?</strong></p>
								<p><?php echo $q['mypart'];?></p>
								<p><strong> Is there Potential for My Reconciliation Attempt to Cause Greater Harm than 
								Good? If Yes, Explain Why.</strong></p>
								<p><?php echo $q['potential'];?></p>
								<p><strong> Can the Other Person's Sin be Overlooked as a Minor Offense? Explain.</strong></p>
								<p><?php echo $q['offense'];?></p>
								<p><strong> Is there Anyone Else in this Person's Life with Whom I can Widen the Circle If He 
								or She is Unwilling to Deal with Sin Biblically? Friends? Christians who have a Responsibility 
								to Help this Person?</strong></p>
								<p><?php echo $q['community'];?></p>
								</br>
								<h3> Addressing Sins</h3>
								<p><strong> List Sin Harming this Person's Relationships with God, you, and others.</strong></p>
								<p><?php echo $q['sin1'];?></p>
								<p><strong> List Specific Bible Passages that Address the Sin or Behavior.</strong></p>
								<p><?php echo $q['sin2'];?></p>
								</br>
								<h3> Addressing Potential Responses</h3>
								<p><strong> List Potential Responses this Person may have When Confronted About Sin.</strong></p>
								<p><?php echo $q['response1'];?></p>
								<p><strong> How Will You Lovingly Reply to these Responses If They Do Occur?</strong></p>
								<p><?php echo $q['response2'];?></p>
								</br>
								<p><strong> What Steps Will You Take to Love this Person If He or She Responds Well to Biblical 
								Reconciliation?</strong></p>
								<p><?php echo $q['well'];?></p>
								<p><strong> Are there Steps for You to Take to Love this Person If He or She Will Not Deal with Sin 
								or Change Sinful Behavior? How Will Your Relationship Change?</strong></p>
								<p><?php echo $q['notwell'];?></p>
								<p><strong> At What Point Will You Know that You have Done All You Can to Love and Help this 
								Person Reconcile with God? Will You Commit to Continue to Pray for this Person?</strong></p>
								<p><?php echo $q['commit'];?></p>
							</div>
						</div>	
						</br>
						<div class="edit">
							<button  class="btnbtnbtn" onclick="window.location.href='cileedit.php?id=<?php echo $q['id'];?>';">Edit</button>
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