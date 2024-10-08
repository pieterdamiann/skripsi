<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tentang Pemilu</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{('assets/css/tentangkami.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="tentang-kami">
          <div class="navbar">
            <a class="logo1" href="/">
            </a>
            <div class="rbutton">
              <div class="berita">
                <a href="/berita">Berita</a>
              </div>
              <div class="tentang-pemilu">
                <a href="/tentangpemilu">Tentang Pemilu</a>
              </div>
              <div class="partai">
                <a href="/partai">Partai</a>
              </div>
              <div class="tentang-kami-1">
                <a href="/tentangkami">Tentang Kami</a>
              </div>
              <a class="masuk" href="login">
                <div class="rectangle-login">
                  <span class="login">
                    Login
                  </span>
                </div>
              </a>
            </div>
          </div>
            <div class="tentang-kami-2">
              Tentang Kami
            </div>
            <div class="rectangle-3">
              <div class="logo-1" style="background: url({{$tentangKami->path_gambar}}) 50% / cover no-repeat;">
              </div>
              <div class="desc">
                {{$tentangKami->deskripsi}}
              </div>
            </div>
            <div class="rectangle-4">
            </div>
          </div>
    </body>
</html>
