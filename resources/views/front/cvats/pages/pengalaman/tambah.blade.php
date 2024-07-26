@extends('front.cvats.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="{{route('pengalaman.store')}}" method="POST" style="width: 1070px;">

            @csrf
            {{-- <div class="page-header">
                <div class="page-title">
                    <a href="{{route('og.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class="font-weight-bold " style="color: blue;">Riwayat Pekerjaan </h5>
                    <div class="widget widget-content-area br-1" style="height: 100%;">



                        <div class="widget-two">

                            <div class="row m-2">
                                {{-- <div class="col-lg-12 mt-3 text-right">
                                    <!-- Menggeser tombol ke kanan -->
                                    <!-- Tombol Create ditempatkan di sini -->
                                    <button class="btn btn-primary btn-sm" type="submit"> + Riwayat Kerja</button>
                                </div> --}}

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Perusahaan</label>
                                    <input type="hidden" name="idpengalaman" value="">
                                    <input type="text" name="perusahaan"
                                        class="form-control @error('perusahaan') is-invalid @enderror"
                                        placeholder="PT. Karya Indonesia"
                                        value="{{$p ? $p->perusahaan : old('perusahaan')}}">
                                    @error('perusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">

                                    <label for="form-control" style="color: black;">Posisi Kerja</label>
                                    <input type="hidden" name="idperusahaan" value="">
                                    <input type="text" name="posisikerja"
                                        class="form-control @error('posisikerja') is-invalid @enderror" placeholder=""
                                        value="{{$p ? $p->posisikerja : old('posisikerja')}}">
                                    @error('posisikerja')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row m-2">

                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Kota</label>
                                    <input type="hidden" name="idperusahaan" value="">
                                    <input type="text" name="kota"
                                        class="form-control @error('kota') is-invalid @enderror" placeholder=""
                                        value="{{$p ? $p->kota : old('kota')}}">
                                    @error('kota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-8">
                                    <label for="form-control" style="color: black;">Negara</label>
                                    <input type="hidden" name="idperusahaan" value="">
                                    <input type="text" name="negara"
                                        class="form-control @error('negara') is-invalid @enderror" placeholder=""
                                        value="{{$p ? $p->negara : old('negara')}}">
                                    @error('negara')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row m-2">

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Tanggal Mulai</label>
                                    <input type="hidden" name="idperusahaan" value="">
                                    <input type="date" name="tanggalmulai"
                                        class="form-control @error('tanggalmulai') is-invalid @enderror" placeholder=""
                                        value="{{$p ? \Carbon\Carbon::parse($p->tanggalmulai)->format('Y-m-d') : old('tanggalmulai')}}">
                                    @error('tanggalmulai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Tanggal Selesai</label>
                                    <input type="hidden" name="idperusahaan" value="">
                                    <input type="date" name="tanggalselesai"
                                        class="form-control @error('tanggalselesai') is-invalid @enderror"
                                        placeholder=""
                                        value="{{$p ? \Carbon\Carbon::parse($p->tanggalselesai)->format('Y-m-d') : old('tanggalselesai')}}">
                                    @error('tanggalselesai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>



                            <div class="row m-1">
                                <div class="col-lg-12 text-left">
                                    <label for="form-control" style="color: black;">Ringkasan Tentang Pekerjaan
                                        Anda</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <textarea cols="30" rows="5"
                                        class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                        oninput="checkWordCount(this)">{{ $p ? $p->deskripsi : old('deskripsi') }}</textarea>
                                    <div id="wordCount">Kata: 0 / 250</div>
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3 text-right">
                                <!-- Menggeser tombol ke kanan -->
                                <!-- Tombol Create ditempatkan di sini -->
                                <button class="btn btn-primary btn-sm" type="submit">SIMPAN</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </form>


        <script>
            function checkWordCount(textarea) {
                var text = textarea.value;
                var words = text.trim().split(/\s+/);
                var wordCount = words.length;
            
                if (wordCount > 250) {
                    // Jika jumlah kata melebihi batasan, potong teks menjadi 250 kata
                    var limitedText = words.slice(0, 250).join(' ');
                    textarea.value = limitedText;
                    wordCount = 250;
                }
            
                document.getElementById('wordCount').innerText = 'Kata: ' + wordCount + ' / 250';
            }
        </script>

        <!-- CONTENT AREA -->

    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection