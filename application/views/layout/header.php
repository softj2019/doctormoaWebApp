<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta property="og:image" content="/assets/img/ci/kogas_ci.png">
	<title>근거리</title>
	<link rel="shortcut icon" type="image⁄x-icon" href="assets/dist/img/ci/kogas_ci.ico">

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="/assets/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/plugins/daterangepicker/daterangepicker.css" />
	<!-- Toast -->
	<link rel="stylesheet" href="/assets/plugins/toast/jquery.toast.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
<!--	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
	<!-- summernote -->
	<link rel="stylesheet" href="/assets/plugins/summernote/summernote-bs4.css">

	<link rel="stylesheet" href="/assets/dist/css/common.css">
	<script>
		var base_url ='<?=base_url()?>';
	</script>
</head>
<body class="sidebar-mini layout-navbar-fixed ">
<div class="wrapper">

	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
		</ul>
		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<!-- Messages Dropdown Menu -->

			<li class="nav-item">
				<a class="nav-link" href="https://kauth.kakao.com/oauth/logout?client_id=a0c10d1fa237662ef92188216ee55180&logout_redirect_uri=<?=base_url("/member/logout")?>">
					<i class="fas fa-power-off"></i>로그아웃
			</a>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="/" class="brand-link">
			<span class="brand-text font-weight-light">Admin</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

					<?php if(@$this->session->userdata('is_admin')) {?>
					<li class="nav-item">
						<a href="javascript:void(0);" class="nav-link" data-toggle="modal" data-target="#modal-user">
							<p>
								<?=@$this->session->userdata('name')?>
								<span class="badge badge-info right">
									<i class="fas fa-user"></i> &nbsp;MyPage
								</span>
							</p>
						</a>
					</li>
					<?php }?>

					<?php if(@$this->session->userdata('is_admin')) {?>

					<li class="nav-item">
						<a href="/console/mguser" class="nav-link <?=$menu_code=='009'?'active':''?>">
							<i class="far fa-circle nav-icon"></i>
							<p>사용자관리</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="/console/stibee" class="nav-link <?=$menu_code=='0013'?'active':''?>">
							<i class="far fa-circle nav-icon"></i>
							<p>구독자관리</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="/console/loginhistory" class="nav-link <?=$menu_code=='011'?'active':''?>" >
							<i class="far fa-circle nav-icon"></i>
							<p>로그인 이력</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="/console/boardlist?board_type=A" class="nav-link <?=$menu_code=='012'?'active':''?>" >
							<i class="far fa-circle nav-icon"></i>
							<p>게시판 관리</p>
						</a>
					</li>

					<?php } ?>

				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark"><?php echo $page_title; ?></h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active"><?php echo $page_title; ?></li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->
