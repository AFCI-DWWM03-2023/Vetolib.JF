
<!----------------------------------------------------------------------  LIEN ENTRE TOUTES LES PAGES  ---------------------------------------------------------------------->

<?php

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// require_once "Controller/ChaussureController.php";
// $ChaussureControlleur= new ChaussuresController;

try{
    if (empty($_GET['page'])){
        require_once "views/accueil.php";
    }else{
        $url = explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
        switch($url[0]){
            case "accueil" :
                require "views/accueil.php";
                break;
            // case "articles" :
            //     if(empty($url[1])){
            //         $ChaussureControlleur->afficherChaussures();
            //     }elseif ($url[1]="l"){
            //         $ChaussureControlleur->afficherChaussure($url[2]);
            //     }else{
            //         throw new Exception("La page n'existe pas");
            //     }
            //     break;
            // case "c":
            //     if(empty($url[1])){
            //         $ChaussureControlleur->afficherChaussuresAdmin();
            //     }elseif ($url[1]="ac"){
            //         $ChaussureControlleur->ajoutChaussure();
            //     }else{
            //         throw new Exception("La page n'existe pas");
            //     }
            // break;

            case "test":
                if(empty($url[1])){
                    require "views/test.php";
                }
                break;

            case "registration":
                if(empty($url[1])){
                    require "Models/registration.php";
                }
                break;
                
            case "login":
                if(empty($url[1])){
                    require "Models/login.php";
                }
                break;
                
            case "inscription":
                if(empty($url[1])){
                    require "views/inscription.php";
                }
                break;

            case "connexion":
                if (empty($url[1])){
                    require "views/connexion.php";
                }
                break;

                case "veterinaire":
                    if (empty($url[1])){
                        require "views/veterinaire.php";
                    }
                    break;

            default: throw new Exception("La page n'existe pas");
        }
    }
}catch(Exception $e){
    echo $e->getMessage();
}
