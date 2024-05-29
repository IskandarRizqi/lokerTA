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
                    <option value="laki-laki"> Laki-laki</option>
                    <option value="perempuan">Perempuan</option>

                </select>
            </div>
            <div class="form-group">
                <label for="bidang">Bidang Apa Yang Sedang Anda Cari?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="bidang" name="bidang" required>
                    <option value="" disabled selected>Pilih</option> <!-- Placeholder -->
                    <option value="Marketing"> Marketing</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Sarjana">Sarjana</option>
                    <option value="Pascasarjana">Pascasarjana</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lokasi">Kota Mana Yang Sedang Anda Cari?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="lokasi" name="lokasi" required>
                    <option value="" disabled selected>Pilih</option> <!-- Placeholder -->
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Sarjana">Sarjana</option>
                    <option value="Pascasarjana">Pascasarjana</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pendidikan">Lulusan Apa Yang Sedang Anda Cari?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="pendidikan" name="pendidikan" required>
                    <option value="" disabled selected>Pilih</option> <!-- Placeholder -->
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="Diploma">D3</option>
                    <option value="Diploma">D4/S1</option>
                    <option value="Pascasarjana">Pascasarjana</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jam">jam Pekerjaan Apa Yang Sedang Anda Cari?</label>
                <input type="hidden" name="idkriteria" value="">
                <select id="jam" name="jam" required>
                    <option value="" disabled selected>Pilih</option> <!-- Placeholder -->
                    <option value="Fulltime">Fulltime</option>
                    <option value="Parttime">Parttime</option>

                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>