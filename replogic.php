<?php
	
	$conn = mysqli_connect("localhost", "root", "", "prayer_blog");
	
	// Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection</h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM rep";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['newpost'])){
		$date = $_REQUEST["date"];
		$whopattern = $_REQUEST["whopattern"];
		$whosin = $_REQUEST["whosin"];
		$whochrist = $_REQUEST["whochrist"];
		
		$whatpattern = $_REQUEST["whatpattern"];
		$whatsin = $_REQUEST["whatsin"];
		$whatchrist = $_REQUEST["whatchrist"];
		
		$whenpattern = $_REQUEST["whenpattern"];
		$whensin = $_REQUEST["whensin"];
		$whenchrist = $_REQUEST["whenchrist"];
		
		$wherepattern = $_REQUEST["wherepattern"];
		$wheresin = $_REQUEST["wheresin"];
		$wherechrist = $_REQUEST["wherechrist"];
		
		$whypattern = $_REQUEST["whypattern"];
		$whysin = $_REQUEST["whysin"];
		$whychrist = $_REQUEST["whychrist"];
		
		$howpattern = $_REQUEST["howpattern"];
		$howsin = $_REQUEST["howsin"];
		$howchrist = $_REQUEST["howchrist"];
		
		$sql = "INSERT INTO rep(date, whopattern, whosin, whochrist, whatpattern, whatsin, whatchrist, whenpattern, whensin, whenchrist, wherepattern, wheresin, wherechrist, whypattern, whysin, whychrist, howpattern, howsin, howchrist) VALUES('$date', '$whopattern', '$whosin', '$whochrist', '$whatpattern', '$whatsin', '$whatchrist', '$whenpattern', '$whensin', '$whenchrist', '$wherepattern', '$wheresin', '$wherechrist', '$whypattern', '$whysin', '$whychrist', '$howpattern', '$howsin', '$howchrist')";
		mysqli_query($conn, $sql);

		header("Location: repcreate.php?info=added");
		exit();
    }
	
	// Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM rep WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM rep WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: repcreate.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
		$id = $_REQUEST['id'];
        $date = $_REQUEST["date"];
		$whopattern = $_REQUEST["whopattern"];
		$whosin = $_REQUEST["whosin"];
		$whochrist = $_REQUEST["whochrist"];
		
		$whatpattern = $_REQUEST["whatpattern"];
		$whatsin = $_REQUEST["whatsin"];
		$whatchrist = $_REQUEST["whatchrist"];
		
		$whenpattern = $_REQUEST["whenpattern"];
		$whensin = $_REQUEST["whensin"];
		$whenchrist = $_REQUEST["whenchrist"];
		
		$wherepattern = $_REQUEST["wherepattern"];
		$wheresin = $_REQUEST["wheresin"];
		$wherechrist = $_REQUEST["wherechrist"];
		
		$whypattern = $_REQUEST["whypattern"];
		$whysin = $_REQUEST["whysin"];
		$whychrist = $_REQUEST["whychrist"];
		
		$howpattern = $_REQUEST["howpattern"];
		$howsin = $_REQUEST["howsin"];
		$howchrist = $_REQUEST["howchrist"];

        $sql = "UPDATE rep SET date = '$date', whopattern = '$whopattern', whosin = '$whosin', whochrist = '$whochrist', whatpattern = '$whatpattern', whatsin = 'what$sin', whatchrist = '$whatchrist', whenpattern = '$whenpattern', whensin = '$whensin', whenchrist = '$whenchrist', wherepattern = '$wherepattern', wheresin = '$wheresin', wherechrist = '$wherechrist', whypattern = '$whypattern', whysin = '$whysin', whychrist = '$whychrist', howpattern = '$howpattern', howsin = '$howsin', howchrist = '$howchrist' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: repcreate.php?info=updated");
        exit();
    }
	
?>