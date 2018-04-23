<!doctype html>
<html lang="fr">
<head>    
    <title>AlphaSeries - Résultat de la recherche</title>
    
    <?php include(__DIR__.'/layout/head_metas.php'); ?>
</head>
<body>
    <?php include(__DIR__.'/layout/menu.php'); ?>
    <main role="main">
        
        <!-- Contenu -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="page-title">
                        <i class="fa fa-search"></i> Recherche
                    </h2>
                    
                    <?php if ($countSearchShows > 0) { ?>
                        <div class="alert alert-primary" role="alert">
                            Il y a <strong><?= $countSearchShows ?></strong> résultats correspondant à la recherche <strong>"<?= $search ?>"</strong>.
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert">
                            Aucun résultat n'a été trouvé pour la recherche <strong>"<?= $search ?>"</strong>.
                        </div>
                    <?php } ?>
                    
                    
                    <!-- Résultats de la recherche -->
                    <?php foreach ($searchedShows as $show) { ?>
                        <div class="row">
                            <div class="col-md-2 d-none d-md-block">
                                <img src="<?= $show['images']['poster'] ?>" alt="Poster de <?= $show['name'] ?>" class="img-thumbnail">
                            </div>
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="serie.php?slug=<?= $show['slug'] ?>">
                                                <?= $show['name'] ?>
                                            </a>
                                            
                                            <!-- Affichage de la note avec le bon nombre d'étoiles et un tooltip -->
                                            <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                                <?php htmlStars($show['statistics']['rating']) ?>
                                            </span>
                                            
                                            <small><?= prettyNumber($show['statistics']['popularity']) ?> personnes suivent la série</small>
                                        </h4>
                                        <p class="card-text"><?= $show['synopsis'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                    <?php } ?>
                </div>
            </div>
            
            <hr>
        </div>
    </main>
    
    <?php include(__DIR__.'/layout/footer.php'); ?>
</body>
</html>
