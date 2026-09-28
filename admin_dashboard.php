<?php
session_start();

// Proteksi: Wajib login & role harus 'admin'
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; margin: 40px; }
        .card { max-width: 600px; margin: auto; background: white; padding: 25px; border-radius: 8px; border-top: 5px solid #dc3545; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .badge { background: #dc3545; color: white; padding: 4px 8px; border-radius: 4px; font-size: 12px; }
        .btn-logout { display: inline-block; padding: 10px 15px; background: #6c757d; color: white; text-decoration: none; border-radius: 4px; margin-top: 15px; }
    </style>
</head>
<body>

<div class="card">
    <h2>Halaman Dashboard Administrator</h2>
    <p>Selamat datang, <strong><?= htmlspecialchars($_SESSION['nama']); ?></strong> (<span class="badge">ADMIN</span>)</p>
    <p>Anda memiliki hak akses penuh untuk mengelola seluruh sistem sekolah.</p>
    <a href="logout.php" class="btn-logout">Logout</a>
</div>

</body>
</html>