<?php  //Controller::checkArray($data);
?> 
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettyPhoto.css">
 <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.mCustomScrollbar.css">
<section id='page-title'>
            <section class='container'>
                <section class='row'>
                    <div class='span6'>
                        <h1>Property</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a> <span class="divider">&ndash;</span></li>
                            <li><a href="#">Property for <?php echo $type; ?></a></li>
                            
                        </ul>
                    </div>
                </section>
            </section>
</section>

<section id='content' class='alternate-bg'>
            <section class='container'>
                <section class='row featured-items'>
                    <?php foreach($data as $pro){ ?>
                    <section class='span9'>
                        <div class='property-box'>
                            <div class='top'>
                                <div class='row'>
                                    <div class='left'>
                                        <figure>
                                            <a rel="prettyPhoto[gallery]" href="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($pro['mainPic']);?>">
                                                <img src="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($pro['mainPic']);?>" alt="" />
                                            </a>
                                            <div class='banner'><?php echo ucwords($pro['category']);?> -For <?php echo $type; ?> </div>
                                        </figure>
                                        <div class='title-line'>
                                            <div class='pull-left'>
                                                <h2><?php echo CHtml::decode($pro['title']); ?></h2> <br />
                                                <p><?php echo $pro['location']; ?>, <?php echo $pro['city']; ?></p>
                                            </div>
                                            <div class='pull-right'>
                                                <span class='price'><?php echo $pro['price']; ?></span>
                                            </div>
                                        </div>
                                        <div class='description'>
                                            <p> <?php echo CHtml::decode($pro['descr']); ?> </p>
                                        </div>
                                        <table class='table table-hover table-bordered'>
                                            <tr>
                                                <td>Bedrooms</td>
                                                <td><?php if(!empty($pro['beds'])){ echo $pro['beds']; }else{ echo 'Not Mentioned'; } ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Bathrooms</td>
                                                <td><?php if(!empty($pro['baths'])){ echo $pro['baths'];}else{ echo 'Not Mentioned'; } ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Sqft</td>
                                                <td><?php echo $pro['size']; ?></td>
                                            </tr>
                                            
                                            <?php if($type == 'Rent'){ ?>
                                            <tr>
                                                <td>Amenities</td>
                                                <td><?php if(!empty($pro['amenty'])){ echo $pro['amenty'];}else{ echo 'Not Mentioned'; } ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Furnished</td>
                                                <td><?php if(!empty($pro['furnished'])){ echo ucfirst($pro['furnished']);}else{ echo 'Not Mentioned'; } ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Rent Policy</td>
                                                <td><?php if(!empty($pro['rentPolicy'])){ echo ucfirst($pro['rentPolicy']);}else{ echo 'Not Mentioned'; } ?></td>
                                            </tr>
                                            
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <div class='right'>
                                        <?php $multimedia = json_decode($pro['gallPics']);
                                $c = count($multimedia);
                                $half = $c/2; ?>
                                         <h3>Gallery <span>(<?php echo $half;?> photos)</span></h3>
                                         <?php
                                $name = $type =array();
                                if(!empty($c)){
                                   for($i=0;$i<$c;$i++){
                                        if($i <$half){
                                          array_push($name,$multimedia[$i]);
                                       }else{
                                            array_push($type,$multimedia[$i]);
                                        }
                                    }
                                    $countInner = count($name);?>
                                    <div class='gallery'>
                                            <div class='line'> 
                                    <?php for($j=0; $j< $countInner; $j++){ ?>
                                                 <figure>
                                                    <a rel="prettyPhoto[gallery]" href="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($name[$j])?>">
                                                        <img src="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($name[$j])?>" alt="" /></a>
                                                </figure>
                                               
                                    <?php } ?>
                                                    
                                            </div>
                                                <?php 
                                
                            }?>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='bottom'>
                                <div class='inner'>
                                    <div class='row'>
                                        <div class='pull-left update-box'>
                                            <p>Last update on <a href="#">04-17-2013</a> by <a href="#">Author</a>.</p>
                                        </div>
                                        <!--<div class='pull-right'>
                                            <p>Please <a href="#">login</a> to rate this item.</p>
                                            <div class='star-rating'>
                                                <button class='star blue'>1 Star</button>
                                                <button class='star active'>2 Star</button>
                                                <button class='star active'>3 Star</button>
                                                <button class='star'>4 Star</button>
                                                <button class='star'>5 Star</button>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class='author-section big-margins'>
                            <div class='left'>
                                <div class='inner'>
                                    <div class='row'>
                                        <figure>

                                        </figure>
                                        <div class='text'>
                                            <h2>Martin J. Doe</h2> <br />
                                            <span class='job-title'>Agent & Real Estate Specialist</span>
                                            <p>In porttitor augue vel velit luctus at scelerisque nisi dictum. Ut tempus dignissim mi, at gravida leo porta ut.</p>
                                            <a href="#" class='follow btn btn-primary'><i class='icon-white icon-plus'></i> Follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='right'>
                                <div class='listings'>
                                    <span class='number'>25</span> <br />
                                    <span>listings</span>
                                </div>
                            </div>
                        </div>-->
                    </section>
                    <?php } ?>
                    <aside class='span3'>
                        <section class='widget'>
                            <section class='widget-title uppercase'>
                                <div class='inner'>
                                    <h2>Refine Search</h2>
                                </div>
                            </section>
                            <section class='widget-content'>
                                <form action="#">
                                    <div class='widget-section'>
                                        <div class='inner'>
                                            <label for="location">Location</label>
                                            <input type="text" name='location' id='location' class='input-block-level' value='Oxford'/>
                                        </div>
                                    </div>
                                    <div class='widget-section'>
                                        <div class='inner'>
                                            <label for="propertyType">Property Type</label>
                                            <select name="propertyType" id="propertyType" class='btn-block selectpicker'>
                                                <option value="all">All</option>
                                                <option value="all">Mansion</option>
                                                <option value="all">Apartment</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='widget-section'>
                                        <div class='inner'>
                                            <label for="category">Category</label>
                                            <select name="propertyType" id="category" class='btn-block selectpicker'>
                                                <option value="all">For Sale</option>
                                                <option value="all">For Rent</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class='widget-section first-half'>
                                        <div class='inner'>
                                            <label for="minPrice">Min. Price</label>
                                            <select name="propertyType" id="minPrice" class='btn-block selectpicker'>
                                                <option value="all">$17K</option>
                                                <option value="all">$27K</option>
                                                <option value="all">$37K</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='widget-section second-half'>
                                        <div class='inner'>
                                            <label for="maxPrice">Max. Price</label>
                                            <select name="propertyType" id="maxPrice" class='btn-block selectpicker'>
                                                <option value="all">$999K</option>
                                                <option value="all">$899K</option>
                                                <option value="all">$799K</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='widget-section'>
                                        <div class='inner'>
                                            <label for="bedrooms">Bedrooms</label>
                                            <select name="propertyType" id="bedrooms" class='btn-block selectpicker'>
                                                <option value="all">3</option>
                                                <option value="all">2</option>
                                                <option value="all">4</option>
                                                <option value="all">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='widget-section'>
                                        <div class='inner' style='position: relative;'>
                                            <label for="size">Size</label>
                                            <input type="text" name='size' id='size' class='input-block-level' value='500'/>
                                            <span class='measure-type'>sqft</span>
                                        </div>
                                    </div>
                                    <div class='widget-section'>
                                        <div class='inner'>
                                            <label for='range'>Slide Example</label>
                                            <input type="text" name='size' id='range' class='input-block-level range-example'/>
                                        </div>
                                    </div>
                                    <section class='widget-buttons'>
                                        <div class='inner'>
                                            <!--<a href="#" class='more-options'>More Options</a> <br />-->
                                            <a href='#' class='btn btn-primary btn-large btn-block'>Update</a>
                                        </div>
                                    </section>
                                </form>
                            </section>
                        </section>
                    </aside>
                </section>
            </section>
        </section>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery.mCustomScrollbar.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.prettyPhoto.js"></script>
<script>
            jQuery("a[rel^='prettyPhoto']").prettyPhoto({
                social_tools: false,
                theme: 'light_square'
              });
</script>