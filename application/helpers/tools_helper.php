<?php
function get_category_title($category_id = 0){

$t = &get_instance();

$t->load->model("product_category_model");

$category = $t->product_category_model->get(
array(
"id"    => $category_id
)
);

if($category)
return $category->title;

}
function get_settings(){

	$t = &get_instance();

	$t->load->model("settings_model");

	if($t->session->userdata("settings")){
		$settings = $t->session->userdata("settings");
	} else {

		$settings = $t->settings_model->get();

		if(!$settings) {

			$settings = new stdClass();
			$settings->company_name = "yee";
			$settings->logo         = "default";

		}

		$t->session->set_userdata("settings", $settings);

	}

	return $settings;

}

