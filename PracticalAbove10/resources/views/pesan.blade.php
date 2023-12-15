<!-- resources/views/pesan.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Pemesanan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body>
    <h1>Form Pendataan</h1>
    <form method="post" action="{{ route('submit-data')
}}">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="NIK">NIK:</label>
        <input type="text" id="NIK" name="NIK" required><br>

        <label for="Provinsi">Provinsi:</label>
        <input type="text" id="Provinsi" name="Provinsi" required><br>
        <label for="Kota">Kota:</label>
        <input type="text" id="Kota" name="Kota" required><br>
        <label for="noTelp  ">noTelp:</label>
        <input type="text" id="noTelp" name="noTelp" required><br>
        

        <button type="submit">Submit Pesanan</button>
    </form>
</body>

</html>