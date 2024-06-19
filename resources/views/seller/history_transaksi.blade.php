<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Histori Transaksi - Mamura</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .penjualan-section {
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .transaction-card {
      margin-bottom: 20px;
    }
  </style>
</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section starts -->
       <!-- header section starts -->
       <header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
                <span>Mamura</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/seller_page') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#penjualan">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kelola_produk">Kelola Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/seller_profile') }}"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </li>
                    <!-- Tambahkan bagian logout di samping seller_profile -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                           Logout <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

    <!-- end header section -->
  </div>

  <!-- container section for penjualan produk -->
  <div class="container penjualan-section text-center">
    <h2>
      <span>Histori Transaksi</span>
    </h2>
  </div>

  <!-- container section for transactions -->
  <div class="container">
    <div class="row">
      <!-- Transaksi 1 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #12345</h5>
            <p class="card-text">Tanggal: 10 Juni 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Nasi Goreng - Rp 50.000</li>
              <li>Ayam Goreng - Rp 100.000</li>
            </ul>
            <p class="card-text">Total: Rp 150.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 2 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #67890</h5>
            <p class="card-text">Tanggal: 12 Juni 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Mie Ayam - Rp 150.000</li>
            </ul>
            <p class="card-text">Total: Rp 150.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 3 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #34567</h5>
            <p class="card-text">Tanggal: 15 Juni 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Sate Ayam - Rp 75.000</li>
              <li>Es Teh - Rp 10.000</li>
            </ul>
            <p class="card-text">Total: Rp 85.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 4 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #45678</h5>
            <p class="card-text">Tanggal: 18 Juni 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Bubur Ayam - Rp 20.000</li>
              <li>Kopi - Rp 15.000</li>
            </ul>
            <p class="card-text">Total: Rp 35.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 5 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #56789</h5>
            <p class="card-text">Tanggal: 20 Juni 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Soto Ayam - Rp 30.000</li>
              <li>Teh Manis - Rp 5.000</li>
            </ul>
            <p class="card-text">Total: Rp 35.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 6 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #67891</h5>
            <p class="card-text">Tanggal: 25 Juni 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Bakso - Rp 40.000</li>
            </ul>
            <p class="card-text">Total: Rp 40.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 7 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #78901</h5>
            <p class="card-text">Tanggal: 28 Juni 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Pecel Lele - Rp 25.000</li>
            </ul>
            <p class="card-text">Total: Rp 25.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 8 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #89012</h5>
            <p class="card-text">Tanggal: 1 Juli 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Nasi Uduk - Rp 20.000</li>
            </ul>
            <p class="card-text">Total: Rp 20.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 9 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #90123</h5>
            <p class="card-text">Tanggal: 3 Juli 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Nasi Padang - Rp 50.000</li>
              <li>Es Jeruk - Rp 10.000</li>
            </ul>
            <p class="card-text">Total: Rp 60.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 10 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #01234</h5>
            <p class="card-text">Tanggal: 5 Juli 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Nasi Kuning - Rp 30.000</li>
              <li>Teh Botol - Rp 5.000</li>
            </ul>
            <p class="card-text">Total: Rp 35.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 11 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #12346</h5>
            <p class="card-text">Tanggal: 8 Juli 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Nasi Goreng Kambing - Rp 60.000</li>
            </ul>
            <p class="card-text">Total: Rp 60.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 12 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #23457</h5>
            <p class="card-text">Tanggal: 10 Juli 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Martabak - Rp 40.000</li>
            </ul>
            <p class="card-text">Total: Rp 40.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 13 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #34568</h5>
            <p class="card-text">Tanggal: 12 Juli 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Nasi Kebuli - Rp 70.000</li>
            </ul>
            <p class="card-text">Total: Rp 70.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 14 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #45679</h5>
            <p class="card-text">Tanggal: 15 Juli 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Ayam Bakar - Rp 50.000</li>
              <li>Es Kelapa Muda - Rp 15.000</li>
            </ul>
            <p class="card-text">Total: Rp 65.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

      <!-- Transaksi 15 -->
      <div class="col-md-12 mb-3">
        <div class="card transaction-card">
          <div class="card-body text-left">
            <h5 class="card-title">Transaksi #56780</h5>
            <p class="card-text">Tanggal: 18 Juli 2024</p>
            <p class="card-text">Detail Pesanan:</p>
            <ul>
              <li>Rendang - Rp 100.000</li>
              <li>Es Campur - Rp 20.000</li>
            </ul>
            <p class="card-text">Total: Rp 120.000</p>
            <p class="card-text payment-status">Status: Selesai</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-2 d-flex justify-content-center">
          <h1 class="mamura-title">Mamura</h1>
        </div>
        <div class="col-md-1 d-flex justify-content-center">
          <div class="vertical-line"></div>
        </div>
        <div class="col-md-4 info_col">
          <div class="info_contact">
            <h4>Contact</h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                <span>+621234567890</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>mamura@gmail.com</span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-4 info_col">
          <div class="info_link_box">
            <h4>Links</h4>
            <div class="info_links">
              <a class="active" href="{{ url('/seller_page') }}">Home</a>
              <a href="#penjualan">Penjualan</a>
              <a href="#kelola_produk">Kelola Produk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info section -->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- Bootstrap JS -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Custom JS