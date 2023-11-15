<?php
include "koneksi.php";

//delete
$no = isset($_GET['no_ulasan']) ? $_GET['no_ulasan'] : "";
if($no!=""){
    $row=mysqli_fetch_array(mysqli_query($conn,"select *from ulasan where no_ulasan='$no'"));
    $delete="delete from ulasan where  no_ulasan='$no'";
    $query=mysqli_query($conn,$delete);
    if ($query){
        ?>
        <script>
            alert("DATA BERHASIL DIHAPUS!");
            document.location='staff.php?page=review';
        </script>
        <?php
    }
}
?>
<br><br><br>
<center><h1>REVIEW</h1>
<table cellpadding='10' cellspacing='5' border-column='1'border="1">
    <tr>
        <th>NO ULASAN</th>
        <th>USERNAME</th>
        <th>NAMA PRODUK</th>
        <th>ULASAN</th>
        <th>RATING</th>
        <th>AKSI</th>
    </tr>
    <?php
    $sql="SELECT * FROM akun
    INNER JOIN ulasan ON akun.id_akun = ulasan.id_akun
    INNER JOIN produk_brand ON ulasan.tgl_launching = produk_brand.tgl_launching 
    INNER JOIN produk ON produk_brand.id_produk=produk.id_produk";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query)){
        echo"
        <tr>
            <td>$row[no_ulasan]</td>
            <td>$row[username]</td>
            <td>$row[nama_produk]</td>
            <td>$row[ulasan]</td>
            <td>$row[rating]</td>
            <td>
            <a href='review.php?no_ulasan=$row[no_ulasan]'>HAPUS</a>
            </td>
        </tr>
        ";
    }
    ?>
</table>
</center>