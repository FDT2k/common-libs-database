<?php
namespace FDT2k\Libs;
class FieldDescriptor extends \IObject{
	public $table;
	public $field;
	public $schema;
	public $alias;

	function __construct($table,$field,$schema=null){
		$this->table = $table;
		$this->field = $field;
		$this->schema = $schema;
	}

	function setAlias($alias){
		$this->alias = $alias;
	}

	function getAlias(){
		if(!empty($this->alias)){
			return $this->alias;
		}
		return $this->field;
	}

}
