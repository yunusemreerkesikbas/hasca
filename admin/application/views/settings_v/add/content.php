<div class="page-content">
	<div class="container-fluid">
		<div class="col-md-12">
			<form action="<?php echo base_url("settings/save"); ?>" method="post" enctype="multipart/form-data">

				<div class="card">
					<div class="card-body">

						<h4 class="card-title">Genel Ayarlar</h4>

						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#site" role="tab">
									<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
									<span class="d-none d-sm-block">Site</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#contact" role="tab">
									<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
									<span class="d-none d-sm-block">İletişim</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#social_media" role="tab">
									<span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
									<span class="d-none d-sm-block">Sosyal Medya</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#logo" role="tab">
									<span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
									<span class="d-none d-sm-block">Logo</span>
								</a>
							</li>

						</ul>

						<!-- Tab panes -->
						<div class="tab-content p-3 text-muted">
							<div class="tab-pane active" id="site" role="tabpanel">
								<?php $this->load->view("$viewFolder/$subViewFolder/tab/site"); ?>

							</div>
							<div class="tab-pane" id="contact" role="tabpanel">
								<?php $this->load->view("$viewFolder/$subViewFolder/tab/contact"); ?>
							</div>
							<div class="tab-pane" id="social_media" role="tabpanel">
								<?php $this->load->view("$viewFolder/$subViewFolder/tab/social_media"); ?>
							</div>
							<div class="tab-pane" id="logo" role="tabpanel">
								<?php $this->load->view("$viewFolder/$subViewFolder/tab/logo"); ?>
							</div>

						</div>

					</div>
				</div>
				<div class="d-flex flex-wrap gap-2">
					<button type="submit" class="btn btn-primary waves-effect waves-light">Kaydet</button>
					<a href="<?php echo base_url()?>">
						<button type="button" class="btn btn-secondary waves-effect waves-light">İptal</button>
					</a>
				</div>
			</form>

		</div>

	</div> <!-- container-fluid -->
</div>

