<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM amen";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['newpost'])){
		$initiate = $_REQUEST["initiate"];
		$date = $_REQUEST["date"];
		$who = $_REQUEST["who"];
		$what = $_REQUEST["what"];
		$restitution = $_REQUEST["restitution"];
		$concern = $_REQUEST["concern"];
		
		$sql = "INSERT INTO amen(initiate, date, who, what, restitution, concern) VALUES('$initiate', '$date', '$who', '$what', '$restitution', '$concern')";
		mysqli_query($conn, $sql);

		header("Location: amencreate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM amen WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM amen WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: amencreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $initiate = $_REQUEST['initiate'];
		$date = $_REQUEST['date'];
		$who = $_REQUEST['who'];
		$what = $_REQUEST['what'];
		$restitution = $_REQUEST['restitution'];
		$concern = $_REQUEST['concern'];

        $sql = "UPDATE amen SET initiate = '$initiate', date = '$date', who = '$who', what = '$what', restitution = '$restitution', concern = '$concern' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: amencreate.php?info=updated");
        exit();
    }
	
?>