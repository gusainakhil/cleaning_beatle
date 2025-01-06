<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.css') }}" />

    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-info" data-bs-theme="light">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
           
            <!--begin::Notifications Dropdown Menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-bell-fill"></i>
                <span class="navbar-badge badge text-bg-warning">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-envelope me-2"></i> 4 new messages
                  <span class="float-end text-secondary fs-7">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-people-fill me-2"></i> 8 friend requests
                  <span class="float-end text-secondary fs-7">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                  <span class="float-end text-secondary fs-7">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
              </div>
            </li>
            <!--end::Notifications Dropdown Menu-->
            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
              </a>
            </li>
            <!--end::Fullscreen Toggle-->
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="{{asset('admin/dist/assets/img/beatle.jpeg')}}"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline">Bheem Chand</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="{{asset('admin/dist/assets/img/beatle.jpeg')}}"
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p>
                    Raiway Manager
                    <small>Bheem Chand</small>
                  </p>
                </li>
                <!--end::User Image-->
               
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="../index.html" class="brand-link logo-switch">
            <!--begin::Brand Image Small-->
            <img
              src="{{asset('admin/dist/assets/img/railway.png')}}"
              alt="AdminLTE Logo Small"
              class="brand-image-xl logo-xs opacity-75 shadow"
            />
            <!--end::Brand Image Small-->
            <!--begin::Brand Image Large-->
            <img
              src="{{asset('admin/dist/assets/img/railway.png')}}"
              alt="AdminLTE Logo Large"
              class="brand-image-xs logo-xl opacity-75"
            />
            <!--end::Brand Image Large-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-train-front-fill"></i>
                  <p>
                    Daily Machine Report
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Score Card</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-file-text-fill"></i>
                  <p>
                    Bill Summary
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./widgets/small-box.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Genrate Report</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Score Card
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./widgets/small-box.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>RBPC</p>
                    </a>
                  </li>
                </ul>
              </li>
             
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <!-- Depots -->
                <div class="col-12 col-sm-6 col-md-2">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-primary shadow-sm">
                      <i class="bi bi-building"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Depots</span>
                      <span class="info-box-number">10</span>
                    </div>
                  </div>
                </div>
                
                <!-- Auditors -->
                <div class="col-12 col-sm-6 col-md-2">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm">
                      <i class="bi bi-person-badge-fill"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Auditors</span>
                      <span class="info-box-number">760</span>
                    </div>
                  </div>
                </div>
              
                <!-- Audits -->
                <div class="col-12 col-sm-6 col-md-2">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-warning shadow-sm">
                      <i class="bi bi-journal-check"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Audits</span>
                      <span class="info-box-number">2,000</span>
                    </div>
                  </div>
                </div>
              
                <!-- Trains -->
                <div class="col-12 col-sm-6 col-md-2">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-danger shadow-sm">
                      <i class="bi bi-train-front"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Trains</span>
                      <span class="info-box-number">41,410</span>
                    </div>
                  </div>
                </div>
              
                <!-- Coaches -->
                <div class="col-12 col-sm-6 col-md-2">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-info shadow-sm">
                      <i class="bi bi-bus-front-fill"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Coaches</span>
                      <span class="info-box-number">5,200</span>
                    </div>
                  </div>
                </div>
              
                <!-- Revenue -->
                <div class="col-12 col-sm-6 col-md-2">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-secondary shadow-sm">
                      <i class="bi bi-currency-dollar"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Revenue</span>
                      <span class="info-box-number">$1.2M</span>
                    </div>
                  </div>
                </div>
              </div>
              
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-4">
                  <div class="card h-100 mb-4">
                    <div class="card-header">
                      <h3 class="card-title">Monthly Performance Report</h3>
                    </div>
                    <div class="card-body">
                      <!-- Skills Bar -->
                      <div class="mb-3">
                        <label>Score Cards</label>
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label>Machine</label>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label>Manpower</label>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="col-lg-4">
                    <div class="card h-100 mb-4">
                      <div class="card-header">
                        <h3 class="card-title">Auditor List</h3>
                      </div>
                      <div class="card-body">
                        <marquee direction="up" scrollamount="3" style="height: 100px; overflow: hidden;">
                          <p><strong>Name:</strong> John Doe</p>
                          <p><strong>Designation:</strong> Senior Auditor</p>
                          <p><strong>Type:</strong> Full-Time</p>
                          <p><strong>Name:</strong> Jane Smith</p>
                          <p><strong>Designation:</strong> Junior Auditor</p>
                          <p><strong>Type:</strong> Part-Time</p>
                        </marquee>
                      </div>
                    </div>
                  </div>
                  
              
                  <div class="col-lg-4">
                    <div class="card h-100 mb-4">
                      <div class="card-header">
                        <h3 class="card-title">Notice Board</h3>
                      </div>
                      <div class="card-body">
                        <img 
                          src="https://baris.beatleanalytics.com/theme/black/dist/img/snt_launch.gif" 
                          alt="" 
                          style="width: 100%; height: auto; object-fit: contain;"
                        >
                      </div>
                    </div>
                  </div>
                  
                
              </div>

          </div>
          <!--end::Container-->

        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2024&nbsp;
          <a href="https://beatleanalytics.com" class="text-decoration-none">Beatle Analytics</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
  </body>
  <!--end::Body-->
</html>
