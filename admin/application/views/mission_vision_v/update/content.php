
<div class="page-content">

	<div class="container-fluid">
		<h4 class="card-title"><?php echo "<b>$item->title</b> kaydını düzenliyorsunuz"; ?></h4>
		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">


<!--						<p class="card-title-desc">Lütfen bilgileri giriniz</p>-->
						<form action="<?php echo base_url("mission_vision/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
							<div class="mb-3 row">
								<label for="example-text-input" class="col-md-2 col-form-label">Hakkımızda Başlık</label>
								<div class="col-md-10">
									<input class="form-control" type="text" name="title" value="<?php echo $item->title; ?>" id="example-text-input">
									<?php if(isset($form_error)){ ?>
										<small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
									<?php } ?>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="example-search-input" class="col-md-2 col-form-label">Açıklama</label>
								<div class="col-md-10">
									<textarea id="elm1"  name="description">
										<?php echo $item->description; ?>
									</textarea>
								</div>

							</div>





							<div class="row">

								<div class="col-md-6 d-flex">
									<div class="col-md-3 image_upload_container">
										<img src="<?php echo base_url("uploads/$viewFolder/$item->img_url"); ?>" alt="" style="width: 100px; height: 100px" class="img-responsive">
									</div>
									<div class="mt-3 col-md-9">
										<label for="formFile" class="form-label">Fotoğraf seçiniz</label>
										<input type="file" name="img_url" class="form-control"  id="formFile">
									</div>
								</div>
							</div>
							<div class="d-flex flex-wrap gap-2 mt-4">

								<button type="submit" class="btn btn-info waves-effect waves-light">Kaydet</button>

								<a href="<?php echo base_url("mission_vision")?>"
								<button type="button" class="btn btn-danger waves-effect waves-light">İptal</button>
								</a>
							</div>


						</form>

					</div>

				</div>
			</div> <!-- end col -->


		</div>
		<!-- end row -->
	</div> <!-- container-fluid -->
</div>



