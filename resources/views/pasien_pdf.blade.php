<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
    margin-right:10px;
  padding: 5px;
}
     .footer {
   position: absolute;
   left: 0;
   bottom: 0;
   width: 100%;
   color: black;
   text-align: right;
}
  </style>
</head>
<body> 
<h2>Laporan Data Pasien {{$date}}</h1>
 
	<table class='table table-bordered'>
		<thead>
        @php 
                                            $i=1;
                                            @endphp
                                            <tr>
                                                <td>No</td>
                                                <th>No Register</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Kepala Keluarga</th>
                                                <th>Nik</th>
                                                <th>Alamat</th>
                                                <th>No Telp/HP</th>
                                                <th>Diagnosa</th>
                                                <th>Therapy</th>
                                                <th>Tanggal berobat</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pasien as $q)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$q->no_register}}</td>
                                                <td>{{$q->nama}}</td>
                                                <td>{{$q->tanggal_lahir}}</td>
                                                <td>{{$q->kepala_keluarga}}</td>
                                                <td>{{$q->nik}}</td>
                                                <td>{{$q->alamat}}</td>
                                                <td>{{$q->notelp}}</td>
                                                <td>{{$q->diagnosa}}</td>
                                                <td>{{$q->therapy}}</td>
                                                <td>{{$q->created_at}}</td>
                                                
                                                    @endforeach
		</tbody>
	</table>
    <div class="footer">
<p>Jl. Raya Bekasi Timur Regensi <br>
Komplek Bekasi Timur <br>Regensi Blok N2 No.8
Desa <br>Burangkeng Kecamatan Setu
 <br>  
 Kabupaten Bekasi Provinsi Jawa Barat

</p>

</div>
</body>
</html>