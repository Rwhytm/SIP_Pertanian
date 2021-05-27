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
                  <span class="brand-name text-truncate ">
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
  
              
            </div>
          </aside>