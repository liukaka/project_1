<?php
require_once 'library/session.php';
require_once 'config.php';
$return = [];

$json_dir = 'json/' . $_SESSION['needToDesignUrl'];

is_dir($json_dir) || mkdir($json_dir);

$json_file = $json_dir . '/site.json';

if( isset($_POST['data']) && $_POST['data'] != '' ) {

	if( isset($_POST['data']['delete']) ) {

		$myfile = fopen($json_file, "w");
		fwrite($myfile, '{}');
		fclose($myfile);

	} else {
		$ignores = ['header.html', 'center.html', 'footer.html'];
		$flag = true;
		$json = $_POST['data'];

        ob_start();
        require_once 'site/skeleton.html';
        $skeleton = ob_get_contents();
        ob_clean();

        $skeleton = str_replace('{{config_http}}', CONFIG_HTTP, $skeleton);

        $domain = $_SESSION['needToDesignUrl'];
		
		foreach($json['pages'] as $key1 => $pages) {
			foreach ($pages as $key2 => $page) {
				foreach($page as $key3 => $block) {
					if (strpos($block['frames_original_url'], 'center.html') !== false) {
						$flag = false;
					}
					foreach ($ignores as $ignore) {
						if (strpos($block['frames_original_url'], $ignore) !== false) {
							unset($json['pages'][$key1][$key2][$key3]);
						}
						
					}
					
					if (isset($json['pages'][$key1][$key2][$key3])) {

                        $content = preg_replace('#<div id="page" class="page">[\s\S]*</div>#', '<div id="page" class="page">' . $block['frames_content'] .'</div>', $skeleton);

                        file_put_contents('site/' . $domain  . '/' . $key3 . '_' . str_replace('elements/', '', $block['frames_original_url']), $content);

						if ($flag) {
							$json['pages'][$key1][$key2][$key3]['position'] = 'content_top';
						} else {
							$json['pages'][$key1][$key2][$key3]['position'] = 'content_buttom';
						}
					}
					
					
				}
				
			}
			
		}

		$myfile = fopen($json_file, "w");
		fwrite($myfile, json_encode($json));
		fclose($myfile);

	}

	$return['responseCode'] = 1;
	$return['responseHTML'] = '<h5>Hooray!</h5> <p>The site was saved successfully!</p>';

} else {

	$return['responseCode'] = 0;
	$return['responseHTML'] = '<h5>Ouch!</h5> <p>Something went wrong and the site could not be saved :(</p>';

}
echo json_encode($return);
?>