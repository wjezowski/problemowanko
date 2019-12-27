<div class='offers_table'>
<?php

$url = 'localhost:8095/get.offers';



$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

//execute post
$result = curl_exec($ch);
var_dump(curl_error($ch));
//close connection
curl_close($ch);

var_dump($result);

echo "
    <div class='offers_header row'>
        <div class='offer_name'>Nazwa oferty</div>
        <div class='offer_salary'>Pensja</div>
        <div class='offer_company_name'>Nazwa firmy</div>
        <div class='offer_city'>Miasto</div>
    </div>";


if (array_key_exists('offers', $main_content)) {
    foreach ($main_content['offers'] AS $offer) {
        echo "
            <div class='offer row'>
                <div class='offer_name'>{$offer['offer_name']}</div>
                <div class='offer_salary'>{$offer['salary']}</div>
                <div class='offer_company_name'>{$offer['company_name']}</div>
                <div class='offer_city'>{$offer['city']}</div>
            </div>";
    }
}
?>
</div>
