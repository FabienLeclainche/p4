<header>
    <div class="row">
        <nav class="navbar">
            <div class="title col-lg-6">
                <a href="index.php?action=accueil">Billet simple pour l'Alaska</a>
            </div>
            <div class="dropdown col-lg-6 col-xs-1">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    Menu
                </button>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="index.php?action=accueil">Accueil</a>
                    <?php
                    foreach ($postsMenu as $postMenu) {
                        ?>
                        <a class="dropdown-item"
                           href="index.php?action=post_detail&post_id=<?php echo $postMenu->getId(); ?>"><?php echo $postMenu->getTitle(); ?></a>
                        <?php
                    }
                    ?>
                </div>
                </div>
        </nav>
    </div>
</header>

