@extends('front.cvats.layout.mainadmin')


@section('content')

<!--  BEGIN CONTENT AREA  -->
<body style="background-color: #ffffff;">
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="{{route('informasipribadi.store')}}" method="POST" enctype="multipart/form-data" style="width: 1070px; ">

            @csrf
           
            <div class="row">
               
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class= "font-weight-bold " style="color: blue;" >Informasi Pribadi </h5>
                    <div class="widget widget-content-area br-1"  style="height: 100%;">
                        
                        <div class="widget-two">
                            
                            <div class="row m-2">
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Upload Foto</label>
                                    <label for="gambar" style="color: black; display: flex; align-items: center;">
                                        
                                        <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror" style="display: none;">
                                        <button type="button" id="selectButton" style="width: 20%; height: 35px; border-radius: 5px;">Choose File</button>
                                        <img id="previewImage" src="#" alt="" style="max-width: 100px; max-height: 120px; margin-left: 30px;">
                                    </label>
                                  
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>  
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="row m-2">
                                   
                                <div class="col-lg-8">
                                    <label for="form-control" style="color: black;">Nama</label>
                                    <input type="hidden" name="idinformasipribadi" value="{{$informasipribadi->id}}">
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="" value="{{$informasipribadi->nama}}">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Email</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="" value="{{old('email')}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row m-2">
                                   
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">No HP</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="" value="{{old('no_hp')}}">
                                    @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">No Whatsapp</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                  
                                    <input type="text" name="no_wa" class="form-control @error('no_wa') is-invalid @enderror" placeholder="" value="{{old('no_wa')}}">
                                    @error('no_wa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                         
                            </div>

                            <div class="row m-2">
                            <div class="col-lg-4 text-left">
                             <h6 class= "font-weight-bold " style="color: rgb(0, 0, 3);" >Alamat </h6>
                            </div>
                            </div>

                          
                            <div class="row m-2">
                                   
                                <div class="col-lg-6">
                                    <label for="provinsi" style="color: black;">Provinsi</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <select name="provinsi" id='idprov' class="form-control @error('provinsi') is-invalid @enderror">
                                        <option value="">Pilih Alamat</option>
                                        @foreach($provinsis as $v)
                                        {{-- <option value="Alamat 1" {{ old('alamat') == 'Alamat 1' ? 'selected' : '' }}>Alamat 1</option>
                                        <option value="Alamat 2" {{ old('alamat') == 'Alamat 2' ? 'selected' : '' }}>Alamat 2</option> --}}
                                        <!-- Add more options as needed -->
                                        <option value="{{$v->id}}"> {{$v->nama}}</option>
                                        @endforeach
                                    </select>
                                    @error('provinsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="kota_kab" style="color: black;">Kota/Kabupaten</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <select name="kota_kab" id='idkab' class="form-control @error('kota_kab') is-invalid @enderror">
                                        <option value="">Pilih Alamat</option>
                                        <option value="Alamat 1" {{ old('alamat') == 'Alamat 1' ? 'selected' : '' }}>Alamat 1</option>
                                        <option value="Alamat 2" {{ old('alamat') == 'Alamat 2' ? 'selected' : '' }}>Alamat 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                    @error('kota_kab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                
                              
                            </div>
                            <div class="row m-2">

                                <div class="col-lg-6">
                                    <label for="kecamatan"  style="color: black;">Kecamatan</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <select name="kecamatan" id='idkec' class="form-control @error('kecamatan') is-invalid @enderror">
                                        {{-- @foreach($kecamatans as $v) --}}
                                        <option value="">Pilih Alamat</option>
                                        {{-- <option value="{{$v->id}}"> {{$v->nama}}</option> --}}
                                        {{-- @endforeach --}}
                                     
                                    </select>
                                    @error('kecamatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                   
                                <div class="col-lg-6">
                                    <label for="kelurahan"  style="color: black;">Kelurahan</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <select name="kelurahan" id= 'idkel' class="form-control @error('kelurahan') is-invalid @enderror">
                                        <option value="">Pilih Alamat</option>
                                       
                                        <!-- Add more options as needed -->
                                    </select>
                                    @error('kelurahan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row m-1">

                            
                                    <div class="col-lg-1">
                                        <label for="form-control" style="color:black">RT</label>
                                        <input type="hidden" name="idinformasipribadi" value="">
                                        <input type="text" name="rt" class="form-control @error('rt') is-invalid @enderror" placeholder="" value="{{old('rt')}}">
                                        @error('rt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    
                                    </div>
                                    <div class="col-lg-1">
                                        <label for="form-control" style="color:black">RW</label>
                                        <input type="hidden" name="idinformasipribadi" value="">
                                        <input type="text" name="rw" class="form-control @error('rw') is-invalid @enderror" placeholder="" value="{{old('rw')}}">
                                        @error('rw')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    
                                    </div>
                             
      
                            </div>
                            <div class="row m-1">
                                <div class="col-lg-12">
                                    <label for="form-control" style="color: black;">Detail Alamat</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <textarea cols="30" rows="5" class="form-control  @error('detailalamat') is-invalid @enderror" name="detailalamat">{{old('detailalamat')}}</textarea>
                                    @error('detailalamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-lg-12 text-left">
                                    <label for="form-control" style="color: black;">Ringkasan Tentang Anda</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <textarea cols="30" rows="5" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" oninput="checkWordCount(this)">{{ old('deskripsi') }}</textarea>
                                    <div id="wordCount">Kata: 0 / 250</div>
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3 text-right"> <!-- Menggeser tombol ke kanan -->
                                <!-- Tombol Create ditempatkan di sini -->
                                <button class="btn btn-primary btn-sm" type="submit">SIMPAN & LANJUTKAN</button>
                            </div>

                        </div>
                       
                    </div>
                </div>
            </div>
        </form>

        <script>
            function checkWordCount(textarea) {
                var text = textarea.value;
                var words = text.trim().split(/\s+/);
                var wordCount = words.length;
            
                if (wordCount > 250) {
                    // Jika jumlah kata melebihi batasan, potong teks menjadi 250 kata
                    var limitedText = words.slice(0, 250).join(' ');
                    textarea.value = limitedText;
                    wordCount = 250;
                }
            
                document.getElementById('wordCount').innerText = 'Kata: ' + wordCount + ' / 250';
            }
            </script>

        <script>
            document.getElementById('selectButton').addEventListener('click', function () {
                document.getElementById('gambar').click();
            });
        
            document.getElementById('gambar').addEventListener('change', function () {
                var fileInput = this;
                var previewImage = document.getElementById('previewImage');
        
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
        
                    reader.onload = function (e) {
                        previewImage.src = e.target.result;
                    };
        
                    reader.readAsDataURL(fileInput.files[0]);
                }
            });
        </script>
        

        <!-- CONTENT AREA -->

    </div>
</div>
</body>
<!--  END CONTENT AREA  -->
@endsection

@section('vaper')
<script>
   $('#idprov').on('change',function () {
            let data = $(this).val();
           
            $.ajax({
                url: '/kabupaten/'+data+'?bykotaid=true',
                data:{
                    _token:$("meta[name='csrf-token']").attr("content"),
                },
                method: 'GET',
                success:function(response)
                {
                    let h = '<option>Pilih</option>';
                    $('#idkab').html(h);
                    // $('#ki_kelurahan').html(h);
                    response.forEach(el => {
                      
                        h += '<option value="'+el.id+'">'+el.nama+'</option>';
                    });
                   
                    $('#idkab').html(h);
                },
                error: function(response) {
                    // 
                }
            });
        })

        $('#idkab').on('change',function () {
            let data = $(this).val();
            $.ajax({
                url: '/kecamatan/'+data+'?bykotaid=true',
                data:{
                    _token:$("meta[name='csrf-token']").attr("content"),
                },
                method: 'GET',
                success:function(response)
                {
                    let h = '<option>Pilih</option>';
                    $('#idkec').html(h);
                    // $('#ki_kelurahan').html(h);
                    response.forEach(el => {
                    
                            h += '<option value="'+el.id+'">'+el.nama+'</option>';
                        
                    });
                  
                    $('#idkec').html(h);
                },
                error: function(response) {
                    // 
                }
            });
        })

        $('#idkec').on('change',function () {
            let data = $(this).val();
            $.ajax({
                url: '/kelurahan/'+data+'?bykotaid=true',
                data:{
                    _token:$("meta[name='csrf-token']").attr("content"),
                },
                method: 'GET',
                success:function(response)
                {
                    let h = '<option>Pilih</option>';
                    $('#idkel').html(h);
                    response.forEach(el => {
                      
                            h += '<option value="'+el.id+'">'+el.nama+'</option>';
                        
                    });
                    $('#idkel').html(h);
                },
                error: function(response) {
                    // 
                }
            });
        })
</script>
@endsection




