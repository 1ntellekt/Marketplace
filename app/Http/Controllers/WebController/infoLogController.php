<?php

namespace App\Http\Controllers\webController;

use App\Http\Controllers\Controller;
use App\Models\InfoLogModel;
use Illuminate\Http\Request;

class infoLogController extends Controller
{
    public function index($accountId){
        dd($accountId);
        $category = InfoLogModel::all();
        //

        $array_log = [];
        $array_log_created_at = [];

        foreach ($category as $item){
            if ($item->accountId == $accountId){
                array_push($array_log, $item->message);
                array_push($array_log_created_at, $item->created_at);
            }
        }




        return view('web.InfoLog', ['accountId'=>$accountId, 'array_log'=>$array_log, 'array_log_created_at'=>$array_log_created_at]);
    }
}