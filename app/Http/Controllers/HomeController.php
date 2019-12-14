<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Common\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');

    }

    public function test(Request $request){

        if($request->method() == 'GET'){
            return view('test');
        }else{
            $fromErr = $this->validatorFrom([
                'a'=>'required',
                'b'=>'required',
                'c'=>'required',
            ],[
                'a.required'=>'a是必须的',
                'b.required'=>'b是必须的',
                'c.required'=>'c是必须的'
            ]);
            if($fromErr){//输出表单验证错误信息
                return $fromErr;
            }

            $data = [];
            return $this->echoOk($data,1,'成功');
        }

    }

    public function test2(){

        return view('test2');
    }
}
