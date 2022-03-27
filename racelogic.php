<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM race";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['newpost'])){
		$title = $_REQUEST["title"];
		$ref = $_REQUEST["ref"];
		$context = $_REQUEST["context"];
		$appl = $_REQUEST["appl"];
		$note = $_REQUEST["note"];
		
		$sql = "INSERT INTO race(title, ref, context, appl, note) VALUES('$title', '$ref', '$context', '$appl', '$note')";
		mysqli_query($conn, $sql);

		header("Location: racecreate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM race WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM race WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: racecreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST["title"];
		$ref = $_REQUEST["ref"];
		$context = $_REQUEST["context"];
		$appl = $_REQUEST["appl"];
		$note = $_REQUEST["note"];

        $sql = "UPDATE race SET title = '$title', ref = '$ref', context = '$context', appl = '$appl', note = '$note' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: racecreate.php?info=updated");
        exit();
    }
	
	
?>