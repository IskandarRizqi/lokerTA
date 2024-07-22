<style>
  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
    /* remove the gap so it doesn't close */
  }
</style>
<!-- header -->
<header class="site-header mo-left header fullwidth">
  <!-- main header -->
  <div class="sticky-header main-bar-wraper navbar-expand-lg">
    <div class="main-bar clearfix">
      <div class="container clearfix">
        <!-- website logo -->
        <div class="logo-header mostion">
          <a href="/"><img src="images/logo.png" class="logo" alt=""></a>
        </div>
        <!-- nav toggle button -->
        <!-- nav toggle button -->
        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse"
          data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <!-- extra nav -->
        <div class="extra-nav">
          <div class="extra-cell">
            @if(Auth::check())
            <div class="dropdown">
              <button class="btn btn-warning dropdown-toggle text-white pl-2 pr-2" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img @if(Auth::user()->gambar)
                src="/gambar?rf={{Auth::user()->gambar}}"
                @endif alt="" width="20px" style="border-radius:10px; font-size: 12px;"
                class="mr-2">{{Auth::user()->name}}
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="/profile" class="dropdown-item">Profile</a>
                {{-- <a href="{{ route('logout') }}" class="dropdown-item"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" hidden>
                    @csrf
                  </form>
                </a> --}}
                <div class="dropdown-item">
                  <span data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</span>
                </div>
              </div>
            </div>
            @else
            <a href="/register" class="site-button"><i class="fa fa-user"></i> Sign Up</a>
            <a href="/login" class="site-button"><i class="fa fa-lock"></i> login</a>
            @endif
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-center">
                <h3>Apakah anda yakin keluar?</h3>
                <div class="align-item-center">
                  <a href="/custom_logout" class="btn btn-info">
                    Iya
                  </a>
                  <span class="btn btn-danger ml-2" data-bs-dismiss="modal">Tidak</span>
                </div>
              </div>
              <div class="modal-footer" hidden>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Quik search -->
        <div class="dez-quik-search bg-primary">
          <form action="#">
            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
            <span id="quik-search-remove"><i class="flaticon-close"></i></span>
          </form>
        </div>
        <!-- main nav -->
        <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}">
              <a href="/">Home</a>
            </li>
            <li class="{{Request::is('informasipribadi') ? 'active' : ''}}">
              <a href="/informasipribadi">CV ATS <i></i></a>

            </li>
            {{-- <li>
              <a href="#">For Candidates <i class="fa fa-chevron-down"></i></a>
              <ul class="sub-menu">

                <li><a href="/profile" class="dez-page">CV ATS</a></li>

              </ul>
            </li> --}}

            {{-- <li>

              <a href="/templatecv" class="dez-page">CV ATS</a>

            </li> --}}
            <li class="{{Request::is('about-us') ? 'active' : '' }}">
              <a href="/about-us">About Us <i></i></a>

            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- main header END -->
</header>
<!-- header END -->