<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11
 * Time: 14:54
 */
require_once 'library/session.php';
$return = [];

$domain = $_SESSION['needToDesignUrl'];

if (@file_get_contents('http://' . $domain . '/?route=service/api/editDesginStatus&desgin_status=1')) {
    $return['code'] = 1;

} else {
    $return['code'] = 0;
}

echo json_encode($return);