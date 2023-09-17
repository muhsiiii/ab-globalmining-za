<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ab </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./SLAVA _ Dashboard - Login_files/adminlte.min.css">
</head>
<body class="sidebar-mini layout-fixed" style="min-height: 334px;">
	<!-- Content Wrapper. Contains page content -->
	<div class="row login-page">
		<div class="login-box">
			<!-- /.login-logo -->
			<div class="card card-outline card-primary" style="border-top: 3px solid #000;border-radius: 20px;">
				<div class="card-header text-center">
					<a href="https://slava.erebs.in/login#" class="h1" style="line-height: 1.5">
						<img style="width: 60px;height: auto;" src="/./images/logo-a-b.png" alt="a&amp;b-logo">
					</a>
				</div>
				<div class="card-body">
					<p style="color:red;text-align:center;">@if(session()->has('message')) {{session()->get('message')}} @endif</p>
					<!-- <p class="login-box-msg" style="font-weight: 600;">Sign in to start your Session.</p> -->
					<form method="post" action="{{route('dologin')}}" class="mb-2" role="form" id="loginForm" novalidate="novalidate">
						@csrf
						<div class="input-group mb-3">
							<div class="input-group-append">
								<div class="input-group-text">
									<img style="width: 18px;height: auto;" src="./SLAVA _ Dashboard - Login_files/user-3-fill.svg" alt="">
								</div>
							</div>
							<input type="text" id="mobile" name="username" class="form-control" placeholder="User Name" aria-invalid="false">
							<div class="invalid-feedback">user name Required.</div>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<div class="input-group-text">
									<img style="width: 18px;height: auto;" src="./SLAVA _ Dashboard - Login_files/lock-fill.svg" alt="">
								</div>
							</div>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-invalid="false">
							<div class="invalid-feedback">Password Required.</div>
						</div>
						<div class="row">
							<div class="offset-8 col-4 mt-2">
								<button type="submit" id="loginButton" class="btn slava-primary-bg btn-block text-white"><b>Sign In</b></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<style>
		.card-body>.table>thead>tr>th {
			text-align: center;
		}

		.thtd-wordbreak {
			word-wrap: break-word !important;
			max-width: 180px;
			white-space: normal !important;
			word-break: break-all !important;
			font-size: 14px !important;
			min-width: 140px !important;
		}

		.slava-secendory-bg,
		.slava-primary-bg {
			color: #FFF !important;
			min-width: 80px;
		}

		.table td {
			vertical-align: middle;
		}

		.sidebar-mini .main-sidebar .nav-link,
		.sidebar-mini-md .main-sidebar .nav-link,
		.sidebar-mini-xs .main-sidebar .nav-link {
			width: auto !important;
		}

		.nav-item.has-treeview {
			width: 100%;
		}

		.hide {
			display: none !important;
		}

		.card-footer.clearfix {
			padding: 10px 0px !important;
			background-color: #FFF;
		}

		.pagination {
			margin-bottom: 0px;
		}

		.slava-primary-bg {
			background: #000000 !important;
			border: 1px solid #000 !important;
		}

		.fa-add-new {
			font-size: 60px;
			position: fixed;
			bottom: 80px;
			right: 70px;
			color: #000 !important;
		}

		.btn.btn-danger,
		.btn.btn-warning,
		.btn.btn-primary {
			font-weight: 500 !important;
			color: #FFF !important;
		}

		.main-sidebar .brand-text,
		.main-sidebar .logo-xl,
		.main-sidebar .logo-xs,
		.sidebar .nav-link p,
		.sidebar .user-panel .info {
			font-size: 14px;
		}

		.nav-sidebar .nav-link>.right,
		.nav-sidebar .nav-link>p>.right {
			right: 5px;
			top: 9px;
			padding: 7px;
		}

		.border-left-danger {
			border-left: .25rem solid #dc3545 !important;
		}

		.border-left-primary {
			border-left: .25rem solid #4e73df !important;
		}

		.border-left-secondary {
			border-left: .25rem solid #6c757d !important;
		}

		.border-left-indigo {
			border-left: .25rem solid #6610f2 !important;
		}

		.border-left-success {
			border-left: .25rem solid #1cc88a !important;
		}

		.border-left-info {
			border-left: .25rem solid #36b9cc !important;
		}

		.border-left-warning {
			border-left: .25rem solid #f6c23e !important;
		}

		.text-indigo {
			color: #6610f2 !important;
		}

		.text-gray-300 {
			color: #dddfeb !important;
		}

		.text-gray-800 {
			color: #5a5c69 !important;
		}

		@media only screen and (max-width: 1000px) {
			.fa-add-new {
				font-size: 50px;
				bottom: 60px;
				right: 50px;
			}
		}

		@media only screen and (max-width: 600px) {
			.fa-add-new {
				font-size: 40px;
				bottom: 30px;
				right: 25px;
			}
		}
	</style>
	<style>
		body {
			max-width: 99% !important;
		}
	</style>
</body>

</html>