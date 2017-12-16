<?php 
  $link = mysqli_connect("localhost", "id3840281_root", "villA00283489", "id3840281_dbaft") or die('Cannot connect to the DB');
  $query = "SELECT * FROM `id3840281_dbaft`.`information` where info_id>".$_GET["info_id"];
  $result = mysqli_query($link,$query) or die('Errant query:  '.$query);
  $posts = array();
  if(mysqli_num_rows($result)) {
    while($post = mysqli_fetch_assoc($result)) {
      $posts[] = array('post'=>$post);
    }
  }
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts));
  
  /* disconnect from the db */
  @mysqli_close($link);
?> 