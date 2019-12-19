<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    public function model($model, $db_conn = FALSE) {
        $name = '';
        if (is_string($model)) {
            foreach (explode('_', $model) AS $fragment) {
                $name .= (empty($name) ? $fragment : ucfirst($fragment));
            }
        }

        return parent::original_model_method($model, $name, $db_conn);
    }

    public function view(array $vars = [], string $view = 'site_template', bool $return = false) {
        return parent::original_view_method($view, $vars, $return);
    }
}