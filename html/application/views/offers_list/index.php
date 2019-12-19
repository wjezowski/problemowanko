
<?php

if (array_key_exists('offers', $main_content)) {
    foreach ($main_content['offers'] AS $offer) {
        echo $offer['offer_name'] .' | '. $offer['salary'] .' | '. $offer['company_name'] .' | '. $offer['city'] .'<br />';
    }
}