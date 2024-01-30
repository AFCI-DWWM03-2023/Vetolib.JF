

<!-- Page profil veterinaire -->

<div class="profile-container">

    <picture>
        <img src="#" alt="Photo du médecin" class="profile-image">
    </picture>

    <div class="profile-name"><a href="/">Dr. Sophie Lefevre</a></div>
    <div class="profile-description">
        Le Dr. Sophie Lefevre est une vétérinaire passionnée, détenant un doctorat en médecine vétérinaire et se spécialisant dans la médecine des animaux de compagnie. Forte de 15 ans d'expérience, elle est actuellement la propriétaire de la Clinique Vétérinaire Harmony. Sa expertise se distingue dans la chirurgie des tissus mous et la médecine préventive pour animaux de compagnie.
    </div>


    <strong>Horraire</strong>

    <div class="calendar-container">
        <div class="calendar-date"></div>

        <div class="calendar-date">
            <!-- <span>1ER</span> -->
        </div>
        <div class="calendar-date"></div>
        <div class="calendar-date"></div>
        <div class="calendar-date"></div>
    </div>

    <strong>Choississez l'heure</strong>


    <div class="calendar-hour">
        <span class="heure">14:00 - 16:00</span>
        <span class="heure">14:00 - 16:00</span>
        <span class="heure">14:00 - 16:00</span>
        <span class="heure">14:00 - 16:00</span>
        
    </div>
    <!-- Ajoutez d'autres dates et heures selon les besoins -->


    <button type="submit" class="search-button">Prendre rendez-vous</button>

</div>



<?php
$content = ob_get_clean();
require "template.php";
?>