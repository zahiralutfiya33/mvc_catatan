<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="public/css/dashboard.css">
    <style>
    body{
        display: block;
        background-color: #f4f4f9;
    }
</style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">Notes app</a>
        <a href="index.php?act=catatan" class="btn btn-danger">Catatan</a>
        <a href="index.php?act=kategori" class="btn btn-danger">Kategori</a>
        <a href="index.php?act=logout" class="btn btn-danger">Logout</a>
    </nav>

<div class="container-dashboard" style="margin-top: 80px;">
    <div class="card">
    <h3>Selamat Datang, <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Admin'; ?>!</h3> <p>Ini adalah halaman dashboard admin.</p>
    </div>
</div>
</body>
</html>
