<div class="page-content">

	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0 font-size-18">Ürünler</h4>

				</div>
			</div>
		</div>
		<!-- end page title -->
		<?php if (empty($items)): ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				Burada henüz bir ürün yok, eklemek için <a href="<?php echo base_url("product/addProduct") ?>">buraya
					tıklayınız</a>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php else: ?>




		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">



						<table id="datatable" class="content-container table  dt-responsive  nowrap w-100 ">
							<thead>
							<tr>
								<th class="order"><i class="bx bx-border-all"></i></th>
								<th class="align-middle">Fotoğraf</th>
								<th>Başlık</th>
								<th>Açıklama</th>
								<th>Kategori</th>
								<th>Durumu</th>
								<th>İşlemler</th>

							</tr>

							</thead>


							<tbody class="sortable" data-url="<?php echo base_url("product/rankSetter"); ?>">
							<?php foreach($items as $item) { ?>
							<tr id="ord-<?php echo $item->id; ?>">
								<td class="order"><i class="bx bx-border-all"></i></td>
								<td>
									<div>
										<img src="<?php echo base_url("uploads/$viewFolder/$item->img_url"); ?>" alt=""
											 class="rounded avatar-lg">
									</div>
								</td>
								<td><?php echo $item->title ?></td>
								<td><?php echo strip_tags($item->description) ?></td>

								<td><?php echo get_category_title($item->category_id)  ?></td>
								<td>
									<div class="form-check form-switch form-switch-lg mb-3 row d-flex" style="padding-left: 0"  dir="ltr">

										<div class="col-md-10" >
											<input
													data-url="<?php echo base_url("product/isActiveSetter/$item->id"); ?>"
													class="form-check-input form-control isActive" name="isActive" type="checkbox" style="width: 55px;margin-left: 12px;" id="SwitchCheckSizelg" <?php echo ($item->isActive) ? "checked" : ""; ?>
											>
										</div>
									</div>
								</td>
								<td>
									<div class="d-flex gap-3">
										<a href="<?php echo base_url("product/update_form/$item->id"); ?>" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>

										<a data-url="<?php echo base_url("product/delete/$item->id"); ?>" class="text-danger remove-btn"  style="cursor: pointer">
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
				</div> <!-- end col -->
			</div> <!-- end row -->


		<?php endif ?>


