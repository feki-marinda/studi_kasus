<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://www.w3schools.com/lib/w3.js"></script>
<!--font header-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="p-5 warna font text-white text-center">
  <h1 style="font-size: 90px;">Feki Kosmetik</h1>
  <p style="font-size: 50px;">Temukan kecantikanmu disini</p> 
</div>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Feki Kosmetik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="produk.php">Produk</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alat Kecantikan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Make Up</a></li>
            <li><a class="dropdown-item" href="#">Scincare</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Bodycare</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="about.html">About</a>
        </li>
      </ul>
      </div>
      
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>DISKON UP TO 90%</h2>
      <div>
        <img class="rounded" style="width: 350px; height: 200px;" src="img/diskon2.jpg" alt="">
        <p style="text-align: center; font-weight: bold;">DISKON FOR ALL PRODUCK</p>
      </div>
      <div class="mt-4 ">
        <img class="rounded" style="width: 350px; height: 200px;" src="img/diskon.jpg" alt="">
      </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Tersedia</h3>
      <p>Belanja anti ribet</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item d-flex">
            <img style="width: 40px; height: 40px;" src="img/shopee.png" alt="">
          <a class="nav-link" href="#">Shopee</a>
        </li>
        <li class="nav-item d-flex mt-2">
            <img style="width: 40px; height: 40px;" src="img/lazada.PNG" alt="">
          <a class="nav-link" href="#">Lazada</a>
        </li>
        <li class="nav-item d-flex mt-2">
            <img style="width: 40px; height: 40px;" src="img/tokopedia.PNG" alt="">
          <a class="nav-link" href="#">Tokopedia</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Temukan Semua Jenis produkmu</h2>
      <img class="nature rounded" src="img/emina1.png" width="100%">
      <img class="nature rounded" src="img/about2.png" width="100%">
      <img class="nature rounded" src="img/about3.png" width="100%">
    
      <div class="col-sm-2 d-flex">
        <div class="mt-3 ms-3">
            <img style="width: 180px; height: 200px;" src="img/lipcream.PNG" alt="">
            <p style="text-align: center;">Emina Lipcream</p>
          </div>
          <div class="mt-3 ms-3">
            <img style="width: 180px; height: 200px;" src="img/lipcream2.PNG" alt="">
            <p style="text-align: center;">Emina Lipcream</p>
          </div>
          <div class="mt-3 ms-3">
            <img style="width: 180px; height: 200px;" src="img/lipcream3.PNG" alt="">
            <p style="text-align: center;">Emina Lipcream</p>
          </div>
          <div class=" ms-3">
            <img style="width: 180px; height: 220px;" src="img/lipcream4.PNG" alt="">
            <p style="text-align: center;">Emina Lipcream</p>
          </div>
    </div>
    <div class="col-sm-2 d-flex">
        <div class="mt-3 ms-3">
            <img style="width: 180px; height: 200px;" src="img/lipcream.PNG" alt="">
            <p >Emina Lipcream</p>
          </div>
          <div class="mt-3 ms-3">
            <img style="width: 180px; height: 200px;" src="img/lipcream.PNG" alt="">
            <p >Emina Lipcream</p>
          </div>
          <div class="mt-3 ms-3">
            <img style="width: 180px; height: 200px;" src="img/lipcream.PNG" alt="">
            <p >Emina Lipcream</p>
          </div>
          <div class="mt-3 ms-3">
            <img style="width: 180px; height: 200px;" src="img/lipcream.PNG" alt="">
            <p >Emina Lipcream</p>
          </div>
    </div>
    
</div>


<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>



<script>
        w3.slideshow(".nature", 1500);
      </script>
</body>
</html>
