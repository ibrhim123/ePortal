<?php
/* @var $this RepliesController */
/* @var $model Replies */

$this->breadcrumbs=array(
	'Replies'=>array('index'),
	$model->rplyId=>array('view','id'=>$model->rplyId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Replies', 'url'=>array('index')),
	array('label'=>'Create Replies', 'url'=>array('create')),
	array('label'=>'View Replies', 'url'=>array('view', 'id'=>$model->rplyId)),
	array('label'=>'Manage Replies', 'url'=>array('admin')),
);
?>

<h1>Update Replies <?php echo $model->rplyId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>