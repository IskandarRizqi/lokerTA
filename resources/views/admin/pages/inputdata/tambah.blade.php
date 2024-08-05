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
                    <button class="btn  btn-sm" type="submit"
                        style="background-color: #FFB901; color:white">Simpan</button>
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
                                        <option value="All">Laki/Perempuan</option>

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
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Arsitektur">Arsitektur</option>
                                        <option value="Customer Service">Customer Service</option>
                                        <option value="Developer">Developer</option>
                                        <option value="Desain Grafis">Desain Grafis</option>
                                        <option value="Frontend">Frontend</option>
                                        <option value="Farmasi">Farmasi</option>
                                        <option value="Hukum ">Hukum </option>
                                        <option value="IT ">IT</option>
                                        <option value="Jurnalistik ">Jurnalistik</option>
                                        <option value="Kesehatan ">Kesehatan </option>
                                        <option value="Manajemen ">Manajemen </option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Multimedia ">Multimedia </option>
                                        <option value="Perbankan ">Perbankan </option>
                                        <option value="Perawat ">Perawat </option>
                                        <option value="Operator produksi">Operator Produksi</option>
                                        <option value="Mesin ">Mesin </option>
                                        <option value="Komputer ">Komputer </option>
                                        <option value="Elektro ">Elektro </option>
                                        <option value="QC">QC</option>
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

                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Pendidikan</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="pendidikan"
                                        class="form-control @error('pendidikan') is-invalid @enderror" placeholder=""
                                        value="{{old('pendidikan')}}">
                                        <option value="">Pilih pendidikan</option>
                                        <option value="SLTA">SMA/SMK</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>

                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('pendidikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-3">
                                    <label for="jam" style="color: black;">jam kerja</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="jam" class="form-control @error('jam') is-invalid @enderror"
                                        placeholder="" value="{{old('jam')}}">
                                        <option value="">Pilih jam kerja</option>
                                        <option value="Fulltime">Fulltime </option>
                                        <option value="Parttime">Parttime </option>
                                        <option value="Frelance">Frelance</option>

                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('jam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Tempat Perusahaan</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="tempatperusahaan"
                                        class="form-control @error('tempatperusahaan') is-invalid @enderror"
                                        placeholder="" value="{{old('tempatperusahaan')}}">
                                        <option value="">Pilih </option>
                                        <option value="Balikpapan">Balikpapan</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Batam">Batam</option>
                                        <option value="Banyumas">Banyumas</option>
                                        <option value="Bekasi">Bekasi</option>
                                        <option value="Brebes">Brebes</option>
                                        <option value="Bogor">Bogor</option>
                                        <option value="Blora">Blora</option>
                                        <option value="Cilacap">Cilacap</option>
                                        <option value="Cilegon">Cilegon</option>
                                        <option value="Cirebon">Cirebon</option>
                                        <option value="Cikarang">Cikarang</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Karawang">Karawang</option>
                                        <option value="Kendal">Kendal</option>
                                        <option value="Kalimantan">Kalimantan</option>
                                        <option value="Madiun">Madiun</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Magelang">Magelang</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Pekalongan">Pekalongan</option>
                                        <option value="Pemalang">Pemalang</option>
                                        <option value="Purwokerto">Purwokerto</option>
                                        <option value="Tanggerang">Tanggerang</option>
                                        <option value="Solo">Solo</option>
                                        <option value="Semarang">Semarang</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Surakarta">Surakarta</option>
                                        <option value="Tegal">Tegal</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('tempatperusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Email Perusahaan</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder=""
                                        value="{{old('email')}}">
                                    @error('email')
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
                                        class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                        id="deskripsi">{{old('deskripsi')}}</textarea>
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
<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Font
    } from 'ckeditor5';

    ClassicEditor
        .create( document.querySelector( '#deskripsi' ), {
            plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
            ]
        } )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
<!--  END CONTENT AREA  -->
@endsection