<?php $data = $_POST; ?>
<?php require_once("./helper/index.php") ?>
<?php useAuth() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Biodata</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
    <?php require_once('./layouts/header.php') ?>

    <section style="min-height:80vh;padding: 3rem 10rem;">
        <h3 style="text-align: center;margin-bottom: 4rem;">Preview Form Anda</h3>
        <div style="display: grid; grid-template-columns: 1fr;gap: 30px;">
            <div class="container-list">
                <span> Nama </span> : <span><?= $data['name'] ?></span>
            </div>
            <div class="container-list">
                <span> Tempat Lahir </span> : <span><?= $data['birthplace'] ?></span>
            </div>
            <div class="container-list">
                <span> Tanggal Lahir </span> : <span><?= date('d-m-Y', strtotime($data['birthday'])) ?></span>
            </div>
            <div class="container-list">
                <span> Jenis Kelamin </span> : <span><?= $data['gender'] === 'man' ? "Laki-Laki" : ($data['gender'] === 'woman' ? 'Perempuan' : '-') ?></span>
            </div>
            <div class="container-list">
                <span> Alamat </span> : <span><?= $data['address'] ?></span>
            </div>
            <div class="container-list">
                <span> Hobi anda </span> : <span><?= implode(", ", $data['hobby']) ?></span>
            </div>
        </div>
        <div style="margin-top: 2rem;">
            <a href="./biodata.php" class="btn btn-primary">Kembali</a>
        </div>
    </section>

    <?php require_once("./layouts/footer.php") ?>
</body>

</html>