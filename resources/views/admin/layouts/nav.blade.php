<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper nav-options-slava">
		<nav style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);" class="main-header navbar navbar-expand navbar-white navbar-light upper-navbar-a-b">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><img src="/./images/noun-menu-3523555 1.svg" alt=""></a>
				</li>

			</ul>
		</nav>
		<!-- /.navbar --> <!-- Main Sidebar Container -->
		<aside class="main-sidebar slava-secendory-bg elevation-4 bg-primar-ab">
			<!-- Brand Logo -->
			<div class="logo-section">
				<a href="{{route('admin.home')}}" class="logo-main" style="border: none !important;">
					<img src="/./images/logo-a-b.png" alt="a-b-sidebar-logo" class="brand-image sidebar-logo-main" style="opacity: .8">
					<img src="/./images/A&B GLOBAL MINING.png" alt="sidebar-text-logo" class="sidebar-text-logo">
				</a>
			</div>
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar Menu -->
				<nav class="mt-2 sidebar-menu">
					<ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Dashboard Side Menus -->

						<li class="nav-item has-treeview {{'admin-home' == request()->path() ? 'menu-item-active' : '' }}">
							<a href="{{route('admin.home')}}" class="nav-link ">
							<i class="fa-solid fa-video" style="color: #ffffff;margin-right:12px;"></i>
								<p>Video Upload</p>
							</a>
						</li>
						<li class="nav-item has-treeview {{'country' == request()->path() ? 'menu-item-active' : '' }}">
							<a href="{{route('getcountry')}}" class="nav-link ">
							<i class="fa-solid fa-earth-americas" style="color: #ffffff;margin-right:14px;"></i>
								<p>Country</p>
							</a>
						</li>
						<li class="nav-item has-treeview {{'jobs' == request()->path() ? 'menu-item-active' : '' }}">
							<a href="{{route('jobs')}}" class="nav-link ">
							<i class="fa-solid fa-briefcase" style="color: #ffffff;margin-right:14px;"></i>
								<p>Jobs</p>
							</a>
						</li>
						<li class="nav-item has-treeview {{'career-table' == request()->path() ? 'menu-item-active' : '' }}">
							<a href="{{route('career.table')}}" class="nav-link ">
							<i class="fa-solid fa-laptop" style="color: #ffffff;margin-right:10px;"></i>
								<p>Careers</p>
							</a>
						</li>
						<li class="nav-item has-treeview {{'latestnews' == request()->path() ? 'menu-item-active' : '' }}">
							<a href="{{route('latestnews')}}" class="nav-link ">
							<i class="fa-solid fa-newspaper" style="color: #ffffff;margin-right:15px;"></i>
								<p>Latest News</p>
							</a>
						</li>
						<li class="nav-item has-treeview {{'ourteams' == request()->path() ? 'menu-item-active' : '' }}">
							<a href="{{route('ourteams')}}" class="nav-link ">
							<i class="fa-solid fa-people-group" style="color: #ffffff;margin-right:10px;"></i>
								<p>Our Teams</p>
							</a>
						</li>
						<li class="nav-item has-treeview {{'contact' == request()->path() ? 'menu-item-active' : '' }}">
							<a href="{{route('contact')}}" class="nav-link ">
							<i class="fa-solid fa-address-card" style="color: #ffffff;margin-right:11px;"></i>
								<p>Contact Us</p>
							</a>
						</li>
						<li class="nav-item has-treeview {{'logo' == request()->path() ? 'menu-item-active' : '' }}">
							<a href="{{route('logotable')}}" class="nav-link ">
							<i class="fa-regular fa-image" style="color: #ffffff;margin-right:11px;"></i>
								<p>Logo</p>
							</a>
						</li>
                        <li class="nav-item has-treeview {{'legacy' == request()->path() ? 'menu-item-active' : '' }}">
							<a href="{{ route('legacylist') }}" class="nav-link ">
							<i class="fa-solid fa-plus" style="color: #ffffff;margin-right:11px;"></i>
								<p>Legacy</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="{{ route('logout') }}" class="nav-link ">
							<i class="fa-solid fa-right-from-bracket" style="color: #ffffff;margin-right:17px;"></i>
								<p>Log Out</p>
							</a>
						</li>

					</ul>
				</nav>
			</div>
		</aside>
	</div>
</body>
