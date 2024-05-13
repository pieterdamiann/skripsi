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
        <link rel="stylesheet" href="{{('assets/css/adberita.css')}}" type="text/css">
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
            <div class="rectangle-title">
                <div class="name">
                Edit Berita
                </div>
                <div class="rbutton-2">
                    <a class="tambah" href="/tambah+berita">
                    <div class="rectangle-tambah">
                        <span class="add">
                        + Add
                        </span>
                    </div>
                    </a>
                </div>
            </div>
            <div class="rectangle-2">
                <div class="rectangle-2-1">
                    <div class="judul">Judul</div>
                    <div class="terbit">Tanggal Terbit</div>
                </div>
              {{-- <a class="table-1" href="suratpemilu">
                <div class="rectangle-2-1">
                  <div class="text-3">
                    Edit Berita
                  </div>
                </div>
              </a>
              <a class="table-2" href="lokasicoblos">
                <div class="rectangle-2-2">
                  <div class="text-4">
                    Edit Partai
                  </div>
                </div>
              </a>
              <a class="table-3" href="persiapan">
                <div class="rectangle-2-3">
                  <div class="text-5">
                    Edit Tentang Pemilu
                  </div>
                </div>
              </a> --}}
            </div>
          </div>
            <div class="rectangle-6">
            </div>
          </div>
    </body>
</html>
