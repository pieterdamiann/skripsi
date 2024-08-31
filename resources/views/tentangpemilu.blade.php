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
                <div class="berita">
                  <a href="/berita">Berita</a>
                </div>
                <div class="tentang-pemilu-1">
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
        <div class="rectangle-1">
            @foreach ($tp as $t)
              <a class="table-1" href="/detailpemilu/{{$t->id}}">
                <div class="rectangle-1-1">
                  <div class="warna-pada-surat-suara-pemilu">
                      {{$t->judul}}
                  </div>
                  <div class="judul-surat">
                    <img src="/assets/{{$t->filename}}" class="gambar">
                  </div>
                </div>
              </a>
            @endforeach
            {{-- <a class="table-1" href="suratpemilu">
              <div class="rectangle-1-1">
                <div class="warna-pada-surat-suara-pemilu">
                    Warna Pada Surat<br />
                    Suara Pemilu
                </div>
                <div class="judul-surat">
                  <img src="/assets/judulsurat.png" class="gambar">
                </div>
              </div>
            </a>
            <a class="table-2" href="lokasicoblos">
              <div class="rectangle-2">
                <span class="dimana-lokasi-saya-dapat-mencoblos">
                    Dimana lokasi saya dapat mencoblos?
                </span>
              </div>
            </a>
            <a class="table-3" href="persiapan">
              <div class="rectangle-3">
                <span class="apa-yang-perlu-dipersiapkan-agar-bisa-terdaftar">
                    Apa yang Perlu dipersiapkan agar bisa terdaftar?
                </span>
              </div>
            </a> --}}
        </div>
      </div>
        <div class="rectangle-4">
        </div>
    </div>
    </body>
</html>
