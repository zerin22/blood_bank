<!-- partial:partials/_navbar.html -->
<nav class="navbar p-0">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" id="navbar-toggler">
                <span class="fa fa-bars"></span>
            </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        {{-- <ul class="navbar-nav mr-lg-4 w-100">
            <li class="nav-item nav-search d-none d-lg-block w-100">
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="search">
                    <i class="fa fa-search"></i>
                    </span>
                </div>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Search Menu, Customer name"
                    aria-label="search"
                    aria-describedby="search"
                />
                </div>
            </li>
        </ul> --}}

        {{-- <ul class="no-bullets">
            <li>
                <div class="position-relative ms-auto">
                <button
                    class="btn btn-sm btn-light dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    Today
                </button>
                <div class="dropdown-menu">
                    <button class="dropdown-item">Today</button>
                    <button class="dropdown-item">Last week</button>
                    <button class="dropdown-item">Last month</button>
                </div>
                </div>
            </li>
        </ul> --}}
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown mx-2">
                <a
                class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                id="messageDropdown"
                href="#"
                data-bs-toggle="dropdown"
                >
                <i class="fa-solid fa-envelope"></i>
                <span class="count"></span>
                </a>
                <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="messageDropdown"
                >
                <p
                    class="mb-0 font-weight-normal float-left dropdown-header"
                >
                    Messages
                </p>
                <a class="dropdown-item">
                    <div class="item-thumbnail">
                    <img
                        src="{{ asset('backend') }}/images/faces/face4.jpg"
                        alt="image"
                        class="profile-pic"
                    />
                    </div>
                    <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">David Grey</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                        The meeting is cancelled
                    </p>
                    </div>
                </a>
                <a class="dropdown-item">
                    <div class="item-thumbnail">
                    <img
                        src="{{ asset('backend') }}/images/faces/face2.jpg"
                        alt="image"
                        class="profile-pic"
                    />
                    </div>
                    <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Tim Cook</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                        New product launch
                    </p>
                    </div>
                </a>
                <a class="dropdown-item">
                    <div class="item-thumbnail">
                    <img
                        src="{{ asset('backend') }}/images/faces/face3.jpg"
                        alt="image"
                        class="profile-pic"
                    />
                    </div>
                    <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Johnson</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                        Upcoming board meeting
                    </p>
                    </div>
                </a>
                </div>
            </li>
            <li class="nav-item dropdown mx-2">
                <a
                class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                id="notificationDropdown"
                href="#"
                data-bs-toggle="dropdown"
                >
                <i class="fa-solid fa-bell"></i>
                <span class="count"></span>
                </a>
                <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="notificationDropdown"
                >
                <p
                    class="mb-0 font-weight-normal float-left dropdown-header"
                >
                    Notifications
                </p>
                <a class="dropdown-item">
                    <div class="item-thumbnail">
                    <div class="item-icon bg-success">
                        <i class="mdi mdi-information mx-0"></i>
                    </div>
                    </div>
                    <div class="item-content">
                    <h6 class="font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                        Just now
                    </p>
                    </div>
                </a>
                <a class="dropdown-item">
                    <div class="item-thumbnail">
                    <div class="item-icon bg-warning">
                        <i class="mdi mdi-settings mx-0"></i>
                    </div>
                    </div>
                    <div class="item-content">
                    <h6 class="font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                        Private message
                    </p>
                    </div>
                </a>
                <a class="dropdown-item">
                    <div class="item-thumbnail">
                    <div class="item-icon bg-info">
                        <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                    </div>
                    <div class="item-content">
                    <h6 class="font-weight-normal">
                        New user registration
                    </h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                        2 days ago
                    </p>
                    </div>
                </a>
                </div>
            </li>
            <li class="nav-item nav-profile dropdown ms-2">
                <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                id="profileDropdown"
                >
                <img src="{{ asset('backend') }}/images/faces/face10.jpg" alt="profile" />
                <span class="nav-profile-name">Louis Barnett</span>
                <i class="fa-solid fa-chevron-down"></i>
                </a>
                <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
                >
                <a href="{{ route('profile.index') }}" class="dropdown-item">
                    <i class="mdi mdi-settings text-primary"></i>
                   profile
                </a>
                <a class="dropdown-item" href="route('admin.logout')"
                onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout

                    <form method="POST" id="logout-form" action="{{ route('admin.logout') }}">
                        @csrf
                    </form>
                </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
