<?php
//include 'connection_file.php';
elgg_register_event_handler('init', 'system', 'blogRecommendation_init');

function blogRecommendation_init() {
    elgg_register_page_handler('blogRecommendation', 'blogRecommendation_page_handler');
   // $item = new ElggMenuItem('blogRecommendation', elgg_echo('Blog Recommendations'), 'groupRecommendation');
	//elgg_register_menu_item('site', $item);
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'blogRecommendation_owner_block_menu');
}

function blogRecommendation_page_handler() {
$homepage = "/elgg-1.12.2/blogRecommendation/owner/group:135";
$currentpage = $_SERVER['REQUEST_URI'];
if($homepage==$currentpage) {
$body = <<<__BODY
    <style>
#header {
    background-color:white;
    color:white;
    text-align:center;
    padding:5px;
}
</style>
<div id="header">
 <h4> Hey member, <a href="http://localhost/elgg-1.12.2/blog/view/145/public-servants"><font color="#60B8F7">Public servants</font></a> blog may interest you </h4><br>  

</div>
__BODY;
}

$homepage1 = "/elgg-1.12.2/blogRecommendation/owner/becaye";
$currentpage1 = $_SERVER['REQUEST_URI'];
if($homepage1==$currentpage1) {
$body = <<<__BODY
    <style>
#header {
    background-color:white;
    color:white;
    text-align:center;
    padding:5px;
}
</style>
<div id="header">
 <h4> Hey member, <a href="http://localhost/elgg-1.12.2/blog/view/158/our-progress-on-open-government-commitments"><font color="#60B8F7">Our Progress on Open Government Commitments</font></a> blog may interest you </h4><br>  

</div>
__BODY;
}

$homepage2 = "/elgg-1.12.2/blogRecommendation/owner/Nick";
$currentpage2 = $_SERVER['REQUEST_URI'];
if($homepage2==$currentpage2) {
$body = <<<__BODY
    <style>
#header {
    background-color:white;
    color:white;
    text-align:center;
    padding:5px;
}
</style>
<div id="header">
 <h4> Hey member, <a href="http://localhost/elgg-1.12.2/blog/view/145/public-servantss"><font color="#60B8F7">Public servants</font></a> blog may interest you </h4><br>  

</div>
__BODY;
}

$homepage3 = "/elgg-1.12.2/blogRecommendation/owner/claude";
$currentpage3 = $_SERVER['REQUEST_URI'];
if($homepage3==$currentpage3) {
$body = <<<__BODY
    <style>
#header {
    background-color:white;
    color:white;
    text-align:center;
    padding:5px;
}
</style>
<div id="header">
 <h4> Hey member, <a href="http://localhost/elgg-1.12.2/blog/view/145/public-servants"><font color="#60B8F7">Public servants</font></a> blog may interest you </h4><br>  

</div>
__BODY;
}


	$params = array(
	'title'=> 'Blog Recommendations',
       'content' => $body,
       'filter'  => '',
   );
  
   $body = elgg_view_layout('content',$params);
    echo elgg_view_page('blogRecommendation',$body);
} 

   function blogRecommendation_owner_block_menu($hook, $type, $return, $params) {
		$url = "blogRecommendation/owner/{$params['entity']->username}";
		$item = new ElggMenuItem('blogRecommendation', elgg_echo('Blog recommendations'), $url);
		$return[] = $item;

	
	return $return;
}



?>


	
