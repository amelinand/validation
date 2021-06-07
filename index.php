<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Accueil</title>
</head>

<body>
    <?php require './templates/header.php' ?>
    <main>

            <h1>Passion Cross!</h1>
            <?php if(isset($_POST['present'])): ?>
                <p>Bienvenue sur notre groupe de passionnées de moto cross!</p>
                    <p>Passion Cross vous tiens informer de toutes les nouveautées sur le monde du Cross</p>
            <?php endif ?>
            
            <?php if(isset($_POST['moto'])): ?>
                <h1>Les motos du moment</h1>
                <?php foreach($_POST['moto'] as $img): ?>
                <img  src="<?= $img ?>" alt="">
                <?php endforeach ?>
            <?php endif ?>

            <?php if(isset($_POST['helmet'])): ?>
                <h1>Les casques du moment</h1>
                <?php foreach($_POST['helmet'] as $img): ?>
                <img  src="<?= $img ?>" alt="">
                <?php endforeach ?>
            <?php endif ?>


    </main>
    <?php require './templates/footer.php' ?>
</body>

</html>