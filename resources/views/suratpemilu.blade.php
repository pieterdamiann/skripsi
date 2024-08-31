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
        <link rel="stylesheet" href="{{url('assets/css/suratpemilu.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="tentang-pemilu-1">
          <div class="rectangle">
          <div class="navbar">
            <a class="logo1" href="/">
            </a>
            <div class="rbutton">
              <a class="masuk" href="/user+login">
                <div class="rectangle-login">
                  <span class="login">
                    Login
                  </span>
                </div>
              </a>
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
          </div>
          <div class="line-1"></div>
            <div class="tentang-pemilu-2">
              Tentang Pemilu
            </div>
            <div class="rectangle-2">
              <div class="judul">
                {{$tp->judul}}
              </div>
              <div class="desc">
                {{$tp->deskripsi}}
              </div>
              <div class="rectangle-2-1">
                <div class="gambar">
                  <img class="desc-surat" src="/assets/{{$tp->filename}}"/>
                </div>
              </div>
            </div>
          </div>
              <div class="rectangle-3">
                <a class="back" href="/tentangpemilu">
                <span class="lainnya">
                  Lainnya
                </span>
                </a>
              </div>
            <div class="rectangle-4">
            </div>
          </div>
    </body>
</html>
