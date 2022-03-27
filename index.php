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
			<div class="content">
				<div class="picture">
					<img src="Blog.png" alt="Tiger Lily Drawing">
				</div>
				<div class="words">
					<h3>Introduction: 8/10/2021</br></h3>
					<p><strong>Hello. </strong>This is a cleaned up version of my prayer blog. I don't keep any particularly
						sensitive information on github, I just want to show off my front end development skills. The only thing 
						might be the Re:generation materials. PLEASE DO NOT USE ANY OF THE REGEN/REGENERATION MATERIALS. The 
						program needs the money to thrive and help others; a lot of the heavy lifting is done simply by being 
						in a group and forming a community with one another. I highly encourage that if you are curious of the 
						program and/or would like to use the materials, visit https://www.regenerationrecovery.org/</p>
				</div>
			</div>
			<div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>
			<div id="footer">
				<div class="footer">
					<p>&copy; Gina Rae Reynolds 2021</p>
				</div>
			</div>
		</div>
	</body>
</html>