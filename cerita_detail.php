<?php
// Array konten sejarah bangunan kolonial di Jambi
$ceritaList = [
    1 => [
        "judul" => "Douanekantoor te Djambi",
        "gambar" => "doukantor-jambi.png",
        "deskripsi" => "
            Douanekantoor te Djambi adalah kantor Bea Cukai kolonial Belanda yang bertugas mengawasi seluruh kegiatan ekspor dan impor di wilayah Jambi pada masa Hindia Belanda.
            Kantor Bea Cukai ini mengatur proses pemeriksaan barang-barang dagang seperti karet, kopi, damar, rotan, dan hasil hutan lain yang menjadi komoditas utama Jambi.
            Douanekantoor dibangun di dekat Sungai Batanghari karena sungai merupakan jalur transportasi dan perdagangan utama saat itu.
            Bangunan ini menjadi pusat pengendalian perdagangan kolonial yang sangat penting bagi Belanda dalam menjaga arus komoditas dari Jambi.
            KITLV Leiden menyimpan foto-foto lama Douanekantoor yang menunjukkan aktivitas petugas dan kondisi bangunan pada zaman kolonial.
        ",
    ],
    2 => [
        "judul" => "Kantoor van de KPM (Kantor KPM di Jambi)",
        "gambar" => "Kantoor-van-de-Koninkijke.png",
        "deskripsi" => "
            Kantoor van de KPM adalah kantor perusahaan pelayaran Belanda Koninklijke Paketvaart Maatschappij yang mengatur jalur transportasi laut dan sungai di wilayah Hindia Belanda termasuk Jambi.
            Kantor ini mengatur keberangkatan kapal, bongkar muat barang, dan distribusi komoditas Jambi melalui Sungai Batanghari.
            Perusahaan KPM mengangkut hasil bumi utama Jambi seperti karet dan kopi menuju kota-kota seperti Batavia, Padang, serta ke Singapura.
            Kantor ini juga menjadi pusat masuknya berbagai barang impor yang kemudian disalurkan ke pasar-pasar di Jambi.
            Arsip KITLV Leiden banyak memuat foto kapal-kapal KPM yang beroperasi di jalur sungai Jambi sebagai bukti peran pentingnya dalam ekonomi kolonial.
        ",
    ],
    3 => [
        "judul" => "Kantoor van het MHV (Maatschappij tot Handel en Vervoer)",
        "gambar" => "Kantoor-van-het-oluksche.png",
        "deskripsi" => "Kantoor van het MHV adalah kantor perusahaan dagang dan transportasi besar yang bertugas mengumpulkan dan menyalurkan hasil bumi dari pedalaman Jambi ke pusat perdagangan kolonial.
            Perusahaan MHV memiliki fasilitas penyimpanan berupa gudang besar untuk menampung komoditas seperti karet dan hasil hutan sebelum dikirim melalui kapal.
            MHV menjadi perantara perdagangan antara pedagang lokal, petani, dan pemerintah kolonial dalam sistem distribusi yang terorganisir.
            Aktivitas MHV sangat berpengaruh dalam memperkuat jaringan perdagangan Belanda di Jambi khususnya untuk komoditas ekspor.
            KITLV Leiden menyimpan dokumentasi visual yang menunjukkan bangunan kantor MHV dan aktivitas perdagangannya di wilayah Jambi.
        ",
    ],
    4 => [
        "judul" => "Kantoor van de BHSM (Banka Handelsmaatschappij)",
        "gambar" => "Kantoor-van-de-BHSM.png",
        "deskripsi" => "
            Kantoor van de BHSM adalah kantor perusahaan perdagangan swasta Belanda yang beroperasi di Jambi dan bergerak dalam pembelian hasil bumi serta penjualan barang-barang impor.
            Perusahaan BHSM membeli komoditas seperti karet, rotan, dan damar langsung dari pedagang maupun petani lokal untuk kemudian dijual ke pasar kolonial.
            BHSM juga menyediakan berbagai barang impor seperti kain, perlengkapan rumah tangga, alat pertanian, serta kebutuhan lainnya bagi masyarakat perkotaan.
            Perusahaan ini bekerja sama dengan jaringan pedagang Melayu dan Tionghoa sehingga aktivitas perdagangannya sangat aktif dan mempengaruhi ekonomi lokal.
            Foto-foto arsip KITLV menunjukkan gedung kantor dan gudang BHSM yang berlokasi dekat area pelabuhan dan Sungai Batanghari.
        ",
    ],
   5 => [
    "judul" => "Steiger te Djambi",
    "gambar" => "steigher-to-jambi.png",
    "deskripsi" => "Steiger te Djambi adalah dermaga kolonial Belanda yang terletak di tepi Sungai Batanghari, tepatnya di kawasan pelabuhan lama Jambi yang kini berada di sekitar Pasar dan wilayah Pelabuhan Boom Batu.
        ermaga ini berfungsi sebagai tempat berlabuhnya kapal uap dan kapal dagang serta menjadi pusat bongkar muat berbagai hasil bumi seperti karet, rotan, kopi, damar, dan lada.
        Pada masa kolonial, Steiger te Djambi menjadi fasilitas penting dalam jaringan transportasi dan perdagangan karena berperan sebagai titik penghubung utama antara pedalaman Jambi dengan kota-kota besar seperti Batavia, Palembang, dan Singapura.
        Dermaga ini juga dikelilingi oleh gudang-gudang penyimpanan, kantor dagang Belanda, serta permukiman pekerja yang membuat kawasan tersebut sangat ramai dan strategis.
        Selain itu, keberadaan Steiger te Djambi ikut mendorong pertumbuhan ekonomi daerah dan menjadi pusat aktivitas masyarakat yang bergantung pada jalur sungai sebagai sarana mobilitas utama."
],

];

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if (!isset($ceritaList[$id])) {
    header("Location: cerita.php");
    exit();
}

$cerita = $ceritaList[$id];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $cerita['judul']; ?> - Sejarah Jambi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="sejarah">
    <div class="center-wrap">
        <div class="glass content-card">
            <a href="cerita.php" class="back">&larr; Kembali ke Daftar Sejarah</a>

            <h1><?= $cerita['judul']; ?></h1>

            <img src="<?= $cerita['gambar']; ?>" alt="Gambar - <?= $cerita['judul']; ?>"
                style="width:100%; max-width:420px; border-radius:12px; margin-bottom:18px;">

            <p class="entry"><?= htmlspecialchars(trim(preg_replace('/\s+/', ' ', $cerita['deskripsi']))); ?></p>

            <hr style="margin:20px 0; opacity:0.3;">

            <p><strong>Kesimpulan:</strong><br>
                Pada masa kolonial, perekonomian Jambi bergantung pada komoditas seperti karet, kopi, rotan, damar, dan
                rempah-rempah yang semuanya dikirim melalui Sungai Batanghari. Sungai ini menjadi pusat aktivitas
                ekonomi dan mobilitas masyarakat.
            </p>

            <div class="nav-btn">
                <a href="cerita.php" class="back">⬅ Daftar Sejarah</a>
                <a href="index.php" class="back">🏠 Beranda</a>
            </div>
        </div>
    </div>
</body>

</html>