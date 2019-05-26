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
  <link rel="stylesheet" style="text/css" href="test.css" />
</head>

<body style="">
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <ul class="nav navbar-nav navbar-right"> 
        <a class="btn" style="color:white; transform: translateX(+1150px)"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo ' '.$_SESSION['pseudo']?></a>  <!-- affichage de la variable de session -->
      </ul>
      <a class="btn" style="color:white; transform: translateX(+725px)" href="disconnect.php"><i class="fa fa-power-off fa-lg" aria-hidden="true"></i></button></a>
      <a class="btn" href="" style="background-color:#F7BE81; transform:  translateX(-1200px)">Toutapanne</a>
    </div>
  </nav>
  <img src="AC Rennes.jpg" height="200" width="200"><br><br><br><br><br><br>
  <h1 id="bob" class="display-3 text-center text-capitalize" style="transform: translateY(-165px) ">Toutapanne</h1>  
  
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          <h4>Choisissez le numéro de la salle dans lequel vous vous trouver.</h4>
          <form action="PanneSalle.php" method="post">
            <select name="salle" class="custom-select" size="1">
              <option value="B101">B101</option>
              <option value="B214">B214</option>
              <option value="B322">B322</option>
              <option value="B321">B321</option>
            </select><br><br><br>
            <button type="submit" style="transform: translateX(+550%)" class="btn btn-outline-warning btn-lg">Valider</button>
          </form>
        </div>
    </div>
  </div><br><br><br><br><br><br><br><br>

  <?php include('footer.html'); ?>

</body>


</html>