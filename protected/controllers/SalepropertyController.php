<?php

class SalepropertyController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','myPosts','admin','feature'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Saleproperty;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Saleproperty']))
		{
                        $model->attributes=$_POST['Saleproperty'];
                        $valid=$model->validate();            
                        if($valid){
                        $newFile = array();
                        $fileType = array();
                        $postedBy=Yii::app()->user->id;
                        $values = $_POST;
                        $file = $_FILES;
                        $connection=Yii::app()->db;
                        $transaction=$connection->beginTransaction();
                        try{                         
                            if( (!empty($file['mainPic']['tmp_name'])) && ($file['mainPic']['error'] == '0' )){

                                $md5_file = md5_file($file['mainPic']['tmp_name']);
                                //echo $md5_file; exit;
                                $dir = substr($md5_file, -2);
                                $img_name = $file['mainPic']['name'];
                                $lastDot = strrpos($img_name, ".");
                                $img_name = str_replace(".", "", substr($img_name, 0, $lastDot)) . substr($img_name, $lastDot);
                                $main_filename = $md5_file.substr($img_name,strpos($img_name,'.'));
                                $lPath =  $_SERVER['DOCUMENT_ROOT'];
                                $full_path = $lPath.'/newWeb/resources/documents/'.$dir.'/'.$main_filename;
                                //echo $full_path; exit;
                                move_uploaded_file($file['mainPic']['tmp_name'],$full_path);
                                //$model->profilePic = $new_filename;*/
                            }
                            $cat = $_POST['Saleproperty']['category'];
                            $title = CHtml::encode($_POST['Saleproperty']['title']);
                            $descr = CHtml::encode($_POST['Saleproperty']['descr']);
                            $beds = $_POST['Saleproperty']['beds'];
                            $baths = $_POST['Saleproperty']['baths'];
                            $size = $_POST['Saleproperty']['size'];
                            $price = $_POST['Saleproperty']['price'];
                            $location = CHtml::encode($_POST['Saleproperty']['location']);
                            $city = CHtml::encode($_POST['Saleproperty']['city']);
                            $createdOn = date('Y-m-d H:i:s');
                            $sql = "insert into property (cat,postedBy,postedOn,isFeat,status)
                            values (:cat, :user_id, :created, :feat, :status)";
                            $parameters = array(":cat"=>'Sale',":user_id"=>$postedBy,":created" =>$createdOn,":feat" => '0',":status"=>'1');
                            Yii::app()->db->createCommand($sql)->execute($parameters);
                            $last_id = Yii::app()->db->getLastInsertID();
                            for($i=0; $i<count($_FILES['files']['tmp_name']); $i++) {
                                $md5_file = md5($_FILES['files']['tmp_name'][$i]);
                                $dir =  substr($md5_file, -2);
                                $img_name = $_FILES['files']['name'][$i];
                                $fType = $_FILES['files']['type'][$i];
                                $lastDot = strrpos($img_name, ".");
                                $img_name = str_replace(".", "", substr($img_name, 0, $lastDot)) . substr($img_name, $lastDot);
                                $new_filename = $md5_file.substr($img_name,strpos($img_name,'.'));
                                $lPath =  $_SERVER['DOCUMENT_ROOT'];
                                $full_path = $lPath.'/newWeb/resources/documents/'.$dir.'/'.$new_filename;
                                array_push($newFile, $new_filename);
                                array_push($fileType,$fType);
                                move_uploaded_file($_FILES['files']['tmp_name'][$i],$full_path);
                            }
                            $media = array_merge($newFile,$fileType);
                            if(empty($media)){
                                $media = null;
                            }else{
                                $media = json_encode($media);
                            } 
                            $sql = "insert into saleproperty (pid,category,title,descr,mainPic,gallPics,beds,baths,size,price,location,city)
                            values (:pid, :category, :title, :descr, :mainPic, :gallPics,:beds,:baths,:size,:price,:location,:city)";
                            $params = array(":pid"=>$last_id,":category" =>$cat,":title"=>$title,":descr" =>$descr,":mainPic"=>$main_filename ,":gallPics"=>$media,
                               ":beds"=>$beds,":baths" =>$baths,":size"=>$size,":price" =>$price,":location"=>$location,":city"=> $city  );
                            Yii::app()->db->createCommand($sql)->execute($params);
                            $newFile = array();
                            $fileType = array();
                            $transaction->commit();
                            Yii::app()->user->setFlash('success', "Your Add has been Posted!");
                            $this->redirect('myPosts');
                        }catch (Exception $ex) {
                            $transaction->rollback();
                            echo '<pre>'; print_r($ex); exit;
                        }
                }else{
                    $errores = $model->getErrors();
                                        //$this->render('index', array('model' => $errores));
                }
                    
                }

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Saleproperty']))
		{
			$model->attributes=$_POST['Saleproperty'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->spid));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
        
        public function actionfeature($id)
	{
                $sql = "UPDATE property SET isFeat ='1' WHERE pid = {$id} AND status = '1' "; 
                $connection=Yii::app()->db; 
                $command=$connection->createCommand($sql)->execute();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
        
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Saleproperty');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionmyPosts()
	{
                $cs=Yii::app()->clientScript->registerCSSFile('/newWeb/public/css/pages/search.css');
		$me = Yii::app()->user->id;
                $sql = "SELECT a.*,b.*  FROM property a JOIN saleproperty b on a.pid = b.pid WHERE a.status = 1 AND a.postedBy= {$me} ORDER BY a.pid DESC ";
                $command=Yii::app()->db->createCommand($sql);
                $result= $command->queryAll();
                
                $this->render('myPosts',array('data'=>$result));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Saleproperty('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Saleproperty']))
			$model->attributes=$_GET['Saleproperty'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Saleproperty the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Saleproperty::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Saleproperty $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='saleproperty-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
