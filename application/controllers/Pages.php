<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public $data;

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url_current");
	}
	public function index()
	{
		$this->load->helper('directory');
		$map = directory_map(FCPATH . 'assets/media/images/partner');
		// print_r($map);die;
		$this->data = [
			'page'=>[
				'title' => APP_NAME . " • Logistics Delivered Better"
			],
			'brands' => $map,
			'services' => [
				["Door to Door"],
				["Fright Forwarding", "Sea, Air, Rail"],
				["Hazardous Cargo", "Management & Movement"],
				["Heavy Lift"],["ODC Consignments"],
				["Project Cargo"],
				["3PL"],["Custom Broker"],
				["Exhibition Cargo"],
				["Cargo Consolidation"],
				["Consultancy"],
				["Bonded Warehousing"],
				["Cargo Insurance"],
				["Packing"],
				["Labeling"],
				["Distribution"],
			]
		];
		$this->load->view('pages/index', $this->data);
	}
	public function features()
	{
		$this->data['page'] = [
			'title' => APP_NAME . " • Features"
		];
		$this->load->view('pages/features', $this->data);
	}
	
	public function track()
	{
		$this->data['page'] = [
			'title' => APP_NAME . " • Track Your Consignment"
		];
		$this->load->view('pages/track', $this->data);
	}
}
