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

	public function index(int $page = 1) {
		$maxPage = $this->offersModel->getMaxPage();
		if ($page > $maxPage) {
			$this->redirect('/offers_list/'. $maxPage);
		}
		else if ($page < 1) {
			$this->redirect('/offers_list');
		}
		$this->addContentData('offers', $this->offersModel->getOffers($page));
		$this->addContentData('page', $page);
		$this->addContentData('maxPage', $maxPage);
		$this->addContentData('offersModel', $this->offersModel);

		$this->render();
	}
}
