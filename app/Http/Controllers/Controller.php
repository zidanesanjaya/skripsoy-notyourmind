<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseCreate($anggota='',$show=false){
        if(isset($anggota->wasRecentlyCreated) || isset($anggota['success'])){
            $save= array(
                'status' => true,
                'message'=>'Berhasil Menyimpan Data',
                'notif'=>'success',
            );
            
            if($show){
                $operation['anggota'] = $anggota;
            }
        } else{
            $save= array(
                'status' => false,
                'message'=> $show?$anggota:'Gagal Menyimpan Data',
                'notif'=>'danger',
            );
        }
        return back()->with($save['notif'],$save['message']);
    }
}
