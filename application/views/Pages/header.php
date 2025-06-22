<?php error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll%40v1.2/animation_utility.css')?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/image/xicon.png')?>">
    <title>LumenVEST - Homepage</title>
</head>

<body>
    <!-- Header -->
    <div id="header" class="fixed-top pt-5 scrollanimation animated fadeIn">
        <nav class="navbar navbar-expand-xl mx-5">
            <div class="container-fluid">
                <div class="logo-container">
                    <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/image/logo.png')?>" alt="" class="img-fluid w-100"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars-staggered accent-color-2"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mb-2 mb-xl-0 gap-xl-4 gap-1">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index-2.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.html">Contact Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="<?php echo base_url('signup.php')?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Header -->