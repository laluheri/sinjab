<html>
<head>

    <style>
        td{
            font-size: 10px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        #jabatan{
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <center><h4>FORMULIER BEBAN KERJA UNTUK KEBUTUHAN PEGAWAI</h4></center>

   <div id="jabatan"> Nama Jabatan : {{ $jabatan->jabatan }}</div>
   
    <table style="width: 100%" border="1">
        <tr>
        <td align="center" width=5%>No</td>
            <td width='40%' align="center">Uraian Tugas</td>
            <td>Satuan Hasil</td>
            <td align="center">Waktu Penyelesaian (menit)</td>
            <td>Waktu Kerja Efektif</td>
            <td>Beban Kerja</td>
            <td>Pegawai Yang Dibutuhkan</td>
        </tr> 
    
        {{ $no = 1 }}
        @foreach ($jabatan->abk as $abk)
            <tr>
                @if ($abk->uraian_parent_id == null)
                    
                <td align="center">{{ $no }}</td>

                 {{  $no++ }}
                @else
                    
                <td align="center"></td>
                @endif
                
                <td align="">{{ $abk->uraian_tugas }}</td>
                <td align="center">{{ $abk->satuan_hasil }}</td>
                <td align="center">{{ $abk->waktu_penyelesaian }}</td>
                <td align="center">{{ $abk->waktu_pengerjaan }}</td>
                <td align="center">{{ $abk->beban_kerja }}</td>
                <td align="center">{{ $abk->jumlah }}</td>

            </tr>
        @endforeach

    </table>
</body>
</html>