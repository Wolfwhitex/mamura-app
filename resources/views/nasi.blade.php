@extends('layout.master1')

@section('content')

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('images/hero-bg.png') }}" alt="">
      </div>
    </div>

  <!-- team section -->
  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Nasi & <span> Mie</span>
        </h2>
        <p>

        </p>
      </div>
      <form class="example" action="" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

      <div class="team_container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/nasigoreng.png') }}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Nasi Goreng
                </h5>
                <p>
                  Geprek Sai, Tirtomoyo
                </p>
                <button type="submit" class="btn btn-primary">Order</button>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/pangsit.png') }}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Mie Pangsit
                </h5>
                <p>
                  Warung Bu Rustini, Tirtomoyo
                </p>
                <button type="submit" class="btn btn-primary">Order</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/ayambakar.png') }}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Nasi Ayam Bakar
                </h5>
                <p>
                  D'Kprek, Tirtomoyo
                </p>
                <button type="submit" class="btn btn-primary">Order</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/cumi.jpg') }}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Nasi Sambal Cumi Hitam
                </h5>
                <p>
                  Lalapan Kampus, Tirtomoyo
                </p>
                <button type="submit" class="btn btn-primary">Order</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="box ">
                <div class="img-box">
                  <img src="{{ asset('images/nasigoreng.png') }}" class="img1" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Nasi Goreng
                  </h5>
                  <p>
                    Geprek Sai, Tirtomoyo
                  </p>
                  <button type="submit" class="btn btn-primary">Order</button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="box ">
                <div class="img-box">
                  <img src="{{ asset('images/pangsit.png') }}" class="img1" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Mie Pangsit
                  </h5>
                  <p>
                    Warung Bu Rustini, Tirtomoyo
                  </p>
                  <button type="submit" class="btn btn-primary">Order</button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="box ">
                <div class="img-box">
                  <img src="{{ asset('images/ayambakar.png') }}" class="img1" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Nasi Ayam Bakar
                  </h5>
                  <p>
                    D'Kprek, Tirtomoyo
                  </p>
                  <button type="submit" class="btn btn-primary">Order</button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="box ">
                <div class="img-box">
                  <img src="{{ asset('images/cumi.jpg') }}" class="img1" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Nasi Sambal Cumi Hitam
                  </h5>
                  <p>
                    Lalapan Kampus, Tirtomoyo
                  </p>
                  <button type="submit" class="btn btn-primary">Order</button>
                </div>
              </div>
      </div>
    </div>
  </section>
  <!-- end team section -->

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