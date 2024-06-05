@extends('front.layouts.main')

@section('content')
<!-- About Us -->
<div class="section-full job-categories content-inner-2 bg-white"
    style="background-image:url(../images/pattern/pic1.html);">
    <div class="container clearfix">

        <div class="row align-items-center col-mb-50">
            <div class="col-md-4 center">
                <img data-animate="fadeInLeft" src="{{asset('front/images/gallery/bb.png')}}" alt="Iphone" style="height: 500px; width: 400px;">
            </div>

            <div class="col-md-8 text-center text-md-left">
                <div class="heading-block border-bottom-0">
                    <h3>About US</h3>
                </div>
                <p>Tentang Kami <br> <br>

                    Selamat datang di [Insert Website Name], portal lowongan kerja terkemuka di Indonesia. Kami berkomitmen untuk membantu Anda menemukan pekerjaan yang sesuai dengan keahlian dan minat Anda.
                    <br> <br>
                    Misi Kami
                    <br> <br>
                    Misi kami adalah untuk menjadi platform yang terpercaya dan efektif dalam membantu orang-orang menemukan pekerjaan yang sesuai dengan keahlian dan minat mereka. Kami berusaha untuk memberikan pengalaman yang lebih baik bagi para pencari kerja dan perusahaan yang ingin merekrut talenta terbaik.
                    <br> <br>
                    Visi Kami
                    <br> <br>
                    Visi kami adalah untuk menjadi portal lowongan kerja terkemuka di Indonesia, yang membantu meningkatkan kesempatan kerja dan meningkatkan kualitas hidup masyarakat.</p>
                <div class="kontakkami row">
                    <address class="col-lg-6">
                        <strong>Alamat Kami:</strong><br>
                        jawa tengah<br>
                        tegal<br>
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