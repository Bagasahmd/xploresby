@extends('layouts.main')
@section('container')
<!-- Search Section -->

    <div class="container p-top40">
      <div class="row">
        <section id="kontak">
            <section class="kontak_section">
              <div class="container">
                <div class="heading_container text-center p-top20">
                  <h2>Kontak Kami</h2>
                  <h6>Anda dapat menuliskan pesan, saran, dan kritik</h6>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form_container p-top40">
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

  <!-- End of Search Section -->    
<!-- Kontak Section -->
    
      <!-- End of Kontak Section -->
@endsection