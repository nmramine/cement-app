<?php
require_once('function/get_profile_info.php');
require_once('function/check_login.php');
require_once('function/get_profile_prog.php');
require_once('function/get_profile_cmnd_list.php');
require_once('function/del_cmnd.php');
require_once('function/get_cmnd_prog.php');
if(isset($_COOKIE['ids'])) {
$cookiz=$_COOKIE['ids'];
if (check_login($cookiz)==false){
	//delete existing cookiz
	setcookie("ids", "", time() - 3600);
	header("Location: login.php");
	}else{
	$profile=get_profile_info($cookiz);
	}
}else{
	header("Location: login.php");
	}



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SCT | Espace Clients</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->


    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SCT Espace Clients</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Programme
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=1" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Mes Commandes
              </p>
            </a>
          </li>
		            <li class="nav-item">
            <a href="index.php?page=2" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                New
              </p>
            </a>
          </li>
		            <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Déconnecté
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
<?php
	if (isset($_GET['page'])){
switch ($_GET['page']) {
    case "1":
        $file_include="commands.php";
		$res=get_profile_cmnd_list($profile['id_user']);
        break;
    case "2":
        $file_include="new.php";
        break;
	case "3":
        $file_include="programme.php";
		$res = get_profile_prog($_GET['id']);
        break;
	case "4":
        del_cmnd($_GET['id']);
		header("Location: index.php?page=1");
        break;
    default:
        $file_include="programme.php";
		$res=get_profile_prog($profile['id_user']);
}
}else{
$file_include="programme.php";
$res=get_profile_prog($profile['id_user']);

}
include($file_include);
?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
