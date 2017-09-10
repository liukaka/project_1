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
        $jsonOld = json_decode(file_get_contents($site_file), true);
    }

}
//get the url html
$site_html = file_get_contents('http://' . $url);


$site_dir = 'site/' . $url;

is_dir($site_dir) || mkdir($site_dir);

$site_header_html_file = $site_dir . '/header.html';
$site_center_html_file = $site_dir . '/center.html';
$site_footer_html_file = $site_dir . '/footer.html';


$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($site_html);
$dom->normalizeDocument();
$head_node = $dom->getElementsByTagName('head');
$body_node = $dom->getElementsByTagName('body');


$head_node_html = $dom->saveHTML($head_node->item(0));
$body_node_html = $dom->saveHTML($body_node->item(0));

$html_defined = preg_replace('#(.*?)(<html[^>]*>)[\s\S]*#', '$1$2', $site_html);

$boody_inner_html = get_inner_html($body_node->item(0));

$body_defined = str_replace([$boody_inner_html, '</body>'], '', $body_node_html);

$page_node = $dom->getElementById('page');
$page_node_html = $dom->saveHTML($page_node);
$page_inner_html = get_inner_html($page_node);

$page_defined = str_replace([$page_inner_html, '</section>'], '', $page_node_html);

$footer_node = $dom->getElementById('footer');
$footer_node_html = $dom->saveHTML($footer_node);

$footer_html = $html_defined . $head_node_html . $body_defined . $page_defined . $footer_node_html . '</section>' . '</body>' . '</html>';
file_put_contents($site_footer_html_file, $footer_html);

$center_node = $dom->getElementById('columns');
$center_node_html = get_inner_html($center_node);

$center_html = $html_defined . $head_node_html . $body_defined . $page_defined . $center_node_html . '</section>' . '</body>' . '</html>';
file_put_contents($site_center_html_file, $center_html);


deleteNode($footer_node);
deleteNode($center_node);


$header_html = $dom->saveHTML();
file_put_contents($site_header_html_file, $header_html);


function get_inner_html( $node ) {
    $innerHTML= '';
    $children = $node->childNodes;
    foreach ($children as $child) {
        $innerHTML .= $child->ownerDocument->saveHTML( $child );
    }

    return $innerHTML;
}
function deleteNode($node) { 
    deleteChildren($node); 
    $parent = $node->parentNode; 
    $oldnode = $parent->removeChild($node); 
} 
function deleteChildren($node) { 
    while (isset($node->firstChild)) { 
        deleteChildren($node->firstChild); 
        $node->removeChild($node->firstChild); 
    } 
} 
$content_top_block = [];
$content_buttom_block = [];
if (isset($jsonOld)) {
		foreach($jsonOld['pages'] as $pages) {
			foreach ($pages as  $blocks) {
				foreach ($blocks as  $block) {
					if ( $block['position'] == 'content_top') {
						unset($block['position']);
						
						$content_top_block[] =  $block;
					} else {
						unset($block['position']);
						$content_buttom_block[] = $block;
					}
					
				}
				
			}
			
		}
}



$block = [
			[
				'frames_content' => '',
				"frames_sandbox"=> "",
				"frames_loaderFunction"=> "",
				"frames_height"=> "600",
				"frames_original_url"=> "site/" . $url . "/header.html"
			],
			[
				'frames_content' => '',
				"frames_sandbox"=> "",
				"frames_loaderFunction"=> "",
				"frames_height"=> "87",
				"frames_original_url"=> "site/" . $url . "/center.html"
			],
			[
				'frames_content' => '',
				"frames_sandbox"=> "",
				"frames_loaderFunction"=> "",
				"frames_height"=> "87",
				"frames_original_url"=> "site/" . $url . "/footer.html"
			]
			
			
		];
		



$content_top_length = count($content_top_block);




array_splice($block, 1 , 0, $content_top_block);
	


array_splice($block, 2 +  $content_top_length, 0, $content_buttom_block);
	





$json = [
'pages' => [
	'index' => [
		'blocks' => $block
		]
	]
];



echo json_encode($json);