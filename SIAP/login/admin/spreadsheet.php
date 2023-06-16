<?php
include '../koneksi.php';
session_start();
if ($_SESSION['status'] != "sudah_login") {
    header("location:../login.php");
} elseif ($_SESSION['level'] != "admin") {
    header("location:../user/index.php");
}
?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard - <?php echo $_SESSION['nama']; ?></title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
    <!-- Style CSS (White)-->
    <link rel="stylesheet" href="assets/css/White.css">
    <!-- Style CSS (Dark)-->
    <link rel="stylesheet" href="assets/css/Dark.css">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
    <!-- Icon LineAwesome CSS-->
    <link rel="stylesheet" href="assets/vendors/lineawesome/css/line-awesome.min.css">

</head>

<body>

    <!--Topbar -->
    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="las la-bars"></i>
            </button>
        </div>
        <div class="menu">

            <ul>

                <li>
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" title="Dark Or White" />
                            Dark Mode
                            <div class="slider round"></div>
                        </label>
                    </div>
                </li>

                <li>
                    <div class="dropdown">
                        <div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><?php echo $_SESSION['nama']; ?></span>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownProfile">
                            <a class="dropdown-item" href="../logout.php">
                                <i class="las la-sign-out-alt mr-2"></i> Sign Out
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--Sidebar-->
    <div class="sidebar transition overlay-scrollbars">
        <div class="logo">
            <h2 style="font-weight: 700;" class="mb-0"><span style="font-weight: 500;">Admin</span></h2>
        </div>

        <div class="sidebar-items">
            <div class="accordion" id="sidebar-items">
                <ul>

                    <p class="menu">Apps</p>

                    <li>
                        <a href="index.php" class="items">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>


                    <p class="menu">Admin Menu</p>

                    <li id="headingTwo">
                        <a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas la-wrench"></i>
                            <span>Abilities</span>
                            <i class="fas la-angle-right"></i>
                        </a>
                    </li>
                    <div id="collapseTwo" class="collapse submenu" aria-labelledby="headingTwo" data-parent="#sidebar-items">
                        <ul>

                            <li>
                                <a href="profileadjust/authlevels.php">Authorization Levels</a>
                            </li>
                            <li>
                                <a href="profileadjust/approval.php">User Permissions</a>
                            </li>

                        </ul>
                    </div>

                    <p class="menu">Pages</p>

                    <li id="headingThree">
                        <a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                            <i class="fas la-cog"></i>
                            <span>Tables</span>
                            <i class="fas la-angle-right"></i>
                        </a>
                    </li>
                    <div id="collapsefour" class="collapse submenu" aria-labelledby="headingThree" data-parent="#sidebar-items">
                        <ul>

                            <li>
                                <a href="kerja.php">Kerja</a>
                            </li>

                            <li>
                                <a href="kerjakuliah.php">Kerja dan Kuliah</a>
                            </li>

                            <li>
                                <a href="kuliah.php">Kuliah</a>
                            </li>

                            <li>
                                <a href="mencrkrj.php">Mencari Kerja</a>
                            </li>

                            <li>
                                <a href="usaha.php">Usaha</a>
                            </li>

                            <li>
                                <a href="search.php">- Cari Data -</a>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <li id="headingFour">
                            <a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseChart" aria-expanded="true" aria-controls="collapseChart">
                                <i class="fas la-chart-pie"></i>
                                <span>Charts</span>
                                <i class="fas la-angle-right"></i>
                            </a>
                        </li>
                        <div id="collapseChart" class="collapse submenu" aria-labelledby="headingFour" data-parent="#sidebar-items">
                            <ul>
                                <!-- Chart di dalam tabel kerja -->
                                <li>
                                    <p>Kerja</p>
                                </li>
                                <li>
                                    <a href="chartjumlahtahunkerja.php">Total Tahun Masuk Kerja</a>
                                </li>

                                <!-- Chart di dalam tabel Kerja dan Kuliah -->
                                <li>
                                    <p>Kerja dan Kuliah</p>
                                </li>
                                <li>
                                    <a href="ckerkulprodijumlah.php">Alumni Kerja dan Kuliah</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <li id="headingFive">
                        <a href="spreadsheet.php" class="submenu-items">
                            <i class="fas la-file-excel"></i>
                            <span>Spreadsheet</span>
                        </a>
                    </li>
            </div>
        </div>
    </div>
    </div>

    <div class="sidebar-overlay"></div>


    <!-- Content Start -->
    <div class="content transition">
        <div class="container-fluid dashboard">
            <center>
                <form action="hasilspreadsheet.php">
                    <h4>Export Data ke Spreadsheet</h4>
                    <button type="submit" class="btn btn-primary btn-icon" name="submit">
                        <i class="fas fa-save icon-button"></i>
                        Spreadsheet
                    </button>
                </form>
            </center>
        </div>
    </div>


    <!-- Loader -->
    <div class="loader">
        <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="loader-overlay"></div>

    <!-- Library Javascipt-->
    <script src="assets/vendors/bootstrap/js/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>