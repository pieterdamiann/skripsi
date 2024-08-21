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
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button class="rectangle-login" type="submit">
                    <span class="login">
                      {{ __('Log Out') }}
                    </span>
                  </button>
                </form>
                
              </div>
            </div>
            <div class="name">
              Welcome Admin
            </div>
            <div class="rectangle-2">
              <a class="table-1" href="/listberita">
                <div class="rectangle-2-1">
                  <div class="text-3">
                    Edit Berita
                  </div>
                </div>
              </a>
              <a class="table-2" href="/listpartai">
                <div class="rectangle-2-2">
                  <div class="text-4">
                    Edit Partai
                  </div>
                </div>
              </a>
              <a class="table-3" href="/listtp">
                <div class="rectangle-2-3">
                  <div class="text-5">
                    Edit Tentang Pemilu
                  </div>
                </div>
              </a>

            </div>
            <div class="rectangle-2">
              <a class="table-4" href="/listpartaianggota">
                <div class="rectangle-3-1">
                  <div class="text-6">
                    Ubah Calon Anggota
                  </div>
                </div>
              </a>
          </div>
            <div class="rectangle-6">
            </div>
          </div>
    </body>
</html>
