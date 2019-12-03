<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_model extends CI_Model {
    
    public function getOffers(): array {
        $offers = [];

        for ($i = 0; $i < 10; ++$i) {
            $offers[] = [
                'id' => $i,
                'offer_name' => 'Nazwa oferty '. $i,
                'company_name' => 'Nazwa firmy '.  $i,
                'salary' => 'Pensja '. $i,
                'city'  => 'Miasto '. $i,
                'original_url' => 'link_'. $i,
            ];
        }

        return $offers;
    }
}
