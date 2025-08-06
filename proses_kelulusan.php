<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link stylesheet untuk penyesuaian tampilan -->
</head>
<body>
    <header>
        <h1>Portal Admin</h1>
        <nav>
            <ul>
                <li><a href="#view-data-siswa">Lihat Data Siswa</a></li>
                <li><a href="#kelulusan">Kelulusan Siswa</a></li>
                <li><a href="#logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="view-data-siswa">
            <h2>Data Siswa</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Tempat & Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Nomor HP</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Siswa akan diisi di sini -->
                    <tr>
                        <td>Contoh Nama</td>
                        <td>1234567890123456</td>
                        <td>Jakarta, 1 Januari 2000</td>
                        <td>Laki-laki</td>
                        <td>Jl. Contoh No. 1</td>
                        <td>08123456789</td>
                        <td>siswa@example.com</td>
                    </tr>
                    <!-- Tambahkan data siswa lainnya -->
                </tbody>
            </table>
        </section>

        <section id="kelulusan">
            <h2>Kelulusan Siswa</h2>
            <form action="proses_kelulusan.php" method="POST">
                <label for="siswa_id">Pilih Siswa:</label>
                <select id="siswa_id" name="siswa_id">
                    <option value="1">Contoh Nama 1</option>
                    <option value="2">Contoh Nama 2</option>
                    <!-- Tambahkan pilihan siswa lainnya -->
                </select>
                
                <label for="status_kelulusan">Status Kelulusan:</label>
                <select id="status_kelulusan" name="status_kelulusan">
                    <option value="lulus">Lulus</option>
                    <option value="tidak_lulus">Tidak Lulus</option>
                </select>
                
                <button type="submit">Proses Kelulusan</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Portal Admin</p>
    </footer>
</body>
</html>
