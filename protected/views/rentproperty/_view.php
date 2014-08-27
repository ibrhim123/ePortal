<?php
/* @var $this RentpropertyController */
/* @var $data Rentproperty */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rpid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rpid), array('view', 'id'=>$data->rpid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descr')); ?>:</b>
	<?php echo CHtml::encode($data->descr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mainPic')); ?>:</b>
	<?php echo CHtml::encode($data->mainPic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallPics')); ?>:</b>
	<?php echo CHtml::encode($data->gallPics); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('baths')); ?>:</b>
	<?php echo CHtml::encode($data->baths); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beds')); ?>:</b>
	<?php echo CHtml::encode($data->beds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rentPolicy')); ?>:</b>
	<?php echo CHtml::encode($data->rentPolicy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amenty')); ?>:</b>
	<?php echo CHtml::encode($data->amenty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('furnished')); ?>:</b>
	<?php echo CHtml::encode($data->furnished); ?>
	<br />

	*/ ?>

</div>