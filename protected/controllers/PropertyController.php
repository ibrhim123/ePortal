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
        
        public function actionReplyAdd(){
            
        }
        
        public function actionSearch(){
            $this->layout = 'main';
            if(isset($_POST['btnSearchSale'])){
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
        }
        
        public function actionListRent(){
            $this->layout = 'main';
            $category   =   Yii::app()->request->getParam('cat');
            $cat = base64_decode($category);
            $sql = "SELECT a.*,b.*  FROM property a JOIN rentproperty b on a.pid = b.pid WHERE a.status = 1 AND b.category = '$cat' ORDER BY a.postedOn DESC ";
            //echo $sql; exit;
            $command=Yii::app()->db->createCommand($sql);
            $result= $command->queryAll();
            $this->render('catlist',array('data'=>$result));
        }       
        
        public function actionListSale(){
            $this->layout = 'main';
            $category   =   Yii::app()->request->getParam('cat');
            $cat = base64_decode($category);
            $sql = "SELECT a.*,b.*  FROM property a JOIN saleproperty b on a.pid = b.pid WHERE a.status = 1 AND b.category = '$cat' ORDER BY a.postedOn DESC "; 
            $command=Yii::app()->db->createCommand($sql);
            $result= $command->queryAll();
            $this->render('catlist',array('data'=>$result));
        }     
        
        public function actionSearchRent(){
            $this->layout = 'main';
            
            if(isset($_POST['btnSearhRent'])){
            $location = $_POST['search-string'];
            $beds = $_POST['rbedrooms'];
            $baths = $_POST['rbathrooms'];
            $minPrice = $_POST['rmin-price'];
            $cat = $_POST['rcat'];
            
            $sql = "SELECT * FROM rentproperty WHERE 1 = 1";
            if ($cat) {
                $sql .= " AND category='$cat'";
            }
            if ( !empty($baths) AND $baths<5 ) {
                $sql .= " AND baths='$baths'";
            }
            if (!empty($beds) AND $beds<5) {
                $sql .= " AND beds='$beds'";
            }
            if ($baths=='5+') {
                $sql .= " AND baths >=5";
            }
            if ($beds=='5+') {
                $sql .= " AND beds >=5";
            }
            if ($location){
                $sql .= " AND location LIKE '%$location%'";
            }
            if ($minPrice){
                $sql .= " AND price>='$minPrice'";
            }
            
            $command=Yii::app()->db->createCommand($sql);
            $result= $command->queryAll();
            
            $this->render('searchRent',  array('data' =>$result));
            }
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

	
}