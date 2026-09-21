<?php
if(!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}
?>

<link rel="stylesheet" href="public/css/nav.css">
<nav class="navbar">
    <a class="navbar-brand" href="index.php?act=dashboard">Notes App</a>

    <div>
        <a href="index.php?act=dashboard" class="btn-danger" style="margin-right:10px;">
            Dashboard
        </a>

        <a href="index.php?act=kategori" class="btn-danger" style="margin-right:10px;">
            Kategori
        </a>

        <a href="index.php?act=catatan" class="btn-danger" style="margin-right:10px;">
            Catatan
        </a>

        <a href="index.php?act=logout" class="btn-danger" style="margin-right:10px;">
            Logout
        </a>
    </div>
</nav>