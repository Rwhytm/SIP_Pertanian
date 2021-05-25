<!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
              <!-- Aplication Brand -->
              <div class="app-brand">
                <a href="{{route('dashboard admin')}}" title="Admin">
                  {{-- <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33"
                  >
                    <g fill="none" fill-rule="evenodd">
                      <path
                        class="logo-fill-blue"
                        fill="#7DBCFF"
                        d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                      />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg> --}}
                  <span class="brand-name text-truncate ">
                    {{-- <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="20"
                  height="23"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg> --}}
                    <small>INCUBATOR PERTANIAN</small>
                  </span>
                </a>
              </div>
              <!-- begin sidebar scrollbar -->
              <div class="sidebar-scrollbar">
  
                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li  class="has-sub  expand" >
                      <a class="sidenav-item-link" href="javascript:void(1)" data-toggle="collapse" data-target="#dashboard"
                        aria-expanded="false" aria-controls="dashboard">
                        <i>
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                          </svg>
                        </i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse"  id="dashboard"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">

                          
                          {{-- tombol dashboard --}}
                          <li class="deactive" >
                            <a class="sidenav-item-link" href="{{route('dashboard admin')}}">
                              <span class="nav-text">Dashboard</span>
                            </a>
                          </li>
                    </li>
                  </ul>
                    <li  class="has-sub  expand" >
                      <a class="sidenav-item-link" href="javascript:void(1)" data-toggle="collapse" data-target="#tables"
                      aria-expanded="false" aria-controls="tables">
                        <i>
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                          </svg>
                        </i>
                        <span class="nav-text">Tables</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse"  id="tables"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                          <li >
                            <a class="sidenav-item-link" href="{{route('kategori utama')}}">
                              <span class="nav-text">Tabel Kategori</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="{{route('produk admin')}}">
                              <span class="nav-text">Tabel Produk</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="{{route('admin_user')}}">
                              <span class="nav-text">Tabel Pelanggan</span>
                              
                            </a>
                          </li>
                      </ul>
                      
                  
              </div>
  
              {{-- Footer --}}
              {{-- <div class="sidebar-footer">
                <hr class="separator mb-0" />
                <div class="sidebar-footer-content">
                  <h6 class="text-uppercase">
                    Cpu Uses <span class="float-right">40%</span>
                  </h6>
                  <div class="progress progress-xs">
                    <div
                      class="progress-bar active"
                      style="width: 40%;"
                      role="progressbar"
                    ></div>
                  </div>
                  <h6 class="text-uppercase">
                    Memory Uses <span class="float-right">65%</span>
                  </h6>
                  <div class="progress progress-xs">
                    <div
                      class="progress-bar progress-bar-warning"
                      style="width: 65%;"
                      role="progressbar"
                    ></div>
                  </div>
                </div>
              </div> --}}
            </div>
          </aside>