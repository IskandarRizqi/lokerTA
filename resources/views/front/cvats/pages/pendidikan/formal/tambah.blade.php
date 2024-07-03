@extends('front.cvats.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="{{route('formal.store')}}" method="POST" style="width: 1070px;">

            @csrf
            {{-- <div class="page-header">
                <div class="page-title">
                    <a href="{{route('og.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class="font-weight-bold " style="color: blue;">Pendidikan Formal </h5>

                    <div class="widget widget-content-area br-1" style="height: 200%;">

                        <div class="widget-two">
                            <div class="row m-1">

                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Tingkatan Sekolah/Aktivitas</label>
                                    <select name="tingkatansekolah"
                                        class="form-control  basic  @error('tingkatansekolah') is-invalid @enderror">
                                        @foreach($tkn as $val)
                                        @if($f)
                                        <option value="{{$val}}" {{$f->tingkatansekolah == $val ? 'selected' :
                                            ''}}>{{$val}}</option>
                                        @else
                                        <option value="{{$val}}" {{old('tingkatansekolah')==$val ? 'selected' : '' }}>
                                            {{$val}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('tingkatansekolah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Nama Sekolah/Universitas</label>
                                    <input type="hidden" name="idformal" value="">
                                    <input type="text" name="namasekolah"
                                        class="form-control @error('namasekolah') is-invalid @enderror" placeholder=""
                                        value="{{$f ? $f->namasekolah : old('namasekolah')}}">
                                    @error('namasekolah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Jurusan</label>
                                    <input type="hidden" name="idformal" value="">
                                    <input type="text" name="jurusan"
                                        class="form-control @error('jurusan') is-invalid @enderror" placeholder=""
                                        value="{{$f ? $f->jurusan : old('jurusan')}}">
                                    @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row m-2">

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Tanggal Mulai</label>
                                    <input type="hidden" name="idformal" value="">
                                    <input type="date" name="tanggalmulai"
                                        class="form-control @error('tanggalmulai') is-invalid @enderror"
                                        placeholder="DD-MM-YYYY"
                                        value="{{$f ? \Carbon\Carbon::parse($f->tanggalmulai)->format('Y-m-d') : old('tanggalmulai')}}">
                                    @error('tanggalmulai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Tanggal Selesai</label>
                                    <input type="hidden" name="idformal" value="">
                                    <input type="date" name="tanggalselesai"
                                        class="form-control @error('tanggalselesai') is-invalid @enderror"
                                        placeholder="DD-MM-YYYY"
                                        value="{{$f ? \Carbon\Carbon::parse($f->tanggalselesai)->format('Y-m-d') : old('tanggalselesai')}}">
                                    @error('tanggalselesai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>


                            <div class="row m-2">

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Gelar</label>
                                    <select name="gelar"
                                        class="form-control  basic  @error('gelar') is-invalid @enderror">
                                        @foreach($glr as $val)
                                        @if($f)
                                        <option value="{{$val}}" {{$f->namasekolah == $val ? 'selected' : ''}}>{{$val}}
                                        </option>
                                        @else
                                        <option value="{{$val}}" {{old('gelar')==$val ? 'selected' : '' }}>{{$val}}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('gelar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">IPK</label>
                                    <input type="hidden" name="idformal" value="">
                                    <input type="int" name="IPK" class="form-control @error('IPK') is-invalid @enderror"
                                        placeholder="" value="{{$f ? $f->IPK : old('IPK')}}">
                                    @error('IPK')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>




                            <div class="row m-1">
                                <div class="col-lg-12">
                                    <label for="form-control" style="color: black;">Aktifitas & Pencapaian</label>
                                    <textarea cols="30" rows="5"
                                        class="form-control  @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi">{{$f ? $f->deskripsi : old('deskripsi')}}</textarea>
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
                                <button class="btn btn-primary btn-sm" type="submit">SIMPAN & LANJUTKAN</button>
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