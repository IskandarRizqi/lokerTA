@extends('front.profile.index')
@section('content-user')
<form action="/update-kriteria" method="POST">
    @csrf
    <div class="form-group">
        <label for="jk">Gender loker apa yang sedang anda cari?</label>
        <select id="jk" name="jk" required>
            <option value="" disabled>Pilih</option>
            @if($data)
            <option value="laki-laki" {{$data->jk == 'laki-laki' ? 'selected' : ''}}>Laki-laki</option>
            <option value="perempuan" {{$data->jk == 'perempuan' ? 'selected' : ''}}>Perempuan</option>
            <option value="lp" {{$data->jk == 'lp' ? 'selected' : ''}}>Male & Female</option>
            @else
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
            <option value="All">Laki/Perempuan</option>
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
            <option value="Akuntansi" {{$data->bidang == 'Akuntansi' ? 'selected' : ''}}>Akuntansi </option>
            <option value="Arsitektur" {{$data->bidang == 'Arsitektur' ? 'selected' : ''}}>Arsitektur</option>
            <option value="Customer Service" {{$data->bidang == 'Customer Service' ? 'selected' : ''}}>Customer Service </option>
            <option value="Developer" {{$data->bidang == 'Developer' ? 'selected' : ''}}>Developer</option>
            <option value="Desain Grafis" {{$data->bidang == 'Desain Grafis' ? 'selected' : ''}}>Desain Grafis</option>
            <option value="Elektro" {{$data->bidang == 'Elektro' ? 'selected' : ''}}>Elektro</option>
            <option value="Frontend" {{$data->bidang == 'Frontend' ? 'selected' : ''}}>Frontend</option>
            <option value="Farmasi" {{$data->bidang == 'Farmasi' ? 'selected' : ''}}>Farmasi</option>
            <option value="Hukum" {{$data->bidang == 'Hukum' ? 'selected' : ''}}>Hukum </option>
            <option value="IT" {{$data->bidang == 'IT' ? 'selected' : ''}}>IT </option>
            <option value="Jurnalistik" {{$data->bidang == 'Jurnalistik' ? 'selected' : ''}}>Jurnalistik</option>
            <option value="Kesehatan" {{$data->bidang == 'Kesehatan' ? 'selected' : ''}}>Kesehatan </option>
            <option value="Manajemen" {{$data->bidang == 'Manajemen' ? 'selected' : ''}}>Manajemen</option>
            <option value="Marketing" {{$data->bidang == 'Marketing' ? 'selected' : ''}}>Marketing</option>
            <option value="Perbankan" {{$data->bidang == 'Perbankan' ? 'selected' : ''}}>Perbankan</option>
            <option value="Perawat" {{$data->bidang == 'Perawat' ? 'selected' : ''}}>Perawat</option>
            <option value="Operator Produksi" {{$data->bidang == 'Operator Produksi' ? 'selected' : ''}}>Operator Produksi</option>
            <option value="Mesin" {{$data->bidang == 'Mesin' ? 'selected' : ''}}>Mesin</option>
            <option value="Komputer" {{$data->bidang == 'Komputer' ? 'selected' : ''}}>Komputer</option>
            <option value="QC" {{$data->bidang == 'QC' ? 'selected' : ''}}>QC</option>
            @else
            <option value="Administrasi ">Administrasi </option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Developer">Developer</option>
                    <option value="Desain Grafis">Desain Grafis</option>
                    <option value="Elektro ">Elektro </option>
                    <option value="Frontend">Frontend</option>
                    <option value="Farmasi">Farmasi</option>
                    <option value="Hukum ">Hukum </option>
                    <option value="IT ">IT</option>
                    <option value="Jurnalistik ">Jurnalistik</option>
                    <option value="Kesehatan ">Kesehatan </option>
                    <option value="Manajemen ">Manajemen </option>
                    <option value="Marketing">Marketing</option>
                    <option value="Multimedia ">Multimedia </option>
                    <option value="Perbankan ">Perbankan </option>
                    <option value="Perawat ">Perawat </option>
                    <option value="Operator produksi">Operator Produksi</option>
                    <option value="Mesin ">Mesin </option>
                    <option value="Komputer ">Komputer </option>
                    <option value="QC">QC</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="lokasi">Kota Mana Yang Sedang Anda Cari?</label>
        <input type="hidden" name="idkriteria" value="">
        <select id="lokasi" name="lokasi" required>
            <option value="" disabled>Pilih</option>
            @if($data)
            <option value="Balikpapan" {{$data->lokasi == 'Balikpapan' ? 'selected' : ''}}>Balikpapan</option>
            <option value="Bandung" {{$data->lokasi == 'Bandung' ? 'selected' : ''}}>Bandung</option>
            <option value="Batam" {{$data->lokasi == 'Batam' ? 'selected' : ''}}>Batam</option>
            <option value="Banyumas" {{$data->lokasi == 'Banyumas' ? 'selected' : ''}}>Banyumas</option>
            <option value="Bekasi" {{$data->lokasi == 'Bekasi' ? 'selected' : ''}}>Bekasi</option>
            <option value="Brebes" {{$data->lokasi == 'Brebes' ? 'selected' : ''}}>Brebes</option>
            <option value="Bogor" {{$data->lokasi == 'Bogor' ? 'selected' : ''}}>Bogor</option>
            <option value="Bogor" {{$data->lokasi == 'Bogor' ? 'selected' : ''}}>Bogor</option>
            <option value="Blora" {{$data->lokasi == 'Blora' ? 'selected' : ''}}>Blora</option>
            <option value="Cilacap" {{$data->lokasi == 'Cilacap' ? 'selected' : ''}}>Cilacap</option>
            <option value="Cilacap" {{$data->lokasi == 'Cilacap' ? 'selected' : ''}}>Cilacap</option>
            <option value="Cilegon" {{$data->lokasi == 'Cilegon' ? 'selected' : ''}}>Cilegon</option>
            <option value="Cirebon" {{$data->lokasi == 'Cirebon' ? 'selected' : ''}}>Cirebon</option>
            <option value="Cikarang" {{$data->lokasi == 'Cikarang' ? 'selected' : ''}}>Cikarang</option>
            <option value="Depok" {{$data->lokasi == 'Depok' ? 'selected' : ''}}>Depok</option>
            <option value="Jakarta" {{$data->lokasi == 'Jakarta' ? 'selected' : ''}}>Jakarta</option>
            <option value="Jambi" {{$data->lokasi == 'Jambi' ? 'selected' : ''}}>Jambi</option>
            <option value="Karawang" {{$data->lokasi == 'Karawang' ? 'selected' : ''}}>Karawang</option>
            <option value="Kendal" {{$data->lokasi == 'Kendal' ? 'selected' : ''}}>Kendal</option>
            <option value="Kalimantan" {{$data->lokasi == 'Kalimantan' ? 'selected' : ''}}>Kalimantan</option>
            <option value="Madiun" {{$data->lokasi == 'Madiun' ? 'selected' : ''}}>Madiun</option>
            <option value="Malang" {{$data->lokasi == 'Malang' ? 'selected' : ''}}>Malang</option>
            <option value="Magelang" {{$data->lokasi == 'Magelang' ? 'selected' : ''}}>Magelang</option>
            <option value="Palembang" {{$data->lokasi == 'Palembang' ? 'selected' : ''}}>Palembang</option>
            <option value="Pekalongan" {{$data->lokasi == 'Pekalongan' ? 'selected' : ''}}>Pekalongan</option>
            <option value="Pemalang" {{$data->lokasi == 'Pemalang' ? 'selected' : ''}}>Pemalang</option>
            <option value="Purwokerto" {{$data->lokasi == 'Purwokerto' ? 'selected' : ''}}>Purwokerto</option>
            <option value="Tanggerang" {{$data->lokasi == 'Tanggerang' ? 'selected' : ''}}>Tanggerang</option>
            <option value="Solo" {{$data->lokasi == 'Solo' ? 'selected' : ''}}>Solo</option>
            <option value="Semarang" {{$data->lokasi == 'Semarang' ? 'selected' : ''}}>Semarang</option>
            <option value="Surabaya" {{$data->lokasi == 'Surabaya' ? 'selected' : ''}}>Surabaya</option>
            <option value="Surakarta" {{$data->lokasi == 'Surakarta' ? 'selected' : ''}}>Surakarta</option>
            <option value="Tegal" {{$data->lokasi == 'Tegal' ? 'selected' : ''}}>Tegal</option>
            <option value="Yogyakarta" {{$data->lokasi == 'Yogyakarta' ? 'selected' : ''}}>Yogyakarta</option>
            @else
            <option value="Balikpapan">Balikpapan</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Batam">Batam</option>
                    <option value="Banyumas">Banyumas</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Brebes">Brebes</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Blora">Blora</option>
                    <option value="Cilacap">Cilacap</option>
                    <option value="Cilegon">Cilegon</option>
                    <option value="Cirebon">Cirebon</option>
                    <option value="Cikarang">Cikarang</option>
                    <option value="Depok">Depok</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Karawang">Karawang</option>
                    <option value="Kendal">Kendal</option>
                    <option value="Kalimantan">Kalimantan</option>
                    <option value="Madiun">Madiun</option>
                    <option value="Malang">Malang</option>
                    <option value="Magelang">Magelang</option>
                    <option value="Palembang">Palembang</option>
                    <option value="Pekalongan">Pekalongan</option>
                    <option value="Pemalang">Pemalang</option>
                    <option value="Purwokerto">Purwokerto</option>
                    <option value="Tanggerang">Tanggerang</option>
                    <option value="Solo">Solo</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Surakarta">Surakarta</option>
                    <option value="Tegal">Tegal</option>
                    <option value="Yogyakarta">Yogyakarta</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="pendidikan">Lulusan Apa Yang Sedang Anda Cari?</label>
        <input type="hidden" name="idkriteria" value="">
        <select id="pendidikan" name="pendidikan" required>
            <option value="">Pilih pendidikan</option>
            @if($data)
            <option value="SLTA" {{$data->pendidikan == 'SLTA' ? 'selected' : ''}}>SMA/SMK</option>
            <option value="D3" {{$data->pendidikan == 'D3' ? 'selected' : ''}}>D3</option>
            <option value="D4" {{$data->pendidikan == 'D4' ? 'selected' : ''}}>D4</option>
            <option value="S1" {{$data->pendidikan == 'S1' ? 'selected' : ''}}>S1</option>
            @else
            <option value="SLTA">SMA/SMK</option>
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
            <option value="Fulltime" {{$data->jam == 'Fulltime' ? 'selected' : ''}}>Fulltime </option>
            <option value="Parttime" {{$data->jam == 'Parttime' ? 'selected' : ''}}>Parttime </option>
            <option value="Frelance" {{$data->jam == 'Frelance' ? 'selected' : ''}}>Frelance</option>
            @else
            <option value="Fulltime">Fulltime </option>
                    <option value="Parttime">Parttime </option>
                    <option value="Frelance">Frelance</option>
            @endif

        </select>
    </div>

    <button type="submit" class="btn btn-primary btn-block" style="background-color: #FFB901;">Submit</button>
</form>
@endsection