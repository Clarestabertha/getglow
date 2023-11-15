<?php
include "koneksi.php";
$idupdate=$_GET['id'];

if(isset($_POST['update'])){
    $id_produk=$_POST['id_produk'];
    $id_brand=$_POST['id_brand'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $update = "update produk set id_brand='$id_brand', nama_produk='$nama_produk',deskripsi='$deskripsi',harga='$harga' where id_produk='$idupdate' ";
    $query = mysqli_query($conn, $update);
        if($query){
        ?>
        <script>
            alert("DATA BERHASIL DIUBAH!");
            document.location="staff.php?page=produk";
        </script>
        <?php
        } else {
            echo "Gagal mengunggah file.";
        }
    }
$row=mysqli_fetch_array(mysqli_query($conn,"select *from produk where id_produk='$idupdate'"));
if($row['id_produk']!=""){
    ?>
    <br><br><br><br><br><br><br><br>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name='updateproduk' method='post'>
    <table align='center'>
    <tr>
            <td>ID Produk</td>
            <td>:</td>
            <td><input type='text' name='id_produk' value='<?php echo $row['id_produk'];?>' readonly></td>
        </tr>
        <tr>
            <td>ID BRAND</td>
            <td>:</td>
            <td>
		    <select name='id_brand'>
			<?php
			$s = "select * from brand";
			$q = mysqli_query($conn, $s);
			while($k=mysqli_fetch_array($q)){
				if($k['id_brand']==$row['id_brand']){
					echo "<option value='$k[id_brand]' selected>$k[id_brand] - $k[nama_brand]</option>";
				}else{
					echo "<option value='$k[id_brand]'>$k[id_brand] - $k[nama_brand]</option>";
				}
			}
			?>
		</select>
		</td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type='text' name='nama_produk' value='<?php echo $row['nama_produk'];?>'></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type='text' name='harga' value='<?php echo $row['harga'];?>'></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><textarea name='deskripsi'><?php echo $row['deskripsi'];?></textarea></td>
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