<?php include("inc/head.php") ?>
<body>
<?php include("inc/page-top.php") ?>
<div id="page">
	<article id="main" role="main">
		<div class="tabWrap">
			<nav class="tabs">
				<ul>
					<li><a href="#log">Log &amp; Timber Homes</a></li>
					<li><a href="#custom">Custom Handcrafted Homes</a></li>
					<li><a href="#accents">Accents and Building Components</a></li>
					<li><a href="#intl">International</a></li>
				</ul>
			</nav>
			<div id="log" class="clearfix">
				<img src="/img/subLogo-logHomes.jpg" class="floatLeft noCorners" />
				<?php include("inc/mainMenu-1.php") ?>
				<hr class="clear" />
				<div class="banner">
					<h4>Optional Banner</h4>
					<a href="#" class="close a-top a-right">Close - X</a>
				</div>
				
				<div class="block blockStyle1 imageOnLeft">
					<img src="css/img/img-wide.png" />
					<div class="content">
						<h1 class="title">Find Your Home</h1>
						<p class="large">Completely impact multifunctional processes and wireless supply chains. Dynamically engage business meta-service for market-driven data.</p>
						<p class="large">Collaboratively restore cross-platform users before client-centered manufactured products.</p>
					</div>
				</div><!-- /.blockStyle1 -->
				
				<div id="buildingStyles">
					<h2 class="title">Building Styles</h2>
					<div class="block" id="milled">
						<img src="/img/style_accent.jpg" alt="" />
						<h3>Automated / Milled</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
					</div>
					<div class="block" id="handcrafted">
						<img src="/img/style_handcrafted.jpg" alt="" />
						<h3>Handcrafted</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
					</div>
					<div class="block" id="timberFrame">
						<img src="/img/style_timberframe.jpg" alt="" />
						<h3>Timber Frame</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
					</div>
					<div class="block" id="naturalAccent">
						<img src="/img/style_accent.jpg" alt="" />
						<h3>Natural Accent</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
					</div>
				</div><!-- /#buildingStyles -->
				

				<form id="views-exposed-form-building-styles" method="get" action="/list">
					<div class="views-exposed-form">
						<div class="views-exposed-widgets clearfix">
						
							<div class="views-exposed-widget views-widget-filter-tid">
								<label for="edit-region">Style</label>
								<div class="views-widget">
									<div class="form-item form-type-select form-item-region">
										<select class="form-select" name="region" id="style">
											<option selected="selected" value="All"></option>
											<option>Any</option>
											<option value="milled">Milled</option>
											<option value="handcrafted">Handcrafted</option>
											<option value="timberFrame">Timber Frame</option>
											<option value="naturalAccent">Natural Accent</option>
										</select>
									</div>
								</div>
							</div><!-- /.views-exposed-widget -->
							
							<div class="views-exposed-widget views-widget-filter-tid">
								<label for="edit-region">Area</label>
								<div class="views-widget">
									<div class="form-item form-type-select form-item-region">
										<select class="form-select" name="region">
											<option selected="selected" value="All"></option>
											<option>500-1000</option>
											<option>1000-1500</option>
											<option>1500-2200</option>
											<option>2200-3000</option>
											<option>3000+</option>
										</select>
									</div>
								</div>
							</div><!-- /.views-exposed-widget -->
							
							<div class="views-exposed-widget views-widget-filter-tid">
								<label for="edit-region">Price</label>
								<div class="views-widget">
									<div class="form-item form-type-select form-item-region">
										<select class="form-select" name="region">
											<option selected="selected" value="All"></option>
											<option>$150,000</option>
											<option>$250,000</option>
											<option>$350,000</option>
											<option>$500,000</option>
											<option>$650,000+</option>
										</select>
									</div>
								</div>
							</div><!-- /.views-exposed-widget -->
							
							<div class="views-exposed-widget views-widget-filter-tid">
								<label for="edit-region">Levels</label>
								<div class="views-widget">
									<div class="form-item form-type-select form-item-region">
										<select class="form-select" name="region">
											<option selected="selected" value="All"></option>
											<option>Single</option>
											<option>Two Story</option>
										</select>
									</div>
								</div>
							</div><!-- /.views-exposed-widget -->
							
							<div class="views-exposed-widget views-widget-filter-tid">
								<label for="edit-region">Bedrooms</label>
								<div class="views-widget">
									<div class="form-item form-type-select form-item-region">
										<select class="form-select" name="region">
											<option selected="selected" value="All"></option>
											<option>1+</option>
											<option>2+</option>
											<option>3+</option>
											<option>4+</option>
										</select>
									</div>
								</div>
							</div><!-- /.views-exposed-widget -->
							
							<div class="views-exposed-widget views-widget-filter-tid">
								<label for="edit-region">Bathrooms</label>
								<div class="views-widget">
									<div class="form-item form-type-select form-item-region">
										<select class="form-select" name="region">
											<option selected="selected" value="All"></option>
											<option>1+</option>
											<option>2+</option>
											<option>3+</option>
											<option>4+</option>
										</select>
									</div>
								</div>
							</div><!-- /.views-exposed-widget -->
							
							
							<div class="views-exposed-widget views-widget-filter-tid">
								<label for="edit-region">Garage</label>
								<div class="views-widget">
									<div class="form-item form-type-select form-item-region">
										<select class="form-select" name="region">
											<option selected="selected" value="All"></option>
											<option>None</option>
											<option>1 Car+</option>
											<option>2 Car+</option>
											<option>3 Car+</option>
										</select>
									</div>
								</div>
							</div><!-- /.views-exposed-widget -->
							
							<div class="views-exposed-widget views-widget-filter-tid">
								<label for="edit-region">Series</label>
								<div class="views-widget">
									<div class="form-item form-type-select form-item-region">
										<select class="form-select" name="region">
											<option selected="selected" value="All"></option>
											<option>Wilderness Cabins</option>
											<option>Quick Delivery</option>
											<option>Moss Creek</option>
											<option>Legacy Plans</option>
										</select>
									</div>
								</div>
							</div><!-- /.views-exposed-widget -->
							
							<!-- Search Box -->
							<div class="views-exposed-widget views-widget-filter-keys">
								<div class="views-widget">
									<label for="edit-region">Plan Name</label>
									<div class="form-item form-type-textfield form-item-keys">
										<input type="text" class="form-text noTooltip" maxlength="128" size="15" value="" name="keys" title="Plan Name">
									</div>
								</div>
							</div><!-- /.views-exposed-widget -->
							<div class="views-exposed-widget views-submit-button">
								<input type="submit" class="form-submit" value="Search" title="Click to see results below">
							</div><!-- /Submit Button -->
						</div><!-- /.views-exposed-widgets -->
					</div><!-- /.views-exposed-form -->
				</form>
				<hr />
				<div class="view view-plans visuallyhidden">
					<ul class="pager">
					    <li class="pager-current first">1</li>
					    <li class="pager-item"><a class="active" title="Go to page 2" href="/node?page=1">2</a></li>
					    <li class="pager-item"><a class="active" titlei="Go to page 3" href="/node?page=2">3</a></li>
					    <li class="pager-ellipsis">&#8230;</li>
					    <li class="pager-next"><a class="active" title="Go to next page" href="/node?page=1">next &#8250;</a></li>
					</ul><!-- /.pager -->
					<div class="filter">
						<label>Sort by</label>
						<select>
							<option>Square Foot</option>
							<option>1000+</option>
							<option>1000-2000</option>
							<option>2000+</option>
						</select>
					</div><!-- /.filter -->
					<div class="view-content">
					    <div class="item-list">
					        <ul>
					            <li class="views-row-1 views-row views-row-odd views-row-first">
					                <div class="views-field-image">
					                    <span class="field-content">
					                    	<a href="/planDetail.php"><img src="css/img/img.png" class="liquid" /></a>
					                    </span>
					                </div>
					
					                <div class="views-field-title">
					                    <span class="field-content">
					                    	<h3 class="title"><a href="/planDetail.php">Plan Number</a></h3>
					                    </span>
					                </div>
					                
					                <div class="views-field-body">
					                	<span class="field-content">
					                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>					                		
					                	</span>
					                </div>
					                
					                <ul class="views-field-group-stats">
			                			<li class="views-field-area">1,200 sq ft</li>
			                			<li class="views-field-levels">Single Level</li>
			                			<li class="views-field-bedrooms">3 bedrooms</li>
			                			<li class="views-field-bathrooms">3 baths</li>
			                		</ul>
			                		
			                		<span class="views-field-price">$65,000</span>
			                		
			                		<div class="views-more"><a href="#">Learn More</a></div>
			                		
			                		<div class="views-rating">
			                			<span class="star"></span>
			                			<span class="total-likes">15</span>
			                			<span class="like-label"> likes</span>
			                		</div>
					                
					            </li>
					            <li class="views-row-2 views-row views-row-even">
					                <div class="views-field-image">
					                    <span class="field-content">
					                    	<a href="/planDetail.php"><img src="css/img/img.png" class="liquid" /></a>
					                    </span>
					                </div>
					
					                <div class="views-field-title">
					                    <span class="field-content">
					                    	<h3 class="title"><a href="/planDetail.php">Plan Number</a></h3>
					                    </span>
					                </div>
					                
					                <div class="views-field-body">
					                	<span class="field-content">
					                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					                	</span>
					                </div>
					                
					                <ul class="views-field-group-stats">
			                			<li class="views-field-area">1,200 sq ft</li>
			                			<li class="views-field-levels">Single Level</li>
			                			<li class="views-field-bedrooms">3 bedrooms</li>
			                			<li class="views-field-bathrooms">3 baths</li>
			                		</ul>
			                		
			                		<span class="views-field-price">$70,000</span>
			                		
			                		<div class="views-more"><a href="#">Learn More</a></div>
			                		
			                		<div class="views-rating">
			                			<span class="star"></span>
			                			<span class="total-likes">5</span>
			                			<span class="like-label"> likes</span>
			                		</div>
					            </li>
					            <li class="views-row-3 views-row views-row-odd">
					                <div class="views-field-image">
					                    <span class="field-content">
					                    	<a href="/planDetail.php"><img src="css/img/img.png" class="liquid" /></a>
					                    </span>
					                </div>
					
					                <div class="views-field-title">
					                    <span class="field-content">
					                    	<h3 class="title"><a href="/planDetail.php">Plan Number</a></h3>
					                    </span>
					                </div>
					                
					                <div class="views-field-body">
					                	<span class="field-content">
					                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					                	</span>
					                </div>
					                
					                <ul class="views-field-group-stats">
			                			<li class="views-field-area">1,200 sq ft</li>
			                			<li class="views-field-levels">Single Level</li>
			                			<li class="views-field-bedrooms">3 bedrooms</li>
			                			<li class="views-field-bathrooms">3 baths</li>
			                		</ul>
			                		
			                		<span class="views-field-price">$65,000</span>
			                		
			                		<div class="views-more"><a href="#">Learn More</a></div>
			                		
			                		<div class="views-rating">
			                			<span class="star"></span>
			                			<span class="total-likes">20</span>
			                			<span class="like-label"> likes</span>
			                		</div>
					            </li>
					            <li class="views-row-4 views-row views-row-odd">
					                <div class="views-field-image">
					                    <span class="field-content">
					                    	<a href="/planDetail.php"><img src="css/img/img.png" class="liquid" /></a>
					                    </span>
					                </div>
					
					                <div class="views-field-title">
					                    <span class="field-content">
					                    	<h3 class="title"><a href="/planDetail.php">Plan Number</a></h3>
					                    </span>
					                </div>
					                
					                <div class="views-field-body">
					                	<span class="field-content">
					                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					                	</span>
					                </div>
					                
					                <ul class="views-field-group-stats">
			                			<li class="views-field-area">1,200 sq ft</li>
			                			<li class="views-field-levels">Single Level</li>
			                			<li class="views-field-bedrooms">3 bedrooms</li>
			                			<li class="views-field-bathrooms">3 baths</li>
			                		</ul>
			                		
			                		<span class="views-field-price">$65,000</span>
			                		
			                		<div class="views-more"><a href="#">Learn More</a></div>
			                		
			                		<div class="views-rating">
			                			<span class="star"></span>
			                			<span class="total-likes">11</span>
			                			<span class="like-label"> likes</span>
			                		</div>
					            </li>
					            <li class="views-row-5 views-row views-row-even">
					                <div class="views-field-image">
					                    <span class="field-content">
					                    	<a href="/planDetail.php"><img src="css/img/img.png" class="liquid" /></a>
					                    </span>
					                </div>
					
					                <div class="views-field-title">
					                    <span class="field-content">
					                    	<h3 class="title"><a href="/planDetail.php">Plan Number</a></h3>
					                    </span>
					                </div>
					                
					                <div class="views-field-body">
					                	<span class="field-content">
					                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					                	</span>
					                </div>
					                
					                <ul class="views-field-group-stats">
			                			<li class="views-field-area">1,200 sq ft</li>
			                			<li class="views-field-levels">Single Level</li>
			                			<li class="views-field-bedrooms">3 bedrooms</li>
			                			<li class="views-field-bathrooms">3 baths</li>
			                		</ul>
			                		
			                		<span class="views-field-price">$60,000</span>
			                		
			                		<div class="views-more"><a href="#">Learn More</a></div>
			                		
			                		<div class="views-rating">
			                			<span class="star"></span>
			                			<span class="total-likes">5</span>
			                			<span class="like-label"> likes</span>
			                		</div>
					            </li>
					            <li class="views-row-6 views-row views-row-odd views-row-last">
					                <div class="views-field-image">
					                    <span class="field-content">
					                    	<a href="/planDetail.php"><img src="css/img/img.png" class="liquid" /></a>
					                    </span>
					                </div>
					
					                <div class="views-field-title">
					                    <span class="field-content">
					                    	<h3 class="title"><a href="/planDetail.php">Plan Number</a></h3>
					                    </span>
					                </div>
					                
					                <div class="views-field-body">
					                	<span class="field-content">
					                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					                	</span>
					                </div>
					                
					                <ul class="views-field-group-stats">
			                			<li class="views-field-area">1,200 sq ft</li>
			                			<li class="views-field-levels">Single Level</li>
			                			<li class="views-field-bedrooms">3 bedrooms</li>
			                			<li class="views-field-bathrooms">3 baths</li>
			                		</ul>
			                		
			                		<span class="views-field-price">$70,000</span>
			                		
			                		<div class="views-more"><a href="#">Learn More</a></div>
			                		
			                		<div class="views-rating">
			                			<span class="star"></span>
			                			<span class="total-likes">25</span>
			                			<span class="like-label"> likes</span>
			                		</div>
					            </li>
					        </ul>
					    </div>
					</div><!-- /.view-content -->

				</div><!-- /.view-building-styles -->
				
			</div><!-- /#log -->
			<div id="custom">
				<img src="/img/subLogo-custom.jpg" class="floatLeft noCorners" />
				<?php include("inc/mainMenu-2.php") ?>
				<hr class="clear" />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!-- /#custom -->
			<div id="accents">
				<img src="/img/subLogo-accents.jpg" class="floatLeft noCorners" />
				<?php include("inc/mainMenu-3.php") ?>
				<hr class="clear" />
				<img src="css/img/img-wide.png" class="floatLeft" width="367" style="margin-top:5px" />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!-- /#accents -->
			<div id="intl">
				<img src="/css/img/img-wide.png" width="59" height="29" class="floatLeft" />
				<?php include("inc/mainMenu-4.php") ?>
				<hr class="clear" />
								<div class="banner">
					<h4>Optional Banner</h4>
					<a href="#" class="close a-top a-right">Close - X</a>
				</div>
				
				
				<div class="block blockStyle1 imageOnLeft">
					<img src="css/img/img-wide.png" />
					<div class="content">
						<h1 class="title">Heading 1</h1>
						<p class="veryLarge">Far, far away, behind the word mountains, far from the countries.</p>
					</div>
				</div><!-- /.blockStyle1 -->
				<br />
				<div class="block twoCol">
					<div class="col">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
					</div><!-- /.col -->
					<div class="col">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
					</div><!-- /.col -->
				</div>
				<br />

				<img src="/css/img/map-world.jpg" style="margin-left: 156px" alt="" />
<br />
				<div class="block blockStyle5 fourCol hasDividers needSpace">
					<div class="view">
						<div class="view-content">
						    <div class="item-list">
						        <ul>
						            <li class="views-row-1 views-row views-row-odd views-row-first">
						                <div class="views-field-title">
						                    <span class="field-content">
						                    	<h4 class="title">Heading 4</h4>
						                    </span>
						                </div>
						
						                <div class="views-field-body">
						                    <span class="field-content">
						                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
						                    </span>
						                </div>
						                
						                <div class="views-field-image">
						                    <span class="field-content">
						                    	<img src="/css/img/img-wide.png" class="liquid" alt="" />
						                    </span>
						                </div>
						            </li>
						            <li class="views-row-1 views-row views-row-odd views-row-first">
						                <div class="views-field-title">
						                    <span class="field-content">
						                    	<h4 class="title">Heading 4</h4>
						                    </span>
						                </div>
						
						                <div class="views-field-body">
						                    <span class="field-content">
						                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						                    </span>
						                </div>
						                
						                <div class="views-field-image">
						                    <span class="field-content">
						                    	<img src="/css/img/img-wide.png" class="liquid" alt="" />
						                    </span>
						                </div>
						            </li>
						            <li class="views-row-1 views-row views-row-odd views-row-first">
						                <div class="views-field-title">
						                    <span class="field-content">
						                    	<h4 class="title">Heading 4</h4>
						                    </span>
						                </div>
						
						                <div class="views-field-body">
						                    <span class="field-content">
						                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
						                    </span>
						                </div>
						                
						                <div class="views-field-image">
						                    <span class="field-content">
						                    	<img src="/css/img/img-wide.png" class="liquid" alt="" />
						                    </span>
						                </div>
						            </li>
						            <li class="views-row-1 views-row views-row-odd views-row-first">
						                <div class="views-field-title">
						                    <span class="field-content">
						                    	<h4 class="title">Heading 4</h4>
						                    </span>
						                </div>
						
						                <div class="views-field-body">
						                    <span class="field-content">
						                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						                    </span>
						                </div>
						                
						                <div class="views-field-image">
						                    <span class="field-content">
						                    	<img src="/css/img/img-wide.png" class="liquid" alt="" />
						                    </span>
						                </div>
						            </li>
						        </ul>
						    </div>
						</div>
					</div><!-- /.view -->
					
					<a href="#" class="removeDividers clear needSpace">See without Dividers</a>
				</div>
				
				<br />
				
				<div class="block blockStyle3 twoCol needSpace">
					<div class="col">
						<h2 class="title">Heading 2</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<img src="/css/img/img-wide.png" class="liquid" />
					</div><!-- /.col -->
					<div class="col">
						<h2 class="title">Heading 2</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
						<img src="/css/img/img-wide.png" class="liquid" />
					</div><!-- /.col -->
				</div><!-- /.blockStyle3 -->
				
				<br />
							
			</div><!-- /#intl -->
		</div><!-- /.tabWrap -->
	</article>
<?php include("inc/footer.php") ?>
</div>
<?php include("inc/page-btm.php") ?>
