<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{('assets/css/adminhomepage.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="home">
          <div class="rectangle">
            <div class="navbar">
              <a class="logo1" href="/">
              </a>
              <a class="text">For Admin</a>
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
            <div class="line-01"></div>
            <div class="name">
              Welcome Admin
            </div>
            <div class="rectangle-2">
              <a class="table-1" href="/admin+berita">
                <div class="rectangle-2-1">
                  <div class="text-3">
                    Ubah Berita
                  </div>
                </div>
              </a>
              <a class="table-2" href="/admin+partai">
                <div class="rectangle-2-2">
                  <div class="text-4">
                    Ubah Partai
                  </div>
                </div>
              </a>
              <a class="table-3" href="/admin+tentangpemilu">
                <div class="rectangle-2-3">
                  <div class="text-5">
                    Ubah Tentang Pemilu
                  </div>
                </div>
              </a>
            </div>
            <div class="rectangle-3">
              <a class="table-4" href="/pilih+partai">
                <div class="rectangle-3-1">
                  <div class="text-6">
                    Ubah Calon Anggota
                  </div>
                </div>
              </a>
            </div>
          </div>
            <div class="rectangle-6">
            </div>
          </div>
    </body>
</html>
