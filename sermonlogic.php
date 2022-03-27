<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM sermon";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['serpost'])){
		$sertitle = $_REQUEST["sertitle"];
		$serlink = $_REQUEST["serlink"];
		$serref = $_REQUEST["serref"];
		$sermon = $_REQUEST["sermon"];
		
		$sql = "INSERT INTO sermon(sertitle, serlink, serref, sermon) VALUES('$sertitle', '$serlink', '$serref', '$sermon')";
		mysqli_query($conn, $sql);

		header("Location: sermoncreate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM sermon WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM sermon WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: sermoncreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $sertitle = $_REQUEST["sertitle"];
		$serlink = $_REQUEST["serlink"];
		$serref = $_REQUEST["serref"];
		$sermon = $_REQUEST["sermon"];

        $sql = "UPDATE sermon SET sertitle = '$sertitle', serlink = '$serlink', serref = '$serref', sermon = '$sermon' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: sermoncreate.php?info=updated");
        exit();
    }
	
?>