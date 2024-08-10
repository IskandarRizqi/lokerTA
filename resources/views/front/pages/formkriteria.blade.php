<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kriteria Pekerjaan</title>



    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            /* Mengatur kontainer ke tengah horizontal */
            align-items: center;
            /* Mengatur kontainer ke tengah vertikal */
            min-height: 100vh;
            /* Memastikan kontainer selalu memenuhi tinggi viewport */
        }

        h2 {
            text-align: center;
        }

        .form-container {
            width: 400px;
            /* Atur lebar formulir */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #fbd113;
            color: rgb(0, 0, 0);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>



</head>

<body>
    <div class="form-container">
        <h2>Form Rekomendasi Pekerjaan</h2>

        <form action="{{route('kriteria.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="jk">Gender loker apa yang sedang anda cari?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="jk" name="jk" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                    <option value="Laki/Perempuan">Laki/Perempuan</option>
                    

                </select>
            </div>
            <div class="form-group">
                <label for="bidang">Bidang Apa Yang Sedang Anda Cari?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="bidang" name="bidang" required>
                    <option value="" disabled selected>Pilih</option> <!-- Placeholder -->
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
                   
                   
                   
                </select>
            </div>
            <div class="form-group">
                <label for="lokasi">Kota Mana Yang Sedang Anda Cari?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="lokasi" name="lokasi" required>
                    <option value="" disabled selected>Pilih</option> 
                     @foreach($kabupatens as $v)
                   
                    <option value="{{$v->nama}}"> {{$v->nama}}</option>
                    @endforeach
                    <!-- Placeholder -->
                   
                    <option value="KOTA PEKANBARU">KOTA PEKANBARU</option>
                    <option value="KOTA JAMBI">KOTA JAMBI</option>
                    <option value="KOTA PALEMBANG">KOTA PALEMBANG</option>
                    <option value="KOTA LUBUKLINGGAU">KOTA LUBUKLINGGAU</option>
                    <option value="KOTA BANDAR LAMPUNG">KOTA BANDAR LAMPUNG</option>
                    <option value="KABUPATEN LAMPUNG BARAT">KABUPATEN LAMPUNG BARAT</option>
                    <option value="KABUPATEN LAMPUNG TIMUR PEKANBARU">KABUPATEN LAMPUNG TIMUR PEKANBARU</option>
                    <option value="KABUPATEN LAMPUNG TENGAH">KABUPATEN LAMPUNG TENGAH</option>
                    <option value="KABUPATEN LAMPUNG SELATAN">KABUPATEN LAMPUNG SELATAN</option>
                    <option value="KOTA METRO">KOTA METRO</option>
                    <option value="KABUPATEN BANGKA">KABUPATEN BANGKA</option>
                    <option value="KABUPATEN BELITUNG">KABUPATEN BELITUNG</option>
                    <option value="KOTA PANGKAL PINANG">KOTA PANGKAL PINANG</option>
                    <option value="KABUPATEN KARIMUN">KABUPATEN KARIMUN</option>
                    <option value="KABUPATEN LINGGA">KABUPATEN LINGGA</option>
                    <option value="KABUPATEN NATUNA">KABUPATEN NATUNA</option>
                    <option value="KOTA BATAM">KOTA BATAM</option>
                    <option value="KOTA TANJUNG PINANG">KOTA TANJUNG PINANG</option>
                    <option value="KOTA JAKARTA SELATAN">KOTA JAKARTA SELATAN</option>
                    <option value="KOTA JAKARTA TIMUR">KOTA JAKARTA TIMUR</option>
                    <option value="KOTA JAKARTA BARAT">KOTA JAKARTA BARAT</option>
                    <option value="KOTA JAKARTA PUSAT">KOTA JAKARTA PUSAT</option>
                    <option value="KOTA JAKARTA UTARA">KOTA JAKARTA UTARA</option>
                    <option value="KABUPATEN KEPULAUAN SERIBU">KABUPATEN KEPULAUAN SERIBU</option>
                    <option value="KABUPATEN BOGOR">KABUPATEN BOGOR</option>
                    <option value="KABUPATEN SUKABUMI">KABUPATEN SUKABUMI</option>
                    <option value="KABUPATEN CIANJUR">KABUPATEN CIANJUR</option>
                    <option value="KABUPATEN BANDUNG">KABUPATEN BANDUNG</option>
                    <option value="KABUPATEN GARUT">KABUPATEN GARUT</option>
                    <option value="KABUPATEN TASIKMALAYA">KABUPATEN TASIKMALAYA</option>
                    <option value="KABUPATEN CIAMIS">KABUPATEN CIAMIS</option>
                    <option value="KABUPATEN KUNINGAN">KABUPATEN KUNINGAN</option>
                    <option value="KABUPATEN CIREBON">KABUPATEN CIREBON</option>
                    <option value="KABUPATEN MAJALENGKA">KABUPATEN MAJALENGKA</option>
                    <option value="KABUPATEN SUMEDANG">KABUPATEN SUMEDANG</option>
                    <option value="KABUPATEN INDRAMAYU">KABUPATEN INDRAMAYU</option>
                    <option value="KABUPATEN SUBANG">KABUPATEN SUBANG</option>
                    <option value="KABUPATEN PURWAKARTA">KABUPATEN PURWAKARTA</option>
                    <option value="KABUPATEN KARAWANG">KABUPATEN KARAWANG</option>
                    <option value="KABUPATEN BEKASI">KABUPATEN BEKASI</option>
                    <option value="KABUPATEN PANGANDARAN">KABUPATEN PANGANDARAN</option>
                    <option value="KOTA BOGOR">KOTA BOGOR</option>
                    <option value="KOTA SUKABUMI">KOTA SUKABUMI</option>
                    <option value="KOTA BANDUNG">KOTA BANDUNG</option>
                    <option value="KOTA CIREBON">KOTA CIREBON</option>
                    <option value="KOTA BEKASI">KOTA BEKASI</option>
                    <option value="KOTA DEPOK">KOTA DEPOK</option>
                    <option value="KOTA CIMAHI">KOTA CIMAHI</option>
                    <option value="KOTA TASIKMALAYA">KOTA TASIKMALAYA</option>
                    <option value="KOTA BANJAR">KOTA BANJAR</option>
                    <option value="KOTA MAGELANG">KOTA MAGELANG</option>
                    <option value="KOTA TEGAL">KOTA TEGAL</option>
                    <option value="KOTA PEKALONGAN">KOTA PEKALONGAN</option>
                    <option value="KOTA SURAKARTA">KOTA SURAKARTA</option>
                    <option value="KOTA SALATIGA">KOTA SALATIGA</option>
                    <option value="KOTA SEMARANG">KOTA SEMARANG</option>
                    <option value="KABUPATEN CILACAP">KABUPATEN CILACAP</option>
                    <option value="KABUPATEN BANYUMAS">KABUPATEN BANYUMAS</option>
                    <option value="KABUPATEN PURBALINGGA">KABUPATEN PURBALINGGA</option>
                    <option value="KABUPATEN BANJARNEGARA">KABUPATEN BANJARNEGARA</option>
                    <option value="KABUPATEN KEBUMEN">KABUPATEN KEBUMEN</option>
                    <option value="KABUPATEN PURWOREJO">KABUPATEN PURWOREJO</option>
                    <option value="KABUPATEN WONOSOBO">KABUPATEN WONOSOBO</option>
                    <option value="KABUPATEN MAGELANG">KABUPATEN MAGELANG</option>
                    <option value="KABUPATEN BOYOLALI">KABUPATEN BOYOLALI</option>
                    <option value="KABUPATEN KLATEN">KABUPATEN KLATEN</option>
                    <option value="KABUPATEN SUKOHARJO">KABUPATEN SUKOHARJO</option>
                    <option value="KABUPATEN WONOGIRI">KABUPATEN WONOGIRI</option>
                    <option value="KABUPATEN KARANGANYAR">KABUPATEN KARANGANYAR</option>
                    <option value="KABUPATEN SRAGEN">KABUPATEN SRAGEN</option>
                    <option value="KABUPATEN GROBOGAN">KABUPATEN GROBOGAN</option>
                    <option value="KABUPATEN BLORA">KABUPATEN BLORA</option>
                    <option value="KABUPATEN REMBANG">KABUPATEN REMBANG</option>
                    <option value="KABUPATEN PATI">KABUPATEN PATI</option>
                    <option value="KABUPATEN KUDUS">KABUPATEN KUDUS</option>
                    <option value="KABUPATEN JEPARA">KABUPATEN JEPARA</option>
                    <option value="KABUPATEN DEMAK">KABUPATEN DEMAK</option>
                    <option value="KABUPATEN SEMARANG">KABUPATEN SEMARANG</option>
                    <option value="KABUPATEN TEMANGGUNG">KABUPATEN TEMANGGUNG</option>
                    <option value="KABUPATEN KENDAL">KABUPATEN KENDAL</option>
                    <option value="KABUPATEN BATANG">KABUPATEN BATANG</option>
                    <option value="KABUPATEN PEKALONGAN">KABUPATEN PEKALONGAN</option>
                    <option value="KABUPATEN PEMALANG">KABUPATEN PEMALANG</option>
                    <option value="KABUPATEN TEGAL">KABUPATEN TEGAL</option>
                    <option value="KABUPATEN BREBES">KABUPATEN BREBES</option>
                    <option value="KABUPATEN KULON PROGO">KABUPATEN KULON PROGO</option>
                    <option value="KABUPATEN BANTUL">KABUPATEN BANTUL</option>
                    <option value="KABUPATEN GUNUNG KIDUL">KABUPATEN GUNUNG KIDUL</option>
                    <option value="KABUPATEN SLEMAN">KABUPATEN SLEMAN</option>
                    <option value="KOTA YOGYAKARTA">KOTA YOGYAKARTA</option>
                    <option value="KABUPATEN PACITAN">KABUPATEN PACITAN</option>
                    <option value="KABUPATEN PONOROGO">KABUPATEN PONOROGO</option>
                    <option value="KABUPATEN TRENGGALEK">KABUPATEN TRENGGALEK</option>
                    <option value="KABUPATEN TULUNGAGUNG">KABUPATEN TULUNGAGUNG</option>
                    <option value="KABUPATEN BLITAR">KABUPATEN BLITAR</option>
                    <option value="KABUPATEN KEDIRI">KABUPATEN KEDIRI</option>
                    <option value="KABUPATEN MALANG">KABUPATEN MALANG</option>
                    <option value="KABUPATEN LUMAJANG">KABUPATEN LUMAJANG</option>
                    <option value="KABUPATEN JEMBER">KABUPATEN JEMBER</option>
                    <option value="KABUPATEN BANYUWANGI">KABUPATEN BANYUWANGI</option>
                    <option value="KABUPATEN BONDOWOSO">KABUPATEN BONDOWOSO</option>
                    <option value="KABUPATEN SITUBONDO">KABUPATEN SITUBONDO</option>
                    <option value="KABUPATEN PROBOLINGGO">KABUPATEN PROBOLINGGO</option>
                    <option value="KABUPATEN PASURUAN">KABUPATEN PASURUAN</option>
                    <option value="KABUPATEN SIDOARJO">KABUPATEN SIDOARJO</option>
                    <option value="KABUPATEN MOJOKERTO">KABUPATEN MOJOKERTO</option>
                    <option value="KABUPATEN JOMBANG">KABUPATEN JOMBANG</option>
                    <option value="KABUPATEN NGANJUK">KABUPATEN NGANJUK</option>
                    <option value="KABUPATEN MADIUN">KABUPATEN MADIUN</option>
                  
                  

                   
                   
                   
                   
                    {{-- <option value="Balikpapan">Balikpapan</option>
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
                    <option value="Yogyakarta">Yogyakarta</option> --}}
                   
             
                </select>
            </div>
            <div class="form-group">
                <label for="pendidikan">Lulusan Apa Yang Sedang Anda Cari?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="pendidikan" name="pendidikan" required>
                    <option value="">Pilih pendidikan</option>
                    <option value="SLTA">SMA/SMK</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jam">jam Pekerjaan Apa Yang Sedang Anda Cari?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="jam" name="jam" required>
                    <option value="" disabled selected>Pilih</option> <!-- Placeholder -->
                    <option value="Fulltime">Fulltime </option>
                    <option value="Parttime">Parttime </option>
                    <option value="Frelance">Frelance</option>
                    
                   

                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>