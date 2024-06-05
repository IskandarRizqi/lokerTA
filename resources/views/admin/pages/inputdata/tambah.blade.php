@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="/inputdata" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="page-header">
                <div class="page-title">
                    <a href="{{route('inputdata.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    <button class="btn  btn-sm" type="submit" style="background-color: #FFB901; color:white">Simpan</button>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class="font-weight-bold " style="color: blue;">Input Data </h5>
                    <div class="widget widget-content-area br-1" style="height: 100%;">

                        <div class="widget-two">


                            <div class="row m-2">

                                <div class="col-lg-3">
                                    <label for="form-gambar" style="color: black;">Gambar</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <input type="file" name="gambar" id="gambar"
                                        class="form-control @error('gambar') is-invalid @enderror"
                                        style="width: 50%; height: 50px;">
                                    @error('gambar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Jenis Kelamin</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="jk" class="form-control @error('jk') is-invalid @enderror"
                                        placeholder="" value="{{old('jk')}}">
                                        <option value="">Pilih </option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                        <option value="lp">Male & Female</option>

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
                                    <input type="text" name="namaperusahaan"
                                        class="form-control @error('namaperusahaan') is-invalid @enderror"
                                        placeholder="" value="{{old('namaperusahaan')}}">
                                    @error('namaperusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Kategori</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="kategori" class="form-control @error('kategori') is-invalid @enderror"
                                        placeholder="" value="{{old('kategori')}}">
                                        <option value="">Pilih Kategori</option>
                                        <option value="Administrasi ">Administrasi </option>
                                        <option value="Hukum ">Hukum </option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Kesehatan ">Kesehatan </option>
                                        <option value="operator produksi">operator produksi</option>
                                        <option value="QC">QC</option>
                                        <option value="Marketing">marketing</option>
                                        <option value="Developer">developer</option>
                                        <option value="Frontend">frontend</option>
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
                                    <select name="pendidikan"
                                        class="form-control @error('pendidikan') is-invalid @enderror" placeholder=""
                                        value="{{old('pendidikan')}}">
                                        <option value="">Pilih pendidikan</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMK">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="Profesi">Profesi</option>
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
                                    <select name="jam" class="form-control @error('jam') is-invalid @enderror"
                                        placeholder="" value="{{old('jam')}}">
                                        <option value="">Pilih jam kerja</option>
                                        <option value="Parttime">parttime </option>
                                        <option value="Fulltime">fulltime </option>
                                        <option value="Frelance">frelance</option>
                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('jam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Tempat Perusahaan</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="tempatperusahaan"
                                        class="form-control @error('tempatperusahaan') is-invalid @enderror"
                                        placeholder="" value="{{old('tempatperusahaan')}}">
                                        <option value="">Pilih </option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Semarang">semarang</option>
                                        <option value="Tanggerang">Tanggerang</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Karawang">karawang</option>
                                        <option value="surabaya">surabaya</option>
                                        <option value="tanggerang">tanggerang</option>
                                        <option value="bandung">bandung</option>
                                        <option value="palembang">palembang</option>
                                        <option value="batam">batam</option>
                                        <option value="kalimantan">kalimantan</option>
                                        <option value="bekasi">bekasi</option>
                                        <option value="cikarang">cikarang</option>
                                        <option value="cirebon">cirebon</option>
                                        <option value="tegal">tegal</option>
                                        <option value="cilacap">cilacap</option>
                                        <option value="solo">solo</option>
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
                                    <textarea cols="30" rows="5"
                                        class="form-control  @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi">{{old('deskripsi')}}</textarea>
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