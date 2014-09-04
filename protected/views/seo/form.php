<div class="page-content">
    <div id="portlet-config" class="modal hide">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>portlet Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here will be a configuration form</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <h3 class="page-title">
                    Hi <?php echo Yii::app()->user->getState('userType'); ?>, <small>Have a nice day</small>
                </h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="/admin">Home</a> 
                        <i class="icon-angle-right"></i>
                        <a href="/admin/Seo">SEO</a> 
                        <i class="icon-angle-right"></i>
                        <a><?php if (isset($_GET['p'])) {
    echo ucfirst($_GET['p']);
} ?></a> 
                    </li>
                </ul>

            </div>
        </div>
        <div class="row-fluid">
            <!-- BEGIN FORM-->
            <form action="<?php echo Yii::app()->request->baseUrl; ?>/Seo/Up" name="Seo_module" method="POST" class="form-horizontal">


                <div class="control-group">
                    <label class="control-label">Title</label>
                    <div class="controls">
                        <textarea class="large m-wrap"  name="title" rows="5"><?php if (!empty($resultMeta)) {
    echo $resultMeta[0]['content'];
} ?></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Description</label>
                    <div class="controls">
                        <textarea class="large m-wrap" name="description" rows="5"><?php if (!empty($resultMeta)) {
    echo $resultMeta[1]['content'];
} ?></textarea>


                    </div>
                </div
                <div class="control-group">
                    <label class="control-label">Keywords</label>
                    <div class="controls">
                        <textarea class="large m-wrap" name="keyword" rows="3"><?php if (!empty($resultMeta)) {
    echo $resultMeta[2]['content'];
} ?></textarea>
                    </div>

                    <br>
                    <div class="control-group">
                        <label class="control-label" style="display: none;">Page</label>
                        <div class="controls">
                            <select style="display: none;" name="controllerName" class="large m-wrap" tabindex="1">

<?php if (isset($resultPage)) {
    foreach ($resultPage as $res) { ?>
                                        <option value="<?php echo $res['page_name']; ?>" <?php if ($res['page_name'] == $_GET['p']) echo "selected"; ?> ><?php echo $res['page_name']; ?></option>
    <?php }
} ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="YII_CSRF_TOKEN" value="<?php echo Yii::app()->request->csrfToken; ?>">
                            <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/Seo"><button type="button" class="btn black" style="width: 82px;">Back</button></a>
                        </div> 
                    </div>
            </form>

        </div>
    </div>
</div>