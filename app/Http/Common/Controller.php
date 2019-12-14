<?php

namespace App\Http\Common;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function validatorFrom($rule, $mes = []) {
        $defaultMessages = [
            'required'   => ':attribute 参数不存在',
            'email'      => '邮箱不正确',
            'unique'     => ':attribute 已被占用',
            'alpha_dash' => ':attribute 有不允许字符',
            'max'        => ':attribute 超过最大限制',
            'confirmed'  => '两次密码不一致',
        ];
        $messages = array_merge($defaultMessages, $mes);

        $validator = Validator::make(Input::all(), $rule, $messages);

        if ($validator->fails()) {
            $messages = $validator->errors();
            foreach ($messages->all() as $msg) {
                return $this->echoErr($msg);
            }
        }

        return false;
    }



    /**
     * 输出成功数据
     * @param array  $data
     * @param int    $status
     * @param string $msg
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function echoOk($data = [], $status = 1, $msg = '操作成功') {
        if(empty($data)){
            $data = (object)$data;
        }
        $data = [
            'status' => $status,
            'data'   => $data,
            'msg'    => $msg,
            'code'   => 0,
        ];
//        $r = json_encode($data,true);
//        $r = str_replace('null',"\"\"",$r);
//        return $r;
        return response()->json($data);
    }

    /**
     * 输出错误数据
     * @param string $msg
     * @param string $code
     * @param int    $status
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function echoErr($msg = '', $code = '100001', $status = 0, $title = '提示信息', $statusCode = 200) {
        $data = [
            'status' => $status,
            'data'   => (object)[],
            'msg'    => $msg,
            'code'   => $code,
//            'title'  => $title,
        ];

        return response()->json($data, $statusCode);
    }
}
