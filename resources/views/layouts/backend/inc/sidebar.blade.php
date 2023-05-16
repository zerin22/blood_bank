<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center logo__wrapper">
        <img
            src="{{ asset('backend') }}/images/apix_logo.jpg"
            class="brand__logo"
            alt="apix logo icon"
        />
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
            <i class="fa fa-line-chart menu-icon"></i>
            <span class="menu-title d-none">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="catalogue.html">
            <i class="fa fa-layer-group menu-icon"></i>
            <span class="menu-title d-none">Catalogue</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="orders.html">
            <i class="fa fa-box-open menu-icon"></i>
            <span class="menu-title d-none">Orders</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="promotion.html">
            <i class="fa fa-ticket menu-icon"></i>
            <span class="menu-title d-none">Promotion</span>
            </a>
        </li>

        <div id="accordion" class="accordion">
            <li class="nav-item">
                <div class="link"><i class="fa fa-user-tie menu-icon"></i>Vendors<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="vendor-list.html">List</a></li>
                    <li><a href="payment-management.html">Payment</a></li>

                </ul>
            </li>
            <li class="nav-item">
                <div class="link"><i class="fa fa-database menu-icon"></i>Influencers<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="influencer-list.html">List</a></li>
                    <li><a href="Influencer-payment.html">Payment</a></li>
                </ul>
            </li>
        </div>



        <li class="nav-item">
            <a class="nav-link" href="customer-list.html">
            <i class="fa-solid fa-user menu-icon"></i>
            <span class="menu-title d-none">Customer</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="user.html">
            <i class="fa-solid fa-hospital-user menu-icon"></i>
            <span class="menu-title d-none">User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.html">
            <i class="fa-solid fa-sign-in menu-icon"></i>
            <span class="menu-title d-none">Login</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="settings.html">
            <i class="fa-solid fa-gear menu-icon"></i>
            <span class="menu-title d-none">Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="country-management.html">
            <i class="fa-solid fa-coins menu-icon"></i>
            <span class="menu-title d-none">Currency & Country</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="referal-management.html">
            <i class="fa-solid fa-users menu-icon"></i>
            <span class="menu-title d-none">Referral</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="wallet-management.html">
            <i class="fa-solid fa-wallet menu-icon"></i>
            <span class="menu-title d-none">Wallets</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fa-solid fa-box menu-icon"></i>
            <span class="menu-title d-none">POS</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fa-solid fa-sign-in menu-icon"></i>
            <span class="menu-title d-none">Reports</span>
            </a>
        </li>
        </ul>

        <button class="btn p-0" id="sidebarCollapseBtn">
            <svg
                width="26"
                height="20"
                viewBox="0 0 29 23"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <rect width="28.6098" height="23" rx="2.80488" fill="white" />
                <g clip-path="url(#clip0_127_108)">
                <path
                    d="M7.10547 16.4086H15.5201M7.10547 6.31104H15.5201H7.10547ZM7.10547 11.3598H22.0648H7.10547ZM22.0648 11.3598L19.2599 7.57323L22.0648 11.3598ZM22.0648 11.3598L19.2599 15.1464L22.0648 11.3598Z"
                    stroke="#A394FD"
                    stroke-width="1.68293"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                </g>
                <defs>
                <clipPath id="clip0_127_108">
                    <rect
                    width="16.8293"
                    height="12.622"
                    fill="white"
                    transform="translate(6.17041 5.04883)"
                    />
                </clipPath>
                </defs>
            </svg>
            <span class="text-white ms-2">Collapse</span>
        </button>
    </ul>
</nav>
