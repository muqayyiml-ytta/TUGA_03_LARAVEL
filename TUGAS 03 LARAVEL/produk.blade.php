<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 40px;
            background-color: #f4f7f6;
        }
        .produk-card {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            padding: 25px;
            border-radius: 10px;
            max-width: 350px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        .produk-card h2 {
            margin-top: 0;
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .harga {
            font-size: 1.2em;
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="produk-card">
        <h2>Informasi Produk</h2>
        <p><strong>Nama Produk:</strong> <br> {{ $nama_produk }}</p>
        <p><strong>Harga:</strong> <br> <span class="harga">{{ $harga }}</span></p>
    </div>

</body>
</html>