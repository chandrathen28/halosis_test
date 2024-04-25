<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sendResponse($result, $message): JsonResponse
    {
        $response = [
            'success' => true,
            'message' => $message,
            ...$result
        ];

        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @param $message
     * @param $code
     * @return JsonResponse
     */
    public function sendError($message, $code): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        return response()->json($response, $code);
    }

    /**
     * return error response.
     *
     * @param $message
     * @param $code
     * @return JsonResponse
     */
    public function sendValidationError($data): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => "Validation errors",
            'details' => $data
        ];

        return response()->json($response, 422);
    }

    function guardAPI(): \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
    {
        return auth()->guard('api');
    }
}
