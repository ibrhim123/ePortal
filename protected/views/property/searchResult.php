<section id='page-title'>
    <section class='container'>
        <section class='row'>
            <div class='span6'>
                <h1>Search Results</h1>
                <p>In sit amet arcu quis dolor adipiscing laoreet sed sit amet arcu. Proin non adipiscing felis.</p>
            </div>
        </section>
    </section>
</section>
<section id='content' class="pt30">
            <section class='container'>
                <section class='row featured-items'>
                    <section class='span12'>
                            <div class='row'>
                                
                               <?php 
                                if(!empty($data)){
                                foreach($data as $pro){ ?>
                                <div class='span3 featured-item-wrapper'>
                                    <div class='featured-item'>
                                        <div class='top'>
                                            <div class='inner-border'>
                                                <div class='inner-padding'>
                                                    <figure>
                                                        <img src="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($pro['mainPic']);?>" alt="" />
                                                        <div class='banner'>For Sale</div>
                                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/Detail?id=<?php echo base64_encode($pro['pid']); ?>" class='figure-hover'>Zoom</a>
                                                    </figure>
                                                    <h3><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/Detail?id=<?php echo base64_encode($pro['pid']); ?>"><?php echo $pro['title']; ?></a></h3>
                                                    <p><?php echo $pro['location']; ?>, <?php echo $pro['city']; ?></p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class='bottom'>
                                            <div class='inner-border'>
                                                <div class='inner-padding'>
                                                    <p><?php echo $pro['beds'];?> beds  +  <?php echo $pro['baths'];?> baths +  <?php echo preg_replace("/[^0-9]./", "", $pro['size']);?> sqft</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class='price-wrapper'>
                                        <div class='price'>AED <?php echo $pro['price']; ?></div>
                                        
                                    </div>
                                </div>

                               <?php }
                                }else{
                                    echo 'No record found';
                                }?>
                            
                            </div>
                    </section>
                </section>
            </section>
</section>