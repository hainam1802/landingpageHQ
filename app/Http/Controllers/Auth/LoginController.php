<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postLogin(Request $request){

    try{
        $url = '/login';
        $method = "POST";
        $data = array();
        $data['username'] = $request->username;
        $data['password'] = $request->password;
        $data['remember_token'] = $request->remember_token;
        return response()->json([
            'status' => 1,
            'message' => 'Thành công',
            'data'=>$data
        ]);
    }
    catch(\Exception $e){
        Log::error($e);
        return response()->json([
            'status' => 0,
            'message' => 'Có lỗi phát sinh khi lấy nhà mạng nạp thẻ, vui lòng liên hệ QTV để xử lý.',
        ]);
    }


}
}
