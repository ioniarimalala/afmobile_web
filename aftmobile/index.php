<?php 

  //connexion test and select all data
  $connect = mysqli_connect("localhost", "id3840281_root", "villA00283489", "id3840281_dbaft") or die('Cannot connect to the DB');
  $query = "SELECT * FROM information";
  $result = mysqli_query($connect, $query);

  ?>

  <!DOCTYPE html>
  <html lang="fr">
  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="600">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  	<title>AFT | Information</title>
  </head>
  <body>
    <section class="navbar">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">AFT</a>
          </div>
        </div><!-- /.container-fluid -->
      </nav>
    </section>

    <a class="marging-left-customized" href="membre.php">Membre</a>
    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#add_data_modal">Ajouter</button>
    
  	<section class="panel">
      <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading" id="information_table" align="center">Les informations</div>
        <table class="table table-striped">
    			<thead>
    				<tr>
    					<th>Titre</th>
    					<th>Photo</th>
    					<th>Déscription</th>
              <th>Détails</th>
              <th>Date d'expiration</th>
              <th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
    				<?php 

                    while($row = mysqli_fetch_array($result))
                    { ?>
                      <tr>
                        <!--td><?php //echo $row["info_id"]; ?></td-->
                        <td><?php echo $row["titre"]; ?></td>
                        <td><img src="img/<?php echo $row["photo"]; ?>" class="img-thumbnail img-customized"></td>
                        <td><?php echo $row["description"]; ?></td>
                        <td><?php echo $row["details"]; ?></td>
                        <td><?php echo $row["date_expire"]; ?></td>

                        <td><a href="update.php?id=<?php echo $row["info_id"]; ?>&title=<?php echo $row["titre"]; ?>&image=<?php echo $row["photo"]; ?>&description=<?php echo $row["description"]; ?>&details=<?php echo $row["details"]; ?>&date=<?php echo $row["date_expire"]; ?>"><button class="btn btn-warning btn-sm">Modifier</button></a></td>
                        
                        <td><a href="delete.php?id=<?php echo $row["info_id"]; ?>"><button class="btn btn-danger btn-sm">Supprimer</button></a></td>
                      </tr>
                  <?php   }

                  ?>
    			</tbody>
    			<tfoot>
    				
    			</tfoot>
  		  </table>
      </div>
  	</section>

  	<section>
      <!-- Modal -->
      <div class="modal fade" id="add_data_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">nouveau évenement</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="insert.php">
              <div class="form-group">
                <label>Titre</label>
                <input class="form-control" type="text" name="title" placeholder="Titre"> <br/>
              </div>
              <div class="form-group">
                <label>Photo</label>
                <!--input type="text" name="photo" placeholder="Photo"> <br/-->
                <input type="file" name="photo">
              </div>
              <div class="form-group">
                <label>Déscription</label>
                <input class="form-control" type="text" name="descriptions" placeholder="Déscription"><br/>
              </div>
              <div class="form-group">
                <label>Détails</label>
                <textarea class="form-control" name="details" placeholder="Détails"></textarea>
              </div>
              <div class="form-group">
                <label>Date d'expiration</label>
                <input class="form-control" type="date" name="date_expire" placeholder="Date d'expiration"><br/>
              </div>
              <input class="btn btn-primary" type="submit" name="save" value="Enregistrer">
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
  	</section>

    <section>
      <!-- Modal -->
      <div class="modal fade" id="update_data_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Modifier évenement</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="insert.php">
              <div class="form-group">
                <label>Titre</label>
                <input class="form-control" type="text" name="title" placeholder="Titre"> <br/>
              </div>
              <div class="form-group">
                <label>Photo</label>
                <!--input type="text" name="photo" placeholder="Photo"> <br/-->
                <input type="file" name="photo">
              </div>
              <div class="form-group">
                <label>Déscription</label>
                <input class="form-control" type="text" name="descriptions" placeholder="Déscription"><br/>
              </div>
              <div class="form-group">
                <label>Détails</label>
                <textarea class="form-control" name="details" placeholder="Détails"></textarea>
              </div>
              <div class="form-group">
                <label>Date d'expiration</label>
                <input class="form-control" type="date" name="date_expire" placeholder="Date d'expiration"><br/>
              </div>
              <input class="btn btn-primary" type="submit" name="save" value="Enregistrer">
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>