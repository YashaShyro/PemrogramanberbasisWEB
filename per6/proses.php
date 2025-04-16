<?php
if (!isset($_POST['maskapai'], $_POST['asal'], $_POST['tujuan'], $_POST['harga_tiket'])) {
    echo "Data belum lengkap. Silakan isi formulir terlebih dahulu.";
    exit;
}

$bandara_asal = [
    "Soekarno Hatta" => 65000,
    "Husein Sastranegara" => 50000,
    "Abdul Rachman Saleh" => 40000,
    "Juanda" => 30000
];


$bandara_tujuan = [
    "Ngurah Rai" => 85000,
    "Hasanuddin" => 70000,
    "Inanwatan" => 90000,
    "Sultan Iskandar Muda" => 60000
];

$maskapai = $_POST['maskapai'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$harga_tiket = $_POST['harga_tiket']; // ini yang tadinya salah



$pajak_asal = $bandara_asal[$asal];
$pajak_tujuan = $bandara_tujuan[$tujuan];
$total_pajak = $pajak_asal + $pajak_tujuan;


$total_harga = $harga_tiket + $total_pajak;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Output Tiket</title>
</head>
<body>
    <h2>Detail Tiket Penerbangan</h2>
    <p><strong>Nama Maskapai:</strong> <?php echo $maskapai; ?></p>
    <p><strong>Asal Penerbangan:</strong> <?php echo $asal; ?></p>
    <p><strong>Tujuan Penerbangan:</strong> <?php echo $tujuan; ?></p>
    <p><strong>Harga Tiket:</strong> Rp<?php echo number_format($harga_tiket, 0, ',', '.'); ?></p>
    <p><strong>Pajak:</strong> Rp<?php echo number_format($total_pajak, 0, ',', '.'); ?></p>
    <p><strong>Total Harga Tiket:</strong> Rp<?php echo number_format($total_harga, 0, ',', '.'); ?></p>
</body>
</html>
