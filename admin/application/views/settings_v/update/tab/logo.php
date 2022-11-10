<div class="row ">
	<label for="site_logo_dark">Site Logo</label>
	<div class="col-md-6 d-flex">
		<div class="col-md-3 image_upload_container">
			<img  src="<?php echo base_url("uploads/$viewFolder/$item->logo"); ?>" alt="" style="width: 100px; height: 100px" class="img-responsive panel-logo">
		</div>
		<div class="mt-3  col-md-9">
			<label for="formFile" class="form-label">Fotoğraf seçiniz</label>
			<input type="file" name="logo" class="form-control" value="<?php echo isset($form_error) ? set_value("site_title") : $item->site_title; ?>" id="formFile">
		</div>
	</div>
</div>

