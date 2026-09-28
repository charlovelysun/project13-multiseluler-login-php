<?php
session_start();

// Proteksi: Wajib login & role harus 'siswa'
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'siswa') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; margin: 40px; }
        .card { max-width: 600px; margin: auto; background: white; padding: 25px; border-radius: 8px; border-top: 5px solid #28a745; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .badge { background: #28a745; color: white; padding: 4px 8px; border-radius: 4px; font-size: 12px; }
        .btn-logout { display: inline-block; padding: 10px 15px; background: #6c757d; color: white; text-decoration: none; border-radius: 4px; margin-top: 15px; }
    </style>
</head>
<body>

<div class="card">
    <h2>Halaman Dashboard Siswa</h2>
    <p>Selamat datang, <strong><?= htmlspecialchars($_SESSION['nama']); ?></strong> (<span class="badge">SISWA</span>)</p>
    <p>Anda dapat melihat data akademis dan informasi siswa di halaman ini.</p>
    <a href="logout.php" class="btn-logout">Logout</a>
</div>

</body>
</html>