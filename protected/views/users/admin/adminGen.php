<?php
/* @var $this UsersController */
/* @var $model Users */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
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
                    Administrate General Users
                </h3>

            </div>
        </div>
        <!-- END PAGE HEADER-->
        
        <div class="space12"></div>
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet box blue tabbable">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-reorder"></i>
                            <span class="hidden-480">List Of General Users</span>
                        </div>
                    </div>
                    <div class="portlet-body form">

                        <div class="tabbable portlet-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#portlet_tab1" data-toggle="tab">Default</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="portlet_tab1" class="tab-pane active">

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php /**$this->renderPartial('_search',array(
	'model'=>$model,
));*/ ?>
</div><!-- search-form -->
<?php //$pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['PageSize']); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider' =>$model->getGen(),
	'filter'=>$model,
    'pager'=>array(
        'class'=>'CLinkPager',
        'pageSize'=>'40',
    ),
	'columns'=>array(
		'email',
		'firstName',
		'lastName',
                'contact',
		'createdOn',
                array(
                    'name'=>'status',
                    'value'=>'$data["status"]==1?"Active":"Inactive"',
                ),
                array(
                        'header'=>'Delete',    
                        'class'=>'CButtonColumn',
                        'template'=>'{delete}'
                ),
	),
)); ?>

                                    <?php Yii::app()->clientScript->registerScript('initPageSize',<<<EOD
    $('.change-pagesize').live('change', function() {
        $.fn.yiiGridView.update('user-grid',{ data:{ pageSize: $(this).val() }})
    });
EOD
                                        ,CClientScript::POS_READY); ?>
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
