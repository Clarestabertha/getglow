<!--Konten-->
<div style="display: flex; align-items: center;">
    <img src="staff.jpg" class="gambarstaff">
    <?php 
        $sql="select *from akun";
        $query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array(mysqli_query($conn,"select *from akun where id_akun='$idhome'"));
    ?>
    <div style="margin-left:100px">
    <h1></h1>
        <h2>Welcome <?php echo $_SESSION['username'];?>!</h2><br>
        <p>Selamat datang di Homepage Staff kami! Di sini, Anda akan menemukan alat dan sumber daya yang diperlukan untuk mendukung operasi harian Anda. Teruskan usaha Anda dan jadikan setiap hari menjadi peluang untuk memberikan kontribusi terbaik Anda demi kesuksesan Perusahaan.</p>
        <button type="button" class="btn btn-outline-danger">Learn More</button>
      </div>
</div>