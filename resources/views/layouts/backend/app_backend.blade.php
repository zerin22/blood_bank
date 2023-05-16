<!DOCTYPE html>
<html lang="en">
   @include('layouts.backend.inc.header')
    <body class="sidebar-icon-only sidebar-text">
    <div class="container-scroller">
        <!-- partial -->
        <div class="page-body-wrapper">
            @include('layouts.backend.inc.sidebar')

            <!-- partial -->
            <div class="main-panel">
                @include('layouts.backend.inc.header_top')

                <div class="content-wrapper">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial -->
            </div>
        <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @include('layouts.backend.inc.footer')
    </body>
</html>
