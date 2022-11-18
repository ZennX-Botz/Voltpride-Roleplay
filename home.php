<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM players WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">



    <title>
              DARKNESIA UCP          </title>

    <link href="template/css/font-face.css" rel="stylesheet" media="all">
    <link href="template/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link href="template/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="template/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="template/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="template/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="template/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/jquery/jquery-ui.min.css" rel="stylesheet" media="all">
    <link href="template/css/select2-bootstrap4.min.css" rel="stylesheet" media="all">


    <link href="template/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
          <header class="header-mobile d-block d-lg-none">
  <div class="header-mobile__bar">
      <div class="container-fluid">
          <div class="header-mobile-inner">
              <a class="logo" href="home">
                <div class="row d-flex align-items-center">
                    
                    <div class="col">
                                                    <h4>DARKNESIA UCP</h4>
                                            </div>
                </div>
              </a>
              <button class="hamburger hamburger--slider" type="button">
                  <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                  </span>
              </button>
          </div>
      </div>
  </div>
  <nav class="navbar-mobile">
      <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
                            <li class="active">
  <a href="https://localhost/phpmailerucp/home">
    <i class="fas fa-desktop"></i>
    Dashboard
  </a>
</li>
<li class="">
  <a href="https://localhost/poject/veh">
    <i class="fas fa-car"></i>
    Kendaraan
  </a>
</li>                      </ul>
      </div>
  </nav>
</header>
          <aside class="menu-sidebar d-none d-lg-block">
  <div class="logo">
		<a href="home">
			<div class="row d-flex align-items-center">
				
				<div class="col">
											<h4>DARKNESIA UCP</h4>
									</div>
			</div>
		</a>
  </div>
  <div class="menu-sidebar__content js-scrollbar1">
		<nav class="navbar-sidebar">
			<ul class="list-unstyled navbar__list">
									<li class="active">
  <a href="https://localhost/phpmailerucp/home">
    <i class="fas fa-desktop"></i>
    Dashboard
  </a>
</li>
<li class="">
  <a href="https://localhost/project/veh">
    <i class="fas fa-car"></i>
    Kendaraan
  </a>
</li>							</ul>
		</nav>
  </div>
</aside>
        <div class="page-container">
              <header class="header-desktop">
  <div class="section__content section__content--p30">
      <div class="container-fluid">
          <div class="header-wrap d-flex justify-content-end">
              <div class="header-button justify-content-center">
                  <div class="account-wrap d-flex flex-row align-items-center">
                      <div class="account-item clearfix js-item-menu">
                          
                          <div class="content">
                              <a class="js-acc-btn d-flex flex-row" href="#">
                                  <div>
                                  <?php echo $fetch_info['username'] ?> 
                                                                      </div>
                              </a>
                          </div>
                          <div class="account-dropdown js-dropdown">
                              <div class="info clearfix">
                                  
                                  <div class="content">
                                      <h5 class="name">
                                      <?php echo $fetch_info['username'] ?> 
                                      </h5>
                                      <span class="email">
                                      <?php echo $fetch_info['email'] ?> 
                                      </span>
                                  </div>
                              </div>
                              <div class="account-dropdown__body">
                                  <div class="account-dropdown__item">
                                      <a href="#">
                                          <i class="fa fa-user"></i>Profile</a>
                                  </div>
                                  
                              </div>
                              <div class="account-dropdown__footer">
                                  
                                    <a href="logout-user.php" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>Logout
                                    </a>
                                    
                                    <form id="logout-form" action="logout-user.php" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="7bBTadBaMC8tGYByHFytGQ82XVzD6a6LdG9qgQEr">
                                    </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Dashboard</h2>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-12 mb-4 mb-lg-0">
            <div class="au-card">
                <div class="au-card-inner">
                    <h3>Selamat datang <?php echo $fetch_info['username'] ?> di halaman UCP!</h3> 
                                            <p class="text-danger">
                            Selamat Bermain Di Server DarkNesia</a>
                        </p>
                                    </div>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-12 col-lg-6 mb-4 mb-lg-0">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user"></i>
                    <strong class="card-title pl-2">Character Info</strong>
                </div>
                <div class="card-body">
                    <div class="mx-auto d-block">
                    <img class="mx-auto d-block" 
                                                src="https://assets.open.mp/assets/images/skins/<?php echo $fetch_info['skin'] ?>.png" alt="Character Image"> 
                                                <h5 class="text-center mt-3 mb-1">
                        <?php echo $fetch_info['username'] ?>
                        </h5>
                        <div class="location text-center">
                            <p>
                                <?php echo $fetch_info['age'] ?> 
                                                            </p>
                            <p>Level: <?php echo $fetch_info['level'] ?></p>
                            <p>Uang: <span class="num_format"><?php echo $fetch_info['money'] ?></span></p> 
                            <p>Bank: <span class="num_format"><?php echo $fetch_info['bmoney'] ?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
</div>
                </div>
            </div>
        </div>

    </div>

    <script src="template/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="template/vendor/jquery/jquery-ui.min.js"></script>
    <script src="template/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="template/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="template/vendor/slick/slick.min.js">
    </script>
    <script src="template/vendor/wow/wow.min.js"></script>
    <script src="template/vendor/animsition/animsition.min.js"></script>
    <script src="template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="template/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="template/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="template/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="template/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="template/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="template/vendor/select2/select2.min.js">
    </script>
    <script src="template/js/moment.js"></script>
    <script src="template/js/bootstrap-datetimepicker.js"></script>
    <script src="template/js/sweetalert.min.js"></script>
    <script src="template/js/main.js"></script>
</body>

</html>