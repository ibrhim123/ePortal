<?php

class PropertyController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actiondownPost(){
            
        $uid = Yii::app()->user->id;

        $pId = $_POST['nid'];

        Yii::app()->db->createCommand("UPDATE property SET status = '0' WHERE pid=:PropertyId")->bindValues(array(':PropertyId' => $pId))->execute();
        
        $this->redirect(array('Saleproperty/myPosts'));
        
        }
        
        public function actionSearch(){
            $this->layout = 'main';
            //Controller::checkArray($_POST);
            $location = $_POST['string'];
            $beds = $_POST['beds'];
            $baths = $_POST['baths'];
            $minPrice = $_POST['min-price'];
            $cat = $_POST['cat'];
            
            $sql = "SELECT * FROM saleproperty WHERE 1 = 1";
            if ($cat) {
                $sql .= " AND category='$cat'";
            }
             if ($baths) {
                $sql .= " AND baths='$baths'";
            }
             if ($beds) {
                $sql .= " AND beds='$beds'";
            }
            if ($location){
                $sql .= " AND location LIKE '%$location%'";
            }
            if ($minPrice){
                $sql .= " AND price>='$minPrice'";
            }
            
            $command=Yii::app()->db->createCommand($sql);
            $result= $command->queryAll();
            
            $this->render('searchResult',  array('data' =>$result));
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
             $type = $pid['cat'];
             $poster    =   $pid['postedBy'];
             $pon    =   $pid['postedOn'];
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
            $this->render('details',  array('data' =>$res,'type' => $type,'poster' => $poster, 'postedOn' => $pon));
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