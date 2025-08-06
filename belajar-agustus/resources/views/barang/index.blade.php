<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
</head>
<body>
    <h1>List Data Barang</h1>
    <p>Ini adalah data barang</p>

    <table style="width: 80%">
        <thead>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->nama_barang}}</td>
                <td>{{$item->stok}}</td>
                <td>IDR{{$item->harga}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>