<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM chris";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['newpost'])){
		$title = $_REQUEST["title"];
		$ref = $_REQUEST["ref"];
		$appl = $_REQUEST["appl"];
		$note = $_REQUEST["note"];
		
		$sql = "INSERT INTO chris(title, ref, appl, note) VALUES('$title', '$ref', '$appl', '$note')";
		mysqli_query($conn, $sql);

		header("Location: chriscreate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM chris WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM chris WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: chriscreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST["title"];
		$ref = $_REQUEST["ref"];
		$appl = $_REQUEST["appl"];
		$note = $_REQUEST["note"];

        $sql = "UPDATE chris SET title = '$title', ref = '$ref', appl = '$appl', note = '$note' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: chriscreate.php?info=updated");
        exit();
    }
	
?>