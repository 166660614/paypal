<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function setError($status=200,$data=[],$msg=''){
        return [
            'status'=>$status,
            'msg'=>config('errcode.code')[(int)$status],
            'data'=>$data
        ];
    }
}
