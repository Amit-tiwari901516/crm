<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="admin/dist/img/thumb-1920-77572.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
              <li class="nav-item">
                <a href="{{ url('/redirect') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          </li>
                  
<!--================================lead=====================================-->                 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Leads
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/view_lead') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Lead</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('manage_leads') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Leads</p>
                </a>
              </li>
            </ul>
          </li>
<!--================================end---lead=====================================-->
          
<!--=================================Accounts======================================-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Accounts
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/view_account') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('manage_accounts') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Accounts</p>
                </a>
              </li>
            </ul>
          </li>
<!--================================end-Accounts=====================================-->
<!--===================================Contact=======================================-->

<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Contacts
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/view_lead') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('manage_contact') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Contacts</p>
                </a>
              </li>
            </ul>
          </li>
<!--================================end-contacts=====================================-->

<!--====================================Deals========================================-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Deals
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/view_lead') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Deal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('manage_deal') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Deals</p>
                </a>
              </li>
            </ul>
          </li>
<!--================================end-deals=====================================-->