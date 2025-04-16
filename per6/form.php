<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Rute Penerbangan</title>
</head>
<body>
    <h2>Form Pendaftaran Rute Penerbangan</h2>
    <form action="proses.php" method="POST">
        <label>Nama Maskapai:</label><br>
        <input type="text" name="maskapai" required><br><br>

        <label>Bandara Asal:</label><br>
        <select name="asal" required>
            <?php
            $bandara_asal = [
                "Soekarno Hatta" => 65000,
                "Husein Sastranegara" => 50000,
                "Abdul Rachman Saleh" => 40000,
                "Juanda" => 30000
            ];

    
            ksort($bandara_asal);
            foreach ($bandara_asal as $nama => $pajak) {
                echo "<option value=\"$nama\">$nama</option>";
            }
            ?>
        </select><br><br>

        <label>Bandara Tujuan:</label><br>
        <select name="tujuan" required>
            <?php
            $bandara_tujuan = [
                "Ngurah Rai" => 85000,
                "Hasanuddin" => 70000,
                "Inanwatan" => 90000,
                "Sultan Iskandar Muda" => 60000
            ];

            ksort($bandara_tujuan);
            foreach ($bandara_tujuan as $nama => $pajak) {
                echo "<option value=\"$nama\">$nama</option>";
            }
            ?>
        </select><br><br>

        <label>Harga Tiket (tanpa pajak):</label><br>
        <input type="number" name="harga_tiket" required><br><br>

        <input type="submit" value="Daftar Penerbangan">
    </form>
</body>
</html>
