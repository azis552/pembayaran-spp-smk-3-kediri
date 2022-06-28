	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg">

			<!-- Sidebar content -->
			<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-section sidebar-user my-1">
					<div class="sidebar-section-body">
						<div class="media">
							<a href="#" class="mr-3">
								<img src="<?= base_url('assets/global_assets/images/placeholders/placeholder.jpg')?>" class="rounded-circle" alt="">
							</a>

							<div class="media-body">
								<div class="font-weight-semibold">Victoria Baker</div>
								<div class="font-size-sm line-height-sm opacity-50">
									Senior developer
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
									<i class="icon-transmission"></i>
								</button>

								<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
									<i class="icon-cross2"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->

				<!-- Main navigation -->
				<div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs mt-1">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="<?= base_url('backend')?>"  class="nav-link <?= $page == 'dashboard' ? 'active' : ''?>">
								<i class="icon-home4"></i>
								<span>
							
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu <?= $menu == 'data_master' ? 'nav-item-open' : ''?>">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Data Master</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="<?= base_url('backend/data_siswa')?>" class="nav-link <?= $page == 'data_siswa' ? 'active' : ''?> ">Data Siswa</a></li>
								<li class="nav-item"><a href="<?= base_url('backend/data_kelas')?>" class="nav-link <?= $page == 'data_kelas' ? 'active' : ''?>">Data Kelas</a></li>
								<li class="nav-item"><a href="<?= base_url('backend/data_pembayaran')?>" class="nav-link <?= $page == 'data_pembayaran' ? 'active' : ''?>">Data Pembayaran</a></li>
								
								
							</ul>
						</li>
						<li class="nav-item nav-item-submenu <?= $menu == 'pembayaran' ? 'nav-item-open' : ''?>">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Pembayaran</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="<?= base_url('backend/aktivasi_pembayaran')?>" class="nav-link <?= $page == 'aktivasi_pembayaran' ? 'active' : ''?>">Aktivasi Pembayaran</a></li>
								<li class="nav-item"><a href="<?= base_url('backend/tagihan_pembayaran')?>" class="nav-link <?= $page == 'tagihan' ? 'active' : ''?>">Data Tagihan</a></li>
								<li class="nav-item"><a href="<?= base_url('backend/history_pembayaran')?>" class="nav-link <?= $page == 'history' ? 'active' : ''?>">History Pembayaran</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu <?= $menu == 'laporan' ? 'nav-item-open' : ''?>">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Laporan</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="<?= base_url('backend/laporan')?>" class="nav-link <?= $page == 'laporan_pembayaran' ? 'active' : ''?>">Laporan Pembayaran</a></li>
								
							
							</ul>
						</li>
						

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->
<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light">
					<div class="page-header-content header-elements-lg-inline">
						<div class="page-title d-flex">
							<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold"><?= ucwords($menu)?></span> - <?=ucwords($page)?></h4>
							<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
						</div>

						<div class="header-elements d-none">
							<div class="d-flex justify-content-center">
								<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-body">
									<i class="icon-bars-alt text-pink"></i>
									<span>Statistics</span>
								</a>
								<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-body">
									<i class="icon-calculator text-pink"></i>
									<span>Invoices</span>
								</a>
								<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-body">
									<i class="icon-calendar5 text-pink"></i>
									<span>Schedule</span>
								</a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
						<div class="d-flex">
							<div class="breadcrumb">
								<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> <?=ucwords($menu)?></a>
								<span class="breadcrumb-item active"><?=ucwords($page)?></span>
							</div>

							<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
						</div>

						<div class="header-elements d-none">
							<div class="breadcrumb justify-content-center">
								<a href="#" class="breadcrumb-elements-item">
									<i class="icon-comment-discussion mr-2"></i>
									Support
								</a>

								<div class="breadcrumb-elements-item dropdown p-0">
									<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
										<i class="icon-gear mr-2"></i>
										Settings
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
										<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
										<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header -->