<?php

/**
 * Description of SEO Controller
 *
 * @author muhammad Ibrahim
 */
class SeoController extends Controller {

    public function actionIndex() {
        
        $this->layout='admin';

        if (Yii::app()->user->isGuest === true) {

            $this->redirect(Yii::app()->homeUrl);
        }
       
        if (isset($_POST['Seo_module'])) {
            echo 'check';
            exit();
        }
        $sql = "SELECT  `page_name` FROM page ";
        $command = Yii::app()->db->createCommand($sql);
        $resultPage = $command->queryAll();
        $this->render('index', array('resultMeta' => $resultPage));
    }

    public function actionForm() {
        $this->layout = 'admin';
        $page = $_GET['p'];
        $sql = "SELECT * FROM meta_info WHERE controllerName='" . $page . "'";
        $command = Yii::app()->db->createCommand($sql);
        $resultMeta = $command->queryAll();

        $sql = "SELECT  `page_name` FROM page";
        $command = Yii::app()->db->createCommand($sql);
        $resultPage = $command->queryAll();
        $this->render('form', array('resultPage' => $resultPage, 'resultMeta' => $resultMeta));
    }

    public function actionUp() {
       
        if(!empty($_POST)){
          
        $sql = "UPDATE  meta_info SET  `content` =  '".$_POST['title']."' WHERE  `meta_info`.`controllerName` =  '".$_POST['controllerName']."' AND meta_info.type =  'title'";
        $command = Yii::app()->db->createCommand($sql)->execute();
        
        $sql = "UPDATE  meta_info SET  `content` =  '".$_POST['description']."' WHERE  `meta_info`.`controllerName` =  '".$_POST['controllerName']."' AND meta_info.type =  'description'";
        $command = Yii::app()->db->createCommand($sql)->execute();
        
    
        
         $sql = "UPDATE  meta_info SET  `content` =  '".$_POST['keyword']."' WHERE  `meta_info`.`controllerName` =  '".$_POST['controllerName']."' AND meta_info.type =  'keyword'";
        $command = Yii::app()->db->createCommand($sql)->execute();
           
        
     $this->redirect('index');
        }
        else{
             
        $this->redirect('index');
        }
        
     }

     
    public static function inert_data() {

        $data = showAll();
    }

    public function actionSEO() {
        
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        $this->render('index');
    }

}
