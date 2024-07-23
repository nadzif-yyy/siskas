<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div class="container-fluid pt-3 pb-5">
        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Asrama</th>
                <th scope="col">Nama Anak</th>
                <th scope="col">Sekolah</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jenjang Sekolah</th>
                <th scope="col">Kelas</th>
                <th scope="col">Status Anak</th>
                <th scope="col">Kriteria</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
            @foreach ($data as $row)
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row['asrama'] }}</td>
                <td>{{ $row['nama'] }}</td>
                <td>{{ $row['sekolah'] }}</td>
                <td>{{ $row['gender'] }}</td>
                <td>{{ $row['jenjang_sklh'] }}</td>
                <td>{{ $row['kelas'] }}</td>
                <td>{{ $row['status'] }}</td>
                <td>{{ $row['kriteria'] }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>