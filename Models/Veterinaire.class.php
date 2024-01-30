<?php

class Veterinaire {

public function __construct(private $idVeterinaire, private $prenomVeterinaire, private $nomVeterinaire, private  $departement, private $ville, private $emailVeterinaire, private $telephone, private 
 
bool $role_idrole){}

public function __get($attr)
{
    if (property_exists($this,$attr)){
        return $this->$attr;
    }else;{
        trigger_error("L'attibut $attr n'existe pas", E_USER_ERROR);
        return NULL;
    }
}

public function __set($attr, $value)
{
    $this->$attr = $value;
}

}


// class Veterinaire {
//     private $idVeterinaire;
//     private $nomVeterinaire;
//     private $prenomVeterinaire;
//     private $departement;
//     private $ville;
//     private $emailVeterinaire;
//     private $telephone;
//     private $role_idrole;

//     public function __construct($nomVeterinaire, $prenomVeterinaire, $departement, $ville, $emailVeterinaire, $telephone, $role_idrole) {
//         $this->nomVeterinaire = $nomVeterinaire;
//         $this->prenomVeterinaire = $prenomVeterinaire;
//         $this->departement = $departement;
//         $this->ville = $ville;
//         $this->emailVeterinaire = $emailVeterinaire;
//         $this->telephone = $telephone;
//         $this->role_idrole = $role_idrole;
//     }

//     // Méthode Getter
//     public function getIdVeterinaire() {return $this->idVeterinaire;}
//     public function getNomVeterinaire() {return $this->idVeterinaire;}
//     public function getPrenomVeterinaire() {return $this->idVeterinaire;}
//     public function getDepartement() {return $this->idVeterinaire;}
//     public function getVille() {return $this->idVeterinaire;}
//     public function getEmailVeterinaire() {return $this->idVeterinaire;}
//     public function getTelephone() {return $this->idVeterinaire;}
//     public function getRoleIdRole() {return $this->idVeterinaire;}

    
//     // Méthodes Setter
//     public function setNomVeterinaire($nomVeterinaire) {$this->nomVeterinaire = $nomVeterinaire;}
//     public function setPrenomVeterinaire($prenomVeterinaire) {$this->prenomVeterinaire = $prenomVeterinaire;}
//     public function setDepartement($departement) {$this->departement = $departement;}
//     public function setVille($ville) {$this->ville = $ville;}
//     public function setEmailVeterinaire($emailVeterinaire) {$this->emailVeterinaire = $emailVeterinaire;}
//     public function setTelephone($telephone) {$this->telephone = $telephone;}
//     public function setRoleIdRole($role_idrole) {$this->role_idrole = $role_idrole;}
// }

?>
