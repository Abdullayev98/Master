 <!-- Header -->
 <header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
      <!-- Left Section -->
      <div>
        <!-- Toggle Sidebar -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
        <button type="button" class="btn btn-alt-secondary me-1" data-toggle="layout" data-action="sidebar_toggle">
          <a href="">Masterprofedu.uz</a>
        </button>
        
      </div>
      <ul class="nav nav-pills nav-justified push">
        <div class="dropdown d-inline-block">
          <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-chart-bar d-sm-none"></i>
            <span class="d-none d-sm-inline-block">Metodik tavsiyalar</span>
            <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
            <div>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Me'yoriy huquqiy hujjatlar
              </a>
            </div>
            <div>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Foydali adabiyotlar
              </a>
            </div>
            <div>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Foydali manbalar
              </a>
            </div>
            <div>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Videoroliklar
              </a>
            </div>
          </div>
        </div>
          <li class="nav-item mx-lg-3">
            <a class="nav-link" href="javascript:void(0)">Kursgakirish</a>
          </li>
          <li class="nav-item mx-lg-3">
            <a class="nav-link" href="javascript:void(0)">Bog'lanish</a>
          </li>
          <li class="nav-item mx-lg-3">
            <a class="nav-link" href="javascript:void(0)">Qidiruv</a>
          </li>
        </ul>
      <!-- END Left Section -->

      <!-- Right Section -->
        <!-- User Dropdown -->
        <div class="dropdown d-inline-block">
          <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user d-sm-none"></i>
            <span class="d-none d-sm-inline-block">Admin</span>
            <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
            <div>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Logout
              </a>
            </div>
          </div>
        </div>
      <!-- END Right Section -->
    </div>
    <!-- END Header Content -->


    <div id="page-header-loader" class="overlay-header bg-primary-darker">
      <div class="content-header">
        <div class="w-100 text-center">
          <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
        </div>
      </div>
    </div>
    <!-- END Header Loader -->
  </header>