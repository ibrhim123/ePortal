<?php
/* @var $this RentpropertyController */
/* @var $model Rentproperty */
/* @var $form CActiveForm */
?>

<div class="page-content">

    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">

                <h3 class="page-title">
                    Rent your Property
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
                                    echo 'Update Add';
                                }
                                else{
                                    echo 'Post Add';
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
	'id'=>'rentproperty-form',
        'htmlOptions'=>array(
                        'class'=>'form-horizontal','enctype'=>'multipart/form-data'
        ),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
        'enableClientValidation'=> true,
        'clientOptions' => array(
                'validateOnSubmit'=>true,
                'validateOnChange'=>true,
                'validateOnType'=>false,
        ),
)); ?>
	<?php echo $form->errorSummary($model); ?>

	<div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'category'); ?></label>
		<div class="controls">
                    
                    <?php echo CHtml::dropDownList('Rentproperty[category]', $model,
                array('apartments' => 'Apartments for Rent', 'house or villa' => ' Houses & Villas for Rent',
                    'commercial property' => 'Commercial Property for Rent', 'Rooms' => 'Rooms for Rent',
                    'short term (Daily)' => 'Short Term (Daily)','short term (Monthly)' => 'Short Term (Monthly)'),
                array('empty' => 'Select Property Type','class'=>'m-wrap large')); ?>
                    
                    <?php //echo $form->textField($model,'category',array('class'=>'m-wrap large','size'=>60,'maxlength'=>190)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'category'); ?></span>
                </div>    
	</div>
        <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'title'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'title',array('class'=>'m-wrap large','size'=>60,'maxlength'=>190)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'title'); ?></span>
                </div>    
	</div>
	
          <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'descr'); ?></label>
		<div class="controls">
                   <?php echo $form->textArea($model,'descr',array('class'=>'span12 ckeditor m-wrap','rows'=>6, 'cols'=>50)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'descr'); ?></span>
                </div>    
	</div>
	
	<div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'mainPic'); ?></label>
		<div class="controls">
                    <input class="fileupload" type="file" name="mainPic">

                    <span for="email" class="help-inline">  <?php echo $form->error($model,'mainPic'); ?></span>
                </div>    
	</div>
                                    
        <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'gallPics'); ?></label>
		<div class="controls">
                    <input class="fileupload" type="file" name="files[]" multiple>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'gallPics'); ?></span>
                </div>    
	</div>

	<div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'baths'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'baths',array('class'=>'m-wrap large','size'=>60,'maxlength'=>190)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'baths'); ?></span>
                </div>    
	</div>
	
        <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'beds'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'beds',array('class'=>'m-wrap large','size'=>60,'maxlength'=>200)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'beds'); ?></span>
                </div>    
	</div>   
	
	<div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'location'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'location',array('class'=>'m-wrap large','size'=>60,'maxlength'=>250)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'location'); ?></span>
                </div>    
	</div>   
        
        <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'city'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'city',array('class'=>'m-wrap large','size'=>60,'maxlength'=>250)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'city'); ?></span>
                </div>    
	</div> 
        
        <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'size'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'size',array('class'=>'m-wrap large','size'=>40,'maxlength'=>40)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'size'); ?></span>
                </div>    
	</div>   

	<div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'price'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'price',array('class'=>'m-wrap large','size'=>60,'maxlength'=>100)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'price'); ?></span>
                </div>    
	</div> 
        
        <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'rentPolicy'); ?></label>
		<div class="controls">
                     <?php echo CHtml::dropDownList('Rentproperty[rentPolicy]', $model,
                array('monthly' => 'Monthly','quarterly' => 'Quarterly','yearly' => 'Yearly'),
                array('empty' => 'Select Rental Policy','class'=>'m-wrap large')); ?>
                    <?php //echo $form->textField($model,'rentPolicy',array('class'=>'m-wrap large','size'=>60,'maxlength'=>100)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'rentPolicy'); ?></span>
                </div>    
	</div> 
	
	<div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'amenty'); ?></label>
		<div class="controls">
		<?php echo $form->textArea($model,'amenty',array('class'=>'m-wrap large','rows'=>6, 'cols'=>50)); ?>
		<span for="email" class="help-inline">  <?php echo $form->error($model,'amenty'); ?></span>
                </div>
	</div>
        
        <div class="control-group">
             <?php echo $form->labelEx($model,'furnished',array('class' => 'control-label')); ?>
		<div class="controls">
                    <?php echo CHtml::dropDownList('Rentproperty[furnished]', $model,
                array('yes' => 'Yes','no' => 'No'),
                array('empty' => 'Is it furnished?','class'=>'m-wrap large')); ?>
                    
		<?php //echo $form->textField($model,'furnished',array('class'=>'m-wrap large','size'=>8,'maxlength'=>8)); ?>
		<span for="email" class="help-inline">  <?php echo $form->error($model,'furnished'); ?></span>
                </div>
	</div>
     

	<div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Publish' : 'Save',array('class' => 'btn blue')); ?>
            <button class="btn blue" type="reset">Cancel</button>
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
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/ckeditor/ckeditor.js"></script>
