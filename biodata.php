<?php require_once("./helper/index.php") ?>
<?php useAuth() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
    <?php require_once('./layouts/header.php') ?>

    <section style="min-height:80vh;padding: 3rem 10rem;">
        <form action="./biodataPreview.php" method="post">
            <h3 style="text-align: center;margin-bottom: 4rem;">Silahkan Masukkan Biodata Anda</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr;gap: 30px;">
                <div>
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-input" required>
                </div>
                <div>
                    <label for="born">Tempat Lahir</label>
                    <input type="text" name="birthplace" id="birthplace" class="form-input" required>
                </div>
                <div>
                    <label for="birthday">Tanggal Lahir</label>
                    <input type="date" name="birthday" id="birthday" class="form-input" required>
                </div>
                <div>
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-input" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="man">Laki - Laki</option>
                        <option value="woman">Perempuan</option>
                    </select>
                </div>
                <div style="grid-column: 1 / 3;">
                    <label for="address">Alamat</label>
                    <textarea name="address" id="address" rows="5" class="form-input"></textarea>
                </div>
                <div style="grid-column: 1 / 3;">
                    <label for="hobby">Hobi</label>
                    <div style="background-color: white;padding: 1rem;border-radius: 4px;margin: 8px 0;display: flex; gap: 20px;flex-wrap: wrap; ">
                        <label class="label-radio"><input type="checkbox" name="hobby[]" value="programmer">Programmer</label>
                        <label class="label-radio"><input type="checkbox" name="hobby[]" value="designer">Designer</label>
                        <label class="label-radio"><input type="checkbox" name="hobby[]" value="Menulis">Menulis</label>
                        <label class="label-radio"><input type="checkbox" name="hobby[]" value="Membaca">Membaca</label>
                        <label class="label-radio"><input type="checkbox" name="hobby[]" value="Menyanyi">Menyanyi</label>
                        <label class="label-radio"><input type="checkbox" name="hobby[]" value="Lainya">Lainya</label>
                    </div>
                </div>
                <div style="grid-column: 1 / 3;display: flex; justify-content: center; gap: 1rem;">
                    <button class="btn" type="reset">Reset</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </section>

    <?php require_once("./layouts/footer.php") ?>
</body>

</html>