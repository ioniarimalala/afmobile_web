<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Modification</title>
</head>
<body>

	<section>
		<!-- Modal>
      	<div class="modal fade" id="update_data_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
       		<div class="modal-dialog" role="document">
          		<div class="modal-content">
            		<div class="modal-header">
              			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              			<h4 class="modal-title" id="myModalLabel">nouveau évenement</h4>
            		</div>
            		<div class="modal-body"-->
						<form  class="container" method="POST" action="update_process.php?id=<?php echo $_GET["id"]; ?>&details=<?php echo $_GET["details"]; ?>">
							<div class="form-group">
								<label>Titre</label>
								<input class="form-control" type="text" name="title_updated" placeholder="Titre" value="<?php echo $_GET["title"]; ?>"> <br/>
							</div>
							<div>
								<label>Photo</label>
								<input type="file" name="photo_updated" value="<?php echo $_GET["image"]; ?>"><br/>
							</div>
							<div class="form-group">
								<label>Déscription</label>
								<input class="form-control" type="text" name="description_updated" placeholder="Déscription" value="<?php echo $_GET["description"]; ?>"><br/>
							</div>

							<div class="form-group">
					          <label>Détails</label>
					          <textarea class="form-control" name="details_updated" placeholder="Détails"><?php echo $_GET["details"]; ?>"</textarea>
					        </div>
					        <div class="form-group">
					          <label>Date d'expiration</label>
					          <input class="form-control" type="date" name="date_expire_updated" placeholder="Date d'expiration" value="<?php echo $_GET["date"]; ?>"><br/>
					        </div>
							
							<input class="btn btn-warning" type="submit" name="update" value="Update">
						</form>
					</div>
	</section>
</body>
</html>