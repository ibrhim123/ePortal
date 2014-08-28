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
                                        <form action="#">
                                            <input type="text" name='search-string' class='search-string' placeholder="eg. 'Dubai', 'Abu Dhabi'"/>
                                            <input type="text" name='search-year' class='search-year' placeholder="Year"/>
                                            <select name="search-bedrooms" class='span2 selectpicker search-select'>
                                                <option>Bedrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                            <select name="search-bathrooms" class='span2 selectpicker search-select'>
                                                <option>Bathrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                            <input type="text" name='search-min-price' class='span2 search-price no-margin' placeholder="Min. Price"/>
                                            <span class='line-divider'>&ndash;</span>
                                            <input type="text" name='search-max-price' class='span2 search-price' placeholder="Max. Price"/>
                                            <button type="submit" class='btn btn-primary search-property'><i class="icon-search icon-white"></i> Search Property</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class='inner'>
                                        <form action="#">
                                            <input type="text" name='search-string' class='search-string' placeholder="eg. 'Dubai', 'Abu Dhabi'"/>
                                            <input type="text" name='search-year' class='search-year' placeholder="Year"/>
                                            <select name="search-bedrooms" class='span2 selectpicker search-select'>
                                                <option>Bedrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                            <select name="search-bathrooms" class='span2 selectpicker search-select'>
                                                <option>Bathrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                            <input type="text" name='search-min-price' class='span2 search-price no-margin' placeholder="Min. Price"/>
                                            <span class='line-divider'>&ndash;</span>
                                            <input type="text" name='search-max-price' class='span2 search-price' placeholder="Max. Price"/>
                                            <button type="submit" class='btn btn-primary search-property'><i class="icon-search icon-white"></i> Search Property</button>
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
                                    <div class='row'>
                                        <div class='span3 featured-item-wrapper'>
                                            <div class='featured-item'>
                                                <div class='top'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <figure>
                                                                <img src="img/photos/4834194361_85d5c4a5e0_b.jpg" alt="" />
                                                                <div class='banner'>For Rent</div>
                                                                <a href="property.html" class='figure-hover'>Zoom</a>
                                                            </figure>
                                                            <h3><a href="property.html">1 Central Park S</a></h3>
                                                            <p>Las Vegas, NV</p>
                                                        </div>
                                                    </div>
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p>3 beds  +  1 bath  +  100 sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='star-rating'>
                                                <button class='star blue'>1 Star</button>
                                                <button class='star active'>2 Star</button>
                                                <button class='star active'>3 Star</button>
                                                <button class='star'>4 Star</button>
                                                <button class='star'>5 Star</button>
                                            </div>
                                            <div class='price-wrapper'>
                                                <div class='price'>$2,150</div>
                                                <div class='rate'>/mo</div>
                                            </div>
                                        </div>
                                        <div class='span3 featured-item-wrapper'>
                                            <div class='featured-item'>
                                                <div class='top'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <figure>
                                                                <img src="img/photos/4834197589_84d75a42bd_b.jpg" alt="" />
                                                                <div class='banner'>For Sale</div>
                                                                <a href="property.html" class='figure-hover'>Zoom</a>
                                                            </figure>
                                                            <h3><a href="property.html">555 Malcolm X Blvd</a></h3>
                                                            <p>Los Angeles, CA</p>
                                                        </div>
                                                    </div>
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p>3 beds  +  1 bath  +  100 sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='star-rating'>
                                                <button class='star blue'>1 Star</button>
                                                <button class='star active'>2 Star</button>
                                                <button class='star active'>3 Star</button>
                                                <button class='star'>4 Star</button>
                                                <button class='star'>5 Star</button>
                                            </div>
                                        </div>
                                        <div class='span3 featured-item-wrapper'>
                                            <div class='featured-item'>
                                                <div class='top'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <figure>
                                                                <img src="img/photos/4834201025_e7f66118eb_b.jpg" alt="" />
                                                                <div class='banner'>For Rent</div>
                                                                <a href="property.html" class='figure-hover'>Zoom</a>
                                                            </figure>
                                                            <h3><a href="property.html">520 W 110th St</a></h3>
                                                            <p>Las Vegas, NV</p>
                                                        </div>
                                                    </div>
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p>4 beds  +  2 baths  +  245 sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='star-rating'>
                                                <button class='star active'>1 Star</button>
                                                <button class='star active'>2 Star</button>
                                                <button class='star active'>3 Star</button>
                                                <button class='star active'>4 Star</button>
                                                <button class='star active'>5 Star</button>
                                            </div>
                                            <div class='price-wrapper'>
                                                <div class='price'>$17,000</div>
                                                <div class='rate'>/year</div>
                                            </div>
                                        </div>
                                        <div class='span3 featured-item-wrapper'>
                                            <div class='featured-item'>
                                                <div class='top'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <figure>
                                                                <img src="img/photos/4834203945_3e56a09048_b.jpg" alt="" />
                                                                <a href="property.html" class='figure-hover'>Zoom</a>
                                                            </figure>
                                                            <h3><a href="property.html">100 W 57th St</a></h3>
                                                            <p>Los Angeles, CA</p>
                                                        </div>
                                                    </div>
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p>2 beds  +  2 baths + 168 sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='star-rating'>
                                                <button class='star active'>1 Star</button>
                                                <button class='star active'>2 Star</button>
                                                <button class='star active'>3 Star</button>
                                                <button class='star active'>4 Star</button>
                                                <button class='star active'>5 Star</button>
                                            </div>
                                            <div class='price-wrapper'>
                                                <div class='price'>$3,600</div>
                                                <div class='rate'>/mo</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class='row'>
                                        <div class='span3 featured-item-wrapper'>
                                            <div class='featured-item'>
                                                <div class='top'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <figure>
                                                                <img src="img/photos/4834790926_0228ed6cde_b.jpg" alt="" />
                                                                <div class='banner'>For Sale</div>
                                                                <a href="property.html" class='figure-hover'>Zoom</a>
                                                            </figure>
                                                            <h3><a href="property.html">140 E 63rd St</a></h3>
                                                            <p>Boston, MA</p>
                                                        </div>
                                                    </div>
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p>3 beds  +  1 bath  +  100 sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='star-rating'>
                                                <button class='star blue'>1 Star</button>
                                                <button class='star active'>2 Star</button>
                                                <button class='star active'>3 Star</button>
                                                <button class='star'>4 Star</button>
                                                <button class='star'>5 Star</button>
                                            </div>
                                            <div class='price-wrapper'>
                                                <div class='price'>$2,150</div>
                                                <div class='rate'>/mo</div>
                                            </div>
                                        </div>
                                        <div class='span3 featured-item-wrapper'>
                                            <div class='featured-item'>
                                                <div class='top'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <figure>
                                                                <img src="img/photos/4834812234_3379989227_b.jpg" alt="" />
                                                                <a href="property.html" class='figure-hover'>Zoom</a>
                                                            </figure>
                                                            <h3><a href="property.html">161 E 110th St</a></h3>
                                                            <p>Los Angeles, CA</p>
                                                        </div>
                                                    </div>
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p>3 beds  +  1 bath  +  100 sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='star-rating'>
                                                <button class='star blue'>1 Star</button>
                                                <button class='star active'>2 Star</button>
                                                <button class='star active'>3 Star</button>
                                                <button class='star'>4 Star</button>
                                                <button class='star'>5 Star</button>
                                            </div>
                                        </div>
                                        <div class='span3 featured-item-wrapper'>
                                            <div class='featured-item'>
                                                <div class='top'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <figure>
                                                                <img src="img/photos/4834826842_cdeb5bc8be_b.jpg" alt="" />
                                                                <div class='banner'>For Rent</div>
                                                                <a href="property.html" class='figure-hover'>Zoom</a>
                                                            </figure>
                                                            <h3><a href="property.html">East 61st Street and Park Avenue</a></h3>
                                                            <p>Los Angeles, CA</p>
                                                        </div>
                                                    </div>
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p>4 beds  +  2 baths  +  245 sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='star-rating'>
                                                <button class='star active'>1 Star</button>
                                                <button class='star active'>2 Star</button>
                                                <button class='star active'>3 Star</button>
                                                <button class='star active'>4 Star</button>
                                                <button class='star active'>5 Star</button>
                                            </div>
                                            <div class='price-wrapper'>
                                                <div class='price'>$17,000</div>
                                                <div class='rate'>/year</div>
                                            </div>
                                        </div>
                                        <div class='span3 featured-item-wrapper'>
                                            <div class='featured-item'>
                                                <div class='top'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <figure>
                                                                <img src="img/photos/4947806065_f932310392_b.jpg" alt="" />
                                                                <a href="property.html" class='figure-hover'>Zoom</a>
                                                            </figure>
                                                            <h3><a href="property.html">300 Riverside Dr</a></h3>
                                                            <p>Boston, MA</p>
                                                        </div>
                                                    </div>
                                                    <i class='bubble'></i>
                                                </div>
                                                <div class='bottom'>
                                                    <div class='inner-border'>
                                                        <div class='inner-padding'>
                                                            <p>2 beds  +  2 baths + 168 sqft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='star-rating'>
                                                <button class='star active'>1 Star</button>
                                                <button class='star active'>2 Star</button>
                                                <button class='star active'>3 Star</button>
                                                <button class='star active'>4 Star</button>
                                                <button class='star active'>5 Star</button>
                                            </div>
                                            <div class='price-wrapper'>
                                                <div class='price'>$3,600</div>
                                                <div class='rate'>/mo</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <i class='content-bubble'></i>
                </section>
            </section>
        </section>
