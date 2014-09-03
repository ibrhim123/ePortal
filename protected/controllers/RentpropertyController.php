<?php

class RentpropertyController extends Controller
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
				'actions'=>array('index','view','Rent'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','myPosts'),
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
	public function actionCreate(){
		$model=new Rentproperty;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Rentproperty']))
		{
                        //echo '<pre>'; print_r($_FILES);
                        //echo '<pre>'; print_r($_POST);
                        //exit;
                        $model->attributes=$_POST['Rentproperty'];
                        $valid=$model->validate();            
                        if($valid){
                        $newFile = array();
                        $fileType = array();
                        $postedBy=Yii::app()->user->id;
                        $values = $_POST;
                        $file = $_FILES;
                        //echo '<pre>'; print_r($values);
                        //echo '<pre>'; print_r($file);
                        //exit;
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
                            $cat = $_POST['Rentproperty']['category'];
                            $title = CHtml::encode($_POST['Rentproperty']['title']);
                            $descr = CHtml::encode($_POST['Rentproperty']['descr']);
                            $beds = $_POST['Rentproperty']['beds'];
                            $baths = CHtml::encode($_POST['Rentproperty']['baths']);
                            $size = CHtml::encode($_POST['Rentproperty']['size']);
                            $price = CHtml::encode($_POST['Rentproperty']['price']);
                            $rentPolicy = $_POST['Rentproperty']['rentPolicy'];
                            $amenty = CHtml::encode($_POST['Rentproperty']['amenty']);
                            $furnished = $_POST['Rentproperty']['furnished'];
                            $location = CHtml::encode($_POST['Rentproperty']['location']);
                            $city = CHtml::encode($_POST['Rentproperty']['city']);
                            $createdOn = date('Y-m-d H:i:s');
                            $sql = "insert into property (cat,postedBy,postedOn,isFeat,status)
                            values (:cat, :user_id, :created, :feat, :status)";
                            $parameters = array(":cat"=>'Rent',":user_id"=>$postedBy,":created" =>$createdOn,":feat" => '0',":status"=>'1');
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
                            $sql = "insert into rentproperty (pid,category,title,descr,mainPic,gallPics,baths,beds,location,city,size,price,rentPolicy,amenty,furnished)
                            values (:pid, :category, :title, :descr, :mainPic, :gallPics,:baths,:beds,:location,:city,:size,:price,:rentPolicy,:amenty,:furnished)";
                            $params = array(":pid"=>$last_id,":category" =>$cat,":title"=>$title,":descr" =>$descr,":mainPic"=>$main_filename ,":gallPics"=>$media,
                              ":baths" =>$baths, ":beds"=>$beds,":location"=>$location,":city"=> $city ,":size"=>$size,":price" =>$price,":rentPolicy" => $rentPolicy,
                                ":amenty" => $amenty,":furnished" => $furnished );
                            Yii::app()->db->createCommand($sql)->execute($params);
                            $newFile = array();
                            $fileType = array();
                            $transaction->commit();
                        }catch (Exception $ex) {
                            $transaction->rollback();
                            echo '<pre>'; print_r($ex); exit;
                        }
                }else{
                    $errores = $model->getErrors();
                }
                    
                }
                $this->render('create',array(
			'model'=>$model,
		));
        }
        
        public function actionmyPosts()
	{
                $cs=Yii::app()->clientScript->registerCSSFile('/newWeb/public/css/pages/search.css');
		$me = Yii::app()->user->id;
                $sql = "SELECT a.*,b.*  FROM property a JOIN rentproperty b on a.pid = b.pid WHERE a.status = 1 AND a.postedBy= {$me} ORDER BY a.pid DESC ";
                $command=Yii::app()->db->createCommand($sql);
                $result= $command->queryAll();
                
                $this->render('myPosts',array('data'=>$result));
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

		if(isset($_POST['Rentproperty']))
		{
			$model->attributes=$_POST['Rentproperty'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->rpid));
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

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Rentproperty');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Rentproperty('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Rentproperty']))
			$model->attributes=$_GET['Rentproperty'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Rentproperty the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Rentproperty::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Rentproperty $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rentproperty-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
         public function actionRent()
	{
             $this->layout = 'main';
            $sql = "SELECT a.*,b.*  FROM property a JOIN rentproperty b on a.pid = b.pid WHERE a.status = 1 ORDER BY a.postedOn DESC ";
            $command=Yii::app()->db->createCommand($sql);
            $result= $command->queryAll();

            $this->render('getRentPro',array('data'=>$result));
	}
}
