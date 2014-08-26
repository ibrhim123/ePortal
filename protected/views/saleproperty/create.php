<?php
/* @var $this SalepropertyController */
/* @var $model Saleproperty */

$this->breadcrumbs=array(
	'Saleproperties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Saleproperty', 'url'=>array('index')),
	array('label'=>'Manage Saleproperty', 'url'=>array('admin')),
);
?>

<h1>Create Saleproperty</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>