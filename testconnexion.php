<body>
    <?php  
        include("connexionbdd.php"); //liaison bdd
        $identifiant = $_POST['identifiant'];//récuperation des valeurs du formulaire et stockage dans des variables
        $password = $_POST['password'];
        

        $MdpCrypt = password_hash($password, PASSWORD_DEFAULT);

        $Requete = $connexion->prepare('SELECT mdp_T as mdp, \'Admin\' as type, id_tech as id FROM technicien where identifiant_T = :identifiant 
                                        UNION 
                                        SELECT mdp_P as mdp, \'Prof\' as type, id_prof as id FROM prof WHERE identifiant_P = :identifiant'); //création des requetes SQL
        

        $Requete->bindParam(':identifiant', $identifiant);

        $Requete->execute(); //Execution des requetes SQL

        $Result = $Requete->fetchAll();

        foreach($Result as $Results)
        {
            $validPassword = password_verify($password, $Results["mdp"]);
            if ($Results["type"] == "Admin" && $validPassword == true)
            {
                session_start();
                echo "Valide";
                $_SESSION['pseudo'] = $identifiant;
                $_SESSION['connecte']='ok';
                $_SESSION['type'] = "Admin";
                $_SESSION['id_tech'] = $Results["id"];
                header('Location: choixAction.php');
                $test2 = true;
            }
            elseif ($Results["type"] == "Prof" && $validPassword == true)
            {
                session_start();
                echo "Valide";
                $_SESSION['pseudo'] = $identifiant;
                $_SESSION['type'] = "Prof";
                $_SESSION['id_prof'] = $Results["id"];
                $_SESSION['connecte']='ok';
                header('Location: ChoixSalle.php');
                $test = true; 
            }
        }
        if ($test == false && $test2 == false) 
        {
            $_SESSION['connecte']='pasok';
            echo "Erreur";
            header('Location: authentificationfail.php');
        }
    ?>
</body>