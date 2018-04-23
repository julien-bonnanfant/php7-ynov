<?php
    // on veut déterminer quel menu est actif
    $phpScript = basename($_SERVER['SCRIPT_NAME']);
    
    $activeMenu = null;
    switch ($phpScript) {
        case 'index.php':
            $activeMenu = 'accueil';
            break;
        case 'classement.php':
            $activeMenu = 'classement';
            break;
        case 'serie.php':
            $activeMenu = 'aleatoire';
            break;
    }
    
    $menus = [
        'accueil' => [
            'href' => 'index.php',
            'label' => 'Accueil',
            'icon' => 'fa-home',
        ],
        'classement' => [
            'href' => 'classement.php',
            'label' => 'Classement',
            'icon' => 'fa-trophy',
        ],
        'aleatoire' => [
            'href' => 'serie_aleatoire.php',
            'label' => 'Une série aléatoire',
            'icon' => 'fa-random',
        ],
    ];
?>

<!-- Barre de navigation -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.html">AlphaSeries</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Menu principal -->
    <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="navbar-nav mr-auto">
            <?php foreach ($menus as $menuKey => $menu) { ?>
                <li class="nav-item <?php if ($menuKey === $activeMenu) print 'active'; ?>">
                    <a class="nav-link" href="<?= $menu['href'] ?>">
                        <i class="fa <?= $menu['icon'] ?>"></i> <?= $menu['label'] ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
        
        <!-- Formulaire de recherche -->
        <form action="recherche.php" method="post" class="form-inline my-2 my-lg-0">
            <input 
                name="search"
                class="form-control mr-sm-2"
                type="text"
                placeholder="Rechercher une série"
                aria-label="Rechercher une série"
                <?php 
                    if (isset($_POST['search'])) {
                        print sprintf('value="%s"', $_POST['search']);
                    } 
                ?>
            >
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                <i class="fa fa-search"></i> <span class="d-md-none">Rechercher</span>
            </button>
        </form>
    </div>
</nav>
