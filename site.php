<?php

$app->get('/', function() {
    
	$page = new Loja\Page();

	$page->setTpl("index");

});



?>