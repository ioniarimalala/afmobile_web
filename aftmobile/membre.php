<?php 

  //connexion test and select all data
 $connect = mysqli_connect("localhost", "id3840281_root", "villA00283489", "id3840281_dbaft") or die('Cannot connect to the DB');
  $query = "SELECT * FROM membre";
  $result = mysqli_query($connect, $query);

  ?>

  <!DOCTYPE html>
  <html lang="fr">
  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  	<title>AFT|Membre</title>
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

    <a class="marging-left-customized" href="index.php">Information</a></div>
    
    <section class="panel">
      <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading" id="information_table" align="center">Les membres</div>
  		  <table class="table table-bordered">
    			<thead>
    				<tr>
    					<th>Nom</th>
    					<th>Prénom</th>
    					<th>Téléphone</th>
              <th>E-mail</th>
              <th>Adresse</th>
              <th>Emploi</th>
              <th>Organisme</th>
              <th>Facebook</th>
              <th>Twitter</th>
              <th>LinkedIn</th>
              <!--th>Mots de passe</th-->
    				</tr>
    			</thead>
    			<tbody>
    				<?php 

              //$i = 1;

              while($row = mysqli_fetch_array($result))
              { ?>
                <tr>
                  <!--td><?php //echo $i++; ?></td-->
                  <td><?php echo strtoupper($row["nom"]); ?></td>
                  <td><?php echo $row["prenom"]; ?></td>   
                  <td><?php echo $row["tel"]; ?></td>                   
                  <td><?php echo $row["mail"]; ?></td>
                  <td><?php echo $row["adresse"]; ?></td>
                  <td><?php echo $row["emploi"]; ?></td>
                  <td><?php echo $row["organisme"]; ?></td>
                  <td><?php echo $row["rs1"]; ?></td>
                  <td><?php echo $row["rs2"]; ?></td>
                  <td><?php echo $row["rs3"]; ?></td>
                  <!--td><?php //echo sha1($row["mdp"]) ; ?></td-->
                </tr>
            <?php   }

            ?>
    			</tbody>
    			<tfoot>
    				
    			</tfoot>
  		  </table>
      </div>
  	</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>