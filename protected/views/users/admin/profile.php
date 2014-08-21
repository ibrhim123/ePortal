<div class="page-content">

<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div class="modal hide" id="portlet-config">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"></button>
<h3>portlet Settings</h3>
</div>
<div class="modal-body">
<p>Here will be a configuration form</p>
</div>
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">

<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
<div class="span12">
<h3 class="page-title">
User Profile Section
</h3>

</div>
</div>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="alert alert-success">
        <button data-dismiss="alert" class="close"></button> <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<div class="row-fluid">

<div class="span12">

    <!-- BEGIN SAMPLE FORM PORTLET-->

    <div class="portlet box blue tabbable">
    <div class="portlet-title">
<div class="caption">
<i class="icon-reorder"></i>
<span class="hidden-480"><?php echo Yii::app()->user->getState('userType');?> Profile</span>
</div>
</div>

    <div class="portlet-body form">

    <div class="tabbable portlet-tabs">
<ul class="nav nav-tabs">
<li class="active"><a href="#portlet_tab1" data-toggle="tab">Default</a></li>
</ul>
<div class="tab-content">
<div id="portlet_tab1" class="tab-pane active">
<!-- BEGIN FORM-->

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'htmlOptions'=>array(
        'class'=>'form-horizontal','enctype'=>'multipart/form-data'
    ),	
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="control-group">
		<label class="control-label">Email:</label>
		<div class="controls">
		<?php echo $form->textField($model,'email',array('class'=>'m-wrap large','size'=>60,'maxlength'=>60,'readonly'=> 'readonly')); ?>
            <span class="help-inline"><?php echo $form->error($model,'email'); ?></span>
        </div>

	</div>

	<div class="control-group">
		<label class="control-label">User Type</label>
		<div class="controls">
            <?php echo $form->textField($model,'userType',array('class'=>'m-wrap large','size'=>8,'maxlength'=>8,'readonly'=>'readonly')); ?>
            <span class="help-inline"><?php echo $form->error($model,'userType'); ?></span>
        </div>

	</div>

	<div class="control-group">
		<label class="control-label">First Name </label>
		<div class="controls"><?php echo $form->textField($model,'firstName',array('class'=>'m-wrap large','size'=>30,'maxlength'=>30)); ?>
        <span class="help-inline"><?php echo $form->error($model,'firstName'); ?> </span>
        </div>

	</div>

	<div class="control-group">
		<label class="control-label">Last Name </label>
		<div class="controls"><?php echo $form->textField($model,'lastName',array('class'=>'m-wrap large','size'=>30,'maxlength'=>30)); ?>
            <span class="help-inline"><?php echo $form->error($model,'lastName'); ?></span>
        </div>
	</div>

	<!--<div class="control-group">
		<label class="control-label">Address</label>		
		<div class="controls">
                    <?php //echo $form->textArea($model,'addr',array('class'=>'m-wrap large')); ?>
                    <span class="help-inline"><?php //echo $form->error($model,'addr'); ?></span>
                </div>
	</div> -->

	<div class="control-group">
		<label class="control-label">Profile Picture </label>
		<div class="controls"><?php echo CHtml::activeFileField($model, 'image',array('size'=>60,'maxlength'=>255)); ?>
        <span class="help-inline"><?php echo $form->error($model,'image'); ?></span>
        </div>
	</div>

	<div class="control-group">
		<label class="control-label">Status </label>
		<div class="controls">
            <?php echo $form->textField($model,'status',array('class'=>'m-wrap large','readonly'=> 'readonly')); ?>
            <span class="help-inline"><?php echo $form->error($model,'status'); ?></span>
        </div>
	</div>

    <div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update',array('class'=>'btn blue')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
</div>
</div>

    </div>
</div>

    <!-- END SAMPLE FORM PORTLET-->
</div>

</div>
<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
</div>
