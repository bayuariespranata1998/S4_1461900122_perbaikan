<!DOCTYPE html>
<html>
<head>
    <title> Tugas Ke 4 </title>
</head>
<body>
    <center>
        <h4>TUGAS KE 4</h4>
    <button type="button" > Import </button>
    <table>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
        </tr>
    @foreach($data as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$loop->nama}}</td>
            <td>{{$loop->jabatan}}</td>
        
        </tr>
    @endforeach
    </table>

    <h5> Import Data Dokter </h5>

    <form method="POST" action="{{route('dokter.import')}}">
    @csrf
    <input type="file" id="file">
    <button type="submit"> Simpan </button>
    
    </form>
    </center>
</body>

</html>