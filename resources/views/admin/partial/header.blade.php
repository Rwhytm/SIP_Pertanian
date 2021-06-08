<!-- Header -->
<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
      <!-- Sidebar toggle button -->
      
      <button id="sidebar-toggler" class="sidebar-toggle">
        <span class="sr-only">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
          </svg>
      </span>
      </button>
      <!-- search form -->
      <div class="search-form d-none d-lg-inline-block">
        
      </div>

      <div class="navbar-right ">
        <ul class="nav navbar-nav">
          <a href="{{ route("home user") }}">Belanja</a>
          <li class="dropdown user-menu">
            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <span class="d-none d-lg-inline-block">{{'Hallo, kak '.Auth::user()->nama }}</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
              <!-- User image -->
              <li class="dropdown-header">
                <div class="d-inline-block">
                  {{ Auth::user()->nama }} 
                  <small class="pt-1 ">{{Auth::user()->email}}</small>
                </div>
              </li>
              <li>
                <a href="{{route('profil admin', Auth::user()->id)}}">
                  <i class="mdi mdi-account"></i> Profil Saya
                </a>
              </li>
              <li class="dropdown-footer">
                {{-- mdi mdi-logout --}}
                <a class="mdi mdi-logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>


  </header>