<?php
include 'connection_file.php';
elgg_register_event_handler('init', 'system', 'groupRecommendation_init');

function groupRecommendation_init() {
    elgg_register_page_handler('groupRecommendation', 'groupRecommendation_page_handler');
   // $item = new ElggMenuItem('groupRecommendation', elgg_echo('Group Recommendations'), 'groupRecommendation');
	//elgg_register_menu_item('site', $item);
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'groupRecommendation_owner_block_menu');
}

function groupRecommendation_page_handler() {
	
$homepage = "/elgg-1.12.2/groupRecommendation/owner/group:135";
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
 <h4> Here are some groups related to blueprint 2020  </h4><br>  

<a href="http://localhost/elgg-1.12.2/groups/profile/70/gc20-tools"><font color="#60B8F7">GC2.0 Tools</font></a><br>
<a href="http://localhost/elgg-1.12.2/groups/profile/157/canada-open-government"><font color="#60B8F7">Canada Open Government</font></a>
</div>

__BODY;
}
$homepage1 = "/elgg-1.12.2/groupRecommendation/owner/group:70";
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
 

<h4> Hey member, this <a href="http://localhost/elgg-1.12.2/groups/profile/135/blueprint-2020"><font color="#60B8F7">Blueprint 2020</font></a> may interest you </h4><br>
</div>

__BODY;
}
$homepage2 = "/elgg-1.12.2/groupRecommendation/owner/group:148";
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
 <h4> Here are some groups related to Clicks and Tips </h4><br>  
 
<a href="http://localhost/elgg-1.12.2/groups/profile/118/cloud-computing"><font color="#60B8F7">Cloud Computing</font></a><br>
<a href="http://localhost/elgg-1.12.2/groups/profile/94/web-experience-toolkit"><font color="#60B8F7">Web Experience Toolkit</font></a>
</div>

__BODY;
}
$homepage3 = "/elgg-1.12.2/groupRecommendation/owner/group:94";
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
 <h4> Here are some groups related to Web Experience Toolkit </h4><br>  
 
<a href="http://localhost/elgg-1.12.2/groups/profile/118/cloud-computing"><font color="#60B8F7">Cloud Computing</font></a><br>
<a href="http://localhost/elgg-1.12.2/groups/profile/148/clicks-and-tips"><font color="#60B8F7">Clicks and Tips</font></a>
</div>

__BODY;
}

$homepage4 = "/elgg-1.12.2/groupRecommendation/owner/group:118";
$currentpage4 = $_SERVER['REQUEST_URI'];
if($homepage4==$currentpage4) {
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
 <h4> Here are some groups related to Cloud Computing </h4><br>  
 
<a href="http://localhost/elgg-1.12.2/groups/profile/94/web-experience-toolkit"><font color="#60B8F7">Web Experience Toolkit</font></a>
<br>
<a href="http://localhost/elgg-1.12.2/groups/profile/148/clicks-and-tips"><font color="#60B8F7">Clicks and Tips</font></a>
</div>
__BODY;
}
$homepage5 = "/elgg-1.12.2/groupRecommendation/owner/claude";
$currentpage5 = $_SERVER['REQUEST_URI'];
if($homepage5==$currentpage5) {
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
 <h4> Hey member, the <a href="http://localhost/elgg-1.12.2/groups/profile/135/blueprint-2020"><font color="#60B8F7"> Blueprint 2020</font></a> group may also interest you  </h4><br>  
 
</div>
__BODY;
}
$homepage6 = "elgg-1.12.2/groupRecommendation/owner/iboubou";
$currentpage6 = $_SERVER['REQUEST_URI'];
if($homepage6==$currentpage6) {
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
 <h4> Here is a group related to Clicks and Tips blog  </h4><br>  
<a href="http://localhost/elgg-1.12.2/groups/profile/148/clicks-and-tips"><font color="#60B8F7">Clicks and Tips</font></a><br>
</div>
__BODY;
}

$homepage7 = "/elgg-1.12.2/groupRecommendation/owner/becaye";
$currentpage7 = $_SERVER['REQUEST_URI'];
if($homepage7==$currentpage7) {
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
 <h4> Hey member, the <a href="http://localhost/elgg-1.12.2/groups/profile/156/canada-foreign-relations"><font color="#60B8F7"> Canada Foreign Relations</font></a> group may also interest you  </h4><br>  
 
</div>
__BODY;
}

$homepage8 = "/elgg-1.12.2/groupRecommendation/owner/chris";
$currentpage8 = $_SERVER['REQUEST_URI'];
if($homepage8==$currentpage8) {
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
 <h4> Hey member, the <a href="http://localhost/elgg-1.12.2/groups/profile/157/canada-open-government"><font color="#60B8F7"> Canada Open Government</font></a> group may also interest you  </h4><br>  
 
</div>
__BODY;
}


$homepage9 = "/elgg-1.12.2/groupRecommendation/owner/iboubou";
$currentpage9 = $_SERVER['REQUEST_URI'];
if($homepage9==$currentpage9) {
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
 <h4> Hey member, the <a href="http://localhost/elgg-1.12.2/groups/profile/148/clicks-and-tips"><font color="#60B8F7"> Clicks and Tips</font></a> group may also interest you  </h4><br>  
 
</div>
__BODY;
}

$homepage10 = "/elgg-1.12.2/groupRecommendation/owner/group:157";
$currentpage10 = $_SERVER['REQUEST_URI'];
if($homepage10==$currentpage10) {
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
 <h4> Hey member, the <a href="http://localhost/elgg-1.12.2/groups/profile/135/blueprint-2020"><font color="#60B8F7"> Blueprint 2020</font></a> group may also interest you  </h4><br>  
 
</div>
__BODY;
}

$homepage10 = "/elgg-1.12.2/groupRecommendation/owner/Nick";
$currentpage10 = $_SERVER['REQUEST_URI'];
if($homepage10==$currentpage10) {
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
<h4> Hey member, the <a href="http://localhost/elgg-1.12.2/groups/profile/157/canada-open-government"><font color="#60B8F7">Canada Open Government</font></a> group may also interest you  </h4><br>
</div>
__BODY;
}

$params = array(
	'title'=> 'Group Recommendations',
       'content' => $body,
       'filter'  => '',
   );
   $body = elgg_view_layout('content',$params);
    echo elgg_view_page('groupRecommendation',$body);
} 
   function groupRecommendation_owner_block_menu($hook, $type, $return, $params) {
		$url = "groupRecommendation/owner/{$params['entity']->username}";
		$item = new ElggMenuItem('groupRecommendation', elgg_echo('Group recommendations'),$url);
		$return[] = $item;

	
	return $return;
}



?>
