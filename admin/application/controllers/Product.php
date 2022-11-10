<?php

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

//		if(!get_active_user()){
//			redirect(base_url("login"));
//		}
		$this->load->model("product_model");
		$this->load->model("product_category_model");

		$this->viewFolder = "product_v";
		$this->load->library("session");
	}
	public function index(){

		$viewData = new stdClass();

		/** Tablodan Verilerin Getirilmesi.. */
		$items = $this->product_model->get_all(
			array(), "rank ASC"
		);

		/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "list";
		$viewData->items = $items;

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
	public function addProduct(){
		$viewData = new stdClass();
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "add";
		$viewData->categories = $this->product_category_model->get_all(
			array(
				"isActive"  => 1
			)
		);

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
	public function save() {
		$this->load->library("form_validation");
		if($_FILES["img_url"]["name"] == ""){

			$alert = array(
				"title" => "İşlem Başarısız",
				"text" => "Lütfen bir görsel seçiniz",
				"type"  => "error"
			);

			// İşlemin Sonucunu Session'a yazma işlemi...
			$this->session->set_flashdata("alert", $alert);

			redirect(base_url("product/addProduct"));

			die();
		}



		$this->form_validation->set_rules("title", "Başlık", "required|trim");

		$this->form_validation->set_message(
			array(
				"required"  => "<b>{field}</b> alanı doldurulmalıdır"
			)
		);

		$validate = $this->form_validation->run();


		if($validate){

			$file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

			$config["allowed_types"] = "jpg|jpeg|png";
			$config["upload_path"]   = "uploads/$this->viewFolder/";
			$config["file_name"] = $file_name;

			$this->load->library("upload", $config);

			$upload = $this->upload->do_upload("img_url");


			if ($upload){

				$uploaded_file = $this->upload->data("file_name");


				$insert = $this->product_model->add(
					array(
						"title"         => $this->input->post("title"),
						"description"   => $this->input->post("description"),
						"category_id"   =>$this->input->post("category_id"),
						"img_url"       => $uploaded_file,
						"url"           => convertToSEO($this->input->post("title")),
						"rank"          =>0,
						"isActive"      =>1,
						"createdAt"     => date("Y-m-d H:i:s")
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

				// İşlemin Sonucunu Session'a yazma işlemi...
				$this->session->set_flashdata("alert",$alert);

				redirect(base_url("product"));

			} else {

				$viewData = new stdClass();

				/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
				$viewData->viewFolder = $this->viewFolder;
				$viewData->subViewFolder = "add";
				$viewData->form_error = true;

				$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
			}

		}
	}

	public function update_form($id){

		$viewData = new stdClass();

		/** Tablodan Verilerin Getirilmesi.. */
		$item = $this->product_model->get(
			array(
				"id"    => $id,
			)
		);
		$viewData->categories = $this->product_category_model->get_all(
			array(
				"isActive"  => 1
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
		$this->form_validation->set_rules("title", "Başlık", "required|trim");

		$this->form_validation->set_message(
			array(
				"required"  => "<b>{field}</b> alanı doldurulmalıdır"
			)
		);


		$validate = $this->form_validation->run();
		if($validate){

			if($_FILES["img_url"]["name"] !== "") {


				$file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

				$config["allowed_types"] = "jpg|jpeg|png";
				$config["upload_path"] = "uploads/$this->viewFolder/";
				$config["file_name"] = $file_name;

				$this->load->library("upload", $config);

				$upload = $this->upload->do_upload("img_url");

				if ($upload) {

					$uploaded_file = $this->upload->data("file_name");

					$data = array(
						"title" => $this->input->post("title"),
						"img_url" => $uploaded_file,
						"category_id"   => $this->input->post("category_id"),
					);

				} else {

					$alert = array(
						"title" => "İşlem Başarısız",
						"text" => "Görsel yüklenirken bir problem oluştu",
						"type" => "error"
					);

					$this->session->set_flashdata("alert", $alert);

					redirect(base_url("product/update_form/$id"));

					die();

				}
				$update = $this->product_model->update(
					array(
						"id"    => $id
					),
					array(
						"title"         => $this->input->post("title"),
						"description"   => $this->input->post("description"),
						"url"           => convertToSEO($this->input->post("title")),
						"category_id"   => $this->input->post("category_id"),
						"img_url" => $uploaded_file,
					)
				);

			} else {
//
				// BU
				$update = $this->product_model->update(
					array(
						"id"    => $id
					),
					array(
						"title"         => $this->input->post("title"),
						"description"   => $this->input->post("description"),
						"url"           => convertToSEO($this->input->post("title")),
						"category_id"   => $this->input->post("category_id"),
					)
				);

			}



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
					"text" => "Güncelleme sırasında bir problem oluştu",
					"type"  => "error"
				);


			}

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("product"));

		} else {

			$viewData = new stdClass();

			/** Tablodan Verilerin Getirilmesi.. */
			$item = $this->product_model->get(
				array(
					"id"    => $id,
				)
			);

			/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
			$viewData->viewFolder = $this->viewFolder;
			$viewData->subViewFolder = "update";
			$viewData->form_error = true;
			$viewData->item = $item;

			$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
		}

	}

	public function delete($id){
		$fileName = $this->product_model->get(
			array(
				"id"    => $id
			)
		);

		$delete = $this->product_model->delete(
			array(
				"id"    => $id
			)
		);

		// TODO Alert Sistemi Eklenecek...
		if($delete){
			unlink("uploads/{$this->viewFolder}/$fileName->img_url");
			$alert = array(
				"title" => "İşlem Başarılı",
				"text" => "Kayıt başarılı bir şekilde silindi",
				"type"  => "success"
			);

		} else {

			$alert = array(
				"title" => "İşlem Başarısız",
				"text" => "Kayıt silme sırasında bir problem oluştu",
				"type"  => "error"
			);


		}

		$this->session->set_flashdata("alert", $alert);
		redirect(base_url("product"));


	}

	/** @noinspection PhpUnused */
	public function rankSetter(){

		// sıralamayı değiştirme
		$data = $this->input->post("data"); // custom.js ile gelen data

		parse_str($data, $order); // gelen değeri array şeklinde gösterir dah güzel şekilde

		$items = $order["ord"];

		foreach ($items as $rank => $id){

			$this->product_model->update(
				array(
					"id"        => $id,
					"rank !="   => $rank // sadece değişen rankleri aldık
				),
				array(
					"rank"      => $rank
				)
			);

		}

	}


	public function isActiveSetter($id){

		if($id){

			$isActive = ($this->input->post("data") === "true") ? 1 : 0;

			$this->product_model->update(
				array(
					"id"    => $id
				),
				array(
					"isActive"  => $isActive
				)
			);
		}
	}







}
