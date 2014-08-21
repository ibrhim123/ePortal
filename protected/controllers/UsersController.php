<?php

class UsersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
        
        public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the Registration page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			
		);
	}
        
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
			array('allow',  
				'actions'=>array('create','captcha'),
				'users'=>array('*'),
			),
			array('allow', 
				'actions'=>array('update','view','Profile','myProfile','updatePass','passChange'),
				'users'=>array('@'),
			),
			array('allow', 
				'actions'=>array('admin','index','delete','myProfile','updatePass','passChange'),
				'users'=>array('admin'),
			),
			array('deny',  
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
            
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
                        $model->password = md5($_POST['Users']['password']);
                        $model->createdOn = date("Y-m-d H:i:s");
                        $model->status = '1';
			if($model->save()){
                            Yii::app()->user->setFlash('success', "Your Profile has been Created Login Here.!");
                            $this->redirect(array('site/login'));
                        }else{
                            Yii::app()->user->setFlash('error', "There seems some problem!");
                            $this->redirect(array('site/login'));
                        }
				//$this->redirect(array('view','id'=>$model->uid));
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
		 $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->uid));
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
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        /**
         * CreatedOn:08-21-2014
         * CreatedBy:Muhammad Ibrahim
         */
        public function actionProfile(){
            //$baseUrl = Yii::app()->request->baseUrl;
            //Yii::app()->clientScript->registerScriptFile($baseUrl.'/public/plugins/jquery-1.10.1.min');
            Yii::app()->clientScript->registerCoreScript('jquery'); 
            $this->layout = 'admin';
            $this->render('admin/index');           
            //$this->renderFile('admin/index.php');
        }
        
        public function actionmyProfile(){
        $this->layout = 'admin';
        $id = Yii::app()->user->id;
        $model=$this->loadModel($id);
        //$this->performAjaxValidation($model);
        if(isset($_POST['Users'])){
            $model->attributes=$_POST['Users'];
            /**$file = $_FILES;
            if( (!empty($file['Users']['tmp_name']['image'])) && ($file['Users']['error']['image'] == '0' )){
                $md5_file = md5_file($file['Users']['tmp_name']['image']);
                $dir = substr($md5_file, -2);
                $img_name = $file['Users']['name']['image'];
                $lastDot = strrpos($img_name, ".");
                $img_name = str_replace(".", "", substr($img_name, 0, $lastDot)) . substr($img_name, $lastDot);
                $new_filename = $md5_file.substr($img_name,strpos($img_name,'.'));
                $full_path = Yii::app()->request->baseUrl.'/resources/documents/'.$dir.'/'.$new_filename;
                move_uploaded_file($file['Users']['tmp_name']['image'],$full_path);
                $model->profilePic = $new_filename;
            }**/
            //$model->contact = $_POST['Users']['contact'];
            $model->updatedOn = date("Y-m-d H:i:s");
            if($model->save()){
                Yii::app()->user->setFlash('success', "Your Profile has been Updated!");
                $this->redirect('myProfile');
            }else{
                Yii::app()->user->setFlash('error', "There seems some problem in your Profile Update!");
                $this->redirect('myProfile');
            }
        }
        $this->render('admin/profile',array(
            'model'=>$model,
        ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionupdatePass(){
            $this->layout = 'admin' ;
            $this->render('admin/changePass');
        }
         

        public function actionpassChange(){
            $this->layout = 'admin';
            $newPass = $_POST['password'];
            $rePass = $_POST['rpassword'];
            if(empty($_POST['exsPass'])){
                Yii::app()->user->setFlash('error', "Existing Password seems Empty");
                $this->render('admin/changePass');
            }
            $existingPass = $_POST['exsPass'];
            if( $newPass != $rePass){
                Yii::app()->user->setFlash('error', "New Password and retype Password Mismatch");
                $this->render('admin/changePass');
            }else{
                $id = yii::app()->user->id;
                $pass = Users::getPass($id);
                $exPass = md5($existingPass);
                if($pass != $exPass){
                    Yii::app()->user->setFlash('error', "Existing Password is wrong");
                    $this->render('admin/changePass');
                }else{
                    $sql = "UPDATE users SET password = '".md5($newPass)."'  WHERE uid = '".$id."'";
                    $command=Yii::app()->db->createCommand($sql);
                    $result = $command->query();
                    if($result){
                        
                        Yii::app()->user->setFlash('success', "Password Update Successfully");
                        $this->render('admin/changePass');
                    }else{
                        Yii::app()->user->setFlash('error', "Unable to update password,there might be problem in Query execution.");
                        $this->render('admin/changePass');
                    }
                }
            }
        }
}
