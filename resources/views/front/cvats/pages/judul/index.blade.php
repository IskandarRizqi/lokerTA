@extends('admin.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing" style="padding: 40px;">
        <form action="/tujuan" method="POST" style="width: 1340px; height: 2000px;">

            @csrf
            {{-- <div class="page-header">
                <div class="page-title">
                    <a href="{{route('og.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <div class="widget widget-content-area br-1"  style="height: 500%;">
                        <div class="widget-two">

                            <div class="row m-2">
                                <div class="col-lg-4">
                                    <h5 class= "font-weight-bold " style="color: blue;">Create Resume Title</h5>

                                    <label for="form-control"  style="color: black;">This name will be used to save your resume</label>
                                    <input type="hidden" name="idog" value="">
                                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="" value="{{old('judul')}}">
                                    @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                

                            </div>
                            <div class="col-lg-4 text-right">
                                <!-- Tombol Create ditempatkan di sini -->
                                <button class="btn btn-primary btn-sm" type="submit">CREATE</button>
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