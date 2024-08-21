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
        <link rel="stylesheet" href="{{url('/assets/css/detailpartai.css')}}" type="text/css">

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
                  <div class="berita">
                    <a href="/berita">Berita</a>
                  </div>
                  <div class="tentang-pemilu">
                    <a href="/tentangpemilu">Tentang Pemilu</a>
                  </div>
                  <div class="partai-1">
                    <a href="/partai">Partai</a>
                  </div>
                  <div class="tentang-kami">
                    <a href="/tentangkami">Tentang Kami</a>
                  </div>
                </div>
              </div>
              <div class="line-1"></div>
            <div class="partai-yang-tergabung-dalam-pemilu-2024">
                {{$partai->partai}}
            </div>
            <div class="rectangle-1">
                        <img style="background: url('/assets/{{ $partai['filename'] }}') center / contain no-repeat;
                            margin: 0 118px 9px 0;
                            width: 307px;
                            height: 347px;
                        " >
                    <div class="rectangle-1-1">
                        <div class="kotak-1">
                            <div class="judul-1">Tahun Dibentuk</div>
                            <div class="titik-1">:</div>
                            <div class="isi-1">{{ \Carbon\Carbon::parse($partai->tanggal_dibentuk)->translatedFormat('d F Y') }}
                            </div>
                        </div>
                        <div class="kotak-2">
                            <div class="judul-2">Ketua Umum</div>
                            <div class="titik-2">:</div>
                            <div class="isi-2">{{$partai->ketua_umum}}</div>
                        </div>
                        <div class="kotak-3">
                            <div class="judul-3">Kursi DPR</div>
                            <div class="titik-3">:</div>
                            <div class="isi-3">{{$partai->jumlah_kursi_dpr}}</div>
                        </div>
                        <div class="kotak-4">
                            <div class="judul-4">Kursi DPD</div>
                            <div class="titik-4">:</div>
                            <div class="isi-4">{{$partai->jumlah_kursi_dpd}}</div>
                        </div>
                        <div class="kotak-5">
                            <div class="judul-5">Kursi DPRD</div>
                            <div class="titik-5">:</div>
                            <div class="isi-5">{{$partai->jumlah_kursi_dprd}}</div>
                        </div>
                        <div class="kotak-6">
                            <div class="judul-6">Link Website</div>
                            <div class="titik-6">:</div>
                            <div class="isi-6">{{$partai->link}}</div>
                        </div>
                    </div>
            </div>
            <table>
              <thead>
                  <tr>
                      <th>Nama</th>
                      <th>Dapil</th>
                      <th>Nomor Urut</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($anggota as $ang)
                    <tr>
                        <td>{{$ang->nama_calon}}</td>
                        <td>{{$ang->daerah_pilih}}</td>
                        <td>{{$ang->nomor_urut}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

                {!! $anggota->links() !!}
                                
            <div class="rectangle-3">
            </div>
          </div>
    </body>
</html>
