@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="/inputdata" method="POST" enctype="multipart/form-data" style="width: 1340px; height: 2000px;">

            @csrf
            <div class="page-header">
                <div class="page-title">
                    <a href="{{route('inputdata.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                </div>
            </div>
           
            <div class="row">
               
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class= "font-weight-bold " style="color: blue;" >Input Data </h5>
                    <div class="widget widget-content-area br-1"  style="height: 100%;">
                        
                        <div class="widget-two">
                            
                          
                            <div class="row m-2">

                                <div class="col-lg-3">
                                    <label for="form-gambar" style="color: black;">Gambar</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror" style="width: 50%; height: 50px;">
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>  
                                    @enderror
                                  
                                </div>

                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Jenis Kelamin</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="jk" class="form-control @error('jk') is-invalid @enderror" placeholder="" value="{{old('jk')}}">
                                        <option value="">Pilih </option>
                                        <option >Laki-laki</option>
                                        <option >Perempuan</option>
                                      
                                    </select>
                                    @error('kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                   
                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Nama Perusahaan</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <input type="text" name="namaperusahaan" class="form-control @error('namaperusahaan') is-invalid @enderror" placeholder="" value="{{old('namaperusahaan')}}">
                                    @error('namaperusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
            
                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Kategori</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="kategori" class="form-control @error('kategori') is-invalid @enderror" placeholder="" value="{{old('kategori')}}">
                                        <option value="">Pilih Kategori</option>
                                        <option >marketing</option>
                                        <option >developer</option>
                                        <option >frontend</option>
                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row m-2">

                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Pendidikan</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" placeholder="" value="{{old('pendidikan')}}">
                                        <option value="">Pilih pendidikan</option>
                                        <option >SD</option>
                                        <option >SMP</option>
                                        <option >SMK</option>
                                        <option >D3</option>
                                        <option >D4/S1</option>
                                        <option >Profesi</option>
                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('pendidikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                   
                                <div class="col-lg-4">
                                    <label for="jam" style="color: black;">jam kerja</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="jam" class="form-control @error('jam') is-invalid @enderror" placeholder="" value="{{old('jam')}}">
                                        <option value="">Pilih jam kerja</option>
                                        <option >parttime </option>
                                        <option >fulltime </option>
                                        <option >frelance</option>
                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('jam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Tempat Peusahaan</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="tempatperusahaan" class="form-control @error('tempatperusahaan') is-invalid @enderror" placeholder="" value="{{old('tempatperusahaan')}}">
                                        <option value="">Pilih </option>
                                        <option >Jakarta</option>
                                        <option >semarang</option>
                                        <option >Tanggerang</option>
                                        <option >Yogyakarta</option>
                                        <option >karawang</option>
                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('tempatperusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row m-2">
                                <div class="col-lg-12">
                                    <label for="form-control" style="color: black;"> Deskripsi</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <textarea cols="30" rows="5" class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi">{{old('deskripsi')}}</textarea>
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







