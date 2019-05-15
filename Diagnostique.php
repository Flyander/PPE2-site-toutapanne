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
     
    $_SESSION['id'] = $_GET['id'];              

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
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="	transform:  translateY(-100px) ;">
          <h1 class="">Sélectionnez ce qui correspond à votre panne afin de faciliter la réparation pour le technicien. Vous allez rentrer les informations pour le PC <?php echo $_SESSION['id']." qui est dans la salle ".$_SESSION['salle']."." ;?> </h1>
        </div>
        
        <div  class="col-md-12" style="	transform:  translateY(-25px) ;">
          <h4 id="question" class="">Votre panne est de type ?</h4>
        </div>

      </div>
    </div>
    <div class="container">
      <div id="start">Commencer le questionnaire !</div>
          <div id="quiz" style="display: none;">
              <div id="question"></div>
              <div id="qImg"></div>
              <div id="choices">
                  <div class="choice" id="A" onclick="checkAnswer('A')"></div>&nbsp;
                  <div class="choice" id="B" onclick="checkAnswer('B')"></div>&nbsp;
                  <div class="choice" id="C" onclick="checkAnswer('C')"></div>
              </div>
          </div>
          <div id="scoreContainer" style="display: none"></div>
      </div>
    </div>
  </div><br><br><br><br><br><br><br>

  <!--______________Bas de page________________-->
  <?php include('footer.html'); ?>
  <!--______________Fin Bas de page________________-->

  <script src="mes_fonctions.js"></script>
  
</body>

</html>