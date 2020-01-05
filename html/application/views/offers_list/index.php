<div class='offers_table'>
<?php

echo "
    <div class='offers_header row'>
        <div class='offer_name col'>Nazwa oferty</div>
        <div class='offer_salary col'>Pensja</div>
        <div class='offer_company_name col'>Nazwa firmy</div>
        <div class='offer_city col'>Miasto</div>
    </div>";


if (array_key_exists('offers', $main_content)) {
    foreach ($main_content['offers'] AS $offer) {
        echo "
            <div class='offer row'>
                <div class='offer_name col'>{$offer['offer_name']}</div>
                <div class='offer_salary col'>{$offer['salary']}</div>
                <div class='offer_company_name col'>{$offer['company_name']}</div>
                <div class='offer_city col'>{$offer['city']}</div>
            </div>";
    }
}
?>
</div>

<div class='pagination_div row'>
    <?php

    echo $offersModel->getPaginationHTML($page, $maxPage);

    ?>
</div>