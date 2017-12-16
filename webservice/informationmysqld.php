<?php 
$link = mysql_connect('127.0.0.1','root','') or die('Cannot connect to the DB');
  mysql_select_db('db_aftmobile',$link) or die('Cannot select the DB');
  $query = "SELECT * FROM `db_aftmobile`.`information`;";
  $result = mysql_query($query,$link) or die('Errant query:  '.$query);
  $posts = array();
  if(mysql_num_rows($result)) {
    while($post = mysql_fetch_assoc($result)) {
      $posts[] = array('post'=>$post);
    }
  }
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts));
  
  /* disconnect from the db */
  @mysql_close($link);
?> 