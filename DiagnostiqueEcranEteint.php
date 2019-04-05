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

<body>
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
  <div id="container">
    <input type="checkbox" id="water" />
    <label for="water">
      <div id="fill"></div>
    </label>
  </div>

  <h1 id="bob" class="display-3 text-center text-capitalize" style="transform: translateY(-165px) ">Toutapanne</h1>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="	transform:  translateY(-100px) ;">
          <h1 class="">Selectioner ce qui correspond a votre panne afin de determiner quel est votre panne.</h1>
        </div>
        <div class="col-md-12" style="	transform:  translateY(00px) ;">
          <h4 class="">Quel genre est votre panne Ecran eteint ?</h4>
        </div>

      </div>
    </div>
    <div class="container">                                        
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle"href="#" style="background-color:#F7BE81" data-toggle="dropdown">
            Ecran eteint
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Port degrader</a>
            <a class="dropdown-item" href="#">Alimentation defectueuse</a>
            <a class="dropdown-item" href="#">Bouton Power</a>
          </div>
        </div>
      </div>
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 "><a class="btn btn-primary w-25 rounded rounded-left mr-auto" href="#" style="background-color:#F7BE81;transform:  translatex(150%)">Valider</a></div>
          </div>
        </div>
       <!-- <img src="bandeau bas.png" style="transform:  translateY(250px)"> -->
      </div>
  </div><br><br><br><br><br><br><br><br>

<!--______________Bas de page________________-->
<div class="bas_page container-fluid">
	<ul>
		<li><img src="img/logo_fld.png"></li>
		<li>Lycée Félix Le Dantec<br>
			Rue des Cordiers • BP 80349<br>
			22303 Lannion cedex
		</li>
		<li class="num">Tel. 02 96 05 61 71</li>
	</ul>
	<ul class="label">
		<li><h4>ETABLISSEMENT LABELISE</h4></li>
		<li><img src="img/academie_rennes.png"></li>
		<li><img src="img/logo-erasmus.png"></li>
		<li><img src="img/logo_campus_blanc.png"></li>
	</ul>
	<ul class="contact">
		<li><a href="contact.html" class="btn btn-secondary"><h5>CONTACT & ACCES</h5></a></li>
	</ul>
	<ul class="img_points">
		<li><img src="img/points.png"></li>
	</ul>
</div>
<!--______________Fin Bas de page________________-->




<!--______________pied de page________________-->

  
</body>
  </html>
