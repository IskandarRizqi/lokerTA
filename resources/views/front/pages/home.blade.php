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
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-center">
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
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <select id="lokasi" name="lokasi">
                                            <option value="">Lokasi </option>
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
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <select id="lulusan" name="lulusan">
                                            <option value="SLTA">SMA/SMK</option>
                                            <option value="D3">D3</option>
                                            <option value="D4">D4</option>
                                            <option value="S1">S1</option>

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

    <div class="section-full bg-gray content-inner-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 section-head text-center"
                    style="display: flex; justify-content: center; align-items: flex-start;">
                    <h2 class="m-b5">Rekomendasi Untuk Anda</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="">
                        <img src="{{asset('front\images\inc\Rectangle 9.png')}}" alt="">

                    </div>
                </div>
                <div class="col-lg-8">
                    <ul class="post-job-bxx">

                        <div class="owl-carousel owl-theme">
                            @foreach($rekomendasi as $key => $v)
                            <div class="item">
                                <a href="/detail-loker/{{$v->id}}" style="border-radius: 10px">
                                    <div class="d-flex">
                                        <div class="job-post-company">
                                            <span class="mb-1"><img src="/gambar?rf={{$v->gambar}}"
                                                    style="width: 100px; height: 100px;" /></span>
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
                                                <li
                                                    style="color: black; border-bottom: 1px  solid black; padding-bottom: 4px;  width: 100%;">
                                                    <i style="color:black"><i style="width: 15px;"
                                                            class="fa fa-map-marker text-center"></i>{{$v->tempatperusahaan}}
                                                    </i>
                                                </li>
                                                <br>
                                                <li
                                                    style="color: black; border-bottom: 1px  solid black; padding-bottom: 4px;  width: 100%;">
                                                    <i style="color:black"><i style="width: 15px;"
                                                            class="fa fa-graduation-cap text-center"></i>
                                                        {{$v->pendidikan}}
                                                    </i>
                                                </li>
                                                <li style="color:black"><i style="width: 15px;"
                                                        class="fa fa-clock-o text-center"></i>
                                                    Published {{$v->created_at->diffForHumans()}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <br>
                                    <input type="button" value="Detail"
                                        style="background-color: #FFB901; font-size:15px; border: none; color: white; float: right; margin-top: -15px; border-radius: 5px;" />
                                </a>
                            </div>
                            @endforeach
                        </div>



                </div>

            </div>
        </div>
    </div>
</div>

<div class="section-full bg-white content-inner-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-head text-center">
                <h2 class="m-b5">Lowongan Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4">
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
                                                name="lokasi[]" value="Balikpapan">
                                            <label class="text-capitalize custom-control-label"
                                                for="01">Balikpapan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="02"
                                                name="lokasi[]" value="Bandung">
                                            <label class="text-capitalize custom-control-label"
                                                for="02">Bandung</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="03"
                                                name="lokasi[]" value="Batam">
                                            <label class="text-capitalize custom-control-label"
                                                for="03">Batam</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="04"
                                                name="lokasi[]" value="Banyumas">
                                            <label class="text-capitalize custom-control-label"
                                                for="04">Banyumas</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="05"
                                                name="lokasi[]" value="Bekasi">
                                            <label class="text-capitalize custom-control-label"
                                                for="05">Bekasi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="06"
                                                name="lokasi[]" value="Brebes">
                                            <label class="text-capitalize custom-control-label"
                                                for="06">Brebes</label>
                                        </div>
                                       
                                        <div class="mt-2">
                                            <span id="showContent">Lainnya</span>
                                            <!-- ID showContent untuk mengontrol visibilitas konten tambahan -->
                                            <div id="additionalContent" class="additional-content"
                                                style="display: none;">
                                                <!-- Area untuk konten tambahan -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="07"
                                                        name="lokasi[]" value="Bogor">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="07">Bogor</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="08"
                                                        name="lokasi[]" value="Blora">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="08">Blora</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="09"
                                                        name="lokasi[]" value="Cilacap">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="09">Cilacap</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="010"
                                                        name="lokasi[]" value="Cilegon">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="010">Cilegon</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="011"
                                                        name="lokasi[]" value="Cirebon">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="011">Cirebon</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="012"
                                                        name="lokasi[]" value="Cikarang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="012">Cikarang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="013"
                                                        name="lokasi[]" value="Depok">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="013">Depok</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="014"
                                                        name="lokasi[]" value="Jakarta">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="014">Jakarta</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="015"
                                                        name="lokasi[]" value="Jambi">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="015">Jambi</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="016"
                                                        name="lokasi[]" value="Karawang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="016">Karawang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="017"
                                                        name="lokasi[]" value="Kendal">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="017">Kendal</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="018"
                                                        name="lokasi[]" value="Kalimantan">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="018">Kalimantan</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="019"
                                                        name="lokasi[]" value="Madiun">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="019">Madiun</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="020"
                                                        name="lokasi[]" value="Malang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="020">Malang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="021"
                                                        name="lokasi[]" value="Magelang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="021">Magelang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="022"
                                                        name="lokasi[]" value="Palembang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="022">Palembang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="023"
                                                        name="lokasi[]" value="Pekalongan">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="023">Pekalongan</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="024"
                                                        name="lokasi[]" value="Pemalang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="024">Pemalang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="025"
                                                        name="lokasi[]" value="Purwokerto">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="025">Purwokerto</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="026"
                                                        name="lokasi[]" value="Tanggerang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="026">Tanggerang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="027"
                                                        name="lokasi[]" value="Solo">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="027">Solo</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="028"
                                                        name="lokasi[]" value="Semarang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="028">Semarang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="029"
                                                        name="lokasi[]" value="Surabaya">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="029">Surabaya</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="030"
                                                        name="lokasi[]" value="Surakarta">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="030">Surakarta</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="931"
                                                        name="lokasi[]" value="Tegal">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="931">Tegal</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="032"
                                                        name="lokasi[]" value="Yogyakarta">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="032">Yogyakarta</label>
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
                                                value="Fulltime">
                                            <label class="custom-control-label" for="stat2">Fulltime</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="stat4" name="jam[]"
                                                value="Freelance">
                                            <label class="custom-control-label" for="stat4">Freelance</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="stat3" name="jam[]"
                                                value="Parttime">
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
                @if($inputdata->count() > 0)
                <ul class="post-job-bxx">
                    <div class="row">

                        @foreach($inputdata->slice(0,9) as $key => $v)
                        <div class="col-lg-4 mb-4">

                            <li>
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
                                                <li
                                                    style="color: black; border-bottom: 1px  solid black; padding-bottom: 4px;  width: 130%;">
                                                    <i style="color:black"><i style="width: 15px;"
                                                            class="fa fa-map-marker text-center"></i>
                                                        {{$v->tempatperusahaan}}</i>
                                                </li>
                                                <br>
                                                <li
                                                    style="color: black; border-bottom: 1px solid black; padding-bottom: 4px;  width: 130%;">
                                                    <i style="color:black"><i style="width: 15px;"
                                                            class="fa fa-graduation-cap text-center"></i>{{$v->pendidikan}}
                                                    </i>
                                                </li>
                                                <br>
                                                <li style="color:black">
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
                            </li>

                        </div>
                        @endforeach


                    </div>
                </ul>
                @else
                {{-- <button>
                    <a href="/page-with-all-data" class="btn btn-primary">Selengkapnya</a>
                </button> --}}
                @endif
                <div class="m-t30">
                    <div class="d-flex">
                        {{-- <a class="site-button button-sm mr-auto" href="#"><i class="ti-arrow-left"></i>
                            Prev</a>
                        --}}
                        <a class="site-button button-sm mr-auto" href="/caripekerjaan#kontenpekerjaan"
                            style="font-size: 13px;">Selengkapnya<i></i> </a>
                        {{-- <a class="site-button button-sm mr-auto" href="/selengkapnya"> <i>Selengkapnya</i></a>
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="section-full bg-gray content-inner-2">
    <div class="container" style=" height:auto;">
        {{-- <div class="d-flex job-title-bx section-head">
            <div class="mr-auto">
                <h2 class="m-b5">Recent Jobs</h2>
                <h6 class="fw4 m-b0">20+ Recently Added Jobs</h5>
            </div>
            <div class="align-self-end">
                <a href="#" class="site-button button-sm">Browse All Jobs <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-12">
                <ul class="learning">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <li>
                                <a href="https://bankiracademy.com/" target="_blank" style="border-radius: 10px; heigt:auto">
                                    <div class="learning-card learning-card--vertical" style="height: 35%">
                                        <div class="img-learning" style="width: 100%;  ">
                                            <img src="{{asset('front\images\inc\bankir1.png')}}" alt="">
                                        </div>
                                        {{-- <div class="learning-card_content">
                                            <div class="learning-card_title-section">
                                                <h5 class="learning-card_title">Membangun Ekosistem UKM BPR Sebagai
                                                    Fundamental Resolusi 2024</h5>
                                                <h5 class="learning-card_author">ppp</h5>
                                            </div>
                                            <hr>
                                            <div class="learning-card_bottom-section">
                                                <div class="space-between">
                                                    <div class="learning-card_price">
                                                        <span>5.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                </a>
                            </li>

                        </div>
                       
                    </div>
                </ul>

            </div>
            <div class="col-lg-12">
                <ul class="learning">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <li>
                                <a href="https://bankiracademy.com/" target="_blank" style="border-radius: 10px; ">
                                    <div class="learning-card learning-card--vertical" style="height: 35%">
                                        <div class="img-learning" style=" width: 100%; ">
                                            <img src="{{asset('front\images\inc\bankir2.png')}}" alt="">
                                        </div>
                                        {{-- <div class="learning-card_content">
                                            <div class="learning-card_title-section">
                                                <h5 class="learning-card_title">Membangun Ekosistem UKM BPR Sebagai
                                                    Fundamental Resolusi 2024</h5>
                                                <h5 class="learning-card_author">ppp</h5>
                                            </div>
                                            <hr>
                                            <div class="learning-card_bottom-section">
                                                <div class="space-between">
                                                    <div class="learning-card_price">
                                                        <span>5.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                </a>
                            </li>

                        </div>
                        {{-- <div class="col-lg-6 mb-4">
                            <li>
                                <a href="https://bankiracademy.com/" target="_blank" style="border-radius: 10px">
                                    <div class="learning-card learning-card--vertical">
                                        <div class="img-learning">
                                            <img src="{{asset('front\images\inc\pp.png')}}" alt="">
                                        </div>
                                        <div class="learning-card_content">
                                            <div class="learning-card_title-section">
                                                <h5 class="learning-card_title">Membangun Ekosistem UKM BPR Sebagai
                                                    Fundamental Resolusi 2024</h5>
                                                <h5 class="learning-card_author">ppp</h5>
                                            </div>
                                            <hr>
                                            <div class="learning-card_bottom-section">
                                                <div class="space-between">
                                                    <div class="learning-card_price">
                                                        <span>5.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </li>

                        </div> --}}
                    </div>
                </ul>
                {{-- <div class="m-t30">
                    <div class="d-flex">
                        <a class="site-button button-sm mr-auto" href="#"><i class="ti-arrow-left"></i> Prev</a>
                        <a class="site-button button-sm" href="#">Next <i class="ti-arrow-right"></i></a>
                    </div>
                </div> --}}
            </div>

        </div>

    </div>
</div>

{{-- <div class="section-full content-inner-2 overlay-white-middle"
    style="background-image:url(images/lines.png); background-position:bottom; background-repeat:no-repeat; background-size: 100%;">
    <div class="container">
        <div class="section-head text-black text-center">
            <h2 class="m-b0">Membership Plans</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy.</p>
        </div>
        <!-- Pricing table-1 Columns 3 with gap -->
        <div class="section-content box-sort-in button-example m-t80">
            <div class="pricingtable-row">
                <div class="row max-w1000 m-auto">
                    <div class="col-sm-12 col-md-4 col-lg-4 p-lr0">
                        <div class="pricingtable-wrapper style2 bg-white">
                            <div class="pricingtable-inner">
                                <div class="pricingtable-price">
                                    <h4 class="font-weight-300 m-t10 m-b0">Basic</h4>
                                    <div class="pricingtable-bx"><span>Free</span></div>
                                </div>
                                <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore et
                                    dolore magna siad enim aliqua</p>
                                <div class="m-t20">
                                    <a href="#" class="site-button radius-xl"><span class="p-lr30">Sign
                                            Up</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 p-lr0">
                        <div class="pricingtable-wrapper style2 bg-primary text-white active">
                            <div class="pricingtable-inner">
                                <div class="pricingtable-price">
                                    <h4 class="font-weight-300 m-t10 m-b0">Professional</h4>
                                    <div class="pricingtable-bx"> $ <span>29</span> / Per Installation </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore et
                                    dolore magna siad enim aliqua</p>
                                <div class="m-t20">
                                    <a href="#" class="site-button white radius-xl"><span class="p-lr30">Sign
                                            Up</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 p-lr0">
                        <div class="pricingtable-wrapper style2 bg-white">
                            <div class="pricingtable-inner">
                                <div class="pricingtable-price">
                                    <h4 class="font-weight-300 m-t10 m-b0">Extended</h4>
                                    <div class="pricingtable-bx"> $ <span>29</span> / Per Installation </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore et
                                    dolore magna siad enim aliqua</p>
                                <div class="m-t20">
                                    <a href="#" class="site-button radius-xl"><span class="p-lr30">Sign
                                            Up</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Our Latest Blog -->
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    dots:false,
    nav:true,
    navText: ["<span class='ti-arrow-left'></span>","<span class='ti-arrow-right'></span'>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
    });
</script>

<script>
    // Fungsi untuk menampilkan atau menyembunyikan konten tambahan
    document.getElementById('showContent').addEventListener('click', function() {
        var additionalContent = document.getElementById('additionalContent');
        if (additionalContent.style.display === 'none') {
            additionalContent.style.display = 'inline-block'; // Tampilkan konten tambahan
        } else {
            additionalContent.style.display = 'none'; // Sembunyikan konten tambahan
        }
    });
</script>
<script>
    // Fungsi untuk menampilkan atau menyembunyikan konten tambahan
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