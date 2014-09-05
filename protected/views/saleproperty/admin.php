<div class="page-content">
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">

                <h3 class="page-title">
                    Administrate Property Posts For Sale
                 </h3>

            </div>
        </div>
        
        <div class="row-fluid">
<?php


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
        //alert('hi');
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#saleproperty-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'saleproperty-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'category',
		array(
                    'name' => 'title',
                    'value' => 'CHtml::decode($data["title"])',
                ),
		'size',
		'price',
		array(
                    'name'=>'location',
                    'value'=>'CHtml::decode($data["location"])',
                ),
		'city',
                array(
                    'header'=>'Mark Feature',
                    'class'=>'CButtonColumn',
                    'template'=>'{feat}',
                    'buttons'=>array(
                        'feat'=>
                            array(
                                 'label'=>'Mark Feature',
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/feaup.png',
                                'url'=>'Yii::app()->createUrl("Saleproperty/feature", array("id"=>$data->pid))',
                            ),
                    ),
                ),
            
                array(
                     'header'=>'Delete',    
                     'class'=>'CButtonColumn',
                     'template'=>'{delete}'
                ),
	),
)); ?>
        </div>
    </div>
</div>