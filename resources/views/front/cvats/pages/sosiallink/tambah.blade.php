@extends('front.cvats.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="{{route('sosiallink.store')}}" method="POST" style="width: 1070px" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class="font-weight-bold " style="color: blue;">Sosial Link </h5>
                    <div class="widget widget-content-area br-1" style="height: 300%;">



                        <div class="widget-two">

                            <div class="row m-1">
                                <div class="col-lg-12 mt-3 text-right">
                                    <!-- Menggeser tombol ke kanan -->

                                    <button class="btn btn-primary btn-sm" type="submit"> Tambah</button>
                                </div>
                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Facebook</label>
                                    <input type="hidden" name="idsosiallink" value="">
                                    <input type="text" name="facebook"
                                        class="form-control @error('facebook') is-invalid @enderror" placeholder=""
                                        value="{{$s ? $s->facebook :old('facebook')}}">
                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Instagram</label>
                                    <input type="hidden" name="idsosiallink" value="">
                                    <input type="text" name="instagram"
                                        class="form-control @error('instagram') is-invalid @enderror" placeholder=""
                                        value="{{$s ? $s->instagram :old('instagram')}}">
                                    @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>





                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Tiktok</label>
                                    <input type="hidden" name="idsosiallink" value="">
                                    <input type="text" name="tiktok"
                                        class="form-control @error('tiktok') is-invalid @enderror" placeholder=""
                                        value="{{$s ? $s->tiktok :old('tiktok')}}">
                                    @error('tiktok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Linkedin</label>
                                    <input type="hidden" name="idsosiallink" value="">
                                    <input type="text" name="linkedin"
                                        class="form-control @error('linkedin') is-invalid @enderror" placeholder=""
                                        value="{{$s ? $s->linkedin :old('linkedin')}}">
                                    @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-lg-12 mt-3 text-right">
                                <!-- Menggeser tombol ke kanan -->
                                <!-- Tombol Create ditempatkan di sini -->
                                {{-- <a href="{{route('sosiallink.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                                <!-- Tombol Create ditempatkan di sini --> --}}
                                <button class="btn btn-primary btn-sm" type="submit"
                                    style="color: #502ACD">SIMPAN</button>
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