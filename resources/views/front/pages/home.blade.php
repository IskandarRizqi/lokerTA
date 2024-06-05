@extends('front.layouts.main')

@section('content')
<style>
    .owl-nav.disabled {
        visibility: hidden;
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
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMK">SMA</option>
                                            <option value="D3">D3</option>
                                            <option value="D4">D4</option>
                                            <option value="S1">S1</option>
                                            <option value="S1">PROFESI</option>
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
                                </li>

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
                <div class="sticky-top">
                    <div class="clearfix m-b30">
                        <h5 class="widget-title font-weight-700 text-uppercase">Profesi</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="product-brand">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check8" name="example1">
                                        <label class="custom-control-label" for="check8">Administrasi</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check9" name="example1">
                                        <label class="custom-control-label" for="check9">Hukum</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check10"
                                            name="example1">
                                        <label class="custom-control-label" for="check10">Akuntansi</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check6" name="example1">
                                        <label class="custom-control-label" for="check6">Kesehatan</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check7" name="example1">
                                        <label class="custom-control-label" for="check7">developer</label>
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <!-- Tambahkan margin untuk jarak di atasnya -->
                                        <a href="halaman_lainnya.html">Lainnya</a>
                                        <!-- Ganti halaman_lainnya.html dengan URL halaman tujuan -->
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
                                            name="example1">
                                        <label class="custom-control-label" for="check11">Jakarta</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check12"
                                            name="example1">
                                        <label class="custom-control-label" for="check12">semarang</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check13"
                                            name="example1">
                                        <label class="custom-control-label" for="check13">Tanggerang</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check14"
                                            name="example1">
                                        <label class="custom-control-label" for="check14">Yogyakarta</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check0" name="example1">
                                        <label class="custom-control-label" for="check0">tegal</label>
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <!-- Tambahkan margin untuk jarak di atasnya -->
                                        <a href="halaman_lainnya.html">Lainnya</a>
                                        <!-- Ganti halaman_lainnya.html dengan URL halaman tujuan -->
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
                                        <input type="checkbox" class="custom-control-input" id="pen1" name="example1">
                                        <label class="custom-control-label" for="pen1">SD</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="pend2" name="example1">
                                        <label class="custom-control-label" for="pend2">SMP</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="pen3" name="example1">
                                        <label class="custom-control-label" for="pen3">SMA/SMK</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="pen4" name="example1">
                                        <label class="custom-control-label" for="pen4">D3</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="pen5" name="example1">
                                        <label class="custom-control-label" for="pen5">D4</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="pen0" name="example1">
                                        <label class="custom-control-label" for="pen0">S1</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="pen6" name="example1">
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
                                        <input type="checkbox" class="custom-control-input" id="stat2" name="example1">
                                        <label class="custom-control-label" for="stat2">fulltime</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="stat3" name="example1">
                                        <label class="custom-control-label" for="stat3">parttime</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="stat4" name="example1">
                                        <label class="custom-control-label" for="stat4">frelance</label>
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <!-- Tambahkan margin untuk jarak di atasnya -->
                                        <a href="halaman_lainnya.html">Lainnya</a>
                                        <!-- Ganti halaman_lainnya.html dengan URL halaman tujuan -->
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <input type="button" value="Submit"
                        style="background-color: #FFB901; font-size:15px; border: none; color: white;  margin-top: -15px; border-radius: 5px;" />
                </div>
            </div>
            <div class="col-lg-9">
                <ul class="post-job-bxx">
                    <div class="row">
                        @foreach($inputdata as $key => $v)
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
    loop:true,
    margin:10,
    dots:false,
    nav:false,
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
@endsection