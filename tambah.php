<link rel="stylesheet" href="public/css/tambah_kategori.css">

<body>
    <?php
    include "app/views/components/nav.php";
    ?>
    <div class="container" style="margin-top: 80px;">
        <div class="card">
            <h2>Tambah Kategori</h2>
            <a href="index.php?act=kategori" class="btn btn-primary">Kembali</a>

            <?php if (isset($_SESSION['error_msg'])): ?>

                <div class="error-message">
                    <?= $_SESSION['error_msg']; ?>
                </div>
                <?php
                unset($_SESSION['error_msg']);
                ?>
            <?php endif; ?>
            <form action="index.php?act=kategori-tambah-proses" method="POST" style="margin-top: 20px;">
                <input type="text" name="nama_kategori" placeholder="Nama Kategori Baru" required
                    style="width: 300px; padding: 5px;">
                <button type="submit" style="padding: 5px;">Tambah</button>
            </form>
        </div>
    </div>
</body>