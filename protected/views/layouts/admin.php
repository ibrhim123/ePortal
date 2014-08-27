<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title> Estate Portal| User Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/select2/select2_metro.css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>
    <!-- END GLOBAL MANDATORY STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<?php if(Yii::app()->user->isGuest){
    $this->redirect(array('site/login'));
}else{ ?>
<body  class="page-header-fixed" id="bodyPage">

    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse navbar-fixed-top">

    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">

     <div class="container-fluid">

    <!-- BEGIN LOGO -->
    <a class="brand" href="#">
        <img src="<?php //echo Yii::app()->request->baseUrl;?>" alt="logo Image here">
    </a>
    <!-- END LOGO -->
    
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
        <img src="<?php echo Yii::app()->request->baseUrl;?>/public/img/menu-toggler.png" alt="">
    </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    
    <!-- BEGIN TOP NAVIGATION MENU -->
				<ul class="nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <?php
                            $id = Yii::app()->user->id;
                            $sql = 'SELECT profilePic FROM users WHERE uid = '. $id;
                            $pic = Yii::app()->db->createCommand($sql)->queryAll();
                            foreach($pic as $proPic => $val){
                                $proPic = $val['profilePic'];
                            }
                            //exit;
                            //$id = Yii::app()->
                            //$user=User::model()->find('LOWER(username)=?',array($username));
                            //Users::model()->findAll(array("condition"=>"role = 'Driver' ","order"=>"uid")), 'uid', 'name'?>
                            <img alt="DP" width="29" height="29" src="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($proPic)?>" />
						<span class="username"><?php echo Yii::app()->user->name;?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/users/myProfile"><i class="icon-user"></i> My Profile</a></li>
      							<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/users/updatePass"><i class="icon-user"></i> Change Password</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/site/logout"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->

				</ul>
				<!-- END TOP NAVIGATION MENU -->
     </div>
    
    </div>

    </div>
	<!-- END HEADER -->
	
    <div class="page-container">

    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar nav-collapse collapse">
	
	<ul class="page-sidebar-menu">
            
            <li>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone"></div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
        
        <?php $userRole = Yii::app()->user->getState('userType');
	if($userRole == 'Admin'){ ?>	
			<!-- BEGIN SIDEBAR MENU -->
	
            <li class="start">
                <a href="<?php echo Yii::app()->homeUrl;?>">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            
            <li class="">
                <a href="javascript:;">
                    <i class="icon-search"></i>
                    <span class="title"> Administrate Users</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Users/AdminGen">
                                View All Gerenal Users</a>
                        </li>

                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Users/AdminAgent">
                            View All Agents</a></li>
                </ul>
            </li>
            
            <li>
            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/users/myProfile">
                <i class="icon-user"></i>
                <span class="title"> <?php echo $userRole; ?> Profile</span>
            </a>
            </li>
            
            <li class="">
                <a href="javascript:;">
                    <i class="icon-search"></i>
                    <span class="title"> Property for Sale</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/Create">
                            Post add</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/myPosts">
                                View My postings</a>
                        </li>

                </ul>
            </li>
            
             <li class="">
                <a href="javascript:;">
                    <i class="icon-search"></i>
                    <span class="title"> Property for Rent</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/Create">
                            Post add</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/myPosts">
                                View My postings</a>
                        </li>

                </ul>
            </li>
            
          <?php  }elseif ($userRole == 'Agent') { ?>
             <li class="start">
                <a href="<?php echo Yii::app()->homeUrl;?>">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li>
            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/users/myProfile">
                <i class="icon-user"></i>
                <span class="title"> <?php echo $userRole; ?> Profile</span>
            </a>
            </li>
            
            <li class="">
                <a href="javascript:;">
                    <i class="icon-search"></i>
                    <span class="title"> Property for Sale</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/Create">
                            Post add</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/myPosts">
                                View My postings</a>
                        </li>

                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="icon-search"></i>
                    <span class="title"> Property for Rent</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/Create">
                            Post add</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/myPosts">
                                View My postings</a>
                        </li>

                </ul>
            </li>
            <?php }else { ?>
             <li class="start">
                <a href="<?php echo Yii::app()->homeUrl;?>">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li>
            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/users/myProfile">
                <i class="icon-user"></i>
                <span class="title"><?php echo $userRole; ?>  Profile</span>
            </a>
            </li>  
            <li class="">
                <a href="javascript:;">
                    <i class="icon-search"></i>
                    <span class="title"> Property for Sale</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/Create">
                            Post add</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/myPosts">
                                View My postings</a>
                        </li>

                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="icon-search"></i>
                    <span class="title"> Property for Rent</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/Create">
                            Post add</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/Saleproperty/myPosts">
                                View My postings</a>
                        </li>

                </ul>
            </li>
             <?php }?>
           
            <li>
                <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/site/logout">
                    <i class="icon-key"></i> <span class="title">Log Out</span></a>
            </li>
        </ul>
	
    </div>
    <!-- END SIDEBAR -->


    </div>

	


	<?php echo $content; ?>

    <div class="clear"></div>

	<!-- BEGIN FOOTER -->
    
        <div class="footer">
            <div class="footer-inner">
                <?php echo date('Y'); ?> &copy; Multilnks. estatePortal.
            </div>
            <div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
            </div>
        </div>
   
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/excanvas.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/select2/select2.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/scripts/app.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/scripts/login.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/scripts/form-components.js"></script>
    

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/data-tables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/public/plugins/data-tables/DT_bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/public/scripts/table-advanced.js"></script>     

    <script>

        jQuery(document).ready(function() {
           App.init();
	       Login.init();
		   TableAdvanced.init();
           FormComponents.init();
           
    });

	</script>    
<!-- END JAVASCRIPTS -->

</body>
<?php } ?>
<!-- END BODY -->
</html>
