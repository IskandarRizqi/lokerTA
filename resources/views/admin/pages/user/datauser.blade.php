@extends('admin.layout.main')

@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <a href="/data-pengguna/create" class="btn btn-primary btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
                    </svg> Tambah
                </a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-hover" id="default-ordering">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @foreach($users as $key => $value)
                                    <tr>
                                        <td width="1%">{{$key + 1}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>
                                            @if($value->rolename != null)
                                            <span class="badge badge-info">{{$value->rolename}}</span>
                                            @else
                                            <span class="badge badge-danger">Belum ditentukan</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="{{ route('data-pengguna.show', $value->id) }}" class="dropdown-item">Edit</a>
                                                <form action="{{ route('data-pengguna.destroy', $value->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a class="dropdown-item show_delete" type="submit">Hapus</a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach()
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    $(document).ready(function() {

    })
</script>
@endsection