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
        .leadership {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        }

        .position {
            width: calc(30% - 10px); /* Memberikan ruang kosong antar elemen */
            margin-bottom: 20px;
            padding: 10px; /* Memberikan ruang dalam untuk konten */
            border: 1px solid #ccc; /* Menambahkan border untuk memisahkan setiap posisi */
        }

        .position h2 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .position h3 {
            font-size: 1.2rem;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .position p {
            font-size: 1rem;
            margin: 0;
        }

        .position i {
            margin-right: 5px; /* Memberikan ruang antara ikon dan teks */
        }

        /* Warna latar belakang untuk setiap posisi */
        .guru-besar {
            background-color: #ffd700; /* Warna kuning untuk guru besar */
        }

        .ketua-bph {
            background-color: #87ceeb; /* Warna biru muda untuk ketua BPH */
        }

        .ketua-stmik {
            background-color: #90ee90; /* Warna hijau muda untuk ketua STMIK */
        }

        .wakil-ketua {
            background-color: #ffcccb; /* Warna merah muda untuk wakil ketua */
        }

    </style>
</head>
<body>
    <header>
        <div class="header-background"></div>
        <h1>Pimpinan</h1>
    </header>
    
    <div class="leadership">
        <div class="position guru-besar">
            <h2><i class="fas fa-chalkboard-teacher"></i> GURU BESAR</h2>
            <p>Prof. Dr. Ir. E. Koswara N, M.Sc.</p>
        </div>
        
        <div class="position guru-besar">
            <h2><i class="fas fa-chalkboard-teacher"></i> GURU BESAR</h2>
            <p>Prof. Dr. Suprijadi Haryono, M.Eng.</p>
        </div>
        
        <div class="position ketua-bph">
            <h2><i class="fas fa-user-tie"></i> KETUA BPH</h2>
            <p>Louis Frederick, SE., SH., MM</p>
        </div>
        
        <div class="position ketua-stmik">
            <h2><i class="fas fa-user-tie"></i> KETUA STMIK BANDUNG</h2>
            <p>Dr. Abdurrahman, M.T.</p>
        </div>
        
        <div class="position wakil-ketua">
            <h2><i class="fas fa-user-friends"></i> Wakil Ketua STMIK Bandung</h2>
            <h3>WAKIL KETUA I</h3>
            <p>Dani Pradana M.T</p>
        </div>
        
        <div class="position wakil-ketua">
            <h2><i class="fas fa-user-friends"></i> Wakil Ketua STMIK Bandung</h2>
            <h3>WAKIL KETUA II</h3>
            <p>Linda Apriyanti, S.Kom., M.T.</p>
        </div>
        
        <div class="position wakil-ketua">
            <h2><i class="fas fa-user-friends"></i> Wakil Ketua STMIK Bandung</h2>
            <h3>WAKIL KETUA III</h3>
            <p>Yus Jayusman, S.Kom., M.T.</p>
        </div>
    </div>
    <footer>
        &copy; 2024 Stmik Bandung
    </footer>
</body>
</html>
<style>