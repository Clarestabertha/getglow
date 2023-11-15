<?php
include "koneksi.php";

//delete
$id = isset($_GET['id_produk']) ? $_GET['id_produk'] : "";
if($id!=""){
    $row=mysqli_fetch_array(mysqli_query($conn,"select *from produk where id_produk='$id'"));
    $delete="delete from produk where  id_produk='$id'";
    $query=mysqli_query($conn,$delete);
    if ($query){
        ?>
        <script>
            alert("DATA BERHASIL DIHAPUS!");
            document.location='staff.php?page=produk';
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PRODUK</title>
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
<br><br><br>
<center><h1>PRODUK</h1>
<p><a href='?page=insertproduk' class="submit">Insert Data</a></p>
<table cellpadding='10' cellspacing='5' border-column='1'border="1">
    <tr>
        <th>NO</th>
        <th>ID PRODUK</th>
        <th>NAMA BRAND</th>
        <th>NAMA PRODUK</th>
        <th>HARGA</th>
        <th>DESKRIPSI</th>
        <th>AKSI</th>
    </tr>
    <?php
    $no=1;
    $sql = "select * from produk,brand where produk.id_brand = brand.id_brand";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$row[id_produk]</td>";
        echo "<td>$row[nama_brand]</td>";
        echo "<td>$row[nama_produk]</td>";
        echo "<td>$row[harga]</td>";
        echo "<td>$row[deskripsi]</td>";

        $id_produk = $row['id_produk'];
        $check_detail_sql = "SELECT COUNT(*) as count FROM produk_brand WHERE id_produk = $id_produk";
        $check_detail_query = mysqli_query($conn, $check_detail_sql);
        $check_detail_result = mysqli_fetch_assoc($check_detail_query);
    
        echo "<td>";

        // Jika detail sudah diisi, tombol DETAIL akan dinonaktifkan
        if ($check_detail_result['count'] > 0) {
            echo "<a href='?page=updateproduk&id=$row[id_produk]' class='submit'>EDIT</a>
            <a href='produkstaff.php?id_produk=$row[id_produk]' class='submit'>HAPUS</a>
            <h8 class='submit'>Detail sudah diisi</h8>";
        } else {
            echo "<a href='?page=updateproduk&id=$row[id_produk]' class='submit'>EDIT</a>
            <a href='produkstaff.php?id_produk=$row[id_produk]'class='submit'>HAPUS</a>
            <a href='?page=produkbrand&idprod=$row[id_produk]&idbrand=$row[id_brand]' class='submit'>DETAIL</a>";
        }
        echo "</td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>
</center>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>

<h1>&nbsp;</h1>

<h1>&nbsp;</h1>

</body>
</html>