<div class="page-content">

    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">

                <h3 class="page-title">
                    Create New page
                </h3>

            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet box blue tabbable">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-reorder"></i>
                            <span class="hidden-480"> <?php $actionId  = Yii::app()->controller->action->id;
                                if($actionId == 'update'){
                                    echo 'Update Page';
                                }
                                else{
                                    echo 'Add Page';
                                }?></span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="tabbable portlet-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#portlet_tab1">Default</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="portlet_tab1">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-actions">
		<?php echo $form->labelEx($model,'page_name'); ?>
		<?php echo $form->textField($model,'page_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'page_name'); ?>
	</div>

	<div class="form-actions">
		<?php echo $form->labelEx($model,'controller'); ?>
		<?php echo $form->textField($model,'controller',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'controller'); ?>
	</div>

	<div class="form-actions">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('class'=>'span12 m-wrap','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->
    </div>

</div>