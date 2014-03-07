<div class="wrap">
    <img src="<?php echo $sportif->images_sportif; ?>" alt="{name}" class="profil">
    <div class="infos">
        <h2><?php echo $sportif->prenom_sportif ?>&nbsp<?php echo $sportif->nom_sportif ?></h2>
        <p class="label">sports</p>
        <p><?php echo $sportif->sport_sportif ?></p>
        <p class="label">mensurations</p>
        <p>97 kg - 1,72m</p>
        <p class="label">ville</p>
        <p>Bagnolet(93) - Île de France</p>
    </div>
    <a href="ficheSportif/<?php echo $sportif->id_sportif; ?>" class="btn">voir la fiche complète &nbsp&nbsp&nbsp<i class="icon-chevron_right"></i></a>
</div>