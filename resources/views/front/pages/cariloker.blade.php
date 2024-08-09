@extends('front.layouts.main')

@section('content')
<style>
    .owl-nav.disabled {
        visibility: hidden;
    }

    .owl-prev,
    .owl-next {
        background-color: #FFB901;
    }

    .additional-content {
        font-size: 14px;
        display: inline-block;
        vertical-align: top;
        /* Atur posisi vertikal ke atas */
        max-height: 200px;
        /* Atur tinggi maksimum */
        overflow-y: auto;
        /* Aktifkan scrollbar jika konten lebih panjang dari container */
        margin-left: 10px;
        /* Atur jarak dari teks "Lainnya" */
    }

    /* Styling untuk teks "Lainnya" */
    #showContent1 {
        cursor: pointer;
        color: blue;
        /* Warna teks biru */
    }

    #showContent {
        cursor: pointer;
        color: blue;
        /* Warna teks biru */
    }

    /* Styling untuk tautan */
    a {
        text-decoration: none;
        /* Hilangkan garis bawah tautan */
    }
</style>
<div class="page-content">
    <!-- ======= Hero Section ======= -->
    <section id="hero" style="background-color: white">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
                    <h5>Anda Sedang Mencari Pekerjaan Terbaru?</h5>
                    <h1><span style="color: #FFB901;">TEMUKAN</span> KARIRMU</h1>
                    <h1>MULAI <span style="color: #FFB901;">DARI SINI!!</span></h1>
                    <h5>Temukan pekerjaan yang sesuai dengan minat dan kualifikasi Anda dengan cepat dan efisien, kami
                        membantu Anda menuju langkah pertama menuju kesuksesan karir</h5>
                    <button type="submit" class="site-button">Pasang Lowongan Anda</button>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <img src="{{asset('front\images\inc\slide.png')}}" class="img-fluid" alt="img">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <!-- About Us -->
    <div class="section-full job-categories content-inner-2 bg-white"
        style="background-image:url(../images/pattern/pic1.html);">
        <div class="container">
            <div class="row mb-5">
                <div class="dez-bnr-inr-entry align-m ">
                    <div class="find-job-bx">
                        <form action="/caripekerjaan" class="dezPlaceAni">
                            @csrf
                            <div class="row">
                                <h5 class="m-b5 text-center">Cari Pekerjaan Anda Disini</h5>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <select id="job_title" name="job_title">
                                            <option value="">Pilih Kategori</option>
                                            <option {{$job_title=='Administrasi' ? 'selected' : '' }}value="Administrasi ">Administrasi </option>
                                            <option {{$job_title=='Akuntansi' ? 'selected' : '' }}value="Akuntansi ">Akuntansi </option>
                                             <option {{$job_title=='Arsitektur' ? 'selected' : '' }}value="Arsitektur ">Arsitektur  </option>
                                            <option {{$job_title=='Customer Service' ? 'selected' : '' }} value="Customer Service ">Customer Service </option>
                                            <option {{$job_title=='Developer' ? 'selected' : '' }}value="Developer ">Developer </option>
                                            <option {{$job_title=='Desain Grafis' ? 'selected' : '' }}value="Desain Grafis ">Desain Grafis  </option>
                                            <option {{$job_title=='Elektro' ? 'selected' : '' }}value="Elektro ">Elektro </option>
                                            <option {{$job_title=='Frontend' ? 'selected' : '' }} value="Frontend ">Frontend </option>
                                            <option {{$job_title=='Farmasi' ? 'selected' : '' }} value="Farmasi ">Farmasi </option>
                                            <option {{$job_title=='Hukum' ? 'selected' : '' }} value="Hukum ">Hukum </option>
                                            <option {{$job_title=='IT' ? 'selected' : '' }} value="IT ">IT </option>
                                            <option {{$job_title=='Jurnalistik' ? 'selected' : '' }} value="Jurnalistik ">Jurnalistik </option>
                                            <option {{$job_title=='Kesehatan' ? 'selected' : '' }} value="Kesehatan ">Kesehatan </option>
                                            <option {{$job_title=='Manajement' ? 'selected' : '' }} value="Manajement ">Manajement </option>
                                            <option {{$job_title=='Marketing' ? 'selected' : '' }} value="Marketing ">Marketing </option>
                                            <option {{$job_title=='Multimedia' ? 'selected' : '' }} value="Multimedia ">Multimedia </option>
                                            <option {{$job_title=='Perbankan' ? 'selected' : '' }} value="Perbankan ">Perbankan </option>
                                            <option {{$job_title=='Perawat' ? 'selected' : '' }} value="Perawat ">Perawat </option>
                                            <option {{$job_title=='Operator Produksi' ? 'selected' : '' }} value="Operator Produksi ">Operator Produksi </option>
                                            <option {{$job_title=='Mesin' ? 'selected' : '' }} value="Mesin ">Mesin </option>
                                            <option {{$job_title=='Komputer' ? 'selected' : '' }} value="Komputer ">Komputer </option>
                                            <option {{$job_title=='QC' ? 'selected' : '' }} value="QC ">QC </option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <select id="lokasi" name="lokasi">
                                            <option value="">Lokasi </option>
                                         
                                            @foreach($kabupatens as $v)
                  
                                           {{-- <option value="{{$v->nama}}"> {{$v->nama}}</option> --}}
                                           <option {{$v->nama==$lokasi ? 'selected' : '' }} value= "{{$v->nama}}">{{$v->nama}}</option>
                                           @endforeach
                                            {{-- <option {{$lokasi=='Balikpapan' ? 'selected' : '' }} value="Balikpapan">Balikpapan</option>
                                            <option {{$lokasi=='Bandung' ? 'selected' : '' }} value="Bandung">Bandung</option>
                                            <option {{$lokasi=='Batam' ? 'selected' : '' }} value="Batam">Batam</option>
                                            <option {{$lokasi=='Banyumas' ? 'selected' : '' }} value="Banyumas">Banyumas</option>
                                            <option {{$lokasi=='Bekasi' ? 'selected' : '' }} value="Bekasi">Bekasi</option>
                                            <option {{$lokasi=='Brebes' ? 'selected' : '' }} value="Brebes">Brebes</option>
                                            <option {{$lokasi=='Bogor' ? 'selected' : '' }} value="Bogor">Bogor</option>
                                            <option {{$lokasi=='Blora' ? 'selected' : '' }} value="Blora">Blora</option>
                                            <option {{$lokasi=='Cilacap' ? 'selected' : '' }} value="Cilacap">Cilacap</option>
                                            <option {{$lokasi=='Cilegon' ? 'selected' : '' }} value="Cilegon">Cilegon</option>
                                            <option {{$lokasi=='Cirebon' ? 'selected' : '' }} value="Cirebon">Cirebon</option>
                                            <option {{$lokasi=='Cikarang' ? 'selected' : '' }} value="Cikarang">Cikarang</option>
                                            <option {{$lokasi=='Depok' ? 'selected' : '' }} value="Depok">Depok</option>
                                            <option {{$lokasi=='Jakarta' ? 'selected' : '' }} value="Jakarta">Jakarta</option>
                                            <option {{$lokasi=='Jambi' ? 'selected' : '' }} value="Jambi">Jambi</option>
                                            <option {{$lokasi=='Karawang' ? 'selected' : '' }} value="Karawang">Karawang</option>
                                            <option {{$lokasi=='Kendal' ? 'selected' : '' }} value="Kendal">Kendal</option>
                                            <option {{$lokasi=='Kalimantan' ? 'selected' : '' }} value="Kalimantan">Kalimantan</option>
                                            <option {{$lokasi=='Madiun' ? 'selected' : '' }} value="Madiun">Madiun</option>
                                            <option {{$lokasi=='Malang' ? 'selected' : '' }} value="Malang">Malang</option>
                                            <option {{$lokasi=='Magelang' ? 'selected' : '' }} value="Magelang">Magelang</option>
                                            <option {{$lokasi=='Palembang' ? 'selected' : '' }} value="Palembang">Palembang</option>
                                            <option {{$lokasi=='Pekalongan' ? 'selected' : '' }} value="Pekalongan">Pekalongan</option>
                                            <option {{$lokasi=='Pemalang' ? 'selected' : '' }} value="Pemalang">Pemalang</option>
                                            <option {{$lokasi=='Purwokerto' ? 'selected' : '' }} value="Purwokerto">Purwokerto</option>
                                            <option {{$lokasi=='Tanggerang' ? 'selected' : '' }} value="Tanggerang">Tanggerang</option>
                                            <option {{$lokasi=='Solo' ? 'selected' : '' }} value="Solo">Solo</option>
                                            <option {{$lokasi=='Semarang' ? 'selected' : '' }} value="Semarang">Semarang</option>
                                            <option {{$lokasi=='Surabaya' ? 'selected' : '' }} value="Surabaya">Surabaya</option>
                                            <option {{$lokasi=='Surakarta' ? 'selected' : '' }} value="Surakarta">Surakarta</option>
                                            <option {{$lokasi=='Tegal' ? 'selected' : '' }} value="Tegal">Tegal</option>
                                            <option {{$lokasi=='Yogyakarta' ? 'selected' : '' }} value="Yogyakarta">Yogyakarta</option> --}}

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <select id="lulusan" name="lulusan">
                                            <option value="">Semua Lulusan</option>
        
                                            <option {{$lulusan=='SLTA' ? 'selected' : '' }} value="SLTA">SMA/SMK</option>
                                            <option {{$lulusan=='D3' ? 'selected' : '' }} value="D3">D3</option>
                                            <option {{$lulusan=='D4' ? 'selected' : '' }} value="D4">D4</option>
                                            <option {{$lulusan=='S1' ? 'selected' : '' }} value="S1">S1</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <button type="submit" class="site-button btn-block">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="section-full bg-white content-inner-2" id="kontenpekerjaan">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-head text-center">
                <h2 class="m-b5">Lowongan Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <form action="/caripekerjaan" method="GET">
                    @csrf
                    <input type="text" name="formberanda" id="" value="true" hidden>
                    <div class="sticky-top">
                        <div class="clearfix m-b30">
                            <h5 class="widget-title font-weight-700 text-uppercase">Profesi</h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="product-brand">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="1"
                                                name="job_title[]" value="Administrasi">
                                            <label class="custom-control-label" for="1">Administrasi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="2"
                                                name="job_title[]" value="Akuntansi">
                                            <label class="custom-control-label" for="2">Akuntansi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="3"
                                                name="job_title[]" value="Arsitektur">
                                            <label class="custom-control-label" for="3">Arsitektur</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="4"
                                                name="job_title[]" value="Customer Service">
                                            <label class="custom-control-label" for="4">Customer Service</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="5"
                                                name="job_title[]" value="Developer">
                                            <label class="custom-control-label" for="5">Developer</label>
                                        </div>
                                       
                                       
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="6"
                                                name="job_title[]" value="Desain Grafis">
                                            <label class="custom-control-label" for="6">Desain Grafis</label>
                                        </div>
                                       

                                        <div class="mt-2">
                                            <span id="showContent1">Lainnya</span>
                                            <!-- ID showContent untuk mengontrol visibilitas konten tambahan -->
                                            <div id="additionalContent1" class="additional-content"
                                                style="display: none;">
                                                <!-- Area untuk konten tambahan -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="21"
                                                        name="job_title[]" value="Elektro">
                                                    <label class="custom-control-label" for="21">Elektro</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="7"
                                                        name="job_title[]" value="Frontend">
                                                    <label class="custom-control-label" for="7">Frontend</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="8"
                                                        name="job_title[]" value="Farmasi">
                                                    <label class="custom-control-label" for="8">Farmasi</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="9"
                                                        name="job_title[]" value="Hukum">
                                                    <label class="custom-control-label" for="9">Hukum</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="10"
                                                        name="job_title[]" value="IT">
                                                    <label class="custom-control-label" for="10">IT</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="11"
                                                        name="job_title[]" value="Jurnalistik">
                                                    <label class="custom-control-label" for="11">Jurnalistik</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="12"
                                                        name="job_title[]" value="Kesehatan">
                                                    <label class="custom-control-label" for="12">Kesehatan</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="13"
                                                        name="job_title[]" value="Manajemen">
                                                    <label class="custom-control-label" for="13">Manajemen</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="14"
                                                        name="job_title[]" value="Marketing">
                                                    <label class="custom-control-label" for="14">Marketing</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="15"
                                                        name="job_title[]" value="Multimedia">
                                                    <label class="custom-control-label" for="15">Multimedia</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="16"
                                                        name="job_title[]" value="Perbankan">
                                                    <label class="custom-control-label" for="16">Perbankan</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="17"
                                                        name="job_title[]" value="Perawat">
                                                    <label class="custom-control-label" for="17">Perawat</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="18"
                                                        name="job_title[]" value="Operator Produksi">
                                                    <label class="custom-control-label" for="18">Operator
                                                        Produksi</label>
                                                </div>
                                                
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="19"
                                                        name="job_title[]" value="Mesin">
                                                    <label class="custom-control-label" for="19">Mesin</label>
                                                </div>
                                               
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="20"
                                                        name="job_title[]" value="Komputer">
                                                    <label class="custom-control-label" for="20">Komputer</label>
                                                </div>
                                              
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="clearfix m-b30">
                            <h5 class="widget-title font-weight-700 text-uppercase">Lokasi</h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="product-brand">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="01"
                                                name="lokasi[]" value="KOTA PEKANBARU">
                                            <label class="text-capitalize custom-control-label"
                                                for="01">KOTA PEKANBARU</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="02"
                                                name="lokasi[]" value="KOTA PALEMBANG">
                                            <label class="text-capitalize custom-control-label"
                                                for="02">KOTA PALEMBANG</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="03"
                                                name="lokasi[]" value="KOTA BATAM">
                                            <label class="text-capitalize custom-control-label"
                                                for="03">KOTA BATAM</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="04"
                                                name="lokasi[]" value="KOTA JAKARTA PUSAT">
                                            <label class="text-capitalize custom-control-label"
                                                for="04">KOTA JAKARTA PUSAT</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="05"
                                                name="lokasi[]" value="KOTA BOGOR">
                                            <label class="text-capitalize custom-control-label"
                                                for="05">KOTA BOGOR</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="06"
                                                name="lokasi[]" value="KOTA BANDUNG">
                                            <label class="text-capitalize custom-control-label"
                                                for="06">KOTA BANDUNG</label>
                                        </div>
                                       
                                        <div class="mt-2">
                                            <span id="showContent">Lainnya</span>
                                            <!-- ID showContent untuk mengontrol visibilitas konten tambahan -->
                                            <div id="additionalContent" class="additional-content"
                                                style="display: none;">
                                                <!-- Area untuk konten tambahan -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="07"
                                                        name="lokasi[]" value="KOTA CIREBON">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="07">KOTA CIREBON</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="08"
                                                        name="lokasi[]" value="KOTA BEKASI">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="08">KOTA BEKASI</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="09"
                                                        name="lokasi[]" value="KOTA TEGAL">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="09">KOTA TEGAL</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="010"
                                                        name="lokasi[]" value="KOTA PEKALONGAN">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="010">KOTA PEKALONGAN</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="011"
                                                        name="lokasi[]" value="KOTA SEMARANG">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="011">KOTA SEMARANG</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="012"
                                                        name="lokasi[]" value="KOTA PEKALONGAN">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="012">KOTA PEKALONGAN</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="013"
                                                        name="lokasi[]" value="KOTA MAGELANG">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="013">KOTA MAGELANG</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="014"
                                                        name="lokasi[]" value="KOTA YOGYAKARTA">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="014">KOTA YOGYAKARTA</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="015"
                                                        name="lokasi[]" value="KABUPATEN CILACAP">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="015">KABUPATEN CILACAP</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="016"
                                                        name="lokasi[]" value="KOTA DEPOK">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="016">KOTA DEPOK</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="017"
                                                        name="lokasi[]" value="KOTA SUKABUMI">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="017">KOTA SUKABUMI</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="018"
                                                        name="lokasi[]" value="KABUPATEN BREBES">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="018">KABUPATEN BREBES</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="019"
                                                        name="lokasi[]" value="KABUPATEN PEMALANG">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="019">KABUPATEN PEMALANG</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="020"
                                                        name="lokasi[]" value="KABUPATEN BATANG">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="020">KABUPATEN BATANG</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="021"
                                                        name="lokasi[]" value="KABUPATEN KENDAL">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="021">KABUPATEN KENDAL</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="022"
                                                        name="lokasi[]" value="KABUPATEN DEMAK">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="022">KABUPATEN DEMAK</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="023"
                                                        name="lokasi[]" value="KABUPATEN JEPARA">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="023">KABUPATEN JEPARA</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="024"
                                                        name="lokasi[]" value="KABUPATEN KUDUS">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="024">KABUPATEN KUDUS</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="025"
                                                        name="lokasi[]" value="KABUPATEN PATI">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="025">KABUPATEN PATI</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="026"
                                                        name="lokasi[]" value="KABUPATEN REMBANG">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="026">KABUPATEN REMBANG</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="027"
                                                        name="lokasi[]" value="KABUPATEN BLORA">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="027">KABUPATEN BLORA</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="028"
                                                        name="lokasi[]" value="KABUPATEN WONOGIRI">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="028">KABUPATEN WONOGIRI</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="029"
                                                        name="lokasi[]" value="KABUPATEN BOYOLALI">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="029">KABUPATEN BOYOLALI</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="030"
                                                        name="lokasi[]" value="KABUPATEN PURWOREJO">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="030">KABUPATEN PURWOREJO</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="931"
                                                        name="lokasi[]" value="KABUPATEN PURBALINGGA">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="931">KABUPATEN PURBALINGGA</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="032"
                                                        name="lokasi[]" value="KABUPATEN BANYUMAS">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="032">KABUPATEN BANYUMAS</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix m-b30">
                            <h5 class="widget-title font-weight-700 text-uppercase">Pendidikan</h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="product-brand">
                                       
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pen3"
                                                name="lulusan[]" value="SLTA">
                                            <label class="custom-control-label" for="pen3">SMA/SMK</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pen4"
                                                name="lulusan[]" value="D3">
                                            <label class="custom-control-label" for="pen4">D3</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pen5"
                                                name="lulusan[]" value="D4">
                                            <label class="custom-control-label" for="pen5">D4</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pen0"
                                                name="lulusan[]" value="S1">
                                            <label class="custom-control-label" for="pen0">S1</label>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix m-b30">
                            <h5 class="widget-title font-weight-700 text-uppercase">Status Kerja</h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="product-brand">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="stat2" name="jam[]"
                                                value="fulltime">
                                            <label class="custom-control-label" for="stat2">Fulltime</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="stat4" name="jam[]"
                                                value="frelance">
                                            <label class="custom-control-label" for="stat4">Freelance</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="stat3" name="jam[]"
                                                value="parttime">
                                            <label class="custom-control-label" for="stat3">Parttime</label>
                                        </div>
                                        


                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="submit"
                            style="background-color: #FFB901; font-size:15px; border: none; color: white;  margin-top: -15px; border-radius: 5px;">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <ul class="post-job-bxx">
                        @foreach($data as $key => $v)
                        <div class="col-md-4 mb-4">

                            <a href="/detail-loker/{{$v->id}}" style="border-radius: 10px">
                                <div class="d-flex">
                                    <div class="job-post-company">
                                        <span class="mb-1"><img src="/gambar?rf={{$v->gambar}}" alt="Image"
                                                style="width: 100px; height: 100px;"></span>
                                        <h6>{{$v->namaperusahaan}}</h6>
                                        <h6>{{$v->kategori}}</h6>
                                    </div>

                                </div>
                                <div class="d-flex mb-2">
                                    <div class="job-time mr-auto">
                                        <span>{{$v->jam}}</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="job-post-info">
                                        <ul>
                                            <li><i style="width: 15px;" class="fa fa-map-marker text-center"></i>
                                                {{$v->tempatperusahaan}}</li>
                                            <br>
                                            <li><i style="width: 15px;"
                                                    class="fa fa-graduation-cap text-center"></i>{{$v->pendidikan}}
                                            </li>
                                            <br>
                                            <li>
                                                <i style="width: 15px;" class="fa fa-clock-o text-center"></i>
                                                <span
                                                    style="margin-right: 5px;">Published</span>&nbsp;{{\Carbon\Carbon::parse($v->created_at)->format('d-m-Y')}}
                                            </li>

                                        </ul>
                                    </div>
                                </div><br>
                                <input type="button" value="Detail"
                                    style="background-color: #FFB901; font-size:15px; border: none; color: white; float: right; margin-top: -15px; border-radius: 5px;" />

                            </a>

                        </div>
                        @endforeach

                    </ul>
                </div>
                <div class="m-t30">
                    <div class="d-flex align-item-center">
                        {{-- @if($data->previousPageUrl() !== null)
                        <a class="site-button button-sm mr-auto"
                            href="{{$data->previousPageUrl().'&job_title='.$job_title.'&lokasi='.$lokasi.'&lulusan='.$lulusan}}"><i
                                class="ti-arrow-left"></i> Prev</a>
                        @endif
                        @if($data->nextPageUrl() !== null)
                        <a class="site-button button-sm"
                            href="{{$data->nextPageUrl().'&job_title='.$job_title.'&lokasi='.$lokasi.'&lulusan='.$lulusan}}">Next
                            <i class="ti-arrow-right"></i>
                        </a>
                        @endif --}}
                        @if($data->previousPageUrl() !== null)
                        <a class="btn btn-warning btn-sm text-white mr-auto"
                            href="{{$data->previousPageUrl().'&job_title='.$job_title.'&lokasi='.$lokasi.'&lulusan='.$lulusan}}"><i
                                class="ti-arrow-left"></i> Prev</a>
                        @endif
                        @if($data->nextPageUrl() !== null)
                        <a class="btn btn-warning btn-sm text-white"
                            href="{{$data->nextPageUrl().'&job_title='.$job_title.'&lokasi='.$lokasi.'&lulusan='.$lulusan}}">Next
                            <i class="ti-arrow-right"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<textarea name="" id="jt" hidden>{{json_encode($jt)}}</textarea>
<textarea name="" id="lk" hidden>{{json_encode($lk)}}</textarea>
<textarea name="" id="ll" hidden>{{json_encode($ll)}}</textarea>
<textarea name="" id="jm" hidden>{{json_encode($jm)}}</textarea>
<script>
    $(document).ready(function() {
        let jt = $('#jt').val();
        let lk = $('#lk').val();
        let ll = $('#ll').val();
        let jm = $('#jm').val();
        console.log(jt, lk, ll, jm);
        if (jt != 'null') {
            JSON.parse(jt).forEach(e => {
                $('#jt'+e).attr('checked', true);
            });
        }
        if (lk != 'null') {
            JSON.parse(lk).forEach(e => {
                $('#lk'+e).attr('checked', true);
            });
        }
        if (ll != 'null') {
            JSON.parse(ll).forEach(e => {
                $('#ll'+e.replace(/[^\w\s]/gi, '')).attr('checked', true);
            });
        }
        if (jm != 'null') {
            JSON.parse(jm).forEach(e => {
                $('#jm'+e).attr('checked', true);
            });
        }
    })
    document.getElementById('showContent1').addEventListener('click', function() {
        var additionalContent1 = document.getElementById('additionalContent1');
        if (additionalContent1.style.display === 'none') {
            additionalContent1.style.display = 'inline-block'; // Tampilkan konten tambahan
        } else {
            additionalContent1.style.display = 'none'; // Sembunyikan konten tambahan
        }
    });
</script>
@endsection