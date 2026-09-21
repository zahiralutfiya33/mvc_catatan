<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kelola kategori</title>
    <link rel="stylesheet" href="public/css/kategori.css">
    <style>
        body {
            display: block;
        }
    </style>
</head>

<body>
    <?php
    include "app/views/components/nav.php";
    ?>
    <div class="container" style="margin-top: 80px;">
        <div class="card">
            <h2>Daftar kategori</h2>
            <a href="index.php?act=kategori-tambah" class="btn btn-primary">Tambah</a>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kategori</th>
                        <th>Dibuat Oleh</th>
                        <th style="text-align: center; width: 200px;">Aksi</th>
                    </tr>
                </thead>
        <tbody>
            <?php if (isset($_SESSION['success_msg'])): ?>
                <div class="success-message">
                    <?= $_SESSION['success_msg']; ?>
                </div>
                <?php
                unset($_SESSION['success_msg']);
                ?>
            <?php endif; ?>


            <?php
            $no = 1;
            if (!empty($data_kategori) > 0):
                foreach ($data_kategori as $row): ?>
                    <tr>
                        <td style="text-align: center; width: 50px;">
                            <?=$no ?>
                        </td>
                        <td>
                            <?=$row['nama_kategori'] ?>
                        </td>
                        <td>
                            <?=$row['nama_admin'] ?>
                        </td>
                        <td>
                            <a href="index.php?act=kategori-edit&id=<?= $row['id'] ?>"
                            class="btn-red">Edit</a>
                            <a href="index.php?act=kategori-hapus&id=<?= $row['id'] ?>" class="btn-red"
                                onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                $no++;
                endforeach; ?>

                <?php else: ?>
                    <tr>
                        <td colspan="3" style="text-align:center;">Belum ada kategori.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>