<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;

class DirectionsController extends Controller
{
    public function test()
    {
        $response = \GoogleMaps::load('directions')
        ->setParam([
            'origin'          => 'BS4 4DG',
            'waypoints'       => [
                                  'optimize:true',
                                  'CW5 5PE',
                                  'GL12 8AA',
                                  'EH1 2NG'

            ],
            'region' => 'uk',
            'destination'     => 'BS4 4SU',
        ])
        ->get();

        dd($response);
    }
}
