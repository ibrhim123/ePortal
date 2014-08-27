<?php
/* @var $this RentpropertyController */
/* @var $model Rentproperty */

$this->breadcrumbs=array(
	'Rentproperties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rentproperty', 'url'=>array('index')),
	array('label'=>'Manage Rentproperty', 'url'=>array('admin')),
);
?>

<h1>Create Rentproperty</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>