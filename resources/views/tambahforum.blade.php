<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tambah Berita</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{url('/assets/css/tambahforum.css')}}" type="text/css">

        <style>
            
        </style>
    </head>
    <body>
      @if (!isset($forum) || $forum == null)
        <form action="{{ route('add.forum')}}" method="POST" enctype=multipart/form-data>
      @else
        <form action="{{ route('edit.forum', $forum->id)}}" method="POST" enctype=multipart/form-data>
      @endif
        <div class="home">
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
            <div class="line-01"></div>
            <div class="rectangle-title">
                <div class="name">
                Tambah Forum
                </div>
            </div>
            @if (!isset($forum) || $forum == null)
              <div class="rectangle-2">
                <div class="rectangle-2-1">
                    <x-input-label for="judul" :value="__('Judul Forum*')" class="judul"/>
                    <x-text-input id="judul" class="text-1" type="text" name="judul" required autofocus/>
                    <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                </div>
                <div class="rectangle-2-3">
                  <x-input-label for="penulis" :value="__('Nama Penerbit*')" class="nama"/>
                  <x-text-input id="penulis" class="text-3" type="text" name="penulis" required autofocus/>
                  <x-input-error :messages="$errors->get('penulis')" class="mt-2" />
                </div>
                <div class="rectangle-2-5">
                  <x-input-label for="deskripsi" :value="__('Deskripsi*')" class="desc"/>
                  <x-text-input id="deskripsi" class="text-5" type="text" name="deskripsi" required autofocus/>
                  <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                </div>
                <div class="rectangle-2-8">
                    <div class="text-6">Tanda * wajib diisi</div>
                </div>
                <div class="rectangle-2-9">
                  <button class="rectangle-submit">
                    Submit
                  </button>
                  <a class="rectangle-batal" onclick="redirectToHomePage()">
                    Batal
                  </a>
                </div>
              </div>
              @else
                <div class="rectangle-2">
                <div class="rectangle-2-1">
                    <x-input-label for="judul" :value="__('Judul Forum*')" class="judul"/>
                    <x-text-input id="judul" class="text-1" type="text" name="judul" value="{{ old('judul') ?? $forum->judul ?? '' }}" required autofocus/>
                    <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                </div>
                <div class="rectangle-2-3">
                  <x-input-label for="penulis" :value="__('Nama Penerbit*')" class="nama"/>
                  <x-text-input id="penulis" class="text-3" type="text" name="penulis" value="{{ old('penulis') ?? $forum->penulis ?? '' }}" required autofocus/>
                  <x-input-error :messages="$errors->get('penulis')" class="mt-2" />
                </div>
                <div class="rectangle-2-5">
                  <x-input-label for="deskripsi" :value="__('Deskripsi*')" class="desc"/>
                  <x-text-input id="deskripsi" class="text-5" type="text" name="deskripsi" value="{{ old('deskripsi') ?? $forum->deskripsi ?? '' }}" required autofocus/>
                  <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                </div>
                <div class="rectangle-2-8">
                    <div class="text-6">Tanda * wajib diisi</div>
                </div>
                <div class="rectangle-2-9">
                    <div class="rectangle-submit">
                        <div class="submit">Submit</div>
                    </div>
                    <div class="rectangle-batal">
                        <div class="batal">Batal</div>
                    </div>
                </div>
              </div>
              @endif
            </div>
            <div class="rectangle-6">
            </div>
          </div>
    </body>
    <script>
      function redirectToHomePage() {
        window.location.href = '{{ route('forum') }}';
      }
    </script>
</html>
