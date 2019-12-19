<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    public function render(array $vars = [], string $view = 'site_template', bool $return = false) {
        return parent::view($view, $vars, $return);
    }
}