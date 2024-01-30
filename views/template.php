<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@300;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&family=Poppins:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/public/Css/style.css">
    <title>Veterinaire - Rendez-vous</title>
</head>

<body>
    <header>
        <div class="logo">
            <img class="empreinte" src="image/VETOLIB__1_-removebg-preview.png" alt="">
            <p>VETO<span>LIB</span> </p>
        </div>
        <div class="profile">
            <span>Bienvenue, Nom Utilisateur</span>
            <!-- Ajoutez ici des liens vers le profil, la déconnexion, etc. -->
        </div>
    </header>

    <!-- barre de recherche -->

    <div class="search">
        <input type="text" class="searchTerm" placeholder="Rechercher Doctor, service, clinique ..." />
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>

    <!-- trait de separation -->
    <hr class="separator">

    <!-- barre de navigation -->

    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="veterinaire.php">Vétérinaire</a></li>
            <li><a href="#">Calendrier</a></li>
            <li><a href="#">Profil</a>
            </li>
        </ul>
    </nav>


    <div class="contenu">
        <?= $content ?>
    </div>


</body>

</html>