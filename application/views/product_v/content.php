<div class="inner-banner">
	<img src="<?php echo base_url("assets") ?>/assets/images/bg/inner-bannerdot.png" class="inner-bannerdot"
		 alt="image">
	<img src="<?php echo base_url("assets") ?>/assets/images/bg/inner-bannerwave.png" class="inner-bannerwave"
		 alt="image">
	<a class="down-arrow-icon" href="#urunler">
		<svg viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd"
				  d="M13.8182 18.469L7.24862 25.7462L0.679032 18.469C0.272584 18.0188 0.592074 17.3 1.19862 17.3L6.74862 17.3L6.74862 1C6.74862 0.723857 6.97248 0.5 7.24862 0.5C7.52477 0.5 7.74862 0.723857 7.74862 1L7.74862 17.3L13.2986 17.3C13.9052 17.3 14.2247 18.0188 13.8182 18.469Z"/>
		</svg>
	</a>
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center text-center">
			<div class="col-md-6">
				<h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">ÜRÜNLERİMİZ
				</h2>
				<nav aria-label="breadcrumb">
					<ul class="breadcrumb gap-3">
						<li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
						<li class="breadcrumb-item active" aria-current="page">Ürünler</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>


<div class="job-section pb-120" id="urunler">
	<div class="container">
		<div class="row mt-50">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="documentation-tab-wrap">
					<ul class="nav nav-pills d-flex flex-row justify-content-center gap-3 mb-70" id="pills-tab"
						role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-one-tab" data-bs-toggle="pill"
									data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one"
									aria-selected="true">Tüm Ürünler
							</button>
						</li>
						<?php foreach ($categories as $category) { ?>

							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-<?php echo $category->id ?>-tab"
										data-bs-toggle="pill"
										data-bs-target="#pills-<?php echo $category->id ?>" type="button" role="tab"
										aria-controls="pills-<?php echo $category->id ?>"
										aria-selected="false"><?php echo $category->title ?>
								</button>

							</li>

						<?php } ?>
					</ul>

					<div class="tab-content tab-content-shape" id="pills-tabContent">
						<div class="tab-pane fade active show" id="pills-one" role="tabpanel"
							 aria-labelledby="pills-one-tab">
							<div class="row justify-content-center g-3">
								<?php foreach ($products as $product) { ?>
									<div class="col-xl-3 col-lg-3 col-md-6 col-sm-10 col-12">
										<div class="single-team2 style-2 wow fadeInDown" data-wow-duration="1.5s"
											 data-wow-delay="0.2s">
											<div class="team-image">
												<img style="object-fit: contain" src="<?php echo base_url("admin/uploads/product_v/$product->img_url"); ?>"
													 alt="<?php echo $product->title?>">
												<div class="social-area gap-3">

												</div>
											</div>
											<div class="team-content">
												<h4 class="name"><?php echo $product->title; ?></h4>
												<p class="designation"><?php echo get_category_title($product->category_id) ?></p>
											</div>
										</div>
									</div>


								<?php } ?>
							</div>
						</div>

						<?php foreach ($categories as $category) { ?>
							<div class="tab-pane fade" id="pills-<?php echo $category->id ?>" role="tabpanel"
								 aria-labelledby="pills-<?php echo $category->id ?>-tab">
								<div class="row justify-content-center g-4">
									<?php foreach ($products as $product) { ?>
											<?php if ($category->id == $product->category_id) : ?>
												<div class="col-xl-3 col-lg-3 col-md-6 col-sm-10 col-12">
										<div class="single-team2 style-2 wow fadeInDown" data-wow-duration="1.5s"
											 data-wow-delay="0.2s">
											<div class="team-image">
												<img src="<?php echo base_url("admin/uploads/product_v/$product->img_url"); ?>"
													 alt="<?php echo $product->title?>">
												<div class="social-area gap-3">

												</div>
											</div>
											<div class="team-content">
												<h4 class="name"><?php echo $product->title ?></h4>
												<p class="designation"><?php echo get_category_title($product->category_id) ?></p>
											</div>
										</div>
									</div>
											<?php endif; ?>
									<?php } ?>
								</div>

							</div>
						<?php } ?>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
