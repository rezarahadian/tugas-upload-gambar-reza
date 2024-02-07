<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="halaman.css">
</head>
<body>
<div class="judul">		
		<h1>SELAMAT DATANG DI WEBSITE BELAJAR PHP REZA RAHADIAN DAN LUTFHAN</h1>
	</div>
    <div class="wrap">
        <div class="container">
    <h2>ANDA TERTARIK BELAJAR PHP BERSAMAKU? SEGERA DAFTARKAN AKUN MU DISINI</H2>
    <form>
        <table>
       
                <td>
                <a class="nav-link" href="logout.php">LOG IN</a>
                <td>
            </tr>
</div>
        </table>
        </form>
    </div>
    </div>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
</body>
</html>