<?php
ob_start();


$html = '';

$pages = $_POST['pages'];

rsort($pages);

foreach ($pages as $key => $page) {

    if ($key == 0) {
        $html .= str_replace(['</body>', '</html>'], '', file_get_contents($page));

    }

    if ($key > 0 ) {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML(file_get_contents($page));

        $html .= str_replace('&#13;', '', get_inner_html($dom->getElementById('page')));

    }

}
$html .= '</bobady></html>';

function get_inner_html( $node ) {
    $innerHTML= '';
    $children = $node->childNodes;
    foreach ($children as $child) {
        $innerHTML .= $child->ownerDocument->saveXML( $child );
    }

    return $innerHTML;
}

file_put_contents('tmp/index.html',  $html);

echo 'success';
