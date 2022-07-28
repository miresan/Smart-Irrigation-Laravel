            <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
              <!-- Aplication Brand -->
              <div class="app-brand">
                <a href="{{ url('/admin') }}" title="Sleek Dashboard">
                  <img class="brand-icon" width="33" height="33" src="{{ url('/').'/'.$siteinformation->favicon }}">

                  <span class="brand-name text-truncate">Dashboard</span>
                </a>
              </div>
              <!-- begin sidebar scrollbar -->
              <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">



                    <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                        aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse"  id="dashboard"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">



                              <li >
                                <a class="sidenav-item-link" href="{{ url('/admin') }}">
                                  <span class="nav-text">Analytics</span>

                                </a>
                              </li>








                </ul>

              </div>


            </div>
          </aside>
