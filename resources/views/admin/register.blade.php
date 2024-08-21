<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{('assets/css/register.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
      <form action="{{ route('register')}}" method="POST">
        @csrf
        <div class="register-page">
            <div class="rectangle-1">
              <div class="rectangle-1-1">
                <div class="rectangle-1-1-1">
                  <a class="logo1" href="/admin">
                  </a>
                  <a class="text">For Admin</a>
                </div>
                <div class="selamat-datang">
                  Selamat Datang!
                </div>
              </div>
              <div class="rectangle-1-2">
                <x-input-label for="nama_depan" :value="__('Nama Depan')" class="nama-depan"/>
                <x-text-input id="nama_depan" class="rectangle-1-2-1" type="text" name="nama_depan" :value="old('nama_depan')" required autofocus autocomplete="nama_depan" />
                <x-input-error :messages="$errors->get('nama_depan')" class="mt-2" />
              </div>
              <div class="rectangle-1-3">
                <x-input-label for="nama_belakang" :value="__('Nama Belakang')" class="nama-belakang"/>
                <x-text-input id="nama_belakang" class="rectangle-1-3-1" type="text" name="nama_belakang" :value="old('nama_belakang')" required autofocus autocomplete="nama_belakang" />
                <x-input-error :messages="$errors->get('nama_belakang')" class="mt-2" />
              </div>
              <div class="rectangle-1-4">
                <x-input-label for="email" :value="__('Email')" class="email"/>
                <x-text-input id="email" class="rectangle-1-4-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="rectangle-1-5">
                <x-input-label for="password" :value="__('Kata Sandi')" class="kata-sandi"/>
                <x-text-input id="password" class="rectangle-1-5-1" type="password" name="password" :value="old('password')" required autofocus autocomplete="password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              <div class="rectangle-1-6">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata sandi')" class="konfirmasi-kata-sandi"/>
                <x-text-input id="password_confirmation" class="rectangle-1-6-1" type="password" name="password_confirmation" :value="old('password_confirmation')" required autofocus autocomplete="password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>
              <x-primary-button class="rectangle-1-7">
                {{ __('Daftar') }}
              </x-primary-button>
              <div class="rectangle-2">
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
