@extends('layout.master1')

@section('content')

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('images/hero-bg.png') }}" alt="">
      </div>
    </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          Keranjang <span>Anda</span>
        </h2>
        <p>

        </p>
      </div>
      <div class="card flex-row">
        <div class="col ">
        <img style="float: left; padding: 10px;" src="{{ asset('images/nasigoreng.png') }}" width="100" height="100"/>
        <div class="card-body">
          <h4 class="card-title h5 h4-sm">Nasi Goreng</h4>
          <p class="card-text">Geprek Sai</p>
        </div>
    </div>
        <div class="col align-self-center">
          <div class="quantity-submit">
            <div class="quantity">
              <input type="number" class="input-box" value="1" min="1" max="10">
            </div>
        </div>
          </div>
          <div class="col align-self-center">
            <h5>Rp6.000</h5>
          </div>
          <div class="col align-self-center">
            <button class="btn btn-primary" type="submit">Delete</button>
          </div>
      </div>

      <div class="card flex-row">
        <div class="col ">
        <img style="float: left; padding: 10px;" src="{{ asset('images/esteh.png') }}" width="100" height="100"/>
        <div class="card-body">
          <h4 class="card-title h5 h4-sm">Es Teh</h4>
          <p class="card-text">Geprek Sai</p>
        </div>
    </div>
        <div class="col align-self-center">
          <div class="quantity-submit">
            <div class="quantity">
              <input type="number" class="input-box" value="1" min="1" max="10">
            </div>
        </div>
          </div>
          <div class="col align-self-center">
            <h5>Rp2.000</h5>
          </div>
          <div class="col align-self-center">
            <button class="btn btn-primary" type="submit">Delete</button>
          </div>
      </div>
      <p>

      </p>
      <div class="text-center">
        <button class="btn btn-primary btn-lg" type="button" href="{{ url('/payment') }}">Beli</button>
      </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

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