<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Berita</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{('assets/css/berita.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="berita">
          <div class="rectangle">
            <div class="navbar">
              <a class="logo1" href="/home">
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
                <div class="berita1">
                  <a href="/berita">Berita</a>
                </div>
                <div class="tentang-pemilu">
                  <a href="/tentangpemilu">Tentang Pemilu</a>
                </div>
                <div class="partai">
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
              <div class="line-1"></div>
          <div class="rectangle--1">
            <div class="berita-2">
              Berita
            </div>
            <div class="text-1">
              HEAD NEWS
            </div>
          </div>
            @if(isset($berita_utama[0]))
            <div class="rectangle-1">
                <img src="{{ url('assets/'.$berita_utama[0]->filename) }}" alt="" width="770" height="500">
              <div class="desc">
                {{$berita_utama[0]->deskripsi}}
              </div>
            </div>
            @endif
            @if(isset($berita))
            <div class="rectangle--2">
            <div class="berita-lainnya">
              Berita Lainnya
            </div>
            @foreach ($berita as $ber)
            <div class="rectangle-2">
              <div class="text-4">
                {{$ber->judul}}
              </div>
              <span class="text-4-1">
                {{ \Carbon\Carbon::parse($ber->tanggal_terbit)->translatedFormat('d F Y') }}
              </span>
            </div>
            @endforeach
            @endif


            {{-- <div class="rectangle-2">
              <div class="text-4">
                Pemerintah Antisipasi Dampak Ekonomi dari Konflik Iran Israel 
              </div>
              <span class="text-4-1">
                16 April 2024
              </span>
            </div>
            <div class="rectangle-2">
              <div class="text-4">
                Pemerintah Antisipasi Dampak Ekonomi dari Konflik Iran Israel 
              </div>
              <span class="text-4-1">
                16 April 2024
              </span>
            </div>
            <div class="rectangle-2-1">
              <div class="text-5">
                Sikap Pemerintah soal Israel Diyakini Tidak Dipengaruhi Prabowo
              </div>
              <span class="text-5-1">
                15 April 2024
              </span>
            </div>
            <div class="rectangle-2-2">
              <div class="text-6">
                Menteri Pemuda dan Olahraga Terlibat dalam Kasus Pencucian Uang
              </div>
              <span class="text-6-1">
                8 Maret 2024
              </span>
            </div>
            <div class="rectangle-2-4">
              <div class="text-8">
                Menteri Pemuda dan Olahraga Terlibat dalam Kasus Pencucian Uang
              </div>
              <span class="text-8-1">
                8 Maret 2024
              </span>
            </div>
            <div class="rectangle-2-5">
              <div class="text-9">
                Menteri Pemuda dan Olahraga Terlibat dalam Kasus Pencucian Uang
              </div>
              <span class="text-9-1">
                8 Maret 2024
              </span>
            </div>
            <div class="rectangle-2-6">
              <div class="text-10">
                Menteri Pemuda dan Olahraga Terlibat dalam Kasus Pencucian Uang
              </div>
              <span class="text-10-1">
                8 Maret 2024
              </span>
            </div> --}}


          </div>
          </div>
            <div class="rectangle-3">
            </div>
          </div>
    </body>
</html>
