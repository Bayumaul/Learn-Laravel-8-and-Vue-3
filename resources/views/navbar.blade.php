 <div class="navbar-bg"></div>
 <nav class="navbar navbar-expand-lg main-navbar">
     <form class="form-inline mr-auto">
         <ul class="navbar-nav mr-3">
             <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
             <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                         class="fas fa-search"></i></a></li>
         </ul>
         <div class="search-element">
             <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
             <button class="btn" type="submit"><i class="fas fa-search"></i></button>
             <div class="search-backdrop"></div>
         </div>
     </form>
     <ul class="navbar-nav navbar-right">
         <li class="dropdown"><a href="#" data-toggle="dropdown"
                 class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                 <img alt="image" src="{{ asset('stisla/') }}/assets/img/avatar/avatar-1.png"
                     class="rounded-circle mr-1">

                 <div class="d-sm-none d-lg-inline-block">Hi,Bayu Maulana Ikhsan
                 </div>
             </a>
             <div class="dropdown-menu dropdown-menu-right">
                 <div class="dropdown-title">Logged in 5 min ago</div>
                 <a href="features-profile.html" class="dropdown-item has-icon">
                     <i class="far fa-user"></i> Profile
                 </a>
                 <a href="features-activities.html" class="dropdown-item has-icon">
                     <i class="fas fa-bolt">
                         dnfsjf</i> Activities
                 </a>
                 <a href="features-settings.html" class="dropdown-item has-icon">
                     <i class="fas fa-cog"></i> Settings
                 </a>
                 <div class="dropdown-title"> <i class="far fa-user"></i>Bayu Maulana Ikhsan</div>
                 {{-- <div class="dropdown-divider"></div>
             <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                 <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
             </a> --}}
                 {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form> --}}
             </div>
         </li>
     </ul>
 </nav>
 <div class="main-sidebar">
     <aside id="sidebar-wrapper">
         <div class="sidebar-brand">
             {{-- <img class="mt-3" src="{{ asset('stisla/') }}/logo.png" height="100%" width="25%" alt=""
                 srcset=""><br> --}}
             <a href="/">LARAVEL VUE</a>
         </div>
         <div class="sidebar-brand sidebar-brand-sm">
             <a href="/">LV</a>
         </div>
         <ul class="sidebar-menu">
             <li class="menu-header">Dashboard</li>
             <li class="dropdown">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                     <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                 </ul>
             </li>
             <li class="menu-header">Data User</li>
             <li class="{{ request()->segment(1) == 'guru' ? 'active' : '' }}">
                 <router-link class="active" to="data-user" class="nav-link"><i
                         class="fas fa-chalkboard-teacher"></i><span>Data User</span></router-link>
             </li>
         </ul>
         {{-- <ul class="sidebar-menu">
             <li class="menu-header">Dashboard</li>
             <li class="{{ request()->is('/') ? 'active' : '' }}"> <a href="/" class="nav-link"><i
                         class="fas fa-school"></i><span>Dashboard</span></a>
             </li>
             @role('admin|kepsek')
                 <li class="menu-header">Data Guru</li>
                 <li class="{{ request()->segment(1) == 'guru' ? 'active' : '' }}"> <a class="active"
                         href="{{ route('guru.index') }}" class="nav-link"><i
                             class="fas fa-chalkboard-teacher"></i><span>Data Guru</span></a>
                 </li>
             @endrole
             @role('admin|guru|kepsek')
                 <li class="menu-header">Data Siswa</li>
                 <li class="{{ request()->segment(1) == 'siswa' ? 'active' : '' }}"> <a
                         href="{{ route('siswa.index') }} " class="active nav-link"><i
                             class="fas fa-user-graduate"></i><span>Data Siswa</span></a>
                 </li>
             @endrole
             @role('guru|siswa|kepsek')
                 <li class="menu-header">Data Nilai</li>
                 <li class="{{ request()->segment(1) == 'nilai' ? 'active' : '' }}"> <a
                         href="{{ route('nilai.index') }}" class="nav-link"><i
                             class="fas fa-book-reader"></i><span>Data
                             Nilai</span></a>
                 </li>
             @endrole
             @role('guru|siswa|kepsek')
                 <li class="menu-header">Data Raport</li>
                 <li class="{{ request()->segment(1) == 'raport' ? 'active' : '' }}"> <a
                         href="{{ route('raport.index') }}" class="nav-link"><i
                             class="fas fa-chalkboard"></i><span>Data
                             Raport</span></a>
                 </li>
             @endrole
             @role('admin|kepsek')
                 <li class="menu-header">Data Kelas</li>
                 <li class="{{ request()->segment(1) == 'kelas' ? 'active' : '' }}"> <a
                         href="{{ route('kelas.index') }}" class="nav-link"><i
                             class="fas fa-door-open"></i><span>Data Kelas</span></a>
                 </li>
             @endrole
             <li class="menu-header">Data Mata Pelajaran</li>
             <li class="{{ request()->segment(1) == 'mapel' ? 'active' : '' }}"> <a
                     href="{{ route('mapel.index') }}" class="nav-link"><i
                         class="fas fa-book-open"></i><span>Data Mata
                         Pelajaran</span></a>
             </li>
             @role('admin')
                 <li class="menu-header">Data Sekolah</li>
                 <li class="{{ request()->segment(1) == 'sekolah' ? 'active' : '' }}"> <a
                         href="{{ route('sekolah.index') }}" class="nav-link"><i
                             class="fas fa-clipboard-list"></i><span>Data Sekolah</span></a>
                 </li>
             @endrole --}}
     </aside>
 </div>
