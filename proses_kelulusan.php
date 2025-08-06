<?php
// Mendapatkan data dari form siswa
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$nomor_hp = $_POST['nomor_hp'];
$email = $_POST['email'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat_orang_tua = $_POST['alamat_orang_tua'];
$pekerjaan = $_POST['pekerjaan'];
$penghasilan = $_POST['penghasilan'];
$nomor_hp_orang_tua = $_POST['nomor_hp_orang_tua'];
$data_ijazah = $_POST['data_ijazah'];
$data_nisn = $_POST['data_nisn'];

// Membuka file CSV untuk append
$file = fopen('data_siswa.csv', 'a');

// Menyimpan data ke file CSV
fputcsv($file, array($nama, $nik, $tempat_tanggal_lahir, $jenis_kelamin, $alamat, $nomor_hp, $email, $nama_ayah, $nama_ibu, $alamat_orang_tua, $pekerjaan, $penghasilan, $nomor_hp_orang_tua, $data_ijazah, $data_nisn));

// Menutup file
fclose($file);

// Redirect atau memberikan pesan sukses
header("Location: halaman_sukses.php");
exit();
?>
