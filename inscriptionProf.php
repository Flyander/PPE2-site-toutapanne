<!doctype html>
  <html> 
      <head> 
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="style.css" />
            <title>Page d’accueil</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <link rel="stylesheet" href="style.css">
     </head> 
     <body>
        <div class="container">               <!--j’ai déjà vu cela quelque part  mais où-->
            <div class="jumbotron">
            <h1>Inscription</h1>
            <div class="row">
                <div class="col-md-10">
                    <form action="insertioncompte.php" method="post">
                        <div class="form-group">
                            <label for="identifiant">Identifiant*</label> 
                            <input type="text" class="form-control" name="identifiant" placeholder="identifiant">
                        </div>   
                        <div class="form-group">
                            <label for="email">Email*</label> 
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe*</label> 
                            <input type="password" class="form-control" name="password" placeholder="Password"> 
                        </div> 
                        <div class="form-group">
                            <label for="confirmPassword">Mot de passe*</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
                        </div>
                            <input type="checkbox" name="boiteControle1" unchecked> 
                            <label for="boiteControle1" require="check"> En cliquant, vous acceptez les conditions d’utilisation*<br/></label>
                            <p>*champ obligatoire</p><br/>
                            <button type="submit" class="btn btn-primary btn-lg">Créer mon compte</button>
                        </div>
                    </form> 
                </div>
                </div>
            </div>
        </div>
    </body>
</html>