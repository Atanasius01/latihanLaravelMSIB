<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
</head>
<body>
    <h3 align="center">Data Pegawai</h3>
    <table border="1" cellpadding="10" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatn</th>
                <th>Divisi</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kekayaan</th>
                <th>Alamat</th>
               
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($pegawai as $p)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$p->nip}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->divisi->nama}}</td>
                <td>{{$p->jabatan->nama}}</td>
                <td>{{$p->gender}}</td>
                <td>{{$p->tmp_lahir}}</td>
                <td>{{$p->tgl_lahir}}</td>
                <td>{{$p->kekayaan}}</td>
                <td>{{$p->alamat}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>