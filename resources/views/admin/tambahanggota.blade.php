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
        <link rel="stylesheet" href="{{url( 'assets/css/tambahanggota.css')}}" type="text/css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <style>
            
        </style>
    </head>
    <body>
      @if (!isset($anggota) || $anggota == null)
        <form action="{{ route('add.anggota', ['partai_id' => $partai_id])}}" method="POST" enctype=multipart/form-data>
      @else
        <form action="{{ route('edit.anggota', ['partai_id' => $partai_id, 'id' => $anggota->id])}}" method="POST" enctype=multipart/form-data>
      @endif
        <div class="home">
          <div class="rectangle">
            <div class="navbar">
              <a class="logo1" href="/admin">
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
            <div class="line-01"></div>
            <div class="rectangle-title">
                <div class="name">
                  @if (!isset($anggota) || $anggota == null)
                  Tambah Anggota
                @else
                  Edit Anggota
                @endif
                </div>
            </div>
            <div class="rectangle-2">
              @if (!isset($anggota) || $anggota == null)
                <div class="rectangle-2-1">
                    <x-input-label for="nama_calon" :value="__('Nama Anggota*')" class="judul"/>
                    <x-text-input id="nama_calon" class="text-1" type="text" name="nama_calon" required autofocus/>
                    <x-input-error :messages="$errors->get('nama_calon')" class="mt-2" />
                </div>
                <div class="rectangle-2-2">
                    <x-input-label for="daerah_pilih" :value="__('Daerah Pilih*')" class="judul"/>
                    <x-text-input id="daerah_pilih" class="text-2" type="text" name="daerah_pilih" required autofocus/>
                    <x-input-error :messages="$errors->get('daerah_pilih')" class="mt-2" />
                </div>
                <div class="rectangle-2-3">
                    <x-input-label for="nomor_urut" :value="__('Nomor Urut*')" class="judul"/>
                    <x-text-input id="nomor_urut" class="text-3" type="text" name="nomor_urut" required autofocus/>
                    <x-input-error :messages="$errors->get('nomor_urut')" class="mt-2" />
                </div>
                <div class="rectangle-2-7">
                    <div class="gbr">Unggah Gambar*</div>
                    <x-text-input id="filename" class="upload" type="file" name="filename" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('{{url('/assets/picture-icon.jpg')}}')"></div>
                </div>
                <div class="rectangle-2-8">
                    <div class="text-7">Tanda * wajib diisi</div>
                </div>
                <div class="rectangle-2-9">
                    <button class="rectangle-submit">
                    Submit
                    </button>
                    <a class="rectangle-batal" onclick="redirectToHomePage()">
                    Batal
                    </a>
                </div>
              @else
              <div class="rectangle-2-1">
                <x-input-label for="nama_calon" :value="__('Nama Anggota*')" class="judul"/>
                <x-text-input id="nama_calon" class="text-1" type="text" name="nama_calon" :value="old('nama_calon') ?? $anggota->nama_calon  ?? ''" required autofocus/>
                <x-input-error :messages="$errors->get('nama_calon')" class="mt-2" />
                </div>
                <div class="rectangle-2-2">
                  <x-input-label for="daerah_pilih" :value="__('Daerah Pilih*')" class="judul"/>
                  <x-text-input id="daerah_pilih" class="text-2" type="text" name="daerah_pilih" :value="old('daerah_pilih') ?? $anggota->daerah_pilih  ?? ''" required autofocus/>
                  <x-input-error :messages="$errors->get('daerah_pilih')" class="mt-2" />
                </div>
                <div class="rectangle-2-3">
                    <x-input-label for="nomor_urut" :value="__('Nomor Urut*')" class="judul"/>
                    <x-text-input id="nomor_urut" class="text-3" type="text" name="nomor_urut" :value="old('nomor_urut') ?? $anggota->nomor_urut  ?? ''" required autofocus/>
                    <x-input-error :messages="$errors->get('nomor_urut')" class="mt-2" />
                </div>
                <div class="rectangle-2-7">
                    <div class="gbr">Unggah Gambar*</div>
                    <x-text-input id="filename" class="upload" type="file" name="filename" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
                </div>
                <div class="avatar-preview">
                    @if ($anggota->filename)
                    <div id="imagePreview" style="background-image: url('{{url('/assets/'.$anggota->filename)}}')"></div>
                  @else
                    <div id="imagePreview" style="background-image: url('{{url('/assets/picture-icon.jpg')}}')"></div>
                  @endif
                </div>
                <div class="rectangle-2-8">
                  <div class="text-7">Tanda * wajib diisi</div>
                </div>
                <div class="rectangle-2-9">
                    <button class="rectangle-submit">
                    Submit
                    </button>
                    <a class="rectangle-batal" onclick="redirectToHomePage()">
                    Batal
                    </a>
                </div>
              @endif
            </div>
          </div>
            <div class="rectangle-6">
            </div>
          </div>
        </form>
    </body>
    <script>
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
  </script>
</html>
