<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PH;
use App\Models\Temp;
use App\Services\arimaModel;
class ArimaController extends Controller
{

    public function index()
    {
        //retrive newest 30 data
        $data = PH::orderBy('id', 'desc')->limit(200)->pluck('ph')->reverse()->toArray();
        $tds = PH::orderBy('id', 'desc')->limit(200)->pluck('tds')->reverse()->toArray();
        $tempIn = Temp::orderBy('id', 'desc')->limit(100)->pluck('temp_in')->reverse()->toArray();
        $tempOut = Temp::orderBy('id', 'desc')->limit(100)->pluck('temp_out')->reverse()->toArray();

        //multiple 100 all data
        $data = array_map(function($value) {
            return $value * 100;
        }, $data);

        $tds = array_map(function($value) {
            return $value * 100;
        }, $tds);

        $tempIn = array_map(function($value) {
            return $value * 100;
        }, $tempIn);

        $tempOut = array_map(function($value) {
            return $value * 100;
        }, $tempOut);
        

        // ARIMA
        $arima = new arimaModel();

        //order
        $order = [0, 1, 1];
        $order2 = [0, 1, 1];
        $order3 = [0, 1, 1];

        // Forecast
        $forecast = $arima->arima($data, $order, 30);
        $tdsForecast = $arima->arima($tds, $order2, 30);
        $tempInForecast = $arima->arima($tempIn, $order3, 30);
        $tempOutForecast = $arima->arima($tempOut, $order2, 30);

        //divide 100 all data
        $forecast = array_map(function($value) {
            return $value / 100;
        }, $forecast);

        $tdsForecast = array_map(function($value) {
            return $value / 100;
        }, $tdsForecast);

        $tempInForecast = array_map(function($value) {
            return $value / 100;
        }, $tempInForecast);

        $tempOutForecast = array_map(function($value) {
            return $value / 100;
        }, $tempOutForecast);


        return view('data_monitoring', compact('data', 'forecast', 'tds', 'tdsForecast', 'tempIn', 'tempInForecast', 'tempOut', 'tempOutForecast'));

    }

    
        
}
