<?php 
	
  	//add data
  	$connect = mysqli_connect("localhost", "id3840281_root", "villA00283489", "id3840281_dbaft") or die('Cannot connect to the DB');
  
	$id = $_GET['id'];

	$query = 'DELETE FROM information WHERE info_id=' . $id;

	echo $query;

	if(mysqli_query($connect, $query))
	{
		if($id != "")
		{
			echo "Done";

		  	?>
		  	<script type="text/javascript">
		  		window.alert("Suppression réussi!");
				window.location.href = "index.php"
		  	</script>
  <?php
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