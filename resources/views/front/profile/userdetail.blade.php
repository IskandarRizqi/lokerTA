@extends('front.profile.index')
@section('content-user')
<form action="#" method="post" enctype="multipart/form-data">
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
        <div class="col-lg-4">
            <div class="form-group">
                <label for="">Image</label>
                <input accept="image/*" type='file' id="imgInp" name="gambar" onchange="loadFile(event)" />
                <img id="images" @if(Auth::user()->gambar)
                src="/gambar?rf={{Auth::user()->gambar}}"
                @endif
                alt="your image" />
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary col-lg-12">Ubah</button>
            </div>
        </div>
    </div>
</form>
<script>
    var loadFile = function(event) {
      var output = document.getElementById('images');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>
@endsection