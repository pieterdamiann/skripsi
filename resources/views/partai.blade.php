<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Partai</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{('assets/css/partai.css')}}" type="text/css"> --}}
        <link rel="stylesheet" href="{{('assets/css/partai.css')}}" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="partai">
          <div class="rectangle">
              <div class="navbar">
                <a class="logo1" href="/">
                </a>
                <div class="rbutton">
                  <a class="masuk" href="/user+login">
                    <div class="rectangle-login">
                      <span class="login">
                        Login
                      </span>
                    </div>
                  </a>
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
                  <div class="partai-1">
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
              </div>
              <div class="line-1"></div>
            <div class="partai-yang-tergabung-dalam-pemilu-2024">
              Partai yang Tergabung dalam Pemilu 2024
            </div>
            <div class="rectangle-1">
                {{-- @php $counter = 0 @endphp
                @foreach ($partai as $p)
                  @if( $counter % 5 === 0 && $counter !== 0) 
                    <div class="rectangle-1-1">
                      <a href="/partaidetail">
                        <div class="pkb">
                      </a>
                      </div>
                      <div class="gerindra">
                      </div>
                      <a href="/partai+pdip" class="pdip">
                      </a>
                      <div class="golkar">
                      </div>
                      <div class="nasdem">
                      </div>
                    </div>
                  @endif
                  @php $counter++ @endphp
                @endforeach --}}
                @foreach ($partai as $arr_partai)
                  <div class="rectangle-1-1">
                    @foreach ($arr_partai as $p)
                      <a href="/partaidetail/{{ $p['id'] }}">
                        <img style="background: url('/assets/{{ $p['filename'] }}') center / contain no-repeat;
                        margin-right: 131px;
                        width: 179px;
                        height: 228px;
                        object-fit: contain;
                        border: none;">
                      </a>
                    @endforeach
                  </div>
                @endforeach
                {{-- <a href="/partaidetail">
                  <div class="pkb">
                </a>
                </div>
                <div class="gerindra">
                </div>
                <a href="/partai+pdip" class="pdip">
                </a>
                <div class="golkar">
                </div>
                <div class="nasdem">
                </div>
              </div>
              <div class="rectangle-1-2">
                <div class="buruh">
                </div>
                <div class="gelora">
                </div>
                <div class="pks">
                </div>
                <div class="pkn">
                </div>
                <div class="hanura">
                </div>
              </div>
              <div class="rectangle-1-3">
                <div class="garuda">
                </div>
                <div class="pan">
                </div>
                <div class="pbb">
                </div>
                <div class="demokrat">
                </div>
                <div class="psi">
                </div>
              </div>
              <div class="rectangle-1-4">
                <div class="perindo">
                </div>
                <div class="ppp">
                </div>
                <div class="ummat">
                </div>
              </div> --}}
            </div>
          </div>
            <div class="rectangle-2">
            </div>
          </div>
    </body>
</html>
