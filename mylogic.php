<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM myself";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['mypost'])){
		$mytitle = $_REQUEST["mytitle"];
		$my = $_REQUEST["my"];
		
		$sql = "INSERT INTO myself(mytitle, my) VALUES('$mytitle', '$my')";
		mysqli_query($conn, $sql);

		header("Location: myselfcreate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM myself WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM myself WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: myselfcreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $mytitle = $_REQUEST["mytitle"];
		$my = $_REQUEST["my"];

        $sql = "UPDATE myself SET mytitle = '$mytitle', my = '$my' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: myselfcreate.php?info=updated");
        exit();
    }
	
	
?>