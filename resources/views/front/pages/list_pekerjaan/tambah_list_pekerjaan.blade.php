@extends('front.layouts.main_admin')

@section('content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="{{route('list_pekerjaan.index')}}" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('list_pekerjaan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-1">

                            <div class="col-lg-4">
                                <label for="form-control">Nama Pekerjaan</label>
                                <input type="text" class="form-control" name="nama_pekerjaan">
                                @if($errors->has('nama_pekerjaan'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('nama_pekerjaan') }}
                                </div>
                                @endif
                            </div>

                            <div class="col-lg-12">
                                <label for="form-control">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                                @if($errors->has('deskripsi'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('deskripsi') }}
                                </div>
                                @endif
                            </div>



                        </div>
                        <div class="row mb-1">



                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
