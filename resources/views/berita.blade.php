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
            <a class="logo1" href="/">
            </a>
            <div class="rbutton">
              <div class="berita1">
                <a href="/berita">Berita</a>
              </div>
              <div class="tentang-pemilu">
                <a href="/tentangpemilu">Tentang Pemilu</a>
              </div>
              <div class="partai">
                <a href="/partai">Partai</a>
              </div>
              <div class="tentang-kami">
                <a href="/tentangkami">Tentang Kami</a>
              </div>
            </div>
          </div>
          <div class="rectangle--1">
            <div class="berita-2">
              Berita
            </div>
            <div class="text-1">
              HEAD NEWS
            </div>
          </div>
          @foreach($berita_utama as $berita_u)
            <a
            href="/berita/{{$berita_u->id}}"
            style="text-decoration: none; color: black">
              <div class="rectangle-1">
                <div class="rectangle-1-1">
                  <img src="/assets/{{$berita_u->filename}}" alt="img">
                <div class="desc">
                  {{$berita_u->deskripsi}}
                </div>
              </div>
            </a>
            <div class="rectangle--2">
              <div>{{$berita_u}}</div>
          @endforeach
            
            <div class="berita-lainnya">
              Berita Lainnya
            </div>
            {{-- @foreach($berita as $berita)
              @if ($berita->berita_utama != 'ya')
                <a
                href="/berita/{{$berita->id}}"
                style="text-decoration: none; color: black">
                  <div class="rectangle-2">
                    <div class="text-4">
                      Pemerintah Antisipasi Dampak Ekonomi dari Konflik Iran Israel 
                    </div>
                    <span class="text-4-1">
                      16 April 2024
                    </span>
                  </div>
                </a>
                <div class="rectangle--2">
              @endif
            @endforeach --}}
            
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
            </div>
          </div>
          </div>
            <div class="rectangle-3">
            </div>
          </div>
    </body>
</html>
