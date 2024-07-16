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
                                <b class="cards-title text-uppercase ">Jumlah Loker</b>
                                <br>
                                <br>
                                <span class="h6 font-weight-bold mb-0" id="jmlpgw">{{$total_loker}}</span>
                            </div>
                            {{-- <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white rounded-circle shadow"
                                    style="background-color: #0055ff !important;">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="cards cards-stats mb-4 mb-xl-0" style="background-color: rgb(0, 143, 251);">
                    <div class="cards-body">
                        <div class="row">
                            <div class="col">
                                <b class="cards-title text-uppercase ">Jumlah User</b>
                                <br>
                                <br>
                                <span class="h6 font-weight-bold mb-0" id="jmlpgw">{{$total_user}}</span>
                            </div>
                            {{-- <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white rounded-circle shadow"
                                    style="background-color: #0055ff !important;">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="cards cards-stats mb-4 mb-xl-0" style="background-color: rgb(254, 176, 25);">
                    <div class="cards-body">
                        <div class="row">
                            <div class="col">
                                <b class="cards-title text-uppercase ">Jumlah admin</b>
                                <br>
                                <br>
                                <span class="h6 font-weight-bold mb-0" id="jmlpgw">{{$total_admin}}</span>
                            </div>
                            {{-- <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white rounded-circle shadow"
                                    style="background-color: #0055ff !important;">
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
                                <b class="cards-title text-uppercase ">total lamaran</b>
                                <br>
                                <br>
                                <span class="h6 font-weight-bold mb-0" id="jmlpgw">{{$total_lamaran}}</span>
                            </div>
                            {{-- <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white rounded-circle shadow"
                                    style="background-color: #0055ff !important;">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 mt-2">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <form action="/dashboard" method="GET">
                            @csrf
                            <div class="form-group m-2">
                                <label for="">Tanggal Awal dan Akhir</label>
                                <div class="d-flex">
                                    <input type="date" name="tanggal_awal" id="" class="form-control"
                                        value="{{$tawal}}">
                                    <input type="date" name="tanggal_akhir" id="" class="form-control ml-2"
                                        value="{{$takhir}}">
                                    <button class="btn btn-primary btn-sm ml-2" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                        <div class="m-2">
                            <button class="btn btn-info btn-sm" id="btnexport">Export</button>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableKreditExport">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Loker</th>
                                            <th>Nama Pelamar</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $key => $value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->namaperusahaan}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->status == 1 ? 'Terkirim' : 'Proses'}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
    <textarea name="" id="lamaran_setahun" cols="30" rows="10" hidden>{{json_encode($lamaran_setahun)}}</textarea>
    <script>
        $('#btnexport').on('click',function () {
            TableToExcel.convert(document.getElementById("tableKreditExport"),{
                name: "Laporan.xlsx",
                sheet: {
                    name: "Laporan"
                }
            });
        })
        $(document).ready(function() {
            let ls = JSON.parse($('#lamaran_setahun').val());
            console.log(ls);
            var options = {
          series: [{
            name: "Lamar",
            data: ls
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: 'Jumlah Pelamar per Bulan',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
            categories: [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
         ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart1"), options);
        chart.render();
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