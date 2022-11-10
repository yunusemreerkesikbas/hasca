
<div class="page-content">

	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">

						<h4 class="card-title">Kullancı ekle</h4>
						<p class="card-title-desc">Lütfen bilgileri giriniz</p>
						<form action="<?php echo base_url("users/save"); ?>" method="post" >
							<div class="mb-3 row">
								<label for="example-text-input" class="col-md-2 col-form-label">Kullanıcı adı</label>
								<div class="col-md-10">
									<input class="form-control" placeholder="Kullanıcı Adı" name="user_name" value="<?php echo isset($form_error) ? set_value("user_name") : ""; ?>" >
									<?php if(isset($form_error)){ ?>
										<small class="pull-right input-form-error"> <?php echo form_error("user_name"); ?></small>
									<?php } ?>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="example-text-input" class="col-md-2 col-form-label">Email</label>
								<div class="col-md-10">
									<input class="form-control" type="email" placeholder="E-posta Adresi" name="email" value="<?php echo isset($form_error) ? set_value("email") : ""; ?>" >
									<?php if(isset($form_error)){ ?>
										<small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
									<?php } ?>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="example-text-input" class="col-md-2 col-form-label">Şifre</label>
								<div class="col-md-10">
									<input class="form-control" type="password" placeholder="Şifre" name="password" >
									<?php if(isset($form_error)){ ?>
										<small class="pull-right input-form-error"> <?php echo form_error("password"); ?></small>
									<?php } ?>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="example-text-input" class="col-md-2 col-form-label">Şifre tekrar</label>
								<div class="col-md-10">
									<input class="form-control" type="password" placeholder="Şifre Tekrar" name="re_password" >
									<?php if(isset($form_error)){ ?>
										<small class="pull-right input-form-error"> <?php echo form_error("re_password"); ?></small>
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



