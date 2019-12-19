<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * @property offers_model $offersModel
 */
class Offers_list extends MY_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('offers_model');
	}

	public function index() {
		$this->addContentData('offers', $this->offersModel->getOffers());
		
		$this->render();
	}
}
