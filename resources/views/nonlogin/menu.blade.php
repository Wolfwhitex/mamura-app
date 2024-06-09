@extends('layout.master')

@section('content')

<head>
    <style>
        body {
          font-family: Arial;
        }
        
        * {
          box-sizing: border-box;
        }
        
        form.example input[type=text] {
          padding: 10px;
          font-size: 17px;
          border: 1px solid grey;
          float: left;
          width: 80%;
          background: #f1f1f1;
        }
        
        form.example button {
          float: left;
          width: 20%;
          padding: 10px;
          background: #2196F3;
          color: white;
          font-size: 17px;
          border: 1px solid grey;
          border-left: none;
          cursor: pointer;
        }
        
        form.example button:hover {
          background: #0b7dda;
        }
        
        form.example::after {
          content: "";
          clear: both;
          display: table;
        }
        </style>
</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('images/hero-bg.png') }}" alt="">
      </div>
    </div>


    <!-- slider section -->
    <section class="slider_section ">
          <div class="container ">
            <div class="row">
            <div class="d-flex flex-column align-items-center"></div>
              <div class="col-md-6 ">
                <div class="detail-box text-center">
                    <div class="heading_container heading_center">
                  <h1>
                    Hai Penyelamat <br>
                    Food Waste!
                  </h1>
                </div>
                  <p>
                    Mau makan apa hari ini?
                  </p>
                  <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                    <input type="text" placeholder="Search.." name="search2">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/custpage.png" alt="">
                </div>
              </div>
            </div>
              </div>
          </div>
        </div>
      </div>
        <li data-target="#customCarousel1" class="active"></li>
    </div>

  </section>
    <!-- end slider section -->
  </div>


  <!-- kategori section -->
  <table style="background-color:#ffffff"> 
  <section class="cp_section layout_padding">
    <div class="container text-center ">
      <div class="heading_container heading_center">
        <h2>
          <span>Kategori</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-3 mb-3 mb-sm-0">
        <a class="navbar-brand" href="nasi.html">
          <div class="card">
            <div class="card-body">
                <img src="images/nasi.png" class="card-img-top" alt="...">
              <h5 class="card-title">Nasi & Mie</h5>
            </div>
          </div>
        </a>
        </div>

        <div class="col-sm-3">
            <a class="navbar-brand" href="index.html">
          <div class="card">
            <div class="card-body">
                <img src="images/snack.webp" class="card-img-top" alt="...">
              <h5 class="card-title">Snack</h5>
            </div>
          </div>
        </a>
        </div>
        <div class="col-sm-3">
            <a class="navbar-brand" href="index.html">
            <div class="card">
              <div class="card-body">
                  <img src="images/dessert.png" class="card-img-top" alt="...">
                <h5 class="card-title">Dessert</h5>
              </div>
            </div>
        </a>
          </div>
          <div class="col-sm-3">
            <a class="navbar-brand" href="index.html">
            <div class="card">
              <div class="card-body">
                  <img src="images/bakery.png" class="card-img-top" alt="...">
                <h5 class="card-title">Bakery & Pastery</h5>
              </div>
            </div>
        </a>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-sm-3">
            <a class="navbar-brand" href="daftar.html">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Selengkapnya</h5>
              </div>
            </div>
        </a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
</table>
  <!-- end kategori section -->

<!-- restoran terdekat section -->

    <section class="resto_section layout_padding">
      <div class="container text-center">
        <div class="heading_container heading_center">
          <h2>
            Restoran <span>Terdekat</span>
          </h2>
        </div>
          <div class="row">
            <div class="col align-self-center">
                <div class="card text-center">
                <a class="navbar-brand" href="...">Luna's Doughnuts, Ijen</a>
              </div>
            </div>
            <div class="col align-self-center">
                <div class="card text-center">
                <a class="navbar-brand" href="...">Subway, Simpang Balapan</a>
              </div>
            </div>
            <div class="col align-self-center">
                <div class="card text-center">
                <a class="navbar-brand" href="...">Kopi Kenangan, Ijen</a>
              </div>
            </div>
          </div>
      </div>
    </section>
  
    <!-- end restoran terdekat section -->

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
