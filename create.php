<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Pegawai</title>
</head>
<body>
    <h2>Tambah Pegawai</h2>
    <form action="../process/store.php" method="POST">
        <label>NIP:</label>
        <input type="text" name="nip" required minlength="5" maxlength="20">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Jabatan:</label>
        <input type="text" name="jabatan" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>