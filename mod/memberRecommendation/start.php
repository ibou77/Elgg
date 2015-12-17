<?php
include 'connection_file.php';
elgg_register_event_handler('init', 'system', 'memberRecommendation_init');

function memberRecommendation_init() {
    elgg_register_page_handler('memberRecommendation', 'memberRecommendation_page_handler');
   // $item = new ElggMenuItem('memberRecommendation', elgg_echo('Member Recommendations'), 'memberRecommendation');
	//elgg_register_menu_item('site', $item);
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'memberRecommendation_owner_block_menu');
}

function memberRecommendation_page_handler() {
    
$params = array(
	'title'=> 'Member Recommendations',
       'content' => $body,
       'filter'  => '',
   );
   $body = elgg_view_layout('content',$params);
    echo elgg_view_page('memberRecommendation',$body);
} 
   function memberRecommendation_owner_block_menu($hook, $type, $return, $params) {
		$url = "memberRecommendation/owner/{$params['entity']->guid}";
		$item = new ElggMenuItem('memberRecommendation', elgg_echo('Member recommendations'), $url);
		$return[] = $item;

	
	return $return;
}


?>
