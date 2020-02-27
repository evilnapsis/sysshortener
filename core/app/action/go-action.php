<?php

if(isset($_GET["c"]) && $_GET["c"]!=""){

	$item = ItemData::getByC($_GET["c"]);
	if($item){
		$v = new VisitData();
		$v->item_id = $item->id;
		$v->add();
		header("Location: $item->url");
	}else{
		//Core::redir("./?view=items&opt=all");
	}

}


?>