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

    $variable=$_GET['reponseChoisie'];
    $finie=$_GET['finie'];
    $tab_php = explode(";", $variable);
    $compteur = 0;
    $affichage = "";
    $longeur = sizeof($tab_php);
    foreach ($tab_php as $uneVariable) 
    {
        if ($finie == "false")
        {
            echo $uneVariable. ' → ';

        }
        elseif ($finie == "true")
        {
            $affichage .= $uneVariable. ', ';
            if ($compteur == $longeur-1){
                echo substr($affichage, 0, -2);
            }
            $compteur++;
        }       
    }
    if ($finie == "true")
    {
        $affichage = "Le professeur a remplie le questionnaire avec les choix suivant : ";
        $compteur = 0;
        foreach ($tab_php as $uneVariable)
        {
            $affichage .= $uneVariable. ' --> ';
            if ($compteur == $longeur-1){
                $affichage = substr($affichage, 0, -5);
            }
            $compteur++;
        }

        $insertion = $connexion->prepare('INSERT INTO `panne`(`num_salle`, `desc_panne`, `date_panne`, `num_pc`, `id_prof`) VALUES (:num_salle, :desc_panne, :date_panne, :num_pc, :id_prof)');
        
        $num_salle = $_SESSION['salle'];
        $date = date("Y-m-d");
        $num_pc = "PC ";
        $num_pc .= $_SESSION['id'];
        $id_prof = $_SESSION['id_prof'];

        $insertion->bindParam(':num_salle', $num_salle);
        $insertion->bindParam(':desc_panne', $affichage);
        $insertion->bindParam(':date_panne', $date);
        $insertion->bindParam(':num_pc', $num_pc);
        $insertion->bindParam(':id_prof', $id_prof);

        $succes=$insertion->execute();
        //include("testmail.php");
    }
?>