<?php session_start()?>


<header>
    <nav class="position-sticky">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <?php  if(isset($_SESSION['pseudo'])) : ?>
                <li><a href="acces.php">Formulaire</a></li>
                <ul class="display">
                    <li class="none"><a>Bonjour <?= $_SESSION['pseudo'] ?></a>
                    <ul class="ghost">
                            <li><a href="./controllers/logout.php">Déconnexion</a></li>
                        </ul>
                    </li>
            </ul>
            <?php else : ?>
                <li><a href="log.php">Connexion</a></li>
            <?php endif ?>

        </ul>
    </nav>
</header>