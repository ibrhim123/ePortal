<div class="page-content">
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">

                <h3 class="page-title">
                    My Property Posts For Rent
                 </h3>

            </div>
        </div>
        
        <div class="row-fluid">
            
            <div class="span12">
               
                <?php if(!empty($data)){ $i = 0;
                    foreach($data as $mypost){
                     
                            ?>                      
                            <div class="span4 booking-blocks">
                            <div class="pull-left booking-img">
                                 <?php if($mypost['gallPics'] != NULL){ ?>

                                <?php $multimedia = json_decode($mypost['gallPics']);
                                $c = count($multimedia);
                                $half = $c/2;
                                   
                            }?>
                                <img width="140" height="93" src="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($mypost['mainPic']);?>" alt="">
                                    <ul class="unstyled">
                                            <li><i class="icon-calendar"></i>   <?php 
                                            $phpdate = strtotime( $mypost['postedOn'] );
                                            $mysqldate = date( 'M d Y', $phpdate );
                                            
                                            echo $mysqldate ;?></li>
                                            <li><i class="icon-money"></i>  AED <?php echo $mypost['price'] ;?></li>
                                            <li><i class="icon-map-marker"></i> <?php echo $mypost['location'] ;?>, <?php echo $mypost['city'] ;?></li>
                                            <li><i class="icon-picture"></i>  <?php echo $half ;?></li>
                                    </ul>
                            </div>
                            <div style="overflow:hidden;">
                                    
                                <a href="<?php echo Yii::app()->request->baseUrl;?>/Property/Detail?id=?<?php echo base64_encode($mypost['pid']);?>"><h4><?php echo $mypost['title'] ?></h4></a>
                                    <p><?php  $des = CHtml::decode($mypost['descr']); echo substr($des, 0, 300)."..";?></p>
                            </div>
                       
                            </div>
                           
                   
                    <?php }
                }?>   
            </div>
        </div>
    </div>
</div>       