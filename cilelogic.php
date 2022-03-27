<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM cile";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['newpost'])){
		$initiate = $_REQUEST["initiate"];
		$date = $_REQUEST["date"];
		$who = $_REQUEST["who"];
		$share = $_REQUEST["share"];
		$forgive = $_REQUEST["forgive"];
		$mypart = $_REQUEST["mypart"];
		$potential = $_REQUEST["potential"];
		$offense = $_REQUEST["offense"];
		$community = $_REQUEST["community"];
		$sin1 = $_REQUEST["sin1"];
		$sin2 = $_REQUEST["sin2"];
		$response1 = $_REQUEST["response1"];
		$response2 = $_REQUEST["response2"];
		$well = $_REQUEST["well"];
		$notwell = $_REQUEST["notwell"];
		$commit = $_REQUEST["commit"];
		
		$sql = "INSERT INTO cile(initiate, date, who, share, forgive, mypart, potential, offense, community, sin1, sin2, response1, response2, well, notwell, commit) VALUES('$initiate', '$date', '$who', '$share', '$forgive', '$mypart', '$potential', '$offense', '$community', '$sin1', '$sin2', '$response1', '$response2', '$well', '$notwell', '$commit')";
		mysqli_query($conn, $sql);

		header("Location: cilecreate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM cile WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM cile WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: cilecreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
		$id = $_REQUEST['id'];
        $initiate = $_REQUEST["initiate"];
		$date = $_REQUEST["date"];
		$who = $_REQUEST["who"];
		$share = $_REQUEST["share"];
		$forgive = $_REQUEST["forgive"];
		$mypart = $_REQUEST["mypart"];
		$potential = $_REQUEST["potential"];
		$offense = $_REQUEST["offense"];
		$community = $_REQUEST["community"];
		$sin1 = $_REQUEST["sin1"];
		$sin2 = $_REQUEST["sin2"];
		$response1 = $_REQUEST["response1"];
		$response2 = $_REQUEST["response2"];
		$well = $_REQUEST["well"];
		$notwell = $_REQUEST["notwell"];
		$commit = $_REQUEST["commit"];

        $sql = "UPDATE cile SET initiate = '$initiate', date = '$date', who = '$who', share = '$share', forgive = '$forgive', mypart = '$mypart', potential = '$potential', offense = '$offense', community = '$community', sin1 = '$sin1', sin2 = '$sin2', response1 = '$response1', response2 = '$response2', well = '$well', notwell = '$notwell', commit = '$commit' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: cilecreate.php?info=updated");
        exit();
    }
	
?>