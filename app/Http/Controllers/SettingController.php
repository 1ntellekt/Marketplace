<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function getSettings()
    {
        //Проверка есть ли необходимые найстройки

        $directory = public_path().'/Config/data';

        $filesInFolder = File::files($directory);

        $usersSettings = [];

        foreach($filesInFolder as $file) { 
            //$file = pathinfo($path);
            if(str_ends_with($file->getFilename(),'.json')){
                
                $data = file_get_contents($directory.'/'.$file->getFilename());
                $unser = json_encode( unserialize($data) );
                $setting = json_decode($unser);
                array_push($usersSettings,$setting);
            }
        } 

        return $usersSettings;
    }
}
