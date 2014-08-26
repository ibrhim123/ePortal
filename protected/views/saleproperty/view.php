<?php
/* @var $this SalepropertyController */
/* @var $model Saleproperty */

$this->breadcrumbs=array(
	'Saleproperties'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Saleproperty', 'url'=>array('index')),
	array('label'=>'Create Saleproperty', 'url'=>array('create')),
	array('label'=>'Update Saleproperty', 'url'=>array('update', 'id'=>$model->spid)),
	array('label'=>'Delete Saleproperty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->spid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Saleproperty', 'url'=>array('admin')),
);
?>

<h1>View Saleproperty #<?php echo $model->spid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'spid',
		'pid',
		'category',
		'title',
		'descr',
		'mainPic',
		'gallPics',
		'beds',
		'baths',
		'size',
		'price',
		'location',
		'city',
		'postedOn',
		'postedBy',
		'status',
	),
)); ?>
