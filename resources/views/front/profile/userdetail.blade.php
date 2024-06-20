@extends('front.profile.index')
@section('content-user')
<form action="#" method="post">
    @csrf
    <input type="text" name="id" id="" value="{{ Auth::user()->id }}" hidden>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="" id="" value="{{ Auth::user()->email }}" class="form-control" readonly>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ Auth::user()->name }}" class="form-control">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary col-lg-12">Ubah</button>
            </div>
        </div>
    </div>
</form>
@endsection