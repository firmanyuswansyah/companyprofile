<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/logo2.jpg" alt="Stmik" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">STMIK Bandung</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/admin/dashboard" class="nav-link {{Request::is('admin/dashboard*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/admin/pesan" class="nav-link {{Request::is('admin/pesan*') ? 'active' : ''}}">
            <i class="nav-icon far fa-comment"></i>
            <p>
              Saran dan Kritik
              {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
          </a>
        </li>

        <li class="nav-item {{Request::is('admin/posts*') ? 'menu-is-opening menu-open' : ''}}">
          <a href="#" class="nav-link">
            <i class="fas fa-graduation-cap"></i>
            <p>
              Blog
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/posts/blog" class="nav-link {{Request::is('admin/posts/blog') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/posts/kategori" class="nav-link {{Request::is('admin/posts/kategori') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Nama Kategori</p>
              </a>
            </li>
          </ul>
        </li>

          <li class="nav-item {{Request::is('admin/about*') ? 'menu-is-opening menu-open' : ''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                About
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/about/visimisi" class="nav-link {{Request::is('admin/about/visimisi') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi dan Misi</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="/admin/about/pimpinan" class="nav-link {{Request::is('admin/about/pimpinan') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pimpinan</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="/admin/about/strukturorganisasi" class="nav-link {{Request::is('admin/about/strukturorganisasi') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Organisasi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{Request::is('admin/pendidikan*') ? 'menu-is-opening menu-open' : ''}}">
            <a href="#" class="nav-link">
              <i class="fas fa-graduation-cap"></i>
              <p>
                Pendidikan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/pendidikan/teknikinformatika" class="nav-link {{Request::is('admin/pendidikan/teknikinformatika') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teknik Informatika-S1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/pendidikan/sisteminformasi" class="nav-link  {{Request::is('admin/pendidikan/sisteminformasi') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sistem Informasi-S1</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{Request::is('admin/kemahasiswaan*') ? 'menu-is-opening menu-open' : ''}} ">
            <a href="#" class="nav-link">
              <i class="fas fa-university"></i>
              <p>
                Kemahasiswaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/kemahasiswaan/bem" class="nav-link {{Request::is('admin/kemahasiswaan/bem') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Badan Eksekutif Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/kemahasiswaan/ldk" class="nav-link {{Request::is('admin/kemahasiswaan/ldk') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lembaga Dakwah Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/kemahasiswaan/himaif" class="nav-link {{Request::is('admin/kemahasiswaan/himaif') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Himpunan Mahasiswa-IF</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/kemahasiswaan/himasi" class="nav-link {{Request::is('admin/kemahasiswaan/himasi') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Himpunan Mahasiswa-SI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/kemahasiswaan/futsal" class="nav-link {{Request::is('admin/kemahasiswaan/futsal') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Futsal</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/admin/service" class="nav-link {{Request::is('admin/service*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Services
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/sejarah" class="nav-link {{Request::is('admin/sejarah*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-history"></i>
              <p>Sejarah</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/ukm" class="nav-link {{Request::is('admin/ukm*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-puzzle-piece"></i>
              <p>About (Halaman Home)</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/banner" class="nav-link {{Request::is('admin/banner*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banner
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/user" class="nav-link {{Request::is('admin/user*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
