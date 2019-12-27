<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_model extends MY_Model {
    public function getOffers(): array {
        $offers = $this->getByCurl('localhost', DATABASE_PORT, 'get.offers');

        var_dump($offers);die;
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
