<?php
/* @var $this RentpropertyController */
/* @var $model Rentproperty */

$this->breadcrumbs=array(
	'Rentproperties'=>array('index'),
	$model->title=>array('view','id'=>$model->rpid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rentproperty', 'url'=>array('index')),
	array('label'=>'Create Rentproperty', 'url'=>array('create')),
	array('label'=>'View Rentproperty', 'url'=>array('view', 'id'=>$model->rpid)),
	array('label'=>'Manage Rentproperty', 'url'=>array('admin')),
);
?>

<h1>Update Rentproperty <?php echo $model->rpid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>