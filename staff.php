<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Getter Glow</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
body {}
.navbar {
    background-color: rgb(255, 213, 220) !important; 
}
.navbar-nav .nav-link {
    border-bottom: 2px solid transparent; /* Garis bawah transparan */
    transition: border-color 0.3s; /* Transisi warna garis bawah */
}
.navbar-nav .nav-link:hover {
    border-color: rgb(255, 255, 255); 
}
/*profile*/
.fotoprofile{
  border-radius: 50%;
}
/*gambar staff*/
.gambarstaff{
  width:500px;
  height:500px;
  margin-top:50px;
  margin-bottom:100px;
  margin-left:100px;
}
/*footer*/
footer {
    height:240px;
    background: rgb(255, 213, 220);
}
footer .content {
    margin: 20px;
    text-decoration: none;
    color: var(--light);
}
footer .content img {
    width: 35px;
    margin-bottom: 10px;
}
.content a { /* Gaya umum untuk link */
    text-decoration: none;
    color: rgb(0, 0, 0);
}
.content a:hover {  /* Gaya saat hover pada link */
    color: rgb(0, 0, 0);
    font-weight: bold;
}
.content i {/* Gaya untuk ikon */
    display: inline-block;
    margin-right: 5px;
    height: 50px;
}
.content i:hover {/* Gaya saat hover pada ikon */
    color: rgb(0, 0, 0);
}
/*footer end*/

  @media screen and (max-width: 860px) {
    footer .top {
      flex-direction: column;
    }
  }
@font-face {
font-family: Butler;
src: url(Butler_Webfont/Butler-Bold.woff2) format('woff2');
font-family: poppins;
src: url(Poppin-Story.ttf) format('woff2');
}
    </style>
  </head>
  
  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Getter Glow</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex mx-auto">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="staff.php?page=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="staff.php?page=brand">Brand</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="staff.php?page=produk">Produk</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="staff.php?page=viewpb">Detail</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="staff.php?page=review">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a href="profil.php"><img src='<?php echo $_SESSION['foto'];?>' width='45' height='45' class="fotoprofile"></a>                
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
			error_reporting(E_ALL ^ E_NOTICE AND E_DEPRECATED);
			$page = $_GET['page'];
			switch($page){
        case "brand" : include "brandstaff.php"; break;
        case"insertbrand" : include "insertbrand.php";break;
        case"updatebrand" : include "updatebrand.php";break;
        case"produk" : include "produkstaff.php";break;
        case "brand" : include "brandstaff.php"; break;
        case"insertproduk" : include "insertproduk.php";break;
        case"updateproduk" : include "updateproduk.php";break;
        case"produkbrand" : include "insertpb.php";break;
        case"viewpb" : include "produkbrand.php";break;
        case"updatepb" : include "updatepb.php";break;
        case"review" : include "review.php";break;
        case"aboutus" : include "aboutus.php";break;
        default : include "homestaff.php";
			}
			?>
      <br>



<!--Footer-->
<footer id="footer" class="footer d-flex flex-column ">
  <div class="top d-flex justify-content-sm-around ">
    <div class="content d-flex flex-column ">
      <h4>Selamat Bekerja Staff Terbaik!</h4>
      <a href="/index.html">
        <i class="fa fa-arrow-circle-right "></i> Home
      </a>
      <a href="/index.html">
        <i class="fa fa-arrow-circle-right "></i> Login
      </a>
    </div>
    <div class="content d-flex flex-column ">
      <a href="/index.html">
        <i class="fa fa-arrow-circle-right "></i> Help Center
      </a>
      <a href="/index.html">
        <i class="fa fa-arrow-circle-right "></i> About Us
      </a>
      <a href="/contact/contact.html">
        <i class="fa fa-arrow-circle-right "></i> Feedback
      </a>
    </div>
    <div class="content d-flex flex-column ">
      <h4>Find Us</h4>
      <a href=" " rel="noopener noreferrer " target="_blank ">
        <i class="fas fa-envelope "><img src="ig.jpg"></i>@getter_glow
      </a>
      <a href=" " rel="noopener noreferrer " target="_blank ">
        <i class="fas fa-envelope "><img src="ig.jpg"></i>@getter_glow
      </a>
      <a href=" " rel="noopener noreferrer " target="_blank ">
        <i class="fas fa-envelope "><img src="ig.jpg"></i>@getter_glow
      </a>
    </div>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>