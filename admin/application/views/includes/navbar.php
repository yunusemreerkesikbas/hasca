<?php $user = get_active_user(); ?>

<header id="page-topbar">
	<div class="navbar-header">
		<div class="d-flex">
			<!-- LOGO -->
			<div class="navbar-brand-box pt-3">


				<a href="<?php echo base_url()?>" class="logo logo-light">

                            <span class="logo-lg ">
                                <img src="<?php echo base_url("assets"); ?>/assets/images/logo-dark.png" alt="" height="60">
                            </span>
				</a>
			</div>

			<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
					id="vertical-menu-btn">
				<i class="fa fa-fw fa-bars"></i>
			</button>

			<!-- App Search-->
			<form class="app-search d-none d-lg-block">
				<div class="position-relative">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="bx bx-search-alt"></span>
				</div>
			</form>


		</div>

		<div class="d-flex">

			<div class="dropdown d-inline-block d-lg-none ms-2">
				<button type="button" class="btn header-item noti-icon waves-effect"
						id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
					<i class="mdi mdi-magnify"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
					 aria-labelledby="page-header-search-dropdown">

					<form class="p-3">
						<div class="form-group m-0">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search ..."
									   aria-label="Recipient's username">
								<div class="input-group-append">
									<button class="btn btn-primary" type="submit"><i
											class="mdi mdi-magnify"></i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
		<div class="div d-flex" style="align-items:center">
			<div class="flags">
				<div class="flag-tr">
					<img src="<?php echo base_url("assets"); ?>/assets/images/flags/tr.jpg" style="width: 36px; height:36px;" alt="">
				</div>
			</div>


			<div class="dropdown d-inline-block">
				<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
						data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img class="rounded-circle header-profile-user" src="<?php echo base_url("assets"); ?>/assets/images/users/avatar-1.jpg"
						 alt="Header Avatar">
					<span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo $user->user_name?></span>
					<i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-end">
					<!-- item-->
					<a class="dropdown-item" href="<?php echo base_url("users/update_form/$user->id"); ?>"><i class="bx bx-user font-size-16 align-middle me-1"></i>
						<span key="t-profile">Profil</span></a>

					<a class="dropdown-item d-block" href="#"><i
							class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
							key="t-settings">Ayarlar</span></a>

					<div class="dropdown-divider"></div>
					<a class="dropdown-item text-danger" href="<?php echo base_url("logout"); ?>"><i
							class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
							key="t-logout">Çıkış </span></a>
				</div>
			</div>
		</div>



</header>
