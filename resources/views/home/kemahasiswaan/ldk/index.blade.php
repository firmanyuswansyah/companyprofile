<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Index</title> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            margin: 0 auto;
            display: flex;
            align-items: center; /* Menyusun item secara vertikal di tengah */
        }

        .container img {
            width: 50%; /* Perbesar gambar */
            max-width: 300px; /* Batasi lebar maksimum */
            margin-right: 20px; /* Jarak antara gambar dan teks */
        }

        header {
            position: relative;
            padding: 10px 0;
            text-align: center;
            color: #fff; /* Warna teks yang kontras dengan latar belakang */
        }

        .header-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/img/stmikbdg-bg1.jpg');
            background-size: cover;
            background-position: center;
            filter: brightness(0.5); /* Membuat gambar lebih gelap agar teks lebih terbaca */
            z-index: -1; /* Menempatkan latar belakang di bawah teks */
        }

        h1 {
            position: relative; /* Mengembalikan posisi teks ke posisi normal */
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-background"></div>
        <h1>{!! $ldk->name !!}</h1>
    </header>
    
    <div class="container">
        <img src="{{ $ldk->cover }}" alt="Cover Image">
        <p>{!! $ldk->desc !!}</p>
    </div>
    
    <footer>
        &copy; 2024 Stmik Bandung
    </footer>
</body>
</html>
