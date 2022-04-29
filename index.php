<?php
include 'includes/header.php';
$page = 'home';
?>
<main>
    <section class="dashboard-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                    <div class="side-menu">
                        <div>
                            <a class="menu-brand" href="javascript:;"><img class="img-fluid" src="images/logo.png"
                                    alt="logo"></a>
                            <ul class="menu-nav">
                                <li>
                                    <a class="active" href="javascript:;">
                                        <i class="fa-regular fa-house"></i>
                                        <span class="link-txt">Overview</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa-regular fa-memo"></i>
                                        <span class="link-txt">Courses</span>
                                        <span class="qty">1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa-regular fa-envelope-open-text"></i>
                                        <span class="link-txt">certification</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa-regular fa-badge"></i>
                                        <span class="link-txt">badges</span>
                                        <span class="qty">1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa-regular fa-envelope-open-text"></i>
                                        <span class="link-txt">timeline</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a class="logout-btn" href="javascript::"><i class="fa-regular fa-right-from-bracket"></i> Log
                            Out</a>
                    </div>
                </div>
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 pe-lg-5">
                    <div class="dashboard-content">
                        <div class="top-content">
                            <div class="search-field">
                                <span class="icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                <input type="text" placeholder="Search spa services…">
                            </div>
                            <ul class="mid-nav">
                                <li class="dropdown-wrap">
                                    <a class="link-item" href="javascript:;" role="button" id="messagesNotify"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Messages
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="messagesNotify">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-wrap">
                                    <a class="link-item" href="javascript:;" role="button" id="helpNotify"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        help
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="helpNotify">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="end-nav">
                                <li>
                                    <a class="link-item" href="javascript:;" role="button" id="bellNotify"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-bell"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="bellNotify">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="profile-link">
                                    <a class="link-item" href="javascript:;">
                                        <img class="dp-img" src="images/profile-dp.png" alt="">
                                        <span class="profile-name">D.Loper</span>
                                    </a>
                                </li>
                                
                                <li class="dropdown-wrap">
                                    <a class="link-item" href="javascript:;" role="button" id="instructorNotify"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Instructor
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="instructorNotify">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        ul
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>