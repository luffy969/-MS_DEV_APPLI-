<?php
// on importe le contenu du fichier "db.php"
    include("db.php");
    // on exécute la méthode de connexion à notre BDD
    $db = ConnexionBase();
    // on lance une requête pour chercher toutes les infos
    $request = $db->prepare("SELECT * FROM disc JOIN artist ON artist.artist_id = disc.artist_id");
    $request->execute();
    // on clôt la requête en BDD
    $discs = $request->fetchAll(PDO::FETCH_OBJ);
    //var_dump($discs);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Disques</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <h1 class="d-block col-6">Liste des disques (<?=count($discs)?>)</h1>
            <a href="disc_new.php" class="btn btn-primary offset-2 col-4 offset-lg-4 col-lg-2 h-50 w-fit">Ajouter</a>
        </div>
        <div class="row g-2">
            <?php foreach($discs as $disc) : ?>            
                <img class="col-6 col-lg-3" src="img/<?= $disc->disc_picture ?>" height="auto" width="300">
                <div class="col-6 col-lg-3"><h4><?= $disc->disc_title ?> </h4>

                
                <p class="label"><?= $disc->artist_name ?></p>
                <p class="label">Label : <?= $disc->disc_label ?></p>
                <p class="label">Année : <?= $disc->disc_year ?></p>
                <p class="label">Genre : <?= $disc->disc_genre ?></p>
                <p class="label">Prix : <?= $disc->disc_price ?></p>

                    <a href="disc_detail.php?disc_id=<?= $disc->disc_id ?>" class="btn btn-primary d-block mt-3 w-25">Détails</a>
                    
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>