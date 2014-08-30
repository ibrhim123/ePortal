<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>


<section id='page-title' class='small-height'>
    <section class='container'>
        <section class='row'>
            <div class='span8'>
                <h1>Register</h1>
                <p>In sit amet arcu quis dolor adipiscing laoreet sed sit amet arcu. Proin non adipiscing felis.</p>
            </div>
        </section>
    </section>
</section>

<section class='full-width'>
    <section class='container'>
        
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'userType'); ?>
                <?php echo $form->dropDownList($model,'userType',array("Agent"=>"Agent","General"=>"General User"),array('empty'=>'Select User Type','class'=> 'mySel')); ?>
		<?php echo $form->error($model,'userType'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>
        
        <?php if(CCaptcha::checkRequirements()): ?>
	<div class="">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class=" buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
 </section>
</section>