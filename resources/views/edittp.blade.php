<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Tentang Pemilu</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{('assets/css/edittp.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="home">
          <div class="rectangle">
            <div class="navbar">
              <a class="logo1" href="/admin">
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
            <div class="rectangle-title">
                <div class="name">
                Edit Tentang Pemilu
                </div>
            </div>
            <div class="rectangle-2">
                <div class="rectangle-2-4">
                    <div class="link">Link</div>
                    <input type="text" class="text-4"></input>
                </div>
                <div class="rectangle-2-5">
                    <div class="desc">Deskripsi*</div>
                    <input type="text" class="text-5"></input>
                </div>
                <div class="rectangle-2-6">
                    <div class="hnews">Berita Utama?*</div>
                    <div class="rectangle-ya">
                        <div class="ya">Ya</div>
                    </div>
                    <div class="rectangle-tidak">
                        <div class="tidak">Tidak</div>
                    </div>
                </div>
                <div class="rectangle-2-7">
                    <div class="gbr">Unggah Gambar</div>
                    <input type="file" class="upload"></input>
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
          </div>
            <div class="rectangle-6">
            </div>
          </div>
    </body>
</html>
