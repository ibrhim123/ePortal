<?php
/* @var $this RentpropertyController */
/* @var $model Rentproperty */

$this->breadcrumbs=array(
	'Rentproperties'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Rentproperty', 'url'=>array('index')),
	array('label'=>'Create Rentproperty', 'url'=>array('create')),
	array('label'=>'Update Rentproperty', 'url'=>array('update', 'id'=>$model->rpid)),
	array('label'=>'Delete Rentproperty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rpid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rentproperty', 'url'=>array('admin')),
);
?>

<h1>View Rentproperty #<?php echo $model->rpid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rpid',
		'pid',
		'category',
		'title',
		'descr',
		'mainPic',
		'gallPics',
		'baths',
		'beds',
		'location',
		'city',
		'size',
		'price',
		'rentPolicy',
		'amenty',
		'furnished',
	),
)); ?>
