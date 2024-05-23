@extends('layouts.main')

@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <a href="/data-pengguna" class="btn btn-primary btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
                    </svg> Back
                </a>
            </div>
            <div class="widget-content">
                <form action="{{ route('data-pengguna.update', $users['id']) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row mt-4 mb-2">
                        <div class="col-lg-6">
                            <label for="form-control">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama pengguna" value="{{ old('nama') ? old('nama') : $users['name'] }} ">
                            @error('nama')
                            <small style="font-size: 12px; font-weight: bold" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="form-control">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email pengguna" value="{{ old('email') ? old('email') : $users['email'] }}">
                            @error('email')
                            <small style="font-size: 12px; font-weight: bold" class="text-danger">{{$message}}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="form-control">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{ old('password') }}">
                            @error('password')
                            <small style="font-size: 12px; font-weight: bold" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="form-control">Role</label>
                            <input type="hidden" name="oldrole" value="{{$users['rolename']}}">
                            <select name="role" id="rls" class="form-control @error('role') is-invalid @enderror">
                                <option></option>
                                @foreach($role as $key => $value)
                                @if($value->id == $users['roleid'])
                                <option @if(old('role')==null ) value="{{$value->id}}" selected @else value="{{old('role')}}" selected @endif>{{$value->name}}</option>
                                @else
                                <option @if(old('role')==null ) value="{{$value->id}}" @else value="{{old('role')}}" selected @endif>{{$value->name}}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('role')
                            <small style="font-size: 12px; font-weight: bold" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-end">
                            <button class="btn btn-primary btn-sm" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                    <path d="M5 21h14a2 2 0 0 0 2-2V8l-5-5H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zM7 5h4v2h2V5h2v4H7V5zm0 8h10v6H7v-6z">
                                    </path>
                                </svg>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

<script>
    $(document).ready(function() {
        $("#rls").select2({
            placeholder: "Pilih salah satu",
            allowClear: true
        });
    })
</script>
@endsection