<?php

namespace App\Http\Controllers;

use App\Simplonien;
use Illuminate\Http\Request;

class SimplonienController extends Controller
{
    public function getData () {
    	//récupère les données du fichier json
    	$jsonData = file_get_contents('../public/simploniensGeo.geojson');
    	$data = json_decode($jsonData, true);
    	$datas = $data['features'];

    	//intègre les données du json dans mySql
    	foreach ($datas as $value){
    		$simplonien = new Simplonien;
    		
    		$simplonien->nom = $value['properties']['nom'];
    		$simplonien->prenom = $value['properties']['prenom'];
    		$simplonien->codePostale = $value['properties']['codePostal'];
    		$simplonien->cv = $value['properties']['cv'];
    		$simplonien->punchline = $value['properties']['punchline'];
    		$simplonien->site = $value['properties']['sitePerso'];
    		$simplonien->github = $value['properties']['github'];
    		$simplonien->twitter = $value['properties']['twitter'];
    		$simplonien->linkedin = $value['properties']['linkedin'];
    		$simplonien->facebook = $value['properties']['facebook'];
    		$simplonien->longitude = $value['geometry']['coordinates'][0];
    		$simplonien->lattitude = $value['geometry']['coordinates'][1];
    		
    		$simplonien->save();
    	}

        $simploniens = Simplonien::all();

    	return view('map', ['simploniens' => $simploniens]);
    }

}
