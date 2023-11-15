<?php
include "koneksi.php";

//delete
$id = isset($_GET['id_produk']) ? $_GET['id_produk'] : "";
if($id!=""){
    $row=mysqli_fetch_array(mysqli_query($conn,"select *from produk_brand where id_produk='$id'"));
    $delete="delete from produk_brand where  id_produk='$id'";
    $query=mysqli_query($conn,$delete);
    if ($query){
        ?>
        <script>
            alert("DATA BERHASIL DIHAPUS!");
            document.location='staff.php?page=viewpb';
        </script>
        <?php
    }
}
?>
<br><br><br>
<center><h1>PRODUK BRAND</h1>
<table cellpadding='10' cellspacing='5' border-column='1'border="1">
    <tr>
        <th>NO</th>
        <th>ID PRODUK</th>
        <th>ID BRAND</th>
        <th>NAMA BRAND</th>
        <th>NAMA PRODUK</th>
        <th>CITIZENSHIP</th>
        <th>HARGA</th>
        <th>Tanggal Launching</th>
        <th>DESKRIPSI</th>
        <th>AKSI</th>
    </tr>
    <?php
    $no=1;
    $sql = "SELECT * FROM produk
        INNER JOIN produk_brand ON produk.id_produk = produk_brand.id_produk
        INNER JOIN brand ON produk_brand.id_brand = brand.id_brand
        ORDER BY produk_brand.id_brand ASC";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query)){
        echo"
        <tr>
            <td>$no</td>
            <td>$row[id_produk]</td>
            <td>$row[id_brand]</td>
            <td>$row[nama_brand]</td>
            <td>$row[nama_produk]</td>
            <td>$row[citizenship]</td>
            <td>$row[harga]</td>
            <td>$row[tgl_launching]</td>
            <td>$row[deskripsi]</td>
            <td>
            <a href='?page=updatepb&id=$row[id_produk]'>EDIT</a>
            <a href='produkbrand.php?id_produk=$row[id_produk]'>HAPUS</a>
            </td>
        </tr>
        ";
        $no++;
    }
    ?>
</table>
</center>