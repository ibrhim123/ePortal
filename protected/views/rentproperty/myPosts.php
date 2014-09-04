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
               
                <?php if(!empty($data)){ $j = 0;
                    foreach($data as $mypost){
                        $j++;?>
                
                            <div id="<?php echo $mypost['pid']; ?>" class="span4 booking-blocks" <?php if($j == '4'){?> style="margin-left: 0px !important;" <?php } ?>>

                                
                            <div class="pull-left booking-img">
                                 <?php if($mypost['gallPics'] != NULL){ ?>

                                <?php $multimedia = json_decode($mypost['gallPics']);
                                $c = count($multimedia);
                                $half = $c/2;
                                   
                            }else{
                                $half = '0';
                            }if(!empty($mypost['mainPic'])){ ?>
                                <img width="110" height="93" src="<?php echo Yii::app()->baseUrl.'/resources.php?r='.base64_encode($mypost['mainPic']);?>" alt="">
                            <?php }else{?>
                                <img width="110" height="93" src="<?php echo Yii::app()->request->baseUrl; ?>/images/empty.png" alt="nothing to view">
                            <?php } 
                            ?>

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
                                    
                                <a href="<?php echo Yii::app()->request->baseUrl;?>/Property/Detail?id=?<?php echo base64_encode($mypost['pid']);?>"><h4><?php echo substr($mypost['title'],'0','50'); ?>..</h4></a>
                                <p><?php  $des = CHtml::decode($mypost['descr']); echo substr($des, 0, 300)."..";?></p>
                                <a onclick="removeAdd(this);" href="#" data-cid="<?php echo $mypost['pid']; ?>"> <i class="icon-remove"></i> Remove Post</a>
                            </div>
                       
                            </div>
                           
                   
                    <?php }
                }?>   
            </div>
        </div>
    </div>
</div>       

<script type="text/javascript">

            function removeAdd(elem){

                var $elem = jQuery(elem), _id  = $elem.attr('data-cid');

                if (_id.length > 0) {

                    $.ajax({
                        type: "POST",
                        url:    "<?php echo Yii::app()->createUrl('Property/downPost'); ?>",
                        data:  {nid:_id},
                        success: function(msg){
                            //alert('Your Post Has been Deleted!');
                            $('#'+_id).hide("slow");
                            //window.location.reload(true);
                        },
                        error: function(xhr){
                            console.log("failure"+xhr.readyState+this.url);
                        }
                    });

                }
            }

</script>