@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="/aksespengguna" method="POST" enctype="multipart/form-data">

            @csrf
            <input type="text" name="id" id="id" value="{{$edit ? $edit->id:''}}" hidden>
            <div class="page-header">
                <div class="page-title">
                    <a href="{{route('aksespengguna.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    <button class="btn  btn-sm" type="submit"
                        style="background-color: #FFB901; color:white">Simpan</button>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class="font-weight-bold " style="color: white;">Akses Pengguna </h5>
                    <div class="widget widget-content-area br-1" style="height: 100%;">

                        <div class="widget-two">


                            <div class="row m-2">



                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">name </label>
                                    <input type="hidden" name="" value="">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" placeholder=""
                                        value="{{$edit ? $edit->name : old('name')}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Email</label>
                                    <input type="hidden" name="" value="">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder=""
                                        value="{{$edit ? $edit->email : old('email')}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row m-2">

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">password</label>
                                    <input type="hidden" name="" value="">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" placeholder=""
                                        value="{{old('password')}}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="role">Role</label>
                                    <input type="hidden" name="" value="">
                                    <select name="role_id" class="form-control @error('role_id') is-invalid @enderror"
                                        placeholder="">
                                        <option value="">Pilih</option>
                                        @if($edit)
                                        <option value="0" {{$edit->role_id == 0 ? 'selected' : ''}}>Super Admin</option>
                                        <option value="1" {{$edit->role_id == 1 ? 'selected' : ''}}>User</option>
                                        <option value="2" {{$edit->role_id == 2 ? 'selected' : ''}}>Perusahaan</option>
                                        <option value="3" {{$edit->role_id == 3 ? 'selected' : ''}}>Admin</option>
                                        @else
                                        <option value="0" {{old('role_id')==0 ? 'selected' : '' }}>Super Admin</option>
                                        <option value="1" {{old('role_id')==1 ? 'selected' : '' }}>User</option>
                                        <option value="2" {{old('role_id')==2 ? 'selected' : '' }}>Perusahaan</option>
                                        <option value="3" {{old('role_id')==3 ? 'selected' : '' }}>Admin</option>
                                        @endif

                                    </select>
                                    @error('role_id')
                                    <span class="invalid-feedback" role_id="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>





                            </div>



                        </div>


                    </div>

                </div>
            </div>
        </form>




        <!-- CONTENT AREA -->

    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection