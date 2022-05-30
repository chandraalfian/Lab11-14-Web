<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <img src="alfanshaabif.JPG" title="Veno Setyoaji Wiratama" alt="Veno Setyoaji Wiratama" class="image-circle" width="200" style="float: left; border: 2px solid black;">
            <h1>Hello!</h1>
            <p>Nama saya Alfansha Abiftyo Hadyatama, Saya adalah seorang mahasiswa Universitas Pelita Bangsa Jurusan Teknik Informatika. Saya lahir di Majalengka, 29 Desember 2000.
            </p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>