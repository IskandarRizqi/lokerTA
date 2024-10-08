@extends('front.layouts.main')

@section('content')
<style>
    <style>.card {
        background-color: #FFB901;
    }
</style>
</style>
<!-- About Us -->
<div class="section-full job-categories content-inner-2 bg-white"
    style="background-image:url(../images/pattern/pic1.html);">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-9">
                <div class="card ">
                    <div class="card-body">
                        <div class="product">
                            <div class="row gutter-40">
                                <div class="col-md-8 text-center text-md-left product-desc">
                                    <div class="d-flex align-items-center mb-2">
                                        {{-- <a href="/submit-loker/{{$loker->id}}">
                                            <button class="btn btn-info btn-sm">Lamar Perkerjaan</button>
                                        </a> --}}
                                        <a href="/" class="ml-4" hidden>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;" title="Bookmark">
                                                <path
                                                    d="M18 2H6c-1.103 0-2 .897-2 2v18l8-4.572L20 22V4c0-1.103-.897-2-2-2zm0 16.553-6-3.428-6 3.428V4h12v14.553z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="heading-block border-bottom-0 mb-4">
                                        <h3 class="mb-2">{{$loker->namaperusahaan}}</h3>
                                        <div class="d-flex">
                                            <div class="jamkerja">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M12 5c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm0 14c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z">
                                                    </path>
                                                    <path
                                                        d="M11 9h2v5h-2zM9 2h6v2H9zm10.293 5.707-2-2 1.414-1.414 2 2z">
                                                    </path>
                                                </svg>
                                                <span class="text-capitalize">{{$loker->jam}}</span>
                                            </div>
                                            <div class="pekerjaan ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zm-5-2v2H9V4h6zM8 8h12v3H4V8h4zM4 19v-6h6v2h4v-2h6l.001 6H4z">
                                                    </path>
                                                </svg>
                                                <span class="text-capitalize">{{$loker->kategori}}</span>
                                            </div>
                                            <div class="alamat ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="m12 17 1-2V9.858c1.721-.447 3-2 3-3.858 0-2.206-1.794-4-4-4S8 3.794 8 6c0 1.858 1.279 3.411 3 3.858V15l1 2zM10 6c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2z">
                                                    </path>
                                                    <path
                                                        d="m16.267 10.563-.533 1.928C18.325 13.207 20 14.584 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.416 1.675-2.793 4.267-3.51l-.533-1.928C4.197 11.54 2 13.623 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-2.377-2.197-4.46-5.733-5.437z">
                                                    </path>
                                                </svg>
                                                {{$loker->tempatperusahaan}}
                                            </div>
                                            <div class="alamat ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="black">
                                                    <path d="M12 3L1 9l11 6 9-4.91V18h2V9L12 3zm0 2.18L18.26 9 12 11.82 5.74 9 12 5.18zM12 13.09l-7.91-4.05L3 10.08v2.27l9 4.59 9-4.59v-2.27l-1.09-.55L12 13.09z"/>
                                                </svg>
                                                
                                                {{$loker->pendidikan}}
                                            </div>
                                            
                                           
                                           
                                           
                                        </div>
                                      
                                        <div class="d-flex" style="margin-top: 9px;">

                                            <div class="alamat ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="black">
                                                    <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
                                                </svg>
                                                
                                                
                                                {{$loker->jk}}
                                            </div>
                                            <div class="alamat ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="black">
                                                    <!-- Rectangle for the banknote -->
                                                    <rect x="3" y="6" width="18" height="12" rx="2" ry="2" fill="none" stroke="black" stroke-width="2"/>
                                                    
                                                    <!-- Dollar Sign in the center -->
                                                    <text x="12" y="15" font-family="Arial" font-size="10" text-anchor="middle" fill="black">$</text>
                                                    
                                                    <!-- Optional small circles or additional details to mimic currency features -->
                                                    <circle cx="7" cy="12" r="1" fill="black"/>
                                                    <circle cx="17" cy="12" r="1" fill="black"/>
                                                </svg>
                                            
                                                {{$loker->gaji}}
                                    
                                             </div>
                                            
                                        </div>
                                          
                                       
                                    </div>
                                    <div style="text-align: justify; margin-bottom:30px;">{!!$loker->deskripsi!!}</div>

                                </div>
                                <div class="col-md-4 right">
                                    <img data-animate="fadeInLeft" src="/gambar?rf={{$loker->gambar}}"
                                        alt="Gambar loker" style="border-radius: 10px; width:100px; height:100px; margin-left: 150px; margin-top: 10px;">
                                </div>
                            </div>
                            <a href="/submit-loker/{{$loker->id}}" class="btn btn-warning btn-block mt-2">
                                Lamar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="center">
                    <h6>Loker Terbaru</h6>
                    @foreach($terbaru as $key => $v)
                    <a href="/detail-loker/{{$v->id}}">
                        <div class="card mb-2" style="border-radius: 10px;   background-color:#FFB901;">
                            <div class="card-body">
                                <p class="m-0">{{$v->namaperusahaan}}</p>
                                <div class="d-flex">
                                    <div class="jamkerja" style="font-size: 12px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                            <path
                                                d="M12 5c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm0 14c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z">
                                            </path>
                                            <path d="M11 9h2v5h-2zM9 2h6v2H9zm10.293 5.707-2-2 1.414-1.414 2 2z">
                                            </path>
                                        </svg>
                                        <span class="text-capitalize">{{$v->jam}}</span>
                                    </div>
                                    <div class="pekerjaan ml-2" style="font-size: 12px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                            <path
                                                d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zm-5-2v2H9V4h6zM8 8h12v3H4V8h4zM4 19v-6h6v2h4v-2h6l.001 6H4z">
                                            </path>
                                        </svg>
                                        <span class="text-capitalize">{{$v->kategori}}</span>
                                    </div>
                                    <div class="alamat ml-2" style="font-size: 12px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                            <path
                                                d="m12 17 1-2V9.858c1.721-.447 3-2 3-3.858 0-2.206-1.794-4-4-4S8 3.794 8 6c0 1.858 1.279 3.411 3 3.858V15l1 2zM10 6c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2z">
                                            </path>
                                            <path
                                                d="m16.267 10.563-.533 1.928C18.325 13.207 20 14.584 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.416 1.675-2.793 4.267-3.51l-.533-1.928C4.197 11.54 2 13.623 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-2.377-2.197-4.46-5.733-5.437z">
                                            </path>
                                        </svg>
                                        {{$v->tempatperusahaan}}
                                    </div>
                                    {{-- <div class="alamat ml-2" style="font-size: 12px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                            <path
                                                d="m12 17 1-2V9.858c1.721-.447 3-2 3-3.858 0-2.206-1.794-4-4-4S8 3.794 8 6c0 1.858 1.279 3.411 3 3.858V15l1 2zM10 6c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2z">
                                            </path>
                                            <path
                                                d="m16.267 10.563-.533 1.928C18.325 13.207 20 14.584 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.416 1.675-2.793 4.267-3.51l-.533-1.928C4.197 11.54 2 13.623 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-2.377-2.197-4.46-5.733-5.437z">
                                            </path>
                                        </svg>
                                        {{$loker->pendidikan}}
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </a>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection