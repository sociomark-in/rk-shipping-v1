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
		<audio controls autoplay>
			<source src="<?= base_url() ?>assets/media/audio.mp3" type="audio/mp3">
			<source src="<?= base_url() ?>assets/media/audio.ogg" type="audio/ogg">
			Your browser does not support the audio element.
		</audio>
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
			<section id="vision">
				<div class="row m-0">
					<div class="col-lg-5 col-md-6 col-12">
						<div class="row m-0 mb-3 align-items-center justify-content-center">
							<div class="col-auto">
								<img src="<?= base_url('assets/media/images/') ?>icon/values.png" height="100" alt="">
							</div>
							<div class="col-md-auto col">
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
							<div class="col-6">
								<div class="row m-0 mb-3 align-items-center">
									<div class="col-auto">
										<img src="<?= base_url('assets/media/images/') ?>icon/vision.png" height="100" alt="">
									</div>
									<div class="col-md col-12">
										<h4>Vision</h4>
									</div>
								</div>
							</div>
							<div class="col-6">
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
							<img src="<?= base_url('assets/media/images/') ?>world-map.jpeg" alt="International Logistics" class="w-100">
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
							<img src="<?= base_url('assets/media/images/') ?>india-map.png" alt="International Logistics" class="w-100">
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
