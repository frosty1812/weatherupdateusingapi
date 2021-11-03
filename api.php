<?php
    define('API_KEY', 'GvS4HgPXR114E0KDNMhrAIxQq27dZr3O');

    $details = json_decode(file_get_contents("http://ipinfo.io/json"));
    $user_ip = $details->ip;
    $apikey = API_KEY;
    $city_name = $details->city;
    $loc_details = json_decode(file_get_contents("http://dataservice.accuweather.com/locations/v1/cities/search?apikey={$apikey}&q={$city_name}"));
    $loc_key = $loc_details[0]->Key;
    $forecast_details = json_decode(file_get_contents("http://dataservice.accuweather.com/forecasts/v1/daily/1day/{$loc_key}?apikey={$apikey}&metric=true"));

    $min_temp = $forecast_details->DailyForecasts[0]->Temperature->Minimum->Value . " °C";
    $max_temp = $forecast_details->DailyForecasts[0]->Temperature->Maximum->Value . " °C";
    $day = $forecast_details->DailyForecasts[0]->Day->IconPhrase;
    $night = $forecast_details->DailyForecasts[0]->Night->IconPhrase;

?>