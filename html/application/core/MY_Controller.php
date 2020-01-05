<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* @property string $title Tytuł strony
* @property string $view Nazwa widoku do wczytania
* @property array $data Dane przekazywane do site_template
* @property array $contentData Dane przekazywane do dalszego widoku
*/
class MY_Controller extends CI_Controller {
	
	private $header = '';
	private $title = '';
	private $view = '';
	private $data = [];
	private $contentData = [];
	
	public function __construct() {
		parent::__construct();
		
		
		$this->load->helper('html');
		$this->load->library('session');

		$this->initialize();
	}

	protected function render() {
		$this->load->view($this->prepareData());
	}
	
	protected function addContentData(string $index, $data): self {
		$this->contentData[$index] = $data;
		return $this;
	}

	private function getContentData(): array {
		return $this->contentData;
	}

	protected function setHeader($header): self {
		$this->header = $header;
		return $this;
	}

	private function getHeader() {
		return $this->header;
	}

	protected function setTitle(string $title): self {
		$this->title = $title;
		return $this;
	}

	private function getTitle(): string {
		return $this->title;
	}

	protected function setView(string $view): self {
		$this->view = $view;
		return $this;
	}

	private function getView(): string {
		return $this->view;
	}
	
	private function prepareData(): array {
		$this->data['header'] = $this->getHeader();
		$this->data['title'] = $this->getTitle();
		$this->data['view'] = $this->getView();
		$this->data['main_content'] = $this->getContentData();

		return $this->data;
	}

	private function initialize(): void {
		$this
			->setTitle('Problemowanko xD')
			->setView($this->router->class .'/'. $this->router->method);
	}

	protected function redirect(string $url): void {
		header('Location: '. $url);
		die;
	}
}
