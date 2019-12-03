<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * @property offers_model $offersModel
 */
class Offers_list extends MY_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('offers_model', 'offersModel');
	}

	public function index() {
		$this->addContentData('offers', $this->offersModel->getOffers());

		$this->load->view('site_template', $this->prepareData());
	}
}
