<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ubah Partai</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{('assets/css/deletepartai.css')}}" type="text/css">
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
                Ubah Partai
                </div>
                <div class="rbutton-2">
                    <a class="tambah" href="/tambah+partai">
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
                      Partai PKB
                    </div>
                    <div class="rbutton-3">
                        <a class="edit-1" href="/edit+partai">
                        <div class="edit-11">
                        <span class="text-4-2">
                            Edit
                        </span>
                        </div>
                        </a>
                        <a class="delete-1" href="/delete+partai">
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
                      Partai Gerindra
                    </div>
                  <div class="rbutton-4">
                    <a class="edit-2" href="/edit+partai">
                    <div class="edit-22">
                      <span class="text-5-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-2" href="/delete+partai">
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
                      Partai PDIP
                    </div>
                  <div class="rbutton-5">
                    <a class="edit-3" href="/edit+partai">
                    <div class="edit-33">
                      <span class="text-6-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-3" href="/delete+partai">
                      <div class="delete-33">
                        <span class="text-6-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-4"></div>
                <div class="info-4">
                    <div class="text-7">
                      Partai Golkar
                    </div>
                  <div class="rbutton-6">
                    <a class="edit-4" href="/edit+partai">
                    <div class="edit-44">
                      <span class="text-7-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-4" href="/delete+partai">
                      <div class="delete-44">
                        <span class="text-7-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-5"></div>
                <div class="info-5">
                    <div class="text-8">
                      Partai Nasdem
                    </div>
                  <div class="rbutton-7">
                    <a class="edit-5" href="/edit+partai">
                    <div class="edit-55">
                      <span class="text-8-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-5" href="/delete+partai">
                      <div class="delete-55">
                        <span class="text-8-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-6"></div>
                <div class="info-6">
                    <div class="text-9">
                      Partai Buruh
                    </div>
                  <div class="rbutton-8">
                    <a class="edit-6" href="/edit+partai">
                    <div class="edit-66">
                      <span class="text-9-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-6" href="/delete+partai">
                      <div class="delete-66">
                        <span class="text-9-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-7"></div>
                <div class="info-7">
                    <div class="text-10">
                      Partai Gelora Indonesia
                    </div>
                  <div class="rbutton-9">
                    <a class="edit-7" href="/edit+partai">
                    <div class="edit-77">
                      <span class="text-10-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-7" href="/delete+partai">
                      <div class="delete-77">
                        <span class="text-10-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-8"></div>
                <div class="info-8">
                    <div class="text-11">
                      Partai PKS
                    </div>
                  <div class="rbutton-10">
                    <a class="edit-8" href="/edit+partai">
                    <div class="edit-88">
                      <span class="text-11-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-8" href="/delete+partai">
                      <div class="delete-88">
                        <span class="text-11-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-9"></div>
                <div class="info-9">
                    <div class="text-12">
                      Partai Kebangkitan Nusantara
                    </div>
                  <div class="rbutton-11">
                    <a class="edit-9" href="/edit+partai">
                    <div class="edit-99">
                      <span class="text-12-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-9" href="/delete+partai">
                      <div class="delete-99">
                        <span class="text-12-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-10"></div>
                <div class="info-10">
                    <div class="text-13">
                      Partai Hanura
                    </div>
                  <div class="rbutton-12">
                    <a class="edit-10" href="/edit+partai">
                    <div class="edit-100">
                      <span class="text-13-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-10" href="/delete+partai">
                      <div class="delete-100">
                        <span class="text-13-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-11"></div>
                <div class="info-11">
                    <div class="text-14">
                      Partai Garuda
                    </div>
                  <div class="rbutton-13">
                    <a class="edit-110" href="/edit+partai">
                    <div class="edit-1100">
                      <span class="text-14-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-110" href="/delete+partai">
                      <div class="delete-1100">
                        <span class="text-14-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-12"></div>
                <div class="info-12">
                    <div class="text-15">
                      Partai Amanat Nasional
                    </div>
                  <div class="rbutton-14">
                    <a class="edit-12" href="/edit+partai">
                    <div class="edit-120">
                      <span class="text-15-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-12" href="/delete+partai">
                      <div class="delete-120">
                        <span class="text-15-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-13"></div>
                <div class="info-13">
                    <div class="text-16">
                      Partai Bulan Bintang
                    </div>
                  <div class="rbutton-15">
                    <a class="edit-13" href="/edit+partai">
                    <div class="edit-130">
                      <span class="text-16-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-13" href="/delete+partai">
                      <div class="delete-130">
                        <span class="text-16-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-14"></div>
                <div class="info-14">
                    <div class="text-17">
                      Partai Demokrat
                    </div>
                  <div class="rbutton-16">
                    <a class="edit-14" href="/edit+partai">
                    <div class="edit-140">
                      <span class="text-17-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-14" href="/delete+partai">
                      <div class="delete-140">
                        <span class="text-17-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-15"></div>
                <div class="info-15">
                    <div class="text-18">
                      Partai Solidaritas Indonesia
                    </div>
                  <div class="rbutton-17">
                    <a class="edit-15" href="/edit+partai">
                    <div class="edit-150">
                      <span class="text-18-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-15" href="/delete+partai">
                      <div class="delete-150">
                        <span class="text-18-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-16"></div>
                <div class="info-16">
                    <div class="text-19">
                      Partai Perindo
                    </div>
                  <div class="rbutton-18">
                    <a class="edit-16" href="/edit+partai">
                    <div class="edit-160">
                      <span class="text-19-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-16" href="/delete+partai">
                      <div class="delete-160">
                        <span class="text-19-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-17"></div>
                <div class="info-17">
                    <div class="text-20">
                      PPP
                    </div>
                  <div class="rbutton-19">
                    <a class="edit-17" href="/edit+partai">
                    <div class="edit-170">
                      <span class="text-20-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-17" href="/delete+partai">
                      <div class="delete-170">
                        <span class="text-20-2">
                          Delete
                        </span>
                      </div>
                      </a>
                  </div>
                </div>
                <div class="line-18"></div>
                <div class="info-18">
                    <div class="text-21">
                      Partai Ummat
                    </div>
                  <div class="rbutton-20">
                    <a class="edit-18" href="/edit+partai">
                    <div class="edit-180">
                      <span class="text-21-2">
                        Edit
                      </span>
                    </div>
                    </a>
                    <a class="delete-18" href="/delete+partai">
                      <div class="delete-180">
                        <span class="text-21-2">
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
