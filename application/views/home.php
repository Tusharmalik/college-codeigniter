<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="">
    <div class="row parent" style="height: 10px;">
        <div class="col-md-1 col-lg-1"></div>
        <div class="col-md-9 col-lg-9 col-xs-10 col-sm-10" id="carousel">
            <!-- Slider -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                <?php foreach ($scroller as $scroller): ?>
                    <?php if($scroller['id']==$id->id):?>
                    <div class="item active">
                <?php else: ?>
                    <div class="item">
                <?php endif; ?>
                    <img class="animated jackInTheBox" src="<?php echo base_url();?><?php echo $scroller['pic'];?>" alt="College2" style="height: 500px;width: 100%">
                    <div class="carousel-caption">
                        <h3><?php echo $scroller['text'] ?></h3>
                    </div>
                    </div>
                <?php endforeach; ?>
                    
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 second-agileits" >
        <div class="slider">
			<!-- <h2>Important Links</h2> -->
			<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
				<div class="wmuSliderWrapper">
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="banner-wrap">
							<div class="slider-grids">
								<div class="slider-grid">
									<div class="slider-grid-left">
										<a href="https://ndl.iitkgp.ac.in/"><img src="image/home/news/logo-lg-green.svg" alt=" " class="img-responsive" /></a>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="slider-grid">
									<div class="slider-grid-left">
										<a href="http://nptel.ac.in/"><img src="image/home/news/nptel-logo.png" alt=" " class="img-responsive" /></a>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="slider-grid">
									<div class="slider-grid-left">
										<a href="https://www.ieee.org/index.html"><img src="image/home/news/1200px-IEEE_logo.svg.png" alt=" " class="img-responsive" /></a>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="slider-grid">
									<div class="slider-grid-left">
										<a href="http://india.acm.org/"><img src="image/home/news/ACM-logo1.png" alt=" " class="img-responsive" /></a>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="slider-grid">
									<div class="slider-grid-left">
										<a href="http://eict.iitr.ac.in/"><img src="image/home/news/IIT.png" alt=" " class="img-responsive" /></a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</article>
				</div>
						<script src="js/jquery.wmuSlider.js"></script>
						<script>
							$('.example1').wmuSlider();
						</script>
			</div>
		</div>
        </div>
    </div>
</div>
<div class="clearfix"> </div>

<div class="">
    <div class="row parent" style="height: 10px;">
        <div class="col-md-12" id="carousel">
            <!-- Sliderrrrr -->
            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="image/home/publicity_scroller/poster2.webp" alt="College2" style="height: 345px;width: 100%">
                    </div>
                    <?php
                    $path = 'image/home/publicity_scroller/';
                    $file = scandir($path);
                    $file = array_diff($file, [".",".."] );
                    foreach ($file as $value) {
                    ?>
                    <div class="item">
                        <img src="<?php echo $path.$value;?>" alt="College2" style="height: 345px;width: 100%">
                    </div>
                        <?php
                    }
                    ?>
                        </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div>

<!-- banner-bottom -->
<div class="banner-bottom-agileits" id="about">

    <div class="col-md-5 w3l_banner_bottom_right">
        <!-- <img src="images/ab.jpg" alt=" " class="img-responsive" /> -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/PwMO1yonQQc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="col-md-7 w3l_banner_bottom_left">
        <h3>Top Recruiters</h3>
        <div class="w3-content w3-section" style="max-width:500px">
            <img class="tusharSlides" src="image/home/pl/3pillar.png" style="width:100%">
            <img class="tusharSlides" src="image/home/pl/amazon.png" style="width:100%">
            <img class="tusharSlides" src="image/home/pl/accenture.png" style="width:100%">
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner-bottom -->