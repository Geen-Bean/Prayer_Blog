<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM invent";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['newpost'])){
		$inventories = $_REQUEST["inventories"];
		$date = $_REQUEST["date"];
		$who = $_REQUEST["who"];
		$cause = $_REQUEST["cause"];
		$response = $_REQUEST["response"];
		$nature = $_REQUEST["nature"];
		$val = $_REQUEST["val"];
		
		$sql = "INSERT INTO invent(inventories, date, who, cause, response, nature, val) VALUES('$inventories', '$date', '$who', '$cause', '$response', '$nature', '$val')";
		mysqli_query($conn, $sql);

		header("Location: increate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM invent WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM invent WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: increate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $inventories = $_REQUEST['inventories'];
		$date = $_REQUEST['date'];
		$who = $_REQUEST['who'];
		$cause = $_REQUEST['cause'];
		$response = $_REQUEST['response'];
		$nature = $_REQUEST['nature'];
		$val = $_REQUEST['val'];

        $sql = "UPDATE invent SET inventories = '$inventories', date = '$date', who = '$who', cause = '$cause', response = '$response', nature = '$nature', val = '$val' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: increate.php?info=updated");
        exit();
    }
	
	
?>