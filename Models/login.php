<?php

require_once "Controller/dbConnect.php";

if (!empty($_POST['emailUtilisateur']) && !empty($_POST['mdpUtilisateur'])) {
    $emailUtilisateur =htmlspecialchars($_POST['emailUtilisateur']) ;
    $mdpUtilisateur = $_POST['mdpUtilisateur'];

    // var_dump($emailUtilisateur);
    // var_dump($mdpUtilisateur);

    $req = $pdo->prepare('SELECT emailUtilisateur, mdpUtilisateur FROM utilisateur WHERE emailUtilisateur = :emailUtilisateur ');
    $req->bindValue('emailUtilisateur', $emailUtilisateur);
    // $req->bindValue('mdpUtilisateur', $mdpUtilisateur);
    $req->execute();
    $resultat = $req->fetch(PDO::FETCH_ASSOC);
    

    //afficher le resultat
    // var_dump($resultat);
    


    if($resultat){
        $passwordHash=$resultat['mdpUtilisateur'];
        if(password_verify($mdpUtilisateur,$passwordHash)){
            
            // echo "Connexion réussi";
            // !Connexion réussie, redirigez vers une autre page
            header("Location: views/veterinaire.php");
            exit;

    }else{
        echo "<p>Identifiants invalides</p>";
}   
    }else{
        echo "<p>Identifiants invalide</p>";
    }

    
}