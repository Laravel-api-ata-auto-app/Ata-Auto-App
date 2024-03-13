<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/shop/dashboard/')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('/shop/Products')}}">
              <i class="mdi mdi-shopping menu-icon"></i>
              <span class="menu-title">Products</span>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-settings text-primary"></i>
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
               
                <li class="nav-item"> <a class="nav-link" href="{{url('/shop/Account')}}"> Account Setting </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/shop/Profile/')}}"> Profile Setting </a></li>
                
              </ul>
            </div>
          </li>
          
          

        </ul>
      </nav>