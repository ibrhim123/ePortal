<?php
/* @var $this SalepropertyController */
/* @var $model Saleproperty */
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
                    Sale your Property
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
                                    echo 'Update notice';
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
	'id'=>'saleproperty-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=> true,
        'clientOptions' => array(
                'validateOnSubmit'=>true,
                'validateOnChange'=>true,
                'validateOnType'=>false,
        ),
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
        )); ?>

	<?php echo $form->errorSummary($model); ?>
                                    
	
        <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'category'); ?></label>
		<div class="controls">
                      <?php echo CHtml::dropDownList('Saleproperty[category]', $model,
                array('apartments' => 'Apartments for Sale', 'house or villa' => ' Houses & Villas for Sale',
                    'commercial property' => 'Commercial Property for Sale', 'Towers or Building' => 'Towers & Building for Sale',
                    'Plots or Land' => 'Plots & Land for Sale'),
                array('empty' => 'Select Property Type','class'=>'m-wrap large')); ?>
                    
                    <?php //echo $form->textField($model,'category',array('class'=>'m-wrap large','size'=>60,'maxlength'=>230)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'category'); ?></span>
                </div>    
	</div>
                                    
        <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'title'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'title',array('class'=>'m-wrap large','size'=>60,'maxlength'=>256)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'title'); ?></span>
                </div>    
	</div>                            
	              
        <div class="control-group">
            <label class="control-label"><?php echo $form->labelEx($model,'descr'); ?></label>
            <div class="controls">
                <?php echo $form->textArea($model,'descr',array('class'=>'m-wrap large','rows'=>6, 'cols'=>50)); ?>
                <span for="email" class="help-inline"> <?php echo $form->error($model,'descr'); ?> </span>
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
             <label class="control-label"><?php echo $form->labelEx($model,'beds'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'beds',array('class'=>'m-wrap large','size'=>40,'maxlength'=>40)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'beds'); ?></span>
                </div>    
	</div>                            
                                    
	<div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'baths'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'baths',array('class'=>'m-wrap large','size'=>40,'maxlength'=>40)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'baths'); ?></span>
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
             <label class="control-label"><?php echo $form->labelEx($model,'location'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'location',array('class'=>'m-wrap large','size'=>60,'maxlength'=>256)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'location'); ?></span>
                </div>    
	</div> 
                                    
        <div class="control-group">
             <label class="control-label"><?php echo $form->labelEx($model,'city'); ?></label>
		<div class="controls">
                    <?php echo $form->textField($model,'city',array('class'=>'m-wrap large','size'=>60,'maxlength'=>140)); ?>
                    <span for="email" class="help-inline">  <?php echo $form->error($model,'city'); ?></span>
                </div>    
	</div>                             
      

	<div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn blue')); ?>
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
