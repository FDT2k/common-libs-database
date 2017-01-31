<?php
namespace FDT2k\Libs;

class ForeignKeyDescriptor  extends \IObject{
	public $localField;
	public $remoteField;
	public $remoteFieldToShow;
	public $model;
	public $relationType;

	function __construct(FieldDescriptor $localField,FieldDescriptor $remoteField,FieldDescriptor $remoteFieldToShow=null,$model = null){
		$this->localField = $localField;
		$this->remoteField = $remoteField;
		$this->remoteFieldToShow = $remoteFieldToShow;
		$this->model = $model;
		$this->relationType=new IMCoreRelationType1to1();
	}


	function setRelationType($relationType){
		$this->relationType= $relationType;
	}


}


class IMCoreRelationType1to1{}
class IMCoreRelationType1toN{}
class IMCoreRelationTypeNtoN{}
