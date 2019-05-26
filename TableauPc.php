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
  <div class="container">
  <div class="table-responsive-sm">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Numero salle</th>
          <th>Description</th>
          <th>Date de la panne</th>
          <th>État de la panne</th>
          <th>Nom du professeur</th>
          
        </tr>
      </thead>
      <tbody>
      <?php 
        $Requete = $connexion->prepare('Select * from panne,prof where panne.id_prof = prof.id_prof and num_salle=:num_salle and num_pc=:num_pc'); //création des requetes SQL
        $num_pc = "PC ";
        $num_pc .= $_SESSION['id'];
        $Requete->bindParam(':num_salle', $_SESSION['salle']);
        $Requete->bindParam(':num_pc', $num_pc);

        $Requete->execute(); //Execution des requetes SQL

        $Result = $Requete->fetchAll();
        foreach($Result as $unResultat)
        {?>
        <tr>
        <form action="resoudre.php" method="post">
          <td> <?php echo $unResultat["id_panne"];  ?></td>
          <td> <?php echo $unResultat["num_salle"];  ?></td>
          <td> <?php echo $unResultat["desc_panne"];  ?></td>
          <td> <?php echo $unResultat["date_panne"];  ?></td>
          <td> <?php echo $unResultat["resolution_panne"];  ?></td>
          <td> <?php echo $unResultat["identifiant_P"];  ?></td>
          <td style="text-align:center;">
            <?php if ($unResultat["resolution_panne"] == "Non resolue"){ ?>
                <button type="submit" name="valeur" value="<?php echo $unResultat["id_panne"];?>" class="btn btn-warning">Résoudre</button>
            <?php } else { ?>
                <button type="submit" name="valeur"  class="btn btn-warning" disabled>Résolue</button>
            <?php } ?>
          </td>
        </form>
        <?php } ?>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  
  <br><br><br><br><br><br><br>

  <!--______________Bas de page________________-->
  <?php include('footer.html'); ?>
  <!--______________Fin Bas de page________________-->

  
</body>

</html>