<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tambah Partai</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{url('assets/css/tambahpartai.css')}}" type="text/css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        @if (!isset($partai) || $partai == null)
        <form action="{{ route('add.partai')}}" method="POST" enctype=multipart/form-data>
      @else
        <form action="{{ route('edit.partai', $partai->id)}}" method="POST" enctype=multipart/form-data>
      @endif
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
                    @if (!isset($partai) || $partai == null)
                    Tambah Partai
                  @else
                    Edit Partai
                  @endif
                </div>
            </div>
            <div class="rectangle-2">
                @if (!isset($partai) || $partai == null)
                    <div class="rectangle-2-1">
                        <x-input-label for="partai" :value="__('Nama Partai*')" class="judul"/>
                        <x-text-input id="partai" class="text-1" type="text" name="partai" required autofocus/>
                        <x-input-error :messages="$errors->get('partai')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-2">
                        <x-input-label for="tanggal_dibentuk" :value="__('Tanggal Partai Dibentuk*')" class="tanggal"/>
                        <x-text-input id="tanggal_dibentuk" class="text-2" type="date" name="tanggal_dibentuk" required autofocus/>
                        <x-input-error :messages="$errors->get('tanggal_dibentuk')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-3">
                        <x-input-label for="ketua_umum" :value="__('Nama Ketua Umum*')" class="nama"/>
                        <x-text-input id="ketua_umum" class="text-3" type="text" name="ketua_umum" required autofocus/>
                        <x-input-error :messages="$errors->get('ketua_umum')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-4">
                        <x-input-label for="jumlah_kursi_dpr" :value="__('Jumlah Kursi DPR*')" class="link"/>
                        <x-text-input id="jumlah_kursi_dpr" class="text-4" type="text" name="jumlah_kursi_dpr" required autofocus/>
                        <x-input-error :messages="$errors->get('jumlah_kursi_dpr')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-5">
                        <x-input-label for="jumlah_kursi_dpd" :value="__('Jumlah Kursi DPD*')" class="desc"/>
                        <x-text-input id="jumlah_kursi_dpd" class="text-5" type="text" name="jumlah_kursi_dpd" required autofocus/>
                        <x-input-error :messages="$errors->get('jumlah_kursi_dpd')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-6">
                        <x-input-label for="jumlah_kursi_dprd" :value="__('Jumlah Kursi DPRD*')" class="hnews"/>
                        <x-text-input id="jumlah_kursi_dprd" class="text-6" type="text" name="jumlah_kursi_dprd" required autofocus/>
                        <x-input-error :messages="$errors->get('jumlah_kursi_dprd')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-4">
                        <x-input-label for="link" :value="__('Link')" class="link"/>
                        <x-text-input id="link" class="text-4" type="text" name="link"/>
                        <x-input-error :messages="$errors->get('link')" class="mt-2" />
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
                        <x-input-label for="partai" :value="__('Nama Partai*')" class="judul"/>
                        <x-text-input id="partai" class="text-1" type="text" name="partai" :value="old('partai') ?? $partai->partai ?? ''" required autofocus/>
                        <x-input-error :messages="$errors->get('partai')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-2">
                        <x-input-label for="tanggal_dibentuk" :value="__('Tanggal Partai Dibentuk*')" class="tanggal"/>
                        <x-text-input id="tanggal_dibentuk" class="text-2" type="date" name="tanggal_dibentuk" :value="old('tanggal_dibentuk') ?? $partai->tanggal_dibentuk ?? ''" required autofocus/>
                        <x-input-error :messages="$errors->get('tanggal_dibentuk')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-3">
                        <x-input-label for="ketua_umum" :value="__('Nama Ketua Umum*')" class="nama"/>
                        <x-text-input id="ketua_umum" class="text-3" type="text" name="ketua_umum" :value="old('ketua_umum') ?? $partai->ketua_umum ?? ''" required autofocus/>
                        <x-input-error :messages="$errors->get('ketua_umum')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-4">
                        <x-input-label for="jumlah_kursi_dpr" :value="__('Jumlah Kursi DPR*')" class="link"/>
                        <x-text-input id="jumlah_kursi_dpr" class="text-4" type="text" name="jumlah_kursi_dpr" :value="old('jumlah_kursi_dpr') ?? $partai->jumlah_kursi_dpr ?? ''" required autofocus/>
                        <x-input-error :messages="$errors->get('jumlah_kursi_dpr')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-5">
                        <x-input-label for="jumlah_kursi_dpd" :value="__('Jumlah Kursi DPD*')" class="desc"/>
                        <x-text-input id="jumlah_kursi_dpd" class="text-5" type="text" name="jumlah_kursi_dpd" :value="old('jumlah_kursi_dpd') ?? $partai->jumlah_kursi_dpd ?? ''" required autofocus/>
                        <x-input-error :messages="$errors->get('jumlah_kursi_dpd')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-6">
                        <x-input-label for="jumlah_kursi_dprd" :value="__('Jumlah Kursi DPRD*')" class="hnews"/>
                        <x-text-input id="jumlah_kursi_dprd" class="text-6" type="text" name="jumlah_kursi_dprd" :value="old('jumlah_kursi_dprd') ?? $partai->jumlah_kursi_dprd ?? ''" required autofocus/>
                        <x-input-error :messages="$errors->get('jumlah_kursi_dprd')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-4">
                        <x-input-label for="link" :value="__('Link')" class="link"/>
                        <x-text-input id="link" class="text-4" type="text" name="link" :value="old('link') ?? $partai->link ?? ''"/>
                        <x-input-error :messages="$errors->get('link')" class="mt-2" />
                    </div>
                    <div class="rectangle-2-7">
                        <div class="gbr">Unggah Gambar*</div>
                        <x-text-input id="filename" class="upload" type="file" name="filename" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
                    </div>
                    <div class="avatar-preview">
                        @if ($partai->filename)
                        <div id="imagePreview" style="background-image: url('{{url('/assets/'.$partai->filename)}}')"></div>
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
