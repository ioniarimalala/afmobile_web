<?php 
$json = file_get_contents('php://input');
$obj = json_decode($json);
//echo $json;

//Save
$con =mysqli_connect("localhost", "id3840281_root", "villA00283489", "id3840281_dbaft") or die('Cannot connect to the DB');
  /* grab the posts from the db */
  //$query = "SELECT post_title, guid FROM wp_posts WHERE 
  //  post_author = $user_id AND post_status = 'publish'
  // ORDER BY ID DESC LIMIT $number_of_posts";
mysqli_query($con, "INSERT INTO `id3840281_dbaft`.`membre` (nom, prenom, tel, mail, adresse, emploi, organisme, rs1, rs2, rs3, mdp )
VALUES ('".$obj->{'nom'}."', '".$obj->{'prenom'}."', '".$obj->{'tel'}."', '".$obj->{'mail'}."', '".$obj->{'adresse'}."', '".$obj->{'emploi'}."', '".$obj->{'organisme'}."', '".$obj->{'rs1'}."', '".$obj->{'rs2'}."', '".$obj->{'rs3'}."', '".$obj->{'mdp'}."')");
mysqli_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
?> 