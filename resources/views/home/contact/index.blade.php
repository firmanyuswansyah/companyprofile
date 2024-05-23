<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .wrapper-hero {
            position: relative;
            width: 100%;
        }

        .img-hero {
            width: 100%;
        }

        .contact-info {
            background-color: yellow;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="wrapper-hero">
    <img src="/img/stmikbdg-bg1.jpg" class="img-hero" alt="">
    <div class="text-hero">
        <h4><b>Contact</b></h4>
    </div>
</div>

<div class="container-fluid">
    <div class="text-center my-5">
        <h2>Kontak kami</h2>
        <p>Berikan Saran dan Masukan Untuk Kami</p>
    </div>
    <!-- Menampilkan pesan jika berhasil terkirim -->
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body" style="background-color: #abf056">
                    <form action="/contact/send" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama anda">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="desc">Isi Pesan</label>
                            <textarea name="desc" id="desc" cols="30" rows="10" class="form-control @error('desc') is-invalid @enderror" placeholder="Masukkan pesan anda"></textarea>
                            @error('desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success mt-3">Kirim</button>
                    </form>
                </div>
            </div>

        </div>
        
        <div class="col-md-6 contact-info">
            <div class="d-flex align-items-center mt-3">
                <i class="fas fa-phone fa-2x px-3"></i>
                <h3 class="mb-0">No Telepon: <b>0811-2342-113</b></h3>
            </div>

            <div class="d-flex align-items-center mt-3">
                <i class="fas fa-envelope fa-2x px-3"></i>
                <h3 class="mb-0">Email: <b>marketing@stmik-bandung.ac.id</b></h3>
            </div>

            <div class="d-flex align-items-center mt-3">
                <i class="fas fa-map-marker fa-2x px-3"></i>
                <h3 class="mb-0">Alamat: <b>Jalan Cikutra No. 113</b></h3>
            </div>
        </div>
    </div>
</div>

</body>
</html>
