<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="LoginStyle.css" type="text/css" rel="stylesheet">
    <link href="HeaderStyle.css" type="text/css" rel="stylesheet">
    <link href="FooterStyle.css" type="text/css" rel="stylesheet">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <!--Header-->
  <?php include "Header.php" ?>

  <!--Inscription - Connexion-->
    <div class="container-fluid">
    	<div class="row Login_Row justify-content-center">
    		<div class="col-md-4 col-xs-12" id="Block_connexion">
                <h2 id="cnx">Connexion</h2>
                <br>
                <form action="" method="POST">
                    <div class="input-div">
                        <label for="email_cnx">Email</label><br>
                        <input id="email_cnx" name="email_cnx" type="email" class="form-control" placeholder="Entrez l'adresse email .." required/></br>
                        <label for="password_cnx">Mot de passe</label><br>
                        <input id="password_cnx" name="password_cnx" type="password" class="form-control" placeholder="Entrez le mot de passe .." required/></br>
                        <button type="submit" name="submit" class="btn" >Connexion</button></br>
                        <br>
                        <a id="forgotPWD" href="#"><p>Mot de passe oublié ?</p></a>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-xs-12 vertical-line" id="Block_inscription">
                <h2 id="insc">Nouveau client</h2>
                <br>
                <form action="" method="POST">
                    <div class="input-div">
                        <label for="username">Nom d'utilisateur</label><br>
                        <input id="username" name="username" type="text" class="form-control" placeholder="Entrez le nom d'utilisateur .." required/></br>
                        <label for="email_insc">Email</label><br>
                        <input id="email_insc" name="email_insc" type="email" class="form-control" placeholder="Entrez l'adresse email .." required/></br>
                        <label for="password_insc">Mot de passe</label><br>
                        <input id="password_insc" name="password_insc" type="password" class="form-control" placeholder="Entrez le mot de passe .." required/></br>
                        <label for="password_confirm">Confirmer le mot de passe</label><br>
                        <input id="password_confirm" name="password_confirm" type="password" class="form-control" placeholder="Entrez le mot de passe .." required/></br>
                        <button type="submit" name="submit" class="btn" >Inscription</button></br>
                        <br>
                    </div>
                </form>
            </div>
    	</div>
    </div>
<br><br><br>

  <!--Footer-->
  <?php include "Footer.php" ?>

</body>
</html>
