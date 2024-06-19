@extends('layout.master')

@section('content')
<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('images/hero-bg.png') }}" alt="">
      </div>
    </div>

    <!-- slider section -->
    <section class="slider_section ">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 ">
                <div class="detail-box">
                  <h1>
                    Hemat, Sehat, <br>
                    Dan Ramah Lingkungan
                  </h1>
                  <p>
                    Kami mengurangi pemborosan makanan dengan menjual sisa 
                    makanan yang masih layak, membantu menciptakan sistem produksi 
                    dan konsumsi yang lebih berkelanjutan.
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="{{ asset('images/slider-img.png') }}" alt="">
                </div>
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


  <!-- tentang kami section -->
  <table style="background-color:#ffffff"> 
  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          Tentang <span>Kami</span>
        </h2>
        <p>
          Hemat Uang, Selamatkan Makanan Bersama Mamura!
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('images/about-img.webp') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              We Are Mamura
            </h3>
            <p>
              Mamura adalah aplikasi revolusioner yang menjual sisa makanan yang masih layak konsumsi
              dengan harga terjangkau. Temukan berbagai hidangan dari restoran favorit Anda yang bisa 
              Anda nikmati dengan diskon besar. Dengan Mamura, Anda tidak hanya menghemat uang, tetapi 
              juga membantu menyelamatkan bumi.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</table>
  <!-- end tentang kami section -->

    <!-- why section -->

    <section class="why_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Background makanan di <span>Indonesia</span>
          </h2>
        </div>
        <div class="why_container">
          <div class="box">
            <div class="detail-box">
              <h5>
                Food Loss and Waste di Indonesia
              </h5>
              <p>
                Masalah sampah sisa makanan ini juga turut dikaji oleh Badan Perencanaan 
                Pembangunan Nasional (Bappenas) dalam laporan Food Loss and Waste di Indonesia. 
                Kajian ini dilakukan Bappenas yang bekerja sama dengan Waste4Change dan World Research 
                Institute dan dipublikasikan pada tahun 2021. Hasilnya, ditemukan bahwa selama tahun 
                2000-2019, sampah sisa makanan di Indonesia mencapai 115-184 Kg/kapita/tahun yang porsinya 
                kebanyakan muncul di tahap konsumsi.
              </p>
            </div>
          </div>
          <div class="box">
            <div class="detail-box">
              <h5>
                Strategi
              </h5>
              <p>
                Demi mendukung pencapaian untuk mengurangi food waste di Indonesia, perlu 
                keterlibatan seluruh pihak yang berperan, salah satunya adalah tiap-tiap dari 
                kita para individu masyarakat Indonesia, mulailah dengan langkah kecil seperti 
                menghabiskan makanan yang dibeli, tidak membeli makanan secara berlebih, dan 
                mendukung bisnis dan inisiatif pemanfaatan makanan surplus.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- end why section -->

  <!-- Mitra section -->
  <section class="mitra_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          Mitra yang telah <span>bergabung</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4 ">
          <div class="box">
            @foreach($logo as $l)
            <div class="img-box">
                   {{-- <option value="{{ $l->logo }}">{{ $l->logo }}</option> --}}
                   <img src="{{ asset('public/images/' . $l->logo) }}" alt="Project Preview Screenshot">
              {{-- <img src="{{ asset('images/mitra1.webp')}}" alt=""> --}}
          </div>
          @endforeach
      </div>
    </div>
    {{-- <div class="col-md-4 ">
      <div class="box">
        <div class="img-box">
          <img src="{{ asset('images/mitra2.png') }}" alt="">
        </div>
    </div>
  </div> --}}
  {{-- <div class="col-md-4 ">
    <div class="box">
      <div class="img-box">
        <img src="{{ asset('images/mitra3.png') }}" alt="">
      </div>
  </div>
</div> --}}
    </div>
  </div>
  </section>

  <!-- end about section -->

  <!-- Join Mitra section -->
  <section class="mitra_section layout_padding">
    <div class="container  ">
      <div class="row position-center">
        <div class="col-md-4 justify-content-center">
          <div class="box text-center">
            <div class="img-box">
              <h2>
                Join <span>Mitra</span>
              </h2>
              <a style="margin-top: 9px;" class="btn btn-primary" href="{{ url('/join') }}" role="button">Daftar Mitra</a>
          </div>
      </div>
    </div>
    <div class="col-md-4 ">
      <div class="box">
    </div>
  </div>
  <div class="col-md-4 justify-content-center">
    <div class="box text-center">
        <h2>
          Join <span>Customer</span>
        </h2>
        <a style="margin-top: 9px;" class="btn btn-primary" href="{{ url('/register') }}" role="button">Daftar Customer</a>
  </div>
</div>
    </div>
  </div>
  </section>
  <!-- end join section -->

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
