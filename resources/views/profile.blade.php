@extends('layout.master1')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - My Orders</title>
    <link rel="stylesheet" href="style.css">

    <style>
body {
    font-family: sans-serif;
}

.container {
    width: 800px;
    margin: 0 auto;
    padding: 20px;
    color: white;
}

h1 {
    text-align: center;
}

.profile-info {
    margin-bottom: 20px;
}

.order-history {
    margin-top: 20px;
}

.order-history ul {
    list-style: none;
    padding: 0;
}

.order-history li {
    margin-bottom: 10px;
    border: 1px solid #ccc;
    padding: 10px;
    cursor: pointer;
}

.order-history li:hover {
    background-color: #f5f5f5;
}
    </style>
</head>

<body class="sub_page">
    <div class="hero_area">

        <div class="hero_bg_box">
          <div class="bg_img_box">
            <img src="{{ asset('images/hero-bg.png') }}" alt="">
          </div>
        </div>
    

    <div class="container">
        <h1>Profil Saya</h1>

        <div class="profile-info">
            <p>Nama: Luna <span id="customerName"></span></p>
            <p>Email: Luna Maya <span id="customerEmail"></span></p>
            <p>Nomor Telepon: 0812345678 <span id="customerPhone"></span></p>
        </div>

        <h2>Riwayat Pesanan</h2>
        <div class="order-history"> 
            
          <a a class="navbar-brand" href="{{ url('/histori') }}">Pesanan #1 (2024-05-29)</a>
            <ul id="orderList">
                </ul>
              </a>
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
              <a href="{{ url('/') }}">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                <span>+621234567890</span>
              </a>
              <a href="{{ url('/') }}">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>mamura@gmail.com</span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="{{ url('/') }}">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="{{ url('/') }}">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="{{ url('/') }}">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-4 info_col">
          <div class="info_link_box">
            <h4>Links</h4>
            <div class="info_links">
              <a class="active" href="{{ url('/cust_page') }}">Home</a>
              <a href="{{ url('/pesanan') }}">Pesanan</a>
              <a href="{{ url('/keranjang') }}">Keranjang</a>
              <a href="{{ url('/histori') }}">Histori</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- end info section -->
  @endsection

</body>
