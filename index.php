<?php
include 'includes/header.php';
$page = 'home';
?>
<main>
    <section class="dashboard-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12">
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
                <div class="col-xxl-10 col-xl-10 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="dashboard-content">
                        <div class="top-content">
                            <div class="search-field">
                                <span class="icon"><i class="fa-regular fa-magnifying-glass"></i></span>
                                <input type="text" placeholder="Search spa services…">
                            </div>
                            <ul class="">
                                <li></li>
                            </ul>
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