<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard for kenichi Incorporation</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../backend/assets/img/favicon/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../backend/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../backend/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../backend/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <!-- <link rel="stylesheet" href="../backend/assets/css/demo.css" /> -->

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../backend/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../backend/assets/vendor/js/helpers.js"></script>
    <script src="../backend/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
           
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <img src="/assets/images/Incorporation Logo.png" style="width: 60%;margin:10px;" alt="">
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="{{route('admin_dashboard')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                    
                        <a href="{{route('admin_settings')}}" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div>Website Settings</div>
                        </a>
                    </li>

                    <li class="menu-item open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Website data</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{route('admin_contact')}}" class="menu-link">
                                    <div data-i18n="Without menu">Contact</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('admin_feedback')}}" class="menu-link">
                                    <div data-i18n="Without navbar">Feedback</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('admin_testimonials')}}" class="menu-link">
                                    <div data-i18n="Container">Tesimonials</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('admin_subscription')}}" class="menu-link">
                                    <div data-i18n="Fluid">Subscription</div>
                                </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('admin_emarketing')}}" class="menu-link">
                                    <div data-i18n="Blank">Email Marketing</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Blogs</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{route('admin_contact')}}" class="menu-link">
                                    <div data-i18n="Without menu">Add new Blog</div>
                                </a>
                            </li><li class="menu-item">
                                <a href="{{route('admin_contact')}}" class="menu-link">
                                    <div data-i18n="Without menu">Manage Blogs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('admin_feedback')}}" class="menu-link">
                                    <div data-i18n="Without navbar">Blogs Comments</div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                
                    
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

          

                <!-- / Navbar -->

                <!-- Content wrapper -->
                @yield('admin_main')
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="buy-now">
            <a href="{{route('logout')}}"class="btn btn-primary btn-buy-now"><i class="tf-icons bx bx-power-off"></i>Logout</a>
          </div>
    </div>
    <!-- / Layout wrapper -->

  
    <!-- Core JS -->
    <!-- build:js backend/assets/vendor/js/core.js -->
    <script src="../backend/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="../backend/assets/vendor/libs/popper/popper.js"></script>
    <script src="../backend/assets/vendor/js/bootstrap.js"></script>
    <script src="../backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../backend/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../backend/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../backend/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../backend/assets/js/dashboards-analytics.js"></script>
<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
