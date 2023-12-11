<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/_head') ?>
	<?php $this->load->view('components/_common_css') ?>
	<title><?= $page['title'] ?></title>
</head>

<body>
	<?php $this->load->view('components/_scrollto') ?>
	<header>
		<?php $this->load->view('components/_common_nav') ?>
	</header>
	<main>
		<section class="banner-section">
			<!-- Slider main container -->
			<div class="swiper banner">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide slide-01">
						<div class="slide-content">
							<div class="row h-100 align-items-center">
								<div class="col-lg-6 col-10">
									<div class="title">
										<h2>Logistics Delivered Better</h2>
									</div>
									<div class="desc">
										<p>
											Twenty plus years in this business does gives us bragging rights to say we can do it better and ofcourse faster!
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide slide-02">
						<div class="slide-content">
							<div class="row h-100 align-items-center">
								<div class="col-lg-6 col-10">
									<div class="title">
										<h2>Professional Logistics</h2>
									</div>
									<div class="desc">
										<p>
											You are in the safe hands. Our professional staff ensures precise documentation on-time submissions leading to on-time deliveries.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide slide-03">
						<div class="slide-content">
							<div class="row h-100 align-items-center">
								<div class="col-lg-6 col-10">
									<div class="title">
										<h2>Logistics is a Team Sport</h2>
									</div>
									<div class="desc">
										<p>
											Global partners, close pool of vendors, seamless teamwork to deliver tailor-made door-to-door solutions, Accelerate your shipments or have it just in time.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide slide-04">
						<div class="slide-content">
							<div class="row h-100 align-items-center">
								<div class="col-lg-6 col-10">
									<div class="title">
										<h2>Customer-focused Logistics</h2>
									</div>
									<div class="desc">
										<p>
											We exist because we create value for our customers!
										</p>
										<p>
											Our customer-focused approach guarantees quality service offering significant cost and time saving enabling businesses to cross the finish line first!
										</p>
										<p>
											We win when you - <b>Our Customer</b> wins!
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- If we need pagination -->
				<!-- <div class="swiper-pagination"></div> -->

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>

				<!-- If we need scrollbar -->
				<!-- <div class="swiper-scrollbar"></div> -->
			</div>
		</section>
		<section class="text_mtm d-none">
			<div class="wrapper text-center">
				<div class="container">
					<div class="title-text">
						<h2 class="text-full-4 text-white">
							Made to Manage Your Supply Chain
						</h2>
					</div>
					<div class="desc-text">
						<p class="text-full-3 text-white">
							We believe that in a world where Shipments have become Complex, a personal approach is key to ensure you get the most of your shipping experience
						</p>
					</div>
				</div>
			</div>
		</section>
		<section id="" class="d-none">
			<div class="container-fluid">
				<div class="row m-0 align-items-center">
					<div class="col-xl-5 col-lg-6 col-12">
						<div class="quote quote-xl py-3 py-md-5">
							<blockquote class="text-black text-full-5 text-uppercase">
								<strong>
									<div data-aos="fade-right">Made to Manage</div>
									<div data-aos="fade-left" data-aos-delay="100">Your Supply Chain</div>
								</strong>
							</blockquote>
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 col-12">
						<div class="quote quote-xl p-4 py-md-5 bg-subtle-primary">
							<blockquote class="text-black">
								<strong>
									<div data-aos="fade-left" data-aos-delay="300" class="text-gray text-full-2">
										we believe that in a world where Shipments have become Complex, a personal approach is key to ensure you get the most of your shipping experience
									</div>
								</strong>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about-us">
			<div class="">
				<div class="row g-0 m-0">
					<div class="col-xl-7 col-md-6 col-12 mb-3 mb-md-0">
						<div class="media-content ">
							<div class="img-overlap">
								<!-- <img class="shape" src="<?= base_url() ?>assets/media/images/about/shape.png" alt=""> -->
								<!-- <img class="img-front d-none d-md-block" src="<?= base_url() ?>assets/media/mockup/about/2.png" alt=""> -->
								<img class="img-back" src="<?= base_url() ?>assets/media/images/about/profile_old.png" alt="">
								<!-- <img class="img-back" src="<?= base_url() ?>assets/media/images/about/profile.jpg" alt=""> -->
							</div>
							<div class="img-text d-none">
								<div class="card widget-card-01">
									<div class="card-body">
										<h3>40</h3>
										<p>Years Experience</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-md-6 col-12 px-3 pt-5">
						<div class="text-content">
							<div class="title">
								<!-- <p class="section-pill">About Us</p> -->
								<!-- <h2 class="section-title">About Us</h2> -->
							</div>
							<div class="desc">
								<div class="quote">
									<blockquote class="d-none text-black ">
										<strong class="text-full-5 mb-3">
											It's a small world!
										</strong>
										<br>
										Ask Our Clients
									</blockquote>
									<blockquote class="text-black ">
										<strong class="text-full-5 mb-3">
											Made to Manage...
										</strong>
										<br>
										Your Supply Chain
									</blockquote>
								</div>
								<p>
									At <strong>Proficient Cargo Services India LLP</strong>, we're more than just a logistics company; we're your reliable partner for seamless international logistics solutions. Our mission is to serve the Indian industry and business community by offering a comprehensive suite of integrated shipping services. These include Container, Shipping, Forwarding, Transportation, Warehousing, Air Freight, Consolidation, Door to Door Delivery Services, Heavy Lift Transportation, and Special Project Handling. With our advanced facilities and a dedicated team of professionals, we deliver services with the highest level of professionalism.
								</p>
								<p>
									We believe that in a world where Shipments have become Complex, a personal approach is key to ensure you get the most of your shipping experience
								</p>
								<p>
									We offer unmatched door to door services from all over the world.
								</p>
								<div class="read-more collapsed" aria-controlled-by="expand-btn">
									<p>
										Proficient Services was established to provide the Indian industry and business community with integrated shipping related services ranging from Container, Shipping, Forwarding, Transportation, Warehousing, Air Freighting, Consolidation, Door to Door Delivery Services, Heavy Lift Transportation and Special Project Handling etc. We are fully geared with facilities and manpower to provide services to our client with a high standard of professionalism. Our combined existing networks and experience in the Air Freighting, Forwarding, Shipping, Transportation and warehousing gives us the edge over our competitors to become a one stop Shipping and Air Freighting agency catering effectively to the complex needs of our clients.
									</p>
									<h5>'IT'S A SMALL WORLD' Ask our clients</h5>
									<p>
										Our association with established agents worldwide enhance our services Internationally. As a result we are able to co-ordinate, plan, arrange and control the timely shipment of your materials, equipments and project cargos from various worldwide sources to various construction sites, supply base and other locations that you may assign.
									</p>
									<p>
										We hold all the required government licenses for custom clearance and operate a small fleet of our vehicle for local collection and deliveries.
									</p>
								</div>
							</div>
							<div class="cta py-3">
								<div class="persona row g-0 m-0 justify-content-between">
									<div class="col-md-auto col-12 mb-3">
										<a href="<?= base_url() ?>assets/brochure_2023.pdf" title="Proficient Brochure <?= date("Y") ?>" class="btn btn-lg btn-primary"><i class="fa-regular fa-file-pdf me-2"></i>Download Our Brochure</a>
									</div>
									<div class="col-md-auto col-12 widget-signature text-center d-none">
										<div class="d-flex gap-3">
											<div class="profile">
												<img src="<?= base_url() ?>assets/media/images/about/profile_thumb.jpg" alt="Image">
											</div>
											<div class="">
												<img class="mb-2" src="<?= base_url() ?>assets/media/images/about/signature.png" alt="Signature of the Owner">
												<div class="position">CEO of the Comapny</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="services">
			<div class="videowrapper">
				<video id="myVideomob" class="res-video" muted loop autoplay poster="<?= base_url('assets/media/images/') ?>posters/video-poster-img.jpg">
					<source src="<?= base_url('assets/media/images/') ?>video/My-Video2.mp4" type="video/mp4">
					<source src="<?= base_url('assets/media/images/') ?>video/My-Video2.mp4" type="video/webm">
				</video>
				<div class="vidbuttons">
					<button type="button" class="play playpausebtn" style="display: none;"></button>
					<button type="button" class="pause playpausebtn" style="display: block;"></button>
				</div>
			</div>
			<div class="text-content">
				<div class="container">
					<div class="title text-center">
						<!-- <p class="section-pill m-auto mb-3">Our Comprehensive Services</p> -->
						<h2 class="section-title">Our Services For You</h2>
						<p>
							We take pride in offering personalized services that cater to the unique needs of each customer. Our dedicated team is specially trained to understand your specific requirements and deliver services precisely as you desire. Our approach is characterized by friendliness, and our commitment to prompt customer service sets us apart in the industry.
						</p>
					</div>
					<div class="row g-0 justify-content-center">
						<div class="col-lg-9 col-md-10 col-12">
							<div class="services swiper">
								<div class="swiper-wrapper align-items-start">
									<!-- Sea / Air Fright -->
									<div class="swiper-slide">
										<div class="card widget-service-card freight-service">
											<div class="icon _sea__air__fright">
											</div>
											<div class="card-body">
												<h4 class="card-title">Sea / Air Fright</h4>
												<p class="card-text">
													Direct & Consolidated airfreight/sea freight services world-wide.Preferential bookings covering door to door delivery, time sensitive shipments, dangerous goods and out of gauge cargo. Coordination with Lines and tracking of consignments for freight movement control till final delivery to enable customer to plan distribution and disbursement logistics of goods even before arrival. <br>
													Preferential bookings covering door to door delivery, time sensitive shipments, dangerous goods, over dimension cargo
												</p>
												<!-- <div class="card-footer text-body-secondary">
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div> -->
											</div>
										</div>
									</div>
									<!-- Custom Clearance -->
									<div class="swiper-slide">
										<div class="card widget-service-card freight-service">
											<div class="icon _custom__clearance">
											</div>
											<div class="card-body">
												<h4 class="card-title">Custom Clearance</h4>
												<p class="card-text">
													Our Mumbai team is an expert in handling even the most complex Indian customs procedures, guaranteeing seamless transactions for our clients. Our range of air freight, forwarding, shipping, and transportation solutions come at a reasonable cost, all while holding the necessary government licenses. With our industry experience, we add significant value to our clients' supply-chain operations.
												</p>
												<!-- <div class="card-footer text-body-secondary">
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div> -->
											</div>
										</div>
									</div>
									<!-- Warehousing -->
									<div class="swiper-slide">
										<div class="card widget-service-card freight-service">
											<div class="icon _warehousing">
											</div>
											<div class="card-body">
												<h4 class="card-title">Warehousing</h4>
												<p class="card-text">
													Exclusive warehousing contracts with warehouses located inside mumbai and outside mumbai enable us to provide our clients with safe / better rent to our clients.We also can arrange for goods to be stored in Bonded warehouse within and outside mumbai limits.
												</p>
												<!-- <div class="card-footer text-body-secondary">
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div> -->
											</div>
										</div>
									</div>
									<!-- Transport Planning -->
									<div class="swiper-slide">
										<div class="card widget-service-card freight-service">
											<div class="icon _transport__planning">
											</div>
											<div class="card-body">
												<h4 class="card-title">Transport Planning</h4>
												<p class="card-text">
													Inland surface transportation, Full & Part Container loads loaded at your door or from our premises. <br>
													Packing, Crating, Marking, Survey and inspection
												</p>
												<!-- <div class="card-footer text-body-secondary">
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div> -->
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>
						</div>
					</div>
					<div class="swiper services-slider d-none">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<!-- <div class="swiper-slide">
								<div class="widget-service-card card">
									<div class="card-body">
										<h3>One Stop Shop</h3>
										<p>For all your supply chain needs</p>
									</div>
								</div>
							</div> -->
							<?php foreach ($services as $service) : ?>
								<div class="swiper-slide">
									<div class="widget-service-card card h-100">
										<div class="card-body text-center">
											<!-- <h3><?= $service[0] ??= "" ?></h3> -->
											<h5><?= $service[0] ??= "" ?></h5>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<article class="wrapper">
			<section class="wraper_text">
				<div class="container">
					<div class="quote quote-xl text-center">
						<blockquote class="text-black text-full-5">
							<strong>
								<div>Why Choose Us</div>
							</strong>
						</blockquote>
					</div>
				</div>
			</section>
			<section id="why-us">
				<div class="container">
					<div class="row m-0">
						<div class="col-12">
							<div class="text-content">
								<!-- <div class="title">
									<p class="section-pill pill-white mb-3">Why Choose Us</p>
									<h2 class="section-title">Why Choose Us?</h2>
								</div> -->
								<div class="desc">
									<ul class="widget-pointers_with_icon row m-0">
										<div class="point gap-3 col-xl-3 col-md-6 mb-3 col-12">
											<div class="card h-100">
												<div class="card-body">
													<div class="row m-0 g-0 justify-content-center">
														<div class="col-auto mb-3">
															<div class="icon _collaborative__customer"></div>
														</div>
														<div class="col-12">
															<div class="text text-center">
																Collaborative Customer Relationships
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="point gap-3 col-xl-3 col-md-6 mb-3 col-12">
											<div class="card h-100">
												<div class="card-body">
													<div class="row m-0 g-0 justify-content-center">
														<div class="col-auto mb-3">
															<div class="icon _optimized__network"></div>
														</div>
														<div class="col-12">
															<div class="text text-center">
																Optimized Network to Save You Money
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="point gap-3 col-xl-3 col-md-6 mb-3 col-12">
											<div class="card h-100">
												<div class="card-body">
													<div class="row m-0 g-0 justify-content-center">
														<div class="col-auto mb-3">
															<div class="icon _industry__expertise"></div>
														</div>
														<div class="col-12">
															<div class="text text-center">
																Proven Industry Expertise
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="point gap-3 col-xl-3 col-md-6 mb-3 col-12">
											<div class="card h-100">
												<div class="card-body">
													<div class="row m-0 g-0 justify-content-center">
														<div class="col-auto mb-3">
															<div class="icon _flexible__transportation"></div>
														</div>
														<div class="col-12">
															<div class="text text-center">
																Flexible Transportation Solutions
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</ul>
								</div>
							</div>
							<div class="row m-0 justify-content-center g-0">
								<div class="col-lg-10 col-12">
									<div class="widget-counter row m-0">
										<div class="col-lg-4 col-md-6 col-12 widget-counter-element">
											<h3><span class="counterPlugin">150</span>+</h3>
											<h4>Clients</h4>
											<p>
												Impact front-end niches via maintainable client oriented services.
											</p>
										</div>
										<div class="col-lg-4 col-md-6 col-12 widget-counter-element">
											<h3><span class="counterPlugin">100</span>+</h3>
											<h4>Countries</h4>
											<p>
												Conveniently reachable to any part of the world.
											</p>
										</div>
										<div class="col-lg-4 col-md-6 col-12 widget-counter-element">
											<h3><span class="counterPlugin">150</span>+</h3>
											<h4>Cities</h4>
											<p>
												Covering most of the Metropolitan , Tier A & B Cities in India.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="vision">
				<div class="row m-0">
					<div class="col-lg-5 col-md-6 col-12">
						<div class="row m-0 mb-3 align-items-center justify-content-center">
							<div class="col-auto">
								<img src="<?= base_url('assets/media/images/') ?>icon/values.png" height="100" alt="">
							</div>
							<div class="col-md-auto col-12">
								<h4>Values</h4>
							</div>
						</div>
						<div class="media-content">
							<div class="wrap">
								<img src="<?= base_url('assets/media/images/gandhi/') ?>quote-01.png" alt="Gandhi Quote 01">
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 col-12">
						<div class="row g-0 m-0 mb-3 align-items-center">
							<div class="col-lg-6 col-12">
								<div class="row m-0 mb-3 align-items-center">
									<div class="col-auto">
										<img src="<?= base_url('assets/media/images/') ?>icon/vision.png" height="100" alt="">
									</div>
									<div class="col-md col-12">
										<h4>Vision</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="row m-0 mb-3 align-items-center">
									<div class="col-auto">
										<img src="<?= base_url('assets/media/images/') ?>icon/mission.png" height="100" alt="">
									</div>
									<div class="col-md col-12">
										<h4>Mission</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="text-content">
							<div class="title">
								<!-- <p class="section-pill mb-3">Our Vision</p> -->
								<h2 class="section-title"><span class="text-red">\L\</span>&nbsp;For Logistics</h2>
							</div>
							<div class="desc">
								<p class="text-black">
									<span class="text-primary"><strong>Our Vision</strong></span> is to SERVE THE Industry with creative concepts, innovative Thinking,CONSISTENT AND QUALITY services.
									We want to emerge as a <span class="text-primary">PREFERRED PARTNER BY THE INDUSTRY IN LOGISTICS</span>.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="map-section text-white" id="world-map">
				<div class="row g-0 justify-content-center align-items-center">
					<div class="col-md-6">
						<div class="media-content">
							<img src="<?= base_url('assets/media/images/') ?>global_map.jpg" alt="International Logistics" class="w-100">
						</div>
					</div>
					<div class="col-md-6">
						<div class="text-content p-3 ">
							<aside class="mb-3">
								<div class="col-xl-10 col-lg-11">
									<!-- <p>Lorem ipsum dolor sit</p> -->
									<h3 class="text-full-3 text-white">Global Network with Local Knowledge</h3>
								</div>
							</aside>
						</div>
						<div class="row justify-content">
							<div class="col-xl-10 col-lg-11">
								<div class="content">
									<div class="row m-0">
										<div class="col-lg-6 col-12">
											<ul class="widget-list">
												<li>Africa</li>
												<li>Australia & New Zealand</li>
												<li>China</li>
												<li>Europe</li>
												<li>Far East & South East Asia</li>
											</ul>
										</div>
										<div class="col-lg-6 col-12">
											<ul class="widget-list">
												<li>USA & Canada</li>
												<li>Gulf & Mediterranean</li>
												<li>Scandinavian & Cis Countries</li>
												<li>South, Central & Latin America</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="map-section" id="india-map">
				<div class="row m-0 g-md-0 flex-row-reverse">
					<div class="offset-lg-1 col-lg-5 col-md-6">
						<div class="media-content">
							<svg class="w-100 svg-map" baseprofile="tiny" fill="#ececec" height="857" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width=".1" version="1.2" viewbox="0 0 1000 1136" width="1000" xmlns="http://www.w3.org/2000/svg">
								<style>
									path.hover {
										fill: #d10505;
									}

									text {
										pointer-events: none;
									}

									.cls-1 {
										fill: #d10505;
										stroke-width: 0px;
									}

									.cls-2 {
										fill: #000000;
										stroke: #000;
										stroke-linecap: round;
										stroke-linejoin: round;
										stroke-width: .1px;
									}

									.cls-3 {
										fill: #000000;
										font-family: Poppins-Regular, Poppins;
										font-size: 14.04px;
										isolation: isolate;
									}
								</style>
								<g id="combined">
									<path d="M877.3 1118.2l-0.2 0.4 0.3 0.5 0.7-0.1 0.4 1-0.1 0.4 0.3 0.9 0.1 1-0.1 1.2 0.4 0.3 0.6 1 0.1 1.3-0.2 0.4 0.5 0.5 0.2 0.7-0.6 0.7-0.3 0.7 0.2 0.4-0.6 0.3 0.1 0.7-0.2 0.5 0 0.7 0.5 0.3-0.4 1.2-0.4 0.3-0.6-0.7-0.5 0-0.3 0.5 0.1 0.7-0.7 0.9-0.7-0.3 0.2-1.5-0.4-0.2-0.5-0.8 0.3-0.4-0.7-0.6 0.2-0.6-0.6-0.9-0.4 0-0.3-0.6 0.3-0.4-0.2-0.8-0.5-0.3-0.3-0.8-0.5 0.1-0.3-0.7-0.4-0.3-0.6 0.2-0.1-1 0.1-1.3-0.3-0.2-0.2-1.4 0.7-0.5 0-1.2 0.4-0.5 0.9-0.1 0.7 0.2 0.7-0.8 1.8-0.1 0.1-0.5 0.6-0.3 0.7-0.1z m-4.6-7l0.3 0.8 0.1 0.8 1.1 0.8-0.1 0.5-0.4 0.4-0.6 1.3-0.6 0.2-0.9 0.7-0.4 0.8-0.7 0.6-0.7-0.9 0.2-0.7-0.3-0.6 0.4-0.5-0.2-1.4 1.1-0.7 1.5-0.4 0-1.5 0.2-0.2z m-11.4-20l1 0.6-0.2 1.1 0.6 0.5 0.3-0.3 1.1 1.1 0.4 1.4-0.4 0.8-0.7-0.9-0.8-0.3-0.7 0.2-0.7 0.7-0.7-0.3-0.4-0.4 0.1-0.8-1-0.6-0.2-0.7 0.4-0.5 0-0.5 0.4-0.7 0.7 0.1 0.8-0.5z m5.7-0.2l0.6 0.2 0.7 1.1-0.2 2-0.2 0.2-2.2-2 1.2-1 0.1-0.5z m1.1-3.3l0.4 0.5 0 1.5 0.4 0.8-0.3 0.2-0.7-1 0.3-0.5-0.4-0.3-0.3-1 0.6-0.2z m-1.8-3.7l0.6 0.2 0.1 1-0.7 0.9-0.5 0.2-0.2 0.7 0.7 0.9 0.2 0.7 0.6 0.4 0.1 0.7-0.4 1-1.1 0.1 0 1.2-0.6 0-0.1-1.3 1.3-0.6 0.1-0.7-0.4-0.3-1.1 1.1 0-0.9-0.9-1.6-0.1-1.7 0.7-0.4 0.5-0.4 0.1-0.9 1.1-0.3z m-9.9-1.1l0.6 1.2-0.5 0.3-0.6-0.8 0.5-0.7z m-3.7-3.2l0.5 0.4-0.4 1.2-0.1 1.1 0.9 1.2 1.4 0.7 0.4 0.4-0.4 0.7-1-0.3-1.4-0.7-0.8-0.9-0.5-0.9 0-1.2 0.3-1.1 1.1-0.6z m-2.9-4l0.5 0.4-0.2 0.8-0.6-0.5 0.3-0.7z m19.6-3.5l0.2 1.5 0.4 0.2 0.3 2-0.6 0 0-1.7-0.5-1 0.2-1z m-28.3-23.2l0.9 0.9 0.4 0.9 0.2 1-0.3 0.9-0.4 0.5-0.8 0.2-0.6-0.3-1.3 0.1-0.4-0.8 0-2.3 1.5 0 0.8-1.1z m-9.3-57.3l1.5 1.2 0.1 1.8 0.9 0.8-0.2 1.6 0.5 1.2 0 0.8-0.7 0.5 0.1 0.4-0.9 0.7-0.4 0.9 0.1 0.7 0.7 0.2 0.1 0.4-1.2 1.6-0.1 0.4-1.1 0.2-0.6-0.2-0.6-0.6-1-0.5-0.5 0.1-0.6 0.5-0.6-0.4 0.9-1.4 0.4-1.1-0.5-1.2-0.4-0.6-0.5 0 0.1-1.8-0.2-0.7-0.1-1.5 0.7 0.1 0.6-0.3 0.6-1.2 0.9-0.6 0.1-0.8 0.7-0.3 0.4-0.6 0.8-0.3z m4.3-21.3l0.9 0.7 0.6 1.9-0.7 1.4 0.9 0.2 0 0.7-1.8 0.8-1.3 0-0.7-0.7 0.4-0.5-0.1-0.7 1.2-0.2 0-1.2-0.4-0.6 0.1-1 0.6-1 0.3 0.2z m-1-2.8l0.2 0.8-0.6-0.1 0.4-0.7z m-13.4-0.1l0.7 0 1 0.3 0 1 0.2 0.7-0.5 0.6-0.4-0.3-1.1-0.1-0.3-0.6 0.4-1.6z m10.9-0.4l0.2 0.3 0.8 0.1-0.1 0.6-0.4 0.5-0.5 0-0.2-1.2 0.2-0.3z m16.5-8.4l0.4 0.3 1-0.3 0.3 0.3-0.7 0.8-1.2-0.6 0.2-0.5z m-14.5-4.6l0.3 1.1-0.3 0.2 0-1.3z m12.7-2l0.5-0.3 0.7 0.5 0.1 1 1 1.8 0.6 1.8-0.3 0.4-0.7-0.1-0.1-0.5-1.1-1.7-0.6 0.1-0.4-1.1-0.9-0.2-0.1-0.7 0.7-0.3 0.6-0.7z m0.8-2.6l0.4 0.1-0.2 2.1-0.3 0-1-0.9 0-1.3 1.1 0z m1.2-1.7l-0.1 0.6 0.4 0.5 0 1 0.6 0.7 0 0.6-0.4 0.5-0.6-0.9-0.6-0.2 0-1.1-1-0.2-0.5-0.3-0.3-0.7 0.3-0.3 1 0.4 1.2-0.6z m1.4-1.9l0.6 0.6 0.3 1.6-0.2 0.6 0.1 0.8-0.3 0.7-0.5 0-1.1-1.6 0.7-2 0.4-0.7z m-12.6-0.8l0.2 0.2 0.3 2.1 0.8-0.5 0.7 0.2-0.1 0.8-0.6 1.5-0.1 0.8 0.6 0.6 0.8 1.4-0.5 0.4-0.7-0.5 0.6 1.6-1.1 0.5-0.3 0.8 0.5 1.8 0.5-1.2 1-0.2 0.4 0.5-0.3 1.1 0.3 0.8-1.1 5.3-0.5 0.3-0.8 0.1-0.5 0.5-0.1 0.9-0.5 0.6-0.6-0.2 0 0.8 0.8 0 0.9-1.2 0.9-0.3 0.4 0.3-0.1 2-0.8 1.8-0.2 1.1 0.2 0.3-0.7 1-0.4-0.6-1.1 0-0.6-0.6 0.1-1-0.8-0.6-0.7-0.9 0.1-1.4-0.5-1 0.2-0.9-0.4-1-0.5 0.1-0.4 0.8-0.3-1 0.1-1.8-0.4-1.9-0.7 0.1-0.4-0.8 0.4-0.8 0.1-0.9 0.4-0.3 0.1-0.6 0.8-0.7 0.5 0.5 0.2 1.4 0.9 0.6-0.2-1.8 0.2-0.6 0-2.4 0.5-1.9-0.2-0.3 0.1-1.1 0.3-0.7 0.5-2 1.4-1.9 0.4 0z m1.1-0.3l0.2 0.3 0.8 0.2 0.2 0.9-0.1 0.7-1.4-0.2 0-1.4 0.3-0.5z m5.8-0.5l0.4 0.9-1.5-0.2 1.1-0.7z m6-0.2l0.3 0.9-0.1 0.5-0.6-0.2 0.2-1 0.2-0.2z m-12.5-1.2l0.4 0.1-0.4 1.7-0.3-0.8 0.3-1z m7.8 0.6l-0.6 0.7-0.7-0.7 0.4-0.4 0.4 0.4 0.5 0z m-5.6-1.1l0.6 0.2 0.5-0.2 0.7 0.4 1-0.2 0.4 0.2 0.6 1.4-1 0.5 0.5 0.7 0.1 1.1-0.8-0.3-0.1 1.4-0.4-0.2-1.3 2.1-0.2 0.9-1 0.7-0.9-0.8 0.1-0.5 0.8-2.7 0.2-0.9-0.1-0.9-0.5-0.1-0.4-0.5 0.4-1 0.4 0.4 0.6-0.8-0.2-0.9z m36.3-0.3l0.6 0.9 0.7 0.4-0.2 0.5 0.3 1.1-1.3 0-0.5-0.3-0.4-1.4 0.3-0.8 0.5-0.4z m-33.7-3.1l0.7 0.1 0.6 0.5-0.8 0.5-0.6-0.6 0.1-0.5z m3.5-0.2l-0.4 0.5 0 0.5-0.4 0.9-0.4-0.2 0.3-0.7 0.2-1.2 0.5-0.3 0.2 0.5z m-8.3-14.5l0.1 1.9-0.7-0.8 0.6-1.1z m6.4-3l0.4 0.2-0.1 0.9 0.7 0 0.5 2 0.4 0.6-0.7 1 0.2 0.4 0.7 0.5 0.1 0.9 0.5 0.4-0.5 0.7 0.1 0.6-0.3 1.3 0 1.2 0.1 1.1 0.5 1.2-0.5 2-0.5-0.4-0.4 0.6 0.5 0.6-0.2 0.5-0.7 0.4-0.2 0.9-0.7-0.6-0.6 0.4-1.7-0.4 0.3 1.1 1.2 1.5 0.5 1.1-0.3 0.3-0.7 0-0.9 0.4-0.8-0.4-0.4 0.3-0.8-0.4-0.9 0.6-0.9 0-0.7-1.3-0.1-2.9 0.3-1.1-0.2-0.7 0.3-0.7-0.5-0.8 0.2-0.9 0.3-0.6-0.1-1.2-0.4-0.5 0.5-0.4 0.2-0.7 0.7-0.1-0.1-0.5 0.4-0.6-0.5-0.9 0.4-0.1 0-0.8-0.3-0.7-0.4-1.6 0.1-1.4 0.5 0 1.1-1.2 0.8 0 0-0.9 1.1-0.2 0.1 0.3 0.2 0 0.2-0.2 0.1 0.2-0.1 0.3 0 0.1 0.1 0 1.1-0.3 0.6-0.4 0.2-0.7z m-6.9-2.7l0.8 0.4 0 3.2-0.2 0.9-0.8 1-0.1 0.6-0.6 0.8-0.6-1.5-0.1-0.8 0.5-0.7 0.1-1.3 0.4-0.8-0.3-0.4 0.5-1.3 0.4-0.1z m10.6-0.2l-0.5 0.4-0.7 1.1-0.4 0 0-1.2 0.6 0.3 1-0.6z m-2.8-0.9l0.4-0.1 0.2 1-0.8-0.1 0.2-0.8z m46-15.5l0.1 0.8-0.7 0.4-0.2-0.6 0.8-0.6z m-42.4-3.8l0.3 0.9 0.1 1.5-0.2 0.7-0.1 0.9 0.1 1.4 0.5 0.5 0.4 1.5 0.6 0.7-0.3 0.7-0.6-0.2-0.5 0.2 0-1-0.4 0.2-0.8-0.3-0.9 0.6-0.5-0.8-0.3 0.5 0.2 0.6 0.6 0.1 1.2 0.6 1.1 1.7 0.5-0.1-0.1 1-0.8 2 0.1 1.3-0.2 0.4 0.2 1.3-0.2 0.8-0.8 1.3-0.6 0.2-0.6-0.1-0.4 0.5-0.8-0.9-0.3-0.8-0.4 0.3-0.4 1.1 0.1 0.8 1.1 0.8-0.4 0.7-0.6-0.2-0.1-0.7-0.9 0-0.2 0.7 0.1 0.6-0.7 0.4 0 1.1 0.5 0 0 0.7-0.5 0.2-0.2 0-0.3 0-0.1 0 0.1-0.3 0-0.2-1.4-0.3-0.3-0.5 0.3-0.8-0.3-0.5 0-1 0.7-0.1 0.2-0.6-1-0.4 0.2-1.3 0-1.4 0.8-0.4-0.3-1 1.1-0.6-1.1-0.3 0.7-2.1-0.1-0.8 0.7-0.1 0.2-0.6-0.6-0.1-0.5-0.6 0.7-0.9-0.6-0.2 0-0.7 0.3-0.4 0.1-1 0.5-0.7-0.2-0.7 0.9-0.3 0.4-0.5-0.4-0.6 0.1-1 0.9-0.1 0.1-0.6 0.8-0.2-0.5-1 0.2-0.2 1.5-0.3 0.4 0.6 0.6-0.3-0.4-0.6 0.4-0.5 0.8 0.6 0.1-0.8 0.4 0z m-0.5-3.6l0.3 0.5-0.3 0.6-1 0-0.2-0.7 1.2-0.4z m12-16.9l0.4 1.2-0.2 1-0.2 0.9-0.4-0.2 0.3-0.8-0.4-1.9 0.5-0.2z m9.4-26.3l-0.3 1-0.7 0 0.4-0.9 0.6-0.1z" id="1" name="Andaman and Nicobar">
									</path>
									<path d="M319.4 815.3l0.2-1.5-0.4-0.4 0.2-1-0.3-0.1-0.4-0.9 0.5-1.5-0.2-0.9-0.4-0.6-0.1-1.6 0.4-1 0-0.9-0.3-1.3 0.5-0.6 0.8-0.1 0.6-0.6 0.8-0.4 0.5 0.4 0.4-0.9-0.3-0.6-1.6-0.9-0.6-0.6-1.3-0.3-1.5 0.2-0.9 0.4-1.3-0.6-0.7 0.1-0.7-0.4-1.6-0.6-0.7-0.9-0.4-1.4 1.3-0.2 0.2-0.6 1 0.4 1.4-0.1 0.1-0.7 0.4-0.3 1.2-0.2 0-1-0.5-0.1-0.4-0.6 1.1 0 0.5-0.6 0.7 0-0.1-0.9 0.6-1.3-0.4-0.2-0.9 0.4-0.6-0.9 1.7-0.6 0.1-1-1.6-0.3 0.5-1.7-0.1-0.5 1.1 0 0.2-0.7-0.5-1 0.1-0.7-0.2-2.3 0.4-0.3-0.1-1.3 0.5-0.5 0-0.8 0.7-0.6-0.2-0.9-0.5-1 0-0.6-0.6-0.6 0.1-0.4-2-0.6-1-0.6-0.5-0.8 0.3-1 0.7-0.1 0.1-0.7-0.4-0.3 2.5-2-0.7-0.4 0.5-1 0.3-1.1-0.2-0.9 0.8 0.1 0.3 0.5 1.3-0.3 0-0.9 0.4-0.4-0.8-0.5 0-0.5 0.8-0.5 1.3 0.4 0-0.9 0.8 0.4 0.5 0 0-0.9 0.8-0.1 0.5-0.3 1.2 0.3 0.2-1-1.1-0.8-1.2 0-1-0.4-0.2-0.9-1.3 0.3-0.7-0.8-0.9 1.1-0.4-0.9-0.5 0-0.5-0.4-0.7-0.1 0-0.8 0.4-1.1-0.2-0.9 0.4-1.4 1.1-0.3 0.2-0.4 1.1-0.4 0.4 0.1 0.8-0.8-0.3-0.5-1.1-0.6-0.6-0.1 0.2-0.7 0.5-0.4 0-0.5 1-0.2 0.3-0.4 0.2-0.8 0.8-0.5-0.2-1.1 1 0.2 0.1-1.5 0.9 0 0.3-0.8-0.3-0.9-0.6 0-0.7-0.9-1.8-0.6-0.3-0.7 0.7-0.8 1.1-0.3 0.1-0.5-0.3-1 0.2-0.9-0.6-0.4-0.4-0.9 0.6-1-0.5-0.9 1.1-1.3-1.1-0.5-0.7 0 0.6-0.6-0.5-0.9-0.9-0.2-0.2-1 0.9-0.8 0.2-1.1-1-0.3 0.1-0.5 1.1 0.2 0.8-0.3-0.4-0.8 0.2-0.6 0.8 0.3 0.1-0.6-0.6-0.4 0.4-1.6 1.4-0.3 0.2 0.7 0.4 0.3 1.9-1 0.5 0.1 0.7-1.3-0.2-1.2-0.4-0.8 0.1-1.2 0.6-0.5 1.2-0.1 0.6-0.8 0-0.5 0.7-1.4 0.5-1.4 2.4-0.8 1.2 0.3 0-0.8-0.6-0.6-0.9-0.3-0.4-0.6-0.2-0.9-0.9 0.1-0.5-0.2 0.4-1.4-1.4 0.1 0.2-1.2-1.7 0-0.1-1.4-0.3-0.3 0.2-1.2 1.2 0.4-0.1-0.7 0.2-1 0.5-0.2 0.5 0.7 0.4-0.1 0.1-1-0.3-0.7 0.5-0.8 0.1-0.7-0.3-0.5 0.8-2.1 0.6-0.5 0.5 0.2 0-0.8-1.3-0.2 0-0.7 1.7-0.6 0.5-0.5 0.8-0.3 0.9 0.7 0.3 0.5 0.9 0.3 0.6 0.8 0.6 0.3 0.1 0.8 0.3 0.3 0.8-0.6 0.6 0.4 1-0.1 0.7 0.6 1.2-0.4 0-1.3 0.3-0.9 0.2-1.1-0.6-0.7 0.2-1.6 1.3-1.4 0.9 0.2 0.8-0.9 0.8 0.2 0.5-0.6-0.1-0.8-0.4-0.6-0.1-2 0.5-0.4 0-1.2-0.8-1.8-0.6-0.4 0.6-0.9 1-0.1 0.2-0.4 0.8-0.4 0-0.7 0.5-0.8 0.3-0.9-0.3-0.9-0.7-0.3 0-0.9-1.5-0.4 0.5-2.3 0.9 1.1 1.6 0.1 0.1 1 0.4 0.6 1.1 0.4 1.6 0.3 0.6 0.8 1.1-1 2 0.4 0.6-0.3 0.6 0.4 2.8 0.8 0.5 0.7 0.7-0.5 0.9 0.2 0.7-0.2 0.8 0.8 1.3 0 0.4 1 0.2 1.2-0.1 1.5 1 0 0.9-0.4 0.9 0.1 0.9 0.5-0.2 1.2 0.5 1 0 0.4-0.8 0.6 0 0.4 0.8 0 0.5-0.4 0.9 0.8 1.1-0.2 0.4 0.5 1.4 0.1 0 0.6 1.3 0.4 0.9 1.2 0.7 0.4 1-0.3-0.3-0.7 0.2-0.9 0.8-0.6 0.1-1.2 0.3-0.7-0.4-1.1 0.6-0.1 1.7 0.8 0.3 0.9 0.9-0.3 1 0.1 0 0.3 1.5 1 0.9 0 0.6 0.6 0.4 0.7 1.5-0.7 0.1-0.9 0.9-0.2 0.2 0.8 0.6 0.6 0.9 0.3 0.3-0.2 0.2-1.2 0.5-0.9 0.6-0.4 1.3 0 1.2-0.3 1-0.7 1.2 0.2 0.6 0.7 0.8 0.4 0.4 1.1 1.7 1.3 1.1 0.3 1.1 1.2 0.1 0.7 0.9 1.4-0.3 1.9-0.2 0.5 0.1 1.4-0.6 0.5-0.8 2.1 0.1 0.8 0.7 1-1.3 1.2-1.2 0.7-0.4 0.7 0.1 1.6-0.2 0.6 0.5 0.3 0.7-0.4 1.2 0.1 0.3 0.8-0.1 1.7 0.3 1.3-0.1 2.8-0.4 0.8-1.1 0.2 0.8 1.3 0.5 0.4 2.7 0.7 0.3 0.5 0.4 0.2 0.5 0.9 1.2 0.7 0.9 0.9 1.7-0.7 0.3 0.6 0.8 0.1 0.4-0.7 1.5-0.2 0.8-0.6 0.9 1.2 0.8 2.3 0.8 1.3 0.9-0.7 0.5 0.4 0.7-0.5 1.6-0.7 1.3 0 0.8 0.4 0.7 1.1 2.3 1.5 0.5 0.6 0.6 0.3 0.2 0.9 0.4 0.8 1.1 0.6 0.5 0.7-0.2 0.6 0.8 0.5 0.3 1.6 0.7 1.6 0 0.5 0.8 0.9 0.6 1.2-1.7 0.9 0 1.7 1 0.3 1.2-0.1 0.7-0.9-0.1-1.2 0.3-0.3 1.2 0.2 0.2 0.7-0.6 0.3 0.2 2 0.3 0.4 1.3-0.1 1.5-0.8 0.3-0.3 0.7-0.1-0.1 0.9-0.8 0.7 0 1.2 0.6 1.7-0.1 0.4 0.3 1.4 0.4 2.5 0.4 0.3 0.3 2.8 0.3 0.7 0.7 1 0.8 0.2 0.6-0.1 0.8-1.1 2.1-1.3 1.1 0.2 2.1 1.3 2.1 0 2.4 0.2 0.8 0.1 0.6-0.6 0.4 0.2 1.1-0.3 0.4 0.7 2.5-0.5 0.7-0.4 1.2 0.5 1.1-0.9 0.1-0.6 0.6-0.7 0.9-0.3 0.5 0.8 1.9-1.1 0.8 0.8 0.4 0.9-0.4 0.5-0.6 0.1-0.4 0.4-0.8-0.1-0.9 0.7-0.2 0.6-0.8 0.6-1.8 0.2-0.4 0.6-1 0.5-0.3 0.4 0 1.1-0.6 0.8-0.7 1.3-0.8 0.7-0.3 0.8 0.8 0.6-0.8 1.2-0.3 3.2-1.8 2.4-0.7 0.4-0.1 0.3-1.1 0.3-1.2-0.5-0.2-0.6-0.7-0.2-1.2 1.9-0.7 0.6-1.7 0-0.9-0.2-0.7 0.7 0 1.4 0.3 0.5-0.6 0.7-0.6 0.1-2 0.6-0.8 0.4-0.6-0.1-0.6 0.7-1.4 0.2-1-0.3-0.9-0.6-0.9 0.2 0.4 1.1-0.1 0.8-0.8 0.2-0.7-0.2-0.1 0.8-0.4 0.5 0.3 0.5-0.2 1 0 0.6-0.9 0.9-0.3-0.4-2.6-0.6-0.7-0.4-1.4-0.1-1.2 0.5-0.4-0.6 0.6-0.4-0.9-1-1.2-0.3-1.2-0.7-0.3 0.5-1.8 0.8-0.4 0.7 0 0.9-0.5 0.7-0.6 0-0.2 0.7-0.9-0.2-0.7-1.1-0.2-0.8-0.9 0.7 0.7 1.6-0.6 0.6-0.4 0.9 1.3 0.5 1.5 0.4 1.2 0.9 0.5-1 1 0.4 0.4-0.5 1.3 0.9 0.5 0-0.1 0.8 0.2 1.1-0.8 0.1-0.1 1.2-0.2 0.4 1 0.7 0.4 0.7-1.2 0.8-2.5-0.4-1.1-0.5-0.1-1-1-0.5-0.2-0.4-0.6-0.3 0 0.7-0.9 0.7-0.5-1.6-0.8 0-0.6-0.5-0.2-1.5-0.4-1.6-1.3-1.9-0.7 0.3-0.8-0.6-0.8 0 0-0.9-0.5 0-0.5 0.7-0.8 0.8-0.3 0.6-1 0.1-0.6-0.2-0.1 0.9-1.3-0.1-0.3 1-1 1.1-0.6 1.5 0.8 0.4 0.7 0 0.2 1 1 0.4-0.6 1.5-0.1 1-1.1 1.1-0.9 0.7-0.6 1.2-1 1-0.7 0-0.7-0.2-0.4-0.4-0.6-1.4-0.4-0.4-1.8 0.3-0.9-1.2-0.3-0.2-0.8 0.3-0.9 1-1.4 0.1-0.9 0.6-0.3 0.4-1.6 0-0.9 0.7-1.3 0.4-1.3 0-1.6 0.8-0.3 0.6-0.6 0.3-2.7 0.2-0.9 0.1-1.8 0.5-0.2 0.5-1.1 1-0.2 1 0.4 1.2-0.5 0.7-0.3 2.7 0.6 0.9 0 1.3-0.1 1.8-0.6 0.7-1.1 0.5-1.8-0.8-1.9 0-0.9-0.2-0.7 0-1 0.6-1.1 0.4-1.8 0.9-0.1 0.9 0.6 1.5-0.7 0.9-1-0.4-0.2-1.2-0.3-0.6-0.9 0.3 0.2 2.3-1 1.4-1.1 0.8-1.2 0.1-0.9-0.2-0.9-0.5-0.7-0.5-1-1.3-1.2-0.2-1.5 1.5-2.2-0.6-1.5-0.3-1.5 0-1.2 0.7-1.1 0.3-0.8 0.8-0.8 0.1-0.8-0.3-0.6 0.4 0.3 1.1-0.4 0.9-0.2 1.1-0.5 0.5-0.8 0.2-0.8 0.6 0 0.5-0.6 1.3-1.3 0 0.1 0.5-0.9 0.3-1.3-0.6-0.5-0.9-0.3-1-0.8 0.1-0.5 1.3-1-0.6-1.5 0-1.4-0.7-0.7 0.1-0.4 0.6-0.7 0-1.2 0.4-2.9-0.8-1.1 0.5-1.5-0.4-1.1-1-0.6 0.2-2.7-0.5z" id="37" name="Telangana">
									</path>
									<path d="M409.5 896.6l0.6 1-0.5 1.4-0.8-1 0.2-0.7 0.5-0.7z m72.1-108.7l0.9-0.3 1-0.2 0.6-0.7 0.3 0.7-0.1 0.7-0.7 1.2 0 1.2-0.7 0.2-0.5-1.1-0.9-0.4 0.3-0.6-0.2-0.7z m1.3-0.8l-0.6-0.3-2.1 0.1-0.8-0.6-0.6 0.7 0.5 0.3 0.8-0.1 1 0.7 0.4 0 0.1 0.9-0.2 0.4 0.8 0.6 0.7 1.6-0.3 0.7-0.4 0-0.6 0.8-1.3 0.5-5.1 2.6-1.5 0.9-2.9 1.5-1.8 0.3-1.7 0.6-2.3 1.3-1.9 0.8-1.1-0.7-1.3-0.1-3-0.4-0.6-0.5-1.2 0.2-1.3 0-2.6 0.4-2.5 1-1.3 0.8-1.3 1.5-0.9 1.4-0.4 1.2-0.1 1.1-0.5 1.5-1.6 3-0.1 0.8 0.2 0.8-0.5 0.4-1.4 1.1-1.4 1.7-0.9 1-0.8 0.9-0.1 1 0.4 0.7 0 0.9-0.3 0.2-2.1 1.2-0.7-0.1-2.7 0.4-0.5-0.1-0.7-1.1 0.3-0.6-0.6-1.7 0.6-0.3 0.1-0.5-0.9-1.1-2.6-0.7-0.9 0-1.4 0.1-2.6 0.6-2 0.7-2 0.9-2.3 1.4-1.5 1-0.9 1-1.4 1.7-1.2 2.5-0.4 1.7 0.1 0.4-0.4 0.9-0.5 1.8-2.5 3.2-0.6 1.1-0.5 1.1-0.4 1.8 0.1 1.6-0.1 0.8-0.6 1.4-0.6 2.4 0.1 2.1 0.6 3.6 0.5 1.3 0.1 2.4 0.5 1.9 0.3 0.9 1.1 1.5 0.8 2.8 0.2 0.4 0.9 0.6 0 0.5-0.6 1.7-0.3 3.7-0.1 2.3-0.8 2.1-0.3 1.1-0.3 2 0 1.6 0.2 2.3 0.5 2.6 0.3 1 0.5 0.5 0.8 2.1 0.8 1.7 0.6 1.6 0.3 0.4 0.2 1.3-0.5 2.5-0.1 1.5 0.3 2 1 1.9 1 3 0.5 1-0.8-0.1-0.4-1.8-0.3-0.6-0.3-1.6-1.3-1.7-0.4-0.6-0.9-0.7 0-0.8-1.1-1.2-0.4 0.3 0.1 1.2-0.2 1.7-0.5 0-0.7-1.5-0.5 0.1-0.6 0.6 0 1-0.7 0.8 0.7 0.9 0.5 0.2 0.7 1.2 1 0.2 0.8 0.8 0.6-0.2 2 0.4 0.9 0.4 0.4 1 0.7 0.6 0.6 0 0.1 2-1.4-0.6 0.1-0.7-0.3-0.2-0.3-1.2-0.5-0.6-1-0.6-0.8 0.2-1-0.1-0.2 0-0.2 0-0.2-0.2-0.4-0.3 0-0.1-0.5-0.2-0.7-0.1-0.1-0.2-0.3-0.5-0.3-0.2-0.1 0.1-0.2-0.4-0.8 0.6-1-0.1-0.3-0.3-0.6 0.2 1 0.9 0.6 0.1 0 0.5-1.1-0.1-0.3 1-1.2 0.3 0.1 1.1-1.1 0.5 0.1 0.7 0.6 0.4-0.9 1.3-0.8 0.1-1.8 1.1-1.7-0.1-0.7 0.8-0.9-0.7-0.2 0.8-0.9 0.5 1.1 0.8 1 0.5-1.3 1.2-0.4-0.7-0.6 0-0.5 0.4-0.2-0.7-0.8-0.5 0.4-0.7-0.5-0.9-1.2 0.3-0.4 0.5-0.7-0.3-0.5 0.7-0.7 0-0.8-1.1-0.2-1.1-1.3-0.1-1.5-0.4-1.3 0.1-1.4 0.7 1 0.6 0.6-0.1-0.1 0.8-0.4 1 0.1 0.9 0.9-0.7 0.3 0.5-0.8 0.3-0.1 0.8-1.2 0-0.5 0.3-0.3 0.7-0.5-0.2 0.1 1.3-1.7 0.4-0.9-0.2-0.1-0.6-1.5 0.1-0.4 1.3-0.7 0.3-0.8 1.2 0.2 0.6-0.2 0.8-0.6 0.2-1.2-0.5-0.5 0-0.7 0.4-0.5-0.1-0.5-0.8-1.8-0.7-0.7-0.7-1.2 0.5-1.1-0.2-1.1 1.7 0-1.7-1.7 0-1-0.2-0.8 0.7-1.3 0.3-1.3-0.4-0.3 1.8-1.4-0.4-0.4 0.5-0.7 0.7 0 0.3 0.9 1.9-0.7 0.2-0.7 1.4 0 0.6-0.5 0.7 0.2 0.9-0.3 0.2-0.3 1.4-0.7 0.5-0.4 0.8 0.2 1.1-1 0.6-0.3-0.8-0.7-1 0 2.2-0.7 0.3-0.5-0.1 0 1.6-3.1 0.2-2-1.3-0.7-0.1-0.8-1.4-1.3 0.1 0 0.5-0.9 0-0.2-0.7 0.8-0.3 0.3-0.6-0.2-1.1 0.3-0.4 0.4-1.7 0-1.3 0.7-0.3 0.4 0.3 1 0.1 0-0.7 0.4-0.9 0.4 0.1 0.6-1.4 1.1 1.2 0.4-0.4 0.5 0.5 0.5 0.1 0.6-0.4 0.1 0.7 0.6 0.5 0-0.9-1.2-1.1 0.1-1.6 1.2 0.2 0.1-0.6-0.4-1.2 0-0.6 0.6-0.3 1.3-0.4-0.3-0.6 0.6-0.6 0.1-0.5-0.3-0.7 0.9-0.4 0.1-0.7 1.1-0.2-0.6-1.1 0.2-1.6 0.6-1-0.3-0.3-1.3-0.2-0.3 0.7-0.7-0.7-1-0.6-0.1-0.6-1.1 0.4-0.2-0.6-0.5 0-0.8 0.5 0.2-1.1-1.4-0.8 0.5-1.2-0.3-2.2 0.2-1.5 0.6-1.3 0.4-1.2-0.6-0.5-1.2 0.1-1.1-0.2-2.1 0.4-0.8-0.5-0.7 0.2-0.6 0.9-0.3-0.8 0.4-0.6 0-0.7-1.1-0.3 0-0.7-0.5-0.2-1.3 0.1-0.9 0.4 0-0.5-0.5-0.5-0.1-0.9 0.7 0.3 0.7-0.1 0.2-0.9-0.9-0.8 0.9-1 0.3-0.6-0.4-0.9 0.3-0.6-0.4-1.2-1 0-0.2-0.6-1-0.5-0.1 1.2-1.8-0.4-0.6 1.5-0.6-0.2-0.3-1.6 0.3-0.5 1-0.3-0.2-1.1 0.2-0.8-0.6-0.1-0.4 0.8-1.3 1.1-0.7-0.5-0.1-0.7-0.9 0.2-1.6-0.2-0.3 0.5 0.2 0.8 0.3 0.2 0.2 1-0.8 0.7-1 0.3-0.2 0.8-1.4 0.3-0.5 0.4 0 1.8-0.6-0.8-0.9 0.3 0.1-0.9-0.8 0.1-1.1 0.5 0 1.1-0.7-0.5-0.5 0.5-1.1 0.3-0.3-0.8-0.7 0 0.3 1.3-0.2 0.7-0.5-0.1-0.2-0.5-0.7 0 0.1 0.6-0.3 0.3-0.9 0.1-0.1-0.7 0.4-0.6 0.2-1.1-0.4-1.5-0.4-0.6-0.4 0.5-0.7-0.4 0.6-0.9-1.8-0.2-0.7-0.4-1.1 0.6-0.4-1.1-0.8 0.4-1.2 0.2-0.3-1.9-0.5 0-1.1 1.3-0.6-0.1 0.2-1.4-0.2-0.6-0.7 0.6 0.3 1.2-0.9 0.2-0.4 0.6 0.7 0.3 0.5 0.7-0.3 0.5 0.6 1-0.1 0.6-1.5 0.1-1-0.3-0.5 0.3 0 0.5-0.7 0-0.8-1.1-0.5 0-0.3 1.3-0.7-0.4-0.4-1.5 0.1-0.6-0.5-0.2 1.3-1.4 0.4-1.6 0.8-0.1-0.2-1-0.9-0.8-0.7-0.3 0.2-0.9-0.7-0.5-0.9-0.4-0.6-0.5 0.3-0.9 1.1-0.2-0.1-0.9-0.6-0.2-0.3-1-0.7-0.6-0.3 0.3-1-0.3 0.3-1 0.8 0 0.7-0.3 0.2-0.8 0.6 0.5 2.1 0.1-0.3 1.6 0.1 0.7-0.2 0.5 0.5 0.3 0 1.1 1.5 0.2 0.8 0.3 1-0.1 0.5 1.5 0.6 0.3 0.6-0.6 0.8 0.2 0.8-0.2 0.9 0.1 0.9-0.8 0.3 0.7 0.8-0.7 0.4 0.1 0.7 1.3 0.7 0.2-0.4 1.1 0.7 0.3-0.7 1.1 0.2 0.5 1.4 0 0.2 0.6 0.8-0.5-0.4-1.5 0.7-0.2 0.1-0.9-0.4-0.3-1.1 0.1-0.5-0.3 0.4-0.9-0.8-0.3-1.2-0.2 0.4-1.1 0.4 0 0.8-0.6 0.2-0.7 0.6-0.5-0.2-0.5-1.3 0.5-0.1-0.7 0.9-0.2 0.5-1.2 2.5 0 1.3 0.5 0.3-0.8-0.7-1.9 0.3-1.2-0.7-0.8-0.8 0.4-0.4-0.2 0-1.1-0.6-0.4-1-0.3-0.6 0.4-0.1 0.8 0.5 1.2 0.4 0 0.4 2-1 0.4-0.3-0.8-0.7-0.5 0.1-1.4-2.7-0.2 0.1-2-0.8 0.2-0.5 0.4-1.6 0-1.5-0.8-0.7 0.2-0.2 1.1-0.5 0.5-0.2 0.9 0.3 0.1-0.2 1.3-0.5 0.4-0.7 0-0.8-1.1-0.6 0-1 0.3-0.7-0.2-1.1 0.1-0.4-0.2-0.5-1.1 0.7-0.3-0.1-0.9-1.5-0.5-0.7-1.1 0.2-1.4 0.4-0.1 0.6-0.7 1 0.5 0.1-1.6 0.5 0 0.5-1.2-2.3-0.2-0.9 0.5-0.6-0.1-0.7-1.3-1.5-0.6-0.4-0.9-0.3-0.9-0.6-0.6 0.4-2.8 0.9-2.1-0.6-1.6 1.8-0.2 0.2-1.6 0.3-0.3 0.1-0.8-0.2-1 0.5 0 0.2-1.7-0.1-0.9-0.7 0.1-0.5 0.3-0.4-0.4-0.7 0-1.1-0.2-0.2-0.5 0.9-1.2-0.4-1.3 0-0.4 0.8-0.9 0.9 0.6 0.5 0 0.8 0.6 0.6 1 1.2-0.1 1.3 0.2 0.5 0.4 1.2-0.5 1.6 0-0.2 0.8 1.3 0.2 0.1-0.8 0.9-0.2 0.6-1.4 0-0.9 0.7-0.5 0.2-0.8-0.6-0.2 0.1-0.5 0.7 0 0.2-0.6-0.2-0.9-0.6-0.9-0.7-0.1 0.7-1.1 0.8 0-0.6-0.7 0-0.5-1.1-0.1-0.2-1.4-1.4 0.3-0.2-0.6-0.8-0.8 0.2-0.9-0.5-0.6-0.1-1.2-0.7-0.5-0.4-0.6-0.8-0.9 0-0.5 0.8 0.2 1.1 0 0.1-0.9-0.2-1.8 0.2-0.8-0.1-1.1 1.4-0.4 0.5-0.4 1.1 1 0.3-1.2-0.8-0.7-0.8-0.5 0.3-0.6-0.3-0.4-1-0.2 0-0.9 0.5-1 0.1-1.5-1.3-0.1 0.2-1 1.5-2 0.9-0.5 0.9-0.3 0.5-0.3 1.2-0.4 1.9 0 0.5-0.2 1.1 0.3 2.5 0.2 0.7 0.3 1.1 0 0.6-0.3 1.4 0.5 1.5 0.3 2.7 0.5 0.6-0.2 1.1 1 1.5 0.4 1.1-0.5 2.9 0.8 1.2-0.4 0.7 0 0.4-0.6 0.7-0.1 1.4 0.7 1.5 0 1 0.6 0.5-1.3 0.8-0.1 0.3 1 0.5 0.9 1.3 0.6 0.9-0.3-0.1-0.5 1.3 0 0.6-1.3 0-0.5 0.8-0.6 0.8-0.2 0.5-0.5 0.2-1.1 0.4-0.9-0.3-1.1 0.6-0.4 0.8 0.3 0.8-0.1 0.8-0.8 1.1-0.3 1.2-0.7 1.5 0 1.5 0.3 2.2 0.6 1.5-1.5 1.2 0.2 1 1.3 0.7 0.5 0.9 0.5 0.9 0.2 1.2-0.1 1.1-0.8 1-1.4-0.2-2.3 0.9-0.3 0.3 0.6 0.2 1.2 1 0.4 0.7-0.9-0.6-1.5 0.1-0.9 1.8-0.9 1.1-0.4 1-0.6 0.7 0 0.9 0.2 1.9 0 1.8 0.8 1.1-0.5 0.6-0.7 0.1-1.8 0-1.3-0.6-0.9 0.3-2.7 0.5-0.7-0.4-1.2 0.2-1 1.1-1 0.2-0.5 1.8-0.5 0.9-0.1 2.7-0.2 0.6-0.3 0.3-0.6 1.6-0.8 1.3 0 1.3-0.4 0.9-0.7 1.6 0 0.3-0.4 0.9-0.6 1.4-0.1 0.9-1 0.8-0.3 0.3 0.2 0.9 1.2 1.8-0.3 0.4 0.4 0.6 1.4 0.4 0.4 0.7 0.2 0.7 0 1-1 0.6-1.2 0.9-0.7 1.1-1.1 0.1-1 0.6-1.5-1-0.4-0.2-1-0.7 0-0.8-0.4 0.6-1.5 1-1.1 0.3-1 1.3 0.1 0.1-0.9 0.6 0.2 1-0.1 0.3-0.6 0.8-0.8 0.5-0.7 0.5 0 0 0.9 0.8 0 0.8 0.6 0.7-0.3 1.3 1.9 0.4 1.6 0.2 1.5 0.6 0.5 0.8 0 0.5 1.6 0.9-0.7 0-0.7 0.6 0.3 0.2 0.4 1 0.5 0.1 1 1.1 0.5 2.5 0.4 1.2-0.8-0.4-0.7-1-0.7 0.2-0.4 0.1-1.2 0.8-0.1-0.2-1.1 0.1-0.8-0.5 0-1.3-0.9-0.4 0.5-1-0.4-0.5 1-1.2-0.9-1.5-0.4-1.3-0.5 0.4-0.9 0.6-0.6-0.7-1.6 0.9-0.7 0.2 0.8 0.7 1.1 0.9 0.2 0.2-0.7 0.6 0 0.5-0.7 0-0.9 0.4-0.7 1.8-0.8 0.3-0.5 1.2 0.7 1.2 0.3 0.9 1-0.6 0.4 0.4 0.6 1.2-0.5 1.4 0.1 0.7 0.4 2.6 0.6 0.3 0.4 0.9-0.9 0-0.6 0.2-1-0.3-0.5 0.4-0.5 0.1-0.8 0.7 0.2 0.8-0.2 0.1-0.8-0.4-1.1 0.9-0.2 0.9 0.6 1 0.3 1.4-0.2 0.6-0.7 0.6 0.1 0.8-0.4 2-0.6 0.6-0.1 0.6-0.7-0.3-0.5 0-1.4 0.7-0.7 0.9 0.2 1.7 0 0.7-0.6 1.2-1.9 0.7 0.2 0.2 0.6 1.2 0.5 1.1-0.3 0.1-0.3 0.7-0.4 1.8-2.4 0.3-3.2 0.8-1.2-0.8-0.6 0.3-0.8 0.8-0.7 0.7-1.3 0.6-0.8 0-1.1 0.3-0.4 1-0.5 0.4-0.6 1.8-0.2 0.8-0.6 0.2-0.6 0.9-0.7 0.8 0.1 0.4-0.4 0.6-0.1 0.4-0.5-0.4-0.9-0.8-0.8 0.9-0.7 0.5-0.9 1.1-0.5 0.5 0 1.8-0.6 0.5-0.4 0.7-0.2 2.3-1.4 0-0.8 0.8-0.4 0.7 0.4 0.5 0 0.4-0.7 0.7 0.5 1.2 0.1 0.1 0.5 1.1-0.2 0.5 1.1 0.6 0 0.8 0.6 0.6 0 0.2 0.5 0.8-0.3 0.2-0.8-0.5-0.9 0.3-0.5 0.7-0.4 0.6 0.7 0.6-0.4 0.5 0.2 0.2-1.3-0.3-0.4 0-1.8 0.8 0.7 0.3-0.6-0.6-0.8-1.3-0.4-0.1-0.8 0.9-0.7-0.1-0.6 0.2-1.2 1.1-0.2 0.5-0.5 0.3-0.8-0.3-0.4-1.3-0.1 0.5-0.8 0.6-0.3 0.2-0.7-0.7-1.4 0.5-0.4 0.7-1.1 1-0.9 0.3-0.7 1.3-1.5 0.3 0.8 0.5 0.4 0.9 0 0.1 1.3-0.4 0.5 0.5 0.4 0.8 0.2-0.6 1.1 0 0.6 0.7 0.1 1.5 0.8-0.3 1.7-0.2 1.4 0.1 0.8 0.7 0.3 0.8 0.7 0.5-0.5-0.1-0.5 0.7-1.2 1.2-0.2 0.1-0.4 1.1-0.2 0.6-0.5 0.5-0.1 0.6-0.9-0.2-0.6 0.3-0.7-0.4-1 0.8-0.7 0.7 0.2 1.7 0.9 0.5-0.2 0.2 0.8-0.2 0.4 0.6 0.9 0.9-0.2 0.2 0.3 0.9-0.2 0.6 0.1 0.5-0.7 0.7-0.1 0.9 0.2 0.6-0.2 0.3-0.5-0.8-1-0.2-0.6-0.7-0.4 1.2-1.1 0.8-1.4 0.5-0.6-0.6-0.4-0.7 0.3-0.6-0.5-0.3-0.5 0.4-0.5-1-0.4 0.5-0.6-0.3-1.2 1.3-0.6 0.9-1.8 0.4-0.3 1.5-2.1 0.6 0.5 0.6-0.1 0.6 0.6 1.3-0.2 0.5-0.4 1 0.1 0.4-1.2 0.9-0.3 0.6 0 1.3-0.3 0.4-0.5 0.9-0.4-0.1-0.6 0.5-0.4-0.8-0.4-1.4-1.8 0.6-0.3-0.1-0.9-1.2-0.1-0.4-0.4-0.2-0.8 0.7 0.1 0.2-0.7 0.7-0.1 0.2 0.5 0.9-0.2 0.7 0.2 0.2 0.6 1 1.1 0.7-0.4-0.5-0.8 0-0.6 0.9-0.1 0.1-0.9-0.4-0.4-0.2-1.2 0.6-0.2 0.5 0.8 0.4-0.4 0.3 1.4-0.7 0 0.1 0.5 1.2 0.2 0.1-0.8 0.6-0.8 0.9 0 0.1-0.9 0.8-0.6-0.3-1 0.8-0.8 0.9 1 0.4 1 0 0.4 0.9 1.2 0.6 1 0.2 1.1 0.7 0.3 0.6 2.1 0.9 0.6 0.2-0.6-0.5-1-0.4 0.1-0.3-1.5 1.6-0.8 0.9 2.1-0.1 0.5 0.8 0.9 0.2 0.8-0.2 0.5 0.3 0.8 0.7 0.5 0.2 0.7 1.3 0.1 0.8 0.3 1.7 0.3 0.9-0.2 1.4 0.8 0.6 1.1 0.8 0.2 1.5-0.7 0.9-0.3 0.7 0.2 1.2-0.7 1 0.5 0.5 0 0.8-0.6 0.6 0.3 1.1-0.4-0.1-0.6 0.5-0.1-0.4-1.8 1 0.4 0.8-1.1 0.8-0.3 0.7-0.8-0.5-0.9 0.9-1.1-0.2-0.3-0.3-0.3-0.1-0.2 0-0.2-0.3-0.6 0.2 0 0 0.1 0.6 0.4 1.1 0.6 0.2-0.4 0-0.5 0.4-0.5 0.3-0.2 0.4-0.4 1.3-0.3 0.4-0.5 0.3-0.2 0.1 0.2 0.3-0.1-0.2 1 0.5 0.8 0.4-0.7 0.3-0.5 0.1-0.2 0.4-0.2 0.1 0.1 0.1 0.2 0.2-0.3 0.4 0 0.3 0.2 0.3-0.5-0.7-0.7-0.3 0.3-0.4 0.1-0.2-0.6-0.4-0.1-0.3-0.8 1.1-0.2 0.6 0 0.5-0.1 0.2-0.4-0.1-0.8 0.6 0.2 0.5 0 0.2 0-0.2 0.9-0.1 0.1 0.2 0.5-0.1 0 0.8 0.5 0.4 0.2 1 0.7-2.5 3.5-0.8 0.3 0.2 0.5-1.9 1.8-0.9 1-0.4 1.3-0.7 0.7 0 0.8-0.8 0.9-1.4 1.1-1.7 2.2 0 0.6-2.7 2.7-0.2 1.1-2.4 2-2.3 2.2-2.3 2.3-0.9 1.8 0.1 0.5-2 1.3-2 1-2.1 1.2-2.2 0.7-0.8 0.7-2.6 1.1-2.5 1.3-1.5 0.9-0.9 0.8-2.5 1.7-0.3 0.6 0 0.5-1 1.3-1.5 0.8-1.2 0.9 0.1 0.5-0.4 0.5-0.8 0.6-0.3 1.7-0.7 0.6-0.2 0.5-1 0.8-0.5 1.2-0.9 0.5-0.5 0.5-0.1 0.7-1.3 1.1-0.6 0.4-0.2 0.8-0.7 0.6-1.3 0.7-0.5 0.5-2 0.6-0.8 0.4-1.6 0.7-0.9 0.5-0.7 1.1-1.1 0.3-1 0.6-1.4 0.6-0.5 0.4-1 0.3-2.8 1.3-1.9 1-2.7 1.6-3.1 2-1.4 1-1.8 1.5-3.7 3.6-0.9 1.1-0.9 1.7 0.2 0.6-0.5 0.7 0.1 0.6-0.7 0.2 0 1 0.6 1.1 0.4-0.1 1.1 0.8 0.8 0 0.8 0.3-0.3 0.9 0.2 0.4-0.5 2.1 0 0.6-0.8 0.1-0.7 0.7z" id="2" name="Andhra Pradesh">
									</path>
									<path d="M924.8 419.9l-0.1-1-0.7-0.8 0.1-0.8 0.8-1.1-0.9-0.5-0.6-1.6-0.5-1 1-0.8 0.6 0 0.1-1.3-0.5-0.5-0.4-1.1 0.3-0.3-0.7-0.8 0.2-0.6-0.2-1.4 0.6 0.3 0.9-0.3 0.3 0.5 1-0.8 0-0.2 1.1-1 2-1.2 1.3-0.2 0.5-0.5 1.3-0.2 0.3-0.7 0.1-1.4-0.4-0.7 1-1.4 1.6-1 1.4 0.8 0.5 0.8 1.6-0.3 1.6-0.7 1.4-0.1 0.2-0.3 1.8-0.5 0.9 0 1.7-0.6 0.4 1.1 0.9 0.1 0.3-1.1 1.9-0.9 0.3-0.8 0.8-0.6 0.7-0.9-0.5-1.1-0.9-1.2-1.4-0.4-0.7 0.2-0.4 1.1-0.6-1.2-0.6 0.6-0.5-0.1 0.3-1.2 0.6-0.4 0.1-1.1 0-2-0.6 0-1.4-1.1 0.1-0.8-0.9-0.2-0.4-1 0.5-0.6-0.7-0.5 0-0.7 0.4-0.5-0.7-0.3 0-0.8-0.5-0.4 1-0.4-0.2-0.6 0.7-0.7 0.8-1.3 0.9-1 0.9-0.3 1.6-1.7 1.1-1.5-0.1-0.6 0.8-1-5.2-0.4-7.4 0.8-0.7 0.6-0.5 0-0.3 0.7-0.7 0.4-0.9 1.2-4.5 1.5-2.3-1.1-2.8 0.9-6.3 2.2-0.4 0.5-1.8 0.3-1.9 0.5-1.6 0.6-0.8 0.1-0.4 1.1-1 0.6-0.8-0.1-1.8 1.3-0.8-0.2-0.8 0.1-1.7 1-0.3 0.4-1.6 0.3-0.6 0.6-1.6 0.4-0.9 0.7-1.6 0.3-1.1-1.2-0.6 0.6-0.6-0.1-0.7 0.5-1.8-0.5-0.9-0.1-1.1-0.9 0.3-0.8-1 0.1-0.7 1.1 0.3 0.1 0.1 1 1.1 0.7 0 1.4-2.1 0.9-1.3 0.8 0.1 0.4-2.6 2.4-0.8 1.6-2.1 1.1-1.5 1.5-0.6 0.8-1.3 1.3-1.1 1.6-1 1-0.4 0.1-0.7 0.8 0 0.6 0.6 0.6 0.1 0.7 0.3 0.8-0.9 0.4-1.4 1-1.7 0.9-1.5 1.8-1.7 0.3-1.4 0.4-2 0.2-1.2 0.4-0.8 0-0.7-0.6-3.4-0.4-2.7 0.3-1.6 0.3-1.3 0.4-2.5 0.4-0.6 0.5-0.8-0.4-1.7 0.3-0.7-0.5-2.8-1.3 0-0.8-1.5-0.9-1.2-0.2-2.3-0.7-1.9 0.2-1.9-0.4-0.5 1 0 0.9-2 1-1.1 0.1-1.7-0.3-2 0.2-0.7 0.7-0.4 0-0.4 0.7-1.6-0.4-1.8 0.4 0.1 0.6-1 0.3-0.7-0.4-2 0.8-2.6 0-0.4-0.1 0.3-1.5-0.1-1.6-0.4-0.3 0-1-0.8-0.5-0.1-0.7-0.4-0.5-0.7 0-0.5-1-0.2-1.4 0.4-0.9-0.4-0.6 0.1-0.7 1-0.6 0.5-1.3-0.2-0.9-0.8-0.6 1-0.6 1.1 0.3 0.6-0.3-0.1-0.6-1.3-0.7-0.7-0.6 0.1-0.7-0.4-0.5-0.1-0.8 0.3-0.8-0.5-0.5-0.1-0.9-0.5-0.2-0.2-0.7 0-0.8-2.7 0.7-0.5-0.4-0.9 0.1-1.7-0.5-0.7 0.5-0.6-0.1-1.2 0.3-0.6-0.3-1.5-0.1-0.1-0.6-0.7-0.5-1.2 0.8-0.4-0.6-0.8-0.6-0.3-1.1-0.5 0.1-1.2-1.7 0.6-0.6-0.7-1.3 0.3-0.7 0.8-0.8 0.1-0.4 1.1-0.9 0.2-1.6 0.3-0.4-0.3-0.5-0.1-1.2-1-0.7-1.1 0.2-0.7-1.2 0.8-0.6 0.8 0 0.5 0.3 2.1-0.1 0.9 1.3 0.5 0.3 1.2 0.4 0.9 0.1 1.1-0.3 0.8 0.1 0.2 1 0.4 0.2 0.5 1.5 0.7 0.6 1-0.2 0.3 0.4 0.9-0.5 0.4-0.8 1-0.8 1.8 0.5 0.6-0.1 1-0.8 1.2-1.1 1.2-1.1 1.5-0.7 1.9-0.2 0.4 0.3 0.6 1.8 0.8 1.1 2.5-0.6 0.1-0.8 1-0.3 1.1 0.8 0.3-0.1 1.3-1.3 0.8-0.1 1 0.9 0.5-0.2 0.9-1.3 0.7-0.8 2.2-0.9 1-1.3 1.4-2.2-1.6-2.2-1.1-0.6 0.6-2.1 0.9-0.8 1.1-0.5 1.5-1.3 0.6-0.7 0.7 0.2 0 0.9 2.6-1.2 0.6-1.2 1.7-1 0.8 0.4 0.5 0.8 1.1-1.3-0.4-1.4 1.7-0.3 0.8 0 1-0.7 1 0.3 1.4 0 1-0.9-0.2-0.8 0.5-1.5-1.4-1-0.3-0.5 0.8-0.5 0.8-1 1.6-1 0.4-1.5 0.6-0.9-0.2-1.3 0.9-0.4 0.2-0.9 2.7-0.8 1.2-0.9 0.9 0.9 0.2-0.9 0.6-0.3 0.8 0.4 0.2 0.5 2.8 0.2 1.1-0.2 1.6-0.7 1.5-0.4 1.5 0.8 2.4-1.5 0.7 0.1 1.3 1.1 1.1 0 0.7-1.1 0.3-0.7 0.1-1.1 1.1-1-0.5-0.9 0.5-0.8-0.2-0.8 1.2-0.5 0.5-0.8 1.2-1.2 2-1.4 0.6-0.6 0.1-0.7 0.5-0.7 0-0.6 0.4-1.3 1-1.7 1.5-1.3 1-1.2 2.2-0.1 0.4-0.3 0.3-1.3 1.4-0.8 0.6-0.6 2.2 0.4 1.3-0.1 0.8-0.4 0.5-0.8 0.1-1 1.3-1 0.2-0.5 0.3-1.4 0.5 0.1 1.2 0.8 1.2 0.9 1.9 2 0.8 1 0.2 0.7-0.1 1.1 0.1 0.6 1.7-0.7 0.9 0 1.6 0.8 1.6 0.1 1.5 1.1-0.2-1.5 1.2 0.7 2 0.4 0.8 1 1.9 0.3 2.5 0 0 1.6 0.5 0.4 1.3-0.2 1.4 0.7 2.3 0.4 0.3-0.2 1.2 0.1 1.1-2 0.1-1.4 0.4-0.7 1.5 0.5 0-2-0.3-1.1 0.3-0.3 1.4 0 0-1 0.4-0.8 1.1 0.5 1.4-0.8 1-1.2 0.9-0.1 0.5-0.5 0.1-0.5 1.1-1.1 0.5 0.8 1.2-0.7 0.4 0 1.4-1.4 2.6 0.3 1.3-1.1 0.7-0.4 1.4-1.5 0.8-0.2 0.5 0.3 0.7 1.1 1.2 1.2 1.2 2.1-0.1 1.4 0.7 0.6 0.3 0.7 0.8 1.3 0.6 0.4 1.4-0.1 0.7-1 1.1-0.3 0.6-0.7 0.4 0.1 0.6 1-0.2 0.9-0.5 0.7-0.5 1.4-0.4 0.4-1.3 0.1-1.6 0.3-0.4 0.4-1.1 0.5-0.6 1.2-1 0.8-1.6 0.2 0.9 1.1 0.5 1.3 0.7 1.2-0.1 0.8-0.9 0.5-0.3 0.7 0.6 0.6 0.1 0.6 2.1-0.9 0.7-0.5 0.2-0.6 1.3-1.6 1-0.5 0.8-0.8 3.1-0.2 0.8-0.3 0.6-0.6 1.6-0.7-1.6 3.3 0.3 1.1 1.2 0 0.1 0.7 0.5 1.1-0.1 1.4 1.6 2.4 0.9 1 0.2 1.2-1 1.7-0.9 0.4-0.9 0-1.5 0.9-0.6 0.2 0.8 1.6-0.8 0.8-0.9 0.6-0.8 0.8-0.5-0.3-0.2 1.2-1.6 0.1-1 1.2 1.2 0.8 0.4 0.5-0.2 0.6-1.1 0.7-2.3 1.8 0 0.2 1.3 0.3 0.5 0.7 1.8-0.3 0.3 1.1 0.6 0.8 0.8-0.3 0.3-1.5 0.9-1.1 0.8-0.2 1 0.2 1.4-0.9 0.3-0.4 1.3-0.5 2.3 0 0.6 0.5 1.2 0.8 0.6 0 0.8 0.6 0.5 1.6 1.8 0.3 0.9 0 0.3-0.4 1.3-0.3 0.7 0.9 0.2 0.7 0.9 0.2 0.8 0.6 0.7 0.3 0.9-0.4 1-1.2 1.4-0.5 1.1 0.5 1.2 1.2 0.3 0.9 0.8 0.3 1.1-0.2 0.6 1 1.4-0.1 0.8 0.5 0.2 0.5 0.7 0.1 1.4 0.9 0.9 1-0.3 0.3-0.7-0.3-1.4 1.4-0.2 0.6 0.5 1.1-1 1 0.1 0.9 0.7 0.2 1.1-0.1 0.4 1.1 0.8 0.2 0.4 0.7-0.7 0.2-0.4 1-0.1 1.6 0.4 0.5-0.3 0.5 0.3 0.8-0.8 0.5-0.7-0.4-0.8 0.2 0.1-0.9-0.5-0.7-1.8 0.8-0.7 0.8-1.1 1-1.5 1.6-0.8 0.3-0.4 0.6-0.8 0.2 0.1 0.7-0.3 1-0.9-0.4-1.1 0.3-0.7 0.5-0.4 1.1-0.7 0.8-0.2 0.7-0.7-0.1-1 0.7-0.3 1-0.8 0.4 0.1 1 0.5 0.2 0.1 1.2 0.7 1.1-0.8 1.6-0.1 1 0.8 0.4 0.2 0.9 0.9 0.5 0.3 0.7-0.2 0.4 0.5 0.9 0.5 0.3 0.2 1 1.2 0.8 0.1 0.7 1.3 1.4 0.5 0.2 0 1 0.7 0.5 0.4 0.9 0.8 0.3 0.6 0.9 0.1 0.7-0.5 0.4-0.4 0.9-0.5 0-0.7-0.7-1.1 0.4-0.5 0-1.1-1.2-1.1-0.5-0.5-0.5-1-0.2-1.2-0.1-1.8-0.9-0.1-0.8 0.9-0.7-0.2-1.1-0.6-0.1-0.4-0.4-0.2-1-0.4-0.2-0.7-0.7-0.5-1-1-0.4-1.1 0-1-0.6-0.6 0.6-0.8-0.3-0.8 0.2-0.9-0.2-0.8 0.6 0.1 0.5-1.3 0.7-1.1 1.1-1-0.4-1-0.2-1.3 0.1-1.4 0.6-1-0.2-0.5 0.5-1.3-0.6-0.7 0.3-0.4 0.6-1.5-0.2-0.6 0.6-0.7 0.2-0.5 0.4-0.6 0-1.7 0.8-0.5 0.1-0.5 0.5-1.7 0.8-0.6 1.6-1.3 1.7-0.8 1.6-2.7 1.8-0.7 0-0.6 0.2-0.8-0.2-1.2 1.2-0.7 1 0.1 0.7-0.4 0.6 0.1 0.9-0.8 0.7-0.9 0.1-1.1-0.9-0.7 1-0.5 0.2-0.2 1.1-0.7 1.1-1.2-0.2-0.4-0.4-0.6-0.1-1.1 1-0.4 1.2-0.6 1-0.7 0.2-1.4 2-0.6 0-1.4 0.8-0.6 0-1.5 0.8-1.1-0.3-0.4-0.9-0.7 0z" id="3" name="Arunachal Pradesh">
									</path>
									<path d="M741.5 463.6l0.2 0.4-0.1 0.5 0.2 1-0.4 0.4-0.4 0.1 0.2-1.6 0.3-0.8z m181.8-57.3l-1.4 1.4-1.3 0.9-0.2 0.6-0.8 0.5-1.7 0.6-0.5 0.5-1.2 0.3-1-1-0.8 0.2-0.7-0.2-0.9 0.4-0.6 0.7-0.6 1.3-1.1 1-0.2 1.1-0.4 0.8-1 0.4-0.6 0.9-0.3-0.4-0.5 0.7-1.6 1.2-1.1 0.3-1.1 0.1-0.4-0.7-0.5 0.5-0.1 0.9-1.6-0.3-0.8 0.4-0.2 0.5-0.6 0.5-1 0.2-0.5 1.1-1.5 0.9-0.1 0.6 0.3 0.7-0.7 2-0.6 0.7-0.9 0.1 0 0.5-0.9 0.6-0.3 0.7-0.8-0.7-0.2-1.1-0.2-2.1-0.6 0.8-0.8 1.2-1 0.8-0.3 0.8-0.5 0.4-0.4 1.1 0.1 1.6-0.5 1.1 0 0.8-0.9-0.1-1 0.6-0.2 0.6-1.1 1.9-0.6 0.2-0.4 0.8-0.2 1.2-0.8 0.6-0.4 1.1 0.2 0.4-0.7 2.4 0.2 0.4-0.9 1.2-0.3 1.3 0 1.3 0.4 0.5 0.5 1.3-0.8 0.8-1.5 0.7-0.7 0.8-0.4 0.7-1.1-0.6-0.9 0.6-0.2 0.8-0.8 0.4-0.5-1.2 0.6-2.4-0.4-1.8-0.6 0.1-0.6 0.7-2.2 1 0.1 0.8 0.6 1.4-0.8 0.4-0.2 0.5-1 0.2-0.7 0.7-0.2 0.9-1.3 0.9-1.3 1.2-0.1 0.9-0.8 0.7-1.2 1.4-0.7 0.1-1.6 0.9-0.4 0.9-0.5 0.1-0.6 0.9-1 0.3-0.4 0.5 0.9 0.8 0.4 1 0.7 0.6 0 0.6 0.9 0.6 0.6 0 0.8 0.4 0.2 1.2 0.5 1.2-0.9 1.3 0.1 0.8 0.6 0.6-0.4 0.5-0.6 0.1-1.4 1.1-0.5 0.8 0 0.4-1.2 1.9-0.2 0.6 0.1 0.8-0.5 1.8-0.4 0.2-0.9 1.6-1 0-0.7 1.1 0 0.6 0.5 1.4-0.1 0.6-0.5 0.2 0.3 1-0.7 0.7 0 0.6-1.3 1.4-0.1 1.5-1.2 0.5-0.9-0.5-0.6 0.2-0.8 3.5 0.3 1.6-0.5 0.7 0.1 1.3-0.4 0.6 0.8 0.5-1.6 1.4 0.1 1-0.6 0.8 0.4 0.8-0.4 0.6-0.2 1.2 0.3 0.7-1.3 0.3-0.7-0.3-0.7 0.5-0.8 0-0.9-0.6-0.2 0.7-0.7-0.3-0.7 0.1-0.6 0.6-1.4-1.4-1.4-3.8-1.2 2.6-0.5 1.8-0.8 1.8-1.1 0.5-0.5 0.6-0.6-0.3-0.2 0.9 0 0.9-0.3 1.3-0.8 0.3-1.3 0-0.1 0.8-0.6 1.8-0.6 0.1-0.1 0.1 0.1 0.3-0.1 0-0.2-0.2 0 0.2-0.5 0-0.1 0.1-0.1 0.1 0 0.1-0.3 0.4-0.3 0.3-0.1 0-0.7-0.7-0.2 0.1 0-0.4-0.1-0.5-0.5-0.7 0.1-2.2-1.5 0.1-2.2-0.1-0.6 0-2.8 0.1 1.7-4.2 0.3-1-0.6-1.1 0.1-0.7-0.9-0.9 0-1.6 0.1-2.2 0.2-1.4 0.3-1.1 0.1-0.9 0.4-1.4 1.2-1.8-0.5-0.2 0.4-0.7-0.1-0.8-0.4-0.9-0.1-0.9-0.8-0.1-0.4-0.6 0-0.9 0.2-0.4-0.1-1 2.3 0.1 1.2 1.1 0.6-0.1 1 1 0.7-0.3 1.1 0 1.5-0.4 0.3-1.4-0.2-1-1.2-0.3 0.4-0.7-0.4-0.5-0.8 0.4-0.4-1.1 0.3-1.2-0.3-0.2 0.9-0.3 0.5-0.6 0.5-1.1 0.1-0.8 1.5 0-0.1-1.3 1 0.4 1 0 1.3 0.5 0.8-1.3 0.4-0.1 0.2-0.7 0.5-0.3 2.4-1 1.1 0.2 0.8-0.7-1-0.5-0.3-0.6 0.2-0.7 0.8-0.7-0.3-0.8 0-0.9-0.8-0.1-0.9-1.5-0.6 0-0.6-0.5-0.9-1.1-0.5 0.2-0.3-0.8-1.5 0.5 0-1.1-0.3-0.9-0.9 0.3-0.1-0.6 0.4-0.6 1.4-0.7 0.8-0.9 0.6-1.8-0.7-0.1-0.4 0.7-0.7 0.2-0.7 0.4-0.9-0.8-0.2-1.4-2-0.6-0.6-1.4-0.5-0.7-1.1-0.2-0.2-0.8 0.5-0.4-0.9-0.8-1.5-0.2-1.1 0.8-1.1 0.1-1.3 0.5-1.1 0.1-0.4-0.3-0.5 0.7-1.4 1.1-0.5-1.6 0.3-1.3-0.4-1.5 0-1.1 1-1.5 0-0.7 1.5-1.2-0.1-0.3-1.4 0.1-0.7-0.3-0.2-1.1 0.4-0.8 0.8-0.7 0.4-0.1 1.8-1.6 1.6-1.8-1 0.4-1.1 0.1-1-0.3-0.7 0.1-0.4-0.4-1 0.5-0.6 0.7-1.3-0.1-1.4 0.6-0.6-0.2-1.5-0.1-0.4 0.6-1.6 0.4-0.2 0.6-0.7-1-0.8-0.1-0.5-1.1 0.3-1.5-2-0.8-1 1.2-0.4-0.2-0.6 0.8-1 0.4-0.3 1.1-0.1 2.9-1.7 1.9-0.7-0.3-1.3-1 0.7-0.2 0.2-0.8-0.4-0.8 0.2-1.4-0.4-0.1-0.8 0.2-0.9-0.3-0.1 1-0.5 1-0.5 0.5-0.6 0.2 0 0.6-0.6 0.8 0 0.8-0.6 0.3-0.5 1.2-1 0.7-1-0.5-2.1 0.6-0.6 0.3-0.9 1.3-1 1.9-0.7 0-1.1 0.9-1.2-0.6 0-0.9-0.3-0.5 0.8-2.5-1.7-0.3-1.1 0.7-1.9 0.2 0-0.8-0.6-0.1-0.9 1-0.7-0.1 0.4-1.2 0.5-0.3-0.5-0.7-1-0.2-0.6 0.1-0.3-1.8-1.4-0.3 0.1 1.1-1.2-1.5-0.5 0.4-1.7-0.2-0.8 0.2-0.6 1.3-1.3-0.3 0-1-0.9-0.4-1 0.1-0.3 0.5-1.7 0.7 0.1-0.7-1.7-0.8-0.3 0.7-0.6 0.4-1 1.1-0.2-0.4 0.5-0.8 0.1-1-1-1.5-1-0.7-0.7 0.6-1 0.4-1.1-0.9-1 0.1-1.2 0.8-0.2 0.6-1.3 0.4-2.5 0.3-0.7-0.1-2.7 0-0.5 0.6-0.1 0.1-0.2 0.4-0.3 0.2-0.1 0.2-0.2 0-0.3 0.1-0.2 0.2-0.2 0.4-0.8 0.2-0.5 0.2 0 0.7 0.1 0 0.2 0.2-0.4 0.6-0.5 0.2 0.2 0.1-1.2 0.6-0.6 0-0.1 0.2-0.1 0.2 0.3 0.2 0 1 0.1 0.4-1.4 1.3-0.5-0.2-0.2 0.6 0.6 0.8 0.2 0.2 0.5 0.5 0.3 0.4 0.2 0.7 1.1 0.8 0.7 0.6 0.2 0 0.4 0.5-0.4 0.8-0.4 0.1-0.5-0.2-0.2 0.6-1.9 0.5-1.1 0.2-0.3 0.3-0.2 0.2 0.5-2.4 0-0.9-0.4-1-0.7-1 0-1-0.5-0.1-0.3-0.9 0.5-0.8-0.5-1.9-0.5-0.4 0.5-0.7 0-0.6 0.8-1.4 1-1.1 0.1-1-1.8 0.1 0.3-0.8 1.1-0.3-0.7-0.6-0.2-0.7-0.7-0.2-0.4-1.2-1-1.8 0.1-0.4-1-0.5 0.4-0.4-0.8-1.3-0.9 0.1-0.1-0.4 0.5-0.3 0-0.1-0.6 0-0.3 0.1-0.2-0.1-0.2-0.5 0.5 0 0.2-0.1-0.1-0.5 0.4 0 0-0.5-0.3 0.1-0.6 0 0-0.1 0.3 0 0.2-0.4 0.2-0.1 0.3-0.3-0.4-0.3 0-0.3-0.2-0.1-0.3-0.1 0.3-0.2 0.3 0.2 0.5 0 0-0.2-0.4-0.9-0.2-0.5 0.2-0.2 0 0.4 0.8 0.2 0.4 0.1 0.1-0.1-0.3-1.2 0.4 0.2 0.6-0.5 0.1-0.9 1.5-0.5 1-0.6-0.4-1 0.4-0.9 0.4-0.6 0.1-0.6-0.6-0.9 0-1.3 0.3-0.3 0.1-1.5 0.4-0.6 0-1.1-0.5 0-0.2-0.7 0.6-0.4-0.2-0.5 0.1-1.1-0.5-0.7 0.2-1.3 0.9 0.5 2.4 0 1.5-0.4 1.8 0.2 2.5-0.8 2-0.8-0.2-1.3 0.5-1.1 1-0.9 1.3 0.1 0.9 0.2 0.7-0.1 1.2-0.9 0.3-0.8 1.9-0.2 0.4 0.1 1.1 1 3.8 2.8 2.2 0.3 0.7 0.7 1-0.3 0.7 0.5 1.2 0 0.2-0.3 2.1 0.1 2.3-0.2 0.9 0 3.4-0.4 2 0.4 1.2-1.5 1.4 0.4 1.7-0.1 2.8 0.2 1.1 0.8 1.4 0.2 1.5-0.9 0.8-1.3 0.2 0 2.4 1.7 0.5 0.1 3.3-0.6 1.2-0.6 1.8 0.6 0.7-0.3 1 0 2.5-1.5 1.1-0.9 0.7-1.4 1.5-0.2 1.9 1.1 1.1 1.2 1.1 0.2 1.3 0.2 1.4-0.8 0.4-1 0.4 0.1 2.6 0 2-0.8 0.7 0.4 1-0.3-0.1-0.6 1.8-0.4 1.6 0.4 0.4-0.7 0.4 0 0.7-0.7 2-0.2 1.7 0.3 1.1-0.1 2-1 0-0.9 0.5-1 1.9 0.4 1.9-0.2 2.3 0.7 1.2 0.2 1.5 0.9 0 0.8 2.8 1.3 0.7 0.5 1.7-0.3 0.8 0.4 0.6-0.5 2.5-0.4 1.3-0.4 1.6-0.3 2.7-0.3 3.4 0.4 0.7 0.6 0.8 0 1.2-0.4 2-0.2 1.4-0.4 1.7-0.3 1.5-1.8 1.7-0.9 1.4-1 0.9-0.4-0.3-0.8-0.1-0.7-0.6-0.6 0-0.6 0.7-0.8 0.4-0.1 1-1 1.1-1.6 1.3-1.3 0.6-0.8 1.5-1.5 2.1-1.1 0.8-1.6 2.6-2.4-0.1-0.4 1.3-0.8 2.1-0.9 0-1.4-1.1-0.7-0.1-1-0.3-0.1 0.7-1.1 1-0.1-0.3 0.8 1.1 0.9 0.9 0.1 1.8 0.5 0.7-0.5 0.6 0.1 0.6-0.6 1.1 1.2 1.6-0.3 0.9-0.7 1.6-0.4 0.6-0.6 1.6-0.3 0.3-0.4 1.7-1 0.8-0.1 0.8 0.2 1.8-1.3 0.8 0.1 1-0.6 0.4-1.1 0.8-0.1 1.6-0.6 1.9-0.5 1.8-0.3 0.4-0.5 6.3-2.2 2.8-0.9 2.3 1.1 4.5-1.5 0.9-1.2 0.7-0.4 0.3-0.7 0.5 0 0.7-0.6 7.4-0.8 5.2 0.4-0.8 1 0.1 0.6-1.1 1.5-1.6 1.7-0.9 0.3-0.9 1-0.8 1.3-0.7 0.7 0.2 0.6-1 0.4 0.5 0.4 0 0.8 0.7 0.3-0.4 0.5 0 0.7 0.7 0.5-0.5 0.6 0.4 1 0.9 0.2-0.1 0.8 1.4 1.1 0.6 0 0 2-0.1 1.1-0.6 0.4-0.3 1.2 0.5 0.1 0.6-0.6 0.6 1.2 0.4-1.1 0.7-0.2 1.4 0.4 0.9 1.2 0.5 1.1-0.7 0.9-0.8 0.6-0.3 0.8-1.9 0.9-0.3 1.1-0.9-0.1-0.4-1.1-1.7 0.6-0.9 0-1.8 0.5-0.2 0.3-1.4 0.1-1.6 0.7-1.6 0.3-0.5-0.8-1.4-0.8-1.6 1-1 1.4 0.4 0.7-0.1 1.4-0.3 0.7-1.3 0.2-0.5 0.5-1.3 0.2-2 1.2-1.1 1 0 0.2-1 0.8-0.3-0.5-0.9 0.3-0.6-0.3z" id="4" name="Assam">
									</path>
									<path d="M681.2 425.7l0.9 0.9 1.2-0.4 0.1-0.6 0.6-0.2 0.7 0.3 0.8-0.6 0.1 0.7-1.4 0.9-0.5 0.6 0.5 0.8 1 0.2 0.2 0.8 0.5-0.1 0.3 0.6 0.1 0.7-0.8 0.8 0 0.3 0.5 0.4 0.3 0 0.5-0.1 0.4 0.7 0.3 0.1 0 0.2-0.4 0.2-0.2 0.6-0.1-0.1-0.1-0.1-1.2 1-0.1 0.5-0.2 0.3-0.3 0.3-0.3 0.1-0.7 0.1-0.3 0.5-0.4 0.2-0.2 0-0.7 0.5-0.4 0.7-0.2-0.1-0.1 0.2-0.4 0.3-0.1 0.1-0.3 0.2-0.1 0.2-0.1 0.3-0.5 0.3-0.1 0.4-0.4 0.1-0.7-0.2-0.1 0.3-0.8 0.6 0.1 0.5-0.3-0.1-0.3 0.1-0.5-0.7-0.6 0.4 0.1 0.4 0 0.3 0 0.2 0.1 0.6-0.5 0.3 0.5 0.4 0.1 0.3-0.2 0.1-0.3-0.1-0.7 0-0.2 0.6-0.4-0.3-0.1-0.5-0.8 0.4-0.1-0.1-0.1 0.4-0.4 0.2-0.9 0.8-0.3 0.5-0.3 1.1-0.2 0.4 0 0.3 0.1 0.8-0.1 0.4-0.1 0.2 0.1 0.2 0 0.4-0.7 0.1 0.3 0.6 0 1 0.3 0.6 1.6 0.4 0.5-0.2 0.9 0.5-0.8 0.7 0.8 0.7-0.5 0.6 0.1 0.7 1.3 0.9 0.2 0.5 1.2 1 2.4 1 0 0.4-0.2 1.1 0.2 0.3-0.1 0-0.1 0-0.3 0.3 0.3 0.1-0.2 0.7 0.1 0.2 0 0.2-0.4 0.2 0.2 0.1 0.1 0.1-0.2 0.2-0.2 0.7 0.3 0.4-0.2 0-0.1 0.2 0.4 0.8 0.3-0.1 0.3 0.2 0.3 0.9 0.1 0.1 0.1 0.1-0.1 0.4 0 0.4-1.2-0.2-0.6-0.6-0.3 0.3-0.6-0.4-0.3-0.5-0.8-0.8-1.1 0.1-0.7 0.6-0.1 0.5-1 0.1-0.4 1 0.1 0.5-1 0-0.2 0.7-0.6 0.4-0.8-0.5-0.8 2 0.1 0.7 0.8 0.2-0.3 1.3 1.7 1.3 0.7 0.2 0.2 0.7-0.2 1-0.9 0.7 0.3 0.8-0.1 0.3-1.4-0.6-0.2-1-2.6-0.3 0-0.6-0.5-0.4 0-0.8-0.3-0.3-1.1 0.1-0.9-0.3-0.6 0.2-1.4-0.9-0.6 0.1-0.4 1.4-0.4 0.5-0.4-0.4-1.1-0.1 0.5 1.1-0.8 0.9 0 1.8-0.6-0.1-2.2-1.2-0.5 0.2-0.3 0.6-1.5-0.6-0.5 2.8-0.4 0.5-0.2 1.8-0.7-0.2-0.4-0.4-0.6 0.2-0.3 0.5-0.7-0.2-0.8 0.9-0.4 0.1-1.1 2 0.3 0.8-0.2 2.7 0.4 1.2-0.4 0.9-1.4 0.6-1 1.4 0.6 0.4-0.4 0.7 0.1 0.8-0.4 0.5 0.3 0.8-0.4 1.1-0.6 0.9-0.3 1.8 0.2 0.6-1.4 0-1.5-0.9-1 0-1.3 1.7 0.3 1.6-1.1-0.9-0.7 0.6-0.6-0.6-1 0.1-0.1-1.1-0.4-0.8-1.3 0-0.3 1-0.5 0.5-0.4-0.1-1.8 0.7-0.7-0.3-1.6-1.2-0.5 0.5-0.1 0.5-0.9 0.5-0.3 0.9-0.8 0-0.6 0.7-0.5 1.2 0 1.7-0.1 0.5-0.8 0.2 0.1 1-0.2 0.7-0.5 0.3-1.1-0.4-0.6-0.8-0.8-0.6-0.7-1-1.2 0.1-0.6-0.7-0.3-0.7 0.7-1.2-0.4-0.9 0.1-1 0.5-0.6-0.9-0.4-1.5 0-1.1-1 0 0.8-1.7 0.3-0.5-0.6-0.9-0.5-0.3-1.1 0.6-1.3-0.3-1.1-0.7-1.1-1.4-0.6-0.6-1-1.4 0.4-0.2 0.6-0.8 0.1-0.2 0.6-0.7 0-1.3-0.8-1.2-1.8-1.7-0.3-0.6 0.6-1.1-0.2-0.4-0.5-1-0.4-0.5 1.3-0.4 0.3-0.2 0.9 0 1-0.8 1.3-1.1 0.3 0.4 0.5 0 0.9 0.4 1.1-0.2 1.5-0.7 0.1-1.3-0.3-0.3-0.4-0.7-0.2-0.6 0.7 0.3 0.7-1 0.5-0.2 0.7-1 0.1-0.4-0.8-2 0.6-1.1-0.4-0.7 0.5-2.2 0.3-0.7-0.1-0.6 0.3 0.1 0.8-0.9 0-1.1 1-0.7-0.1-1.7 0.4 0.5 1.3-0.7 0.4-1.1 0.3-0.8 1.1-0.9-0.2 0.3-0.8-0.2-1.1-0.5 0.8-0.7-0.4-1.5 0.5-0.7 1.4-0.7 0.1-0.8-0.2-0.7 0.2-0.2-0.8-0.7-1.1 0.1-1.5-0.6 0.2-1.2-0.5 0.1-1.5-0.4-0.5-1.2 0.3-0.2 0.4-1.2 0.4-0.6 0.8-0.7 0.1-0.9 0.6-0.4 0.9 0 0.7-0.3 0.7-1.3-0.3-0.7 0-0.9-0.4-0.5 0.6 0.2 0.5-0.6 0.4-0.9-0.1-0.1 1.6-0.8 1.7-1-0.8-0.4-1.1-1.2 0.3 0.1-1.1-0.9-0.3-0.4-0.8-0.7 0.1-0.9-0.4-0.4-0.5 0.2-0.8-0.5-0.6-0.8-0.1-0.2-0.6 0.3-0.6 0.9-0.3 0.2-0.5-0.3-0.7-0.9-1.6-0.8 0 0 0.9-0.4 0.1-1.2-0.5-1.7 0.4 0.3 0.6-0.1 0.5-0.8-0.2 0.3-0.6-0.6-0.3-0.3 0.4 0.1 0.9-1 0.9-0.7-0.8 0-1.1-0.4-0.5-0.2-0.9-0.4-0.3-0.5-1.3-0.8-0.6-1.1-0.4-0.6 1.6-0.5 0.8-1 1-2.1 0.6-0.3-0.2-2 0.3-1.8 0.7-1.1 0.2-1.1-0.4-2.8 0.1-2-0.5-1.5 0-0.2-0.6 0.8-0.2 0.3-1.4-0.3-0.6 0.6-0.5-0.6-1-0.6-0.4 0-0.6 0.5-0.4-0.8-1-0.3 0 0-1.2-1 0.2-0.6-0.9-0.8-0.7-0.8-0.4 0.3-1-0.2-0.8-0.8-1.1-0.5-1.5 0.2-0.4 0-1.6-0.5-0.3 0-1.8-0.8-0.2-0.1-0.8 0.2-0.4 0.6-2.4 0.4 0.1 0-1.5-0.3-0.4 0.2-1.5 0.4 0.1 0.9-0.4 0.7-1.6 1.2-0.4 0.6 0.3 0.7-1.1 0.9-0.2 1.3-1 0.9-0.2 1.3-0.5 0.3 0.1 1.3-1.3 1-0.2 0.8-1 1.3-0.3 1.2 0.2 0.5-0.4 0.2-0.9 1.2-0.2-0.2-1 0.6-0.4 0.7-1.1 0.1-0.6 0.7-0.2 0.9-1.4 0.8-0.2 2.4-1.8 2.1-0.9 0.1-0.5-0.3-1.7 0.4-0.6 0.9-0.4 1.4-0.1 0.6 0.2 0.9 0.6 0.2 1.2 0.6 0.3 2.5 0.1 1-0.4 0.2-2.4 1-0.3 1.4 0.6 0.2 1.1 0.8 0.2 0-0.7 0.8-0.1 0.6 1.1 0.8-0.2 0.9 0.5 0.6-0.6 0.7 0.4 0.2-0.7-0.1-1.3 1.4-0.1 0.5 0.3 0.5-0.4-0.9-0.7 0.7-1.2-1.1-1.1-1.4-0.8-0.7 0.3 0.1-1.7-0.8 0.2-0.7-0.6-1.9-0.1-0.7-1.5-0.8-0.3-1.2-0.8-1.3 0.5-0.7 0-1.8-1.4-1.3-0.6-0.3 0.4-0.7-0.4-0.2-1-1-0.8-0.7-1.1-0.9-0.8-1.4-0.1-0.2-1.2-0.9-0.5 0.4-0.7-0.9-0.6 0-0.4 1.1-1.6 1.3 0.2 0.7-0.5 0.6-0.1 0.1-0.8 1.5 0.1 0.4-0.5 0.1-1.2 0.3-0.5-0.5-0.8 0.2-1.3-1.9-0.5-1.9-0.2-0.2-0.4-0.6-0.2-0.7-0.9 0-0.4-0.9-0.2-0.3 0.4-1.2-0.1-1.5-0.4 0.1-2.2-0.1-0.4 0.9-0.3 1.2 0.5 0.3-0.8 0.9 0.3 1.6-0.7 0.1-0.7 1.2-1.9-0.1-1.1 0.8 0.1 1.6 0 0.5 0.5 1.2 0 2.4 1 0.9-0.7 0.9 0.1 3.1-0.5-0.4-0.6 0-1.1-1.3-0.3-0.5-0.1-0.5 0-0.4-0.2-0.2-1.1-0.4-0.8-0.3-0.6-0.7 0.1-0.4 0.3-0.4 0.3-0.4 0.1-0.6-1 0.5-0.7 0.3-0.6 0.1-0.6-0.1-0.5-0.2 0 0.3-0.7-0.2-0.8-0.3-0.2-0.5-0.2-0.4 0-1.2 0.7 0 0.2-0.2 0.5-0.6-0.2-0.7-0.6 0.3-0.7 0-0.4-0.3-0.1-1.1-0.1-0.2 0.4-0.2-0.2-0.4 0.2-0.6-0.5-0.3-0.3 0-0.1-0.1-0.1-0.1-0.2 0.2-0.2-0.1-0.6-0.6-0.4-0.1-0.1 0.2-0.2 0.1 0 0.1-0.3 0.3-0.2-0.2-0.2 0.1-0.5-0.2-0.2 0.4-0.2-0.2-0.5-0.3-0.6 0-1-0.4 0-1.1-0.9 0.9-0.6 0.1-0.3-0.2-0.3-0.3-0.2-0.9 0.5-1.1 0.2-0.2-0.1 0-0.5 0-0.7 0.3-0.2 0.1-0.2-0.1-0.4 0.6-0.9 0.6-0.5 0-0.1-0.3-0.9-0.4-0.6-0.1-0.3-0.5-0.4-1.3-0.4-0.2-0.1-0.2-1 0.7-0.6 0.2-0.9-0.5-0.5-0.7 0.1-1.1 0.6-0.9-0.6 0.7-0.3 0.3-0.6 1.1-0.3 0.5-0.7 0-0.5-1-0.1-0.2-1.4 2.1-0.8 0.5 0.3 1.6-0.1 1.2 0.2 0.9-0.2 0.5-1.4 0.9-0.4 0.5-1.2 0.7 0.4 0.7-0.2 0 1.2 0.7 0.4 1.2 0.2 0.1 1 0.8-0.5 0.8 0.2 0.6 0.9 0.1 1 0.5 0.7 3.5 0.6 1.7-0.1 0.9 0.6 0.6-0.1 2.7 0.4 1.9 0.4 0.7 1.2 1.6 3.2-0.4 2 0.2 1-0.2 1.6-0.4 0.6-0.6 0.4-0.2 1.1 2 0.8 1.9 0.9 0.6-0.5 0.7 0.8 0.8-0.9 1.3 0.4 0.1 0.8 1.8 0.8 0.6-0.1 1.1 0.4 0.6 0.7-0.3 0.9 1 0.2 0.2 0.7 1.3 0.1-0.5 1.2 0.5 0.4 1.6-0.4 0.7-0.5 0.8 0.2 1.9-0.1 0.2 1.1-0.6 1 0.6 1.2 0.1 0.6 0.5 0.4 0.7-0.2 0.9 0.3 2 0.2 0.5 0.3 0.8-0.7 0.6 0 1.2-1.2 0.8 0.1 0.7 0.3 1.5-0.6 0-0.6 0.8 0 0.8-1 0.8-0.1 1.4-0.6 0.5-0.6 0.7 0.8 1.3 0.3 1.4 0.9 0.4 1-0.4 3.6 0 1 0.8 1.3 0.8 0.4 1.1 0.2 0.6 0.8 0.4-0.3 0.7 0.1 0.3 1.5 1.1-1 1.2-0.6 1-0.7 0-0.7 0.7-0.4 0.8 0.2 1-0.5 1.4 0.4 0.1 0.2 1.5 0.8 0.7 0 0.6 0.8 0.6-0.3 0.7 0.1 0.1 0.8 1.2 0 0.7-0.9 1.4 0.1 0.5-0.2 1.2 0.1-0.1 0.4 1.8 0.4 0.1 0.4 2 0.7 1.5 1 1.5 0.1 0.8 1.4 2.1 0.8 0.2 0.5 2.2 0.7 0.1 0.5 0.9 0.4 0.7-0.1 0.2-0.7 0.6-0.5 2.2 0.8 0.9-0.7 0.4 0.1 0.8-0.5-0.1-0.8 1.2 0 0.1-1.1 1-0.2 0.5 0.1 1.4-0.5 0.9-1.3 0.1-0.8 0.9 0.1 0 1.7 0.3 0.7 0.4 2.8 1.6 1.3 0.8 0.4 0.8-0.4 2 0 0.7 0.4 0 1.2 1.6 0.2 1 0.8 0.6-0.5-0.1-1.1 0.4-0.7 0.7-0.4 1.4-0.2 1.3-0.7 1.7 0.4 1 0.5 0.2 0.5 1.2 0.5 0.8 0.1 1.4-0.2 0-0.4 0.9-0.4 0-0.8 1.1 0.3 0.8 0.8 0.7 0 0.6-0.5 0.2-1 0.5-0.8 1.9 1.2 0.5-0.5-0.1-0.6 1.4-0.5 0.3 0.8 0.5 0.4 0.3 1.1 1.1 0.8 0.9 0.2 0 0.8 0.6 0.4 0.7-0.2-0.1-0.6 1.8-1.5 0.5-0.7 0.3-1.1-0.3-1.9 0.3-0.7z" id="5" name="Bihar">
									</path>
									<path d="M295.5 264.2l-0.2 0.2-0.3 0.5-0.9-0.4-0.8-0.5-0.3 0.1-0.1-0.3-0.3-0.3 0-0.2-0.3-0.2 0-0.1-0.2-0.8-0.6-0.8-0.1-0.1 1-0.4 0.3-0.3 0.2-0.3 0.1-0.2 0.1-0.1 0.2-0.1 0.2-0.1 0.5 0.1 0.3 0.4-0.1 0 0.3 0.4 0.5-0.5 0.2 0.2 0.1 0.2-0.4 0.4 1.2 0.1-0.1 1.3 0.4 0.7-0.5 0.7-0.4 0.4z" id="6" name="Chandigarh">
									</path>
									<path d="M541.1 576.4l-0.9 0.1 0 0.6 1.3 0.7 0.3 0.4 0.6 0.3 0 1.2-0.9 1-0.4 1.3-1.2 0.5-1.8-0.1-0.6 0.7-1.2-0.1-0.6 0.6-0.7 0.4-0.1 0.7-0.8 0.3-0.6 0.5-0.3 0.7-0.9 0.6-1.8-0.2-1.2 0.8-0.4 0-0.9 1-0.4 1.4-1.7 2.2 1.5 1.2-0.6 0.4-1.5 0-0.2 1.2 0.5 0.6-0.5 1.1 0 0.5 0.8 0.7-0.1 0.5 1.1 0.2 0.5 0.5-1 1.5 0.4 0.7-0.3 0.8-0.6-0.2-0.9 0.1 0.2 1.4-0.5 0-1.1-0.5-0.5 1.3 0.3 1.2-1 1.7-0.8 0-0.4 0.7 0.7 0.7 1.5 0.6-0.5 0.5-0.2 0.8-0.8-0.5 0-1.1-0.9 0.4-1.1 0.9-0.5 0.6-0.2 0.9 0.2 0.8-0.4 0.5-0.5 1.9 0.3 1.5 0.7 0.3 0.4 1 0.4 0.3 0 1.4 0.3 0.5-0.9 0.3-2.3-0.9-1.3-0.4-0.1 1.1-0.4 0.5 0.1 1.1 0.5 0.2-0.2 1-0.9-0.3-0.6 0.4-0.3 0.6 0.1 1-0.3 0.8-0.6 2.3-1 0.2-1 1-0.4 0.2-1.7-0.3-1-0.4-1.1-1-1-0.4-0.5 0.1-0.3-0.8-0.5 0.5-0.7 0.2-0.7-0.2-0.8 0.5-1.3-0.5-0.9 0.2-1.1 0.6-0.8-0.6-1.3-0.1-0.7 0.2-0.5-0.1-0.8 0.2-0.9 0.1 0 0.5 0.3 1.2-0.6 0.9-0.6 0.5 0.5 1-0.6 1.1-0.8 0.7-1 1.7-2.4 1.5 0.1 1-0.3 1-0.6 0.4-0.2 0.5-0.6-0.3-0.7 0.1-0.3-0.4-0.2-0.9-0.6-0.3-0.5 0.2-0.7-0.7-0.5 1.6 0.2 1.8-0.1 1.2 0.3 1.1-0.1 1.1 0.3 0.7 0.5 0.6 0.1 1.2-0.4 0.9-0.6 0.4 0.1 0.7-0.6 0.8 0.6 0.5 0.2 0.6 1.1 0.5 0.3 2 1-0.1 0 0.7 0.4 0.4-0.2 0.6-0.5 0.3 0 0.9-0.4 0.8-0.1 0.7 0.9 1 0.2 1.1-0.7 0.5-0.1 0.9 0.3 1.4-0.2 0.8-0.8 0.7-0.1 0.6 0.4 0.9 0.1 1.1-0.1 1 0.1 0.4 1.6 0.5 1.2 0.2 0.9 0.6 1.4 0.1 1.1 0.5 0.2 0.3 1.1 0.1 0.3-0.4 0.9-0.1 1.7 0.3 0.4 0.3-0.1 1.4-0.3 1.4 0.4 2.1-0.4 0.8-1.8 0.1-0.9 1.4-1.4 0.4-0.3-1 0-0.9 0.9-1.2-1-0.4-0.8 0.1-0.5-0.5-1.1-0.1-0.7-0.6-0.6 0.2-0.6-0.3-0.9 0.3-0.9 0.5-0.7 1-1 0.9-0.4-0.3-0.3-0.8-0.7-0.9-0.1-0.5-0.9-1.7-0.2-1-1.1-0.9-0.9 0.6-0.7 0-0.6-0.5-1.2-0.6-0.5 0-2-1.4-0.3 0.5-1.2 0.6 0-0.8-0.7-0.2-0.7-1-1-1-0.3 0.1-1.6 2-0.5-0.1-0.5 0.9-0.4 1.9-0.3 0.7 0.4 0.4-0.1 0.9 0.4 0.6 1.3 0.7 2.2 0.9-0.1 0.7 0.7 1.4 0.7-0.1 1.8 0.3 0.3 0.3-0.1 1.1-0.5 0.5-0.2 1.3 0.3 1.2 0.2 1.6-0.6 1.5 0.3 0.7 0.1 1-0.8 1.3 1.3-0.1 0.3-0.4 0.8 0.2-0.1 0.6 0.4 0.7-0.2 0.5 0.8 1.3 1.7-0.2 0.5 0.6-0.3 1.3-0.3 0.4-0.9 0 0.1 0.7 1.3 0.5-0.4 1.5-0.6 0.9 0 1.6 0.3 0.5-0.2 0.4 0.6 0.5 0.2 0.9-0.3 0.9 0.7 0.6 0.6 1.4-0.5 0.7 1 1.4 0.6 4-0.9-0.1-1.5 0.8 0 0.5-0.4 0.9 0.2 0.8-0.3 1.1 0.2 0.3-0.5 0.6-1.9 0.6-0.4 1.6-1.5-0.2-0.6 0.2-0.9 0.5-0.5 0.1-0.7 0.6 0.2 0.4-0.5 0.5 0 0.9-1.1-0.2-0.7-0.7-0.2 1.2 0.4 0.1 1 0.8 0.9 0.3-0.3 1-1.6 0.1-0.1 1.1-0.5-0.1-0.7 0.5-0.4 1-1.8 1.7-1.2 1.1-0.6 2.3-3 0.3 0.1 0.8-1.5 0.5-0.8 0-0.8 1-0.7 0.4-0.7 0.1-0.1 0.9-0.7 1.8 0.6 1-0.4 1-0.1 1.3-0.9 1.6-0.2 0.7 0.1 0.9-0.1 1.1-0.7 1-0.4 0.8 0.2 0.7-0.4 1-1.4-0.4-0.2 1 0.3 0.5-0.5 0.7 0 0.7-2.4-0.2-2.1 0-2.1-1.3-1.1-0.2-2.1 1.3-0.8 1.1-0.6 0.1-0.8-0.2-0.7-1-0.3-0.7-0.3-2.8-0.4-0.3-0.4-2.5-0.3-1.4 0.1-0.4-0.6-1.7 0-1.2 0.8-0.7 0.1-0.9-0.7 0.1-0.3 0.3-1.5 0.8-1.3 0.1-0.3-0.4-0.2-2 0.6-0.3-0.2-0.7-1.2-0.2-0.3 0.3 0.1 1.2-0.7 0.9-1.2 0.1-1-0.3 0-1.7 1.7-0.9-0.6-1.2-0.8-0.9 0-0.5-0.7-1.6-0.3-1.6-0.8-0.5 0.2-0.6-0.5-0.7-1.1-0.6-0.4-0.8-0.2-0.9-0.6-0.3-0.5-0.6-2.3-1.5-0.7-1.1-0.8-0.4-1.3 0-1.6 0.7-0.7 0.5-0.5-0.4-0.9 0.7-0.8-1.3-0.8-2.3-0.9-1.2-1-1.1 0.5-0.6 0.6 0.1 0.9-1.1 0.7-0.1 0.9-0.5 0.1-0.5-0.4-1.2-1.5-1.8-0.7-0.6-0.3-0.6 0.2-1.7 0.9-1.5-0.2-0.6 0.9-0.7 0.1-0.8 0.4-0.5-0.3-0.9 0.1-0.6 0.7-0.7 1.2-0.7 0.2-0.5-0.3-0.8 0.4-1 1-0.2 0.9-0.7 0.9-2.1 0.3-0.4 1.2-0.3 0.6-1 0.9-0.8 0.5-0.1 0.4 0.8 0 0.9 0.6 1.5 0.5 0.2 1.6-0.8 0.7 0.5 0 1 0.5 0.1 1.7-0.1 0.6-0.8 2.5-1.7 0.1-0.4-1-0.6-0.2-0.5-0.7-1.1 1.6-0.6 1.1 0 0.9-0.8-0.1-1.2-0.4-0.7-0.9-0.2-0.4-0.4-0.2-0.8-0.5-0.3-1.2 0.2-0.6-0.3-0.1-0.6-1.5-0.9-2 0-0.2-0.6 0.4-2.4-1.1-1-1.8-0.7-0.4-0.6-1.1-0.7 0.2-1.3-0.9-0.7-1.4 0.1-0.6 0.6 0.5 0.3 0.3 0.8-1-0.5-1.2-0.1-0.6 0.1-0.1-0.8 1.2 0.2 0.9-0.6 0.5-1.1 0.8-0.4-0.3-0.9-0.9-0.4-0.6 0.4-1.4-0.6 0.1-0.8 0.6-0.2 0.7-0.6 0.7 0.3 0.2 0.4 1.1 0.3 0.6-0.2 0.4-1.3 0.4-0.5-0.4-0.8 0.5-2.3-0.4-0.7 0.2-0.9-0.6-0.5-2.5-0.8-0.2 0.6-0.6 0-1.1-0.5-0.3-0.5 0.3-0.9 0.6-0.2 0-0.5-0.5-0.4-0.5-1.1 1.2-0.3 1.3-0.7 1.3-0.2 0.6 0.2 1-1.3 2.6-0.7-0.5-1.9-0.6-0.6 0.2-0.7 0.4-0.8-0.3-0.4 0.3-0.6 0.3-2.6-0.1-0.8 0.4-0.4-0.3-0.9 0.4-0.5-1.5-0.3-0.7 0.1-0.2 0.4-1.1 0.5-0.7-0.1-0.6-1.1 0.2-0.8 1-0.8 2.1-0.6-0.1-0.7-0.5-0.5-0.2-1.3-0.4-0.7 0-0.9 0.4-1.1-0.2-0.9 0-1.6-0.5-1.5-2.6 0.1-0.7-1.6 0-0.8-0.5-0.6 0.7-0.8 0.1-0.7-0.4-1.8 0.7-2.7 0.6 0.1 1.2-0.5 0.4-0.7 0.5 0.2 0.9-0.3 0.3-0.4 1.1-0.4 1.2-1 0.6-1.2 0.6-0.4 0-0.4-0.6-0.8 1-1.5 0.5-1.5-0.1-0.5 0.7-0.7 0.5-0.9-0.3-0.9 0.3-1.6-0.6-0.6 0.2-0.6-0.3-0.5-0.1-0.7 0.5-0.5-0.1-0.9-0.4-1.1 0.5-0.8 0.1-1.3 0.5-1 0.7 0 0.7 0.6 1-0.3 0-0.6 0.7-1.5 0.2-0.9-0.2-0.6 0.3-0.4 0-0.7-0.5-0.4 0-0.8 0.4-0.7-0.1-0.7 0.6-1 0.6-1.4 0-0.8 0.3-1 0.5-0.2 0.2-1.3 0.6-0.7 1.2 0.3 0.5 1.1-0.1 0.9 0.5 0.4 0.7-0.5 0.2-1.2-0.5-0.6-0.6-0.2 0.5-0.6 1 0 0.1-1.2-0.2-0.7 0.4-0.5-0.3-0.6 0.1-0.6 1-0.5 1.3-0.1 0.4-1.2 0.6-0.6-0.2-1.3 0.2-0.5-0.5-1.5 0.2-1.8 0.1-0.3 1.3-0.6 0.8-1.2 0.7 0.3 0.1 0.7 1 0.4 1.1-0.8 0.2-0.8 0.6-0.2 0.8 0.7 0.5-0.3-0.1-1 0.3-0.3 1.9 0.7 0.3 2.2 0.9-0.1 0.1-0.9 1-0.8 1.2 0.1 0.4-1 0.8-0.7 1.4 0.2 0.2-0.7 1.6 0.6 0.4-0.3 0.1-0.8 0.5 0.1 0.3-0.5-0.3-0.4 0.1-0.8 1.2-1.5 0.7 0.1 0.6-0.3 0.3-0.8 0.4 0.3 0.4 0.8 0.6-1.1-0.6-1.9 1.3-1.5-0.4-0.7 0.1-0.5-0.5-1.3 0.2-0.6 0-0.8 0.9-0.3 1.3-0.1 1-0.4 0.4-0.7 1-0.7 0.4-0.6 0.9-0.3-0.1-2-0.7-1.1 0.7-1.4 1.1-0.1 0.3-0.2 0.8 0.3 0.9-0.1 1.1-1.3 1.9 0.4 0.4-0.3 0.2-0.7 0.6-0.4 0-0.7-0.5-0.1 0.2-2.4 0.9-1.5 0.7-0.6-0.1-1.4-0.9-0.3-0.8-1.2-0.8 0.3-0.3-0.3-0.2-1.3-1.4 0.2-0.3 0.5-0.9-0.2-0.3-0.3 0.3-0.6-0.8-0.1-1-0.5 0-0.8-0.7-0.7 0-1.2-0.5-0.3-0.6-1-0.5-0.1-0.8 0.6-1.8 0.3-0.6-0.4-0.4-1-1.4-0.1-0.3-0.5-0.6 0-0.8 1.2-0.5 0.3-1.3-0.3-0.2 1.1-0.6 0.4-0.5-0.1-0.4-0.6-0.1-1.6-0.8 0-0.3-1.3 1.1-0.4 0.4-2.3 1 0 0.2-0.8 0.9-0.4 0.4-1-0.5-0.7-0.1-0.7-0.8-0.4-0.2-0.4 0.1-0.9-0.6-1.2-0.5 0-0.4-0.7 0.6-0.7-0.5-0.4 0.2-0.7 0.8-0.2 1.1-0.7 0.6 0.7 0.1 0.7 0.5 0.1 0.2 0.9 0.6 0.1 0.2 0.7 1.6 1 1.3 0.2 0.7-0.5 0.7-0.1 0.3-0.4 1.1-0.3 0.8-1.1 1.1 0.7 1.7-0.3 1.2 0.7 0.4 0.9 1.1 0.1 1.3-0.2 0.6 0.1 1.2-0.2 0.1-0.5 1.1-0.6-0.2 0.8 1.1 0.9 0.8-0.5 1.5 0.5 1.7 0.2 0.7-0.3 0.7 0.4 2.1-0.4 0.4 0 0.8 0.9 1 0.1 1-0.4-0.2-0.6 0.3-0.6 1.3 0.2 0.7-0.5 0.8-0.1 0.4-0.7 0.7-0.5-0.5-0.7 0.3-0.6 0.9-0.3 0.7-0.4 1.6 0.1 0.2-0.6 0.7-0.1 0.7-0.8 0.4-0.1 0.4 0 1 0.6 0.5 0.8 0.6 0.6 1.5 0.7 0.5 0.6 0.5 0.1 1-0.2 1.8-0.2 0.9 0.3 0.8-0.1 1.4-0.4 0.6-0.8 1.5-0.4 0.8-1.5 0.1-1.1 2.1-1.2 0-0.9 0.6-1.1 1-0.9 0.8 0.1 1.3-0.1 0.5 0.7 0.9-0.1 0.3 1.1 0.5 0.5 1 0.1 1.1 0.5-0.1 0.9 0.2 1.3 0.9 1.2-0.1 0.7 0.4 0.9 0.7 0.1 0.4 1 0.7 0.3 1.9 0.4 0 0.6 0.5 0.3 0.8 0 0 0.4 0.5 0.7 0.1 0.7 0.6 0.6 0.1 1.9-0.6 0.8 1.2 1.3-0.1 0.8 0.6 0.2 0.3 0.8 1.1 0.6 0.5-0.1 3.9 0.9-0.2-1.2 0.3-1.1 1.3-0.3 0.9 0.4 0.6 0.8 0.2 1.3-0.1 0.8-0.5 1.6-0.4 0.3-0.9 1.7 0.3 0.7-0.4 1.3 0 0.7 0.5 0.5 0.8 0.3 0.5-0.9 0.8 0.1 0.2 0.8 0.7 0.8-0.3 0.8 0.1 0.6-0.5 1.9 0.2 1.7-0.4 0.4-0.5 1.2 0.2 0.6 1.1 1.1 0.7-0.1 0.9 0.9 0.4 0 0.2 0.8-0.2 1.3 0.6 1.5 0.2 0.9 0.6-0.2 0.1-0.9 0.3-1 0.7 0.2-0.1 0.4 0.7 1.1 0.7-0.2 0.5 0.4 0.6-0.3 0.3 0.6 1-0.2 0.8-0.4 1.4 0.1 0.2 0.9 0.4 0.5-0.4 1.5 0 0.9-0.7 0.5-0.9 0-0.3 0.4-0.1 1.2-0.3 0.6-0.7 0.5-0.1 0.9-0.9-0.1-1.2 1.1 0.2 1.7-0.6 0.9-0.6 0-0.5 0.6-1.1 0.5-2.3 0-1.1 1.5-1 0.3-0.5 0.6-0.2 1.1 0.1 0.7z" id="7" name="Chhattisgarh">
									</path>
									<path d="M165.1 658.2l1 0 0-0.9 0.2 0.8 0.4 0.1 0.2 0 0.4-1.2 0.4 0 0.3-0.2 0.3 0.2 0.4-0.4 0.2-0.8 0.1-0.1 0.2 0.2 0.1 0.1 0.1 0.3 0.1 0.4-0.2 1.1 0.8-0.2 0.3-0.3 1 0.2 0.1 0-0.1 0.1 0.1 0.7-0.4 0.2-0.2-0.3-0.1 0-0.1 0.2-0.1 0.3-0.2-0.1-0.1 0.4-0.2 0.3-0.8 0.6-0.2 0.2-0.2 0.4-0.5-0.2-0.4 0.2-0.3 1.1 0.1 0 0.2 1.4 0.3 0.1 0.2-0.5 0.2-0.1 0.1 0 0.3 0.5 0.3 0 0.2 0.1 0.8-1 0-0.1-0.2-0.6 0.3-0.1 0.1 0.1 0 0.1 0.9-0.3 0.3 0.3 0.6 0.1 0.2 0 0.6 0.5-0.1 0.3-0.9 0.5-0.1 0.4 0 0.4 0.5 0.6 0.2 0.6-0.1 0.6-0.6 0.5 0.1 0.6-0.5 0.3-0.3-0.2-0.2-0.3-0.9-0.4-0.3-0.3-0.3 0.3-0.1 0-0.4-0.2 0-0.1-0.2-0.1-0.6-0.2-1-0.1 0 1-0.5-0.1-1.2-1.4 0.3-0.7 0-0.2-0.4 0.1 0 0.1-0.1 0.4-0.6 0.2-0.4-0.6 0.4-1 0-0.2 0-0.3 0-0.2-0.3-0.1-0.2-1.2 0.1-0.1-0.3-0.8-0.7-0.3-0.8-1.1 0.1-0.1 0.5-0.4 0.4-0.1 0.6 0.6 0.4 0.2 0.3-0.2 0.1-0.6z" id="8" name="Dadra and Nagar Haveli">
									</path>
									<path d="M160.8 651.8l-0.5 0.5-0.4 0.6 0 0.7 0.2 0.1 0.2 0.1 0.6 0.2 0 0.1 0.2 0.4 0 0.5-0.2-0.4-0.6-0.6-0.3 0.3-0.4 1.1-0.3-0.1 0.2-0.5 0-1.8 0.5-0.9 0.8-0.3z m-65-9.6l1.2 0.6-0.7 0.4-2-0.2-0.9 0 0.4-0.6 0.9-0.2 0.6-0.1 0.5 0.1z m-3.7-0.8l-0.5 0.8 1.1 0.4-0.1 0.5-1.4-0.1-0.4-0.2-0.8 0.1-1.2-0.4-0.5 0.1-1.8-1-0.5-0.8 0-0.1 0.3-0.5-0.1-0.6-0.2-0.6 0.1-0.9 0.5-1.5 0.8-1 0.1-0.9 0.4-0.9 0.3-0.6-0.2-0.4 0.3-0.1 0.4 0.6 0.5 0.4 0.1 0.1 0.2-0.2 0.5 0.2 0.5-0.1 0.6 0.1 0.7-0.4 0.2 0.3 0.4 0.1 0.6 0.2 0.3 0.7 0.4 1.2 0 0.6-0.6 0.5-1.5 0.6 0 0.7 0.4 0.2 1.3 0 0.3 0.6-0.1 0.8-1.1 0.4 0 0.7-0.3 0.4z" id="9" name="Daman and Diu">
									</path>
									<path d="M308.6 338.3l0.1 0.3 0.4 0.3 0.2 0 0.3 0-0.1 0.3 0.3 0.3 0.6 0.5 0.2 0.2 0.1 0.5 0.4 0 0.1 0.1 0.5 0.7 0.3 0.4 0.1-0.1 0.7-0.2 0.2 0.2 0.2 0.8-0.4 0.8-0.2 1 0.9 0.9-0.3 0.7-0.6 0.2-0.6 0.6 0 0.2 0.3 1.1 0.4 0.3 0.6 0.7 0.2 0.3-0.3 0.3-0.5 0.6-0.4 0.1-0.8-0.3-0.9 0.5-0.7 0.4-0.2 0.4 0.6 0.7-0.1 0.7-0.9 0.5-0.7 0.1-1 0.2-0.4-0.8-0.7-0.4-0.7-0.4-0.3-1.3 0.2-0.4-0.6-0.5-0.6-0.5-0.2-0.1-0.4 0.3-0.3 0-0.2-0.2-0.8-0.5-0.1 0-0.5-0.4 0.4 0.7-0.2 0.4-1-0.4-0.3-0.1-0.8 0.5-0.4-0.1-0.8 0.1-0.6-0.1-0.4 0.3 0-0.6-0.7-0.7-0.8-0.6-0.1-1 0-0.3 0.7 0 0.8-1.8 0.5 0.2 0.6-0.2 0.3-0.6 0.1-0.6 0.7-0.3 0.2 0 0.1-0.7-0.3-0.9 0.3-1.1-0.4-0.5 0.3-0.6-0.4-1.2 0-0.2 0.2-0.4 0.2 0.1 0.3-0.5 0.8-0.3 0.1 0 1.7 0 0.2-0.6 0.4-0.8 1.1 0 0.6 0.1 0.3 0.2 0.7 0 0.2 0.5 0.5 0.2 0.5-0.5 0.6-0.1 0.4-0.1 0.4 0.1 0.4 1.1-0.1 0.9-0.7 0.4z" id="10" name="New Delhi">
									</path>
									<path d="M203.8 824.9l0.6 0.1 1.1-0.2 0-0.6 0.7 0.2 1 0.5 0.2-0.6 0.8 0.4 0.2 1.1 0.3 0.3-0.1 0.9-0.4 0.9 0.6 0.4 0.5 1-0.1 0.5-0.9 0.8 0.9 1.6-0.3 0.7 0.5 1.5 0.6 0 0.7 0.5-0.1 1.3 0.6 1.3-0.3 0.4-1-0.1-0.9 0.4-0.5 1.2 1.3 0.4 0.7 1.6-0.4 0.8-0.7 0.6 0.1 0.9-0.4 0.6 0.2 1.2 0.6 1-0.5 0.3 0 0.3-0.2 0.3-0.4 0.6 0.1 0.8-0.3 0.3-0.1 0.3-0.4-0.1-0.2 0.1-0.1 0.4-0.8 0.5-0.5 0.2 0-0.4-0.2-0.2-0.4-0.3-0.6 0.2 0 0.2-0.1 0.1 0.3 0.8 0 0.2-1-0.3-0.4 0.1-1 0.4-0.2 0.3-1.9-0.8 0.2-1.4-0.5-1.5-0.5-0.4-0.9-0.2-0.3-1.2-0.6-0.5-1.2-0.5-0.3-1.1 0.6-0.3-0.1-0.5 0.4-0.5-0.7-2.7-0.7-2.4-0.7-2.1-0.5-0.7-1.1 0.4-0.2-0.4-0.9-0.2-0.2-0.7-0.4 0.1-0.3-0.7 1.2 0.3 0.9-0.2 1.3 0.4 0.5-0.6-0.3-0.5-0.9 0-0.4-0.8-0.5 0.1-1.2-0.4 0.2-1.2-1.3 0.1-0.4-1.9-0.8-1.6 0.8-0.9-0.8-0.1-0.3-0.4-0.4-1.4-0.8-1.8-0.3-0.1 0.4-0.1 0.5 0.2 0.4 0 0.8 0.1 0.2-0.5 1 0 0.3 0.3 1.2-0.6 0.4 0.1 0.2-0.8 0.9-1.3 0.8 0.9-0.3 0.7 1 0.3 1.3 0 0.4 1.1 0 0.5 0.5 0.4 0.1 0.9-0.2 0.6 0.2 0.5 0.9 0.7 0.9 0.2 0.4-0.6 1.4-0.2 1.5-0.8z" id="11" name="Goa">
									</path>
									<path d="M92.7 642.6l-1.1-0.4 0.5-0.8 0.6 1.2z m61.6-15.9l0.9 0.3-0.1 1.4-0.8 0.1-0.4-1.6 0.4-0.2z m1.6-18.8l0.8 0.3 0 0.4-0.8 0.2 0-0.9z m-105.7-29.2l0.5 0.3 0.4 0.7-0.6 1-1.4-0.7 0-0.8 1.1-0.5z m-11.1-0.5l0.9 0.4-0.3 0.4-0.9-0.3 0.3-0.5z m0.8-2l0.9 0 0.4 0.6-0.6 0.3-1-0.6 0.3-0.3z m20.3-1l0.4 0.3 0.3 1-0.8 0.3-0.7-0.1 0.1-1.2 0.7-0.3z m3-1.4l0.6 0.2 0.1 0.7-0.7 0.5-1.5 0.3-0.2-0.5 0.3-0.7 1.4-0.5z m15.1-17l-0.4 1.1-0.5 0.8-0.4-0.6 1.3-1.3z m-64.6-9.8l0.2 0.5 1.5 0.1 0.2 0.9-1.4 0.5-0.1 0.4-1-0.6 0-0.7 0.6-1.1z m-1.8-1l0.8 0.2 0.2 0.7-0.8 0-0.2-0.9z m2.9-1.2l0.9 1-0.8 0.3-0.8-1.3 0.7 0z m-2.9-3.1l0.5 0.8-0.5 0.2 0-1z m-1.1-0.9l0.7 0.9-0.3 2-0.6-0.1-0.3-1 0.1-0.8-0.9 0.5 0.3-0.9 1-0.6z m0.3-4.3l0.1 0.8-0.6 0.9-0.9 0.6-0.2-0.7 0.5-0.4 0.6-1 0.5-0.2z m-0.9-1l0.4 0.8-0.9 0-0.2-0.5 0.7-0.3z m-3.3-6.8l1.3 0.8 1-0.4-0.4 1.6 0.1 0.9-0.9 2.7-1.1 1.1-0.4 1.1-1.8 0.7-1-0.9-1.6 0.4-0.8-0.5-0.3-0.7 0.7-0.7 2.1-0.3 0.4-0.7 1.1-1.2 0.1-0.5 0.8-0.7-0.1-0.9 0.8-1.8z m-1.7-0.7l0.4 0.8-0.2 1.4 0.3 1.2-0.8 0.2-1.1 0.9-0.4-0.4 0.3-0.4 0.1-1-0.1-0.3 0.4-1.4 0.7-0.2-0.1-0.6 0.5-0.2z m6.4-0.2l0.4 0.2 0.5 0.8-0.4 0.5 0.2 0.4 0.2 0.2-0.2 0.7-1 0.7-0.8-0.3-0.9 0 0.6-1.1-0.3-1.2 0.4-0.4 1.3-0.5z m-3.4-1.8l0.7 0.3 0.7 1.3-0.5 0.9-0.8 0.8-0.7-0.2-0.3-0.5-0.6-0.1-0.4-0.9 1.1-0.9 0.1-0.5 0.7-0.2z m-5.1-0.1l0.1 0.7-0.6 0.7-0.6-0.2 0-0.7 1.1-0.5z m6.9-2.1l0.2 0.1-0.2 1.6 0.1 0.4-0.9 0.6-0.3-0.3-0.7-0.2-0.6 0.1-0.2 0.3 0 0.3-0.6 0-0.2-1.2 0.2-0.4 1-0.1 1.2-0.6 0.2-0.5 0.8-0.1z m2.9-0.3l0.3 0.4 0.5 0.1 0 0.1 0 0.2 0.1 0 0.9 0.1-1.6 2-0.7 0.4-1-0.4-0.1-0.9 0.9-0.4 0.6-0.5 0.1-1.1z m-1.8-1.8l0.7 0.8-0.2 0.5 0.7 0.6 0 0.7-1.1 0.9-0.4 1.4-1 0.5-0.4-0.2 0.7-1 0.1-1.8 0.2-0.2-0.5-0.2-0.6 0.1 0.6-1.6 0.6-0.5 0.6 0z m-1.8-0.1l0.3 0.3-0.2 1.1-0.5 0.9-0.5 0.5-1.8 0.5-0.3 0.7 0.2 1.1-0.4 0.8 0.1 0.7-0.8-0.2-0.3 0-0.4 0.2 0 0.6-0.7 0.2-0.4 1.4 0.1 0.6-0.3 1.2 0.4 0.6-0.4 0.6-0.6 0-1.1-1-0.5-0.9 0.5-0.9 0.7-0.3-0.6-1.8 0.2-0.9 0.7 0 0.6-0.9 0.2-0.8 0.5-0.7 0.3-0.8 1.5 0.3 0.5-0.4 0.2-1.5 0.9-0.8 0.5 0.8 0.4-0.1 1-1.1z m201.3 34.8l0.1 0.7 0.8 0.5 0.2 1 0.5 0.8-1 0.6 1.4 2 0.6 0.4 0.6-0.7 1.1-0.2 0.4 0.4 0.6 2-0.5 1.6-0.9 0.3 0 0.8-1.2 2.1-0.2 1.4-0.4 0.8-0.1 1-0.6 0.3-1.3-0.3-1.1 0.1-0.6-0.3-0.7 0.5 0 0.4-0.7 0.4-0.3 1.1-0.5 0.6-0.5-0.1-0.2 0.6-1.2 0.8-0.1 0.6-0.9-0.3-1.5-0.9-0.6-0.1-0.7 0.3-0.1 1 1.4 0.3-0.2 1.6 0.8-0.2 0.1 1.4 0.6 0.4 0.6-1.2 0.6 0.5 1-0.1-0.1-0.8 0.7-0.1 0 1.1 1.1-0.1 0.9 0.6 0.4 1.2-1.2 0.6-0.4 0.6-1 0.6-0.2 0.8-2-0.4-0.2-0.8-0.5-0.7-0.6 0.4-0.8 0.1 0.1 0.7-0.2 0.4-0.3 1.6 0.6 0.7-0.1 1.7 1.3 0.1 0.3 0.2 0.1 1.7 0.3 0.2-0.2 1.1 0.2 1.3 0.7-0.3 0.5 0.1-0.2 1.5-0.9 0.3-0.4 0.6-0.8 0.7 0 0.6 1.8 0.6-0.4 0.6 0.1 0.5-3.4 1.2-0.8 0.6-1.5 0.7-1.9 1.1-0.8 0.1-0.7 0.6-1.3 0-1 0.6 0.5 0.4 0.6 1.4-0.4 0.4 0.5 0.7 1.5 1.2 0.2 0.4 0.1 1.2-0.5 0.8-0.8 0.1-0.6 0.3-0.5-0.2-1 0.2-0.4 0.3 0.6 0.9 0.6 0.1 0.4 1.7 0.5 1.5 0.4 0.6 2.6-0.9 0.1 0.4 1.2-0.5 0.3-0.7 0.7 0 0.7-0.4 0.7 0.1 0.8-0.3 2.3 0.1 1.7-0.2 0.7 1.1 1.1-0.7 0.6 0.5 0.5 0 0.7-0.8 0.7-0.3 0.1 0.8 0.7 0.2-0.3 1.6-0.7 0.6-1.2 0.1-0.3 0.4-1.4 0.2-1.2-0.3-0.9 0.5-0.7-0.3-0.6 0.5-1.4-0.3-0.4-0.9-0.4 1-0.2 1-1.4 0.5-1 0.6-0.7 0.2-0.2 0.6 0.1 1.1-0.3 1.8-0.5 0.4-1.5 0.8-1.1-0.2-0.9 0.1 0.1 0.9-0.5 0.7 0.1 1.9-0.9-0.4-0.6 0.6-1.3-0.1 0.2 0.6-0.4 0.5-0.8-0.4-1.1-0.1-1.5 0.7 0-0.7-0.6-0.2-0.4-0.8-0.6 0.4 0 0.5 0.8 0 0.6 1.3 0.9-0.1 1.3 0.8 0.5-0.5 0.9 0.4 0.3 0.8-0.1 0.9 0.2 0.6 0.6 0 0.7 0.7 0.8-0.1 0.3 1 1 0.1 2 0.4-0.3 1.8 0.7 0.7 0.5 1 0 1.4 0.5 0.3-0.2 1.1 0 1.5 0.3 1-1 0.7-1.1-0.3-0.4 0.3-0.4 1-0.7-0.3-0.7 0.3 0.1 0.8 0.5-0.1 0.2 0.7 0 1.2-1.4 0.8-0.6 0-1.4 1.3-0.3-0.3-1.3-0.1-1.2 0.5-1-0.6-0.5-1.7-1-0.7-1-0.1-0.6-0.8-0.5-0.1-1.1 0.7-0.4-0.8 0.4-0.4-0.5-1.1-0.9 0.1 0 0.8-0.6 1-1.2 0.5-0.1 0.3 0.9 0.7 0.4 1 1.4 0.5 0.2 0.7-0.2 0.7 0.7 0.1-1 1 0.1 0.7-0.9 1-0.9 1.9-0.8 0.6-0.2 0.9 0.7-0.3 0.4 1.6 0 0.6 0.4 1.5-0.4 0.1-0.2 0.8 0.3 2-1.8 0.2-2.2-0.4-0.6 0.5 0 1.4-0.9 0.6-0.1 0.4-0.9-0.1-0.7 0.3-0.2-0.1-0.5-0.6 0-0.4 0.1-0.4 0.9-0.5 0.1-0.3-0.6-0.5-0.2 0-0.6-0.1-0.3-0.3-0.9 0.3 0-0.1-0.1-0.1-0.3 0.1 0.2 0.6 0 0.1-0.8 1-0.2-0.1-0.3 0-0.3-0.5-0.1 0-0.2 0.1-0.2 0.5-0.3-0.1-0.2-1.4-0.1 0 0.3-1.1 0.4-0.2 0.5 0.2 0.2-0.4 0.2-0.2 0.8-0.6 0.2-0.3 0.1-0.4 0.2 0.1 0.1-0.3 0.1-0.2 0.1 0 0.2 0.3 0.4-0.2-0.1-0.7 0.1-0.1-0.1 0-1-0.2-0.3 0.3-0.8 0.2 0.2-1.1-0.1-0.4-0.1-0.3-0.1-0.1-0.2-0.2-0.1 0.1-0.2 0.8-0.4 0.4-0.3-0.2-0.3 0.2-0.4 0-0.4 1.2-0.2 0-0.4-0.1-0.2-0.8 0 0.9-1 0-0.1 0.6-0.3 0.2-0.4-0.2-0.6-0.6-0.4 0.1-0.5 0.4-0.1 0.1 0.8 1.1 0.7 0.3 0.3 0.8-0.1 0.1-1.5-0.4-1.5-0.1-0.4 0.6-0.7 0.1-0.6 0.8-0.2 1-0.9 0.3-0.5 0.7-1.7-0.2 0.3-2.3-0.2-1.7 0.3-0.4 0.2-1.3 0.7-0.4 0-1.1 0.5-0.6 0.6-0.1 0.5-0.7 0.3 0.1 0.4-1.1 0.3-0.3 0.6 0.6 0.2 0.4 0-0.5-0.2-0.4 0-0.1-0.6-0.2-0.2-0.1-0.2-0.1 0-0.7 0.4-0.6 0.5-0.5-0.1-0.4 0.7-0.7 0.1-0.6 0-1.3 0.4-0.9-0.4-2.4-0.4-0.5-0.8-2.9 0.6-0.5-0.4-0.7-0.8-0.6 0.2-0.6-0.5-0.6-0.2-0.7-0.9-2.3-0.2-0.9-1.1-0.8-0.7-1.8-0.4-1.6 1-0.9-1.6-0.4-0.2-1 0.3-1 0.3-0.5-1.2-0.6-0.6 0.1-0.1 0.6-0.1 1.8-0.2 0.4-0.9-0.4-0.2-2 0-2.9-0.8-1-0.2-1 0.1-1.3 1-1.2 0-1.1 1.4-1.9-0.4-0.3 0-1 0.4-0.6 0.4-1.5-0.2-0.6-0.9 1.1-0.6 0.2-0.9-1.6 0.2-1.3 0.8-1.4 0.7 0 0.8-0.4 1.1-0.8 0.6 0.4 0.9-0.1 0.1-0.3 1.2 0.2 0.4-0.6-1.3-0.3-0.8-0.7-0.9 0.4-3.9-0.1-1.3 0.8-0.4 0-0.8-0.8-0.1-1.2 0.8-1.1 0-0.7 0.3-1.1 0.5-1.2-1.1-0.8-0.4-0.1-0.2-1.5-0.3-0.3-0.2-1.4 0.2-2.1 0.3-1.3 0.3-1.8 0.7-2.7 0.8-1.4 1.1-0.9 1.6-0.1 1.7 1.2 2 0.3 0.6-0.7 0.8-1.6 0.7-0.4 1.7 0.9 1-0.3 0.5-0.5-1.6 0.1-0.5-1.4-0.3-0.1-1.1 0.7-1.7 1.2-2.4-0.2-1.1-1.2-0.7-0.5-1 0.2-1.2 0.9-0.5-0.2-0.6 0.6-0.6-0.1-0.5 0.5-0.7 1.3-0.5-0.1 0.7-1.6-0.8 0-1.2-2.2-1.6-0.4 0.5-0.5 0-0.9-0.8 0.6-0.1 1.1 1.2 0.2 0.1 0.6-0.1 1.2 0.2 0.9-0.6 0.9-0.8-1.1-0.6 0.3 0.2 0.9 0.9 0.6-0.1 0.9-1-0.6-0.1 0.9-0.5 0.6-0.6-0.5-0.4 0.4 0.4 0.5-0.3 0.8-1.2 5-0.7 0.2 0.1-0.7-0.4-0.3 0.3-1.2-0.5-0.5-0.1-0.6 1.5-0.9 0.6-0.1-0.1-1.1-0.9 0.5 0.1 0.5-1.3 0.7-0.3 0.5-0.6 1.8 0.6-0.2-0.4 2.1 1.3 2.1 0.1 3.9 0.4 1-0.8 0.2 0.4 1 0.7 1.3 0.2 0.8 0.6 0.8 0.1 0.6-1.3 2.1-0.1 1.1-0.5 1.8-0.9 1.9-1.8 1.9-0.2 0.5-1.1 1.2-0.8 1.5 0 0.6-1 1.5 0.3 0.6 0.7 0.3 0.2 0.7-2 1-0.3 0.5-1.3 0.5 0.4-1.3-1.2 0.9 0.1 0.5-1.3 0.9-1.2 0.3-4.1 1.9-0.3 0.7-0.8 0.7-1.5 0-1.4 0.9-0.5-0.1-0.9 0.3-0.1 0.6-1.3 0.3-2.3 0.8-0.7 0-0.1 1-0.5 0-0.5 1-1 0.3-0.4 0.5-1.4 0.1-0.8 0.4-1.7 0.3-3 1.5-0.8 0.1-0.3 0.5-1.4 0.3-0.4 0.8-1.3-0.1-0.9 0.2-0.2 0.6-1 0.3-0.5-0.3-1.3-0.1-0.2-0.2-1 0.6-0.5-0.1-0.6 0.1-0.9 0.2-0.4 0.6-0.1 0-0.5 0 0-0.7-0.7-0.9 0.3-0.4 0-0.7 1.1-0.4 0.1-0.8-0.3-0.6-1.3 0-0.4-0.2 0-0.7 1.5-0.6 0.6-0.5 0-0.6-0.4-1.2-0.3-0.7-0.6-0.2-0.4-0.1-0.2-0.3-0.7 0.4-0.6-0.1-0.5 0.1-0.5-0.2-0.2 0.2-0.1-0.1-0.5-0.4-0.4-0.6-0.3 0.1 0.2 0.4-0.3 0.6-0.4 0.9-0.1 0.9-0.8 1-0.5 1.5-0.1 0.9 0.2 0.6 0.1 0.6-0.3 0.5 0 0.1-0.1 0.3-0.9-0.1-2.1-0.7-1.2-0.8-1.7-0.7-0.8-0.6-0.5 0-1.2-0.8-1.1-1.2-1-0.2-3.6-2.6-4-3.6-0.3-0.4-1.2-0.9-1.3-1.4-1.1-1.3-0.7-0.7-2.9-3.4-1.4-1.8-3.8-4.7-2-2.2 0.6-0.5-0.1-0.5 0.7-0.3 0.6-0.6 0-0.6-0.5-0.5-0.2-1-0.7 0.2-0.9-0.5-0.2 0.6 0.7 0.7-0.3 0.7 0.7 0.8-0.3 1.1-0.3 0-1.1-1-2.5-2.6-0.6 0-1.8-1.6-2-2.2-1.3-0.9-1.1-1.2-0.9-1-0.8-0.5-3.2-2.9-1.6-1.7-2.9-3.4-1.3-1.5-1-1.1-1.5-1.8-1.2-1.4-0.9-1.3 0.1-0.5-0.7-1.9 0.2-0.7 0.5-0.1 0-1.2 1-1.7 0.8-1 2.4-1.4-0.2 0.9-1 0.8 0.9 1.4 0.4 0.1 0.9-0.7 0.5 0.4 0.9-0.1 0.7-0.7 0.7 0 0.3 1.1-0.7 0.6-0.4 1.1-0.2 1.5 0.3 0.4 1.2 1.1 1.1 0.2 0.7-0.4 1.1-0.2 1.5-1.1 0.2-0.9 0.9 0.3 1.9 0.2 1.1-0.7 0.4 0.2 0.8-0.3 0-0.7 1.1-0.8-0.2-0.6 0.2-1.2 1 0.8 0.3 1.4 0.5 0 0.9 0.7 0.6 0 0-0.7 0.9 0.4 0.3-0.1 0.4-1.3 1.2 0-0.3-1 0.4-0.5-0.4-0.6 1-0.4 0.7 0.2 0.2 1 0.5-0.1 1.1 1.1 0.4-0.1 0.6-0.8 0.2-0.9 0.4-0.2 1.2 0.3 0.6-0.6 0.6-0.1 0.1-0.8 0.7-0.9 0.3 0.1 0.1-0.6 1.3-0.6 2.1-0.4 0.7 0.2 2.4 0 0.9-0.1 1-1.3 0.2-1.1 0.7-0.5 0.9-1.5-0.2-1 0.5-0.3 0-0.8 0.6-0.2 1-0.9 0-0.5 1.3-2.2 0.1-0.7 1.5-2.3 0.9-0.3 0.4-0.5 0.2-0.9 0.9-1.1 0.5-1 0.8-2.3-1.6 0.4-0.6 0.3-1.1 1.1-0.1 2.4-0.4 0.6-1.3 0.6-0.8-0.3-0.6-0.5-0.6 0.2-1.2-1-0.7-0.2-0.2 0.7-0.5 0.3-1.1 0-1.3 0.4-0.3 0.6-0.8 0.6-4 0.3-1.3 0.3-1.6 1-1.3-0.3-1.7 0.8-0.7 0-1.5 1.2-0.2 0.9-1.1 1.6-0.1 0.5-1.3-0.7-1.8-0.4-0.8 0.3-1-0.4-0.5-0.6-1-0.1-1.7 0.6-1-0.3-1.9-1.2-1.5-0.3-0.9-0.4-1.8 0.3-1.5-0.4-0.9-0.1-1.6-1-0.8-0.4-0.6-0.5-2.2-1.5-1.9-1-1.5-0.9-1.3-1-0.8-0.3-2.4-1.7-1.7-0.6-0.9-0.9-1.9-1.4-0.8-0.4-1.1-1.3-1.4-1.3 1-0.3 0.9-1.4-0.3-1.1 1 0-0.9-0.8 0.1-1-0.8-0.6-0.3-0.7-0.5 0.2-0.3-0.6-0.5 0.4-0.3-1.5-0.8-0.1-0.1-1-0.8-0.5-0.1-1-0.5-0.5 0.3-0.4-0.3-1 0.1-0.6-0.2-1.5 0.2-0.4-0.2-1 0.4-0.8 0.6-0.2 0.4-1 0.6-0.3 0.3-0.8 1.4-0.5 0.3-0.7 0.9-0.3 1-1.7 0.8-0.6 1.5-0.4 0-0.9-1.9-0.3-0.9 0.9-1.7-0.1-0.7 0.7-0.4 0.9-1 1.5-0.3 0 0-0.5-0.3-0.4 0-0.4 0.3-0.3-0.1-0.6 0.9-0.9 0.8-1.5 1.4-0.8 0.2-0.5-0.4-0.7-0.7-0.2 0 0.7-0.3-0.1-0.7 0 0.1-0.2-0.1-0.1-0.5-0.1-0.2-0.4 0.3-0.7 6.9 0.1 0.1-1.4 0.3-1.4 0-2.4 0.1-6.9 0.3-0.4 1.9-0.5 0.4 3 0.3 0.8 1 0.4 0.7-0.1 0.8-2.2 0.9-0.7 0.8 1.5 0.5 0.4 1-0.1 2.4-1.5 1.1 0.2 0.7 0.4 2.1 0.7 1-0.6 1.6-0.7 1.2-0.3 1.7 0.4 0.7 0 1.7-0.3 2.4 0.7 2.7-0.6 0.7-0.2 0.6 0.6 2.2 2.1 1.4 1.1 3.5 0.3 2.9 0.1 2.3 0 1.6-0.2 0.8-0.5 1-1.2 1.1-2.6 1.4-0.6 2.9-0.6 2.1-0.9 1-0.3 1.5-0.2 3-1.2 0.8-0.2 1.7-0.7 1.5-0.4 1.2 0.7-0.6 1.6-0.7 0.6 0.3 1-0.3 0.7 0.5 0.5-0.5 0.7 0 0.5 0.7 0.5 0.7 0 1.4 0.5 2.4 0.2 2.8-0.1 1-0.4 0.6-0.5 1.4-0.4-0.3-1.2 1.3-1 1.2-1.1 1.3-0.5 0.5 0.5 1.2 0 0.7-0.4 0.7-0.9 1.2-0.4 0.4-0.8-0.6-0.7-0.8-0.2-2.2 0.1-0.8-0.3 0-0.9 0.3-2.1-0.6-0.7 0.2-1-0.1-1.2 0.7-1.2 0.9-0.3 1.3-0.8 0.7-0.8 0.5 0.5 1.7 0.7 1.3 0.4 1.1 0.5 0.7 0.2 1.3 0.5 0.9-1.3 1.1-0.5 0.3 1 0.5 0.3 1.4-0.7 1-0.7 0.8-0.2 0.5-0.4 1.6-0.2 0.5 0.3 1.1-0.2 0.5 0.5 0.6-0.3 1 0.7 0.6 0.7 1.8-0.8 1.1 0 1.3-0.5 0.9 0.3 0.2 0.5-0.2 1 1.2 0.2 0.7-0.3-0.2-1 0.3-0.8 0.8 0.2 0.6-0.1 0.5 0.2-0.2 0.6 0.5 0.8 1.1-0.5 0.9-0.7 0-0.7 1.6-0.7 0.4-0.4 1.1 0.3 0.3 0.9-0.3 0.8 1.1 0.7 1.2 0 0.4 0.7 0.8 0.2 1-0.4 0.5-0.5 0.6 0.5 0.9-0.1 1.4 0.5 0.9-0.5 0.4 0.2-0.4 0.9-0.9 0.3-0.5-0.5-0.8 0-0.9 0.7 0.7 1.1 0.6-0.3 0.2 0.8 1.3-0.2 0-0.5 0.9 0.2 0.9 1.9 1.2-0.3 0.7 0.2 0.2 0.4-0.4 1.2 0.7 0.8 0.3 1.2 0.8 0.1 0.7-0.5-0.3-1.2 1.4-2.1 1.1 0.7 0.5 0.6 2.4 0.6 1.2-0.2 0 1.6 0.5 1 0.8 1.1 2.9 0.1 0.5-0.2 1.3 0 1.1 0.5 0.8 0.9 1.8-1.2 0.4-0.6-0.8-0.6 0.9-1.1-0.4-1.1 1.1-1.2 0.3 0.6 1 0 1.5-1.1 0.4 1.4 0 1.4-0.7 1 0.9 0.3 0.5 0.6 1.2 0.7 0.6 0 1.1-0.9 0.7 0.4-0.7 1.1-0.8 0-0.1 1-0.4 0.3-1-0.3-0.2 1.1-0.8 0.6-0.8 1.6-0.3 1.3 1.2 1.2 0.2 0.5 0.8 0.7 0.8 0.4 1 0.1 0.8 0.4-0.8 2 1.8 1.2 0.8-0.6 0.5 0 0.6-0.9 0.6-0.4 0.3-0.7 0-1.3 1.2 0.1 0 1 0.9 0.5 0.6 0.8-0.1 2 0.4 0.9-0.1 1.9-0.8 0.3-0.3 0.4-0.9 1.9 0.4 1.2-0.4 1.1 0.5 1 0.8-0.7 0.7 0.2 0.4 0.6 0.7 0.4 0.1 0.5 0.6 0.5 0.2 0.6 0.8 0.1 0.3 0.4-0.3 2.3 0.4 0.7 0.5 0.2 0.9-0.8 0.6-0.8 1.6 0.1 0.8 0.7 0.6 0.3-0.3 0.6 0 1.2-0.4 0.5-0.1 1.1 0.8 0.7-0.5 0.6-0.4 1.7 0.7 0.4 0.5-0.4 1.2-0.1 0.5 1.3 0.5-0.2 1.1-1.2 0.6 0.8 1.5-0.4 1.4 1.9 0.4 1 0.5 0.6 0 0.6 1.5-0.2 0.3-1.2 0.5-0.3 0.8 0.8 0.2 0.9 1.4 0.1 0 0.5 0.6 0.9 1.4-0.1 0.6 0.2 0.2 0.6 0.8 0.5 0.1 1.4-0.5 0.7 0.1 1.1 0.6 0.1 0.3 0.6 1 0.2 0.2-0.7 0.6-0.7 1.5 0.5 0.7 0.8 0.6 1.4-0.2 0.9 0.9 0.5 0.5 0.7z" id="12" name="Gujarat">
									</path>
									<path d="M321.6 276.1l0.6 0.6-0.8 1.3 0.1 1-1.4 1-0.4 1.1-0.8 1-0.8 1.8-0.9 0.8-0.8 0-0.4 0.9 0.1 1.4-0.7 0.6-0.7 0.1-1.4 1.1-1.2 0.2-0.9 0.4 0.1 0.6-0.8 1.8-1.6 2.3-0.5 0.3-0.3 0.8 0.1 1.1-0.5 1.1 0 0.7-0.4 0.5-0.1 0.9-1.2 0.7-0.2 1 1 1.3 0 0.6-0.5 0.2-0.2 0.6 0.3 0.9-0.7 0.4-0.8 1.8 0.6 1 0.2 0.9-0.8 0.8 0.4 0.8 0.6 0.4 0.3 0.7-0.2 1.1 0.7 0.6-0.5 0.8 0.5 1.5-0.7 0.2 0.1 1.1 0.9 0.2 0.2 1.1-0.8 1.7 0.5 1.4-0.6 0.4 0.5 1.8-0.5 1.1 0.4 0.7-0.5 1.3 1.1 0.9 0.2 1.2 1 1 0.8 0.6-0.8 1.8 0 0.6 0.5 0.4-0.3 0.6 0.7 0.8-1.2 0.4 0.2 0.9-0.2 0.1-0.6 0.1-0.5 0.5-0.5-0.2-0.2-0.5-0.7 0-0.3-0.2-0.6-0.1-1.1 0-0.4 0.8-0.2 0.6-0.9 0.1-0.8-0.1-0.1 0-0.8 0.3-0.3 0.5-0.4 0.5 0.2 0.4 0.2 0.8-0.3 0.6 0.4 0.5-0.3 1.1 0.3 0.9-0.1 0.7-0.2 0-0.7 0.3-0.1 0.6-0.3 0.6-0.6 0.2-0.5-0.2-0.8 1.8-0.7 0 0 0.3 0.1 1 0.8 0.6 0.7 0.7 0 0.6 0.4-0.3 0.6 0.1 0.8-0.1 0.4 0.1 1.1-0.4 1 0.4 0.2-0.4-0.4-0.7 0.5 0.4 0.1 0 0.8 0.5 0.2 0.2 0.3 0 0.6-0.2 0.6 0.5 0.6 0.5-0.2 0.4 0.3 1.3 0.7 0.4 0.7 0.4 0.4 0.8 1-0.2 0.7-0.1 0.9-0.5 0.1-0.7-0.6-0.7 0.2-0.4 0.7-0.4 0.9-0.5 0.8 0.3 0.4-0.1 0.5-0.6 0.3 0 0.8 0.4 0.5 0.9 0.8 0.2 0 0.5 0.9 0.1 0.4 0.9 1.3 0.7-0.2 0.8 0.6 0.5 0.3 0.9-1 0.6 1 1.3-0.1 1.1-0.7-0.1-0.2 0.5 1.6 0.6 0.9 0-0.1 0.5-0.7 0.4 0.2 0.9 0.5 0.6-0.2 0.8-1.1 0.3 0 1.6-0.9 0.7-0.1 0.7 0.5 1-0.2 0.4 1 1.1 0.2 0.4 0.8 0.7-0.9 0.8 0.9 0.3 0 0.6-0.6 0.7-1.7-0.1 0.2 0.8-0.2 0.7-0.9 0.6-0.7-0.6-0.7 0.5 0.4 0.9-1.4-0.2-1.1 0.2-0.9 1.1-1.3 0.9-1.4 0.8-0.4-0.4-1.2-0.1-0.5-0.7-0.8 0.2-0.1 1-1.6 0-1-0.9-1.1-0.4-0.5 1.3 0.9 1 0.7 0.1 0.2 0.8-0.8 0.3-0.7-0.7-1.3 0.2-0.5 1.4-0.3 1.9-1.3-0.7-0.8 0.7-0.6-0.9 0.8-0.8-0.9-0.7 0.2-2.6 0.4-0.8-0.2-0.6 0.2-0.5 0.7 0 0.1-0.8-0.1-1.5 0.4 0 0-0.9-0.7-0.3 0.2-2-0.2-0.8 0.4-1.7 0.6-1.1 0.5-2.8-0.7-0.2-2-1.7 0.6-0.5-1.2-0.3-0.1-0.5-1 0-1 1-0.5 0.2 0.2 0.9-0.1 0.5-1.3 0.5-0.5 0.6-1-0.1-1 1.4-1.1 0.2 0.1 1.8 0.3 1-0.8 0.3-1.3 0.1-1.8 1.4-0.5-0.3 0.2-1.4 0-0.9-0.9 0.2-0.7-0.5-1.2 0 0.1-0.6 0.8 0.2 0.5-0.3-0.9-0.8-0.8-0.3 0.3-0.6 1.4 0.1-0.2-1-0.6-0.7-1.2-0.1-0.4 0.3-1-0.1-0.7 0.4-0.6-0.2-0.2-0.9-0.6-0.4-0.9-0.3-1 0.2-0.1 0.4 1.5 0.8 1.2 0.8-0.8 0.8-0.9-0.2 1 1.5 0.6 0.3-0.6 1.4-0.7 0.3-0.9-0.3 0-0.8-0.6-0.6-0.7-0.2-0.6 0.6-1.9-0.2 0 0.4 0.9 0.8-1 0.3-0.7 1.1 0.9 0.8-0.4 2.4 1 0.4-0.3 0.7 0.1 0.7 0.5 0.6-1.2 1.6-1.5-1-0.2-0.8-1.2-0.6-0.2 0.7-0.7-0.2-0.4 0.3-1.4-0.6-1.1 0 0.1-1.8-0.8-0.4-0.9 0.2-0.2-0.7 0.7-0.2 0.7 0.1 0.1-1 0.7-0.9-1.1-0.1 0-0.5 0.6-0.7 0.1-0.7 1.2 0 0.2-0.7 0.6-0.5-0.7-0.5-0.4 0.8-0.9-0.9-0.6 0-0.8-0.4 0.3-0.5 1.1-0.8 0.5 0 0.1-0.9 1.2-0.9 1.3 0.2-0.1 0.9 0.7 0.1 0.3-0.5-0.6-0.6-0.3-1.1-0.7-0.1 0.2-0.8-1.4-0.7-0.1-0.5 0.4-1-1.1-0.6-1.1-1.7-1-0.2-0.1-1-1.7-0.8-1.3-0.3-0.2-0.4-0.9-0.2-0.5 0.4-0.6-0.2-0.2-0.5 0.7-0.7-0.2-0.7-1.5-0.6 0-0.6-1.6-0.4-0.8-0.9 0-0.4-1.2-0.5-0.4-1.7-0.3-0.7-0.8 0-0.3-0.4-0.7 0.1-0.3-1.1-0.3-0.2-0.3-3.3-0.5-1.5-0.6-0.6 0.5-1.9-0.9-0.9 0.1-1.6-0.8-1 0.1-0.5 1-0.1 0.2-0.8 0.4-0.6-0.2-1.3-1.3-0.4-1.3 0.1 0.2-0.9-0.3-1-1.7-0.2 0-1.5 0.5-0.7-1.2-0.6 0.3-1.1 0.6 0 0.5-0.7-0.5-1.6 0.4-0.4-0.1-0.9-0.6 0-1 0.6-0.1 0.8-1.1-0.3 0.3-0.7 0.1-1-0.2-0.6-1.5 0.8-0.1 0.7-1.3 0.1-0.4 0.7-1-0.4-0.5-0.9-0.5 0.1-0.6 0.8-1.1 0.1-0.2 0.6-1.1-0.2-0.9-1.2-0.4-1-0.5-0.1-1.1 0.8-0.5-0.4-0.8 0-0.5-0.9 0.4-0.6-0.5-0.7-0.3-1.1-1.3-0.8-0.6 0-0.8-0.7-1.3 0.2-1.2 1.5-1.5 0.2-0.7-0.6-0.8 0.2-1.3-0.3-0.3 1.6-1.5 0.1 0.1-1-0.9-1.2-0.1-0.8-0.6-0.7-0.7-0.1 0.1-1.5 1.5 0.2 0.5-1.3 0.6-1.1 0-0.4-1.3-1-0.1-1.2 0.2-1.6 0.3-0.3-0.2-0.8 0.8-2.6 0.1-1.2-0.4-0.6-0.8 0.6-1.1-0.1-0.4 0.5-1.9-0.1-0.2-1.7 0.2-0.6 0.7-0.9 1.4-0.5 0.7-1.1-0.6-1.4-1-0.2 0.5-1.4 1.8 0.7 0.4 0.4 1.9 0.4 0-0.7 1.4-1.1 0.5-0.8 1 0.3 0.4-0.2 1.3-0.3 0.9-0.7 0.7 0.8 0.9 0.6 0.8 0 1.8 0.6 0.6 1.6 1 0.5-0.1 0.3 0.7 1 0.9-0.3 0.8-0.7 0.9 0.1 0.4-1.3 0.9 0.6-0.1 1.1-0.5 0.4 0 0.6 0.6 0.2-0.3 0.8 0.3 0.6 0.7-0.1 0.3 0.8 0.6-0.3 0.2-1.1 0.9-0.7 0.6 0.3-0.1 1.4 0.5 0.3 0.7 1.4-0.4 0.8-0.8 0-0.3 0.8 0.3 0.6-0.3 0.6-1 0.5 0.5 0.7 0 0.8 0.9 0.3 0.7 0.6-0.3 1 0.9 1.2 1.8-0.4 0.5-1.1-0.8-0.5 0.2-0.7 0.7-0.5 0.3-1.5 1 0-0.4-0.7 0.9-1 0.6 0.1 0.2-0.9 0.4-1 1.6-1 0-0.9 2.2 1.3 1.7 0.4 0.2 0.8 2-0.4 0.1-0.7 1.4 0 0.4 0.6 0.7 0.1 0.3-2.1 1.4-0.2 0.8-0.5 0.9 0.7 0.8-0.3 0.8 1.6 0.7 0.9 0.5 0.2 0.6-0.3 0.6 0.6 0.7 0.3 1.3 0 1.1-0.8 0.7-0.1 0.5 0.2 0.6-0.9 0.6-0.3 0.1-1 0.6-0.2 0.7 0.6 0.8-0.8 0.9-0.1 1-1.1 1.1-0.3 0.5-0.6-0.6-0.6-0.9 0-0.5-0.4-0.1-1.1-0.5-0.2 0.4-0.7 0.9 0-0.5-2.3 0.3-1.2 1.1-1.8 0.8-1-0.8-0.1-0.9-0.8 0.2-1.1 1.4 1.4 1 0.3 0.4-0.2 1.2 0.3 0.7-0.7 1.4 0-0.1-0.7 0.5-0.5-0.7-1 0.6-0.6 0.8 0 0.3 0.7-0.1 1.3 0.6 1 0.3 0.9 1.3 0.1 0.3 0.8 1.1-0.2 0.8-0.7 1.2 0.8 1-0.6 0.3-1.6-0.2-1.4 0.6-0.6-0.1-0.8-1.1-0.4 0.2-0.4-0.7-1.1-0.5-0.1-1 0.9 0-1 1.2-0.4 1.1-0.2 1.3-1 0.6-0.8 1-0.2 1.3-1.4-1.3-1.3 0.9-0.5 0-0.6 0.8-0.2 1.1 0.4 0.9 0.2 0.9-0.9 0.5 0.7 0.6 0.3 0.5 1-0.1 0.8 0.7 0 1-1-0.6-0.6-0.3-1-0.4-0.3 0.2-0.8 0-1.3 0.6-0.2 0.2-1.2-1.2-0.6 0.6-0.4-0.1-0.7 0.5-1.3-0.5-0.8-0.9-0.8-0.5 0 0.2-1.2-1.5 0.4 0-1 0.1-0.4 0.5-0.7-0.4-0.7 0.1-1.3 0.6-1.1-0.4-0.5-0.2-1.1-0.9-0.4-1.1-1.4-0.2-0.6 0.2-0.6 1.4-0.9 0 0.9 0.4 0.8 1 0.7 1.7-1.1 0.9 1.7 0 0.7 0.5 0.3 0.4 0.7 0.5 0.1 1-0.2 0.1 1-0.4 0.5 0.5 0.4 0.3 1 1.2-0.3 1 0.2 0.9 0.5 0.7 1 1 0.7 0 1.4 0.3 0.6-0.1 1.5-0.6 0.7-1 0.6 0.4 0.8 0.5 0.3 1.6 0.5 0.5 0.8 0.1 1.1 0.8-0.4 0.9 0.2 0.4 0.7 1.6 0.5 0.4-0.3 0.8 0 0.4 0.8 0.8-0.2 0.5 1 1-0.8 0.7-1 0.3 1-0.5 0.7-0.2 0.8 0.9-0.1 1.1-0.5 0-0.6 0.6-0.6 0.5 1.3 0.6 0.7 1.1 0.5z" id="13" name="Haryana">
									</path>
									<path d="M367.1 241.4l0.1 1 0.9 0.4 0.3 1.2 0.9 0.4 0.2 1.5 0.7 1.1-1.1 0.1-0.8 0.4-1.3-0.4-0.8 0.5-0.6-0.4-1.5-1.4-0.6-1.2-0.2-1.1-1.6 0.5-1.8-0.1-0.7-0.3-0.9 0.2-0.5-0.9-1.2-0.6-1.1 0.1-1 1.1-2.3 0.1-0.1-0.7-0.8-0.9-0.9-0.7-0.9-0.1-0.8-1-0.4-0.1-1.4 0.2-0.6-0.1-0.2 0.9-0.8-0.2-1.2 1.4-0.9-0.1-0.8 0.6-0.4-0.3-0.8 0-0.5 0.6-0.5 0.1-0.9 0.8-1.3 0-0.9 0.3-0.7 1.1-0.5-0.4-0.8 0.1-0.5-0.5-1.4 0.9-0.4-0.1-0.8 0.8 0 0.5-0.9 0.6-0.3 1.2-0.7 0.2-0.6 0.9 0.6 1.9-0.5 0.5-0.4 0.9-1.5-0.3-0.6 0.6-0.1 0.5 0.4 1.1 1.7-0.1 0.2 0.5-0.5 0.6-0.1 1-0.6 0.3-0.7-0.7-0.4 1.2 0.4 0.6-0.9 1.1-0.5 1.2-0.5 0.4 0.2 0.9 0.4 0 1.2 1.4-0.3 1 1.1 0.8 0.3 1-0.6 0.8 0 0.6-0.8-0.1 0.7 1.5 0.9 0.5 0.9-0.1 0.2 0.9-0.4 1-1.1 0.3-1.6 1.1-0.3 0-1.7 1.1-0.8-0.1-0.3 0.6-0.9 0-1.4 0.8 0 0.5 0.4 0.7-1.1-0.5-0.6-0.7-0.5-1.3-0.6 0.6 0 0.6-1.1 0.5-0.9 0.1 0.2-0.8 0.5-0.7-0.3-1-0.7 1-1 0.8-0.5-1-0.8 0.2-0.4-0.8-0.8 0-0.4 0.3-1.6-0.5-0.4-0.7-0.9-0.2-0.8 0.4-0.1-1.1-0.5-0.8-1.6-0.5-0.5-0.3-0.4-0.8 1-0.6 0.6-0.7 0.1-1.5-0.3-0.6 0-1.4-1-0.7-0.7-1-0.9-0.5-1-0.2-1.2 0.3-0.3-1-0.5-0.4 0.4-0.5-0.1-1-1 0.2-0.5-0.1-0.4-0.7-0.5-0.3 0-0.7-0.9-1.7-1.7 1.1-1-0.7-0.4-0.8 0-0.9-1.4 0.9-0.7-0.9-0.8-0.4-0.4-0.9-0.7-0.4-0.9 0.1-0.5-0.5-1.4-0.9 0.1-0.7-0.5-1.2 0.2-1 0.7-1.3-1.2-0.7 0.3-0.9-0.3-0.3 0-1 0.7-0.8 0.8-0.4-0.6-0.6-1 0.5-0.4-0.4 0.9-1-1.1-1.2-0.8 1-1.2-1.1-0.8 0.4-0.7-1.5-0.7 0.2-0.7-0.8-1.2-2.1 0-0.8-1-1.7-0.1 1-0.4 0.4-1.1 0.1 0.5 1 0 1.3-1.2 0.1 0.2 0.7-0.4 0.4-1 0.4-0.1-0.4-1.2 0.1-0.5 0.3-1.2 0-0.2-1.4-0.9-0.5-0.2-1.2 0.8-0.8-0.5-1.2-0.5-0.4-0.7-2.1-0.8-1.7-1.4-2.2 0-0.4-0.7-0.5-0.7-1.2 0.1-0.7-0.9-1.7-1.1-3-0.3-0.2-0.5-1.3 1-0.3-0.1-0.9-1.9-4.1-0.9-0.8-1.1-0.5-1.4-0.3-0.7-0.5-1.4-1.4-0.8 0-0.6-0.9-1.4-0.8-1.8 0.5-0.7-0.6 1.1-0.8 1.6-1.8 0-1.3-1.2-0.3 0-2 1.1-0.8 0.8-0.4 2-0.4 0.6-0.5 0.3-0.6 2.8-3.1 1-0.8 1.8-0.6 0.3-0.5-0.7-1-2-2-0.1-0.9 0.1-0.7 0.5-0.8 0.1-0.7 1.2-1.8 0.5-1 0-0.5-0.8-1 0-0.8 0.3-0.8 0.1-1.5-0.4-0.5-0.9-1.8-1.8-1.1-0.9-1.2-0.2-0.9 0.4-0.4 0.3-1.1 0.9-0.2 0.5 0.2 0.6 0 1.1 0.6 1.2 1.3 0.4-0.1 1.3-0.6 1.1-0.7 0.4-0.8 0.5-0.1 1.3-1.2 0.4-1.4 1.2-0.2 0.8-0.6 2.9-0.4 0.6-0.8 0.7-2.1 0.6-0.6 0.8-0.4 1.5-1.2 0.9-1 0.7-0.2 0.5 0.3 0.7 0 0.3-0.1 0.2 0 0.4 0.1 1-0.6 1.3-0.2 0.4-0.4 0.3 0.1 0.3 0.1 0.1-0.1 0.6 0.1 0.5 1.3 0.9 0.4 0.5 0 0.4-0.3 1.1-0.1 0.4-0.3 0.4 0 0.2 0.1 0.6 0 1-1.9 0.1-1.2 0.5-0.1 0.2 0.1 0.4 0.5 0.4 0.2 0.1-0.3 0.1-0.1 0.3-0.1 0.2 0.1 0 0.2-0.2 0.2-0.1 0.2-0.3 0.7 0.3 0.4-0.5 0.5-0.2 0.8 0.2 0.7 0.8 0.8 0.2 0.7 0.6 0.3 0.3-0.2 0.3-0.1 0.3 0.2 0 0.3 0.2 0.4 0.4 0.1-0.2 0.6 1 1.9 1.5 0.8 1.2 1 0.5-0.2 0.3 0.1 0.1-0.2 0.4-0.1 0.6 0.3 0.2 0.2 0.2 0.1 0.3 0.5 0.4-0.1 0.4-0.1 0.2-0.4 0.3 0.1 0.3 0.1 0.5 0.1 0 0.9 0.8 1.8 0.8-0.1 1.6 0.8-0.2 0.5 0.8 0.8 0.4-0.5 0.4 0.4 0.1 0.3 0.5 0.3 0.6-0.1 0.6 1.3 0.4 0.1 0.2 0 0.3-0.1 0.2-0.1 0.1-1.3 0.7-1 0.6-0.2 0.2 0.2 0.3 0.1 0.2 0 0.3-0.2 0.2 0.3 0 0.2 0.2 0.2 0.6 0.2 0.6-0.7 0.4-0.3 1.2-0.1 0.9-0.9 0.8-0.4 0.4-0.8 1.1 0 1.4-0.8 0.4-1.1 0.5 0.4 0.4-0.1 0.1 0.1 0.2 0.3 0.4-0.1 1.6 1.8 1.1 0.9-0.6 0.6-0.4 1.1 1.3 0.7 0.3 0.4 0.2 0 0.1-0.1 0.3 0 0.2 0.2 0.5 0.2 0.5 0.5 0.2 1.1 0.5 0.6 0.3 0 0.3 0 0.1 0.1 0.2 0 0.2 0.3 0.1 0.3-0.5 2.6 0.6 0.6 1.9 3.5 0.4 0.2 1 0 0.6-0.2 0-0.9 0.3-0.6 0.8 0.2 0.2-0.8 0.7-0.7 0.2 0.1 0.3 0.4 0.3 0.3 0.2 0 0.1-0.3 0.4-0.8 1.1-0.3 0.4 0.3 0.1 0.2 0.4-0.1 0.2 0.1 0.8-0.4 0.4-0.8 2-0.8-0.3-1 2-1 0.7 0 0.2 0.1 0.1 0-0.1 1.1 0.2 0.6-0.3 0.8-0.2 1.1 0.3 1.4 0.6 0.6-1.9 1.5-1.2 0.3 0 2-0.7 0.8 1.1 1.3 1.6-1.4 0.9-0.7 0.6 0.1 0 0.1 0 0.2 0.3 0.3 0.8 0.1 0.5 0.8-0.3 1.3 0.8 0.4 0.6 0.9 0.8 0 0.5 0.3-0.7 1.1-0.1 0.5-0.9 0.8-0.2 0.9 0.2 1.8-0.1 0.6-0.9 1.2 1.5 0.2 1.4-0.3 0.7 0 1.7 1.2 0 1.3-0.7 1.2 0.5 0.4 0.3 1 1.7 0.6 0.2 0.8 1.2 1.2 0.1 0.5 1.6 1.7 1.2 0.2-0.4 1.4-0.5 1.6-0.5 0.5-0.2 1.1-0.2 2-0.9 0.8-0.1 0.9 0.4 0.9 0.8 0.3-0.5 0.7 0.4 0.6 0.4 1.5 0.5 0.3 1-0.2 0.2 1.2 1.5 1.3-0.2 1.1-0.9 1-0.9 0.4-0.7 0.7-0.9 0.3-0.5 0.8 0.3 1.3 0.9-0.1 1.8 1.5-0.1 1.4-0.6 0.6 1.8 0.9 0.4 1.1-0.4 0.9 0.7 0.3 0.6 0.9 0.5 1.2 0.9 0.5z" id="14" name="Himachal Pradesh">
									</path>
									<path d="M670.4 475.6l-0.6 2.6 0 2 0.7 0.9 1.5 0.7 1 0.6 1.3 1.6 0.1 0.5 1.9 1.8 0.3 0.5 0.1 1-0.2 0.6-1.9 1-0.5 0.4-1.1 2.6-0.5 0.5-1.1-0.2 0.7 1.1 2.1 0.6-0.1 1.2-0.4 0.4 0.9 0.6-0.4 1.9 0.3 0.7-0.6 0.5-0.1 0.7-0.8 0-0.6 0.4-0.8-0.3-0.5-0.6-0.5 0.5 0.2 1.7-0.1 0.9 0.7 0.9-1 1.4 0 0.7 0.3 0.5 0 0.6-1.2 1.9-0.2 1.1-1 0.6-0.6-0.2-0.1 0.9-0.9 0.8-1.1 0-0.4 1.3 1.2 0.3 0.8 1.1-0.2 0.9-1.7-0.1-0.4-0.3-1.6 0 0.2 0.5 0.6 0.6-0.8 0.3-0.4 0.7 0 0.7-1 0-0.6-0.6-0.9-0.5-0.2 1.2 0.5 0.1-0.5 1.1 0.6 0.2-0.2 0.9-1 0.4-0.8-0.2-0.3 0.5 0.6 0.4-0.6 0.6-1.7-0.9-1.2-0.3-0.6 0.5-0.8-0.3 0.6-1-2 0-1-0.4-0.4 0.6 0.5 1.1 0.7 0.4-0.3 0.6 1.1 0.5-0.2 0.8 0.3 1.7-1 0.5-0.2-1-0.5 0.1 0.1 1.6 0.3 0.7-0.3 0.4-0.9 0 0.1-1.1-1 0.6-0.2-0.6-1.8-0.4-0.2 0.6 0.8 1 0.4 0.2-0.6 0.9-1.4-0.2-1.7-0.6-0.8-0.8-1.1-0.5-1.3-0.5-0.7 0.8-0.6-0.4 0-0.4-1-0.6-0.7 0.7 0.2 0.7-0.7 0-0.6 0.8-0.8 0.4-0.6-0.1-0.1 0.6 0.6 0.8 0 1.2-0.4 0.2-0.5 1.5 0.1 0.4-1.9 0.4-0.2-0.6-0.7-0.1-2.1 0.5-2 0.8-2.1 1.2-1.7-0.2-1.2 0.1-1.3 1.6-0.9 0.2 0.1 0.4-0.9 1.1 0.4 0.8-0.4 0.3-0.2 1.9-0.8 0.2-0.9 0.5 0.4 0.7-0.4 0.2-0.6-0.3-0.1-0.4-1.2 0.2-0.7-0.1-0.1-0.8-0.6-0.1-0.9-0.6-1.2 0 0.4-1-0.4-0.9 0.3-0.9-0.5-0.7-1.2-0.1-1 0.2 0-0.4-1.2-0.2-0.9 0.8 0 0.4 0.7 1.2 0.3 1.1-0.7 0.1-2.8 1.2-1.1-0.6-1.1-0.2-0.5 0.9 0.1 1.6 0.6 0 0.6 1.2-1.1 0.4 0.2 1.3-0.3 1-1 0.9-0.2 0.6 0.3 2.7 0.7-0.1 0.7 0.8 0 0.5 0.8 0.4 0.5 0.7 1 0 0.3-0.3 1-0.3 1.9 0.1 0.4 0.5-0.2 0.6 1.6 0.8 0.9-0.1 0.7 0.5-0.1 0.7 0.9 0.8 0.5 1 0.9-0.1 0.4 0.9 1.6-0.1 0.7-0.6 1.8 0.8 0.9-0.3 0.7 0.2 0.4 0.6 0.8-0.7 1.6 0.3 1.2-0.1 0.5 0.8 0.8-0.5 0.1 0.7-0.7 0.7-0.7-0.2-0.4 0.5-0.5-0.4-0.4 0.5-0.8 0.2-0.1 0.4 1 0.7-0.4 0.5-0.1 0.9-0.5 0 0 1.1-0.4 0.8-0.2 1.2 1.3 0.6 0.9 1.4 2.4 0.4 1 0.8 1.3 0.6 0.7 0.7-0.1 2.1 0.4 0.2 0.2 0.6 0.7 0.1 1.1-0.3 1.7 0.3 0.3 0.8 0.7 0.3 0.2 0.9 0 1.6-1.3-0.2-0.2 0.4 0.6 1.8 1.4 0.2 1.3 0.7-0.1 1-0.4 1.1 0 0.6 1.5 0.9 0.6 0.7-0.1 1.1-1.3-0.3-1-0.1-0.8 0.4 0.5 0.5-0.7 0.7-1.5 0.4-0.8-0.3-1.4-0.1-0.4-0.7-0.8 0.1 0-1-1.1-0.5-0.8-0.2-0.4-0.6-0.9 0.1-1-0.3 0-0.6-0.5-0.2-0.3-0.6-1.4 0.7-0.7-0.1-0.5 0.7-1.7-1.2-0.7-0.3-0.5-0.7-0.5-0.3-0.2-0.7-1.1-1.2-0.2-0.8-0.5 0.2-1.6-0.3-0.6-0.8-1.9-0.3-1.5-0.4-1.1-2-1.1-0.7-0.7 0.7 0.4 0.3-1.1 1-0.9 0.3-0.1 0.7-0.5 0.9 1.4 1.3 0.5-0.1 0.4 1.6-0.1 0.7-0.8 0.9 0.9 0.3-0.5 0.5 0.4 0.4-1.1 1.4-0.5 0.9 0.8 1 0.8 0.6 0.3 0.5-1.1 2 0.3 0.7-0.8 1.1-0.1 0.4-1.1 1.9-0.5 0-0.6 0.6-0.6 1-1.8 0-2-0.1-0.8-0.4-0.1-0.7 0.8-1-0.3-0.5 0.6-1 0.9 0.3 0.5-0.3-0.9-1.2-0.4 0.4-1.2 0.5-0.4 0.6-0.8 0.4-1.1 0.1-0.3 0.3-1.2-1.6-0.5 0.3-1.4 0.3-0.3-0.2-1.5-0.5-1.1-0.7-0.6-0.1-1-0.7-1.6-0.8-1.6 0.1-0.1 1.1-1.3-0.1-1.7 1.7-1.1 2.5-0.4 0.4-0.5-0.3-0.1-1.2-2.4-1.2-0.8 0.3-0.6-0.7-0.1-0.4-1-0.4-0.8-0.1-0.9 0.2-0.6 0.9-0.5 0.1-0.2-0.5 1.5-0.8 0.2-0.9-0.2-0.6 0.9-1-0.1-0.2 0.7-1.6 0.2-0.8-0.1-0.8 1.2-0.7 0.3-0.8-1-0.1 0.2-0.9-0.6-0.3 0.3-1.1-0.3-1.3-0.4-0.4-0.2-0.8 0.5-0.4 0.1-0.6-0.8-0.2-3.1 1.3-0.3-0.3-1.2 0.6-0.3 0.6-0.9 0.1-0.1-1-1.4 0.6-0.8-0.2-0.4-0.4-1.7 0-0.3 1.1-2.8 0-1-0.6-2 0.3-1 0.2-1.5 0-0.9 0.5 0 0.7-0.9 0.2-0.7 0.5 0 0.5-1.1 0.3-0.8-0.2-1.6 0.4-1.2 0-0.8-0.4-0.7-0.9-1.8 0-0.3-0.4-1.1-0.6-0.5-0.8-0.1-0.9 0.1-0.8-1.1-0.2-0.9-0.6-0.7-0.8-1.9-0.4-0.1-0.7 0.2-1.1 0.5-0.6 1-0.3 1.1-1.5 2.3 0 1.1-0.5 0.5-0.6 0.6 0 0.6-0.9-0.2-1.7 1.2-1.1 0.9 0.1 0.1-0.9 0.7-0.5 0.3-0.6 0.1-1.2 0.3-0.4 0.9 0 0.7-0.5 0-0.9 0.4-1.5-0.4-0.5-0.2-0.9-1.4-0.1-0.8 0.4-1 0.2-0.3-0.6-0.6 0.3-0.5-0.4-0.7 0.2-0.7-1.1 0.1-0.4-0.7-0.2-0.3 1-0.1 0.9-0.6 0.2-0.2-0.9-0.6-1.5 0.2-1.3-0.2-0.8-0.4 0-0.9-0.9-0.7 0.1-1.1-1.1-0.2-0.6 0.5-1.2 0.4-0.4-0.2-1.7 0.5-1.9-0.1-0.6 0.3-0.8-0.7-0.8-0.2-0.8-0.8-0.1-0.5 0.9-0.8-0.3-0.5-0.5 0-0.7 0.4-1.3-0.3-0.7 0.9-1.7 0.4-0.3 0.5-1.6 0.1-0.8-0.2-1.3-0.6-0.8-0.9-0.4-1.3 0.3-0.3 1.1 0.2 1.2-3.9-0.9-0.5 0.1-1.1-0.6-0.3-0.8-0.6-0.2 0.1-0.8-1.2-1.3 0.6-0.8-0.1-1.9-0.6-0.6-0.1-0.7-0.5-0.7 0-0.4-0.8 0-0.5-0.3 0-0.6-1.9-0.4-0.7-0.3-0.4-1-0.7-0.1-0.4-0.9 0.1-0.7-0.9-1.2-0.2-1.3 0.1-0.9-1.1-0.5-1-0.1-0.5-0.5-0.3-1.1-0.9 0.1-0.5-0.7-1.3 0.1-0.8-0.1 0.9-1 0.3-1.1 0.7-1.7-0.1-1.1 0.9-1.3-0.2-1-0.7-0.8 0.9-0.9 1.1-0.4 0.3-0.9-0.5-1.2-1-0.3 0-0.9-0.6-0.7 0.4-0.9 0-0.8 1.1-0.5 2.5-0.5 1.5 0 2 0.5 2.8-0.1 1.1 0.4 1.1-0.2 1.8-0.7 2-0.3 0.3 0.2 2.1-0.6 1-1 0.5-0.8 0.6-1.6 1.1 0.4 0.8 0.6 0.5 1.3 0.4 0.3 0.2 0.9 0.4 0.5 0 1.1 0.7 0.8 1-0.9-0.1-0.9 0.3-0.4 0.6 0.3-0.3 0.6 0.8 0.2 0.1-0.5-0.3-0.6 1.7-0.4 1.2 0.5 0.4-0.1 0-0.9 0.8 0 0.9 1.6 0.3 0.7-0.2 0.5-0.9 0.3-0.3 0.6 0.2 0.6 0.8 0.1 0.5 0.6-0.2 0.8 0.4 0.5 0.9 0.4 0.7-0.1 0.4 0.8 0.9 0.3-0.1 1.1 1.2-0.3 0.4 1.1 1 0.8 0.8-1.7 0.1-1.6 0.9 0.1 0.6-0.4-0.2-0.5 0.5-0.6 0.9 0.4 0.7 0 1.3 0.3 0.3-0.7 0-0.7 0.4-0.9 0.9-0.6 0.7-0.1 0.6-0.8 1.2-0.4 0.2-0.4 1.2-0.3 0.4 0.5-0.1 1.5 1.2 0.5 0.6-0.2-0.1 1.5 0.7 1.1 0.2 0.8 0.7-0.2 0.8 0.2 0.7-0.1 0.7-1.4 1.5-0.5 0.7 0.4 0.5-0.8 0.2 1.1-0.3 0.8 0.9 0.2 0.8-1.1 1.1-0.3 0.7-0.4-0.5-1.3 1.7-0.4 0.7 0.1 1.1-1 0.9 0-0.1-0.8 0.6-0.3 0.7 0.1 2.2-0.3 0.7-0.5 1.1 0.4 2-0.6 0.4 0.8 1-0.1 0.2-0.7 1-0.5-0.3-0.7 0.6-0.7 0.7 0.2 0.3 0.4 1.3 0.3 0.7-0.1 0.2-1.5-0.4-1.1 0-0.9-0.4-0.5 1.1-0.3 0.8-1.3 0-1 0.2-0.9 0.4-0.3 0.5-1.3 1 0.4 0.4 0.5 1.1 0.2 0.6-0.6 1.7 0.3 1.2 1.8 1.3 0.8 0.7 0 0.2-0.6 0.8-0.1 0.2-0.6 1.4-0.4 0.6 1 1.4 0.6 0.7 1.1 0.3 1.1-0.6 1.3 0.3 1.1 0.9 0.5 0.5 0.6 1.7-0.3 0-0.8 1.1 1 1.5 0 0.9 0.4-0.5 0.6-0.1 1 0.4 0.9-0.7 1.2 0.3 0.7 0.6 0.7 1.2-0.1 0.7 1 0.8 0.6 0.6 0.8 1.1 0.4 0.5-0.3 0.2-0.7-0.1-1 0.8-0.2 0.1-0.5 0-1.7 0.5-1.2 0.6-0.7 0.8 0 0.3-0.9 0.9-0.5 0.1-0.5 0.5-0.5 1.6 1.2 0.7 0.3 1.8-0.7 0.4 0.1 0.5-0.5 0.3-1 1.3 0 0.4 0.8 0.1 1.1 1-0.1 0.6 0.6 0.7-0.6 1.1 0.9-0.3-1.6 1.3-1.7 1 0 1.5 0.9 1.4 0-0.2-0.6 0.3-1.8 0.6-0.9 0.4-1.1-0.3-0.8 0.4-0.5-0.1-0.8 0.4-0.7-0.6-0.4 1-1.4 1.4-0.6 0.4-0.9-0.4-1.2 0.2-2.7-0.3-0.8 1.1-2 0.4-0.1 0.8-0.9 0.7 0.2 0.3-0.5 0.6-0.2 0.4 0.4 0.7 0.2 0.2-1.8 0.4-0.5 0.5-2.8 1.5 0.6 0.3-0.6 0.5-0.2 2.2 1.2 0.6 0.1 0-1.8 0.8-0.9-0.5-1.1 1.1 0.1 0.4 0.4 0.4-0.5 0.4-1.4 0.6-0.1 1.4 0.9 0.6-0.2 0.9 0.3 1.1-0.1 0.3 0.3 0 0.8 0.5 0.4 0 0.6 2.6 0.3 0.2 1z" id="16" name="Jharkhand">
									</path>
									<path d="M320.8 730.6l0.7 0 1.1 0.5-1.1 1.3 0.5 0.9-0.6 1 0.4 0.9 0.6 0.4-0.2 0.9 0.3 1-0.1 0.5-1.1 0.3-0.7 0.8 0.3 0.7 1.8 0.6 0.7 0.9 0.6 0 0.3 0.9-0.3 0.8-0.9 0-0.1 1.5-1-0.2 0.2 1.1-0.8 0.5-0.2 0.8-0.3 0.4-1 0.2 0 0.5-0.5 0.4-0.2 0.7 0.6 0.1 1.1 0.6 0.3 0.5-0.8 0.8-0.4-0.1-1.1 0.4-0.2 0.4-1.1 0.3-0.4 1.4 0.2 0.9-0.4 1.1 0 0.8 0.7 0.1 0.5 0.4 0.5 0 0.4 0.9 0.9-1.1 0.7 0.8 1.3-0.3 0.2 0.9 1 0.4 1.2 0 1.1 0.8-0.2 1-1.2-0.3-0.5 0.3-0.8 0.1 0 0.9-0.5 0-0.8-0.4 0 0.9-1.3-0.4-0.8 0.5 0 0.5 0.8 0.5-0.4 0.4 0 0.9-1.3 0.3-0.3-0.5-0.8-0.1 0.2 0.9-0.3 1.1-0.5 1 0.7 0.4-2.5 2 0.4 0.3-0.1 0.7-0.7 0.1-0.3 1 0.5 0.8 1 0.6 2 0.6-0.1 0.4 0.6 0.6 0 0.6 0.5 1 0.2 0.9-0.7 0.6 0 0.8-0.5 0.5 0.1 1.3-0.4 0.3 0.2 2.3-0.1 0.7 0.5 1-0.2 0.7-1.1 0 0.1 0.5-0.5 1.7 1.6 0.3-0.1 1-1.7 0.6 0.6 0.9 0.9-0.4 0.4 0.2-0.6 1.3 0.1 0.9-0.7 0-0.5 0.6-1.1 0 0.4 0.6 0.5 0.1 0 1-1.2 0.2-0.4 0.3-0.1 0.7-1.4 0.1-1-0.4-0.2 0.6-1.3 0.2 0.4 1.4 0.7 0.9 1.6 0.6 0.7 0.4 0.7-0.1 1.3 0.6 0.9-0.4 1.5-0.2 1.3 0.3 0.6 0.6 1.6 0.9 0.3 0.6-0.4 0.9-0.5-0.4-0.8 0.4-0.6 0.6-0.8 0.1-0.5 0.6 0.3 1.3 0 0.9-0.4 1 0.1 1.6 0.4 0.6 0.2 0.9-0.5 1.5 0.4 0.9 0.3 0.1-0.2 1 0.4 0.4-0.2 1.5-1.5-0.3-1.4-0.5-0.6 0.3-1.1 0-0.7-0.3-2.5-0.2-1.1-0.3-0.5 0.2-1.9 0-1.2 0.4-0.5 0.3-0.9 0.3-0.9 0.5-1.5 2-0.2 1 1.3 0.1-0.1 1.5-0.5 1 0 0.9 1 0.2 0.3 0.4-0.3 0.6 0.8 0.5 0.8 0.7-0.3 1.2-1.1-1-0.5 0.4-1.4 0.4 0.1 1.1-0.2 0.8 0.2 1.8-0.1 0.9-1.1 0-0.8-0.2 0 0.5 0.8 0.9 0.4 0.6 0.7 0.5 0.1 1.2 0.5 0.6-0.2 0.9 0.8 0.8 0.2 0.6 1.4-0.3 0.2 1.4 1.1 0.1 0 0.5 0.6 0.7-0.8 0-0.7 1.1 0.7 0.1 0.6 0.9 0.2 0.9-0.2 0.6-0.7 0-0.1 0.5 0.6 0.2-0.2 0.8-0.7 0.5 0 0.9-0.6 1.4-0.9 0.2-0.1 0.8-1.3-0.2 0.2-0.8-1.6 0-1.2 0.5-0.5-0.4-1.3-0.2-1.2 0.1-0.6-1-0.8-0.6-0.5 0-0.9-0.6-0.8 0.9 0 0.4 0.4 1.3-0.9 1.2 0.2 0.5 1.1 0.2 0.7 0 0.4 0.4 0.5-0.3 0.7-0.1 0.1 0.9-0.2 1.7-0.5 0 0.2 1-0.1 0.8-0.3 0.3-0.2 1.6-1.8 0.2 0.6 1.6-0.9 2.1-0.4 2.8 0.6 0.6 0.3 0.9 0.4 0.9 1.5 0.6 0.7 1.3 0.6 0.1 0.9-0.5 2.3 0.2-0.5 1.2-0.5 0-0.1 1.6-1-0.5-0.6 0.7-0.4 0.1-0.2 1.4 0.7 1.1 1.5 0.5 0.1 0.9-0.7 0.3 0.5 1.1 0.4 0.2 1.1-0.1 0.7 0.2 1-0.3 0.6 0 0.8 1.1 0.7 0 0.5-0.4 0.2-1.3-0.3-0.1 0.2-0.9 0.5-0.5 0.2-1.1 0.7-0.2 1.5 0.8 1.6 0 0.5-0.4 0.8-0.2-0.1 2 2.7 0.2-0.1 1.4 0.7 0.5 0.3 0.8 1-0.4-0.4-2-0.4 0-0.5-1.2 0.1-0.8 0.6-0.4 1 0.3 0.6 0.4 0 1.1 0.4 0.2 0.8-0.4 0.7 0.8-0.3 1.2 0.7 1.9-0.3 0.8-1.3-0.5-2.5 0-0.5 1.2-0.9 0.2 0.1 0.7 1.3-0.5 0.2 0.5-0.6 0.5-0.2 0.7-0.8 0.6-0.4 0-0.4 1.1 1.2 0.2 0.8 0.3-0.4 0.9 0.5 0.3 1.1-0.1 0.4 0.3-0.1 0.9-0.7 0.2 0.4 1.5-0.8 0.5-0.2-0.6-1.4 0-0.2-0.5 0.7-1.1-0.7-0.3 0.4-1.1-0.7-0.2-0.7-1.3-0.4-0.1-0.8 0.7-0.3-0.7-0.9 0.8-0.9-0.1-0.8 0.2-0.8-0.2-0.6 0.6-0.6-0.3-0.5-1.5-1 0.1-0.8-0.3-1.5-0.2 0-1.1-0.5-0.3 0.2-0.5-0.1-0.7 0.3-1.6-2.1-0.1-0.6-0.5-0.2 0.8-0.7 0.3-0.8 0-0.3 1 1 0.3 0.3-0.3 0.7 0.6 0.3 1 0.6 0.2 0.1 0.9-1.1 0.2-0.3 0.9 0.6 0.5 0.9 0.4 0.7 0.5-0.2 0.9 0.7 0.3 0.9 0.8 0.2 1-0.8 0.1-0.4 1.6-1.3 1.4 0.5 0.2-0.1 0.6 0.4 1.5 0.7 0.4 0.3-1.3 0.5 0 0.8 1.1 0.7 0 0-0.5 0.5-0.3 1 0.3 1.5-0.1 0.1-0.6-0.6-1 0.3-0.5-0.5-0.7-0.7-0.3 0.4-0.6 0.9-0.2-0.3-1.2 0.7-0.6 0.2 0.6-0.2 1.4 0.6 0.1 1.1-1.3 0.5 0 0.3 1.9 1.2-0.2 0.8-0.4 0.4 1.1 1.1-0.6 0.7 0.4 1.8 0.2-0.6 0.9 0.7 0.4 0.4-0.5 0.4 0.6 0.4 1.5-0.2 1.1-0.4 0.6 0.1 0.7 0.9-0.1 0.3-0.3-0.1-0.6 0.7 0 0.2 0.5 0.5 0.1 0.2-0.7-0.3-1.3 0.7 0 0.3 0.8 1.1-0.3 0.5-0.5 0.7 0.5 0-1.1 1.1-0.5 0.8-0.1-0.1 0.9 0.9-0.3 0.6 0.8 0-1.8 0.5-0.4 1.4-0.3 0.2-0.8 1-0.3 0.8-0.7-0.2-1-0.3-0.2-0.2-0.8 0.3-0.5 1.6 0.2 0.9-0.2 0.1 0.7 0.7 0.5 1.3-1.1 0.4-0.8 0.6 0.1-0.2 0.8 0.2 1.1-1 0.3-0.3 0.5 0.3 1.6 0.6 0.2 0.6-1.5 1.8 0.4 0.1-1.2 1 0.5 0.2 0.6 1 0 0.4 1.2-0.3 0.6 0.4 0.9-0.3 0.6-0.9 1 0.9 0.8-0.2 0.9-0.7 0.1-0.7-0.3 0.1 0.9 0.5 0.5 0 0.5 0.9-0.4 1.3-0.1 0.5 0.2 0 0.7 1.1 0.3 0 0.7-0.4 0.6 0.3 0.8 0.6-0.9 0.7-0.2 0.8 0.5 2.1-0.4 1.1 0.2 1.2-0.1 0.6 0.5-0.4 1.2-0.6 1.3-0.2 1.5 0.3 2.2-0.5 1.2 1.4 0.8-0.2 1.1 0.8-0.5 0.5 0 0.2 0.6 1.1-0.4 0.1 0.6 1 0.6 0.7 0.7 0.3-0.7 1.3 0.2 0.3 0.3-0.6 1-0.2 1.6 0.6 1.1-1.1 0.2-0.1 0.7-0.9 0.4 0.3 0.7-0.1 0.5-0.6 0.6 0.3 0.6-1.3 0.4-0.6 0.3 0 0.6 0.4 1.2-0.1 0.6-1.2-0.2-0.1 1.6 1.2 1.1 0 0.9-0.6-0.5-0.1-0.7-0.6 0.4-0.5-0.1-0.5-0.5-0.4 0.4-1.1-1.2-0.6 1.4-0.4-0.1-0.4 0.9 0 0.7-1-0.1-0.4-0.3-0.7 0.3 0 1.3-0.4 1.7-0.3 0.4-1.9-0.5-0.3 0.2-1.3-0.3-0.2-0.6-0.9-0.6-0.8-0.9-1.4-0.4-1 0.9 0.3 0.7-0.7 0 0-0.6-0.8-0.9-0.6 0.3-0.3 0.6-0.8-0.4 0.2-0.7 0.5-0.3-0.5-0.8-0.9 0.3-0.2 0.3-1.9-0.1-0.2 0.4-1.3 0.7 0.6 0.3-0.4 1.4-0.6 0.7 0.5 0.5-0.3 0.4-0.6 0.2 0.1 0.5-0.4 1-0.8 0.1-0.3 0.7-0.5-0.4-0.3 0.8-0.9 0 0.1-0.7-0.6-0.1-2.2 0.6 0 0.5 0.3 0.8-0.5 0.5-0.1 0.8-0.4 0.9 0.3 1.8 0.9 0.1-0.1 0.4-0.9 0.8 0.8 0.1 0.7-0.7 0.2 0.3-0.3 2.5-0.4 1.8-1.2 1.1-0.4 0.9-0.5 0.5-0.6 0.1-0.2 0.4-0.9-0.1-0.8 0.3-0.2 0.9 0.4 0.4-0.3 0.8 0.6 0.4 0.9 0.3 1-0.4 0.6 0.2 1.6-0.2 0.9 0.3 0.9-0.1 2.4 0.7 0.4 0.7 0.1 0.7 0.9 0.7-0.7 1.4-0.9 0.5-1.1 1.5-0.9 2 0.1 0.5-1 0-2.1 0.5-0.9-0.2-0.8 0.3-1.2-0.3-0.5 1.4-0.7 0 0.1 1.8-0.9 2.3-0.6 0.4-1.1-0.5-0.9-0.1-0.3 0.5-0.7 0.2-1.4-1.4-0.2 0.3-1.3-0.4-0.5 0.6-1.2 0.1-0.9 0.3-0.9 0-0.8 0.4-0.6 1.3-0.7 0-0.9-1.2 0.4-0.5-0.7-0.2-0.6-0.6-0.7-0.2-1 0.4-0.5 0.9-0.5-0.6-1.5-0.1-0.5 0.6-0.2 1.5-0.9 0.9-0.8 1.7 0 0.7 0.7 1-0.5 0.6-0.7-0.5-2.2-0.3-4.3 0.1-0.6 0.1-1.9-0.4-0.4-2-1.3-1-1 0.7-0.8 0.8-0.9-0.1-0.5-0.2-0.2-0.7 0-0.8 0.5-0.5-0.5-1-1.1 0.5-0.5-0.1-0.7 0.3-0.9-0.5-0.3-1.1-0.6-0.3-0.3-0.6-1 0.2-0.9-0.1-0.5-0.7 0-1.1-0.7-0.5-1.5 0.3-0.5 0.4-0.6-0.2 0-4.2-0.6 0.3-0.6 0-1.5 1-0.8 0.1-0.2 0.2-0.8 0-0.9-0.3-0.6 0.1-1.9-0.4-0.9-0.5-0.2-0.5-0.7-0.5 0.1-0.6-0.9-1-0.2-1.5-1.1-0.2-1.5 0.6-0.1-0.2-0.3-0.5-0.2-0.2-0.3-0.5-0.6 0.4-0.4 0-0.7-1 0-0.4-0.2-0.3-0.2-0.1-0.1-0.1-0.7-0.1-0.4 0.1-0.1 0.1-0.3-0.3-0.7-0.5-0.4-0.7-0.2-0.2-0.2 0-0.2-0.3 0.2-0.2-0.5-0.5 0-0.3-0.2-0.2 0-0.1-0.2-0.4-0.1-0.2-0.2-0.3-0.4-0.1-0.3-0.7-0.6-0.3-0.8 0.2-0.4-0.1-0.4 0.2 0.4-0.5-0.3-0.3-0.4-1 0.1-0.2 0.3-0.7-0.1-0.2-0.5-0.1-0.1-0.1-0.3-0.2-0.5-0.2-0.4-0.7 0.1-1.4-0.1-0.2 0.9 0.2 0.4-0.1 0.3-0.2 0.4-0.4-0.4-1.1-0.3 0.3-0.3-0.3-0.3 0.2-0.2 0-0.1 0.2-0.2 0.3-0.6 0.7-0.5 0 0-0.3-0.2-0.7-0.5-0.2-0.5-0.2 0-0.7-0.8 0-0.4-1.3 0.7-0.7 0.9 0.2-0.5-1.1-0.9-0.4-1.3 1.7-0.8-0.4-0.2-0.8-0.3-0.3 0.1-0.7-0.7-0.1-0.4 0.4-0.5-0.1-0.2-0.8 0.4-0.7-0.6-0.3-1.1-0.1-0.3-0.6-0.6 0.1-0.1 0.8-0.4 0.3-0.8-0.1-0.1-1 0.4 0.1-0.2-1-0.4-0.1-1.2 0.1-0.4-0.8 0.6-0.8-0.1-0.9-1.2 0.5-0.6-0.3-2 0.8-0.3 0.3-0.7-0.2-0.7-1.5-0.6-1.7-0.2-0.2-0.5-2.4-0.3-1.9-0.7-2.8 0.1-0.3-0.4-1.1-0.4-2-0.8-3-0.4-1.5 0-0.8-0.3-1.1-0.5-0.7-0.2-3.5-0.1-0.3-0.3-3.1-0.7-3.7-0.3-0.4-0.3-0.9-0.5-3.3-0.7-2.7-0.5-0.9-0.1-0.6-0.8-1.5-0.6 0-1.2-1.3-0.4-1.3-0.1-1-0.4-1.3-0.5-2.9-0.2-0.9-0.5-0.2-1.4-4.1-0.2-1.9-0.5-1.7-1.1-2.9 0-0.6 0.8-0.6-0.5-0.8-0.6 0.5 0.1 0.8-1.3 0.1-0.1-1.2-1.3-2.6 0.3-0.2-0.2-0.9 0.2-0.7-1.1-2.2-2 0.2-0.4-0.6-0.7-0.1-0.6-0.8-1.1-0.3-0.6-0.6 1.1-0.5 0-0.7-0.9-1.6 0.2-0.8 1-0.4 0.4-0.1 1 0.3 0-0.2-0.3-0.8 0.1-0.1 0-0.2 0.6-0.2 0.4 0.3 0.2 0.2 0 0.4 0.5-0.2 0.8-0.5 0.1-0.4 0.2-0.1 0.4 0.1 0.1-0.3 0.3-0.3-0.1-0.8 0.4-0.6 0.2-0.3 0-0.3 0.5-0.3-0.6-1-0.2-1.2 0.4-0.6-0.1-0.9 0.7-0.6 0.4-0.8-0.7-1.6-1.3-0.4 0.5-1.2 0.9-0.4 1 0.1 0.3-0.4-0.6-1.3 0.1-1.3-0.7-0.5-0.6 0-0.5-1.5 0.3-0.7-0.9-1.6 0.9-0.8 0.1-0.5-0.5-1-0.6-0.4 0.4-0.9 0.1-0.9-0.3-0.3-0.2-1.1-0.8-0.4-0.2 0.6-1-0.5-0.7-0.2 0 0.6-1.1 0.2-0.6-0.1-0.9-0.6 1.2-0.4 0.3-0.8-0.3-0.8 0.9-0.4 0.3-0.5 1-0.1 0.4-0.3 0.3-0.7 0.7 0-0.1 0.7 0.3 0.5 1-0.3 0.6 0.5 1.1-0.6 0.2-0.5 0.7 0.3 0.5-0.4 0.4-0.8-0.3-0.6 0.7-1.2-1.2 0 0-0.4 0.6-0.6 1 0-0.3-0.9 1.5-1.8 0.5-1.1 0-0.6 0.5-0.8 0.1-0.9-0.9-0.4-1 0.3-0.8 0.5-0.6-0.8 1.1-1.2 1.1-0.7 1 0.3 0.8 0.6 0.3-0.9-0.2-1.1 0.2-1.4 0.5-0.2-0.3-0.8 0.2-0.5-0.8-0.8-2.1-0.4-0.1-0.8-1 0.2-0.4-0.7-0.6 0.3-0.9 0.7-0.2-0.5 0.6-0.4-0.5-1.7-0.3-0.5 0.4-1.2 0.3-0.1 0.2 0.8 0.6-0.8-0.1-0.5-0.8 0.1-0.1-1.8-0.6 0.1-0.9-0.9 0.2-1-0.4 0-0.7 0.9-0.2-0.8 0.8-0.3-0.3-0.4 0-0.9 1 0.5 0.9-0.8 1.8 0.9 0.3-0.3 0-0.8 0.3-0.7 0.9-0.2 0.4-0.5 1.1-0.2-0.3-1.1 0-0.7 0.4-0.2 0.7 1.1 1.9-0.2-0.1 1.5 0.5 0.1-0.2 1.1 0.5 0.2 1.5-0.5 0.8-0.5 0-0.8 0.8 0.1 1-0.5-1.1-0.8 0.4-0.9 0.8-0.4 0.1-1.5 1.3 0 1.4-1.2 2.5-0.4 0.1-0.4 2.4 0.1-0.3-0.6-0.1-2.5 1.2-0.9 0.6 0.1 0.1-1-0.5 0-0.9-0.7 0.4-0.5 0.5 0.4 0.4-0.2 0.7 0.2 0.6-0.6 1.5 0.2 1.6-0.3 0 1 0.4 0.4 1.1 0.6 0.1 0.7 1 0.3 0.8-0.2-0.4 1 1.6 0 0.4-0.8 0.9 0.1 0.5-0.5 0.3-0.9-0.2-0.3 0-1.6 2.1 0.1 0.9-0.6 0.8-0.3 1.2 0.5 0.4-0.6 0.9-0.2 0.7 0.7 0.1 0.7 0.8-0.2 0.5-0.5 1.4 0.1-0.1-1.6 1.4 0.1 0 1.2 0.9 0.2 0.3 0.5 1.1-0.5-0.3-0.6 0.1-1.9-0.6 0.2-0.2-0.6 1.1-0.9-0.2-1.5-0.7 0 0-0.7-0.8-1 0-0.9 1.1-1-0.2-2-0.8-0.1-0.3-0.7-0.6-0.4 0.3-0.9-0.1-0.5-1-0.3-0.2-1.1 1.3-0.4 0-1 0.3-1.3 0.4-0.7 0.9 0.6 0.6 0.2 0 0.7 0.4 0.8 0.6 0.2 0.9-0.5 1.2 0.5 0.4 1 1 0.3 0.3-1.7 0.6-0.1 0.6 0.5 0.1 0.7 1.2-0.7 0 1.9 0.6 0.3 0.7 0.8 1.4-0.5 0.9 0 0.6-0.5 1.6 0 0.5 0.8 0.8-1.2 0.7-0.1 0.5 0.5 0.9 0.4 0 1.4 0.5-0.5-0.2-1.2 0.4-0.3 1.5-0.2 1.5 0.2 0.1 0.9 1.5 0.1-0.2-0.5 1.1-0.3 0.3 1.5 1-0.1 0.3-0.9 0.6-0.4 0-0.7-1.6-0.2 0.4-2.2-1.4 0.1-0.1-1.3 0.7-0.1 0.7-0.5-0.2-0.4-0.7 0.2 0.1-0.7 0.6-0.2-0.1-0.7-0.8-0.2-0.2-1.9 2.8-0.4 0.5-1.4 0.8-0.4 1.2-0.2-0.1-0.3 0-1.6 1.3 0 0-1.6 1.2-0.1 0.3 0.8 0.1 1.3 0.6-0.2 0.4-0.7 0.2-1 0.7 0 0.2 1 0.8 0.4 0.3 1 0.9 0.3 0.1-0.9 0.8-1.5 0.1-1.3 0.7 0.2 0.8-0.3 0.4-0.4 0.4-1-0.7-0.9-1-0.2 0.1-1.5 0.9 0 0.3 0.8 0.9 0.3 0.2-0.6 1.6-0.5 0.9 0.2 0.7-0.8 0.5 0-0.1-0.8 0.2-1.7 0-1.7 1.1-0.2 0-1.6 0.6-0.5-0.5-0.5-1.1-0.2 0.8-1.4 0.3-1.1 1.3-0.1 0.2 0.8 0.9 0.1 0.3-0.8 0.6 0.4 0.2 0.8 1.8 0 0.2-0.6-0.7-1 0.9-0.4 0.6 0 0.6-1.6 0.7-1.1 1 0.2-0.4-1.3 0.5 0 0.6-1.1 0.2-1.5 0.3-0.8 2.5-1.1 0.4-0.6 0.6 0.9 0.4-0.7 0.3 0.7 0.2 1 1.1 0.2 0.2 0.6-0.5 0.5 0 0.9-0.9 0.7-0.1 0.5 1.5 0.3 1-0.3 0 0.9 1 0.8 0.9-0.2 0.7-0.6-0.2-0.7 0.4-0.2 1.1 0.6z" id="17" name="Karnataka">
									</path>
									<path d="M282.7 1038.4l-0.1 0.8-0.9 0 0-0.5 1-0.3z m0 0l1 0.3 0 0.4-1 0.1 0-0.8z m-0.7-0.4l0.3 0.5-1.4 0.5 0-0.3 1.1-0.7z m-2.2-10.8l0.5 0.7 0.2 0.7-0.8-0.1 0.1-1.3z m-3.1-3.3l0.5 0.1 0.5 1-0.8-0.1-0.2-1z m-0.6-1.5l0.4 0.3 0.2 0.8-0.5 0.2-0.1-1.3z m-26.5-79.4l0.6 0.3 0.3 0.7 0.4 0.1 0.2 0.3 0.1 0.2 0.2 0.4 0 0.1 0.2 0.2 0 0.3 0.5 0.5-0.2 0.2 0.2 0.3 0.2 0 0.2 0.2 0.4 0.7 0.7 0.5 0.3 0.3 0.1-0.1 0.4-0.1 0.7 0.1 0.1 0.1 0.2 0.1 0.2 0.3 0 0.4 0.7 1 0.4 0 0.6-0.4 0.3 0.5 0.2 0.2 0.3 0.5 0.1 0.2 1.5-0.6 1.1 0.2 0.2 1.5 0.9 1-0.1 0.6 0.7 0.5 0.2 0.5 0.9 0.5 1.9 0.4 0.6-0.1 0.9 0.3 0.8 0 0.2-0.2 0.8-0.1 1.5-1 0.6 0 0.6-0.3 0 4.2 0.6 0.2 0.5-0.4 1.5-0.3 0.7 0.5 0 1.1 0.5 0.7 0.9 0.1 1-0.2 0.3 0.6 0.6 0.3 0.3 1.1 0.9 0.5 0.7-0.3 0.5 0.1 1.1-0.5 0.5 1-0.5 0.5 0 0.8 0.2 0.7 0.5 0.2 0.4 0.9-0.5 0.3-1.4 0.1-0.3 1-1.2 0.5-0.3-0.4-1 0.9-0.2-0.6-0.7-0.4-1.6 1 0.6 1.4-0.3 0.2 0.4 0.8-0.2 1.2 0.6-0.4 0.7-0.1 1.5 1 0.4-0.4 1 0.3 1 0.7 0.6-0.2 0 0.7 1.3 1.2 2.1 0.7 0 0.5 1-0.2 0.1 1.1-0.9 2-2.3 1.1-0.1 1.1 0.3 0.7 0.4-0.7 1.4-0.1 0.5 0.4 2-0.2 0.8 0 0.7 0.4 2.5-1.6 1 0.8-0.1 0.8-0.5 0.2-0.7 0.7 0.3 0.9 1.5 0.8-0.2 0.6 0.4 0.3-0.4 0.7 0.1 0.6 0.5 0 0.2 0.8-1.6-0.3-0.7 0.5-0.4 0.6 0 0.7-0.6 0.7-0.3 1.4 1.1 0.6 0.5 0.1 1.1 0.7 1.4-0.1 0.4 0.4 1.1 0.3 1 1.3-0.3 0.3 0.8 0.6 1 0 0.3 1-0.2 0.7-0.6 1.5-0.7 1.2 0.5 0.3 0.1 1.2-2.3 0.1 0 0.4 0.4 0.9 0.5 0.2-0.2 1.6 0.2 0.3-0.4 1.3-0.1 1.8-0.3 0.9 0.5 0.7-0.2 0.2 0.8 1-0.4 0.7-0.3 1.5 0.4 0.4 1.1 0.1 0 0.5 0.7 0.4 0.3 0.8 0.6 0.3 0.6-0.2 1.1 0.4 0.7-0.1 1.3-0.7 0.7-0.2 0.2-1 1-0.7 1.4-0.5 1.6-1.3 2.1 0.3-0.3 1.2 1.2 1.8 0.1 1 0.6 0 0.4 0.6-0.6 0.9-0.2 0.9 0.1 0.9-0.3 0.6-0.8-0.3-1.4 0.8 0.2 0.8 0.4 0.2 1.5 1.8-0.3 0.5 0.3 1 0.4 0.3-0.4 0.8-0.3-0.1-0.6 0.7-0.6 1-0.2 1 0.8 0.8-0.1 1 0.5 0.9-0.9 0.3 0.1 0.8-0.1 1.2-0.6 0.2 0 1-0.4 0.9-0.5 0.5-0.3 1.1 0 0.5 0.6 0.1 0.4-0.3 1.3 1.2 1.3 0.2 0.9-0.7 0.6-0.2 0.5 0.9 1 0.9 0 0.5 0.7 0.6 0.9 0.4-0.4 0.6 0.1 0.4-0.5 0.8-0.7-0.2-0.6 0.7-0.4 0.8 0.2 0.5-0.3 0.6 0 0.8-1.1 1.5-0.7 0.6 0 1-0.3 1.3 0.3 0.6-0.6 0.6 0.1 1.6-0.7 0.9-0.7 0.4-0.5 0.6-0.1 0.8-0.5 0.7-0.9 0.3-0.7 0.9 0.1 0.4 0.8 0.7 0.1 0.6 0.6 0.5 0 1.1 0.5-0.2 0.4 1 0.6 0.3 0.6 0.5 0.2 1.3-1 1.2-0.1 0.7-1.3 1.4-0.7 0 0.4 1 0.4 0.3 0.7 2 1 1 0 0.5 0.8 0.9 0.4 1.2-0.6 1.2-0.8 0.5-0.6-0.6-0.5 0.6 0.6 1.7-0.7 0.1-0.3 0.9-0.9 1.1-0.6 0 0.7 1.1-0.2 0.8-1 0-0.6 0.7-0.4 0.1-2.6-2-0.5-0.5-0.8-0.4-0.5-1.2-2.5-3-0.8-1.1-2.7-3.3-0.6-0.8-2.2-2.7-0.9-1.4-2-2.6-0.9-0.9-0.9-0.1-0.5-0.6-0.4-0.7-0.4-1.8-0.4-1.7-0.2-0.4-0.9-2.2-0.9-1.7-1.6-3.8-2.1-4.4-0.7-2.4-0.7-2.6-0.3-2.2-0.6-5.7-0.8-4.4-0.8-3 0.8 0.1 0.3 1 0.8 0.4-0.2 0.6-0.9 0.2 0.3 1.1 0.4-0.2 0.3-0.7 1.4 0.7 0.3 0.5 0.1 0.8 1 0.6-0.4 0.7 0.3 0.7 0.1 1.2-0.2 0.5 0 1.1 0.3 0.4 0.6 0.2 0 0.7-0.8 1.6 0 1-0.3 0.3-0.2 1.2 0.1 0.5 4.9-0.1-2.8-1.1 0-0.4 0.4-1.4-0.4-0.8-0.5-0.4 0.1-0.9 0.3-0.8-1.1-0.3 0.3-1.3-0.2-0.6-0.4-0.5-0.2-0.7 0.6-0.6 0-1-0.7-1.8-0.4-0.6-0.7-0.1 0.3 0.9-0.8-0.1-0.1-0.8-0.5-0.9-0.3-0.1-0.7-1.7 0-0.9-0.6-0.9-0.1-0.4 0.4-0.6-0.1-0.5-1.3-1.4-0.6-0.3 1.2 3.6-0.1 0.8 0.2 0.8-0.6 0.3-0.2-1-0.6-1.7-0.7-2.7-0.7-2-0.8-2.4-0.8-2.9-1.2-3-2.7-5.6-0.1-0.4-2.2-4.8-0.7-1.9-1.2-5.2-0.8-2.9-0.2-1.3-0.5-1.4-0.8-2-0.2 0-1-2.8-0.9-2.7-0.5-0.5 0.2-0.5-1.2-2.4-0.8-1.1-1.2-0.7-0.4 0.2-0.5-0.5 0-0.4-1.1-3.1-1.1-2.6-0.8-1.8-0.8-1-1.2-1-0.6-0.3-0.4-0.9-1.2-1.4-1-0.8-0.4 0.3-1.4-1.9-0.9-1.2 0.1-0.8-0.4-0.8-0.9-0.8 0.5-0.5 0.7 0.2 0.4-1.1-0.2-0.2-0.2-0.1-0.1-0.2 0.6-0.9-0.2-0.5 0.4-0.1 0.3 0.1 0.3 0.1 0.5-0.3 0.6-0.5 0.3 0 0.1-0.2 0.4 0.1 0.3-0.3-0.1-0.2-0.4-0.2-0.3 0-0.2 0-0.2 0.4-0.7-0.2-0.7-0.2-0.2 0.1-0.3 0.2 0 0.2-0.9 0.6-0.2 0.4-0.4 0-0.4-0.2-0.3 0.2-0.2-0.2-0.1-0.1-0.5 0.2-0.1 0.2 0.1 0.5 0 0.3 0 0.1 0 0.3 0 0.4 0.1 0.3 0.2 0.7-0.9 0.7-0.6-1.1-0.5-1.6-0.1-1.1-0.5-1.1-0.2-0.8-0.4-0.6-0.3-0.9-0.4 0.2-1.6-4-0.9-2.1-1-1.3-0.8-1.7-0.6-1.1-0.4-1.2-1.8-4.3-0.9-1.9-0.6-1.6 0.7 0.2 0.3-0.3 2-0.8 0.6 0.3 1.2-0.5 0.1 0.9-0.6 0.8 0.4 0.8 1.2-0.1 0.4 0.1 0.2 1-0.4-0.1 0.1 1 0.8 0.1 0.4-0.3 0.1-0.8 0.6-0.1 0.3 0.6 1.1 0.1 0.6 0.3-0.4 0.7 0.2 0.8 0.5 0.1 0.4-0.4 0.7 0.1-0.1 0.7 0.3 0.3 0.2 0.8 0.8 0.4 1.3-1.7 0.9 0.4 0.5 1.1-0.9-0.2-0.7 0.7 0.4 1.3 0.8 0 0 0.7 0.5 0.2 0.5 0.2 0.2 0.7 0 0.3 0.5 0 0.6-0.7 0.2-0.3 0.1-0.2 0.2 0 0.3-0.2 0.3 0.3 0.3-0.3 0.4 1.1-0.4 0.4-0.3 0.2-0.4 0.1-0.9-0.2 0.1 0.2-0.1 1.4 0.4 0.7 0.5 0.2 0.3 0.2 0.1 0.1 0.5 0.1 0.1 0.2-0.3 0.7-0.1 0.2 0.4 1 0.3 0.3-0.4 0.5 0.4-0.2 0.4 0.1 0.8-0.2z" id="18" name="Kerala">
									</path>
									<path d="M500.3 522.8l-0.4 0.1-0.7 0.8-0.7 0.1-0.2 0.6-1.6-0.1-0.7 0.4-0.9 0.3-0.3 0.6 0.5 0.7-0.7 0.5-0.4 0.7-0.8 0.1-0.7 0.5-1.3-0.2-0.3 0.6 0.2 0.6-1 0.4-1-0.1-0.8-0.9-0.4 0-2.1 0.4-0.7-0.4-0.7 0.3-1.7-0.2-1.5-0.5-0.8 0.5-1.1-0.9 0.2-0.8-1.1 0.6-0.1 0.5-1.2 0.2-0.6-0.1-1.3 0.2-1.1-0.1-0.4-0.9-1.2-0.7-1.7 0.3-1.1-0.7-0.8 1.1-1.1 0.3-0.3 0.4-0.7 0.1-0.7 0.5-1.3-0.2-1.6-1-0.2-0.7-0.6-0.1-0.2-0.9-0.5-0.1-0.1-0.7-0.6-0.7-1.1 0.7-0.8 0.2-0.2 0.7 0.5 0.4-0.6 0.7 0.4 0.7 0.5 0 0.6 1.2-0.1 0.9 0.2 0.4 0.8 0.4 0.1 0.7 0.5 0.7-0.4 1-0.9 0.4-0.2 0.8-1 0-0.4 2.3-1.1 0.4 0.3 1.3 0.8 0 0.1 1.6 0.4 0.6 0.5 0.1 0.6-0.4 0.2-1.1 1.3 0.3 0.5-0.3 0.8-1.2 0.6 0 0.3 0.5 1.4 0.1 0.4 1 0.6 0.4 1.8-0.3 0.8-0.6 0.5 0.1 0.6 1 0.5 0.3 0 1.2 0.7 0.7 0 0.8 1 0.5 0.8 0.1-0.3 0.6 0.3 0.3 0.9 0.2 0.3-0.5 1.4-0.2 0.2 1.3 0.3 0.3 0.8-0.3 0.8 1.2 0.9 0.3 0.1 1.4-0.7 0.6-0.9 1.5-0.2 2.4 0.5 0.1 0 0.7-0.6 0.4-0.2 0.7-0.4 0.3-1.9-0.4-1.1 1.3-0.9 0.1-0.8-0.3-0.3 0.2-1.1 0.1-0.7 1.4 0.7 1.1 0.1 2-0.9 0.3-0.4 0.6-1 0.7-0.4 0.7-1 0.4-1.3 0.1-0.9 0.3 0 0.8-0.2 0.6 0.5 1.3-0.1 0.5 0.4 0.7-1.3 1.5 0.6 1.9-0.6 1.1-0.4-0.8-0.4-0.3-0.3 0.8-0.6 0.3-0.7-0.1-1.2 1.5-0.1 0.8 0.3 0.4-0.3 0.5-0.5-0.1-0.1 0.8-0.4 0.3-1.6-0.6-0.2 0.7-1.4-0.2-0.8 0.7-0.4 1-1.2-0.1-1 0.8-0.1 0.9-0.9 0.1-0.3-2.2-1.9-0.7-0.3 0.3 0.1 1-0.5 0.3-0.8-0.7-0.6 0.2-0.2 0.8-1.1 0.8-1-0.4-0.1-0.7-0.7-0.3-0.8 1.2-1.3 0.6-0.1 0.3-0.2 1.8 0.5 1.5-0.2 0.5 0.2 1.3-0.6 0.6-0.4 1.2-1.3 0.1-1 0.5-0.1 0.6 0.3 0.6-0.4 0.5 0.2 0.7-0.1 1.2-1 0-0.5 0.6 0.6 0.2 0.5 0.6-0.2 1.2-0.7 0.5-0.5-0.4 0.1-0.9-0.5-1.1-1.2-0.3-0.6 0.7-0.2 1.3-0.5 0.2-0.3 1 0 0.8-0.6 1.4-0.6 1 0.1 0.7-0.4 0.7 0 0.8 0.5 0.4 0 0.7-0.3 0.4 0.2 0.6-0.2 0.9-0.7 1.5 0 0.6-1 0.3-0.7-0.6-0.7 0-0.5 1-0.1 1.3-0.5 0.8 0.4 1.1 0.1 0.9-0.5 0.5 0.1 0.7 0.3 0.5-0.2 0.6 0.6 0.6-0.3 1.6 0.3 0.9-0.5 0.9-0.7 0.7 0.1 0.5-0.5 1.5-1 1.5-1.3 0.5-0.8-0.2-0.4-0.7-0.7 0 0.1-0.5-0.9-0.5-0.6-0.7-1.5-0.2-1-0.3-0.2 1.1-0.3 0.1-1.1-0.4-0.4-1 0.8-1.1-0.4-1-0.9-0.9-0.1-1.1-1.1-0.7-0.6-1.3-0.9 0-1.2-1.7-1.3 0-0.6-0.5-0.6 0-1.5 1.1-0.8-0.2-0.3 0.6-0.6 0.3-1 1.1-1.3 0-1.1 0.8-0.7-0.8-1.6 0.1-0.4 1-0.8 0.1-1.2-0.3-1.1-0.6-0.2-0.4-0.9-0.9-2-0.7-0.7 0.4-0.6 0-0.3 0.4-1 0.1-0.2 0.7-1.4 0.1-1.2 0.4-0.5-0.1-0.8 0.1 0.1-0.8-1.2-0.9-0.2-0.8 0.5-0.5-0.8-1.8-1.1-0.4-0.6 0.1-1-0.3-0.5 0.6-3.8-0.7-0.9-0.9-0.8 0.1-0.5 0.6-0.1 0.7 0.4 0.3-0.4 0.8-2.4-0.4-0.2 0.8-0.5 0.4-0.9 0.4 0.1 0.3-2.5 0.2-0.7 0.1-0.5-0.6-0.7 0-1.2 0.9-0.9 0 0 1.1 0.4 1.5 0.4 0.1-0.2 1.2-1.2-0.5-0.3 0.6-1.2-0.4-0.2 0.2-2.1 0-0.4 0.8-0.4-0.8-0.5-0.1-0.2 0.7-0.5 0.3-1.4-0.6-0.9 0.1-0.7-0.2-0.6 0.3-0.5-0.4-0.7 0-0.9-1-0.7-0.4-1-0.1-1 0.8-1.4 0.1-0.6-2.2-0.3-0.5 0.4-0.9-0.7-0.3-1.1-0.2 0.2 0.7-0.5 0.7-0.9-0.5-0.6 0.6-1.6-0.7-0.1 0.8-1 0.2-0.8 0.5-1.2-0.2-0.3 0.2 0 0.9 0.2 0.5-0.3 0.6-3.6 2.2-0.7 0.1-0.8 0.6-0.7 0.1-0.6 0.5-1.4 0.1-0.1 0.5-1.3 0.3-1.2-0.4-1.6-0.7-0.6-0.1-0.2 0.7-1.6 0.3-0.3 0.6-1.1 0.3-0.1-0.7-1.1 0.2-0.3-0.6-0.6-0.2-1.5 0.2 0 0.9-1.3-0.3-0.5-0.3-2.1 0.1-0.2-1.4-0.4-0.8 0-0.7-1.1-0.6 0.1-0.6-0.7-1 0.1-0.9 0.7-0.1 0.5-0.4 1.6 0 0.8 0.5 1.3 0.4 0.8 0 0.6-0.4-0.6-0.7-0.6-0.1 0-0.9-0.5-3-0.5-1.1-1.6-1.8-0.7-0.3-0.1-0.5-0.8 0.3-1.6 0.2-2.2-0.2-0.6 0.2-1.5-0.1 0.4 0.9-0.7 0.2-0.3 0.5-1.2-0.1-0.1 0.7-0.4 0.2-0.8-0.4 0.1-0.6-1.4 0.3-0.9-0.4-0.9 0.2-0.9-0.1-0.3 0.4-2.1 1.1-3.6 2.9-1.4-0.5-0.6 0.8-1.3-0.1-0.5 1.2 0.2 1-0.8 0.5 1 1.2-0.3 0.9-1.4 0.8-0.4 1.3-2.1 1.4-1.4 1.1-0.1 0.4 1.2 1.7-0.1 1.3-0.5 0-0.4 0.7 0 0.8-0.3 0.5-2.2-0.5-1 0.6-1.3-0.3-0.3 0.4-0.3 1.3-0.5 0.5-0.2 0.9-0.7 0.3-0.7-0.1-0.1 0.5-1.1 0.6-0.5-0.1-2.8 0.2-0.4-0.6-2.9 0.1-0.5-0.6-1.1-0.8 0.1-0.5-0.9-0.9 0.5-0.5 1.3 0.3-0.1-1.9-0.6-0.4 0.5-0.9-0.5-1.1-0.6-0.3-0.7-2.3-0.3-0.5-1.6 0.7-0.6-0.4-1.7-0.5-0.5-0.6-1.8 0.2-1-0.4-0.9 0.5-1 0.1-1.1-0.2-1.4 0.1-0.5-0.2-1.3 0-1.1 0.4-1.5 0-0.4-0.5-0.9 0.1-0.4 0.4-1.1 0.3-0.8-0.5-1.9-0.3-2.9 0.3-0.8-0.6-0.2 0.3-1.8 0 0-0.7-1.6 0.3-0.8-0.4-0.4 0.2-1.1-0.6-2-0.8-0.8-0.7-0.5-1.7-1.1-1.8-1.4-0.3-0.2-0.3-1.1-0.6-1.8-0.5-0.8-0.7-1.3-0.1-1.4 0.8-0.8 0-2.6-0.5-1-0.4-1.4-0.7-2.3-0.4-0.1-0.7-0.8-0.2-0.4-1.1-0.9 0-0.4-0.4 0.2-1.4-0.3-0.3-0.2-1.1 0.3-0.6 0.2-2.4 0.3-0.8-0.4-0.9-0.7-0.8-0.7-0.4-0.7 0-0.3-0.6 0-1.2-0.3-0.6-1.6 0.4-0.4 0.7-1.1 1-1.5 0.3-0.3 1.1-3.1 0.4-1-0.7-0.9-0.4-0.1-0.5 0.4-0.6-1.8-0.6 0-0.6 0.8-0.7 0.4-0.6 0.9-0.3 0.2-1.5-0.5-0.1-0.7 0.3-0.2-1.3 0.2-1.1-0.3-0.2-0.1-1.7-0.3-0.2-1.3-0.1 0.1-1.7-0.6-0.7 0.3-1.6 0.2-0.4-0.1-0.7 0.8-0.1 0.6-0.4 0.5 0.7 0.2 0.8 2 0.4 0.2-0.8 1-0.6 0.4-0.6 1.2-0.6-0.4-1.2-0.9-0.6-1.1 0.1 0-1.1-0.7 0.1 0.1 0.8-1 0.1-0.6-0.5-0.6 1.2-0.6-0.4-0.1-1.4-0.8 0.2 0.2-1.6-1.4-0.3 0.1-1 0.7-0.3 0.6 0.1 1.5 0.9 0.9 0.3 0.1-0.6 1.2-0.8 0.2-0.6 0.5 0.1 0.5-0.6 0.3-1.1 0.7-0.4 0-0.4 0.7-0.5 0.6 0.3 1.1-0.1 1.3 0.3 0.6-0.3 0.1-1 0.4-0.8 0.2-1.4 1.2-2.1 0-0.8 0.9-0.3 0.5-1.6-0.6-2-0.4-0.4-1.1 0.2-0.6 0.7-0.6-0.4-1.4-2 1-0.6-0.5-0.8-0.2-1-0.8-0.5-0.1-0.7 0.8-0.3 0.5-0.8 1-0.8 1.4 0.3 0.4 0.4 0.8 0.3 1.5-0.1 0.8-0.5 0.4-0.6 0-0.5 2.1-0.5 0.6-0.7 1-0.7 0.5-0.7 1.6 0.3 1-0.7 0.2-0.7-1.1 0.4-0.8-0.3 0.9-0.5-0.7-1.1-1-0.1-0.7 0.5-0.7-0.1-0.6-0.8-0.9 0-0.7-0.5-0.6 0.4-0.5-1.3 0.3-0.6 0.1-0.9 0.5 0 0.4-0.7 0-1.4 0.9-0.4 0.5-1.2 1.5-0.2 0.4-0.6 1.4-0.8 0.8 0.2 0.3-0.7 0.7-0.2 0.4-0.7 0.7-0.1 0.2 0.4 1.7-0.8 0.6-0.7 0.6-1.2 0.7-0.6 1.1-0.2-0.5-1.5-0.5-0.3 0.5-0.7 0-0.9 0.5-0.5-0.2-0.9 0.2-0.3-0.4-1.2-0.6-0.1 0.2-1.7-0.4-0.8 0.4-1.7 0.9-1.8 0.7-0.5 0.3-1.1 0.6-0.4 0.1-0.6-0.4-0.4 0-1.1-0.5-0.4-0.2-1.1-0.7-0.4-0.4-1.3-0.9-0.7-0.7-1.5 0.9-0.7-0.4-1-0.7-0.6-0.7 0.3-1.3-0.3-1.5 0.2-0.6-0.3 0.1-0.6 0.9-0.8 0-1.9 0.6-0.7 0.4-0.9 1.5-1.6-1.5-1.5-0.7 0-0.5 0.4-0.7-0.3-1.4-1.2 0.4-0.5 0.7 0 0.3-1.1-0.3-1.2 1.4-0.5-0.2-1 0.4-0.7 0.7-0.6-0.1-0.6-1.3 0 0.5-1.5-0.3-0.6 0.8-0.4-0.2-1.6 0.4 0 0.3 1.2 1 2.1 0.6 0.7 0.3 0.8 0.9 0.5 1.5-0.3 0.7-1.4 1.2-0.3-0.3-1 0.1-0.7 0.9 0 0-0.7-0.3-0.8-0.5-0.2-0.9 0.3-2.3-0.2-0.7-0.2-0.2-0.4-0.7 0 0-1.5-1-1.8-0.1-1.5 0.3-1 0.7-0.3 0.3 0.3 0.1 1.1 1.2-0.1 0.4 0.4 0 1.1 1.2 0.2-0.1 0.6 2.3 0.2 1.1 0.5 1-1 0.6 0.3 0.9-0.4-0.1-2.9 0.8-0.8 0.9-0.2 0.2-0.6-0.5-0.8 0.1-0.6 0.5-0.3 0.9 0.7 3.8-0.4 1.3 0.2 0.1 0.6-1.1 0.7 0.1 0.9 0.5 0.7-0.4 1-0.3 1.1-0.9-1.7-0.2-0.9-0.6 0.6 0.7 1.3-0.7 0.5-0.2 0.9 1.7 0.7 0.5-0.6 1.6 0.3 1.2-0.5 0.6 0-0.3 1.1-2.5 1.1-0.4 0.1-0.6 0.6-0.5 0-0.5-1.3-1.5-0.4 0.3-1.3-1.6 0.4 0.9 1.4 0.8 0.4-0.2 0.5-1 0.1-0.9 1.2 0.2 1.1 0.7 1.4 0.4-0.5 0.7 0.2 0.6-0.1 1.3 0.4 1.6 0.2 0.4 0.3 3 0.6 1.1-0.2 1.8-0.8 0.5 0.2 1-0.3 1.1 1.3 1.6-0.5 0.7-1 2.1-1.3 1.5-0.1 0.7 0.3 1.1 1 0.1 0.5-0.4 1.8 0.5 0 0.1 1.4 0.2 0.6 0.7 0.3 0.4 1 0.9 0.1-0.1 1 0.6 0.5-0.7 1.2 0.2 0.5-0.1 1.4-0.2 0.3-1.4 0.9-1.1 0-0.6-0.5 0.1-1.1-0.8-0.3-0.2 0.6-1 1.1 0 0.7-0.7 0.2 0.1 0.6 0 1.5 0.9 1.4 1.1-0.1 0.5 0.5 0 1.5-0.2 1.2-1.1 0.3-1 3 1.2 0.2 0.3 0.9 0.8 0.3 0.6-0.2 0 1.4-1.7 0.3 0 1-0.6 1.4-0.8 0.1-0.1 0.6-1.2 0.4-0.6-1.1 0.1-0.7-0.6-0.6-0.9 0.6-0.2 0.7-2.3 0 0.1-0.7-1.4-0.5-0.6-0.7-0.7 1.7-1 0.9-0.2 2.2 1 0.4 0.6 0.7 1.1 0.6 0.9 0.7 0.2 0.8-0.1 0.7 0.6 0.6 1.1-0.2 1.2 0.2 1.3 1 0.3-0.5-0.3-1.2 0.8 0.1 0.3-0.4 0.2-1.4-1-0.5 0.2-1 0.8 0.1 1.1 0.8 0.1 0.9 0.6 0.1 0.8-0.6 1.7-0.9 0.9 0.4 1.4-0.8 0.4 0.1 0.6-0.7 0.9-0.4 0.2-1.6-0.7-0.9 0-1 1-0.2 1.2-0.7 0.6-0.9 1.9-0.6 0.2-0.2 1 0-0.2-0.9 0.3-0.5-0.2-1.4-0.4-0.3 0.1-1 1-1.2 0.1-0.3-0.4-1.4 0.2-0.4 0.7-0.1 0.1-0.8 0.5-0.6 0.7 0.8-0.4 1 0.3 0.6 0.1 1.3 0.6 0.4 0.8-0.2 1 0.5 0.4-0.8 1-0.5 1.2 0 2 1.5 0.4-0.6 1 0.3 0.4-0.4 1.1 0.6 0.4 0.5 0.1 0.8 0.4 0.6 1.1-0.2 0.8-0.5-0.5-0.8 0.2-0.4 1.5-1.1 0.1-0.8 0.8 0 1.3-0.3 0.5-0.5 0.3 1.3-0.5 0.7-0.4 1.4 0.9 0.8 0.6 0.4 0.3-0.3 0.9-0.1 0.5 0.3 0.7 1.5 0.4 0.2 0.9-0.2 1-0.5 0.5-0.1 1 0.4 0.5-2.2 0.6 0.1 0.4-0.5-0.9-0.8-0.1-0.4-1.4-1.5-0.5-1.5-0.5-0.6-0.3-1.2 0.4-0.3 0.1-0.8-0.3-0.7 0.3-1.1-0.3-0.2 0.3-1-0.2-0.7-0.4-0.4-0.7-1.4 1.1-0.6 0.7 0.1 0.3 0.8 0.5 0 0.4-0.8 0.6 0.5-0.1 1.8 0.9 0.8 0.6 0.2 1.1-0.5 1.1-1 0.3-1.1 0.6 0.1 0.5-1.4-0.2-1.1 0-1.8-0.8-1.5-0.1-0.8-0.5-0.4-0.9-0.1-0.7-0.6-0.3-1-0.6-0.2-0.8 0.6-0.6 0.1-0.6-0.3-0.9 0.2-0.5-0.1 0-0.7-1-1.3-0.5-0.8 1.2-0.6 2 0.1 1.1-0.4 0.7-0.9-1.2-0.6 0.4-0.8-1.8-1.7-0.2-0.6 0.1-1.5 0.4-0.9 0.7 0 1.8-0.5 0.5-0.3 0.5-0.8 3.2 0.7 1.3-0.4 0.5-0.7 1 0 0.4-1 0.9-0.1 0.8 0.3 1.4-0.4 0.8 0.6 0.6 0.8 1-0.5 0.6-0.1 1.3-0.9 0.1-2.5 0.9-0.2-0.3-1.2-0.9-0.7-0.6-0.2-0.5-0.8 0.6-0.5 0.3-0.8-0.4-1-0.7-0.2 0.4-1.2-0.4-0.7 0.6-1-1.9-0.8-0.8 0.4-0.7 1-1.4 0.9-0.1 1.6-0.7 0.1-0.2 0.7-1.3-0.1-1.3-0.8-1.3-0.2-0.5 0.6-0.8 0-0.5 0.9-1.1-0.1-1.1 0.2-0.2 0.7-0.9 0 0.1-0.7-1.3-0.9-1.7-0.3-2.4 0.5-0.2-0.8-0.9-0.4-0.9 0.2-1.1-0.1-1.5-1.3-0.4 0.2-0.8-0.6-0.5-1.6-0.8-0.4-0.2-1.1-0.7-1.4-0.6-0.8 0.1-0.8-0.5-1.1 0.2-1 0-1-0.5-0.6 0.4-0.9-1.2-0.8 0.2-0.9 0.7-0.4 0.8-0.1 0.1-0.5-0.2-0.8 0.2-1.2 0.7-1.1 0.6-0.5 0.6-1.1 0.4-0.3 1.2 0 0.3-1.1 1.2-0.3 1.3 0.5 0.7-0.1 1-0.7-0.1-0.8 1.2-0.1 0.8-1 0-0.5 0.7-1-0.3-0.7 1.4-1.1 0.5-1.4 1.8-0.4 1.9-1.2 0.3-0.9 0.7-0.6 1-0.4 1.1 0 0.4-0.3 0.6-1.4 0.5-0.3 1.2-0.2 1 0.3 1.5-1 1-0.5 1.4-1.5 0.3-1.2 1.7-0.9 0.7 0.3 0.5-0.2 1 0.1 0.3-0.5-0.4-1.1 1.6-0.3 1.6 0 1-1 1.6-0.5 1-1.1 1.5-1 0.8 0.3 1.1-0.5 0.4-1.1 1-0.4 1 0.1 0.5-0.1 0.4-0.7-0.1-1.1 0.7-0.5 1.3-0.2 0.3-0.5 0.1-0.8 0.4-0.5 1.3 0.1 1-0.5 0.8-1 1.9 0.5 0.9 0.4 0.4-0.3 0.1-1.9 0.7-0.5-0.5-0.8 0-0.7 0.8-0.5 0.9 0.4 1 0 0.1-0.4-0.6-0.9 1.7-0.4 0.4 0 1.2 0.6 0.3-0.2 0.1-0.9 0.5-0.6 2-0.3 0.7 0.1 0.8 1.6 1.4-0.1 0.6 1.1 0.5 0.3 1.9 0.4 1.7 1 1.3 0.1 0.6-0.8 1.3 0.3 0.7-0.9 1.3-0.3 0.1 0.7 0.7-0.4 0.7 1 1.7 0 1 1.5 0.9 0.8 1.3-0.3 1.5 0.6-0.4 1 0.4 0.3 1.2-0.8 0.6 0.4-0.5 1 0.6 0.8 0.1 0.6-0.8 0.7 0.5 0.7 0 0.9 1.2 0.6-0.1 0.4 1.1 0.8 0 0.7-0.5 0.9 0.7 0.6 0.8-0.4 1.2 0.5-0.3 1-1.3 0.5 0.3 1-0.4 0.6 1.4 0.3 0.3 1.5-1 0-0.7 1.1-0.7 0.1-0.3 1.1 0.5 0.3-0.7 0.7-0.8-0.1 0 0.7-0.5 0.6-1 0.2 1 0.7-0.1 0.7-1.4 0-0.5 0.7 0.7 0.4 0.2 0.7 1.1 1-0.7 0.3-1.3 1.4 0.2 0.4-0.3 1.3-0.9 1.6-0.7 0.9-0.6 0.4 0.3 0.6-0.1 0.9-0.9 0.2-0.5 1 0.8 0.4-0.1 1.2-0.7-0.1-0.1-0.6-0.8-0.4 0.1 1.2-0.7 0-0.8 1.4-1 0.5 0 0.4 0.5 0.7 1 0.4 0.7 1.3 0 1.1-0.2 0.8-0.3 0.3-2.2 0.5-0.7-0.1-1.2 0.5-0.9 1.1-1-0.3-0.5-0.6-0.8 0.9-1.2 0-0.7-0.3-1.5-0.3-1.1 1.1-0.8-0.4-0.6 1.1 0 0.9 0.4 1.1-0.9 0.3-0.3 0.7-0.8 0.3-0.5-0.3-0.4 0.9-0.1 1-1.3 1.4 1 0.4 0.2 0.7-0.8 1 1.3 0.5 0 0.6 0.6 0.6-0.2 0.6 0.6 0.9 0.7 0.2-0.3 1 0.6 0.2 0.5 0.6 0.9 0-0.1 0.6-0.6 0.4 0 0.8-1.2-0.1-0.7 0.9-1.2 0.4-0.3 0.4 0.2 1.4 0.3 0.7-0.4 1-0.7 0.4-0.6 0.8-0.9 0.6-0.2 0.4-1.5 1-0.5 0.7-1 0.4-0.2 0.6 0.1 0.8 0.7 0.2 0.8 1.2 0.5 1.3-0.2 0.7 0.3 0.9 0.8 1.1 0.6 1.4-0.4 0.7 0.4 1.3-0.5 2.4-1 0.4-0.2 0.7 0.7 0.4 0 0.8 0.8 0.3-0.1 0.8 0.2 0.5 1.8 1.4 0.6 0.2 0.9 1-1.2 1.5 0.5 1.1 0.7 0.5 0.8 0.8 0.7-0.1 0.2-0.4 0.8-0.4 0.2-1 0.9-0.5 0.3-1.1 0.8-1 0.5 0.1 0.4 0.6 0.9 0.6 0.9 0.1 0.9 1.5 0.6 0.3-0.2 0.5 1.3 0.8 0.5 1.1 1 0.4 0.7-0.2 0.2-0.5 0.7 0.5 0.3-0.3 0.7 1.3 0.3 1 0.7 0.1 0.2-0.9 0.6 0.2 0.4-0.5 0.6 0.1 0.8-0.6-0.1-1 1.1-0.7-0.1-1 0.9-0.7 1.2-1.4 0-0.6 0.4-1.7 0.3-0.4-0.2-0.7-1.3 0.2-0.5-0.7-0.6-0.1-0.4-0.9 0.4-0.5 0.4 0.6 0.6 0 0.8-0.5-0.7-0.4-0.2-1.3 0.2-0.4-1.1-1-0.3-0.9-0.4-0.3-0.4-1-0.6-0.1-0.6 0.5-0.5 0.7-1 0.1-0.8 0.5-0.9-0.3-0.1-1.3-0.3-0.9 0.6-0.6 0.5-1-0.3-2.4 0-1.1 0.6-0.7-0.6-1.8-2.3-1.2-1-0.3-0.5-1.6-0.9-0.6 0.2-0.9 0.2-1.5 0.2-0.4-0.1-1-0.7-1.1-0.8-0.3-0.1-2.2-0.8-1.7-0.3-1 0.2-1.1-0.5-0.5-0.6 0-0.5-0.6-0.5 0.2-0.6-0.4-1.2 0.8-0.8-0.4 0-0.6 1.3-0.2 0.7-0.7 0.6 0.7 0.7-0.1 0.2-1-0.1-1.3 0.9 0.7 0.7-0.2 0.1-0.9 0.8-1.5 1.1 0.3-0.1-0.9 0.9-0.4 1.1-0.1 0.3 0.7-1 0.9-0.4 0.6 1.8 0.4-0.2 0.7 1 0.3 1-0.3-0.2-1.7-0.4-0.5 1.7-0.4-0.2-0.6-0.8 0.5-0.6-0.7-0.8-0.6 0-1 1.1 0.6 1.1-0.3 2.2 1.2 0.1-0.6-0.4-0.9-0.6-0.5 0.2-0.5 1.4-0.3-0.2-0.7 0.6-0.7 1.3 0.1 0.6 0.3 0 0.8-0.9 0.5 0.7 0.9-0.2 0.9-0.9 0.9 0.9 0.7 0.4-0.5 0.6 0.1 0.4 0.7-0.1 0.9 0.2 0.9-0.9 0.1-0.3 0.6-1.4-0.5-0.1-0.5 1.2 0.1 0.4-1-0.9 0.1-0.5 0.4-0.9 0.1-1.3 1.3-0.1 0.8-0.7 0.8-0.7-0.2 0 0.9 0.7-0.1-0.3 0.9 1 1.4 0.4 0 0.6-1.9 0.3-0.3-0.5-0.9 1-1.2 1.5 0.6 0.9-0.6-0.1 1.4 0.6 0.7-0.9 0.5-0.2 0.6-1-0.4-0.5 0.9-0.8 0-0.2 0.7 0.5 0.6-0.5 1 0.4 1 0.8-0.7 0.8-1.1 1-0.4 0.5 0.2 0.5 0.6 0.6-0.6-0.2-0.6-0.8-0.4 0.5-1.2 0.9 0 0.1 1 0.4 0.5 1 0.3-1.1 1.5 0.4 0.5-0.5 1.1 0.6 0.3 0.7-0.6 0.2-0.8 0.7-0.7 0.2 0.6 0.9 0.5-0.3 0.7 0.5 0.6 0.3 0.6 1.6-0.2-0.4-1.1 0.6-0.2 0.4 0.9 1.4 0.4 0-1-0.4-0.5 0.8-0.2 0.4 0.8-0.2 0.4 0.7 0.4 0.2-0.5 0.7 0.1 0.4-0.8-0.4-0.9-0.6-0.5-0.2-0.8 0.5-1.1 0.6 0.7 1-0.4 0-1.6-0.9 0.5-0.9-0.8-0.6 0.6-0.5-0.5 0.2-1.2 1.1-1.1 1.8 0.3-0.4 0.6 0.5 1 0.1 0.9 0.5-0.1 0.2-0.9 1 0.5 0 0.6 1.7 0.3-0.6 0.5 0.3 0.8-0.4 0.7-0.7-0.2-0.2 0.7-0.7 0.7-0.1 0.8 0.3 1.1 0.6 0.2 0.4-0.7 0.5 0.3 0.1 0.7 1.1-0.9-0.3 1.3 1 0.5 0.4-0.6 0.5-0.1-0.1-0.9 0.5-0.5 0.8-1.2 0.6-0.2 0.2 0.6 0.8 0.5 0.7 0.1 0.5 0.4 1.1 0.2 0.4-0.3 1 0.1 1.1-0.4 1 0.7 2 1 1 0-0.5-0.7 0.7-1.5 0-0.7-0.3-1 0.3-0.6-0.6-0.7 1-0.6 0.7 0.2 0.9-0.1 1-0.6 1.6-0.2-0.1-0.7 0.7-0.5-0.1-0.8 0.3-0.7 1.7 0 0.5-0.5 1.5 0.6 0.3-0.6 0.8-0.4 0-0.4 0.9-0.3 0.1-0.8 0.8 0.1 0.6-0.3 0.5 0.2 0.4-0.9 0.6 0.2 1.2 1.2 0.1 0.8-0.3 0.5 0.3 0.9-0.1 0.9-0.2 0.5 0.3 0.6 1 0.1 0.5 1.1 0.7 0.5 0.7-0.2 0.1 0.8 0.8 1.8-0.3 0.3-1 0.1-1.3 0.8 0 0.4-0.9 0.9-0.6 1.2-0.8 0.4-0.5 1.3 0.8 0.3 0.8 0.7 0.5 0 1.4-0.8 0.4-1.2 0.5-0.6 1 0 0.6-0.4 0.6 0.5 0.4 0.9 1.1-0.6-0.5-1.1 0.7-0.4 0.3 0.7 0.9 0.6 1.2-0.8 0.9 0.5-0.6-1.3 0.2-1.7 1 1.2-0.5 0.9 1.1 0.2 0.4 0.6 0.9-0.2-0.2 1.1 1.9-0.7 0.2 0.4 1.4 0 0-0.9-1-0.5-0.9-0.2-0.1-0.9 1.2-0.5 1 0.2 0.6-0.4 0.7 0.6 0.4-0.4 0.4-1-0.2-0.9 1.1 0.1 1.2 0.9-0.6 0.9-0.7 0.7 0.2 0.8-0.3 0.5 0.3 0.6-1.1 0.8-0.4 0.8 0.8 1-1.1 1.1-0.7 0 0.1 1.1 0.7 0.3 1.2 0 1.1-0.4 0.3-0.3 1.3-0.6 0.6 1.2 1.6 0 0.9-0.6 1.7 0.1 0.4 1.1 1.3 1.1 0.5-0.8 0.5-0.6 0.2-1 1.5 0.7-0.2-1.2 0.4-0.2-0.3-0.7 0.6-0.4 0.9-1.3 0.5-1.1-0.1-0.7-0.4-0.7 0.4-0.4 0-0.9 0.6-0.5-0.3-0.4 2.1-0.3 0.7 0.2 0.6 0.9 0.8 0.7 1.3-0.3 0.3 0.7 0 0.7 1.6 0.8 0.4-0.3-0.1-1-0.5-0.4 0-0.7 0.5-0.4 0.9-0.1 0.3-0.6-0.6-0.2 0.1-0.6 0.7 0.1 1.1-0.4 0.7 0.5-0.2 0.6 0.8 0.1 0.5 0.4-0.9 0.7 0 0.5 0.8 0 0.5 0.7-1.2 1 0.9 0.8 0.9-0.7 1 0.4 0.2 0.8 0.8 0.2 0.3-0.6 2.6 1.6 1.3-0.3 0.6 0.5 0.9 0.1 1 0.8 0 1.5 0.3 0.8-0.4 0.6 0.1 0.8 0.9 0.4-0.1 0.5 1.2 1.1 0.1-0.4 1.4-0.4 2 1.1 0.6 0 0.6 0.5 0.4 0.6 0.7-0.4 1 0.4 0.4-0.3 1.2 0.1-0.4 1.3 1.1 0 0.4 0.4 0.1 1.9-0.5 0.5 0 0.6 1.4-0.3 0.8 0.6 0.2 1.4 0.4 0.6 0.7-0.4 0.5 0.2 0.5 0.6 1.7 0.2-0.2-1.5 0.3-0.8-0.4-1 0.7-0.8 0.4 0 0.5 0.6 0 0.4 1-0.2 0.3 0.3 1.1-0.1 0.4 1 1.5-0.4 0.5-0.4 1.7-0.5 0.9-0.5 1.1 0.9-0.2 1 0.4 0.3 0.9-0.2 1.3 0.2 0.1 1.7 0.9-0.1 0.2 1.7-1.9 0.5-1-0.6 0 1.6 0.7 0.5-0.5 0.9 0.1 1.9-0.4 0.4-0.2 1.1 0.4 0.6 1.4-0.1 0.1 0.9-0.1 1.1 0.1 1-0.5 0.9 0 1.2-0.8 0.5 0.4 2.1-0.5 0.4-0.1 0.7-1.1-0.2-0.6-0.6-0.4 0.9 0.2 0.4 1.3 1 0.2 0.6 0.6 0 1 0.3 0 1.1-0.5 0.5 0.2 0.7 1.9 0.4-0.1 0.9 0.3 0.5z" id="20" name="Madhya Pradesh">
									</path>
									<path d="M426.8 620.2l0.6 0.8 0 0.4-0.6 0.4-0.6 1.2-1.2 1-1.1 0.4-0.3 0.4-0.9 0.3-0.5-0.2-0.4 0.7-1.2 0.5-0.6-0.1-0.7 2.7 0.4 1.8-0.1 0.7-0.7 0.8 0.5 0.6 0 0.8 0.7 1.6 2.6-0.1 0.5 1.5 0 1.6 0.2 0.9-0.4 1.1 0 0.9 0.4 0.7 0.2 1.3 0.5 0.5 0.1 0.7-2.1 0.6-1 0.8-0.2 0.8 0.6 1.1 0.7 0.1 1.1-0.5 0.2-0.4 0.7-0.1 1.5 0.3-0.4 0.5 0.3 0.9-0.4 0.4 0.1 0.8-0.3 2.6-0.3 0.6 0.3 0.4-0.4 0.8-0.2 0.7 0.6 0.6 0.5 1.9-2.6 0.7-1 1.3-0.6-0.2-1.3 0.2-1.3 0.7-1.2 0.3 0.5 1.1 0.5 0.4 0 0.5-0.6 0.2-0.3 0.9 0.3 0.5 1.1 0.5 0.6 0 0.2-0.6 2.5 0.8 0.6 0.5-0.2 0.9 0.4 0.7-0.5 2.3 0.4 0.8-0.4 0.5-0.4 1.3-0.6 0.2-1.1-0.3-0.2-0.4-0.7-0.3-0.7 0.6-0.6 0.2-0.1 0.8 1.4 0.6 0.6-0.4 0.9 0.4 0.3 0.9-0.8 0.4-0.5 1.1-0.9 0.6-1.2-0.2 0.1 0.8 0.6-0.1 1.2 0.1 1 0.5-0.3-0.8-0.5-0.3 0.6-0.6 1.4-0.1 0.9 0.7-0.2 1.3 1.1 0.7 0.4 0.6 1.8 0.7 1.1 1-0.4 2.4 0.2 0.6 2 0 1.5 0.9 0.1 0.6 0.6 0.3 1.2-0.2 0.5 0.3 0.2 0.8 0.4 0.4 0.9 0.2 0.4 0.7 0.1 1.2-0.9 0.8-1.1 0-1.6 0.6 0.7 1.1 0.2 0.5 1 0.6-0.1 0.4-2.5 1.7-0.6 0.8-1.7 0.1-0.5-0.1 0-1-0.7-0.5-1.6 0.8-0.5-0.2-0.6-1.5 0-0.9-0.4-0.8-0.5 0.1-0.9 0.8-0.6 1-1.2 0.3-0.3 0.4-0.9 2.1-0.9 0.7-1 0.2-0.4 1 0.3 0.8-0.2 0.5-1.2 0.7-0.7 0.7-0.1 0.6 0.3 0.9-0.4 0.5-0.1 0.8-0.9 0.7 0.2 0.6-0.9 1.5-0.2 1.7 0.3 0.6 0.7 0.6 1.5 1.8 0.4 1.2-0.1 0.5-0.9 0.5-0.7 0.1-0.9 1.1-0.6-0.1-0.5 0.6 1 1.1-0.8 0.6-1.5 0.2-0.4 0.7-0.8-0.1-0.3-0.6-1.7 0.7-0.9-0.9-1.2-0.7-0.5-0.9-0.4-0.2-0.3-0.5-2.7-0.7-0.5-0.4-0.8-1.3 1.1-0.2 0.4-0.8 0.1-2.8-0.3-1.3 0.1-1.7-0.3-0.8-1.2-0.1-0.7 0.4-0.5-0.3 0.2-0.6-0.1-1.6 0.4-0.7 1.2-0.7 1.3-1.2-0.7-1-0.1-0.8 0.8-2.1 0.6-0.5-0.1-1.4 0.2-0.5 0.3-1.9-0.9-1.4-0.1-0.7-1.1-1.2-1.1-0.3-1.7-1.3-0.4-1.1-0.8-0.4-0.6-0.7-1.2-0.2-1 0.7-1.2 0.3-1.3 0-0.6 0.4-0.5 0.9-0.2 1.2-0.3 0.2-0.9-0.3-0.6-0.6-0.2-0.8-0.9 0.2-0.1 0.9-1.5 0.7-0.4-0.7-0.6-0.6-0.9 0-1.5-1 0-0.3-1-0.1-0.9 0.3-0.3-0.9-1.7-0.8-0.6 0.1 0.4 1.1-0.3 0.7-0.1 1.2-0.8 0.6-0.2 0.9 0.3 0.7-1 0.3-0.7-0.4-0.9-1.2-1.3-0.4 0-0.6-1.4-0.1-0.4-0.5-1.1 0.2-0.9-0.8-0.5 0.4-0.8 0 0-0.4 0.8-0.6 0-0.4-0.5-1 0.2-1.2-0.9-0.5-0.9-0.1-0.9 0.4-1 0 0.1-1.5-0.2-1.2-0.4-1-1.3 0-0.8-0.8-0.7 0.2-0.9-0.2-0.7 0.5-0.5-0.7-2.8-0.8-0.6-0.4-0.6 0.3-2-0.4-1.1 1-0.6-0.8-1.6-0.3-1.1-0.4-0.4-0.6-0.1-1-1.6-0.1-0.9-1.1-0.5 2.3 1.5 0.4 0 0.9 0.7 0.3 0.3 0.9-0.3 0.9-0.5 0.8 0 0.7-0.8 0.4-0.2 0.4-1 0.1-0.6 0.9 0.6 0.4 0.8 1.8 0 1.2-0.5 0.4 0.1 2 0.4 0.6 0.1 0.8-0.5 0.6-0.8-0.2-0.8 0.9-0.9-0.2-1.3 1.4-0.2 1.6 0.6 0.7-0.2 1.1-0.3 0.9 0 1.3-1.2 0.4-0.7-0.6-1 0.1-0.6-0.4-0.8 0.6-0.3-0.3-0.1-0.8-0.6-0.3-0.6-0.8-0.9-0.3-0.3-0.5-0.9-0.7-0.8 0.3-0.5 0.5-1.7 0.6 0 0.7 1.3 0.2 0 0.8-0.5-0.2-0.6 0.5-0.8 2.1 0.3 0.5-0.1 0.7-0.5 0.8 0.3 0.7-0.1 1-0.4 0.1-0.5-0.7-0.5 0.2-0.2 1 0.1 0.7-1.2-0.4-0.2 1.2 0.3 0.3 0.1 1.4 1.7 0-0.2 1.2 1.4-0.1-0.4 1.4 0.5 0.2 0.9-0.1 0.2 0.9 0.4 0.6 0.9 0.3 0.6 0.6 0 0.8-1.2-0.3-2.4 0.8-0.5 1.4-0.7 1.4 0 0.5-0.6 0.8-1.2 0.1-0.6 0.5-0.1 1.2 0.4 0.8 0.2 1.2-0.7 1.3-0.5-0.1-1.9 1-0.4-0.3-0.2-0.7-1.4 0.3-0.4 1.6 0.6 0.4-0.1 0.6-0.8-0.3-0.2 0.6 0.4 0.8-0.8 0.3-1.1-0.2-0.1 0.5 1 0.3-0.2 1.1-0.9 0.8 0.2 1 0.9 0.2 0.5 0.9-0.6 0.6-1.1-0.6-0.4 0.2 0.2 0.7-0.7 0.6-0.9 0.2-1-0.8 0-0.9-1 0.3-1.5-0.3 0.1-0.5 0.9-0.7 0-0.9 0.5-0.5-0.2-0.6-1.1-0.2-0.2-1-0.3-0.7-0.4 0.7-0.6-0.9-0.4 0.6-2.5 1.1-0.3 0.8-0.2 1.5-0.6 1.1-0.5 0 0.4 1.3-1-0.2-0.7 1.1-0.6 1.6-0.6 0-0.9 0.4 0.7 1-0.2 0.6-1.8 0-0.2-0.8-0.6-0.4-0.3 0.8-0.9-0.1-0.2-0.8-1.3 0.1-0.3 1.1-0.8 1.4 1.1 0.2 0.5 0.5-0.6 0.5 0 1.6-1.1 0.2 0 1.7-0.2 1.7 0.1 0.8-0.5 0-0.7 0.8-0.9-0.2-1.6 0.5-0.2 0.6-0.9-0.3-0.3-0.8-0.9 0-0.1 1.5 1 0.2 0.7 0.9-0.4 1-0.4 0.4-0.8 0.3-0.7-0.2-0.1 1.3-0.8 1.5-0.1 0.9-0.9-0.3-0.3-1-0.8-0.4-0.2-1-0.7 0-0.2 1-0.4 0.7-0.6 0.2-0.1-1.3-0.3-0.8-1.2 0.1 0 1.6-1.3 0 0 1.6 0.1 0.3-1.2 0.2-0.8 0.4-0.5 1.4-2.8 0.4 0.2 1.9 0.8 0.2 0.1 0.7-0.6 0.2-0.1 0.7 0.7-0.2 0.2 0.4-0.7 0.5-0.7 0.1 0.1 1.3 1.4-0.1-0.4 2.2 1.6 0.2 0 0.7-0.6 0.4-0.3 0.9-1 0.1-0.3-1.5-1.1 0.3 0.2 0.5-1.5-0.1-0.1-0.9-1.5-0.2-1.5 0.2-0.4 0.3 0.2 1.2-0.5 0.5 0-1.4-0.9-0.4-0.5-0.5-0.7 0.1-0.8 1.2-0.5-0.8-1.6 0-0.6 0.5-0.9 0-1.4 0.5-0.7-0.8-0.6-0.3 0-1.9-1.2 0.7-0.1-0.7-0.6-0.5-0.6 0.1-0.3 1.7-1-0.3-0.4-1-1.2-0.5-0.9 0.5-0.6-0.2-0.4-0.8 0-0.7-0.6-0.2-0.9-0.6-0.4 0.7-0.3 1.3 0 1-1.3 0.4 0.2 1.1 1 0.3 0.1 0.5-0.3 0.9 0.6 0.4 0.3 0.7 0.8 0.1 0.2 2-1.1 1 0 0.9 0.8 1 0 0.7 0.7 0 0.2 1.5-1.1 0.9 0.2 0.6 0.6-0.2-0.1 1.9 0.3 0.6-1.1 0.5-0.3-0.5-0.9-0.2 0-1.2-1.4-0.1 0.1 1.6-1.4-0.1-0.5 0.5-0.8 0.2-0.1-0.7-0.7-0.7-0.9 0.2-0.4 0.6-1.2-0.5-0.8 0.3-0.9 0.6-2.1-0.1 0 1.6 0.2 0.3-0.3 0.9-0.5 0.5-0.9-0.1-0.4 0.8-1.6 0 0.4-1-0.8 0.2-1-0.3-0.1-0.7-1.1-0.6-0.4-0.4 0-1-1.6 0.3-1.5-0.2-0.6 0.6-0.7-0.2-0.4 0.2-0.5-0.4-0.4 0.5 0.9 0.7 0.5 0-0.1 1-0.6-0.1-1.2 0.9 0.1 2.5 0.3 0.6-2.4-0.1-0.1 0.4-2.5 0.4-1.4 1.2-1.3 0-0.1 1.5-0.8 0.4-0.4 0.9 1.1 0.8-1 0.5-0.8-0.1 0 0.8-0.8 0.5-1.5 0.5-0.5-0.2 0.2-1.1-0.5-0.1 0.1-1.5-1.9 0.2-0.7-1.1-0.4 0.2 0 0.7 0.3 1.1-1.1 0.2-0.4 0.5-0.9 0.2-0.3 0.7 0 0.8-0.3 0.3-1.8-0.9-0.9 0.8-1-0.5 0 0.9 0.3 0.4-0.8 0.3 0.2 0.8 0.7-0.9 0.4 0-0.2 1 0.9 0.9 0.6-0.1 0.1 1.8 0.8-0.1 0.1 0.5-0.6 0.8-0.2-0.8-0.3 0.1-0.4 1.2 0.3 0.5 0.5 1.7-0.6 0.4 0.2 0.5 0.9-0.7 0.6-0.3 0.4 0.7 1-0.2 0.1 0.8 2.1 0.4 0.8 0.8-0.2 0.5 0.3 0.8-0.5 0.2-0.2 1.4 0.2 1.1-0.3 0.9-0.8-0.6-1-0.3-1.1 0.7-1.1 1.2 0.6 0.8 0.8-0.5 1-0.3 0.9 0.4-0.1 0.9-0.5 0.8 0 0.6-0.5 1.1-1.5 1.8 0.3 0.9-1 0-0.6 0.6 0 0.4 1.2 0-0.7 1.2 0.3 0.6-0.4 0.8-0.5 0.4-0.7-0.3-0.2 0.5-1.1 0.6-0.6-0.5-1 0.3-0.3-0.5 0.1-0.7-0.7 0-0.3 0.7-0.4 0.3-1 0.1-0.3 0.5-0.9 0.4 0.3 0.8-0.3 0.8-1.2 0.4 0.9 0.6-1.5 0.8-1.4 0.2-0.4 0.6-0.9-0.2-0.9-0.7-0.2-0.5 0.2-0.6-0.1-0.9-0.5-0.4 0-0.5-0.4-1.1-1.3 0-1-0.3 0.3-0.7-0.8-0.9-0.9 1.3-0.2 0.8-0.4-0.1-1.2 0.6-0.3-0.3-1 0-0.2 0.5-0.8-0.1-0.4 0-0.5-0.2-0.4 0.1-0.9-0.7 0.3-0.5-0.4-1.6-0.8-1.8-0.6-0.3-0.5-1.3-0.3-0.4-1.3-0.6-1.3-0.5-0.1-0.8-0.5-0.7-0.1-1-0.2-1-0.9-0.7 0.3-0.5-0.6-2.9-0.4-1.6-0.7-1.7-0.4-1.8-0.4-0.7 0.1-0.5-0.3-1.1-0.7-0.1 0.3-0.8-0.3-0.4-0.4-1.7-0.8-1.5-0.2-0.9-0.5-1 0.8-0.7 0.4 1.1 0.3 0-0.4-1.3-0.7-0.6-0.2-0.6 0.8-0.1 0.4-0.7-0.6-0.7-0.1-1.6-0.9-1.5 0-1.3 0.4-1.5-0.7-0.3-0.1-1.9 0.2-0.8-0.7-0.4 0.3-0.5-0.2-1.1 0.4-0.3 0-1-0.6-0.3 0.3-0.6-0.3-0.5-0.6 0.2 0-1.1 0.7 0.5 0.3-0.8-0.1-1.7-0.4-0.6-0.9-3.1-0.8-2-0.6-0.1-0.2-0.8 0.8-0.5 0.4 0.6 0.2-1.1-0.7-0.5 0-0.8-0.4-1.1-1.1-0.1-0.3-0.6 0.6-0.3 0-1.6 0.3-0.3-0.4-1.5-1.4-1.4 0-0.8 0.7 0 0-0.8-0.6-0.4-0.6-1.2 0.2-0.6-0.4-0.4-0.2-0.9 0.7-0.7-0.2-1-0.6-1.8-0.5-0.8-0.5-2-0.4-0.9-0.6-0.4 0-1.1-0.8-0.4 0-0.9 0.4-0.4-0.7-0.4-0.4-1.2 0.7-0.3-1.4-0.9 0.3-0.7-0.2-0.8-0.4-0.3-0.3-0.9 0.4-0.2 0.2-0.8-0.3-1.2-0.8-0.9-0.4-0.2-0.2-2.2 0.8 0.2 0.4 1.2 0.9-0.1 2 0.7 0.7-0.1-0.6-0.7 0.2-0.6-1.1 0.1-0.9-0.7-0.6 0.2-0.7-0.8-0.6-1.1-0.6-0.6-0.8-0.2 0.4-0.7 0-0.6-0.5-0.3-0.1-1.5-0.4-0.6 0.5-2.4 0.6-0.4-0.3-0.9-0.8-1.9-0.4-0.9-0.4-0.1-0.6-2 0.3-0.9 0.1-1.3-0.1-1.2 0.5-0.4 0.8-0.1 0.5 0.4 1-1.2 0.4 0.9 0.5 0.4 0.4-0.7-0.2-1.9-1.2 0.6-0.5-0.2-0.7-1.2 0-0.6 0.5-0.4 1.2 0.1 0.2-0.4-0.8-0.9 0.6-1 0.5 0.4 1-0.3 0.6-0.4-0.6-1 0.1-0.7-0.4-1.1-1 0-0.3 1.2-1.2 1-1.9-0.2-0.5 1.8-0.1 0.9-0.7-0.2-0.8-1.2 0.4-0.5-0.1-0.7 1-1.2-0.5-0.3 0.1-1.9-0.3-1-1-1-0.2-0.4 0.4-0.6-0.5-0.6-0.2-1 0.3-1.1 0-1.8 0.5-1-1.4-1.7 0.1-1.4-0.5-1.4 0.3-0.7 0.9-0.6-1.3-0.9-0.5-0.5-0.4-1.6 0-0.6 0.5-0.3-0.1-1-0.5-0.5-0.2-1.5 0.1-0.8-0.8-1.6 0-1.8-0.3-0.6-0.9-0.6 0-1 0.6 0.2 0.4-0.5 0-0.9-0.1-1.1-0.4-0.5 0.8-0.8 0.9-0.7 0.2-0.4-0.2-2-0.3-1 0.6-0.5 0.4-1.2 0-0.7 1.7 0.2 0.5-0.7 0.9-0.3 0.2-1 0.6-0.8 0.7-0.1 0.4-0.6 1.5 0.1 1.5 0.4 0.2 1.2 0.3 0.1 0 0.2 0 0.3 0 0.2-0.4 1 0.4 0.6 0.6-0.2 0.1-0.4 0-0.1 0.4-0.1 0 0.2-0.3 0.7 1.2 1.4 0.5 0.1 0-1 1 0.1 0.6 0.2 0.2 0.1 0 0.1 0.4 0.2 0.1 0 0.3-0.3 0.3 0.3 0.9 0.4 0.2 0.3 0.3 0.2 0.5-0.3-0.1-0.6 0.6-0.5 0.1-0.6 0-0.5 0.7-0.3 0.9 0.1 0.1-0.4 0.9-0.6 0-1.4 0.6-0.5 2.2 0.4 1.8-0.2-0.3-2 0.2-0.8 0.4-0.1-0.4-1.5 0-0.6-0.4-1.6-0.7 0.3 0.2-0.9 0.8-0.6 0.9-1.9 0.9-1-0.1-0.7 1-1-0.7-0.1 0.2-0.7-0.2-0.7-1.4-0.5-0.4-1-0.9-0.7 0.1-0.3 1.2-0.5 0.6-1 0-0.8 0.9-0.1 0.5 1.1-0.4 0.4 0.4 0.8 1.1-0.7 0.5 0.1 0.6 0.8 1 0.1 1 0.7 0.5 1.7 1 0.6 1.2-0.5 1.3 0.1 0.3 0.3 1.4-1.3 0.6 0 1.4-0.8 0-1.2-0.2-0.7-0.5 0.1-0.1-0.8 0.7-0.3 0.7 0.3 0.4-1 0.4-0.3 1.1 0.3 1-0.7-0.3-1 0-1.5 0.2-1.1-0.5-0.3 0-1.4-0.5-1-0.7-0.7 0.3-1.8-2-0.4-1-0.1-0.3-1-0.8 0.1-0.7-0.7-0.6 0-0.2-0.6 0.1-0.9-0.3-0.8-0.9-0.4-0.5 0.5-1.3-0.8-0.9 0.1-0.6-1.3-0.8 0 0-0.5 0.6-0.4 0.4 0.8 0.6 0.2 0 0.7 1.5-0.7 1.1 0.1 0.8 0.4 0.4-0.5-0.2-0.6 1.3 0.1 0.6-0.6 0.9 0.4-0.1-1.9 0.5-0.7-0.1-0.9 0.9-0.1 1.1 0.2 1.5-0.8 0.5-0.4 0.3-1.8-0.1-1.1 0.2-0.6 0.7-0.2 1-0.6 1.4-0.5 0.2-1 0.4-1 0.4 0.9 1.4 0.3 0.6-0.5 0.7 0.3 0.9-0.5 1.2 0.3 1.4-0.2 0.3-0.4 1.2-0.1 0.7-0.6 0.3-1.6-0.7-0.2-0.1-0.8-0.7 0.3-0.7 0.8-0.5 0-0.6-0.5-1.1 0.7-0.7-1.1-1.7 0.2-2.3-0.1-0.8 0.3-0.7-0.1-0.7 0.4-0.7 0-0.3 0.7-1.2 0.5-0.1-0.4-2.6 0.9-0.4-0.6-0.5-1.5-0.4-1.7-0.6-0.1-0.6-0.9 0.4-0.3 1-0.2 0.5 0.2 0.6-0.3 0.8-0.1 0.5-0.8-0.1-1.2-0.2-0.4-1.5-1.2-0.5-0.7 0.4-0.4-0.6-1.4-0.5-0.4 1-0.6 1.3 0 0.7-0.6 0.8-0.1 1.9-1.1 1.5-0.7 0.8-0.6 3.4-1.2 0.9 0.4 1 0.7 3.1-0.4 0.3-1.1 1.5-0.3 1.1-1 0.4-0.7 1.6-0.4 0.3 0.6 0 1.2 0.3 0.6 0.7 0 0.7 0.4 0.7 0.8 0.4 0.9-0.3 0.8-0.2 2.4-0.3 0.6 0.2 1.1 0.3 0.3-0.2 1.4 0.4 0.4 0.9 0 0.4 1.1 0.8 0.2 0.1 0.7 2.3 0.4 1.4 0.7 1 0.4 2.6 0.5 0.8 0 1.4-0.8 1.3 0.1 0.8 0.7 1.8 0.5 1.1 0.6 0.2 0.3 1.4 0.3 1.1 1.8 0.5 1.7 0.8 0.7 2 0.8 1.1 0.6 0.4-0.2 0.8 0.4 1.6-0.3 0 0.7 1.8 0 0.2-0.3 0.8 0.6 2.9-0.3 1.9 0.3 0.8 0.5 1.1-0.3 0.4-0.4 0.9-0.1 0.4 0.5 1.5 0 1.1-0.4 1.3 0 0.5 0.2 1.4-0.1 1.1 0.2 1-0.1 0.9-0.5 1 0.4 1.8-0.2 0.5 0.6 1.7 0.5 0.6 0.4 1.6-0.7 0.3 0.5 0.7 2.3 0.6 0.3 0.5 1.1-0.5 0.9 0.6 0.4 0.1 1.9-1.3-0.3-0.5 0.5 0.9 0.9-0.1 0.5 1.1 0.8 0.5 0.6 2.9-0.1 0.4 0.6 2.8-0.2 0.5 0.1 1.1-0.6 0.1-0.5 0.7 0.1 0.7-0.3 0.2-0.9 0.5-0.5 0.3-1.3 0.3-0.4 1.3 0.3 1-0.6 2.2 0.5 0.3-0.5 0-0.8 0.4-0.7 0.5 0 0.1-1.3-1.2-1.7 0.1-0.4 1.4-1.1 2.1-1.4 0.4-1.3 1.4-0.8 0.3-0.9-1-1.2 0.8-0.5-0.2-1 0.5-1.2 1.3 0.1 0.6-0.8 1.4 0.5 3.6-2.9 2.1-1.1 0.3-0.4 0.9 0.1 0.9-0.2 0.9 0.4 1.4-0.3-0.1 0.6 0.8 0.4 0.4-0.2 0.1-0.7 1.2 0.1 0.3-0.5 0.7-0.2-0.4-0.9 1.5 0.1 0.6-0.2 2.2 0.2 1.6-0.2 0.8-0.3 0.1 0.5 0.7 0.3 1.6 1.8 0.5 1.1 0.5 3 0 0.9 0.6 0.1 0.6 0.7-0.6 0.4-0.8 0-1.3-0.4-0.8-0.5-1.6 0-0.5 0.4-0.7 0.1-0.1 0.9 0.7 1-0.1 0.6 1.1 0.6 0 0.7 0.4 0.8 0.2 1.4 2.1-0.1 0.5 0.3 1.3 0.3 0-0.9 1.5-0.2 0.6 0.2 0.3 0.6 1.1-0.2 0.1 0.7 1.1-0.3 0.3-0.6 1.6-0.3 0.2-0.7 0.6 0.1 1.6 0.7 1.2 0.4 1.3-0.3 0.1-0.5 1.4-0.1 0.6-0.5 0.7-0.1 0.8-0.6 0.7-0.1 3.6-2.2 0.3-0.6-0.2-0.5 0-0.9 0.3-0.2 1.2 0.2 0.8-0.5 1-0.2 0.1-0.8 1.6 0.7 0.6-0.6 0.9 0.5 0.5-0.7-0.2-0.7 1.1 0.2 0.7 0.3-0.4 0.9 0.3 0.5 0.6 2.2 1.4-0.1 1-0.8 1 0.1 0.7 0.4 0.9 1 0.7 0 0.5 0.4 0.6-0.3 0.7 0.2 0.9-0.1 1.4 0.6 0.5-0.3 0.2-0.7 0.5 0.1 0.4 0.8 0.4-0.8 2.1 0 0.2-0.2 1.2 0.4 0.3-0.6 1.2 0.5 0.2-1.2-0.4-0.1-0.4-1.5 0-1.1 0.9 0 1.2-0.9 0.7 0 0.5 0.6 0.7-0.1 2.5-0.2-0.1-0.3 0.9-0.4 0.5-0.4 0.2-0.8 2.4 0.4 0.4-0.8-0.4-0.3 0.1-0.7 0.5-0.6 0.8-0.1 0.9 0.9 3.8 0.7 0.5-0.6 1 0.3 0.6-0.1 1.1 0.4 0.8 1.8-0.5 0.5 0.2 0.8 1.2 0.9-0.1 0.8 0.8-0.1 0.5 0.1 1.2-0.4 1.4-0.1 0.2-0.7 1-0.1 0.3-0.4 0.6 0 0.7-0.4 2 0.7 0.9 0.9 0.2 0.4 1.1 0.6 1.2 0.3 0.8-0.1 0.4-1 1.6-0.1 0.7 0.8 1.1-0.8 1.3 0 1-1.1 0.6-0.3 0.3-0.6 0.8 0.2 1.5-1.1 0.6 0 0.6 0.5 1.3 0 1.2 1.7 0.9 0 0.6 1.3 1.1 0.7 0.1 1.1 0.9 0.9 0.4 1-0.8 1.1 0.4 1 1.1 0.4 0.3-0.1 0.2-1.1 1 0.3 1.5 0.2 0.6 0.7 0.9 0.5-0.1 0.5 0.7 0 0.4 0.7 0.8 0.2 1.3-0.5z" id="21" name="Maharashtra">
									</path>
									<path d="M905.8 466.6l-0.2 1.5-0.9 0.5-0.6 0.7-0.4 1.9-0.8 1.8 0.1 0.9-0.5 1.9 0.5 0.8 1 0.1 0.6 0.6 3.4 1.5 0 1.3 0.1 1.4-0.3 1.5-0.5 0.9-0.4 0.3-0.4 0.9 0.6 1-0.5 0.3-0.5 1.3-1.2 1-0.5 0.9-0.5 2.4 0.2 0.8-0.5 0.8-0.2 0.8-0.7 0.4-1.4-0.2 0 1.6-0.3 0.9-0.7 1.2-1.2 1.3-0.7 0.3-1.2 3.1-0.9 0.2 0.3 0.7-0.2 1.4-0.3 0.7-1.1 0.5 0.7 0.6-1.2 1.6-0.9 0.1 0.1 1.7-0.5 1.4-0.6 0.6-0.4 1.4 0 0.8-0.7 0.5-0.2 0.9 0.1 2-0.5 1 0 0.7-1.8 3 0.1 1-0.9 0.3-0.1 1.5-0.2 1.4-0.7-0.2-0.6 0.5-0.3-0.9-0.6-1-1.6-0.2-0.2-0.7-0.9-0.6-1.6 0-0.6-0.6-1.1-0.2-0.9 0-1 0.7-0.9 0.2-1.1 0-0.5-1.3-0.6-0.6-0.4-0.8-0.8 0.2-3-0.6-1.2 0.2 0.2 0.7-0.4 0.6-1 0.2-0.4-0.7-0.5 0.9-0.8 0.1-0.6 0.5-1.4-0.9-0.2-1-0.8-1.1-0.4-1.3-0.6-0.6-2.1-0.7-0.6 0.3 0.2 0.8-0.1 0.6-1.7 0-0.5 0.7-0.7 0 0.4-1.5-0.6-0.4-0.7-0.1-0.3 1.4-0.8-0.3-0.7 0.1-0.1-0.8-0.8-0.4-0.6 0.9-1 0.2 0-0.6-0.7-1.1-0.9 0.5-1.1-0.4-1.2-1.1 0.2-0.9 0.4-0.3 0.7-2.1-0.6-1.3 0-1 1-1.5 0.2-0.9-0.7-0.1 0.1-1.7-0.8-0.4 1.3-0.3-0.3-0.7 0.2-1.2 0.4-0.6-0.4-0.8 0.6-0.8-0.1-1 1.6-1.4-0.8-0.5 0.4-0.6-0.1-1.3 0.5-0.7-0.3-1.6 0.8-3.5 0.6-0.2 0.9 0.5 1.2-0.5 0.1-1.5 1.3-1.4 0-0.6 0.7-0.7-0.3-1 0.5-0.2 0.1-0.6-0.5-1.4 0-0.6 0.7-1.1 1 0 0.9-1.6 0.4-0.2 0.5-1.8-0.1-0.8 0.2-0.6 1.2-1.9 0-0.4 0.5-0.8 1.4-1.1 0.6-0.1 0.4-0.5 0.1 1.1 1.2 0.1-0.2 0.9 1.2 0.3 0.8-0.1 0.4 0.7 0.5 0.3 0.1 0.6 0.5 0.1 1.4-2.5 0.8-1.6 0-0.7 0.5-0.1 0.2-1.1 0.6 0.1 0.4-0.6 0.6-0.4 0.2-0.8 1.2-0.7 1-1.6 0.1-0.7-0.8-0.8-0.8 0.3-0.1-0.6 0.6-0.9 1.3-0.2 0.6-0.7 0.9 0.2 1-0.4 1.8 0.1 0.7 0.3 0.5-0.5 1.1-0.2 0-0.8 2 1.4 0.5 0 0.2 1 1.6 0.4 0.5-1 1.3-0.1 0 0.8 1.1 1.3 1.8-0.3 0.4-0.3 0.5 0.7 2.2-1.1 0.8-0.5 1.2-0.7-0.1-0.8 0.3-0.7 0.5-0.1 1-1 0.6 0.1 0.8-0.4 0.8-0.8 0.9-1.1 0.3-0.6 0.8 0.4-0.7 1.6 0.2 0.4-0.9 1.8 0.2 1.7-0.2 1.1 2.4 1.6 1.1 0.5 0.8-0.1z" id="22" name="Manipur">
									</path>
									<path d="M828.7 482.7l-0.8-0.3-1.8-0.4 0.3-0.8-0.6-0.3-1 0.3-1.7-0.6-1.1-0.5-0.9-1-0.3 0.3-1.8-1-0.3-0.8-1-0.5-1.3-0.3-1.2 0.3-0.4-0.3-1 0.5-0.5-0.2-1.8-0.2-2.2 0.3-0.6-0.2-1 0.4-1.1 0.2-0.7-0.5-0.6 1.1-1.1-0.3-0.4 0.8-0.6 0-1.1 0.6-0.6-0.2-0.1-0.6-0.6 0-0.1-0.6 0.4-0.6-1.2 0.1-0.8 0.9-1.5 0.1-0.3 0.4-1.1 0.1-0.1-0.6-0.7 0-0.8-0.6-1.7-0.1-0.3-0.3-0.9 0.1-1.1-0.4-1.2-0.8-0.6 0.4-1.9-0.2-2.1 0.2-1.9-0.1-0.4 0.2-2.3 0.5-2.5 0.7-1.6-0.2-1 0.4-1.4-0.3-1-0.8-0.7 0.5-0.8 0.3-0.7-0.2-0.5 0.5-0.9-0.6-0.4-0.6-1 0.5-1.4-0.1-3 0.2-0.5 0.3-1.2 0.4-0.2 0.3-1.3-0.6-1.1-0.1-1.6-1.2-0.6 0.2-1.4-0.4-2.7-0.5-0.8-0.4-1.9-0.1-1.3-0.7-0.9-0.7-0.7-0.1-1-0.7-0.7 0.1-0.3-0.7-1 0.1-1.4-0.4-0.6 0.7-1 0.1-0.9-0.3 0.5-0.6-0.4-0.5-0.4-1-0.1-1.3 0.6-2 0.6-0.8 0-0.6 0.4-0.1 0.4-0.4-0.2-1 0.1-0.5-0.2-0.4 0.1-0.1-0.1-0.1 0.2-0.2 0.3-0.3 1.1-0.2 1.9-0.5 0.2-0.6 0.5 0.2 0.4-0.1 0.4-0.8-0.4-0.5-0.2 0-0.7-0.6-1.1-0.8-0.2-0.7-0.3-0.4-0.5-0.5-0.2-0.2-0.6-0.8 0.2-0.6 0.5 0.2 1.4-1.3-0.1-0.4 0-1-0.3-0.2 0.1-0.2 0.1-0.2 0.6 0 1.2-0.6-0.2-0.1 0.5-0.2 0.4-0.6-0.2-0.2-0.1 0 0-0.7 0.5-0.2 0.8-0.2 0.2-0.4 0.2-0.2 0.3-0.1 0.2 0 0.1-0.2 0.3-0.2 0.2-0.4 0.1-0.1 0.5-0.6 2.7 0 0.7 0.1 2.5-0.3 1.3-0.4 0.2-0.6 1.2-0.8 1-0.1 1.1 0.9 1-0.4 0.7-0.6 1 0.7 1 1.5-0.1 1-0.5 0.8 0.2 0.4 1-1.1 0.6-0.4 0.3-0.7 1.7 0.8-0.1 0.7 1.7-0.7 0.3-0.5 1-0.1 0.9 0.4 0 1 1.3 0.3 0.6-1.3 0.8-0.2 1.7 0.2 0.5-0.4 1.2 1.5-0.1-1.1 1.4 0.3 0.3 1.8 0.6-0.1 1 0.2 0.5 0.7-0.5 0.3-0.4 1.2 0.7 0.1 0.9-1 0.6 0.1 0 0.8 1.9-0.2 1.1-0.7 1.7 0.3-0.8 2.5 0.3 0.5 0 0.9 1.2 0.6 1.1-0.9 0.7 0 1-1.9 0.9-1.3 0.6-0.3 2.1-0.6 1 0.5 1-0.7 0.5-1.2 0.6-0.3 0-0.8 0.6-0.8 0-0.6 0.6-0.2 0.5-0.5 0.5-1 0.1-1 0.9 0.3 0.8-0.2 0.4 0.1-0.2 1.4 0.4 0.8-0.2 0.8-0.7 0.2 1.3 1 0.7 0.3 1.7-1.9 0.1-2.9 0.3-1.1 1-0.4 0.6-0.8 0.4 0.2 1-1.2 2 0.8-0.3 1.5 0.5 1.1 0.8 0.1 0.7 1 0.2-0.6 1.6-0.4 0.4-0.6 1.5 0.1 0.6 0.2 1.4-0.6 1.3 0.1 0.6-0.7 1-0.5 0.4 0.4 0.7-0.1 1 0.3 1.1-0.1 1-0.4-1.6 1.8-1.8 1.6-0.4 0.1-0.8 0.7-0.4 0.8 0.2 1.1 0.7 0.3 1.4-0.1 0.1 0.3-1.5 1.2 0 0.7-1 1.5 0 1.1 0.4 1.5-0.3 1.3 0.5 1.6 1.4-1.1 0.5-0.7 0.4 0.3 1.1-0.1 1.3-0.5 1.1-0.1 1.1-0.8 1.5 0.2 0.9 0.8-0.5 0.4 0.2 0.8 1.1 0.2 0.5 0.7 0.6 1.4 2 0.6 0.2 1.4 0.9 0.8 0.7-0.4 0.7-0.2 0.4-0.7 0.7 0.1-0.6 1.8-0.8 0.9-1.4 0.7-0.4 0.6 0.1 0.6 0.9-0.3 0.3 0.9 0 1.1 1.5-0.5 0.3 0.8 0.5-0.2 0.9 1.1 0.6 0.5 0.6 0 0.9 1.5 0.8 0.1 0 0.9 0.3 0.8-0.8 0.7-0.2 0.7 0.3 0.6 1 0.5-0.8 0.7-1.1-0.2-2.4 1-0.5 0.3-0.2 0.7-0.4 0.1-0.8 1.3-1.3-0.5-1 0-1-0.4 0.1 1.3-1.5 0-0.1 0.8-0.5 1.1-0.5 0.6-0.9 0.3z" id="23" name="Meghalaya">
									</path>
									<path d="M848.4 506.4l0.8 0.4-0.1 1.7 0.7 0.1-0.2 0.9-1 1.5 0 1 0.6 1.3-0.7 2.1-0.4 0.3-0.2 0.9 1.2 1.1 1.1 0.4 0.9-0.5 0.7 1.1 0 0.6 1-0.2 0.6-0.9 0.8 0.4 0.1 0.8 0.7-0.1 0.8 0.3 0.3-1.4 0.7 0.1 0.6 0.4-0.4 1.5 0.7 0 0.5-0.7 1.7 0 0.1 0.8-0.1 1.8 0.5 0.2 0.4 1.2 1.2 0.6-0.1 1.6 0.1 2.3 0.3 0.4-0.1 1.5 0.4 1.5 0 0.8 0.9 1.1-0.5 1.1 0.1 2.6-0.3 0.5 0.2 1.3-0.7 1 0 1.2-0.4 1.6 0 0.8 0.6 0.9-1.7 1.2 0.5 0.8 0.1 1.6-0.1 1.3 0.5 1.2-0.7 2.7 0.7 0.4-1 0.9-0.2 1.4-0.5 0.5-0.4 1.1-1 1-1.7 0.1-0.7-0.6-0.4-0.9-0.5-0.4-0.8-0.1-0.5 0.4-0.9-0.5-0.3 0.5 0.1 1.3-0.2 0.5 0.6 0.7-0.2 0.6 0.7 1.9-0.8 0 0 0.7-0.6 1.2-0.2 1.7-0.6 0.2 0.5 2.5-0.7 1.3 0.4 0.5 0 0.8 0.5 0.8-0.1 0.5 0.7 0.6 0.3 1.3-0.5 0.5-0.5 0.7-0.1 0.8 0.6 0.2 0 0.6 0.3 0.6-0.2 0.7 0.4 0.6 1 0.3 0.6 0.9-0.1 0.5 0.3 1.2-0.2 0.4 0.3 1.2 0 2.1 0.3 0.7-0.6 0.4-1.5 0.2 0.4 1.3 0.3 0.4-0.2 0.6-1.1 0.2-0.4-0.9-0.6 0.1-0.8-0.4-1.1 0.6 0.3 1.1-0.2 0.9 0.4 0.5 0.2 0.9-1.7-0.1-0.1 0.7-0.4 1.1-0.1 0.6 0.4 1 0 1-0.8 0.1-0.7-1.6-0.8 0.3-0.5 0.8-0.4 1.1-0.4-0.5-0.4-1.2-0.6-0.7-0.2-1.1-0.7 0-0.8-0.7-0.3-0.6-1.5-0.5-0.3-0.6-0.9-0.5-0.2-0.4-1-0.1-0.2 2-0.4-0.2 0.2 2.3-0.4 1-0.7 0-0.7 1-0.9 0.3-0.2-1.9 0-1-1.2-2.7 0.9-0.2 0.6-0.4 0-0.9-0.3-0.4-0.3-1.8 0-0.9-0.4-1.2 0.1-1.2-0.8-2.6-0.3-2.6-0.5-3.4-0.3-3.8-0.5-1.9-0.5-1.2-0.6-0.9-0.3-1.2-0.6-1.1 0.2-1.1-0.2-0.6-1-0.6-0.4-0.9-0.5-0.1-0.3-0.6-0.7-0.3 0.2-0.6 0-2 0.4-1.8-0.2-0.9-0.7-1 0.3-0.7-0.3-0.3 0.2-0.8-0.4-1.4 0-1.5 1.7-0.2-0.7-1.6-0.1-0.9-0.4-0.4 0.3-1.2-0.8-1.1 0-1-0.2-0.8-0.5 0-0.5-2.9-0.4-1 0.2-0.7-0.5-1.4-0.4-0.2 0.3-1.1-0.7-0.7 0.5-1.1 0-0.7-0.9-1.3-0.1-0.4 0-0.9-0.1-1.6 0.2-0.4 0.4 0.1 0.2-0.1-0.1-0.3-0.1-0.2-0.1-0.2-0.1-0.3 0.4-0.9 0.2-0.1 0.1 0 0.2 0.1 0.2 0.1 0.4 0 0-0.1 0.1-0.1-0.1-0.3-0.1 0 0-0.1 0.1-0.1 0-0.2 0.1-0.1 0.1-0.5 0.2 0 0-0.6-0.3-0.2-0.3-0.3 0-0.9 0-0.1 0-0.3 0.2-0.2 0.3-0.6-0.4-1 0.1-0.1 0.1 0.1-0.2-0.4 0.1-0.1-0.1-0.2 0-0.5 0.1-0.1 0.1-0.2-0.2-0.3 0.4-0.4 0.1-0.9 0-0.2-0.1-0.2 0.1-0.1-0.1-0.4 0-0.4 0-0.2 0.1-0.1 0.2 0-0.1-0.3-0.1-0.5 0-0.4-0.1-0.4 0.1-0.2-0.5-0.8-0.2-0.1-0.3-0.3-0.1-0.1 0-0.2-0.1-0.1 0-0.2 0-0.1 0-0.2 0-0.2 0.6 0 2.2 0.1 1.5-0.1-0.1 2.2 0.5 0.7 0.1 0.5 0 0.4 0.2-0.1 0.7 0.7 0.1 0 0.3-0.3 0.3-0.4 0-0.1 0.1-0.1 0.1-0.1 0.5 0 0-0.2 0.2 0.2 0.1 0-0.1-0.3 0.1-0.1 0.6-0.1 0.6-1.8 0.1-0.8 1.3 0 0.8-0.3 0.3-1.3 0-0.9 0.2-0.9 0.6 0.3 0.5-0.6 1.1-0.5 0.8-1.8 0.5-1.8 1.2-2.6 1.4 3.8 1.4 1.4 0.6-0.6 0.7-0.1 0.7 0.3 0.2-0.7 0.9 0.6 0.8 0 0.7-0.5 0.7 0.3z" id="24" name="Mizoram">
									</path>
									<path d="M924.8 419.9l-1.1 1.5-0.8 0.2-1 0.9 0 1.5-0.5 0.7-0.8 0.5 0.2 0.7-0.6 0.7-1.2 1.7-0.1 0.6 0.7 0 0.8 1.1-0.2 0.8 1.1 0.5-0.3 1.3 0.1 2.4-0.3 0.6 0.3 0.7-0.3 0.7 0.7 0.9-0.5 0.5-0.4 1.5 0.4 1-0.2 0.6 0.2 0.8 0.8 0.2 0.5-0.2 0.7 0.6-0.7 1.2 0 0.7-0.8 1-0.8 0.8-0.4 0.7-1 0.7-0.7 0.1-1 1-0.3 0.8-0.1 1.1 0.6 0.9 0.1 1 0.4 0.4-0.1 1 0.2 0.8-0.6 0.8-0.8 0.1-0.9 1.3-1.4 1.1-0.3 0.4-0.5 1.9-1.1 1 0.6 0.8-1.8 0.2-0.5 0.4-0.9 2.1-0.9 0.2-0.4 0.4-0.6-0.5-0.3 0.5-2 0.6-0.2 0.2-0.8 0.1-1.1-0.5-2.4-1.6 0.2-1.1-0.2-1.7 0.9-1.8-0.2-0.4 0.7-1.6-0.8-0.4-0.3 0.6-0.9 1.1-0.8 0.8-0.8 0.4-0.6-0.1-1 1-0.5 0.1-0.3 0.7 0.1 0.8-1.2 0.7-0.8 0.5-2.2 1.1-0.5-0.7-0.4 0.3-1.8 0.3-1.1-1.3 0-0.8-1.3 0.1-0.5 1-1.6-0.4-0.2-1-0.5 0-2-1.4 0 0.8-1.1 0.2-0.5 0.5-0.7-0.3-1.8-0.1-1 0.4-0.9-0.2-0.6 0.7-1.3 0.2-0.6 0.9 0.1 0.6 0.8-0.3 0.8 0.8-0.1 0.7-1 1.6-1.2 0.7-0.2 0.8-0.6 0.4-0.4 0.6-0.6-0.1-0.2 1.1-0.5 0.1 0 0.7-0.8 1.6-1.4 2.5-0.5-0.1-0.1-0.6-0.5-0.3-0.4-0.7-0.8 0.1-1.2-0.3 0.2-0.9-1.2-0.1-0.1-1.1-0.6-0.6-0.1-0.8 0.9-1.3-0.5-1.2-0.2-1.2-0.8-0.4-0.6 0-0.9-0.6 0-0.6-0.7-0.6-0.4-1-0.9-0.8 0.4-0.5 1-0.3 0.6-0.9 0.5-0.1 0.4-0.9 1.6-0.9 0.7-0.1 1.2-1.4 0.8-0.7 0.1-0.9 1.3-1.2 1.3-0.9 0.2-0.9 0.7-0.7 1-0.2 0.2-0.5 0.8-0.4-0.6-1.4-0.1-0.8 2.2-1 0.6-0.7 0.6-0.1 0.4 1.8-0.6 2.4 0.5 1.2 0.8-0.4 0.2-0.8 0.9-0.6 1.1 0.6 0.4-0.7 0.7-0.8 1.5-0.7 0.8-0.8-0.5-1.3-0.4-0.5 0-1.3 0.3-1.3 0.9-1.2-0.2-0.4 0.7-2.4-0.2-0.4 0.4-1.1 0.8-0.6 0.2-1.2 0.4-0.8 0.6-0.2 1.1-1.9 0.2-0.6 1-0.6 0.9 0.1 0-0.8 0.5-1.1-0.1-1.6 0.4-1.1 0.5-0.4 0.3-0.8 1-0.8 0.8-1.2 0.6-0.8 0.2 2.1 0.2 1.1 0.8 0.7 0.3-0.7 0.9-0.6 0-0.5 0.9-0.1 0.6-0.7 0.7-2-0.3-0.7 0.1-0.6 1.5-0.9 0.5-1.1 1-0.2 0.6-0.5 0.2-0.5 0.8-0.4 1.6 0.3 0.1-0.9 0.5-0.5 0.4 0.7 1.1-0.1 1.1-0.3 1.6-1.2 0.5-0.7 0.3 0.4 0.6-0.9 1-0.4 0.4-0.8 0.2-1.1 1.1-1 0.6-1.3 0.6-0.7 0.9-0.4 0.7 0.2 0.8-0.2 1 1 1.2-0.3 0.5-0.5 1.7-0.6 0.8-0.5 0.2-0.6 1.3-0.9 1.4-1.4 0.2 1.4-0.2 0.6 0.7 0.8-0.3 0.3 0.4 1.1 0.5 0.5-0.1 1.3-0.6 0-1 0.8 0.5 1 0.6 1.6 0.9 0.5-0.8 1.1-0.1 0.8 0.7 0.8 0.1 1z" id="25" name="Nagaland">
									</path>
									<path d="M566 701.8l0.9 0.1 0-0.4 0.8-0.2-0.7 1.2-1-0.7z m52.5-35.1l0.8 0.5 0.2 0.6-0.6 0-1.2-0.4 0.8-0.7z m20.5-26l0.7 0.2 2.5 0 0.9-0.2 0.6 1-0.2 1-0.7 0.1-1.5-0.1-1.5 0.8-1.3 1.4-0.5 0.1-0.1-0.4-0.3-0.3-0.9-0.1 0.7 1.1-1.3 0.1-0.3-0.3 0.9-1.2 0.1-0.8 0.4-0.4 0.5-1.6 0.6-0.5 0.7 0.1z m0.4-0.6l2.1 0.3-2 0.3-0.1-0.6z m-5.4-52.4l-0.3 1.4 0 1.3 1.3-0.1 1.3-0.3 0.3 0.3 0.2 1.1 0.6 0.1 0.3 0.6 0.6-0.1 2 0.5 1.7 0.1 1.3 1.4 0.8 0.1 0.2 0.5-0.1 0.6 0.4 0.9-1 1.7-0.2 1.3 0.7 0.8 0.4 0.7 1.6 0.2 0.6 0 0-0.8 0-0.2-0.2-0.2 0-0.1 0.1-0.1 0.4-0.7 0.2 0 0.2-0.2 0.5 0.2 0.7-0.4 0.3-0.1 0-0.7 0.3-0.9 0.2 0.3 1 0.4 0.6 0.1 0.1-0.1 0.4 0-0.1 0.5 0.1 0.3 0.6 0.6-0.6 0.8 0.5 1.1-0.2 0.3 0.4 0.5 0.2 0.4 0.2 0.5-0.2 0.2 0.4 0.3 0 0.1 0.2 0.1 0.5-0.1 0.1 0.3 0.3 0 0.4 0.2 0.2 0.1 0.1 0 0.2 0 0.2 0.3 0.1-0.2 0.5 0.2 0.5 0.4 0.4-0.1 0.4 0.1 1.1 0.1 0.5 0 0.1 0.2 0 0.6 0.3 0.3-0.3 0.1 0.7 0.2 0.1 0.1-0.1 0.3 0.2 0.6-0.1 0.2 0 0.6-0.2 0.8 0 0.4 0.7 0.7 0 0.5 0 0.1-0.9 0.5-2.5 1.7-2.7-0.2-2.1 0.1-1.2 0.2-1.8 0.8-1.4 0.6-1.6 1.7-0.4 0-1 0.9-1 0.7-1.7 1.7-1.3 1.6-0.5 0.5-0.3 0.8-0.5 0.6-0.8 1.5 0 0.6-0.8 1 0.2 0.6-0.1 1.4 0.6 1.9 0.5 1.1 1.1 1.5 0.3 0.6 0.4 1.6 1.7 3.3 0.3 1.4-0.4 1.5-2.6-0.4-1.6 0.7-0.6 0.6 0 1.3-0.5 0.6-0.5 1.2-0.7 1.1 1.4 0.1 0.5-0.1 0.1-1 0.4 0.6 0.2 0.2 0.2 0 1.8-1.6 1.2-0.6 1.1 0.1 1.3 0.4 0.7 0.1-3.7 2.5-1.6 1-3 2.3-0.5 1.2-0.4-0.1-0.5 1.3-0.3 0.6 0 1.8 0.5 0 1.1 0.6 0.3 1-0.7 1.1-1.2 0.8-0.9 0.4 0.3 0.4-1.4 0.7 0 0.3-2 0.8-1.2 0.7-1.6 0.6-0.9 0.9-0.7 0.3 0.2 0.5 0.7-0.7 0.3 0.1-1.6 2.6-2.1 2.1-0.3 0.8 0.1 0.7-0.8 0.9-1.3-0.2-0.3-0.3-0.4-1.5-1.2-0.9-1-0.2-0.5 0.3-0.3 0.8 0.5 0.4 1.4-0.2 1.1 1.7 1.2 0.9-2.3 0.7-2.3 1.2-3.3 1.1-1.2 0.4-1.7 0.3-0.1 0.2-3.1 0.6-3.7 1-5.6 2-3.4 1.8-1.7 0.8-1.3 0.8-2.5 1.1-2.8 1.6-1.5 0.9-5.3 4-1.1 1-0.7 1.1-0.9 0.8-2.5 1.6-1.8 1.5-1.6 1.4-1.5 1.5-1.3 1.8-0.3 0.7-0.6 0.7-1.1-0.3 0-0.9-0.8 0.1-0.7 0.8 0.6 0.8-0.8-0.5 0.1 0-0.2-0.5 0.1-0.1 0.2-0.9-0.2 0-0.5 0-0.6-0.2 0.1 0.8-0.2 0.4-0.5 0.1-0.6 0-1.1 0.2 0.3 0.8 0.4 0.1 0.2 0.6 0.4-0.1 0.3-0.3 0.7 0.7-0.3 0.5-0.3-0.2-0.4 0-0.2 0.3-0.1-0.2-0.1-0.1-0.4 0.2-0.1 0.2-0.3 0.5-0.4 0.7-0.5-0.8 0.2-1-0.3 0.1-0.1-0.2-0.3 0.2-0.4 0.5-1.3 0.3-0.4 0.4-0.3 0.2-0.4 0.5 0 0.5-0.2 0.4-1.1-0.6-0.6-0.4 0-0.1-0.2 0 0.3 0.6 0 0.2 0.1 0.2 0.3 0.3 0.2 0.3-0.9 1.1 0.5 0.9-0.7 0.8-0.8 0.3-0.8 1.1-1-0.4 0.4 1.8-0.5 0.1 0.1 0.6-1.1 0.4-0.6-0.3-0.8 0.6-0.5 0-1-0.5-1.2 0.7-0.7-0.2-0.9 0.3-1.5 0.7-0.8-0.2-0.6-1.1-1.4-0.8-0.9 0.2-1.7-0.3-0.8-0.3-1.3-0.1-0.2-0.7-0.7-0.5-0.3-0.8 0.2-0.5-0.2-0.8-0.8-0.9 0.1-0.5-0.9-2.1-1.6 0.8 0.3 1.5 0.4-0.1 0.5 1-0.2 0.6-0.9-0.6-0.6-2.1-0.7-0.3-0.2-1.1-0.6-1-0.9-1.2 0-0.4-0.4-1-0.9-1-0.8 0.8 0.3 1-0.8 0.6-0.1 0.9-0.9 0-0.6 0.8-0.1 0.8-1.2-0.2-0.1-0.5 0.7 0-0.3-1.4-0.4 0.4-0.5-0.8-0.6 0.2 0.2 1.2 0.4 0.4-0.1 0.9-0.9 0.1 0 0.6 0.5 0.8-0.7 0.4-1-1.1-0.2-0.6-0.7-0.2-0.9 0.2-0.2-0.5-0.7 0.1-0.2 0.7-0.7-0.1 0.2 0.8 0.4 0.4 1.2 0.1 0.1 0.9-0.6 0.3 1.4 1.8 0.8 0.4-0.5 0.4 0.1 0.6-0.9 0.4-0.4 0.5-1.3 0.3-0.6 0-0.9 0.3-0.4 1.2-1-0.1-0.5 0.4-1.3 0.2-0.6-0.6-0.6 0.1-0.6-0.5-1.5 2.1-0.4 0.3-0.9 1.8-1.3 0.6 0.3 1.2-0.5 0.6 1 0.4-0.4 0.5 0.3 0.5 0.6 0.5 0.7-0.3 0.6 0.4-0.5 0.6-0.8 1.4-1.2 1.1 0.7 0.4 0.2 0.6 0.8 1-0.3 0.5-0.6 0.2-0.9-0.2-0.7 0.1-0.5 0.7-0.6-0.1-0.9 0.2-0.2-0.3-0.9 0.2-0.6-0.9 0.2-0.4-0.2-0.8-0.5 0.2-1.7-0.9-0.7-0.2-0.8 0.7 0.4 1-0.3 0.7 0.2 0.6-0.6 0.9-0.5 0.1-0.6 0.5-1.1 0.2-0.1 0.4-1.2 0.2-0.7 1.2 0.1 0.5-0.5 0.5-0.8-0.7-0.7-0.3-0.1-0.8 0.2-1.4 0.3-1.7-1.5-0.8-0.7-0.1 0-0.6 0.6-1.1-0.8-0.2-0.5-0.4 0.4-0.5-0.1-1.3-0.9 0-0.5-0.4-0.3-0.8-1.3 1.5-0.3 0.7-1 0.9-0.7 1.1-0.5 0.4 0.7 1.4-0.2 0.7-0.6 0.3-0.5 0.8 1.3 0.1 0.3 0.4-0.3 0.8-0.5 0.5-1.1 0.2-0.2 1.2 0.1 0.6-0.9 0.7 0.1 0.8 1.3 0.4 0.6 0.8-0.3 0.6-0.8-0.7 0 1.8 0.3 0.4-0.2 1.3-0.5-0.2-0.6 0.4-0.6-0.7-0.7 0.4-0.3 0.5 0.5 0.9-0.2 0.8-0.8 0.3-0.2-0.5-0.6 0-0.8-0.6-0.6 0-0.5-1.1-1.1 0.2-0.1-0.5-1.2-0.1-0.7-0.5-0.4 0.7-0.5 0-0.7-0.4-0.8 0.4 0 0.8-2.3 1.4-0.7 0.2-0.5 0.4-1.8 0.6-0.5 0-1.1 0.5-0.5 0.9-0.9 0.7-1.9 1.1-0.5-0.8-0.9 0.3-0.6 0.7-0.1 0.6-1.1 0.9-1.2-0.5-0.7 0.4-2.5 0.5-0.4-0.7-1.1 0.3-0.4-0.2-0.6 0.6-0.8-0.1 0-0.7 0.5-0.7-0.3-0.5 0.2-1 1.4 0.4 0.4-1-0.2-0.7 0.4-0.8 0.7-1 0.1-1.1-0.1-0.9 0.2-0.7 0.9-1.6 0.1-1.3 0.4-1-0.6-1 0.7-1.8 0.1-0.9 0.7-0.1 0.7-0.4 0.8-1 0.8 0 1.5-0.5-0.1-0.8 3-0.3 0.6-2.3 1.2-1.1 1.8-1.7 0.4-1 0.7-0.5 0.5 0.1 0.1-1.1 1.6-0.1 0.3-1-0.9-0.3-1-0.8-0.4-0.1 0.2-1.2 0.7 0.7 1.1 0.2 0-0.9 0.5-0.5-0.2-0.4 0.7-0.6 0.5-0.1 0.9-0.5 0.6-0.2 1.5 0.2 0.4-1.6 1.9-0.6 0.5-0.6-0.2-0.3 0.3-1.1-0.2-0.8 0.4-0.9 0-0.5 1.5-0.8 0.9 0.1-0.6-4-1-1.4 0.5-0.7-0.6-1.4-0.7-0.6 0.3-0.9-0.2-0.9-0.6-0.5 0.2-0.4-0.3-0.5 0-1.6 0.6-0.9 0.4-1.5-1.3-0.5-0.1-0.7 0.9 0 0.3-0.4 0.3-1.3-0.5-0.6-1.7 0.2-0.8-1.3 0.2-0.5-0.4-0.7 0.1-0.6-0.8-0.2-0.3 0.4-1.3 0.1 0.8-1.3-0.1-1-0.3-0.7 0.6-1.5-0.2-1.6-0.3-1.2 0.2-1.3 0.5-0.5 0.1-1.1-0.3-0.3-1.8-0.3-0.7 0.1-0.7-1.4 0.1-0.7-2.2-0.9-1.3-0.7-0.4-0.6 0.1-0.9-0.4-0.4 0.3-0.7 0.4-1.9 0.5-0.9 0.5 0.1 1.6-2 0.3-0.1 1 1 0.7 1 0.7 0.2 0 0.8 1.2-0.6 0.3-0.5 2 1.4 0.5 0 1.2 0.6 0.6 0.5 0.7 0 0.9-0.6 1.1 0.9 0.2 1 0.9 1.7 0.1 0.5 0.7 0.9 0.3 0.8 0.4 0.3 1-0.9 0.7-1 0.9-0.5 0.9-0.3 0.6 0.3 0.6-0.2 0.7 0.6 1.1 0.1 0.5 0.5 0.8-0.1 1 0.4-0.9 1.2 0 0.9 0.3 1 1.4-0.4 0.9-1.4 1.8-0.1 0.4-0.8-0.4-2.1 0.3-1.4 0.1-1.4-0.4-0.3-1.7-0.3-0.9 0.1-0.3 0.4-1.1-0.1-0.2-0.3-1.1-0.5-1.4-0.1-0.9-0.6-1.2-0.2-1.6-0.5-0.1-0.4 0.1-1-0.1-1.1-0.4-0.9 0.1-0.6 0.8-0.7 0.2-0.8-0.3-1.4 0.1-0.9 0.7-0.5-0.2-1.1-0.9-1 0.1-0.7 0.4-0.8 0-0.9 0.5-0.3 0.2-0.6-0.4-0.4 0-0.7-1 0.1-0.3-2-1.1-0.5-0.2-0.6-0.6-0.5 0.6-0.8-0.1-0.7 0.6-0.4 0.4-0.9-0.1-1.2-0.5-0.6-0.3-0.7 0.1-1.1-0.3-1.1 0.1-1.2-0.2-1.8 0.5-1.6 0.7 0.7 0.5-0.2 0.6 0.3 0.2 0.9 0.3 0.4 0.7-0.1 0.6 0.3 0.2-0.5 0.6-0.4 0.3-1-0.1-1 2.4-1.5 1-1.7 0.8-0.7 0.6-1.1-0.5-1 0.6-0.5 0.6-0.9-0.3-1.2 0-0.5 0.9-0.1 0.8-0.2 0.5 0.1 0.7-0.2 1.3 0.1 0.8 0.6 1.1-0.6 0.9-0.2 1.3 0.5 0.8-0.5 0.7 0.2 0.7-0.2 0.5-0.5 0.3 0.8 0.5-0.1 1 0.4 1.1 1 1 0.4 1.7 0.3 0.4-0.2 1-1 1-0.2 0.6-2.3 0.3-0.8-0.1-1 0.3-0.6 0.6-0.4 0.9 0.3 0.2-1-0.5-0.2-0.1-1.1 0.4-0.5 0.1-1.1 1.3 0.4 2.3 0.9 0.9-0.3-0.3-0.5 0-1.4-0.4-0.3-0.4-1-0.7-0.3-0.3-1.5 0.5-1.9 0.4-0.5-0.2-0.8 0.2-0.9 0.5-0.6 1.1-0.9 0.9-0.4 0 1.1 0.8 0.5 0.2-0.8 0.5-0.5-1.5-0.6-0.7-0.7 0.4-0.7 0.8 0 1-1.7-0.3-1.2 0.5-1.3 1.1 0.5 0.5 0-0.2-1.4 0.9-0.1 0.6 0.2 0.3-0.8-0.4-0.7 1-1.5-0.5-0.5-1.1-0.2 0.1-0.5-0.8-0.7 0-0.5 0.5-1.1-0.5-0.6 0.2-1.2 1.5 0 0.6-0.4-1.5-1.2 1.7-2.2 0.4-1.4 0.9-1 0.4 0 1.2-0.8 1.8 0.2 0.9-0.6 0.3-0.7 0.6-0.5 0.8-0.3 0.1-0.7 0.7-0.4 0.6-0.6 1.2 0.1 0.6-0.7 1.8 0.1 1.2-0.5 0.4-1.3 0.9-1 0-1.2-0.6-0.3-0.3-0.4-1.3-0.7 0-0.6 0.9-0.1 1.9 0.4 0.7 0.8 0.9 0.6 1.1 0.2-0.1 0.8 0.1 0.9 0.5 0.8 1.1 0.6 0.3 0.4 1.8 0 0.7 0.9 0.8 0.4 1.2 0 1.6-0.4 0.8 0.2 1.1-0.3 0-0.5 0.7-0.5 0.9-0.2 0-0.7 0.9-0.5 1.5 0 1-0.2 2-0.3 1 0.6 2.8 0 0.3-1.1 1.7 0 0.4 0.4 0.8 0.2 1.4-0.6 0.1 1 0.9-0.1 0.3-0.6 1.2-0.6 0.3 0.3 3.1-1.3 0.8 0.2-0.1 0.6-0.5 0.4 0.2 0.8 0.4 0.4 0.3 1.3-0.3 1.1 0.6 0.3-0.2 0.9 1 0.1-0.3 0.8-1.2 0.7 0.1 0.8-0.2 0.8-0.7 1.6 0.1 0.2-0.9 1 0.2 0.6-0.2 0.9-1.5 0.8 0.2 0.5 0.5-0.1 0.6-0.9 0.9-0.2 0.8 0.1 1 0.4 0.1 0.4 0.6 0.7 0.8-0.3 2.4 1.2 0.1 1.2 0.5 0.3 0.4-0.4 1.1-2.5 1.7-1.7 1.3 0.1 0.1-1.1 1.6-0.1 1.6 0.8 1 0.7 0.6 0.1 1.1 0.7 1.5 0.5 0.3 0.2 1.4-0.3 0.5-0.3 1.2 1.6 0.3-0.3 1.1-0.1 0.8-0.4 0.4-0.6 1.2-0.5 0.4-0.4 0.9 1.2-0.5 0.3-0.9-0.3-0.6 1 0.3 0.5-0.8 1 0.1 0.7 0.8 0.4 2 0.1 1.8 0 0.6-1 0.6-0.6 0.5 0 1.1-1.9 0.1-0.4 0.8-1.1-0.3-0.7 1.1-2-0.3-0.5-0.8-0.6-0.8-1 0.5-0.9 1.1-1.4-0.4-0.4 0.5-0.5-0.9-0.3 0.8-0.9 0.1-0.7-0.4-1.6-0.5 0.1-1.4-1.3 0.5-0.9 0.1-0.7 0.9-0.3 1.1-1-0.4-0.3 0.7-0.7 1.1 0.7 1.1 2 1.5 0.4 1.9 0.3 0.6 0.8 1.6 0.3 0.5-0.2 0.2 0.8 1.1 1.2 0.2 0.7 0.5 0.3 0.5 0.7 0.7 0.3 1.7 1.2 0.5-0.7 0.7 0.1 1.4-0.7 0.3 0.6 0.5 0.2 0 0.6 1 0.3 0.9-0.1 0.4 0.6 0.8 0.2 1.1 0.5 0 1 0.8-0.1 0.4 0.7 1.4 0.1z" id="26" name="Orissa">
									</path>
									<path d="M399.3 989l0.1 0.2 0 4.8-0.1 0.6-0.5 0.1-0.8-0.1 0.1-0.2-0.1-0.3-0.1-0.1-0.2-0.1-0.3-0.2-0.1-0.3 0.5-0.1-0.6-0.4-0.1-0.4-0.3-0.1-0.2 0 0.2-0.2-0.1-0.2-0.5 0.2-0.2-0.1-0.2-0.3-0.2-0.2-0.5-0.1 0-0.1-0.1-0.1-0.2 0.1 0.1-0.2-0.4-0.1 0-0.2-0.2 0 0.1-0.1 0.5-0.4-0.2-0.1-0.4-0.3 0.4-0.2 0.4 0 0.4 0.3 0.2-0.2-0.2-0.2 0.1-0.3-0.1-0.1 0-0.1-0.2-0.2-0.1-0.4 0.4 0 0.6 0.2 0.5 0.1 0.5 0.2 0.3-0.4 0.2 0 0.2 0.1 0.5-0.1 0.4 0.2 0.5 0.1z m-4.6-34.6l0 0.4 0.6 0.3 0.3 1.4 0.2-0.3 0-0.4 0.6-0.2 0.1-0.3 0.2-0.2 0.1 0.1 0.5 0.1 0-0.5 0.2-0.2 0.2 0 0.2 0.5 0.6 0.3 0.4 0-0.5 2-0.4 1.1-0.4 1.5-0.5-1.1-0.6-0.1-0.4-0.6-0.9 0.4-0.8 0-0.4-0.2 0-0.7-1.2 0.3 0-0.4 0.7-0.1 1 0.2 0.5-0.6-0.7-0.8 0.1-0.5-0.8 0 0-0.7 0.6-0.2-0.2-0.8-1.8 0 0.2-0.6 0.1-0.2 0.3 0.1 0.3-0.4 0.8-0.3 0 0.7 0.5 0.7 0.4 0 0.2 0 0.2-0.3 0.8 0.3-0.3 0.2-0.6 0.3-0.3-0.2-0.1 0z m-150.4-2.8l-0.4 0.7-1.1 0.1-0.1 0.8 0.6 0.6 0.2 1-1.3-1.7-0.6-0.7-0.2-0.7-0.1-0.3 0-0.7 0-0.1-0.1-0.8 0.1-0.2 0.5-0.2 0.1 0.1 0.2 0.2 0.3-0.2 0.4 0.2 0.4 0 0.2-0.4 0.9-0.6 0-0.2 0.3-0.2 0.2-0.1 0.7 0.2 0.7 0.2 0.2-0.4 0.2 0 0.3 0 0.4 0.2 0.1 0.2-0.3 0.3-0.4-0.1-0.1 0.2-0.3 0-0.6 0.5-0.5 0.3-0.3-0.1-0.3-0.1-0.4 0.1 0.2 0.5-0.6 0.9 0.1 0.2 0.2 0.1 0.2 0.2z m238.2-164l-0.9 0.3 0.2-0.4 0.7 0.1z m0.4-0.5l-0.9 0.2-0.6-0.4-0.4 0.4 0.5 0.6-0.4 0-1-0.7-0.8 0.1-0.5-0.3 0.6-0.7 0.8 0.6 2.1-0.1 0.6 0.3z" id="27" name="Puducherry">
									</path>
									<path d="M294.1 255.4l-0.2 0.6 0.2 0.6 1.1 1.4 0.9 0.4 0.2 1.1 0.4 0.5-0.6 1.1-1.2-0.1 0.4-0.4-0.1-0.2-0.2-0.2-0.5 0.5-0.3-0.4 0.1 0-0.3-0.4-0.5-0.1-0.2 0.1-0.2 0.1-0.1 0.1-0.1 0.2-0.2 0.3-0.3 0.3-1 0.4 0.1 0.1 0.6 0.8 0.2 0.8 0 0.1 0.3 0.2 0 0.2 0.3 0.3 0.1 0.3 0.3-0.1 1.7 0.9 0.3-0.5 0.2-0.2 0.3 0 0 1 1.5-0.4-0.2 1.2 0.5 0 0.9 0.8 0.5 0.8-0.5 1.3 0.1 0.7-0.6 0.4 1.2 0.6-0.2 1.2-0.6 0.2 0 1.3-0.2 0.8 0.4 0.3 0.3 1 0.6 0.6-1 1-0.7 0 0.1-0.8-0.5-1-0.6-0.3-0.5-0.7-0.9 0.9-0.9-0.2-1.1-0.4-0.8 0.2 0 0.6-0.9 0.5 1.3 1.3-1.3 1.4-1 0.2-0.6 0.8-1.3 1-1.1 0.2-1.2 0.4 0 1 1-0.9 0.5 0.1 0.7 1.1-0.2 0.4 1.1 0.4 0.1 0.8-0.6 0.6 0.2 1.4-0.3 1.6-1 0.6-1.2-0.8-0.8 0.7-1.1 0.2-0.3-0.8-1.3-0.1-0.3-0.9-0.6-1 0.1-1.3-0.3-0.7-0.8 0-0.6 0.6 0.7 1-0.5 0.5 0.1 0.7-1.4 0-0.7 0.7-1.2-0.3-0.4 0.2-1-0.3-1.4-1.4-0.2 1.1 0.9 0.8 0.8 0.1-0.8 1-1.1 1.8-0.3 1.2 0.5 2.3-0.9 0-0.4 0.7 0.5 0.2 0.1 1.1 0.5 0.4 0.9 0 0.6 0.6-0.5 0.6-1.1 0.3-1 1.1-0.9 0.1-0.8 0.8-0.7-0.6-0.6 0.2-0.1 1-0.6 0.3-0.6 0.9-0.5-0.2-0.7 0.1-1.1 0.8-1.3 0-0.7-0.3-0.6-0.6-0.6 0.3-0.5-0.2-0.7-0.9-0.8-1.6-0.8 0.3-0.9-0.7-0.8 0.5-1.4 0.2-0.3 2.1-0.7-0.1-0.4-0.6-1.4 0-0.1 0.7-2 0.4-0.2-0.8-1.7-0.4-2.2-1.3 0 0.9-1.6 1-0.4 1-0.2 0.9-0.6-0.1-0.9 1 0.4 0.7-1 0-0.3 1.5-0.7 0.5-0.2 0.7 0.8 0.5-0.5 1.1-1.8 0.4-0.9-1.2 0.3-1-0.7-0.6-0.9-0.3 0-0.8-0.5-0.7 1-0.5 0.3-0.6-0.3-0.6 0.3-0.8 0.8 0 0.4-0.8-0.7-1.4-0.5-0.3 0.1-1.4-0.6-0.3-0.9 0.7-0.2 1.1-0.6 0.3-0.3-0.8-0.7 0.1-0.3-0.6 0.3-0.8-0.6-0.2 0-0.6 0.5-0.4 0.1-1.1-0.9-0.6-0.4 1.3-0.9-0.1-0.8 0.7-0.9 0.3-0.7-1 0.1-0.3-1-0.5-0.6-1.6-1.8-0.6-0.8 0-0.9-0.6-0.7-0.8-0.9 0.7-1.3 0.3-0.4 0.2-1-0.3-0.5 0.8-1.4 1.1 0 0.7-1.9-0.4-0.4-0.4-1.8-0.7-1.8-0.1-1.4-0.2-0.8 0.1-3.9-0.3-1.3 0-6.2-0.5-6.1-0.1-0.3-1 0.6-2.3 0.6-0.5 1.5-2.4 0-0.6 0.2-2.1-0.3-2.6-0.8-1.6-1.3-1.8-0.7-0.5-0.1-0.9 1-1.3 0.9-0.2 0.3-0.9-0.2-0.6 1.1 0.1 0.3-1.3 0.5-0.6 1.8-1.3 0.5 0.6 0.8-0.3 0.2-0.6-0.6-0.4 0.8-0.7 0.1-1 1.1-1.2 0.9-0.2 1.6-1.5 1.2-1.9 0.7-0.2 0.7-0.8-0.3-1.2 0.9-0.2-0.2-0.7 0.7-1 0.3-1 0.5-0.2 1.1 0.2 0.3-0.2-0.3-0.8 0.1-0.5 1-0.8 0.8-0.3 0.1-0.5 1.7-1.6 0.9-0.1 0.3-0.4 1.1-0.8-0.2-0.5 0.2-0.9 0.4-0.4 0.1-0.8 0.7-0.2 0.9 1 1.9-0.5 1-0.7 0.3-0.9-0.5-1.3-1.8-0.3-1.1 0.3 0.2 0.7-0.4 0.7-0.7 0.3-0.7-0.1-0.1-1.2-1.3-0.7-0.2-1.8 0.5-1.1-0.1-0.6 0.4-1-0.4-1 0.6-1 0.8 0 1.4-3.9 1.1-1.1 0.6-1.5-1.6-1.6-0.6 0.2-0.2-0.9 0.9-0.4 0.2-0.5-0.1-1.1-0.8-2.2-1.7-3-0.4-1 0-0.9 1.2-0.5-0.3-0.8 0.6-1.5-0.2-0.6 1.4-1.4 0.1-0.8 0.8 0.1 1-1.1 0.8-0.5 0.9-0.1 0.2-1.4 1 0.9 2.2-1 0.6-0.6 0-0.7 0.9-0.6 0.8-0.9-0.2-0.6 1.3-0.2 0.2-0.5 0.6-0.1 1.2 0.4 1.3 1.1 0.9-0.4 0.9-0.1 0.6-0.7 0.6-0.2 1.2-0.8 1.1 0.1 0.2 0.5 0.9-0.6 0.3-1.3 0.6-0.1 0.9 1.2 1.2-1 0.4-1.2 0.8-0.5 0.5-1.9-0.2-0.6 1 0 0.6-0.9-0.2-0.8 0.3-0.4-0.9-0.8-0.1-1.4-0.5-0.6 0.1-0.1 0-0.1 0.2-0.1 0.4 0.2 0.1 0.1 1.1 0.4 1.3 0.2 0.5-0.1 0.1 0 1.3-0.5-0.1 0.8 0.7 0.3 0 0.9 0.5 0.4 0-0.1 0.4-0.7 0.3-1.7 0.7-0.8 1.6-0.8 1.9-0.3 1.3-0.5 0.9-0.7 1.2-2.4 1.1 0.1 0.8-0.5 0.8-0.9 0.4-1.2 1.2-1.5-0.1 0.7-0.5 0.8-0.1 0.7 0.1 0.9 2 2 0.7 1-0.3 0.5-1.8 0.6-1 0.8-2.8 3.1-0.3 0.6-0.6 0.5-2 0.4-0.8 0.4-1.1 0.8 0 2 1.2 0.3 0 1.3-1.6 1.8-1.1 0.8 0.7 0.6 1.8-0.5 1.4 0.8 0.6 0.9 0.8 0 1.4 1.4 0.7 0.5 1.4 0.3 1.1 0.5 0.9 0.8 1.9 4.1 0.1 0.9-1 0.3 0.5 1.3 0.3 0.2 1.1 3 0.9 1.7-0.1 0.7 0.7 1.2 0.7 0.5 0 0.4 1.4 2.2 0.8 1.7 0.7 2.1 0.5 0.4 0.5 1.2-0.8 0.8 0.2 1.2 0.9 0.5 0.2 1.4 1.2 0 0.5-0.3 1.2-0.1 0.1 0.4 1-0.4 0.4-0.4-0.2-0.7 1.2-0.1 0-1.3-0.5-1 1.1-0.1 0.4-0.4 0.1-1 1 1.7 0 0.8 1.2 2.1 0.7 0.8 0.7-0.2 0.7 1.5 0.8-0.4 1.2 1.1 0.8-1 1.1 1.2-0.9 1 0.4 0.4 1-0.5 0.6 0.6-0.8 0.4-0.7 0.8 0 1 0.3 0.3-0.3 0.9 1.2 0.7-0.7 1.3-0.2 1 0.5 1.2-0.1 0.7 1.4 0.9 0.5 0.5 0.9-0.1 0.7 0.4 0.4 0.9 0.8 0.4 0.7 0.9z" id="28" name="Punjab">
									</path>
									<path d="M217.3 293.6l-0.5 1.4 1 0.2 0.6 1.4-0.7 1.1-1.4 0.5-0.7 0.9-0.2 0.6 0.2 1.7 1.9 0.1 0.4-0.5 1.1 0.1 0.8-0.6 0.4 0.6-0.1 1.2-0.8 2.6 0.2 0.8-0.3 0.3-0.2 1.6 0.1 1.2 1.3 1 0 0.4-0.6 1.1-0.5 1.3-1.5-0.2-0.1 1.5 0.7 0.1 0.6 0.7 0.1 0.8 0.9 1.2-0.1 1 1.5-0.1 0.3-1.6 1.3 0.3 0.8-0.2 0.7 0.6 1.5-0.2 1.2-1.5 1.3-0.2 0.8 0.7 0.6 0 1.3 0.8 0.3 1.1 0.5 0.7-0.4 0.6 0.5 0.9 0.8 0 0.5 0.4 1.1-0.8 0.5 0.1 0.4 1 0.9 1.2 1.1 0.2 0.2-0.6 1.1-0.1 0.6-0.8 0.5-0.1 0.5 0.9 1 0.4 0.4-0.7 1.3-0.1 0.1-0.7 1.5-0.8 0.2 0.6-0.1 1-0.3 0.7 1.1 0.3 0.1-0.8 1-0.6 0.6 0 0.1 0.9-0.4 0.4 0.5 1.6-0.5 0.7-0.6 0-0.3 1.1 1.2 0.6-0.5 0.7 0 1.5 1.7 0.2 0.3 1-0.2 0.9 1.3-0.1 1.3 0.4 0.2 1.3-0.4 0.6-0.2 0.8-1 0.1-0.1 0.5 0.8 1-0.1 1.6 0.9 0.9-0.5 1.9 0.6 0.6 0.5 1.5 0.3 3.3 0.3 0.2 0.3 1.1 0.7-0.1 0.3 0.4 0.8 0 0.3 0.7 0.4 1.7 1.2 0.5 0 0.4 0.8 0.9 1.6 0.4 0 0.6 1.5 0.6 0.2 0.7-0.7 0.7 0.2 0.5 0.6 0.2 0.5-0.4 0.9 0.2 0.2 0.4 1.3 0.3 1.7 0.8 0.1 1 1 0.2 1.1 1.7 1.1 0.6-0.4 1 0.1 0.5 1.4 0.7-0.2 0.8 0.7 0.1 0.3 1.1 0.6 0.6-0.3 0.5-0.7-0.1 0.1-0.9-1.3-0.2-1.2 0.9-0.1 0.9-0.5 0-1.1 0.8-0.3 0.5 0.8 0.4 0.6 0 0.9 0.9 0.4-0.8 0.7 0.5-0.6 0.5-0.2 0.7-1.2 0-0.1 0.7-0.6 0.7 0 0.5 1.1 0.1-0.7 0.9-0.1 1-0.7-0.1-0.7 0.2 0.2 0.7 0.9-0.2 0.8 0.4-0.1 1.8 1.1 0 1.4 0.6 0.4-0.3 0.7 0.2 0.2-0.7 1.2 0.6 0.2 0.8 1.5 1 1.2-1.6-0.5-0.6-0.1-0.7 0.3-0.7-1-0.4 0.4-2.4-0.9-0.8 0.7-1.1 1-0.3-0.9-0.8 0-0.4 1.9 0.2 0.6-0.6 0.7 0.2 0.6 0.6 0 0.8 0.9 0.3 0.7-0.3 0.6-1.4-0.6-0.3-1-1.5 0.9 0.2 0.8-0.8-1.2-0.8-1.5-0.8 0.1-0.4 1-0.2 0.9 0.3 0.6 0.4 0.2 0.9 0.6 0.2 0.7-0.4 1 0.1 0.4-0.3 1.2 0.1 0.6 0.7 0.2 1-1.4-0.1-0.3 0.6 0.8 0.3 0.9 0.8-0.5 0.3-0.8-0.2-0.1 0.6 1.2 0 0.7 0.5 0.9-0.2 0 0.9-0.2 1.4 0.5 0.3 1.8-1.4 1.3-0.1 0.8-0.3-0.3-1-0.1-1.8 1.1-0.2 1-1.4 1 0.1 0.5-0.6 1.3-0.5 0.1-0.5-0.2-0.9 0.5-0.2 1-1 1 0 0.1 0.5 1.2 0.3-0.6 0.5 2 1.7 0.7 0.2-0.5 2.8-0.6 1.1-0.4 1.7 0.2 0.8-0.2 2 0.7 0.3 0 0.9-0.4 0 0.1 1.5-0.1 0.8-0.7 0-0.2 0.5 0.2 0.6-0.4 0.8-0.2 2.6 0.9 0.7-0.8 0.8 0.6 0.9 0.8-0.7 1.3 0.7 0.3-1.9 0.5-1.4 1.3-0.2 0.7 0.7 0.8-0.3-0.2-0.8-0.7-0.1-0.9-1 0.5-1.3 1.1 0.4 1 0.9 1.6 0 0.1-1 0.8-0.2 0.5 0.7 1.2 0.1 0.4 0.4 1.4-0.8 1 0.7-0.1 1.2 0.3 0.8-0.5 0.3 0.2 0.6 1.1 0.2 0.3 2.1-1.1 1.6 0.5 0.6 0.8 0.1-0.6 0.9 0 1.2 0.3 0.6 1.2 0.2 0.6 0.6 0 0.8 1.2 0.8-0.4 1.4 0.5 1 1.2 0.6 1.1 0.1 1.5 1.5 1.1 0.6 0.6-0.4 0.8-0.1-0.1 1-0.7 0.5 0.6 0.5-0.1 0.6 0.6 0.3 0.7 1-0.1 0.9 1.1 0.5-0.7 1-0.8 0.2-0.5-0.2-0.3 0.8-0.5 0.6 0.2 0.4-1.8 0.5-0.9 1.1 0.3 0.8 0.6-0.6 0.7 0.1-0.2 1.2 1.3 0.7 2 0.3 0.5-1 1.1 1.8 0.6 0 0-1 0.5-0.3 0.3 0.8-0.3 1-0.7-0.1-0.8 0.4-1.7 0.5-2.1 1.4-3.3 1-1 0.6-0.1 0.5-1 0.3-0.2 1 0.8 0.9-0.4 1.2 0.8 0.2 0.4 0.5-0.5 0.8 1.1-0.2 0.4-0.5-0.4-0.8 0.6-2.3 0.5 0.1 0.3 0.8 1.5 0 0.2-0.3 1.3-0.1 0.5-0.5 1.1-0.4 0.5-0.6 1.5-0.3-0.2-0.9 0.5-0.7 0.8-0.2 0.6-0.4 0.8 0.6 0.6-0.2 2.2 0.9 0.7 0.6 0.6-1 0.7 0.1 0.4 0.5 0.8-0.5 0.4 0.6 0.5-0.6 0.8 0.1 0.7 1.3 0.3-0.3 0-1.2 0.6 0 0.9 0.5 0.5-0.3 0.4-0.7 0-1 0.9-0.1 1.7 0.4 1.5 0.5 0.9 0-0.4 1.2-0.7 0.7-0.8 0.2 0.2 1.6-1.7 0.4 0.6 0.9-0.1 0.4-1 0-0.9-0.4-0.8 0.5 0 0.7 0.5 0.8-0.7 0.5-0.1 1.9-0.4 0.3-0.9-0.4-1.9-0.5-0.8 1-1 0.5-1.3-0.1-0.4 0.5-0.1 0.8-0.3 0.5-1.3 0.2-0.7 0.5 0.1 1.1-0.4 0.7-0.5 0.1-1-0.1-1 0.4-0.4 1.1-1.1 0.5-0.8-0.3-1.5 1-1 1.1-1.6 0.5-1 1-1.6 0-1.6 0.3 0.4 1.1-0.3 0.5-1-0.1-0.5 0.2-0.7-0.3-1.7 0.9-0.3 1.2-1.4 1.5-1 0.5-1.5 1-1-0.3-1.2 0.2-0.5 0.3-0.6 1.4-0.4 0.3-1.1 0-1 0.4-0.7 0.6-0.3 0.9-1.9 1.2-1.8 0.4-0.5 1.4-1.4 1.1 0.3 0.7-0.7 1 0 0.5-0.8 1-1.2 0.1 0.1 0.8-1 0.7-0.7 0.1-1.3-0.5-1.2 0.3-0.3 1.1-1.2 0-0.4 0.3-0.6 1.1-0.6 0.5-0.7 1.1-0.2 1.2 0.2 0.8-0.1 0.5-0.8 0.1-0.7 0.4-0.2 0.9 1.2 0.8-0.4 0.9 0.5 0.6 0 1-0.2 1 0.5 1.1-0.1 0.8 0.6 0.8 0.7 1.4 0.2 1.1 0.8 0.4 0.5 1.6 0.8 0.6 0.4-0.2 1.5 1.3 1.1 0.1 0.9-0.2 0.9 0.4 0.2 0.8 2.4-0.5 1.7 0.3 1.3 0.9-0.1 0.7 0.9 0 0.2-0.7 1.1-0.2 1.1 0.1 0.5-0.9 0.8 0 0.5-0.6 1.3 0.2 1.3 0.8 1.3 0.1 0.2-0.7 0.7-0.1 0.1-1.6 1.4-0.9 0.7-1 0.8-0.4 1.9 0.8-0.6 1 0.4 0.7-0.4 1.2 0.7 0.2 0.4 1-0.3 0.8-0.6 0.5 0.5 0.8 0.6 0.2 0.9 0.7 0.3 1.2-0.9 0.2-0.1 2.5-1.3 0.9-0.6 0.1-1 0.5-0.6-0.8-0.8-0.6-1.4 0.4-0.8-0.3-0.9 0.1-0.4 1-1 0-0.5 0.7-1.3 0.4-3.2-0.7-0.5 0.8-0.5 0.3-1.8 0.5-0.7 0-0.4 0.9-0.1 1.5 0.2 0.6 1.8 1.7-0.4 0.8 1.2 0.6-0.7 0.9-1.1 0.4-2-0.1-1.2 0.6 0.5 0.8 1 1.3 0 0.7 0.5 0.1 0.9-0.2 0.6 0.3 0.6-0.1 0.8-0.6 0.6 0.2 0.3 1 0.7 0.6 0.9 0.1 0.5 0.4 0.1 0.8 0.8 1.5 0 1.8 0.2 1.1-0.5 1.4-0.6-0.1-0.3 1.1-1.1 1-1.1 0.5-0.6-0.2-0.9-0.8 0.1-1.8-0.6-0.5-0.4 0.8-0.5 0-0.3-0.8-0.7-0.1-1.1 0.6 0.7 1.4 0.4 0.4 0.2 0.7-0.3 1 0.3 0.2-0.3 1.1 0.3 0.7-0.1 0.8-0.4 0.3 0.3 1.2 0.5 0.6 0.5 1.5 1.4 1.5 0.1 0.4 0.9 0.8-0.4 0.5-0.6-0.1-0.5 2.2-1-0.4-0.5 0.1-1 0.5-0.9 0.2-0.4-0.2-0.7-1.5-0.5-0.3-0.9 0.1-0.3 0.3-0.6-0.4-0.9-0.8 0.4-1.4 0.5-0.7-0.3-1.3-0.5 0.5-1.3 0.3-0.8 0-0.1 0.8-1.5 1.1-0.2 0.4 0.5 0.8-0.8 0.5-1.1 0.2-0.4-0.6-0.1-0.8-0.4-0.5-1.1-0.6-0.4 0.4-1-0.3-0.4 0.6-2-1.5-1.2 0-1 0.5-0.4 0.8-1-0.5-0.8 0.2-0.6-0.4-0.1-1.3-0.3-0.6 0.4-1-0.7-0.8-0.5 0.6-0.1 0.8-0.7 0.1-0.2 0.4 0.4 1.4-0.1 0.3-1 1.2-0.1 1 0.4 0.3 0.2 1.4-0.3 0.5 0.2 0.9-1 0-0.2 0.2-1.9 0.6-0.6 0.9-1.2 0.7-1 0.2 0 1 0.7 0.9-0.2 1.6-0.9 0.4-0.6 0.7-0.4-0.1-1.4 0.8-0.9-0.4-1.7 0.9-0.8 0.6-0.6-0.1-0.1-0.9-1.1-0.8-0.8-0.1-0.2 1 1 0.5-0.2 1.4-0.3 0.4-0.8-0.1 0.3 1.2-0.3 0.5-1.3-1-1.2-0.2-1.1 0.2-0.6-0.6 0.1-0.7-0.2-0.8-0.9-0.7-1.1-0.6-0.6-0.7-1-0.4 0.2-2.2 1-0.9 0.7-1.7 0.6 0.7 1.4 0.5-0.1 0.7 2.3 0 0.2-0.7 0.9-0.6 0.6 0.6-0.1 0.7 0.6 1.1 1.2-0.4 0.1-0.6 0.8-0.1 0.6-1.4 0-1 1.7-0.3 0-1.4-0.6 0.2-0.8-0.3-0.3-0.9-1.2-0.2 1-3 1.1-0.3 0.2-1.2 0-1.5-0.5-0.5-1.1 0.1-0.9-1.4 0-1.5-0.1-0.6 0.7-0.2 0-0.7 1-1.1 0.2-0.6 0.8 0.3-0.1 1.1 0.6 0.5 1.1 0 1.4-0.9 0.2-0.3 0.1-1.4-0.2-0.5 0.7-1.2-0.6-0.5 0.1-1-0.9-0.1-0.4-1-0.7-0.3-0.2-0.6-0.1-1.4-0.5 0 0.4-1.8-0.1-0.5-1.1-1-0.7-0.3-1.5 0.1-2.1 1.3-0.7 1-1.6 0.5-1.1-1.3-1 0.3-0.5-0.2-1.8 0.8-1.1 0.2-3-0.6-0.4-0.3-1.6-0.2-1.3-0.4-0.6 0.1-0.7-0.2-0.4 0.5-0.7-1.4-0.2-1.1 0.9-1.2 1-0.1 0.2-0.5-0.8-0.4-0.9-1.4 1.6-0.4-0.3 1.3 1.5 0.4 0.5 1.3 0.5 0 0.6-0.6 0.4-0.1 2.5-1.1 0.3-1.1-0.6 0-1.2 0.5-1.6-0.3-0.5 0.6-1.7-0.7 0.2-0.9 0.7-0.5-0.7-1.3 0.6-0.6 0.2 0.9 0.9 1.7 0.3-1.1 0.4-1-0.5-0.7-0.1-0.9 1.1-0.7-0.1-0.6-1.3-0.2-3.8 0.4-0.9-0.7-0.5 0.3-0.1 0.6 0.5 0.8-0.2 0.6-0.9 0.2-0.8 0.8 0.1 2.9-0.9 0.4-0.6-0.3-1 1-1.1-0.5-2.3-0.2 0.1-0.6-1.2-0.2 0-1.1-0.4-0.4-1.2 0.1-0.1-1.1-0.3-0.3-0.7 0.3-0.3 1 0.1 1.5 1 1.8 0 1.5 0.7 0 0.2 0.4 0.7 0.2 2.3 0.2 0.9-0.3 0.5 0.2 0.3 0.8 0 0.7-0.9 0-0.1 0.7 0.3 1-1.2 0.3-0.7 1.4-1.5 0.3-0.9-0.5-0.3-0.8-0.6-0.7-1-2.1-0.3-1.2-0.4 0 0.2 1.6-0.8 0.4 0.3 0.6-0.5 1.5 1.3 0 0.1 0.6-0.7 0.6-0.4 0.7 0.2 1-1.4 0.5 0.3 1.2-0.3 1.1-0.7 0-0.4 0.5 1.4 1.2 0.7 0.3 0.5-0.4 0.7 0 1.5 1.5-1.5 1.6-0.4 0.9-0.6 0.7 0 1.9-0.9 0.8-0.1 0.6 0.6 0.3 1.5-0.2 1.3 0.3 0.7-0.3 0.7 0.6 0.4 1-0.9 0.7 0.7 1.5 0.9 0.7 0.4 1.3 0.7 0.4 0.2 1.1 0.5 0.4 0 1.1 0.4 0.4-0.1 0.6-0.6 0.4-0.3 1.1-0.7 0.5-0.9 1.8-0.4 1.7 0.4 0.8-0.2 1.7 0.6 0.1 0.4 1.2-0.2 0.3 0.2 0.9-0.5 0.5 0 0.9-0.5 0.7 0.5 0.3 0.5 1.5-1.1 0.2-0.7 0.6-0.6 1.2-0.6 0.7-1.7 0.8-0.2-0.4-0.7 0.1-0.4 0.7-0.7 0.2-0.3 0.7-0.8-0.2-1.4 0.8-0.4 0.6-1.5 0.2-0.5 1.2-0.9 0.4 0 1.4-0.4 0.7-0.5 0-0.1 0.9-0.3 0.6 0.5 1.3 0.6-0.4 0.7 0.5 0.9 0 0.6 0.8 0.7 0.1 0.7-0.5 1 0.1 0.7 1.1-0.9 0.5 0.8 0.3 1.1-0.4-0.2 0.7-1 0.7-1.6-0.3-0.5 0.7-1 0.7-0.6 0.7-2.1 0.5 0 0.5-0.4 0.6-0.8 0.5-1.5 0.1-0.8-0.3-0.4-0.4-1.4-0.3-1 0.8-0.5 0.8-0.8 0.3-0.5-0.7-0.9-0.5 0.2-0.9-0.6-1.4-0.7-0.8-1.5-0.5-0.6 0.7-0.2 0.7-1-0.2-0.3-0.6-0.6-0.1-0.1-1.1 0.5-0.7-0.1-1.4-0.8-0.5-0.2-0.6-0.6-0.2-1.4 0.1-0.6-0.9 0-0.5-1.4-0.1-0.2-0.9-0.8-0.8-0.5 0.3-0.3 1.2-1.5 0.2 0-0.6-0.5-0.6-0.4-1-1.4-1.9-1.5 0.4-0.6-0.8-1.1 1.2-0.5 0.2-0.5-1.3-1.2 0.1-0.5 0.4-0.7-0.4 0.4-1.7 0.5-0.6-0.8-0.7 0.1-1.1 0.4-0.5 0-1.2 0.3-0.6-0.6-0.3-0.8-0.7-1.6-0.1-0.6 0.8-0.9 0.8-0.5-0.2-0.4-0.7 0.3-2.3-0.3-0.4-0.8-0.1-0.2-0.6-0.6-0.5-0.1-0.5-0.7-0.4-0.4-0.6-0.7-0.2-0.8 0.7-0.5-1 0.4-1.1-0.4-1.2 0.9-1.9 0.3-0.4 0.8-0.3 0.1-1.9-0.4-0.9 0.1-2-0.6-0.8-0.9-0.5 0-1-1.2-0.1 0 1.3-0.3 0.7-0.6 0.4-0.6 0.9-0.5 0-0.8 0.6-1.8-1.2 0.8-2-0.8-0.4-1-0.1-0.8-0.4-0.8-0.7-0.2-0.5-1.2-1.2 0.3-1.3 0.8-1.6 0.8-0.6 0.2-1.1 1 0.3 0.4-0.3 0.1-1 0.8 0 0.7-1.1-0.7-0.4-1.1 0.9-0.6 0-1.2-0.7-0.5-0.6-0.9-0.3 0.7-1 0-1.4-0.4-1.4-1.5 1.1-1 0-0.3-0.6-1.1 1.2 0.4 1.1-0.9 1.1 0.8 0.6-0.4 0.6-1.8 1.2-0.8-0.9-1.1-0.5-1.3 0-0.5 0.2-2.9-0.1-0.8-1.1-0.5-1 0-1.6-1.2 0.2-2.4-0.6-0.5-0.6-1.1-0.7-1.4 2.1 0.3 1.2-0.7 0.5-0.8-0.1-0.3-1.2-0.7-0.8 0.4-1.2-0.2-0.4-0.7-0.2-1.2 0.3-0.9-1.9-0.9-0.2 0 0.5-1.3 0.2-0.2-0.8-0.6 0.3-0.7-1.1 0.9-0.7 0.8 0 0.5 0.5 0.9-0.3 0.4-0.9-0.4-0.2-0.9 0.5-1.4-0.5-0.9 0.1-0.6-0.5-0.5 0.5-1 0.4-0.8-0.2-0.4-0.7-1.2 0-1.1-0.7 0.3-0.8-0.3-0.9-1.1-0.3-0.4 0.4-1.6 0.7 0 0.7-0.9 0.7-1.1 0.5-0.5-0.8 0.2-0.6-0.5-0.2-0.6 0.1-0.8-0.2-0.3 0.8 0.2 1-0.7 0.3-1.2-0.2 0.2-1-0.2-0.5-0.9-0.3-1.3 0.5-1.1 0-1.8 0.8-0.6-0.7-1-0.7-0.6 0.3-0.5-0.5-1.1 0.2-0.5-0.3-1.6 0.2-0.5 0.4-0.8 0.2-1 0.7-1.4 0.7-0.5-0.3-0.3-1-1.1 0.5-0.9 1.3-1.3-0.5-0.7-0.2-1.1-0.5-1.3-0.4-1.7-0.7-0.5-0.5-1.1-1.1-1.3-3.3-1.1-2-0.8-1.4-0.8-1-0.4-0.7-0.7-2.3-0.4-1.9-0.6-3.7-1.3-1.4-1.6-1.6-1.7-1.9-0.5-1.8-0.8-0.9-1.6-1.7 0.1-1 0-1.2 0.3-2.6-0.4-0.3 0.1-2.4 0.1-2.7-0.5-1.4-0.7-0.4-1.5 0.2-1.2 0.6-1.2 0.4-1.4 0-2.2 0.2-0.9 0.2-0.9-0.1-3-1.2-0.5-0.4-0.4-1.2-0.5-0.9-1.4-1.5-0.9-0.6-0.4-0.9-2-3-0.5-1.6-0.1-1.2-0.3-2.3 0.5-1.5 1.7-2.6 0.5-1.1 0.4-1.9-0.2-1.3 0-1.1 0.4-1.6-0.1-3.2 0.3-2-0.5-2.5-0.6-0.7-1.5-0.8-1.4-0.3-1.4 0-3.7 0.6-2.1 0-1.4-0.4-1.5-0.8-1.7-1.5-6.8-3.2-0.5-0.4-0.8-2.2 0.6-3.6 0.1-1.7 0.3-2.8 0.8-2 1-2.7 0.7-1.5 2.7-2.8 5-4.2 1.7-1.6 1.6-2.2 1-1.7 2.7-2 0.3-0.6 2.8-7.6 1.7-2.6 1.7-1.9 2.5-1.8 0.8-0.6 1.1-1.4 1-1 2.3-0.5 1.6-0.5 1.7 0.1 1.1 0.5 3.4 3.4 0.4 0.6 0 1.8 0.2 1.2 2 3.7 0.7 1 2.1 0.5 2.2 0.2 0.8-0.1 4.3-2.2 6-2.6 2.2-0.7 4.7-0.9 4.1 0 1.9-0.2 2.5 0.1 1.3-0.5 2.3-1.1 3.2-1.2 1.3-0.6 0.5-2.7 0-0.8 0.7-2.9 1.2-1.7 1-1.6 0.8-0.7 3.6-3 1.1-1.3 0.9-0.8 0.9-1.7 3.1-10.3 0.9-1.3 2-2.5 0.6-0.6 1.5-0.6 2.5-1.3 2.3-1.5 2.2-1.5 3.1-1.7 6.3-2.8 0.6-0.4 1.9-4.6 2.7-3.3 2-3.8 1.8-3.9 1.1-2 1.6-3 0.9-3 0.5-2.1 1-3.3 0.6-2.6 0.3-0.7 0.6-2.8 0.2-0.5 0.8-0.5 6.8-2.8 1.4-0.4 1.9-0.6 1.5-0.4 1.4-0.5 1.5-1.5 2.9-2.4 1.5-1.1-0.2 2.1 0 0.6-1.5 2.4-0.6 0.5-0.6 2.3 0.3 1 6.1 0.1 6.2 0.5 1.3 0 3.9 0.3 0.8-0.1 1.4 0.2 1.8 0.1z" id="29" name="Rajasthan">
									</path>
									<path d="M703.3 402.2l-0.7 0.5-0.5-0.3-0.2-0.8-0.9-0.6-0.9 0.7-0.7-0.2-0.7-0.8-0.9-0.2-1.7 0.4-0.7 0.3 0 1-0.9 0.9-1 0.5-0.4 0.9-0.7 0.3-0.8-0.3-1.3-0.4-0.7 0-0.2-0.3-0.7 0.1-0.1-0.4-0.6-0.5-0.2 0-0.7-0.1-1.6 0.4-0.6-0.5-1.2 0-0.7 0.7-0.7 0-1.8-1 0-0.9-0.6-1 0.3-0.3-0.6-0.6-1.4-0.2 0.5-1.1 0.1-1.4 0.7-1.5 0.5-0.4-0.3-0.8-0.6-0.6 0.3-1.6 1-0.7-0.8-1.4-0.4-0.4 0.1-0.9 0.5-0.4 0-1.1 0.5-1.2 0.6-1 0.7-0.5 0.2-1.4 0.8-0.7 0.4-1-0.2-0.5 0.3-1.4 0.7-0.3 0.1-1.1 0.5-0.6-0.4-0.7 0.6-1.1-0.2-0.6-0.6-0.1-1-0.8-0.8-0.2-0.5-1.2 0.5-1-0.2-0.5 0.6-0.5 1.1 0.8 0.8-0.1 0.3-0.8 1 0.1 0.3 0.6 1-0.4 0.3-0.3 0.8-0.1 1.1-0.7 0.9 0 0.9 0.4 0.4-0.2 0.9-1 1.2-0.4 0.7-1 0.6-0.2 1.1 0.5 0.7-1.1 0-0.7 0.7-0.1 1.5-0.7-0.3-0.9 0.4-0.1 0.6 1 1 1.2 0.6-0.2 2.3 0.2 1 0.9 0.6 0.7 1 0.6 0.4 1-0.1 2.3 0.7 0.2 0.8 1.2 0 2.2-0.9 0.8-0.1 1.5 0.4 1.5-0.6 1.5 0 1.2-0.8 1-0.4 0.1-0.2 1.5-0.7 1-0.6 0.4 0.3 1.1 0.4 0.3-0.1 1.3 0 1.5 0.3 0.4 0.5 1.6 1 1 0.7-0.3 0.7 0.8 0.4 1.1 1.1 0.4-0.4 0.8-0.4 1.2-0.9 0.6-1.3-0.2-1.1 0.6 0 1.1-0.6 1.5-0.9 0.3-0.2 0.9z" id="30" name="Sikkim">
									</path>
									<path d="M380.9 1046.1l0.8 0.6-0.6 0.9 0.4 0.9 1.7 1.5 0.6 0.9-2.5-1.6-1.6-0.6-1.9-0.5-0.5-0.4 0.5-0.4 1.6-0.1 0.8-0.9 0.7-0.3z m34.2-142.8l0.5-0.1 0.1 1.1 0.5 2.5 0 1.2-0.3 1.4-0.9 3.2-0.3 0.7 0.1 1.7-0.7 1.3-0.1 1.1-0.7 3.2-0.4 2.6-0.1 1.9 0.3 0.9-1.4 4.3-0.5 1.5-1.1 3.1-0.3 1.9-0.5 0.9-0.9 1.4-1.6 1.9-0.9-0.4-0.3 0.9 0.5 0.5-1.1 1.7-0.1 0.4-1 0.4-0.1 0.6 0.3 0.3-2 3.1-1.6 2.5-1.3 3-0.3 1.4-0.4 0-0.6-0.3-0.2-0.5-0.2 0-0.2 0.2 0 0.5-0.5-0.1-0.1-0.1-0.2 0.2-0.1 0.3-0.6 0.2 0 0.4-0.2 0.3-0.3-1.4-0.6-0.3 0-0.4 0.1 0 0.3 0.2 0.6-0.3 0.3-0.2-0.8-0.3-0.2 0.3-0.2 0-0.4 0-0.5-0.7 0-0.7-0.8 0.3-0.3 0.4-0.3-0.1-0.1 0.2-0.2 0.6 1.8 0 0.2 0.8-0.6 0.2 0 0.7 0.8 0-0.1 0.5 0.7 0.8-0.5 0.6-1-0.2-0.7 0.1 0 0.4 1.2-0.3 0 0.7 0.4 0.2 0.8 0 0.9-0.4 0.4 0.6 0.6 0.1 0.5 1.1-0.2 1.4-0.6 2-0.5 3.1-0.2 1.3 0.1 1.1 0.5 1.5 0.5 1.1 0.6 1.2 0.8 3.1 0.3 0.2-0.1 1.2 0.1 1.1 0.4 1.7 0.3 3.3-0.1 5.6-0.2 0.1-0.5-0.1-0.4-0.2-0.5 0.1-0.2-0.1-0.2 0-0.3 0.4-0.5-0.2-0.5-0.1-0.6-0.2-0.4 0 0.1 0.4 0.2 0.2 0 0.1 0.1 0.1-0.1 0.3 0.2 0.2-0.2 0.2-0.4-0.3-0.4 0-0.4 0.2 0.4 0.3 0.2 0.1-0.5 0.4-0.1 0.1 0.2 0 0 0.2 0.4 0.1-0.1 0.2 0.2-0.1 0.1 0.1 0 0.1 0.5 0.1 0.2 0.2 0.2 0.3 0.2 0.1 0.5-0.2 0.1 0.2-0.2 0.2 0.2 0 0.3 0.1 0.1 0.4 0.6 0.4-0.5 0.1 0.1 0.3 0.3 0.2 0.2 0.1 0.1 0.1 0.1 0.3-0.1 0.2 0.8 0.1 0.5-0.1 0 1.9 0.2 6 0.1 1.3 0.2 4.6 0.2 1.7 0.5 2.1-0.6 0.7-1.1 0.4-1.3 0.1-1.8-0.1 0.7-0.9-0.1-0.4-1.1 0.1-0.3-0.3-1.2-0.2-0.5 0.2-0.8 0-0.7-0.9-0.5 0.9-1 0.6 1.2 0.1 1.6 0.3 0.7 0 1.4 0.6-6.8-1.1 0.7-0.4 0.4-0.6 0.9 0.2 0.1-0.4-1.4-0.3-0.5 0.4 0.3 0.4-1.4 0.2 0.4 0.3-4-0.3-0.5 0.1-0.4 0.7-1.5 0.5-1.1 0.7-0.9 1.1 0.5 0.5-1.4 1.2 0 0.9-0.4 0.2 0.1 0.8-0.2 0.9 0.4 0.9 0.5 0.3 0.3 0.8-0.7 0.6-1.7 2-1.2 1.2-0.1 0.4-0.9 0.9-0.3 0.7 0.2 0.4-0.6 0.9-0.5 0.3-0.5 1-0.6 0.9-0.7 0.3-0.7 1.1-1.3 1.6-0.3 1.1-0.5 1-0.8 0.7-0.5 2.4-0.1 1.5-0.6 0.2 0.1 0.7 1.2 2 1.8 1.9 1.1 0.9 1.5 1 1.4 0.4 1.3-0.1 0.9 0.4-1.7 0.4-0.9 0.3-1 0-1.3-0.3-1.6-0.2-0.9 0.1-1 0.2-0.6 0.6-0.9-0.3-0.7 0.1-3.5 1.3-0.8 0.2-0.6 0.3 0.1 0.4-1.8-0.2-0.6 0.4-0.2 0.5 0.3 0.4-1.3 0.2-1.3 0.7-0.8-0.2-1.4 0.1-0.7 0.2-1.1 0.1-1.6 0.5-1 0.8-1.3 1.1-1.2 0.9-2.5 1.6-0.9 0.8-0.9 1.5-0.1 0.8-0.4 0.5-0.2 2-0.1 0.7 0.1 1 1.2 0.3 0 0.4-0.8 0.2-0.4 0.4-0.3 0.8-0.7 0.8-0.2 1.1-0.4-0.1-0.2 0.7-0.3 0.1 0 0.9 1 0.3 0.3 0.5-0.6 2.5 0.3 0.6-1.1 1.2-1.1 1.4-0.4 1.4 0.4 0.4-1.5 0.4-1.4 0.7-0.9 0.6-0.1 0.3-1.8 0.9-0.4 0.5-1.1 0.5-1.4 0.4-1.1 0.9 0 0.5-1.4 1.1-0.9 0.3-3.5 0.5-1.3 0.5-0.5 0.6 0 1-0.3 0.4-0.5 0-4.3-0.9-2.1-0.6-1.5-0.2-0.3-0.7-0.7-0.5-1-0.3-1.1-1.1-1-0.6-0.8-0.9-2.4-1.8 0.4-0.1 0.6-0.7 1 0 0.2-0.8-0.7-1.1 0.6 0 0.9-1.1 0.3-0.9 0.7-0.1-0.6-1.7 0.5-0.6 0.6 0.6 0.8-0.5 0.6-1.2-0.4-1.2-0.8-0.9 0-0.5-1-1-0.7-2-0.4-0.3-0.4-1 0.7 0 1.3-1.4 0.1-0.7 1-1.2-0.2-1.3-0.6-0.5-0.6-0.3-0.4-1-0.5 0.2 0-1.1-0.6-0.5-0.1-0.6-0.8-0.7-0.1-0.4 0.7-0.9 0.9-0.3 0.5-0.7 0.1-0.8 0.5-0.6 0.7-0.4 0.7-0.9-0.1-1.6 0.6-0.6-0.3-0.6 0.3-1.3 0-1 0.7-0.6 1.1-1.5 0-0.8 0.3-0.6-0.2-0.5 0.4-0.8 0.6-0.7 0.7 0.2 0.5-0.8-0.1-0.4 0.4-0.6-0.9-0.4-0.7-0.6 0-0.5-1-0.9-0.5-0.9-0.6 0.2-0.9 0.7-1.3-0.2-1.3-1.2-0.4 0.3-0.6-0.1 0-0.5 0.3-1.1 0.5-0.5 0.4-0.9 0-1 0.6-0.2 0.1-1.2-0.1-0.8 0.9-0.3-0.5-0.9 0.1-1-0.8-0.8 0.2-1 0.6-1 0.6-0.7 0.3 0.1 0.4-0.8-0.4-0.3-0.3-1 0.3-0.5-1.5-1.8-0.4-0.2-0.2-0.8 1.4-0.8 0.8 0.3 0.3-0.6-0.1-0.9 0.2-0.9 0.6-0.9-0.4-0.6-0.6 0-0.1-1-1.2-1.8 0.3-1.2-2.1-0.3-1.6 1.3-1.4 0.5-1 0.7-0.2 1-0.7 0.2-1.3 0.7-0.7 0.1-1.1-0.4-0.6 0.2-0.6-0.3-0.3-0.8-0.7-0.4 0-0.5-1.1-0.1-0.4-0.4 0.3-1.5 0.4-0.7-0.8-1 0.2-0.2-0.5-0.7 0.3-0.9 0.1-1.8 0.4-1.3-0.2-0.3 0.2-1.6-0.5-0.2-0.4-0.9 0-0.4 2.3-0.1-0.1-1.2-0.5-0.3 0.7-1.2 0.6-1.5 0.2-0.7-0.3-1-1 0-0.8-0.6 0.3-0.3-1-1.3-1.1-0.3-0.4-0.4-1.4 0.1-1.1-0.7-0.5-0.1-1.1-0.6 0.3-1.4 0.6-0.7 0-0.7 0.4-0.6 0.7-0.5 1.6 0.3-0.2-0.8-0.5 0-0.1-0.6 0.4-0.7-0.4-0.3 0.2-0.6-1.5-0.8-0.3-0.9 0.7-0.7 0.5-0.2 0.1-0.8-1-0.8-2.5 1.6-0.7-0.4-0.8 0-2 0.2-0.5-0.4-1.4 0.1-0.4 0.7-0.3-0.7 0.1-1.1 2.3-1.1 0.9-2-0.1-1.1-1 0.2 0-0.5-2.1-0.7-1.3-1.2 0-0.7-0.6 0.2-1-0.7-1-0.3-0.4 0.4-1.5-1-0.7 0.1-0.6 0.4 0.2-1.2-0.4-0.8 0.3-0.2-0.6-1.4 1.6-1 0.7 0.4 0.2 0.6 1-0.9 0.3 0.4 1.2-0.5 0.3-1 1.4-0.1 0.5-0.3-0.4-0.9 0.9 0.1 0.8-0.8 1-0.7 1.3 1 0.4 2 1.9 0.4 0.6-0.1 4.3-0.1 2.2 0.3 0.7 0.5 0.5-0.6-0.7-1 0-0.7 0.8-1.7 0.9-0.9 0.2-1.5 0.5-0.6 1.5 0.1 0.5 0.6 0.5-0.9 1-0.4 0.7 0.2 0.6 0.6 0.7 0.2-0.4 0.5 0.9 1.2 0.7 0 0.6-1.3 0.8-0.4 0.9 0 0.9-0.3 1.2-0.1 0.5-0.6 1.3 0.4 0.2-0.3 1.4 1.4 0.7-0.2 0.3-0.5 0.9 0.1 1.1 0.5 0.6-0.4 0.9-2.3-0.1-1.8 0.7 0 0.5-1.4 1.2 0.3 0.8-0.3 0.9 0.2 2.1-0.5 1 0-0.1-0.5 0.9-2 1.1-1.5 0.9-0.5 0.7-1.4-0.9-0.7-0.1-0.7-0.4-0.7-2.4-0.7-0.9 0.1-0.9-0.3-1.6 0.2-0.6-0.2-1 0.4-0.9-0.3-0.6-0.4 0.3-0.8-0.4-0.4 0.2-0.9 0.8-0.3 0.9 0.1 0.2-0.4 0.6-0.1 0.5-0.5 0.4-0.9 1.2-1.1 0.4-1.8 0.3-2.5-0.2-0.3-0.7 0.7-0.8-0.1 0.9-0.8 0.1-0.4-0.9-0.1-0.3-1.8 0.4-0.9 0.1-0.8 0.5-0.5-0.3-0.8 0-0.5 2.2-0.6 0.6 0.1-0.1 0.7 0.9 0 0.3-0.8 0.5 0.4 0.3-0.7 0.8-0.1 0.4-1-0.1-0.5 0.6-0.2 0.3-0.4-0.5-0.5 0.6-0.7 0.4-1.4-0.6-0.3 1.3-0.7 0.2-0.4 1.9 0.1 0.2-0.3 0.9-0.3 0.5 0.8-0.5 0.3-0.2 0.7 0.8 0.4 0.3-0.6 0.6-0.3 0.8 0.9 0 0.6 0.7 0-0.3-0.7 1-0.9 1.4 0.4 0.8 0.9 0.9 0.6 0.2 0.6 1.3 0.3 0.3-0.2 1.9 0.5 0.2 1.1-0.3 0.6-0.8 0.3 0.2 0.7 0.9 0 0-0.5 1.3-0.1 0.8 1.4 0.7 0.1 2 1.3 3.1-0.2 0-1.6 0.5 0.1 0.7-0.3 0-2.2 0.7 1 0.3 0.8 1-0.6-0.2-1.1 0.4-0.8 0.7-0.5 0.3-1.4 0.3-0.2-0.2-0.9 0.5-0.7 0-0.6 0.7-1.4 0.7-0.2-0.9-1.9 0-0.3 0.7-0.7 0.4-0.5 1.4 0.4 0.3-1.8 1.3 0.4 1.3-0.3 0.8-0.7 1 0.2 1.7 0 0 1.7 1.1-1.7 1.1 0.2 1.2-0.5 0.7 0.7 1.8 0.7 0.5 0.8 0.5 0.1 0.7-0.4 0.5 0 1.2 0.5 0.6-0.2 0.2-0.8-0.2-0.6 0.8-1.2 0.7-0.3 0.4-1.3 1.5-0.1 0.1 0.6 0.9 0.2 1.7-0.4-0.1-1.3 0.5 0.2 0.3-0.7 0.5-0.3 1.2 0 0.1-0.8 0.8-0.3-0.3-0.5-0.9 0.7-0.1-0.9 0.4-1 0.1-0.8-0.6 0.1-1-0.6 1.4-0.7 1.3-0.1 1.5 0.4 1.3 0.1 0.2 1.1 0.8 1.1 0.7 0 0.5-0.7 0.7 0.3 0.4-0.5 1.2-0.3 0.5 0.9-0.4 0.7 0.8 0.5 0.2 0.7 0.5-0.4 0.6 0 0.4 0.7 1.3-1.2-1-0.5-1.1-0.8 0.9-0.5 0.2-0.8 0.9 0.7 0.7-0.8 1.7 0.1 1.8-1.1 0.8-0.1 0.9-1.3-0.6-0.4-0.1-0.7 1.1-0.5-0.1-1.1 1.2-0.3 0.3-1 1.1 0.1 0-0.5-0.6-0.1-1-0.9 0.6-0.2 0.3 0.3 1 0.1 0.8-0.6 0.2 0.4 0.1-0.1 0.3 0.2 0.3 0.5 0.1 0.2 0.7 0.1 0.5 0.2 0 0.1 0.4 0.3 0.2 0.2 0.2 0 0.2 0 1 0.1 0.8-0.2 1 0.6 0.5 0.6 0.3 1.2 0.3 0.2-0.1 0.7 1.4 0.6-0.1-2z" id="31" name="Tamil Nadu">
									</path>
									<path d="M822.1 502.6l0 1.6 0.9 0.9-0.1 0.7 0.6 1.1-0.3 1-1.7 4.2 2.8-0.1 0 0.2 0 0.2 0 0.1 0 0.2 0.1 0.1 0 0.2 0.1 0.1 0.3 0.3 0.2 0.1 0.5 0.8-0.1 0.2 0.1 0.4 0 0.4 0.1 0.5 0.1 0.3-0.2 0-0.1 0.1 0 0.2 0 0.4 0.1 0.4-0.1 0.1 0.1 0.2 0 0.2-0.1 0.9-0.4 0.4 0.2 0.3-0.1 0.2-0.1 0.1 0 0.5 0.1 0.2-0.1 0.1 0.2 0.4-0.1-0.1-0.1 0.1 0.4 1-0.3 0.6-0.2 0.2 0 0.3 0 0.1 0 0.9 0.3 0.3 0.3 0.2 0 0.6-0.2 0-0.1 0.5-0.1 0.1 0 0.2-0.1 0.1 0 0.1 0.1 0 0.1 0.3-0.1 0.1 0 0.1-0.4 0-0.2-0.1-0.2-0.1-0.1 0-0.2 0.1-0.4 0.9 0.1 0.3 0.1 0.2 0.1 0.2 0.1 0.3-0.2 0.1-0.4-0.1-0.2 0.4 0.1 1.6 0 0.9 0.1 0.4-0.7 0.2-0.3 0.5 0.2 0.7-0.6 1.2-0.5-0.2 0.1-1.2-1.2-0.9 0-0.8-1.1 0.3-1.5 2.1-0.5 0-0.1 0.9-0.6 0.3-1.2-0.6-0.3 0.1-0.8-1.1-0.7-1.6-0.7 0.1-0.2 1.1-0.5 0.6 0.5 2.4 0 0.8 0.3 0.7 0 0.9-0.1 1.4 0.5 0.8-1.2 1.3 0 0.8-1.3-0.1-1.1 1-0.7 0.4-0.2 0.9-1.2 1.5-0.7 1.1-0.6 1.7 0.2 0.8 0.5 0.5-0.1 0.5 0.4 0.7 0.5 2.1-0.1 0.3 0.8 1.5-0.4 0.6-1.6 0.4 0.3 1-0.5 0-0.5 0.8-1 0.7-1-0.2-0.4 0.5-1 0.1-0.8 0.7-0.3 0.6-0.7-0.2-1.4-0.7 0-0.5-0.6-0.4 0.3-1.3-0.6 0 0.1-1-0.8-1.6 0.1-0.6-0.7-1.1 0.2-1.3-0.5-0.6-1-1.5-0.1-0.5-1.2-0.1-0.9 1.3-0.3 1.6 0.1 1 0.7 1.7-0.1 0.5 0.5 1.3-0.7 0.3-0.8-0.5-0.9-1.4-0.5-1.8-0.3-0.3 0.1-2.1-0.2-1.4-0.7-1.4 0.5-0.4-0.2-0.5-0.6-0.2 0.4-1.3-0.6-0.4-0.3-0.8 0-0.9-0.8-1.4-0.2-1.5-0.9-0.4 0-0.5-0.8-0.4 0.2-0.8-0.4-0.1-0.1-1-0.9-0.7-0.2-1.3 0.5-1 1 0.2 0.1-1.2-0.3-0.4-1.4 0.1-0.1-1.2 0.5-1.1 1.4 0 0.4 0.5 0.3-1.1-0.1-0.9 0.3-0.7 0.6-1.1-0.6-1.5-0.2-0.7 0.6-0.3-0.2-0.6 1.1-0.1-0.4-0.8 0.6-1.2 0.6 0.3 0.2-1 1.9 0.5 0.6 0.3-0.2-1.1 0.6-0.8 0.2-0.9-0.7-1.1 0-1 1.2-0.1 1.8 0.5 0.9 0 0.2 0.3 0.8 0.1 0.9 0.4 1.7-0.1 0.5-0.6 0.8-0.3 0.3-0.5-0.2-0.9 0.3-1.1 0.5-0.7-0.4-1 0.7 0.2 0.5 1.5 0.9 0.7 1 0.4 0.8-0.1-0.7-3.9 2.5 1.4 0.9-0.4 0 0.9 1 0.8 0.3 1 0.3 0.4 0.7-0.2 0.1-1.1 1-3.6-0.7-2.5 1.2-0.8 0.5 0.3 0.1 0.6 0.7 0.4 0.1-0.6-0.6-1.6 0.7-0.4 0.3 0.4 2.2 0.2 0.8 0 0.8-0.3 0.6-1 0.1-0.5 1.1-0.3-0.5-1.1-0.1-0.7 0.2-1.2-0.2-0.5 0.6-0.3 1.2 1 0.8 0.1z" id="32" name="Tripura">
									</path>
									<path d="M396.3 334.9l0.4-0.1 0.6 0.6 0.1 0.3 0.4 0 0.1 0.2 0 0.2-0.3 0.2-0.2 0.4 0.2 0.3 0 0.2-0.1 0.4-0.1 0.2-0.2-0.2-0.2 0.6 0.7 0 0.1-0.2 0.2-0.1 0.1 0 0-0.3 0.3-1 1.1 0.3 0.7 0.3 0 0.3-0.8 0.1-0.2-0.1 0 0.7 0.7 0.3 0.4 0 0.5-0.2 0.2 0.1-0.4 0.5 0.1 0.2 0.3 0.3 0.4 0.4 0.2 0.4 0.2 0.8 1 0.6 1.2 0 0.9-0.8 0.9-1.8-0.5-0.6 1.1-1.4 0.5 0.2 0.1 0.2 1.5-0.1 1.8 1.8 1.6 1 1.1-0.1 0.5 0.6-0.3 0.5 0.8 0.8 0.5-0.1 0.8 0.5 0.3 1.3 1.2 0.8 0.4 0.6 1.4-0.4 0.8 0.2 0.8 0.6 0.4 1.1 1.2 0.9 0.5-0.3-0.6-3.5 1.2-1 1 0.1 0.7 0.4-0.3 0.7 0.9 0.3 0.2 0.5 1.3 0.2 0.6-0.3 0.4 0.9-0.1 0.6 0.4 0.7 0.9 0.7 0.8-0.2 1 0.3 0.1 0.6 0.7 0.3-0.2 0.5 1 0.3 1.4 1 0.7-0.5 1.1 0.4-0.2 0.5 0.1 0.8 1.3 0.4 1.2 0.8 0.7-0.8 0.5 0.7 0.7 0.4 0.4 0.6 1.2 1 4.4 1 0.8 1.4 0 1.3 1.6 2.1 1.4 1.5-0.1 2.5 0.5-0.3 1.3-0.1 0.1-1.3 1.3 0.1 1.2 0.5 0.1 0.8 1.2 0.9-0.2 1.3 2.3 1.3 3.3 2.2 2 0.3 3.5 3.2 1 0.2 1.4 1.1 0.9 0.6 0.9-0.2-0.1-0.6 1.5-2.1 0.8 0 2.7 0.2 0.7 1.1 1.1 1.2 1-0.1 1.9 0.9 0.8 0.9 0.7 0.4 1.7 1.4 2.2 1.2 1.2 1.5 1.6 0.9 0.8 0.1 1.5-0.5 0.9 0.2 2.1-0.8 0.5 0.1 1.6-0.5 1.4 0 0.4 1.1-0.1 1 0.8 0.8-0.2 0.9 0.8 1.1-0.6 1.6 0.4 1-0.5 0.7 2.3 0.3 1.1-0.2 1.2 0.1 2-0.1 0.9 1.3 2.7 0.7 4.5-0.3 0.8 0.1 0.7 1.1 2.1 1.6-0.2 0.7 1 1.2 1.3 0.1 0.7-0.3 1.2-1.4-0.1-0.5 0.7-0.6-0.8-1.4 0.7-0.6-0.5-0.9 7.7 0.4 7.4 3.8 0.9 0.8-0.3 0.6-0.7 0.3 0.9 0.6 1.1-0.6 0.7-0.1 0.5 0.5-0.2 0.9-0.7 0.6 0.2 1 0.2 0.1 1.3 0.4 0.5 0.4 0.1 0.3 0.4 0.6 0.3 0.9 0 0.1-0.6 0.5-0.6 0.9 0.1 0.4-0.1 0.2-0.3 0.2 0 0.7 0 0.5 0.2 0.1 1.1-0.2 0.9-0.5 0.3 0.2 0.2 0.3-0.1 0.3-0.9 0.6 1.1 0.9 0.4 0 0 1 0.3 0.6 0.2 0.5-0.4 0.2 0.2 0.2-0.1 0.5 0.2 0.2-0.3 0.2-0.1 0.3-0.1 0-0.2 0.2 0.1 0.1 0.6 0.4 0.1 0.6-0.2 0.2 0.1 0.2 0.1 0.1 0 0.1 0.3 0.3 0.6 0.5 0.4-0.2 0.2 0.2 0.2-0.4 1.1 0.1 0.3 0.1 0 0.4-0.3 0.7 0.7 0.6 0.6 0.2 0.2-0.5 0-0.2 1.2-0.7 0.4 0 0.5 0.2 0.3 0.2 0.2 0.8-0.3 0.7 0.2 0 0.1 0.5-0.1 0.6-0.3 0.6-0.5 0.7 0.6 1 0.4-0.1 0.4-0.3 0.4-0.3 0.7-0.1 0.3 0.6 0.4 0.8 0.2 1.1 0.4 0.2 0.5 0 0.5 0.1 1.3 0.3 0 1.1 0.4 0.6-3.1 0.5-0.9-0.1-0.9 0.7-2.4-1-1.2 0-0.5-0.5-1.6 0-0.8-0.1 0.1 1.1-1.2 1.9-0.1 0.7-1.6 0.7-0.9-0.3-0.3 0.8-1.2-0.5-0.9 0.3 0.1 0.4-0.1 2.2 1.5 0.4 1.2 0.1 0.3-0.4 0.9 0.2 0 0.4 0.7 0.9 0.6 0.2 0.2 0.4 1.9 0.2 1.9 0.5-0.2 1.3 0.5 0.8-0.3 0.5-0.1 1.2-0.4 0.5-1.5-0.1-0.1 0.8-0.6 0.1-0.7 0.5-1.3-0.2-1.1 1.6 0 0.4 0.9 0.6-0.4 0.7 0.9 0.5 0.2 1.2 1.4 0.1 0.9 0.8 0.7 1.1 1 0.8 0.2 1 0.7 0.4 0.3-0.4 1.3 0.6 1.8 1.4 0.7 0 1.3-0.5 1.2 0.8 0.8 0.3 0.7 1.5 1.9 0.1 0.7 0.6 0.8-0.2-0.1 1.7 0.7-0.3 1.4 0.8 1.1 1.1-0.7 1.2 0.9 0.7-0.5 0.4-0.5-0.3-1.4 0.1 0.1 1.3-0.2 0.7-0.7-0.4-0.6 0.6-0.9-0.5-0.8 0.2-0.6-1.1-0.8 0.1 0 0.7-0.8-0.2-0.2-1.1-1.4-0.6-1 0.3-0.2 2.4-1 0.4-2.5-0.1-0.6-0.3-0.2-1.2-0.9-0.6-0.6-0.2-1.4 0.1-0.9 0.4-0.4 0.6 0.3 1.7-0.1 0.5-2.1 0.9-2.4 1.8-0.8 0.2-0.9 1.4-0.7 0.2-0.1 0.6-0.7 1.1-0.6 0.4 0.2 1-1.2 0.2-0.2 0.9-0.5 0.4-1.2-0.2-1.3 0.3-0.8 1-1 0.2-1.3 1.3-0.3-0.1-1.3 0.5-0.9 0.2-1.3 1-0.9 0.2-0.7 1.1-0.6-0.3-1.2 0.4-0.7 1.6-0.9 0.4-0.4-0.1-0.2 1.5 0.3 0.4 0 1.5-0.4-0.1-0.6 2.4-0.2 0.4 0.1 0.8 0.8 0.2 0 1.8 0.5 0.3 0 1.6-0.2 0.4 0.5 1.5 0.8 1.1 0.2 0.8-0.3 1 0.8 0.4 0.8 0.7 0.6 0.9 1-0.2 0 1.2 0.3 0 0.8 1-0.5 0.4 0 0.6 0.6 0.4 0.6 1-0.6 0.5 0.3 0.6-0.3 1.4-0.8 0.2 0.2 0.6-2.5 0.5-1.1 0.5 0 0.8-0.4 0.9 0.6 0.7 0 0.9 1 0.3 0.5 1.2-0.3 0.9-1.1 0.4-0.9 0.9 0.7 0.8 0.2 1-0.9 1.3 0.1 1.1-0.7 1.7-0.3 1.1-0.9 1-1 0.9-0.6 1.1 0 0.9-2.1 1.2-0.1 1.1-0.8 1.5-1.5 0.4-0.6 0.8-1.4 0.4-0.8 0.1-0.9-0.3-1.8 0.2-1 0.2-0.5-0.1-0.5-0.6-1.5-0.7-0.6-0.6-0.5-0.8-1-0.6-0.4 0-0.3-0.5 0.1-0.9-1.9-0.4-0.2-0.7 0.5-0.5 0-1.1-1-0.3-0.6 0-0.2-0.6-1.3-1-0.2-0.4 0.4-0.9 0.6 0.6 1.1 0.2 0.1-0.7 0.5-0.4-0.4-2.1 0.8-0.5 0-1.2 0.5-0.9-0.1-1 0.1-1.1-0.1-0.9-1.4 0.1-0.4-0.6 0.2-1.1 0.4-0.4-0.1-1.9 0.5-0.9-0.7-0.5 0-1.6 1 0.6 1.9-0.5-0.2-1.7-0.9 0.1-0.1-1.7-1.3-0.2-0.9 0.2-0.4-0.3 0.2-1-1.1-0.9-0.9 0.5-1.7 0.5-0.5 0.4-1.5 0.4-0.4-1-1.1 0.1-0.3-0.3-1 0.2 0-0.4-0.5-0.6-0.4 0-0.7 0.8 0.4 1-0.3 0.8 0.2 1.5-1.7-0.2-0.5-0.6-0.5-0.2-0.7 0.4-0.4-0.6-0.2-1.4-0.8-0.6-1.4 0.3 0-0.6 0.5-0.5-0.1-1.9-0.4-0.4-1.1 0 0.4-1.3-1.2-0.1-0.4 0.3-1-0.4-0.7 0.4-0.4-0.6-0.6-0.5-0.6 0-2-1.1-1.4 0.4-0.1 0.4-1.2-1.1 0.1-0.5-0.9-0.4-0.1-0.8 0.4-0.6-0.3-0.8 0-1.5-1-0.8-0.9-0.1-0.6-0.5-1.3 0.3-2.6-1.6-0.3 0.6-0.8-0.2-0.2-0.8-1-0.4-0.9 0.7-0.9-0.8 1.2-1-0.5-0.7-0.8 0 0-0.5 0.9-0.7-0.5-0.4-0.8-0.1 0.2-0.6-0.7-0.5-1.1 0.4-0.7-0.1-0.1 0.6 0.6 0.2-0.3 0.6-0.9 0.1-0.5 0.4 0 0.7 0.5 0.4 0.1 1-0.4 0.3-1.6-0.8 0-0.7-0.3-0.7-1.3 0.3-0.8-0.7-0.6-0.9-0.7-0.2-2.1 0.3 0.3 0.4-0.6 0.5 0 0.9-0.4 0.4 0.4 0.7 0.1 0.7-0.5 1.1-0.9 1.3-0.6 0.4 0.3 0.7-0.4 0.2 0.2 1.2-1.5-0.7-0.2 1-0.5 0.6-0.5 0.8-1.3-1.1-0.4-1.1-1.7-0.1-0.9 0.6-1.6 0-0.6-1.2-1.3 0.6-0.3 0.3-1.1 0.4-1.2 0-0.7-0.3-0.1-1.1 0.7 0 1.1-1.1-0.8-1 0.4-0.8 1.1-0.8-0.3-0.6 0.3-0.5-0.2-0.8 0.7-0.7 0.6-0.9-1.2-0.9-1.1-0.1 0.2 0.9-0.4 1-0.4 0.4-0.7-0.6-0.6 0.4-1-0.2-1.2 0.5 0.1 0.9 0.9 0.2 1 0.5 0 0.9-1.4 0-0.2-0.4-1.9 0.7 0.2-1.1-0.9 0.2-0.4-0.6-1.1-0.2 0.5-0.9-1-1.2-0.2 1.7 0.6 1.3-0.9-0.5-1.2 0.8-0.9-0.6-0.3-0.7-0.7 0.4 0.5 1.1-1.1 0.6-0.4-0.9-0.6-0.5-0.6 0.4-1 0-0.5 0.6-0.4 1.2-1.4 0.8-0.5 0-0.8-0.7-0.8-0.3 0.5-1.3 0.8-0.4 0.6-1.2 0.9-0.9 0-0.4 1.3-0.8 1-0.1 0.3-0.3-0.8-1.8-0.1-0.8-0.7 0.2-0.7-0.5-0.5-1.1-1-0.1-0.3-0.6 0.2-0.5 0.1-0.9-0.3-0.9 0.3-0.5-0.1-0.8-1.2-1.2-0.6-0.2-0.4 0.9-0.5-0.2-0.6 0.3-0.8-0.1-0.1 0.8-0.9 0.3 0 0.4-0.8 0.4-0.3 0.6-1.5-0.6-0.5 0.5-1.7 0-0.3 0.7 0.1 0.8-0.7 0.5 0.1 0.7-1.6 0.2-1 0.6-0.9 0.1-0.7-0.2-1 0.6 0.6 0.7-0.3 0.6 0.3 1 0 0.7-0.7 1.5 0.5 0.7-1 0-2-1-1-0.7-1.1 0.4-1-0.1-0.4 0.3-1.1-0.2-0.5-0.4-0.7-0.1-0.8-0.5-0.2-0.6-0.6 0.2-0.8 1.2-0.5 0.5 0.1 0.9-0.5 0.1-0.4 0.6-1-0.5 0.3-1.3-1.1 0.9-0.1-0.7-0.5-0.3-0.4 0.7-0.6-0.2-0.3-1.1 0.1-0.8 0.7-0.7 0.2-0.7 0.7 0.2 0.4-0.7-0.3-0.8 0.6-0.5-1.7-0.3 0-0.6-1-0.5-0.2 0.9-0.5 0.1-0.1-0.9-0.5-1 0.4-0.6-1.8-0.3-1.1 1.1-0.2 1.2 0.5 0.5 0.6-0.6 0.9 0.8 0.9-0.5 0 1.6-1 0.4-0.6-0.7-0.5 1.1 0.2 0.8 0.6 0.5 0.4 0.9-0.4 0.8-0.7-0.1-0.2 0.5-0.7-0.4 0.2-0.4-0.4-0.8-0.8 0.2 0.4 0.5 0 1-1.4-0.4-0.4-0.9-0.6 0.2 0.4 1.1-1.6 0.2-0.3-0.6-0.5-0.6 0.3-0.7-0.9-0.5-0.2-0.6-0.7 0.7-0.2 0.8-0.7 0.6-0.6-0.3 0.5-1.1-0.4-0.5 1.1-1.5-1-0.3-0.4-0.5-0.1-1-0.9 0-0.5 1.2 0.8 0.4 0.2 0.6-0.6 0.6-0.5-0.6-0.5-0.2-1 0.4-0.8 1.1-0.8 0.7-0.4-1 0.5-1-0.5-0.6 0.2-0.7 0.8 0 0.5-0.9 1 0.4 0.2-0.6 0.9-0.5-0.6-0.7 0.1-1.4-0.9 0.6-1.5-0.6-1 1.2 0.5 0.9-0.3 0.3-0.6 1.9-0.4 0-1-1.4 0.3-0.9-0.7 0.1 0-0.9 0.7 0.2 0.7-0.8 0.1-0.8 1.3-1.3 0.9-0.1 0.5-0.4 0.9-0.1-0.4 1-1.2-0.1 0.1 0.5 1.4 0.5 0.3-0.6 0.9-0.1-0.2-0.9 0.1-0.9-0.4-0.7-0.6-0.1-0.4 0.5-0.9-0.7 0.9-0.9 0.2-0.9-0.7-0.9 0.9-0.5 0-0.8-0.6-0.3-1.3-0.1-0.6 0.7 0.2 0.7-1.4 0.3-0.2 0.5 0.6 0.5 0.4 0.9-0.1 0.6-2.2-1.2-1.1 0.3-1.1-0.6 0 1 0.8 0.6 0.6 0.7 0.8-0.5 0.2 0.6-1.7 0.4 0.4 0.5 0.2 1.7-1 0.3-1-0.3 0.2-0.7-1.8-0.4 0.4-0.6 1-0.9-0.3-0.7-1.1 0.1-0.9 0.4 0.1 0.9-1.1-0.3-0.8 1.5-0.1 0.9-0.7 0.2-0.9-0.7 0.1 1.3-0.2 1-0.7 0.1-0.6-0.7-0.7 0.7-1.3 0.2 0 0.6 0.8 0.4 1.2-0.8 0.6 0.4 0.5-0.2 0.5 0.6 0.6 0 0.5 0.5-0.2 1.1 0.3 1 0.8 1.7 0.1 2.2 0.8 0.3 0.7 1.1 0.1 1-0.2 0.4-0.2 1.5-0.2 0.9 0.9 0.6 0.5 1.6 1 0.3 2.3 1.2 0.6 1.8-0.6 0.7 0 1.1 0.3 2.4-0.5 1-0.6 0.6 0.3 0.9 0.1 1.3 0.9 0.3 0.8-0.5 1-0.1 0.5-0.7 0.6-0.5 0.6 0.1 0.4 1 0.4 0.3 0.3 0.9 1.1 1-0.2 0.4 0.2 1.3 0.7 0.4-0.8 0.5-0.6 0-0.4-0.6-0.4 0.5 0.4 0.9 0.6 0.1 0.5 0.7 1.3-0.2 0.2 0.7-0.3 0.4-0.4 1.7 0 0.6-1.2 1.4-0.9 0.7 0.1 1-1.1 0.7 0.1 1-0.8 0.6-0.6-0.1-0.4 0.5-0.6-0.2-0.2 0.9-0.7-0.1-0.3-1-0.7-1.3-0.3 0.3-0.7-0.5-0.2 0.5-0.7 0.2-1-0.4-0.5-1.1-1.3-0.8 0.2-0.5-0.6-0.3-0.9-1.5-0.9-0.1-0.9-0.6-0.4-0.6-0.5-0.1-0.8 1-0.3 1.1-0.9 0.5-0.2 1-0.8 0.4-0.2 0.4-0.7 0.1-0.8-0.8-0.7-0.5-0.5-1.1 1.2-1.5-0.9-1-0.6-0.2-1.8-1.4-0.2-0.5 0.1-0.8-0.8-0.3 0-0.8-0.7-0.4 0.2-0.7 1-0.4 0.5-2.4-0.4-1.3 0.4-0.7-0.6-1.4-0.8-1.1-0.3-0.9 0.2-0.7-0.5-1.3-0.8-1.2-0.7-0.2-0.1-0.8 0.2-0.6 1-0.4 0.5-0.7 1.5-1 0.2-0.4 0.9-0.6 0.6-0.8 0.7-0.4 0.4-1-0.3-0.7-0.2-1.4 0.3-0.4 1.2-0.4 0.7-0.9 1.2 0.1 0-0.8 0.6-0.4 0.1-0.6-0.9 0-0.5-0.6-0.6-0.2 0.3-1-0.7-0.2-0.6-0.9 0.2-0.6-0.6-0.6 0-0.6-1.3-0.5 0.8-1-0.2-0.7-1-0.4 1.3-1.4 0.1-1 0.4-0.9 0.5 0.3 0.8-0.3 0.3-0.7 0.9-0.3-0.4-1.1 0-0.9 0.6-1.1 0.8 0.4 1.1-1.1 1.5 0.3 0.7 0.3 1.2 0 0.8-0.9 0.5 0.6 1 0.3 0.9-1.1 1.2-0.5 0.7 0.1 2.2-0.5 0.3-0.3 0.2-0.8 0-1.1-0.7-1.3-1-0.4-0.5-0.7 0-0.4 1-0.5 0.8-1.4 0.7 0-0.1-1.2 0.8 0.4 0.1 0.6 0.7 0.1 0.1-1.2-0.8-0.4 0.5-1 0.9-0.2 0.1-0.9-0.3-0.6 0.6-0.4 0.7-0.9 0.9-1.6 0.3-1.3-0.2-0.4 1.3-1.4 0.7-0.3-1.1-1-0.2-0.7-0.7-0.4 0.5-0.7 1.4 0 0.1-0.7-1-0.7 1-0.2 0.5-0.6 0-0.7 0.8 0.1 0.7-0.7-0.5-0.3 0.3-1.1 0.7-0.1 0.7-1.1 1 0-0.3-1.5-1.4-0.3 0.4-0.6-0.3-1 1.3-0.5 0.3-1-1.2-0.5-0.8 0.4-0.7-0.6 0.5-0.9 0-0.7-1.1-0.8 0.1-0.4-1.2-0.6 0-0.9-0.5-0.7 0.8-0.7-0.1-0.6-0.6-0.8 0.5-1-0.6-0.4-1.2 0.8-0.4-0.3 0.4-1-1.5-0.6-1.3 0.3-0.9-0.8-1-1.5-1.7 0-0.7-1-0.7 0.4-0.1-0.7-1.3 0.3-0.7 0.9-1.3-0.3-0.6 0.8-1.3-0.1-1.7-1-1.9-0.4-0.5-0.3-0.6-1.1-1.4 0.1-0.8-1.6-0.7-0.1-2 0.3-0.5 0.6-0.1 0.9-0.3 0.2-1.2-0.6-0.4 0-0.2-1.6 0.8-0.2 0.7-0.7 0.4-1.2-0.9 0-1.5-0.5-1.7-0.4-0.9 0.1 0 1-0.4 0.7-0.5 0.3-0.9-0.5-0.6 0 0 1.2-0.3 0.3-0.7-1.3-0.8-0.1-0.5 0.6-0.4-0.6-0.8 0.5-0.4-0.5-0.7-0.1-0.6 1-0.7-0.6-2.2-0.9-0.6 0.2-0.8-0.6-0.6 0.4-0.8 0.2-0.5 0.7 0.2 0.9-1.5 0.3-0.5 0.6-1.1 0.4-0.5 0.5-1.3 0.1-0.2 0.3-1.5 0-0.3-0.8-0.5-0.1-0.6 2.3 0.4 0.8-0.4 0.5-1.1 0.2 0.5-0.8-0.4-0.5-0.8-0.2 0.4-1.2-0.8-0.9 0.2-1 1-0.3 0.1-0.5 1-0.6 3.3-1 2.1-1.4 1.7-0.5 0.8-0.4 0.7 0.1 0.3-1-0.3-0.8-0.5 0.3 0 1-0.6 0-1.1-1.8-0.5 1-2-0.3-1.3-0.7 0.2-1.2-0.7-0.1-0.6 0.6-0.3-0.8 0.9-1.1 1.8-0.5-0.2-0.4 0.5-0.6 0.3-0.8 0.5 0.2 0.8-0.2 0.7-1-1.1-0.5 0.1-0.9-0.7-1-0.6-0.3 0.1-0.6-0.6-0.5 0.7-0.5 0.1-1-0.8 0.1-0.6 0.4-1.1-0.6-1.5-1.5-1.1-0.1-1.2-0.6-0.5-1 0.4-1.4-1.2-0.8 0-0.8-0.6-0.6-1.2-0.2-0.3-0.6 0-1.2 0.6-0.9-0.8-0.1-0.5-0.6 1.1-1.6-0.3-2.1-1.1-0.2-0.2-0.6 0.5-0.3-0.3-0.8 0.1-1.2-1-0.7 1.3-0.9 0.9-1.1 1.1-0.2 1.4 0.2-0.4-0.9 0.7-0.5 0.7 0.6 0.9-0.6 0.2-0.7-0.2-0.8 1.7 0.1 0.6-0.7 0-0.6-0.9-0.3 0.9-0.8-0.8-0.7-0.2-0.4-1-1.1 0.2-0.4-0.5-1 0.1-0.7 0.9-0.7 0-1.6 1.1-0.3 0.2-0.8-0.5-0.6-0.2-0.9 0.7-0.4 0.1-0.5-0.9 0-1.6-0.6 0.2-0.5 0.7 0.1 0.1-1.1-1-1.3 1-0.6-0.3-0.9-0.6-0.5 0.2-0.8-1.3-0.7-0.4-0.9-0.9-0.1 0-0.5-0.8-0.2-0.5-0.9-0.8-0.4 0-0.3-0.2-0.3-0.6-0.7-0.4-0.3-0.3-1.1 0-0.2 0.6-0.6 0.6-0.2 0.3-0.7-0.9-0.9 0.2-1 0.4-0.8-0.2-0.8-0.2-0.2-0.7 0.2-0.1 0.1-0.3-0.4-0.5-0.7-0.1-0.1-0.4 0-0.1-0.5-0.2-0.2-0.6-0.5-0.3-0.3 0.1-0.3-0.3 0-0.2 0-0.4-0.3-0.1-0.3 0.7-0.4 0.1-0.9-0.4-1.1-0.4-0.1-0.2 0-0.2-0.9 1.2-0.4-0.7-0.8 0.3-0.6-0.5-0.4 0-0.6 0.8-1.8-0.8-0.6-1-1-0.2-1.2-1.1-0.9 0.5-1.3-0.4-0.7 0.5-1.1-0.5-1.8 0.6-0.4-0.5-1.4 0.8-1.7-0.2-1.1-0.9-0.2-0.1-1.1 0.7-0.2-0.5-1.5 0.5-0.8-0.7-0.6 0.2-1.1-0.3-0.7-0.6-0.4-0.4-0.8 0.8-0.8-0.2-0.9-0.6-1 0.8-1.8 0.7-0.4-0.3-0.9 0.2-0.6 0.5-0.2 0-0.6-1-1.3 0.2-1 1.2-0.7 0.1-0.9 0.4-0.5 0-0.7 0.5-1.1-0.1-1.1 0.3-0.8 0.5-0.3 1.6-2.3 0.8-1.8-0.1-0.6 0.9-0.4 1.2-0.2 1.4-1.1 0.7-0.1 0.7-0.6-0.1-1.4 0.4-0.9 0.8 0 0.9-0.8 0.8-1.8 0.8-1 0.4-1.1 1.4-1-0.1-1 0.8-1.3-0.6-0.6-0.4-0.7 2.5-0.3 0.9 1 0.4 0 0.8 1.4 0.4 0.5 1.4 0.5 2.1 1.4 1.8 0.8 0.2-0.2 1.6 0.7 0.4 0.7-0.8 0.9-0.3 1.2-0.8 0.9-0.6 1.2-1.2 1.5-1.2-0.2-0.9 2.1 0.5 0.6-0.7 0.6-0.4 0.9 0 1.4-0.8 0.9 0.5 0.9-0.4 0.4-0.6 1.4 0.9 0.5 0.4 1.7 0.8 1-0.1 1.6 0.2 0.4-0.3 0.7 1.3 0.7-0.2 0.7 1 0.5 0.5-0.1 1.3-1.2 0.9 0.1 0.6-0.5 0.8-0.1 0.2 1.1 0.6 0.6 0.4 1.1 0 1.1-0.8 0.5-0.1 0.5 1.2 0.2-0.2 1.2 1.8 0.1 0.4-0.8 0-0.8 0.5-0.4 0.7 0.1 0.4-1 0.6-0.3 0.9-1 0.2-0.7 0.9-0.1 0.9-1.2 1-0.3 0.3 0.5 2.5-2.1 1-1.5 1.8 0.8 0.9 0.1 0.4 0.4 2.2 0.8 0.7 2 0.1 1.6 0.6 1 1.6 1.7 1.5 1.1 0.7 0.2 1.8 1.6 1.1 0 1.4 0.9 3.4 1 1.2 0.1-0.2 1.3-0.3 0.6-1 0.9-1.5 0.6-1 1.1-0.9-0.3-1.1 0.8 0.1 0.6 1 1.1 1.4 1.1 0.5 0.2 0.6-0.3 1.1 0.4 1.2 1.9 0.2 1.5 1.4 0.5 0.7-0.6 1.2 1.9 0.6 0-0.2-1.3 1.1-0.2 1 0.1 0.9 0.8 0.6-0.1 0.8 0.6 0.1 0.8-0.3 0.7 0.3 0.8 0.7 0.4-0.4 0.9 0.5 0.5 1.2-0.6 1.2 0.9 1.4 1.6 2.4 0.5 0.4-0.7 0.6 1.4 0.8 0.1-0.2 1.8 0.5 1.2 0.8-0.2 0.9 0.1 0.5-0.3 1.1 0.1 0.9-1 0.7 0.4-0.1 1.3 0.9-0.2 0.5-0.6 0.9-0.1 1.2 0.8 0.4 0 0.7-0.7 0.8-0.5 1.8-0.4z" id="33" name="Uttar Pradesh">
									</path>
									<path d="M406.9 337.2l-0.5-0.2-1.1 1.4 0.5 0.6-0.9 1.8-0.9 0.8-1.2 0-1-0.6-0.2-0.8-0.2-0.4-0.4-0.4-0.3-0.3-0.1-0.2 0.4-0.5-0.2-0.1-0.5 0.2-0.4 0-0.7-0.3 0-0.7 0.2 0.1 0.8-0.1 0-0.3-0.7-0.3-1.1-0.3-0.3 1 0 0.3-0.1 0-0.2 0.1-0.1 0.2-0.7 0 0.2-0.6 0.2 0.2 0.1-0.2 0.1-0.4 0-0.2-0.2-0.3 0.2-0.4 0.3-0.2 0-0.2-0.1-0.2-0.4 0-0.1-0.3-0.6-0.6-0.4 0.1-1.8 0.4-0.8 0.5-0.7 0.7-0.4 0-1.2-0.8-0.9 0.1-0.5 0.6-0.9 0.2 0.1-1.3-0.7-0.4-0.9 1-1.1-0.1-0.5 0.3-0.9-0.1-0.8 0.2-0.5-1.2 0.2-1.8-0.8-0.1-0.6-1.4-0.4 0.7-2.4-0.5-1.4-1.6-1.2-0.9-1.2 0.6-0.5-0.5 0.4-0.9-0.7-0.4-0.3-0.8 0.3-0.7-0.1-0.8-0.8-0.6-0.6 0.1-0.9-0.8-1-0.1-1.1 0.2 0.2 1.3-0.6 0-1.2-1.9-0.7 0.6-1.4-0.5-0.2-1.5-1.2-1.9-1.1-0.4-0.6 0.3-0.5-0.2-1.4-1.1-1-1.1-0.1-0.6 1.1-0.8 0.9 0.3 1-1.1 1.5-0.6 1-0.9 0.3-0.6 0.2-1.3-1.2-0.1-3.4-1-1.4-0.9-1.1 0-1.8-1.6-0.7-0.2-1.5-1.1-1.6-1.7-0.6-1-0.1-1.6-0.7-2-2.2-0.8-0.4-0.4-0.9-0.1-1.8-0.8-1 1.5-2.5 2.1-0.3-0.5-1 0.3-0.9 1.2-0.9 0.1-0.2 0.7-0.9 1-0.6 0.3-0.4 1-0.7-0.1-0.5 0.4 0 0.8-0.4 0.8-1.8-0.1 0.2-1.2-1.2-0.2 0.1-0.5 0.8-0.5 0-1.1-0.4-1.1-0.6-0.6-0.2-1.1-0.8 0.1-0.6 0.5-0.9-0.1-1.3 1.2-0.5 0.1-1-0.5 0.2-0.7-1.3-0.7 0.3-0.7-0.2-0.4 0.1-1.6-0.8-1-0.4-1.7-0.9-0.5 0.6-1.4 0.4-0.4-0.5-0.9 0.8-0.9 0-1.4 0.4-0.9 0.7-0.6-0.5-0.6 0.9-2.1 1.2 0.2 1.2-1.5 0.6-1.2 0.8-0.9 0.3-1.2 0.8-0.9-0.4-0.7-1.6-0.7-0.2 0.2-1.8-0.8-2.1-1.4-1.4-0.5-0.4-0.5-0.8-1.4-0.4 0-0.9-1-2.5 0.3 0-0.5 1.4-0.8 0.9 0 0.3-0.6 0.8 0.1 1.7-1.1 0.3 0 1.6-1.1 1.1-0.3 0.4-1-0.2-0.9-0.9 0.1-0.9-0.5-0.7-1.5 0.8 0.1 0-0.6 0.6-0.8-0.3-1-1.1-0.8 0.3-1-1.2-1.4-0.4 0-0.2-0.9 0.5-0.4 0.5-1.2 0.9-1.1-0.4-0.6 0.4-1.2 0.7 0.7 0.6-0.3 0.1-1 0.5-0.6-0.2-0.5-1.7 0.1-0.4-1.1 0.1-0.5 0.6-0.6 1.5 0.3 0.4-0.9 0.5-0.5-0.6-1.9 0.6-0.9 0.7-0.2 0.3-1.2 0.9-0.6 0-0.5 0.8-0.8 0.4 0.1 1.4-0.9 0.5 0.5 0.8-0.1 0.5 0.4 0.7-1.1 0.9-0.3 1.3 0 0.9-0.8 0.5-0.1 0.5-0.6 0.8 0 0.4 0.3 0.8-0.6 0.9 0.1 1.2-1.4 0.8 0.2 0.2-0.9 0.6 0.1 1.4-0.2 0.4 0.1 0.8 1 0.9 0.1 0.9 0.7 0.8 0.9 0.1 0.7 2.3-0.1 1-1.1 1.1-0.1 1.2 0.6 0.5 0.9 0.9-0.2 0.7 0.3 1.8 0.1 1.6-0.5 0.2 1.1 0.6 1.2 1.5 1.4 0.6 0.4 0.8-0.5 1.3 0.4 0.8-0.4 1.1-0.1-0.7-1.1-0.2-1.5-0.9-0.4-0.3-1.2-0.9-0.4-0.1-1 0.3-0.3 0.5-2.9 1.7-0.7 0.4-0.5 0.5-1.3 0.9-1.1 0.1-1.2 0.7-0.6 0.7 0.6 1.8 0.8 1.2 1.6 0.4 1 1.5 1.4 0 0.7 0.9 1-0.4 1.1 0 0.6 0.9 0.3 0.9 2-0.2 0.6 0.6 1.3 0.9 0.7 1.9 0.5 0.3 1.4 0.5 0.2 0.3 1.6 2.8-0.1 0.3 0.7 1.1 1.3-0.2 0.6 1.8 1.2 1.4-0.8 0.8-0.2 0.2-0.6 1.5 0.1 0.9-0.3 0.7-0.6 0.5 0.5 1.7 0.6 0.7-0.3 0.9 0.2 0.8 2.2 0.6 0.1 0.6 1.2 0.9 0 1.8 1 1.1 0.9 0.6 0 0.9 1 0.1 0.8 1 0.8 1.2-0.7 0.1-0.6 0.7 0 0.8 1 0.2 0.9 0.6 0.3 0.5-0.4 0.5 1-0.6 1.7-1.2 0.7-0.1 0.4 1 1-0.4 0.7 0.4 0.5 0 1.3 1 0.7 1.3-0.4 1 0.3 0.3 0.5 1.8 1.1 1.1-0.2 0.8 1.1 1.1 0.4 1 0.2 0.6 0.7 0.9 0.4 0.9-0.2 0.4-0.9 0.9 0.3 1.9 1.4 0.4 0 1.3 1.1 1.1 0.6 1 1.1 0.4 1.1 1.3 1.1 1.2 0.5 1.3 0.3 1.1 0.5 2.7 0.7 0.5 0.3 0.3 1-1-0.4-0.4 0.3-1.6 0.1-0.6 0.5-1.7 2.2 0.6 1.4-1.2 0.7 0 0.5-0.8 0.1-0.5 0.4-0.9 1.3-0.6 0.3-0.1 0.9-0.7 1.1-0.6-0.1-1.5 1.7-1 0.1-0.4-0.3-1.1 0.2-1 1.4-0.1 1.1-0.5 0.9-0.1 0.7-1.1 1.1-0.5 0.1-0.5 1.1-1-0.3-1.9 0.4-0.7 1.7-0.8 0.4 0.7 2.5 0.2 0.4 0.9 0.6 0.2 0.8-0.6 0.7 0.1 0.7-1 1.3-1 0.2-0.3 0.6 0.6 0.3-0.6 0.9-1.5 0.9-0.3 0.6 0.5 0.7-1.9 0.3-0.2 1.4 1.2 0.7-0.2 1.1 0.9 1.6 0.7 0.3 0 0.6-0.4 0.6-0.4 3.5-0.6-0.4-1.2 0.1 0.6 0.7 0 0.8 0.5 0.8-0.6 0.3-0.8 0.7-0.8-0.1-0.8-0.6-1.4 1.4-0.5 1.6-0.1 2.1-0.3 1-0.7 0.2-1.3 2.3 0.2 3.1 0.2 0.3z" id="34" name="Uttaranchal">
									</path>
									<path d="M694.6 610.4l1.1 0.6 0 1.5-0.8 0-0.9-0.5 0.2-1.2 0.4-0.4z m11.5-0.3l1.4 0.6 0.6 0.4 0.2 1-1.5 0.1-0.6-0.4-0.3-0.6 0.2-1.1z m-3.6-1.1l0.2 1 0.8 0.4-0.4 0.4-0.2 0.6-0.9-0.2-0.2-0.5 0.1-1.2 0.6-0.5z m-6.5-0.1l0.6 0.3 0.9 0.8 0.1 0.8-0.3 0.5-0.9 0.4-0.5-0.9-0.9-0.5 0.5-0.9 0.5-0.5z m8-0.5l0 1.2 0.9 1.1-0.4 0.4-1.3 0 0-0.4 0.3-0.2 0-0.2-0.2-0.1-0.5-0.2-0.3-0.9 0.2-0.4 1.3-0.3z m6.6 0.4l0.8-0.1 0.2 0.7-0.3 0.5-1-0.2-0.6-1.1 0.5-1 0.4 1.2z m-13.3-1.8l0.3 1.2 0.5 0.7-0.3 0.8-1.2-0.6 0-0.5 0.5-0.7 0.2-0.9z m0.5-0.1l0.5 0.5-0.6 0.9-0.3-1 0.4-0.4z m13.4-0.4l0.2 0.1 0.1 1.2-0.2 0.2 0 0.4 0.3 0.2 0.9-0.2 0.1 0.8 0.4 0.3-0.3 0.7-0.9 0.1-0.3-1.5-0.1-0.1-0.8 0-0.1-0.6-0.4-1.4 0.7 0.1 0.4-0.3z m-6-0.1l0 1.6-0.4 0.3-0.6-0.3-0.7 0-0.3-0.3-0.6-0.4 1 0 0.1-0.3 1.5-0.6z m-17 0.1l0.6 0 0.8 1-0.2 0.6 0.3 0.4-0.6 1.1-1 0.4-0.1-0.7 0.4-1.3-0.2-1.5z m4.9-0.2l0.6 1.3-0.7 2-1-1.1-0.1-1.4 0.6-0.6 0.6-0.2z m8.3-0.1l0.2 1 1.3 1.2-0.5 0.6-1.3-1.7 0.3-1.1z m-16.8-0.3l0.4 0.8-0.6 0.2 0 0.6 0.6 0.3 0.3 0 0.2 1.1-0.9 1.1-0.3-0.8-0.5-2.1 0.2-0.7 0.6-0.5z m29.2 0l0.4 1.2 0.7 0.8 0 1.1-0.8 0.6-0.7 0-0.8-0.8 0.1-1.7-0.3-0.7 0.6-0.5 0.8 0z m-2.8-0.2l0.5 0.2 0.9 0.8 0.2 0.5-0.2 0.9-0.4 0.3-0.6 0 0.2-0.7-0.2-1.2-0.4-0.8z m-14.8-0.3l0.9 0.1 0.5 0.8 0 0.4-0.7 0.3 0.1 1-0.9 0.9-0.5-0.6 0.1-0.8-0.4-1.2 0.9-0.9z m11.6-0.4l1 0.7 0.2 0.5 0.8 0.9-0.7 2.1-1.2-1.1-0.5-1.2 0-1 0.4-0.9z m-16.1 0.5l0.5 1.1-0.5 0.4-0.1 1.2 0.8 1.1-0.7 0.3-0.4 0.9-0.5-0.6 0-1.2-0.2-1.3 0.6-0.7 0.5-1.2z m-6.5-1.1l1.7 0.3-0.4 0.8 0.4 0.2 1.4 2-0.7 1.3-0.1 1.5 0.6 0.6-0.5 0.6-0.8 0.2-0.7-0.2-0.3-0.4 0.2-0.6-1-1.1 0.6-0.5 0-1.3-0.3-0.2-0.6 0-0.3-0.3 0.1-0.3 0.7-0.4-0.4-0.6 0.1-1.2 0.3-0.4z m24.1 0l0.7 0.2 0.6 0.3 0.1 0.4 0.3 0.1-0.2 0.6 0 0.7-0.7-0.1-1-0.7 0.3-0.5-0.1-1z m-19.2-0.1l-0.2 0.7 0 0.4 0.2 0.5 1.1 0.3-0.4 0.5-1 0.5-0.7-0.9 0.4-0.6-0.2-1 0.3-0.4 0.5 0z m21.8 0l0.7 0.3 1.1 1-1.2 0.5-0.2-0.7-0.5-0.5 0.1-0.6z m-5.9 0l1 0.1-0.7 1.7 0 1 0.7 1.7-0.7 0.8-0.9-0.3-0.2-0.4 0.5-1.1-0.1-1.2-0.6-0.5-0.6 0.2-0.1-0.8 0.3-0.6 0.8-0.1 0.6-0.5z m-15.2 0l-0.2 1-0.7 0.1 0-0.4 0.4-0.6 0.5-0.1z m6.7-0.5l0 0.6 0.2 0.4 0.9 0.4 0 0.5-0.8 0.3-0.4-0.3 0.2-0.6-0.6-1 0.5-0.3z m-9.6 2l-0.2 0.6-0.6-0.7 0.2-1 0.5-0.5 0.2 1.3-0.1 0.3z m23.8-2.3l0 1.3 0.5 0.6-0.3 0.7-0.3-0.3-0.6-0.2 0.4-0.4-0.2-0.3-0.5 0.3-0.1-0.3-0.2-0.2 0.2-0.7 0.3-0.1 0.5-0.5 0.3 0.1z m-13.3-0.1l0.5 0.6 0.2 1.2-0.3 0-1.2-0.6 0.1-0.8 0.1-0.2 0.6-0.2z m-5.1 0l0.5-0.1-0.2 2-0.5 1-0.4 0-0.3 0.2-0.3-1.3 0-0.9 0.8-1.2 0.4 0.3z m8.8-0.7l0.3 1 0.1 0.1 0.1 0 0.1 0.1 0.4 0.2 0.4 0.4-0.2 1 0.8 0.3-0.6 0.7 0.1 0.4-0.1 0.4-0.4 0-0.5-0.2 0 0.3 0.8 0.5-0.3 0.3-1.2-1.1-0.6-2 0.6-1.6 0.2-0.8z m-5.9-0.1l0.9 0.6-0.3 1.3 0.4 0.9-1.1-0.1-0.6 0.7-0.7-1.2 0-0.8 0.9-1.1 0.5-0.3z m-4.2 0l0.2 0.1 0 0.2 0.2 0.2 0.3-0.1-0.1 0.4-0.6 0.7 0 1.9-0.7-0.9 0-0.4-0.6-0.9 0.4-0.4 0.2-0.2 0.4-0.3 0.1-0.2 0.2-0.1z m19.7 0l0.6 0-0.2 1-0.7-0.2 0.3-0.8z m-8.5 0.6l-0.1 0.8-0.4-0.1 0-0.1-0.2 0 0-0.5 0-0.1 0.3-0.1 0.3-0.5 0.1 0.6z m2.7-0.3l-0.2 0.8 0.3 0.5-0.7 0.6-0.7 0.1-0.2-0.7 1.2-2 0.3 0.7z m-1.4 2.1l-0.4 0.6-0.7-0.1 0.3-0.9-0.5-0.4 0.5-0.6 0.7-1.5 0.3 0.6-0.3 1.3 0.1 1z m4.4-2.9l0.1 0.1 0.5 0 0.1 0.2-0.3 0.5 0 0.1-0.4 0.3 0.2 0.2-0.6 1.3-0.3-0.1 0.2-0.8-0.6-1 0-0.3 0.4-0.1 0.2-0.2 0.5-0.2z m-14.7-0.4l0.5 0.9-0.5 0.5-0.9-0.1-0.1-0.7 1-0.6z m15.6-0.4l0.1 0.3 0.3 0.5 0.7 0.1-0.2 0.7-0.5-0.2-0.5 0.7 0.3 0.9-1-0.4 0.2-0.4-0.2-0.2 0.3-0.3 0.2-0.5 0.2-0.1-0.1-0.2-0.3 0-0.1-0.5 0.3 0 0-0.3 0.3-0.1z m-12-0.1l0.8 0.7-0.3 0.6 0.2 0.6-0.9-0.2-0.3-0.5 0.2-0.8 0.3-0.4z m-8.9-0.4l0.7 0.2 0 1.3 0.3 0.9 0.7 0.3-0.1 0.7-0.7 0-0.5 0.3-0.1 0.3 0.2 1.1-0.5 0.4-0.8-0.3 0.1-0.4-0.2-1.1-0.8-1.2-0.6-0.1-0.1-0.5 0.2-0.2 1.4-0.6 0.3-0.5-0.1-0.4 0.1-0.1 0.5-0.1z m17.9-0.2l0 0.3 0.2 0.1 0.6 0.1-0.1 0.2 0.2 0.7-0.1 0.7 0.6 1-0.2 0.7 0.1 0.4 0.2 0.2 0.8 0.1-0.3 0.6-1.2-0.8-0.1-0.7-0.5-0.4-0.9-0.1 0.2-1.2 0-1.3 0.5-0.6z m-24.5-0.3l0.7 1.6 0.4 0.5-0.2 0.6 0.2 1.2 0 0.8-0.5 2 0 1.4-0.7 0.9-1.5 0-1.7-0.7-0.1-0.9 0.2-1.7 0.6-0.6 0.4-1.6 1.7-3.2 0.5-0.3z m22.3-0.2l0.1 0.2-0.2 0.2 0.1 0.2 0.3-0.3 0.1 0.2 0.9 0.1-0.3 1.4-0.9 0.5-0.3-0.5-0.6-0.2 0.3-1.3 0.3-0.3 0.2-0.2z m6.4-0.5l1.2 0.6 0.6 0.5-0.1 1.3-0.3 0.4-0.9 0.2-0.3 0.9-0.4 0.4-0.4-0.3-0.6 0 0.3-0.6 0.5 0 0.3-0.1 0.2-0.6-0.3-0.3-0.5 0-0.2-0.5 1-1-0.1-0.9z m-12.2-0.2l0.2 0.2 0 0.2 0.3 0.4-0.1 0.2 0.5 0 0.2 0.1-0.1 1.3-0.4 1.8-0.5-0.3-0.4-0.9 0.3-0.3-0.5-0.8-0.4-0.3 0.3-0.8 0.6-0.8z m6.7-0.1l0.8 0.5-0.3 0.8-0.8-0.1 0.3-1.2z m-8.7 0.1l0.5 0.5-0.5 2-0.6 0.1-0.5-0.8 0.4-0.8 0.3-0.4-0.1-0.8 0.5 0.2z m-3.9-0.2l0.4 0.4 0.8 0.3 0.3 1.3-1.3 1-0.4 0.7-0.3 0.1-0.1 0-0.1-0.4-0.1 0-0.2 0-0.5 0.5-0.4-1.3 0.3-1.5 0.6-0.5 0-0.6 0.6 0.1 0.4-0.1z m9.2-0.1l0.3 0.3 0.7 0.1 0.4 0.6 0.6 0.5-0.4 1.2 0.1 0.3 0.3 0-0.4 1.4-0.5-0.5 0.1-0.5-0.1-0.1-0.3 0.4-0.1 0.2-0.4 0.2-0.2-0.4-0.4-0.2-0.4-1.1 0.1-0.7 0.6-1.7z m-7.3-0.2l0.2 0.1-0.6 0.7-0.5-0.3 0.4-0.5 0.5 0z m4.7-0.4l0.9 0.3-0.5 1.2-0.4 0.3-0.4-0.4 0-0.3-0.2-0.3 0.6-0.8z m-17.3-0.1l0.3 0.4-0.5 0.6-0.4-0.6 0.6-0.4z m24 0.3l0.7 0.2 1-0.1 0.9-0.5 2 1.1-0.3 1.3-0.5 0.8-0.1 0-0.2-0.5 0 0.2-0.2 0.1 0 0.3-0.4 0.1-0.3 0.3-0.3 0.2-0.5 0.4-0.3-0.3 0-0.4-0.1-0.6 0-0.2-0.1-0.1-0.5 0-0.4-1.5-0.4-0.8z m-3.9-0.5l0.3 0.4 0.8-0.2 0.7 0 0.6 0.3 0.2-0.1 0.5 0.6-0.6 1-0.1 0.3-0.2 0.1 0.2-0.3 0-0.2-0.2 0-0.4 0.4-0.1-0.4-0.5 0-0.3-0.6-0.3-0.2-0.4 0-0.4-0.6 0.2-0.5z m0.8-1.8l0.1 0.8 1.7 1.2-0.4 0.2-0.9-0.4-1 0.2-0.3-0.6 0.1-1.4 0.7 0z m-3-1.5l0.5 0 1.5 0.7-0.8 1.2-0.1 0.5-0.4 0.5-0.7-0.5-0.9 0.1-0.1-0.6 0.2-1 0.8-0.9z m-17.7-0.2l-0.6 1.4-1 1.4-0.2 0.6-1.1 0.8-0.3-0.1 0.3-1.7 0.5-1.1 0.8-0.8 1.6-0.5z m23 0.2l1.2 0.1 0.6-0.2 0.3 0.4 0.8 0 0.3 1.6 0 1.4-0.3 0.3-1.4 0.1-1.1-0.7-1.7-0.2-0.8-0.5-0.1-0.9 0.4-0.5 0-0.7 0.5 0 0.9-0.5 0.4 0.3z m-1.7-1.1l0.4 0 0.1 1.1-0.6 0-0.3-1.1 0.4 0z m4.7 0.2l0 1-0.8 0.1-0.8-1 1.6-0.1z m3.9-0.2l0.8 0 1 1.4 0.3 1-0.5 1.9-1.1 0.3-1.1-0.9 0.7-0.9-1.5-0.7 0.1-0.6-0.3-0.2 0.6-1.3 0.5-0.3 0.5 0.3z m-7-0.4l0.7 0.4 0 0.9-0.6 0-0.3-0.3-0.3 0.1-0.5-0.2 0.4-0.7 0.6-0.2z m2-0.7l0 0.6 0.4 0.7-0.7 0-0.4 0.1-1-0.7 0.3-0.3 0.3-0.1 0.6-0.3 0.5 0z m1.2-0.1l-0.5 0.8-0.6-0.1-0.1-0.9 1.2 0.2z m-3.5-0.1l0.1 0.7-0.8 0.7-1.2-0.4 0.4-0.8 0.7-0.8 0.6-0.3 0.2 0.9z m0.5-1.4l1 0.2 0.1 0.6 0.6 0.8-0.5 0-0.5 0.3-0.3-0.6-0.8 0.1-0.2-1 0.6-0.4z m1.7-1.6l0.7 0.1 0.7 1.3 0.5 0.7-0.2 0.7-1.5 0.1-0.6-0.5-0.3-0.7 0.7-1.7z m2.8-0.8l1.2 1.5 0 1.1-0.5 1.3-0.4 0.3-0.7 0.1-0.5 0.6 0.1 1.1 0.2 1 0.5 0-0.4-1 0.2-1.3 0.6 0 0.7 0.8-0.4 0.8 0.3 0.5-0.1 0.6 0.7 0.6 0.1 1.1 0.9 0.7-0.2 0.7-0.8-0.1-1.6-0.9-0.5-0.4-0.6-1.9 0.1-0.6-0.5-2 0.2-0.5 0.8-0.8-0.1-0.5-0.6-0.8-0.4-1.4 0.7 0.4 1-1z m1.8-0.4l0.4 0.1 0 1.2 0.3 0.6 0.9 0.6-0.6 1.4 0.3 1.4-0.7 0.2-0.6-0.4-1.3 0 0.6-0.7 0.5-1.9-0.1-0.6-0.5-0.8-0.2-0.9 1-0.2z m-10.5-0.3l1.3 0.5 1.1 0.1 0.2 0.4 0.7 0.4-0.8 0.9-1.1 0.5-0.4 0.7-1.2 0.8 0 1.2 1.4 0.7 0.4 0.7-0.7 0.5-0.6 0-1.3-0.6-0.1-1.1-0.3-1-0.6-1 0.6-2.1 0.9-0.7 0.5-0.9z m5.2 0.7l0.2-0.2 0-0.3 0.2-0.1 0.2 0.3 0.2 0.9-0.6 0-0.1 1.1-1.7 0.6-0.1 0.4-0.8 0.3-0.1 0.6-0.7 0.4-0.4 0.9-1.1-0.3-0.1-0.5 1.1-1 0.5-1.1 0.7-0.3 1.2-1.3 0.9 0.5 0.5-0.9z m2.9-1.3l0.8 0.1 0.2 1-0.5 0-0.5 0.6-0.7-0.6 0.2-0.4 0.1-0.9 0.4 0.2z m-4-2.2l0.4 0.7 0 0.9-0.8 0.4 0.1 0.8 0.7 0.4-0.4 0.6-0.9 0.1-0.7-0.6-0.7-0.2 0.2-1.1 0.7-0.8 0.4-0.2 0.2-0.1 0.1-0.1 0.1-0.5 0.6-0.3z m1.2-2.9l0.7 0.1 0.8 0.6 0.6 1.2 0.9 0.5-0.2 1.2 0.7 0.8 0.1 0.6-1-0.1-0.2-0.1-0.1 0.3-0.5 1.7-0.6 0.4-0.4-0.2-0.2-0.9-0.2-0.3-0.2-0.1-0.2 0.2-0.4-0.2-1 0-0.1-0.5 0.7-0.7 0.1-0.9-0.8-1.2 0.2-0.6-0.1-0.7 0.4-1 0.4 0 0.6-0.1z m4.6-0.8l0.2 0.7-0.2 1.4 0.6 0.1 0.7 0.9-0.7 0.1-0.2 0.5 1.3 1.1 0.2 1.2 0.9 0.7 0.1 0.5-0.3 0.8 0.5 0.8-0.4 0.6-0.4-0.7-0.9-0.6 0.1-0.9-0.3-0.7-1.1 0.1-0.6-0.4-0.3-1-0.4-0.5 0.2-0.7-0.1-0.8 0.1-2.4 0.3-0.2 0.2-0.8 0.5 0.2z m-4.2-0.6l0.8 1 0.5 0.3-0.2 0.7-1.1-0.9 0-1.1z m-2.7-3.7l0.3 0 0.3 0.5 0.4 0.2-0.3 0.7-0.7-1.4z m4-1.8l0.2 1 0 1-0.4 0.3 0.1 0.5-0.1 0.3 0.2 0.2 0.1 0.6 0.2 0.3-0.1 0.9 0.6 0.4-1.3 0.9-0.1-1-0.7-0.4-0.2-0.8 0.2-0.4 0-2 0.2-1.1 0.6-0.7 0.5 0z m0.7-0.6l1.3 0.5 0.3 0.6 0.4 2 0.6 0.5-0.2 1 0.3 0.4-1 0.6-0.2 1.5-0.5 0.7-0.2 1.6-0.3 0-0.9-0.9-0.4-1.7 0.7-0.4 0.3 0.2 0-0.7-0.6-0.4 0.4-0.5-0.5-0.6-0.1-0.3-0.2-0.4 0.1-0.4-0.1-0.3 0.3-0.3 0.3-0.8-0.3-0.5-0.3-1.2 0.8-0.2z m-5.7-172.6l1.1 0.5 0.5 0 0.9 0.7 1.5 0.4 0.3 2.7-0.3 1 0.1 2.1 0.6-0.2 0.1-0.6 0.6-0.7 1.2 0.7 0.3 0.9-0.4 0.6 0.7 0.5 0.7 0.2 1.5-0.7 0.6 0.7 0.1 0.7 1.3 0.2 0.1 0.8 0.5 0.6-0.1 0.9 1 1 1.5-0.4 0.5 0.5 1.6-0.5 0.6 0.2 1.2-0.7 1.1-0.7 0.3 0.5 1-0.9 0.9 0 0.2 0.8 2 0.3 0.3 1.1 1.3 0.1 0.5-0.6 0.6 0 1.3 0.6 1.5 0.5 0.6 0.5 0.4-0.3 0.5 0.5-0.4 0.9-1 0.8 1.5 0.3 0.4-0.8 1.2 0.1 0.8 0.6 0.9 0 0.8 0.8 1-0.6 1.7 0.5 0.5 0.7-0.1 1.1 0.2 0.5-0.6 0.4 0.2 0.7 0.5 0 0 1.1-0.4 0.6-0.1 1.5-0.3 0.3 0 1.3 0.6 0.9-0.1 0.6-0.4 0.6-0.4 0.9 0.4 1-1 0.6-1.5 0.5-0.1 0.9-0.6 0.5-0.4-0.2 0.3 1.2-0.1 0.1-0.4-0.1-0.8-0.2 0-0.4-0.2 0.2 0.2 0.5 0.4 0.9 0 0.2-0.5 0-0.3-0.2-0.3 0.2 0.3 0.1 0.2 0.1 0 0.3 0.4 0.3-0.3 0.3-0.2 0.1-0.2 0.4-0.3 0 0 0.1 0.6 0 0.3-0.1 0 0.5-0.4 0 0.1 0.5-0.2 0.1-0.5 0 0.2 0.5 0.2 0.1 0.3-0.1 0.6 0 0 0.1-0.5 0.3-0.2 0.4-0.8-0.1 0.2-0.7-1.2-1.6-0.8-0.4 0.2 1.2 0 0.7-0.6 0-0.9 1.5 0.2 0.5 0.9 0.4 0.7 1.8-1.6 0.9-0.7 0.5-0.1 2-0.8 0.5-0.5-0.2 0.1-0.9-0.8-0.5-0.5 0.3-1.4 0.1-1.2-0.7 0.1-1-0.7 0.1-0.6 0.7-1.1 0.5-0.5-0.2-0.7-0.9-1.4-0.8-0.9-0.2-0.3-1.5-0.8-0.8-1.1 0.1-0.8-0.3-0.5-0.5-0.6-1.5 0.1-0.7 0.1-1.4-0.7-0.7-0.6-1.3 1.1-0.4-1.3-1.3-0.1-2-1-0.5-0.9 0-0.6-0.7-0.9-0.1-0.4-0.4 0-0.7-0.9-0.5-0.3 0.4-0.1 0.9-0.9 0.9-0.3 1.1 0.4 0.5 0.9 0.1 1.8 1-0.5 0.5 0.4 0.7 1-0.2-0.2 0.6 0.8 0.2 0.5-0.3 0.1 1.3-0.4 0.6-1.9-0.2-1.3 0.2-1-1.7-1.8-0.1-0.4 0.5-0.1 0.8 0.6 0.8-1.1 0-1.1-0.9-0.1-0.8 0.2-0.7-0.6-0.5-1.5 0.5 0-1.3-0.4-0.8-0.7 0.3-1.1 0.1 0.1-0.5-0.5-1 0.1-1-0.6 0.1-0.7-0.8-0.9-0.4-0.1-1.2-0.9-0.1 0.1 0.9-1.4-0.3 0.2-0.6-0.4-0.4-0.8 0.1-0.1-1-1.1-0.4-0.2-0.9-0.8-0.2-0.4 0.4-0.6-0.6-0.3-1.2-0.2-1.8-0.6 0.1-0.8 1.3-0.1 1.1-0.4 0.5-0.4 1.5-0.6 0.7 0 0.6 1 0.9 0.4-1.3 1.3 0.6 2.4 0.5-0.1 0.3 0.6 0.7-0.1 0.6 1 1.7-0.5 0.5-1.1 0.1-0.6-0.2-0.5 0.2-0.2 0.8-0.8 0-0.4 0.7-1.3 0.7-0.5 0.7 0 1.1 0.3 0.3-0.3 0.9-1.1 0.7-1.1 0.2-0.4 0.4-0.8-0.1-0.6 0.7-1.8 1-0.2 1.4-0.5 0.6 0.9 1.1-0.5 0.7 0.5 0.8-1 0.2-0.9 1.2-0.7 2-0.6 0.2-0.2 0.6 0.7 1.3 0.2 1.2-0.3 0.9 1.8 1.8 1-0.9 0.5 0.4 0.6-0.3 0.5 0.1 0.7-0.6 0.5 0.1 0.1 1 0.6 0.3 1.7 1.5 1.3 0.8-0.1 0.7 1 0.4 0.1 0.5 1.7 0.4 0 1.3-0.3 0.5 0.8 1.2 0.9 0-0.1 0.8 0.9 0.9 0.7 0.2 0.3 0.5 0.9 0.4 0.7 0.1 0.4-0.4 0.5 0.7 0.7 0 0.1 0.6 0.6 0.4 1.2 0 0.4-1 1-0.2 0.9 0.4 1.1-1.2 0.4 0.2 0.1 1.1 0.6 0.1 0.4 1.2-0.5 0.5 0.3 0.6-0.4 1 0.7 0.2-0.1 1.2 1 0.5 0.5 0.9 0.6-0.4 0.5 1 1.3 0 1.1 0.5 0.6-0.1 0 0.6-0.8 0.1-0.9 0.7-0.2 0.7 0.3 0.8-0.9 0.1 0.1 0.7-0.5 1.2-0.8-0.6-0.8 0.1-0.9-1.1-1.5 1.4-0.9-0.3-0.2-0.3-0.9 0.1-1.3-0.9-0.8 0-0.5 0.4-1-0.3-0.9 0.1-1.3 1-0.6 0-0.2-0.7-2.6-0.6-0.4 0.6-0.7 0.1 0.6 1.6-0.1 0.6-0.6 0.4 0.4 1.7-0.6 1.3 0.6 0.2-0.5 1.2-0.5 0.1-0.9 1.4 0.1 0.9-0.7 0.2-0.7-0.4-0.6 0.4-0.6 0.9 0.6 1.3-0.5 0.4-0.4-0.4-1.7-0.5-0.1-0.9-1.1-1.5-1.7 0.2-0.8 0.7-0.6 0.1 0 0.5 0.6 0.7-0.1 0.6 0.4 0.8-1.9 1.9-0.2 1.2-0.5-0.1-0.8 1.2 0.2 0.4-0.4 0.9-1.7 1.7 0.1 0.3 1.1 1 0.8 1.2 1.3 2.2 1.4 1.5 0.9 0.6 1 1.2 2 0.5 2.2 2.2 0.7 0.4 1.5 0.1 1.6-0.3 2.3 1.4 0.8 0.1 0.9 1.7 0.4-1.2 0.7 0.5 1.3 0 0.1 0.3 1.5-0.3 1 0.1 0.7 0.5 0.5 1.1-0.2 2.7-0.4 0-0.7 1.1 0.4 1.8-0.5 0 0 0.8 1 0.1-0.1 1.1 0.5 0.4 0 1.5 0.7 0.2 0.4 0.8-1 0.1-0.2 1 0.2 0.9-0.3 0.8-0.9 0-0.1 0.5-1.2 0.6-0.1 0.4-1.1 0.4-0.3-0.4-1.6 0.5 0.9 1.6-0.8 1-0.7 0.3 0.7 0.6-0.2 1.1-0.3 0.8 0.3 1.7-0.4 0.9 1.1 0.7-0.2 1 1.9-0.3 0.6 2.2 0.8 0.4 0.4 0.8 0.7 0.3 0.9 1 1.2-0.6 0.6 0 0.1 0.6-0.4 0.6 0.1 0.9-0.9 0-0.4 2 0.4 0.7-0.9 0.7 0 0.8 0.3 0.4-1.7 0.9 0.9 0.9-0.1 0.6 0.9 0.6 0.8-0.1 0.5 0.8 1 0.1-0.2-1.3 0.8 0.2 0.7 0.8 2.1-0.2 0.6 0.6 0.7 0.4 1-0.8 0.3 0.2-0.2 1-0.8 0-0.8 0.8-0.2 1.1-0.8 0.7-0.3 0.6-1 0.3-0.1 1 0.4 1.5-0.2 0.4-0.1 1.8-0.3 0.6 1.2 0.2 0 0.8 0.6 0.3-0.3 0.5 0.2 1 0.8 0.4 0.4-0.4 0.7 1.3-0.3 1.8-0.6 0.3-0.7 0.8 0.1 1.2 0.6 0.9 0.7 0.6-0.4 1.2-0.6 0.7 0 0.7 0.9 0.4-0.7 0.6 0 0.9-1.4 0.3-0.6 0.7-0.3-0.1-0.4 1.3 0.1 0.5-0.3 2.4-0.6-0.2-0.7-0.7-0.1-0.9-0.5-0.6-0.4-0.2-0.4-0.4-0.7-0.1-0.4 0-0.2 0.2-0.3-0.3-0.3-0.1-0.3-0.3-0.3 0-0.3 0.3 0.7-0.2 0.2 0.3 0.5 0.3 0.5-0.1 0.3-0.1 0.5 0.2 0.3 0.3 0 0.4 0.4 0.4 0.4 1.4 0.6 0.5 1 0 0.2 0.8-0.2 1.6-0.5 0.2-0.4 0-0.2 0.1-0.5 1 0.3 0.4-0.3 0.9 0.1 0.4-0.4 0.3 0 0.2-0.1 0.4-0.2 0-0.4 0.3-1 0.8 0.2 0.3-0.5 0.9-1.2-0.5-0.9 0.2-0.3 0.8-0.9 1 0.1 0.5-0.5 0.5-0.2 0.9 0.2 1.7 0.3 0.6-0.7 0.8-0.6 1.9 0.6 1.2-0.4 1.1-0.8 0.6-0.3-0.5-0.3 0.2-0.6-0.3 0.1 0.9-0.7 1.1-1-0.8-0.1-0.4 0.5-0.8 0.4-0.2-0.6-0.1-0.7 0.2-0.3 0.5-0.6-0.1 0.2-0.7-0.7 0.2-0.3 0.3-0.3-0.1-0.3 0.2-0.6 0.6-0.1 1.2-0.3 0.5 0.2 1.3-0.4 0.4-0.6-0.2-0.2-0.8-0.1-1.3-1-0.3-0.3 0.1-0.2 0.2-0.1 0.9-1.3 0.5-0.3 0.3-0.1 0.3 0.7 1.1 0.2 0.6-2.3-0.4 0.1-0.4-0.6-1.6-0.8-1-0.5-1.2 0.4-1.5 0-0.5-0.7-1 1.4-1.6 0.6-1.1 0.4-2.1-0.5-1.5 0-0.7-0.8-1.3-0.8-0.5-1.6-0.4-1.5 0 0.3-0.8 0.2-1.1 0.6-1.6-0.6 0.1-0.3 0.7-0.1 1.1-0.9 1.2-0.8 0-1.4-0.9-0.9-1.3 0-2.5-0.3-1.9-0.7-0.1 0.5 1.4 0 1.5-0.4 0.4 0.2 1.7 1.1 1.1 0.7 1 1.1 0.4 0.4-0.4 1 0.8 1.4-0.1 1 0.2 0.4 0.7 1.6 2.1-0.9 1.3-2.8 2-0.8 0.3-1.2-1.3 0.1-0.8-0.6 0 0.2 1.1 1.2 1-0.6 1.1-1.1 2.9-0.8 1.7-1.4 1.4-0.4 0.7-1.1 0.6-2.2 1.8-0.7 1.1-0.7 0.4-1.2-0.1-0.5 0.7-2.1 0.9-4 0.8-2.7 0.8 0-0.1 0-0.5-0.7-0.7 0-0.4 0.2-0.8 0-0.6 0.1-0.2-0.2-0.6 0.1-0.3-0.1-0.1-0.7-0.2 0.3-0.1-0.3-0.3 0-0.6-0.1-0.2-0.5 0-1.1-0.1-0.4-0.1-0.4 0.1-0.5-0.4-0.5-0.2-0.1 0.2-0.2-0.3-0.2 0-0.1 0-0.2-0.1-0.4-0.2-0.3 0-0.1-0.3-0.5 0.1-0.2-0.1 0-0.1-0.4-0.3 0.2-0.2-0.2-0.5-0.2-0.4-0.4-0.5 0.2-0.3-0.5-1.1 0.6-0.8-0.6-0.6-0.1-0.3 0.1-0.5-0.4 0-0.1 0.1-0.6-0.1-1-0.4-0.2-0.3-0.3 0.9 0 0.7-0.3 0.1-0.7 0.4-0.5-0.2-0.2 0.2-0.2 0-0.4 0.7-0.1 0.1 0 0.1 0.2 0.2 0 0.2 0 0.8-0.6 0-1.6-0.2-0.4-0.7-0.7-0.8 0.2-1.3 1-1.7-0.4-0.9 0.1-0.6-0.2-0.5-0.8-0.1-1.3-1.4-1.7-0.1-2-0.5-0.6 0.1-0.3-0.6-0.6-0.1-0.2-1.1-0.3-0.3-1.3 0.3-1.3 0.1 0-1.3 0.3-1.4 0.8 0.3 1.5-0.4 0.7-0.7-0.5-0.5 0.8-0.4 1 0.1 1.3 0.3 0.1-1.1-0.6-0.7-1.5-0.9 0-0.6 0.4-1.1 0.1-1-1.3-0.7-1.4-0.2-0.6-1.8 0.2-0.4 1.3 0.2 0-1.6-0.2-0.9-0.7-0.3-0.3-0.8-1.7-0.3-1.1 0.3-0.7-0.1-0.2-0.6-0.4-0.2 0.1-2.1-0.7-0.7-1.3-0.6-1-0.8-2.4-0.4-0.9-1.4-1.3-0.6 0.2-1.2 0.4-0.8 0-1.1 0.5 0 0.1-0.9 0.4-0.5-1-0.7 0.1-0.4 0.8-0.2 0.4-0.5 0.5 0.4 0.4-0.5 0.7 0.2 0.7-0.7-0.1-0.7-0.8 0.5-0.5-0.8-1.2 0.1-1.6-0.3-0.8 0.7-0.4-0.6-0.7-0.2-0.9 0.3-1.8-0.8-0.7 0.6-1.6 0.1-0.4-0.9-0.9 0.1-0.5-1-0.9-0.8 0.1-0.7-0.7-0.5-0.9 0.1-1.6-0.8 0.2-0.6-0.4-0.5-1.9-0.1-1 0.3-0.3 0.3-1 0-0.5-0.7-0.8-0.4 0-0.5-0.7-0.8-0.7 0.1-0.3-2.7 0.2-0.6 1-0.9 0.3-1-0.2-1.3 1.1-0.4-0.6-1.2-0.6 0-0.1-1.6 0.5-0.9 1.1 0.2 1.1 0.6 2.8-1.2 0.7-0.1-0.3-1.1-0.7-1.2 0-0.4 0.9-0.8 1.2 0.2 0 0.4 1-0.2 1.2 0.1 0.5 0.7-0.3 0.9 0.4 0.9-0.4 1 1.2 0 0.9 0.6 0.6 0.1 0.1 0.8 0.7 0.1 1.2-0.2 0.1 0.4 0.6 0.3 0.4-0.2-0.4-0.7 0.9-0.5 0.8-0.2 0.2-1.9 0.4-0.3-0.4-0.8 0.9-1.1-0.1-0.4 0.9-0.2 1.3-1.6 1.2-0.1 1.7 0.2 2.1-1.2 2-0.8 2.1-0.5 0.7 0.1 0.2 0.6 1.9-0.4-0.1-0.4 0.5-1.5 0.4-0.2 0-1.2-0.6-0.8 0.1-0.6 0.6 0.1 0.8-0.4 0.6-0.8 0.7 0-0.2-0.7 0.7-0.7 1 0.6 0 0.4 0.6 0.4 0.7-0.8 1.3 0.5 1.1 0.5 0.8 0.8 1.7 0.6 1.4 0.2 0.6-0.9-0.4-0.2-0.8-1 0.2-0.6 1.8 0.4 0.2 0.6 1-0.6-0.1 1.1 0.9 0 0.3-0.4-0.3-0.7-0.1-1.6 0.5-0.1 0.2 1 1-0.5-0.3-1.7 0.2-0.8-1.1-0.5 0.3-0.6-0.7-0.4-0.5-1.1 0.4-0.6 1 0.4 2 0-0.6 1 0.8 0.3 0.6-0.5 1.2 0.3 1.7 0.9 0.6-0.6-0.6-0.4 0.3-0.5 0.8 0.2 1-0.4 0.2-0.9-0.6-0.2 0.5-1.1-0.5-0.1 0.2-1.2 0.9 0.5 0.6 0.6 1 0 0-0.7 0.4-0.7 0.8-0.3-0.6-0.6-0.2-0.5 1.6 0 0.4 0.3 1.7 0.1 0.2-0.9-0.8-1.1-1.2-0.3 0.4-1.3 1.1 0 0.9-0.8 0.1-0.9 0.6 0.2 1-0.6 0.2-1.1 1.2-1.9 0-0.6-0.3-0.5 0-0.7 1-1.4-0.7-0.9 0.1-0.9-0.2-1.7 0.5-0.5 0.5 0.6 0.8 0.3 0.6-0.4 0.8 0 0.1-0.7 0.6-0.5-0.3-0.7 0.4-1.9-0.9-0.6 0.4-0.4 0.1-1.2-2.1-0.6-0.7-1.1 1.1 0.2 0.5-0.5 1.1-2.6 0.5-0.4 1.9-1 0.2-0.6-0.1-1-0.3-0.5-1.9-1.8-0.1-0.5-1.3-1.6-1-0.6-1.5-0.7-0.7-0.9 0-2 0.6-2.6 1.4 0.6 0.1-0.3-0.3-0.8 0.9-0.7 0.2-1-0.2-0.7-0.7-0.2-1.7-1.3 0.3-1.3-0.8-0.2-0.1-0.7 0.8-2 0.8 0.5 0.6-0.4 0.2-0.7 1 0-0.1-0.5 0.4-1 1-0.1 0.1-0.5 0.7-0.6 1.1-0.1 0.8 0.8 0.3 0.5 0.6 0.4 0.3-0.3 0.6 0.6 1.2 0.2 0-0.4 0.1-0.4-0.1-0.1-0.1-0.1-0.3-0.9-0.3-0.2-0.3 0.1-0.4-0.8 0.1-0.2 0.2 0-0.3-0.4 0.2-0.7 0.2-0.2-0.1-0.1-0.2-0.1 0.4-0.2 0-0.2-0.1-0.2 0.2-0.7-0.3-0.1 0.3-0.3 0.1 0 0.1 0-0.2-0.3 0.2-1.1 0-0.4-2.4-1-1.2-1-0.2-0.5-1.3-0.9-0.1-0.7 0.5-0.6-0.8-0.7 0.8-0.7-0.9-0.5-0.5 0.2-1.6-0.4-0.3-0.6 0-1-0.3-0.6 0.7-0.1 0-0.4-0.1-0.2 0.1-0.2 0.1-0.4-0.1-0.8 0-0.3 0.2-0.4 0.3-1.1 0.3-0.5 0.9-0.8 0.4-0.2 0.1-0.4 0.1 0.1 0.8-0.4 0.1 0.5 0.4 0.3 0.2-0.6 0.7 0 0.3 0.1 0.2-0.1-0.1-0.3-0.5-0.4 0.5-0.3-0.1-0.6 0-0.2 0-0.3-0.1-0.4 0.6-0.4 0.5 0.7 0.3-0.1 0.3 0.1-0.1-0.5 0.8-0.6 0.1-0.3 0.7 0.2 0.4-0.1 0.1-0.4 0.5-0.3 0.1-0.3 0.1-0.2 0.3-0.2 0.1-0.1 0.4-0.3 0.1-0.2 0.2 0.1 0.4-0.7 0.7-0.5 0.2 0 0.4-0.2 0.3-0.5 0.7-0.1 0.3-0.1 0.3-0.3 0.2-0.3 0.1-0.5 1.2-1 0.1 0.1 0.1 0.1 0.2-0.6 0.4-0.2 0-0.2-0.3-0.1-0.4-0.7-0.5 0.1-0.3 0-0.5-0.4 0-0.3 0.8-0.8-0.1-0.7-0.3-0.6-0.5 0.1-0.2-0.8-1-0.2-0.5-0.8 0.5-0.6 1.4-0.9-0.1-0.7-0.8 0.6-0.7-0.3-0.6 0.2-0.1 0.6-1.2 0.4-0.9-0.9 0-0.2 0.1-0.8 0.5-0.2 0.7-1.5 0-0.7 0.8-0.8 0.1-2 0.5-0.8 0.2-2-0.7-2.5 0.2-1.2-1.2-1.2 0.3-0.8-0.9-1.2-0.1-1.4-1-0.8-0.2-0.8-1.5-0.3-0.8-1.5-0.1-0.8-0.7-0.3 0-1 0.5-0.4 0.3-2.2 0-0.8 1.4 0.2 0.6 0.6-0.3 0.3 0.6 1 0 0.9 1.8 1 0.7 0 0.7-0.7 1.2 0 0.6 0.5 1.6-0.4 0.7 0.1 0.2 0 0.6 0.5 0.1 0.4 0.7-0.1 0.2 0.3 0.7 0 1.3 0.4 0.8 0.3 0.7-0.3 0.4-0.9 1-0.5 0.9-0.9 0-1 0.7-0.3 1.7-0.4 0.9 0.2 0.7 0.8 0.7 0.2 0.9-0.7 0.9 0.6 0.2 0.8 0.5 0.3 0.7-0.5z" id="35" name="West Bengal">
									</path>
									<path d="M165.7 1082.3l0 0.1 0.1 0 0 0.1-0.1 0 0-0.1 0-0.1z m2.4-1.6l0 0.1 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0-0.1 0-0.2 0-0.1 0-0.1 0-0.1 0-0.1 0 0-0.1-0.1 0-0.1 0-0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0 0.1 0.1 0 0 0.1 0.1 0 0.1 0 0.1 0 0.1 0 0-0.1 0.2 0 0 0.1 0-0.1 0.1 0 0.1 0 0-0.1 0.1 0 0-0.1 0.1 0 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0.1 0 0-0.1z m-27-59.6l0 0.1 0 0.1 0 0.1-0.1 0 0 0.1-0.1 0-0.1 0 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0.1 0 0-0.1z m46.5-1.9l0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1-0.1 0-0.1 0 0-0.1-0.1 0 0-0.1 0.1 0-0.1 0 0-0.1 0-0.1-0.1 0 0-0.1 0-0.1 0 0.1 0.1 0 0.1 0 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.2z m-45.2-1.1l0 0.1 0.1 0 0 0.1 0 0.1 0.1 0 0 0.1-0.1 0-0.1 0 0-0.1 0-0.1 0-0.1 0-0.1z m45.6-0.7l0 0.1 0 0.1 0 0.1 0 0.1 0.1 0 0 0.1 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1 0-0.1 0-0.1 0-0.1 0-0.1 0-0.1 0-0.1 0-0.1-0.1 0 0-0.1 0-0.1 0-0.1 0.1 0z m-34.8-14.6l0.1 0 0 0.1 0.1 0 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1-0.1 0-0.1 0 0 0.1-0.1 0-0.1 0 0 0.1-0.1 0-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0-0.1 0 0-0.1 0.1 0 0-0.1 0.1 0 0.1 0 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0.1 0z m-16.2-8.2l0 0.1-0.1 0 0-0.1 0.1 0z m51.6-0.3l0 0.1-0.1 0 0 0.1 0.1 0 0-0.1 0 0.1 0.1 0 0.1 0 0.1 0 0.1 0 0-0.1 0 0.1 0.1 0 0.1 0 0.1 0 0.1 0 0 0.1-0.1 0-0.1 0 0 0.1-0.1 0-0.1 0 0 0.1-0.1 0-0.1 0-0.1 0 0 0.1-0.1 0-0.1 0-0.1 0-0.1 0-0.1 0-0.1 0 0-0.1-0.1 0 0-0.1-0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0.1 0 0.1 0 0.1 0 0 0.1 0-0.1 0 0.1 0.1 0 0-0.1 0 0.1 0-0.1 0.1 0 0-0.1 0.1 0z m-51.5 0.1l0-0.1 0.1 0 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.2 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0.1 0 0.1 0 0.1 0 0 0.1-0.1 0 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1-0.1 0z m4.1-4.4l-0.1 0 0 0.1 0 0.1 0 0.1 0.1 0 0 0.1-0.1 0-0.1 0-0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.2 0z m1.2-0.2l-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0-0.1 0 0-0.1 0.1 0 0-0.1 0.1 0 0.1 0 0-0.1 0.1 0 0.1 0z m13.8-6.4l0.1 0 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1-0.1 0 0.1 0 0 0.1-0.1 0 0-0.1-0.1 0 0-0.1 0-0.1 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0.1 0 0-0.1 0.1 0 0.1 0 0-0.1 0.1 0z m-21.4-2.7l0.1 0 0 0.1-0.1 0 0 0.1 0-0.1 0-0.1z m23.4-1.6l0 0.1 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1 0.1 0-0.1 0 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1 0 0.1 0 0.1-0.1 0 0-0.2 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1-0.1 0 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0.1 0z m7.2-8.3l0.1 0 0 0.1 0.1 0 0 0.1 0 0.1 0.1 0 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0.1 0 0 0.1 0 0.1-0.1 0-0.1 0 0-0.1 0-0.1 0-0.1-0.1 0 0-0.1 0-0.1 0-0.1 0-0.1 0-0.1-0.1 0-0.1 0 0-0.1 0-0.1 0.1 0z m-27.8-3.6l0.1 0 0 0.1 0 0.1-0.1 0 0-0.1-0.1 0 0-0.1 0.1 0z m18-3.7l0 0.1 0.1 0 0 0.1 0 0.1 0 0.1 0 0.1 0 0.1-0.1 0 0 0.1-0.1 0 0 0.1 0 0.1-0.1 0-0.1 0 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0.1 0 0-0.1 0-0.1 0-0.1z" id="19" name="Lakshadweep">
									</path>
									<path d="M203.7 83.7l0.2-0.1 2.5-0.7 0.8-0.1 1.5 0.2 0.9-0.1 2 0.3 1.5 0.7 0.8 0 0.4 0.5 0.5 0.9 0.4 0.1 1 0.1 1.6-1.4 1.5-0.6 0.8-0.5 0.5-0.1 0.2-0.2 0.5-0.4 0.4 0.6 1.8 1.8 1.1 0.3 1.4 1.2 1.4 0.6-0.4 0.9-0.4 1-0.1 1.7 0.1 0.4-0.2 0.6 0.2 1 0.6-1.1 0.4 0.2 0.6 0 0.6 0.3 0.5 0.6 0.4 0.7 1 0.4 0.9 0.4 0.2 0 0.5 0 0.9 0.3 0.7 0.3 0.5 0.3 0.6 0.4 0.5 0.4 0.2 0.2-0.1 0.3 0.3-0.1 0.2-0.1 0-0.2-0.1-0.3 0.1-0.1-0.1-0.4 0.1-0.2-0.1-0.2 0-0.2 0.1 0 0-0.2 0.1-0.1 0.1-0.1 0.1-0.1 0-0.2 0.1-0.1-0.1-0.1-0.2 0-0.2-0.3 0.4-0.1 0.3-0.2 0.5 0.1 0.1 0.5 0.3 0.1 0.1 0.2 0 0.2 0.1 0 0.4 0.2 0.2 0.1 0.2 0.2-0.1 0.3 0.2 0.4-0.1 0.1 0 0.4 0.2 0.1 0.2-0.1 0.3 0.1 0.4-0.1 0 0.1 0.3 0.2 0.4 0.3 0 0.1 0.3 0 0.2 0.2 0.4 0.1 0 0.2 0.2 0.1 0.1 0.1 0.1 0 0.1 0.2 0.2 0.3 0.1 0.1 0 0.2-0.1 0.1 0.1 0.4 0.1 0.2 0 0.3 0 0.4 0.2 0.4 0.2 0.5 0 0.2 0 0.1-0.1 0.1-0.1 0.2 0.1 0.2-0.3 0.3 0.1 0.1 0 0.2 0.1 0.2 0 0.1-0.5 0.2-0.1 0.2-0.3 0.2 0 0.1-0.1 0.2 0 0.2-0.7 0.7 0.1 0.2 0-0.3 0.1 0 0.1 0.1 0.1 0 0.3 0.1 0.3 0 0.7 0.2 0.1-0.1 0.1 0 0.1 0 0.1 0.1 0 0.1 0.1 0.1 0 0.2-0.1 0.1 0 0.1 0 0.1-0.2 0.1-0.1 0-0.1-0.1-0.1 0.1 0 0.2-0.2 0.4 0.1 0.1 0.2 0.1 0.2-0.1 0.1-0.1 0.1 0.2 0.1 0 0.3 0.1 0.2 0 0.2 0.2 0.1 0.1 0.1 0 0.1 0.1 0.2 0.3 0.1 0 0.1 0.1 0.1 0.2 0.2 0.3 0.3-0.2 0.1 0.1 0.3 0.1 0.2 0.1 0.2 0.3 0.3 0.5 0.2 0.1 2.2 2.6-2 3.7 0.2 0.3-0.2 0.2 0.4 0.3-0.1 0.3 0.1 0.3-0.2 0.2 0.2 0.4 0.1 0.4 0.3 0.3 0 0.1-0.2 0.4 0 0.3 0.2 0.5 0.2 0.3 0.9 0 0.6 0.1 0.3-0.3 0.2 0.2 0.4 0.1 0.3 0.4 0.1 0.3 0.1 0.5 0.2 0.4 0.1 0.4 0.3-0.1 0.3 0.3 0.4 0 0.2 0.1 0.4 0.1 0.2 0.4 0.7 0.2 0.4-0.2 0.5 0.7 2-1.9 0.3 0.4 0.5 0.2 0.4-0.1 0.2 0.1 0.1 0.2 0 1.4-0.1 0.5-0.2 0.4 0.1 0.6 0.3 0.5 0.4 1.1 0.7 0.2 0.4 0.4 0.1 0.3 0.4 0.8 0.3 0.6 0.7 0.5 0.6 0.2 0.2-0.1 0.3-0.1 0.5 0.8 0.3 0.2 0.5 0 0.2 0.4-0.2 0.6-0.2 0.4 0 0.3 0.1 0.4 0.3-0.3 0.4 0 0.8-0.1 0.5-0.2 0.9 0 1.1 0.2 0.2 0 0-0.4-0.1-0.3 0.1-0.1 0.7 0 0.4 0 0.4 0.1 0.2 0.3 0.3 1.1-0.1 0.4 0.2 0.4 0.2 0.6 1.1 1.3 0.2 0.4 1.4 1.3 0.6 0.5 0.3 0.3 0 0.8 0.6 0.9 0.9 0.8 0.9 0.1 0.6 0.1 0.4 0.4 0.3 0.3 0.3 0.9 0 0.5-0.2 0.6 0.1 0.5 0.1 0.4-0.1 0.2 0.1 0.1 0.5 0.6-0.3 0.4 0 0.3-1.5 0.6-0.1 0.1 0.3 0.4 0.2 0.4-0.1 0.2-0.4 0-0.1 0.1 0.2 0.5-0.2 0.5-0.6 0.1 0.6 1 0.4 0 0.8-0.6 1.6-0.2-0.2-1.2 0.1-0.2 0.1-0.2 0.2-0.1 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0 0.2-0.1 0.1-0.1 0.1-0.1 0.1 0.1 0.1 0 0.2 0.1 0.2 0 0.2 0.1 0 0.1 0 0.2 0.2 0.3 0.3 0.3 0.1 0.1 0.1 0.1 0 0.1-0.1 0.1-0.1 0.2 0.1 0.3 0.1 0.3 0.2 0 0.2 0.1 0.3 0.2 0.2 0.1 0.3 0.1 0.4 0.1 0.3-0.2 0.2-0.2 0-0.4 0.1-0.2 0.1-0.1 0.1 0 0.2 0.3 0.2 0.2 0.1 0.2-0.1 0.2-0.1 0.1 0 0.2 0.1 0.2 0.4 0.1 0.2 0 0.4 0.5 0.2 0 0.2 0 0.1 0.1 0 0.1 0.1 0.3 0 0.2 0.1 0.1 0.2 0 0.2 0.1 0.1 0.3 0.1 0.1 0.1 0.1 0.3 0.5 0.3 0.2 0.3 0 0.3 0 0.1 0 0.2 0.4 0 0.2 0.1 0.3 0 0.2 0 0.3 0 0.1 0.1 0.1 0.4 0 0.1-0.2 0.2-0.1 0.1 0 0.1-0.1 0.1-0.1 0.1-0.1 0.1 0 0.3 0.1 0.1 0.1 0 0.1 0 0.1 0 0.1 0.1 0.3 0.1 0.1 0.1 0.1 0 0.1-0.1 0.2 0 0.1 0.1 0.2 0.1 0.4 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0.2 0 0.3 0.1 0.1 0.1 0.1 0 0.1 0 0.2 0.1 0.2 0.2 0.1 0.2 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0.2 0.1 0.2 0.1 0.2 0.2 0.2 0 0.1 0.1 0.3-0.1 0.1 0 0.2 0 0.3 0.6 0 0.2 0.1 0.1 0 0.1 0.1 0.1 0 0.1 0 0.1-0.1 0.3-0.1 0.1 0 0.2 0.2 0.1 0 0.2 0.1 0.2 0.1 0.1 0.1 0.1-0.1 0.1 0 0.1 0.3 0.2 0.1 0.2 0.2 0.1 0.3 0 0.4 0 0.2 0.4-0.1 0.6-1 1.9-0.6 0.1-0.2-0.1-0.4-0.2-0.1 0.2 0 0.1-0.2 0.1-1.2 0.1-0.8 0.4-0.5-0.1-0.5-0.4-0.6-1.3-1.2-0.2-0.1 0.2-0.3 0.2-1.2 0.1-1 0.8-1 0-0.4-0.2-0.3 0-0.4-0.2-0.3 0.1-0.1 0-0.2 0-1.1 1.1-1.5 1.1-0.8 0.4-0.6 0.8-0.7 2.1-0.6 0.7-2.9 0.5-0.8 0.5-1.2 0.1-0.5 1.6-1.8 1.3-0.3 0.7-2.5 1.3-0.4 0-0.4-0.4-0.3-0.4-0.4-0.4-1.2-0.6-1.1-0.2-0.4 0.1-0.5 0.1-0.3 1.1-0.4 0.4 0.2 1 0.9 1.1 1.9 1.1 0.8 1.8 0.5 0.5-0.1 1.5-0.5 1.2 0.3 0.8 0.7 0.6-0.1 0.6-1.2 2.1-1.1 1.3-0.3 0.5-0.3 0.4-0.4 1.1-0.7 0.9-0.9 0.5-1.2 0.2-1.1 2.1-0.9 0.7-1.3 0.5-1.9 0.3-0.8 0.3-1.3 1-0.4 2-0.4 0.7-0.4 0.1-0.1-0.2 0-0.1 0-1-0.8-0.3 0.2-0.8-0.2 0-0.4 0.2-1.4 0.4-0.3-0.1-0.3 0-0.4 0-1.8-0.8-0.3 0.2-0.1 0-0.4 0-0.2 0.3-1-0.8-0.1-0.5-1 0.1 0-0.9-0.7 0.2-1.5-0.7 0.3-0.6-0.4-0.3-0.9 0.1-1.1 0.6-0.3-1.7-0.5-1.1-0.6 0.3-0.7-0.4-0.6 0-0.6-0.5-0.5 0.1-0.1 0.7-0.7 0.8-1.3 0-0.8-0.7-1.4 0.2-0.6-0.9-1 0-1.1-0.2-0.7 0.7-0.9-0.2-0.6 0.2-1.4-0.1-0.1-0.5-0.8 0.1-0.2-0.8 0.4-0.8-1-0.7-0.3-0.8-0.1-1.2-0.5-0.6 0.5-0.4 0.1-0.7 1.4-1-1.1-0.7-0.4-1 0.3-1.2 0.4-0.8 0.5-1.7 0.5-0.9 0.2-0.8-1.8 0.1-0.7 1.1 0.1 0.9-0.6 0.9-1 0.4-1.1-0.5-0.4 0.6-1.3-0.1-1.8-1.6-1.7 0.3-0.6 0.8-0.9-0.1-1-0.6-1-1.2 0.1-0.7-1.7-0.7-1.3-0.2-0.5-1-1-0.7-1.7-0.4-2.2-0.5-0.2-0.9-1.3 0-0.9-0.2 0.3-1-0.9-0.3-0.4-0.8-1.1 0.1-0.9-0.8-2.6-0.1-0.5 1.4-1-0.2 0.4-0.8-1.7-1.9-0.2-1-1.4-0.8-1.5 0.1-0.6-0.1-0.2-0.5 0-1.6 1-1.3 0.1-1.6-1.1-0.5 0-0.6-0.7-0.6-0.3-1.1 0.2-0.5-0.5-0.6 0-0.6-0.8-0.9-0.2-1 0.1-1 1-1.2-0.1-0.9 1.3-0.8-1-1.1 0.3-1.1 0.9-0.6-0.5-0.5 0.1-1.4-1.1-1.2-0.9-0.8 0.2-1-0.2-1.1 1-0.8 0.2-0.8-0.1-1.4-1.2-1.1 0-0.6 0.5-2.4 0.6-1.5-0.4-1-1-0.8-1.2-2.9-0.2-2.5-0.4-0.8-0.1-2.5-0.2-1.5 0-2.1-0.4-0.2-0.2-1.3-0.9-1.9-0.6-1.7-0.9-0.3-0.2-1 0.5-0.4 0.5-1.8-0.1-1.4 0.4-0.9-0.1-1.4 0.4-0.5 0-1.1 0.6-0.7 2.6 0.2 0.6-0.7 2.2 0.3 0.7 0.8 0.4 0 0.4-0.9-0.1-0.8 1.3-1.9-1.1-0.7 1-2 0.3 0 1-2.2 1.4-1.1 1.7 0.1 0.7-0.9 2-0.2 0.9 0.1 0.3-0.6 0.9-0.4 0.2-0.8 1.6-0.6 0.8-0.8-0.1-0.8 1.2-0.9-0.4-2.3 1.4-0.9-0.2-0.9-1-0.6 0.9-2 1.2-0.3 0.2-0.4-0.4-0.3z" id="36" name="Jammu and Kashmir">
									</path>
									<path d="M203.7 83.7l-1.5-1.4-1 0.4-0.7-0.2-0.7-0.6-0.3-0.8-1.4 0.4-1.3-1.6-1.8 0.1-0.6-0.8-1.3-0.6-1.1 0-1 0.9-0.7 0.2-0.5-0.5 0.4-2.3-0.9-1.6 0-1.5 0.3-1 0.9-1.7 1-1 1.1-0.5-0.3-1.7 0-1.1-1.1-0.1-1.2-1.1-1.6 0.2-1.1-0.9-2 0.6-0.8 0-0.8-0.6-1.1 0.2-0.6-0.5-2.8 0.5-1.2-1.6-2.2-0.5-2.1-1.4-0.8-0.9-1.1-0.7-1.1-1-0.7-0.4 0.1-2-0.1-1 0.6-1.9-0.9-0.7-1.2-1.3-0.6 0-0.6 0.9-1.1 0.4-0.7-0.4-0.8 0.2-0.7 0.5-1.6 0-0.3-0.3-0.1-1.1-1.7 0.1-0.6-0.4-0.4 0.5-0.8 0.3 0 0.5-1.1 0.5-0.8-0.6-0.7 0.2-1 0.9-1-0.6-0.6-0.8-1.6-0.3-1.1-1.5-0.5 0-0.8-0.6 0-1.3 0.7-0.6 0.2-1.2 0.6 0 0.3-1 0.5-0.3-0.4-1-1.2-0.3-0.7-0.7 0.1-1.4 0.5-1.1 0.9-0.7-0.8-1.3 0.3-1.3 0.9-0.8 0.3-1.4 1.4-0.6 1 0.6 0.6 0 0.4-0.6 0.8-0.1 1.2-1.1 0.9-0.2 1.5-1.8 0.8-0.8 0.7 0 0.7-0.8 0.1-1.4-0.4-0.6 1.7-1.1 0.9-0.1 1.4 0.3-0.1-1.6 0.3-0.7 0.7-0.6 1.2-0.4 0.6-1.1 1.3-1.9-0.7-1.2 0.1-1.3-0.3-0.6 1.6-0.3 0.9-0.8 1.4-0.5 0.3 0.7 0.9 0.1 0.6-0.4 1.8 0 1.3-0.4 0.6 0.1 0.3-0.7 1.3 0 1-0.6 1.2 0.7 0.8 0.1 0.7 0.5 0.6-0.2 1.8 0.2 0.7 0.7 1.2 0.4 0.4-0.3 1.9 0.4 0.6-1 2 0.4 0.9-0.7 1.9 0.8 1.2-0.3 0.2-1.1-0.4-0.9-0.9-1.3-1.2-0.2-0.8-1-1.1-0.1-0.5-0.5-1.3-0.3-0.1-0.7-0.7-1-0.7-0.5 0.4-1.3 0.8 0.1 1.1 0.7 0.4-0.4 1 0.5 0.7-0.1 0.7 0.5 0.4-0.7 1.7 0.6 0.4 0.5 0.9-0.1 0.5 0.3 0.8 1.3 1 0.7 0.9-0.1 1 0.9 1.1-1.3 1 0.1 0.9-0.3 0.6-2.6 0.4-0.2 2 0.4 1.1 0.4 0.6-0.7 1.3-0.6 1.7-1.8 1.3-0.4 0.8-0.9 1.6-0.2 0.6 0.3 1.3 0 0.9 1.5 0.6 0 0.6-4 1.6-0.5 0.6 0 1.2-0.9 0.9 0.6 0.3 1.6 0.8 0.7 0.7-0.8 0.9 0.2 1.4 0 0.1 1.2 2.3 3.4 2.6-1.7 0.8-0.3 0.3-0.5 1.4 0.5 1 0.9 0.9-0.2 1.3-0.8 1.6-2.2 0.3-0.8 0.8-0.1 0.9-0.5 1.1 0.1 0.6-0.3 1.3 0.2 0 2.2 0.2 0.8 0.8 0.9 0.9-0.4 0.9 0.5 0 0.9-0.5 0.5 0.1 1.6 1 0 0.3 0.7 0.2 1.7 0.7 1.1 1.3 0.6 0.7 0.1 2.8 1.6 1.8 2.3 2.5 4.7 0.9 0.7 1.7 0.9 0.5 0 2.9 2 1.9 0.6 1.6 0 1.8 0.5 3.2 3.6 1.5 0.7 1.3 1.1 1.1 0 1.3-0.6 0.7 0 1.3 1 0.6 0.8 1 0.4 0.2 0.9 0.5 0.9-0.1 0.9 1.2 1.5 2.3 0.9 0.5 0.8 1.1 0.2 1.6-0.7 0.8 1.1 1.4 1.3 0.3 1.7 2.2 1.2 0.6 0.7 0.4 0.9-0.9 0.1-0.6 0.5-0.8 1.4-0.7 0.8 1.2 1.5 0.8 0.8 0.6 1.8 1.1 0.9 0.9 0.1 1.3 1.4 1.4 0.7 1.1 0 1.2 0.3 1.7-0.2 0.8-0.7 1.4-0.1 0.9 1.3 0.8 0.1 0.1 1.4 1.8 0.1 0.1 0.7 2 0.1 1 0.5 0.4-0.9 1.1 0.2 0.8 1 0.6 1.3 0.8 0 0.5 0.8 0 0.8-0.4 0.5 1 0.8 0.3 0.5-0.2 1 0.2 0.5 0.8 0.5-1.8 0.7-0.8-0.4-0.7-0.9-1.1-0.1-1.3 0.7 0.8 0.9 0.1 0.8 0.7 0 0.3 0.6 1.3 0.1 1.2 0.6 0.9-0.7 1.4-0.5 0.8 0.4 1-0.3 1.5 0.8 1.2-0.9 0.6 0.8 0.6-0.3 1.3 0.1 0.2-2 1.5 1.2 0.6 0 0.8-0.8 0.5 0.1 1.3 1.3 0.5-0.3 0.9 0.8 0.4-0.9 1.8 0.6-0.2-1-1.1-0.7 1.2-2.3 0.1-1.3 0.7 0.9 1.9-0.3 1.1 1.6 0.5-0.3 0.8 0.3 0.5 0.5 0.9-0.7-0.2-0.7 0.5-1.8 0.7-0.4 0.4-1 0-0.9 1.5 0.9 0.5-0.1 0.5-0.8-0.1-2 0.4-0.4 0.8 0.2 1.2 0 1.4-0.5 0.6-0.5 0.7-1.5 0.8-0.1 0.6 0.3 1.9 0.2 0.7-0.2 1.5-1.2 1.6-0.7 1.2-1.5 1.1 0 0.9-0.5 2 0 0.3 0.4 1.6 0.1 3.8-1 0.4-0.5 2.2 1.9 1.4 0 1.9 0.5 0.9-0.3 1.7-1.9-0.2-2.5 0.8-1.3 0.7-0.4 2-0.1 2.5 0 0.8 0.5 0.6 2.7 0.6 0.7 1.1 0.3 1.8 0.1 1.9 1.2 0.9 0.1 1.9 0.8 0.4 0 1.6 0.7 0.7 0.7 1 0.2 1.5 0 1.5 0.5 1.2 0.2 1-1.3 1-0.7 1.3-0.5 1.3 0.4 1.2 1.9 0.6 1.8 0.9 0.8 0.2 1 0.6 1 3.8 1.3 1.6 1 0.7 0.6 0.7 2.3 0.3 2.3 0.3 1.3-1.1 0.3-0.5 0.8 0.1 2-0.6 2.5-1.1 2.4-0.2 2-0.3 0.8-1.3 1.8-0.2 0.9 0.3 3.5-0.5 3-0.7 1.8-1.5 3.3-0.8 0.7-0.5 1.7 0.1 3.8-0.3 0.3-1.4 0.5-0.9 0.2-1.8 0.6-0.9-0.4-2 0-1.2 1.2-0.2 0.7-0.5 0-1.1 0.9 0.5 0.6 0.1 0.9-0.6 0.1-0.4 0.8 1.9 1.7 0 0.9-0.6 0.6-1 0.3-3 0-1-0.4-1.5-0.1-0.9 0.1-1.5 0.5-1 0.1 0.7 1.2 0 1.1 1.1 0.4-0.2 0.9 0.3 1.2-0.1 1.1 1.1 2.1-0.2 1.6-0.3 0.6-1.1 0.9-0.9-0.3-0.4 0.3-0.6 1.9 0.2 1-1.2 1.5-0.9 0.2-0.5 0.6-0.2 1 0.8 0.9-0.1 0.5-0.8 0.3-0.4-0.5-0.8-0.3-2.4-0.4-1.2 0.2-0.8-0.5-1.7 0-0.7-0.9-1 0.4 0 0.7-0.5 0.9-1.3 0.2-1.7-0.6-0.8-0.7-2.9 1.2-1.1 2.1 0.6 0.7 1 2.1 0 0.6 1.8 3.7 0.5 0.9 0.8 0.4 0.6-0.1 0.3 0.6-0.9 0.2 0 0.5-0.8 1.3 0.6 0.8 0.9 0.4 0.7-0.5 0.3 0.5-0.1 0.8 0.6 1.8-1.4-0.6-1.6 0.1-0.7 0.5-0.7 0-1.9-0.8-0.2 0.5 0 1.7 0.4 0.7 0.5 2.2-0.4 1.2 0 1.9 0.7 1.2 0 0.9 0.7 0.5 0.7 1.6 1.1 0 1.2 0.8 1.7 0.8 3.4 0 1.4-0.3 0.8 0.5 1.3 0.5 0.7 0 1.5-0.3 2.7 1-0.1 1.3-0.4 1.4-0.8 1.2-1 1.9-0.4 1.2 0.6 1.2 0 0.8-1 0.6-0.5 0.6 0.6 0.6 0.6 0.2 0 0.8 1.2 0.1 1.5 1.8 0.6 1.2 1.2 1.5 1.8 2.7 1.1 0.4 0.5 0.6 0.4 1.1-1.8 2.4-0.3 0.2-1.7 2.6-1.7 1.4 0 0.4-0.7 1.3-1.1 0.2-0.5-0.3-0.1-1.5-1.8-0.8-0.8-0.1-0.5 1.2-1 1.2-0.9 0-0.3 1-1.6 1.1-1.6 0-0.6 0.5 0.6 1.4-0.2 0.7-0.6 0.1-0.1 0.9-0.8 0.2-1.3-0.1-1.6 0.5-0.8 1.6-0.4-0.1-0.6-1-1.9-1-1.7-2.1-0.9 0.1-0.2-1-0.5-0.7-0.5-2-0.5-1.1 0-0.6 0.6-0.6-0.1-1.2-1-1.5 0.2-1.3-1.8 1.2-1.6 0-0.5 0.6-0.5 1.4-0.5 0.4-1.2-0.7-0.6-0.1-1.3 0.4-1.2 1.1-0.9-0.2-1 0.6-0.5 0.9-0.1 0.7-0.7 0-0.2 0.2-0.2 0.2-0.7 0.5-1.6 1.5-0.1-0.1-0.2-0.3-0.8-0.8 0.8-1-0.1-1.9 0.7-0.1 2.4-1.8-0.6-0.5-0.2-1.5 0.1-1.1 0.4-0.8-0.3-0.6 0.1-1.1-0.3-0.1-0.4 0-0.3 0-1.9 1.1 0.3 0.7-0.4 0.5-1.7 0.5-0.4 0.8-0.8 0.5-0.6 0-0.1-0.3-0.3-0.2-0.5-0.2-0.1 0-0.1 0-0.5 0.4-0.3 0.9-0.4 0.2-0.3-0.2 0-0.1-0.3-0.4-0.3 0-0.1 0.1-0.3 0.3-0.2 0.2-0.2 0.9-1.2-0.2 0.3 1.1-0.4 0.5-1.6 0-0.2-0.1 0-0.2-0.5-0.8-0.3-1-0.5-0.3-0.6-1.3-0.6-0.6 0.5-2.3 0-0.5-0.6-0.5-0.3 0-0.1 0-0.2 0-0.1-0.1-0.1 0-0.3-0.5-0.1-0.9-1.4-1.1-0.2 0-0.1 0.1-0.2 0-0.2-0.2-0.1-0.1-0.4-0.3-0.9-0.5 0.1-0.7 0.7-0.4 0.2-0.6-1.1-0.9-1.6-1.8-0.6-0.3-0.5 0-0.5-0.3 0 0.3-0.1 0.2-0.1 0.2-0.3 0.5-0.9 0.5-1.1 0.1-0.8 0.9-0.7 0.2-1 1.1-0.9 0.3-0.3-0.3-1 1-0.2 0-0.3-0.1-0.2 0-0.3-0.7-0.3 0.2-0.1 0-0.2 0-0.2-0.1 0-0.1-0.1 0-0.1-0.2-0.1 0-0.2 0.2-0.3 0.1-0.7 0.9-0.1 1.3-0.7 0.4-0.3-0.1-0.1-0.1-0.1-0.1-0.5-1.2-1.1-0.2-0.5-0.8-0.2 0.4-0.2 0.1-0.3 0-0.1-0.2 0-0.1-0.3-0.2 0-0.1 0.1-0.3-0.8-0.7-0.8-0.4-0.2-0.7-0.8 0.5-0.2-1.5-0.3-1-1.2-0.2-0.1 0.1-0.1 0.2-0.7 0.2-0.1-0.1 0-0.1-0.2-0.3-0.3 0-0.8-0.5-0.3 0.1-0.2 0.1-0.7 0.2-0.3-0.2-0.1 0 0-0.1-0.2-0.2-0.5-0.3-0.2-0.2-1.6-1-0.8-1.8-0.2-0.7-0.6-0.9-0.3 0.2-0.2 0.2-0.3-0.1-0.2-0.1-0.2-0.2-1-1.4-0.2-0.8 0.2-0.8 0.5-0.4-0.2-0.8 0.6-0.8-0.3-0.3-0.1 0-0.1 0.1-0.2 0.1 0 0.1-0.1 0.1 0 0.1-0.1 0-0.2-0.1-0.2-0.2-0.2-0.3-0.3-0.1-0.5 0-0.2 0.2-0.4 0-0.3 0-0.2-0.1-0.1-0.2-0.3-0.2 0-0.1 0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.2 0-0.2-0.2-0.1 0-0.2 0.1-0.1 0.1-0.3 0-0.1 0-0.1-0.1-0.1 0-0.1-0.1-0.1 0-0.2-0.3-0.6-0.2 0-0.1 0-0.3 0.1-0.1-0.1-0.2 0-0.2-0.2-0.2-0.1-0.2-0.1 0-0.1 0-0.1 0-0.1 0-0.1-0.2-0.1-0.2-0.1-0.1-0.2 0-0.2 0-0.1-0.1-0.1-0.1-0.1 0-0.3-0.1-0.2-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.4-0.1-0.2 0-0.1 0.1-0.2 0-0.1-0.1-0.1-0.1-0.1-0.1-0.3 0-0.1 0-0.1 0-0.1-0.1-0.1-0.3-0.1-0.1 0-0.1 0.1-0.1 0.1-0.1 0.1-0.1 0-0.2 0.1-0.1 0.2-0.4 0-0.1-0.1 0-0.1 0-0.3 0-0.2-0.1-0.3 0-0.2-0.2-0.4-0.1 0-0.3 0-0.3 0-0.3-0.2-0.3-0.5-0.1-0.1-0.1-0.1-0.1-0.3-0.2-0.1-0.2 0-0.1-0.1 0-0.2-0.1-0.3 0-0.1-0.1-0.1-0.2 0-0.2 0-0.4-0.5-0.2 0-0.4-0.1-0.1-0.2 0-0.2 0.1-0.1 0.1-0.2-0.1-0.2-0.2-0.2-0.2-0.3-0.1 0-0.1 0.1-0.1 0.2 0 0.4-0.2 0.2-0.3 0.2-0.4-0.1-0.3-0.1-0.2-0.1-0.3-0.2-0.2-0.1-0.2 0-0.1-0.3-0.1-0.3 0.1-0.2 0.1-0.1 0-0.1-0.1-0.1-0.1-0.1-0.3-0.3-0.2-0.3 0-0.2 0-0.1-0.2-0.1-0.2 0-0.2-0.1-0.1 0-0.1-0.1-0.1 0.1-0.1 0.1-0.2 0.1-0.1 0-0.1-0.1-0.1-0.1-0.1-0.1-0.2 0.1-0.1 0.2-0.1 0.2 0.2 1.2-1.6 0.2-0.8 0.6-0.4 0-0.6-1 0.6-0.1 0.2-0.5-0.2-0.5 0.1-0.1 0.4 0 0.1-0.2-0.2-0.4-0.3-0.4 0.1-0.1 1.5-0.6 0-0.3 0.3-0.4-0.5-0.6-0.1-0.1 0.1-0.2-0.1-0.4-0.1-0.5 0.2-0.6 0-0.5-0.3-0.9-0.3-0.3-0.4-0.4-0.6-0.1-0.9-0.1-0.9-0.8-0.6-0.9 0-0.8-0.3-0.3-0.6-0.5-1.4-1.3-0.2-0.4-1.1-1.3-0.2-0.6-0.2-0.4 0.1-0.4-0.3-1.1-0.2-0.3-0.4-0.1-0.4 0-0.7 0-0.1 0.1 0.1 0.3 0 0.4-0.2 0-1.1-0.2-0.9 0-0.5 0.2-0.8 0.1-0.4 0-0.3 0.3-0.1-0.4 0-0.3 0.2-0.4 0.2-0.6-0.2-0.4-0.5 0-0.3-0.2-0.5-0.8-0.3 0.1-0.2 0.1-0.6-0.2-0.7-0.5-0.3-0.6-0.4-0.8-0.1-0.3-0.4-0.4-0.7-0.2-0.4-1.1-0.3-0.5-0.1-0.6 0.2-0.4 0.1-0.5 0-1.4-0.1-0.2-0.2-0.1-0.4 0.1-0.5-0.2-0.3-0.4-2 1.9-0.5-0.7-0.4 0.2-0.7-0.2-0.2-0.4-0.4-0.1-0.2-0.1-0.4 0-0.3-0.3-0.3 0.1-0.1-0.4-0.2-0.4-0.1-0.5-0.1-0.3-0.3-0.4-0.4-0.1-0.2-0.2-0.3 0.3-0.6-0.1-0.9 0-0.2-0.3-0.2-0.5 0-0.3 0.2-0.4 0-0.1-0.3-0.3-0.1-0.4-0.2-0.4 0.2-0.2-0.1-0.3 0.1-0.3-0.4-0.3 0.2-0.2-0.2-0.3 2-3.7-2.2-2.6-0.2-0.1-0.3-0.5-0.2-0.3-0.2-0.1-0.3-0.1-0.1-0.1-0.3 0.2-0.2-0.3-0.1-0.2-0.1-0.1-0.1 0-0.2-0.3-0.1-0.1-0.1 0-0.1-0.1-0.2-0.2-0.2 0-0.3-0.1-0.1 0-0.1-0.2-0.1 0.1-0.2 0.1-0.2-0.1-0.1-0.1 0.2-0.4 0-0.2 0.1-0.1 0.1 0.1 0.1 0 0.2-0.1 0-0.1 0-0.1 0.1-0.1 0-0.2-0.1-0.1 0-0.1-0.1-0.1-0.1 0-0.1 0-0.1 0.1-0.7-0.2-0.3 0-0.3-0.1-0.1 0-0.1-0.1-0.1 0 0 0.3-0.1-0.2 0.7-0.7 0-0.2 0.1-0.2 0-0.1 0.3-0.2 0.1-0.2 0.5-0.2 0-0.1-0.1-0.2 0-0.2-0.1-0.1 0.3-0.3-0.1-0.2 0.1-0.2 0.1-0.1 0-0.1 0-0.2-0.2-0.5-0.2-0.4 0-0.4 0-0.3-0.1-0.2-0.1-0.4 0.1-0.1 0-0.2-0.1-0.1-0.2-0.3-0.1-0.2-0.1 0-0.1-0.1-0.2-0.1 0-0.2-0.4-0.1-0.2-0.2-0.3 0 0-0.1-0.4-0.3-0.3-0.2 0-0.1-0.4 0.1-0.3-0.1-0.2 0.1-0.2-0.1 0-0.4 0.1-0.1-0.2-0.4 0.1-0.3-0.2-0.2-0.2-0.1-0.4-0.2-0.1 0 0-0.2-0.1-0.2-0.3-0.1-0.1-0.5-0.5-0.1-0.3 0.2-0.4 0.1 0.2 0.3 0.2 0 0.1 0.1-0.1 0.1 0 0.2-0.1 0.1-0.1 0.1-0.1 0.1 0 0.2-0.1 0 0 0.2 0.1 0.2-0.1 0.2 0.1 0.4-0.1 0.1 0.1 0.3 0 0.2-0.2 0.1-0.3 0.1 0.1-0.3-0.2-0.2-0.5-0.4-0.6-0.4-0.5-0.3-0.7-0.3-0.9-0.3-0.5 0-0.2 0-0.9-0.4-1-0.4-0.4-0.7-0.5-0.6-0.6-0.3-0.6 0-0.4-0.2-0.6 1.1-0.2-1 0.2-0.6-0.1-0.4 0.1-1.7 0.4-1 0.4-0.9-1.4-0.6-1.4-1.2-1.1-0.3-1.8-1.8-0.4-0.6-0.5 0.4-0.2 0.2-0.5 0.1-0.8 0.5-1.5 0.6-1.6 1.4-1-0.1-0.4-0.1-0.5-0.9-0.4-0.5-0.8 0-1.5-0.7-2-0.3-0.9 0.1-1.5-0.2-0.8 0.1-2.5 0.7-0.2 0.1z" id="38" name="Ladakh">
									</path>
								</g>
								<g id="points">
									<g id="points_2_">
										<rect id="_x30__2_" x="70.9" y="1100.7" class="st1" width="0" height="0" />
										<rect id="_x31__1_" x="569.9" y="672.3" class="st1" width="0" height="0" />
										<rect id="_x32__1_" x="969.1" y="83.3" class="st1" width="0" height="0" />
									</g>
									<ellipse class="cls-1" cx="307.53" cy="344.65" rx="5.52" ry="5.26" /><text class="cls-3" transform="translate(316.89 348.64) scale(1.05 1)">
										<tspan x="0" y="0">New Delhi</tspan>
									</text>
									<ellipse class="cls-1" cx="178.77" cy="403.16" rx="5.52" ry="5.26" /><text class="cls-3" transform="translate(188.74 403.16) scale(1.05 1)">
										<tspan x="0" y="0">Jaipur</tspan>
									</text>
									<ellipse class="cls-1" cx="21.06" cy="553.73" rx="5.52" ry="5.26" /><text class="cls-3" transform="translate(21.06 543.93) scale(1.05 1)">
										<tspan x="0" y="0">Kandla</tspan>
									</text>
									<ellipse class="cls-1" cx="128.01" cy="545.73" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="66.17" cy="573.35" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="104.63" cy="583.16" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="149.77" cy="580.42" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="170.53" cy="629.51" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="170.53" cy="653.93" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="225.74" cy="643.74" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="163.64" cy="691.3" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="170.53" cy="712.67" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="201.75" cy="710.92" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="265.04" cy="675.66" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="287.97" cy="734.52" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="216.61" cy="768.51" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="220" cy="790.5" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="197.92" cy="836.17" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="236.6" cy="575.16" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="126.71" cy="617.73" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="86.49" cy="642.48" rx="5.52" ry="5.26" /><text class="cls-3" transform="translate(104.63 535.5) scale(1.05 1)">
										<tspan x="0" y="0">Ahmedabad</tspan>
									</text><text class="cls-3" transform="translate(28.63 595.8) scale(1.05 1)">
										<tspan x="0" y="0">Mundra</tspan>
									</text><text class="cls-3" transform="translate(86.49 601.3) scale(1.05 1)">
										<tspan x="0" y="0">Rajkot</tspan>
									</text><text class="cls-3" transform="translate(15.54 622.98) scale(1.05 1)">
										<tspan x="0" y="0">Gandhinagar</tspan>
									</text><text class="cls-3" transform="translate(33.26 657.93) scale(1.05 1)">
										<tspan x="0" y="0">Pipava</tspan>
									</text><text class="cls-3" transform="translate(114.7 658.58) scale(1.05 1)">
										<tspan x="0" y="0">Surat</tspan>
									</text><text class="cls-3" transform="translate(234.69 647.14) scale(1.05 1)">
										<tspan x="0" y="0">Nasik</tspan>
									</text><text class="cls-3" transform="translate(211.08 715.46) scale(1.05 1)">
										<tspan x="0" y="0">Pune</tspan>
									</text><text class="cls-3" transform="translate(273.59 686.04) scale(1.05 1)">
										<tspan x="0" y="0">Aurangabad</tspan>
									</text><text class="cls-3" transform="translate(262.37 722.84) scale(1.05 1)">
										<tspan x="0" y="0">Solapur</tspan>
									</text><text class="cls-3" transform="translate(196.23 760.26) scale(1.05 1)">
										<tspan x="0" y="0">Kolhapur</tspan>
									</text><text class="cls-3" transform="translate(234.65 798) scale(1.05 1)">
										<tspan x="0" y="0">Belgaum</tspan>
									</text>
									<ellipse class="cls-1" cx="359.94" cy="828.83" rx="5.52" ry="5.26" /><text class="cls-3" transform="translate(346.01 816.2) scale(1.05 1)">
										<tspan x="0" y="0">Hyderabad</tspan>
									</text><text class="cls-3" transform="translate(155.65 846.06) scale(1.05 1)">
										<tspan x="0" y="0">Goa</tspan>
									</text>
									<ellipse class="cls-1" cx="339.62" cy="950.55" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="407.11" cy="932.11" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="312.77" cy="1007.65" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="375.53" cy="1046.32" rx="5.52" ry="5.26" />
									<ellipse class="cls-1" cx="270.21" cy="994.59" rx="5.52" ry="5.26" /><text class="cls-3" transform="translate(347.77 954.14) scale(1.05 1)">
										<tspan x="0" y="0">Karur</tspan>
									</text><text class="cls-3" transform="translate(416.01 936.44) scale(1.05 1)">
										<tspan x="0" y="0">Chennai</tspan>
									</text><text class="cls-3" transform="translate(299.64 1000.18) scale(1.05 1)">
										<tspan x="0" y="0">Coimbatore</tspan>
									</text><text class="cls-3" transform="translate(206.67 1003.81) scale(1.05 1)">
										<tspan x="0" y="0">Cochin</tspan>
									</text><text class="cls-3" transform="translate(397.59 1055.94) scale(1.05 1)">
										<tspan x="0" y="0">Tuticorin</tspan>
									</text>
									<ellipse class="cls-1" cx="678.64" cy="548.35" rx="5.52" ry="5.26" /><text class="cls-3" transform="translate(691.88 542.97) scale(1.05 1)">
										<tspan x="0" y="0">Kolkatta</tspan>
									</text><text class="cls-3" transform="translate(93.7 696.56) scale(1.05 1)">
										<tspan x="0" y="0">Mumbai</tspan>
									</text><text class="cls-3" transform="translate(49.18 730.32) scale(1.05 1)">
										<tspan x="0" y="0">Nhavaseva (JNPT)</tspan>
									</text><text class="cls-3" transform="translate(158.91 582.76) scale(1.05 1)">
										<tspan x="0" y="0">Vadodra</tspan>
									</text><text class="cls-3" transform="translate(244.32 582.62) scale(1.05 1)">
										<tspan x="0" y="0">Indore</tspan>
									</text><text class="cls-3" transform="translate(117.15 642.46) scale(1.05 1)">
										<tspan x="0" y="0">Hazira</tspan>
									</text>
								</g>
							</svg>
						</div>
					</div>
					<div class="col-md-6">
						<div class="text-content">
							<div class="row justify-content-end">
								<div class="col-xl-10 col-lg-11">
									<div class="title">
										<!-- <p class="section-pill mb-3">Our Network</p> -->
										<h2 class="section-title">Our Domestic Network</h2>
									</div>
								</div>
							</div>

							<aside class="bg-subtle-primary py-4 pe-3 mb-3">
								<div class="row g-0 justify-content-end">
									<div class="col-xl-10 col-lg-11">
										<p>Single window contact for your...</p>
										<h3>Shipments Anywhere in India</h3>
									</div>
								</div>
							</aside>
							<div class="row justify-content-end">
								<div class="col-xl-10 col-lg-11">
									<div class="content">
										<div class="row m-0">
											<div class="col-lg-6 col-12">
												<ul class="widget-list">
													<li data-name="Maharashtra">Aurangabad, Maharashtra</li>
													<li data-name="Maharashtra">Mumbai, Maharashtra</li>
													<li data-name="Maharashtra">Nashik, Maharashtra</li>
													<li data-name="Maharashtra">Kolhapur,Maharashtra</li>
													<li data-name="Maharashtra">Solapur, Maharashtra</li>
													<li data-name="Rajasthan">Jaipur, Rajasthan</li>
													<li data-name="Rajasthan">Indore, Rajasthan</li>
													<li data-name="Maharashtra">Pune, Maharashtra</li>
													<li data-name="Goa">Goa, Goa</li>
													<li data-name="West Bengal">Kolkata, West Bengal</li>
													<li data-name="New Delhi">New Delhi</li>
												</ul>
											</div>
											<div class="col-lg-6 col-12">
												<ul class="widget-list">
													<li data-name="Kerala">Cochin, Kerala</li>
													<li data-name="Gujarat">Ahmedabad, Gujarat</li>
													<li data-name="Gujarat">Rajkot, Gujarat</li>
													<li data-name="Gujarat">Gandhinagar, Gujarat</li>
													<li data-name="Gujarat">Kandla, Gujarat</li>
													<li data-name="Tamil Nadu">Coimbatore, Tamil Nadu</li>
													<li data-name="Tamil Nadu">Karur, Tamil Nadu</li>
													<li data-name="Tamil Nadu">Chennai, Tamil Nadu</li>
													<li data-name="Tamil Nadu">Tuticorin, Tamil Nadu</li>
													<li data-name="Telangana">Hyderabad, Telangana</li>
													<li data-name="Karnataka">Belgaon, Karnataka</li>
												</ul>
											</div>
											<script>
												$(".widget-list li").each((index, elem) => {
													$(elem).hover(function() {
														$("svg path[name='" + $(elem).attr("data-name") + "']").toggle("hover")
														// console.log();
													});
												})
											</script>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="team">
				<div class="container-fluid p-0">
					<div class="row m-0 justify-content-end">
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="title mx-3">
								<!-- <p class="section-pill mb-3">Team Members</p> -->
								<h2 class="section-title">Our Proficient Team</h2>
							</div>
						</div>
					</div>
					<div class="row m-0">
						<div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6 col-12">
							<div class="row g-0 justify-content-center">
								<div class="col-lg-9 col-md-10 col-sm-10 col-12">
									<div class="widget-testimonial-card relative-top card mb-3">
										<div class="card-header mb-3">
											<div class="row align-items-end g-2">
												<div class="col-md-auto col-12">
													<h3>Vinay Krishnan</h3>
												</div>
												<div class="col-md-auto col-12">
													<p></p>
												</div>
											</div>
										</div>
										<div class="image">
											<img src="<?= base_url() ?>assets/media/images/team/vinay_profile_400x400.jpg" alt="Vinay 400x400">
										</div>
										<div class="card-body">
											<div class="text-content">
												<p>
													<strong>Vinay Krishnan, Managing Partner</strong> of <?= APP_NAME ?>, is a seasoned professional in the logistics sector. His journey in logistics began after completing his management studies at the renowned NMIMS Mumbai, and he has since amassed over three decades of practical experience in this dynamic industry. His career is characterized by an unwavering passion for logistics, unwavering dedication and an unwavering commitment to delivering genuine value to clients.
												</p>
												<p>
													Vinay firmly believes that quality is not an automatic outcome but rather the product of a highly dedicated team working diligently behind the scenes. He upholds a core principle of personal ownership and accountability, stating, '<i>I firmly believe in taking complete responsibility for every aspect I am involved in. If your name is associated with it, ensure it counts.</i>' This unwavering commitment to excellence has been instilled throughout his team. Vinay Krishnan has successfully imparted his passion for excellence to his team, emphasizing the importance of alignment between personal dedication and the team's shared objectives. As he aptly puts it,
													<br> '<i>When your team aligns with your passion, delivering value to your customers becomes a certainty.</i>'
												</p>
												<p>
													The company's tagline, 'Logistics Delivered Better', epitomizes its confidence in its capabilities, driven by the unwavering personal commitment to excellence exhibited by the entire team."
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-9 col-md-10 col-sm-10 col-12">
									<div class="widget-testimonial-card card mb-3">
										<div class="card-header mb-3">
											<div class="row align-items-end g-2">
												<div class="col-md-auto col-12">
													<h3>Anita</h3>
												</div>
												<div class="col-md-auto col-12">
													<p></p>
												</div>
											</div>
										</div>
										<div class="image">
											<img src="<?= base_url() ?>assets/media/images/team/anita_profile_400x400.jpg" alt="Anita 400x400">
										</div>
										<div class="card-body">
											<div class="text-content">
												<p>
													In the dynamic realm of logistics, characterized by tight margins and an imperative for meticulous precision, Anita emerges as a paragon of logical thinking and professionalism. With a career spanning over two decades in this field, Anita has cultivated a reputation as an unflappable and methodical expert. Armed with a Science degree, she commenced her professional journey as an intern in the Courier Industry, later ascending to the helm of logistics management within a prominent Textile manufacturing company.
												</p>
												<p>
													Anita's approach is defined by a commitment to logical problem-solving and methodical planning. Whether the challenge involves optimizing production schedules, streamlining workflows, or ensuring timely deliveries, Anita's meticulous planning and execution leave no room for error. Her dedication to precision and professionalism consistently yields superior results in the intricate landscape of logistics."
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6 col-12">
							<div class="teams-desc mb-3 bg-primary-translucent">
								<h5>Beyond the Professional Realm:</h5>
								<p>
									Both Vinay and Anita are dedicated advocates for causes close to their hearts—supporting education for underprivileged communities and championing the prevention of cruelty to animals. They generously volunteer their time and resources at local animal shelters and rescue organizations, providing a nurturing environment for animals in need. Additionally, they actively contribute to educational programs designed to uplift underprivileged individuals and support the vital work carried out by animal shelters, showcasing their deep commitment to creating a better world for all
								</p>
							</div>
							<div class="swiper widget-teams-slider">
								<!-- Additional required wrapper -->
								<div class="swiper-wrapper">
									<!-- Slides -->
									<div class="swiper-slide bg-white">
										<div class="slide-content">
											<div class="media-content">
												<img src="<?= base_url() ?>assets/media/team/1000031576-01.jpeg" class="w-100" alt="...">
											</div>
										</div>
									</div>
									<div class="swiper-slide bg-white">
										<div class="slide-content">
											<div class="media-content">
												<img src="<?= base_url() ?>assets/media/team/1000031577-01.jpeg" class="w-100" alt="...">
											</div>
										</div>
									</div>
									<div class="swiper-slide bg-white">
										<div class="slide-content">
											<div class="media-content">
												<img src="<?= base_url() ?>assets/media/team/1000031578-01.jpeg" class="w-100" alt="...">
											</div>
										</div>
									</div>
									<div class="swiper-slide bg-white">
										<div class="slide-content">
											<div class="media-content">
												<img src="<?= base_url() ?>assets/media/team/Team pro.jpg" class="w-100" alt="...">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="testimonials">
				<div class="container">
					<div class="title text-center mb-3">
						<!-- <p class="section-pill m-auto mb-3">Happy Clients</p> -->
						<h2 class="section-title">Trusted by our 365,000 Clients</h2>
						<p>
							Dramatically enhance interactive metrics for reliable services. Proactively unleash fully researched e-commerce.
						</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-3 col-md-6 col-12">
							<img src="<?= base_url() ?>assets/media/images/testimonial/aeo.jpg" alt="FFFAI" class="w-100">
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<img src="<?= base_url() ?>assets/media/images/testimonial/fffai.jpg" alt="FFFAI" class="w-100">
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<img src="<?= base_url() ?>assets/media/images/testimonial/bchaa.jpg" alt="BCHAA" class="w-100">
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<img src="<?= base_url() ?>assets/media/images/testimonial/fiata.jpg" alt="FIATA" class="w-100">
						</div>
					</div>
				</div>
			</section>
		</article>
		<!-- <section class="text d-none py-3 py-md-5">
			<div class="container-fluid">
				<div class="row gap-3 m-0 align-items-center justify-content-between px-3">
					<div class="col-lg-auto col-12">
						<div class="quote quote-xl">
							<blockquote class="text-black text-full-5 text-uppercase">
								<strong>
									<div data-aos="fade-right">Logistics</div>
									<div data-aos="fade-right" data-aos-delay="100" class="text-red">Done</div>
									<div data-aos="fade-left">Better</div>
								</strong>
							</blockquote>
						</div>
					</div>
					<div class="col-lg-auto col-12">
						<blockquote class="text-black text-full-12 text-uppercase">
							<strong>
								<div data-aos="fade-right">=</div>
							</strong>
						</blockquote>
					</div>
					<div class="col-lg-auto col-12">
						<div class="quote quote-xl">
							<blockquote class="text-black text-full-5 text-uppercase">
								<strong>
									<div data-aos="fade-right">Logistics</div>
									<div data-aos="fade-right" data-aos-delay="100" class="text-red">Delivered</div>
									<div data-aos="fade-left">Better</div>
								</strong>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<section class="text_tilted">
			<div class="">
				<div class="row m-0 flex-row-reverse">
					<div class="col-xl-8 col-lg-7 col-md-6 col-12 p-0">
						<div class="media-content">
							<div class="wrap">
								<picture>
									<source media="(min-width: 768px)" srcset="<?= base_url() ?>assets/media/images/containers-stack.jpg">
									<source srcset="<?= base_url() ?>assets/media/images/containers-stack.jpg">
									<img class="w-100" src="<?= base_url() ?>assets/media/images/containers-stack.jpg" alt="Cartoon Stack">
								</picture>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-6 col-12">
						<div class="text-content py-5 py-md-0">
							<div class="quote quote-xl">
								<blockquote class="text-uppercase">
									<strong>
										<div class="row m-0 g-0 align-items-center justify-content-between px-3">
											<div class="col-auto col-md-12">
												<div class="text_special">
													<div data-aos="fade-right">Logistics</div>
													<div class="text-highlighted" data-aos="fade-right" data-aos-delay="100">Done</div>
													<div data-aos="fade-left">Better</div>
												</div>
											</div>
											<div class="col-auto col-md-12">
												<div data-aos="fade-left" class="equal">=</div>

											</div>
											<div class="col-auto col-md-12">
												<div class="text_special">
													<div data-aos="fade-right">Logistics</div>
													<div class="text-highlighted" data-aos="fade-right" data-aos-delay="100">Delivered</div>
													<div data-aos="fade-left">Better</div>
												</div>

											</div>
										</div>
									</strong>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact-us">
			<div class="videowrapper">
				<video id="myVideomob" class="res-video" muted loop autoplay poster="<?= base_url('assets/media/images/') ?>posters/video-poster-img.jpg">
					<source src="<?= base_url('assets/media/images/') ?>video/My-Video2.mp4" type="video/mp4">
					<source src="<?= base_url('assets/media/images/') ?>video/My-Video2.mp4" type="video/webm">
				</video>
				<div class="vidbuttons">
					<button type="button" class="play playpausebtn" style="display: none;"></button>
					<button type="button" class="pause playpausebtn" style="display: block;"></button>
				</div>
			</div>
			<div class="text-content">
				<div class="contact-section">
					<div class="">
						<div class="row m-0">
							<div class="col-lg-6 col-12 p-0">
								<div class="media-content">
									<div class="wrap">
										<picture>
											<source media="(min-width: 768px)" srcset="<?= base_url() ?>assets/media/images/happy-customer.jpg">
											<source srcset="<?= base_url() ?>assets/media/images/happy-customer.jpg">
											<img class="w-100" src="<?= base_url() ?>assets/media/images/happy-customer.jpg" alt="Happy Customer">
										</picture>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="contact-footer">
									<div class="container">
										<div class="row m-0">
											<div class="col-12">
												<div class="quote text-full-3">
													<blockquote class="text-black">
														<strong>
															<div data-aos="fade-left" data-aos-delay="300" class="text-light">
																Experience How Logistics is Done & Delivered Better...
															</div>
														</strong>
													</blockquote>
												</div>
												<hr>
												<div class="title mb-3">
													<!-- <p class="section-pill mb-3">Contact Us</p> -->
													<h2 class="section-title">Get in touch with Us</h2>
												</div>
											</div>
											<div class="col-lg-12 col-md-6 col-12">
												<div class="cf-item">
													<div class="content">
														<div class="row m-0">
															<div class="col-lg-auto col-12">
																<div class="icon">
																	<img src="<?= base_url('assets/media/images/icon/map-marker.png') ?>" alt="">
																</div>
															</div>
															<div class="col-md col-12">
																<div class="title">
																	<h3>office Address</h3>
																</div>
																<div class="desc">
																	<p>
																		CONCORDE, Office Nr 901-903, 9th Floor, Plot Nr 66A , <br>
																		Sector 11, CBD Belapur , Navi Mumbai 400614.
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-6 col-12">
												<div class="cf-item">
													<div class="content">
														<div class="row m-0">
															<div class="col-md-auto col-12">
																<div class="icon">
																	<img src="<?= base_url('assets/media/images/icon/phone.png') ?>" alt="">
																</div>
															</div>
															<div class="col-md col-12">
																<div class="title">
																	<h3>Contact us</h3>
																</div>
																<div class="desc">
																	<p>
																		<a href="mailto:info@proficient.bz">info@proficient.bz</a>
																		<br>
																		<a href="tel:+912227560939">+91 22 27560939</a>
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<?php $this->load->view('components/_common_footer') ?>
	</footer>
	<?php $this->load->view('components/_common_js') ?>
	<script>
		const swiper = [
			new Swiper('.banner', {
				loop: true,
				navigation: {
					nextEl: '.banner .swiper-button-next',
					prevEl: '.banner .swiper-button-prev',
				},
				autoplay: {
					delay: 5000,
					disableOnInteraction: false
				},
			}),
			new Swiper('.services', {
				loop: true,
				autoplay: {
					delay: 1000,
					disableOnInteraction: false
				},
				slidesPerView: 1,
				spaceBetween: 10,
				grid: {
					rows: 1,
				},
				navigation: {
					nextEl: '.services .swiper-button-next',
					prevEl: '.services .swiper-button-prev',
				},

				breakpoints: {
					824: {
						slidesPerView: 2,
						grid: {
							rows: 3,
						},
						spaceBetween: 20,
					},
				}
			}),
			new Swiper('.widget-teams-slider', {
				loop: true,
				effect: 'fade',
				autoplay: {
					delay: 3000,
					disableOnInteraction: false
				}
			}),
			new Swiper('.services-slider', {
				loop: true,
				centeredSlides: true,
				speed: 2000,
				autoplay: {
					delay: 0,
					pauseOnMouseEnter: true,
					disableOnInteraction: false
				},
				slidesPerView: 1,
				spaceBetween: 10,
				// navigation: {
				//     nextEl: '.testimonial-slider .swiper-button-next',
				//     prevEl: '.testimonial-slider .swiper-button-prev',
				// },
				breakpoints: {
					824: {
						slidesPerView: 2,
						spaceBetween: 20,
					},
					1024: {
						slidesPerView: 3,
						spaceBetween: 20,
					},
					1400: {
						slidesPerView: 4,
						spaceBetween: 30,
					}
				}
			}),
			new Swiper('.testimonial-slider', {
				loop: true,
				centeredSlides: true,
				autoplay: {
					delay: 1000,
					disableOnInteraction: false
				},
				slidesPerView: 2,
				spaceBetween: 10,
				// navigation: {
				//     nextEl: '.testimonial-slider .swiper-button-next',
				//     prevEl: '.testimonial-slider .swiper-button-prev',
				// },
				breakpoints: {
					824: {
						slidesPerView: 4,
						spaceBetween: 20,
					},
					1024: {
						slidesPerView: 5,
						spaceBetween: 30,
					},
					1400: {
						slidesPerView: 6,
						spaceBetween: 40,
					}
				}
			})
		];
	</script>

	<script src="<?= base_url("/assets/js/counter.min.js") ?>"></script>
	<script>
		$(".counterPlugin").each(function() {
			$(this).counter({
				countFrom: 0
			});

			/* $("#counter").counter({
			    autoStart: true, // true/false, default: true
			    duration: 5000, // milliseconds, default: 1500
			    countFrom: 10, // start counting at this number, default: 0
			    countTo: 30, // count to this number, default: 0
			    runOnce: true, // only run the counter once, default: false
			    placeholder: "?", // replace the number with this before counting,
			    // most useful with autoStart: false. default: undefined
			    easing: "easeOutCubic", // see http://gsgd.co.uk/sandbox/jquery/easing
			    // for all available effects, see visual examples:
			    // http://easings.net
			    // default: "easeOutQuad"
			    onStart: function() {}, // callback on start of the counting
			    onComplete: function() {}, // callback on completion of the counting
			    numberFormatter: // function used to format the displayed numbers.
			        function(number) {
			            return "$ " + number;
			        }
			}); */
		});
	</script>
</body>

</html>
