
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
    <link rel="stylesheet" href="/public/Css/connexion.css">
    <title>Connexion</title>
</head>

<body>

    <section>
        <div></div>
        
        <div>
            <div class="login-container">

                <a class="a1" href="<?=URL?>accueil"><img src="/public/image/logo1.png" alt="logo"></a>
            
                <form method="POST" action="<?=URL?>login">
                    <input type="email" name="emailUtilisateur" placeholder="Adresse mail" id="am" autocomplete="off" required>
                    <input type="password" name="mdpUtilisateur" placeholder="Mot de passe" id="mdp" autocomplete="off" required>
                    <article>
                        <p><a href="#">Mot de passe oublié ?</a></p>
                    </article>
                    <article>
                        <button type="submit">Se connecter</button>
                        <p>Vous n’avez pas de compte ? <a href="<?=URL?>inscription">S’inscrire</a></p>
                    </article>
                </form>

            </div>

        </div>
    </section>

</body>

</html>