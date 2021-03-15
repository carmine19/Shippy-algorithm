<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Airport;
use App\Flight;

class HomeController extends Controller
{
    public function index()
    {

        $airports = Airport::all();
        $flights = Flight::all();
        $sql = DB::select('SELECT
                    stopover AS scalo,
                    `code` AS codice, MIN(price) AS prezzo
                    FROM `flights`
                    JOIN `airports`ON flights.airport_id = airports.id
                    WHERE (stopover <=1)
                    GROUP BY airport_id, flights.stopover
                    ORDER BY `prezzo` ASC');
        $data = [
            'airports' => $airports,
            'flights' => $flights,
            'sql' => $sql,
        ];

        return view('welcome', $data);
    }
}
