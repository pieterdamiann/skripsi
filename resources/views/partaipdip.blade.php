<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Partai</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{('assets/css/partai.css')}}" type="text/css"> --}}
        <link rel="stylesheet" href="{{('assets/css/partaipdip.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="partai">
          <div class="rectangle">
              <div class="navbar">
                <a class="logo1" href="/">
                </a>
                <div class="rbutton">
@auth
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="rectangle-login" type="submit">
                      <span class="login">
                        Logout
                      </span>
                    </button>
                  </form>
                  @else
                    <a class="masuk" href="/login">
                      <div class="rectangle-login">
                        <span class="login">
                          Login
                        </span>
                      </div>
                    </a>
                  @endauth
                </div>
              </div>
              <div class="rectangle-ext">
                <div class="rectangle-isi">
                  <div class="berita">
                    <a href="/berita">Berita</a>
                  </div>
                  <div class="tentang-pemilu">
                    <a href="/tentangpemilu">Tentang Pemilu</a>
                  </div>
                  <div class="partai-1">
                    <a href="/partai">Partai</a>
                  </div>
                  <div class="forum">
                    <a href="/forum">Forum</a>
                  </div>
                  <div class="tentang-kami">
                    <a href="/tentangkami">Tentang Kami</a>
                  </div>
                </div>
              </div>
              </div>
              <div class="line-1"></div>
            <div class="partai-yang-tergabung-dalam-pemilu-2024">
              Partai Demokrat Indonesia Perjuangan
            </div>
            <div class="rectangle-1">
                    <div class="pdip">
                    </div>
                    <div class="rectangle-1-1">
                        <div class="kotak-1">
                            <div class="judul-1">Tahun Dibentuk</div>
                            <div class="titik-1">:</div>
                            <div class="isi-1">10 Januari 1973</div>
                        </div>
                        <div class="kotak-2">
                            <div class="judul-2">Ketua Umum</div>
                            <div class="titik-2">:</div>
                            <div class="isi-2">Megawati Soekarnoputri</div>
                        </div>
                        <div class="kotak-3">
                            <div class="judul-3">Kursi DPR</div>
                            <div class="titik-3">:</div>
                            <div class="isi-3">128/575</div>
                        </div>
                        <div class="kotak-4">
                            <div class="judul-4">Kursi DPD</div>
                            <div class="titik-4">:</div>
                            <div class="isi-4">418.2.232</div>
                        </div>
                        <div class="kotak-5">
                            <div class="judul-5">Kursi DPRD</div>
                            <div class="titik-5">:</div>
                            <div class="isi-5">2.803/17.340</div>
                        </div>
                        <div class="kotak-6">
                            <div class="judul-6">Link Website</div>
                            <div class="titik-6">:</div>
                            <div class="isi-6">https://www.pdiperjuangan.id/</div>
                        </div>
                    </div>
            </div>
            <div class="rectangle-2">
              <div class="rectangle-2-1">
                <div class="text-nama">
                  Nama
                </div>
                <div class="text-dapil">Dapil</div>
                <div class="text-no">Nomor Urut</div>
              </div>
              <div class="line-2"></div>
              <div class="info-1">
                  <div class="text-11">Muhammad Ikhsan</div>
                  <div class="text-12">Aceh</div>
                  <div class="text-13">1</div>
              </div>
              <div class="line-2"></div>
              <div class="info-1">
                  <div class="text-11">Muhammad Ikhsan</div>
                  <div class="text-12">Aceh</div>
                  <div class="text-13">1</div>
              </div>
              <div class="line-2"></div>
              <div class="info-1">
                  <div class="text-11">Muhammad Ikhsan</div>
                  <div class="text-12">Aceh</div>
                  <div class="text-13">1</div>
              </div>
              <div class="line-2"></div>
              <div class="info-1">
                  <div class="text-11">Muhammad Ikhsan</div>
                  <div class="text-12">Aceh</div>
                  <div class="text-13">1</div>
              </div>
              <div class="line-2"></div>
              <div class="info-1">
                  <div class="text-11">Muhammad Ikhsan</div>
                  <div class="text-12">Aceh</div>
                  <div class="text-13">1</div>
              </div>
              <div class="line-2"></div>
              <div class="info-1">
                  <div class="text-11">Muhammad Ikhsan</div>
                  <div class="text-12">Aceh</div>
                  <div class="text-13">1</div>
              </div>
              <div class="line-2"></div>
              <div class="info-1">
                  <div class="text-11">Muhammad Ikhsan</div>
                  <div class="text-12">Aceh</div>
                  <div class="text-13">1</div>
              </div>
            </div>
            <div class="rectangle-3">
            </div>
          </div>
    </body>
</html>
