<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Surat Persetujuan Pemberian dan Penggunaan Fasilitas Pembiayaan</title> --}}
    <style>
        @media print {
            /* Gaya untuk mencetak gambar */
            /* .print-image {
         display: block;
     } */

            /* Sembunyikan gambar di tampilan layar */
            .no-print-image {
                display: none;
            }

            @page {
                margin-top: 30px;
                margin-bottom: 30px;
            }
        }

        body {
            /* font-family: Arial, sans-serif; */
            /* line-height: 1.6; */
        }

        h3 {
            text-align: center;
        }

        h4 {
            text-align: center;

        }

        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
            /* border: 1px solid #ccc; */
            border-radius: 5px;
            font-family: Calibri, sans-serif;


        }

        .address {
            text-align: justify;

        }

        .content {
            text-align: justify;

        }

        .signature {
            text-align: center;
            margin-top: 50px;
        }

        .company-address {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>

                <td style="width: 50%; text-align: right;">{{$kota_perusahaan}} , {{$tanggal_lamar->format('d-m-Y')}}
                </td>

            </tr>

        </table>
        <br>
        <br>
        <br>

        <div class="address" style="margin-bottom: 13px">
            Perihal : Lamaran Pekerjaan <br> <br>

            Kepada Yth.<br>

            Yth. Direksi {{$perusahaan}} <br>

            Di Tempat

        </div>


        <br>
        <div class="content">

            Dengan hormat, <br> <br>
            Sehubungan dengan informasi lowongan kerja yang ada di situs LokerNews, saya mengetahui bahwa
            {{$perusahaan}} sedang mencari posisi {{$kategori_perusahaan}}. Untuk itu, saya yang bertanda tangan di
            bawah ini: <br> <br>


            <table style="margin-top: 10px;">

                <tr>

                    <td width="220">Nama </td>
                    <td width="0">:</td>
                    <td width="0">{{$informasipribadi->nama}}</td>

                </tr>
                <tr>

                    <td width="220">Jenis Kelamin</td>
                    <td width="0">:</td>
                    <td width="0" style="text-transform: capitalize">{{$user->jk}}</td>

                </tr>
                <tr>


                    <td width="220">Tempat/Tanggal Lahir</td>
                    <td width="0">:</td>
                    <td width="0">{{$informasipribadi->kab}} / {{$informasipribadi->tanggal}}</td>

                </tr>

                <tr>

                    <td width="220">Alamat</td>
                    <td width="0">:</td>
                    <td width="0">RT {{$informasipribadi->rt}} / RW {{$informasipribadi->rw}},
                        {{$informasipribadi->kel}}, {{$informasipribadi->kec}}, {{$informasipribadi->kab}},
                        {{$informasipribadi->prov}}</td>

                </tr>


            </table>

            <br>
            Dengan ini bermaksud untuk melamar posisi {{$kategori_perusahaan}} di {{$perusahaan}}. Sebagai bahan
            pertimbangan,
            saya sertakan beberapa dokumen berikut: <br>

            <table>
                <ul>
                    <li>Pas Foto</li>
                    <li>Daftar Riwayat Hidup</li>
                    <li>Ijazah</li>
                    <li>SKCK</li>
                    <li>Sertifkat</li>
                </ul>
            </table>

            Demikian surat lamaran kerja ini, saya ucapkan terima kasih atas perhatian Bapak/Ibu HRD. <br> <br> <br>


            <p style="width: 100%; text-align: right;">Hormat Saya</p><br> <br> <br> <br>
            <p style="width: 100%; text-align: right;"> {{$informasipribadi->nama}} </p>


        </div>
        <script>
            window.print();
        </script>

</body>

</html>