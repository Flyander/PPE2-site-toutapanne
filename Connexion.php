<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="#">
      </a><a class="btn" href="#" style="background-color:#F7BE81;transform:  translateX(-1200px)">Toutapanne</a>
    </div>
  </nav>
  <nav class="navbar navbar-light">
    <div class="container"> </div>
  </nav>
  <img src="AC Rennes.jpg" height="200" width="200">
  <div class="py-5 bg-light" style="">
    <div class="container">
      <div class="row">
        <div class="p-5 col-md-7 d-flex flex-column justify-content-center">
          <h3 class="display-4 mb-3" style="">Toutapanne<br></h3>
          <p class="mb-4 lead">Toutapanne vous est proposez par Toutatice et vous permet de diagnostiquer les éventuelles pannes présente sur les PC d'une salle.<br>Connectez-vous tout d'abord avec votre compte Toutatice , puis ensuite choisisez la salle ou le PC est déffectueux et par la suite choisisez le type de salle dans lequel vous vous trouvez.<br>Suivez le questionaire qui vous précisera le type de votre panne.</p>
        </div>
        <div class="p-5 col-md-5" style="">
        
            <h3 class="mb-3">Connexion</h3>
            <form action="testconnexion.php" method="post"> 
              <div class="form-group"> <label for="identifiant">Identifiant</label> <input type="identifiant" class="form-control" name="identifiant" placeholder="Identifiant"> <small class="form-text text-muted">Veuillez saisir votre identifiant.</small> </div>
              <div class="form-group"> <label for="password">Mot de passe*</label> <input type="password" class="form-control" name="password" placeholder="Mot de passe"> <small class="form-text text-muted">Veuillez saisir votre Mot de passe.</small></div>
         <!-- <form class=""> -->
            <button type="submit" class="btn btn-primary" style="background-color:#F7BE81">Valider</button> 
            <!--<button type="submit" class="btn btn-primary btn-lg">Connexion</button>-->
        </form>
        </div>
      </div>
    </div>
  </div>
  <img src="bandeau bas.png">
</body>

</html>