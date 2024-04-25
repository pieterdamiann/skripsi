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
        <link rel="stylesheet" href="{{('assets/css/tentangpemilu.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
    <div class="tentang-pemilu">
        <div class="navbar">
            <div class="logo1">
            </div>
            <div class="rbutton">
              <div class="berita">
                <a href="/berita">Berita</a>
              </div>
              <div class="tentang-pemilu-1">
                <a href="/tentangpemilu">Tentang Pemilu</a>
              </div>
              <div class="partai">
                <a href="/partai">Partai</a>
              </div>
              <div class="tentang-kami">
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
        <div class="tentang-pemilu-2">
            Tentang Pemilu
        </div>
        <div class="rectangle-1">
            <a class="table-1" href="suratpemilu">
              <div class="rectangle-1-1">
                <div class="warna-pada-surat-suara-pemilu">
                    Warna Pada Surat<br />
                    Suara Pemilu
                </div>
                <div class="rectangle-1-2">
                    <img class="ellipse"/>
                    <div class="mask-group">
                        <div class="kpu-logo">
                        </div>
                        <div class="dprd-kabupaten-kota">
                            DPRD KABUPATEN/ KOTA
                        </div>
                        <div class="rectangle-1-3">
                        </div>
                    </div>
                </div>
              </div>
            </a>
            <div class="rectangle-2">
              <span class="dimana-lokasi-saya-dapat-mencoblos">
                  Dimana lokasi saya dapat mencoblos?
              </span>
            </div>
            <div class="rectangle-3">
              <span class="apa-yang-perlu-dipersiapkan-agar-bisa-terdaftar">
                  Apa yang Perlu dipersiapkan agar bisa terdaftar?
              </span>
            </div>
        </div>
        <div class="rectangle-4">
        </div>
    </div>
    </body>
</html>
