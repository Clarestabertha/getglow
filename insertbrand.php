<?php
include "koneksi.php";
if(isset($_POST['input'])){
    $id_brand=$_POST['id_brand'];
    $nama_brand=$_POST['nama_brand'];
    $citizenship=$_POST['citizenship'];
    $tagline=$_POST['tagline'];
    $logo = $_FILES['logo']['name'];
    $file_tmp = $_FILES['logo']['tmp_name'];
    $up = 'brand/' . $logo;
        
        if (move_uploaded_file($file_tmp, $up)) {
            $insert = "INSERT INTO brand (id_brand, nama_brand, citizenship, tagline,  logo) VALUES 
            ('$id_brand', '$nama_brand', '$citizenship', '$tagline','$up')";
            
            $query = mysqli_query($conn, $insert);
            if($query){
                ?>
                <script>
                    alert("DATA BERHASIL DIMASUKAN");
                    document.location = 'staff.php?page=brand';
                </script>
                <?php
            }
        } 
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
<p><a href='staff.php?page=brand' class="link">Back</a></p><h6>&nbsp;</h6>

<div class="container">
<div class="left-div">
    <img src="img/insert.jpg" width="250">
</div>
    <div class="right-div">
<form action='insertbrand.php' name='insertbrand' method='post' enctype='multipart/form-data'>
    <table align='center'>
        <tr>
            <td>ID BRAND</td>
            <td><input type='text' name='id_brand' class="input"></td>
        </tr>
        <tr>
            <td>Nama Brand</td>
            <td><input type='text' name='nama_brand' class="input" requiured></td>
        </tr>
        <tr>
            <td>Citizenship</td>
            <td><input type='text' name='citizenship' class="input" requiured></td>
        </tr>
        <tr>
            <td>Tagline</td>
            <td><textarea name='tagline' rows="3"  class="input" requiured></textarea></td>
        </tr>
        </tr>
        <tr>
            <td>Upload Logo</td>
            <td><input type='file' name='logo' requiured> </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='input' value='INSERT' class="submit"> </td>
        </tr>
    </table>
</form>
</div>
</div>
<h1>&nbsp;</h1>
</body>
</html>