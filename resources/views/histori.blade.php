@extends('layout.master1')

@section('content')

<head>
    <style>
body {
    font-family: sans-serif;
    background-color: white; /* Background warna putih */
}

.order-history {
    margin: 20px auto;
    width: 600px;
    background-color: #f5f5f5; /* Warna latar belakang untuk order history */
    padding: 20px;
    border-radius: 5px;
}

.order-history h2 {
    margin-bottom: 10px;
}

.order-history ul {
    list-style: none;
    padding: 0;
}

.order-history li {
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
}

.product-name,
.product-quantity,
.product-price {
    flex: 1;
    text-align: left;
}

.order-total {
    font-weight: bold;
    text-align: right;
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


    <h2 style="text-align: center; margin-top: 9px; color: white">Detail Pembelian</h2>

    <div class="order-history">
        <h2>Pesanan #1 (2024-05-29)</h2>
        <ul>
            <li>
                <span class="product-name">Nasi Goreng</span>
                <span class="product-quantity">x1</span>
                <span class="product-price">Rp. 6.000</span>
            </li>
            <li>
                <span class="product-name">Es Teh</span>
                <span class="product-quantity">x2</span>
                <span class="product-price">Rp. 4.000</span>
            </li>
        </ul>
        <p class="order-total">Total: Rp. 10.000</p>
        <br>
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

