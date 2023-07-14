<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Original URL: https://demos.wrappixel.com/premium-admin-templates/bootstrap/adminpro-bootstrap/package/html/main/app-contacts.html
Date Downloaded: 2021-12-04 12:37:27 PM !-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, admin pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta name="description" content="Admin Pro is powerful and clean admin dashboard template" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Admin Pro Template by _________ </title>
    <link rel="canonical" href="../../../../../../../www.wrappixel.com/templates/adminpro/index.html" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png" />
    <!-- This page plugin CSS -->
    <link href="../../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="../../../../../../../oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="../../../../../../../cdn.jsdelivr.net/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- -------------------------------------------------------------- -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- -------------------------------------------------------------- -->
    <div class="preloader">
        <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#2962FF" stroke-width="2"></path>
         <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#2962FF" stroke-width="2"></path>
         <path id="teabag" fill="#2962FF" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
         <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#2962FF"></path>
         <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#2962FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
       </svg>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- -------------------------------------------------------------- -->
    <div id="main-wrapper">
        <!-- -------------------------------------------------------------- -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- -------------------------------------------------------------- -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ri-close-line fs-6 ri-menu-2-line"></i>
                    </a>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                 <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                 <!-- Dark Logo icon -->
                 <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                 <!-- Light Logo icon -->
                 <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
               </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                 <!-- dark Logo text -->
                 <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                 <!-- Light Logo text -->
                 <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
               </span>
                    </a>
                    <!-- -------------------------------------------------------------- -->
                    <!-- End Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="more-horizontal" class="feather-sm"></i></a>
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- End Logo -->
                <!-- -------------------------------------------------------------- -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- -------------------------------------------------------------- -->
                    <!-- toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="
                    nav-link
                    sidebartoggler
                    d-none d-md-block
                    waves-effect waves-dark
                  " href="javascript:void(0)"><i data-feather="menu" class="feather-sm"></i></a>
                        </li>
                    </ul>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Right side toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav justify-content-end">
                        <!-- -------------------------------------------------------------- -->
                        <!-- Search -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item d-none d-md-block search-box">
                            <a class="nav-link d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i data-feather="search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter" />
                                <a class="srh-btn"><i data-feather="x" class="feather-sm"></i></a>
                            </form>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- Comment -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="notify">
                                    <span class="heartbit"></span> <span class="point"></span>
                                </div>
                            </a>
                            <div class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    dropdown-menu-animate-up
                  ">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <div class="mb-0 font-weight-medium fs-4">
                                                Notifications
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications position-relative" style="height: 230px">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="btn btn-light-danger text-danger btn-circle">
                             <i data-feather="link" class="feather-sm fill-white"></i>
                           </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                                                        Luanch Admin
                                                    </h5>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">Just see the my ___ admin! </span>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:30 AM </span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="
                              btn btn-light-success
                              text-success
                              btn-circle
                            ">
                             <i data-feather="calendar" class="feather-sm fill-white"></i>
                           </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                                                        Event today
                                                    </h5>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">Just a reminder that ___ have event </span>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:10 AM </span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="btn btn-light-info text-info btn-circle">
                             <i data-feather="settings" class="feather-sm fill-white"></i>
                           </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                                                        Settings
                                                    </h5>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">You can customize this ________ as you want </span>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:08 AM </span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="
                              btn btn-light-primary
                              text-primary
                              btn-circle
                            ">
                             <i data-feather="users" class="feather-sm fill-white"></i>
                           </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                                                        Pavan kumar
                                                    </h5>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">Just see the my _____! </span>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:02 AM </span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);">
                                            <strong>Check all notifications </strong>
                                            <i data-feather="chevron-right" class="feather-sm"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Comment -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- Messages -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="inbox"></i>
                                <div class="notify">
                                    <span class="heartbit"></span> <span class="point"></span>
                                </div>
                            </a>
                            <div class="
                    dropdown-menu
                    mailbox
                    dropdown-menu-end dropdown-menu-animate-up
                  " aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <div class="mb-0 font-weight-medium fs-4">
                                                You have 4 ___ messages
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body position-relative" style="height: 230px">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="user-img position-relative d-inline-block">
                             <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100" />
                             <span class="profile-status rounded-circle online"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                                                        Pavan kumar
                                                    </h5>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">Just see the my _____! </span>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:30 AM </span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="user-img position-relative d-inline-block">
                             <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100" />
                             <span class="profile-status rounded-circle busy"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                                                        Sonu Nigam
                                                    </h5>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              ">I've sung a song! ___ you at </span>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:10 AM </span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="user-img position-relative d-inline-block">
                             <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100" />
                             <span class="profile-status rounded-circle away"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                                                        Arijit Sinh
                                                    </h5>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              ">I am a singer! </span>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:08 AM </span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="user-img position-relative d-inline-block">
                             <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100" />
                             <span class="profile-status rounded-circle offline"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                                                        Pavan kumar
                                                    </h5>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              ">Just see the my _____! </span>
                                                    <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:02 AM </span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);">
                                            <b>See all e-Mails </b>
                                            <i data-feather="chevron-right" class="feather-sm"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Messages -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- Mega Menu -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></a>
                            <div class="dropdown-menu dropdown-menu-animate-up">
                                <div class="mega-dropdown-menu row">
                                    <div class="col-lg-3 col-xlg-2 mb-4">
                                        <h4 class="mb-3">CAROUSEL </h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block img-fluid" src="../../assets/images/big/img1.jpg" alt="First slide" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block img-fluid" src="../../assets/images/big/img2.jpg" alt="Second slide" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block img-fluid" src="../../assets/images/big/img3.jpg" alt="Third slide" />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous </span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next </span>
                                            </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <h4 class="mb-3">ACCORDION </h4>
                                        <!-- Accordian -->
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Accordion Item #1
                             </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        Anim pariatur cliche reprehenderit, ____ eiusmod high life accusamus terry __________ ad squid.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              Accordion Item #2
                             </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        Anim pariatur cliche reprehenderit, ____ eiusmod high life accusamus terry __________ ad squid.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              Accordion Item #3
                             </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        Anim pariatur cliche reprehenderit, ____ eiusmod high life accusamus terry __________ ad squid.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <h4 class="mb-3">CONTACT US </h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name" />
                                                <label>Enter Name </label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <input type="email" class="form-control" placeholder="Enter email" />
                                                <label>Enter Email address </label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                                <label>Enter Message </label>
                                            </div>
                                            <button type="submit" class="btn px-4 rounded-pill btn-info">
                          Submit
                         </button>
                                        </form>
                                    </div>
                                    <div class="col-lg-3 col-xlg-4 mb-4">
                                        <h4 class="mb-3">List style </h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li>
                                                <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                            You ___ give link </a>
                                            </li>
                                            <li>
                                                <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                            Give ____ </a>
                                            </li>
                                            <li>
                                                <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                            Another ____ link </a>
                                            </li>
                                            <li>
                                                <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                            Forth ____ </a>
                                            </li>
                                            <li>
                                                <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                            Another _____ link </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Mega Menu -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- Language -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                  " href="app-contacts.html" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us"></i></a>
                            <div class="
                    dropdown-menu dropdown-menu-end dropdown-menu-animate-up
                  ">
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India </a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French </a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China </a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch </a>
                            </div>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- Profile -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../../assets/images/users/1.jpg" alt="user" width="30" class="profile-pic rounded-circle" />
                            </a>
                            <div class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  ">
                                <div class="
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-primary
                      text-white
                      mb-2
                    ">
                                    <div class="">
                                        <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="60" />
                                    </div>
                                    <div class="ms-2">
                                        <h4 class="mb-0 text-white">Steave Jobs </h4>
                                        <p class="mb-0">varun@gmail.com </p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="#"><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i>
                    My Profile </a>
                                <a class="dropdown-item" href="#"><i data-feather="credit-card" class="feather-sm text-primary me-1 ms-1"></i>
                    My Balance </a>
                                <a class="dropdown-item" href="#"><i data-feather="mail" class="feather-sm text-success me-1 ms-1"></i>
                    Inbox </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="settings" class="feather-sm text-warning me-1 ms-1"></i>
                    Account Setting </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                    Logout </a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-2">
                                    <a href="#" class="btn d-block w-100 btn-primary rounded-pill">View Profile </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- -------------------------------------------------------------- -->
        <!-- End Topbar header -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- -------------------------------------------------------------- -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item user-profile">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <img src="../../assets/images/users/profile.png" alt="user" />
                                <span class="hide-menu">Steve Jobs  </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link p-0">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> My Profile  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link p-0">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> My Balance  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link p-0">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Inbox  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link p-0">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Logout  </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Personal </span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Dashboard
                     <span class="side-badge badge bg-info">4 </span></span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="index.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Minimal </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Analytical  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Demographical  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index4.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Modern  </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="clipboard" class="feather-icon"></i><span class="hide-menu">Page Layouts  </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="layout-inner-fixed-left-sidebar.html" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">
                        _____ Fixed Left Sidebar
                       </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-fixed-right-sidebar.html" class="sidebar-link"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">
                        _____ Fixed Right Sidebar
                       </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-left-sidebar.html" class="sidebar-link"><i class="mdi mdi-format-float-left"></i><span class="hide-menu"> Inner Left Sidebar  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-right-sidebar.html" class="sidebar-link"><i class="mdi mdi-format-float-right"></i><span class="hide-menu"> Inner Right Sidebar  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-fixed-header.html" class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> Fixed Header  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-fixed-sidebar.html" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> Fixed Sidebar  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-fixed-header-sidebar.html" class="sidebar-link"><i class="mdi mdi-view-column"></i><span class="hide-menu">
                        _____ Header &amp; Sidebar
                       </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-boxed-layout.html" class="sidebar-link"><i class="mdi mdi-view-carousel"></i><span class="hide-menu"> Box Layout  </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Apps </span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-calendar.html" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Calendar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-chats.html" aria-expanded="false"><i data-feather="message-circle" class="feather-icon"></i><span class="hide-menu">Chat Apps </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-contacts.html" aria-expanded="false"><i data-feather="phone" class="feather-icon"></i><span class="hide-menu">Contact </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-invoice.html" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Invoice </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-notes.html" aria-expanded="false"><i data-feather="book" class="feather-icon"></i><span class="hide-menu">Notes </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-todo.html" aria-expanded="false"><i data-feather="check-circle" class="feather-icon"></i><span class="hide-menu">Todo </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-taskboard.html" aria-expanded="false"><i data-feather="layout" class="feather-icon"></i><span class="hide-menu">Taskboard </span></a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="mail" class="feather-icon"></i><span class="hide-menu">Inbox  </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="inbox-email.html" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Email  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="inbox-email-detail.html" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Email Detail  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="inbox-email-compose.html" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu"> Email Compose  </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="bookmark" class="feather-icon"></i><span class="hide-menu">Ticket  </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ticket-list.html" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Ticket List  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ticket-detail.html" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Ticket Detail  </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">UI </span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="cpu" class="feather-icon"></i><span class="hide-menu">Ui Elements
                     <span class="side-badge badge bg-danger">25 </span>
                   </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-accordian.html" class="sidebar-link"><i class="mdi mdi-box-shadow"></i><span class="hide-menu"> Accordian </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-badge.html" class="sidebar-link"><i class="mdi mdi-application"></i><span class="hide-menu"> Badge </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu"> Buttons </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Modals </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tab.html" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Tab </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tooltip-popover.html" class="sidebar-link"><i class="mdi mdi-image-filter-vintage"></i><span class="hide-menu"> Tooltip &amp; Popover </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-notification.html" class="sidebar-link"><i class="mdi mdi-message-bulleted"></i><span class="hide-menu"> Notification </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-progressbar.html" class="sidebar-link"><i class="mdi mdi-poll"></i><span class="hide-menu"> Progressbar </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-typography.html" class="sidebar-link"><i class="mdi mdi-format-line-spacing"></i><span class="hide-menu"> Typography </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-bootstrap.html" class="sidebar-link"><i class="mdi mdi-bootstrap"></i><span class="hide-menu"> Bootstrap Ui </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-breadcrumb.html" class="sidebar-link"><i class="mdi mdi-equal"></i><span class="hide-menu"> Breadcrumb </span></a>
                                </li>

                                <li class="sidebar-item">
                                    <a href="ui-offcanvas.html" class="sidebar-link"><i class="mdi mdi-content-copy"></i><span class="hide-menu"> Offcanvas </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-lists.html" class="sidebar-link"><i class="mdi mdi-file-video"></i><span class="hide-menu"> List Media </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-grid.html" class="sidebar-link"><i class="mdi mdi-view-module"></i><span class="hide-menu"> Grid </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-carousel.html" class="sidebar-link"><i class="mdi mdi-view-carousel"></i><span class="hide-menu"> Carousel </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-scrollspy.html" class="sidebar-link"><i class="mdi mdi-application"></i><span class="hide-menu"> Scrollspy </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-toasts.html" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu"> Toasts </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-spinner.html" class="sidebar-link"><i class="mdi mdi-apple-safari"></i><span class="hide-menu"> Spinner </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="copy" class="feather-icon"></i><span class="hide-menu">Cards </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-cards.html" class="sidebar-link"><i class="mdi mdi-layers"></i><span class="hide-menu"> Basic Cards </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-customs.html" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu">Custom Cards </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-weather.html" class="sidebar-link"><i class="mdi mdi-weather-fog"></i><span class="hide-menu">Weather Cards </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-draggable.html" class="sidebar-link"><i class="mdi mdi-bandcamp"></i><span class="hide-menu">Draggable Cards </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="hard-drive" class="feather-icon"></i><span class="hide-menu">Components </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="component-sweetalert.html" class="sidebar-link"><i class="mdi mdi-layers"></i><span class="hide-menu"> Sweet Alert </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-nestable.html" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu">Nestable </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-noui-slider.html" class="sidebar-link"><i class="mdi mdi-weather-fog"></i><span class="hide-menu">Noui slider </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-rating.html" class="sidebar-link"><i class="mdi mdi-bandcamp"></i><span class="hide-menu">Rating </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-toastr.html" class="sidebar-link"><i class="mdi mdi-poll"></i><span class="hide-menu">Toastr </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Widgets  </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="widgets-feeds.html" class="sidebar-link"><i class="mdi mdi-account-box"></i><span class="hide-menu"> Feed Widgets  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-apps.html" class="sidebar-link"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu"> Apps Widgets  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-data.html" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Data Widgets  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-charts.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Charts Widgets </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Forms </span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="layers" class="feather-icon"></i><span class="hide-menu">Form Elements </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-inputs.html" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> Forms Input </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-input-groups.html" class="sidebar-link"><i class="mdi mdi-rounded-corner"></i><span class="hide-menu"> Input Groups </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-input-grid.html" class="sidebar-link"><i class="mdi mdi-select-all"></i><span class="hide-menu"> Input Grid </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-custom-checkbox-radio.html" class="sidebar-link"><i class="mdi mdi-shape-plus"></i><span class="hide-menu">
                        ______ Checkboxes &amp; Radios </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-checkbox-radio.html" class="sidebar-link"><i class="mdi mdi-shape-plus"></i><span class="hide-menu">
                        __________ &amp; Radios </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-touchspin.html" class="sidebar-link"><i class="mdi mdi-switch"></i><span class="hide-menu"> Bootstrap Touchspin </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-switch.html" class="sidebar-link"><i class="mdi mdi-toggle-switch-off"></i><span class="hide-menu"> Bootstrap Switch </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-select2.html" class="sidebar-link"><i class="mdi mdi-relative-scale"></i><span class="hide-menu"> Select2 </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-dual-listbox.html" class="sidebar-link"><i class="mdi mdi-tab-unselected"></i><span class="hide-menu"> Dual Listbox </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Form Layouts </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-vector-difference-ba"></i><span class="hide-menu"> Basic Forms </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-horizontal.html" class="sidebar-link"><i class="mdi mdi-file-document-box"></i><span class="hide-menu"> Form Horizontal </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-actions.html" class="sidebar-link"><i class="mdi mdi-code-greater-than"></i><span class="hide-menu"> Form Actions </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-row-separator.html" class="sidebar-link"><i class="mdi mdi-code-equal"></i><span class="hide-menu"> Row Separator </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bordered.html" class="sidebar-link"><i class="mdi mdi-flip-to-front"></i><span class="hide-menu"> Form Bordered </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-striped-row.html" class="sidebar-link"><i class="mdi mdi-content-duplicate"></i><span class="hide-menu"> Striped Rows </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-detail.html" class="sidebar-link"><i class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form Detail </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-material.html" class="sidebar-link"><i class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form Material </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-floating-input.html" class="sidebar-link"><i class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form Floating Input </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="package" class="feather-icon"></i><span class="hide-menu">Form Addons </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-paginator.html" class="sidebar-link"><i class="mdi mdi-export"></i><span class="hide-menu"> Paginator </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-img-cropper.html" class="sidebar-link"><i class="mdi mdi-crop"></i><span class="hide-menu"> Image Cropper </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-dropzone.html" class="sidebar-link"><i class="mdi mdi-crosshairs-gps"></i><span class="hide-menu"> Dropzone </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-mask.html" class="sidebar-link"><i class="mdi mdi-box-shadow"></i><span class="hide-menu"> Form Mask </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-typeahead.html" class="sidebar-link"><i class="mdi mdi-cards-variant"></i><span class="hide-menu"> Form Typehead </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-custom-switch.html" class="sidebar-link"><i class="mdi mdi-toggle-switch-off"></i><span class="hide-menu"> Custom Switch </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="check-square" class="feather-icon"></i><span class="hide-menu">Form Validation </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-validation.html" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu"> Bootstrap Validation </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-custom-validation.html" class="sidebar-link"><i class="mdi mdi-credit-card-plus"></i><span class="hide-menu"> Custom Validation </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="droplet" class="feather-icon"></i><span class="hide-menu">Form Pickers </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-picker-colorpicker.html" class="sidebar-link"><i class="mdi mdi-calendar-plus"></i><span class="hide-menu"> Form Colorpicker </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-datetimepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-clock"></i><span class="hide-menu"> Form Datetimepicker </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-range"></i><span class="hide-menu">
                        ____ Bootstrap Rangepicker </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-bootstrap-datepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu">
                        ____ Bootstrap Datepicker </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-material-datepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-text"></i><span class="hide-menu">
                        ____ Material Datepicker </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span class="hide-menu">Form Editor </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-editor-ckeditor.html" class="sidebar-link"><i class="mdi mdi-drawing"></i><span class="hide-menu">Ck Editor </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-editor-quill.html" class="sidebar-link"><i class="mdi mdi-drupal"></i><span class="hide-menu">Quill Editor </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-editor-summernote.html" class="sidebar-link"><i class="mdi mdi-brightness-6"></i><span class="hide-menu">Summernote Editor </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-editor-tinymce.html" class="sidebar-link"><i class="mdi mdi-bowling"></i><span class="hide-menu">Tinymce Edtor </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-wizard.html" aria-expanded="false"><i data-feather="credit-card" class="feather-icon"></i><span class="hide-menu">Form Wizard </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-repeater.html" aria-expanded="false"><i data-feather="crop" class="feather-icon"></i><span class="hide-menu">Form Repeater </span></a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Tables </span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="codepen" class="feather-icon"></i><span class="hide-menu">Bootstrap Tables </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="table-basic.html" class="sidebar-link"><i class="mdi mdi-border-all"></i><span class="hide-menu">Basic Table  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-dark-basic.html" class="sidebar-link"><i class="mdi mdi-border-left"></i><span class="hide-menu">Dark Basic Table  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-sizing.html" class="sidebar-link"><i class="mdi mdi-border-outside"></i><span class="hide-menu">Sizing Table  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-layout-coloured.html" class="sidebar-link"><i class="mdi mdi-border-bottom"></i><span class="hide-menu">Coloured Table Layout </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="hard-drive" class="feather-icon"></i><span class="hide-menu">Datatables </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="table-datatable-basic.html" class="sidebar-link"><i class="mdi mdi-border-vertical"></i><span class="hide-menu"> Basic Initialisation </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-datatable-api.html" class="sidebar-link"><i class="mdi mdi-blur-linear"></i><span class="hide-menu"> API </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-datatable-advanced.html" class="sidebar-link"><i class="mdi mdi-border-style"></i><span class="hide-menu">
                        ________ Initialisation </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><i data-feather="disc" class="feather-icon"></i><span class="hide-menu">Table Jsgrid </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.html" aria-expanded="false"><i data-feather="smartphone" class="feather-icon"></i><span class="hide-menu">Table Responsive </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html" aria-expanded="false"><i data-feather="command" class="feather-icon"></i><span class="hide-menu">Table Footable </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-editable.html" aria-expanded="false"><i data-feather="edit-2" class="feather-icon"></i><span class="hide-menu">Table Editable </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-bootstrap.html" aria-expanded="false"><i data-feather="target" class="feather-icon"></i><span class="hide-menu">Table Bootstrap </span></a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Charts </span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-morris.html" aria-expanded="false"><i data-feather="loader" class="feather-icon"></i><span class="hide-menu"> Morris Chart </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-flot.html" aria-expanded="false"><i data-feather="pie-chart" class="feather-icon"></i><span class="hide-menu"> Flot Chart </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chart-js.html" aria-expanded="false"><i data-feather="radio" class="feather-icon"></i><span class="hide-menu">Chartjs </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-sparkline.html" aria-expanded="false"><i data-feather="trello" class="feather-icon"></i><span class="hide-menu">Sparkline Chart </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chartist.html" aria-expanded="false"><i data-feather="slack" class="feather-icon"></i><span class="hide-menu">Chartist Chart </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blur-radial"></i><span class="hide-menu">Apex Charts </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="chart-apex-line.html" class="sidebar-link"><i class="mdi mdi-chart-line"></i>
                       <span class="hide-menu">Line Chart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-area.html" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i>
                       <span class="hide-menu">Area Chart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-bar.html" class="sidebar-link"><i class="mdi mdi-chart-gantt"></i>
                       <span class="hide-menu">Bar Chart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-pie.html" class="sidebar-link"><i class="mdi mdi-chart-pie"></i>
                       <span class="hide-menu">Pie Chart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-radial.html" class="sidebar-link"><i class="mdi mdi-chart-arc"></i>
                       <span class="hide-menu">Radial Chart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-radar.html" class="sidebar-link"><i class="mdi mdi-hexagon-outline"></i>
                       <span class="hide-menu">Radar Chart </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="bar-chart-2" class="feather-icon"></i><span class="hide-menu">C3 Charts </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="chart-c3-axis.html" class="sidebar-link"><i class="mdi mdi-arrange-bring-to-front"></i>
                       <span class="hide-menu">Axis Chart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-c3-bar.html" class="sidebar-link"><i class="mdi mdi-arrange-send-to-back"></i>
                       <span class="hide-menu">Bar Chart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-c3-data.html" class="sidebar-link"><i class="mdi mdi-backup-restore"></i>
                       <span class="hide-menu">Data Chart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-c3-line.html" class="sidebar-link"><i class="mdi mdi-backburger"></i>
                       <span class="hide-menu">Line Chart </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="pie-chart" class="feather-icon"></i><span class="hide-menu">Echarts </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="chart-echart-basic.html" class="sidebar-link"><i class="mdi mdi-chart-line"></i>
                       <span class="hide-menu">Basic Charts </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-echart-bar.html" class="sidebar-link"><i class="mdi mdi-chart-scatterplot-hexbin"></i>
                       <span class="hide-menu">Bar Chart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-echart-pie-doughnut.html" class="sidebar-link"><i class="mdi mdi-chart-pie"></i>
                       <span class="hide-menu">Pie &amp; Doughnut Chart </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Sample Pages </span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="shopping-cart" class="feather-icon"></i><span class="hide-menu">Ecommerce Pages </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="eco-products.html" class="sidebar-link"><i class="mdi mdi-cards-variant"></i>
                       <span class="hide-menu">Products </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-cart.html" class="sidebar-link"><i class="mdi mdi-cart"></i>
                       <span class="hide-menu">Products Cart </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-edit.html" class="sidebar-link"><i class="mdi mdi-cart-plus"></i>
                       <span class="hide-menu">Products Edit </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-detail.html" class="sidebar-link"><i class="mdi mdi-camera-burst"></i>
                       <span class="hide-menu">Product Details </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-orders.html" class="sidebar-link"><i class="mdi mdi-chart-pie"></i>
                       <span class="hide-menu">Product Orders </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-checkout.html" class="sidebar-link"><i class="mdi mdi-clipboard-check"></i>
                       <span class="hide-menu">Products Checkout </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="book-open" class="feather-icon"></i><span class="hide-menu">Sample Pages
                     <span class="side-badge badge bg-success">10 </span>
                   </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="starter-kit.html" class="sidebar-link"><i class="mdi mdi-crop-free"></i>
                       <span class="hide-menu">Starter Kit </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-animation.html" class="sidebar-link"><i class="mdi mdi-debug-step-over"></i>
                       <span class="hide-menu">Animation </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-search-result.html" class="sidebar-link"><i class="mdi mdi-search-web"></i>
                       <span class="hide-menu">Search Result </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-camera-iris"></i>
                       <span class="hide-menu">Gallery </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-treeview.html" class="sidebar-link"><i class="mdi mdi-file-tree"></i>
                       <span class="hide-menu">Treeview </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-block-ui.html" class="sidebar-link"><i class="mdi mdi-codepen"></i>
                       <span class="hide-menu">Block UI </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-session-timeout.html" class="sidebar-link"><i class="mdi mdi-timer-off"></i>
                       <span class="hide-menu">Session Timeout </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-session-idle-timeout.html" class="sidebar-link"><i class="mdi mdi-timer-sand-empty"></i>
                       <span class="hide-menu">Session Idle Timeout </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-utility-classes.html" class="sidebar-link"><i class="mdi mdi-tune"></i>
                       <span class="hide-menu">Helper Classes </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-maintenance.html" class="sidebar-link"><i class="mdi mdi-camera-iris"></i>
                       <span class="hide-menu">Maintenance Page </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span class="hide-menu">Authentication </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="authentication-login1.html" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Login  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-login2.html" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Login 2  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-login3.html" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Login 3  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-register1.html" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Register </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-register2.html" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Register 2 </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-lockscreen.html" class="sidebar-link"><i class="mdi mdi-account-off"></i><span class="hide-menu"> Lockscreen </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-recover-password.html" class="sidebar-link"><i class="mdi mdi-account-convert"></i><span class="hide-menu"> Recover password </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Users </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-user-card.html" class="sidebar-link"><i class="mdi mdi-account-box"></i>
                       <span class="hide-menu"> User Card  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-profile.html" class="sidebar-link"><i class="mdi mdi-account-network"></i><span class="hide-menu"> User Profile </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-user-contacts.html" class="sidebar-link"><i class="mdi mdi-account-star-variant"></i><span class="hide-menu"> User Contact </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="paperclip" class="feather-icon"></i><span class="hide-menu">Invoice </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-vector-triangle"></i><span class="hide-menu"> Invoice Layout  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-invoice-list.html" class="sidebar-link"><i class="mdi mdi-vector-rectangle"></i><span class="hide-menu"> Invoice List </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="map" class="feather-icon"></i><span class="hide-menu">Maps </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="map-google.html" class="sidebar-link"><i class="mdi mdi-google-maps"></i><span class="hide-menu"> Google Map  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="map-vector.html" class="sidebar-link"><i class="mdi mdi-map-marker-radius"></i><span class="hide-menu"> Vector Map </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span class="hide-menu">Icons </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="icon-feather.html" class="sidebar-link"><i class="mdi mdi-feather"></i>
                       <span class="hide-menu"> Feather Icons  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Fontawesome Icons </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-bootstrap.html" class="sidebar-link">
                                        <i class="mdi mdi-emoticon"></i>
                                        <span class="hide-menu"> Bootstrap Icons  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-remix.html" class="sidebar-link">
                                        <i class="mdi mdi-emoticon-cool"></i>
                                        <span class="hide-menu"> Remix Icons </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="activity" class="feather-icon"></i><span class="hide-menu">Timeline </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="timeline-center.html" class="sidebar-link"><i class="mdi mdi-clock-fast"></i>
                       <span class="hide-menu"> Center Timeline  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="timeline-horizontal.html" class="sidebar-link"><i class="mdi mdi-clock-end"></i><span class="hide-menu"> Horizontal Timeline </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="timeline-left.html" class="sidebar-link"><i class="mdi mdi-clock-in"></i><span class="hide-menu"> Left Timeline </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="timeline-right.html" class="sidebar-link"><i class="mdi mdi-clock-start"></i><span class="hide-menu"> Right Timeline </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="mail" class="feather-icon"></i><span class="hide-menu">Email Template </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="email-templete-alert.html" class="sidebar-link"><i class="mdi mdi-message-alert"></i>
                       <span class="hide-menu"> Alert  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="email-templete-basic.html" class="sidebar-link"><i class="mdi mdi-message-bulleted"></i><span class="hide-menu"> Basic </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="email-templete-billing.html" class="sidebar-link"><i class="mdi mdi-message-draw"></i><span class="hide-menu"> Billing </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="email-templete-password-reset.html" class="sidebar-link"><i class="mdi mdi-message-bulleted-off"></i><span class="hide-menu"> Password-Reset </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="user-x" class="feather-icon"></i><span class="hide-menu">Error Pages </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="error-400.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i>
                       <span class="hide-menu"> Error 400  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 403 </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 404 </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 500 </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-503.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 503 </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.1 </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.2 </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-playlist-plus"></i>
                       <span class="hide-menu">Menu 1.3 </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.1 </span></a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.2 </span></a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.3 </span></a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.4 </span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-playlist-check"></i><span class="hide-menu"> item 1.4 </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Extra </span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../../Documentation/document.html" aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span class="hide-menu">Documentation </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Log Out </span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- -------------------------------------------------------------- -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
        <div class="page-wrapper">
            <!-- -------------------------------------------------------------- -->
            <!-- Container fluid  -->
            <!-- -------------------------------------------------------------- -->
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-12 align-self-center">
                        <h3 class="text-themecolor mb-0">Contacts </h3>
                    </div>
                    <div class="
                col-md-7 col-12
                align-self-center
                d-none d-md-flex
                justify-content-end
              ">
                        <ol class="breadcrumb mb-0 p-0 bg-transparent">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home </a>
                            </li>
                            <li class="breadcrumb-item active d-flex align-items-center">
                                Contacts
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- Start Page Content -->
                <!-- -------------------------------------------------------------- -->
                <div class="widget-content searchable-container list">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-4 col-xl-2">
                                <form>
                                    <input type="text" class="form-control product-search" id="input-search" placeholder="Search Contacts..." />
                                </form>
                            </div>
                            <div class="
                    col-md-8 col-xl-10
                    text-end
                    d-flex
                    justify-content-md-end justify-content-center
                    mt-3 mt-md-0
                  ">
                                <div class="action-btn show-btn" style="display: none">
                                    <a href="javascript:void(0)" class="
                        delete-multiple
                        btn-light-danger btn
                        me-2
                        text-danger
                        d-flex
                        align-items-center
                        font-weight-medium
                      ">
                                        <i data-feather="trash-2" class="feather-sm fill-white me-1"></i> Delete All ___ </a>
                                </div>
                                <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info">
                                    <i data-feather="users" class="feather-sm fill-white me-1">
                     </i> Add Contact </a>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header d-flex align-items-center">
                                    <h5 class="modal-title">Contact </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="add-contact-box">
                                        <div class="add-contact-content">
                                            <form id="addContactModalTitle">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 contact-name">
                                                            <input type="text" id="c-name" class="form-control" placeholder="Name" />
                                                            <span class="validation-text text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3 contact-email">
                                                            <input type="text" id="c-email" class="form-control" placeholder="Email" />
                                                            <span class="validation-text text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 contact-occupation">
                                                            <input type="text" id="c-occupation" class="form-control" placeholder="Occupation" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mb-3 contact-phone">
                                                            <input type="text" id="c-phone" class="form-control" placeholder="Phone" />
                                                            <span class="validation-text text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3 contact-location">
                                                            <input type="text" id="c-location" class="form-control" placeholder="Location" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="btn-add" class="btn btn-success rounded-pill px-4">
                      Add
                     </button>
                                    <button id="btn-edit" class="btn btn-success rounded-pill px-4">
                      Save
                     </button>
                                    <button class="btn btn-danger rounded-pill px-4" data-bs-dismiss="modal">
                      Discard
                     </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table search-table v-middle">
                                <thead class="header-item">
                                    <th>
                                        <div class="n-chk align-self-center text-center">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input secondary" id="contact-check-all" />
                                                <label class="form-check-label" for="contact-check-all"></label>
                                                <span class="new-control-indicator"></span>
                                            </div>
                                        </div>
                                    </th>
                                    <th>Name </th>
                                    <th>Email </th>
                                    <th>Location </th>
                                    <th>Phone </th>
                                    <th>Action </th>
                                </thead>
                                <tbody>
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1" />
                                                    <label class="form-check-label" for="checkbox1"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="
                              round
                              rounded-circle
                              text-white
                              d-inline-block
                              text-center
                              bg-info
                            ">EA </span>
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0 font-weight-medium" data-name="Emma Adams">
                                                            Emma Adams
                                                        </h6>
                                                        <small class="user-work text-muted" data-occupation="Web Developer">Web Developer </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="adams@mail.com">adams@mail.com </span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Boston, USA">Boston, USA </span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+1 (070) 123-4567">+91 (070) 123-4567 </span>
                                        </td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox2" />
                                                    <label class="form-check-label" for="checkbox2"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/users/2.jpg" class="rounded-circle" alt="user" width="50" />
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0 font-weight-medium" data-name="Olivia Allen">
                                                            Olivia Allen
                                                        </h6>
                                                        <small class="user-work text-muted" data-occupation="Web Designer">Web Designer </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="allen@mail.com">allen@mail.com </span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Sydney, Australia">Sydney, Australia </span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125) 450-1500 </span>
                                        </td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit">
                                                    <i data-feather="eye" class="feather-sm fill-white"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-dark delete ms-2">
                                                    <i data-feather="trash-2" class="feather-sm fill-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox3" />
                                                    <label class="form-check-label" for="checkbox3"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="
                              round
                              rounded-circle
                              text-white
                              d-inline-block
                              text-center
                              bg-success
                            ">IA </span>
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0" data-name="Isabella Anderson">
                                                            Isabella Anderson
                                                        </h6>
                                                        <small class="user-work text-muted" data-occupation="UX/UI Designer">UX/UI Designer </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="anderson@mail.com">anderson@mail.com </span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Miami, USA">Miami, USA </span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (100) 154-1254">+91 (100) 154-1254 </span>
                                        </td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox4" />
                                                    <label class="form-check-label" for="checkbox4"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/users/4.jpg" alt="avatar" class="rounded-circle" alt="user" width="50" />
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0 font-weight-medium" data-name="Amelia Armstrong">
                                                            Amelia Armstrong
                                                        </h6>
                                                        <small class="user-work text-muted" data-occupation="Ethical Hacker">Ethical Hacker </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="armstrong@mail.com">armstrong@mail.com </span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Tokyo, Japan">Tokyo, Japan </span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (154) 199- 1540">+91 (154) 199- 1540 </span>
                                        </td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox5" />
                                                    <label class="form-check-label" for="checkbox5"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/users/5.jpg" alt="avatar" class="rounded-circle" alt="user" width="50" />
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0 font-weight-medium" data-name="Emily Atkinson">
                                                            Emily Atkinson
                                                        </h6>
                                                        <small class="user-work text-muted" data-occupation="Web developer">Web developer </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="atkinson@mail.com">atkinson@mail.com </span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK </span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (900) 150- 1500">+91 (900) 150- 1500 </span>
                                        </td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox6" />
                                                    <label class="form-check-label" for="checkbox6"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="
                              round
                              rounded-circle
                              text-white
                              d-inline-block
                              text-center
                              bg-info
                            ">SB </span>
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0 font-weight-medium" data-name="Sofia Bailey">
                                                            Sofia Bailey
                                                        </h6>
                                                        <small class="user-work text-muted" data-occupation="UX/UI Designer">UX/UI Designer </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="bailey@mail.com">bailey@mail.com </span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="New York, USA">New York, USA </span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (001) 160- 1845">+91 (001) 160- 1845 </span>
                                        </td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox7" />
                                                    <label class="form-check-label" for="checkbox7"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/users/7.jpg" alt="avatar" class="rounded-circle" alt="user" width="50" />
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0" data-name="Victoria Sharma">
                                                            Victoria Sharma
                                                        </h6>
                                                        <small class="user-work text-muted" data-occupation="Project Manager">Project Manager" </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="sharma@mail.com">sharma@mail.com </span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Miami, USA">Miami, USA </span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (110) 180- 1600">+91 (110) 180- 1600 </span>
                                        </td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox8" />
                                                    <label class="form-check-label" for="checkbox8"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="
                              round
                              rounded-circle
                              text-white
                              d-inline-block
                              text-center
                              bg-danger
                            ">PB </span>
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0 font-weight-medium" data-name="Penelope Baker">
                                                            Penelope Baker
                                                        </h6>
                                                        <small class="user-work text-muted" data-occupation="Web Developer">Web Developer" </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="baker@mail.com">baker@mail.com </span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK </span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (405) 483- 4512">+91 (405) 483- 4512 </span>
                                        </td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- End PAge Content -->
                <!-- -------------------------------------------------------------- -->
            </div>
            <!-- Share Modal -->
            <div class="modal fade" id="Sharemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header d-flex align-items-center">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <i class="ri-share-fill me-2 align-middle"></i> Share With
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info">
                       <i data-feather="user" class="feather-sm fil-white"></i>
                     </button>
                                    <input type="text" class="form-control" placeholder="Enter Name Here" aria-label="Username" />
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <a href="#Whatsapp" class="text-success">
                                            <i class="display-6 ri-whatsapp-fill"></i><br /><span class="text-muted">Whatsapp </span>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#Facebook" class="text-info">
                                            <i class="display-6 ri-facebook-fill"></i><br /><span class="text-muted">Facebook </span>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#Instagram" class="text-danger">
                                            <i class="display-6 ri-instagram-fill"></i><br /><span class="text-muted">Instagram </span>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#Skype" class="text-cyan">
                                            <i class="display-6 ri-skype-fill"></i><br /><span class="text-muted">Skype </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                   </button>
                                <button type="submit" class="btn btn-success">
                     <i class="ri-send-plane-fill align-middle"></i> Send
                   </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- End Container fluid  -->
            <!-- -------------------------------------------------------------- -->
            <!-- -------------------------------------------------------------- -->
            <!-- footer -->
            <!-- -------------------------------------------------------------- -->
            <footer class="footer text-center">
                All Rights Reserved by ________ admin.
            </footer>
            <!-- -------------------------------------------------------------- -->
            <!-- End footer -->
            <!-- -------------------------------------------------------------- -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- customizer Panel -->
    <!-- -------------------------------------------------------------- -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"><i data-feather="settings" class="feather-sm fa fa-spin"></i></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="ri-tools-fill fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="ri-message-3-line fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="ri-timer-line fs-6"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-3 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-weight-medium mb-2 mt-2">Layout Settings </h5>
                        <div class="form-check mt-3">
                            <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view" />
                            <label class="form-check-label" for="theme-view">
                   <span>Dark Theme </span>
                 </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar" id="collapssidebar" />
                            <label class="form-check-label" for="collapssidebar">
                   <span>Collapse Sidebar </span>
                 </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="sidebar-position" class="form-check-input" id="sidebar-position" />
                            <label class="form-check-label" for="sidebar-position">
                   <span>Fixed Sidebar </span>
                 </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="header-position" class="form-check-input" id="header-position" />
                            <label class="form-check-label" for="header-position">
                   <span>Fixed Header </span>
                 </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout" />
                            <label class="form-check-label" for="boxed-layout">
                   <span>Boxed Layout </span>
                 </label>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds </h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds </h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds </h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll position-relative">
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_1" data-user-id="1">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle online"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:30 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_2" data-user-id="2">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle busy"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've sung a song! ___ you at </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:10 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_3" data-user-id="3">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle away"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I am a singer! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_4" data-user-id="4">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Nirav Joshi </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_5" data-user-id="5">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Sunil Joshi </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_6" data-user-id="6">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Akshay Kumar </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_7" data-user-id="7">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_8" data-user-id="8">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Varun Dhavan </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline </h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm </span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark </div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="../../assets/images/users/2.jpg" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago </span>
                                </div>
                                <div class="desc">Contrary to popular belief </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="../../assets/images/users/1.jpg" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen </a>
                                    <span class="sl-date">5 minutes ago </span>
                                </div>
                                <div class="desc">Approve meeting with tiger </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm </span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark </div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="../../assets/images/users/4.jpg" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago </span>
                                </div>
                                <div class="desc">Contrary to popular belief </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="../../assets/images/users/6.jpg" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen </a>
                                    <span class="sl-date">5 minutes ago </span>
                                </div>
                                <div class="desc">Approve meeting with tiger </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/feather.min.js"></script>
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="../../dist/js/pages/contact/contact.js"></script>
</body>

</html>