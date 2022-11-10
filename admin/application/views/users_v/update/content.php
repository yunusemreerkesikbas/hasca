
<div class="page-content">

	<div class="container-fluid">
		<h4 class="card-title"><?php echo "<b>$item->user_name</b> kaydını düzenliyorsunuz"; ?></h4>
		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">


<!--						<p class="card-title-desc">Lütfen bilgileri giriniz</p>-->
						<form action="<?php echo base_url("users/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
							<div class="mb-3 row">
								<label for="example-text-input" class="col-md-2 col-form-label">Kullanıcı adı</label>
								<div class="col-md-10">
									<input class="form-control" type="text" name="user_name" value="<?php echo $item->user_name; ?>" id="example-text-input">
									<?php if(isset($form_error)){ ?>
										<small class="pull-right input-form-error"> <?php echo form_error("user_name"); ?></small>
									<?php } ?>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="example-text-input" class="col-md-2 col-form-label">Email</label>
								<div class="col-md-10">
									<input class="form-control" type="text" name="email" value="<?php echo $item->email; ?>" id="example-text-input">
									<?php if(isset($form_error)){ ?>
										<small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
									<?php } ?>
								</div>
							</div>


							
							<div class="d-flex flex-wrap gap-2 mt-4">

								<button type="submit" class="btn btn-info waves-effect waves-light">Kaydet</button>

								<a href="<?php echo base_url("users")?>"
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



