@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="/categori" method="POST" enctype="multipart/form-data" style="width: 1340px; height: 2000px;">

            @csrf
            <div class="page-header">
                <div class="page-title">
                    {{-- <a href="{{route('categori.index')}}" class="btn btn-primary btn-sm">Kembali</a> --}}
                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                </div>
            </div>
           
            <div class="row">
               
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class= "font-weight-bold " style="color: blue;" >Akses Pengguna </h5>
                    <div class="widget widget-content-area br-1"  style="height: 100%;">
                        
                        <div class="widget-two">
                            
                          
                            <div class="row m-2">

                              
                                   
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Nama </label>
                                    <input type="hidden" name="idcategori" value="">
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="" value="{{old('nama')}}">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
            
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Email</label>
                                    <input type="hidden" name="idcategori" value="">
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="" value="{{old('nama')}}">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row m-2">
                                   
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">password</label>
                                    <input type="hidden" name="idcategori" value="">
                                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="" value="{{old('harga')}}">
                                    @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="form-control">Role</label>
                                    <select name="role" id="rls" class="form-control @error('role') is-invalid @enderror">
                                        <option></option>
                                        {{-- @foreach($role as $key => $value)
                                        <option @if(old('role')==null ) value="{{$value->id}}" @else value="{{old('role')}}" selected @endif>{{$value->name}}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('role')
                                    <small style="font-size: 12px; font-weight: bold" class="text-danger">{{$message}}</small>
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






