<!doctype html>
  <html> 
      <head> 
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           
           <title>Page d’accueil</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <link rel="stylesheet" href="style.css">
     </head> 
     <body>
        <div class="container">               <!--debut de l'affichage du questionaire-->
            <div class="jumbotron">
            <h1>Connectez-vous</h1>
            <div class="row">
                <div class="col-md-6">
                <div class="alert alert-danger">
                    <strong>Attention!</strong> Le mot de passe ou l'identifiant ne sont pas correct. <!--Affichage du message d'erreur-->
                </div>
                    <form action="testconnexion.php" method="post">   
                        <div class="form-group">
                            <label for="identifiant">Identifiant*</label> 
                            <input type="identifiant" class="form-control" name="identifiant" placeholder="Identifiant">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe*</label> 
                            <input type="password" class="form-control" name="password" placeholder="Password"> 
                        
                        </br><button type="submit" class="btn btn-primary btn-lg">Connexion
                        </button>
                    </form> 
                </div>
                </div>
            </div>
        </div>
    </body>
</html>