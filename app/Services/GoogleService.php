<?php

namespace App\Services;

use GuzzleHttp\Client;

class GoogleService
{
    public function getReviews()
    {
        $apiKey = 'AIzaSyBz04kHCft1G5qKB0alU08ujm_9QvBFH08';
        $placeId = 'ChIJZwMM94k40i0RZ7Nj9uLha3Y'; // The Place ID of the location you want to fetch reviews for

        sleep(1); // usage limits https://developers.google.com/places/web-service/usage-and-billing#other-usage-limits

        $request = "https://maps.googleapis.com/maps/api/place/details/json?";
        $params = array(
            "place_id" => $placeId,
            "key"      => $apiKey,
            "fields"   => array('website', 'formatted_phone_number'),
        );

        $request .= http_build_query($params);

        $json = file_get_contents($request);
        $data = json_decode($json, true);

        return $data['result']['reviews'];
    }
}
