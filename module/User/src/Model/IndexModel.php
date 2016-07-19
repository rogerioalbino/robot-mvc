<?php

require('vendor/Elix/src/Mvc/Model/AbstractModel.php');

class IndexModel extends AbstractModel {
	
	public function getSomething($id){
		$id = $this->escapeString($id);
		$result = $this->query('SELECT * FROM tableName WHERE id="'. $id .'"');
		return $result;
	}

}