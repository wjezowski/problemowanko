<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_model extends MY_Model {
    private $perPage = 25;

    private $numberOfOffers = null;
    private $maxPage = null;

    public function getOffers(int $page): array {
        // $offers = $this->getByCurl('localhost', DATABASE_PORT, 'get.offers');

        // var_dump($offers);die;

        $offset = $page * $this->perPage;
        for ($i = $offset; $i < $offset + $this->perPage && $i < $this->getNumberOfOffers(); ++$i) {
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

    public function getNumberOfOffers(): int {
        if (is_null($this->numberOfOffers)) {
            $this->numberOfOffers = 997;
        }

        return $this->numberOfOffers;
    }

    public function getMaxPage(): int {
        if (is_null($this->maxPage)) {
            $this->maxPage = $this->getNumberOfOffers() / $this->perPage;
        }

        return $this->maxPage;
    }
}
