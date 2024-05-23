<style>
  .menu-active{
    color: black !important;
    font-weight: bold;
  }
</style>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
      <div class="container">
        <a class="navbar-brand" href="#" >
          <img src="/dist/img/logo2.jpg" alt="Logo STMIK Bandung" style="width: 50px; height: auto;">
          STMIK Bandung
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'menu-active' : '' }}" aria-current="page" href="/">Home</a>

              <li class="nav-item dropdown" id="aboutDropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAbout" role="button" 
                   onmouseover="showAboutDropdown()" onmouseout="hideAboutDropdown()">
                    About
                </a>
                <div class="dropdown-menu" id="aboutDropdownMenu" aria-labelledby="navbarDropdownAbout"
                     onmouseover="showAboutDropdown()" onmouseout="hideAboutDropdown()">
                    <a class="dropdown-item" href="/visi_dan_misi">Visi Misi & Tujuan</a>
                    <a class="dropdown-item" href="/pimpinan">Pimpinan</a>
                    <a class="dropdown-item" href="/struktur_organisasi">Struktur Organisasi</a>
                </div>
              </li>
              <script>
                  function showAboutDropdown() {
                      document.getElementById("aboutDropdownMenu").classList.add("show");
                  }
              
                  function hideAboutDropdown() {
                      document.getElementById("aboutDropdownMenu").classList.remove("show");
                  }
              </script>
            
            {{-- </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('about') ? 'menu-active' : '' }}" href="/about">About</a>
            </li> --}}

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('pendidikan') ? 'menu-active' : '' }}" href="#" id="navbarDropdownPendidikan" role="button" 
                 onmouseover="showPendidikanDropdown()" onmouseout="hidePendidikanDropdown()">
                  Pendidikan
              </a>
              <div class="dropdown-menu" id="pendidikanDropdownMenu" aria-labelledby="navbarDropdownPendidikan"
                   onmouseover="showPendidikanDropdown()" onmouseout="hidePendidikanDropdown()">
                  <a class="dropdown-item" href="/teknik_informatika">Teknik Informatika S1</a>
                  <a class="dropdown-item" href="/sistem_informasi">Sistem Informasi S1</a>
              </div>
            </li>
            <script>
                function showPendidikanDropdown() {
                    document.getElementById("pendidikanDropdownMenu").classList.add("show");
                }
            
                function hidePendidikanDropdown() {
                    document.getElementById("pendidikanDropdownMenu").classList.remove("show");
                }
            </script>
          
            <li class="nav-item">
              <a class="nav-link {{ Request::is('sejarah') ? 'menu-active' : '' }}" href="/sejarah">Sejarah</a>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link {{ Request::is('kemahasiswaan') ? 'menu-active' : '' }}" href="/kemahasiswaan">Kemahasiswaan</a>
            </li> --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('kemahasiswaan') ? 'menu-active' : '' }}" href="#" id="navbarDropdownKemahasiswaan" role="button" 
                 onmouseover="showKemahasiswaanDropdown()" onmouseout="hideKemahasiswaanDropdown()">
                  Kemahasiswaan
              </a>
              <div class="dropdown-menu" id="kemahasiswaanDropdownMenu" aria-labelledby="navbarDropdownKemahasiswaan"
                   onmouseover="showKemahasiswaanDropdown()" onmouseout="hideKemahasiswaanDropdown()">
                  <a class="dropdown-item" href="/bem">Badan Eksekutif Mahasiswa</a>
                  <a class="dropdown-item" href="/ldk">Lembaga Dakwah Kampus</a>
                  <a class="dropdown-item" href="/himaif">Himpunan Mahasiswa Teknik Informatika</a>
                  <a class="dropdown-item" href="/himasi">Himpunan Mahasiswa Sistem Informasi</a>
                  <a class="dropdown-item" href="/futsal">Futsal</a>

              </div>
            </li>
            <script>
                function showKemahasiswaanDropdown() {
                    document.getElementById("kemahasiswaanDropdownMenu").classList.add("show");
                }
            
                function hideKemahasiswaanDropdown() {
                    document.getElementById("kemahasiswaanDropdownMenu").classList.remove("show");
                }
            </script>
          
            {{-- <li class="nav-item">
              <a class="nav-link {{ Request::is('ukm') ? 'menu-active' : '' }}" href="/ukm">UKM</a>
            </li> --}}

            <li class="nav-item">
              <a class="nav-link {{ Request::is('contact') ? 'menu-active' : '' }}" href="/contact">Contact</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link {{ Request::is('pmb') ? 'menu-active' : '' }}" href="/pmb">PMB</a>
            </li> --}}

          </ul>
          <form class="d-flex">
            @auth
            <a href="/admin/dashboard" class="btn btn-primary"><i class="fa-solid fa-user"></i> Dashboard</a>
            @else
            {{-- <a href="/login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login</a> --}}
            @endauth
          </form>
      </div>
      
    </nav>
  </header>