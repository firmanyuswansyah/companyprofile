<style>
  .wrapper-img-banner {
    max-width: 100%;
    max-height: 400px;
  }

  .img-banner {
    width: 100%;
  }

  /* Tambahkan gaya untuk latar belakang hijau */
  .bg-success {
    width: 100%;
  }
</style>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

    @foreach ($banner as $key => $item)
        
    <div class="carousel-item {{ $key == 0 ? 'active' : ''}}">
      <div class="wrapper-img-banner">
        <img src="/{{$item->gambar}}" class="img-banner" alt="">
      </div>

      <div class="container">
        <div class="carousel-caption text-start">
          <h1 style="color: blue;"><b>{{$item->headline}}</b></h1>
          <p style="color:rgb(0, 13, 255);">{{$item->desc}}</p>
        </div>
      </div>
    </div>

    @endforeach

  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mt-5">
  <div class="text-center">
    <h4 class=""><b>Tentang</b></h4>
    <p>Anda Ingin Tahu Tentang Kami? Kami akan beri tahu Anda tenang saja.</p>
  </div>

  <div class="row">
    <div class="col-md-6">
      <img src="/{{$ukm->cover}}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      {{$ukm->desc}}
    </div>
  </div>
</div>

<div class="bg-primary my-5">
  <div class="container py-5">
    <div class="text-white">
      <h5>Pelajari Tentang Kami</h5>
      <p>"Bersinergi dalam Menghasilkan SDM Unggul: Profil STMIK Bandung sebagai Pusat Inovasi Pendidikan Teknologi Terdepan"</p>
    </div>
  </div>
</div>

<div class="container my-4">

  <div class="row">

    {{-- @foreach ($service->shuffle()->take(4) as $item) --}}
    @foreach ($service as $item )
    <div class="col-md-3">
      <div class="text-center">
        <i class="{{$item->icon}} fa-2x"></i>
        <h5><b>{{$item->title}}</b></h5>
        <p>{{$item->desc}}</p>
      </div>
    </div>
    @endforeach

  </div>

  <div class="text-center mt-3">
    <a href="https://www.instagram.com/p/CLJCjwwn9Jd/?utm_source=ig_web_copy_link" class="btn btn-warning px-5 ">Selengkapnya <i class="fas fa-arrow-right"></i></a>
  </div>
</div>

<div class="bg-light my-5">
  <div class="container py-5">
    <div class="text-dark text-center">
      <h5>Pelajari Tentang Kami</h5>
      <p>Dengan kurikulum yang terus diperbarui sesuai dengan perkembangan teknologi, STMIK Bandung menawarkan berbagai program studi yang relevan dengan kebutuhan industri. Selain itu, STMIK Bandung juga aktif menjalin kerjasama dengan perusahaan-perusahaan IT terkemuka untuk memastikan mahasiswa mendapatkan pengalaman praktis yang berharga selama masa studi mereka.</p>
      <p>Di STMIK Bandung, kami memahami pentingnya pengalaman praktis dalam pembelajaran. Itu sebabnya, kami aktif menjalin kemitraan dengan perusahaan-perusahaan IT terkemuka untuk memberikan kesempatan kepada mahasiswa kami untuk terlibat dalam proyek nyata, magang, dan kegiatan kolaboratif lainnya.</p>
      <p>Jika Anda tertarik untuk mengetahui lebih lanjut tentang kami atau ingin menjelajahi peluang yang tersedia, silakan jelajahi situs web kami atau hubungi kami langsung. Kami berkomitmen untuk membantu Anda mencapai potensi penuh Anda di dunia teknologi informasi.</p>
    </div>
  </div>
</div>


<div class="container my-4">
  <div class="text-center">
    <h4 class=""><b>Informasi Lainnya Mengenai STMIK Bandung</b></h4>
    <p>Cek selengkapnya untuk melihat informasi.</p>
  </div>


  <div class="row mt-4">
    @foreach ($blog as $item)
    <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
            <div class="wrapper-card-blog">
                <img src="{{$item->cover}}" class="img-card-blog" alt="Blog Cover Image">
            </div>
            <div class="p-3">
                <a href="#" class="text-decoration-none"><h5>{{$item->title}}</h5></a>
                <p>{!! \Illuminate\Support\Str::words($item->body, 100) !!}</p> <!-- Limit body text to 100 words -->
                <a href="https://www.instagram.com/stmikbandung/" class="btn btn-primary">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    @endforeach

    <div class="text-center mt-3">
        <a href="https://www.instagram.com/stmikbandung/" class="btn btn-warning px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

</div>

<div class="container my-4 mb-5">
  <div class="text-center">
    <h4 class=""><b>Hubungi Kami </b><i class="fas fa-phone"></i></h4>
    <p>Anda dapat bertanya langsung dengan kami</p>
    <a href="https://wa.me/08112342113/?text=teksberkodeurl" class="btn btn-success px-5" target="blank"><i class="fas fa-phone"></i> Kami di Whatsapp <b>0811-2342-113</b></a>
  </div>
</div>
