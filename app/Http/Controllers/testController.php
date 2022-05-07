<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class testController extends Controller
{

    private $user;
    public function __construct(User $user){
        $this->user = $user;
    }
    public function getUserInfo(Request $request){
        $user = JWTAuth::toUser($request->token);
        return view('/')->with(response()->json(['result' => $user]));
    }
}
