<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .biodata-card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <div class="biodata-card">
        <h2>Biodata Profil</h2>
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>Kelas:</strong> {{ $kelas }}</p>
    </div>

</body>
</html>