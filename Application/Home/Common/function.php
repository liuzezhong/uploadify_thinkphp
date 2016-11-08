<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2016/11/8
 * Time: 13:56
 */

function show($status,$message,$data = array()){
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );

    exit(json_encode($result));
}