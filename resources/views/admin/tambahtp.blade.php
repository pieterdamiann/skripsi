<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tambah Tentang Pemilu</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{url('assets/css/tambahtp.css')}}" type="text/css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
            
        </style>
    </head>
    <body>
      @if (!isset($tp) || $tp == null)
        <form action="{{ route('add.tp')}}" method="POST" enctype=multipart/form-data>
      @else
        <form action="{{ route('edit.tp', $tp->id)}}" method="POST" enctype=multipart/form-data>
      @endif
        @csrf
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
                      @auth
                      Logout
                      @else
                        Login
                      @endauth
                    </span>
                  </button>
                </form>
              </div>
            </div>
            <div class="rectangle-title">
                <div class="name">
                  @if (!isset($tp) || $tp == null)
                  Tambah Tentang Pemilu
                @else
                  Edit Tentang Pemilu
                @endif
                </div>
            </div>
            @if (!isset($tp) || $tp == null)
            <div class="rectangle-2">
                <div class="rectangle-2-1">
                  <x-input-label for="judul" :value="__('Judul Berita*')" class="judul"/>
                  <x-text-input id="judul" class="text-1" type="text" name="judul" required autofocus/>
                  <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                </div>
                <div class="rectangle-2-2">
                  <x-input-label for="tanggal_terbit" :value="__('Hari dan Tanggal Penerbit*')" class="tanggal"/>
                  <x-text-input id="tanggal_terbit" class="text-2" type="date" name="tanggal_terbit" required autofocus/>
                  <x-input-error :messages="$errors->get('tanggal_terbit')" class="mt-2" />
                </div>
                <div class="rectangle-2-3">
                  <x-input-label for="nama_penerbit" :value="__('Nama Penerbit*')" class="nama"/>
                  <x-text-input id="nama_penerbit" class="text-3" type="text" name="nama_penerbit" required autofocus/>
                  <x-input-error :messages="$errors->get('nama_penerbit')" class="mt-2" />
                </div>
                <div class="rectangle-2-4">
                  <x-input-label for="link" :value="__('Link')" class="link"/>
                  <x-text-input id="link" class="text-4" type="text" name="link"/>
                  <x-input-error :messages="$errors->get('link')" class="mt-2" />
                </div>
                <div class="rectangle-2-5">
                  <x-input-label for="deskripsi" :value="__('Deskripsi*')" class="desc"/>
                  <textarea cols="30" rows="10"  id="deskripsi" class="text-5" name="deskripsi" required autofocus></textarea>
                  <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                </div>
                <div class="rectangle-2-7">
                  <div class="gbr">Unggah Gambar</div>
                    <x-text-input id="filename" class="upload" type="file" name="filename" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
                </div>
                <div class="avatar-preview">
                  <div id="imagePreview" style="background-image: url('{{url('/assets/picture-icon.jpg')}}')"></div>
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
          </div>
          @else
            <div class="rectangle-2">
                <div class="rectangle-2-1">
                  <x-input-label for="judul" :value="__('Judul Berita*')" class="judul"/>
                  <x-text-input id="judul" class="text-1" type="text" name="judul" :value="old('judul', $tp->judul ?? '')" required autofocus/>
                  <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                </div>
                <div class="rectangle-2-2">
                  <x-input-label for="tanggal_terbit" :value="__('Hari dan Tanggal Penerbit*')" class="tanggal"/>
                  <x-text-input id="tanggal_terbit" class="text-2" type="date" name="tanggal_terbit" :value="old('tanggal_terbit', $tp->tanggal_terbit ?? '')" required autofocus/>
                  <x-input-error :messages="$errors->get('tanggal_terbit')" class="mt-2" />
                </div>
                <div class="rectangle-2-3">
                  <x-input-label for="nama_penerbit" :value="__('Nama Penerbit*')" class="nama"/>
                  <x-text-input id="nama_penerbit" class="text-3" type="text" name="nama_penerbit" :value="old('nama_penerbit', $tp->nama_penerbit ?? '')" required autofocus/>
                  <x-input-error :messages="$errors->get('nama_penerbit')" class="mt-2" />
                </div>
                <div class="rectangle-2-4">
                  <x-input-label for="link" :value="__('Link')" class="link"/>
                  <x-text-input id="link" class="text-4" type="text" name="link" :value="old('link', $tp->link ?? '')"/>
                  <x-input-error :messages="$errors->get('link')" class="mt-2" />
                </div>
                <div class="rectangle-2-5">
                  <x-input-label for="deskripsi" :value="__('Deskripsi*')" class="desc"/>
                  <textarea cols="30" rows="10"  id="deskripsi" class="text-5" name="deskripsi" required autofocus>{{ old('deskripsi') ?? $tp->deskripsi ?? '' }}</textarea>
                  <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                </div>
                <div class="rectangle-2-7">
                  <div class="gbr">Unggah Gambar</div>
                    <x-text-input id="filename" class="upload" type="file" name="filename" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
                </div>
                <div class="avatar-preview">
                  @if ($tp->filename)
                    <div id="imagePreview" style="background-image: url('{{url('/assets/'.$tp->filename)}}')"></div>
                  @else
                    <div id="imagePreview" style="background-image: url('{{url('/assets/picture-icon.jpg')}}')"></div>
                  @endif
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
          @endif
          </div>
            <div class="rectangle-6">
            </div>
          </div>
    <script>
      window.onload = function() {
        var targetButton = document.getElementById('tombolcancel');
        targetButton.style.display = 'none';
        targetButton.disabled = true;
      }
      function setBerita(value){
        var set_tp_utama = document.getElementById('tp_utama');
        set_tp_utama.value = value;
        toggleButton()
      }

      function redirectToHomePage() {
          window.location.href = '{{ route('listtp') }}';
      }

      function previewImage(file){
        if(file.files && file.files[0]){
          var reader = new FileReader();
          reader.onload = function(e) {
            $("#imagePreview").css('background-image', 'url(' +e.target.result+ ')');
            $("#imagePreview").hide();
            $("#imagePreview").fadeIn(700);
          }
          reader.readAsDataURL(file.files[0]);
        }
      }

      function toggleButton() {
        var tombolcancel = document.getElementById('tombolcancel');
        var tombolya = document.getElementById('tombolya');
        var tomboltidak = document.getElementById('tomboltidak');
        if (tombolcancel.style.display === 'none') {
          tombolcancel.style.display = 'inline-block';
          tombolcancel.disabled = false;

          tombolya.style.display = 'none';
          tombolya.disabled = true;

          tomboltidak.style.display = 'none';
          tomboltidak.disabled = true;
        } else {
          tombolcancel.style.display = 'none';
          tombolcancel.disabled = true;

          tombolya.style.display = 'inline-block';
          tombolya.disabled = false;

          tomboltidak.style.display = 'inline-block';
          tomboltidak.disabled = false;
        }
      }
    </script>
    </body>

</html>
