<?php

namespace App\Observers;

use App\Models\InfoLogModel;
use Illuminate\Support\Facades\DB;

class InfoLogModelObserver
{
    /**
     * Handle the InfoLogModel "created" event.
     *
     * @param  \App\Models\InfoLogModel  $infoLogModel
     * @return void
     */
    public function created(InfoLogModel $infoLogModel)
    {
        //$count = InfoLogModel::count();

        $accountIds = InfoLogModel::all('accountId');

        foreach($accountIds as $accountId){

            $query = InfoLogModel::query();
            $logs = $query->where('accountId',$accountId->accountId)->get();
            if(count($logs) > 20){
                DB::table('info_log_models')
                    ->where('accountId','=',$accountId->accountId)
                    ->orderBy('created_at', 'ASC')
                    ->limit(1)
                    ->delete();
            }

        }

        // if($count > 200){
        //     DB::table('info_log_models')
        //     ->orderBy('created_at', 'ASC')
        //     ->limit(1)
        //     ->delete();
        // }
    }

    /**
     * Handle the InfoLogModel "updated" event.
     *
     * @param  \App\Models\InfoLogModel  $infoLogModel
     * @return void
     */
    public function updated(InfoLogModel $infoLogModel)
    {
        //
    }

    /**
     * Handle the InfoLogModel "deleted" event.
     *
     * @param  \App\Models\InfoLogModel  $infoLogModel
     * @return void
     */
    public function deleted(InfoLogModel $infoLogModel)
    {
        //
    }

    /**
     * Handle the InfoLogModel "restored" event.
     *
     * @param  \App\Models\InfoLogModel  $infoLogModel
     * @return void
     */
    public function restored(InfoLogModel $infoLogModel)
    {
        //
    }

    /**
     * Handle the InfoLogModel "force deleted" event.
     *
     * @param  \App\Models\InfoLogModel  $infoLogModel
     * @return void
     */
    public function forceDeleted(InfoLogModel $infoLogModel)
    {
        //
    }
}
