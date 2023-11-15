<?php
session_start();
include "koneksi.php";

if(isset($_POST['update'])){
    $id = $_POST['id_akun'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    // Jika ada file foto yang diunggah
    if (!empty($foto)) {
        $up = 'img/' . $foto;
        if (move_uploaded_file($file_tmp, $up)) {
            $update = "UPDATE akun SET username='$username', email='$email', foto='$up' WHERE id_akun='$id'";
            
            $query = mysqli_query($conn, $update);
            if ($query) {
                // Pembaruan nilai session
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['foto'] = $up;

                ?>
                <script>
                    alert("DATA BERHASIL DIUBAH!");
                    document.location="profil.php";
                </script>
                <?php
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        // Jika tidak ada file foto yang diunggah
        $update = "UPDATE akun SET username='$username', email='$email' WHERE id_akun='$id'";
        $query = mysqli_query($conn, $update);
        if ($query) {
            // Pembaruan nilai session
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;

            ?>
            <script>
                alert("DATA BERHASIL DIUBAH!");
                document.location="profil.php";
            </script>
            <?php
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}
//logout
if(isset($_POST['logout'])){
    session_start();
    session_destroy();
    ?>
    <script>
        alert('Anda Telah Logout'); document.location='index.php';
    </script>
    <?php
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>PROFILE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        justify-content: center;
        align-items: center;
        height: 100vh; /* Memastikan kontainer berada di tengah secara vertikal */
        margin: 0; /* Menghapus margin bawaan untuk menghindari jarak tak diinginkan */
    }
    .header{
        font-family: Arial, sans-serif;
        text-align:center;
    }
    .container {
        background-color:rgb(255, 245, 245);
        width:48%;
        height:65%;
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center;
        font-family: helvetica;
        border-radius: 15px;
        display: grid;
        grid-template-columns: 50% 50%;
    }
    .container h1 {
        margin-bottom: 0; /* Menghapus jarak antara h1 dan p */
    }
    .container p {
        margin-bottom: 10px; /* Biarkan jarak antara p dan elemen berikutnya */
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
        width: 100px;
        background-color: pink;
        padding: 10px; 
        border-radius: 10px; 
        border: 1px solid #ccc; 
        color: white;
        font-weight: bold; /* Mengatur teks pada tombol submit menjadi tebal */
    }
    </style>
</head>
<body>
<h1>&nbsp;</h1>
<h3 class="header">Update <?php echo $_SESSION['username'];?>'s Profile</h3><br>

<div class="container">
<div class="left-div">
    <form name="profil" method="post" enctype="multipart/form-data">
        
        <label for="exampleFormControlInput1">Username</label><br>
        <input type="text" class="input" id="username" name="username" value='<?php echo $_SESSION['username'];?>'><br><br>
                      
        <label for="exampleFormControlTextarea1">Email</label><br>
        <input type="email" name="email" class="input" id="email" value='<?php echo $_SESSION['email'];?>'></input><br><br>
                                  
        <button type="submit" name="update" class="submit">UPDATE</button>
        <button type="submit" name="logout" class="submit">LOG OUT</button>
    </form>
 </div>

    <div class="right-div">
        <img src='<?php echo $_SESSION['foto'];?>' width='200'><br>
        <input type='file' name='foto'/>
    </div>
    </div>           
</body>
</html>
