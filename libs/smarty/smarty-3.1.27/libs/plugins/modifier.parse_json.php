<?php

function smarty_modifier_parse_json($string){
	return json_decode($string,true);
}

?>