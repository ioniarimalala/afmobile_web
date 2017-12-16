<?php 
	
	header("Status: 301 Moved Permanent", false, 301);
	header("Location: index.php");
  	//add data
  	$connect = mysqli_connect("localhost", "id3840281_root", "villA00283489", "id3840281_dbaft") or die('Cannot connect to the DB');
	$title = $_POST['title_updated'];
	$image = $_POST['photo_updated'];
	$description = $_POST['description_updated'];
	$details = $_POST['details_updated'];
	$date = $_POST['date_expire_updated'];

	//echo $_GET['id'];

	$query = "UPDATE information SET titre='".$title."', "."photo="."'".$image."', "."description='".$description."', "."details='".$details."', "."date_expire='".$date."' "."WHERE info_id=".$_GET['id'];

	if(mysqli_query($connect, $query))
	{
		if($title != "" && $image != "" && $description != "" && $details != "" && $date != "")
		{
			echo "Done";
		}
		else
		{
			echo "some item is empty";
		}
	}
	else
	{
		//echo "Error "; 

		echo $query;
	}
  ?>