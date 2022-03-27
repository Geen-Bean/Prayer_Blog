<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM graditude";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['gratpost'])){
		$grattitle = $_REQUEST["grattitle"];
		$grat = $_REQUEST["grat"];
		
		$sql = "INSERT INTO graditude(grattitle, grat) VALUES('$grattitle', '$grat')";
		mysqli_query($conn, $sql);

		header("Location: gratcreate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM graditude WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM graditude WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: gratcreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $grattitle = $_REQUEST["grattitle"];
		$grat = $_REQUEST["grat"];

        $sql = "UPDATE graditude SET grattitle = '$grattitle', grat = '$grat' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: gratcreate.php?info=updated");
        exit();
    }
	
	
?>