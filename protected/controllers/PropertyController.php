<?php

class PropertyController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionDetail(){
            $type = '';
            $this->layout = 'main';
            $raw = Yii::app()->request->getParam('id');
            $id = base64_decode($raw); 
            
            $sql = "SELECT a.*  FROM property a WHERE pid = {$id}";
            $command=Yii::app()->db->createCommand($sql);
            $result= $command->queryAll();
            
            foreach($result as $pid){
             //$proId = $pid['pid'];
             $type = $pid['cat'];
            }
            if($type == 'Sale'){
               $sql = "SELECT a.*  FROM  saleproperty a WHERE a.pid = {$id}  LIMIT 1";
                $command=Yii::app()->db->createCommand($sql);
                $res= $command->queryAll(); 
            }
            if($type == 'Rent'){
                $sql = "SELECT a.* FROM rentproperty a WHERE a.pid = {$id} LIMIT 1";
                $command = Yii::app()->db->createCommand($sql);
                $res = $command->queryAll();
            }
            //Controller::checkArray($res);
            $this->render('details',  array('data' =>$res,'type' => $type ));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}