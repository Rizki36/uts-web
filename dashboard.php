<?php require_once("./helper/index.php") ?>
<?php useAuth() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
    <?php require_once('./layouts/header.php') ?>

    <section class="welcome">
        <div class="img-container dark-hover">
            <div style="position: absolute;bottom: 0;">
                <h1 class="img-title text-white text-center">Selamat Datang</h1>
                <p class="img-description text-white text-center" style="padding: 30px;padding-top: 0;">Lorem ipsum
                    dolor, sit amet
                    consectetur adipisicing
                    elit.
                    Necessitatibus facilis
                    voluptatibus
                    repellendus, non ad, repellat quia, eligendi voluptate quis aperiam repudiandae unde sint animi
                    quidem
                    magni ducimus ea sequi illum. Asperiores sit consequatur quasi maxime sequi eius necessitatibus
                    quaerat
                    dolorem sint in natus mollitia accusantium ducimus qui, impedit debitis odit.</p>
            </div>
        </div>
    </section>

    <?php require_once("./layouts/footer.php") ?>
</body>

</html>