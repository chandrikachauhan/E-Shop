		<!-- content-section-starts -->
		<?php 

		$p_d =0;
		?>
			<div class="container">
	   <div class="products-page">
			<div class="products">
				<div class="product-listy">
					<h2>our Products</h2>
					<ul class="product-list">
						<li><a href="">New Products</a></li>
						<li><a href="">Old Products</a></li>
						<li><a href="">T-shirts</a></li>
						<li><a href="">pants</a></li>
						<li><a href="">Dress</a></li>
						<li><a href="">Shorts</a></li>
						<li><a href="#">Shirts</a></li>
						<li><a href="<?php echo base_url('User_Register/register')?>">Register</a></li>
					</ul>
				</div>
				<div class="latest-bis">
					<img src="<?php echo base_url()?>assets/images/l4.jpg" class="img-responsive" alt="" />
					<div class="offer">
						<p>40%</p>
						<small>Top Offer</small>
					</div>
				</div> 	
				<div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Kitesurf</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
							<li><a href="#">Best</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Apparel</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Responsive</a></li>
					        <li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
						</ul>
					
				     </div>

			</div>
			<?php 
				foreach ($p_details as $key => $values) {
					$p_d = $values['sno'];
				?>
			<div class="new-product">
				<div class="col-md-5 zoom-grid">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo base_url()?>assets/product_image/<?php echo $values['product_image'];?>">
								<div class="thumb-image"> <img src="C:\Users\Pk\Desktop/ac1114001049-dede-s-xxl-400x400-imae2bbxfh4dzhrf.jpeg" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>
							<li data-thumb="<?php echo base_url()?>assets/product_image/<?php echo $values['product_image'];?>">
								<div class="thumb-image"> 
									<img src="<?php echo base_url()?>assets/product_image/<?php echo $values['product_image'];?>" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>
							<li data-thumb="<?php echo base_url()?>assets/product_image/<?php echo $values['product_image'];?>">
							<div class="thumb-image"> <img src="<?php echo base_url()?>assets/product_image/<?php echo $values['product_image'];?>" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li> 
						</ul>
					</div>
				</div>
				<div class="col-md-7 dress-info">
					<div class="dress-name">
						<h3><?php echo $values['product_name'];?></h3>
						<span>$<?php echo $values['product_price'];?>.00</span>
						<div class="clearfix"></div>
						<p><?php echo $values['desciption'];?></p>
					</div>
					<div class="span span2">
						<p class="left">MADE IN</p>
						<p class="right"><?php echo $values['made_in'];?></p>
						<div class="clearfix"></div>
					</div>
					<div class="span span3">
						<p class="left">COLOR</p>
						<p class="right"><?php echo $values['color'];?></p>
						<div class="clearfix"></div>
					</div>
					<!-- <div class="span span4">
						<p class="left">SIZE</p>
						<p class="right">
							<span class="selection-box">
								<select class="domains valid" name="domains">
								   <option value="M">M</option>
								   <option value="l">L</option>
								   <option value="xl">XL</option>
								   <option value="fs">FS</option>
								   <option value="s">S</option>
							   </select>
							</span>
						</p>
						<div class="clearfix"></div>
					</div> -->
				<?php }?>
					<div class="purchase">
						<button class="btn btn-primary" data-id="<?php echo $p_d;?>">Parchase Now</button>
						
						<div class="social-icons">
							<ul>
								<li><a class="facebook1" href="#"></a></li>
								<li><a class="twitter1" href="#"></a></li>
								<li><a class="googleplus1" href="#"></a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				<script src="<?php echo base_url()?>assets/js/imagezoom.js"></script>
					<!-- FlexSlider -->
					<script defer src="<?php echo base_url()?>assets/js/jquery.flexslider.js"></script>
					<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						$(document).ready(function(){
							$('.btn').click(function(){
								var id = $('.btn').data('id');
								$.ajax({
									url : '<?php echo base_url()?>admin/Cart/add_cart',
									type : 'POST',
									data:{ids:id},
									dataType:'JSON',
									success:function(data){
										$.each(data, function(key,row){
											alert(row.product_name);
										});
									}
								});
							});
						});
					</script>
				</div>
				<div class="clearfix"></div>
					<div class="reviews-tabs">
      <!-- Main component for a primary marketing message or call to action -->
      <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
        <li class="test-class active"><a class="deco-none misc-class" href="#how-to"> More Information</a></li>
        <li class="test-class"><a href="#features">Specifications</a></li>
        <li class="test-class"><a class="deco-none" href="#source">Reviews (7)</a></li>
      </ul>

      <div class="tab-content responsive hidden-xs hidden-sm">
        <div class="tab-pane active" id="how-to">
		 <p class="tab-text">Maecenas mauris velit, consequat sit amet feugiat rit, elit vitaeert scelerisque elementum, turpis nisl accumsan ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. and scrambled it to make a type specimen book. It has survived Auction your website on Flippa and you'll get the best price from serious buyers, dedicated support and a much better deal than you'll find with any website broker. Sell your site today I need a twitter bootstrap 3.0 theme for the full-calendar plugin. it would be great if the theme includes the add event; remove event, show event details. this must be RESPONSIVE and works on mobile devices. Also, I've seen so many bootstrap themes that comes up with the fullcalendar plugin. However these . </p>    
        </div>
        <div class="tab-pane" id="features">
          <p class="tab-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.This tab has icon in consectetur adipiscing eliconse consectetur adipiscing elit. Vestibulum nibh urna, ctetur adipiscing elit. Vestibulum nibh urna, t.consectetur adipiscing elit. Vestibulum nibh urna,  Vestibulum nibh urna,it.</p>
		  <p class="tab-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
        <div class="tab-pane" id="source">
		  <div class="response">
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 21, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="<?php echo base_url()?>assets/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 26, 2054</li>
									<li><a href="single.html">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="<?php echo base_url()?>assets/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MAY 25, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="<?php echo base_url()?>assets/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>FEB 13, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="<?php echo base_url()?>assets/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>JAN 28, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="<?php echo base_url()?>assets/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>APR 18, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="<?php echo base_url()?>assets/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>DEC 25, 2014</li>
									<li><a href="single.html">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
        </div>
      </div>		
	</div>

			</div>
			<div class="clearfix"></div>
			</div>
   </div>
   <div class="other-products products-grid">
		<div class="container">
			<header>
				<h3 class="like text-center">Related Products</h3>   
			</header>			
			<?php 
			foreach ($p_d_list as $key => $list) {
				if($key == 3){
					break;
				}
			?>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="<?php echo base_url('Product_details/getDetails')?>?p_id=<?php echo $list['sno'];?>"><img src="<?php echo base_url()?>assets/product_image/<?php echo $list['product_image'];?>" alt="" /></a>
						<div class="mask">
							<a href="<?php echo base_url('Product_details/getDetails')?>?p_id=<?php echo $list['sno'];?>">Quick View</a>
						</div>
						<a class="product_name" href="<?php echo base_url('Product_details/getDetails')?>?p_id=<?php echo $list['sno'];?>"><?php echo $list['product_name'];?></a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$<?php echo $list['product_price'];?></span></a></p>
					</div>
				<?php }?>
					<div class="clearfix"></div>
				   </div>
				   </div>
   <!-- content-section-ends -->
   <script type="text/javascript">
      $( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      $( '#moreTabs a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );

    </script>
	