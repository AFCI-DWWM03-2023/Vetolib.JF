<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&family=Poppins:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;600;700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="/public/Css/accueil.css">
    <title>Home</title>
</head>

<body>

    <!-- <div class="barre"></div> -->

    <section>

        <header>
            <div class="logo">
                <img class="empreinte" src="image/VETOLIB__1_-removebg-preview.png" alt="">
                <p>VETO<span>LIB</span> </p>
            </div>
            <!-- <img src="image/logo_plusgrand.png" alt="logo"> -->
            <nav>
                <ul>
                    <li> <a href="<?=URL?>connexion">Connexion</a></li>
                    <li> <a href="<?=URL?>inscription">Rejoindre</a></li>
                    <li> <a href="<?=URL?>template">Prendre rendez-vous</a><img src="image/fleche-alt-droite (1).png" alt=""
                            class="fleche"></li>
                </ul>
            </nav>
        </header>

        <!-- <picture>
            <img class="photo" src="/public/image/dog-1517090_1280.png" alt="">
        </picture> -->


        <div class="recherche">
            <h1>Un clic un veto</h1>
            <p>Sur note site de prise de rendez-vous pour animaux, même les chats sont prêts à abandonner leur
                sieste pour réserver le créneau parfait</p>

            <section class="search-box">

                <input type="text" id="name" name="name" placeholder="Entrez le nom du vétérinaire...">


                <select id="category" name="category">
                    <option value="option1">Choisir l'animal ...</option>
                    <option value="option2">Chien</option>
                    <option value="option3">Chat</option>
                    <option value="option3">Poisson</option>
                    <option value="option3">Autres</option>
                </select>

                <input type="text" id="location" name="location" placeholder="Entrez un emplacement...">
                <button type="submit" class="search-button">GO</button>

            </section>

        </div>

        <!-- METTRE UN FOOTER -->
        <!-- <div class="barre"></div> -->


    </section>


</body>

</html>