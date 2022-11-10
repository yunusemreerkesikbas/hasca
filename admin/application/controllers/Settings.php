<?php

class Settings extends CI_Controller
{
	public $viewFolder = "";

	public function __construct()
	{

		parent::__construct();
		if(!get_active_user()){
			redirect(base_url("login"));
		}
		$this->viewFolder = "settings_v";

		$this->load->model("settings_model");



	}

	public function index(){

		$viewData = new stdClass();

		/** Tablodan Verilerin Getirilmesi.. */
		$item = $this->settings_model->get();

		if($item)
			$viewData->subViewFolder = "update";
		else
			$viewData->subViewFolder = "add";

		/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
		$viewData->viewFolder = $this->viewFolder;
		$viewData->item = $item;

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}

	public function new_form(){

		$viewData = new stdClass();

		/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "add";

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

	}

	public function save(){


		$this->load->library("form_validation");

		// Kurallar yazilir..

//		if($_FILES["logo"]["name"] == ""){
//
//			$alert = array(
//				"title" => "İşlem Başarısız",
//				"text" => "Lütfen bir görsel seçiniz",
//				"type"  => "error"
//			);
//
//			// İşlemin Sonucunu Session'a yazma işlemi...
//			$this->session->set_flashdata("alert", $alert);
//
//			redirect(base_url("settings/new_form"));
//
//			die();
//		}

		$this->form_validation->set_rules("site_title", "Şirket Adı", "required|trim");
		$this->form_validation->set_rules("phone_1", "Telefon 1", "required|trim");
		$this->form_validation->set_rules("email", "E-posta Adresi", "required|trim|valid_email");

		$this->form_validation->set_message(
			array(
				"required"     => "<b>{field}</b> alanı doldurulmalıdır",
				"valid_email"  => "Lütfen geçerli bir <b>{field}</b> giriniz"
			)
		);

		// Form Validation Calistirilir..
		$validate = $this->form_validation->run();

		if($validate){

			// Upload Süreci...

			$file_name = convertToSEO($this->input->post("site_title")) . "." . pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);

			$config["allowed_types"] = "jpg|jpeg|png";
			$config["upload_path"]   = "uploads/$this->viewFolder/";
			$config["file_name"] = $file_name;

			$this->load->library("upload", $config);

			$upload = $this->upload->do_upload("logo");

			if($upload){

				$uploaded_file = $this->upload->data("file_name");

				$insert = $this->settings_model->add(
					array(
						"site_title"  		=> $this->input->post("site_title"),
						"site_description"  => $this->input->post("site_description"),
						"slogan"        	=> $this->input->post("slogan"),
						"phone_1"       	=> $this->input->post("phone_1"),
						"phone_2"       	=> $this->input->post("phone_2"),
						"address"       	=> $this->input->post("address"),
						"email"         	=> $this->input->post("email"),
						"facebook"      	=> $this->input->post("facebook"),
						"instagram"     	=> $this->input->post("instagram"),
						"whatsapp"     		=> $this->input->post("whatsapp"),
						"logo"          	=> $uploaded_file,
						"createdAt"     	=> date("Y-m-d H:i:s")
					)
				);

				// TODO Alert sistemi eklenecek...
				if($insert){

					$alert = array(
						"title" => "İşlem Başarılı",
						"text" => "Kayıt başarılı bir şekilde eklendi",
						"type"  => "success"
					);

				} else {

					$alert = array(
						"title" => "İşlem Başarısız",
						"text" => "Kayıt Ekleme sırasında bir problem oluştu",
						"type"  => "error"
					);
				}

			} else {

				$alert = array(
					"title" => "İşlem Başarısız",
					"text" => "Görsel yüklenirken bir problem oluştu",
					"type"  => "error"
				);

				$this->session->set_flashdata("alert", $alert);

				redirect(base_url("settings/new_form"));

				die();

			}

			// İşlemin Sonucunu Session'a yazma işlemi...
			$this->session->set_flashdata("alert", $alert);

			redirect(base_url("settings"));

		} else {

			$viewData = new stdClass();

			/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
			$viewData->viewFolder = $this->viewFolder;
			$viewData->subViewFolder = "add";
			$viewData->form_error = true;

			$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
		}

	}

	public function update_form($id){

		$viewData = new stdClass();

		/** Tablodan Verilerin Getirilmesi.. */
		$item = $this->settings_model->get(
			array(
				"id"    => $id,
			)
		);

		/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "update";
		$viewData->item = $item;

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


	}

	public function update($id){

		$this->load->library("form_validation");

		// Kurallar yazilir..

		$this->form_validation->set_rules("site_title", "Şirket Adı", "required|trim");
		$this->form_validation->set_rules("phone_1", "Telefon 1", "required|trim");
		$this->form_validation->set_rules("email", "E-posta Adresi", "required|trim|valid_email");

		$this->form_validation->set_message(
			array(
				"required"  => "<b>{field}</b> alanı doldurulmalıdır",
				"valid_email"  => "Lütfen geçerli bir <b>{field}</b> giriniz"
			)
		);

		// Form Validation Calistirilir..
		$validate = $this->form_validation->run();

		if($validate){

			// Upload Süreci...
			if($_FILES["logo"]["name"] !== "") {

				$file_name = convertToSEO($this->input->post("site_title")) . "." . pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);

				$config["allowed_types"] = "jpg|jpeg|png";
				$config["upload_path"] = "uploads/$this->viewFolder/";
				$config["file_name"] = $file_name;

				$this->load->library("upload", $config);

				$upload = $this->upload->do_upload("logo");

				if ($upload) {

					$uploaded_file = $this->upload->data("file_name");

					$data = array(
						"site_title"  		=> $this->input->post("site_title"),
						"site_description"  => $this->input->post("site_description"),
						"slogan"        	=> $this->input->post("slogan"),
						"phone_1"       	=> $this->input->post("phone_1"),
						"phone_2"       	=> $this->input->post("phone_2"),
						"address"       	=> $this->input->post("address"),
						"email"         	=> $this->input->post("email"),
						"facebook"      	=> $this->input->post("facebook"),
						"instagram"     	=> $this->input->post("instagram"),
						"whatsapp"     		=> $this->input->post("whatsapp"),
						"logo"          	=> $uploaded_file,
					);

				} else {

					$alert = array(
						"title" => "İşlem Başarısız",
						"text" => "Görsel yüklenirken bir problem oluştu",
						"type" => "error"
					);

					$this->session->set_flashdata("alert", $alert);

					redirect(base_url("settings/update_form/$id"));

					die();

				}

			} else {

				$data = array(
					"site_title"  => $this->input->post("site_title"),
					"site_description"  => $this->input->post("site_description"),
					"slogan"        	=> $this->input->post("slogan"),
					"phone_1"       => $this->input->post("phone_1"),
					"phone_2"       => $this->input->post("phone_2"),
					"address"       => $this->input->post("address"),
					"email"         => $this->input->post("email"),
					"facebook"      => $this->input->post("facebook"),
					"instagram"     => $this->input->post("instagram"),
					"whatsapp"     		=> $this->input->post("whatsapp"),
				);

			}

			$update = $this->settings_model->update(array("id" => $id), $data);

			// TODO Alert sistemi eklenecek...
			if($update){

				$alert = array(
					"title" => "İşlem Başarılı",
					"text" => "Kayıt başarılı bir şekilde güncellendi",
					"type"  => "success"
				);

			} else {

				$alert = array(
					"title" => "İşlem Başarısız",
					"text" => "Kayıt Güncelleme sırasında bir problem oluştu",
					"type"  => "error"
				);
			}


			// Session Update İşlemi

			$settings = $this->settings_model->get();
			$this->session->set_userdata("settings", $settings);

			// İşlemin Sonucunu Session'a yazma işlemi...
			$this->session->set_flashdata("alert", $alert);

			redirect(base_url("settings"));

		} else {

			$viewData = new stdClass();

			/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
			$viewData->viewFolder = $this->viewFolder;
			$viewData->subViewFolder = "update";
			$viewData->form_error = true;

			/** Tablodan Verilerin Getirilmesi.. */
			$viewData->item = $this->settings_model->get(
				array(
					"id"    => $id,
				)
			);

			$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
		}

	}


}
