<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
		$p = new ItemData();

		$p->name = $_POST["name"];
		$p->url = $_POST["url"];
		$p->code = $_POST["code"];
		$p->user_id = $_SESSION["user_id"];
		$px = $p->add();
		Core::alert("Agregado !!");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){
		$p = ItemData::getById($_POST["id"]);

		$p->name = $_POST["name"];
		$p->url = $_POST["url"];
		$p->code = $_POST["code"];
		$p->user_id = $_SESSION["user_id"];
		$px = $p->update();
		Core::alert("Actualizado !!");

}		
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
		$p = ItemData::getById($_GET["id"]);
		$p->del();
		Core::alert("Eliminado !!");

}		
Core::redir("./?view=items&opt=all");
?>