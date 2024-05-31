@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">

                <a href="/aksespengguna/create" class="btn btn-primary btn-sm">Tambah</a>

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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($aksespengguna as $key => $value)
                                    <tr>
                                        <td width="1%">{{$key + 1}}</td>
                                        <td>{{$value->nama}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->password}}</td>
                                        <td>{{$value->role}}</td>
                                        <td>
                                            <a href="{{route('aksespengguna.show', $value->id)}}"
                                                class="btn btn-primary btn-sm d-block d-none">Edit</a>
                                            <br>
                                            <form action="{{route('aksespengguna.destroy', $value->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a type="submit"
                                                class="btn btn-danger btn-sm show_confirm d-block d-none">Hapus</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach()
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

        </div>
        <!-- CONTENT AREA -->
           <!-- Modal -->
           <div class="modal fade" id="modalhapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Hapus Data?</h5>
                    </div>
                    <div class="modal-body text-center">
                        <form action="" method="post" id="form-delete">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm show_confirm">Ya</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      

    </div>
</div>
<!--  END CONTENT AREA  -->
<script>
    function hapus(id) {
        $('#modalhapus').modal('show');
        $('#form-delete').attr('action','/aksespengguna/'+id);
    }
</script>
@endsection