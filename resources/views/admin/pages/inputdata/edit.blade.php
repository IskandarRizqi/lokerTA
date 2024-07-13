@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="/inputdata/{{$edit['id']}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
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

                                <div class="col-lg-3">
                                    <label for="gambar" style="color: black;">Gambar</label>
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
                                    <label for="form-control" style="color: black;">Nama Perusahaan</label>
                                    <input type="hidden" name="idiinputdata" value="">
                                    <input type="text" name="namaperusahaan"
                                        class="form-control @error('namaperusahaan') is-invalid @enderror"
                                        placeholder="namaperusahaan" value="{{$edit['namaperusahaan']}}">
                                    @error('namaperusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-3">
                                    <label for="kategori" style="color: black;">Kategori</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="kategori" id="kategori"
                                        class="form-control @error('kategori') is-invalid @enderror"
                                        placeholder="kategori">
                                        <option value="">Pilih Kategori</option>
                                        <option {{$edit['kategori']=='Marketing' ? 'selected' : '' }}>marketing</option>
                                        <option {{$edit['kategori']=='Developer' ? 'selected' : '' }}>developer</option>
                                        <option {{$edit['kategori']=='Frontend' ? 'selected' : '' }}>frontend</option>
                                        <!-- Tambahkan pilihan sesuai dengan kebutuhan Anda -->
                                    </select>
                                    @error('kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select id="jk" name="jk" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                            <option value="laki-laki" {{$edit['jk']=='laki-laki' ? 'selected' : '' }}>
                                                Laki-laki</option>
                                            <option value="perempuan" {{$edit['jk']=='perempuan' ? 'selected' : '' }}>
                                                Perempuan</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                          
                            

                            <div class="row m-2">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="pendidikan">Minimal Penidikan</label>
                                        <select id="pendidikan" name="pendidikan" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option> <!-- Placeholder -->
                                            <option value="SD" {{$edit['pendidikan']=='SD' ? 'selected' : '' }}>SD
                                            </option>
                                            <option value="SMP" {{$edit['pendidikan']=='SMP' ? 'selected' : '' }}>SMP
                                            </option>
                                            <option value="SMA/SMK" {{$edit['pendidikan']=='SMA/SMK' ? 'selected' : ''
                                                }}>SMA/SMK</option>
                                            <option value="Diploma" {{$edit['pendidikan']=='Diploma' ? 'selected' : ''
                                                }}>D3</option>
                                            <option value="Diploma" {{$edit['pendidikan']=='Diploma' ? 'selected' : ''
                                                }}>D4/S1</option>
                                            <option value="Pascasarjana" {{$edit['pendidikan']=='Pascasarjana'
                                                ? 'selected' : '' }}>Pascasarjana</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <label for="kategori" style="color: black;">jam kerja</label>
                                    <input type="hidden" name="idinputdata" value="">
                                    <select name="jam" id="jam" class="form-control @error('jam') is-invalid @enderror"
                                        placeholder="jam">
                                        <option value="">Pilih jam kerja</option>
                                        <option {{$edit['jam']=='Parttime' ? 'selected' : '' }}>parttime </option>
                                        <option {{$edit['jam']=='Fulltime' ? 'selected' : '' }}>fulltime </option>
                                        <option {{$edit['jam']=='Frelance' ? 'selected' : '' }}>frelance</option>
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
                                    <input type="text" name="tempatperusahaan"
                                        class="form-control @error('tempatperusahaan') is-invalid @enderror"
                                        placeholder="temmpatperusahaan" value="{{$edit['tempatperusahaan']}}">
                                    @error('tempatperusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-3">
                                    <label for="form-control" style="color: black;">Email Perusahaan</label>
                                    <input type="hidden" name="idiinputdata" value="">
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="email" value="{{$edit['email']}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-1">

                                <div class="col-lg-12">
                                    <label for="form-control" style="color: black;"> Deskripsi</label>
                                    <input type="hidden" name="inputdata" value="">
                                    <textarea cols="30" rows="5"
                                        class="form-control  @error('deskripsi') is-invalid @enderror"
                                        placeholder="deskripsi" id="deskripsi"
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