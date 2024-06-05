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
                                        <label class="custom-control-label" for="check8">Developer</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check9" name="example1">
                                        <label class="custom-control-label" for="check9">Marketing</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check10"
                                            name="example1">
                                        <label class="custom-control-label" for="check10">Manajer</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check6" name="example1">
                                        <label class="custom-control-label" for="check6">Arsitek</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check7" name="example1">
                                        <label class="custom-control-label" for="check7">Lainnya</label>
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
                                        <label class="custom-control-label" for="check11">Jakarta Pusat</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check12"
                                            name="example1">
                                        <label class="custom-control-label" for="check12">Semarang</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check13"
                                            name="example1">
                                        <label class="custom-control-label" for="check13">Yogyakarta</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check14"
                                            name="example1">
                                        <label class="custom-control-label" for="check14">Tanggerang</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check15"
                                            name="example1">
                                        <label class="custom-control-label" for="check15">Lainnya</label>
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
                                        <label class="custom-control-label" for="pen5">D4/S1</label>
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
                                        <input type="checkbox" class="custom-control-input" id="stat1" name="example1">
                                        <label class="custom-control-label" for="stat1">Freelance</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="stat2" name="example1">
                                        <label class="custom-control-label" for="stat2">Full Time</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="stat3" name="example1">
                                        <label class="custom-control-label" for="stat3">Magang</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="stat4" name="example1">
                                        <label class="custom-control-label" for="stat4">Part Time</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="stat5" name="example1">
                                        <label class="custom-control-label" for="stat5">Lainnya</label>
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

</div>
@endsection