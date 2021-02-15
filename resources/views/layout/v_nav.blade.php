<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-header">NAVIGASI</li>

    <li class="nav-item">
      <a href="/" class="nav-link {{request()->is('/')?'active':''}}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
      </a>
    </li>

    @if (auth()->user()->level==1)
    <li class="nav-item">
        <a href="/guru" class="nav-link {{request()->is('guru')?'active':''}}">
          <i class="nav-icon fas fa-university"></i>
          <p>Guru</p>
        </a>
    </li>
    @elseif (auth()->user()->level==2)
    <li class="nav-item">
        <a href="/user" class="nav-link {{request()->is('user')?'active':''}}">
          <i class="nav-icon fas fa-user"></i>
          <p>User</p>
        </a>
    </li>
    @endif

    <li class="nav-item">
        <a href="/siswa" class="nav-link {{request()->is('siswa')?'active':''}}">
          <i class="nav-icon fas fa-graduation-cap"></i>
          <p>Siswa</p>
        </a>
    </li>

</ul>
