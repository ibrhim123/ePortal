<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/vendor/bootstrap-select.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/vendor/slider.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
  	 <header>
            <section class='container'>
                <section class='row'>
                    <div class='span3'>
                        <figure class='logo'>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/main-logo.png" width="115" height="40" alt="ARAB LOGO"/>
                            </a>
                        </figure>
                    </div>
                    <div class='span6'>
                        <nav class='main-nav' id="myNav">
                            <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>">Home</a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/About">About</a></li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/SaleProperty/Sale">Property for Sale</a>
                                    <ul class='dropdown-menu'>
                                        <li class='first-element'><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListSale?cat=<?php echo base64_encode('apartments'); ?>">Apartments for Sale</a> </li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListSale?cat=<?php echo base64_encode('house or villa'); ?>">Houses & Villas for Sale</a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListSale?cat=<?php echo base64_encode('commercial property'); ?>">Commercial Property for Sale</a> </li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListSale?cat=<?php echo base64_encode('Towers or Building'); ?>">Towers &amp; Building for Sale</a></li>
                                        <li class='last-element'><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListSale?cat=<?php echo base64_encode('Plots or Land'); ?>">Plots &amp; Land for Sale</a></li>
                                    </ul> 
                                </li>
                                 <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/RentProperty/Rent">Property for Rent</a>
                                    <ul class='dropdown-menu'>
                                        <li class='first-element'><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListRent?cat=<?php echo base64_encode('apartments'); ?>">Apartments for Rent</a>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListRent?cat=<?php echo base64_encode('house or villa'); ?>">Houses &amp; Villas for Rent</a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListRent?cat=<?php echo base64_encode('commercial property'); ?>">Commercial Property for Rent</a> </li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListRent?cat=<?php echo base64_encode('Room'); ?>">Rooms for Rent</a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListRent?cat=<?php echo base64_encode('short term (Daily)'); ?>">Short Term (Daily)</a></li>
                                        <li class='last-element'><a href="<?php echo Yii::app()->request->baseUrl; ?>/Property/ListRent?cat=<?php echo base64_encode('short term (Monthly)'); ?>">Short Term (Monthly)</a></li>
                                    </ul> 
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/Agents">Agents</a>
                                </li>
                             
                            </ul>
                        </nav>
                    </div>
                    <div class='span3'>
                        <div class='header-buttons'>
                            <?php if(Yii::app()->user->isGuest){ ?>
                                 <a href="<?php echo Yii::app()->request->baseUrl ?>/Users/Create" class='add custom-tooltip' title="Register With Us">Register</a>
                                 <a href="<?php echo Yii::app()->request->baseUrl ?>/site/login" class='profile custom-tooltip' title="Go to My Profile">Login</a>
                            <?php }else{?>
                                <a href="<?php echo Yii::app()->request->baseUrl ?>/Users/myProfile" class='profile custom-tooltip' title="Go to My Profile">Profile</a>
                            <?php } ?>
                            <a href="<?php echo Yii::app()->request->baseUrl ?>/site/Contact" class='contact custom-tooltip' title='Got to Contact Form'>Contact</a>
                        </div>
                    </div>
                </section>
            </section>
        </header>


	<?php echo $content; ?>

	<footer>
            <section class='container'>
                <section class='row'>
                    <div class='span4 footer-widget'>
                        <h2>About Us</h2>
                        <p>Donec ac diam nec magna dignissim porta ut eu nulla. Cras neque metus, dictum et congue ac, tristique eget ante. In hac habitasse platea dictumst.</p>
                        <p>Quisque tincidunt ornare sapien, at commodo ante tristique non. Integer id tellus nisl. Donec eget nunc eget odio malesuada egestas.</p>
                        <a href="#" class='read-more'>Learn More</a>
                    </div>
                    <div class='span4 footer-widget'>
                        <h2>Recent News</h2>
                        <div class='blog-style'>
                            <article>
                                <div class='date-box'>
                                    <div class='day'>20</div>
                                    <div class='month'>mar</div>
                                </div>
                                <div class='text-box'>
                                    <h3><a href="#">How to Choose Property</a></h3>
                                    <span class='author'>posted by admin</span>
                                    <div class='excerpt'>
                                        <p>In porttitor augue vel velit luctus at scelerisque nisi dictum. Ut tempus dignissim mi, at gravida leo.</p>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class='date-box'>
                                    <div class='day'>16</div>
                                    <div class='month'>mar</div>
                                </div>
                                <div class='text-box'>
                                    <h3><a href="#">Real Estate of Future</a></h3>
                                    <span class='author'>posted by admin</span>
                                    <div class='excerpt'>
                                        <p>In porttitor augue vel velit luctus at scelerisque nisi dictum. Ut tempus dignissim mi, at gravida leo.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class='span4 footer-widget'>
                        <h2>Testimonials</h2>
                        <div class='testimonial-box'>
                            <div class='controls'>
                                <a href="#" class='prev'>Previous</a>
                                <a href="#" class='next'>Next</a>
                            </div>
                            <ul class='slides'>
                                <li>
                                    <div class='slide-box'>
                                        <div class='text-box'>
                                            <div class='inner'>
                                                <p>"Quisque venenatis dui vitae augue accumsan sed blandit lectus pretium. Vivamus at urna ut est faucibus ornare in quis lacus. Praesent erat nulla, venenatis ac consequat vel, vestibulum id massa."</p>
                                            </div>
                                            <i class='bubble'></i>
                                        </div>
                                        <div class='author-box'>
                                            <figure></figure>
                                            <div class='texts'>
                                                <span class='name'>John Doe</span> <br />
                                                <span class='position'>Company name</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class='slide-box'>
                                        <div class='text-box'>
                                            <div class='inner'>
                                                <p>Donec ac diam nec magna dignissim porta ut eu nulla. Cras neque metus, dictum et congue ac, tristique eget ante. In hac habitasse platea dictumst.</p>
                                            </div>
                                            <i class='bubble'></i>
                                        </div>
                                        <div class='author-box'>
                                            <figure></figure>
                                            <div class='texts'>
                                                <span class='name'>John Doe</span> <br />
                                                <span class='position'>Company name</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <i class='footer-bubble'></i>
                </section>
            </section>
        </footer>
                
        <section id='sub-footer'>
            <section class='container'>
                <section class='row'>
                    <div class='span3'>
                        <figure class='logo footer_logo'>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/main-logo-fotter.png" alt=""/>
                            </a>
                        </figure>
                    </div>
                    <div class='span6'>
                        <div class='copyright'>
                            <p>&copy; 2014 ARAB Property. All rights reserved. Developed by <a href="http://www.multilynx.pk/">Multilynx</a></p>
                        </div>
                    </div>
                    <div class='span3'>
                        <div class='social-icons'>
                            <a href="#" class='be'>Be</a>
                            <a href="#" class='star'>Star</a>
                            <a href="#" class='pinterest'>Pinterest</a>
                            <a href="#" class='facebook'>Facebook</a>
                            <a href="#" class='twitter'>Twitter</a>
                        </div>
                    </div>
                </section>
            </section>
        </section>

        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/bootstrap-select.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery.flexslider-min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/bootstrap-slider.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery.mousewheel.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery.mCustomScrollbar.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/tinynav.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery.placeholder.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/gmap3.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
    </body>
</html>
