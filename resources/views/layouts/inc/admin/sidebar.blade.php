<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/category') }}">
              <i class="mdi mdi-car menu-icon"></i>
              <span class="menu-title">Categories</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/brand') }}">
              <i class="mdi mdi-car menu-icon"></i>
              <span class="menu-title">Car Brand</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/Carmodel') }}">
              <i class="mdi mdi-car menu-icon"></i>
              <span class="menu-title">Car Model</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/DTC') }}">
              <i class="mdi mdi-wrench menu-icon"></i>
              <span class="menu-title">DTC</span>
            </a>
          </li>
          

          <!-- User pages -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li> -->
      <!-- ===========================Subscription====================== -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Subscription" aria-expanded="false" aria-controls="auth">
             
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">Subscription Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Subscription">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/Subscriptions')}}"> Subscriptions </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/plans') }}"> Plans </a></li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/Docs') }}">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>