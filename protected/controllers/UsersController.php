<?php

class UsersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';
        
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
            
            if( Yii::app()->user->getState('userType') =="General")
            {
                $arr =array('update','view','Profile','myProfile','updatePass','passChange');   // Access to Gerenal User
            }else if( Yii::app()->user->getState('userType') =="Agent")
            {
                $arr =array('update','view','Profile','myProfile','updatePass','passChange');   // Access to Agent
            }
            else if( Yii::app()->user->getState('userType') =="Admin")
            {
                $arr = array('admin','index','delete','myProfile','update','updatePass','passChange','AdminGen','AdminAgent','Profile','myProfile');          //  Admin Access
            }else{
                $arr =array('create','captcha');
            }

            return array(
                array('allow', 'actions'=>$arr, 'users'=>array('@'),
                ),
                array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('create','captcha','Agents'),
                'users'=>array('*'),
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
                //Yii::app()->clientScript->registerCoreScript('jquery.ui');
                //Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/style.css');
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

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
                            $this->redirect(array('Users/create'));
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
        
        public function actionAgents()
	{
            
            $criteria = new CDbCriteria();
            $criteria->condition = 'userType = :id';
            //$criteria->order = 'id DESC';
            $criteria->params = array (':id'=> 'Agent' );
       
            $item_count = Users::model()->count($criteria);
                
            $pages = new CPagination($item_count);
            $pages->setPageSize(Yii::app()->params['listPerPage']);
            $pages->applyLimit($criteria);  // the trick is here!
        
            $this->render('agent',array(
                    'model'=> Users::model()->findAll($criteria), // must be the same as $item_count
                   'item_count'=>$item_count,
                   'page_size'=>Yii::app()->params['listPerPage'],
                   'items_count'=>$item_count,
                   'pages'=>$pages,
           ));
         
		//$sql = "SELECT * FROM users WHERE userType = 'Agent' ";
                //$command=Yii::app()->db->createCommand($sql);
                //$result= $command->queryAll();
                //$this->render('agent',array('data'=>$result));
	}
        
        /**
         * CreatedOn:08-21-2014
         * CreatedBy:Muhammad Ibrahim
         */
        public function actionProfile(){
            //$baseUrl = Yii::app()->request->baseUrl;
            //Yii::app()->clientScript->registerScriptFile($baseUrl.'/public/plugins/jquery-1.10.1.min');
            //Yii::app()->clientScript->registerCoreScript('jquery'); 
            $this->layout = 'admin';
            $this->render('admin/index');           
            //$this->renderFile('admin/index.php');
        }
        
        public function actionmyProfile(){
        $this->layout = 'admin';
        $id = Yii::app()->user->id;
        $model=$this->loadModel($id);
        
        if(isset($_POST['Users'])){
            //echo '<pre>'; print_r($_POST); exit;
            $file = $_FILES;
            if( (!empty($file['Users']['tmp_name']['image'])) && ($file['Users']['error']['image'] == '0' )){
                $md5_file = md5_file($file['Users']['tmp_name']['image']);
                $dir = substr($md5_file, -2);
                $img_name = $file['Users']['name']['image'];
                $lastDot = strrpos($img_name, ".");
                $img_name = str_replace(".", "", substr($img_name, 0, $lastDot)) . substr($img_name, $lastDot);
                $new_filename = $md5_file.substr($img_name,strpos($img_name,'.'));
                $lPath =  $_SERVER['DOCUMENT_ROOT'];
                $full_path = $lPath.'/newWeb/resources/documents/'.$dir.'/'.$new_filename;
                
                //echo $full_path; exit;
                move_uploaded_file($file['Users']['tmp_name']['image'],$full_path);
                //$model->profilePic = $new_filename;
            }
            $fname = CHtml::encode($_POST['Users']['firstName']);
            $lname = CHtml::encode($_POST['Users']['lastName']);
            $contact = CHtml::decode($_POST['Users']['contact']);
            $updatedOn = date("Y-m-d H:i:s");
            $profilePic =   $new_filename;
                $sql = "UPDATE users SET firstName = '".$fname."',lastName = '".$lname."',profilePic = '".$profilePic."',contact = '".$contact."',updatedOn = '".$updatedOn."'  WHERE uid = '".$id."'";
                $command=Yii::app()->db->createCommand($sql);
                $result = $command->query();
                if($result){
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
            $this->layout = 'admin';
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
        
        public function actionAdminGen()
        {
            $this->layout = 'admin';
            $model=new Users('getGen');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Users']))
                $model->attributes=$_GET['Users'];

            $this->render('admin/adminGen',array(
                'model'=>$model,
            ));
        }

        public function actionAdminAgent(){
            $this->layout = 'admin';
            $model=new Users('getAgent');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Users']))
                $model->attributes=$_GET['Users'];
                $this->render('admin/adminAgent',array(
                'model'=>$model,));
        }

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model){
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
