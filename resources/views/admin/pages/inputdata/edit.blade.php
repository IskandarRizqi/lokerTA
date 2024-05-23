@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="{{route('inputdata.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="page-header">
                <div class="page-title">
                    <a href="{{route('inputdata.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget widget-content-area br-4">
                        <div class="widget-one">

                            <div class="row m-2">

                                <div class="col-lg-4">
                                    <label for="gambar" style="color: black;">Gambar</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror" style="width: 50%; height: 50px;">
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>  
                                    @enderror
                                  
                                </div>
                                   
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Nama Perusahaan</label>
                                    <input type="hidden" name="idiinputdata" value="">
                                    <input type="text" name="namaperusahaan" class="form-control @error('namaperusahaan') is-invalid @enderror"  placeholder="namaperusahaan"  value="{{$edit['namaperusahaan']}}">
                                    @error('namaperusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
            
                                <div class="col-lg-4">
                                    <label for="kategori" style="color: black;">Kategori</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror" placeholder="kategori" value="{{$edit['kategori']}}">>
                                        <option value="">Pilih Kategori</option>
                                        <option >marketing</option>
                                        <option >developer</option>
                                        <option >frontend</option>
                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('idkategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row m-2">
                                   
                                <div class="col-lg-6">
                                    <label for="kategori" style="color: black;">jam kerja</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="jam" id="jam" class="form-control @error('jam') is-invalid @enderror" placeholder="jam" value="{{$edit['jam']}}">
                                        <option value="">Pilih jam kerja</option>
                                        <option >parttime </option>
                                        <option >fulltime </option>
                                        <option >frelance</option>
                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('idcategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Tempat Perusahaan</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <input type="text" name="tempatperusahaan" class="form-control @error('tempatperusahaan') is-invalid @enderror" placeholder="temmpatperusahaan" value="{{$edit['tempatperusahaan']}}">
                                    @error('tempatperusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <label for="form-control" style="color: black;"> Deskripsi</label>
                                    <input type="hidden" name="inputdata" value="">
                                    <textarea cols="30" rows="5" class="form-control  @error('deskripsi') is-invalid @enderror" placeholder="deskripsi"  name="deskripsi">{{old('deskripsi')}}</textarea>
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                           
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