<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/global_assets/css/icons/icomoon/styles.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/all.min.css')?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?= base_url('assets/global_assets/js/main/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/main/bootstrap.bundle.min.js')?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?= base_url('assets/global_assets/js/plugins/visualization/d3/d3.min.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/plugins/ui/moment/moment.min.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/plugins/pickers/daterangepicker.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/plugins/tables/datatables/datatables.min.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_pages/datatables_responsive.js')?>"></script>
	<script src="<?= base_url('assets/js/app.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_pages/dashboard.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/lines.js')?>"></script>	
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/areas.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/donuts.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/bars.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/progress.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/pies.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_charts/pages/dashboard/light/bullets.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_pages/uploader_bootstrap.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/plugins/forms/selects/select2.min.js')?>"></script>
	<script src="<?= base_url('assets/global_assets/js/demo_pages/form_layouts.js')?>"></script>
	<script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-NLyMKZT1bVxskW4l"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- /theme JS files -->
	
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark bg-indigo navbar-static">
		<div class="d-flex flex-1 d-lg-none">
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>

			<button data-target="#navbar-search" type="button" class="navbar-toggler" data-toggle="collapse">
				<i class="icon-search4"></i>
			</button>
		</div>

		<div class="navbar-brand text-center text-lg-left">
			<a href="index.html" class="d-inline-block">
				<img src="<?= base_url('assets/global_assets/images/logo_light.png')?>" class="d-none d-sm-block" alt="">
				<img src="<?= base_url('assets/global_assets/images/logo_icon_light.png')?>" class="d-sm-none" alt="">
			</a>
		</div>

		<div class="navbar-collapse collapse flex-lg-1 mx-lg-3 order-2 order-lg-1" id="navbar-search">
			<div class="navbar-search d-flex align-items-center py-2 py-lg-0">
				<div class="form-group-feedback form-group-feedback-left flex-grow-1">
					<input type="text" class="form-control" placeholder="Search">
					<div class="form-control-feedback">
						<i class="icon-search4 text-white opacity-50"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="d-flex justify-content-end align-items-center flex-1 flex-lg-0 order-1 order-lg-2">
			<ul class="navbar-nav flex-row">
				<li class="nav-item nav-item-dropdown-lg dropdown">
					<a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group"></i>
						<span class="d-none d-lg-inline-block ml-2">Connect</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-350">
						<div class="dropdown-content-body p-2">
							<div class="row no-gutters">
								<div class="col-4">
									<a href="#" class="d-block text-body text-center ripple-dark rounded p-3">
										<i class="icon-github4 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Github</div>
									</a>

									<a href="#" class="d-block text-body text-center ripple-dark rounded p-3">
										<i class="icon-dropbox text-primary icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dropbox</div>
									</a>
								</div>
								
								<div class="col-4">
									<a href="#" class="d-block text-body text-center ripple-dark rounded p-3">
										<i class="icon-dribbble3 text-pink icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dribbble</div>
									</a>

									<a href="#" class="d-block text-body text-center ripple-dark rounded p-3">
										<i class="icon-google-drive text-success icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Drive</div>
									</a>
								</div>

								<div class="col-4">
									<a href="#" class="d-block text-body text-center ripple-dark rounded p-3">
										<i class="icon-twitter text-info icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
									</a>

									<a href="#" class="d-block text-body text-center ripple-dark rounded p-3">
										<i class="icon-youtube text-danger icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-item nav-item-dropdown-lg dropdown">
					<a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle" data-toggle="dropdown">
						<i class="icon-pulse2"></i>
						<span class="d-none d-lg-inline-block ml-2">Activity</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-350">
						<div class="dropdown-content-header">
							<span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest activity</span>
							<a href="#" class="text-body"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-success rounded-pill btn-icon"><i class="icon-mention"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
										<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-pink rounded-pill btn-icon"><i class="icon-paperplane"></i></a>
									</div>
									
									<div class="media-body">
										Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
										<div class="font-size-sm text-muted mt-1">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-primary rounded-pill btn-icon"><i class="icon-plus3"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
										<div class="font-size-sm text-muted mt-1">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-purple rounded-pill btn-icon"><i class="icon-truck"></i></a>
									</div>
									
									<div class="media-body">
										Shipping cost to the Netherlands has been reduced, database updated
										<div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-warning rounded-pill btn-icon"><i class="icon-comment"></i></a>
									</div>
									
									<div class="media-body">
										New review received on <a href="#">Server side integration</a> services
										<div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-teal rounded-pill btn-icon"><i class="icon-spinner11"></i></a>
									</div>
									
									<div class="media-body">
										<strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
										<div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="font-size-sm line-height-sm text-uppercase font-weight-semibold text-body mr-auto">All activity</a>
							<div>
								<a href="#" class="text-body" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
								<a href="#" class="text-body ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<a href="#" class="navbar-nav-link navbar-nav-link-toggler">
						<i class="icon-switch2"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
