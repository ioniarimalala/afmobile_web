<?php 
	
	header("Status: 301 Moved Permanent", false, 301);
	header("Location: index.php");
  	//add data
  	$connect = mysqli_connect("localhost", "id3840281_root", "villA00283489", "id3840281_dbaft") or die('Cannot connect to the DB');
  
	$title = $_POST['title'];
	$photo = $_POST['photo'];
	$descriptions = $_POST['descriptions'];
	$details = $_POST['details'];

	$date_expire = $_POST['date_expire'];
	$date = date('Y-m-d', strtotime($date_expire));


	$query = "INSERT INTO information VALUES('', '$title', '$photo', '$descriptions', '$details', '$date')";

	//echo $query;

	if(mysqli_query($connect, $query))
	{
		if($title != "" && $photo != "" && $descriptions != "" && $details != "" && $date != "")
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
		echo "Error";
	}
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert page</title>
</head>
<body>

</body>
</html>