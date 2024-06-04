@extends('front.layouts.main')

@section('content')
<!-- About Us -->
<div class="section-full job-categories content-inner-2 bg-white"
    style="background-image:url(../images/pattern/pic1.html);">
    <div class="container clearfix">

        <div class="row align-items-center col-mb-50">
            <div class="col-md-4 center">
                <img data-animate="fadeInLeft" src="{{asset('front/images/gallery/about.png')}}" alt="Iphone">
            </div>

            <div class="col-md-8 text-center text-md-left">
                <div class="heading-block border-bottom-0">
                    <h3>About US</h3>
                </div>
                <p>Di Asia, SEEK mengoperasikan Jobstreet dan Jobsdb di Indonesia, Hong Kong, Malaysia, Filipina,
                    Singapura, dan Thailand. SEEK mendapatkan lebih dari 500 juta kunjungan setiap tahunnya. SEEK juga
                    memiliki investasi minoritas di Korea (JobKorea), Bangladesh (BDJobs), dan Tiongkok (Zhaopin) di
                    wilayah tersebut.</p>
                <div class="kontakkami row">
                    <address class="col-lg-6">
                        <strong>Headquarters:</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                    </address>
                    <div class="hubungikami col-lg-6">
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (62) 85772637432 <br>
                        <abbr title="Fax"><strong>Fax:</strong></abbr> (62) 88888822222<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> lokertegal@gmail.com
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection