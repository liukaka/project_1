<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 2017/9/24
 * Time: 18:29
 */
require_once '../library/session.php';

$type = $_GET['type'];
$url = $_SESSION['needToDesignUrl'];


if ($type == 'total') {

    $url = 'http://' . $url . '/?route=service/api/productTotal';
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_ENCODING ,'utf8');
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
    $content = curl_exec($ch);
    curl_close($ch);

    header('Content-Type: application/json');
    echo $content;
}

if ($type == 'product') {
    $start = $_GET['start'];
    $limit = $_GET['limit'];

    $url = 'http://' . $url . '/?route=service/api/getProducts&start=' . $start . '&limit=' . $limit;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_ENCODING ,'utf8');
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
    $content = curl_exec($ch);
    curl_close($ch);

    header('Content-Type: application/json');
    echo $content;

}

if ($type == 'image') {
    $product_id = $_GET['product_id'];
    $width = $_GET['width'];
    $height = $_GET['height'];

    $url = 'http://' . $url . '/?route=service/api/getProductImageById&product_id=' . $product_id . '&width=' . $width . '&height=' . $height;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_ENCODING ,'utf8');
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
    $content = curl_exec($ch);
    curl_close($ch);

    header('Content-Type: application/json');
    echo $content;

}