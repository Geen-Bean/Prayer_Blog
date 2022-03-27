<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM others";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['othpost'])){
		$otherstitle = $_REQUEST["otherstitle"];
		$oth = $_REQUEST["oth"];
		
		$sql = "INSERT INTO others(otherstitle, oth) VALUES('$otherstitle', '$oth')";
		mysqli_query($conn, $sql);

		header("Location: otherscreate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM others WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM others WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: otherscreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $otherstitle = $_REQUEST["otherstitle"];
		$oth = $_REQUEST["oth"];

        $sql = "UPDATE others SET otherstitle = '$otherstitle', oth = '$oth' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: otherscreate.php?info=updated");
        exit();
    }
	
?>