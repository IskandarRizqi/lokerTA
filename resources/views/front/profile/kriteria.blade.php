@extends('front.profile.index')
@section('content-user')
<form action="/update-kriteria" method="POST">
    @csrf
    <div class="form-group">
        <label for="jk">Apa jenis kelamin anda?</label>
        <select id="jk" name="jk" required>
            <option value="" disabled>Pilih</option>
            @if($data)
            <option value="laki-laki" {{$data->jk == 'laki-laki' ? 'selected' : ''}}>Laki-laki</option>
            <option value="perempuan" {{$data->jk == 'perempuan' ? 'selected' : ''}}>Perempuan</option>
            <option value="lp" {{$data->jk == 'lp' ? 'selected' : ''}}>Male & Female</option>
            @else
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
            <option value="lp">Male & Female</option>
            @endif

        </select>
    </div>
    <div class="form-group">
        <label for="bidang">Bidang Apa Yang Sedang Anda Cari?</label>
        <input type="hidden" name="idkriteria" value="">
        <select id="bidang" name="bidang" required>
            <option value="" disabled>Pilih</option>
            @if($data)
            <option value="Administrasi" {{$data->bidang == 'Administrasi' ? 'selected' : ''}}>Administrasi </option>
            <option value="Hukum" {{$data->bidang == 'Hukum' ? 'selected' : ''}}>Hukum </option>
            <option value="Akuntansi" {{$data->bidang == 'Akuntansi' ? 'selected' : ''}}>Akuntansi</option>
            <option value="Kesehatan" {{$data->bidang == 'Kesehatan' ? 'selected' : ''}}>Kesehatan </option>
            <option value="operator produksi" {{$data->bidang == 'operator produksi' ? 'selected' : ''}}>operator
                produksi</option>
            <option value="QC" {{$data->bidang == 'QC' ? 'selected' : ''}}>QC</option>
            <option value="Marketing" {{$data->bidang == 'Marketing' ? 'selected' : ''}}>marketing</option>
            <option value="Developer" {{$data->bidang == 'Developer' ? 'selected' : ''}}>developer</option>
            <option value="Frontend" {{$data->bidang == 'Frontend' ? 'selected' : ''}}>frontend</option>
            @else
            <option value="Administrasi ">Administrasi </option>
            <option value="Hukum ">Hukum </option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Kesehatan ">Kesehatan </option>
            <option value="operator produksi">operator produksi</option>
            <option value="QC">QC</option>
            <option value="Marketing">marketing</option>
            <option value="Developer">developer</option>
            <option value="Frontend">frontend</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="lokasi">Kota Mana Yang Sedang Anda Cari?</label>
        <input type="hidden" name="idkriteria" value="">
        <select id="lokasi" name="lokasi" required>
            <option value="" disabled>Pilih</option>
            @if($data)
            <option value="Jakarta" {{$data->lokasi == 'Jakarta' ? 'selected' : ''}}>Jakarta</option>
            <option value="Semarang" {{$data->lokasi == 'Semarang' ? 'selected' : ''}}>semarang</option>
            <option value="Tanggerang" {{$data->lokasi == 'Tanggerang' ? 'selected' : ''}}>Tanggerang</option>
            <option value="Yogyakarta" {{$data->lokasi == 'Yogyakarta' ? 'selected' : ''}}>Yogyakarta</option>
            <option value="Karawang" {{$data->lokasi == 'Karawang' ? 'selected' : ''}}>karawang</option>
            <option value="surabaya" {{$data->lokasi == 'surabaya' ? 'selected' : ''}}>surabaya</option>
            <option value="tanggerang" {{$data->lokasi == 'tanggerang' ? 'selected' : ''}}>tanggerang</option>
            <option value="bandung" {{$data->lokasi == 'bandung' ? 'selected' : ''}}>bandung</option>
            <option value="palembang" {{$data->lokasi == 'palembang' ? 'selected' : ''}}>palembang</option>
            <option value="batam" {{$data->lokasi == 'batam' ? 'selected' : ''}}>batam</option>
            <option value="kalimantan" {{$data->lokasi == 'kalimantan' ? 'selected' : ''}}>kalimantan</option>
            <option value="bekasi" {{$data->lokasi == 'bekasi' ? 'selected' : ''}}>bekasi</option>
            <option value="cikarang" {{$data->lokasi == 'cikarang' ? 'selected' : ''}}>cikarang</option>
            <option value="cirebon" {{$data->lokasi == 'cirebon' ? 'selected' : ''}}>cirebon</option>
            <option value="tegal" {{$data->lokasi == 'tegal' ? 'selected' : ''}}>tegal</option>
            <option value="cilacap" {{$data->lokasi == 'cilacap' ? 'selected' : ''}}>cilacap</option>
            <option value="solo" {{$data->lokasi == 'solo' ? 'selected' : ''}}>solo</option>
            @else
            <option value="Jakarta">Jakarta</option>
            <option value="Semarang">semarang</option>
            <option value="Tanggerang">Tanggerang</option>
            <option value="Yogyakarta">Yogyakarta</option>
            <option value="Karawang">karawang</option>
            <option value="surabaya">surabaya</option>
            <option value="tanggerang">tanggerang</option>
            <option value="bandung">bandung</option>
            <option value="palembang">palembang</option>
            <option value="batam">batam</option>
            <option value="kalimantan">kalimantan</option>
            <option value="bekasi">bekasi</option>
            <option value="cikarang">cikarang</option>
            <option value="cirebon">cirebon</option>
            <option value="tegal">tegal</option>
            <option value="cilacap">cilacap</option>
            <option value="solo">solo</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="pendidikan">Lulusan Apa Yang Sedang Anda Cari?</label>
        <input type="hidden" name="idkriteria" value="">
        <select id="pendidikan" name="pendidikan" required>
            <option value="">Pilih pendidikan</option>
            @if($data)
            <option value="SMK" {{$data->pendidikan == 'SMK' ? 'selected' : ''}}>SMA</option>
            <option value="D3" {{$data->pendidikan == 'D3' ? 'selected' : ''}}>D3</option>
            <option value="D4" {{$data->pendidikan == 'D4' ? 'selected' : ''}}>D4</option>
            <option value="S1" {{$data->pendidikan == 'S1' ? 'selected' : ''}}>S1</option>
            @else
            <option value="SMK">SMA</option>
            <option value="D3">D3</option>
            <option value="D4">D4</option>
            <option value="S1">S1</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="jam">jam Pekerjaan Apa Yang Sedang Anda Cari?</label>
        <input type="hidden" name="idkriteria" value="">
        <select id="jam" name="jam" required>
            <option value="" disabled>Pilih</option>
            @if($data)
            <option value="Parttime" {{$data->jam == 'Parttime' ? 'selected' : ''}}>parttime </option>
            <option value="Fulltime" {{$data->jam == 'Fulltime' ? 'selected' : ''}}>fulltime </option>
            <option value="Frelance" {{$data->jam == 'Frelance' ? 'selected' : ''}}>frelance</option>
            @else
            <option value="Parttime">parttime </option>
            <option value="Fulltime">fulltime </option>
            <option value="Frelance">frelance</option>
            @endif

        </select>
    </div>

    <button type="submit" class="btn btn-primary btn-block" style="background-color: #FFB901;">Submit</button>
</form>
@endsection