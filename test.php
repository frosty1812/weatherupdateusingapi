<?php
    define('API_KEY', 'AI3FvVgDGVCbFmSppSU533wJ9qJdgcmK');

    $user_ip = '14.162.157.161';
    $apikey = API_KEY;
    $details = json_decode(file_get_contents("http://ipinfo.io/{$user_ip}/json"));
    $city_name = $details->city;
    $loc_details = json_decode(file_get_contents("http://dataservice.accuweather.com/locations/v1/cities/search?apikey={$apikey}&q={$city_name}"));
    $loc_key = $loc_details[0]->Key;
    $forecast_details = json_decode(file_get_contents("http://dataservice.accuweather.com/forecasts/v1/daily/1day/{$loc_key}?apikey={$apikey}&metric=true"));
        print_r($forecast_details);
?>