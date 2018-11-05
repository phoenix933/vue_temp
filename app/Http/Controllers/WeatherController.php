<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWoeid($name)
    {
        $city = file_get_contents(url('weather.php?command=search&keyword='.$name));
        $json = json_decode($city, true);
        return $json;
    }
    public function getData($woeid)
    {
        $data = file_get_contents(url('weather.php?command=location&woeid='.$woeid));
        $json = json_decode($data, true);
        return $json;
    }
}
