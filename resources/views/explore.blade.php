@extends('layouts.main')
@section('container')
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
                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Temukan wisata terbaikmu anda disini" />
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
            <li data-filter=".alam">Alam</li>
            <li data-filter=".kuliner">Kuliner</li>
            <li data-filter=".Belanja">Belanja</li>
            <li data-filter=".Sejarah">Sejarah</li>
          </ul>
  
          <div class="filters-content">
            <div class="row grid">
              <div class="col-sm-6 col-lg-4 all alam">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="img/mangrove.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>Wisata Mangrove</h5>
                      <p>Wisata alam hutan mangrove menyajikan keindahan alam yang indah dan menyenangkan</p>
                      <div class="options">
                        <h6>Rp15.000 - Rp30.000</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 all kuliner">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="img/kyakya.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>Kya Kya Street Food</h5>
                      <p>Terdapat banyak stand street food yang menjajaan masakan khas chinese yang pasti lezat dan bikin nagih</p>
                      <div class="options">
                        <h6>HTM FREE</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 all Belanja">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="img/tunjungan.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>Tunjungan</h5>
                      <p>Terdapat pusat perbelanjaan dan juga banyak toko yang terdapat di Jl Tunjungan Surabaya</p>
                      <div class="options">
                        <h6>HTM FREE</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 all Sejarah">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="img/monkasel.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>Museum Kapal Selam</h5>
                      <p>Terletak di pusat kota,KRI Pasopati 410, salah satu armada Angkatan Laut Republik Indonesia buatan Uni Soviet</p>
                      <div class="options">
                        <h6>Rp15.000,-</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 all alam">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="img/mangrove.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>Wisata Mangrove</h5>
                      <p>Wisata alam hutan mangrove menyajikan keindahan alam yang indah dan menyenangkan</p>
                      <div class="options">
                        <h6>Rp15.000 - Rp30.000</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 all Sejarah">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="img/monkasel.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>Museum Kapal Selam</h5>
                      <p>Terletak di pusat kota,KRI Pasopati 410, salah satu armada Angkatan Laut Republik Indonesia buatan Uni Soviet</p>
                      <div class="options">
                        <h6>Rp15.000,-</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 all alam">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="img/mangrove.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>Wisata Mangrove</h5>
                      <p>Wisata alam hutan mangrove menyajikan keindahan alam yang indah dan menyenangkan</p>
                      <div class="options">
                        <h6>Rp15.000 - Rp30.000</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 all kuliner">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="img/kyakya.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>Kya Kya Street Food</h5>
                      <p>Terdapat banyak stand street food yang menjajaan masakan khas chinese yang pasti lezat dan bikin nagih</p>
                      <div class="options">
                        <h6>HTM FREE</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 all Belanja">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="img/tunjungan.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>Tunjungan</h5>
                      <p>Terdapat pusat perbelanjaan dan juga banyak toko yang terdapat di Jl Tunjungan Surabaya</p>
                      <div class="options">
                        <h6>HTM FREE</h6>
                        <a href=""> > </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href=""> Tampilkan semua </a>
          </div>
        </div>
      </section>
      <!-- Explore Section -->

@endsection