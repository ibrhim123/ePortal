<?php
/* @var $this SalepropertyController */
/* @var $model Saleproperty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'saleproperty-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pid'); ?>
		<?php echo $form->textField($model,'pid'); ?>
		<?php echo $form->error($model,'pid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>60,'maxlength'=>230)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descr'); ?>
		<?php echo $form->textArea($model,'descr',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mainPic'); ?>
		<?php echo $form->textField($model,'mainPic',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'mainPic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gallPics'); ?>
		<?php echo $form->textArea($model,'gallPics',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gallPics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beds'); ?>
		<?php echo $form->textField($model,'beds',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'beds'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baths'); ?>
		<?php echo $form->textField($model,'baths',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'baths'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postedOn'); ?>
		<?php echo $form->textField($model,'postedOn',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'postedOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postedBy'); ?>
		<?php echo $form->textField($model,'postedBy',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'postedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->