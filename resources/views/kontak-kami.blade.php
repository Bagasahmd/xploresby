@extends('layouts.main')
@section('container')
<!-- Kontak Section -->

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
@endsection