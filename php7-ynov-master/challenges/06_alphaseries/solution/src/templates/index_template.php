<!doctype html>
<html lang="fr">
<head>    
    <title>AlphaSeries - Accueil</title>
    
    <?php include(__DIR__.'/layout/head_metas.php'); ?>
</head>
<body>
    <?php include(__DIR__.'/layout/menu.php'); ?>
    
    <main role="main">
        <!-- Header -->
        <div class="jumbotron" style="position: relative">
            <div class="jumbotron-background" style="background-image: url('<?= $randomShow['images']['banner'] ?>');"></div>
            <div class="container">
                <h1 class="display-3">AlphaSeries</h1>
                <p>Retrouvez les meilleures séries TV !</p>
            </div>
        </div>
        
        <!-- Contenu -->
        <div class="container">
            <div class="row">
                
                <!-- Les 3 séries les plus populaires -->
                <div class="col-md-6">
                    <h2><i class="fa fa-fire"></i> Les plus populaires</h2>
                    <p>Les séries qui sont suivient par le plus de monde.</p>
                    
                    <?php $rank = 1; ?>
                    <?php foreach ($mostPopularShows as $show) { ?>
                        <p>
                            <div class="card">
                              <img class="card-img-top" src="<?= $show['images']['banner'] ?>">
                              <div class="card-body">
                                  <h5 class="card-title">
                                      #<?= $rank++ ?> -
                                      <a href="serie.php?slug=<?= $show['slug'] ?>"><?= $show['name'] ?></a>
                                  </h5>
                                  <p class="card-text"><?= number_format($show['statistics']['popularity'], 0, '.', ' '); ?> personnes regardent cette série.</p>
                              </div>
                            </div>
                        </p>
                    <?php } ?>
                    <p>
                        <a class="btn btn-outline-secondary" href="classement.php?sort=popularity" role="button">
                            <i class="fa fa-trophy"></i> Voir tout le classement
                        </a>
                    </p>
                </div>
                    
                <!-- Les 3 séries les mieux notées -->
                <div class="col-md-6">
                    <h2><i class="fa fa-star"></i> Les mieux notées</h2>
                    <p>Les séries qui ont eu les meilleures notes.</p>
                    
                    <?php $rank = 1; ?>
                    <?php foreach ($bestRatedShows as $show) { ?>
                        <p>
                            <div class="card">
                                <img class="card-img-top" src="<?= $show['images']['banner'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        #<?= $rank++ ?> -
                                        <a href="serie.php?slug=<?= $show['slug'] ?>"><?= $show['name'] ?></a>
                                    </h5>
                                    <p class="card-text">
                                        <i class="fa fa-star text-info"></i> La série est notée <?= round($show['statistics']['rating'], 2) ?> / 5
                                    </p>
                                </div>
                            </div>
                        </p>
                    <?php } ?>
                    <p>
                        <a class="btn btn-outline-secondary" href="classement.php?sort=rating" role="button">
                            <i class="fa fa-trophy"></i> Voir tout le classement
                        </a>
                    </p>
                </div>
            </div>
            
            <hr>
        </div>
    </main>
    
    <?php include(__DIR__.'/layout/footer.php'); ?>
</body>
</html>
