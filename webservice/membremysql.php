<?php 
$json = file_get_contents('php://input');
$obj = json_decode($json);
//echo $json;

//Save
$con = mysql_connect('localhost','root','') 
       or die('Cannot connect to the DB');
mysql_select_db('db_aftmobile',$con);
  /* grab the posts from the db */
  //$query = "SELECT post_title, guid FROM wp_posts WHERE 
  //  post_author = $user_id AND post_status = 'publish'
  // ORDER BY ID DESC LIMIT $number_of_posts";
mysql_query("INSERT INTO `test`.`membre` (nom, prenom, tel, mail, emploi, mot_de_passe, adresse, tel, organisme, facebook, twitter, googleplus,linkedin)
VALUES ('".$obj->{'nom'}."', '".$obj->{'prenom'}."', '".$obj->{'tel'}."', '".$obj->{'mail'}."', '".$obj->{'emploi'}."', '".$obj->{'mot_de_passe'}."', '".$obj->{'adresse'}."', '".$obj->{'tel'}."', '".$obj->{'organisme'}."', '".$obj->{'facebook'}."', '".$obj->{'twitter'}."', '".$obj->{'googleplus'}."', '".$obj->{'linkedin'}."')");

/*QString data = QObject::tr("{\"nom\":\"%1\",\"prenom\":\"%2\",\"mail\":\"%3\",\"emploi\":\"%4\",\"mot_de_passe\":\"%5\",\"adresse\":\"%6\",\"tel\":\"%7\",\"organisme\":\"%8\",\"facebook\":\"%9\",\"twitter\":\"%10\",,\"googleplus\":\"%11\",\"linkedin\":\"%12\",\"tel\":\"%13\"}").arg(newmembre.getNom()).arg(newmembre.getPrenom()).arg(newmembre.getMail()).arg(newmembre.getEmploi()).arg(newmembre.getMotdepasse().arg(newmembre.getAdresse()).arg(newmembre.getTel()).arg(newmembre.getOrganisme()).arg(newmembre.getFb()).arg(newmembre.getLnkdn()).arg(newmembre.getTwit()).arg(newmembre.getGplus()));
*/
mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
?> 