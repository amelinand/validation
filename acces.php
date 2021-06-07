


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/acces.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Formulaire</title>
</head>
<body>
    <?php require './templates/header.php' ?>
    <main>
        <form action="index.php" method="POST">
            <fieldset>
                <div class="present">
                    <label for="present">Présentation</label>
                    <input type="checkbox" name="present" id="present">
                </div>
                <div>
                    <h1>Les motos du moment</h1>
                </div>
                <div class="img">
                    <input type="checkbox" name="moto[0]" id="img1" value="./img/moto1.jpeg">
                    <img src="./img/moto1.jpeg" alt="moto">
                </div>
                <div class="img">
                    <input type="checkbox" name="moto[1]" id="img2" value="./img/moto2.jpeg">
                    <img src="./img/moto2.jpeg" alt="moto">
                </div>
                <div>
                    <h1>Les Casques du moment</h1>
                </div>
                <div class="helmet">
                    <input type="checkbox" name="helmet[0]" id="helmet1" value="./img/casque1.jpeg">
                    <img src="./img/casque1.jpeg" alt="casque">
                </div>
                <div class="helmet">
                    <input type="checkbox" name="helmet[1]" id="helmet2" value="./img/casque2.jpeg">
                    <img src="./img/casque2.jpeg" alt="casque">
                </div>
            </fieldset>
                <div>
                    <input type="submit" value="envoyer" class="blue_button" >
                </div>
        </form>
    </main>
    <?php require './templates/footer.php' ?>
</body>
</html>