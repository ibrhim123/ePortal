<?php
/* @var $this SalepropertyController */
/* @var $model Saleproperty */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	
	<div class="">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>60,'maxlength'=>230)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'descr'); ?>
		<?php echo $form->textArea($model,'descr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	
	<div class="">
		<?php echo $form->label($model,'beds'); ?>
		<?php echo $form->textField($model,'beds',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'baths'); ?>
		<?php echo $form->textField($model,'baths',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	

	<div class="buttons">
		<?php echo CHtml::submitButton('Search',array('class' => 'btn btn-blue')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->