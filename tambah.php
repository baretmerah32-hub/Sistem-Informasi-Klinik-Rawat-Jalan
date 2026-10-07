<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $nama_obat = $_POST['nama_obat'];
    $kategori_obat = $_POST['kategori_obat'];
    $sediaan = $_POST['sediaan'];
    $pabrikan = $_POST['pabrikan'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO obat 
              (nama_obat, kategori_obat, sediaan, pabrikan, stok, harga)
              VALUES 
              ('$nama_obat', '$kategori_obat', '$sediaan', '$pabrikan', '$stok', '$harga')";

    mysqli_query($koneksi, $query);

    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat - Katalog Farmasi</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <header class="header">
            <div>
                <h1>Klinik Rawat Jalan</h1>
                <p>Modul Katalog Farmasi</p>
            </div>
        </header>

        <div class="content">

            <a href="index.html" class="back-link">← Kembali ke Katalog</a>

            <div class="page-title">
                <h2>Tambah Data Obat</h2>
                <p>Isi informasi obat yang akan ditambahkan ke katalog.</p>
            </div>

            <form class="form-card">

                <div class="form-group full">
                    <label for="nama-obat">Nama Obat</label>
                    <input 
                        type="text" 
                        id="nama-obat"
                        placeholder="Contoh: Paracetamol 500mg"
                    >
                </div>

                <div class="form-row">

                    <div class="form-group">
                        <label for="kategori">Kategori Obat</label>

                        <select id="kategori">
                            <option value="">Pilih kategori</option>
                            <option>Analgesik</option>
                            <option>Antibiotik</option>
                            <option>Vitamin</option>
                            <option>Antipiretik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sediaan">Sediaan</label>

                        <input 
                            type="text"
                            id="sediaan"
                            placeholder="Contoh: Tablet"
                        >
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group">
                        <label for="pabrikan">Pabrikan</label>

                        <input 
                            type="text"
                            id="pabrikan"
                            placeholder="Contoh: Kimia Farma"
                        >
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>

                        <input 
                            type="number"
                            id="stok"
                            placeholder="Contoh: 150"
                        >
                    </div>

                </div>

                <div class="form-group full">
                    <label for="harga">Harga</label>

                    <input 
                        type="number"
                        id="harga"
                        placeholder="Contoh: 5000"
                    >
                </div>

                <div class="form-action">
                    <a href="index.html" class="btn-batal">Batal</a>
                    <button type="submit" class="btn-simpan">Simpan Data</button>
                </div>

            </form>

        </div>

    </div>

</body>
</html>