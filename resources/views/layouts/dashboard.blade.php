<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard | @yield('title')</title>
    @stack('prepend-style')
    @stack('addon-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Side bar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/logo-d.svg" alt="Logo" class="my-4">
          </div>
          <div class="list-group list-group-flush">
            <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action active">
              Dashboard
            </a>
            <a href="{{ route('dashboard-product') }}" class="list-group-item list-group-item-action">
              My Product
            </a>
            <a href="{{ route('dashboard-transactions') }}" class="list-group-item list-group-item-action">
              Transactions
            </a>
            <a href="{{ route('dashboard-setting') }}" class="list-group-item list-group-item-action">
              Store Settings
            </a>
            <a href="{{ route('dashboard-account') }}" class="list-group-item list-group-item-action">
              My Account
            </a>
            <a href="index.html" class="list-group-item list-group-item-action">
              Sign Out
            </a>
          </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" aria-label=""
          data-aos="fade-down">
              <div class="container-fluid">
                <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                  &laquo; Menu
                </button>
                <button 
                class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collaps navbar-collapse" id="navbarSupportedContent">
                  
      
                  <!-- Navbar Dekstop -->
                  <ul class="navbar-nav d-none d-lg-flex ml-auto">
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link" id="navDropdown" role="button" data-toggle="dropdown">
                        <img src="/images/icon-user.png" alt="User Profile" class="rounded-circle mr-2 profile-picture">
                        Hi, Oryza
                      </a>
                      <div class="dropdown-menu">
                        <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                        <a href="/dasshboard-account.html" class="dropdown-item">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="/" class="dropdown-item">Log Out</a>
                      </div>
                    </li>
      
                    <li class="nav-item">
                      <a href="" class="nav-link d-inline-block mt-2">
                        <img src="/images/cart.svg" alt="Cart ">
                        <div class="card-badge">3</div>
                      </a>
                    </li>
                  </ul>
      
                  <!-- Navbar Mobile -->
                  <ul class="navbar-nav vd-block d-lg-none">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Hi, Oryza</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link d-inline-block">Cart</a>
                    </li>
                  </ul>
                </div>
              </div>
          </nav> 

          <!-- Section Content -->
         @yield('content')

        </div>

      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $('#wrapper').toggleClass('toggled');
      });
    </script>
      @stack('prepend-script')
      @stack('addon-script')
  </body>
</html>
