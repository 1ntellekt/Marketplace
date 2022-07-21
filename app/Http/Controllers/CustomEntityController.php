<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomEntityController extends Controller
{
    public function createCustomEntity($apiKey, $entityName, $values)
    {
        $uri = "https://online.moysklad.ru/api/remap/1.2/entity/customentity";
        $client = new ApiClientMC($uri,$apiKey);
        $bodyEntity = [
            "name" => $entityName,
        ];
        $entityId = $client->requestPost($bodyEntity)->id;

        foreach($values as $val){
            $this->createEntityElement($apiKey,$entityId,$val);
        }

    }


    public function createEntityElement($apiKey,$entityId,$elementName)
    {
        $uri = "https://online.moysklad.ru/api/remap/1.2/entity/customentity/".$entityId;
        $client = new ApiClientMC($uri,$apiKey);
        $bodyEntityEl = [
            "name" => $elementName,
        ];
        $client->requestPost($bodyEntityEl);
    }

}
