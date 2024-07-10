@extends('front.layouts.main_admin')

@section('content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('list_pekerjaan.create')}}" class="btn btn-primary btn-sm">Tambah</a>


                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-hover" id="default-ordering">
                                <thead>
                                    <tr>
                                        <th>No</th>

                                        <th>nama pekerjaan</th>
                                        <th>Deskripsi</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_pekerjaan as $key => $value)
                                    <tr>
                                        <td width="1%">{{$key + 1}}</td>

                                        <td>{{$value->nama_pekerjaan}}</td>
                                        <td>{!!$value->deskripsi!!}</td>


                                        <td class="text-center" style="display: flex; justify-content: center;">

                                            <a href="{{ route('list_pekerjaan.show', $value->uid) }}"
                                                class="btn btn-warning mb-1 mr-1 rounded-circle" data-toggle="tooltip"
                                                title='Update'><i class="bx bx-edit bx-sm"></i></a>



                                            <form action="{{ route('list_pekerjaan.destroy', $value->uid) }}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger mb-1 mr-1 rounded-circle show_confirm"
                                                    data-toggle="tooltip" title='Delete' type="submit"><i
                                                        class="bx bx-trash bx-sm"></i></button>
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
        </div>
    </div>

</div>
@endsection