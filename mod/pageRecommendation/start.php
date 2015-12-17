<?php

elgg_register_event_handler('init', 'system', 'pageRecommendation_init');

function pageRecommendation_init() {
    elgg_register_page_handler('pageRecommendation', 'pageRecommendation_page_handler');
 
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'pageRecommendation_owner_block_menu');
}

function pageRecommendation_page_handler() {
	

$params = array(
	'title'=> 'Page Recommendations',
       'content' => $body,
       'filter'  => '',
   );
   $body = elgg_view_layout('content',$params);
    echo elgg_view_page('pageRecommendation',$body);
} 
   function pageRecommendation_owner_block_menu($hook, $type, $return, $params) {
		$url = "pageRecommendation/pages/owner/{$params['entity']->guid}";
		$item = new ElggMenuItem('pages', elgg_echo('Page recommendations'),$url);
		$return[] = $item;

	
	return $return;
	
}



?>

