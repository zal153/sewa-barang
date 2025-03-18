<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.style')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- Sidenav Menu Start -->
        @include('layouts.sidebar')
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        @include('layouts.header')
        <!-- Topbar End -->

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-transparent">
                    <div class="card mb-0 shadow-none">
                        <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                            <i class="ti ti-search fs-22"></i>
                            <input type="search" class="form-control border-0" id="search-modal-input"
                                placeholder="Search for actions, people,">
                            <button type="button" class="btn p-0" data-bs-dismiss="modal"
                                aria-label="Close">[esc]</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">
            @yield('content')
            <!-- container -->

            <!-- Footer Start -->
            @include('layouts.footer')
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Script -->
    @include('layouts.script')
</body>

</html>
