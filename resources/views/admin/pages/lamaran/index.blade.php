@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">

                {{-- <a href="/inputdata/create" class="btn  btn-sm"
                    style="background-color: #FFB901; color:white">Tambah</a> --}}

            </div>
        </div>


        <!-- CONTENT AREA -->
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget widget-content-area br-4">
                    <div class="widget-one">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>gambar</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Kategori</th>
                                    <th>pendidikan</th>
                                    <th>Jam</th>
                                    <th>Tempat Perusahaan</th>
                                    <th>Nama Pelamar</th>
                                    <th>Status</th>
                                    <th class="no-content text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $value)
                                <tr>
                                    <td width="1%">{{$key + 1}}</td>
                                    <td> <img width="120px" src="/gambar?rf={{$value->gambar}}"
                                            onclick="showImage('{{$value->gambar}}')"> </td>
                                    <td>{{$value->namaperusahaan}}</td>
                                    <td>{{$value->kategori}}</td>
                                    <td>{{$value->pendidikan}}</td>
                                    <td>{{$value->jam}}</td>
                                    <td>{{$value->tempatperusahaan}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->status == 0 ? 'Belum dikirim' : 'Terkirim'}}</td>

                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </a>

                                            <div class="dropdown-menu right" aria-labelledby="pendingTask"
                                                style="will-change: transform; position: absolute; transform: translate3d(105px, 0, 0px); top: 0px; left: 0px;">
                                                <a href="/status-lamaran/{{$value->id}}/{{$value->status == 0 ? 1 : 0}}"
                                                    class="dropdown-item">Ubah Status</a>
                                                <a href="/template?user_id={{$value->user_id}}" class="dropdown-item">CV
                                                    ATS</a>
                                                <a href="/templatesrt?user_id={{$value->user_id}}&kriteria_id={{$value->kriteria_id}}&loker_id={{$value->loker_id}}"
                                                    class="dropdown-item">Surat Lamaran</a>
                                                @if($value->file_pendukung)
                                                <a href="/gambar?rf={{$value->file_pendukung}}"
                                                    class="dropdown-item">File Pendukung</a>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Image</h5>
                    </div>
                    <div class="modal-body text-center">
                        <img src="" alt="" id="imageinputdata" width="100%">
                    </div>
                </div>
            </div>
        </div>



        <!-- CONTENT AREA -->

    </div>
</div>
<!--  END CONTENT AREA  -->
<script>
    function showImage(foto) {
        $('#imageinputdata').attr('src','/gambar?rf=/'+foto);
        $('#exampleModal').modal('show');
    }
</script>
@endsection