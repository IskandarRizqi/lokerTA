@extends('admin.layout.main')

@section('content')
<style>
   .cards {
       position: relative;
       display: flex;
       flex-direction: column;
       min-width: 0;
       word-wrap: break-word;
       border: 1px solid rgba(0, 0, 0, .05);
       border-radius: .375rem;
       background-color: #fff;
       background-clip: border-box;
   }

   .cards-body {
       padding: 1.5rem;
       flex: 1 1 auto;
   }

   .cards-title {
       margin-bottom: 1.25rem;
       font-size: 13px;
       color: black;
   }

   .cards-stats .cards-body {
       padding: 1rem 1.5rem;
   }

   .icon-shape {
       display: inline-flex;
       padding: 12px;
       text-align: center;
       border-radius: 50%;
       align-items: center;
       justify-content: center;
   }
   .col {
       color: black;
   }
</style>

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
   <div class="layout-px-spacing">
      <div class="row layout-top-spacing">
         <div class="col-xl-3 col-lg-6">
             <div class="cards cards-stats mb-4 mb-xl-0" style="background-color: rgb(0, 227, 150);">
                 <div class="cards-body">
                     <div class="row">
                         <div class="col">
                             <b class="cards-title text-uppercase "  >Jumlah Loker</b>
                             <br>
                             <br>
                             {{-- <span class="h6 font-weight-bold mb-0" id="jmlpgw">{{$calonnasabah}}</span> --}}
                         </div>
                         {{-- <div class="col-auto">
                             <div class="icon icon-shape bg-primary text-white rounded-circle shadow" style="background-color: #0055ff !important;">
                                 <i class="fas fa-user"></i>
                             </div>
                         </div>  --}}
                     </div>
 
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-lg-6">
             <div class="cards cards-stats mb-4 mb-xl-0" style="background-color: rgb(0, 143, 251);">
                 <div class="cards-body">
                     <div class="row">
                         <div class="col">
                             <b class="cards-title text-uppercase " >Jumlah User</b>
                             <br>
                             <br>
                             {{-- <span class="h6 font-weight-bold mb-0" id="jmlpgw">{{$nasabahpending}}</span> --}}
                         </div>
                          {{-- <div class="col-auto">
                             <div class="icon icon-shape bg-primary text-white rounded-circle shadow" style="background-color: #0055ff !important;">
                                 <i class="fas fa-user"></i>
                             </div>
                         </div>  --}}
                     </div>
 
                 </div>
             </div>
         </div>
 
         <div class="col-xl-3 col-lg-6">
             <div class="cards cards-stats mb-4 mb-xl-0" style="background-color: rgb(254, 176, 25);">
                 <div class="cards-body">
                     <div class="row">
                         <div class="col">
                             <b class="cards-title text-uppercase " >Jumlah admin</b>
                             <br>
                             <br>
                             {{-- <span class="h6 font-weight-bold mb-0" id="jmlpgw">{{$nasabahditerima}}</span> --}}
                         </div>
                          {{-- <div class="col-auto">
                             <div class="icon icon-shape bg-primary text-white rounded-circle shadow" style="background-color: #0055ff !important;">
                                 <i class="fas fa-user"></i>
                             </div>
                         </div> --}}
                     </div>
 
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-lg-6">
             <div class="cards cards-stats mb-4 mb-xl-0" style="background-color: rgb(255, 69, 96);"> 
                 <div class="cards-body">
                     <div class="row">
                         <div class="col">
                             <b class="cards-title text-uppercase ">total login</b>
                             <br>
                             <br>
                             {{-- <span class="h6 font-weight-bold mb-0" id="jmlpgw">{{$nasabahtdkdstji}}</span> --}}
                         </div>
                          {{-- <div class="col-auto">
                             <div class="icon icon-shape bg-primary text-white rounded-circle shadow" style="background-color: #0055ff !important;">
                                 <i class="fas fa-user"></i>
                             </div>
                         </div>  --}}
                     </div>
 
                 </div>
             </div>
         </div>
     </div>
     <div class="row layout-top-spacing">
         
     <div class="row layout-top-spacing">
         <div class="col-xl-12 col-lg-12 col-md-12">
             <div class="statbox widget box box-shadow">
                 <div class="widget-content widget-content-area">
                     <div id="calendars"></div>
                 </div>
             </div>
         </div>
     </div>

   </div>
</div>
<!--  END CONTENT AREA  -->

<script>
   $(document).ready(function() {
       var calendarEl = document.getElementById('calendars');
       var calendar = new FullCalendar.Calendar(calendarEl, {
           headerToolbar: {
               left: 'prev,next today',
               center: 'title',
               right: 'dayGridMonth,timeGridWeek,timeGridDay'
           },
           initialView: 'dayGridMonth', // Tampilan awal saat kalender dimuat
           events: [
               // Daftar acara dimasukkan di sini
               {
                   title: 'Acara 1',
                   start: '2024-06-05'
               },
               {
                   title: 'Acara 2',
                   start: '2024-06-07',
                   end: '2024-06-10'
               }
           ]
       });

       calendar.render(); // Render kalender
   });
</script>
@endsection
