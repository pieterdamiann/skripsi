<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{('assets/css/homeforum.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="home">
          <div class="rectangle">
              <div class="navbar">
                <a class="logo1" href="/home">
                </a>
                <div class="rbutton">
                  <a class="masuk" href="/admin+login">
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
              <div class="line-1"></div>
              <div class="rectangle--1">
                <div class="berita-2">
                    Forum
                </div>
                <div class="rbutton-2">
                    <a class="tambah" href="/tambah+forum">
                    <div class="rectangle-tambah">
                        <span class="add">
                        + Tambah Forum
                        </span>
                    </div>
                    </a>
                </div>
              </div>
            <a class="forum-1" href="/forum+satu">
              <div class="rectangle-2" href="/forum+satu">
                <div class="text-4">
                  Pemerintah Antisipasi Dampak Ekonomi dari Konflik Iran Israel 
                </div>
                <span class="text-4-1">
                    dari Joko Widodo
                </span>
              </div>
            </a>
            <a class="forum-1" href="/forum+satu">
                <div class="rectangle-2" href="/forum+satu">
                  <div class="text-4">
                    Pemerintah Antisipasi Dampak Ekonomi dari Konflik Iran Israel 
                  </div>
                  <span class="text-4-1">
                    dari Joko Widodo
                  </span>
                </div>
              </a>
              <a class="forum-1" href="/forum+satu">
                <div class="rectangle-2" href="/forum+satu">
                  <div class="text-4">
                    Pemerintah Antisipasi Dampak Ekonomi dari Konflik Iran Israel 
                  </div>
                  <span class="text-4-1">
                    dari Joko Widodo
                  </span>
                </div>
              </a>
              <a class="forum-1" href="/forum+satu">
                <div class="rectangle-2" href="/forum+satu">
                  <div class="text-4">
                    Pemerintah Antisipasi Dampak Ekonomi dari Konflik Iran Israel 
                  </div>
                  <span class="text-4-1">
                    dari Joko Widodo
                  </span>
                </div>
              </a>
              <a class="forum-1" href="/forum+satu">
                <div class="rectangle-2" href="/forum+satu">
                  <div class="text-4">
                    Pemerintah Antisipasi Dampak Ekonomi dari Konflik Iran Israel 
                  </div>
                  <span class="text-4-1">
                    dari Joko Widodo
                  </span>
                </div>
              </a>
  
            {{-- <div class="line-1"></div> --}}
            {{-- <div class="berita-1">
              Berita
            </div>
            <img class="rectangle-1" src="{{url('/assets/'.$b->filename)}}">
              
            </div>
            <div class="tentang-pemilu-1">
              Tentang Pemilu
            </div>
              <div class="rectangle-2">
                @foreach ($tp as $t)
                  <a class="table-1" href="/detailpemilu/{{$t->id}}">
                    <div class="rectangle-2-1">
                      <div class="warna-pada-surat-suara-pemilu">
                          {{$t->judul}}
                      </div>
                      <div class="judul-surat">
                        <img src="/assets/{{$t->filename}}" class="gambar">
                      </div>
                    </div>
                  </a>
                @endforeach
              </div>
            <div class="partai-1">
              Partai
            </div>
            <div class="rectangle-3">
              @foreach ($p as $p)
                  <a class="table-1" href="/partaidetail/{{$p->id}}">
                    <div class="rectangle-3-1">
                      <div style="background: url('/assets/{{$p->filename}}') 50% / contain no-repeat;
                          width: 187px;
                          height: 211px;"></div>
                    </div>
                  </a>
                @endforeach
              <div class="rectangle-3-5">
                <div class="text">
                  Lainnya
                </div>
              </div>
            </div>
            <div class="tentang-kami-1">
              Tentang Kami
            </div>
            <div class="rectangle-4">
              <img class="logo-2" src="/assets/pemiluhijau3.svg" />
              <div class="desc-box">
                <div class="desc">
                  Pemilu Hijau adalah website yang mengusung tentang pemilu yang bertujuan agar
                  pengguna dapat mendapatkan informasi seputar pemilu, yang berupa berita-berita terbaru
                  pengetahuan tentang pemilu itu sendiri, partai yang tergabung dalam periode pemilu.
                  Selain itu, Pemilu Hijau juga dapat menjadi platform untuk para pengguna bertukar ideologi 
                  atau berdiskusi satu sama lain. Harapannya, Pemilu Hijau dapat menjadi website yang berguna untuk masyarakat.
                </div>
              </div>
            </div>
            <div class="rectangle-5">
              <div class="judul">Kritik dan Saran</div>
              <div class="format">
                <div class="name">
                  Name
                </div>
                <input type="text" autocomplete="false" class="rectangle-5-1"></input>
                <div class="email">
                  Email
                </div>
                <input type="text" autocomplete="false" class="rectangle-5-2"></input>
                <div class="feedback">
                  Kritik & Saran
                </div>
                <input type="text" autocomplete="false" class="rectangle-5-3"></input>
                <div class="submit-1">
                  <input type="submit" class="submit-1-1">
                  </input>
                </div>
              </div>
            </div> --}}
          </div>
            <div class="rectangle-6">
            </div>
          </div>
    </body>
</html>
