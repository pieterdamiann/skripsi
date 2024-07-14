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
        <link rel="stylesheet" href="{{('assets/css/home.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="home">
          <div class="rectangle">
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
                  <div class="tentang-kami">
                    <a href="/tentangkami">Tentang Kami</a>
                  </div>
                </div>
              </div>
            <div class="line-1"></div>
            <div class="berita-1">
              Berita
            </div>
            <div class="rectangle-1">
              <div class="text-1">
                Presiden dan Wakil Presiden <br />
                Periode 2024 - 2029
              </div>
              <div class="rectangle-1-1">
                <img class="mask" src="/assets/prabowo.jpg" />
                <img class="mask-1" src="/assets/gibran.jpg" />
              </div>
              <span class="text-2">
                Prabowo Sugianto<br />
                &amp;<br />
                K. P. H. Gibran Rakabuming Raka, B.Sc.
              </span>
            </div>
            <div class="tentang-pemilu-1">
              Tentang Pemilu
            </div>
              <div class="rectangle-2">
                <a class="table-1" href="suratpemilu">
                  <div class="rectangle-2-1">
                    <div class="text-3">
                      Warna Pada Surat<br />
                      Suara Pemilu
                    </div>
                    <div class="judul-surat">
                      <img src="/assets/judulsurat.png" class="gambar">
                    </div>
                  </div>
                </a>
                <a class="table-2" href="lokasicoblos">
                  <div class="rectangle-2-2">
                    <span class="text-5">
                      Dimana lokasi saya dapat mencoblos?
                    </span>
                  </div>
                </a>
                <a class="table-3" href="persiapan">
                  <div class="rectangle-2-3">
                    <span class="text-6">
                      Apa yang Perlu dipersiapkan agar bisa terdaftar?
                    </span>
                  </div>
                </a>
              </div>
            <div class="partai-1">
              Partai
            </div>
            <div class="rectangle-3">
              <div class="rectangle-3-1">
                <div class="pdip">
                </div>
              </div>
              <div class="rectangle-3-2">
                <div class="gerindra">
                </div>
              </div>
              <div class="rectangle-3-3">
                <div class="golkar">
                </div>
              </div>
              <div class="rectangle-3-4">
                <div class="psi">
                </div>
              </div>
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
                  Dengan adanya website ini, diharapkan dapat mengurangi bahilo yang sering bertebaran
                  dijalanan menjelang pemilu agar tidak menambah limbah sampah.
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
            </div>
          </div>
            <div class="rectangle-6">
            </div>
          </div>
    </body>
</html>
