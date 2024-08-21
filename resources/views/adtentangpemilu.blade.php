<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ubah Tentang Pemilu</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{('assets/css/adtentangpemilu.css')}}" type="text/css">
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
                Ubah Tentang Pemilu
                </div>
                <div class="rbutton-2">
                    <a class="tambah" href="/tambah+tp">
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
                    <div class="action">Aksi</div>
                </div>
                <div class="line-1"></div>
                <div class="info-1">
                    <div class="text-4">
                      Warna Surat Suara pada Pemilu 
                    </div>
                    <div class="rbutton-3">
                        <a class="edit-1" href="/edit+tp">
                        <div class="edit-11">
                        <span class="text-4-2">
                            Edit
                        </span>
                        </div>
                        </a>
                        <a class="delete-1" href="/delete+tp">
                        <div class="delete-11">
                            <span class="text-4-2">
                            Delete
                            </span>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="line-2"></div>
                <div class="info-2">
                    <div class="text-5">
                      Dimana Lokasi Saya dapat Mencoblos? 
                    </div>
                  <div class="rbutton-4">
                    <a class="edit-2" href="/edit+berita">
                    <div class="edit-22">
                      <span class="text-5-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-2" href="/delete+berita">
                      <div class="delete-22">
                        <span class="text-5-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-3"></div>
                <div class="info-3">
                    <div class="text-6">
                      Apa yang Perlu dipersiapkan agar bisa Terdaftar 
                    </div>
                  <div class="rbutton-5">
                    <a class="edit-3" href="/edit+berita">
                    <div class="edit-33">
                      <span class="text-6-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-3" href="/delete+berita">
                      <div class="delete-33">
                        <span class="text-6-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
            </div>
          </div>
            <div class="rectangle-6">
            </div>
          </div>
    </body>
</html>
