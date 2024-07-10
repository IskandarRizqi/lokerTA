@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">

                <a href="/inputdata/create" class="btn  btn-sm"
                    style="background-color: #FFB901; color:white">Tambah</a>

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
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Kategori</th>
                                    <th>pendidikan</th>
                                    <th>Jam</th>
                                    <th>Tempat Perusahaan</th>
                                    <th>Deskripsi</th>
                                    <th class="no-content text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inputdata as $key => $value)
                                <tr>
                                    <td width="1%">{{$key + 1}}</td>
                                    <td> <img width="120px" src="/gambar?rf={{$value->gambar}}"
                                            onclick="showImage('{{$value->gambar}}')"> </td>
                                    <td>{{$value->jk}}</td>
                                    <td>{{$value->namaperusahaan}}</td>
                                    <td>{{$value->kategori}}</td>
                                    <td>{{$value->pendidikan}}</td>
                                    <td>{{$value->jam}}</td>
                                    <td>{{$value->tempatperusahaan}}</td>
                                    <td>{!! $value->deskripsi !!}</td>

                                    <td>
                                        <a href="{{route('inputdata.show', $value->id)}}"
                                            class="btn btn-primary btn-sm d-block d-none">Edit</a>
                                        <br>
                                        <form action="{{route('inputdata.destroy', $value->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a type="submit"
                                                class="btn btn-danger btn-sm show_confirm d-block d-none">Hapus</a>
                                        </form>
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