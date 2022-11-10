
<div class="page-content">

	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">

						<h4 class="card-title">Slider ekle</h4>
						<p class="card-title-desc">Lütfen bilgileri giriniz</p>
						<form action="<?php echo base_url("slider/save"); ?>" method="post" enctype="multipart/form-data">
							<div class="mb-3 row">
								<label for="example-text-input" class="col-md-2 col-form-label">Slogan</label>
								<div class="col-md-10">
									<input class="form-control" type="text" name="title" value="" id="example-text-input">
									<?php if(isset($form_error)){ ?>
										<small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
									<?php } ?>
								</div>
							</div>
							

							<div class="row">
								<div class="col-md-6">

									<div class="mt-3">
										<label >Fotoğraf seçiniz</label>
										<input type="file" name="img_url" class="form-control"  id="formFile">
									</div>
								</div>
							</div>
							<div class="d-flex flex-wrap gap-2 mt-4">

								<button type="submit" class="btn btn-info waves-effect waves-light">Kaydet</button>

								<a href="<?php echo base_url("slider")?>"
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



