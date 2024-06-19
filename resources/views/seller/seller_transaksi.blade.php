<!DOCTYPE html>
<html>

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

  <title>Mamura</title>

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
    /* Custom CSS for additional spacing */
    .penjualan-section {
      margin-top: 50px; /* Adjust as needed */
      margin-bottom: 50px; /* Adjust as needed */
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
      <span>Transaksi Produk Berlangsung</span>
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
            <p class="card-text payment-status">Status: Sedang Diproses</p>
            <button class="btn btn-success btn-sm btn-validate">Validate</button>
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
            <p class="card-text payment-status">Status: Menunggu Pembayaran</p>
            <button class="btn btn-success btn-sm btn-validate">Validate</button>
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
  <!-- Custom JS -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Maps API -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Maps API -->
  <script>
    // Script untuk mengubah status pembayaran dan warna tombol "Validate"
    $(document).ready(function () {
      // Event saat tombol "Validate" ditekan
      $('.btn-validate').click(function () {
        // Mengubah teks tombol menjadi "Validated"
        $(this).text('Validated');
        // Mengubah warna tombol menjadi merah
        $(this).removeClass('btn-success').addClass('validated');
        // Mengubah status pembayaran menjadi "Paid"
        $(this).closest('.transaction-card').find('.payment-status').text('Paid');
      });
    });
  </script>
</body>

</html>