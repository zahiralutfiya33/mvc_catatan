<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register admin</title>
    <link rel="stylesheet" href="public/css/register.css">
</head>
<body>
    <div class="container">
    <div class="card">
        <div class="card-header">Register Admin Baru</div>

        <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>";?>

        <form action="index.php?act=register-process" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn" style="background-color: #8b0000;">Daftar</button>
</form>
<hr>
<a href="index.php" class="text-center">Sudah punya akun? login</a>
</div>
</div>
</body>
</html>