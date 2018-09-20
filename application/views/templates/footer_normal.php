<!-- Footer -->
<div class="footer w3ls">
	<div class="container">
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 ftr-grid fg1" align="center">
					<img src="/static/img/logo.png" alt="" class="img-responsive" style="height:150px;width:150px;">
					<p></p>
				</div>
				<div class="col-md-4 ftr-grid fg2 mid-gd">
					<h3>Our Address</h3>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>95, Loni Road, Between Mohan Nagar and Air Force Station-Hindon Ghaziabad (Uttar Pradesh)<br>
Pin : 201007 <br></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>0120-2657731/32</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p><a href="mailto:info@example.com">info@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 ftr-grid fg2">
					<h3>Career@KEC</h3>
					<!-- <div class="right-w3l">
						<ul class="top-links">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div> -->
					<div class="right-w3-2">
						<ul class="text-w3">
							<li><a href="/career/about%20hr/">About HR</a></li>
                			<li><a href="/career/apply%20now/">Apply Now</a></li>
                			<li><a href="/career/event%20gallery/">Event Gallery</a></li>
                			<li><a href="/career/training%20and%20development/">Training &amp; Development</a></li>
                			<li><a href="/career/human%20resource/">Human Resource Team</a></li>
                			<li><a href="/career/faq/">HR-FAQs</a></li>
						</ul>
					</div>
				</div>
			   <div class="clearfix"> </div>
				 <h3>Developed By <a href="https://tusharmalik.github.io/" style="color:#ff0000;font-weight:bold;">Tushar Malik</a></h3>
			</div>
		</div>
	</div>

</div>



<!-- Footer -->




        <!-- js -->

				
				

				<!-- notice board scroller -->
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
				<script src="<?php echo base_url();?>js/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
				<script>
				$(".porn").bootstrapNews({
				        newsPerPage: 7,
				        autoplay: true,
				  pauseOnHover: true,
				  navigation: true,
				        direction: 'up',
				        newsTickerInterval: 2500,
				        onToDo: function () {
				            //console.log(this);
				        }
				    });
				    </script>
				<!-- /notice board scroller -->

		<!--//pop-up-box -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
<!--pop-up-box -->
					<script src="<?php echo base_url();?>js/jquery.magnific-popup.js" type="text/javascript"></script>
					<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});

					});
					</script>
					<script>
					var myIndex = 0;
					carousel();

					function carousel() {
					    var i;
					    var x = document.getElementsByClassName("tusharSlides");
					    for (i = 0; i < x.length; i++) {
					       x[i].style.display = "none";  
					    }
					    myIndex++;
					    if (myIndex > x.length) {myIndex = 1}    
					    x[myIndex-1].style.display = "block";  
					    setTimeout(carousel, 2000); // Change image every 2 seconds
					}
					</script>
<!-- //pop-up-box -->

<!-- //js -->
<script type="text/javascript" src="<?php echo base_url();?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

			<script src="<?php echo base_url();?>js/jzBox.js"></script>

			<!-- Countdown-Timer-JavaScript -->
			<script src="<?php echo base_url();?>js/simplyCountdown.js"></script>
			<script>
				var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

				// default example
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate()
				});

				// inline example
				simplyCountdown('.simply-countdown-inline', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					inline: true
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					enableUtc: false
				});
			</script>
		<!-- //Countdown-Timer-JavaScript -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>