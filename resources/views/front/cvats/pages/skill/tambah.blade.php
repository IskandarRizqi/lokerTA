@extends('front.cvats.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="{{route('skill.store')}}" method="POST" style="width: 1070px; ">

            @csrf
            {{-- <div class="page-header">
                <div class="page-title">
                    <a href="{{route('og.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class="font-weight-bold " style="color: blue;">SKILL </h5>
                    <div class="widget widget-content-area br-1" style="height: 200%;">



                        <div class="widget-two">

                            <div class="row m-1">
                                <div class="col-lg-12 mt-3 text-right">
                                    <!-- Menggeser tombol ke kanan -->
                                    <!-- Tombol Create ditempatkan di sini -->
                                    <button class="btn btn-primary btn-sm" type="submit"> + Tambah Skill</button>
                                </div>
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Bidang</label>
                                    <select name="bidang"
                                        class="form-control  basic  @error('bidang') is-invalid @enderror">
                                        @foreach($bdg as $val)
                                        @if($s)
                                        <option value="{{$val}}" {{$s->bidang == $val ? 'selected' : ''}}>{{$val}}
                                        </option>
                                        @else
                                        <option value="{{$val}}" {{old('bidang')==$val ? 'selected' : '' }}>{{$val}}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('bidang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Bagian</label>
                                    <select name="bagian"
                                        class="form-control  basic  @error('bagian') is-invalid @enderror">
                                        @foreach($bgn as $val)
                                        @if($s)
                                        <option value="{{$val}}" {{$s->bagian == $val ? 'selected':''}}>{{$val}}
                                        </option>
                                        @else
                                        <option value="{{$val}}" {{old('bagian')==$val ? 'selected' :''}}>{{$val}}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('bagian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Keahlian</label>
                                    <input type="hidden" name="idskill" value="">
                                    <input type="text" name="ahli"
                                        class="form-control @error('ahli') is-invalid @enderror" placeholder=""
                                        value="{{$s ? $s->ahli : old('ahli')}}">
                                    @error('ahli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>




                            </div>



                            <div class="row m-1">
                                <div class="col-lg-12">
                                    <label for="form-control" style="color: black;">Deskripsikan Skill Anda</label>
                                    <textarea cols="30" rows="5"
                                        class="form-control  @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi">{{$s ? $s->deskripsi : old('deskripsi')}}</textarea>
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