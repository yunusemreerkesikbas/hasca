<div class="mb-3">
	<label for="site_title">Site Adı</label>
	<input id="site_title" name="site_title" value="<?php echo isset($form_error) ? set_value("site_title") : $item->site_title; ?>" type="text" class="form-control" placeholder="Site Adı">
</div>
<div class="mb-3">
	<label for="site_description">Site Açıklama</label>
	<input id="site_description" value="<?php echo isset($form_error) ? set_value("site_description") : $item->site_description; ?>" name="site_description" type="text" class="form-control" placeholder="Site açıklama">
</div>
<div class="mb-3">
	<label for="slogan">Slogan</label>
	<input id="slogan" name="slogan" value="<?php echo isset($form_error) ? set_value("slogan") : $item->slogan; ?>" type="text" class="form-control" placeholder="Manufacturer Brand">
</div>
