<?php
/* @var $this SalepropertyController */
/* @var $model Saleproperty */

$this->breadcrumbs=array(
	'Saleproperties'=>array('index'),
	$model->title=>array('view','id'=>$model->spid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Saleproperty', 'url'=>array('index')),
	array('label'=>'Create Saleproperty', 'url'=>array('create')),
	array('label'=>'View Saleproperty', 'url'=>array('view', 'id'=>$model->spid)),
	array('label'=>'Manage Saleproperty', 'url'=>array('admin')),
);
?>

<h1>Update Saleproperty <?php echo $model->spid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>