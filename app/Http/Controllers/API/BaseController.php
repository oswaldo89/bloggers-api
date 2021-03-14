<?php
/**
 * Created by IntelliJ IDEA.
 * User: oswaldogh89
 * Date: 14/03/21
 * Time: 16:10
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller as Controller;


class BaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}

