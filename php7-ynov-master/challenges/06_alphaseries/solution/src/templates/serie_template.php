<!doctype html>
<html lang="fr">
<head>    
    <title>AlphaSeries - Fiche <?= $show['name'] ?></title>
    
    <?php include(__DIR__.'/layout/head_metas.php'); ?>
</head>
<body>
    <?php include(__DIR__.'/layout/menu.php'); ?>
    
    <main role="main">
        <!-- Header -->
        <div class="jumbotron" style="position: relative">
            <div class="jumbotron-background" style="background-image: url('<?= $show['images']['banner'] ?>');"></div>
            <div class="container">
                <h1 class="display-3"><?= $show['name'] ?></h1>
            </div>
        </div>
        
        <!-- Contenu -->
        <div class="container">
            <div class="row">
                
                <!-- Poster de la série -->
                <div class="col-md-3 d-none d-md-block">
                    <img src="<?= $show['images']['poster'] ?>" alt="Poster de <?= $show['name'] ?>" class="img-thumbnail">
                </div>
                
                <!-- Fiche série -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?= $show['name'] ?>
                                
                                <!-- Affichage de la note avec le bon nombre d'étoiles et un tooltip -->
                                <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="<?= round($show['statistics']['rating'], 2) ?>">
                                    <?php htmlStars($show['statistics']['rating']) ?>
                                </span>
                            </h4>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?php
                                    $seasonCount = $show['statistics']['season_count'];
                                    print $seasonCount === 1 ? "1 saison" : $seasonCount." saisons";
                                ?>,
                                <?php
                                     $episodeCount = $show['statistics']['episode_count'];
                                     print $episodeCount === 1 ? "1 épisode" : $episodeCount." épisodes";
                                ?>
                             </h6>
                            <h5>
                                <?= prettyNumber($show['statistics']['popularity']); ?> personnes suivent la série
                            </h5>
                            <p>
                                <?php foreach ($show['genres'] as $genre) { ?>
                                    <span class="badge badge-secondary"><?= $genre ?></span>
                                <?php } ?>
                                <small>sortie en <?= $show['release_year'] ?> chez <?= $show['network'] ?></small>
                            </p>
                            <p class="card-text">
                                <?= $show['synopsis'] ?>         
                            </p>
                            <a target="_blank" href="https://www.betaseries.com/serie/<?= $show['slug'] ?> " class="card-link">
                                <i class="fa fa-external-link-alt"></i>
                                Voir la fiche sur BetaSeries
                            </a>
                        </div>
                    </div>
                    <?php if (isset($show['youtube_id'])) { ?>
                        <br />
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">
                                    <i class="fab fa-youtube"></i> Bande annonce
                                </h5>
                            </div>
                            <div class="embed-responsive embed-responsive-21by9">
                                <!-- Vidéo youtube, pensez à remplacer opRwgY7RDP0 par l'id youtube de la vidéo -->
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $show['youtube_id'] ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            <hr>
        </div>
    </main>
    
    <?php include(__DIR__.'/layout/footer.php'); ?>
</body>
</html>
