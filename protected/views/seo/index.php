<div class="page-content">
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">

                <h3 class="page-title">
                    My Property SEO Module
                 </h3>

            </div>
        </div>             
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-globe"></i>Manage SEO Contents</div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-full-width sample_3">
                            <thead>
                                <tr>
                                    <th>Page Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="wordWrapper">

                                <?php
                                    if(isset($resultMeta)){

                                    foreach ($resultMeta as $meta_info) {
                                        ?>
                                <tr>

                                    <td><?php echo ucfirst($meta_info['page_name']); ?></td>


                                    <td><a href="/newWeb/Seo/form?p=<?php echo $meta_info['page_name']; ?>" >View</a></td>
                                  </tr>         
                                    <?php } } ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>