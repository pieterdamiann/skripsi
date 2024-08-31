<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{url('assets/css/forumsatu.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
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
              <div class="line-1"></div>
              <div class="rectangle--1">
                <div class="berita-2">
                    Forum
                </div>
                {{-- <div class="rbutton-2">
                    <a class="tambah" href="/tambah+forum">
                    <div class="rectangle-tambah">
                        <span class="add">
                        + Tambah Forum
                        </span>
                    </div>
                    </a>
                </div> --}}
              </div>
              <div class="rectangle-2">
                <div class="rectangle--2">
                    <div class="text-4">
                      {{$forum->judul}}
                    </div>
                    <button type="submit" class="delete-1" style="background: none; border: none; cursor: pointer; color: #133611;">
                      <img src="/assets/trashijo.png" alt="" style="width: 20px; height: 20px;">
                    </button>
                </div>
                <span class="text-4-1">
                  dari {{$forum->penulis}}
                </span>
                <span class="text-4-2">
                    {{$forum->deskripsi}}
                </span>
              </div>
                <div class="rectangle-2-1">
                  <form action="{{ route('add.comment') }}" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: row;">
                    @csrf
                    <input type="hidden" name="forum_id" value="{{$forum->id}}">
                    <input type="hidden" name="penulis" value="{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}">
                    <textarea placeholder="Komentar Saya......" class="text-4-1" name="comment" rows="5" style="flex: 1;"></textarea>
                    <button type="submit" style="background: none; border: none; cursor: pointer; color: #133611;">
                      <img src="/assets/sendijo.png" alt="" style="width: 20px; height: 20px;">
                    </button>
                  </form>
                </div>
                @isset($comments)
                  @foreach ($comments as $comment)
                  <div class="rectangle-2-2">
                    <div class="text-4">
                      {{$comment->penulis}}
                    </div>
                    <span class="text-4-1">
                      {{$comment->comment}}
                    </span>
                  </div>
                  @endforeach
                @endisset
  
            {{-- <div class="line-1"></div> --}}
            {{-- <div class="berita-1">
              Berita
            </div>
            <img class="rectangle-1" src="{{url('/assets/'.$b->filename)}}">
              
            </div>
            <div class="tentang-pemilu-1">
              Tentang Pemilu
            </div>
              <div class="rectangle-2">
                @foreach ($tp as $t)
                  <a class="table-1" href="/detailpemilu/{{$t->id}}">
                    <div class="rectangle-2-1">
                      <div class="warna-pada-surat-suara-pemilu">
                          {{$t->judul}}
                      </div>
                      <div class="judul-surat">
                        <img src="/assets/{{$t->filename}}" class="gambar">
                      </div>
                    </div>
                  </a>
                @endforeach
              </div>
            <div class="partai-1">
              Partai
            </div>
            <div class="rectangle-3">
              @foreach ($p as $p)
                  <a class="table-1" href="/partaidetail/{{$p->id}}">
                    <div class="rectangle-3-1">
                      <div style="background: url('/assets/{{$p->filename}}') 50% / contain no-repeat;
                          width: 187px;
                          height: 211px;"></div>
                    </div>
                  </a>
                @endforeach
              <div class="rectangle-3-5">
                <div class="text">
                  Lainnya
                </div>
              </div>
            </div>
            <div class="tentang-kami-1">
              Tentang Kami
            </div>
            <div class="rectangle-4">
              <img class="logo-2" src="/assets/pemiluhijau3.svg" />
              <div class="desc-box">
                <div class="desc">
                  Pemilu Hijau adalah website yang mengusung tentang pemilu yang bertujuan agar
                  pengguna dapat mendapatkan informasi seputar pemilu, yang berupa berita-berita terbaru
                  pengetahuan tentang pemilu itu sendiri, partai yang tergabung dalam periode pemilu.
                  Selain itu, Pemilu Hijau juga dapat menjadi platform untuk para pengguna bertukar ideologi 
                  atau berdiskusi satu sama lain. Harapannya, Pemilu Hijau dapat menjadi website yang berguna untuk masyarakat.
                </div>
              </div>
            </div>
            <div class="rectangle-5">
              <div class="judul">Kritik dan Saran</div>
              <div class="format">
                <div class="name">
                  Name
                </div>
                <input type="text" autocomplete="false" class="rectangle-5-1"></input>
                <div class="email">
                  Email
                </div>
                <input type="text" autocomplete="false" class="rectangle-5-2"></input>
                <div class="feedback">
                  Kritik & Saran
                </div>
                <input type="text" autocomplete="false" class="rectangle-5-3"></input>
                <div class="submit-1">
                  <input type="submit" class="submit-1-1">
                  </input>
                </div>
              </div>
            </div> --}}
          </div>
            <div class="rectangle-6">
            </div>
          </div>
          <div class="popup-container" id="popup-container">
            <div class="popup">
              <p>Apa anda yakin ingin menghapus Forum ini?</p>
              <div class="buttons">
                <form id="form-hapus" action="{{ route('delete.forum', $forum->id) }}" method="post" enctype="multipart/form-data" class="w-full">
                  @csrf
                  <button class="confirm" onclick="deletePopup($forum->id)">Yakin</button>
                </form>

                  <button class="cancel" onclick="closePopup()">Batal</button>
              </div>
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
        window.location.href = "/delete+forum/" + id;
      }
    </script>
</html>
