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
                                            <option value="Administrasi ">Administrasi </option>
                                            <option value="Hukum ">Hukum </option>
                                            <option value="Akuntansi">Akuntansi</option>
                                            <option value="Kesehatan ">Kesehatan </option>
                                            <option value="operator produksi">operator produksi</option>
                                            <option value="QC">QC</option>
                                            <option value="Marketing">marketing</option>
                                            <option value="Developer">developer</option>
                                            <option value="Frontend">frontend</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <select id="lokasi" name="lokasi">
                                            <option value="">Lokasi </option>
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
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <select id="lulusan" name="lulusan">
                                            <option value="">Semua Lulusan</option>
                                            <option value="SMK">SMA</option>
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
                                            <h6>{{$v->tempatperusahaan}}</h6>
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
                                            <input type="checkbox" class="custom-control-input" id="check8"
                                                name="job_title[]" value="Administrasi">
                                            <label class="custom-control-label" for="check8">Administrasi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check9"
                                                name="job_title[]" value="Hukum">
                                            <label class="custom-control-label" for="check9">Hukum</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check10"
                                                name="job_title[]" value="Akuntansi">
                                            <label class="custom-control-label" for="check10">Akuntansi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check6"
                                                name="job_title[]" value="Kesehatan">
                                            <label class="custom-control-label" for="check6">Kesehatan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check7"
                                                name="job_title[]" value="Developer">
                                            <label class="custom-control-label" for="check7">Developer</label>
                                        </div>

                                        <div class="mt-2">
                                            <span id="showContent1">Lainnya</span>
                                            <!-- ID showContent untuk mengontrol visibilitas konten tambahan -->
                                            <div id="additionalContent1" class="additional-content"
                                                style="display: none;">
                                                <!-- Area untuk konten tambahan -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="21"
                                                        name="job_title[]" value="Operator Produksi">
                                                    <label class="custom-control-label" for="21">Operator
                                                        Produksi</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="22"
                                                        name="job_title[]" value="Marketing">
                                                    <label class="custom-control-label" for="22">Marketing</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="23"
                                                        name="job_title[]" value="Frontend">
                                                    <label class="custom-control-label" for="23">Frontend</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="24"
                                                        name="job_title[]" value="Teknik Sipil">
                                                    <label class="custom-control-label" for="24">Teknik Sipil</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="25"
                                                        name="job_title[]" value="Teknik Sipil">
                                                    <label class="custom-control-label" for="25">Teknik Mesin</label>
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
                                            <input type="checkbox" class="custom-control-input" id="check11"
                                                name="lokasi[]" value="Jakarta">
                                            <label class="text-capitalize custom-control-label"
                                                for="check11">Jakarta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check12"
                                                name="lokasi[]" value="semarang">
                                            <label class="text-capitalize custom-control-label"
                                                for="check12">semarang</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check13"
                                                name="lokasi[]" value="Tanggerang">
                                            <label class="text-capitalize custom-control-label"
                                                for="check13">Tanggerang</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check14"
                                                name="lokasi[]" value="Yogyakarta">
                                            <label class="text-capitalize custom-control-label"
                                                for="check14">Yogyakarta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check0"
                                                name="lokasi[]" value="karawang">
                                            <label class="text-capitalize custom-control-label"
                                                for="check0">karawang</label>
                                        </div>
                                        <div class="mt-2">
                                            <span id="showContent">Lainnya</span>
                                            <!-- ID showContent untuk mengontrol visibilitas konten tambahan -->
                                            <div id="additionalContent" class="additional-content"
                                                style="display: none;">
                                                <!-- Area untuk konten tambahan -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="00"
                                                        name="lokasi[]" value="surabaya">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="00">surabaya</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="01"
                                                        name="lokasi[]" value="tanggerang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="01">tanggerang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="03"
                                                        name="lokasi[]" value="bandung">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="03">bandung</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="04"
                                                        name="lokasi[]" value="palembang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="04">palembang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="05"
                                                        name="lokasi[]" value="batam">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="05">batam</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="06"
                                                        name="lokasi[]" value="kalimantan">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="06">kalimantan</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="07"
                                                        name="lokasi[]" value="cikarang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="07">cikarang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="08"
                                                        name="lokasi[]" value="bekasi">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="08">bekasi</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="09"
                                                        name="lokasi[]" value="cikarang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="09">cikarang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="11"
                                                        name="lokasi[]" value="cirebon">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="11">cirebon</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="12"
                                                        name="lokasi[]" value="cilacap">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="12">cilacap</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="13"
                                                        name="lokasi[]" value="solo">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="33">solo</label>
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
                                            <input type="checkbox" class="custom-control-input" id="pen1"
                                                name="lulusan[]" value="SD">
                                            <label class="custom-control-label" for="pen1">SD</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pend2"
                                                name="lulusan[]" value="SMP">
                                            <label class="custom-control-label" for="pend2">SMP</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pen3"
                                                name="lulusan[]" value="SMA/SMK">
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
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pen6"
                                                name="lulusan[]" value="Profesi">
                                            <label class="custom-control-label" for="pen6">Profesi</label>
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
                                            <label class="custom-control-label" for="stat2">fulltime</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="stat3" name="jam[]"
                                                value="parttime">
                                            <label class="custom-control-label" for="stat3">parttime</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="stat4" name="jam[]"
                                                value="frelance">
                                            <label class="custom-control-label" for="stat4">frelance</label>
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

                        @foreach($inputdata->slice(0,15) as $key => $v)
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
    <div class="container">
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
                        <div class="col-lg-6 mb-4">
                            <li>
                                <a href="#" style="border-radius: 10px">
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

                        </div>
                        <div class="col-lg-6 mb-4">
                            <li>
                                <a href="#" style="border-radius: 10px">
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

                        </div>
                    </div>
                </ul>

            </div>
            <div class="col-lg-12">
                <ul class="learning">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <li>
                                <a href="#" style="border-radius: 10px">
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

                        </div>
                        <div class="col-lg-6 mb-4">
                            <li>
                                <a href="#" style="border-radius: 10px">
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

                        </div>
                    </div>
                </ul>
                <div class="m-t30">
                    <div class="d-flex">
                        <a class="site-button button-sm mr-auto" href="#"><i class="ti-arrow-left"></i> Prev</a>
                        <a class="site-button button-sm" href="#">Next <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
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