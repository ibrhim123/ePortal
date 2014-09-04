<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
        <section id='homepage-slider'>
            <div class='controls-wrapper'>
                <section class='container'>
                    <section class='row'>
                        <div class='controls hidden-phone'>
                            <a href="#" class='prev'>Previous</a>
                            <a href="#" class='next'>Next</a>
                        </div>
                    </section>
                </section>
            </div>
            <section class='slider-wrapper'>
                <div class='homepage-slider hidden-phone'>
                    <ul class='slides'>
                        <li>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/4834201449_2801d96045_o-1.jpg" alt="" class='bg-image'/>
                            <div class='container'>
                                <div class='row'>
                                    <div class='span12'>
                                        <div class='text-box span6'>
                                            <h1><a href="property.html">Great place for artists!</a></h1>
                                            <p>In sit amet arcu quis dolor adipiscing laoreet sed sit amet arcu. Proin non adipiscing felis.</p>
                                        </div>
                                        <div class='description'>
                                            <div class='left'>
                                                <div class='title'>
                                                    <div class='big'> Marina Dubai</div>
                                                    <div class='small'>DUBAI, UAE </div>
                                                </div>
                                                <div class='rooms'> 3 bedrooms - 2 bathrooms </div>
                                            </div>
                                            <div class='right'>
                                                <div class='price'>
                                                    <div class='number'> $1200 </div>
                                                    <div class='rate'> per month </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/4834826842_7483d905eb_o.jpg" alt="" class='bg-image'/>
                            <div class='container'>
                                <div class='row'>
                                    <div class='span12'>
                                        <div class='text-box span6'>
                                            <h1><a href="property.html">4 bedrooms apartment for sale!</a></h1>
                                        <p>Pellentesque viverra lacus quis lacus viverra mattis. Sed sed nisi erat, sed consectetur metus.</p>
                                        </div>
                                        <div class='description'>
                                            <div class='left'>
                                                <div class='title'>
                                                    <div class='big'>Marina Dubai</div>
                                                    <div class='small'>DUBAI, UAE</div>
                                                </div>
                                                <div class='rooms'> 4 bedrooms - 5 bathrooms </div>
                                            </div>
                                            <div class='right'>
                                                <div class='price'>
                                                    <div class='number'> $32000 </div>
                                                    <div class='rate'> per year </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </section>

        <section id='main' role='main'>
            <section class='container'>
                <section class='row tab-finder'>
                    <div class='span12'>
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active first-tab"><a href="#tab1" data-toggle="tab">For Sale</a></li>
                                <li><a href="#tab2" data-toggle="tab">For Rent</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class='inner'>
                                        <form name="searchSale" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/Property/search">
                                            
                                            <input type="text" name='string' class='search-string' placeholder="eg. 'Dubai', 'Abu Dhabi'"/>
                                           
                                            <select name="beds" class='span2 selectpicker search-select'>
                                                <option value="">Bedrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5+">5 and more</option>
                                            </select>
                                            
                                            <select name="baths" class='span2 selectpicker search-select'>
                                                <option value="">Bathrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5+">5 and more</option>
                                            </select>
                                            <input type="hidden" name="seachSort" value="Sale">
                                            <input type="text" name='min-price' class='span2 search-price no-margin' placeholder="Min. Price"/>
                                            
                                            <select name="cat" class='span2 selectpicker search-select'>
                                                 <option value="">Select Property Type</option>
                                                <option value="apartments">Apartments for Sale</option>
                                                <option value="house or villa"> Houses & Villas for Sale</option>
                                                <option value="commercial property">Commercial Property for Sale</option>
                                                <option value="Towers or Building">Towers & Building for Sale</option>
                                                <option value="Plots or Land">Plots & Land for Sale</option>
                                            </select>
                                            
                                            <button type="submit" name="btnSearchSale" class='btn btn-primary search-property'><i class="icon-search icon-white"></i> Search Property</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class='inner'>
                                        <form action="<?php echo Yii::app()->request->baseUrl; ?>/Property/SearchRent" method="POST" name="searchRent">
                                            <input type="text" name='search-string' class='search-string' placeholder="eg. 'Dubai', 'Abu Dhabi'"/>
                                            <select name="rbedrooms" class='span2 selectpicker search-select'>
                                                <option value="">Bedrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5+">5 and more</option>
                                            </select>
                                            
                                            <select name="rbathrooms" class='span2 selectpicker search-select'>
                                               <option value="">Bathrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5+">5 and more</option>
                                            </select>
                                            
                                            
                                            <input type="text" name='rmin-price' class='span2 search-price no-margin' placeholder="Min. Price"/>
                                            
                                            <select name="rcat" class="span2 selectpicker search-select">
                                                <option value="">Select Property Type</option>
                                                <option value="apartments">Apartments for Rent</option>
                                                <option value="house or villa"> Houses &amp; Villas for Rent</option>
                                                <option value="commercial property">Commercial Property for Rent</option>
                                                <option value="Rooms">Rooms for Rent</option>
                                                <option value="short term (Daily)">Short Term (Daily)</option>
                                                <option value="short term (Monthly)">Short Term (Monthly)</option>
                                            </select>
                                        
                                            <button type="submit" name="btnSearhRent" class='btn btn-primary search-property'><i class="icon-search icon-white"></i> Search Property</button>
                                        </form>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </section>
                <section class='row featured-items'>
                    <div class='span12'>
                        <h2>Featured Items</h2>
                        <div class='controls'>
                            <a href="#" class='prev'>Previous</a>
                            <a href="#" class='next'>Next</a>
                        </div>
                        <div class='featured-items-slider'>
                            <ul class='slides'>
                                 <li>
                                     <div class="row">
                                <?php if(!empty($data)){
                                    foreach($data['sale'] as $pro){?>                                  
                                
                                    
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
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p><?php echo $pro['beds'];?> beds  +  <?php echo $pro['baths'];?> baths +  <?php echo preg_replace("/[^0-9]/", "", $pro['size']);?> sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="item-controls">
                                            <span class="watchlist">
                                                    <a href="" title="Click here to add in wishlist" class="details-watch-this">&nbsp;</a>
                                            </span>
                                            <span class="report-this" id="report_this">
                                                    <a href="" title="Click here to report this image" >&nbsp;</a>
                                            </span>
                                            </div>
                                       
                                       
                                    </div>

                                <?php }
                                } ?>
                                     </div>
                                </li>
                                <li>
                                <?php if(!empty($data)){
                                    foreach($data['rent'] as $pro){?>                                  
                                
                                    
                                        <div class='span3 featured-item-wrapper'>
                                            <div class='featured-item'>
                                                <div class='top'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <figure>
                                                                <img src="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($pro['mainPic']);?>" alt="" />
                                                                <div class='banner'>For Rent</div>
                                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/Detail?id=<?php echo base64_encode($pro['pid']); ?>" class='figure-hover'>Zoom</a>
                                                            </figure>
                                                            <h3><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/Detail?id=<?php echo base64_encode($pro['pid']); ?>"><?php echo $pro['title']; ?></a></h3>
                                                            <p><?php echo $pro['location']; ?>, <?php echo $pro['city']; ?></p>
                                                        </div>
                                                    </div>
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p><?php echo $pro['beds'];?>  +  <?php echo $pro['baths'];?>  +  <?php echo preg_replace("/[^0-9]/","", $pro['size']);?> sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="item-controls">
                                            <span class="watchlist">
                                                    <a href="" title="Click here to add in wishlist" class="details-watch-this">&nbsp;</a>
                                            </span>
                                            <span class="report-this" id="report_this">
                                                    <a href="" title="Click here to report this image" >&nbsp;</a>
                                            </span>
                                            </div>
                                            
                                        </div>
                                        
                                       
                                   

                                <?php }
                                } ?>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <i class='content-bubble'></i>
                </section>
            </section>
        </section>
