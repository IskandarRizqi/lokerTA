<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    @media print {
        /* Gaya untuk mencetak gambar */
        .print-image {
            display: block;
        }

        /* Sembunyikan gambar di tampilan layar */
        .no-print-image {
            display: none;
        }
        @page {
                margin: 0cm 0cm;
            }
    }

    body {
            font-family: 'Cambria', sans-serif; /* Ganti 'Cambria' dengan font yang diinginkan */
            margin-top: 30pt;
            margin-left: 50pt;
            margin-right: 50pt;
            font-size: 12px;
            /* Sesuaikan dengan ukuran font yang diinginkan */
            /* ... tambahkan properti lain sesuai kebutuhan ... */
        }
</style>
<body>

    <div style="text-align: center;">
        <table style="display: inline-block;">
            <tr>
                <td>
              
                    <img  src="/gambarprofil? rf={{$informasipribadi->gambar}}" class="icon-for-print print-image" width="90" height="100" style="display: inline-block; vertical-align: middle;">
                </td>
            </tr>
            <tr>
                <td style="font-size: 16px; font-weight: bold;">{{$informasipribadi->nama}}</td>
            </tr>
            <tr>
                <td>{{$informasipribadi->email}} | {{$informasipribadi->no_hp}}  </td>
              
            </tr>
            <tr>
                <td>  {{$informasipribadi->kab}} , {{$informasipribadi->prov}} </td>
            </tr>
            
           
               
          
        </table>
    </div>
            <table style="margin-bottom: 20px;">
            <tr>
                <td >{{$informasipribadi->deskripsi}}</td>
                
            
            </tr>
            </table>
            

            
            <div>
                <div style="margin-bottom: 10px; font-size:14px;"><b>Riwayat Pekerjaan</b></div>
                <hr>

                @foreach ($pengalaman as $peng)
                <table style="margin-bottom: 3px; width: 100%;">
                    <tr>
                        <td style="float: left; ">
                            {{$loop->iteration}}. {{$peng->posisikerja}}  {{$peng->posisikerja}} | {{$peng->perusahaan}} | {{$peng->kota}} | {{$peng->negara}} 
                        </td>
                        <td style="float: right;"> <!-- Menggeser elemen ke kanan halaman -->
                           <strong> <td style="float: right; ">{{\Carbon\Carbon::parse($peng->tanggalmulai)->format('d-m-Y')}}  -  {{\Carbon\Carbon::parse($peng->tanggalselesai)->format('d-m-Y')}}</td> </strong>
                            {{-- {{$pengalaman->tanggalmulai}} - {{$pengalaman->tanggalselesai}} --}}
                        </td>
                    </tr>
                </table>

                <table style="margin-bottom: 20px">
                    <tr>
                        <td>{{$peng->deskripsi}}</td>
                    </tr>
                </table>
                @endforeach
                

                
                   
                
                </table>
            </div>
            
            <div>
                <div style="margin-bottom: 10px; font-size:14px;"><b>Pencapaian</b></div>
                <hr>
                
                <table  style="margin-bottom: 20px;">
                    <tr>
                        <td>{{$formal->deskripsi}}</td>
                    </tr>
      
                </table>
            </div>
            
            <div>
                <div style="margin-bottom: 10px; font-size:14px;"><b>Keahlian</b></div>
                <hr>
                <div>
                   @foreach ($skill as $s)
                    <table style=" margin-bottom: 3px;">
                      
                        <tr>
                           <td > {{$loop->iteration}}.{{$s->bidang}} | {{$s->bagian}} | {{$s->ahli}}</td> 
                            
                           
                        </tr>
                    </table>
                    <table style=" margin-bottom: 20px;">
                   
                        <tr>
                          
                            <td style="width: 50%;">{{$s->deskripsi}}</td>
                        </tr>
                    </table>
                    @endforeach
                </div>
                
            </div>
           
            <div>
                <div style="margin-bottom: 10px; font-size:14px;" ><b>Pendidikan Formal</b></div>
                <hr>

                <table style="margin-bottom: 20px; width: 100%;">
                    <tr>
                        <td style="float: left;">
                            {{$formal->tingkatansekolah}} | {{$formal->jurusan}} | {{$formal->namasekolah}} 
                        </td>
                        <td style="float: right;"> <!-- Menggeser elemen ke kanan halaman -->
                             <td style="float: right;">{{\Carbon\Carbon::parse($formal->tanggalmulai)->format('d-m-Y')}}  -  {{\Carbon\Carbon::parse($formal->tanggalselesai)->format('d-m-Y')}}</td> 
                            {{-- {{$formal->tanggalmulai}} - {{$formal->tanggalselesai}} --}}
                        </td>
                    </tr>
                </table>
               

            </div>
            
            <div>
                <div style="margin-bottom: 10px; font-size:14px;"><b>Pendidikan Non Formal</b></div>
                <hr>

                @foreach ($nonformal as $non)

                <table style="margin-bottom: 20px; width: 100%;">
                    <tr>
                        <td style="float: left;">
                            {{$non->namakursus}} |  {{$non->institusi}} 
                        </td>
                        <td style="float: right; "> <!-- Menggeser elemen ke kanan halaman -->
                            <strong> <td style="float: right; ">{{\Carbon\Carbon::parse($non->tanggalmulai)->format('d-m-Y')}}  -  {{\Carbon\Carbon::parse($non->tanggalselesai)->format('d-m-Y')}}</td> </strong>
                            {{-- {{$nonformal->tanggalmulai}} - {{$nonformal->tanggalselesai}} --}}
                        </td>
                    </tr>
                </table>
                @endforeach
                
               
            </div>
            

            <div>
                <div style="margin-bottom: 10px; font-size:14px;"><b>Sosial Link</b></div>
                <hr>
                <div style="display: flex; flex-direction: row;">
                    <div style="flex: 1;">
                        <table>
                            <tr>
                                <td>
                                    <img src="images/facebook.png" class="icon-for-print" width="14" height="14"> <span >{{$sosiallink->facebook}}</span>
                                </td>
                            </tr>
            
                            <tr>
                                <td>
                                    <img src="images/instagram.png" class="icon-for-print" width="14" height="14"> <span >{{$sosiallink->instagram}}</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="flex: 1;">
                        <table>
                            <tr>
                                <td>
                                    <img src="images/tiktok.png" class="icon-for-print" width="14" height="14"> <span>{{$sosiallink->tiktok}}</span>
                                </td>
                            </tr>
            
                            <tr>
                                <td>
                                    <img src="images/linkedin.png" class="icon-for-print" width="14" height="14"> <span>{{$sosiallink->linkedin}}</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <hr>
        </div>
        <script>
            window.print();
        </script>
</body>
</html>