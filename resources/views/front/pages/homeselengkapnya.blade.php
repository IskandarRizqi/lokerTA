@extends('front.layouts.main')

@section('content')
<style>
    .owl-nav.disabled {
        visibility: hidden;
    }
    .additional-content {
        font-size: 14px;
        display: inline-block;
        vertical-align: top; /* Atur posisi vertikal ke atas */
        max-height: 200px; /* Atur tinggi maksimum */
        overflow-y: auto; /* Aktifkan scrollbar jika konten lebih panjang dari container */
        margin-left: 10px; /* Atur jarak dari teks "Lainnya" */
    }

    /* Styling untuk teks "Lainnya" */
    #showContent1 {
        cursor: pointer;
        color: blue; /* Warna teks biru */
    }
    #showContent {
        cursor: pointer;
        color: blue; /* Warna teks biru */
    }

    /* Styling untuk tautan */
    a {
        text-decoration: none; /* Hilangkan garis bawah tautan */
    }
</style>


    <!-- About Us -->
    <div class="section-full job-categories content-inner-2 bg-white"
        style="background-image:url(../images/pattern/pic1.html); ">
        <div class="container">
            
                    <div class="find-job-bx" style="margin-bottom:10px; ">
                        <form action="/caripekerjaan" class="dezPlaceAni">
                            @csrf
                            <div class="row" >
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
                                            <option value="Elektro ">Elektro </option>
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
                                            <option value="">Pendidikan</option>
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


<div class="section-full bg-white content-inner-2">
    <div class="container">
        
            <div class="col-lg-12 section-head text-center">
                <h2 class="m-b5" style="margin-top: 0;">Semua Lowongan </h2>
            </div>
        <div class="row">
            {{-- <div class="col-xl-3 col-lg-4">
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

                                    <div class="mt-2">
                                    <span id="showContent1">Lainnya</span> <!-- ID showContent untuk mengontrol visibilitas konten tambahan -->
                                            <div id="additionalContent1" class="additional-content" style="display: none;"> <!-- Area untuk konten tambahan -->
                                                <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="21" name="example1">
                                                <label class="custom-control-label" for="21">operator produksi</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="22" name="example1">
                                                <label class="custom-control-label" for="22">marketing</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="23"
                                                    name="example1">
                                                <label class="custom-control-label" for="23">frontend</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="24" name="example1">
                                                <label class="custom-control-label" for="24">tekniksipil</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="25" name="example1">
                                                <label class="custom-control-label" for="25">teknikmesin</label>
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
                                        <label class="custom-control-label" for="check0">karawang</label>
                                    </div>
                                    <div class="mt-2">
                                        <span id="showContent">Lainnya</span> <!-- ID showContent untuk mengontrol visibilitas konten tambahan -->
                                        <div id="additionalContent" class="additional-content" style="display: none;"> <!-- Area untuk konten tambahan -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="00"
                                                    name="example1">
                                                <label class="custom-control-label" for="00">surabaya</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="01"
                                                    name="example1">
                                                <label class="custom-control-label" for="01">tanggerang</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="03"
                                                    name="example1">
                                                <label class="custom-control-label" for="03">bandung</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="04"
                                                    name="example1">
                                                <label class="custom-control-label" for="04">palembang</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="05" name="example1">
                                                <label class="custom-control-label" for="05">batam</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="06"
                                                    name="example1">
                                                <label class="custom-control-label" for="06">kalimantan</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="07"
                                                    name="example1">
                                                <label class="custom-control-label" for="07">cikarang</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="08"
                                                    name="example1">
                                                <label class="custom-control-label" for="08">bekasi</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="09"
                                                    name="example1">
                                                <label class="custom-control-label" for="09">cikarang</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="11" name="example1">
                                                <label class="custom-control-label" for="11">cirebon</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="12"
                                                    name="example1">
                                                <label class="custom-control-label" for="12">cilacap</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="13" name="example1">
                                                <label class="custom-control-label" for="33">solo</label>
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
                                    

                                </div>
                            </div>

                        </div>
                    </div>
                    <input type="button" value="Submit"
                        style="background-color: #FFB901; font-size:15px; border: none; color: white;  margin-top: -15px; border-radius: 5px;" />
                </div>
            </div> --}}
            <div class="col-lg-12">

                <ul class="post-job-bxx">
                    <div class="row">
                       
                        @foreach($inputdata as $key => $v)
                        <div class="col-lg-3 mb-4">

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