<?php
/* @var $this RentpropertyController */
/* @var $model Rentproperty */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->textField($model,'category'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'descr'); ?>
		<?php echo $form->textArea($model,'descr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'baths'); ?>
		<?php echo $form->textField($model,'baths',array('size'=>60,'maxlength'=>190)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'beds'); ?>
		<?php echo $form->textField($model,'beds',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textArea($model,'location',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'size'); ?>
		<?php echo $form->textArea($model,'size',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'rentPolicy'); ?>
		<?php echo $form->textField($model,'rentPolicy',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'amenty'); ?>
		<?php echo $form->textArea($model,'amenty',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'furnished'); ?>
		<?php echo $form->textField($model,'furnished',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="">
		<?php echo CHtml::submitButton('Search',array('class' => 'btn btn-blue')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->