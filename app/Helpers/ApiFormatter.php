<?php

namespace App\Helpers;

class ApiFormatter
{
  protected static $response = [
    'status' => null,
    'message' => null,
    'data' => null
  ];

  public static function createApi($status = null, $msg = null, $data = null)
  {
    self::$response['status'] = $status;
    self::$response['message'] = $msg;
    self::$response['data'] = $data;

    return response()->json(self::$response, self::$response['status']);
  }

  public static function error($error, $data = null)
  {
    self::$response['status'] = $error->status;
    self::$response['message'] = $error->getMessage();
    self::$response['data'] = $data;

    return response()->json(self::$response, self::$response['status']);
  }

}