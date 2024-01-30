<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@300;600&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Krub:wght@200;300;400;500;600;700&family=Poppins:wght@300;400;600&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/public/Css/inscription.css">
    <title>Inscription</title>
</head>

<body>


    <section>
        <div></div>
        <div>
            <div class="login-container">
                <a class="a1" href="<?=URL?>accueil"><img src="/public/image/logo1.png" alt="logo" srcset=""></a>
                

                <form method="POST" action="<?=URL?>registration" id="myForm">                            
                        
                        <input type="text" id="nu" name="nomUtilisateur" autocomplete="off" required>
                        <small id="nomtxt"></small>

                        <input type="text" id="pu" name="prenomUtilisateur" autocomplete="off" required>
                        <small id="prenomtxt"></small>

                        <input type="text" placeholder="Adresse mail" id="am" name="emailUtilisateur" required autocomplete="off">
                        <small id="emailtxt"></small>

                        <input type="text" placeholder="Condirmer votre adresse mail" id="cam" name="emailUtilisateur" required autocomplete="off">
                        <small id="confirmemailtxt"></small>

                        <input type="password" placeholder="Mot de passe" id="mdp" name="mdpUtilisateur" required autocomplete="off">
                        <small id="mdptxt"></small>


                        <input type="password" placeholder="Confirmer votre mot de passe" id="cmdp" name="mdpUtilisateur" required autocomplete="off">
                        <small id="cmdptxt"></small>


                        <select name="pets" id="statut" required>
                            <option value="" selected="select">Je suis... *</option>
                            <option value="dog" name="idRole">Je suis professionnel de santé animale</option>
                            <option value="dog" name="idRole">Je suis propriétaire d'un animal </option>
                        </select>

                    <figure>
                        <input type="checkbox" id="cb" class="check-button">
                        <!-- <span class="checkmark"></span> -->
                        <label for="cb" class="check">J'ai lu et j'accepte les <a href="#">CGU</a></label>
                    </figure>

                    <article>
                        <button type="submit" >S'inscrire</button>
                        <p>Vous avez déjà un compte ? <a href="<?=URL?>connexion">Se connecter</a></p>
                    </article>
                </form>

            </div>

        </div>
    </section>

        <script src="/assets/script.js"></script>
</body>

</html>