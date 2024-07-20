@extends('front.cvats.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
              
                <a href="{{route('informasipribadi.create')}}" class="btn btn-primary btn-sm">Tambah</a>
              
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
                                    <th>nama</th>
                                    <th>email</th>
                                    <th>Tanggal Lahir</th>
                                    <th>no_hp</th>
                                    <th>no_wa</th>
                                    <th>provinsi</th>
                                    <th>kota_kab</th>
                                    <th>kelurahan</th>
                                    <th>rt</th>
                                    <th>rw</th>
                                    <th>detailalamat</th>
                                    <th>deskripsi</th>
                                    <th>kecamatan</th>

                                    <th class="no-content text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($informasipribadi as $key => $value)
                                <tr>
                                    <td>{{$value->gambar}}</td>
                                    <td>{{$value->nama}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->tanggal}}</td>
                                    <td>{{$value->no_hp}}</td>
                                    <td>{{$value->no_wa}}</td>
                                    <td>{{$value->provinsi}}</td>
                                    <td>{{$value->kota_kab}}</td>
                                    <td>{{$value->kelurahan}}</td>
                                    <td>{{$value->rt}}</td>
                                    <td>{{$value->rw}}</td>
                                    <td>{{$value->detailalamat}}</td>
                                    <td>{{$value->deskripsi}}</td>
                                    <td>{{$value->kecamatan}}</td>

                          


                                    <td>
                                        <a href="{{ route('informasipribadi.show', $value->id) }}" class="btn btn-primary btn-sm d-block d-none">Edit</a>
                                        <br>
                                        {{-- <form action="{{ route('sosiallink.destroy', $value->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a type="submit" class="btn btn-danger btn-sm show_confirm d-block d-none">Hapus</a>
                                        </form> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

        </div>




        <!-- CONTENT AREA -->

    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection