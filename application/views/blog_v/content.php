<div class="inner-banner">
	<img src="<?php echo base_url("assets")?>/<?php echo base_url("assets")?>/<?php echo base_url("assets")?>/<?php echo base_url("assets") ?>/assets/images/bg/inner-bannerdot.png" class="inner-bannerdot" alt="image">
	<img src="<?php echo base_url("assets")?>/<?php echo base_url("assets")?>/<?php echo base_url("assets")?>/<?php echo base_url("assets") ?>/assets/images/bg/inner-bannerwave.png" class="inner-bannerwave" alt="image">
	<a class="down-arrow-icon" href="#job-list">
		<svg viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd"
				  d="M13.8182 18.469L7.24862 25.7462L0.679032 18.469C0.272584 18.0188 0.592074 17.3 1.19862 17.3L6.74862 17.3L6.74862 1C6.74862 0.723857 6.97248 0.5 7.24862 0.5C7.52477 0.5 7.74862 0.723857 7.74862 1L7.74862 17.3L13.2986 17.3C13.9052 17.3 14.2247 18.0188 13.8182 18.469Z" />
		</svg>
	</a>
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center text-center">
			<div class="col-md-6">
				<h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">BLOG
				</h2>
				<nav aria-label="breadcrumb">
					<ul class="breadcrumb gap-3">
						<li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="blog-grid-section pt-120 pb-120" id="blog-grid">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="section-title primary5">
					<span>-Blog-</span>
					<h3>Son yazımızı okudunuz mu ?</h3>
					<p class="para">Gelin hep beraber neler olup bitiyor, bakalım</p>
				</div>
			</div>
		</div>
		<div class="row position-relative justify-content-center g-4">
			<?php foreach ($blogs as $blog) { ?>
			<div class="col-lg-4 col-md-6 col-sm-10">
				<div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
					<div class="blog-image">
						<img src="<?php echo base_url("assets")?>/assets/images/bg/about-bg-2.jpg" class="img-fluid" alt="image">
					</div>
					<div class="blog-content hover-border1">
						<span>Kahve</span>
						<h4><a href="<?php echo base_url("blog/$blog->id")?>">Kahvenin hatırı kaç yıldır? </a>
						</h4>
						<div class="blog-meta">

							<div class="meta">
								<i class="bi bi-stopwatch"></i><span>Februay 24, 2022</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php } ?>
		</div>
	</div>
</div>
