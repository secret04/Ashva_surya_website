<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin/login</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
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
    <link href="<?=base_url()?>/public/backend/assets/css/authentication/auth_2.css" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->
</head>
<body class="login-two">
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
        <p class="neptune-loader-heading">Neptune</p>
    </div>
    <!--  Loader Ends -->
    <!-- Main Body Starts -->
    <div class="container-fluid login-two-container">
        <div class="row main-login-two">
            <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block p-0">
                <div class="login-bg">
                    <div class="left-content-area">
                         <div style="text-align: center;">
                        <img src="<?=base_url()?>/public/images/14.jpg" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                <div class="login-two-start">
                    <h6 class="right-bar-heading px-3 mt-2 text-dark text-center font-30 text-uppercase">Login</h6>
                    <p class="text-center text-muted mt-1 mb-3 font-14">Please Log into your account</p>
                    <?php
                    if(isset($validation)): ?>
                    <div class="alert alert-danger">
                    <?= $validation->listErrors()?>
                    </div>
                    <?php endif; 

                    ?>
                    <?php
                    if(session()->getTempdata('error')): ?>
                    <div class="alert alert-danger"><?=session()->getTempdata('error');?></div>
                    <?php endif; ?>
                    <?=form_open();?>
                    <div class="login-two-inputs mt-5">
                        <input type="email" name="email"  placeholder="Username"/>
                        <i class="las la-user-alt"></i> 
                    </div>
                    <div class="login-two-inputs mt-4">
                        <input type="password" name="password"   placeholder="Password"/> 
                        <i class="las la-lock"></i>
                    </div>
                    <div class="login-two-inputs  mt-4 check">
                        <div class="box">
                            <input id="one" type="checkbox">
                            <span class="check"></span>
                            <label for="one">Remember me</label>
                          </div>
                    </div>
                    <div class="login-two-inputs mt-5 text-center d-flex">
                            <input type="submit" name="login" value="Login" class="btn btn-sm btn-outline-primary btn-login w-100 ml-3 mr-3">
                            <!-- <a class="btn btn-sm btn-outline-primary btn-login w-100 ml-3 mr-3" type="button">
                        Login
                        </a> -->
                    </div>
                    <?=form_close();?>
                    <div class="mt-4 text-center font-12 strong">
                        <a href="auth_forget_password_2.html" class="text-primary">Forgot your Password ?</a>
                    </div>
                    <div class="login-two-inputs mt-4">
                        <div class="find-us-container">
                            <p class="find-us text-center">Continue With</p>
                        </div>
                    </div>
                    <div class="login-two-inputs social-logins mt-4">
                        <div class="social-btn"><a href="javascript:void(0)" class="fb-btn"><i class="lab la-facebook-f"></i></a></div>
                        <div class="social-btn"><a href="javascript:void(0)" class="twitter-btn"><i class="lab la-twitter"></i>
                        </a></div>
                        <div class="social-btn"><a href="javascript:void(0)" class="google-btn"><i class="lab la-google-plus"></i>
                        </a></div>
                    </div>
            </div>
            </div>
        </div>  
    </div>
    <!-- Main Body Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="<?=base_url()?>/public/backend/assets/js/loader.js"></script>
    <script src="<?=base_url()?>/public/backend/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>/public/backend/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/public/backend/assets/js/authentication/auth_2.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>