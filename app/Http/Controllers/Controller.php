<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static function response($code, $data)
    {
        $header['status_code'] = $code;
        if (!is_array($data)) {
            $data = ['message' => $data];
        }
        
        return response(['content' => ['header' => $header, 'data' => $data]], $code ?? 200);
    }
}
