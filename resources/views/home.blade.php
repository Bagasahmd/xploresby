<<<<<<< HEAD
=======


>>>>>>> 3caeca8 (add some features)
@extends('layouts.main')
@section('container')
    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-6 hero-text my-auto">
              <h1>Membantu Temukan Tempat Menarik di Surabaya.</h1>
              <p>Bingung mau jalan-jalan kemana saat di Surabaya? Xplore Surabaya hadir untuk temukan tempat menarik dan terbaik.</p>
<<<<<<< HEAD
              <a href="/explore"><button class="btn-pri-hero">Temukan Disini</button></a>
=======
              <button class="btn-pri-hero">Temukan Disini</button>
>>>>>>> 3caeca8 (add some features)
              <img src="img/arrow.svg" alt="" />
            </div>
          </div>
          <img src="img/hero.png" alt="" class="position-absolute end-0 bottom-0 hero-img" />
        </div>
      </section>
      <!-- End of Hero Section -->
  
      <!-- Layanan -->
      <section id="layanan">
        <div class="container p-btm20">
          <div class="row">
            <div class="col-12 text-center">
              <h2>Layanan Kami</h2>
              <p class="sub-title">Xplore Surabaya hadir menjadi solusi bagi kamu menemukan tempat terbaik</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card-layanan text-center shadow">
                <div class="circle-icon">
                  <img src="img/search-icon.png" alt="" />
                </div>
                <h3>Cari Destinasi</h3>
<<<<<<< HEAD
                <p>Membantu mencari destinasi terbaik yang dapat kamu kunjungi dengan berbagai pilihan menarik</p>
=======
                <p>Cari destinasi terbaik yang dapat kamu kunjungi dengan berbagai pilihan menarik</p>
>>>>>>> 3caeca8 (add some features)
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-layanan text-center shadow">
                <div class="circle-icon">
                  <img src="img/tiket-icon.png" alt="" />
                </div>
                <h3>Tiket Wisata</h3>
                <p>Anda dapat memesan tiket untuk reservasi dan nikmati keindahan Kota Surabaya</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-layanan text-center shadow">
                <div class="circle-icon">
                  <img src="img/info-icon.png" alt="" />
                </div>
                <h3>Pusat Informasi</h3>
                <p>Anda dapat mengetahui informasi destinasi wisata sebelum anda mengunjunginya</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Layanan -->
  
      <!-- Search Section -->
      <section id="cari">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2>Temukan Destinasi Terbaik</h2>
              <p>Sekarang Anda dapat menghemat waktu dengan pencarian destinasi terbaik</p>
            </div>
          </div>
        </div>
        <div class="col-8 mx-auto">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane show active">
              <div class="input-group mb-3 input-cari">
<<<<<<< HEAD
                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Temukan wisata terbaikmu anda disini" />
=======
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded=""><img class="img-icon" src="img/home-icon.png" alt="" />Jenis Wisata</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Wisata Kuliner</a></li>
                  <li><a class="dropdown-item" href="#">Wisata Belanja</a></li>
                  <li><a class="dropdown-item" href="#">Wisata Alam</a></li>
                  <li><a class="dropdown-item" href="#">Wisata Sejarah</a></li>
                </ul>
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="img-icon" src="img/range-icon.png" alt="" />Lokasi</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Surabaya Barat</a></li>
                  <li><a class="dropdown-item" href="#">Surabaya Timur</a></li>
                  <li><a class="dropdown-item" href="#">Surabaya Utara</a></li>
                  <li><a class="dropdown-item" href="#">Surabaya Selatan</a></li>
                  <li><a class="dropdown-item" href="#">Surabaya Pusat</a></li>
                </ul>
                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari sesuai kebutuhan anda disini" />
>>>>>>> 3caeca8 (add some features)
                <button class="btn-cari">Cari</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Search Section -->
  
      <!-- Explore Section -->
      <section id="explore" class="explore_section layout_padding-bottom layout_padding-top">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>Explore Tempat Wisata</h2>
          </div>
  
          <ul class="filters_menu">
            <li class="active" data-filter="*">All</li>
            <li data-filter=".Alam">Alam</li>
            <li data-filter=".Kuliner">Kuliner</li>
            <li data-filter=".Belanja">Belanja</li>
            <li data-filter=".Sejarah">Sejarah</li>
          </ul>
  
          <div class="filters-content">
            <div class="row grid">

<<<<<<< HEAD
              @forelse ($wisatas as $item)
              <div class="col-sm-6 col-lg-4 all {{ $item->kategori }}">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="{{ asset('storage/'.$item->file_name) }}" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>{{ $item->nama }}</h5>
                      <p>{{ $item->deskripsi }}</p>
                      <div class="options">
                        <h6>Kategori : {{ $item->kategori }}</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <h1 class="text-center text-gray-600">
                  Data Wisata Tidak Tersedia
              </h1>
              @endforelse
            </div>
          </div>
=======
              
              <h1 class="text-center text-gray-600">
                  Data Wisata Tidak Tersedia
              </h1>
              
              
              
            </div>
          </div>
          <div class="btn-box p-top40">
            <a href=""> Tampilkan semua </a>
          </div>
>>>>>>> 3caeca8 (add some features)
        </div>
      </section>
      <!-- Explore Section -->
  
  
      <!-- Kontak Section -->
<<<<<<< HEAD

    <div class="container p-top40">
      <div class="row">
        <section id="kontak">
            <section class="kontak_section">
              <div class="container">
                <div class="heading_container text-center">
                  <h2>Kontak Kami</h2>
                  <h6>Anda dapat menuliskan pesan, saran, dan kritik</h6>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form_container">
                      @if (Session::has('message_sent'))
                        <div class="alert alert-success" role="alert">
                          {{ Session::get('message_sent') }}
                        </div>
                      @endif
                      <form method="POST" enctype="multipart/form-data" action="{{ route('contact.send') }}">
                        <div>
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" class="form-control" placeholder="Nama" />
                        </div>
                        <div>
                          <label for="hp">HP</label>
                          <input type="text" name="hp" class="form-control" placeholder="Nomor HP/WA" />
                        </div>
                        <div>
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="E-mail" />
                        </div>
                        <div>
                          <label for="pesan">Pesan</label>
                          <input type="text" name="pesan" class="form-control" placeholder="Tulis Pesan Anda Disini" />
                        </div>
                        <div class="btn_box">
                          <button type="submit">Kirim</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6 my-auto">
                    <div class="text-center">
                      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                      <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_in4cufsz.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;"  loop  autoplay></lottie-player>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </section>
      </div>
    </div>

<!-- End of Kontak Section -->
=======
      <section id="kontak">
        <section class="kontak_section layout_padding-top layout_padding-bottom">
          <div class="container">
            <div class="heading_container text-center">
              <h2>Kontak Kami</h2>
              <h6>Anda dapat menuliskan pesan, saran, dan kritik</h6>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form_container">
                  <form action="">
                    <div>
                      <input type="text" class="form-control" placeholder="Nama" />
                    </div>
                    <div>
                      <input type="text" class="form-control" placeholder="Nomor HP/WA" />
                    </div>
                    <div>
                      <input type="email" class="form-control" placeholder="E-mail" />
                    </div>
                    <div>
                      <input type="text" class="form-control" placeholder="Isi Pesan" />
                    </div>
                    <div class="btn_box">
                      <button>Kirim</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6 mx-auto">
                <div class="text-center">
                  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                  <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_in4cufsz.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;"  loop  autoplay></lottie-player>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!-- End of Kontak Section -->
>>>>>>> 3caeca8 (add some features)
  
@endsection
    