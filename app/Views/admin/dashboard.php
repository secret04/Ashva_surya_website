<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>AshvaSurya_admin </title>
    <link rel="icon" type="image/x-icon" href="<?=base_url()?>/public/backend/assets/img/common-assets/img/favicon.ico"/>
    <!-- Common Styles Starts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>/public/backend/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/backend/assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/backend/assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/backend/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/backend/plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="<?=base_url()?>/public/backend/assets/css/loader.css" rel="stylesheet" type="text/css" />  
    <link href="<?=base_url()?>/public/backend/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>/public/backend/assets/css/dashboard/dashboard_1.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/backend/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>/public/backend/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>/public/backend/assets/css/elements/tooltip.css" rel="stylesheet" type="text/css" />
    <!-- Page Level Plugin/Style Ends -->
</head>
<body>

    <!-- Loader Starts -->
    <div id="load_screen"> 
        <div class="boxes">
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
        </div>
        <p class="neptune-loader-heading">Mine</p>
    </div>
    <!--  Loader Ends -->
    <!--  Navbar Starts  -->
    <div class="header-container fixed-top p=5">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item theme-brand flex-row text-center">
                <li class="nav-item theme-logo">
                    <a href="<?=base_url()?>admin/home/dashboard/">
                        <img src="<?=base_url()?>/public/images/14.jpg" class="navbar-logo" alt="logo">
                    </a>
                </li>
            </ul>       
            <ul class="navbar-item flex-row ml-md-auto">
                <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
                    <a class="nav-link full-screen-mode" href="javascript:void(0);">
                        <i class="las la-compress" id="fullScreenIcon"></i>
                    </a>
                </li>
            </ul>
            
        </header>
    </div>
    <!--  Navbar Ends  -->
    <!--  Main Container Starts  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="rightbar-overlay"></div>
        <!--  Sidebar Starts  -->
        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <ul class="list-unstyled menu-categories" id="accordionExample">
                   
                    <li class="menu-title mt-5">Admin</li>
                    <li class="menu">
                        <a href="<?=base_url()?>Admin/Approvals"      aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-lock"></i>
                                <span>Advertisments</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="<?=base_url()?>Admin/News"  aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-lock"></i>
                                <span>Newses </span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="<?=base_url()?>Admin/Setcontacts"  aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-lock"></i>
                                <span>Company Requirments</span>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="menu">
                        <a href="<?=base_url()?>Admin/Logout" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-desktop"></i>
                                <span>Logout</span>
                            </div>
                        </a>
                    </li> -->
                </ul>
            </nav>
        </div>
        <!--  Sidebar Ends  -->
         <!--  Content Area Starts  -->
        <div id="content" class="main-content">
           
            <!-- Main Body Starts -->
            <div class="layout-px-spacing text-center">
                <h1>Welcome to Admin panel</h1>
    <img src="<?=base_url()?>/public/images/pic.jpg" width="100%" height="350px" alt="">
<video controls>
    <source src="<?php echo base_url(); ?>" type="video/mp4">
    <!-- Add additional video formats as needed -->
    Your browser does not support the video tag.
</video>
            </div>
            <!-- Main Body Ends -->
            
          


            <!-- Copyright Footer Starts -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2023 <a target="_blank" href="#">NEWS EVENTS</a>,  Powered By: <a>Shreshshta</a><i class="las la-heart text-primary"></i></p>
                </div>
                <div class="footer-section f-section-2">
                    <p class=""></i>Developed with extra <i class="las la-heart text-primary"></i></p>
                </div>
            </div>
            <!-- Copyright Footer Ends -->
            <!-- Arrow Starts -->
            <div class="scroll-top-arrow" style="display: none;">
                <i class="las la-angle-up"></i>
            </div>
            <!-- Arrow Ends -->
        </div>
        <!--  Content Area Ends  -->
        <!--  Rightbar Area Starts -->
        <div class="right-bar">
            <div class="h-100">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link  active" data-toggle="tab" href="#chat-tab" role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#status-tab" role="tab" aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#settings-tab" role="tab" aria-selected="false">
                                                <i class="las la-cog"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Rightbar Area Ends -->
    </div>
    <!-- Main Container Ends -->
    <!-- Common Script Starts -->
    <script src="<?=base_url()?>/public/backend/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>/public/backend/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url()?>/public/backend/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/public/backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url()?>/public/backend/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?=base_url()?>/public/backend/assets/js/custom.js"></script>
    <!-- Common Script Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="<?=base_url()?>/public/backend/assets/js/loader.js"></script>
    <script src="<?=base_url()?>/public/backend/plugins/apex/apexcharts.min.js"></script>
    <script src="<?=base_url()?>/public/backend/plugins/flatpickr/flatpickr.js"></script>
    <script src="<?=base_url()?>/public/backend/assets/js/dashboard/dashboard_1.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>