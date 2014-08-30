<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal hide" id="portlet-config">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					<div class="span12">

						<h3 class="page-title">
							Change Password
						</h3>

					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box blue tabbable">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-reorder"></i>
									<span class="hidden-480">Change Password</span>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="tabbable portlet-tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#portlet_tab1" data-toggle="tab">Default</a></li>
									</ul>
									<div class="tab-content">
					<div id="portlet_tab1" class="tab-pane active">
                                            <?php
                                            Yii::app()->clientScript->registerScript(
                                                'myHideEffect',
                                                '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
                                                CClientScript::POS_READY
                                            );
                                            if(Yii::app()->user->hasFlash('error')):?>
                                                <div class="alert alert-error info">
                                                    <button data-dismiss="alert" class="close"></button>
                                                    <?php echo Yii::app()->user->getFlash('error'); ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php if(Yii::app()->user->hasFlash('success')):?>
                                                <div class="alert alert-success info">
                                                    <button data-dismiss="alert" class="close"></button> <?php echo Yii::app()->user->getFlash('success'); ?>
                                                </div>
                                            <?php endif; ?>

											<!-- BEGIN FORM-->
                                            <form class="form-horizontal" action="<?php echo Yii::app()->request->baseUrl?>/users/passChange" method="POST">
                                                    <div class="control-group">
                                                            <label class="control-label">Enter Existing Pasword</label>
                                                            <div class="controls">
                                                                    <input name="exsPass" type="password" class="span6 m-wrap">
                                                                    <span class="help-inline">Enter Existing Password.</span>
                                                            </div>
                                                    </div>

                                                <div class="control-group">
                                                    <label class="control-label">Password</label>
                                                    <div class="controls">
                                                        <input type="password" name="password" class="span6 m-wrap">
                                                        <span class="help-inline">Provide your password</span>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Confirm Password</label>
                                                    <div class="controls">
                                                        <input type="password" name="rpassword" class="span6 m-wrap">
                                                        <span class="help-inline">Confirm your password</span>
                                                    </div>
                                                </div>

                                                <div class="form-actions">
                                                        <button class="btn blue" name="searchDriver" type="submit"><i class="icon-ok"></i> update</button>
                                                        <button class="btn" type="reset">Cancel</button>
                                                </div>
                                        </form>
                                        <!-- END FORM-->  
                                    </div>
                            </div>
                    </div>
            </div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->         
			</div>
			<!-- END PAGE CONTAINER-->
		</div>