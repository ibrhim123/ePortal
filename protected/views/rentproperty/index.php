<?php
/* @var $this RentpropertyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rentproperties',
);

$this->menu=array(
	array('label'=>'Create Rentproperty', 'url'=>array('create')),
	array('label'=>'Manage Rentproperty', 'url'=>array('admin')),
);
?>

<h1>Rentproperties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
