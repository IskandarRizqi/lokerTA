@extends('front.cvats.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="{{route('nonformal.store')}}" method="POST" style="width: 1070px;">

            @csrf
            {{-- <div class="page-header">
                <div class="page-title">
                    <a href="{{route('og.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class="font-weight-bold " style="color: blue;">Pendidikan Non Formal </h5>
                    <div class="widget widget-content-area br-1" style="height: 200%;">



                        <div class="widget-two">

                            <div class="row m-1">
                                <div class="col-lg-12 mt-3 text-right">
                                    <!-- Menggeser tombol ke kanan -->
                                    <!-- Tombol Create ditempatkan di sini -->
                                    <button class="btn btn-primary btn-sm" type="submit"> + Tambah</button>
                                </div>

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Nama Kursus/Workshop</label>
                                    <input type="hidden" name="idnonformal" value="">
                                    <input type="text" name="namakursus"
                                        class="form-control @error('namakursus') is-invalid @enderror" placeholder=""
                                        value="{{$n ? $n->namakursus : old('namakursus')}}">
                                    @error('namakursus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Institusi</label>
                                    <input type="hidden" name="idnonformal" value="">
                                    <input type="text" name="institusi"
                                        class="form-control @error('institusi') is-invalid @enderror" placeholder=""
                                        value="{{$n ? $n->institusi : old('institusi')}}">
                                    @error('institusi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row m-2">

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Tanggal Mulai</label>
                                    <input type="hidden" name="idnonformal" value="">
                                    <input type="date" name="tanggalmulai"
                                        class="form-control @error('tanggalmulai') is-invalid @enderror"
                                        placeholder="tanggalmulai"
                                        value="{{$n ? \Carbon\Carbon::parse($n->tanggalmulai)->format('Y-m-d') :old('tanggalmulai')}}">
                                    @error('tanggalmulai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Tanggal Selesai</label>
                                    <input type="hidden" name="idnonformal" value="">
                                    <input type="date" name="tanggalselesai"
                                        class="form-control @error('tanggalselesai') is-invalid @enderror"
                                        placeholder="DD-MM-YYYY"
                                        value="{{$n ? \Carbon\Carbon::parse($n->tanggalselesai)->format('Y-m-d') :old('tanggalselesai')}}">
                                    @error('tanggalselesai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="row m-1">
                                    <div class="col-lg-12 mt-4 text-left">

                                        <div>
                                            <input type="checkbox" id="ringkasanCheckbox"
                                                class="form-check-input @error('deskripsi') is-invalid @enderror"
                                                name="deskripsi" value="1">
                                            <label for="ringkasanCheckbox" style="color: black;">Bersertifikat</label>
                                        </div>
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




        <!-- CONTENT AREA -->

    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection