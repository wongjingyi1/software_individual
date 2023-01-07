  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="">
        <span class="d-none d-lg-block">e-Complaint</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="fa-regular fa-bell"></i>
            <span class="badge bg-primary badge-number">3</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block ps-2">Username</span>
          </a><!-- End Profile Iamge Icon -->
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms" data-bs-toggle="collapse" href="#">
        <i class="fa-regular fa-file-lines"></i><span>Complaint Forms</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="forms" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <span>Add New</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>Sent</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-heading">Helpdesk</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
        <i class="fa-solid fa-box-archive"></i>    
          <span>Complaint Inbox</span>
          <span class="badge bg-success badge-number ms-auto">3</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#helpdesk" data-bs-toggle="collapse" href="#">
         <i class="fa-solid fa-inbox"></i><span>Manage Complaint</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="helpdesk" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>bi-chevron-down
            <a href="#">
              </i><span>Keep In View</span>
            </a>
          </li>
          <li>
            <a href="#">
              </i><span>Active</span>
            </a>
          </li>
          <li>
            <a href="#">
              </i><span>Closed</span>
            </a>
          </li>
        </ul>
      </li><!-- End Helpdesk Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#group" data-bs-toggle="collapse" href="#">
        <i class="fa-regular fa-folder"></i></i><span>Group</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="group" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Add New</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Group List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Group Nav -->

      <li class="nav-heading">Executive</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
        <i class="fa-solid fa-box-archive"></i> 
          <span>Complaint Inbox</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#executive" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-inbox"></i><span>Manage Complaint</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="executive" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Keep In View</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Active</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Closed</span>
            </a>
          </li>
        </ul>
      </li><!-- End executive Nav -->

      <li class="nav-heading">Admin</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#admin" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-user-group"></i></i><span>Manage User</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="admin" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Add New</span>
              <!-- bi bi-person-plus-fill -->
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>User List</span>
            </a>
          </li>
        </ul>
      </li><!-- End admin Nav -->

      <li class="nav-heading">Settings</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
        <i class="fa-regular fa-user"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
        <i class="fa-solid fa-right-to-bracket"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Log Out Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
