@extends('layout.master')

@section('content')

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('images/hero-bg.png') }}" alt="">
      </div>
    </div>


  <!-- Join Mitra section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2 style="color: white">
            Join <span>Mitra</span>
          </h2>
          <p style="color: white">
            Berikut merupakan tutorial untuk menjadi bagian dari Mamura
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/s1.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Registrasi
                </h5>
                <p>
                  Anda dapat menghubungi kami melalui kontak WhatsApp dibawah, lalu mengisi formulir yang sudah diberikan
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/s2.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Verifikasi
                </h5>
                <p>
                  Admin akan melakukan verifikasi keediaan anda menjadi mitra
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/s3.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Akun Aktif
                </h5>
                <p>
                  Admin akan memberikan akun untuk digunakan login halaman sebagai seller
                </p>
                
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="btn-box">
          <a href="">
            View All
          </a>
        </div> -->
      </div>
    </div>
  </section>

  <!-- end service section -->

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
              <a class="active" href="{{ url('/home') }}">Home</a>
              <a href="{{ url('/about') }}">Tentang Kami</a>
              <a href="{{ url('/menu') }}">Menu</a>
              <a href="{{ url('/join') }}">Join Mitra</a>
              <a href="{{ url('/team') }}">Team</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- end info section -->
  @endsection

</body>