<?php
require_once "Controller/dbConnect.php";


if (!empty($_POST['nomUtilisateur']) && !empty($_POST['prenomUtilisateur']) && !empty($_POST['emailUtilisateur']) && !empty($_POST['mdpUtilisateur']) && !empty($_POST['idRole']) ) {
    $nom = $_POST['nomUtilisateur'];
    $prenom = $_POST['prenomUtilisateur'];
    $email = $_POST['emailUtilisateur'];
    $password=$_POST['mdpUtilisateur'];
    $role = $_POST['idRole'];
    $password= password_hash($_POST['mdpUtilisateur'],PASSWORD_DEFAULT);

    var_dump($nom);
    var_dump($prenom);
    var_dump($email);
    var_dump($password);


    //!Ici on a une requête qui va nous permettre d'entrer le nom, l'email et le mot de passe de l'utilisateur */
    $req = $pdo->prepare('INSERT INTO utilisateur (nomUtilisateur, prenomUtilisateur, emailUtilisateur, mdpUtilisateur, idRole) VALUES (:nom, :prenom, :email, :password, :role)');
    $req->bindValue(':nom', $nom);
    $req->bindValue(':prenom', $prenom);
    $req->bindValue(':email', $email);
    $req->bindValue(':password', $password);
    $req->bindValue(':role', $role);
    $resultat = $req->execute();

    if ($resultat) {
        
        echo "Inscription réussie";
        header("Location: connexion");
        exit;

    } else {
        echo  "Veuillez remplir tous les champs..";
    }

    
}


