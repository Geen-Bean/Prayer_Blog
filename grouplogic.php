<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM study";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST["newpost"])){
		$title = mysqli_real_escape_string($_REQUEST["title"]);
		$ref = mysqli_real_escape_string($_REQUEST["ref"]);
		$context = mysqli_real_escape_string($_REQUEST["context"]);
		$note = mysqli_real_escape_string($_REQUEST["note"]);
		
		$sql = "INSERT INTO study(title, ref, context, note) VALUES('$title', '$ref', '$context', '$note')";
		mysqli_query($conn, $sql);

		header("Location: groupcreate.php?info=added");
		exit();
    }
	
		// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM study WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM study WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: groupcreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST["update"])){
        $id = $_REQUEST['id'];
        $title = mysqli_real_escape_string($_REQUEST["title"]);
		$ref = mysqli_real_escape_string($_REQUEST["ref"]);
		$context = mysqli_real_escape_string($_REQUEST["context"]);
		$note = mysqli_real_escape_string($_REQUEST["note"]);

        $sql = "UPDATE study SET title = '$title', ref = '$ref', context = '$context', note = '$note' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: groupcreate.php?info=updated");
        exit();
    }
	
	
?>