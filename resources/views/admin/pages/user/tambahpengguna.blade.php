@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="/aksespengguna" method="POST" enctype="multipart/form-data" style="width: 1340px; height: 2000px;">

            @csrf
            <div class="page-header">
                <div class="page-title">
                    <a href="{{route('aksespengguna.index')}}" class="btn btn-primary btn-sm">Kembali</a>
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
                                    <input type="hidden" name="idaksespengguna" value="">
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="" value="{{old('nama')}}">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
            
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Email</label>
                                    <input type="hidden" name="idaksespengguna" value="">
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="" value="{{old('email')}}">
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
                                    <input type="hidden" name="idasksespengguna" value="">
                                    <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="" value="{{old('password')}}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="role">Role</label>
                                    <input type="hidden" name="idaksespengguna" value="">
                                    <select name="role" class="form-control @error('role') is-invalid @enderror" placeholder="" value="{{old('role')}}">
                                        <option value="">Pilih</option>
                                        <option >ADMIN</option>
                                        <option >USER</option>
                                        <option >PARTNER</option>
                                        
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
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






