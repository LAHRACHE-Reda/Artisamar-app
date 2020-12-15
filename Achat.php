<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Artisamar_FINALISATION_DE_LA_COMMANDE</title>
  <!-- font/bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<!-- add style -->
	<link rel="AchatStyle.css" type="text/css" href="comStyle.css"> </head>
    <link href="HeaderStyle.css" type="text/css" rel="stylesheet">
<body>
  <!--Header-->
  <?php include "Header.php" ?>
  <!--commande-->
	<div class="row">
		<div class="col-70">
      <div class="container">
        <h3>Finalisation de la commande</h3>
        <form action="/action_page.php">
          <div class="row">
            <div class="col"> 
              <h4>Adresse</h4>

              <div class="row"> 
                <div class="col-50"> 
                  <label for="nm"><i class="fa fa-user"></i> Nom</label>
                  <input type="text" id="nm" name="nom" placeholder="Entrer votre nom">
                </div>
                <div class="col-50"> 
                  <label for="prn"><i class="fa fa-user"></i> Prenom</label>
                  <input type="text" id="prn" name="prenom" placeholder="Entrer votre prenom">
                </div>
              </div>

              <div class="row"> 
                <div class="col-50"> 
                  <label for="num"><i class="fa fa-phone-square" aria-hidden="true"></i> Téléphone</label>
                  <input type="text" id="num" name="numTelephone"  placeholder="Entrer votre numéro de téléphone mobile ">
                </div>
                <div class="col-50"> 
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="Entrer votre email">
                </div>
              </div>
            
              <label for="adr"><i class="fa fa-address-card-o" aria-hidden="true"></i> Adresse</label>
              <input type="text" id="adr" name="nom"  placeholder="Entrer votre adresse">

              <div class="row"> 
                <div class="col-50"> 
                  <label for="rg"><i class="fa fa-map-marker" aria-hidden="true"></i> Région</label>
                  <input type="text" id="rg" name="region" placeholder="Entrer votre région">
                </div>
                <div class="col-50"> 
                  <label for="ville"><i class="fa fa-institution"></i> Ville</label>
                  <input type="text" id="ville" name="ville"  placeholder="Entrer votre ville">
                </div>
              </div>
            
            </div>  
          </div>
          <input type="submit" value="Enregistrer" class="btn">
        </form>
      </div>
    </div>
    <div class="col-30">
      <div class="container">
        <h3>Résumé</h3>
        <div class="row">
          <div class="col">
            <h4>Votre commande<span class="price" style="color: black"><i class="fa fa-shopping-cart" aria-hidden="true"></i><b>2</b></span></h4>
            <p><a href="#">TAPIE</a><span class="price">3500dh</p>
            <p><a href="#">BABOUCHES</a><span class="price">100dh</p>
            <hr>
            <p>Totale <span class="price" style="color: black"><b>3600dh</b></span></p>
          </div>
        </div>

      </div>
    </div>
  </div>		
</body>
</html>