<div class="mb-3">
	<label for="facebook">Facebook</label>
	<input id="facebook" name="facebook" value="<?php echo isset($form_error) ? set_value("facebook") : $item->facebook; ?>" type="text" class="form-control" placeholder="Facebook adresi">
</div>
<div class="mb-3">
	<label for="instagram">Instagram</label>
	<input id="instagram" name="instagram" value="<?php echo isset($form_error) ? set_value("instagram") : $item->instagram; ?>" type="text" class="form-control" placeholder="Instagram adresi">
</div>
