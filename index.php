<!DOCTYPE html>
<html>
  <head>
    <title>Getter Glow</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
      .kal1{
    font-family: Butler ;
    text-align: center;
    font-size: 40px;
    color: black;
}
.kal2{
    font-family: Butler ;
    text-align: center;
    font-size: 40px;
    color: black;
}
.carousel-item img {
    max-width: none;
    height: 500px;
}
.ulasan {
    display: flex;
    align-items: center; /* Pusatkan secara vertikal */
}

.product {
    display: flex;
    flex-direction: column; /* Menyusun elemen secara vertikal */
    align-items: center; /* Pusatkan secara horizontal dan vertikal */
    margin-left: 50px;
    margin-right: 50px;
}

.image-container {
    display: flex;
    justify-content: center; /* Pusatkan gambar secara horizontal */
    align-items: center; /* Pusatkan gambar secara vertikal */
}

.product img {
    max-width: 250px; /* Atur lebar maksimum gambar */
}
.product h5{
    margin-top: 20px;
}
.deskripsi{
    display: flex;
    flex-direction: column; /* Menyusun elemen secara vertikal */
    align-items: center; /* Pusatkan secara horizontal dan vertikal */
    margin-left: 10px;
    margin-right: 250px;
}

body {
}
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
  
  /*end*/



@font-face {
font-family: Butler;
src: url(Butler_Webfont/Butler-Bold.woff2) format('woff2');
font-family: poppins;
src: url(Poppin-Story.ttf) format('woff2');
}
    </style>
  </head>
  
  <body>
    <!-- NavBar -->
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Brand
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Barenbliss</a></li>
                <li><a class="dropdown-item" href="#">Maybelline</a></li>
                <li><a class="dropdown-item" href="#">Make Over</a></li>
                <li><a class="dropdown-item" href="#">Esqa</a></li>
                <li><a class="dropdown-item" href="#">Wardah</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php ">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
			error_reporting(E_ALL ^ E_NOTICE AND E_DEPRECATED);
			$page = $_GET['page'];
			switch($page){
				case "login" : include "login.php"; break;
				default : include "dashboard.php";
				
			}
			?>

   
<!--Footer-->
<footer id="footer" class="footer d-flex flex-column ">
  <div class="top d-flex justify-content-sm-around ">
    <div class="content d-flex flex-column ">
      <h4>Thank you for visiting our website</h4>
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