<?php
include "config.php";
if(isset($_POST['save'])){
    if($_POST['save']=='add'){
        $nama_file = $_FILES['image']['name'];
        $ukuran_file = $_FILES['image']['size'];
        $tipe_file = $_FILES['image']['type'];
        $tmp_file = $_FILES['image']['tmp_name'];
        $path = "image/".$nama_file;
        if(move_uploaded_file($tmp_file,$path)){
            $query = "INSERT INTO gambar(nama,ukuran,tipe) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."')";
            $sql = mysqli_query($db,$query);
            if($sql){
                header("location: data_upload.php");

            }else{
                echo "maaf,terjadi kesalahan saat mencoba untuk menyimpat data kedatabase.";
                echo "<br><a href ='form-upload.php'>kembali ke form</a>";
            }
        }else{
            echo "maaf,gambar gagal untuk di upload.";
            echo "<br><a href ='form-upload.php'>kembali ke form</a>";
        }

    }else if ($_POST['save'] =='edit'){
       $id =$_POST['id_gambar'];
       $nama_file = $_FILES['image']['name'];
       $ukuran_file = $_FILES['image']['size'];
       $tipe_file = $_FILES['image']['type'];
       $tmp_file = $_FILES['image']['tmp_name'];
       $path = "image/".$nama_file;
       $sql ="UPDATE gambar SET nama='". $nama_file."',ukuran='".$ukuran_file."',tipe='".$tipe_file."' WHERE id_gambar='$id'";
        $query = mysqli_query($db, $sql);
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: data_upload.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: data_upload.php?status=gagal');
        }
    }
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql ="DELETE FROM gambar WHERE id_gambar ='$id';";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: data_upload.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: data_upload.php?status=gagal');
    }
}
?>
