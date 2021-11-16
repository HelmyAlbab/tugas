<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="project/mainStyle.css" />
    <title>Bootstap 5 Responsive Admin Dashboard</title>
  </head>

  <body>
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
          <img src="img/suzy.jpg" width="80px" height="80px" style="border-radius: 50%" /> admin
        </div>

        <div class="list-group list-group-flush my-2 ps-4">
          <a href="/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i class="fas fa-tachometer-alt me-4"></i>Dashboard</a>
          <a href="/penjualan" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i class="fas fa-chart-line me-4"></i>Penjualan</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i class="fas fa-database me-4"></i>Data Pasok</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i class="fas fa-user-cog me-4"></i>Distributor</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i class="fas fa-book me-4"></i>Buku</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i class="fas fa-cog me-4"></i>Settings</a>
          <a href="/login" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" id="extend"><i class="fas fa-power-off me-4"></i>Logout</a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4 tambah">
          <div class="d-flex align-items-center">
            <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0 kelas">Dashboard</h2>
          </div>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle second-text" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user me-2"></i>Bae Suzy
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>

        @yield('content')
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
        el.classList.toggle("toggled");
      };
    </script>
  </body>
</html>
