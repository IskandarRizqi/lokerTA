<style>
    .nav-center {
      display: flex;
      justify-content: center;
      list-style-type: none;
      padding: 0;
    }
    
    .nav-item {
      margin-right: 15px; /* Jarak antar item, bisa disesuaikan */
    }
    
    .ml-auto {
      margin-left: auto;
    }
  </style>
  
  <ul class="nav nav-pills nav-center d-flex justify-content-center align-items-center" style="height: 85px; background-color: #ffffff;">
    <li class="nav-item">
      <a class="nav-link active" href="/">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">For Candidates</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/about-us">about-us</a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li> --}}
  
    <li class="nav-item ml-auto">
      <div class="extra-nav">
        <div class="extra-cell">
          @if(Auth::check())
          <a href="{{ route('logout') }}" class="btn btn-warning text-white"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-lock"></i> logout
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" hidden>
              @csrf
            </form>
          </a>
          <a href="/profile" class="btn btn-warning text-white"><i class="fa fa-user"></i> Profile</a>
          @else
          <a href="/register" class="site-button"><i class="fa fa-user"></i> Sign Up</a>
          <a href="/login" class="site-button"><i class="fa fa-lock"></i> login</a>
          @endif
          <div class="dropdown-item"></div>
        </div>
      </div>
    </li>
  </ul>
  