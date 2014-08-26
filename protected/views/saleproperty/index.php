<?php
/* @var $this SalepropertyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Saleproperties',
);

$this->menu=array(
	array('label'=>'Create Saleproperty', 'url'=>array('create')),
	array('label'=>'Manage Saleproperty', 'url'=>array('admin')),
);
?>

<h1>Saleproperties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
