<?php
/* @var $this RepliesController */
/* @var $data Replies */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rplyId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rplyId), array('view', 'id'=>$data->rplyId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proType')); ?>:</b>
	<?php echo CHtml::encode($data->proType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userType')); ?>:</b>
	<?php echo CHtml::encode($data->userType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
	<?php echo CHtml::encode($data->message); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('repliedOn')); ?>:</b>
	<?php echo CHtml::encode($data->repliedOn); ?>
	<br />

	*/ ?>

</div>