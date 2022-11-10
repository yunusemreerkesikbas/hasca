<div class="vertical-menu">

	<div data-simplebar class="h-100">

		<!--- Sidemenu -->
		<div id="sidebar-menu">
			<!-- Left Menu Start -->
			<ul class="metismenu list-unstyled" id="side-menu">
				<li class="menu-title" key="t-menu">Menu</li>

				<li>
					<a href="javascript: void(0);" class="waves-effect">
						<i class="bx bx-slider-alt"></i>
						<span key="t-dashboards">Ayarlar</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="<?php echo base_url("settings")?>" key="t-default">Genel Ayarlar</a></li>

					</ul>
				</li>



				<li class="menu-title" key="t-apps">Sayfalar</li>

				<li>
					<a href="<?php echo base_url("slider"); ?>" class="waves-effect">
						<i class="bx bx-slideshow"></i>
						<span key="t-dashboards">Slider</span>
					</a>
				</li>

				<li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
						<i class="bx bx-store"></i>
						<span key="t-ecommerce"><span>Ürünler</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="<?php echo base_url("product_category"); ?>" key="t-products">Ürün Grupları</a></li>
						<li><a href="<?php echo base_url("product_category/addProductGroup"); ?>" key="t-product-detail">Yeni Ürün Grubu</a>
						</li>
						<li><a href="<?php echo base_url("product"); ?>" key="t-orders">Ürünler</a></li>
						<li><a href="<?php echo base_url("product/addProduct"); ?>" key="t-customers">Yeni ürün ekle</a></li>

					</ul>
				</li>
				<li>
					<a  href="javascript: void(0);" class="has-arrow waves-effect">
						<i class="bx bx-buildings"></i>
						<span key="t-dashboards">Kurumsal</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
						<li>
							<a href="<?php echo base_url("aboutUs"); ?>" class="waves-effect">
								<i class="bx bx-slideshow"></i>
								<span key="t-dashboards">Hakkımızda</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url("mission_vision"); ?>" class="waves-effect">
								<i class="bx bx-world"></i>
								<span key="t-dashboards">Vizyon & Misyon</span>
							</a>
						</li>
					</ul>


				</li>
				<li>
					<a href="<?php echo base_url("reference"); ?>" class="waves-effect">
						<i class="bx bx-body"></i>
						<span key="t-dashboards">Referanslar</span>
					</a>
				</li>

				<li>
					<a href="<?php echo base_url("blog"); ?>" class="waves-effect">
						<i class="bx bxl-blogger"></i>
						<span key="t-dashboards">Blog</span>
					</a>
				</li>

				<li>
					<a href="" class="has-arrow waves-effect">
						<i class="bx bx-photo-album"></i>
						<span key="t-ecommerce"><span>Medya</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="ecommerce-orders.html" key="t-products">Galeri</a></li>


					</ul>
				</li>
				<li>
					<a href="<?php echo base_url("users"); ?>" class="waves-effect">
						<i class="bx bxl-blogger"></i>
						<span key="t-dashboards">Kullanıcılar</span>
					</a>
				</li>

			</ul>
		</div>
		<!-- Sidebar -->
	</div>
</div>
