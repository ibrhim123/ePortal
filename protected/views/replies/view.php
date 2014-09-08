<?php
/* @var $this RepliesController */
/* @var $model Replies */

$this->breadcrumbs=array(
	'Replies'=>array('index'),
	$model->rplyId,
);

$this->menu=array(
	array('label'=>'List Replies', 'url'=>array('index')),
	array('label'=>'Create Replies', 'url'=>array('create')),
	array('label'=>'Update Replies', 'url'=>array('update', 'id'=>$model->rplyId)),
	array('label'=>'Delete Replies', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rplyId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Replies', 'url'=>array('admin')),
);
?>

<h1>View Replies #<?php echo $model->rplyId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rplyId',
		'pid',
		'uid',
		'userType',
		'phone',
		'message',
		'repliedOn',
	),
)); ?>
