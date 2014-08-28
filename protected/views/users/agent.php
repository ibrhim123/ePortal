<div class="ibrahim"></div>
<section id="page-title">
    <section class="container">
        <section class="row">
            <div class="span6">
                <h1>Agents</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a> <span class="divider">&ndash;</span></li>
                    <li class="active">Agents</li>
                </ul>
            </div>
        </section>
    </section>
</section>
<section id='content' class='alternate-bg'>
<section class='container'>
<section class='row featured-items'>
<section class='span9'>
<?php $data = array();
foreach($model as $m){ ?> 

  <div class='author-section'>
        <div class='left'>
            <div class='inner'>
                    <div class='row'>
                    <figure>
                        <?php if(!empty($m->profilePic)):?>
                            <img src="<?php echo yii::app()->baseUrl.'/resources.php?r='.base64_encode($m->profilePic)?>" alt="Agent Pic" />
                        <?php endif; ?>
                    </figure>
                    <div class='text'>
                        <h2><?php echo $m->firstName.' '.$m->lastName; ?></h2> <br/>
                        <span class='job-title'>Agent & Real Estate Specialist</span>

                        <p>In porttitor augue vel velit luctus at scelerisque nisi dictum. Ut tempus dignissim mi, at gravida leo porta ut.</p>
                        <a href="#" class='follow btn btn-primary'><i class='icon-white icon-plus'></i> <?php echo $m->contact; ?></a>
                    </div>
                </div>
            </div>
                     
                
        </div>
             <div class='right'>
            <div class='listings'>
                <span class='number'>25</span> <br/>
                <span>listings</span>
            </div>
        </div>
              </div>

<?php }
?>
    <div class="pagination">
        <ul>
        <?php 
        $this->widget('CLinkPager', array(
            'currentPage'=>$pages->getCurrentPage(),
            'itemCount'=>$item_count,
            'pageSize'=>$page_size,
            'maxButtonCount'=>5,
            //'nextPageLabel'=>'My text >',
            'header'=>'',
        'htmlOptions'=>array('class'=>'pages'),
        )); ?>
        </ul>
    </div>
</section>
<aside class='span3'>
    <section class='widget'>
        <section class='widget-title'>
            <div class='inner'>
                <h2>Text Widget</h2>
            </div>
        </section>
        <section class='widget-content top-arrow'>
            <div class='inner'>
                <p>Vestibulum venenatis sem a ligula rhoncus et gravida lacus consequat. Praesent sollicitudin dolor euismod quam elementum a lacinia odio vehicula.</p>
            </div>
        </section>
    </section>
    <section class='row featured-items'>
        <div class='span3'>
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
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/4947806065_f932310392_b.jpg" alt="" />
                                                    <div class='banner'>For Rent</div>
                                                    <a href="#" class='figure-hover'>Zoom</a>
                                                </figure>
                                                <h3><a href="property.html">300 Riverside Dr</a></h3>

                                                <p>Boston, MA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='bottom'>
                                        <div class='inner-border'>
                                            <div class='inner-padding'>
                                                <p>3 beds + 1 bath + 100 sqft</p>
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
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/4834194361_85d5c4a5e0_b.jpg" alt="" />
                                                    <a href="#" class='figure-hover'>Zoom</a>
                                                </figure>
                                                <h3><a href="property.html">1 Central Park S</a></h3>

                                                <p>Las Vegas, NV</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='bottom'>
                                        <div class='inner-border'>
                                            <div class='inner-padding'>
                                                <p>3 beds + 1 bath + 100 sqft</p>
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
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/4834197589_84d75a42bd_b.jpg" alt="" />
                                                    <a href="#" class='figure-hover'>Zoom</a>
                                                </figure>
                                                <h3><a href="property.html">555 Malcolm X Blvd</a></h3>

                                                <p>Los Angeles, CA</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='bottom'>
                                        <div class='inner-border'>
                                            <div class='inner-padding'>
                                                <p>4 beds + 2 baths + 245 sqft</p>
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
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/4834201025_e7f66118eb_b.jpg" alt="" />
                                                    <a href="#" class='figure-hover'>Zoom</a>
                                                </figure>
                                                <h3><a href="property.html">520 W 110th St</a></h3>

                                                <p>Las Vegas, NV</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='bottom'>
                                        <div class='inner-border'>
                                            <div class='inner-padding'>
                                                <p>2 beds + 2 baths + 168 sqft</p>
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
    </section>
    <section class='widget'>
        <section class='widget-title'>
            <div class='inner'>
                <h2>Useful Links</h2>
            </div>
        </section>
        <section class='widget-content top-arrow'>
            <ul class='widget-list'>
                <li><a href="#">Link Example</a></li>
                <li><a href="#">Link Example</a></li>
                <li><a href="#">Link Example</a></li>
                <li><a href="#">Link Example</a></li>
            </ul>
        </section>
    </section>
</aside>
</section>
</section>
</section>