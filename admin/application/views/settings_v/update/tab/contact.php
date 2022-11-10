<div class="mb-3">
	<label for="address">Adres</label>
	<input id="address" name="address" type="text" class="form-control" value="<?php echo isset($form_error) ? set_value("address") : $item->address; ?>" placeholder="Adres">
</div>
<div class="mb-3">
	<label for="email">E-mail</label>
	<input id="email" name="email" type="email" class="form-control" value="<?php echo isset($form_error) ? set_value("email") : $item->email; ?>" placeholder="Email">
</div>
<div class="mb-3">
	<label for="phone_1">Telefon - 1 </label>
	<input id="phone_1" name="phone_1" value="<?php echo isset($form_error) ? set_value("phone_1") : $item->phone_1; ?>" type="tel" class="form-control" placeholder="Telefon">
</div>
<div class="mb-3">
	<label for="phone_2">Telefon - 2 </label>
	<input id="phone_2" name="phone_2" value="<?php echo isset($form_error) ? set_value("phone_2") : $item->phone_2; ?>" type="tel" class="form-control" placeholder="Telefon">
</div>
<div class="mb-3">
	<label for="whatsapp">Whatsapp</label>
	<input id="whatsapp" name="whatsapp" value="<?php echo isset($form_error) ? set_value("whatsapp") : $item->whatsapp; ?>" type="tel" class="form-control" placeholder="Whatsapp">
</div>

