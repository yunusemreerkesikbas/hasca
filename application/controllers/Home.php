<?php

class Home extends CI_Controller {

	public $viewFolder = "";

	public function __construct()
	{
		parent::__construct();

		$this->viewFolder = "home_v";

	}

	public function index(){
		$viewData = new stdClass();

		$this->load->model("aboutUs_model");
		$this->load->model("mission_vision_model");
		$this->load->model("product_category_model");
		$this->load->model("blog_model");
		$this->load->model("reference_model");
		$this->load->model("slider_model");
		$this->load->model("settings_model");
		$about = $this->aboutUs_model->get_all(
			array(
				"isActive" => 1
			)
		);
		$slider = $this->slider_model->get_all(
			array(
				"isActive" => 1
			)
		);
		$blogs = $this->blog_model->get_all(
			array(
				"isActive" => 1
			)
		);

		$references = $this->reference_model->get_all(
			array(
				"isActive" => 1
			)
		);
		$categories = $this->product_category_model->get_all(
			array(
				"isActive" => 1
			)
		);
		$mission_vision = $this->mission_vision_model->get_all(
			array(
				"isActive" => 1
			)
		);

		$viewData->slider = $slider;
		$viewData->about = $about;
		$viewData->categories = $categories;
		$viewData->blogs = $blogs;
		$viewData->references = $references;
		$viewData->about = $about;
		$viewData->mission_vision = $mission_vision;
		$viewData->viewFolder   = "home_v";
		$this->load->view($viewData->viewFolder, $viewData);

	}

	public function product_list(){

		$viewData = new stdClass();

		$viewData->viewFolder = "product_v";
		$this->load->model("product_model");
		$this->load->model("product_category_model");
		$viewData->products = $this->product_model->get_all(
			array(
				"isActive" => 1 ,
			),"rank ASC"
		);
		$viewData->categories = $this->product_category_model->get_all(
			array(
				"isActive" => 1 ,
			)
		);

//		print_r($viewData->products);
//		die();
		$this->load->view($viewData->viewFolder, $viewData);

	}
	public function about(){

		$viewData = new stdClass();

		$viewData->viewFolder = "about_v";

		$this->load->view($viewData->viewFolder, $viewData);

	}
	public function mission_vision(){

		$viewData = new stdClass();

		$viewData->viewFolder = "mission_vision_v";

		$this->load->view($viewData->viewFolder, $viewData);

	}
	public function contact(){

		$viewData = new stdClass();

		$viewData->viewFolder = "contact_v";

		$this->load->view($viewData->viewFolder, $viewData);

	}


	public function blog(){

		$viewData = new stdClass();

		$viewData->viewFolder = "blog_v";

		$this->load->view($viewData->viewFolder, $viewData);

	}

	public function blog_detail($url = ""){

		$viewData = new stdClass();
		$viewData->viewFolder = "blog_v";

		$this->load->model("blog_model");

		$viewData->blog = $this->blog_model->get(
			array(
				"isActive"  => 1,
				"url"       => $url
			)
		);

		$this->load->view($viewData->viewFolder, $viewData);

	}


}
