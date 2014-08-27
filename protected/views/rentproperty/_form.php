<?php
/* @var $this RentpropertyController */
/* @var $model Rentproperty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rentproperty-form',
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
		<?php echo $form->textField($model,'category'); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title'); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descr'); ?>
		<?php echo $form->textArea($model,'descr',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mainPic'); ?>
		<?php echo $form->textField($model,'mainPic'); ?>
		<?php echo $form->error($model,'mainPic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gallPics'); ?>
		<?php echo $form->textArea($model,'gallPics',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gallPics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baths'); ?>
		<?php echo $form->textField($model,'baths',array('size'=>60,'maxlength'=>190)); ?>
		<?php echo $form->error($model,'baths'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beds'); ?>
		<?php echo $form->textField($model,'beds',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'beds'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textArea($model,'location',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textArea($model,'size',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rentPolicy'); ?>
		<?php echo $form->textField($model,'rentPolicy',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rentPolicy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amenty'); ?>
		<?php echo $form->textArea($model,'amenty',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'amenty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'furnished'); ?>
		<?php echo $form->textField($model,'furnished',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'furnished'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->