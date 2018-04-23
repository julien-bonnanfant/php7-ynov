<!doctype html>
<html lang="fr">
<head>    
    <title>AlphaSeries - Classement</title>
    
    <?php include(__DIR__.'/layout/head_metas.php'); ?>
</head>
<body>
    <?php include(__DIR__.'/layout/menu.php'); ?>
    
    <!-- Contenu -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="page-title">
                    <i class="fa fa-trophy"></i> Classement
                </h2>
                <p>
                    <?php if ($sort === 'popularity') { ?>
                        Séries les plus populaires <i class="fa fa-fire"></i>
                    <?php } else { ?>
                        Séries les mieux notées <i class="fa fa-star"></i>
                    <?php } ?>
                </p>
                
                <!-- Tableau des résultats du classement -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Série</th>
                            <th scope="col">
                                Note
                                <?php if ($sort === 'rating') { ?>
                                    <i class="fa fa-sort-down"></i>
                                <?php } else { ?>
                                    <a href="classement.php?sort=rating"><i class="fa fa-sort-down"></i></a>
                                <?php } ?>
                            </th>
                            <th scope="col">
                                Nombre de personnes qui regardent
                                <?php if ($sort === 'popularity') { ?>
                                    <i class="fa fa-sort-down"></i>
                                <?php } else { ?>
                                    <a href="classement.php?sort=popularity"><i class="fa fa-sort-down"></i></a>
                                <?php } ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $rank = $start + 1; ?>
                        <?php foreach ($sortedShows as $show) { ?>
                            <tr>
                                <th scope="row"><?= $rank++ ?></th>
                                <td>
                                    <a href="serie.php?slug=<?= $show['slug'] ?>">
                                        <?= $show['name'] ?>
                                    </a>
                                </td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="<?= round($show['statistics']['rating'], 2) ?>">
                                        <?php htmlStars($show['statistics']['rating']) ?>
                                    </span>
                                </td>
                                <td><?= prettyNumber($show['statistics']['popularity']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
                <!-- BONUS Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php if ($page > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="classement.php?sort=<?= $sort ?>&page=<?= $page - 1 ?>">
                                    &laquo;
                                </a>
                            </li>
                        <?php } ?>
                        
                        <?php for ($i = $page - 2; $i <= $page + 2; $i++) { ?>
                            <?php if ($i > 0 && $i <= $pageCount) { ?>
                                <li class="page-item <?php if ($i === $page) { print 'active'; } ?>">
                                    <a class="page-link" href="classement.php?sort=<?= $sort ?>&page=<?= $i ?>">
                                        <?= $i ?>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        
                        <?php if ($page < $pageCount) { ?>
                            <li class="page-item">
                                <a class="page-link" href="classement.php?sort=<?= $sort ?>&page=<?= $page + 1 ?>">
                                    &raquo;
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
        
        <hr>
    </main>
    
    <?php include(__DIR__.'/layout/footer.php'); ?>
</body>
</html>
