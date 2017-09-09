<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 2017/9/9
 * Time: 15:50
 */
require_once 'library/session.php';

$json = [];
if ($_GET['url']) {
    $url = str_replace(['https://', 'http://', '/'], '', $_GET['url']);
    $_SESSION['needToDesignUrl'] = $url;
    $site_file = 'json/' . $url . '/site.json';

    if (is_file($site_file)) {
        $json = json_decode(file_get_contents($site_file));
    }

}
//get the url html
$site_html = file_get_contents('http://' . $url);


$site_dir = 'site/' . $url;

is_dir($site_dir) || mkdir($site_dir);

$site_header_html_file = $site_dir . 'header.html';
$site_center_html_file = $site_dir . 'center.html';
$site_footer_html_file = $site_dir . 'footer.html';


$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($site_html);
$head_node = $dom->getElementsByTagName('head');
$body_node = $dom->getElementsByTagName('body');
var_dump($body_node);
exit();

$head_node_html = $dom->saveXML($head_node);
$body_node_html = $dom->saveXML($body_node);

$html_defined = str_replace([$head_node_html, $body_node_html, '</html>'], '', $site_html);

$boody_inner_html = get_inner_html($body_node);

$body_defined = str_replace([$boody_inner_html, '</body>'], '', $body_node_html);

$page_node = $dom->getElementById('page');
$page_node_html = $dom->saveXML($page_node);
$page_inner_html = get_inner_html($page_node);

$page_defined = str_replace([$page_inner_html, '</section>'], '', $page_node_html);

$footer_node = $dom->getElementById('footer');
$footer_node_html = $dom->saveXML($footer_node);

$footer_html = $html_defined . $head_node_html . $body_defined . $page_defined . $footer_node_html . '</section>' . '</body>' . '</html>';
file_put_contents($site_footer_html_file, $footer_html);

$center_node = $dom->getElementById('columns');
$center_node_html = $dom->saveXML($center_node);

$center_html = $html_defined . $head_node_html . $body_defined . $page_defined . $center_node_html . '</section>' . '</body>' . '</html>';
file_put_contents($site_center_html_file, $center_html);

$header_html = str_replace([$footer_node_html, $center_node_html], '', $site_html);
file_put_contents($site_header_html_file, $header_html);


function get_inner_html( $node ) {
    $innerHTML= '';
    $children = $node->childNodes;
    foreach ($children as $child) {
        $innerHTML .= $child->ownerDocument->saveXML( $child );
    }

    return $innerHTML;
}


echo json_encode($json);