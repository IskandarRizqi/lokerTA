@extends('front.cvats.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content" style="background-image: url('/images/temp.png'); background-size: cover;">
    <!-- ... your content ... -->
    <div class="layout-px-spacing">
        <form action="" method="POST" enctype="multipart/form-data" style="width: 1070px; background-color: grey">

            @csrf
           
            <div class="row">
               
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                 
                    <div class="widget widget-content-area br-1"  style="height: 200%;">
                        
                        
                        <a href="/template">
                            <img src="{{asset('images/temp.png')}}" style="height: 400px; width: 300px;  margin-top: 40px; margin-right: 10px; margin-left: 80px">
                        </a>
                        

                        
                    </div>
                </div>
            </div>
        </form>




        <!-- CONTENT AREA -->

    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection




