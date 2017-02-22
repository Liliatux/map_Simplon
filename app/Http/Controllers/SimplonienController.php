<?php

namespace App\Http\Controllers;

use App\Simploniens;
use Illuminate\Http\Request;

class SimplonienController extends Controller
{
    public function getData () {
    	$jsonData = file_get_contents('../public/simploniensGeo.geojson');
    	$data = json_decode($jsonData, true);

    	return $data['id'];
    	// $simplonien = new Simplonien;
    	// $simplonien->id = $data['']
    }

}
