<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{('assets/css/login.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="login-page">
            <div class="rectangle-1">
              <div class="rectangle-1-1">
                <div class="rectangle-1-1-1">
                  <a class="logo1">
                  </a>
                </div>
                <div class="selamat-datang">
                  Selamat Datang!
                </div>
              </div>
              <div class="rectangle-1-2">
                <div class="email">
                  Email
                </div>
                <input type="text" autocomplete="false" class="rectangle-1-2-1"></input>
              </div>
              <div class="rectangle-1-3">
                <div class="kata-sandi">
                  Kata sandi
                </div>
                <input type="password" autocomplete="false" class="rectangle-1-3-1"></input>
              </div>
              <div class="rectangle-1-4">
                <p class="text-1">
                    Lupa Kata Sandi?
                  </p>
                  <a class="rectangle-1-5" href="/register">
                    <p class="text-2">
                      Belum Punya Akun? Daftar
                    </p>
                  </a>
            </div>
              <div class="rectangle-2">
                <span class="masuk">
                  Masuk
                </span>
              </div>
              <div class="rectangle-3">
                <div class="powered-by">
                  Powered by
                </div>
                <div class="binus">
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
