<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* @property string $title Tytuł strony
* @property array $data Dane przekazywane do widoku
*/
class MY_Controller extends CI_Controller {
	
	private $title = 'Problemowanko xD';
	private $data = [];
	
	public function __construct() {
		parent::__construct();
		
		$this->prepareData();
	}
	
	protected function addData(string $index, mixed $data): void {
		$this->data[$index] = $data;
	}
	
	protected function getData(): array {
		return $this->data;
	}
	
	private function prepareData(): void {
		$this->data['title'] = $this->title;
		$this->data['main_content'] = '';
		$this->data['class'] = $this->router->fetch_class();
	}
}
