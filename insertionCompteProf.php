<body>
    <?php  
        include("connexionbdd.php"); 
       // $email = $_POST['email'];
        $password = $_POST['password']; //récuperation des valeurs du formulaire et stockage dans des variables
        $identifiant = $_POST['identifiant'];




        
        $NewPassword = password_hash($password, PASSWORD_DEFAULT); // cryptage du mot de passe

        $insertion = $connexion->prepare('INSERT INTO `prof`(`identifiant_P`, `mdp_P`) VALUES (:identifiant, :NewPassword)');
        $sql = $connexion->prepare("SELECT COUNT(identifiant_P) AS result FROM compte WHERE identifiant_P = :identifiant"); //préparation de la requete SQL
       // $stmt = $connexion->prepare($sql);
        

        

      //  $insertion->bindParam(':email', $email); 
        $insertion->bindParam(':identifiant', $identifiant);
        $insertion->bindParam(':NewPassword', $NewPassword);
       // $stmt->bindParam(':email2', $email);

        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);  //programmation objet et Récupère une ligne de résultat sous forme de tableau associatif

        if($row['result'] > 0){ // si deja un identifiant
            die('L\'identifiant saisie est déjà utilisé!'); //changement de page vers une nouvelle page qui affiche le message si contre
        }
        else {
            $trop_facile='/^[a-zA-Z]{1,10}$/';
            if(preg_match($trop_facile, $password) && strlen($password) >= 8)
            {
                $succes=$insertion->execute();
                header('Location: Connexion.php'); // vous envoie à la page d'acceuil
            }
            else
            {
                header('Location: inscriptionFailProf.php');
            }
        }
    ?>
</body>