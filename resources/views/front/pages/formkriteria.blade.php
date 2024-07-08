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
                <label for="jk">Apa jenis kelamin anda?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="jk" name="jk" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                    

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
                     {{-- @foreach($kabupatens as $v)
                
                    <option value="{{$v->id}}"> {{$v->nama}}</option>
                    @endforeach --}}
                    <option value="" disabled selected>Pilih</option> <!-- Placeholder -->
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