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
                        <ul class="top-card-listing panel">
                            <li class="card-content">
                                <div class="featured-img"><img class="img-fluid" src="images/featured-1.png" alt="">
                                </div>
                                <div class="featured-info">
                                    <h4>d. loper</h4>
                                    <h6><a href="mailto:mark.developer50@gmail.com">mark.developer50@gmail.com</a></h6>
                                    <ul>
                                        <li><a href="javascript:;">Super Admin</a></li>
                                        <li><a href="javascript:;">Account Owner</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="card-content export-excel">
                                <a class="card-cntnt-a" href="javascript:;">
                                    <div class="icon-img"><img src="images/icon-1.png" alt=""></div>
                                    <h5>Export in Excel</h5>
                                </a>
                            </li>
                            <li class="card-content profile-card">
                                <a class="card-cntnt-a" href="javascript:;">
                                    <div class="icon-img"><img src="images/icon-2.png" alt=""></div>
                                    <h5>Profile</h5>
                                </a>
                            </li>
                            <li class="card-content progress-card">
                                <a class="card-cntnt-a" href="javascript:;">
                                    <div class="icon-img"><img src="images/icon-3.png" alt=""></div>
                                    <h5>Progress</h5>
                                </a>
                            </li>
                            <li class="card-content infographics-card">
                                <a class="card-cntnt-a" href="javascript:;">
                                    <div class="icon-img"><img src="images/icon-4.png" alt=""></div>
                                    <h5>Infographics</h5>
                                </a>
                            </li>
                        </ul>
                        <ul class="overview-info">
                            <li>
                                <img class="img-fluid graph" src="images/graph-1.png" alt="">
                                <div class="info-txt">
                                    <h6>Courses in progress</h6>
                                    <h3>+12</h3>
                                </div>
                            </li>
                            <li>
                                <img class="img-fluid graph" src="images/graph-2.png" alt="">
                                <div class="info-txt">
                                    <h6>Completed Courses</h6>
                                    <h3>+49</h3>
                                </div>
                            </li>
                            <li>
                                <span class="tag">-2.5%</span>
                                <img class="img-fluid graph" src="images/graph-3.png" alt="">
                                <div class="info-txt">
                                    <h6>Courses not started</h6>
                                    <h3>+45</h3>
                                </div>
                            </li>
                            <li>
                                <span class="tag">-2.5%</span>
                                <img class="img-fluid graph" src="images/graph-4.png" alt="">
                                <div class="info-txt">
                                    <h6>Training time</h6>
                                    <h3>0h 0m</h3>
                                </div>
                            </li>                            
                            <li>
                                <img class="img-fluid graph" src="images/graph-5.png" alt="">
                                <div class="info-txt">
                                    <h6>Badges</h6>
                                    <h3>+49</h3>
                                </div>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 panel">
                                <div class="icalendar h-100">
                                    <div class="icalendar__month">
                                        <div class="icalendar__current-date">
                                            <h2>Activity</h2>
                                            <h2 id="icalendarMonth" class="icalendarMonth"></h2>
                                        </div>
                                        <div class="calendar-sd">
                                            <p>3 logins last week · 3 logins last month · last login: A few moments ago
                                            </p>
                                            <div class="arrow-date">
                                                <button onclick="moveDate('prev')"><i
                                                        class="fa-solid fa-caret-left"></i></button>
                                                <button onclick="moveDate('next')"><i
                                                        class="fa-solid fa-caret-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icalendar__week-days">
                                        <h6>Sun</h6>
                                        <h6>Mon</h6>
                                        <h6>Tue</h6>
                                        <h6>Wed</h6>
                                        <h6>Thu</h6>
                                        <h6>Fri</h6>
                                        <h6>Sat</h6>
                                    </div>
                                    <div class="icalendar__days"></div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 panel">
                                <div class="award-wrapper h-100">
                                    <h3>recently earned</h3>
                                    <div>
                                        <img class="img-fluid" src="images/badge.png" alt="" class="badge">
                                        <p>You haven't earned any badges yet.<span>Don't give up!</span></p>
                                    </div>
                                    <a href="javascript:;">View all badges <i class="fa-solid fa-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 panel">
                                <div class="progress-overview h-100">
                                    <div class="header">
                                        <h2>progress overview</h2>
                                        <h3>
                                            <a href="javascript:;">View infographics <i
                                                    class="fa-solid fa-chevron-down"></i></a>
                                        </h3>
                                    </div>
                                    <div class="smiley-wrapper">
                                        <img class="img-fluid" src="images/smiley.png" alt="">
                                        <h4>60.9%</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
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