<div class="page-content">
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        
        
        <div class="row-fluid">

<h1>View Page #<?php echo $model->page_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'page_id',
		'page_name',
		'controller',
		'content',
		'createdOn',
	),
)); ?>
</div>
    </div>
</div>