<?php
include "koneksi.php";
if(isset($_POST['input'])){
    $id_produk=$_POST['id_produk'];
    $id_brand=$_POST['id_brand'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $insert = "INSERT INTO produk (id_produk,id_brand, nama_produk, deskripsi, harga) VALUES 
            ('$id_produk','$id_brand', '$nama_produk', '$deskripsi', '$harga')";
            $query = mysqli_query($conn, $insert);
            if($query){
                ?>
                <script>
                    alert("DATA BERHASIL DIMASUKAN");
                    document.location = 'staff.php?page=produk';
                </script>
                <?php
            }
        } else {
            echo "Gagal mengunggah file.";
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>INSERT BRAND</title>
        <style>
        body{
            text-align:center;
            align-items:center;
        }
        .container {
        width:70%;
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center;
        font-family: helvetica;
        display: grid;
        grid-template-columns: 40% 60%;
    }
    .left-div {
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center;
        font-family: Arial, sans-serif;

    }
    .right-div {
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center;
        font-family: Arial, sans-serif;

    }
    .input{
        width: 250px; /* Sesuaikan dengan ukuran yang Anda inginkan */
        padding: 5px; /* Sesuaikan dengan padding yang Anda inginkan */
        border-radius: 10px; /* Mengatur sudut menjadi tumpul */
        border: 2px solid #ccc; /* Mengatur border dengan ketebalan 1px */
    }
    .submit{
        width: 265px;
        background-color: pink;
        padding: 5px; 
        border-radius: 10px; 
        border: 1px solid #ccc; 
        color: white;
        font-weight: bold; /* Mengatur teks pada tombol submit menjadi tebal */
    }
    .link{
        color:pink;
    }
    </style>
    </head>
<body>
<br><br><br><br>
<h1 text-align="center">Add New Brand!</h1>
<p><a href='staff.php?page=produk' class="link">Back</a></p><h6>&nbsp;</h6>

<div class="container">
<div class="left-div">
    <img src="img/insert.jpg" width="250">
</div>
<div class="right-div">
<form action='<?php $_SERVER['PHP_SELF']; ?>' name='insertproduk' method='post' enctype='multipart/form-data'>
    <table align='center'>
        <tr>
            <td>ID BRAND</td>
            <td>
            <select name='id_brand' class="input">
			<?php
			$s = "select * from brand";
			$q = mysqli_query($conn, $s);
			while($row=mysqli_fetch_array($q)){
				echo "<option value='$row[id_brand]'>$row[id_brand] - $row[nama_brand]</option>";
			}
			?>
            </td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><input type='text' name='nama_produk' class="input"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type='text' name='harga' class="input"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><textarea name='deskripsi' class="input"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='input' value='INSERT' class="submit"> </td>
        </tr>
    </table>
</form>
        </div>
        </div>
        </body>
        </html>