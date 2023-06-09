<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sairiki.in/admin </title>
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
    <!--  Navbar Starts  -->
    <div class="header-container fixed-top p=5">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item theme-brand flex-row text-center">
                <li class="nav-item theme-logo">
                    <a href="<?=base_url()?>Admin/Dashboard/">
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
    
        
        <!--  Sidebar Starts  -->
        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <ul class="list-unstyled menu-categories" id="accordionExample">
                   
                    <li class="menu-title mt-5">Admin</li>
                    <li class="menu">
                        <a href="<?=base_url()?>Admin/Advertisements"      aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-lock"></i>
                                <span>Advertisments</span>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="menu">
                        <a href="<?=base_url()?>Admin/Notification"  aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-lock"></i>
                                <span>Notifications </span>
                            </div>
                        </a>
                    </li> -->
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
                
                </ul>
            </nav>
        </div>
    
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