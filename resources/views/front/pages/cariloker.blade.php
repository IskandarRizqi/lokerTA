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
                                            <option {{$job_title=='Administrasi' ? 'selected' : '' }}
                                                value="Administrasi ">Administrasi </option>
                                            <option {{$job_title=='Hukum' ? 'selected' : '' }} value="Hukum ">Hukum
                                            </option>
                                            <option {{$job_title=='Akuntansi' ? 'selected' : '' }} value="Akuntansi">
                                                Akuntansi</option>
                                            <option {{$job_title=='Kesehatan' ? 'selected' : '' }} value="Kesehatan ">
                                                Kesehatan </option>
                                            <option {{$job_title=='operator produksi' ? 'selected' : '' }}
                                                value="operator produksi">operator produksi</option>
                                            <option {{$job_title=='QC' ? 'selected' : '' }} value="QC">QC</option>
                                            <option {{$job_title=='Marketing' ? 'selected' : '' }} value="Marketing">
                                                marketing</option>
                                            <option {{$job_title=='Developer' ? 'selected' : '' }} value="Developer">
                                                developer</option>
                                            <option {{$job_title=='Frontend' ? 'selected' : '' }} value="Frontend">
                                                frontend</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <select id="lokasi" name="lokasi">
                                            <option value="">Lokasi </option>
                                            <option {{$lokasi=='Jakarta' ? 'selected' : '' }} value="Jakarta">Jakarta
                                            </option>
                                            <option {{$lokasi=='Semarang' ? 'selected' : '' }} value="Semarang">semarang
                                            </option>
                                            <option {{$lokasi=='Tanggerang' ? 'selected' : '' }} value="Tanggerang">
                                                Tanggerang</option>
                                            <option {{$lokasi=='Yogyakarta' ? 'selected' : '' }} value="Yogyakarta">
                                                Yogyakarta</option>
                                            <option {{$lokasi=='Karawang' ? 'selected' : '' }} value="Karawang">karawang
                                            </option>
                                            <option {{$lokasi=='surabaya' ? 'selected' : '' }} value="surabaya">surabaya
                                            </option>
                                            <option {{$lokasi=='tanggerang' ? 'selected' : '' }} value="tanggerang">
                                                tanggerang</option>
                                            <option {{$lokasi=='bandung' ? 'selected' : '' }} value="bandung">bandung
                                            </option>
                                            <option {{$lokasi=='palembang' ? 'selected' : '' }} value="palembang">
                                                palembang</option>
                                            <option {{$lokasi=='batam' ? 'selected' : '' }} value="batam">batam</option>
                                            <option {{$lokasi=='kalimantan' ? 'selected' : '' }} value="kalimantan">
                                                kalimantan</option>
                                            <option {{$lokasi=='bekasi' ? 'selected' : '' }} value="bekasi">bekasi
                                            </option>
                                            <option {{$lokasi=='cikarang' ? 'selected' : '' }} value="cikarang">cikarang
                                            </option>
                                            <option {{$lokasi=='cirebon' ? 'selected' : '' }} value="cirebon">cirebon
                                            </option>
                                            <option {{$lokasi=='tegal' ? 'selected' : '' }} value="tegal">tegal</option>
                                            <option {{$lokasi=='cilacap' ? 'selected' : '' }} value="cilacap">cilacap
                                            </option>
                                            <option {{$lokasi=='solo' ? 'selected' : '' }} value="solo">solo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <select id="lulusan" name="lulusan">
                                            <option value="">Semua Lulusan</option>
                                            <option {{$lulusan=='SD' ? 'selected' : '' }} value="SD">SD</option>
                                            <option {{$lulusan=='SMP' ? 'selected' : '' }} value="SMP">SMP</option>
                                            <option {{$lulusan=='SMK' ? 'selected' : '' }} value="SMK">SMA</option>
                                            <option {{$lulusan=='D3' ? 'selected' : '' }} value="D3">D3</option>
                                            <option {{$lulusan=='D4' ? 'selected' : '' }} value="D4">D4</option>
                                            <option {{$lulusan=='S1' ? 'selected' : '' }} value="S1">S1</option>
                                            <option {{$lulusan=='S1' ? 'selected' : '' }} value="S1">PROFESI</option>
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
                                            <input type="checkbox" class="custom-control-input" id="jtAdministrasi"
                                                name="job_title[]" value="Administrasi">
                                            <label class="custom-control-label"
                                                for="jtAdministrasi">Administrasi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="jtHukum"
                                                name="job_title[]" value="Hukum">
                                            <label class="custom-control-label" for="jtHukum">Hukum</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="jtAkuntansi"
                                                name="job_title[]" value="Akuntansi">
                                            <label class="custom-control-label" for="jtAkuntansi">Akuntansi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="jtKesehatan"
                                                name="job_title[]" value="Kesehatan">
                                            <label class="custom-control-label" for="jtKesehatan">Kesehatan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="jtDeveloper"
                                                name="job_title[]" value="Developer">
                                            <label class="custom-control-label" for="jtDeveloper">Developer</label>
                                        </div>

                                        <div class="mt-2">
                                            <span id="showContent1">Lainnya</span>
                                            <!-- ID showContent untuk mengontrol visibilitas konten tambahan -->
                                            <div id="additionalContent1" class="additional-content"
                                                style="display: none;">
                                                <!-- Area untuk konten tambahan -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="jtOperatorProduksi" name="job_title[]"
                                                        value="Operator Produksi">
                                                    <label class="custom-control-label"
                                                        for="jtOperatorProduksi">Operator
                                                        Produksi</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="jtMarketing"
                                                        name="job_title[]" value="Marketing">
                                                    <label class="custom-control-label"
                                                        for="jtMarketing">Marketing</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="jtFrontend"
                                                        name="job_title[]" value="Frontend">
                                                    <label class="custom-control-label"
                                                        for="jtFrontend">Frontend</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="jtTeknikSipil" name="job_title[]" value="Teknik Sipil">
                                                    <label class="custom-control-label" for="jtTeknikSipil">Teknik
                                                        Sipil</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="jtTeknikMesin" name="job_title[]" value="Teknik Mesin">
                                                    <label class="custom-control-label" for="jtTeknikMesin">Teknik
                                                        Mesin</label>
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
                                            <input type="checkbox" class="custom-control-input" id="lkJakarta"
                                                name="lokasi[]" value="Jakarta">
                                            <label class="text-capitalize custom-control-label"
                                                for="lkJakarta">Jakarta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="lksemarang"
                                                name="lokasi[]" value="semarang">
                                            <label class="text-capitalize custom-control-label"
                                                for="lksemarang">semarang</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="lkTanggerang"
                                                name="lokasi[]" value="Tanggerang">
                                            <label class="text-capitalize custom-control-label"
                                                for="lkTanggerang">Tanggerang</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="lkYogyakarta"
                                                name="lokasi[]" value="Yogyakarta">
                                            <label class="text-capitalize custom-control-label"
                                                for="lkYogyakarta">Yogyakarta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="lkkarawang"
                                                name="lokasi[]" value="karawang">
                                            <label class="text-capitalize custom-control-label"
                                                for="lkkarawang">karawang</label>
                                        </div>
                                        <div class="mt-2">
                                            <span id="showContent">Lainnya</span>
                                            <!-- ID showContent untuk mengontrol visibilitas konten tambahan -->
                                            <div id="additionalContent" class="additional-content"
                                                style="display: none;">
                                                <!-- Area untuk konten tambahan -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lksurabaya"
                                                        name="lokasi[]" value="surabaya">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lksurabaya">surabaya</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="lktanggerang" name="lokasi[]" value="tanggerang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lktanggerang">tanggerang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lkbandung"
                                                        name="lokasi[]" value="bandung">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lkbandung">bandung</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lkpalembang"
                                                        name="lokasi[]" value="palembang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lkpalembang">palembang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lkbatam"
                                                        name="lokasi[]" value="batam">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lkbatam">batam</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="lkkalimantan" name="lokasi[]" value="kalimantan">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lkkalimantan">kalimantan</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lkcikarang"
                                                        name="lokasi[]" value="cikarang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lkcikarang">cikarang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lkbekasi"
                                                        name="lokasi[]" value="bekasi">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lkbekasi">bekasi</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lkcikarang"
                                                        name="lokasi[]" value="cikarang">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lkcikarang">cikarang</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lkcirebon"
                                                        name="lokasi[]" value="cirebon">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lkcirebon">cirebon</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lkcilacap"
                                                        name="lokasi[]" value="cilacap">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lkcilacap">cilacap</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lksolo"
                                                        name="lokasi[]" value="solo">
                                                    <label class="text-capitalize custom-control-label"
                                                        for="lksolo">solo</label>
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
                                            <input type="checkbox" class="custom-control-input" id="llSD"
                                                name="lulusan[]" value="SD">
                                            <label class="custom-control-label" for="llSD">SD</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="llSMP"
                                                name="lulusan[]" value="SMP">
                                            <label class="custom-control-label" for="llSMP">SMP</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="llSMASMK"
                                                name="lulusan[]" value="SMA/SMK">
                                            <label class="custom-control-label" for="llSMASMK">SMA/SMK</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="llD3"
                                                name="lulusan[]" value="D3">
                                            <label class="custom-control-label" for="llD3">D3</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="llD4"
                                                name="lulusan[]" value="D4">
                                            <label class="custom-control-label" for="llD4">D4</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="llS1"
                                                name="lulusan[]" value="S1">
                                            <label class="custom-control-label" for="llS1">S1</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="llProfesi"
                                                name="lulusan[]" value="Profesi">
                                            <label class="custom-control-label" for="llProfesi">Profesi</label>
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
                                            <input type="checkbox" class="custom-control-input" id="jmfulltime"
                                                name="jam[]" value="fulltime">
                                            <label class="custom-control-label" for="jmfulltime">fulltime</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="jmparttime"
                                                name="jam[]" value="parttime">
                                            <label class="custom-control-label" for="jmparttime">parttime</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="jmfrelance"
                                                name="jam[]" value="frelance">
                                            <label class="custom-control-label" for="jmfrelance">frelance</label>
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
                                        <span class="mb-1"><img src="{{asset('front/images/gallery/about.png')}}"
                                                alt="Image" style="width: 100px; height: 100px;"></span>
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