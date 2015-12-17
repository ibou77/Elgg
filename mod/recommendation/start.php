<?php

elgg_register_event_handler('init', 'system', 'recommendation_init');

function recommendation_init() {
    elgg_register_page_handler('recommendation', 'recommendation_page_handler');
    $item = new ElggMenuItem('recommendation', elgg_echo('Recommendations'), 'recommendation');
	elgg_register_menu_item('site', $item);
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'recommendation_owner_block_menu');
}

function recommendation_page_handler() {
    
    $body = <<<__BODY
    <style>
#header {
    background-color:white;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    background-color:white;
    color:white;
    text-align:center;
    padding:5px;	      
}
#footer {
    background-color:white;
    color:white;
    text-align:center;
    padding:5px;	 
}
</style>
<div id="header">
 <h4> Here are some recommendations on most viewed groups at the moment  </h4><br>  
<a href="http://localhost/elgg-1.12.2/groups/profile/70/gc20-tools"><font color="#60B8F7">GC2.0 Tools</font></a><br>
<a href="http://localhost/elgg-1.12.2/groups/profile/118/cloud-computing"><font color="#60B8F7">Cloud Computing</font></a><br>
<a href="http://localhost/elgg-1.12.2/groups/profile/135/blueprint-2020"><font color="#60B8F7">Blueprint 2020</font></a><br>
</div>
<div id="nav">
<h4> Here are some recommendations on most viewed pages at the moment  </h4><br> 
 <a href="http://localhost/elgg-1.12.2/pages/view/117/blueprint-2020"><font color="#60B8F7">Blueprint 2020</font></a><br>
 <a href="http://localhost/elgg-1.12.2/pages/view/113/foreign-relations-of-canada"><font color="#60B8F7">Foreign Relations of Canada</font></a><br>
 <a href="http://localhost/elgg-1.12.2/pages/view/114/treasury-board-canada"><font color="#60B8F7">Treasury Board Canada</font></a><br>
 </div>
 <div id="footer">
 <h4> Here are some recommendations of most active members at the moment  </h4><br>
 <a href="http://localhost/elgg-1.12.2/profile/iboubou"><font color="#60B8F7">Ibrahima</font></a><br>
 <a href="http://localhost/elgg-1.12.2/profile/chris"><font color="#60B8F7">Christopher Lavoie</font></a><br>
 </div>
__BODY;

$params = array(
	'title'=> 'User Preference Profile Recommendations',
       'content' => $body,
       'filter'  => '',
   );
   $body = elgg_view_layout('content',$params);
    echo elgg_view_page('recommendation',$body);
    
}
/**function recommendation_owner_block_menu($hook, $type, $return, $params) {
	if ($params['entity']->pages_enable != "no") {
			$url = "recommendation/group/{$params['entity']->guid}/all";
			$item = new ElggMenuItem('recommendation', elgg_echo('Group recommendations'), $url);
			$return[] = $item;

	}

	return $return;
}

?>
