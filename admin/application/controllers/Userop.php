<?php

class Userop extends CI_Controller {

	public $viewFolder = "";

	public function __construct()
	{
		parent::__construct();

		$this->viewFolder = "users_v";

		$this->load->model("user_model");

	}

	public function login(){


		if(get_active_user()){
			redirect(base_url());
		}

		$viewData = new stdClass();

		/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "login";

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

	}

	public function do_login(){


		if(get_active_user()){
			redirect(base_url());
		}

		$this->load->library("form_validation");

		// Kurallar yazilir..
		$this->form_validation->set_rules("user_email", "E-posta", "required|trim|valid_email");
		$this->form_validation->set_rules("user_password", "Şifre", "required|trim");

		$this->form_validation->set_message(
			array(
				"required"    => "<b>{field}</b> alanı doldurulmalıdır",
				"valid_email" => "Lütfen geçerli bir e-posta adresi giriniz",
			)

		);


		// Form Validation Calistirilir..
		if($this->form_validation->run() == FALSE){

			$viewData = new stdClass();

			/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
			$viewData->viewFolder = $this->viewFolder;
			$viewData->subViewFolder = "login";
			$viewData->form_error = true;

			$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

		} else {


			$user = $this->user_model->get(
				array(
					"email"     => $this->input->post("user_email"),
					"password"  => md5($this->input->post("user_password")),
					"isActive"  => 1
				)
			);

			if($user){

				$alert = array(
					"title" => "İşlem Başarılı",
					"text" => "<b>$user->user_name</b> hoşgeldiniz",
					"type"  => "success"
				);

				$this->session->set_userdata("user", $user);
				$this->session->set_flashdata("alert", $alert);


				redirect(base_url());

			} else {

				// Hata Verilecek...

				$alert = array(
					"title" => "İşlem Başarısız",
					"text" => "Lütfen giriş bilgilerinizi kontrol ediniz",
					"type"  => "error"
				);

				$this->session->set_flashdata("alert", $alert);

				redirect(base_url("login"));

			}

		}
	}

	public function logout(){

		$this->session->unset_userdata("user");
		redirect(base_url("login"));

	}





}
