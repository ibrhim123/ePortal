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
                                //$name = $type =array();
                                //if(!empty($c)){
                                  //  for($i=0;$i<$c;$i++){
                                    //    if($i <$half){
                                      //      array_push($name,$multimedia[$i]);
                                        //}else{
                                        //    array_push($type,$multimedia[$i]);
                                        //}
                                    //}
                                    //$countInner = count($name);
                                    //for($j=0; $j< $countInner; $j++){ ?>
                                        <?php /**<a class="btn" href="#stack<?php echo $j; ?>" data-toggle="modal-<?php echo $j; ?>"><img width="150" height="90" src="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($name[$j])?>" alt="Review Pics"></a>  */?>                                     
                                    <?php //}
                                //} 
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
                                    
                                    <a href="#"><h4><?php echo $mypost['title'] ?></h4></a>
                                    <p><?php  $des = CHtml::decode($mypost['descr']); echo substr($des, 0, 300)."..";?></p>
                            </div>
                       
                            </div>
                           
                   
                    <?php }
                }?>   
            </div>
        </div>
    </div>
</div>       