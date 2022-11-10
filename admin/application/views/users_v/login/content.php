<div>
	<div class="container-fluid p-0">
		<div class="row g-0">

			<div class="col-xl-9">
				<div class="auth-full-bg pt-lg-5 p-4">
					<div class="w-100">
						<div class="bg-overlay"></div>
						<div class="d-flex h-100 flex-column">

						</div>
					</div>
				</div>
			</div>
			<!-- end col -->

			<div class="col-xl-3">
				<div class="auth-full-page-content p-md-5 p-4">
					<div class="w-100">

						<div class="d-flex flex-column h-100">
<!--							<div class="mb-4 mb-md-5">-->
<!--								<a href="index.html" class="d-block auth-logo">-->
<!--									<img src="assets/assets/images/cms-logo.jpg" style="object-fit: contain" alt="">-->
<!--								</a>-->
<!--							</div>-->
							<div class="my-auto">


								<div>
									<h5 class="text-primary">Hoşgeldiniz !</h5>
									<p class="text-muted">Devam etmek için lütfen giriş yapınız</p>
								</div>

								<div class="mt-4">
									<form action="<?php echo base_url("userop/do_login"); ?>" method="post">

										<div class="mb-3">
											<label for="username" class="form-label">E posta</label>
											<input id="sign-in-email" type="email" class="form-control" placeholder="E-posta" name="user_email" >
											<?php if(isset($form_error)){ ?>
												<small class="pull-right input-form-error"> <?php echo form_error("user_email"); ?></small>
											<?php } ?>
										</div>

										<div class="mb-3">

											<label class="form-label">Şifre</label>
											<div class="input-group auth-pass-inputgroup">

												<input id="sign-in-password" type="password" class="form-control" placeholder="Şifre" name="user_password" aria-label="Password" aria-describedby="password-addon">
												<?php if(isset($form_error)){ ?>
													<br>
													<small class="pull-right input-form-error"> <?php echo form_error("user_password"); ?></small>
												<?php } ?>
												<button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
											</div>
										</div>



										<div class="mt-3 d-grid">
											<button class="btn btn-primary waves-effect waves-light" type="submit">Giriş yap</button>
										</div>




									</form>

								</div>
							</div>

							<div class="mt-4 mt-md-5 text-center">
								<p class="mb-0">© <script>
										document.write(new Date().getFullYear())
									</script> yee</p>
							</div>
						</div>


					</div>
				</div>
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container-fluid -->
</div>
