<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>
    <h1>Data Produk</h1>

    @if(session(key: 'success'))
    <p style="color: green;">{{ session(key: 'success') }}</p>
    @endif

    <a href="/produk/create">Tambah Produk Baru</a>
    <br><br>



    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>kategori</th>
                <th>qty</th>
                <th>harga_beli</th>
                <th>harga_jual</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $produk)
            <tr>
                <td>{{ $produk->id }}</td>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->kategori }}</td>
                <td>{{ $produk->qty }}</td>
                <td>{{ $produk->harga_beli }}</td>
                <td>{{ $produk->harga_jual }}</td>
            </tr>
            @endforeach
            </tbody>

        </table>
</body>
</html>