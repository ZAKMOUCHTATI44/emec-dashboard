<nav style="left: 0;width: auto" class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="ti ti-menu-2 ti-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          <li class="menu-item">
            <a href="/" class="menu-link">
              <div class="capitalize text-black">Catégories</div>
            </a>
          </li>
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <li class="nav-item me-2 me-xl-0">
          </li>

        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online h-14 w-14 bg-[#a830d0] rounded-full">

                  </div>
                </div>
                <div class="flex-grow-1">
                    <span class="fw-semibold d-block">
                        {{ Auth::user()->name }}
                    </span>
                    <small class="text-muted uppercase">
                        jury
                    </small>
                  </div>
              </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <i class="ti ti-user-check me-2 ti-sm"></i>
                <span class="align-middle">Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="ti ti-settings me-2 ti-sm"></i>
                <span class="align-middle">Settings</span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="ti ti-logout me-2 ti-sm"></i>
                <span class="align-middle">Logout</span>
              </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper d-none">
      <input
        type="text"
        class="form-control search-input container-xxl border-0"
        placeholder="Search..."
        aria-label="Search..."
      />
      <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
    </div>
  </nav>
