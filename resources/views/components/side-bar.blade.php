<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/" class="app-brand-link">
        <img src="/assets/logo.png" class="mx-auto my-5" width="105px" alt="Emec" />

      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Apps & Pages -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Menu</span>
      </li>
      <li @class([
        'menu-item',
        'active' => Request::is('dashboard')]) >
        <a href="/" class="menu-link">
          <i class="menu-icon tf-icons ti ti-smart-home"></i>
          <div class="capitalize">
            Influenceurs
          </div>
        </a>
      </li>

</aside>
