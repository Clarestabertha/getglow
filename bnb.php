<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>

<!DOCTYPE html>
<html>
    <head>
        <title>Barenbliss</title>
        <style>
.centered{
display: flex;
flex-direction: grid;
align-items: center;
justify-content: center;
}
.container {
  display: flex;
  justify-content: center;
  position: relative;
  margin-top: 2rem;
  margin-bottom: 2rem;
  opacity: 90%;
}
.image-container {
  margin-top: 70px;
}
.image-container img {
  width: 700px;
  float: right;
}
.image-container p {
  overflow: auto;
  text-align: justify;
  line-height: 25px;
  padding-right: 10px;
}
section {
  padding: 50px 0;
}
.card {
  background-color:rgb(255, 245, 245);
}
.card-text {
  color: black;
}
.card:hover {
  box-shadow: 0 0 10px rgba(20, 1, 70, 0.3);
  transform: scale(1.15);
}
.mid {
  margin-top: 2rem;
}
.mid h1 {
  width: 80%;
  margin: 0 auto;
}
.review{
    display: flex;
    flex-direction: row;
    width:100%;
}
.kolom1{/*sebelah kiri*/
  width:35%;
  height: 520px; 
}
.foto{/*ini buat nampilih foto produk*/
  height: 340px; 
  display: flex;
  justify-content: center; 
  align-items: center;
}
.nama{
  text-align:center;
  height: 45px;  
  display: flex;
  justify-content: center; 
  align-items: center;
}
.rating{
  height: 60px;  
  align-items: center;
  display: flex;
  justify-content: center; 
  text-align: center;
}
.desc{/*ini buat deskripsi produk*/
  height: 75px;  
  display: flex;
  justify-content: center; 
  align-items: center;
}

.kolom2{/*sebelah kanan*/
    width:65%;
    height: 520px; 
}
.ulasan{/*ini buat nampilih review*/
    height: 460px; 
}
.typehere{/*ini buat textarea komentar*/
    height: 57px;  
    align-items: center;
    display: flex;
    justify-content: center;
}
.scroll{
    overflow-y: auto;/*buat ngescroll review*/
}
.comment-control{
    width:90%;
}
.produk{
    width:300px;
  }
  .produk:hover {
    box-shadow: 0 0 10px pink;
    transform: scale(1.2);  }

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
    .submit:hover{
      box-shadow: 0 0 8px pink;
      cursor: pointer;
      background-color: white;
      color: pink;
    }
    .text{
      width: 550px;
      height: 50px;      
      padding: 10px; 
      border-radius: 10px; 
      border: 1px solid #ccc; 
    }
</style>
</head>

<body>
<div class="centered">
<img src="img/bnb.png" width="200">
<img src="img/bnbb.png" width="400">
</div><br>

<div class="container">
          <div class="row">
            <div class="col">
              <div class="card" style="width: 12rem;">
                <img src="img/complexion.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p align='center' class="card-text">Complexion</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 12rem;">
                <img src="img/lip.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p align='center' class="card-text">Lip Product</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 12rem;">
                <img src="img/eye.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p align='center' class="card-text">Eye Makeup</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 12rem;">
                <img src="img/remover.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p align='center' class="card-text">Makeup Remover</p>
                </div>
              </div>
            </div>
          </div>
</div>

<!--produk 1-->
<div class="review">
<div class="kolom1">
  <div class="foto">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="container" style="width: 18rem;">
            <img src="staff.jpg" class="produk">
            <div class="card-body">
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="nama">
  <h3>BNB Barenbliss Lip Tint</h3>
</div>
<div class="rating">
   <img src="img/bintang.jpg" width="200">
   <h2>4.0</h2>
</div>
<div class="desc">
  Launching : 22-2-2020<br>
  Teksture  : Moist Tint
</div>
</div>

<div class="kolom2">
  <div class="ulasan scroll">
    Hallo<br>
    Review<br>Review<br> 
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br> 
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br> 
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
  </div>
  <div class="typehere">
      <form class="d-flex mx-auto"><!--biar tombol submit disamping textarea-->
      <textarea class="text" placeholder="Leave a comment here" id="floatingTextarea"></textarea>&nbsp;&nbsp;
      <img src="img/bintang.jpg" width="150" height="30">
      <button class="submit" type="submit">Upload</button>
    </form>
    </div>
</div>  
</div>
</div>

<h5>&nbsp;</h5><br>
<h5>&nbsp;</h5><br>

<!--produk 2-->
<div class="review">
<div class="kolom1">
  <div class="foto">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="container" style="width: 18rem;">
            <img src="staff.jpg" class="produk">
            <div class="card-body">
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="nama">
  <h3>BNB Barenbliss Lip Tint</h3>
</div>
<div class="rating">
   <img src="img/bintang.jpg" width="200">
   <h2>4.0</h2>
</div>
<div class="desc">
  Launching : 22-2-2020<br>
  Teksture  : Moist Tint
</div>
</div>

<div class="kolom2">
  <div class="ulasan scroll">
    Hallo<br>
    Review<br>Review<br> 
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br> 
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br> 
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
    Review<br>Review<br>
  </div>
  <div class="typehere">
      <form class="d-flex mx-auto"><!--biar tombol submit disamping textarea-->
      <textarea class="text" placeholder="Leave a comment here" id="floatingTextarea"></textarea>&nbsp;&nbsp;
      <img src="img/bintang.jpg" width="150" height="30">
      <button class="submit" type="submit">Upload</button>
    </form>
    </div>
</div>  
</div>
</div>

<h5>&nbsp;</h5><br>
<h5>&nbsp;</h5><br>

<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
</body>
</html>

