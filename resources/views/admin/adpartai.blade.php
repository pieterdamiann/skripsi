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
        <link rel="stylesheet" href="{{('assets/css/adpartai.css')}}" type="text/css">
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
                Ubah Partai
                </div>
                <div class="rbutton-2">
                    <a class="tambah" href="/addpartai">
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
                    <div class="judul">Nama Partai</div>
                    <div class="action">Aksi</div>
                </div>
                @foreach ($partai as $p)
                <div class="line-1"></div>
                <div class="info-1">
                    <div class="text-4">
                      {{$p->partai}}
                    </div>
                    <div class="rbutton-3">
                        @isset($anggota)
                        <a class="edit-1" href="/listanggota/{{$p->id}}">
                          <span class="text-4-2">
                              Pilih
                          </span>
                          </a>
                        @else
                          <a class="edit-1" href="/edit+partai/{{$p->id}}">
                            <span class="text-4-2">
                                Edit
                            </span>
                          </a>
                          <a class="delete-1">
                              <span class="text-4-2">
                              Delete
                              </span>
                          </a>
                        @endisset
                        
                    </div>
                </div>
                <div class="popup-container" id="popup-container">
                  <div class="popup">
                    <p>Apa anda yakin ingin menghapus Partai ini?</p>
                    <div class="buttons">
                        <form id="form-hapus" action="{{ route('delete.partai', $p->id) }}" method="post" enctype="multipart/form-data" class="w-full">
                          @csrf
                          <button class="confirm" onclick="deletePopup($p->id)">Yakin</button>
                        </form>
                        <button class="cancel" onclick="closePopup()">Batal</button>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
            <div class="rectangle-6">
            </div>
          </div>
    </body>
    <script>
      const popup = document.getElementById("popup-container");

      document.querySelectorAll(".delete-1").forEach((button) => {
        button.addEventListener("click", () => {
          popup.style.display = "flex";
        });
      });

      function closePopup() {
        popup.style.display = "none";
      }

      function deletePopup(id) {
        closePopup();
        window.location.href = "/delete+partai/" + id;
      }
    </script>
</html>
