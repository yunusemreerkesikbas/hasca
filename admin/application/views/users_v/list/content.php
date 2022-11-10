<div class="page-content">

	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0 font-size-18">Kullanıcılar</h4>

				</div>
			</div>
		</div>
		<!-- end page title -->
		<?php if (empty($items)): ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
					Burada henüz bir kullanıcı yok, eklemek için <a href="<?php echo base_url("users/new_form")?>">buraya tıklayınız</a>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php else: ?>

			<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row mb-2">
							<div class="col-sm-4">

							</div>
							<div class="col-sm-8">
								<div class="text-sm-end">
									<a href="<?php echo base_url("users/new_form")?>"
											class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
												class="mdi mdi-plus me-1"></i> Yeni kullanıcı ekle
									</a>
								</div>
							</div><!-- end col-->
						</div>

						<div class="table-responsive col-md-12">
							<table class="table align-middle table-nowrap table-check content-container">
								<thead class="table-light">
								<tr>
									<th class="align-middle">Kullanıcı adı</th>
									<th class="align-middle">Email</th>
									<th class="align-middle"> Durumu</th>
									<th class="align-middle">İşlemler</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach($items as $item) { ?>
									<tr>

										<td>
											<?php echo $item->user_name ?>
										</td><td>
											<?php echo $item->email ?>
										</td>
										<td>
											<div class="form-check form-switch form-switch-lg mb-3 row d-flex" style="padding-left: 0"  dir="ltr">

												<div class="col-md-10" >
													<input
															data-url="<?php echo base_url("users/isActiveSetter/$item->id"); ?>"
															class="form-check-input form-control isActive" name="isActive" type="checkbox" style="width: 55px;margin-left: 12px;" id="SwitchCheckSizelg"
															<?php echo ($item->isActive) ? "checked" : ""; ?>>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex gap-3">
												<a href="<?php echo base_url("users/update_form/$item->id"); ?>" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>

												<a data-url="<?php echo base_url("users/delete/$item->id"); ?>" class="text-danger remove-btn"  style="cursor: pointer">
													<i class="mdi mdi-delete font-size-18"></i>
												</a>

											</div>
										</td>
									</tr>
								<?php } ?>


								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>
		<?php endif ?>


		<!-- end row -->
	</div> <!-- container-fluid -->
</div>
