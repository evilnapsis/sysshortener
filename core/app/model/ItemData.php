<?php
class ItemData {
	public static $tablename = "item";


	public function __construct(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->password = "";
		$this->created_at = "NOW()";
	}



	public function add(){
		$sql = "insert into item (code,name,url,user_id,created_at) ";
		$sql .= "value (\"$this->code\",\"$this->name\",\"$this->url\",\"$this->user_id\",$this->created_at)";
		return Executor::doit($sql);
	}

	public static function delete($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto ItemData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",url=\"$this->url\",code=\"$this->code\" where id=$this->id";
		Executor::doit($sql);
	}


	public function update_profile(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",lastname=\"$this->lastname\",bio=\"$this->bio\",address=\"$this->address\",phone=\"$this->phone\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";	
		Executor::doit($sql);
	}

	public function update_email(){
		$sql = "update ".self::$tablename." set email=\"$this->email\" where id=$this->id";	
		Executor::doit($sql);
	}

	public function update_img(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";	
		Executor::doit($sql);
	}

	public function activate(){
		$sql = "update ".self::$tablename." set is_active=1 where id=$this->id";	
	Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ItemData());
	}

	public static function getByC($c){
		$sql = "select * from ".self::$tablename." where code=\"$c\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ItemData());
	}

	public static function getByEmail($email){
		$sql = "select * from ".self::$tablename." where email=\"$email\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ItemData());
	}


	public static function getLogin($email,$password){
		$sql = "select * from ".self::$tablename." where email=\"$email\" and password=\"$password\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ItemData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ItemData());

	}

	public static function getTop(){
		$sql = "select *,(select count(*) from visit where visit.item_id=item.id) as cx from ".self::$tablename." order by cx desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ItemData());

	}
	public static function getInactives(){
		$sql = "select * from ".self::$tablename." where is_active=0";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ItemData());
	}

	public static function getActives(){
		$sql = "select * from ".self::$tablename." where is_active=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ItemData());
	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ItemData());
	}


}

?>