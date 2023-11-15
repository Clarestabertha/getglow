<?php
include "koneksi.php";

//delete
$id = isset($_GET['id_brand']) ? $_GET['id_brand'] : "";
if($id!=""){
    $row=mysqli_fetch_array(mysqli_query($conn,"select *from brand where id_brand='$id'"));
    $gambar=$row['logo'];
    unlink($gambar);
    $delete="delete from brand where  id_brand='$id'";
    $query=mysqli_query($conn,$delete);
    if ($query){
        ?>
        <script>
            alert("DATA BERHASIL DIHAPUS!");
            document.location='staff.php?page=brand';
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>BRAND</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }

        table, td {
            border: 1px solid black;
            text-align: center; /* Membuat teks berada di tengah secara horizontal */
            vertical-align: middle; /* Membuat teks berada di tengah secara vertikal */
        }

        th {
            border: 1px solid black;
            text-align: center; /* Membuat teks berada di tengah secara horizontal */
            vertical-align: middle; /* Membuat teks berada di tengah secara vertikal */
            color:pink;
        }

        .submit {
            width: 265px;
            background-color: pink;
            padding: 7px;
            border-radius: 10px;
            border: 1px solid #ccc;
            color: white;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <center>
        <h3>&nbsp;</h3>
        <h3>&nbsp;</h3>
        <h1>BRAND</h1><br>
        <p><a href='staff.php?page=insertbrand' class="submit">Insert Data</a></p><h6>&nbsp;</h6>

        <table>
            <tr>
                <th>NO</th>
                <th>ID BRAND</th>
                <th>NAMA BRAND</th>
                <th>CITIZENSHIP</th>
                <th>TAGLINE</th>
                <th>LOGO</th>
                <th>AKSI</th>
            </tr>
            <?php
            $no = 1;
            $sql = "select *from brand";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query)) {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$row[id_brand]</td>
                    <td>$row[nama_brand]</td>
                    <td>$row[citizenship]</td>
                    <td>$row[tagline]</td>
                    <td><img src='$row[logo]' width='70' height='70'></td>
                    <td>
                    <a href='?page=updatebrand&id=$row[id_brand]' class='submit'>Update</a>
                    <a href='brandstaff.php?id_brand=$row[id_brand]' class='submit'>Delete</a>
                    </td>
                </tr>
                ";
                $no++;
            }
            ?>
        </table>
    </center>
</body>
<h2>&nbsp;</h2>
<h2>&nbsp;</h2>
</html>
