<?php
    session_start();
?>
<?php
    if (isset ($_SESSION['connecte']))
    {}				
    else
    {
        $_SESSION['connecte']= 'pasok';  
    }
    include("connexionbdd.php");
     
    $_SESSION['id_panne'] = $_POST['valeur'];              

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" style="css" href="test.css" />
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <ul class="nav navbar-nav navbar-right">
        <a class="btn" style="color:white; transform: translateX(+1150px)"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo ' '.$_SESSION['pseudo']?></a> <!-- affichage de la variable de session -->
      </ul>
      <a class="btn" style="color:white; transform: translateX(+725px)" href="disconnect.php"><i
          class="fa fa-power-off fa-lg" aria-hidden="true"></i></button></a>
      <a class="btn" href="" style="background-color:#F7BE81; transform:  translateX(-1200px)">Toutapanne</a>
    </div>
  </nav>
  <img src="AC Rennes.jpg" height="200" width="200"><br><br><br><br><br><br>
  
  <!--<div id="container">
    <input type="checkbox" id="water" />
    <label for="water">
      <div id="fill"></div>
    </label>
  </div>-->

  

  <h1 id="bob" class="display-3 text-center text-capitalize" style="transform: translateY(-165px) ">Toutapanne</h1>
  <div id="arborescence" class="display-5 text-center text-capitalize" style="font-size: 26px;	transform:  translateY(-160px) ;"></div>

  <div class="container">
  <form action="resoudreTraitement.php" class="was-validated" method="post">
    <div class="form-group">
      <label for="heure">Temps de main d'oeuvre:</label>
      <input type="time" class="form-control" id="heure"  name="heure" required>
      <div class="valid-feedback">*Valide</div>
      <div class="invalid-feedback">*Champ non rempli</div>
    </div>
    <div class="form-group">
      <label for="cout">Côut total de la résolution de la panne:</label>
      <input type="text" class="form-control" id="cout" name="cout" required>
      <div class="valid-feedback">Valide</div>
      <div class="invalid-feedback">*Champ non rempli</div>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>

  <br><br><br><br><br><br><br>

  <!--______________Bas de page________________-->
  <?php include('footer.html'); ?>
  <!--______________Fin Bas de page________________-->
  
</body>

</html>