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
  <link rel="stylesheet" style="css" href="choixCSS.css" />
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <ul class="nav navbar-nav navbar-right">
        <a class="btn" style="color:white; transform: translateX(+1150px)"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo ' '.$_SESSION['pseudo']?></a> <!-- affichage de la variable de session -->
      </ul>
      <a class="btn" style="color:white; transform: translateX(+725px)" href="disconnect.php"><i class="fa fa-power-off fa-lg" aria-hidden="true"></i></button></a>
      <a class="btn" href="" style="background-color:#F7BE81; transform:  translateX(-1200px)">Toutapanne</a>
    </div>
    </nav>
  
    <div class="row no-gutters">
        <div class="col-md-6 no-gutters">
            
            <div class="leftside d-flex justify-content-center align-items-center" ><a id="lien" href="inscriptionProf.php">Ajouter un nouveau professeur</a></div>
        </div>

        <div class="col-md-6 no-gutters">
            <div class="rightside d-flex justify-content-center align-items-center" ><a id="lien" href="ChoixSalle.php">Gestion des pannes</a></div>
        </div>
    </div>


  </div>

  <!--______________Bas de page________________-->
  
  <!--______________Fin Bas de page________________-->

  <script src="mes_fonctions.js"></script>
  
</body>

</html>