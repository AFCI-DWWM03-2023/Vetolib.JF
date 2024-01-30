<?php

class VeterinaireController {
    private $veterinaireModel;
    private $veterinaireView;

    public function __construct(Veterinaire $veterinaireModel, VeterinaireView $veterinaireView) {
        $this->veterinaireModel = $veterinaireModel;
        $this->veterinaireView = $veterinaireView;
    }

    public function afficherVeterinaire() {
        require "../views/VeterinaireView.php";
    }
}

?>
