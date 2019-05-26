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

<?php

    $heure=$_POST['heure'];
    $cout=$_POST['cout'];


    $insertion = $connexion->prepare('INSERT INTO `couter` VALUES (:id_tech, :id_panne, :prix, :heure)');
    $update = $connexion->prepare('UPDATE `panne` set resolution_panne = :resolue where id_panne = :id_panne');
        

    $insertion->bindParam(':id_tech', $_SESSION["id_tech"]);
    $insertion->bindParam(':id_panne', $_SESSION['id_panne']);
    $insertion->bindParam(':prix', $cout);
    $insertion->bindParam(':heure', $heure);

    $resolue = "Resolue";

    $update->bindParam('resolue', $resolue);
    $update->bindParam(':id_panne', $_SESSION['id_panne']);

    $succes=$insertion->execute();
    $succes2=$update->execute();
    header('Location: choixAction.php');
?>