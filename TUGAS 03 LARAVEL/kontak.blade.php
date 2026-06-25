<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #fafafa;
        }
        .kontak-card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px 30px;
            border-radius: 8px;
            max-width: 350px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .kontak-card h2 {
            margin-top: 0;
            color: #333;
            border-bottom: 2px solid #ffaa00;
            padding-bottom: 10px;
        }
        .kontak-item {
            margin: 15px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="kontak-card">
        <h2>Hubungi Kami</h2>
        <div class="kontak-item">
            <strong>Email:</strong> <br> 
            <a href="mailto:{{ $email }}">{{ $email }}</a>
        </div>
        <div class="kontak-item">
            <strong>Nomor HP:</strong> <br> 
            {{ $nomor_hp }}
        </div>
    </div>

</body>
</html>