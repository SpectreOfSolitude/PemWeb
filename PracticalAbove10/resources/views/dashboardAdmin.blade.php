<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Selamat Datang</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body>
    <h1>Selamat Datang!</h1>
    <p>Nama: {{ $data['name'] }}</p>
    <p>NIK: {{ $data['NIK'] }}</p>
    <p>Provinsi: {{ $data['Provinsi']}}</p>
    <p>Kota: {{ $data['Kota']}}</p>
    <p>noTelp: {{ $data['noTelp']}}</p>
    
</body>

</html>