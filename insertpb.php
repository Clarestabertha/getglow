<?php
include "koneksi.php";
$idbrand=$_GET['idbrand'];
$idprod=$_GET['idprod'];    
if(isset($_POST['input'])){
    $id_produk=$_POST['id_produk'];
    $id_brand=$_POST['id_brand'];
    $tgl_launching=$_POST['tgl_launching'];
    $insert = "INSERT INTO produk_brand (id_brand, id_produk, tgl_launching) VALUES 
            ('$id_brand', '$id_produk', '$tgl_launching')";
            $query = mysqli_query($conn, $insert);
            if($query){
                ?>
                <script>
                    alert("DATA BERHASIL DIMASUKAN");
                    document.location = 'staff.php?page=viewpb';
                </script>
                <?php
            }
        } else {
            echo "Gagal mengunggah file.";
        }
?>
<br><br><br><br><br><br><br><br>
<form action='<?php $_SERVER['PHP_SELF']; ?>' name='insertpb' method='post'>
    <table align='center'>
        <tr>
            <td>ID BRAND</td>
            <td>:</td>
            <td><input type='text' name='id_brand' value='<?php echo $idbrand;?>'readonly>
		</td>
        </tr>
        <tr>
            <td>ID Produk</td>
            <td>:</td>
            <td><input type='text' name='id_produk' value='<?php echo $idprod;?>'readonly>
        </tr>
        <tr>
            <td>Tanggal Launching</td>
            <td>:</td>
            <td><input type='date' name='tgl_launching'></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type='submit' name='input' value='INSERT'> </td>
        </tr>
    </table>
</form>