<?php
include "koneksi.php";
$idupdate=$_GET['id'];

if(isset($_POST['update'])){
    $id_produk=$_POST['id_produk'];
    $id_brand=$_POST['id_brand'];
    $tgl_launching=$_POST['tgl_launching'];
    $update = "update produk_brand set tgl_launching='$tgl_launching' where id_produk='$idupdate' ";
    $query = mysqli_query($conn, $update);
        if($query){
        ?>
        <script>
            alert("DATA BERHASIL DIUBAH!");
            document.location="staff.php?page=viewpb";
        </script>
        <?php
        } else {
            echo "Gagal mengunggah file.";
        }
    }
$row=mysqli_fetch_array(mysqli_query($conn,"select *from produk_brand where id_produk='$idupdate'"));
if($row['id_produk']!=""){
    ?>
    <br><br><br><br><br><br><br><br>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name='updatepb' method='post'>
    <table align='center'>
    <tr>
            <td>ID Produk</td>
            <td>:</td>
            <td><input type='text' name='id_produk' value='<?php echo $row['id_produk'];?>' readonly></td>
        </tr>
        <tr>
            <td>ID BRAND</td>
            <td>:</td>
            <td><input type='text' name='id_brand' value='<?php echo $row['id_brand'];?>'readonly>
		</td>
        </tr>
        <tr>
            <td>Tanggal Launching</td>
            <td>:</td>
            <td><input type='date' name='tgl_launching' value='<?php echo $row['tgl_launching'];?>'></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type='submit' name='update' value='UPDATE'> </td>
        </tr>
    </table>
</form>
    <?php
}

?>