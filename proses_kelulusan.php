<?php
// Ambil data dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$nilai = $_POST['nilai'];

// Menentukan status kelulusan
$status = ($nilai >= 75) ? 'Lulus' : 'Tidak Lulus';

// Simpan ke file CSV
$file = fopen("data_siswa.csv", "a");
fputcsv($file, [$nama, $nis, $nilai, $status]);
fclose($file);

// Tampilkan hasil
echo "<h1>Hasil Pendaftaran</h1>";
echo "Nama: $nama <br>";
echo "NIS: $nis <br>";
echo "Nilai: $nilai <br>";
echo "<strong>Status: $status</strong><br><br>";

echo '<a href="siswa.html">Kembali ke Form</a>';
?>
