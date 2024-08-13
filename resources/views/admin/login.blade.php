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
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-page">
            <div class="rectangle-1">
              <div class="rectangle-1-1">
                <div class="rectangle-1-1-1">
                  <a class="logo1" href="/admin+homepage">
                  </a>
                  <a class="text">For Admin</a>
                </div>
                <div class="selamat-datang">
                  Selamat Datang!
                </div>
              </div>
              <div class="rectangle-1-2">
                <x-input-label for="email" :value="__('Email')" class="email"/>
                <x-text-input id="email" class="rectangle-1-2-1" type="text" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="rectangle-1-3">
                <x-input-label for="password" :value="__('Kata Sandi')" class="kata-sandi"/>
                <x-text-input id="password" class="rectangle-1-3-1" type="password" name="password" :value="old('password')" required autofocus autocomplete="password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
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
              <x-primary-button class="rectangle-2">
                {{ __('Masuk') }}
              </x-primary-button>
              <div class="rectangle-3">
                <div class="powered-by">
                  Powered by
                </div>
                <div class="binus">
                </div>
              </div>
            </div>
          </div>
        </form>
    </body>
</html>
