<?php
include "includes/functions.php";
$page = "Accueil";
?>
<!DOCTYPE html>
<html>
    <?php include "includes/header.php" ?>
    <div class="main-content home-page">
        <div class="container">
            <form action="jobs.php" method="GET" class="row home-filter">
                    <input type="text" name="keywords" placeholder="Mots clés séparés par virgules" class="form-control">
                    <select class="selectpicker " name="categorie">
                        <option value="">Categorie</option>
                        <?php getCategoriesList() ?>
                    </select>
                    <select class="selectpicker" data-live-search="true" name="localite">
                        <option value="">Localité</option>
                        <?php getCitiesList() ?>
                    </select>
                    <button class="search-btn"><i class="far fa-search"></i>Rechercher</button>
            </form>
            <h4 class="num_jobs_home"><span><?= getTotalJobsNumber() ?></span> offres d'emploi publiées</h4>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
</html>